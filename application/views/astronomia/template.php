<?php

if(!isset($header_data))
{ 
	$header_data = array(
	'title' => 'Conscientia 2016 | Astronmia - The Online Astronomy Treasure Hunt'
	);
}

//load header, page and footer views
$this->load->view('astronomia/includes/header',$header_data);
$this->load->view('astronomia/pages/'.$page);
$this->load->view('astronomia/includes/footer');