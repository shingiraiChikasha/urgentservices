<?php class CategoriesModel extends CI_model{

var $table = 'category';

public function create($data){
    $this->db->insert($this->table, $data);
}


public function read($id,$category,$sub_category){
  $this->db->select('*');
  $this->db->from($this->table); 
  if($id != 'id') $this->db->where('id', $id);
  $q=$this->db->get();
  if($q->num_rows() >0){
    foreach($q->result() as $row){
      $data[]=$row;
    }
    return $data;
  }
}

public function read1($id,$category,$sub_category){
  $this->db->select('*');
  $this->db->from($this->table); 
  if($id != 'id') $this->db->where('id', $id);
  if($category != 'category') $this->db->where('category', $category);
  if($sub_category != 'sub_category') $this->db->where('sub_category', $sub_category);
  $q=$this->db->get();
  if($q->num_rows() >0){
    foreach($q->result() as $row){
      $data[]=$row;
    }
    return $data;
  }
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

public function delete($data){
  $this->db->where('id',$data['id']);
  $this->db->delete($this->table,$data);
}
public function update($data){
  $this->db->where('id', $data['id']);
  $this->db->update($this->table, $data);
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

public function subCategoryTitle($id){
  $q = $this->db
                ->where('id', $id) 
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get($this->table)
                ->result();
  foreach($q as $row){
    return $row->sub_category; 
  }
}


}
?>