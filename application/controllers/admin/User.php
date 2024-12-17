<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') == NULL ){
		
            redirect('auth');
        }
    }
	public function index()
	{
		$this->db->from('user');
		$this->db->order_by('nama', 'ASC');
		$user = $this->db->get()->result_array();

		$data = array(
			'title' => 'halaman home',
			'judul' => 'User',
            'user'  => $user
		);
		$this->template->load('admin/template','admin/user',$data);
	}

	public function delete($id){
        $this->db->where('id_user', $id);
        $this->db->delete('user');    
		$this->session->set_flashdata('alert', 'Data User Berhasil Di Hapus');

        redirect('admin/user');

    }

	public function create() {
		$this->db->where('username',$this->input->post('username'));
		$this->db->from('user');
		$user = $this->db->get()->row();

		if($user != NULL){
			$this->session->set_flashdata('error', 'error');
			redirect('admin/user');

		}else{
			$data = array(
				'nama'			=> $this->input->post('nama'),
				'username'		=> $this->input->post('username'),
				'password'		=> md5($this->input->post('password')),
				'level'			=> $this->input->post('level')
			);
			$this->db->insert('user',$data);
			
			$this->session->set_flashdata('alert', 'Data User Berhasil Di Tambah');
			redirect('admin/user');
		}
	}

	public function update() {
		$id = $this->input->post('id_user');

		$data = array(
			'nama'		=> $this->input->post('nama'),
			'username'		=> $this->input->post('username')
			
		);
		
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
		$this->session->set_flashdata('alert', 'Data User Berhasil Di Update');

		redirect('admin/user');

    }
}
