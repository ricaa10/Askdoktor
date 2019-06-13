<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('user');
		}

		$this->form_validation->set_rules('email','Email','trim|required|valid_email',[
			'required' => 'email tidak boleh kosong',
			'valid_email' => 'masukkan email dengan benar']); //(nama,alias,rules)
		$this->form_validation->set_rules('password','Password','trim|required',['required' => 'password tidak boleh kosong']); 

		if($this->form_validation->run() == false ) {
			$data['title'] = 'User Registration';
			$this->load->view('templates/auth_header',$data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			//validasi berhasil
			$this->_login(); //_login method private
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		//query db
		$user = $this->db->get_where('user',['email' => $email])->row_array();
		//user ada
		if($user){
			//user aktif
			if($user['is_active'] == 1){
				//cek password
				if(password_verify($password, $user['password'])){
					$data =[
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1){
						redirect('admin');
					}else{
						redirect('user'); // masuk halaman user
					}
					
				} else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Password salah </div>');
					redirect('auth');

				}
			 	
			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Email belum aktif </div>');
				redirect('auth');
			}
		}else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Email belum terdaftar </div>');
		redirect('auth');
		}
		

	}

	public function registrasi()
	{	
		if ($this->session->userdata('email')) {
			redirect('user');
		}

		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1','password','required|trim|min_length[5]|matches[password2]',[
			'matches' => 'password tidak sama!',
			'min_length' => 'password terlalu pendek!',
			'is_unique' => 'password sudah dipakai!'
		]);
		$this->form_validation->set_rules('password2','password','required|trim|matches[password1]');
		


	if( $this->form_validation->run() == false){
		$data['title'] = 'User Registration';
		$this->load->view('templates/auth_header',$data);
		$this->load->view('auth/registrasi');
		$this->load->view('templates/auth_footer');
	} else {
		$data=[
			'name' =>  htmlspecialchars ($this->input->post('name',true)),
			'email' => htmlspecialchars($this->input->post('email',true)),
			'image' => 'default.jpg',
			'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
			'role_id' => 2,
			'is_active' => 1,
			'date_created' => time()
		];

		//model
		$this->db->insert('user',$data);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Pendaftaran Berhasil, Silahkan Login </div>');
		redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Kamu berhasil keluar! </div>');
		redirect('auth');

	}

	public function blocked()
	{
			$this->load->view('auth/blocked');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */