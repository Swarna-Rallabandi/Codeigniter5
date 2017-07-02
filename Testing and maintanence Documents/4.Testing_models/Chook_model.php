<?php 
class Chook_model extends CI_Model{
      
   
    public function show_all_data() {
//$this->db->select('*');
//$this->db->from('shed_53');
//$query = $this->db->get();
         $query =$this->db->get('shed_53',10,60);
        //return $query;
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}

public function show_data_by_date($date) {
$condition = "time_stamp =" . "'" . $date . "'";
$this->db->select('*');
$this->db->from('shed_53');
$this->db->where($condition);
$query = $this->db->get();
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}
    
}
?>