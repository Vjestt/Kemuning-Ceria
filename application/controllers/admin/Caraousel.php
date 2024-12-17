<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caraousel extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') == NULL ){
		
            redirect('auth');
        }
    }
    
	public function index()
	{

        $data = array(
			'title' => 'Halaman Paket outbound',
			'judul' => 'paket',
            'caraousel'  => $caraousel
		);

		$this->template->load('admin/template','admin/caraousel',$data);
	}

    public function save(){
        {
            $config['upload_path']          = './assets/img/paket';
            $config['allowed_types']        = 'gif|jpg|png|PNG';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto_paket'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        // $this->load->view('upload_form', $error);
                        echo'mana foto';
                }
                else
                {
                    $picture = $this->upload->data();
                    $picture_name = $picture['file_name']; 

                    $config['upload_path']          = './assets/img/paket';
                    $config['allowed_types']        = 'gif|jpg|png|PNG';
                    $config['max_size']             = 10000;
                    $config['max_width']            = 10000;
                    $config['max_height']           = 10000;
            
                    $this->load->library('upload', $config);

                    $uploaded_files = $_FILES['galeri'];

                    foreach ($uploaded_files['name'] as $key => $file_name) {
                        $_FILES['userfile']['name'] = $file_name;
                        $_FILES['userfile']['type'] = $uploaded_files['type'][$key];
                        $_FILES['userfile']['tmp_name'] = $uploaded_files['tmp_name'][$key];
                        $_FILES['userfile']['error'] = $uploaded_files['error'][$key];
                        $_FILES['userfile']['size'] = $uploaded_files['size'][$key];
            
                    if ( ! $this->upload->do_upload('userfile'))
                    {
                        $error = $this->upload->display_errors();
                        echo ($error);
                    }else{
                        $picture = $this->upload->data();
                        $picture_names[] = $picture['file_name'];
                    
                    }

                }
                
                $this->M_paket->add_paket($picture_name,$picture_names);

             redirect('admin/paket');
            }
        
        }
    }


   


}
