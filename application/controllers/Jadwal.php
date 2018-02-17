<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_jadwal_mhs');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function view()
	{
		$data['sql'] = $this->M_jadwal_mhs->getjadwalmhs();
		$this->load->view('templates/header');
		$this->load->view('pages/jadwal_mhs',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$this->load->view('templates/header');
		$this->load->view('pages/form');
		$this->load->view('templates/footer');
	}

	public function simpan(){
		//Get data from form
		$kd_matkul=$this->input->post('kd_matkul');
		$hari=$this->input->post('hari');
		$matkul=$this->input->post('matkul');
		$jm_masuk=$this->input->post('jm_masuk');
		$jm_keluar=$this->input->post('jm_keluar');
		$data=array(
		'kd_matkul'=>$kd_matkul,
		'hari'=>$hari,
		'matkul'=>$matkul,
		'jm_masuk'=>$jm_masuk,
		'jm_keluar'=>$jm_keluar);
		$this->M_jadwal_mhs->simpan($data);
		$this->view();
	}
}
