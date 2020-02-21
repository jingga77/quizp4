<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tskripsi extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('TskripsiModel'); // Load model ke controller ini
	}
	
	public function index(){
		$data['tskripsi'] = $this->TskripsiModel->view();
		$this->load->view('tskripsi/index', $data);
	}
	
	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->TskripsiModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->TskripsiModel->save(); // Panggil fungsi save() yang ada di TskripsiModel.php
				redirect('tskripsi');
			}
		}
		
		$this->load->view('tskripsi/form_tambah');
	}
	
	public function ubah($nim){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->TskripsiModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->TskripsiModel->edit($nim); // Panggil fungsi edit() yang ada di TskripsiModel.php
				redirect('tskripsi');
			}
		}
		
		$data['tskripsi'] = $this->TskripsiModel->view_by($nim);
		$this->load->view('tskripsi/form_ubah', $data);
	}
	
	public function hapus($nim){
		$this->TskripsiModel->delete($nim); // Panggil fungsi delete() yang ada di TskripsiModel.php
		redirect('tskripsi');
	}
}
