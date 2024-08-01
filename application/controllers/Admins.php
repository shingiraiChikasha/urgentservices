<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct(){
		parent::__construct();
		include('_models.php');
		include('_libraries.php');
	  }
	
	public function index(){
        if($this->session->userdata('role')==''){
            $this->login();
        }elseif($this->session->userdata('role')!='admin'){
            $this->load->view('error-restricted-access');
		}else{
            $data['maadmin']=$this->adminsmodel->read('id','name','surname','email');
            $this->load->view('admin-all',$data);
        }
		
	}

	public function dashboard(){
        if($this->session->userdata('role')==''){
            $this->login();
        }elseif($this->session->userdata('role')!='admin'){
            $this->load->view('error-restricted-access');
		}else{
		$data['macompany']=$this->usersmodel->read('id','company_name','hq','licence_number','status','telephone','email','whatsapp');
        $data['maservices']=$this->servicesmodel->read('id','company','category','sub_category','location','price_per_km','description');
		$this->load->view('admin-dashboard',$data);
        }
	}

	public function search(){
		$data['macategory']=$this->servicesmodel->read('id','company','category','sub_category','location','price_per_km','service_description');
		$data['macompany']=$this->usersmodel->read('id','company_name','hq','telephone','email','whatsapp');
		$problem=$this->input->post('problem');
        $city=$this->input->post('city');
		$data['maresults'] = $this->searchmodel->search($problem,$city);
		$this->load->view('search',$data);
	}

	public function login(){
		$this->load->view('admin-login');
	}

	public function login_admin(){
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));

		$data=$this->adminsmodel->login($email,$password);

		if ($data) {
			$this->session->set_userdata('id', $data['id']);
      		$this->session->set_userdata('email', $data['email']);
			  $this->session->set_userdata('name', $data['name']);
			  $this->session->set_userdata('surname', $data['surname']);
			//   $this->session->set_userdata('telephone', $data['telephone']);
			  $this->session->set_userdata('role', 'admin');
			// $this->session->set_userdata('file',$data['file']);
			// $this->session->set_userdata('whatsapp',$data['whatsapp']);
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
			
			  redirect('admins/dashboard','refresh');
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
		redirect('admins/login', 'refresh'); 
}

	public function register(){
		$this->load->view('admin-register');
	}

	// public function search(){
	// 	$data=$this->input->post('search');
	// 	$data['searching']=$this->productsmodel->search('fullname');
	// 	$this->load->view('login',$data);
	// }

    public function admins_add(){
        if($this->session->userdata('role')==''){
            $this->login();
        }elseif($this->session->userdata('role')!='admin'){
            $this->load->view('error-restricted-access');
		}else{
        $this->load->view('admin-add');
        }
		
    }

	public function insert(){
		$config = array(
			array(
			'field'=>'first_name',
			'label'=>'first name',
			'rules'=>'required',
			),
			array(
				'field'=>'surname',
				'label'=>'surname',
				'rules'=>'required'
			),
			array(
				'field'=>'email',
				'label'=>'email',
				'rules'=>'required|is_unique[admin.email]|valid_email'
			)
			
			);



			$this->form_validation->set_rules($config);

			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('error_msg', validation_errors());
    			redirect('admins/admins_add', 'refresh');
			}else {
                $password=rand(1000,9999);
				$data=array(
					'name'=>$this->input->post('first_name'),
					'surname'=>$this->input->post('surname'),
					'email'=>$this->input->post('email'),
					'password'=>md5($password),
				);
				$this->adminsmodel->create($data);
				$this->session->set_flashdata('success_msg', 'Password is '.$password);
				redirect('admins/','refresh');
			}
	}

    public function view(){
        if($this->session->userdata('role')==''){
            $this->login();
        }elseif($this->session->userdata('role')!='admin'){
            $this->load->view('error-restricted-access');
		}else{
        $id=$this->uri->segment(3);
        $data['madetails']=$this->adminsmodel->read($id,'name','surname','email');
        $this->load->view('admins-one',$data);
        }
    }

    public function delete(){
		if($this->session->userdata('role')==''){
            $this->login();
        }elseif($this->session->userdata('role')!='admin'){
            $this->load->view('error-restricted-access');
		}else{
        $data = array(
            'id'=>$this->uri->segment(3)
          );    
          $this->adminsmodel->delete($data);
          $this->session->set_flashdata('success_msg', 'Admin deleted');
          redirect('admins/', 'refresh');
        }
    }

    
}