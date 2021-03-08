<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
 
	protected $data;
	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
		// $this->load->library('session');
		$tmpData = $this->session->flashdata('mydata');
		$this->data['error'] = isset($tmpData['error'])?$tmpData['error']:0;
		$this->data['message_e'] = isset($tmpData['message_e'])?$tmpData['message_e']:"Invalid Username and Password";
	}

	function index(){
		$this->load->view('v_login',$this->data);
	}
 
	function log_on(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		if($this->form_validation->run() == FALSE){
			$this->data['error'] 		= 1;
			$this->data['message_e'] 	= 'Invalid Username and Password';
			$this->session->set_flashdata('mydata',$this->data);
			var_dump($data);
		}else{
			
			$dataLogin = array(
				'user_name'	=> ($this->input->post('username')),
				'user_password' => (md5($this->input->post('password')))
			);
			$result = $this->login_m->log_model($dataLogin);
			if($result != false){
				foreach($result as $row){
					$user_data = array(
						'user_id'		=> $row->user_id,
						'username' 		=> $row->user_name, 
						'name'			=> $row->employee_name,
					);
				}
				$this->session->set_userdata('login',$user_data);
				redirect('biodata_ini');
			}else{
				$this->data['error'] 		= 1;
				$this->data['message_e'] 	= 'Invalid Username and Password';
				$this->session->set_flashdata('mydata',$this->data);
				redirect(site_url('login'));
			}
		}

	}
	function logout(){
		$this->session->unset_userdata('login');
		redirect('login');
	}
}

?>