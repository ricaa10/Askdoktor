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
		$email = $this->input->post('email',true);
		$data=[
			'name' =>  htmlspecialchars ($this->input->post('name',true)),
			'email' => htmlspecialchars($email),
			'image' => 'default.jpg',
			'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
			'role_id' => 2,
			'is_active' => 0,
			'date_created' => time()
		];

		//siapkan token
		$token = base64_encode(random_bytes(32));
		$user_token = [
			'email' => $email,
			'token' => $token,
			'date_created' => time()
		];


		//model
		$this->db->insert('user',$data);
		$this->db->insert('user_token',$user_token);

		$this->_sendEmail($token, 'verify');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Pendaftaran Berhasil, Silahkan aktivasi akun anda </div>');
		redirect('auth');
		}
	}

	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'askdoktor0@gmail.com',
			'smtp_pass' => 'wakwaubahagia',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"

		];

		$this->load->library('email', $config);
		$this->email->initialize($config);
		$this->email->from('askdoktor0@gmail.com', 'Askdoktor');
		$this->email->to($this->input->post('email'));

		if ($type == 'verify') {
			$this->email->subject('Verifikasi Akun');
			$this->email->message('klik link ini untuk verifikasi akun anda : <a href="'. base_url() . 'auth/verify?email=' . $this->input->post('email') . '& token=' . urlencode($token) . '">Aktivasi</a>');

		} else if($type == 'forgot') {
			$this->email->subject('Reset Password');
			$this->email->message('klik link ini untuk reset password anda : <a href="'. base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '& token=' . urlencode($token) . '">Reset Password</a>');

		}
		

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;

		}

	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if($user_token) {
				if(time() - $user_token['date_created'] < (60 * 60 * 24)) {
					
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('user');

					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">' .$email. ' telah diaktivasi! Silahkan Login.</div>');
				redirect('auth');

				}else{
					$this->db->delete('user', ['email'=> $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> aktivasi akun gagal! token kadaluarsa. </div>');
					redirect('auth');
				}

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> aktivasi akun gagal! token salah. </div>');
				redirect('auth');

			}

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> aktivasi akun gagal! email salah </div>');
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


	public function forgotPassword()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if( $this->form_validation->run() == false){
		$data['title'] = 'Lupa Password';
		$this->load->view('templates/auth_header',$data);
		$this->load->view('auth/forgot-password');
		$this->load->view('templates/auth_footer');
		}else{
			$email = $this->input->post('email');
			$user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

			if($user){
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];

				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, 'forgot');

				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Silahkan Cek email untuk reset password </div>');
				redirect('auth/forgotpassword');

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Email belum terdaftar atau belum aktif </div>');
				redirect('auth/forgotpassword');

			}
		}
	}	


	public function resetPassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if($user){
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->changePassword();

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Reset password gagal, Token salah </div>');
				redirect('auth');
			}

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Reset password gagal, Email salah </div>');
				redirect('auth');
		}
	}

	public function changePassword()
	{
		if(!$this->session->userdata('reset_email')) {
			redirect('auth');
		}

		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]|matches[password2]');

		$this->form_validation->set_rules('password2', 'Ulangi Password', 'trim|required|min_length[6]|matches[password1]');

		if( $this->form_validation->run() == false){
		$data['title'] = 'Ganti Password';
		$this->load->view('templates/auth_header',$data);
		$this->load->view('auth/Change-password');
		$this->load->view('templates/auth_footer');
		}else{
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->unset_userdata('reset_email');

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Reset password berhasil, Silahkan Login </div>');
				redirect('auth');

		}
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */