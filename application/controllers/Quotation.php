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
    $id=$this->input->post('service');
    $company=$this->input->post('company');
    $this->session->set_userdata('company_id',$id);
    $this->session->set_userdata('company',$company);
    // var_dump($id);
    // var_dump($company);
    $this->load->view('quotation-details');
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
        // var_dump($this->session->flashdata('error_msg'));
        redirect('quotation/add','refresh');
    }else{
        
        $data=array(
            'service'=>$this->input->post('service'),
            'name'=>$this->input->post('name'),
            'phoneNumber'=>$this->input->post('phone'),
            'email'=>$this->input->post('email'),
         );
        // var_dump($data);
        $this->clientsmodel->create($data);
        $data=$this->clientsmodel->read('id');
        $this->session->set_userdata('id',$data);
        $this->load->view('quotation');

        // $this->session->set_flashdata('success_msg','Service order has been created. Our team will shortly reach you.');
        // $this->load->view('order-success');
    }
}


// public function push_file()
// {
//         $file = $this->uploadmodel->getById($file_id); //getting all the file details
//                                                       //for $file_id (all details are stored in DB)
//         $data = file_get_contents($file->full_path); // Read the file's contents
//         $name = $file->file_name;;

//         force_download($name, $data);
    
// }

// public function update(){
//     $config=array(
//         array(
//             'field'=>'name',
//             'label'=>'name',
//             'rules'=>'required'
//         ),
//         array(
//             'field'=>'phone',
//             'label'=>'phone',
//             'rules'=>'required'
//         ),
//         array(
//             'field'=>'email',
//             'label'=>'email',
//             'rules'=>'required|valid_email'
//         )
//     );
    
    
//     $this->form_validation->set_rules($config);
    
//     if($this->form_validation->run()==FALSE){
//         $this->session->set_flashdata('error_msg',"All fields are required");
//     }else{

//         $data=array(
//             'name'=>$this->input->post('name'),
//             'phoneNumber'=>$this->input->post('phone'),
//             'email'=>$this->input->post('email'),
//         );

//         $this->clientsmodel->create($data);
//         $data['madetails']=$this->usersmodel->read('id','company_name','hq','telephone','email','whatsapp');
//         $this->load->view('quotation');
//     }
// }

public function customer_proceed(){
    $data=array(
        'status'=>'confirmed',
    );

    // $this->clientsmodel->update($data);
    $this->session->set_flashdata('success_msg','Service order has been created. Our team will shortly reach you.');
    $this->load->view('order-success'); 
}

}
?>