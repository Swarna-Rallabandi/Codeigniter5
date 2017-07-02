<?php
class Post_model extends CI_Model{
    
    //create get post method
    public function get_posts(){
        //$this->load->database(); //load database libraries
        //$q= $this->db->get('chook_activity');
        $this->db->select("event_id,antenna_name,peak_rssi,epc,reader_name,tag_event");
  $this->db->from('chook_activity');
  $query = $this->db->get();
  return $query->result();
}
 
}
?>
