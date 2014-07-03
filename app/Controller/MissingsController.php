<?php
App::uses('AppController', 'Controller');
/**
 * Missings Controller
 *
 */
class MissingsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
	public $uses = array('Contact','Identification','Missingdetail','People');
	var $components = array('Wizard.Wizard','Session');
	
	public function beforeFilter() 
	{
        $this->Wizard->steps = array('contact', 'identification', 'missingdetail', 'people');
    }

    public function wizard($step = null) 
	{
        $this->Wizard->process($step);
    }
	
	/**
 * [Wizard Process Callbacks]
 */
    public function processContact() 
	{
        $this->Contact->set($this->data);
       // $this->User->set($this->data);

        if($this->Contact->validates()) 
		{
            return true;
        }
        return false;
    }

    public function processIdentification() 
	{
        $this->Identification->set($this->data);

        if($this->Identification->validates()) 
		{
            return true;
        }
        return false;
    }

    public function processMissingdetail() 
	{
        $this->Missingdetail->set($this->data);

        if($this->Missingdetail->validates()) 
		{
            return true;
        }
        return false;
    }

    public function processPeople() 
	{
        $this->People->set($this->data);

        if($this->People->validates()) 
		{
            return true;
        }
        return false;
    }
	public function report()
	{
		
	}
}
