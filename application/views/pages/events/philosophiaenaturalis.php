<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conscientia 2016 | Events | Philosophiae Naturalis</title>
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
	           top: 52.5%;
	left: 51.5%;
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
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/phileve.png" alt="Panchmantra" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/pn1_p.png" alt="Panchmantra preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#F44336" class="slide__title">Panchmantra<p style="font-size:15px">think, innovate and think again!</p></h2>
			</div>
            
			<div class="slide" data-content="content-2">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/phileve.png" alt="Image-In" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/pn2_p.png" alt="Image-In preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#F44336"  class="slide__title">Image-In<br><p style="font-size:15px">i=r</p></h2>
			</div>
            
			<div class="slide" data-content="content-3">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/phileve.png" alt="How Adam did it" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/pn3_p.png" alt="How Adam did it preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#F44336"  class="slide__title">How Adam did it<p style="font-size:15px">the first man problems</p></h2>
			</div>
            
			<div class="slide" data-content="content-4">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/phileve.png" alt="Phyknight" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/pn4_p.png" alt="Phyknight preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#F44336"  class="slide__title">Phyknight<p style="font-size:15px">the physics of the possible</p></h2>
			</div>
            
			<div class="slide" data-content="content-5">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/phileve.png" alt="SimPhy" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/pn5_p.png" alt="SimPhy preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#F44336"  class="slide__title">Sim-Phy<p style="font-size:15px">the world in your computer</p></h2>
			</div>
            
			<nav class="slider__nav">
				<button style="color:#F44336" class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous event</span></button>
				<button style="color:#F44336" class="button button--zoom"><span>View details</span></button>
				<button style="color:#F44336" class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next event</span></button>
			</nav>
		</section>
		<!-- /slider-->
		<section class="content">
			<div class="content__item" id="content-1">
				<img  style="margin-top: -1000px"class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/pn1.png" alt="Panchmantra Content" />
				<div class="content__item-inner">
					<h2 style="color:#F44336">Panchmantra</h2><br>
					
<p style="color:#F44336">Think and come out with the most simplest and innovative ideas to solve the given
problems in each level of this bumpy journey. Problems need you to apply elementary
scientific knowledge, common sense and your 'out of the box thinking' ... It gets better
and better with each increasing level.</p>
                    <br>
                    <h3>Format : </h3>
                        <ul style="color:#F44336">
                            <li><p>Prelims will be written round in which maximum of 20 teams will be selected for the finals.</p></li>
                            <li><p>The race takes you through 5 different tasks based on the application of
engineering, science, logic or mathematics etc.</p></li>
                            <li><p>Teams will have to complete a task fully.</p></li>
                            <li><p>Choose your team wisely... diversity in skill matters. Problems need elementary knowledge
of all streams...</p></li>
                        </ul>    
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#F44336">
                            <li><p>The event is open to all college students with valid ID cards.</p></li>
                            <li><p>A team can have a maximum of 3 members.</p></li>
                            <li><p>A person can be part of only one team.</p></li>
                            <li><p>The members of the teams can be from different colleges.</p></li>
                            <li><p>"If you think you can put science into practice, you are eligible".</p></li>
                            <li><p>Any valid solutions to the given task will be considered.</p></li>
                            <li><p>Evaluation will be based on the efficiency of your model, your explanation to the solution
and how fast you reach the solution.</p></li>
                            <li><p>The most innovative and practically viable solution will help score higher.</p></li>
                            <li><p>The team must complete the round in stipulated time to qualify to next round.</p></li>
                            <li><p>The next task will be given only on the completion of the first task.</p></li>
                            <li><p>The decision of the event organizers will be final and binding under all circumstances.</p></li>
                            <li><p>Participation in malpractices like taking help from the other groups, if caught will be
eliminated or disqualified.</p></li>
                            <li><p>If you still have any doubts regarding the rules, please consider the organisers without
hesitation.</p></li>
                        </ul>  
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#F44336">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377;7,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 5,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('panchmantra'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/philosophiaenaturalis/28" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#F44336">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#F44336">
                        <p>D. Pavani</p>9446148014                     
                    </div>
                    <div class="col-lg-6" align="right" style="color:#F44336">
                        <p>M. Rishitha</p>9496161569              
                    </div>
				</div>
			</div>
            
			<div class="content__item" id="content-2">
				<img  style="margin-top: -600px"class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/pn2.png" alt="Image-In Content" />
				<div class="content__item-inner">
					<h2 style="color:#F44336">Image-In</h2><br>
					
<p style="color:#F44336">For one eye it is a ray, for the other it as a wave. In spite of this duality it rules the universe.
Enthusiasts don’t get bewildered by its properties and play around with it to come up with breathtaking marvels.
Conscientia 2016 gives you an opportunity to bend, merge, scatter and whatever you can do with it
to show your attachment with the fastest thing in the material universe.</p>
                    <br>
                    <h3>Format : </h3>
                        <ul style="color:#F44336">
                            <li><p>There will be a preliminary round followed by the finals.</p></li>
                            <li><p>The prelims will be a written round with questions from basics of optics.</p></li>
                            <li><p>The teams selected for the finals will be given a series of tasks wherein they will be required to
solve the given problem statement using the instruments provided.</p></li>
                            <li><p>The teams that complete a given task within the allotted time frame will move to the next
round.</p></li>
                        </ul>    
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#F44336">
                            <li><p>A team may consist of a maximum of 3 members.</p></li>
                            <li><p>The event is open to all college students with valid ID cards.</p></li>
                            <li><p>Use of books, mobile phones will lead to disqualification.</p></li>
                            <li><p>Optical lenses and mirrors will be provided.</p></li>
                            <li><p>The decision of the event organizers will be final and binding under all circumstances.</p></li>
                        </ul>  
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#F44336">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377;4,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('imagein'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/philosophiaenaturalis/29" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#F44336">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#F44336">
                        <p>Gokul</p>9495400121                    
                    </div>
                    <div class="col-lg-6" align="right" style="color:#F44336">
                        <p>Nandakishore</p>9400913113              
                    </div>
				</div>
			</div>
           
            <div class="content__item" id="content-3">
				<img  style="margin-top: -1100px"class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/pn3.png" alt="How Adam did it Content" />
				<div class="content__item-inner">
					<h2 style="color:#F44336">How Adam did it</h2><br>
					<h3>
					<blockquote>"All of the biggest technological inventions created by man - the airplane, the automobile, the
computer - says little about his intelligence, but speaks volumes about his laziness."<br><h3 style="text-align : right;font-size:15px">Mark Kennedy</h3></blockquote> </h3>
<p style="color:#F44336">Ever wondered if you were born back then even you too would have came up with some great
inventions. This is your chance to put yourself to test and to show your prowess in designing and
cracking problems.</p>
                    <br>
                    <h3>Format : </h3>
                    <p style="color:#F44336">There will be two rounds :</p>
				    <div style="font-size: 20px;color: #F46655;">Prelims</div>
                    <p style="color:#F44336">A written round consisting of 10 questions and 2 separate bonus questions (no tie breaker).</p>
                    <div style="font-size: 20px;color: #F46655;">Mains</div>  
                        <ul style="color:#F44336">
                            <li><p>Few teams will be selected for the final.</p></li>
                            <li><p>They will be provided with resources and a problem statement.</p></li>
                            <li><p>The finalists have to make an invention to solve the problem.</p></li>
                            <li><p>In case of a tie, an extra clause may be added to the problem statement by the organizers.</p></li>
                        </ul>    
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#F44336">
                            <li><p>One team should consist of maximum two persons.</p></li>
                            <li><p>Use of unfair means is strictly prohibited and this will lead to disqualification of the team from the event.</p></li>
                        </ul>   
                    <br>   
                    <h3>Judgement Criteria : </h3>
                        <ul style="color:#F44336">
                            <li><p>The answers of the first round will be limited.</p></li>
                            <li><p>The design problem will be evaluated based on its effectiveness in realizing the problem
statement.</p></li>
                            <li><p>For the second round, the score will depend on how closely the design meets the required criteria.</p></li>
                            <li><p>The participant should keep in mind, the era specified in the problem. If they have used a
material which is ahead of that time, no points will be awarded.</p></li>
                            <li><p>The result of the second round will also depend on the performance of their invention and not on
the design. The invention which will perform the best, wins.</p></li>
                            <li><p>The decision of the organisers will be final.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#F44336">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377;4,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('howadamdidit'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/philosophiaenaturalis/30" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#F44336">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#F44336">
                        <p>Arunita</p>9446121597                    
                    </div>
				</div>
			</div>
            
              <div class="content__item" id="content-4">
				<img  style="margin-top: -600px"class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/pn4.png" alt="Phyknight Content" />
				<div class="content__item-inner">
					<h2 style="color:#F44336">Phyknight</h2><br>
					<h3>
					<blockquote>"The Knight will rise and challenge the realm of questions in the empire of Physics."<br><h3 style="text-align : right;font-size:15px">-For the love of Irodov-</h3></blockquote> </h3>
<p style="color:#F44336">This conscientia, PhyKnight presents an opportunity to delve into the beautiful problems of Physics
which will twist your mind and will make you nostalgic of the good old Olympiad days.</p>
                    <br>
                    <h3>Format : </h3> 
                        <ul style="color:#F44336">
                            <li><p>Prelims will be a subjective round.</p></li>
                            <li><p>No. of Questions = 8-10.</p></li>
                            <li><p>Time – 1 hr</p></li>
                            <li><p>Members allowed - 3</p></li>
                            <li><p>Time – 1 hr</p></li>
                            <li><p>Round 2 will be based on the format of International Physics Olympiad which will consist of both
theoretical and experimental part.</p></li>
                            <li><p>Problem statement will be released on spot and on the day event is conducted.</p></li>
                        </ul>    
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#F44336">
                            <li><p>The event is open to all college students with valid ID cards.</p></li>
                            <li><p>Any type of cheating will lead to disqualification.</p></li>
                            <li><p>Decision of judges will be final.</p></li>
                        </ul>   
                    <br> 
                    <h3>Prize Money : </h3>
                        <ul style="color:#F44336">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377;3,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('phyknight'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/philosophiaenaturalis/31" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#F44336">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#F44336">
                        <p>Aprem p. Joy</p>9496737401                   
                    </div>
                    <div class="col-lg-6" align="right" style="color:#F44336">
                        <p>Akash Ganguly</p>8137900447                   
                    </div>
				</div>
			</div>
                        
            <div class="content__item" id="content-5">
				<img  style="margin-top: -1500px"class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/pn5.png" alt="Sim-Phy Content" />
				<div class="content__item-inner">
					<h2 style="color:#F44336">Sim-Phy</h2><br>
					
<p style="color:#F44336">Event on Computer Simulation.<br>
This is a Computational Physics/Computer Simulation event focused on bringing out the
programming skills of engineers and scientists in the field that it is most relevant for – dynamical
system modelling. Physical problems from disciplines spanning from electrodynamics to control
systems to computational fluid dynamics will be posed and the best code wins the cake.</p>
                    <br>
                    <h3>Format : </h3>
                        <p style="color:#F44336">
                            An array of physical problems with varying levels of difficulties will be presented at the beginning
of the event. The participants will have to solve as many as they can. There will be no restriction on
the number of problems they do – each problem will be having different weightages which will be
revealed to the participants only after the event. A4 sheets will be supplied upon which a fair copy
of their equations (final forms) and other relevant things must be documented by hand.</p>    
                    <br>
                    <h3>Rules : </h3>
                    <p style="color:#F44336">The lack of, rather – the following are the ‘bindings’ for the event :</p>  
                        <ul style="color:#F44336">
                            <li><p>No restrictions on the number of participants per group (nominally 5).</p></li>
                            <li><p>The participants are allowed to use any tools/software/libraries that they are comfortable
with (with the obvious exception of commercially available FEA and CFD software) – a
basic set of software resources will be installed in the lab computers for them to use, but use
of personal PC’s is NOT prohibited</p></li>
                            <li><p>Plagiarism, if found, will be dealt with strictly.</p></li>
                            <li><p>Extra credits for using primitive languages like C, C++, FORTRAN, etc.</p></li>
                            <li><p>Use of internet is allowed and internet access will be available in the lab computers.</p></li>
                            <li><p>Reference material (some relevant books + pdfs) will be provided on demand.</p></li>
                            <li><p>At the end of the stipulated time the participants are to submit the following:
                                <ul>
                                    <li><p>The A4 sheet paper filled with the relevant brief documentation.</p></li>
                                    <li><p>A zip file containing the code and output.</p></li>
                                    <li><p>The output may be shown by the participants personally too.</p></li>
                                </ul>
                            </p></li>
                        </ul>   
                    <br>   
                    <h3>Judging Criteria : </h3>
                    <p style="color:#F44336">The judging criteria will be (in order of significance),</p>
                        <ul style="color:#F44336">
                            <li><p>Accuracy in the mathematical model developed (judged from the A4 document).</p></li>
                            <li><p>Algorithms used</p></li>
                            <li><p>Code readability</p></li>
                            <li><p>Output</p></li>
                            <li><p>Efficiency of code – load on processor, memory consumed, etc.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#F44336">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377;4,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,500</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('simphy'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/philosophiaenaturalis/32" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#F44336;border:#F44336"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#F44336">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#F44336">
                        <p>B. Nidish Narayanaa</p>9496882251                    
                    </div>
				</div>
			</div>
            
            
			<button style="color:#F44336" class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
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
      "color": "#F44336",
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