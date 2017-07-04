<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// This can be removed if you use __autoload() in config.php OR use Modular Extensions
// use namespace
 use Restserver\Libraries\REST_Controller;

/** @noinspection PhpIncludeInspection */
require(APPPATH.'/libraries/REST_Controller.php');
/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          swarna rallabandi
 */
class Api_53 extends REST_Controller
{
 
       public function __construct() {
               parent::__construct();
           // load model
               $this->load->model('Chook_model');
 
       } 
//method for GET shed_53 antenna report based on date selection
//url for antenna_report_get method for json result     
    //http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/antenna_report?date=2017/03/05
    
//Get: method
public function antenna_report_get(){
//date picking format 2017/03/05 or yyyy/mm/dd
$date = $this->input->get('date');
    //if the date is not null call the antenna method from model to select the date
if ($date != "") {
//save the json format result in variable on particular date
$result = $this->Chook_model->show_antenna_data_by_date_53($date);
//if the date is valid or valid format it save the result in array
if ($result != false) {
$data['result_display'] = $result;
//else there is no record in on that date it returns "no record found"
} else {
$data['result_display'] = "No record found !";
}
//else no date mention in url it display 'date field is required'
} else {
    $data['date_error_message'] = "Date field is required";
}    
//finally it displays response 
 $this->response($data); 
       }
    
  
    
//method for GET shed_53 reader report based on date selection
//url for reader_report_get method for json result   
    //http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/reader_report?date=2017/03/05
    
//Get: method      
 public function reader_report_get(){
//date picking format 2017/03/05 or yyyy/mm/dd     
$date = $this->input->get('date');
//if the date is not null call the show_reader_data_by_date_53 method from chook_model to select the date
if ($date != "") {
//save the json format result in variable on particular date
 $result = $this->Chook_model->show_reader_data_by_date_53($date);
//if the date is valid or valid format it save the result in array
if ($result != false) {
$data['result_display'] = $result;
//else there is no record in on that date it returns "no record found"
} else {
$data['result_display'] = "No record found !";
}
//else no date mention in url it display 'date field is required'
} else {
    $data['date_error_message'] = "Date field is required";
}  
//finally it displays response 
    $this->response($data); 
       }
    

//method for GET shed_53 epc report of top 20 records
//url for epc_report_get method for json result  
    
//http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/epc_report?date=2017/03/05
    
//Get: method     
public function epc_report_get() {
//it calls the show_epc_data_53 method from chook_model and stores the data in result variable 
$result = $this->Chook_model->show_epc_data_53();
//if the data base is not empty it returns json result of  epc        
if ($result != false) {
$data['result_display'] = $result;    
//if  the  database is empty it returns 'data base is empty'
} else {
return 'Database is empty !';
}
//finally it gives response     
    $this->response($data); 
}
     

    
   // public function epc_get(){
          // $r = $this->Chook_model->show_epc_data();
          // $this->response($r); 
      // }
      /*
       public function user_post(){
           $data = array('antenna_name' => $this->input->post('antenna_name'),
           'reader_name' => $this->input->post('reader_name'),
           'epc' => $this->input->post('epc')
           );
           $r = $this->user_model->insert($data);
           $this->response($r); 
       }
       */
      
 
}
