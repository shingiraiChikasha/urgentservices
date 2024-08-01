<?php

class Orders extends CI_Controller{

public function __construct(){
    parent::__construct();
    include('_libraries.php');
    include('_models.php');
}

public function index(){
    if($this->session->userdata('role')==''){
        // $this->load->view('error-restricted-access');
        redirect('welcome/login','refresh');
    }else{
        if($this->session->userdata('status')=='Active'){
            // $company=$this->session->userdata('id');
            $data['maorders']=$this->servicesordermodel->read('id','company','quantity','client_name','phoneNumber','car_name','car_model','reg_number','color','mdt');
            $this->load->view('company-service-orders',$data);
}else{
    $this->load->view('error-restricted-access');
}
    }
}
   


public function view(){
    if($this->session->userdata('role')==''){
        // $this->load->view('error-restricted-access');
        redirect('welcome/login','refresh');
    }else{
        if($this->session->userdata('status')=='Active'){
    $id=$this->uri->segment(3);
    $data['maorder']=$this->servicesordermodel->read($id,'company','quantity','client_name','phoneNumber','car_name','car_model','reg_number','color','mdt');
    $this->load->view('company-service-orders-one',$data);
    // var_dump($data);
}else{
    $this->load->view('error-restricted-access');
}
    }
}

public function update(){
    $config = array(
        array(
        'field'=>'status',
        'label'=>'status',
        'rules'=>'required',
        ),
        );
        $this->form_validation->set_rules($config);
        $data= array(
            'id'=>$this->input->post('id'),
            'status'=> $this->input->post('status'),
           
        );
        if ($this->form_validation->run()==FALSE) {
           $this->session->set_flashdata('error_msg',$validation_errors());
           redirect('orders/view/'.$data['id'],'refresh');
        }else {
            $this->servicesordermodel->update($data);
            $this->session->set_flashdata('success_msg','Status updated');
            redirect('orders/','refresh');
        }
}

}

?>