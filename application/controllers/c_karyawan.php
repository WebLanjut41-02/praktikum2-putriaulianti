<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_karyawan extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('m_karyawan'); 
	}
	
	public function index(){
		$data['karyawan'] = $this->m_karyawan->view();
		$this->load->view('karyawan/index', $data);
	}
	
	public function tambah(){
		if($this->input->post('submit')){
			if($this->m_karyawan->validation("save")){ 
				$this->m_karyawan->save();
				redirect('penghuni');
			}
		}
		
		$this->load->view('karyawan/tambah_penghuni');
	}
	
	public function ubah($ktp){
		if($this->input->post('submit')){
			if($this->m_karyawan->validation("update")){
				$this->m_karyawan->edit($ktp);
				redirect('penghuni');
			}
		}
		
		$data['penghuni'] = $this->m_karyawan->view_by($ktp);
		$this->load->view('karyawan/ubah_penghuni', $data);
	}
	
	public function hapus($ktp){
		$this->m_karyawan->delete($ktp);
		redirect('penghuni');
	}
}
