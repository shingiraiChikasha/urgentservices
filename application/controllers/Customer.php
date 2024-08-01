<?php

class Quotation extends CI_Controller{

public function __construct(){
    parent::__construct();
    include('_libraries.php');
    include('_models.php');
}

public function index(){
    
}

public function add(){
    $id=$this->input->post('id');
    var_dump($id);
    $this->load->view('quotation-details',$id);
}

public function create(){
    $config=array(
        array(
            'field'=>'name',
            'label'=>'name',
            'rules'=>'required'
        ),
        array(
            'field'=>'phone',
            'label'=>'phone',
            'rules'=>'required|regex_match[/^[0-9]{10}$/]'
        ),
        array(
            'field'=>'email',
            'label'=>'email',
            'rules'=>'required|valid_email'
        )
    );
    
    
    $this->form_validation->set_rules($config);
    
    if($this->form_validation->run()==FALSE){
        $this->session->set_flashdata('error_msg',validation_errors());
        redirect('quotation/add','refresh');
    }else{

        $data=array(
            'service'=>$this->session->userdata('service_id'),
            'name'=>$this->input->post('name'),
            'phoneNumber'=>$this->input->post('phone'),
            'email'=>$this->input->post('email'),
        );
        // var_dump($this->session->userdata('id'));
        $this->clientsmodel->create($data);
        $this->load->view('quotation');
    }
}


public function update(){
    $config=array(
        array(
            'field'=>'name',
            'label'=>'name',
            'rules'=>'required'
        ),
        array(
            'field'=>'phone',
            'label'=>'phone',
            'rules'=>'required'
        ),
        array(
            'field'=>'email',
            'label'=>'email',
            'rules'=>'required|valid_email'
        )
    );
    
    
    $this->form_validation->set_rules($config);
    
    if($this->form_validation->run()==FALSE){
        $this->session->set_flashdata('error_msg',"All fields are required");
    }else{

        $data=array(
            'name'=>$this->input->post('name'),
            'phoneNumber'=>$this->input->post('phone'),
            'email'=>$this->input->post('email'),
        );

        $this->clientsmodel->create($data);
        $data['madetails']=$this->usersmodel->read('id','company_name','hq','telephone','email','whatsapp');
        $this->load->view('quotation');
    }
}


}

?>