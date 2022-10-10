<?php

class Gerenciador_model extends CI_Model {

    public function index()
    {
        return $this->db->get("tb_font_size")->result_array();
    }
    
    public function title_size_row($title_size) {
        $query = $this->db->get_where('tb_font_size', array(
			"name" => 'title_size'
		))->row_array();
        return $query;
    }

    public function store($title_size)
    {
        $this->db->where('name', 'title_size');
        $query = $this->db->get('tb_font_size');
        $query = $query->num_rows();

        if(empty($title_size))
        {
            return array();
        }      
        elseif($query == 0)
        {
            echo($query);
            exit;
            return $this->db->insert("tb_font_size", $title_size);
        }           
        else
        {
            $this->db->where('name', 'title_size');
            return $this->db->update("tb_font_size", $title_size);
        }
            
    }
}