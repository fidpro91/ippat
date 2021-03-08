<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_m extends CI_Model {

	function log_model($param){
		$data = $this->db->where($param)->get('tabel_user');
		if($data->num_rows()>0){
			return $data->result();
		}else{
			return false;
		}
	}

}