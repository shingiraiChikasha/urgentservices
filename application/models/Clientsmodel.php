<?php
class ClientsModel extends CI_model{
    
    var $table = 'clients';

public function create($data){
    $this->db->insert($this->table,$data);
}

public function read($id){
    $this->db->select('*');
  $this->db->from($this->table); 
  if($id != 'id') $this->db->where('id', $id);
//   if($status != 'status') $this->db->where('status', $status);
  $q=$this->db->get();
  if($q->num_rows() >0){
    foreach($q->result() as $row){
      $data[]=$row;
    }
    return $data;
  }
}

public function update($data){
    $this->db->where('id', $data['id']);
    $this->db->update($this->table, $data);
  }

}

?>