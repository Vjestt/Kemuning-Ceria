<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configurasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') == NULL ){
		
            redirect('auth');
        }
    }

	public function index(){
    $this->db->from('konfigurasi');
	$configurasi = $this->db->get()->result_array();
	
		$data = array(
			'title' => 'halaman home',
			'judul' => 'User',
            'configurasi' => $configurasi,
           
		);
		$this->template->load('admin/template','admin/configurasi',$data);
	}

	public function update(){

        $data = array(
            'judul_website' => $this->input->post('judul_website'),
            'profil_website' => $this->input->post('profil_website'),
            'instagram' => $this->input->post('instagram'),
            'facebook' => $this->input->post('facebook'),
            'email' => $this->input->post('email'),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
            'no_wa' => $this->input->post('no_wa')
           
        );


    $this->db->where('id_konfigurasi', 1);
		$this->db->update('konfigurasi', $data);
	
        $this->session->set_flashdata('alert', 'Data Configurasi Berhasil Di Tambah');

        redirect('admin/configurasi');
        
	}

}
