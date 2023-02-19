<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

	public function index()
	{
        $data['title'] = 'Halaman Utama';
        $data['heading'] = 'Lorem Ipsum';
    
		$this->load->view('home', $data);
	}

}
