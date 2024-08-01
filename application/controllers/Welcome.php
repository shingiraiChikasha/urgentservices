<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		include('_models.php');
		include('_libraries.php');
	  }
	
	public function index(){ 
		$this->session->unset_userdata('logo'); 
		$this->session->unset_userdata('address'); 
		$this->session->unset_userdata('telephone'); 
		$this->session->unset_userdata('service_id'); 
		$this->session->unset_userdata('services_id'); 
		$this->session->unset_userdata('company_id'); 
		$this->session->unset_userdata('company'); 
		$this->session->unset_userdata('location'); 
		$this->session->unset_userdata('price'); 
		$this->session->unset_userdata('subcategory');
		$data['macategory']=$this->servicesmodel->read('id','company','category','sub_category','location','price_per_km','service_description');
		$data['macategory1']=$this->categoriesmodel->read1('id','category','sub_category');
		$data['macompany']=$this->usersmodel->read('id','company_name','hq','licence_number','status','telephone','email','whatsapp');
		$this->load->view('landing',$data);
	}

	public function dashboard(){
		if($this->session->userdata('role')==''){
            // $this->load->view('error-restricted-access');
            $this->login();
        }else{
			$company=$this->session->userdata('id');
        $data['maservices']=$this->servicesmodel->read('id',$company,'category','sub_category','location','price_per_km','description');
		$this->load->view('dashboard',$data);
		}
	}

	public function search(){

		$this->session->unset_userdata('logo'); 
		$this->session->unset_userdata('address'); 
		$this->session->unset_userdata('telephone'); 
		$this->session->unset_userdata('service_id'); 
		$this->session->unset_userdata('services_id'); 
		$this->session->unset_userdata('company_id'); 
		$this->session->unset_userdata('company'); 
		$this->session->unset_userdata('location'); 
		$this->session->unset_userdata('price'); 
		$this->session->unset_userdata('subcategory');
		$config = array(
			array(
			'field'=>'problem',
			'label'=>'problem',
			'rules'=>'required',
			),
			array(
				'field'=>'city',
				'label'=>'city',
				'rules'=>'required'
			)
			);



			$this->form_validation->set_rules($config);

			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('error_msg', validation_errors());
    			redirect('welcome/', 'refresh');
			}else {
		$data['macategory1']=$this->categoriesmodel->read1('id','category','sub_category');
				$data['macategory']=$this->servicesmodel->read('id','company','category','sub_category','location','price_per_km','service_description');
		$data['macompany']=$this->usersmodel->read('id','company_name','hq','licence_number','status','telephone','email','whatsapp');
		$this->session->set_userdata('city',$this->input->post('city')); 
		$problem=$this->input->post('problem');
        $city=$this->input->post('city');
		// var_dump($problem);
		$data['maresults'] = $this->searchmodel->search($problem,$city);
		$this->load->view('search',$data);
			}

		
	}

	public function login(){
		$this->load->view('login');
	}

	public function login_user(){
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));

		$data=$this->usersmodel->login($email,$password);

		if ($data) {
			$this->session->set_userdata('id', $data['id']);
      		$this->session->set_userdata('email', $data['email']);
			  $this->session->set_userdata('company_name', $data['company_name']);
			  $this->session->set_userdata('hq', $data['hq']);
			  $this->session->set_userdata('telephone', $data['telephone']);
			  $this->session->set_userdata('role', 'user');
			$this->session->set_userdata('link',$data['link']);
			$this->session->set_userdata('whatsapp',$data['whatsapp']);
			$this->session->set_userdata('status',$data['status']);
			// $this->session->set_userdata('phone',$data['phone']);

			$login_data = array(
				'ip'=>$this->input->ip_address(),
				'user'=>$this->session->userdata('id'),
				'role'=>$this->session->userdata('role'),
				'start_time' => date('Y-m-d H:i:s')
			  );
		
			  $logout_data = array(
				'user'=>$this->session->userdata('id'),
				'role'=>$this->session->userdata('role'),
				'end_time' => date('Y-m-d H:i:s') 
			  );
		
			  //update unclosed logs
			  $this->sessionsmodel->closeOpenSessions($logout_data);  
		
			  //insert new logged in log 
			  $this->sessionsmodel->openSession($login_data);
			
			  redirect('welcome/dashboard','refresh');
		}else {
			$this->session->set_flashdata('error_msg', 'Wrong Username or password');
			$this->login(); 
		}
		
	}

	public function logout(){
		$logout_data = array(
			'user'=>$this->session->userdata('id'),
			'role'=>$this->session->userdata('role'),
			'end_time' => date('Y-m-d H:i:s') 
		  );
		$this->sessionsmodel->closeOpenSessions($logout_data);  
		$this->cache->clean();
	
		$this->session->sess_destroy();
		redirect('welcome/login', 'refresh'); 
}

	public function register(){
		$this->load->view('register');
	}

	// public function search(){
	// 	$data=$this->input->post('search');
	// 	$data['searching']=$this->productsmodel->search('fullname');
	// 	$this->load->view('login',$data);
	// }

	public function insert(){

		$link = time().$_FILES['thefile']['name'];
    $config['file_name'] = $link; 
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'jpg|png';
    // $config['max_size']             = 100;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;
    $this->load->library('upload', $config);
    // $this->session->set_flashdata('success_msg', 'Collateral item successfully added ');
// var_dump($link);
    if ( ! $this->upload->do_upload('thefile')){
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('error_msg', $this->upload->display_errors());
     redirect('welcome/register', 'refresh');
    }

      $data2 = array('upload_data' => $this->upload->data());  
      $upload_data = $data2['upload_data'];

	  
		$config = array(
			array(
			'field'=>'company_name',
			'label'=>'company name',
			'rules'=>'required',
			),
			array(
				'field'=>'hq',
				'label'=>'hq',
				'rules'=>'required'
			),
			array(
				'field'=>'telephone',
				'label'=>'telephone',
				'rules'=>'required|regex_match[/^[0-9]{10}$/]'
			),
			array(
				'field'=>'email',
				'label'=>'email',
				'rules'=>'required|is_unique[user_details.email]|valid_email'
			),
			array(
				'field'=>'whatsapp',
				'label'=>'whatsapp number',
				'rules'=>'required'
			),
			array(
				'field'=>'password',
				'label'=>'password',
				'rules'=>'required'
			),
			array(
				'field'=>'confirm_password',
				'label'=>'confirm password',
				'rules'=>'required'
			)
			
			);



			$this->form_validation->set_rules($config);

			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('error_msg', validation_errors());
    			redirect('welcome/register', 'refresh');
			}elseif($this->input->post('password')!=$this->input->post('confirm_password')){
				$this->session->set_flashdata('error_msg', 'Your 2 password do not match');
    			redirect('welcome/register', 'refresh');
			}
			else {
				$data=array(
					'company_name'=>$this->input->post('company_name'),
					'hq'=>$this->input->post('hq'),
					'licence_number'=>$this->input->post('licence_number'),
					'telephone'=>$this->input->post('telephone'),
					'email'=>$this->input->post('email'),
					'whatsapp'=>$this->input->post('whatsapp'),
					'password'=>md5($this->input->post('password')),
					'link'=>$upload_data['file_name'],
					'status'=>'Pending',
				);
				$this->usersmodel->create($data);
				$this->session->set_flashdata('success_msg', 'Account successfully created');
				redirect('welcome/login','refresh');
			}
	}
}