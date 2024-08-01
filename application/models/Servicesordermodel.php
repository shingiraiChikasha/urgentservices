<?php 
class ServicesorderModel extends CI_model{

var $table='service_orders';


public function create($data){

    $this->db->insert($this->table,$data);

}

public function read($id,$company,$quantity,$client_name,$phoneNumber,$car_name,$car_model,$reg_number,$color,$mdt){
    $this->db->select('*');
    $this->db->from($this->table); 
    if($id != 'id') $this->db->where('id', $id); 
    if($company != 'company') $this->db->where('company', $company); 
    if($quantity != 'quantity') $this->db->where('quantity', $quantity); 
    if($phoneNumber != 'phoneNumber') $this->db->where('phoneNumber', $phoneNumber); 
    if($client_name != 'client_name') $this->db->where('client_name', $client_name); 
    if($car_name != 'car_name') $this->db->where('car_name', $car_name);
    if($color != 'color') $this->db->where('color', $color);
    if($reg_number != 'reg_number') $this->db->where('reg_number', $reg_number);
    if($mdt != 'mdt') $this->db->where('mdt', $mdt);
    $this->db->order_by('mdt','DESC');
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

public function delete($data){
  $this->db->where('id', $data['id']);
  $this->db->delete($this->table, $data);
}

public function title($id){
  $q = $this->db
                ->where('id', $id) 
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get($this->table)
                ->result();
  foreach($q as $row){
    return $row->category.':'.$row->sub_category; 
  }
}

}

?>