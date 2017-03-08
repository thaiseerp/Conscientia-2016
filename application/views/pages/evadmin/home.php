<!DOCTYPE HTML>
<html>
<head>
<title>Conscientia 2016 | Event Admin Page</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="<?=base_url()?>contents/css/form.css" rel="stylesheet" type="text/css"  />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" media="all" /> 

<style>
    .info ul {
        padding:20px;list-style:square;
    }
    .info ul li {
        margin-bottom:5px;padding:5px;
    }
</style>

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
    <ul>
        <li><a href="<?=base_url()?>evadmin/botintheact">Bot in the Act</a></li>
        <li><a href="<?=base_url()?>evadmin/aparimit">Aparimit</a></li>
        <li><a href="<?=base_url()?>evadmin/mechamorphosis">Mechamorphosis</a></li>
        <li><a href="<?=base_url()?>evadmin/paripath">Paripath</a></li>
        <li><a href="<?=base_url()?>evadmin/vihang">Vihang</a></li>
        <li><a href="<?=base_url()?>evadmin/kaleidoscope">Kaleidoscope</a></li>
        <li><a href="<?=base_url()?>evadmin/philosophiaenaturalis">Philosophiae Naturalis</a></li>
        <!--<li><a href="evadmin/cyberia">Cyberia</a></li>-->
    </ul>
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
</body>
</html>