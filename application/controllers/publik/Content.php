<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // if($this->session->userdata('level') == NULL ){
		
        //     redirect('auth');
        // }
    }

	public function index()
	{
       
		$this->db->from('configurasi');
		$configurasi = $this->db->get()->result_array();

		$data = array(
			'title' => 'halaman home',
			'judul' => 'User',
            'configurasi'  => $configurasi
		);
        $this->load->view('publik/detail',$data);
    
	}

    public function detail($id)
    {
        $this->db->from('konten k');
        $this->db->join('paket p','p.id_paket=k.id_paket','left');
        $this->db->where('p.id_paket', $id);
        $konten = $this->db->get()->result_array();

        $this->db->from('galeri');
        $this->db->where('id_paket', $id);
        $galeri = $this->db->get()->result_array();

        $this->db->from('paket');
        $paket = $this->db->get()->result_array();

        $this->db->from('konfigurasi');
		$konfigurasi = $this->db->get()->result_array();

        
        foreach ($konten as &$item) { 

            $item['fasilitas'] = explode(' | ', $item['fasilitas']); 
                
        }
        // $data = $konten[0]['..'] ;
        // $data = $konten[0]['..'] ;
        $data = array(
            
            'judul' => $konten[0]['nama_paket'],
			'deskripsi' => $konten[0]['deskripsi'],
            'konten'  => $konten,
            'galeri'  => $galeri,
            'paket'  => $paket,
            'konfigurasi' => $konfigurasi,
            // 'wa' => $konfigurasi[]['no_wa'],
         
		);
        // var_dump($data);
        // die;
      
        
        
        $this->load->view('publik/detail',$data);
    }
}
