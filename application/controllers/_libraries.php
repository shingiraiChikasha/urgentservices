<?php
$this->load->library('session');
$this->load->helper(array('form', 'url', 'email'));
    $this->load->database();
    $this->load->driver('cache');
    
    $this->load->library('form_validation');

//use of associative array 
$this->seshion=array(
'system_name'=>'Zimbabwe Marketplace',
'contact'=>'+263782572660',
'address'=>'4894 Mkoba 15 Gweru',

);

?>