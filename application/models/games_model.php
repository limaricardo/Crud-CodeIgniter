<?php

class Games_model extends CI_Model {

	public function index()
	{
		return $this->db->get("tb_games")->result_array();
	}
	
	public function store($game)
	{
		$this->db->insert("tb_games", $game);
	}
}
