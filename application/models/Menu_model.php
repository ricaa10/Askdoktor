<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {
	public function getAllMenu()
	{
		$query = $this->db->get('user_menu');
		return $query->result_array();

	}
	
	public function hapusDataMenu($id)
	{
       
		$this->db->where('id', $id);
		$this->db->delete('user_menu');
    }

     public function getSubMenuById($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }
    
    public function getSubMenu()
    {
        $query ="SELECT `user_sub_menu`.*, `user_menu`.`menu`
                FROM `user_sub_menu` JOIN `user_menu`
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }

    public function hapusDataSubMenu($id)
	{
       
		$this->db->where('id', $id);
		$this->db->delete('user_sub_menu');
    }

    public function ubahDataSubMenu()
	{
		$data =[
			'title' => $this->input->post('nama'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')

		];
       
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_sub_menu', $data);
    }
    
}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */