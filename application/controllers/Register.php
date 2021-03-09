<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
	{
		$this->load->model('m_biodata_ini');
		$data['pengdaNotaris'] = $this->m_biodata_ini->get_pengda('f');
        $data['pengdaIppat'] = $this->m_biodata_ini->get_pengda('t');
		$this->load->view('v_user_inputIni',$data);
	}

	public function save()
    {
        $data = $this->input->post();
        foreach ($data['email'] as $key => $value) {
            $data['email'.($key+1)] = $value;
        }
        unset($data['email']);
        unset($data['btnsave']);
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
        $this->db->insert('biodata_ini',$data);
        if ($this->db->Insert_id()) {
    		$this->session->set_flashdata('message','<i class="icon fa fa-check"></i><h3>Selamat Data berhasil disimpan!</h3>');
    		redirect('register/message');
        }else{
            $err = $this->db->error();
            $this->session->set_flashdata('message',$err['message']);
            redirect('register');
        }
    }

    public function upload_data($file,$nama)
    {
        if ($file == 'upload_sk_notaris' or $file == 'upload_ba_notaris') {
            $config['upload_path']          = './assets/uploads/ini/';
        }else{
            $config['upload_path']          = './assets/uploads/ppat/';
        }
        $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
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

    public function saveppat()
    {
        $data = $this->input->post();
        if ($_FILES['upload_sk']['name']) {
            $data['upload_sk'] = $this->upload_dataPPat('upload_sk','SK_'.$data['nama_lengkap']);
        }
        if ($_FILES['upload_ba_notaris']['name']) {
            $data['upload_ba_notaris'] = $this->upload_dataPPat('upload_ba_notaris','BA_'.$data['nama_lengkap']);
        }
        $this->db->insert('biodata_ppat',$data);
        if ($this->db->affected_rows()) {
        	$this->session->set_flashdata('message','Data ini & PPAT berhasil disimpan');
            redirect('register/message');
        }else{
            print_r($this->db->error());
        }
    }

    public function upload_dataPPat($file,$nama)
    {
        $config['upload_path']          = './assets/uploads/ppat/';
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

    public function find_data($id)
    {
    	$data = $this->db->where('bio_id',$id)->get('biodata_ini')->row();

    	echo json_encode($data);
    }

    public function message()
    {
    	$this->load->view('v_result_message');
    }
}
