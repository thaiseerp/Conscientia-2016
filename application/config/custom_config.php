<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//https://developers.facebook.com/docs/reference/php/facebook-getLoginUrl/
$config['facebook_login_parameters'] = array(
											'scope' => 'email',
											'display' => 'page'
											);