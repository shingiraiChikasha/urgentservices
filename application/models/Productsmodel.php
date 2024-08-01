<?php 

class ProductsModel extends CI_model{

var $table = 'users';

public function search($data){
  $this->db->select('*');
  $this->db->from($this->table);
  $this->db->where('name',$data);
  $query=$this->db->get();

  return $query;
}
}
?>