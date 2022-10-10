<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerenciador extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("gerenciador_model");
	}

    public function index() {

		$data["title"] = "Dashboard - CodeIgniter";

        $this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/gerenciador-conteudo');
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
    }

	public function storeFontSize() {

		$title_size = $_POST;

		$this->gerenciador_model->store($title_size);

		$data = $this->gerenciador_model->title_size_row()($title_size);

		$this->load->view('pages/homepage', $data); 
	}

}