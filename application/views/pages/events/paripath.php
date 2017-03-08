<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conscientia 2016 | Events | Paripath</title>
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
	           top: 49.875%;
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
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/paripatheve.png" alt="LCD" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/par1_p.png" alt="LCD preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#9C27B0" class="slide__title">LCD<p style="font-size:15px">the logical circuit design</p></h2>
			</div>
            
			<div class="slide" data-content="content-2">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/paripatheve.png" alt="Circuiter" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/par2_p.png" alt="Circuiter preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#9C27B0" class="slide__title">Circuiter<p style="font-size:15px">the circuit design contest</p></h2>
			</div>
            
			<div class="slide" data-content="content-3">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/paripatheve.png" alt="Electromania" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/par3_p.png" alt="Electromania preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#9C27B0" class="slide__title">Electromania<p style="font-size:15px">test your electronics skills</p></h2>
			</div>
            
			<div class="slide" data-content="content-4">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/paripatheve.png" alt="Tarang" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/par4_p.png" alt="Tarang preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#9C27B0" class="slide__title">Tarang<p style="font-size:15px">the waves that shock</p></h2>
			</div>
            
			<nav class="slider__nav">
				<button style="color:#9C27B0" class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous event</span></button>
				<button style="color:#9C27B0" class="button button--zoom"><span>View details</span></button>
				<button style="color:#9C27B0" class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next event</span></button>
			</nav>
		</section>
		<!-- /slider-->
		<section class="content">
			<div class="content__item" id="content-1">
				<img style="margin-top:-700px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/par1.png" alt="LCD Content" />
				<div class="content__item-inner">
					<h2 style="color:#9C27B0">LCD</h2><br>
					
<p style="color:#9C27B0">Love challenges?<br>
All set to REGISTER yourself in the hall of fame?<br>
The CLOCK is ticking!<br>
SWITCH on the designer in you AND INVERT the reign of the existing with your LOGIC.<br> No matter how HIGH you go, we will always GROUND you.</p>
                    <br>
                    <h3>Format : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>The event will be conducted in two rounds – Prelims and Finals.</p></li>
                            <li><p>Prelims will be a written round testing your knowledge in Boolean algebra, digital electronics and the latest developments in the field of digital electronics. Selected teams will proceed to the finals.</p></li>
                            <li><p>The Finals consists of design and implementation of a logic circuit using available components for a purpose disclosed on the spot. Additionally the teams may have to debug a given circuit to obtain a specified output.</p></li>
                        </ul>    
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>Each team consists of a maximum of two members.</p></li>
                            <li><p>Engagement in any kind of malpractices will lead to direct disqualification.</p></li>
                            <li><p>Decision of organisers and judges will be final and binding.</p></li>
                        </ul>   
                    <br>   
                    <h3>Eligibility : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>The event is open to undergraduate students as well as school students.</p></li>
                            <li><p>Each participant must have a valid school/college ID-card.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 5,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 3,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('lcd'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#9C27B0;border:#9C27B0" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/paripath/24" class="btn btn-default rbutton" style="color:#FFF;background-color:#9C27B0;border:#9C27B0"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#9C27B0;border:#9C27B0"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#9C27B0">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#9C27B0">
                        <p>Pavan Alamuru</p>9446195018                     
                    </div>
                    <div class="col-lg-6" align="right" style="color:#9C27B0">
                        <p>B.V. Hemambhar</p>9949377932               
                    </div>
				</div>
			</div>
            
			<div class="content__item" id="content-2">
				<img style="margin-top:-1200px"  class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/par2.png" alt="Circuiter Content" />
				<div class="content__item-inner">
					<h2 style="color:#9C27B0">Circuiter</h2><br>
					
<p style="color:#9C27B0">Just imagine if you were to go back 100 years in time, the world would be a place without even a single electronics engineer. What would the place be without ICs, PCBs, transistors, diodes and the three musketeers R, L & C? Does it sound scary...?<br>
If you can imagine what could be done then, you can even imagine what could be done a few years into our future. CIRCUITER gives you this opportunity to make use of the already available technology in order to build the future.<br>
For it is easy to write on a paper as to what an amplifier is and how it works but a bit harder to implement it in hardware, the perfect blend of designing, soldering and rectifying will take you through the test and the one innovative design which shall satisfy the requirements will beat others, and the team will be the unparalleled “CIRCUITER 2016”.</p>
                    <br>
                    <h3>Format : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>Event will be conducted in 2 rounds – Prelims and Finals.</p></li>
                            <li><p>Prelims will be a written round based on fundamentals of electronics and embedded system design. Selected teams will proceed to the Finals.</p></li>
                            <li><p>Finals will be an embedded system design. An embedded system needs to be designed and implemented for a problem statement within specified time. The problem statement will be revealed on the spot.</p></li>
                        </ul>    
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>The required implementation in the problem statement has to be done on a PCB (no bread boards shall be entertained).</p></li>
                            <li><p>No market available ready-made kits will be given. However for micro-controllers you can use the development board given. The exact specifications of the micro-controller will be posted on the website.</p></li>
                            <li><p>Circuits must be soldered and implemented by the participants only.</p></li>
                            <li><p>Engagement in any kind of malpractices will lead to direct disqualification.</p></li>
                            <li><p>Decision of organisers and judges will be final and binding.</p></li>
                        </ul>   
                    <br>   
                    <h3>Eligibility : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>Only undergraduate students are eligible.</p></li>
                            <li><p>A team consists of exactly two members.</p></li>
                            <li><p>Each participant must have a valid college ID-card.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 5,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 3,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('circuiter'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#9C27B0;border:#9C27B0" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/paripath/25" class="btn btn-default rbutton" style="color:#FFF;background-color:#9C27B0;border:#9C27B0"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#9C27B0;border:#9C27B0"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#9C27B0">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#9C27B0">
                        <p>Daksh Dhiman</p>9446214303                     
                    </div>
                    <div class="col-lg-6" align="right" style="color:#9C27B0">
                        <p>Manasvi Bhatt</p>9446577658              
                    </div>
				</div>
			</div>
            
            <div class="content__item" id="content-3">
				<img style="margin-top:-700px"  class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/par3.png" alt="Electromania Content" />
				<div class="content__item-inner">
					<h2 style="color:#9C27B0">Electromania</h2><br>
					
<p style="color:#9C27B0">Electronics-based event comprising of quizzes and accomplishment of tasks using circuits.</p>
                    <br>
                    <h3>Format : </h3>
                    <p style="color:#9C27B0">Event consists of three rounds:</p>
                        <ul style="color:#9C27B0">
                            <li><p>1<sup>st</sup> round: Written prelims to test your basics in electricals and electronics. Selected participants will proceed to the 2<sup>nd</sup>  round.</p></li>
                            <li><p>2<sup>nd</sup>  round: Quizzing round based on electricals and electronics and related trivia. Selected participants will proceed to the 3<sup>rd</sup> round.</p></li>
                            <li><p>3<sup>rd</sup>  round: In the last and final round, you will have to apply your knowledge and creativity in electronics to solve the given puzzle (accomplish the task) within the given time limit.</p></li>
                        </ul>  
                         <p style="color:#9C27B0">Further details will be disclosed on the spot.</p>  
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>Each team shall consist of a maximum of two members.</p></li>
                            <li><p>Rounds are bound by time limits.</p></li>
                            <li><p>Engagement in any kind of malpractices will lead to direct disqualification.</p></li>
                            <li><p>Decision of organisers and judges will be final and binding.</p></li>
                        </ul>   
                    <br>   
                    <h3>Eligibility : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>Only undergraduate students are eligible.</p></li>
                            <li><p>Each participant must have a valid college ID-card.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 4,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,500</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('electromania'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#9C27B0;border:#9C27B0" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/paripath/26" class="btn btn-default rbutton" style="color:#FFF;background-color:#9C27B0;border:#9C27B0"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#9C27B0;border:#9C27B0"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#9C27B0">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#9C27B0">
                        <p>T. Santhoshi</p>9446283522                     
                    </div>
                    <div class="col-lg-6" align="right" style="color:#9C27B0">
                        <p>G. Priya Vamshi</p>9446292798               
                    </div>
				</div>
			</div>
            
              <div class="content__item" id="content-4">
				<img style="margin-top:-700px"  class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/par4.png" alt="Tarang Content" />
				<div class="content__item-inner">
					<h2 style="color:#9C27B0">Tarang</h2><br>
					<h3>
					<blockquote>"Art without engineering is dreaming; engineering without art is calculating."<br><h3 style="text-align : right;font-size:15px">Steven K. Roberts</h3></blockquote> </h3>
<p style="color:#9C27B0">An engineer is an artist in his own respect.<br>
Come! Gaze at the waveform, gasp at the circuit, grasp the logic, and yell at the output.<br>
Make beautiful waveforms and show that beauty encompasses the elements of science!</p>
                    <br>
                    <h3>Format : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>The event will be conducted in two rounds – Prelims and Finals.</p></li>
                            <li><p>Prelims will be a written round based on design and analysis of waveforms and circuits. Selected teams will proceed to the Finals.</p></li>
                            <li><p>Finals consists of circuit design and a bread-board implementation to generate the given waveform(s).</p></li>
                            <li><p>Further details will be disclosed on the spot.</p></li>
                        </ul>    
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>Each team consists of a maximum of two members.</p></li>
                            <li><p>Engagement in any kind of malpractices will lead to direct disqualification.</p></li>
                            <li><p>Decision of organisers and judges will be final and binding.</p></li>
                        </ul>   
                    <br>   
                    <h3>Eligibility : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>Only undergraduate students are eligible.</p></li>
                            <li><p>Each participant must have a valid college ID-card.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#9C27B0">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 5,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 3,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('tarang'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#9C27B0;border:#9C27B0" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/paripath/27" class="btn btn-default rbutton" style="color:#FFF;background-color:#9C27B0;border:#9C27B0"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#9C27B0;border:#9C27B0"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#9C27B0">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#9C27B0">
                        <p>M. Sindhura</p>9446455714                    
                    </div>
                    <div class="col-lg-6" align="right" style="color:#9C27B0">
                        <p>K.S. Bhanumathi</p>9446261677               
                    </div>
				</div>
			</div>
            
			<button style="color:#9C27B0" class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
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
      "value": "#fff"
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
      "color": "#9C27B0",
      "opacity": 0.4,
      "width": 1
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