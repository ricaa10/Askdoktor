<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function getAllPasien()
	{
		$data = $this->db->get('pasien');
		return $data->result_array();

	}

    public function tambahDataPasien()
    {
        $date = date('Y-m-d h:i:s');
        $data = [
            "nama" => $this->input->post('nama', true),
            "jkel" => $this->input->post('jkel'),
            "telepon" => $this->input->post('telepon',true),
            "alamat" => $this->input->post('alamat',true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir'),
            "tanggal_daftar" => $date        
    
        ];

        $this->db->insert('pasien', $data);
    }

    public function ubahDataPasien()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jkel" => $this->input->post('jkel'),
            "telepon" => $this->input->post('telepon', true),
            "alamat" => $this->input->post('alamat',true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir')
           
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pasien', $data);
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

    
    public function getPasienById($id)
    {
        return $this->db->get_where('pasien', ['id' => $id])->row_array();
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
        $date = date('Y-m-d');
          $data = [
           'judul' => $this->input->post('judul'), 
           'isi' => $this->input->post('isi'),
           'tgl_update' => $date
       ];
        
            //cek jika ada gambar diupload
            $upload_image = $_FILES['image']['name'];
            

            if ($upload_image) {
                $config['allowed_types']  = 'gif|jpg|png';
                $config['max_size']       = '2048';
                $config['upload_path']    = './assets/img/artikel/';

                $this->load->library('upload', $config);
           
                
                if($this->upload->do_upload('image')) {
                    // $old_image = $data['id']['image'];
                   
                    //     unlink(FCPATH . 'assets/img/artikel/' . $old_image);
                    
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }else{
                    echo $this->upload->display_errors();
                }
            }
            
           
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('artikel', $data);
    }

    public function ubahDataObat()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "keterangan" => $this->input->post('keterangan'),
            "kategori" => $this->input->post('kategori')
          
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tabel_obat', $data);
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

     public function getJadwalById($id)
    {
        return $this->db->get_where('jadwal', ['id' => $id])->row_array();
    }

     public function tambahJadwal()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "spesialis" => $this->input->post('spesialis',true),
            "hari" => $this->input->post('hari',true),
            "jam" => $this->input->post('jam',true)
    
        ];

        $this->db->insert('jadwal', $data);
    }

    public function hapusDataJadwal($id)
    {
       
        $this->db->where('id', $id);
        $this->db->delete('jadwal');
    }

    public function ubahDataJadwal()
    {
        $data = [
           "nama" => $this->input->post('nama', true),
            "spesialis" => $this->input->post('spesialis',true),
            "hari" => $this->input->post('hari',true),
            "jam" => $this->input->post('jam',true)
          
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('jadwal', $data);
    }
 
    
}