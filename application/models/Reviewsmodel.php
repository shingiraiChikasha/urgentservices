<?php class ReviewsModel extends CI_model{

var $table = 'ratings';

public function create($data){
    $this->db->insert($this->table, $data);
}


public function read($id,$company,$service,$user_name,$user_review,$user_ratings){
  $this->db->select('*');
  $this->db->from($this->table); 
  if($id != 'id') $this->db->where('id', $id);
  if($company != 'company') $this->db->where('company', $company);
  if($service != 'service') $this->db->where('service', $service);
  $q=$this->db->get();
  if($q->num_rows() >0){
    foreach($q->result() as $row){
      $data[]=$row;
    }
    // var_dump($data);
    return $data;
  }
}

public function read1($service,$company,$user_name,$user_review,$user_ratings){
  $this->db->select('*');
  $this->db->from($this->table); 
  if($company != 'company') $this->db->where('company', $company);
  if($service != 'service') $this->db->where('service', $service);
  $q=$this->db->get();
  if($q->num_rows() >0){
    foreach($q->result() as $row){
      $data[]=$row;
    }
    return $data;
  }
}

public function read2($company,$service){
  $this->db->select('*');
  $this->db->from($this->table); 
  // if($company != 'company') $this->db->where('company', $company);
  if($service != 'service') $this->db->where('service', $service);
  // var_dump($service);
  $q=$this->db->get();
  $number = 0;
  $average = 0;
  $value = 0;
  if($q->num_rows() >0){
    foreach($q->result() as $row){
      $data[]=$row;
      $value += $row->user_ratings;
      $number++;

    }

    $sum = $number * 10;
    $average = $value / $number;
    
    return round($average,1).'/10';
  }else{
    return 'No ratings';
  }
  
}



public function update($data){
  $this->db->where('id',$data['id']);
  $this->db->update($this->table,$data);
}

public function delete($data){
  $this->db->where('id',$data['id']);
  $this->db->delete($this->table,$data);
}

public function login($username,$password){
  $this->db->select('*');
  $this->db->from($this->table);
  $this->db->where('email',$username);
  $this->db->where('password',$password);
  if($query=$this->db->get()){
    return $query->row_array();
  }
  else{
    return false;
  }
}


public function title($id){
  $q = $this->db
                ->where('id', $id) 
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get($this->table)
                ->result();
  foreach($q as $row){
    return $row->company_name; 
  }
}


}
?>