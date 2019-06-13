<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');

    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
       
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
       
    }

    public function roleaccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/roleaccess', $data);
        $this->load->view('templates/footer');
       
    }

    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        }else{
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Akses Diubah </div>');
    }

    public function artikel()
    {
        $data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['Artikel'] = $this->db->get('artikel')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/artikel', $data);
        $this->load->view('templates/footer');
       
    }

    public function tambahArtikel()
    {
       $data['title'] = 'Tambah Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['Artikel'] = $this->db->get('artikel')->result_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/artikel', $data);
            $this->load->view('templates/footer'); 
        } else {
            $this->Admin_model->tambahArtikel();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Artikel baru telah ditambahkan!</div>');
            redirect('admin/artikel');
        
        }

    }


    public function editArtikel($id)
   {
        $data['title'] = 'Edit Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['artikel'] = $this->Admin_model->getArtikelById($id);
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');

        if($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editArtikel', $data);
            $this->load->view('templates/footer');

        }else{
            $judul = $this->input->post('judul');
            
            //cek jika ada gambar diupload
            // $upload_image = $_FILES['image']['name'];
            

            // if ($upload_image) {
            //     $config['allowed_types']  = 'gif|jpg|png';
            //     $config['max_size']       = '2048';
            //     $config['upload_path']    = './assets/img/profile/';

            //     $this->load->library('upload', $config);
           
                
            //     if($this->upload->do_upload('image')) {
            //         $old_image = $data['user']['image'];
            //         if ($old_image != 'default.jpg') {
            //             unlink(FCPATH . 'assets/img/profile/' . $old_image);
            //         }
            //         $new_image = $this->upload->data('file_name');
            //         $this->db->set('image', $new_image);
            //     }else{
            //         echo $this->upload->display_errors();
            //     }
            // }
            
            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user'); //pakai model

            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Profil Berhasil Diperbaharui!</div>');
            redirect('user');
        }

        
    }


    public function hapusArtikel($id)
    {
        $this->Admin_model->hapusDataArtikel($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('admin/artikel');
    }

    public function obat()
    {
        $data['title'] = 'Obat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['Obat'] = $this->db->get('tabel_obat')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/obat', $data);
        $this->load->view('templates/footer');
       
    }

    public function tambahObat()
    {
        $data['title'] = 'Tambah Data Obat';

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/obat', $data);
            $this->load->view('templates/footer'); 
        } else {
            $this->Admin_model->tambahObat();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Obat baru telah ditambahkan!</div>');
            redirect('admin/obat');
        
        }
    }

     public function ubahObat($id)
        {
            $data['title'] = 'Ubah Data Obat';
            $data['obat'] = $this->Admin_model->getObatById($id);
            

            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
            $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('admin/obat', $data);
                $this->load->view('templates/footer'); 
            } else {
                $this->Mahasiswa_model->ubahDataObat();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/obat');
            
            }
        }


     public function hapusObat($id)
    {
        $this->Admin_model->hapusDataObat($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data obat berhasil dihapus.</div>');
        redirect('admin/obat');
    }

    public function pasien()
    {
        $data['title'] = 'Pasien';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['Pasien'] = $this->Admin_model->getAllPasien();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pasien', $data);
        $this->load->view('templates/footer');
       
    }

    public function tambahp()
    {
        $data['title'] = 'Tambah Data Pasien';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jkel', 'Jkel', 'required');
        $this->form_validation->set_rules('telp', 'Telp', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tgll', 'Tgll', 'required');
         $this->form_validation->set_rules('tgld', 'Tgld', 'required');


        if ($this->form_validation->run() == FALSE) {
             $this->load->view('templates/header', $data);
             $this->load->view('templates/sidebar', $data);
             $this->load->view('templates/topbar', $data);
             $this->load->view('admin/pasien', $data);
             $this->load->view('templates/footer');
        } else {
            $this->Admin_model->tambahDataPasien();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/pasien');
        
        }
    }

     public function hapusp($id)
    {
        $this->Admin_model->hapusDataPasien($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('admin/pasien');
    }

    public function mahasiswa()
    {
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
        $data['title'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        if( $this->input->post('keyword') ) {
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
        

    }


}