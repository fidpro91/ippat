<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Biodata_ppat extends MY_Admin {

    function __construct(){
        parent::__construct();
        $this->load->model('m_biodata_ppat');
    }

    function index(){
        
        $data['data'] = $this->m_biodata_ppat->get_data();
        $data['pengda'] = $this->m_biodata_ppat->get_pengda();
        $this->theme('v_biodata_ppat',$data, get_class($this));
        
    }

    public function save()
    {
        $data = $this->input->post();
        if ($_FILES['upload_sk']['name']) {
            $data['upload_sk'] = $this->upload_data('upload_sk','SK_'.$data['nama_lengkap']);
        }
        if ($_FILES['upload_ba']['name']) {
            $data['upload_ba'] = $this->upload_data('upload_ba','BA_'.$data['nama_lengkap']);
        }
        if ($data['bio_id'] > 0) {
            $this->db->where('bio_id',$data['bio_id'])->update('biodata_ini',$data);
        }else{
            $this->db->insert('biodata_ini',$data);
        }
        if ($this->db->affected_rows()) {
            redirect('biodata');
        }else{
            print_r($this->db->error());
        }
    }

    public function upload_data($file,$nama)
    {
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = $nama;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload($file)) {
            return $this->upload->data("file_name");
        }else{
            return $this->upload->display_errors();
        }
    }

    public function find($id)
    {
        $data = $this->m_biodata_ppat->get_data($id);
        $respon=array();
        foreach ($data as $key => $value) {
            $respon = $value;
        }
        echo json_encode($respon);
    }

    public function delete($id)
    {
        $data = $this->db->where('bio_id',$id)->get('Biodata_ppat')->row();
        if ($data->upload_sk) {
            $filename = explode(".", $data->upload_sk)[0];
            array_map('unlink', glob(FCPATH."assets/uploads/$filename.*"));
        }

        if ($data->upload_ba) {
            $filename = explode(".", $data->upload_ba)[0];
            array_map('unlink', glob(FCPATH."assets/uploads/$filename.*"));
        }
        $this->db->where('bio_id',$id)->delete('biodata_ini');
        redirect('Biodata_ppat');
    }
}