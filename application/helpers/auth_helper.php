<?php

function permission() {
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");

    if(!$loggedUser) {
        $ci->session->set_flashdata("danger", "Você precisa esta logado para acessar esta página.");
        redirect("login");
    }
    return $loggedUser;
}