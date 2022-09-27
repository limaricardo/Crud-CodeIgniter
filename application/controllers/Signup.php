<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
	public function index()
	{
		$data["title"] = "Sign-up - CodeIgniter";

		$this->load->view('pages/signup', $data);
	}

    public function store()
    {
        $this->load->model("users_model");
        $user = array (
            "name" => $_POST["name"],
            "country" => $this->input->post("country"),
            "email" => $_POST["email"],
            "password" => md5($_POST["password"])
        );

        $this->users_model->store($user);
        redirect("login");
    }
}
