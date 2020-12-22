<?php

class CController extends CI_Controller
{
	

    public function __construct(){
    	parent::__construct();
    	$this->load->model('CModel');
    }

//Menampilkan data
	public function index(){

        $data['isi_tabel'] = $this->CModel->semuaData();

        var_dump($data);
        die();

        
        $this->load->view('UTS/v_tampil');
	}
}   