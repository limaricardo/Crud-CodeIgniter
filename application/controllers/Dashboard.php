<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("games_model");
	}

	public function index()
	{	
		$this->load->model("games_model");
		$data["games"] = $this->games_model->index();
		$data["title"] = "Dashboard - CodeIgniter";
		$data["result"] = $this->games_model->sum();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function pesquisar()
	{	
		$this->load->model("busca_model");
		$data["title"] = "Resultado da pesquisa por *". $_POST["busca"] ."*";
		$data["result"] = $this->busca_model->buscar($_POST);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/resultado', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function filter()
	{	
		$selectedOption = $_POST["filter"];
		$data["filtered"] = $this->games_model->filter($selectedOption);
		$data["games"] = $data["filtered"];
		$data["result"] = $this->games_model->sum();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
}
