<?php

class Gerenciador_model extends CI_Model {

    public function index()
    {
        return $this->db->get("tb_font_size")->result_array();
    }
    
    public function titleSize($title_size) {
        $query = $this->db->get_where('tb_font_size', array(
			"name" => 'title_size'
		))->row_array();
        return $query["size"];
    }

    public function storeTitleSize($title_size)
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
            return $this->db->insert("tb_font_size", $title_size);
        }           
        else
        {
            $this->db->where('name', 'title_size');
            return $this->db->update("tb_font_size", $title_size);
        }    
    }

    public function storeArticle($article)
    {
        $this->db->where('name', 'article');
        $query = $this->db->get('tb_text');
        $query = $query->num_rows();

        if(empty($article))
        {
            return array();
        }      
        elseif($query == 0)
        {
            return $this->db->insert("tb_text", $article);
        }           
        else
        {
            $this->db->where('name', 'article');
            return $this->db->update("tb_text", $article);
        }
    }

    public function articleText($article) {
        $query = $this->db->get_where('tb_text', array(
			"name" => 'article'
		))->row_array();
        return $query["content"];
    }
}