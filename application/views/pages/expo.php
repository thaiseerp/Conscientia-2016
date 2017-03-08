<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Conscientia 2016 | Expo</title>
		<meta name="description" content="Expo" />
		<meta name="author" content="Conscientia" />
		<link rel="shortcut icon" href="<?=base_url()?>favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/expo.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/loader.css">
        <script src="<?=base_url()?>contents/js//modernizr-2.6.2.min.js"></script>
	</head>
	<body class="expo">
       <div id="loader-wrapper" >
			<div id="loader"></div>

			<div class="loader-section section-left" style="background:#0F1922"></div>
            <div class="loader-section section-right" style="background:#0F1922"></div>

		</div>
		<div id="container" class="container intro-effect-sliced">
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
			<header class="header">
				<div class="bg-img"><img src="<?=base_url()?>contents/images/expo.jpg" alt="Background Image" /></div>
				<div class="title">
					<h1 style="color:#fff">Expo 2016</h1>
					</div>
				<div class="bg-img"><img src="<?=base_url()?>contents/images/expo.jpg" alt="Background Image" /></div>
			</header>
			<button class="trigger" data-info="Please Scroll Down"><span>Trigger</span></button>
			<article class="content">
				<div>
					<p>We have divided the expo into two parts</p>
					<h1 style="color:#64C7B6">Science Expo </h1>
                    <p>Science Expo aims at promoting scientific projects created by the school students in a wider and versatile platform of Conscientia where the budding young scientific minds will be acknowledged. </p>
                    <ul>
                        <li>This event is open to school children only.</li>
                        <li>Participation can be individual or in group(max 3 participants per group)</li>
                        <li>Projects can be theoretical or practical. Preference will be given to a prototype demonstrating the project, if applicable.</li>
                        <li>Proper poster on the project is a must for exhibition. Each group will be given their own space to put their posters and prototype during the exhibition.</li>
                        <li>Maximum of two A2 size posters (or, equivalent i.e., 4 A3 size pages) are allowed.</li>
                        <li>Attractive prize money will be there for the First, Second and Third positions.</li>
                        <li>Decision of the judges will be final.</li>
                    </ul>
                    <h1 style="color:#64C7B6">IIST Exhibition</h1>
					<p>This is a new addition to  Conscientia ,where we plan to put the interesting and sophisticated student projects at IIST into display for all the participants of Conscientia 2016. The aim of this exhibition is to perform public outreach in certain exciting fields like Radio astronomy, Automobile engineering, Aviation engineering by demonstrating the projects (Instruments/Prototypes/Working models) done by the students of IIST.
                    </p>
					<p>For more details, contact <br />Raj Biswas<br />+919496852938
                    </p>	
				</div>
			</article>
            <footer class="footer" role="contentinfo">
                <div id="inner-footer" class="wrap clearfix">
                    <div class="explore" style="border-bottom:1px solid #616A7A;margin-bottom:10px">
                        <p style="font-size:22px">Explore Conscientia 2016</p>
                            <ul style="margin-left: -50px;">
                                <li style="display: inline;"><a href="<?=base_url()?>">Home</a></li>
                                <li style="display: inline;"><a href="<?=base_url()?>events/">Events</a></li>
                                <li style="display: inline;"><a href="<?=base_url()?>workshops/">Workshops</a></li>
                                <li style="display: inline;"><a href="<?=base_url()?>team/">Contact us</a></li>
                            </ul>
                    </div>
                    <p class="source-org copyright">Conscientia 2016</p>
                </div>
            </footer>            
        </div><!-- /container -->
        
		<script src="<?=base_url()?>contents/js//jquery.min.js"></script>
		<script src="<?=base_url()?>contents/js//jquery.countdown.js"></script>
		<script src="<?=base_url()?>contents/js//classie.js"></script>
		<script>
			(function() {
	
				var ie = (function(){
					var undef,rv = -1; // Return value assumes failure.
					var ua = window.navigator.userAgent;
					var msie = ua.indexOf('MSIE ');
					var trident = ua.indexOf('Trident/');

					if (msie > 0) {
						// IE 10 or older => return version number
						rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
					} else if (trident > 0) {
						// IE 11 (or newer) => return version number
						var rvNum = ua.indexOf('rv:');
						rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
					}

					return ((rv > -1) ? rv : undef);
				}());

				var keys = [32, 37, 38, 39, 40], wheelIter = 0;

				function preventDefault(e) {
					e = e || window.event;
					if (e.preventDefault)
					e.preventDefault();
					e.returnValue = false;  
				}

				function keydown(e) {
					for (var i = keys.length; i--;) {
						if (e.keyCode === keys[i]) {
							preventDefault(e);
							return;
						}
					}
				}

				function touchmove(e) {
					preventDefault(e);
				}

				function wheel(e) {
					// for IE 
					//if( ie ) {
						//preventDefault(e);
					//}
				}

				function disable_scroll() {
					window.onmousewheel = document.onmousewheel = wheel;
					document.onkeydown = keydown;
					document.body.ontouchmove = touchmove;
				}

				function enable_scroll() {
					window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
				}

				var docElem = window.document.documentElement,
					scrollVal,
					isRevealed, 
					noscroll, 
					isAnimating,
					container = document.getElementById( 'container' ),
					trigger = container.querySelector( 'button.trigger' );

				function scrollY() {
					return window.pageYOffset || docElem.scrollTop;
				}
				
				function scrollPage() {
					scrollVal = scrollY();
					
					if( noscroll && !ie ) {
						if( scrollVal < 0 ) return false;
						// keep it that way
						window.scrollTo( 0, 0 );
					}

					if( classie.has( container, 'notrans' ) ) {
						classie.remove( container, 'notrans' );
						return false;
					}

					if( isAnimating ) {
						return false;
					}
					
					if( scrollVal <= 0 && isRevealed ) {
						toggle(0);
					}
					else if( scrollVal > 0 && !isRevealed ){
						toggle(1);
					}
				}

				function toggle( reveal ) {
					isAnimating = true;
					
					if( reveal ) {
						classie.add( container, 'modify' );
					}
					else {
						noscroll = true;
						disable_scroll();
						classie.remove( container, 'modify' );
					}

					// simulating the end of the transition:
					setTimeout( function() {
						isRevealed = !isRevealed;
						isAnimating = false;
						if( reveal ) {
							noscroll = false;
							enable_scroll();
						}
					}, 600 );
				}

				// refreshing the page...
				var pageScroll = scrollY();
				noscroll = pageScroll === 0;
				
				disable_scroll();
				
				if( pageScroll ) {
					isRevealed = true;
					classie.add( container, 'notrans' );
					classie.add( container, 'modify' );
				}
				
				window.addEventListener( 'scroll', scrollPage );
				trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
			})();
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