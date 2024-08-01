<?php class SessionsModel extends CI_model{

var $table = 'session_logs';

public function create($data){
    $this->db->insert($this->table, $data);

    // $q = $this->db
    //               ->where('sig',$data['sig']) 
    //               ->order_by('id', 'DESC')
    //               ->limit(1)
    //               ->get($this->table)
    //               ->result();
    // foreach($q as $row){
    //   return $row->id; 
    // }
}

public function read($id, $user, $role, $sd, $ed){
    $this->db->select('*');
    $this->db->from($this->table); 
    if($id != 'id') $this->db->where('id', $id); 
    if($user != 'user') $this->db->where('user', $user); 
    if($role != 'role') $this->db->where('role', $role); 
    if($sd != 'sd') $this->db->where('start_time >=', $sd); 
    if($ed != 'ed') $this->db->where('start_time <=', $ed); 
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

public function closeOpenSessions($data){
    $this->db->where('user', $data['user']);
    $this->db->where('role', 'owner');
    $this->db->where('end_time', '0000-00-00 00:00:00');
    $this->db->update($this->table, $data);
}

public function openSession($data){
    $this->db->insert($this->table, $data);
}
}

?>