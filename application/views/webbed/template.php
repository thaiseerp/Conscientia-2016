<?php

if(!isset($header_data))
{ 
	$header_data = array(
	'title' => 'Online Treasure Hunt'
	);
}

//load header, page and footer views
$this->load->view('webbed/includes/header',$header_data);
$this->load->view('webbed/pages/'.$page);
$this->load->view('webbed/includes/footer');