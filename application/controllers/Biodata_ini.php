<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Biodata_ini extends MY_Admin {

    function __construct(){
        parent::__construct();
        $this->load->model('m_biodata_ini');
    }

    function index(){
        
        $data['data'] = $this->m_biodata_ini->get_data();
        $data['pengdaNotaris'] = $this->m_biodata_ini->get_pengda('f');
        $data['pengdaIppat'] = $this->m_biodata_ini->get_pengda('t');
        $this->theme('v_biodata_ini',$data, get_class($this));
        
    }

    public function save()
    {
        $data = $this->input->post();
        foreach ($data['email'] as $key => $value) {
            $data['email'.($key+1)] = $value;
        }
        unset($data['email']);
        foreach ($data as $key => $value) {
            if (strpos($key, 'tanggal') !== false || strpos($key, 'tgl') !== false) {
                $data[$key] = date('Y-m-d',strtotime($value));
            }
        }
        if ($_FILES['upload_sk_notaris']['name']) {
            $data['upload_sk_notaris'] = $this->upload_data('upload_sk_notaris','SK_NOTARIS_'.$data['no_sk_notaris']);
        }
        if ($_FILES['upload_sk_ippat']['name']) {
            $data['upload_sk_ippat'] = $this->upload_data('upload_sk_ippat','SK_IPPAT_'.$data['no_sk_notaris']);
        }
        if ($_FILES['upload_ba_notaris']['name']) {
            $data['upload_ba_notaris'] = $this->upload_data('upload_ba_notaris','BA_NOTARIS_'.$data['no_ba_notaris']);
        }
        if ($_FILES['upload_ba_ippat']['name']) {
            $data['upload_ba_ippat'] = $this->upload_data('upload_ba_ippat','BA_IPPAT_'.$data['no_ba_ippat']);
        }
        if ($data['bio_id'] > 0) {
            $this->db->where('bio_id',$data['bio_id'])->update('biodata_ini',$data);
        }else{
            $this->db->insert('biodata_ini',$data);
        }


        if ($this->db->insert_id()) {
            $this->session->set_flashdata('message','Data Berhasil Disimpan');
            redirect('biodata_ini');
        }else{
            $err = $this->db->error();
            $this->session->set_flashdata('message',$err['message']);
            redirect('biodata_ini');
        }
    }

    public function upload_data($file,$nama)
    {
        if ($file == 'upload_sk_notaris' or $file == 'upload_ba_notaris') {
            $config['upload_path']          = './assets/uploads/ini/';
        }else{
            $config['upload_path']          = './assets/uploads/ppat/';
        }
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
        $data = $this->m_biodata_ini->get_data($id);
        $respon=array();
        foreach ($data as $key => $value) {
            $respon = $value;
        }
        echo json_encode($respon);
    }

    public function delete($id)
    {
        $data = $this->db->where('bio_id',$id)->get('biodata_ini')->row();
        if ($data->upload_sk_notaris) {
            $filename = explode(".", $data->upload_sk_notaris)[0];
            array_map('unlink', glob(FCPATH."assets/uploads/ini/$filename.*"));
        }

        if ($data->upload_sk_ippat) {
            $filename = explode(".", $data->upload_sk_ippat)[0];
            array_map('unlink', glob(FCPATH."assets/uploads/ppat/$filename.*"));
        }

        if ($data->upload_ba_notaris) {
            $filename = explode(".", $data->upload_ba_notaris)[0];
            array_map('unlink', glob(FCPATH."assets/uploads/ini/$filename.*"));
        }

        if ($data->upload_ba_ippat) {
            $filename = explode(".", $data->upload_ba_ippat)[0];
            array_map('unlink', glob(FCPATH."assets/uploads/ppat/$filename.*"));
        }
        $this->db->where('bio_id',$id)->delete('biodata_ini');
        redirect('biodata_ini');
    }
}