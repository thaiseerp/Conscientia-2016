<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Conscientia 2016 | Sponsors</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link rel="shortcut icon" href="<?=base_url()?>favicon.ico">    
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/sponsors.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/loader.css" />
		<script src="<?=base_url()?>contents/js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
       <div id="loader-wrapper" >
			<div id="loader"></div>

			<div class="loader-section section-left" style="background:#0F1922"></div>
            <div class="loader-section section-right" style="background:#0F1922"></div>

		</div>
		<div class="container">
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
            
			<div align="center" style="margin-top:70px">
				<h1 style="color:#3467ff">Our Previous Sponsors</h1>	
			</div>
			<ul class="grid effect-4" id="grid">
				<li><img src="<?=base_url()?>contents/images/sponsors/ubi.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/flipkart.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/lic.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/agi.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/ipost.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/hungama.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/technopark.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/lq.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/vh1.png"></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/uaex.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/bigfm.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/sidco.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/xtreme.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/amtek.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/dc.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/emami.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/fadoo.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/edutech.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/unocoin.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/yentha.png"></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/tprojekt.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/ebay.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/ktm.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/keltron.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/mobikwik.png"></img></li>
				<li><img src="<?=base_url()?>contents/images/sponsors/grandmaster.png"></img></li>
			</ul>
            
          <footer class="footer" role="contentinfo">
                
				<div id="inner-footer" class="wrap clearfix">
                    <div class="explore" style="border-bottom:1px solid #616A7A;margin-bottom:10px">
                        <p style="font-size:22px">Explore Conscientia 2016</p>
                            <ul style="margin-left:-50px">
                                <li style="display: inline;"><a href="<?=base_url()?>">Home</a></li>
                                <li style="display: inline;"><a href="<?=base_url()?>events/">Events</a></li>
                                <li style="display: inline;"><a href="<?=base_url()?>workshops/">Workshops</a></li>
                                <li style="display: inline;"><a href="<?=base_url()?>team/">Contact us</a></li>
                            </ul>
                    </div>

					<p class="source-org copyright">Conscientia 2016</p>

				</div>

			</footer>    
            
		</div>
		<script src="<?=base_url()?>contents/js/masonry.pkgd.min.js"></script>
		<script src="<?=base_url()?>contents/js/imagesloaded.js"></script>
		<script src="<?=base_url()?>contents/js/classie.js"></script>
		<script src="<?=base_url()?>contents/js/AnimOnScroll.js"></script>
		<script src="<?=base_url()?>contents/js/jquery.min.js"></script>
		<script src="<?=base_url()?>contents/js/jquery.countdown.js"></script>
		<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
            $("#getting-started").countdown("2016/03/18 17:00:00", function(event) {
                $(this).text(
                    event.strftime('%D Days %Hh %Mm %Ss to go')
                );
	        });
            $(window).load(function() {
                $('body').addClass('loaded');
            });
		</script>
	</body>
</html>