<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Conscientia 2016 | Schedule</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Lateral On-Scroll Sliding with jQuery - Timeline Example with CSS3" />
        <meta name="keywords" content="lateral, sides, slide, scroll, jquery, css3, timeline" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="<?=base_url()?>favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/timeline.css" />
		<!--[if lt IE 9]>
				<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/timelineIE.css" />
		<![endif]-->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
		<script type="text/javascript" src="<?=base_url()?>contents/js/modernizr.custom.timeline.js"></script>
        <style>
        @font-face { font-family: Aller; src: url('<?=base_url()?>contents/fonts/Aller/Aller_Rg.ttf'); font-style: normal; }
        * { font-family: Aller !important;
        font-style: normal;}
        </style>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/loader.css" />
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
			<div id="ss-links" class="ss-links">
				<a href="#Day0">Day 0</a>
				<a href="#Day1">Day 1</a>
				<a href="#Day2">Day 2</a>
				<a href="#Day3">Day 3</a>
			</div>
            <h2 class="ss-subtitle">Conscientia 2016 Timeline <span style="font-size:20px;float:right;margin-right:50px"><a href="#" style="color:cyan;">Download Schedule</a></span></h2>
            
            <div id="ss-container" class="ss-container">
                <div class="ss-row">
                    <div class="ss-left">
                        <h2 id="Day0">Day 0</h2>
                    </div>
                    <div id="Day0" class="ss-right">
                        <h2>18 March 2016</h2>
                    </div>
                </div>
                <div class="ss-row ss-large">
                    <div class="ss-left">
                        <a href="<?=base_url()?>" class="ss-circle ss-circle-1"></a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>4:30 PM - 7:00 PM</span>
                            <a href="<?=base_url()?>">INAUGURATION CEREMONY</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <h3>
                            <span>7:30 PM - 10:00 PM</span>
                            <a href="<?=base_url()?>events/aparimit">AstroReflections (Display)</a>
                        </h3>
                    </div>
					<div class="ss-right">
                        <a href="<?=base_url()?>events/aparimit" class="ss-circle ss-circle-2">AstroReflections (Display)</a>
                    </div>
                </div>
                <div class="ss-row ss-small">
                    <div class="ss-left">
						<a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-3">Alpha Geek Prelims</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>8:30 PM - 10:00 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Alpha Geek Prelims</a>
                        </h3>
                    </div>
                </div>
				
				<div class="ss-row">
                    <div class="ss-left">
                        <h2 id="Day1">Day 1</h2>
                    </div>
                    <div id="Day1" class="ss-right">
                        <h2>19 March 2016</h2>
                    </div>
                </div>
				<div class="ss-row ss-small">
                    <div class="ss-left">
                        <h3>
                            <span>9:30 AM - 11:00 AM</span>
                            <a href="<?=base_url()?>events/paripath">Circuiter Prelims</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/paripath" class="ss-circle ss-circle-4">Circuiter Prelims</a>
                    </div>
                </div>

				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/philosophiaenaturalis" class="ss-circle ss-circle-5">Sim-Phy</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>9:30 AM - 11:00 AM</span>
                            <a href="<?=base_url()?>events/philosophiaenaturalis">Sim-Phy</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <h3>
                            <span>9:30 AM - 12:00 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Alpha Geek round 2</a>
                        </h3>
                    </div>
                    <div class="ss-right">
                        <a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-3">Alpha Geek round 2</a>
                    </div>
                </div>
				<div class="ss-row ss-small">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-6">Bletchley Park Prelims (Kryptos)</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>10:30 AM - 12:00 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Bletchley Park Prelims (Kryptos)</a>
                        </h3>

                    </div>
                </div>
				<div class="ss-row ss-small">
                    <div class="ss-left">
                        <h3>
                            <span>10:30 AM - 11:30 AM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">Machinist Prelims</a>
                        </h3>
                    </div>
                    <div class="ss-right">
                        <a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-7">Machinist Prelims</a>
                    </div>
                </div>
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-8">Ricerca (Paper Presentation)</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>10:30 AM - 1:00 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Ricerca (Paper Presentation)</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <h3>
                            <span>11:00 AM - 12:00 PM</span>
                            <a href="<?=base_url()?>">Talks and Lectures</a>
                        </h3>
                    </div>
                    <div class="ss-right">
                            <a href="<?=base_url()?>" class="ss-circle ss-circle-9">Talks and Lectures</a>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/vihang" class="ss-circle ss-circle-10">Air Strike</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>11:00 AM - 6:30 PM</span>
                            <a href="<?=base_url()?>events/vihang">Air Strike</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-small">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/paripath" class="ss-circle ss-circle-11">LCD Prelims</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>11:30 AM - 12:30 PM</span>
                            <a href="<?=base_url()?>events/paripath">LCD Prelims</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-small">
                    <div class="ss-left">
                        <h3>
                            <span>11:30 AM - 1:00 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">Junkyard Wars Prelims</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-12">Junkyard Wars Prelims</a>
                    </div>
                </div>
				<div class="ss-row ss-small">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/aparimit" class="ss-circle ss-circle-13">Cosmic Clash Prelims</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>12:30 PM - 1:30 PM</span>
                            <a href="<?=base_url()?>events/aparimit">Cosmic Clash Prelims</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <h3>
                            <span>1:00 PM - 3:00 PM</span>
                            <a href="<?=base_url()?>events/paripath">Circuiter Finals</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/paripath" class="ss-circle ss-circle-4">Circuiter Finals</a>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-14">Hydranoid</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>1:00 PM - 3:30 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">Hydranoid</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <h3>
                            <span>1:00 PM - 2:00 PM</span>
                            <a href="<?=base_url()?>">Talks and Lectures</a>
                        </h3>
                    </div>
                    <div class="ss-right">
                            <a href="<?=base_url()?>" class="ss-circle ss-circle-9">Talks and Lectures</a>
                    </div>
                </div>
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-8">Ricerca (Paper Presentation)</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>1:30 PM - 4:30 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Ricerca (Paper Presentation)</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <h3>
                            <span>2:00 PM - 5:00 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">Machinist Finals</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-7">Machinist Finals</a>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-3">Alpha Geek Round 3</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>2:30 PM - 5:00 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Alpha Geek Round 3</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <h3>
                            <span>3:00 PM - 6:30 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Black Box</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-15">Black Box</a>
                    </div>
                </div>                
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-12">Junkyard Wars Round 2</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>3:30 PM - 8:00 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">Junkyard Wars Round 2</a>
                        </h3>
                    </div>
                </div>               
				<div class="ss-row ss-large">
                    <div class="ss-left">
						<h3>
                            <span>4:00 PM - 6:00 PM</span>
                            <a href="<?=base_url()?>events/paripath">LCD Finals</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/paripath" class="ss-circle ss-circle-11">LCD Finals</a>
                    </div>
                </div>                
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-6">Bletchley Park Finals (Kryptos)</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>4:00 PM - 6:30 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Bletchley Park Finals (Kryptos)</a>
                        </h3>
                    </div>
                </div>                
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <h3>
                            <span>4:30 PM - 8:00 PM</span>
                            <a href="<?=base_url()?>events/aparimit">Cosmic Clash Finals</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/aparimit" class="ss-circle ss-circle-13">Cosmic Clash Finals</a>
                    </div>
                </div>                
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-8">Ricerca (Paper Presentation)</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>5:00 PM - 7:30 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Ricerca (Paper Presentation)</a>
                        </h3>
                    </div>
                </div> 
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <h3>
                            <span>5:00 PM - 10:30 PM</span>
                            <a href="<?=base_url()?>events/botintheact">Bots Up</a>
                        </h3>
                    </div>
                    <div class="ss-right">
                        <a href="<?=base_url()?>events/botintheact" class="ss-circle ss-circle-16">Bots Up</a>
                    </div>
                </div>              
                
                
                
				<div class="ss-row">
                    <div class="ss-left">
                        <h2 id="Day2">Day 2</h2>
                    </div>
                    <div id="Day2" class="ss-right">
                        <h2>20 March 2016</h2>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
						<a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-17">Contraptions</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>9:30 AM - 5:30 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">Contraptions</a>
                        </h3>                        
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <h3>
                            <span>9:30 AM - 8:30 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis>">Junkyard Wars Round 3</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-12">Junkyard Wars Round 3</a>
                    </div>
                </div>
				<div class="ss-row ss-small">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/paripath" class="ss-circle ss-circle-18">Electromania Prelims</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>9:30 AM - 10:30 AM</span>
                            <a href="<?=base_url()?>events/paripath">Electromania Prelims</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <h3>
                            <span>10:00 AM - 1:30 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">Screwed Round 1 & 2</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-19">Screwed Round 1 & 2</a>
                    </div>
                </div>                   
                
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/vihang" class="ss-circle ss-circle-20">Techflight</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>10:00 AM - 1:30 PM</span>
                            <a href="<?=base_url()?>events/vihang">Techflight</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-small">
                    <div class="ss-left">
						<h3>
                            <span>10:00 AM - 11:00 AM</span>
                            <a href="<?=base_url()?>events/philosophiaenaturalis">Phyknight Prelims</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/philosophiaenaturalis" class="ss-circle ss-circle-21">Phyknight preims</a>
                    </div>
                </div>
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-8">Ricerca (Paper Presentation)</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>10:30 AM - 1:00 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Ricerca (Paper Presentation)</a>
                        </h3>
                    </div>
                </div> 
				<div class="ss-row ss-small">
                    <div class="ss-left">
						<h3>
                            <span>11:00 AM - 12:00 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Techwiz Prelims</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-22">Techwiz Preims</a>
                    </div>
                </div>                
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                            <a href="<?=base_url()?>" class="ss-circle ss-circle-9">Talks and Lectures</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>11:30 AM - 12:30 PM</span>
                            <a href="<?=base_url()?>">Talks and Lectures</a>
                        </h3>
                    </div>
                </div>               
				<div class="ss-row ss-small">
                    <div class="ss-left">
						<h3>
                            <span>12:00 PM - 1:00 PM</span>
                            <a href="<?=base_url()?>events/aparimit">Nightsky Hunt Prelims</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/aparimit" class="ss-circle ss-circle-23">Nightsky Hunt Prelims</a>
                    </div>
                </div>   
                <div class="ss-row ss-small">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-24">CAD Draw Prelims</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>12:00 PM - 1:00 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">CAD Draw Prelims</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <h3>
                            <span>1:00 PM - 3:00 PM</span>
                            <a href="<?=base_url()?>events/paripath">Electromania Finals</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/paripath" class="ss-circle ss-circle-18">Electromania Finals</a>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
                            <a href="<?=base_url()?>events/philosophiaenaturalis" class="ss-circle ss-circle-21">Phyknight Finale</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>1:00 PM - 4:30 PM</span>
                            <a href="<?=base_url()?>events/philosophiaenaturalis">Phyknight Finale</a>
                        </h3>
                    </div>
                </div>                                
				<div class="ss-row ss-large">
                    <div class="ss-left">
						<h3>
                            <span>1:30 PM - 4:30 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Techwiz Finals</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-22">Techwiz Finals</a>
                    </div>
                </div>                 
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-8">Ricerca (Paper Presentation)</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>1:30 PM - 4:30 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Ricerca (Paper Presentation)</a>
                        </h3>
                    </div>
                </div>                
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <h3>
                            <span>1:30 PM - 6:00 PM</span>
                            <a href="<?=base_url()?>events/vihang">Prakshepan</a>
                        </h3>
                    </div>
                    <div class="ss-right">
                        <a href="<?=base_url()?>events/vihang" class="ss-circle ss-circle-25">Prakshepan</a>
                    </div>
                </div>
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                            <a href="<?=base_url()?>" class="ss-circle ss-circle-9">Talks and Lectures</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>2:00 PM - 3:00 PM</span>
                            <a href="<?=base_url()?>">Talks and Lectures</a>
                        </h3>
                    </div>
                </div>  
				<div class="ss-row ss-large">
                    <div class="ss-left">
						<h3>
                            <span>2:00 PM - 5:00 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">CAD Draw Finale</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-24">CAD Draw Finale</a>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
						<a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-19">Screwed Round 3</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>2:30 PM - 3:30 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">Screwed Round 3</a>
                        </h3>                        
                    </div>
                </div>         
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <h3>
                            <span>3:00 PM - 6:30 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Black Box</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-15">Black Box</a>
                    </div>
                </div>  
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-8">Ricerca (Paper Presentation)</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>5:00 PM - 7:30 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Ricerca (Paper Presentation)</a>
                        </h3>
                    </div>
                </div>     
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <h3>
                            <span>5:00 PM - 10:30 PM</span>
                            <a href="<?=base_url()?>events/botintheact">Ubhaychar</a>
                        </h3>
                    </div>
                    <div class="ss-right">
                        <a href="<?=base_url()?>events/botintheact" class="ss-circle ss-circle-26">Ubhaychar</a>
                    </div>
                </div>
 
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/aparimit" class="ss-circle ss-circle-23">Night Sky Hunt Finals</a>
                    </div>
                    <div class="ss-right">
						<h3>
                            <span>8:00 PM - 10:30 PM</span>
                            <a href="<?=base_url()?>events/aparimit">Night Sky Hunt Finals</a>
                        </h3>					
                    </div>
                </div>
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <h3>
                            <span>10:30 PM - 12:30 AM</span>
                            <a href="<?=base_url()?>events/aparimit">Night Sky Session</a>
                        </h3>
                    </div>
                    <div class="ss-right">
                       <a href="<?=base_url()?>events/aparimit" class="ss-circle ss-circle-23">Night Sky Session</a>
                    </div>
                </div>


                <div class="ss-row">
                    <div class="ss-left">
                        <h2 id="Day3">Day 3</h2>
                    </div>
                    <div id="Day3" class="ss-right">
                        <h2>21 March 2016</h2>
                    </div>
                </div>
                <div class="ss-row ss-small">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/paripath" class="ss-circle ss-circle-27">Tarang Prelims</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>9:30 AM - 10:30 AM</span>
                            <a href="<?=base_url()?>events/paripath">Tarang Prelims</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-small">
                    <div class="ss-left">
						<h3>
                            <span>10:00 AM - 11:00 AM</span>
                            <a href="<?=base_url()?>events/philosophiaenaturalis">How Adam Did It Prelims</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/philosophiaenaturalis" class="ss-circle ss-circle-28">How Adam Did It Prelims</a>
                    </div>
                </div>   
                <div class="ss-row ss-small">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/aparimit" class="ss-circle ss-circle-29">Astro ABC Prelims</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>10:00 AM - 11:00 AM</span>
                            <a href="<?=base_url()?>events/aparimit">Astro ABC Prelims</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-medium">
                    <div class="ss-left">
                        <h3>
                            <span>10:00 AM - 12:30 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Ricerca (Paper Presentation)</a>
                        </h3>
                    </div>
                    <div class="ss-right">
                        <a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-8">Ricerca (Paper Presentation)</a>
                    </div>
                </div>   
                <div class="ss-row ss-small">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/philosophiaenaturalis" class="ss-circle ss-circle-30">Panchmantra Prelims</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>11:00 AM - 12:00 PM</span>
                            <a href="<?=base_url()?>events/philosophiaenaturalis">Panchmantra Prelims</a>
                        </h3>
                    </div>
                </div>                
				<div class="ss-row ss-small">
                    <div class="ss-left">
						<h3>
                            <span>12:00 PM - 1:00 PM</span>
                            <a href="<?=base_url()?>events/philosophiaenaturalis">Image-in Prelims</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/philosophiaenaturalis" class="ss-circle ss-circle-31">Image-in Prelims</a>
                    </div>
                </div>  
				<div class="ss-row ss-large">
                    <div class="ss-left">
                       <a href="<?=base_url()?>events/paripath" class="ss-circle ss-circle-27">Tarang Finale</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>1:00 PM - 3:00 PM</span>
                            <a href="<?=base_url()?>events/paripath">Tarang Finale</a>
                        </h3>                        
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
						<h3>
                            <span>1:00 PM - 6:00 PM</span>
                            <a href="<?=base_url()?>events/philosophiaenaturalis">Panchmantra Finale</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/philosophiaenaturalis" class="ss-circle ss-circle-30">Panchmantra Finale</a>
                    </div>
                </div>
                
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-32">Bridge Up</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>1:00 PM - 4:00 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">Bridge Up</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
						<h3>
                            <span>1:00 PM - 6:00 PM</span>
                            <a href="<?=base_url()?>events/botintheact">Line Follower</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/botintheact" class="ss-circle ss-circle-33">Line Follower</a>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/philosophiaenaturalis" class="ss-circle ss-circle-31">Image-in Finale</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>1:30 PM - 4:30 PM</span>
                            <a href="<?=base_url()?>events/philosophiaenaturalis">Image-in Finale</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
						<h3>
                            <span>1:30 PM - 3:30 PM</span>
                            <a href="<?=base_url()?>events/vihang">Techglide</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/vihang" class="ss-circle ss-circle-34">Techglide</a>
                    </div>
                </div>
                
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/philosophiaenaturalis" class="ss-circle ss-circle-28">How Adam Did It Finale</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>3:00 PM - 6:30 PM</span>
                            <a href="<?=base_url()?>events/philosophiaenaturalis">How Adam Did It Finale</a>
                        </h3>
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
						<h3>
                            <span>3:00 PM - 5:00 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">Junkyardwars Finale</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-12">Junkyardwars Finale</a>
                    </div>
                </div>
                
				<div class="ss-row ss-medium">
                    <div class="ss-left">
						<a href="<?=base_url()?>events/kaleidoscope" class="ss-circle ss-circle-15">Black Box</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>3:00 PM - 6:30 PM</span>
                            <a href="<?=base_url()?>events/kaleidoscope">Black Box</a>
                        </h3>                        
                    </div>
                </div>
				<div class="ss-row ss-large">
                    <div class="ss-left">
						<h3>
                            <span>3:30 PM - 6:30 PM</span>
                            <a href="<?=base_url()?>events/aparimit">Astro ABC Finale </a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>events/aparimit" class="ss-circle ss-circle-29">Astro ABC Finale</a>
                    </div>
                </div>
                
				<div class="ss-row ss-large">
                    <div class="ss-left">
                        <a href="<?=base_url()?>events/mechamorphosis" class="ss-circle ss-circle-32">Bridge Testing</a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span>5:30 PM - 7:30 PM</span>
                            <a href="<?=base_url()?>events/mechamorphosis">Bridge Testing</a>
                        </h3>
                    </div>
                </div>

                
				<div class="ss-row ss-large">
                    <div class="ss-left">
						<h3>
                            <span>8:00 PM - 9:30 PM</span>
                            <a href="<?=base_url()?>">Closing Ceremony</a>
                        </h3>
                    </div>
                    <div class="ss-right">
						<a href="<?=base_url()?>" class="ss-circle ss-circle-1">Closing Ceremony</a>
                    </div>
                </div>
				
            </div>
                      <footer class="footer" role="contentinfo">
                
				<div id="inner-footer" class="wrap clearfix">
                    <div class="explore" style="border-bottom:1px solid #616A7A;margin-bottom:10px">
                        <p style="font-size:22px;color:#c5c5c5">Explore Conscientia 2016</p>
                            <ul style="padding:10px">
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
        <script type="text/javascript" src="<?=base_url()?>contents/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>contents/js/jquery.easing.timeline.js"></script>
		<script type="text/javascript">
		$(function() {

			var $sidescroll	= (function() {
					
					// the row elements
				var $rows			= $('#ss-container > div.ss-row'),
					// we will cache the inviewport rows and the outside viewport rows
					$rowsViewport, $rowsOutViewport,
					// navigation menu links
					$links			= $('#ss-links > a'),
					// the window element
					$win			= $(window),
					// we will store the window sizes here
					winSize			= {},
					// used in the scroll setTimeout function
					anim			= false,
					// page scroll speed
					scollPageSpeed	= 2000 ,
					// page scroll easing
					scollPageEasing = 'easeInOutExpo',
					// perspective?
					hasPerspective	= false,
					
					perspective		= hasPerspective && Modernizr.csstransforms3d,
					// initialize function
					init			= function() {
						
						// get window sizes
						getWinSize();
						// initialize events
						initEvents();
						// define the inviewport selector
						defineViewport();
						// gets the elements that match the previous selector
						setViewportRows();
						// if perspective add css
						if( perspective ) {
							$rows.css({
								'-webkit-perspective'			: 600,
								'-webkit-perspective-origin'	: '50% 0%'
							});
						}
						// show the pointers for the inviewport rows
						$rowsViewport.find('a.ss-circle').addClass('ss-circle-deco');
						// set positions for each row
						placeRows();
						
					},
					// defines a selector that gathers the row elems that are initially visible.
					// the element is visible if its top is less than the window's height.
					// these elements will not be affected when scrolling the page.
					defineViewport	= function() {
					
						$.extend( $.expr[':'], {
						
							inviewport	: function ( el ) {
								if ( $(el).offset().top < winSize.height ) {
									return true;
								}
								return false;
							}
						
						});
					
					},
					// checks which rows are initially visible 
					setViewportRows	= function() {
						
						$rowsViewport 		= $rows.filter(':inviewport');
						$rowsOutViewport	= $rows.not( $rowsViewport )
						
					},
					// get window sizes
					getWinSize		= function() {
					
						winSize.width	= $win.width();
						winSize.height	= $win.height();
					
					},
					// initialize some events
					initEvents		= function() {
						
						// navigation menu links.
						// scroll to the respective section.
						$links.on( 'click.Scrolling', function( event ) {
							
							// scroll to the element that has id = menu's href
							$('html, body').stop().animate({
								scrollTop: $( $(this).attr('href') ).offset().top
							}, scollPageSpeed, scollPageEasing );
							
							return false;
						
						});
						
						$(window).on({
							// on window resize we need to redefine which rows are initially visible (this ones we will not animate).
							'resize.Scrolling' : function( event ) {
								
								// get the window sizes again
								getWinSize();
								// redefine which rows are initially visible (:inviewport)
								setViewportRows();
								// remove pointers for every row
								$rows.find('a.ss-circle').removeClass('ss-circle-deco');
								// show inviewport rows and respective pointers
								$rowsViewport.each( function() {
								
									$(this).find('div.ss-left')
										   .css({ left   : '0%' })
										   .end()
										   .find('div.ss-right')
										   .css({ right  : '0%' })
										   .end()
										   .find('a.ss-circle')
										   .addClass('ss-circle-deco');
								
								});
							
							},
							// when scrolling the page change the position of each row	
							'scroll.Scrolling' : function( event ) {
								
								// set a timeout to avoid that the 
								// placeRows function gets called on every scroll trigger
								if( anim ) return false;
								anim = true;
								setTimeout( function() {
									
									placeRows();
									anim = false;
									
								}, 10 );
							
							}
						});
					
					},
					// sets the position of the rows (left and right row elements).
					// Both of these elements will start with -50% for the left/right (not visible)
					// and this value should be 0% (final position) when the element is on the
					// center of the window.
					placeRows		= function() {
						
							// how much we scrolled so far
						var winscroll	= $win.scrollTop(),
							// the y value for the center of the screen
							winCenter	= winSize.height / 2 + winscroll;
						
						// for every row that is not inviewport
						$rowsOutViewport.each( function(i) {
							
							var $row	= $(this),
								// the left side element
								$rowL	= $row.find('div.ss-left'),
								// the right side element
								$rowR	= $row.find('div.ss-right'),
								// top value
								rowT	= $row.offset().top;
							
							// hide the row if it is under the viewport
							if( rowT > winSize.height + winscroll ) {
								
								if( perspective ) {
								
									$rowL.css({
										'-webkit-transform'	: 'translate3d(-75%, 0, 0) rotateY(-90deg) translate3d(-75%, 0, 0)',
										'opacity'			: 0
									});
									$rowR.css({
										'-webkit-transform'	: 'translate3d(75%, 0, 0) rotateY(90deg) translate3d(75%, 0, 0)',
										'opacity'			: 0
									});
								
								}
								else {
								
									$rowL.css({ left 		: '-50%' });
									$rowR.css({ right 		: '-50%' });
								
								}
								
							}
							// if not, the row should become visible (0% of left/right) as it gets closer to the center of the screen.
							else {
									
									// row's height
								var rowH	= $row.height(),
									// the value on each scrolling step will be proporcional to the distance from the center of the screen to its height
									factor 	= ( ( ( rowT + rowH / 2 ) - winCenter ) / ( winSize.height / 2 + rowH / 2 ) ),
									// value for the left / right of each side of the row.
									// 0% is the limit
									val		= Math.max( factor * 50, 0 );
									
								if( val <= 0 ) {
								
									// when 0% is reached show the pointer for that row
									if( !$row.data('pointer') ) {
									
										$row.data( 'pointer', true );
										$row.find('.ss-circle').addClass('ss-circle-deco');
									
									}
								
								}
								else {
									
									// the pointer should not be shown
									if( $row.data('pointer') ) {
										
										$row.data( 'pointer', false );
										$row.find('.ss-circle').removeClass('ss-circle-deco');
									
									}
									
								}
								
								// set calculated values
								if( perspective ) {
									
									var	t		= Math.max( factor * 75, 0 ),
										r		= Math.max( factor * 90, 0 ),
										o		= Math.min( Math.abs( factor - 1 ), 1 );
									
									$rowL.css({
										'-webkit-transform'	: 'translate3d(-' + t + '%, 0, 0) rotateY(-' + r + 'deg) translate3d(-' + t + '%, 0, 0)',
										'opacity'			: o
									});
									$rowR.css({
										'-webkit-transform'	: 'translate3d(' + t + '%, 0, 0) rotateY(' + r + 'deg) translate3d(' + t + '%, 0, 0)',
										'opacity'			: o
									});
								
								}
								else {
									
									$rowL.css({ left 	: - val + '%' });
									$rowR.css({ right 	: - val + '%' });
									
								}
								
							}	
						
						});
					
					};
				
				return { init : init };
			
			})();
			
			$sidescroll.init();
			
		});

            $(window).load(function() {
                $('body').addClass('loaded');
            });
		</script>
    </body>
</html>