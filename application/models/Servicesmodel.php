<?php 
class ServicesModel extends CI_model{

var $table='service';


public function create($data){

    $this->db->insert($this->table,$data);

}

public function read($id,$company,$category,$sub_category,$location,$price_per_km,$service_description){
    $this->db->select('*');
    $this->db->from($this->table); 
    if($id != 'id') $this->db->where('id', $id); 
    if($company != 'company') $this->db->where('company', $company); 
    if($category != 'category') $this->db->where('category', $category); 
    if($sub_category != 'sub_category') $this->db->where('sub_category', $sub_category); 
    if($price_per_km != 'price_per_km') $this->db->where('price_per_km', $price_per_km); 
    if($location != 'location') $this->db->where('location', $location); 
    if($service_description != 'service_description') $this->db->where('service_description', $service_description);
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
    return $row->category; 
  }
}

public function company_name($id){
  $q = $this->db
                ->where('id', $id) 
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get($this->table)
                ->result();
  foreach($q as $row){
    return $row->company; 
  }
}

public function logo($id){
  $q = $this->db
                ->where('id', $id) 
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get($this->table)
                ->result();
  foreach($q as $row){
    return $row->link; 
  }
}

public function address($id){
  $q = $this->db
                ->where('id', $id) 
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get($this->table)
                ->result();
  foreach($q as $row){
    return $row->hq; 
  }
}
public function telephone($id){
  $q = $this->db
                ->where('id', $id) 
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get($this->table)
                ->result();
  foreach($q as $row){
    return $row->telephone; 
  }
}

public function category($id){
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

public function price($id){
  $q = $this->db
                ->where('id', $id) 
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get($this->table)
                ->result();
  foreach($q as $row){
    return $row->price_per_km; 
  }
}

}

?>