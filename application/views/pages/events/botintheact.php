<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conscientia 2016 | Events | Bot in the Act</title>
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
	           top: 59.5%;
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
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/bitaeve.png" alt="BotsUp" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/bita1_p.png" alt="BotsUp preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title" style="color:#edb451">Bots Up<br><p style="font-size:15px">the robowars</p></h2>
			</div>
            
			<div class="slide" data-content="content-2">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/bitaeve.png" alt="Line Follower" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/bita2_p.png" alt="Line Follower preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title" style="color:#edb451">Line Follower<br><p style="font-size:15px">make it follow</p></h2>
			</div>
            
			<div class="slide" data-content="content-3">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/bitaeve.png" alt="Salilsthalchar" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/bita3_p.png" alt="Salilsthalchar preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title" style="color:#edb451">Salilsthalchar<br><p style="font-size:15px">the amphibot competition</p></h2>
			</div>
            
			
			<nav class="slider__nav">
				<button class="button button--nav-prev" style="color:#edb451"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous event</span></button>
				<button class="button button--zoom" style="color:#edb451"><span style="font-size:20px">View details</span></button>
				<button class="button button--nav-next" style="color:#edb451"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next event</span></button>
			</nav>
		</section>
		<!-- /slider-->
		<section class="content">
			<div class="content__item" id="content-1">
				<img style="margin-top: -2000px"class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/bita1.png" alt="Bots Up Content" />
				<div class="content__item-inner">
					<h2 style="color:#edb451">Bots Up</h2><br>
					
<p style="color:#edb451">Warfare has taken a step into the future. Human soldiers are no longer deployed in war. It’s time for the robots to fight it out. The nation beckons to its brightest minds to build a perfect war machine from limited resources. Can you rise up to the challenge to defend your country?Are you game enough? Conscientia 2016 brings to you BOTS UP, a mega event that sets the stage on fire. Bots from all over the nation fight it out here to show who the boss is. <br>
Put together your minds, gather ideas and make your own fighting machine. <br>
Be ready to face the heat, the sparks and the smoke. </p>
                    <br>
                    <h3>Bot Specifications : </h3>
                        <ul style="color:#edb451">
                            <li><p>Bot can be wired/wireless. No special points/privilege given to wireless bot.</p></li>
                            <li><p>Maximum allowed weight of the bot is 15 kg.</p></li>
                            <li><p>The size of the bot must not exceed 40 cm x 40 cm x 35 cm (All weapons retractable included).</p></li>
                            <li><p>The max potential difference between any two points should not be more than 24 V AC/DC.</p></li>
                            <li><p>Battery can be onboard /off board (weight will be included if onboard else not).</p></li>
                            <li><p>Team should bring its own power supply. A 220 V power source can be given for charging the battery, but cannot be used during fight.</p></li>
                            <li><p>The following things should not be included in the bot in any form: projectiles, liquids or flame based weapons,any entanglement device, hydraulics, radio jammers,etc.</p></li>
                            <li><p>All actuators should be electronic.</p></li>
                            <li><p>A maximum tolerance of 5% can be allowed with regard to size, dimensions and power specifications.</p></li>
                            <li><p>If any one of the specification is not followed, it will lead to immediate disqualification of the team.</p></li>
                        </ul>    
                    <br>
                    <h3>Arena : </h3>
                        <ul style="color:#edb451">
                            <li><p>Uneven terrain, wedges, bridges, pits can be expected.</p></li>
                            <li><p>Suggestible length of the wire is 5m according to the arena dimensions.</p></li>
                            <li><p>Further details will be uploaded later/revealed at the time of event.</p></li>
                        </ul>   
                    <br>   
                    <h3>Rules and Judging Criteria : </h3>
                        <ul style="color:#edb451">
                            <li><p>A team should consist of max. 5 members.</p></li>
                            <li><p>The bot has to push the opponent bot out of the arena to win.</p></li>
                            <li><p>If both the bots stay in the arena after specified time. The team with more points will be
declared winner</p></li>
                            <li><p>Only two persons from a team will be allowed near the arena (one operator to control the
bot and one to manage the wire).</p></li>
                            <li><p>Arena should not be damaged by any weapons used by the bot.</p></li>
                            <li><p>Any intentional practice to damage the opponent bot’s wire will lead to disqualification.</p></li>
                            <li><p>Any team that is not ready when called will be disqualified.</p></li>
                            <li><p>If the bot is not able to move (position) for 30 sec the opposite team will be declared as
winner.</p></li>
                            <li><p>An interrupt can be called (if there is a technical problem only) by the participant for
maximum 2 min to attempt repairs (with appropriate penalty). If not able to repair in given
time the bot will lose.</p></li>
                            <li><p>Only one allowed interrupt per match per team.</p></li>
                            <li><p>If both bot become immobile then organizers can call for an interrupt or restart the match.</p></li>
                        </ul>    
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#edb451">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 13,500</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377;  &nbsp; &nbsp;  &nbsp;  9,000</p></li>
                            <li><p>3<sup>rd</sup> &nbsp; Prize : &nbsp;  &#8377;  &nbsp; &nbsp;  &nbsp;  5,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('botsup'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#edb451;border:#edb451" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/botintheact/1" class="btn btn-default rbutton" style="color:#FFF;background-color:#edb451;border:#edb451"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#edb451;border:#edb451"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#edb451">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#edb451">
                        <p>Partha Surve</p>9594794946                    
                    </div>
                    <div class="col-lg-6" align="right" style="color:#edb451">
                        <p>Sathish</p>9496161571                
                    </div>
				</div>
			</div>
            
			<div class="content__item" id="content-2"><img style="margin-top: -1000px"class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/bita2.png" alt="Line Follower Content" />
				<div class="content__item-inner">
					<h2 style="color:#edb451">Line Follower</h2><br>
					
<p style="color:#edb451">This is a robotics event in which you have to make a line follower robot to complete the given task.</p>
                    <br>
                    <h3>Format : </h3>
                        <ul style="color:#edb451">
                            <li><p>A track will be provided for the participants on which the bots have to compete.</p></li>
                            <li><p>The track will be a simple racing track for line followers and also has obstacles.</p></li>
                            <li><p>The sample track will be uploaded later.</p></li>
                        </ul>    
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#edb451">
                            <li><p>Robot should be autonomous with on-board power source.</p></li>
                            <li><p>A team consists of maximum of four members.</p></li>
                            <li><p>The size of the bot should not be exceeding: <br>250 mm x 250 mm x 250 mm.</p></li>
                            <li><p>The width of the line is 25 mm.</p></li>
                            <li><p>Max. potential difference allowed is 24 V.</p></li>
                            <li><p>The event is having two rounds – Preliminary Round will have smooth lines and Final round will
consist of sharp turn, 90 degree turns, junctions, loops and inversion.</p></li>
                            <li><p>Participants are allowed to have multiple run and best time will be selected.</p></li>
                            <li><p>Interruptions are allowed but limited.</p></li>
                            <li><p>Inter-college teams are allowed.</p></li>
                        </ul>    
                    <br> 
                    <h3>Judgement : </h3>
                        <ul style="color:#edb451">
                            <li><p>Distance covered and check points crossed by the bot.</p></li>
                            <li><p>Time taken to complete the path.</p></li>
                            <li><p>The decision of jury will be final.</p></li>
                        </ul>    
                    <br>  
                    <h3>Prize Money : </h3>
                        <ul style="color:#edb451">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 9,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 5,000</p></li>
                            <li><p>3<sup>rd</sup> &nbsp; Prize : &nbsp;  &#8377; 3,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('linefollower'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#edb451;border:#edb451" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/botintheact/2" class="btn btn-default rbutton" style="color:#FFF;background-color:#edb451;border:#edb451"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#edb451;border:#edb451"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#edb451">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#edb451">
                        <p>K. Anudeep</p>9446877792                    
                    </div>
                    <div class="col-lg-6" align="right" style="color:#edb451">
                        <p>Ch. Binneswar</p>9446139949                
                    </div>
				</div>
			</div>
            
            <div class="content__item" id="content-3">
				<img style="margin-top: -2600px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/bita3.png" alt="Salilsthalchar Content" />
				<div class="content__item-inner">
					<h2 style="color:#edb451">Salilsthalchar</h2><br>
										
<p style="color:#edb451">A new planet has been discovered and there are possibilities of very rare and important
elements. Space agency of your country is calling you to explore the next frontier in the
universe. Agency needs an exploration robot which can move on both land and water.
Conscientia 2016 invites you to SALISTHALCHAR, our amphibot designing competition. Exciting
prizes await those who prove themselves to be the best. Get ready for the most unforgettable
and ultimate racing experiences!!</p>
                    <br>
                    <h3>Format : </h3>
                        <ul style="color:#edb451">
                            <li><p>Participants have to build an amphibious vehicle (amphibot) which can
move on land as well as in water.</p></li>
                            <li><p>The participants will individually race their amphibot on a track composed
of land and deep water pools. The bot should be able to turn on land as well as on water and
also complete the track in the least possible time.</p></li>
                            <li><p>The one whose bot successfully completes the entire track in the least amount of time will be declared the winner.</p></li>
                        </ul>    
                    <br>
                    <h3>Eligibility : </h3>
                    <p style="color:#edb451">Any student of first, second, third or fourth year pursuing undergraduate courses in any
engineering college in India is eligible to take part. Students may take part as a team, but each
team member should satisfy the above criterion.</p>
                    <br>
                    <h3>The Track : </h3>
                        <ul style="color:#edb451">
                            <li><p>It will consist partly of land and partly of water.</p></li>
                            <li><p>Participants are required to observe proper safety precautions by insulating all the electronic
components.</p></li>
                            <li><p>The path may have variations in texture as well as geometry (i.e. there may be turns,
banking’s, unevenness, sandy, etc.)</p></li>
                            <li><p>There may be inclined planes, bridges, tunnels, etc.</p></li>
                            <li><p>There may be some surprise elements in the track which will be disclosed at the time of
event.</p></li>
                            <li><p>There may be multiple tracks across the arena; some short and tough, some long but easy.</p></li>

                        </ul>    
                    <br>
                    
                    <h3>Rules : </h3>
                        <ul style="color:#edb451">
                            <li><p>A team can have a maximum of 5 members.</p></li>
                            <li><p>In case a team brings multiple bots to the event, they have to declare the competing bot
before the start of the event. Only one bot will be allowed to compete in the event.</p></li>
                            <li><p>The amphibot should not be more than 30 cm x 30 cm x 20 cm in its
dimensions. That is, it should fit in a box of the same dimensions. Tolerance in dimension up to
1 cm.</p></li>
                            <li><p>Vehicles may use ready-made car parts (tires, gears etc.). However use of ready-made cars, if
found, will lead to immediate disqualification. Vehicle chassis have to be built by the
participants.</p></li>
                            <li><p>The potential difference between any two points of the vehicle must not exceed 15 V.</p></li>
                            <li><p>The wired robot is required to have a minimum wire length of 2 m.</p></li>
                            <li><p>Use of internal combustion engines is not allowed. Only electric motors have to be used for
power.</p></li>
                            <li><p>Participants are not allowed to touch the vehicle once it has started. In case of the vehicle
getting stuck, they can correct its course with some penalty.</p></li>
                            <li><p>The amphibot should not, in any way, take the support of the walls or the pool bottom while
crossing the water pool.</p></li>
                            <li><p>The bot has to clear each checkpoint on the track before going to the next.</p></li><li><p>There is no
restriction on the weight of the amphibot. It is up to the participants and their
engineering judgment to decide about this.</p></li>
                            <li><p>Each participant will be given one test run and two trials (at once back to back) on the
track. The least time of the two trials will be taken.</p></li>
                            <li><p>Each team is entitled to two trials. In case a bot encounters a technical snag in any of the
trials, the time of the other trial will be taken into account. In case the bot encounters a
technical snag in both trials, that team will be disqualified.</p></li>
                            <li><p>In the rare event of a tie, the tied teams will be asked to race again in a sudden death situation. The timings for the sudden death race will be considered and the earlier timings
(even though they may be better) will be scrapped. However this is only in the rare event of a
tie.</p></li>
                            <li><p>In the rare case that no amphibot completes the entire track, the track will be curtailed and
reduced to an easier level.</p></li>
                            <li><p>Other real time racing rules will be given on-spot and nothing except track would be provided.</p></li>
                        </ul>  
                    <br>  
                    <h3>Prize Money : </h3>
                        <ul style="color:#edb451">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 8,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 5,000</p></li>
                            <li><p>3<sup>rd</sup> &nbsp; Prize : &nbsp;  &#8377; 3,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('salilsthalchar'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#edb451;border:#edb451" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/botintheact/3" class="btn btn-default rbutton" style="color:#FFF;background-color:#edb451;border:#edb451"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#edb451;border:#edb451"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#edb451">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#edb451">
                        <p>Priyanka Sahu</p>9446292617                    
                    </div>
                    <div class="col-lg-6" align="right" style="color:#edb451">
                        <p>Kumanan</p>9446125530               
                    </div>
				</div>
			</div>
			<button style="color:#edb451" class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
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
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0.5,
        "color": "#127025"
      },
      "polygon": {
        "nb_sides": 15
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
      "color": "#EDB451",
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