<?php

class M_biodata_ini extends CI_Model {

	public function get_data($id=null)
	{
		if ($id) {
			$this->db->where('bio_id',$id);
		}

		$data = $this->db->get('biodata_ini')->result();
		return $data;
	}

	public function get_pengda($status)
	{
		$data = $this->db->where('is_ppat',$status)->get('tabel_pengda')->result();

		return $data;
	}
}