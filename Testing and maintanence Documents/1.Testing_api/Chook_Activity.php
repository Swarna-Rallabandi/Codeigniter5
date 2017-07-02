<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Chook_Activity extends REST_Controller{
       function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('Chook_model'); // load model
}
    public function index(){
        $this->load->model("Chook_model");
        $data["chook_activity"]=$this->Chook_model->chook_activity();
       
        $this->load->view('templates/header');
        $this->load->view('chook_activity/index',$data);
        $this->load->view('templates/footer');
    }
    public function find_get($id){
        echo 'hello '.$id;
    }
    public function index_post(){
        
    }
    public function index_put(){
        
    }
    public function index_delete(){
        
}
}