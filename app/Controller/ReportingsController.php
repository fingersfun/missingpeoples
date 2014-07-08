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
	public $uses = array('Person','Contact','Identification','Missingdetail');
	var $components = array('Wizard.Wizard','Session');
	
	public function beforeFilter() 
	{
        $this->Wizard->steps = array('person', 'identification', 'missingdetail','contact');
		//$this->Wizard->wizardAction = '/reportings/wizard/uploadstyle';
		//$this->Wizard->completeUrl = '/reportings/confirm'; 
		
		$wizardData = $this->Wizard->read();
		$this->set(compact('reviewData',$wizardData));
    }

    public function wizard($step = null) 
	{
        $this->Wizard->process($step);
    }
	
	/**
 * [Wizard Process Callbacks]
 */
    public function _processContact() 
	{
        $this->Contact->set($this->data);
       // $this->User->set($this->data);

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
			$this->log($fileName, 'debug');
			$filefullname = $fileName .'.'. $ext;
			$foldername = WWW_ROOT .'images'. DS .'missings' ;
			$this->log($foldername, 'debug');
			$folder = new Folder();
			$folder->create($foldername) ;
			$filedestination = $foldername . DS. $filefullname;
			$this->log($filedestination, 'debug');
			if(move_uploaded_file($attchmentdata['tmp_name'], $filedestination))
			{	
				$attchment_url = 'images/missings/'.$filefullname;
				$persondata['Person']['picture'] = $attchment_url;
				$this->log($filefullname, 'debug');
			}else
			{
				//$this->data['Person']['picture'] = 'images/missings/default.png';
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
		//$wizardData = $this->Wizard->read();
		//$wizardData = $this->Session->read();
		//$this->set(compact('wizardData',$wizardData));
		//echo '<pre>';
		//print_r($this->$wizardData);
		//echo '</pre>';
		
		return true;
	}
	
	/*
	public function review() 
	{
		$wizardData = $this->Session->read();
		$this->set(compact('wizardData',$wizardData));
		echo '<pre>';
		//print_r($this->$wizardData);
		
		//print_r($this->wizard->read());
		$email = $this->Wizard->read('person.Person.dob');
		print_r($email);
		print_r($this->Session->read());
		echo '</pre>';
		
		return true;
	}
	*/
	function confirm() 
	{
		
	}
	/*
	public function review() {
		return true;
	}
	*/
/** 
 * [Wizard Completion Callback] 
 */ 
    function _afterComplete() 
	{ 
       $personData = $this->Session->read('Wizard.complete');
		//print_r($personData);
		
		$persondetails = $personData['missing'];
		$identifications = $personData['identification'];
		$missingdetails = $personData['missingdetail'];
		$contactdetails = $personData['contact'];
		
        
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
		/*
		$this->log($persondetails, 'debug');
		
		$attchmentdata = $persondetails['Person']['picture'];
		
		$this->log($attchmentdata, 'debug');
		if(isset($attchmentdata) || is_uploaded_file($attchmentdata['tmp_name'])){
			list($fileName,$ext) = explode('.', $attchmentdata['name']);	
			
			$date = date('MdY_His');		
				
			$fileName = 'F_MIS_'. $date;
			$this->log($fileName, 'debug');
			$filefullname = $fileName .'.'. $ext;
			$foldername = WWW_ROOT .'images'. DS .'missings' ;
			$this->log($foldername, 'debug');
			$folder = new Folder();
			$folder->create($foldername) ;
			$filedestination = $foldername . DS. $filefullname;
			$this->log($filedestination, 'debug');
			if(move_uploaded_file($attchmentdata['tmp_name'], $filedestination))
			{	
				$attchment_url = 'images/missings/'.$filefullname;
				$persondetails['Person']['picture'] = $attchment_url;
				$this->log($filefullname, 'debug');
			}else
			{
				$persondetails['Person']['picture'] = 'images/missings/default.png';
			}						
			
		}else
		{
			$persondetails['Person']['picture'] = 'images/missings/default.png';
		}
		*/
		$tday = date('Y-m-d H:i:s');
		$persondetails['Person']['identification_id'] = $identifyid;
		$persondetails['Person']['contact_id'] = $contactid;
		$persondetails['Person']['missingdetail_id'] = $missingid;
		$persondetails['Person']['created'] = $tday;
		$persondetails['Person']['modified'] = $tday;
		$this->Person->save($persondetails);
		$this->Session->setFlash('<b>Report : </b> Report added success fully','flash/success');
    } 
	
	public function index() 
	{
		$this->Person->recursive = 1;
		$this->set('peoples', $this->paginate());
	}
	public function add() {
		if ($this->request->is('post')) {
		
			$attchmentdata = $this->request->data['Person']['picture'];
			if(isset($attchmentdata) || is_uploaded_file($attchmentdata['tmp_name']))
			{
				list($fileName,$ext) = explode('.', $attchmentdata['name']);	
				
				$date = date('MdY_His');		
					
				$fileName = 'F_MIS_'. $date;
				$this->log($fileName, 'debug');
				$filefullname = $fileName .'.'. $ext;
				$foldername = WWW_ROOT .'images'. DS .'missings' ;
				$this->log($foldername, 'debug');
				$folder = new Folder();
				$folder->create($foldername) ;
				$filedestination = $foldername . DS. $filefullname;
				$this->log($filedestination, 'debug');
				if(move_uploaded_file($attchmentdata['tmp_name'], $filedestination))
				{	
					$attchment_url = 'images/missings/'.$filefullname;
					$persondetails['Person']['picture'] = $attchment_url;
					$this->log($filefullname, 'debug');
				}else
				{
					$persondetails['Person']['picture'] = 'images/missings/default.png';
				}						
				
			}else
			{
				$persondetails['Person']['picture'] = 'images/missings/default.png';
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
