<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_despedida extends CI_Controller {

	function __construct()
    {
        parent ::__construct();
    }   	


	public function index()
	{
		$this->load->view('components/navbar');
		$this->load->view('View_despedida');
		$this->load->view('components/footer');
		
	}
	
}
