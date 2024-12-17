
<?php class M_content extends CI_Model { 

    public function add_content($picture_name) {
        $fasilitas =  implode(' | ', $this->input->post('fasilitas')); ;

        // $data_input = $this->input->post('harga');
        // $fasilitas = explode(' | ', $data_input[0]);  
        // foreach($fasilitas as $fasilitas_item) {
        //      $data = array( 'fasilitas' => trim($fasilitas_item)); 
             
        //     }
        // var_dump($fasilitas);
        // die;
        $id_paket = $this->input->post('id_paket');
       

        $data = array(
            'judul'       => $this->input->post('judul'),
            'id_paket'    => $id_paket,
            'harga'       => $this->input->post('harga'),
            'fasilitas'   => $fasilitas,
            'foto'        => $picture_name,
            'slug'        => str_ireplace(' ', '-', $this->input->post('judul')),
            'tanggal'     => date('Y-m-d'),
            'username'    => $this->session->userdata('username')
        );
        
    
        $this->db->insert('konten', $data);
        // $lastID = $this->db->insert_id(); 

        
        // // if (is_array($fasilitas) && count($fasilitas) > 0) {
        // //     foreach ($fasilitas as $item) {
        // //         $dataFasilitas = array(
        // //             'fasilitas' => trim($item)
        // //         ); 
        // //         $this->db->where('id_konten',$lastID);
        // //         $this->db->update('konten', $dataFasilitas); 
        // //     }
        // // }
    }


    public function update_content($picture_name,$id_konten){
        // foreach($this->input->post('fasilitas') as $key => $value) { 
        //     // Menggunakan preg_replace untuk mengganti spasi di sekitar tanda |
        //     $data_input[$key] = preg_replace('/\s*\|\s*/', ',', $value);
        // }
       
        
           
        $data = array(
            'judul'         => $this->input->post('judul'),
            'foto'          => $picture_name,
            'harga'         => $this->input->post('harga'),
            'id_paket'      => $this->input->post('id_paket'),
            'slug'          => str_replace(' ','-',$this->input->post('judul')),
            'fasilitas'     => implode(" | ", $this->input->post('fasilitas'))
            
        );
        $where = array(
            'id_konten'    => $id_konten
        );

        $this->db->update('konten',$data,$where);
       
    
        // print_r($dataGambar);
        }


    public function getAllPaket(){
        $this->db->select('p.id_paket, p.nama_paket, p.foto, p.deskripsi, GROUP_CONCAT(g.galeri SEPARATOR ",") as galeri');
        $this->db->from('paket p'); 
        $this->db->join('galeri g', 'g.id_paket = p.id_paket', 'left'); 
        $this->db->group_by('p.id_paket');
        $query = $this->db->get(); return $query->result_array();
    }

    public function get_konten_by_id($id) {
        return $this->db->get_where('konten', array('id_konten' => $id))->row_array();
    }
    
   
    
    public function delete_konten($id) {
        $this->db->where('id_konten', $id);
        $this->db->delete('konten');
    
      
    }
    
}