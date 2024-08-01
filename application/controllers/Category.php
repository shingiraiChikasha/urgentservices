<?php

class Category extends CI_Controller{

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
        if($this->session->userdata('role')=='admin'){
            $data['macategory']=$this->categoriesmodel->read('id','category','subcategory');
            $this->load->view('service-categories',$data);
}else{
    $this->load->view('error-restricted-access');
}
    }
   
    
}

public function add(){
    if($this->session->userdata('role')==''){
        // $this->load->view('error-restricted-access');
        redirect('welcome/login','refresh');
    }else{
        if($this->session->userdata('role')=='admin'){
            $this->load->view('service-categories-add');
        }else{
            $this->load->view('error-restricted-access');
        }
    
}
}

public function create(){
    $config=array(
        array(
            'field'=>'category',
            'label'=>'category',
            'rules'=>'required'
        ),
        array(
            'field'=>'sub_category',
            'label'=>'sub category',
            'rules'=>'required'
        )
    );
    
    
    $this->form_validation->set_rules($config);
    
    if($this->form_validation->run()==FALSE){
        $this->session->set_flashdata('error_msg',validation_errors());
        // var_dump($this->session->flashdata('error_msg'));
        redirect('category/add','refresh');
    }else{

        $data=array(
            'category'=>$this->input->post('category'),
            'sub_category'=>$this->input->post('sub_category'),
        );
        // var_dump($data);
        $this->categoriesmodel->create($data);
       redirect('category','refresh');

        // $this->session->set_flashdata('success_msg','Service order has been created. Our team will shortly reach you.');
        // $this->load->view('order-success');
    }
}

public function view(){
    if($this->session->userdata('role')==''){
        // $this->load->view('error-restricted-access');
        redirect('welcome/login','refresh');
    }elseif($this->session->userdata('role')=='admin'){
    $id=$this->uri->segment(3);
    $data['macategory']=$this->categoriesmodel->read($id,'category','sub_category');
    $this->load->view('service-categories-one',$data);
}else{
        $this->load->view('error-restricted-access');
    }
}

public function delete(){
    if($this->session->userdata('role')==''){
        // $this->load->view('error-restricted-access');
        redirect('admins/logout','refresh');
    }elseif($this->session->userdata('role')=='admin'){
    $data = array(
        'id'=>$this->uri->segment(3)
      );    
      $this->categoriesmodel->delete($data);
      $this->session->set_flashdata('success_msg', 'Category deleted');
      redirect('category/', 'refresh');
    }else{
        $this->load->view('error-restricted-access');
    }
}
public function update(){
    $config = array(
        array(
        'field'=>'category',
        'label'=>'category',
        'rules'=>'required',
        ),
        array(
            'field'=>'sub_category',
            'label'=>'sub category',
            'rules'=>'required',
            ),
        );
        $this->form_validation->set_rules($config);
        $data= array(
            'id'=>$this->input->post('id'),
            'category'=> $this->input->post('category'),
            'sub_category'=> $this->input->post('sub_category'),
           
        );
        if ($this->form_validation->run()==FALSE) {
           $this->session->set_flashdata('error_msg',$validation_errors());
           redirect('category/view/'.$data['id'],'refresh');
        }else {
            $this->categoriesmodel->update($data);
            $this->session->set_flashdata('success_msg','Category updated');
            redirect('category/','refresh');
        }
}

}
?>