<?php
App::uses('AppController', 'Controller');
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
	public $uses = array('Contact','Identification','Missingdetail','Person');
	var $components = array('Wizard.Wizard','Session');
	
	public function beforeFilter() 
	{
        $this->Wizard->steps = array('person', 'identification', 'missingdetail','contact','review');
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
        $this->Person->set($this->data);

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
	public function review() {
		return true;
	}
/** 
 * [Wizard Completion Callback] 
 */ 
    function _afterComplete() 
	{ 
       $personData = $this->Session->read('Wizard.complete');
		//print_r($personData);
		
		$persondetails = $personData['person'];
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
		
		
		
		$attchment_data = $persondetails['Person']['picture'];
		if(isset($attchment_data) || is_uploaded_file($attchment_data['tmp_name'])){
			list($fileName,$ext) = explode('.', $attchment_data['name']);	
			
			$date = date('MdY_His');		
				
			$fileName = 'F_MIS_'. $date;
			
			$filefullname = $fileName .'.'. $ext;
			$foldername = WWW_ROOT .'img/missings/';
			//$folder = new Folder();
			//$folder->create($foldername) ;
			$filedestination = $foldername . DS. $filefullname;
			if(move_uploaded_file($attchment_data["tmp_name"], $filedestination))
			{	
				$attchment_url = 'missings/'.$filefullname;
				$persondetails['Person']['picture'] = $attchment_url;
			}else
			{
				$persondetails['Person']['picture'] = 'missings/default.png';
			}						
			
		}else
		{
			$persondetails['Person']['picture'] = 'missings/default.png';
		}
		$tday = date('Y-m-d H:i:s');
		$persondetails['Person']['identification_id'] = $identifyid;
		$persondetails['Person']['contact_id'] = $contactid;
		$persondetails['Person']['missingdetail_id'] = $missingid;
		$persondetails['Person']['created'] = $tday;
		$persondetails['Person']['modified'] = $tday;
		$this->Person->save($persondetails);
		$this->Session->setFlash('<b>Report : </b> Report added success fully','flash/success');
    } 
}
