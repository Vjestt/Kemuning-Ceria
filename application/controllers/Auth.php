<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		// $status = "active";
		// $this->template->set('status', $status);
		$this->load->view('login');
	}

    public function login()
	{

        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user')->where('username',$username);
        $user = $this->db->get()->row();
    
        
        if ($user == NULL) {
            $this->session->set_flashdata('alert', 'username kosong');
            redirect('auth');
        
        } else if ($user->password == $password) {
            $data  = array(
                'username' => $user->username,
                'nama' => $user->nama,
                'level' => $user->level,
                'id_user' => $user->id_user
            );
            $this->session->set_userdata($data);
            // var_dump($this->session->userdata());
            // die;
            redirect('admin/home');
            
        } else {
            $this->session->set_flashdata('alert', 'password salah');
            redirect('auth');
        }
        
    }

	public function logout(){
        $this->session->unset_userdata('user_data');
        $this->session->sess_destroy('user_data');
        redirect('auth');
    }

}
