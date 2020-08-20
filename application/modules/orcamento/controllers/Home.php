<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{
	function __construct()
	{
		// $this->load->library('');
	}

	public function index()
	{
		$this->load->view('home/index');

	}

	public function teste()
	{
		$this->load->view('home/index');

	}
	
}