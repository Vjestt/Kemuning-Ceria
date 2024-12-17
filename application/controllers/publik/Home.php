<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // if($this->session->userdata('level') == NULL ){
		
        //     redirect('auth');
        // }
    }
	public function index()
	{
		$this->db->from('paket');
		$paket = $this->db->get()->result_array();
		
		
		$this->db->from('konfigurasi');
		$konfigurasi = $this->db->get()->result_array();

		
		$this->db->from('paket');
		$this->db->order_by('RAND()');
		$this->db->limit(1);
		$random_paket = $this->db->get()->row_array();

		$random_id_paket = $random_paket['id_paket'];

		$this->db->from('galeri');
		$this->db->where('id_paket', $random_id_paket);
		$this->db->order_by('RAND()');
		$this->db->limit(9);
		$galeri = $this->db->get()->result_array();

		 

		$data = array(
			'title' => 'halaman home',
			'judul' => 'User',
            'paket'  => $paket,
            'konfigurasi'  => $konfigurasi,
            'galeri'  => $galeri
		);
        $this->load->view('publik/template',$data);
	}
}
