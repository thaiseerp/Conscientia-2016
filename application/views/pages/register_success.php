<?php
$this->session->keep_flashdata('redirect_url');
header("Refresh:6; url=".$this->session->flashdata('redirect_url'));
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Conscientia 2016 | Registration Success</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link href="<?=base_url()?>contents/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" media="all" /> 
</head>
<body style="background-color:#000020">
 <div class="wrap1">
                 <header class="header1" role="banner">

				<div id="inner-header" class="wrap clearfix">
					
					<a id="logo" href="<?=base_url()?>" rel="nofollow"><img alt="Conscientia 2016" width="30" height="30" src="<?=base_url()?>contents/images/logo.png" /></a>
				    <span id="getting-started" class="hidden-xs" style="position:absolute;font-size: 15px;color: #fff;"></span><span class="nav-icon"></span>
					<span style="float:right;padding:0 40px;font-size:18px">
                    <?php 
                    if (!$this->ion_auth->logged_in())
                    { ?>
                    <a href="<?=base_url()?>register" style="color:#fff;">Register</a> | 
				    <a href="<?=base_url()?>login" style="color:#fff;">Login</a></span>
                    <?php 
                    }else {
                        ?>
                        <a href="<?=base_url()?>logout" style="color:#fff;">Logout</a></span>
                    <?php
                    }
                    ?>
				</div>
            </header>
<div class="info" >
    <p>
    Registration Successful
    <p>
        <br /><br /> <p align="center">
             This page will be redirected in <span id="time">5</span> seconds !
             
         </p>
</div>
</div>
    <footer class="footer" role="contentinfo" style="bottom: 0px;width: 100%;position: absolute;z-index: 20;left: 0;">
        
        <div id="inner-footer" class="wrap clearfix" style="padding:10px;width:95%">
            <div class="explore" style="border-bottom:1px solid #616A7A;margin-bottom:10px">
                <p style="color:#635C5C;font-size:22px">Explore Conscientia 2016</p>
                    <ul style="margin-left:-20px;padding:10px">
                        <li style="display: inline;"><a href="<?=base_url()?>">Home</a></li>
                        <li style="display: inline;"><a href="<?=base_url()?>events/">Events</a></li>
                        <li style="display: inline;"><a href="<?=base_url()?>workshops/">Workshops</a></li>
                        <li style="display: inline;"><a href="<?=base_url()?>team/">Contact us</a></li>
                    </ul>
            </div>

            <p class="source-org copyright">Conscientia 2016</p>

        </div>

    </footer>
  <script language="javascript">
  var elapsed = 5;
  function countdown() {
    if (elapsed > 0) {
      setInterval(function() {
      $("#time").html(elapsed);
      }, 1000);
    setTimeout("countdown()", 1000);
      elapsed--;
    }
  }
    setTimeout("countdown()", 1000);
    </script>
    
    <script src="<?=base_url()?>contents/js/jquery.js"></script>
</body>
</html>