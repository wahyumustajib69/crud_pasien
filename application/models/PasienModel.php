<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class PasienModel extends CI_Model{

	//menampilkan data pasien
	public function view(){
		return $this->db->get('pasien')->result();
	}

	public function view_by($id){
		$this->db->where('id', $id);
		return $this->db->get('pasien')->row();
	}

	public function validation($mode){
		$this->load->library('form_validation');

		if($mode == "save"){
			$this->form_validation->set_rules('input_id','Id Pasien','required|max_length[10]');
			$this->form_validation->set_rules('input_rm','No Rekam Medis','required|max_length[20]');
			$this->form_validation->set_rules('input_nama','Nama Pasien','required|max_length[250]');
			$this->form_validation->set_rules('input_alm','Alamat Pasien','required|max_length[250]');
			$this->form_validation->set_rules('input_umur','Umur Pasien','required|numeric|max_length[2]');

			if($this->form_validation->run())
				return TRUE;
			else
				return FALSE;
		}

		if($mode=="update"){
			$this->form_validation->set_rules('input_rm','No Rekam Medis','required|max_length[20]');
			$this->form_validation->set_rules('input_nama','Nama Pasien','required|max_length[250]');
			$this->form_validation->set_rules('input_alm','Alamat Pasien','required|max_length[250]');
			$this->form_validation->set_rules('input_umur','Umur Pasien','required|numeric|max_length[2]');

			if($this->form_validation->run())
				return TRUE;
			else
				return FALSE;
		}
	}

	public function save(){
		$data = array(
			"id"				=> $this->input->post('input_id'),
			"no_rekam_medis"	=> $this->input->post('input_rm'),
			"nama_pasien"		=> $this->input->post('input_nama'),
			"alamat"			=> $this->input->post('input_alm'),
			"umur"				=> $this->input->post('input_umur')
		);
		$this->db->insert('pasien', $data);
	}

	public function edit($id){
		$data = array(
			"no_rekam_medis"	=> $this->input->post('input_rm'),
			"nama_pasien"		=> $this->input->post('input_nama'),
			"alamat"			=> $this->input->post('input_alm'),
			"umur"				=> $this->input->post('input_umur')
		);
		$this->db->where('id',$id);
		$this->db->update('pasien', $data);
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('pasien');
	}

}
