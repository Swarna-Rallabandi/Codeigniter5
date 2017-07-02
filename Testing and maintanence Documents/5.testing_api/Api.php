<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 use Restserver\Libraries\REST_Controller;
require(APPPATH.'/libraries/REST_Controller.php');
class Api extends REST_Controller
{
 
       public function __construct() {
               parent::__construct();
               $this->load->model('User_model');
 
       }    
       public function index_get(){
           $r = $this->User_model->read();
           $this->response($r); 
       }
       public function user_put(){
           $id = $this->uri->segment(3);
 
           $data = array('antenna_name' => $this->input->get('antenna_name'),
           'reader_name' => $this->input->get('reader_name'),
           'epc' => $this->input->get('epc')
           );
 
            $r = $this->user_model->update($id,$data);
               $this->response($r); 
       }
 
       public function user_post(){
           $data = array('antenna_name' => $this->input->post('antenna_name'),
           'reader_name' => $this->input->post('reader_name'),
           'epc' => $this->input->post('epc')
           );
           $r = $this->user_model->insert($data);
           $this->response($r); 
       }
       public function user_delete(){
           $id = $this->uri->segment(3);
           $r = $this->user_model->delete($id);
           $this->response($r); 
       }
    
 
}
