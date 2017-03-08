<?php 
$this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">

	<title><?=$title?></title>
	<link href="<?=base_url();?>contents/css/bootstrap.online.css" rel="stylesheet">
	<link href="<?=base_url();?>contents/css/online.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/loader.css">
    
    
	<link rel="icon" href="<?=base_url();?>favicon.ico" type="image/png">


	<meta property="og:title" content="Online Treasure Hunt">
	<meta property="og:type" content="Webbed">
	<meta property="og:url" content="http://www.conscientia.co.in/">
	<meta property="og:description" content="An exciting online treasure hunt!">
	
	<script src="<?=base_url();?>contents/js/jquery.min.js"></script>
	<!--[if lt IE 9]>
	<script src="/contents/js/html5shiv.js"></script>
	<script src="/contents/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
         <div id="loader-wrapper" >
			<div id="loader"></div>

			<div class="loader-section section-left" style="background:#0F1922"></div>
            <div class="loader-section section-right" style="background:#0F1922"></div>

		</div>
        <div id="large-header" class="large-header">
                <canvas id="demo-canvas" style="position:fixed;z-index:-1"></canvas>
                </div>
		
        <header class="header1" role="banner">

				<div id="inner-header" class="wrap clearfix">
					
					<a id="logo" href="<?=base_url()?>" rel="nofollow"><img alt="Conscientia 2016" width="30" height="30" src="<?=base_url()?>contents/images/logo.png" style="margin-top: 10px;"/></a>
                    <div class="navbar-collapse collapse">
	      <ul class="nav navbar-nav">
	      	<?php if($this->ion_auth->logged_in()) { ?>
	        <li><a href="<?=base_url();?>webbed">Arena</a></li>
	        <?php } ?>
	        <li><a href="<?=base_url();?>webbed/rules">Rules</a></li>
	        <li><a href="<?=base_url();?>webbed/leaderboard">Leaderboard</a></li>
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
