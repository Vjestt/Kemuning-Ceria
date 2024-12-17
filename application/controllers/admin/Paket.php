<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') == NULL ){
		
            redirect('auth');
        }
        $this->load->model('M_paket');
    }
    
	public function index()
	{
        $paket= $this->M_paket->getAllPaket();

        $data = array(
			'title' => 'Halaman Paket outbound',
			'judul' => 'paket',
            'paket'  => $paket
		);

		$this->template->load('admin/template','admin/paket',$data);
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
                $this->session->set_flashdata('alert', 'Data Paket Berhasil Di Tambah');

             redirect('admin/paket');
            }
        
        }
    }

    public function update() {
        $namafoto = $this->input->post('nama_foto');
        $id_paket = $this->input->post('id_paket');
        $galeri = $this->input->post('galeri_foto'); 
    
        $config['upload_path'] = './assets/img/paket/';
        $config['allowed_types'] = 'gif|jpg|png|PNG';
        $config['max_size'] = 10000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;
    
        $this->load->library('upload', $config);
    
        if (!empty($_FILES['foto']['name'])) {
            if (!$this->upload->do_upload('foto')) {
                $error = $this->upload->display_errors();
                echo 'Gagal mengunggah foto: ' . $error;
                return;
            } else {
                $data = $this->upload->data();
                $picture_name = $data['file_name'];
    
                if (file_exists('./assets/img/paket/' . $namafoto)) {
                    unlink('./assets/img/paket/' . $namafoto);
                }
            }
        } else {
            $picture_name = $namafoto;
        }
    
        if (!empty($_FILES['galeri']['name'][0])) {

            $this->M_paket->delete_galeri_by_paket($id_paket,$galeri);
    
            $uploaded_files = $_FILES['galeri'];
            $picture_names = [];
    
            foreach ($uploaded_files['name'] as $key => $file_name) {
                $_FILES['userfile']['name'] = $file_name;
                $_FILES['userfile']['type'] = $uploaded_files['type'][$key];
                $_FILES['userfile']['tmp_name'] = $uploaded_files['tmp_name'][$key];
                $_FILES['userfile']['error'] = $uploaded_files['error'][$key];
                $_FILES['userfile']['size'] = $uploaded_files['size'][$key];
    
                if (!$this->upload->do_upload('userfile')) {
                    $error = $this->upload->display_errors();
                    echo ($error);
                } else {
                    $data = $this->upload->data();
                    $picture_names[] = $data['file_name'];
                    
                }
            }
        }
    
        $this->M_paket->update_paket($picture_name, $picture_names, $id_paket);
        
        $this->session->set_flashdata('alert', 'Data Paket Berhasil Di Update');

    
        redirect('admin/paket');
    }
    
    public function delete($id) {
        
        $paket = $this->M_paket->get_paket_by_id($id);
    
        if ($paket) {
            if (file_exists('./assets/img/paket/' . $paket['foto_paket'])) {
                unlink('./assets/img/paket/' . $paket['foto_paket']);
            }
    
           
            $galeri = $this->M_paket->get_galeri_by_paket($id);
            if ($galeri) {
                foreach ($galeri as $gambar) {
                    if (file_exists('./assets/img/paket/' . $gambar['galeri'])) {
                        unlink('./assets/img/paket/' . $gambar['galeri']);
                    }
                }
            }
    
           
            $this->M_paket->delete_paket($id);
    
           
            $this->session->set_flashdata('alert', 'Data Paket Berhasil Di Hapus');
            redirect('admin/paket');
        } else {
            
            $this->session->set_flashdata('error', 'Paket tidak ditemukan.');
            redirect('admin/paket');
        }
    }
    

   


}
