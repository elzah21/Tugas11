<?php

class Mahasiswa extends CI_Controller{
	public function index(){
		$data['mahasiswa'] = $this->m_mahasiswa->view_mhs()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('mahasiswa', $data);
		$this->load->view('template/footer');
	} 
}