<?php

class Services extends CI_Controller{
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
                $company=$this->session->userdata('id');
        $data['maservices']=$this->servicesmodel->read('id',$company,'category','sub_category','location','price_per_km','service_description');
        $this->load->view('services',$data);
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
            if($this->session->userdata('status')=='Active'){
		$data['macategory1']=$this->categoriesmodel->read1('id','category','sub_category');
        $data['macategory']=$this->categoriesmodel->read('id','category','sub_category');
        $this->load->view('services-add',$data);
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
        $data['masevhisi']=$this->servicesmodel->read($id,'company','category','sub_category','location','price_per_km','service_description');
        $this->load->view('services-one',$data);
    }else{
        $this->load->view('error-restricted-access');
    }
        }
    }

    public function insert(){
        $config=array(
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
            array(
                'field'=>'location',
                'label'=>'location',
                'rules'=>'required',
            ),
            array(
                'field'=>'price',
                'label'=>'price',
                'rules'=>'required',
            ),
            array(
                'field'=>'description',
                'label'=>'description',
                'rules'=>'required',
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error_msg',validation_errors());
        //    $this->add;
           redirect('services/add','refresh');
        }else{
           
            $data=array(
                'company'=>$this->session->userdata('id'),
                'location'=>$this->input->post('location'),
                'category'=>$this->input->post('category'),
                'sub_category'=>$this->input->post('sub_category'),
                
                'price_per_km'=>$this->input->post('price'),
                'service_description'=>$this->input->post('description')
            );
            $this->session->set_flashdata('success_msg','Success');
            $this->servicesmodel->create($data);
            redirect('services/','refresh'); 
        }
    }

    public function update(){
        $config=array(
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
            array(
                'field'=>'location',
                'label'=>'location',
                'rules'=>'required',
            ),
            array(
                'field'=>'price',
                'label'=>'price',
                'rules'=>'required',
            ),
            array(
                'field'=>'description',
                'label'=>'description',
                'rules'=>'required',
            ),
        );

        
        $data=array(
            'id'=>$this->input->post('id'),
            'location'=>$this->input->post('location'),
            'category'=>$this->input->post('category'),
            'sub_category'=>$this->input->post('sub_category'),
            'price_per_km'=>$this->input->post('price'),
            'service_description'=>$this->input->post('description')
        );
       
        
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error_msg',validation_errors());
            redirect('services/view/'.$data['id'],'refresh'); 
        }else{
            $this->session->set_flashdata('success_msg','Success');
            $this->servicesmodel->update($data);
            redirect('services/view/'.$data['id'],'refresh'); 
        }
    }

    public function customer_proceed(){
        $this->load->view('service-order');
    }

    public function order(){
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
            ),
            array(
                'field'=>'reg_number',
                'label'=>'registration number',
                'rules'=>'required'
            ),
            array(
                'field'=>'car_name',
                'label'=>'car name',
                'rules'=>'required'
            ),
            array(
                'field'=>'car_model',
                'label'=>'car model',
                'rules'=>'required'
            ),
            array(
                'field'=>'color',
                'label'=>'color',
                'rules'=>'required'
            )
        );
        
        
        $this->form_validation->set_rules($config);
        
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error_msg',validation_errors());
            // var_dump($this->session->flashdata('error_msg'));
            redirect('services/customer_proceed','refresh');
        }else{
    // var_dump($this->session->userdata('service_id'));
            $data=array(
                'service'=>$this->session->userdata('company_id'),
                'company'=>$this->session->userdata('company'),
                'client_name'=>$this->input->post('name'),
                'phoneNumber'=>$this->input->post('phone'),
                'car_name'=>$this->input->post('car_name'),
                'car_model'=>$this->input->post('car_model'),
                'reg_number'=>$this->input->post('reg_number'),
                'color'=>$this->input->post('color'),
                'quantity'=>$this->input->post('color'),
                'location'=>$this->session->userdata('city'),
                
            );
            // var_dump($data);
            $this->servicesordermodel->create($data);
            $this->session->set_flashdata('success_msg','Thank you for contacting us. Our team will be with you shortly');
             redirect('services/order_success','refresh');
            
        }
    }

    public function order_success(){
        $this->load->view('order-success');
    }

    public function delete(){
        $data = array(
            'id'=>$this->uri->segment(3)
          );    
          $this->servicesmodel->delete($data);
          $this->session->set_flashdata('success_msg', 'Service deleted');
          redirect('services/', 'refresh');
    }

    
}


?>