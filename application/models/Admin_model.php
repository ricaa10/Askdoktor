<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function getAllPasien()
	{
		$data = $this->db->get('pasien');
		return $data->result_array();

	}
	
	public function hapusDataPasien($id)
	{
       
		$this->db->where('id', $id);
		$this->db->delete('pasien');
    }

    public function getObatById($id)
    {
        return $this->db->get_where('tabel_obat', ['id' => $id])->row_array();
    }

    public function tambahArtikel()
    {
        $date = date('Y-m-d');
        $data = ["judul" => $this->input->post('judul'),
                "isi" => $this->input->post('isi'),
                "tgl_buat" => $date];

        //cek jika ada gambar diupload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']  = 'gif|jpg|png';
            $config['max_size']       = '2048';
            $config['upload_path']    = './assets/img/artikel/';

            $this->load->library('upload', $config);

            if($this->upload->do_upload('image')){
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            }else{
                 echo $this->upload->display_errors();
            }

        }

         $this->db->insert('artikel', $data);
    }


   public function getArtikelById($id)
    {
        return $this->db->get_where('artikel', ['id' => $id])->row_array();
    }

    public function ubahDataArtikel()
    {
        $data = [
            "judul" => $this->input->post('judul', true)
          
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('artikel', $data);
    }


    public function tambahObat()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "keterangan" => $this->input->post('keterangan',true),
            "kategori" => $this->input->post('kategori',true)
    
        ];

        $this->db->insert('tabel_obat', $data);
    }

    public function hapusDataObat($id)
	{
       
		$this->db->where('id', $id);
		$this->db->delete('tabel_obat');
    }

    public function hapusDataArtikel($id)
	{
       
		$this->db->where('id', $id);
		$this->db->delete('artikel');
    }

 
    
}