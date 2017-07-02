<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';
// use namespace
use Restserver\Libraries\REST_Controller;
/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author         Swarna Rallabani
 */

class Shed_53 extends REST_Controller{
      function __construct($config = 'rest'){
            parent::__construct($config);
   $this->load->database(); // load database
   $this->load->model('Chook_model'); // load model
}
//method for loading shed_53/index_53 view    
//http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/Shed_53/index_get     
//Get: method
    
    public function index_get() {
        
       {
            //load url
        $this->load->helper('url');
            //loading shed_53/index_53 view 
        $this->load->view('shed_53/index_53');
    }
}
 
 
    }


     

   
       