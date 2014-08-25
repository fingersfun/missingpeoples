<?php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
/**
 * Reportings Controller
 *
 */
class ReportingsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
	public $uses = array('Person','Contact','Identification','Missingdetail','User');
	var $components = array('Wizard.Wizard','Session','Paginator','ImageResizer','RequestHandler');
	
	public function beforeFilter() 
	{	
	//echo '<pre>';
	//	print_r($this->params);
	//echo '</pre>';
		 parent::beforeFilter();
        // Allow users to register and logout.
		$this->Auth->allow('index', 'viewReport');
		
        $this->Wizard->steps = array('person', 'identification', 'missingdetail','contact');
		
		$wizardData = $this->Wizard->read();
		$this->set(compact('reviewData',$wizardData));
    }
	
	public function isAuthorized($user) {
		// All registered users can add posts
		if ($this->action === 'add') {
			return true;
		}

		// The owner of a post can edit and delete it
		if (in_array($this->action, array('edit', 'delete'))) {
			$postId = (int) $this->request->params['pass'][0];
			if ($this->Post->isOwnedBy($postId, $user['id'])) {
				return true;
			}
		}

		return parent::isAuthorized($user);
	}
	
    public function wizard($step = null) 
	{
        $this->Wizard->process($step);
    }
	public function admin_wizard($step = null) 
	{
        $this->Wizard->process($step);
    }
/**
 * [Wizard Process Callbacks]
 */
	public function _processUser() 
	{
        $this->User->set($this->data);
        if($this->User->validates()) 
		{
            return true;
        }
        return false;
    }
	
    public function _processContact() 
	{
        $this->Contact->set($this->data);
        if($this->Contact->validates()) 
		{
            return true;
        }
        return false;
    }

    public function _processIdentification() 
	{
        $this->Identification->set($this->data);

        if($this->Identification->validates()) 
		{
            return true;
        }
        return false;
    }

    public function _processMissingdetail() 
	{
        $this->Missingdetail->set($this->data);

        if($this->Missingdetail->validates()) 
		{
            return true;
        }
        return false;
    }

    public function _processPerson() 
	{
		$persondata = $this->data;
		$attchmentdata = $this->data['Person']['picture'];
		if(isset($attchmentdata) || is_uploaded_file($attchmentdata['tmp_name'])){
			list($fileName,$ext) = explode('.', $attchmentdata['name']);	
			
			$date = date('MdY_His');		
				
			$fileName = 'F_MIS_'. $date;
			$filefullname = $fileName .'.'. $ext;
			$foldername = WWW_ROOT .'img'. DS .'missings' ;
			$folder = new Folder();
			$folder->create($foldername) ;
			$filedestination = $foldername . DS. $filefullname;
			$maximgwidth = Configure::read('user_img_maximgwidth');
			$maximgheight = Configure::read('user_img_maximgheight');
			if(move_uploaded_file($attchmentdata['tmp_name'], $filedestination))
			{	
				$this->ImageResizer->imageSettings($maximgwidth,$maximgheight,$filedestination);
				$attchment_url = 'missings/'.$filefullname;
				$persondata['Person']['picture'] = $attchment_url;
			}else
			{
				return false;
			}	
		}
		$this->Person->set($persondata);
		$this->Wizard->save('missing',$persondata);
       

        if($this->Person->validates()) 
		{
            return true;
        }
        return false;
    }
	
	public function _processReview() 
	{		
		return true;
	}

	function confirm() 
	{
		
	}

/** 
 * [Wizard Completion Callback] 
 */ 
    function _afterComplete() 
	{ 
       $personData = $this->Session->read('Wizard.complete');
		//print_r($personData);
		//$userdetails = $personData['user'];
		$persondetails = $personData['missing'];
		$identifications = $personData['identification'];
		$missingdetails = $personData['missingdetail'];
		$contactdetails = $personData['contact'];
		/*
		$userdetails['User']['ip_address'] = $this->RequestHandler->getClientIp();
		$userdetails['User']['pwd'] = $userdetails['User']['password'];
		$createddate = date('Y-m-d H:i:s');
		$userdetails['User']['created'] = $createddate;
		$userdetails['User']['modified'] = $createddate;
        if($this->User->save($userdetails))
		{
			$userid = $this->User->id;
		} 
		*/
		if($this->Contact->save($contactdetails))
		{
			$contactid = $this->Contact->id;
		} 
		 
		if($this->Identification->save($identifications))
		{
			$identifyid = $this->Identification->id;
		}
		
		if($this->Missingdetail->save($missingdetails))
		{
			$missingid = $this->Missingdetail->id;
		}
		
		$tday = date('Y-m-d H:i:s');
		$persondetails['Person']['identification_id'] = $identifyid;
		$persondetails['Person']['contact_id'] = $contactid;
		$persondetails['Person']['missingdetail_id'] = $missingid;
		$persondetails['Person']['user_id'] = $this->Session->read('User.id'); //$userid;
		$persondetails['Person']['created'] = $tday;
		$persondetails['Person']['modified'] = $tday;
		$this->Person->save($persondetails);
		$this->Session->setFlash('<b>Report : </b> Report added success fully','flash/success');
    } 
	
	public function index() 
	{
		$this->Person->recursive = 1;	
		$this->Paginator->settings = array(
			'conditions' => array('Person.status' => false),
			'limit' => 5,
			'order' => array('Person.id'=>'DESC')
		);
		$peoples = $this->Paginator->paginate('Person');
		$this->set(compact('peoples',$peoples));
		
	}
	public function viewReport($id) 
	{
		$this->Person->recursive = 1;
		$this->set('report', $this->Person->findById($id));
	}
	public function admin_index() 
	{
		$this->Person->recursive = 1;	
		$this->Paginator->settings = array(
			'conditions' => array('Person.status' => false),
			'limit' => 5,
			'order' => array('Person.id'=>'DESC')
		);
		$peoples = $this->Paginator->paginate('Person');
		$this->set(compact('peoples',$peoples));
		
	}
	public function admin_viewReport($id) 
	{
		$this->Person->recursive = 1;
		$this->set('report', $this->Person->findById($id));
	}
	public function add() {
		if ($this->request->is('post')) {
		
			$attchmentdata = $this->request->data['Person']['picture'];
			if(isset($attchmentdata) || is_uploaded_file($attchmentdata['tmp_name']))
			{
				list($fileName,$ext) = explode('.', $attchmentdata['name']);	
				
				$date = date('MdY_His');		
					
				$fileName = 'F_MIS_'. $date;
				//$this->log($fileName, 'debug');
				$filefullname = $fileName .'.'. $ext;
				$foldername = WWW_ROOT .'img'. DS .'missings' ;
				//$this->log($foldername, 'debug');
				$folder = new Folder();
				$folder->create($foldername) ;
				$filedestination = $foldername . DS. $filefullname;
				//$this->log($filedestination, 'debug');
				$maximgwidth = Configure::read('user_img_maximgwidth');
				$maximgheight = Configure::read('user_img_maximgheight');
				if(move_uploaded_file($attchmentdata['tmp_name'], $filedestination))
				{	
					$attchment_url = 'missings/'.$filefullname;
					$persondetails['Person']['picture'] = $attchment_url;
					//$this->log($filefullname, 'debug');
				}else
				{
					$persondetails['Person']['picture'] = 'missings/default.png';
				}						
				
			}else
			{
				$persondetails['Person']['picture'] = 'missings/default.png';
			}
			$tday = date('Y-m-d H:i:s');
			$persondetails['Person']['created'] = $tday;
			$persondetails['Person']['modified'] = $tday;
			$this->Person->create();
			if ($this->Person->save($persondetails)) {
				$this->Session->setFlash(__('<b>The person has been saved</b>'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$identifications = $this->Person->Identification->find('list');
		$missingdetails = $this->Person->Missingdetail->find('list');
		$contacts = $this->Person->Contact->find('list');
		$this->set(compact('identifications', 'missingdetails','contacts'));
	}
}
