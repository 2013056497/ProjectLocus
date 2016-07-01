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
			$this->load->model('model_main');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Username', 'required|valid_email|callback_check_user');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if($this->form_validation->run()){

			$users = $this->model_main->getUserDetailsByEmail($this->input->post('email'));

				$data = array();
				foreach ($users as $user) {
					$fullname = $user['fname']." ".$user['mname'].". ".$user['lname'];
						$data = array(
							'fullname' => $fullname,
							'fname' => $user['fname'],
							'mname' => $user['mname'],
							'lname' => $user['lname'],
							'email' => $user['email'],
							'divname' =>$user['div_name'],
							'divcode' =>$user['div_code'],
							'divdesc' =>$user['div_desc'],
							'divloc' =>$user['div_loc'],
							'is_logged_in' => TRUE,
							'id' => $user['user_id']
						 );
				}


				$this -> session -> set_userdata($data);


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



	public function profile(){

		if($this->session->userdata('is_logged_in') == TRUE){
				$this->load->model('model_main');
					$var = $this -> model_main ->getphoto();
					$data['title'] = "mag";
					foreach ($var as $key) {
						$data['photo'] = $key['photo'];
					}
					$data['folder'] = sha1($this->session->userdata('id'));

					$this->load->view('templates/header');
					$this->load->view('templates/lsidebar');
					$this->load->view('templates/rsidebar');
					$this->load->view('pages/profile', $data);
					$this->load->view('templates/footer');
		}else{
			redirect('main');
		}

	}


	public function uploadpicture(){

		if($this->session->userdata('is_logged_in') == TRUE){
					$this->load->view('templates/header');
					$this->load->view('templates/lsidebar');
					$this->load->view('templates/rsidebar');
					$this->load->view('pages/uploadpicture');
					$this->load->view('templates/footer');
		}else{
			redirect('main');
		}

	}



	public function uploadpic(){
		$this->load->model('model_main');
			$foldername = sha1($this->session->userdata('id'));
					//	$path = ".users/";


				$config['upload_path']          = '.users/test';
        $config['allowed_types']     = 'gif|jpg|png';
        $config['max_size']          = 10000;
				$this->load->library('upload', $config);
        $this->upload->initialize($config);

				if ($this->upload->do_upload('userfile')) {
            $data = array('upload_data' => $this->upload->data());

           $img = $data['upload_data']['file_name'];

           $this->model_main->uploadprofilepic($img);

            $this->session->set_flashdata('asd','You have successfully uploaded a new image');
            redirect('main/profile');
        }else {
          $error = array('error' => $this->upload->display_errors());


            $this->session->set_flashdata('fail','Uploading of new banner failed!');
            redirect('main/uploadpicture');
        }


	}





	public function logout(){
		$this->session->sess_destroy();

      redirect('main');
	}




}
?>
