<?php
class Main extends CI_Controller {

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		parent::__construct();
		$this->load->library(array('session'));
		// $this->load->helper(array('url'));
		// $this->load->helper(array('form'));
	}

	public function index(){
		$this->login();

	}

	public function login(){
		if($this->session->userdata('is_logged_in') == FALSE){
			$this->load->view('templates/ext_header');
			$this->load->view('pages/login');
			$this->load->view('templates/ext_footer');
		}else{
			redirect('main/dashboard');
		}
	}

	public function dashboard(){

		if($this->session->userdata('is_logged_in') == TRUE){

				$this->load->view('templates/header');
				$this->load->view('templates/lsidebar');
				$this->load->view('templates/rsidebar');
				$this->load->view('pages/dashboard');
				$this->load->view('templates/footer');
		}else{
			redirect('main');
		}


	}

	public function manage_projects(){

		if($this->session->userdata('is_logged_in') == TRUE){
				$this->load->view('templates/header');
				$this->load->view('templates/lsidebar');
				$this->load->view('templates/rsidebar');
				$this->load->view('pages/manage_projects');
				$this->load->view('templates/footer');
		}else{
			redirect('main');
		}


	}

	public function addproject(){
		if($this->session->userdata('is_logged_in') == TRUE){
					$this->load->view('templates/header');
					$this->load->view('templates/lsidebar');
					$this->load->view('templates/rsidebar');
					$this->load->view('pages/proj_add');
					$this->load->view('templates/footer');
		}else{
			redirect('main');
		}
	}


	public function authentication(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Username', 'required|valid_email|callback_check_user');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if($this->form_validation->run()){


			redirect('main/dashboard');

		}else{
				$this->login();
		}


	}


	public function check_user(){

		$this->load->model('model_main');

			if($this->model_main->authorization()){
							 return true;
			}else{
					$this->form_validation->set_message('check_user', 'Incorrect username or password');
						return false;

			}

	}


	public function logout(){
		$this->session->sess_destroy();

      redirect('main');
	}




}
?>
