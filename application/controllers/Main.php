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
		$this->load->view('templates/ext_header');
		$this->load->view('pages/login');
		$this->load->view('templates/ext_footer');
	}

	public function dashboard(){
		$this->load->view('templates/header');
		$this->load->view('templates/lsidebar');
		$this->load->view('templates/rsidebar');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	}


	public function manage_projects(){

		$this->load->view('templates/header');
		$this->load->view('templates/lsidebar');
		$this->load->view('templates/rsidebar');
		$this->load->view('pages/manage_projects');
		$this->load->view('templates/footer');
	}

	public function addproject(){
		$this->load->view('templates/header');
		$this->load->view('templates/lsidebar');
		$this->load->view('templates/rsidebar');
		$this->load->view('pages/proj_add');
		$this->load->view('templates/footer');
	}




}
?>
