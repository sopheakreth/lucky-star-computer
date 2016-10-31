<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_view extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}
}