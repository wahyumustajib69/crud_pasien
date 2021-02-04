<?php if( !defined('BASEPATH')) exit('No direct script access allosed');


class Pasien extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('PasienModel');
	}

	public function index(){
		$data['pasien'] = $this->PasienModel->view();
		$this->load->view('pasien/index', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){
			if($this->PasienModel->validation("save")){
				$this->PasienModel->save();
				redirect('pasien');
			}
		}
		$this->load->view('pasien/pasien_tambah');
	}

	public function ubah($id){
		if($this->input->post('submit')){
			if($this->PasienModel->validation("update")){
				$this->PasienModel->edit($id);
				redirect('pasien');
			}
		}
		$data['pasien'] = $this->PasienModel->view_by($id);
		$this->load->view('pasien/pasien_ubah', $data);
	}

	public function hapus($id){
		$this->PasienModel->delete($id);
		redirect('pasien');
	}
}