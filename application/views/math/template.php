<?php

if(!isset($header_data))
{ 
	$header_data = array(
	'title' => 'Online Treasure Hunt'
	);
}

//load header, page and footer views
$this->load->view('math/includes/header',$header_data);
$this->load->view('math/pages/'.$page);
$this->load->view('math/includes/footer');