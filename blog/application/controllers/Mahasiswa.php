<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	
	public function index()
	{
		// load model
        $this->load->model('mahasiswa_model', 'mhs1');

        // class model 
        $this->mhs1->id = 1;
        $this->mhs1->nim = "01102210";
        $this->mhs1->nama = "Josept Stalin";
        $this->mhs1->gender = "L";
        $this->mhs1->ipk = 3.97 ; 
        
        // load model
        $this->load->model('mahasiswa_model', 'mhs2 '); 

         // class model
    $this->mhs2 ->id = 2;
    $this->mhs2->nim = "01102211";
    $this->mhs2->nama = "Keegan";
    $this->mhs2->gender = "L";
        $this->mhs2->ipk = 3.69 ;

        $list_mhs = [$this->mhs1, $this->mhs2 ];
        $data['list_mhs'] = $li

        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');

	}
}