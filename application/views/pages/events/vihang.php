<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conscientia 2016 | Events | Vihang</title>
	<meta name="author" content="Conscientia" />
	<link rel="shortcut icon" href="<?=base_url()?>favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/fonts/feather/style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/indevent.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/loader.css">
	<script src="<?=base_url()?>contents/js/modernizr-2.6.2.min.js"></script>
    <style>
        
.zoomer__image {
	display: block;
    height: 512px;
    width: 712px;
	margin: 0;
	-webkit-flex: none;
	-ms-flex: none;
	flex: none;
}

        .zoomer__area,.preview {
            position: absolute;
	           top: 58.75%;
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
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/vihangeve.png" alt="Air Strike" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/vih1_p.png" alt="Air Strike preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#4CAF50" class="slide__title">Air Strike<p style="font-size:15px">the RC plane competition</p></h2>
			</div>
            
			<div class="slide" data-content="content-2">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/vihangeve.png" alt="Techflight" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/vih2_p.png" alt="Techflight preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#4CAF50" class="slide__title">Techflight<p style="font-size:15px">the ornithopter competition</p></h2>
			</div>
            
			<div class="slide" data-content="content-3">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/vihangeve.png" alt="Prakshepan" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/vih3_p.png" alt="Prakshepan preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#4CAF50" class="slide__title">Prakshepan<p style="font-size:15px">the water rocketry contest</p></h2>
			</div>
            
			<div class="slide" data-content="content-4">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/vihangeve.png" alt="Techglide" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/vih4_p.png" alt="Techglide preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#4CAF50" class="slide__title">Techglide<p style="font-size:15px">the glider making contest</p></h2>
			</div>
            
			<nav class="slider__nav">
				<button style="color:#4CAF50" class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous event</span></button>
				<button style="color:#4CAF50" class="button button--zoom"><span>View details</span></button>
				<button style="color:#4CAF50" class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next event</span></button>
			</nav>
		</section>
		<!-- /slider-->
		<section class="content">
			<div class="content__item" id="content-1">
				<img style="margin-top:-2500px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/vih1.png" alt="Air Strike Content" />
				<div class="content__item-inner">
					<h2 style="color:#4CAF50" >Air Strike</h2><br>
					<h3>
					<blockquote>"To invent an airplane is nothing. To build one is something. To fly is everything."<br><h3 style="text-align : right;font-size:15px">Otto Lilienthal</h3></blockquote> </h3>
<p style="color:#4CAF50">Your task is to design and build a remote controlled aircraft using only electric motors agreeing
with given specifications, which can complete the given task in shortest possible time and land
safely in the landing zone. In short, just DESIGN! BUILD! and FLY!</p>
                    <br>
                    <h3>Specifications : </h3>
                        <ul style="color:#4CAF50">
                            <li><p>It should be a powered, fixed wing aircraft (Hovercrafts, helicopters, airships, etc. are not
allowed).</p></li>
                            <li><p>A team can participate with only one aircraft and the same aircraft has to be used for all the
rounds.</p></li>
                            <li><p>The aircraft should only be powered by electric motors. No other means of propulsion to be
used (use of IC engines or any other method is prohibited).</p></li>
                            <li><p>The max potential difference between any two points should not be more than 15 V DC.</p></li>
                            <li><p>Length of the aircraft should not be more than 1 m and wing span should not exceed 80 cm.</p></li>
                            <li><p>The aircraft should be hand launched. (Any other launching mechanism is not allowed.)</p></li>
                            <li><p>Use of gyroscopes is prohibited.</p></li>
                            <li><p>Aircraft must be capable to demonstrate pitch and roll.</p></li>
                            <li><p>All the participants are expected to build the aircraft themselves. Aircraft built using Ready-tofly
kits or Almost ready to fly kits will be disqualified.</p></li>
                            <li><p>Participants are free to use any material to build the aircraft.</p></li>
                            <li><p>The team has to bring their own transmitter-receiver kits for the competition (the organizers
are not going to provide any transmitter).</p></li>
                            <li><p>An aircraft which is not adhering with any of the above specification will be disqualified.</p></li>
                        </ul>    
                    <br>
                    <h3>Format : </h3>
				    <div style="font-size: 20px;color: #66AF77;">Screening Round</div>
                    <p style="color:#4CAF50">The dimensions, battery specification, etc. of the aircraft will be verified to check whether they
are compatible with the given specifications.</p>
                    <div style="font-size: 20px;color: #66AF77;">Competition Round</div>  
                        <ul style="color:#4CAF50">
                            <li><p>To win the competition the teams will have to complete a specified task in minimum time possible.</p></li>
                            <li><p>Task 1 – The aircraft has to fly around the three poles as per the given route (see fig.) after being hand-launched from the launch zone (shown in the fig.)</p></li>
                            <li><p>Task 2 – After completion of the loops, the aircraft has to turn towards the landing area in the next zone.</p></li>
                            <li><p>Task 3 – The aircraft has to go below and above the ropes tied at a fixed height.</p></li>
                            <li><p>Task 4 – The aircraft has to land successfully in the landing zone within specified limits of the runway.</p></li>
                        </ul>    
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#4CAF50">
                            <li><p>Each team will have 2 trials. The better of the two will be considered for judgment. Use of the
2<sup>nd</sup> trial is optional if 1<sup>st</sup> trial is successful.</p></li>
                            <li><p>The aircraft has to be hand-launched from the launch zone of the arena (shown in the fig.).
The person launching the aircraft has to be present within the launch zone at the time the aircraft
leaves his/her hand.</p></li>
                            <li><p>The aircraft must follow the specified route (see fig.) while manoeuvring around the poles.
No points will be awarded for otherwise.</p></li>
                            <li><p>Whole of the aircraft must move into the turning zone and successfully turn around (do a U-turn)
and should fly out of the turning zone to receive full points for turning.</p></li>
                            <li><p>The air craft must go below and above the tied rope successfully and go to the landing zone to
receive full points for rope round.</p></li>
                            <li><p>Landing should take place within the landing zone. Landing will be considered successful only if
the touchdown point is after the starting line of the landing zone and whole of the aircraft body
is within limits of the landing zone after stopping.</p></li>
                            <li><p>If the aircraft stops after successful landing within the different segments of the landing zone,
points will be awarded accordingly (as shown in the fig.).</p></li>
                            <li><p>Bonus points will be awarded for soft-landing. A landing is termed as soft-landing if the propeller
is undamaged and all parts of the aircraft remain attached to it after the aircraft comes to halt.</p></li>
                            <li><p>Team should complete the task in minimum possible time to earn more points.</p></li>
                            <li><p>Time of flight starts as soon as the aircraft is in air and stops when the aircraft finally comes to
halt.</p></li>
                        </ul>
                    <br>
                    <h3>Arena :</h3>
                        <p style="color:#4CAF50">
                        <img src="<?=base_url()?>contents/images/events/asarena1.jpg" alt="areana" style="width:100%;display:block !important"/><br /><br />
                        <img src="<?=base_url()?>contents/images/events/asarena2.jpg" alt="areana" style="width:100%;display:block !important"/>
                        </p>  
                    <br>
                    <h3>Judging Criteria :</h3>
                        <p style="color:#4CAF50">
                         Score = Loops(250) + Turning zone (100) +Rope 1(100) + Rope 2(50)+ Landing in zone (zone 1=100; zone 2=50; zone 3=30) + Soft Landing (40) – time of flight (in seconds) x 0.5   
                        </p>  
                    <br />
                    <h3>Prize Money : </h3>
                        <ul style="color:#4CAF50">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377;15,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 10,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('airstrike'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#4CAF50;border:#4CAF50" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/vihang/20" class="btn btn-default rbutton" style="color:#FFF;background-color:#4CAF50;border:#4CAF50"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#4CAF50;border:#4CAF50"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#4CAF50">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#4CAF50">
                        <p>Priyanka Sahu</p>9446292617                   
                    </div>
                    <div class="col-lg-6" align="right" style="color:#4CAF50">
                        <p>Vandana</p>9497403601                
                    </div>
				</div>
			</div>
            
			<div class="content__item" id="content-2">
				<img style="margin-top: -1050px"class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/vih2.png" alt="Techflight Content" />
				<div class="content__item-inner">
					<h2 style="color:#4CAF50" >Techflight</h2><br>
					<h3>
					<blockquote>"The reason birds can fly and we can't is simply because they have perfect faith, for to have faith
is to have wings."<br><h3 style="text-align : right;font-size:15px">J. M. Barrie</h3></blockquote> </h3>
<p style="color:#4CAF50">Ever wondered how a bird flies??? The prompt answer would be “YES”...Well, now let’s put it in
an interesting way...Ever tried to figure out the technique used by birds to fly high....is it the mere
flapping of wings or is there something more to it???<br>
Come, unravel the unexplored domain of your imagination. Build a real time flying machine
mimicking a bird in flight. Understand the intricacies involved in ensuring a successful flight.<br>
Come, let’s fly!!!</p>
                    <br>
                    <h3>Format : </h3>
                    <p style="color:#4CAF50">Each team has to build an Ornithopter using the given materials only. The event consists of two
rounds. In Round 1, all the teams would be given 3.5 hrs to build their Ornithopter. A basic
template with all the instructions would be provided to each team at the start of the event.
Innovations in design and novelty in mechanism would have their own bonus points. Only those
teams who have completed making their Ornithopter in the given time duration would proceed
to Round 2. In round 2, each team will have to fly their Ornithopter and points will be awarded
based on the judging criteria.</p>
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#4CAF50">
                            <li><p>Each team should comprise of maximum 4 members.</p></li>
                            <li><p>No registration will be allowed after the start of the event.</p></li>
                            <li><p>All the required materials would be provided at the start of the event.</p></li>
                            <li><p>No outside material is allowed. (Pencil, scale, ruler, eraser, protractor and compass are allowed.)</p></li>
                            <li><p>No extra time will be given for Round 1.</p></li>
                            <li><p>The Ornithopter should fly by flapping of the wings and not inertia.</p></li>
                            <li><p>Only hand launch is permitted from the specified location and the specified height.</p></li>
                            <li><p>Use of any electronic items (except a hand-held calculator) is strictly prohibited.</p></li>
                            <li><p>Any malpractice will lead to immediate disqualification.</p></li>
                        </ul>    
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#4CAF50">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377;4,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,500</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('techflight'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#4CAF50;border:#4CAF50" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/vihang/21" class="btn btn-default rbutton" style="color:#FFF;background-color:#4CAF50;border:#4CAF50"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#4CAF50;border:#4CAF50"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#4CAF50">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#4CAF50">
                        <p>Shreeya Natarajan</p>9594309975                  
                    </div>
                    <div class="col-lg-6" align="right" style="color:#4CAF50">
                        <p>Juili</p>9446121659                
                    </div>
				</div>
			</div>
            
            <div class="content__item" id="content-3">
				<img style="margin-top: -1150px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/vih3.png" alt="Prakshepan Content" />
				<div class="content__item-inner">
					<h2 style="color:#4CAF50" >Prakshepan</h2><br>
<p style="color:#4CAF50">Did you ever try making a rocket out of a bottle? Then let’s put that skill on the hammer of
competition. Conscientia 2016 presents Water Rocketry. Let’s dive into the bottle!</p>
                    <br>
                    <h3>Format : </h3>
                    <p style="color:#4CAF50">There will be a single round with two trials per team. The better of two scores will be used for
judgement. Range, accuracy (in form of deviation from a specified line) and time of flight (to
ensure that rocket is aerodynamic and not just a ballistic body.</p>   
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#4CAF50">
                            <li><p>A team can consist of maximum 3 members. Students from different colleges can form a team.</p></li>
                            <li><p>This event is open to all college students with valid ID cards.</p></li>
                            <li><p>Maximum 2 rockets per team are allowed.</p></li>
                            <li><p>Only single stage rockets are allowed.</p></li>
                            <li><p>Boosters and Multistage rockets are not allowed.</p></li>
                            <li><p>All the required components (along with launcher) have to be brought by the participants. No
two teams can share a single launcher.</p></li>
                            <li><p>Model can be of any size or shape.</p></li>
                            <li><p>Maximum pressure allowed is 60 psi.</p></li>
                            <li><p>You can choose any initial angle according to your design.</p></li>
                            <li><p>Only water and Foot pump will be provided.</p></li>
                            <li><p>Electronically controlled models and Parachutes are not allowed.</p></li>
                            <li><p>In case of tie between two or more teams, appropriate decision will be taken by the organisers.</p></li>
                            <li><p>Organisers' decision will be final and binding.</p></li>
                            <li><p>The organizers may change any or all of the above rules at any time.</p></li>
                        </ul>    
                    <br>   
                    <h3>Evaluation Criteria : </h3>
                        <ul style="color:#4CAF50">
                            <li><p>Points will be given based on the Range, accuracy (deviation from the specified line) and
time of flight.<br>Total score, T= R-2d+2t<br>
Where R is the range in m<br>
d is the deviation in m<br>
t is time of flight (s)</p></li>
                            <li><p>Top two teams will be declared as 1<sup>st</sup> and 2<sup>nd</sup> winner according to their final points.</p></li>
                        </ul>    
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#4CAF50">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377;6,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 4,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('prakshepan'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#4CAF50;border:#4CAF50" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/vihang/22" class="btn btn-default rbutton" style="color:#FFF;background-color:#4CAF50;border:#4CAF50"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#4CAF50;border:#4CAF50"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#4CAF50">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#4CAF50">
                        <p>Shiny Shamma</p>9446284349                   
                    </div>
				</div>
			</div>
            
              <div class="content__item" id="content-4">
				<img style="margin-top: -1350px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/vih4.png" alt="Techglide Content" />
				<div class="content__item-inner">
					<h2 style="color:#4CAF50" >Techglide</h2><br>
					<h3>
					<blockquote>"The air to a glider pilot is a reality... He is trying to understand it in all its mood: to learn its flow,
its laws, and try to use this knowledge to his own ends."<br><h3 style="text-align : right;font-size:15px">Philip Wills</h3></blockquote> </h3>
<p style="color:#4CAF50">Come and participate in this competition and show your skills to design a glider that stays in air
for the maximum time while covering a good amount of distance.</p>
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#4CAF50">
                            <li><p>Each team should comprise of maximum 4 members.</p></li>
                            <li><p>There will be a single round and each team will be given two chances. And better of the
two scores will be considered for the judgement.</p></li>
                            <li><p>Scores will be based on Range, Deviation from the straight path (Accuracy) and time of
flight (to give weightage to gliding).</p></li>
                            <li><p>In case of tie between two or more teams, appropriate decision will be taken by the
organisers.</p></li>
                            <li><p>The organisers may change any or all of the above rules at any time.</p></li>
                            <li><p>Organiser’s decision will be final and binding.</p></li>
                            <li><p>Teams with gliders not adhering to the specification below will be disqualified.</p></li>
                        </ul>    
                    <br>   
                    <h3>Specifications : </h3>
                        <ul style="color:#4CAF50">
                            <li><p>Dimension of glider should not exceed 60 cm along the body and maximum wingspan of
75 cm can be used.</p></li>
                            <li><p>You can use any material for making the glider, from paper to coroplast, or Balsa wood.</p></li>
                            <li><p>Ready to Fly kits are not allowed and teams using such kit can be disqualified at any stage
of the competition.</p></li>
                            <li><p>Gliders will be hand launched and no other mechanism for launching can be used.</p></li>
                            <li><p>Glider should be unpowered, use of propeller, however small is strictly prohibited.</p></li>
                            <li><p>No electronics can be used in glider, for e.g. using gyroscope for stability etc.</p></li>
                            <li><p>Any malpractice will lead to immediate disqualification.</p></li>
                        </ul>    
                    <br>     
                    <h3>Evaluation Criteria : </h3>
                        <ul style="color:#4CAF50">
                            <li><p>Total Score, T = R -0.5d+3t, where<br>
Where R is the range in m<br>
d is the deviation in m<br>
t is time of flight (s)</p></li>
                            <li><p>Top two teams will be declared as 1<sup>st</sup> and 2<sup>nd</sup> winner according to their final points.</p></li>
                        </ul>    
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#4CAF50">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377;4,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,500</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('airglide'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#4CAF50;border:#4CAF50" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/vihang/23" class="btn btn-default rbutton" style="color:#FFF;background-color:#4CAF50;border:#4CAF50"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#4CAF50;border:#4CAF50"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#4CAF50">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#4CAF50">
                        <p>Manish Kumar Mishra</p>9496762206                 
                    </div>
				</div>
			</div>
            
			<button style="color:#4CAF50" class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
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
      "color": "#4CAF50",
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