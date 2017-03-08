<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Conscientia 2016 | About Us</title>
		<meta name="description" content="About Us" />
		<meta name="author" content="Conscientia" />
		<link rel="shortcut icon" href="<?=base_url()?>favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/aboutus.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/loader.css">
        <script src="<?=base_url()?>contents/js/modernizr-2.6.2.min.js"></script>
	</head>
	<body class="aboutus">
         <div id="loader-wrapper" >
			<div id="loader"></div>

			<div class="loader-section section-left" style="background:#0F1922"></div>
            <div class="loader-section section-right" style="background:#0F1922"></div>

		</div>
		<div id="container" class="container intro-effect-side">
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
				<div class="bg-img"><img src="<?=base_url()?>contents/images/aboutus.jpg" alt="Background Image" /></div>
				<div class="title">
					<h1>About Us</h1>
				</div>
			</header>
			<button class="trigger" data-info="Scroll Down"><span>Trigger</span></button>
			<article class="content">
				<div>
					<p>The application of fundamental situations to a particular situation, requires an additional set of capacities, both that involved from deducing from the universal and general fundamental principles, more specific principles with more immedita application to specific types of situations, and that involved in deriving from both these principles the particular practical judgments about what is to be done here and now in some particular set of circumstances which may in some day be, but is not yet, here and now. To these capacities, the name Conscientia is applied.' <br /><span style="float:right">-- Alasdair Macintyre</span> </p>
					<p>
                        Conscientia is the annual Astronomy and Technology Festival of Indian Institute of Space Science and Technology. With challenges in a variety of fields ranging from Computer Science and Electronics to Robotics to Mechanical and Aerospace Engineering, this Conscientia promises to be an exhilarating experience for all participants. The fest also includes a series of guest lectures by renowned personalities and industrial magnates and a set of workshops designed to bring out the creative intellect in the fields of engineering and technology.
                    </p>
					<p>What began as a humble intra-college technical fest has evolved over the years to become one of the most awaited for college fests in South India. Past editions have seen many of the greatest minds of the century addressing the students including Dr. A.P.J Abdul Kalam, Dr K. Radhakrishnan and ISRO chairman Shri A.S Kiran Kumar.</p>
					<p>The eight edition of Conscientia kicks of on March 18, 2016. Here, you will experience a plethora of events such as Robot Wars, Water Rocketry contests, Online Treasure Hunts, Contraptions, Astronomy sessions and workshops such as those on Rasberry pi, Ethical Hacking, Quantum Computing and many more. Stay tuned to this website for more details on events, workshops and talks.</p>
					
				</div>
			</article>
            
            <footer class="footer" role="contentinfo">
                <div id="inner-footer" class="wrap clearfix">
                    <div class="explore" style="border-bottom:1px solid #616A7A;margin-bottom:10px">
                        <p style="font-size:22px">Explore Conscientia 2016</p>
                        <ul style="margin-left: -50px;" >
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
        <script src="<?=base_url()?>contents/js/jquery.min.js"></script>
		<script src="<?=base_url()?>contents/js/jquery.countdown.js"></script>
		<script src="<?=base_url()?>contents/js/classie.js"></script>
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