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
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/cyberia.png" alt="Webbed" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/cyb1_p.png" alt="Webbed preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color: #2196F3" class="slide__title">Webbed<p style="font-size:15px">the online treasure hunt</p></h2>
			</div>
            
			<div class="slide" data-content="content-2">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/cyberia.png" alt="CCube" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/cyb2_p.png" alt="CCube preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color: #2196F3" class="slide__title">CCube<p style="font-size:15px">the online coding contest</p></h2>
			</div>
            
			<div class="slide" data-content="content-3">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/cyberia.png" alt="Mathematrix" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/cyb3_p.png" alt="Mathematrix preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color: #2196F3" class="slide__title">Mathematrix<p style="font-size:15px">the maths that makes you mad!</p></h2>
			</div>
                        
            <div class="slide" data-content="content-4">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/cyberia.png" alt="Astronomia" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/cyb4_p.png" alt="Astronomia preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color: #2196F3" class="slide__title">Astronomia<p style="font-size:15px">the online space race</p></h2>
			</div>
            
            <div class="slide" data-content="content-5">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/cyberia.png" alt="Mobius Strip" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/cyb5_p.png" alt="Mobius Strip preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color: #2196F3" class="slide__title">Mobius Strip<p style="font-size:15px">the online quizzing competition</p></h2>
			</div>
            
			<nav class="slider__nav">
				<button style="color: #2196F3" class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous event</span></button>
				<button class="button button--zoom" style="color: #2196F3"><span style="font-size:20px">View details</span></button>
				<button style="color: #2196F3" class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next event</span></button>
			</nav>
		</section>
		<!-- /slider-->
		<section class="content">
			<div class="content__item" id="content-1">
				<img style="margin-top:-900px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/cyb1.png" alt="Webbed Content" />
				<div class="content__item-inner">
					<h2 style="color: #2196F3">Webbed</h2><br>
					<p style="color: #2196F3">If last year’s ride through the maze of questions that led (and misled) you to more
intriguing ones fascinated you, here’s a virtual adventure that is guaranteed to
give the thrill of a lifetime. Webbed is back – with murkier corners, crazier
questions, innumerable twists and turns and a huge amount of fun!</p>
                    <br>
                    <h3>Format :</h3>
                    <p  style="color: #2196F3;font-style:italic">What you have to do:</p><br>
<p style="color: #2196F3">Your mission should you choose to accept is to navigate from one webpage to
another, using all of the information available on it. You may need more than just
a mouse and a keyboard for accomplishing your tasks.</p><br>
<p style="color: #2196F3;font-style:italic">What you will need:</p><br>
<p style="color: #2196F3;font-weight:800">Lateral Thinking </p><p style="height: 0px"><br></p><p style="color: #2196F3">Two skew lines may or may not meet at only one point. In short, thinking straight
is a not a good idea.</p><br>
<p style="color: #2196F3;font-weight:800">Common Sense </p><p style="height: 0px"><br></p><p style="color: #2196F3">
Voltaire was right about a lot of things, but never did he hit the nail right on its
head so hard.</p><br>
<p style="color: #2196F3;font-weight:800">Sense of Humor </p><p style="height: 0px"><br></p><p style="color: #2196F3">
Stop by a question once in a while and smell the roses. See the lighter side of
things.</p><br>
<p style="color: #2196F3;font-weight:800">General Knowledge </p><p style="height: 0px"><br></p><p style="color: #2196F3">
Neither necessary nor sufficient, it usually helps. GIYF, in any case.</p><br>
<p style="color: #2196F3;font-weight:800">Perseverance and Integrity </p><p style="height: 0px"><br></p><p style="color: #2196F3">
Cheaters never prosper. No tomfoolery of this sort will be tolerated.</p><br>
<br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#2196F3">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 5,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,500</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('webbed'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/cyberia/15" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#2196F3">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#2196F3">
                        <p>Malay Pushkar Sontakke</p>9496740959                    
                    </div>
                    <div class="col-lg-6" align="right" style="color:#2196F3">
                        <p>Vivek Ramteke</p>9496765079                
                    </div>
				</div>
			</div>
            
			<div class="content__item" id="content-2">
				<img style="margin-top:-240px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/cyb2.png" alt="CCube Content" />
				<div class="content__item-inner">
					<h2  style="color:#2196F3">CCube</h2><br>
					<p style="color: #2196F3">Every problem has multiple dimensions. Fancy your chances beyond what is
certain? Find the best way to dodge the traps. It is not just about what you code;
it is about how you code. So, can you see beyond the obvious?</p>
                    <br>
                    <h3>Format :</h3>
                    <p  style="color: #2196F3">Undergraduate students with valid Identity Card are allowed to participate.
It is an individual event.</p><br>
<br>   
                    <h3>Judgement Criterion :</h3>
                    <p  style="color: #2196F3">Based on performance. (Time and resources consumed). Each problem with
unique weightage in real time.</p><br>
<br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#2196F3">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 4,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,500</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('ccube'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/cyberia/16" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#2196F3">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#2196F3">
                        <p>Abhinav Kumar</p>9446251753                    
                    </div>
				</div>
			</div>
            
            
            <div class="content__item" id="content-3">
				<img style="margin-top:-400px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/cyb3.png" alt="Mathematrix Content" />
				<div class="content__item-inner">
					<h2 style="color: #2196F3">Mathematrix</h2><br>
					<p style="color: #2196F3">It is not enough to have a good mind, what's important is to use it well. So if
numbers are an innate part of your nature then battle against your likes to find
out who is better.</p>
                    <br>
                    <h3>Rules :</h3>
                        <ul  style="color: #2196F3">
                            <li>
                    <p  style="color: #2196F3">Event duration is 12 hours.</p></li>
                            <li>
                    <p  style="color: #2196F3">A team may comprise of a maximum of 2 members.</p></li>
                            <li>
                    <p  style="color: #2196F3">The numerical answer is to be submitted in the text box. The answer should be
rounded of till the fourth decimal place. If the answer is an integer then the
answer should be that integer only. E.g. if the answer is 3, then it should be
submitted as 3, not 3.0000.</p></li>
                            <li>
                    <p  style="color: #2196F3">Each question has at-most 10 attempts.</p></li>
                            <li>
                    <p  style="color: #2196F3">The questions can be solved in any order.</p></li>
                            <li>
                    <p  style="color: #2196F3">Each question will carry marks based on its difficultyThe winner will be decided on the basis of the
total score of each participant.</p></li>
                            <li>
                    <p  style="color: #2196F3">Decision of the event organizers will be final and binding under all
circumstances.</p></li>
                        </ul>
                            </p><br>
                    <h3>Prize Money : </h3>
                        <ul style="color:#2196F3">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 4,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('mathematrix'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/cyberia/17" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#2196F3">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#2196F3">
                        <p>Vijay Kailashnath Dubey</p>9496129759                    
                    </div>
				</div>
			</div>
              
           <div class="content__item" id="content-4">
				<img style="margin-top:-400px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/cyb4.png" alt="Astronomia Content" />
				<div class="content__item-inner">
					<h2 style="color: #2196F3">Astronomia</h2><br>
					<p style="color: #2196F3">The Path to knowledge is complex and twisted, one wrong turn and you are
lost in the wilderness. Find your way through the complex labyrinth by churning
up a million neurons in your brain, deciphering the hints and mastering the
puzzles.</p>
                    <br>
                    <h3>Format :</h3>
                        <ul  style="color: #2196F3">
                            <li>
                    <p  style="color: #2196F3">At each step you will be faced with a challenge, prove yourselves worthy then you
have my permission to go ahead.</p></li>
                            <li>
                    <p  style="color: #2196F3">Keep your eyes open for hints, they may be hidden in source code or the url or in
the depths of space.</p></li>
                            <li>
                    <p  style="color: #2196F3">The first one that beats the odds and emerges triumphant, wins.</p></li>
                            <li>
                    <p  style="color: #2196F3">No specific knowledge of
Astronomy is required but then a little knowledge
won’t hurt anyone.</p></li>
                        </ul>
                            </p><br>
                    <h3>Rules :</h3>
                        <ul  style="color: #2196F3">
                            <li>
                    <p  style="color: #2196F3">Mods are Gods.</p></li>
                            <li>
                    <p  style="color: #2196F3">You fight your battles alone. If found out otherwise, you will be decommissioned.</p></li>
                            <li>
                    <p  style="color: #2196F3">Google, Bing, Yahoo which ever you prefer, is your aid in your quest. You are free
to use anything .</p></li>
                        </ul>
                            </p><br>
                    <h3>Prize Money : </h3>
                        <ul style="color:#2196F3">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 3,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('astronomia'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/cyberia/18" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#2196F3">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#2196F3">
                        <p>Ankita Shandilya</p>9446127501
                    </div>
                    <div class="col-lg-6" align="right" style="color:#2196F3">
                        <p>Priya Sarkar</p>9446125763
                    </div>                    
				</div>
			</div>
            
             <div class="content__item" id="content-5">
				<img style="margin-top:-240px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/cyb5.png" alt="Mobius Strip Content" />
				<div class="content__item-inner">
					<h2 style="color: #2196F3">Mobius Strip</h2><br>
					<p style="color: #2196F3">Mobius strip is Conscientia’s online chain quiz, organized by the Quiz Club of IIST.
If you have a keen passion for quizzing, and you are natural connect-the-dots
person, who can find a pattern amongst seemingly unconnected things, Mobius
strip is for you. Participate in Mobius strip, Conscientia’s online chain quiz and
gear up for the ultimate quizzing challenge. Remember, Time is a factor, and
Google is your best buddy.</p>
                    <br>
                    <h3>Format :</h3>
                        <ul  style="color: #2196F3">
                            <li>
                    <p  style="color: #2196F3">An individual event.</p></li>
                            <li>
                    <p  style="color: #2196F3">The person with the most number of correct answers in least amount of time
wins.</p></li>
                            <li>
                    <p  style="color: #2196F3">Details will be provided in the question paper.</p></li>
                        </ul>
                            </p><br>
                    <h3>Prize Money : </h3>
                        <ul style="color:#2196F3">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 2,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('mobiusstrip'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/cyberia/19" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#2196F3;border:#2196F3"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#2196F3">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#2196F3">
                        <p>Piyush</p>9446122278                    
                    </div>
				</div>
			</div>
            
			<button style="color: #2196F3" class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
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
      "color": "#2196F3",
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