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

	public function show($id)
	{
		return $this->db->get_where("tb_games", array(
			"id" => $id
		))->row_array();
	}

	public function update($id, $game)
	{
		$this->db->where("id", $id);
		return $this->db->update("tb_games", $game);
	}

	public function destroy($id)
	{
		$this->db->where("id", $id);
		return $this->db->delete("tb_games");
	}

	public function sum()
	{
		$this->db->select_sum("price");
		$result = $this->db->get("tb_games")->result_array();
		return $result[0]["price"];
	}

	public function filter($selectedOption)
	{	
		$selectedOption === "asc" ? $this->db->order_by("price", "ASC") : $this->db->order_by("price", "DESC");
		$filtered = $this->db->get("tb_games")->result_array();
		return $filtered;
	}
}

// [0]["price"]