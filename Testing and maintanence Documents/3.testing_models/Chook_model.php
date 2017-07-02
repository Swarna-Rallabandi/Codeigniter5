<?php 
class Chook_model extends CI_Model{
    function test_main()
    {
        echo "this is model function";
    }
    function insert_data($data){
        $this->data->insert("chookdata",$data);
    }
    function fetch_data(){
        //$query= $this->db->get("chookdata");
        //$query=$this->db->query("SELECT * FROM chookdata ORDER BY id DESC");
        //$this->db->select("*");
        //$this->db->from("chookdata");
        $query =$this->db->get('chookdata',10,50);
        return $query;
    }
     function chook_activity(){
         //"SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?";
        //$query= $this->db->get("chookdata");
        //$query=$this->db->query("SELECT * FROM chookdata ORDER BY id DESC");
       // $this->db->select("*");
        //$this->db->from("chook_activity");
        $query =$this->db->get('chook_activity',10,30);
        return $query;
    }
     function chook_times_01(){
        //$query= $this->db->get("chookdata");
        //$query=$this->db->query("SELECT * FROM chookdata ORDER BY id DESC");
       // $this->db->select("*");
       // $this->db->from("chook_times_01");
        $query =$this->db->get('chook_times_01',10,20);
        return $query;
    }
     function chook_times_02(){
        //$query= $this->db->get("chookdata");
        //$query=$this->db->query("SELECT * FROM chookdata ORDER BY id DESC");
       // $this->db->select("*");
       // $this->db->from("chook_times_02");
        $query =$this->db->get('chook_times_02',10,30);
        return $query;
    }
     function chook_times_03(){
        //$query= $this->db->get("chookdata");
        //$query=$this->db->query("SELECT * FROM chookdata ORDER BY id DESC");
       // $this->db->select("*");
       // $this->db->from("chook_times_03");
        $query =$this->db->get('chook_times_03',10,20);
        return $query;
    }
     function chook_times(){
        //$query= $this->db->get("chookdata");
        //$query=$this->db->query("SELECT * FROM chookdata ORDER BY id DESC");
       // $this->db->select("*");
       // $this->db->from("chook_times");
        $query =$this->db->get('chook_times',10,50);
        return $query;
    }
     function shed_52(){
        //$query= $this->db->get("chookdata");
        //$query=$this->db->query("SELECT * FROM chookdata ORDER BY id DESC");
        //$this->db->select("*");
        //$this->db->from("shed_52");
        $query =$this->db->get('shed_52',10,20);
        return $query;
    }
     function shed_53(){
        //$query= $this->db->get("chookdata");
        //$query=$this->db->query("SELECT * FROM chookdata ORDER BY id DESC");
        //$this->db->select("*");
        //$this->db->from("shed_53");
        $query =$this->db->get('shed_53',10,60);
        return $query;
    }
     function shed_53a_times_02(){
        //$query= $this->db->get("chookdata");
        //$query=$this->db->query("SELECT * FROM chookdata ORDER BY id DESC");
        //$this->db->select("*");
       // $this->db->from("shed_53a_times_02");
        $query =$this->db->get('shed_53a_times_02',20,30);
        return $query;
    }
     function shed_53a_times_03(){
        //$query= $this->db->get("chookdata");
        //$query=$this->db->query("SELECT * FROM chookdata ORDER BY id DESC");
       // $this->db->select("*");
        //$this->db->from("shed_53a_times_03");
        $query =$this->db->get('shed_53a_times_03',10,20);
        return $query;
    }
     function shed_53a_times(){
        //$query= $this->db->get("chookdata");
        //$query=$this->db->query("SELECT * FROM chookdata ORDER BY id DESC");
        //$this->db->select("*");
        //$this->db->from("shed_53a_times");
        $query =$this->db->get('shed_53a_times',10,50);
        return $query;
    }
      function shed_53a(){
        //$query= $this->db->get("chookdata");
        //$query=$this->db->query("SELECT * FROM chookdata ORDER BY id DESC");
        //$this->db->select("*");
        //$this->db->from("shed_53a");
        $query =$this->db->get('shed_53a',10,20);
        return $query;
    }
    
   
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