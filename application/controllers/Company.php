<?php

class Company extends CI_Controller{
    
    public function __construct(){
parent::__construct();
include('_models.php');
include('_libraries.php');
    }

    public function index(){
        // $data['madetails']=$this->servicesmodel->read();
        $id=$this->input->post('service');
        $company=$this->input->post('company');
        $this->session->set_userdata('service',$id);
        $this->session->set_userdata('company1',$company);
        // $service=$this->session->userdata('service');
        // $company=$this->session->userdata('company');
        $data['maratings']=$this->reviewsmodel->read1($id,$company,'user_name','user_review','user_ratings');
        $this->load->view('company-profile',$data);
    }

    public function view(){
        if($this->session->userdata('role')==''){
            // $this->load->view('error-restricted-access');
            redirect('admins/login','refresh');
        }else{
        $id=$this->uri->segment(3);
        $data['madetails']=$this->usersmodel->read($id,'company_name','hq','licence_number','status','telephone','email','whatsapp');
        $this->load->view('company-one',$data);
        }
    }

    public function reviews(){
        $config = array(
			array(
			'field'=>'zita',
			'label'=>'name',
			'rules'=>'required',
			),
			array(
				'field'=>'email',
				'label'=>'email',
				'rules'=>'required|valid_email'
			),
			array(
				'field'=>'reply',
				'label'=>'reply',
				'rules'=>'required'
			),
			array(
				'field'=>'rating',
				'label'=>'ratings',
				'rules'=>'required'
            ),
			
			);

            $this->form_validation->set_rules($config);
            
            if ($this->form_validation->run()==FALSE) {
           $this->session->set_flashdata('error_msg',validation_errors());

               redirect('company/','refresh');
            }else {
                $data= array(
                    'company'=>$this->input->post('company'),
                    'user_name'=> $this->input->post('zita'),
                    'user_email'=>$this->input->post('email'),
                    'user_review'=>$this->input->post('reply'),
                    'user_ratings'=>$this->input->post('rating'),
                    'service'=>$this->session->userdata('service'),
                );
                $this->reviewsmodel->create($data);
                $this->session->set_flashdata('success_msg','Comment recorded.');
                redirect('welcome/','refresh');
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
               redirect('company/view/'.$data['id'],'refresh');
            }else {
                $this->usersmodel->update($data);
                $this->session->set_flashdata('success_msg','Status updated');
                redirect('company/view_all','refresh');
            }
    }

    public function view_all(){
        if($this->session->userdata('role')==''){
            // $this->load->view('error-restricted-access');
            redirect('admins/login','refresh');
        }else{
            // $id=
        $data['macompany']=$this->usersmodel->read('id','company_name','hq','licence_number','status','telephone','email','whatsapp');
        $this->load->view('companies',$data);
        }
    }

    public function delete(){
        if($this->session->userdata('role')==''){
            // $this->load->view('error-restricted-access');
            redirect('admins/login','refresh');
        }else{
        $data = array(
            'id'=>$this->uri->segment(3)
          );    
          $this->usersmodel->delete($data);
          $this->session->set_flashdata('success_msg', 'Company deleted');
          redirect('company/view_all', 'refresh');
        }
    }

    public function view_reviews(){
        $company=$this->session->userdata('id');
        // var_dump($company);
        $data['maratings']=$this->reviewsmodel->read('id',$company,'service','user_name','user_review','user_ratings');
        //  var_dump($data['maratings']);
        $this->load->view('company-reviews',$data);
    }
}

?>