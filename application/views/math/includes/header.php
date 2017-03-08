<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">

	<title><?=$title?></title>
	<link href="<?=base_url();?>contents/css/bootstrap.online.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/animate.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/bootstrap-dropdownhover.min.css">
	<link href="<?=base_url();?>contents/css/online.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/loader.css">
    
    
	<link rel="shortcut icon" href="<?=base_url()?>favicon.ico">


	<meta property="og:title" content="Mathematrix">
	<meta property="og:type" content="Mathematrix">
	<meta property="og:url" content="http://www.conscientia.co.in/">
</head>
<body style="background:#000020">
         <div id="loader-wrapper" >
			<div id="loader"></div>

			<div class="loader-section section-left" style="background:#0F1922"></div>
            <div class="loader-section section-right" style="background:#0F1922"></div>

		</div>
		
        <header class="header1" role="banner">

				<div id="inner-header" class="wrap clearfix">
					
					<a id="logo" href="<?=base_url()?>" rel="nofollow"><img alt="Conscientia 2016" width="30" height="30" src="<?=base_url()?>contents/images/logo.png" style="margin-top: 10px;"/></a>
                    <div class="navbar-collapse collapse">
	      <ul class="nav navbar-nav">
	      	<?php if($this->ion_auth->logged_in()) { ?>
	        <li><a href="<?=base_url();?>mathematrix">Questions</a></li>
	        <?php } ?>
	        <li><a href="<?=base_url();?>mathematrix/rules">Rules</a></li>
	        <li><a href="<?=base_url();?>mathematrix/leaderboard">Leaderboard</a></li>
          </ul>
	      <ul class="nav navbar-nav navbar-right">
					
                    <?php 
                    if (!$this->ion_auth->logged_in())
                    { ?>
                    
                    <li><a href="<?=base_url()?>register">Register</a><li> 
				    <li><a href="<?=base_url()?>login">Login</a></li>
                    <?php 
                    }else {
                        ?>
                        <li><a href="<?=base_url()?>logout">Logout</a></li>
                    <?php
                    }
                    ?>
                    </ul>
                    </div>
				</div>
            </header>