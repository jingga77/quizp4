<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TskripsiModel extends CI_Model {
	// Fungsi untuk menampilkan semua data skrips
	public function view(){
		return $this->db->get('tskripsi')->result();
	}
	
	// Fungsi untuk menampilkan data skripsi berdasarkan NIM nya
	public function view_by($nim){
		$this->db->where('nim', $nim);
		return $this->db->get('tskripsi')->row();
	}
	
	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
		
		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, NIM tidak harus divalidasi
		// Jadi NIM di validasi hanya ketika menambah data skripsi saja
		if($mode == "save")
		$this->form_validation->set_rules('input_nim', 'NIM', 'required|numeric|max_length[10]');
		$this->form_validation->set_rules('input_nama', 'NAMA', 'required|max_length[50]');
		$this->form_validation->set_rules('input_judul', 'JUDUL SKRIPSI', 'required');
		$this->form_validation->set_rules('input_pemb', 'PEMBIMBING', 'required|max_length[50]');
			
		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}
	
	// Fungsi untuk melakukan simpan data ke tabel skripsi
	public function save(){
		$data = array(
			"nim" => $this->input->post('input_nim'),
			"nama" => $this->input->post('input_nama'),
			"judul" => $this->input->post('input_judul'),
			"pemb" => $this->input->post('input_pemb')
		);
		
		$this->db->insert('tskripsi', $data); // Untuk mengeksekusi perintah insert data
	}
	
	// Fungsi untuk melakukan ubah data skripsi berdasarkan NIM
	public function edit($nim){
		$data = array(
			"nama" => $this->input->post('input_nama'),
			"judul" => $this->input->post('input_judul'),
			"pemb" => $this->input->post('input_pemb')
		);
		
		$this->db->where('nim', $nim);
		$this->db->update('tskripsi', $data); // Untuk mengeksekusi perintah update data
	}
	
	// Fungsi untuk melakukan menghapus data skripsi berdasarkan NIM
	public function delete($nim){
		$this->db->where('nim', $nim);
		$this->db->delete('tskripsi'); // Untuk mengeksekusi perintah delete data
	}
}
