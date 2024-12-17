<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {
	public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') == NULL ){
		
            redirect('auth');
        }
		$this->load->model('M_content');
    }
	public function index()
	{

		$this->db->from('paket');
		$this->db->order_by('nama_paket', 'ASC');
		$paket = $this->db->get()->result_array();
	

		$this->db->from('konten k');
		$this->db->join('paket p','k.id_paket=p.id_paket','left');
		$this->db->order_by('tanggal', 'DESC');
		$konten = $this->db->get()->result_array();

        
		$data = array(
			'title' => 'halaman List Paket',
			'judul' => 'List Paket',
			'konten'  => $konten,
			'paket'   => $paket
           
		);
		$this->template->load('admin/template','admin/content',$data);
	}

	public function save(){
		// $fasilitas =  $this->input->post('fasilitas'); 

		// print_r($fasilitas);
		// die;
        {
            $config['upload_path']          = './assets/img/content/';
            $config['allowed_types']        = 'gif|jpg|png|PNG';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        // $this->load->view('upload_form', $error);
                        echo'mana foto';
                }
                else
                {
                    $picture = $this->upload->data();
                    $picture_name = $picture['file_name']; 

					$this->M_content->add_content($picture_name);
					$this->session->set_flashdata('alert', 'Data Content Berhasil Di Tambah');
					redirect('admin/content');
                }
				
                
				


            }
        
        }


		public function update() {
			// $fasilitas =  $this->input->post('fasilitas'); 
            // var_dump($fasilitas);
            // die;
			$namafoto = $this->input->post('namafoto');
			$id_konten = $this->input->post('id_konten');
		
		
			$config['upload_path'] = './assets/img/content/';
			$config['allowed_types'] = 'gif|jpg|png|PNG';
			$config['max_size'] = 10000;
			$config['overwrite'] = true;
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
					
					if (file_exists('./assets/img/content/' . $namafoto)) {
						unlink('./assets/img/content/' . $namafoto);
					}
				}
			} else {
				$picture_name = $namafoto;
			}

			$this->M_content->update_content($picture_name, $id_konten);

			$this->session->set_flashdata('alert', 'Data Content Berhasil Di Update');

			redirect('admin/content');
		}

		public function delete($id) {
        
			$konten = $this->M_content->get_konten_by_id($id);
		
			if ($konten) {
				if (file_exists('./assets/img/content/' . $konten['foto'])) {
					unlink('./assets/img/content/' . $konten['foto']);
				}
		
			  
				$this->M_content->delete_konten($id);
		
			   
				$this->session->set_flashdata('alert', 'Data Content Berhasil Di Hapus');
				redirect('admin/content');
			} else {
				
				$this->session->set_flashdata('error', 'Paket tidak ditemukan.');
				redirect('admin/content');
			}
		}
    }

