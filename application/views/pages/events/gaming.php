<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conscientia 2016 | Events | Cyberia</title>
	<meta name="author" content="Conscientia" />
	<link rel="shortcut icon" href="<?=base_url()?>/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/fonts/feather/style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/indevent.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/loader.css">
	<script src="<?=base_url()?>contents/js/modernizr-2.6.2.min.js"></script>
    <style>
        .zoomer__area,.preview {
            position: absolute;
	           top: 61.25%;
	left: 54.5%;
	-webkit-transform: translate3d(-50%,-50%,0);
	transform: translate3d(-50%,-50%,0);
}
    </style>
</head>
<body>
<div id="loader-wrapper">
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
	
		
					<h1  style="color:#36CFA3;margin:70px auto 10px 40%;font-size:40px">Gaming Events</h1><br>
                    <h3 style="color:#36CFA3;">&#8377; 50 entry fee per person per game</h3><br />
                    <strong style="color:#36CFA3;font-size:24px;padding:10px">Counter Strike 1.6</strong>
					<ul style="color:#36CFA3;font-size:18px;padding:10px">
                        <li style="margin-left:25px">4 maps will be there: Dust 2, Inferno, Nuke, Train.</li>
                        <li style="margin-left:25px">Map will be selected randomly.</li>
                        <li style="margin-left:25px">5 member team will be there.</li>
                        <li style="margin-left:25px">Friendly fire on.</li>
                        <li style="margin-left:25px">Time limit 1 min 45 sec and whoever will 11 rounds that will be in another stage, 10 rounds will be in terrorist and 10 rounds will be in counter-terrorist</li>
                        <li style="margin-left:25px">Players can bring there own peripherals</li>
                    </ul>
                    
<br /><br />

                    <strong style="color:#36CFA3;font-size:24px;padding:10px">FIFA 2011</strong>
					<ul style="color:#36CFA3;font-size:18px;padding:10px">
                        <li style="margin-left:25px">2 member team.</li>
                        <li style="margin-left:25px">Standard game will be provided.</li>
                        <li style="margin-left:25px">5 minutes will be half time, in final match it will be 7 min. In case of draw 5 min. of next match</li>
                        <li style="margin-left:25px">Club and national teams only no classic and world 11 teams.</li>
                    </ul>    
                    
      <br /><br />              
                    
                    <strong style="color:#36CFA3;font-size:24px;padding:10px">COD</strong>
					<ul style="color:#36CFA3;font-size:18px;padding:10px">
                        <li style="margin-left:25px">COD MW1</li>
                        <li style="margin-left:25px">5 member team.</li>
                        <li style="margin-left:25px">All rounds will be in hardcore mode.</li>
                        <li style="margin-left:25px">Priliminary rounds will be team deathmatch and the finals will consist of one round of team deathmatch and one of search and 
   destroy (In case of a tie , the winners willbe decided with a round of sabotage).</li>
                        <li style="margin-left:25px">Overkill perk is not allowed.</li>
                        <li style="margin-left:25px">Participants are required to bring their own devices (Special mods are not allowed).</li>
                    </ul>


        
                    
                   
                    <br>
                    <p style="color:#36CFA3;font-size:22px">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#36CFA3;font-size:22px;">
                        <p>Ankit Sachan</p>9496742756                    
                    </div>
			
            
            
            
<footer class="footer" style="margin: 100px -15px 0 -15px;"> 
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
    
  		<script src="<?=base_url()?>contents/js/jquery.min.js"></script>
		<script>
            $(window).load(function() {
                $('body').addClass('loaded');
            });
		</script>
</body>
</html>