<?php

class M_biodata_ppat extends CI_Model {

	public function get_data($id=null)
	{
		if ($id) {
			$this->db->where('bio_id',$id);
		}

		$data = $this->db->get('biodata_ppat')->result();
		return $data;
	}

	public function get_pengda()
	{
		$data = $this->db->where('is_ppat','t')->get('tabel_pengda')->result();

		return $data;
	}
}