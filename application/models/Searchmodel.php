<?php
class SearchModel extends CI_model{
    var $table='service';

    public function search($problem,$city){
        $data=$this->db->query("SELECT * FROM ".$this->table. " WHERE location like '%$city%' AND sub_category like '%$problem%' ");
         return $data->result();
    }

    
}
?>