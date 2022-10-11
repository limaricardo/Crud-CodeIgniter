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

		$data["title"] = "Dashboard - Gerenciador Conteúdo";
		$data["size"] = $this->gerenciador_model->titleSize('title_size');
		$data["article"] = $this->gerenciador_model->articleText('article');

        $this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/gerenciador-conteudo');
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
    }

	public function storeFontSize() {

		$title_size = $_POST;

		$this->gerenciador_model->storeTitleSize($title_size);

		$data["size"] = $this->gerenciador_model->titleSize('title_size');
		$data["article"] = $this->gerenciador_model->articleText('article');

		$this->load->view('pages/homepage', $data); 
	}

	public function storeArticle() {

		$article = $_POST;

		$this->gerenciador_model->storeArticle($article);

		$data["size"] = $this->gerenciador_model->titleSize('title_size');
		$data["article"] = $this->gerenciador_model->articleText('article');

		$this->load->view('pages/homepage', $data); 
	}

}