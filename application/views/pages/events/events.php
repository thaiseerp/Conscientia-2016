<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Conscientia 2016 | Events</title>
		<meta name="description" content="" />
		<link rel="shortcut icon" href="<?=base_url()?>favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/events.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/loader.css">
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
			<div id="cbp-so-scroller" class="cbp-so-scroller">
                <section class="cbp-so-section">
                        <div id="particles-js"></div>
					      <article class="cbp-so-side cbp-so-side-left">
						 <h2 ><a href="<?=base_url()?>events/botintheact" style="color:#edb451;z-index:1;position:relative" >Bot in the Act</a></h2>
						<p>Robots have taken a step into the future. The nation beckons to its brightest minds to build a perfect machine from limited resources to complete a given task satisfying certain specifications. This category includes events such as Bots Up, Line follower and Amphibot.</p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="<?=base_url()?>contents/images/events/bita.png" alt="img01">
					</figure>
				</section>
                
				<section class="cbp-so-section"> 
                    <figure class="cbp-so-side cbp-so-side-left">
						<img src="<?=base_url()?>contents/images/events/aparimit.png" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
                        <h2 ><a href="<?=base_url()?>events/aparimit" style="color:#3F51B5;z-index:1;position:relative" >Aparimit</a></h2>
						<p>Humans have always looked up the night sky and wondered what the vast multitude of objects-ranging from the mundane clouds to bizzare explosions-was made of. Yet the clockwork of the heavens seem to be governed by simple but elegant laws. Join us in our ride to explore the beauty hidden in the cosmos. This category consists of events like Astro ABC, Astroreflections , Cosmic Clash and Night Sky Hunt.</p>
					</article>
				</section>
                
				<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h2 ><a href="<?=base_url()?>events/mechamorphosis" style="color:#1A7551;z-index:1;position:relative">Mechamorphosis</a></h2> 
						<p>There’s nothing like the satisfaction of a plan falling into place. Bring out the best mechanic in you! Learn to improvise and innovate to beat others. This is a platform to test your mechanic skills. This category includes Contraptions, CADDraw, Bridge Up, Hydranoid, Junkyard Wars, Machinist and Screwed.</p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="<?=base_url()?>contents/images/events/mechamorphosis.png" alt="img01">
					</figure>
				</section>
                
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<img src="<?=base_url()?>contents/images/events/paripath.png" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h2><a href="<?=base_url()?>events/paripath" style="color:#9C27B0;z-index:1;position:relative">Paripath</a></h2> 
						<p>Just imagine if you were to go back 100 years in time, the world would be a place without even a single electronics engineer.This is a platform which gives you the opportunity to make use of the already available technology in order to build the future. It is the perfect blend of designing, soldering and rectifying which will take you through it. This category includes Circuiter, Logic Circuit Design, Tarang and Electromania.</p>
					</article>
				</section>
                
				<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h2><a href="<?=base_url()?>events/vihang" style="color:#4CAF50;z-index:1;position:relative">Vihang</a></h2> 
						<p>Unravel the unexplored domain of your imagination-Flight Mechanics! Build a real time flying machine satisfying given specifications. Understand the intricacies involved in ensuring a successful flight. This category includes events such as: Air Strike, Prakshepan, Ornithopter and  Glider.</p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="<?=base_url()?>contents/images/events/vihang.png" alt="img01">
					</figure>
				</section>
                
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<img src="<?=base_url()?>contents/images/events/kaleidoscope.png" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h2><a href="<?=base_url()?>events/kaleidoscope" style="color:#FF5722;z-index:1;position:relative">Kaleidoscope</a></h2> 
						<p>Imagination, creativity, skills and passion to do something off-beat: these are the four pillars that support innovation, with scientific knowledge providing a firm foundation. Check your innate ability of inventing partial or complete personal realms within the mind from elements derived from perceptions of the shared world. This category includes events such as Alpha Geek, Black Box, Ricerca , TECH-Wiz, MATH Quiz and Bletchley Park.</p>
					</article>
				</section>
                               
				<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h2><a href="<?=base_url()?>events/philosophiaenaturalis" style="color:#F44336;z-index:1;position:relative">Philosophiae Naturalis</a></h2> 
						<p>This presents an opportunity to delve into the beautiful problems of Physics which will twist your mind and will make you nostalgic of the good old Olympiad days. This category includes events like How Adam did it, Image-In, Panchmantra, Sim-phy and PhyKnight.</p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="<?=base_url()?>contents/images/events/philo.png" alt="img01">
					</figure>
				</section>
                
				<section class="cbp-so-section" id="#cyberia">
					<figure class="cbp-so-side cbp-so-side-left">
						<img src="<?=base_url()?>contents/images/events/cyberia.png" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h2><a href="<?=base_url()?>events/cyberia" style="color:#2196F3;z-index:1;position:relative">Cyberia</a></h2> 
						<p>Every problem has multiple dimensions. The path to knowledge is complex and twisted, one wrong turn and you are lost in the wilderness. Find your way through the complex labyrinth by churning up a million neurons in your brain, deciphering the hints and mastering the puzzles. This category includes events such as Webbed, Astronomia, Mathematrix, CCube and Mobius Strip.</p>
					</article>
				</section>

                
			</div>
            
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
		<script src="<?=base_url()?>contents/js/classie.js"></script>
		<script src="<?=base_url()?>contents/js/cbpScroller.js"></script>
		<script>
			new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
		</script>
        <script  src="<?=base_url()?>contents/js/particles.eve.min.js"></script>
		
        <script>
         particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 120,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#fff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0.25,
        "color": "#127025"
      },
      "polygon": {
        "nb_sides": 25
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 1,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 10,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 1.7,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#4534e3",
      "opacity": 0.4,
      "width": 0.5
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
  </script>
  		<script src="<?=base_url()?>contents/js/jquery.min.js"></script>
		<script src="<?=base_url()?>contents/js/jquery.countdown.js"></script>
		<script>
            $(window).load(function() {
                $('body').addClass('loaded');
            });
		</script>
	</body>
</html>
