<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	public function index($size)
	{
		$data["title"] = "Homepage";

		$this->load->view('pages/homepage');
	}
}
