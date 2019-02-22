<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_karyawan extends CI_Model {
	// Fungsi untuk menampilkan semua data siswa
	public function view(){
		return $this->db->get('penghuni')->result();
	}
	
	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
		
		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, NIS tidak harus divalidasi
		// Jadi NIS di validasi hanya ketika menambah data siswa saja
		if($mode == "save")
			$this->form_validation->set_rules('input_ktp', 'No_KTP', 'required|max_length[16]');
		
		$this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[30]');
		$this->form_validation->set_rules('input_unit', 'Unit', 'required|max_length[5]');
			
		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}
	
	// Fungsi untuk melakukan simpan data ke tabel siswa
	public function save(){
		$data = array(
			"No_KTP" => $this->input->post('input_ktp'),
			"Nama" => $this->input->post('input_nama'),
			"Unit" => $this->input->post('input_unit'),
		);
		
		$this->db->insert('penghuni', $data); // Untuk mengeksekusi perintah insert data
	}
	
	// Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
	public function edit($ktp){
		$data = array(
			"Nama" => $this->input->post('input_nama'),
			"Unit" => $this->input->post('input_unit'),
		);
		
		$this->db->where('No_KTP', $ktp);
		$this->db->update('penghuni', $data); // Untuk mengeksekusi perintah update data
	}
	
	// Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
	public function delete($ktp){
		$this->db->where('No_KTP', $ktp);
		$this->db->delete('penghuni', $data); // Untuk mengeksekusi perintah delete data
	}

	/*public function aksi_login() {
		$nip = $this->input->post('NIP');
		$nama = $this->input->post('Nama');
		$where  = array('NIP'=>$nip, 'Nama'=>$nama);
		$cek = $this->m_karyawan->cek_login('karyawan', $where)->num_rows();
		if($cek>0) {
			$data_session = array('')
		}

	}*/
}
