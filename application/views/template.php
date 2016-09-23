<?php

$data['title'] = 'title';
$this->load->view('plantillas/header');
$this->load->view('plantillas/menu');
$this->load->view($main_content);
$this->load->view('plantillas/footer');

?>