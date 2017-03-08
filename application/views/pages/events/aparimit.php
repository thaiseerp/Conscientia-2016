<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conscientia 2016 | Events | Aparimit</title>
	<meta name="author" content="Conscientia" />
	<link rel="shortcut icon" href="<?=base_url()?>favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/fonts/feather/style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/indevent.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/loader.css">
	<script src="<?=base_url()?>contents/js/modernizr-2.6.2.min.js"></script>
    <style>
        .zoomer__area,.preview {
            position: absolute;
	           top: 91.5%;
	left: 50%;
	-webkit-transform: translate3d(-50%,-50%,0);
	transform: translate3d(-50%,-50%,0);
}
    </style>
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
        <div id="particles-js"></div>
		<section class="slider">
            
			<div class="slide slide--current" data-content="content-1">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/aparimiteve.png" alt="Cosmic Clash" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/ap1_p.png" alt="Cosmic Clash preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"style="color:#3F51B5">Cosmic Clash<br><p style="font-size:15px">the astronomy quiz</p></h2>
			</div>
            
			<div class="slide" data-content="content-2">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/aparimiteve.png" alt="Astroreflections" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/ap2_p.png" alt="Astroreflections preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title" style="color:#3F51B5">Astroreflections<br><p style="font-size:15px">the astronomy poster presentation</p></h2>
			</div>
            
			<div class="slide" data-content="content-3">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/aparimiteve.png" alt="Night Sky Hunt" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/ap3_p.png" alt="Night Sky Hunt preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title" style="color:#3F51B5">Night Sky Hunt<br><p style="font-size:15px">the real astronomy begins here</p></h2>
			</div>
            
			<div class="slide" data-content="content-4">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/aparimiteve.png" alt="Astro ABC" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/ap4_p.png" alt="Astro ABC preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title" style="color:#3F51B5">Astro ABC<br><p style="font-size:15px">testing skills in physics since 2007</p></h2>
			</div>
			<nav class="slider__nav">
				<button class="button button--nav-prev"style="color:#3F51B5"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous event</span></button>
				<button class="button button--zoom"style="color:#3F51B5"><span style="font-size:20px">View details</span></button>
				<button class="button button--nav-next"style="color:#3F51B5"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next event</span></button>
			</nav>
		</section>
		<!-- /slider-->
		<section class="content">
			
            <div class="content__item" id="content-1">
				<img style="margin-top: -500px"class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/ap1.png" alt="Cosmic Clash Content" />
				<div class="content__item-inner">
					<h2 style="color:#3F51B5">Cosmic Clash</h2><br>
					<h3>
					<blockquote>"It is indeed a feeble light that reaches us from the starry sky. But what would
human thought have achieved if we could not see the stars?"<br><h3 style="text-align : right;font-size:15px">Jean Perrin</h3></blockquote> </h3>
<p style="color:#3F51B5">Do you think you've what it takes to battle it out to be the ultimate astro
geek? Then cosmic clash is the place for you. Come, test your knowledge in
astronomy and astrophysics and become the conqueror of the cosmos.</p>
                    <br>
                    <h3>Format : </h3>
                        <ul style="color:#3F51B5">
                            <li><p>The event will consist of two rounds.</p></li>
                            <li><p>Prelims will be a written quiz comprising of questions from basic Astronomy and Astrophysics.</p></li>
                            <li><p>The format of the nals will be disclosed on the spot.</p></li>
                        </ul>    
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#3F51B5">
                            <li><p>Any student with a valid college ID card can participate.</p></li>
                            <li><p>Each team may consist of at most two members.</p></li>
                            <li><p>Inter-college teams are also allowed.</p></li>
                            <li><p>The decision of event organizers will be final and binding.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#3F51B5">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 4,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,500</p></li>
                            <li><p>3<sup>rd</sup> &nbsp; Prize : &nbsp;  &#8377; 1,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('cosmicclash'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#3F51B5;border:#3F51B5" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/aparimit/4" class="btn btn-default rbutton" style="color:#FFF;background-color:#3F51B5;border:#3F51B5"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#3F51B5;border:#3F51B5"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#3F51B5">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#3F51B5">
                        <p>Nikhil Anand</p>9496715413                     
                    </div>
                    <div class="col-lg-6" align="right" style="color:#3F51B5">
                        <p>Aravind R. S.</p>9496937478                
                    </div>
				</div>
			</div>
                
			<div class="content__item" id="content-2">
				<img style="margin-top: -1200px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/ap2.png" alt="Astroreflections Content" />
				<div class="content__item-inner">
					<h2 style="color:#3F51B5">Astroreflections</h2><br>
					<h3><blockquote>"No known roof is as beautiful as the skies above."<br><h3 style="text-align : right;font-size:15px">Michael O'Muircheartaigh</h3></blockquote></h3>
<p style="color:#3F51B5">Remember yourself staring at the night skies endlessly once everyone
around fell asleep? Does that astro-bug in you start buzzing whenever you
come across a snippet related to the blue beyond? Then why not put all your
thoughts into a technical poster and sweep the judges away, and along with
them, maybe the prizes too! Take part in the simplest and most popular
event of Conscientia and walk away with prizes and lots of knowledge.</p>
                    <br>
                    <h3>Format : </h3>
				    <div style="font-size: 20px;color: steelblue;">Prelims</div>
                    <p style="color:#3F51B5">All the participating teams have to submit the abstract which describes the poster briefly, latest by 23:59 hours 9th March, 2016. The abstract must be simple and informative.</p>
                    <div style="font-size: 20px;color: steelblue;">Mains</div>  
                        <ul style="color:#3F51B5">
                            <li><p>Teams will be selected for the mains based on their abstracts. Notications will be sent to the selected teams.</p></li>
                            <li><p>The soft copies must be sent latest by 23:59 hours, 14th March 2016.</p></li>
                            <li><p>The selected posters will be displayed during the main event, following which the posters would have to be presented before the jury.</p></li>
                            <li><p>No fees will be charged for the poster printing.</p></li>
                        </ul>    
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#3F51B5">
                            <li><p>Each team can have at most 3 members.</p></li>
                            <li><p>The posters must be related to areas of astronomy and cosmology.</p></li>
                            <li><p>A team can submit a maximum of 2 posters.</p></li>
                            <li><p>The format of the poster must be either .png or .tiff.</p></li>
                            <li><p>Posters can be made on an A1 sheet or alternatively on two A2 or four A3 sheets.</p></li>
                            <li><p>The event is open to all college students having a valid id card.</p></li>
                        </ul>  
                    <br>   
                    <h3>Evaluation : </h3>   
                    <p style="color:#3F51B5">The posters will be judged by professionals on the basis of the abstract,presentation, information and the explanatory skills of the orator. High resolution images will be preferred.</p>
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#3F51B5">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 3,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('astroreflections'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#3F51B5;border:#3F51B5" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/aparimit/5" class="btn btn-default rbutton" style="color:#FFF;background-color:#3F51B5;border:#3F51B5"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#3F51B5;border:#3F51B5"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    
                    <br>
                    <p style="color:#3F51B5">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#3F51B5">
                        <p>Rwitika</p>
                        9446119942                  
                    </div>
                    <div class="col-lg-6" align="right" style="color:#3F51B5">
                        <p>Sagnik</p>
                        9446248046                   
                    </div>
                    <div align="center" style="color:#3F51B5">
                        <p>Shashank</p>
                        9446145491                  
                    </div>
				</div>
			</div>
            <div class="content__item" id="content-3">
				<img style="margin-top: -1100px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/ap3.png" alt="Night Sky Hunt Content" />
				<div class="content__item-inner">
					<h2 style="color:#3F51B5">Night Sky Hunt</h2><br>
					<h3><blockquote>"Though my soul may set in darkness, it will rise in perfect light; I have loved
the stars too fondly to be fearful of the night."<br><h3 style="text-align : right;font-size:15px">Sarah Williams</h3></blockquote></h3>
<p style="color:#3F51B5">The night sky has been a host for many mysterious objects. Thanks to
pioneers like Galileo and his modified telescope, the quest for these mysterious
objects has been made easier and since then the hunt is unending. Be a part of this hunt and grab your opportunity to find your way through the night
sky.</p>   
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#3F51B5">
                            <li><p>Maximum two members are allowed in a team.</p></li>
                            <li><p>The event will consist of two rounds: prelims and finals.</p></li>
                            <li><p>Prelims will be a written round to test the knowledge of participants
in observational astronomy and telescopes.</p></li>
                            <li><p>Finals will test the ability to identify astronomical objects by using
telescopes or naked eye.</p></li>
                            <li><p>The participants will be given 90 minutes and objects to be identified
may include Messier objects, planets, stars, sky patterns etc.</p></li>
                            <li><p>The names of objects may be given directly or the participants will
have to nd it from the hints provided.</p></li>
                            <li><p>Telescopes, Star charts and all the required materials will be provided
by the organising team.</p></li>
                            <li><p>Rough handling of telescopes or damages to its components may lead
to disqualication and fine.</p></li>
                            <li><p>Cheating will not be tolerated. Hence use of mobile phones, laptops,
own star charts, books and so on are condemned.</p></li>
                            <li><p>Decision of the organizers will be final.</p></li>
                        </ul>  
                    <br>
                    <h3>Judgement Criteria : </h3>
                        <ul style="color:#3F51B5">
                            <li><p>There will initially be a written elimination round, with the selected
teams getting to participate in the finals.</p></li>
                            <li><p>Within the given time the participants have to identify maximum of
the given objects.</p></li>
                            <li><p>The accuracy of identification of objects and the knowledge about them
will be also considered as evaluation criteria.</p></li>
                            <li><p>Decision of event organizers will be final and binding.</p></li>
                        </ul> 
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#3F51B5">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 3,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('nightskyhunt'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#3F51B5;border:#3F51B5" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/aparimit/6" class="btn btn-default rbutton" style="color:#FFF;background-color:#3F51B5;border:#3F51B5"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#3F51B5;border:#3F51B5"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#3F51B5">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#3F51B5">
                        <p>Nikhil Anand</p>
                        9496715413                 
                    </div>
                    <div class="col-lg-6" align="right" style="color:#3F51B5">
                        <p>Mustafa Shahid</p>
                        9496786484                   
                    </div>
				</div>
			</div>
              <div class="content__item" id="content-4">
				<img style="margin-top: -500px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/ap4.png" alt="Astro ABC Content" />
				<div class="content__item-inner">
					<h2 style="color:#3F51B5">Astro ABC</h2><br>
					<h3><blockquote>"If you wish to make an apple pie from scratch, you must first invent the
universe."<br><h3 style="text-align : right;font-size:15px">Carl Sagan</h3></blockquote></h3>
<p style="color:#3F51B5">Humans have always looked up the night sky and wondered what the vast
multitude of objects ranging from the mundane clouds to bizarre explosions
was made of. Yet the clockwork of the heavens seem to be governed by
simple but elegant laws. Join us in our ride to explore the beauty hidden in
the cosmos.</p>
                    <br>
                    <h3>Format : </h3>  
                        <ul style="color:#3F51B5">
                            <li><p>Prelims will be a written round with questions from basic physics and
mathematics relevant to astronomy.</p></li>
                            <li><p>Finals will be 'Activity based rounds'.</p></li>
                            <li><p>Further details will be disclosed during the event.</p></li>
                        </ul>    
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#3F51B5">
                            <li><p>Any student with a valid college ID card can participate.</p></li>
                            <li><p>Each team may consist of at most two members.</p></li>
                            <li><p>Inter-college teams are also allowed.</p></li>
                            <li><p>The decision of event organizers will be final and binding.</p></li>
                        </ul>  
                    <br>  
                    <h3>Prize Money : </h3>
                        <ul style="color:#3F51B5">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 3,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('astroabc'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#3F51B5;border:#3F51B5" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/aparimit/7" class="btn btn-default rbutton" style="color:#FFF;background-color:#3F51B5;border:#3F51B5"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#3F51B5;border:#3F51B5"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#3F51B5">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#3F51B5">
                        <p>Swetapushpa Soumyashree</p>
                        9496730893                  
                    </div>
                    <div class="col-lg-6" align="right" style="color:#3F51B5">
                        <p>Nikhil Anand</p>
                        9496715413                   
                    </div>
				</div>
			</div>
            
			<button class="button button--close"><i class="icon icon--circle-cross" style="color:#3F51B5"></i><span class="text-hidden">Close content</span></button>
		</section>
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
	<script src="<?=base_url()?>contents/js/classie.js"></script>
	<script src="<?=base_url()?>contents/js/dynamics.min.js"></script>
	<script src="<?=base_url()?>contents/js/event.js"></script>
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
      "value": "#fff4f5"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0.5,
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
      "color": "#3F51B5",
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
		<script>
            $(window).load(function() {
                $('body').addClass('loaded');
            });
		</script>
</body>
</html>