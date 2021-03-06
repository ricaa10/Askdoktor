<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        is_logged_in();
		$this->load->model('Menu_model', 'menu'); //namamodel, alias
		$this->load->library('form_validation');
	}
    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu']= $this->db->get('user_menu')->result_array();
        

        $this->form_validation->set_rules('menu','Menu', 'required');

        if($this->form_validation->run() == false ){

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');

        }else{
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Menu Baru Telah Ditambahkan </div>');
		    redirect('menu');
        }
    }

    public function hapus($id)
	{
		$this->menu->hapusDataMenu($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('menu');
    }
    
    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['SubMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title','Title', 'required');
        $this->form_validation->set_rules('menu_id','Menu', 'required');
        $this->form_validation->set_rules('url','URL', 'required');
        $this->form_validation->set_rules('icon','icon', 'required');

        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu baru telah ditambahkan!</div>');
            redirect('menu/submenu');
        }
    }

    public function editsubmenu($id)
    {
        $data['title'] = 'Edit submenu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_sub_menu'] = $this->menu->getSubMenuById($id);
         $data['SubMenu'] = $this->menu->getSubMenu();
         $data['menu'] = $this->db->get('user_menu')->result_array();
       
        // $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('menu_id','Menu', 'required');
        $this->form_validation->set_rules('url','URL', 'required');
        $this->form_validation->set_rules('icon','icon', 'required');
        
        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/editsubmenu', $data);
            $this->load->view('templates/footer');
        }else{       
            $this->menu->ubahDataSubMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu berhasil diubah!</div>');
            redirect('menu/submenu');
        }

        
    }


    public function hapussm($id)
    {
        $this->menu->hapusDataSubMenu($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('menu/submenu');
    }
        
}