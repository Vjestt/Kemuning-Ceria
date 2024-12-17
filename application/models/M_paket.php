
<?php class M_paket extends CI_Model { 
public function add_paket($picture_name,$picture_names){
    // print_r($picture_names);
    // die;

    
    $data = array(
        'nama_paket'    => $this->input->post('nama_paket'),
        'foto_paket'          => $picture_name,
        'deskripsi'     => $this->input->post('deskripsi'),
        
    );
    $this->db->insert('paket',$data);

    $lastID = $this->db->insert_id();

    foreach ($picture_names as $picture_name) {
        $dataGambar = array(
        "id_paket" => $lastID,
        "galeri" => $picture_name
        );
        $this->db->insert('galeri', $dataGambar);
        }

    // print_r($dataGambar);

    }

    public function delete_galeri_by_paket($id_paket, $galeri) { 
        if (!is_array($galeri)) { 
            $galeri = explode(',', $galeri); 
            } 
        foreach ($galeri as $galeris) { 
            if (file_exists('./assets/img/paket/' . $galeris)) {
                unlink('./assets/img/paket/' . $galeris); 
                } 
            } 
            $this->db->where('id_paket', $id_paket); 
            $this->db->delete('galeri');
    }

    public function update_paket($picture_name,$picture_names,$id_paket){
            // print_r($picture_names);
            // die
        $data = array(
            'nama_paket'    => $this->input->post('nama_paket'),
            'foto_paket'          => $picture_name,
            'deskripsi'     => $this->input->post('deskripsi')
            
        );
        $where = array(
            'id_paket'    => $id_paket
        );

        $this->db->update('paket',$data,$where);
       
    
        if (!empty($picture_names)) {
        foreach ($picture_names as $picture_name) {
            $dataGambar = array(
            "galeri" => $picture_name,
            "id_paket" => $id_paket
            );
            $this->db->insert('galeri', $dataGambar);            
            $this->db->where('galeri', $id_paket);            
            }
        }
        // print_r($dataGambar);
        }


    public function getAllPaket(){
        $this->db->select('p.id_paket, p.nama_paket, p.foto_paket, p.deskripsi, GROUP_CONCAT(g.galeri SEPARATOR " | ") as galeri');
        $this->db->from('paket p'); 
        $this->db->join('galeri g', 'g.id_paket = p.id_paket', 'left'); 
        $this->db->group_by('p.id_paket');
        $query = $this->db->get(); return $query->result_array();
    }

    public function get_paket_by_id($id) {
        return $this->db->get_where('paket', array('id_paket' => $id))->row_array();
    }
    
    public function get_galeri_by_paket($id) {
        return $this->db->get_where('galeri', array('id_paket' => $id))->result_array();
    }
    
    public function delete_paket($id) {
        $this->db->where('id_paket', $id);
        $this->db->delete('galeri');
    
        $this->db->where('id_paket', $id);
        $this->db->delete('paket');
    }
    
}