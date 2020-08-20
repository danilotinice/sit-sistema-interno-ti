<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends MX_Controller
{
	function __construct()
	{
		// $this->load->library('');
	}

	public function index()
	{
		$this->load->view('usuario/index');

	}

	public function update()
	{
		$this->load->view('usuario/usuario-update');

	}
	
}