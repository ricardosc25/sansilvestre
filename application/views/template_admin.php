<?php

$data['title'] = 'title';
$this->load->view('plantillas/header');
$this->load->view('plantillas/menuAdmin');
$this->load->view($main_content);
$this->load->view('plantillas/footer_admin');

?>