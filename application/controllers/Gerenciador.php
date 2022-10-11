<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerenciador extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("gerenciador_model");
	}

    public function index() 
	{

		$data["title"] = "Dashboard - Gerenciador Conteúdo";
		$data["size"] = $this->gerenciador_model->titleSize('title_size');
		$data["article"] = $this->gerenciador_model->articleText('article');

        $this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/gerenciador-conteudo');
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
    }


	// Guardar "size" do título
	public function storeFontSize() 
	{

		$title_size = $_POST;

		$this->gerenciador_model->storeTitleSize($title_size);

		$data["size"] = $this->gerenciador_model->titleSize('title_size');
		$data["article"] = $this->gerenciador_model->articleText('article');

		$this->load->view('pages/homepage', $data); 
	}
	
	// Guardar "content" do artigo
	public function storeArticle() 
	{

		$article = $_POST;

		$this->gerenciador_model->storeArticle($article);

		$data["size"] = $this->gerenciador_model->titleSize('title_size');
		$data["article"] = $this->gerenciador_model->articleText('article');

		$this->load->view('pages/homepage', $data); 
	}

	// Gerar uma nova caixa de votação

	public function storeVote() 
	{
		$vote = $_POST;

		$query = $this->db->get('tb_vote');
        $query = $query->num_rows();

		if($query === 0)
		{
			$this->gerenciador_model->insertVote($vote);
		}else 
		{
			$id = $this->db->get("tb_vote")->result_array();
			$id = $id[0]["id"];
			$this->gerenciador_model->updateVote($id, $vote);
		}

		$data["size"] = $this->gerenciador_model->titleSize('title_size');
		$data["article"] = $this->gerenciador_model->articleText('article');
		$data["vote"] = $this->db->get("tb_vote")->result_array();
		
		$this->load->view('pages/homepage', $data); 


	}

}