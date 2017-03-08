<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conscientia 2016 | Events | Kaleidoscope</title>
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
	           top: 32.5%;
	left: 49.75%;
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
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/kaleve.png" alt="Ricerca" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/kal1_p.png" alt="Ricerca preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color : #FF5722" class="slide__title">Ricerca<br><p style="font-size:15px">the paper presentation event</p></h2>
			</div>
            
			<div class="slide" data-content="content-2">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/kaleve.png" alt="Blackbox" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/kal2_p.png" alt="Blackbox preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color : #FF5722"  class="slide__title">Blackbox<br><p style="font-size:15px">find the secret</p></h2>
			</div>
            
			<div class="slide" data-content="content-3">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/kaleve.png" alt="TECH-Wiz" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/kal3_p.png" alt="TECH-Wiz preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color : #FF5722"  class="slide__title">TECH-Wiz<br><p style="font-size:15px">the technical quiz</p></h2>
			</div>
            
			<div class="slide" data-content="content-4">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/kaleve.png" alt="Alpha Geek" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/kal4_p.png" alt="Alpha Geek preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color : #FF5722"  class="slide__title">&#945; - &#947; &#949; &#949; &#954;<p style="font-size:15px">Alpha Geek, the Jack of all subjects</p></h2>
			</div>
            
            <div class="slide" data-content="content-5">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/kaleve.png" alt="Bletchley Park" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/kal5_p.png" alt="Bletchley Park preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color : #FF5722"  class="slide__title">Bletchley Park<br><p style="font-size:15px">the cryptography contest</p></h2>
			</div>
            
            <div class="slide" data-content="content-6">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?=base_url()?>contents/images/events/kaleve.png" alt="MATH Quiz" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/kal6_p.png" alt="MATH Quiz preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color : #FF5722"  class="slide__title">MATH Quiz<br><p style="font-size:15px">let us quiz in mathematics</p></h2>
			</div>
            
			<nav class="slider__nav">
				<button  style="color : #FF5722" class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous event</span></button>
				<button  style="color : #FF5722" class="button button--zoom"><span>View details</span></button>
				<button  style="color : #FF5722" class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next event</span></button>
			</nav>
		</section>
		<!-- /slider-->
		<section class="content">
			<div class="content__item" id="content-1">
				<img style="margin-top:-2600px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/kal1.png" alt="Ricerca Content" />
				<div class="content__item-inner">
					<h2 style="color:#FF5722">Ricerca</h2><br>
					<h3>
					<blockquote>"Imagination is not only the uniquely human capacity to envision that which is not, and, therefore,
the foundation of all invention and innovation. In its arguably most transformative and revelatory
capacity, it is the power that enables us to empathize with humans whose experiences we have
never
shared."<br><h3 style="text-align : right;font-size:15px">J. K. Rowling</h3></blockquote> </h3>
<p style="color:#FF5722">Imagination, creativity, skills and passion to do something off-beat- these are the four pillars that
support innovation, with scientific knowledge providing a firm foundation. The elixir of science has
never fallen short in extinguishing the flames of necessity that leads to innovations.<br>
If you really possess cognition of some mind boggling ideas that can bring a quake into everyone's
brain,
unravel your calibre and indomitability, check your innate ability of inventing partial or complete
personal realms within the mind from elements derived from perceptions of the shared world.<br>
Ricerca, the core paper presentation event is the perfect amalgam of presentation skills, imagination
and creativity, augmented by technology where you can unleash your ideas, establish your
competence,
learn and share.<br>
So what to wait for? Accept the challenge and show your potential to foster new ideas on the
platform provided by Ricerca.</p>
                    <br>
                    <h3>Topics : </h3>
                    <p style="color:#FF5722">The areas under which your work should come under are as follows:</p>
                        <ul style="color:#FF5722">
                            <li><p>Astronomy and Astrophysics</p></li>
                            <li><p>Computer Science and IT</p></li>
                            <li><p>Electrical Engineering, Electronics, Electronics &
Telecommunication</p></li>
                            <li><p>Mechanical Engineering</p></li>
                            <li><p>Mathematics</p></li>
                            <li><p>Physics</p></li>
                            <li><p>Robotics</p></li>
                        </ul>    
                    <br>
                    <h3>Format : </h3>
				    <div style="font-size: 20px;color: #EE8855">Round 1 (Full Paper Submission)</div> <br>
                        <ul style="color:#FF5722">
                            <li><p>The participants are required to submit a full paper in soft copy at <a  style="color:#EE8855";font-size: 1em" href="mailto:ricercapaperpresentation.2k16@gmail.com" >ricercapaperpresentation.2k16@gmail.com</a> describing the basic idea of problem statement,
scope of work, motivation, the idea proposed, original work done, methodology adopted
and results.</p></li>
                            <li><p>The participant should mention as to which department she/he wishes to present the paper.</p></li>
                            <li><p>Format should be strictly followed.</p></li>
                            <li><p>The document format has to be in Microsoft Word (.doc or .docx) or Printable Document Format
(.pdf) only.</p></li>
                            <li><p>Participants are requested to submit their papers in IEEE or other internationally recognized format.
Papers with improper formatting will be sent back to the participants and they will be encouraged
to
submit it again after re-formatting.</p></li>
                        </ul>    <br>    
                      <div style="font-size: 20px;color: #EE8855;">Round 2 (Paper Presentation)</div>   <br>
                        <p style="color:#FF5722">
                            The final round will be in the form of paper presentation through slides. The teams shortlisted after
round 1 will be required to present the paper before judges.
                        </p>       
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#FF5722">
                            <li><p>Only Under-graduates students are eligible for this competition.</p></li>
                            <li><p>A maximum of 2 participants in a team can register.</p></li>
                            <li><p>A candidate can register for this event in more than one department specified above.</p></li>
                            <li><p>Any number of teams from a college can submit their papers.</p></li>
                            <li><p>Paper script should be submitted in
the specified format only.</p></li>
                            <li><p>The selection in the first round will be based on the paper submitted. Participants selected in first
round will be allowed to participate in the final round.</p></li>
                            <li><p>The participants will be given 10 minutes to present their paper before a panel of judges and
around extra 5 minutes for questions and answers as per discretion of judges. Exceeding of time
limit will invoke negative points.</p></li>
                            <li><p>The participants can include any type of media (pictures, videos, audio) in their presentation,
provided
they do not show any controversial clips.</p></li>
                            <li><p>Re-presentation of papers already presented in other competitions / conferences are strictly
prohibited. If the team is found to be involved in plagiarism, he/she will be disqualified
immediately.</p></li>
                            <li><p>If the candidate fails to meet any one of the above mentioned, she/he will be subjected to
disqualification.</p></li>
                            <li><p>Shortlisted teams will be informed by mail.</p></li>
                            <li><p>Decision of judges will be final and binding on all participants. Any discussions regarding
evaluation
process at any stage shall not be entertained.</p></li>
                            <li><p>Certificates will be awarded to all candidates who qualify first round.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#FF5722">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 4,000 (in each of the 7 categories)</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('ricerca'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/kaleidoscope/33" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#FF5722">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#FF5722">
                        <p>Chitra</p>7025089447                     
                    </div>
                    <div class="col-lg-6" align="right" style="color:#FF5722">
                        <p>Niwhashini</p>8281474608                
                    </div>
				</div>
			</div>
            
			<div class="content__item" id="content-2">
				<img style="margin-top:-700px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/kal2.png" alt="Blackbox Content" />
				<div class="content__item-inner">
					<h2 style="color:#FF5722">Black Box</h2><br>
					<h3>
					<blockquote>"I never teach my pupils , I only provide the conditions in which they can learn."<br><h3 style="text-align : right;font-size:15px">Albert Einstein</h3></blockquote> </h3>
<p style="color:#FF5722">In science and engineering, a black box is a device, system or object which can be viewed solely in
terms of its input, output and transfer characteristics without any knowledge of its internal
workings, that is, its implementation is "opaque" (black).</p>
                    <br>
                    <h3>Format : </h3>
                        <ul style="color:#FF5722">
                            <li><p>A set of some materials will be given to all the teams and they have to build a specified
machine/mechanism on the spot with the help of given materials.</p></li>
                            <li><p>This will be a three day event and the rounds will be independent of each other. Anybody
may participate.</p></li>
                        </ul>    <br>  
                    <h3>Rules : </h3>
                        <ul style="color:#FF5722">
                            <li><p>Each team can have a maximum of 3 participants.</p></li>
                            <li><p>Every team member is required to have a valid college ID.</p></li>
                            <li><p>A person can be part of only one team.</p></li>
                            <li><p>The team will be participating in the competition which will follow after the building of
machine/mechanisms.</p></li>
                            <li><p>No outside material is allowed</p></li>
                            <li><p>Mobile Phones are not allowed.</p></li>
                            <li><p>Further rules will be announced on the spot.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#FF5722">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 2,000 (x 3)</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 1,000 (x 3)</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('blackbox'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/kaleidoscope/34" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#FF5722">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#FF5722">
                        <p>Shaifalee Saxena</p>9446203854                     
                    </div>
                    <div class="col-lg-6" align="right" style="color:#FF5722">
                        <p>Priyanka Meena</p>9446916533                
                    </div><br>
                    <div align="center" style="color:#FF5722">
                        <p>Md.Sabir Alam</p>9446120058                     
                    </div>
				</div>
			</div>
            
            
            <div class="content__item" id="content-3">
				<img style="margin-top:-700px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/kal3.png" alt="TECH-Wiz Content" />
				<div class="content__item-inner">
					<h2 style="color:#FF5722">TECH-Wiz</h2><br>
					<p style="color:#FF5722">Bored of sitting in boring classes, learning boring things you never knew why you were
learning? Do you think you'll always have an edge because you know more about the place
where everyone wants to be? Show us your passion for the corporate ordeals and the fancy
gadgets. Business and technology is what every engineer needs to be familiar with. We invite
you to make your way through the crowd, where all your knowledge about Technology will
decide the ratio of Smartness and Geek ness in you! If you are confident with your tech trivia,
this is your chance to be the Techwhiz.</p>
                    <br>  
                    <h3>Rules : </h3>
                        <ul style="color:#FF5722">
                            <li><p>Teams comprising of two members are invited.</p></li>
                            <li><p>The event will be held in two rounds - both these rounds will be held back to back at
IIST during Conscientia 2016.</p></li>
                            <li><p>A preliminary level written round would be held to select the top six teams.</p></li>
                            <li><p>The six qualified teams will battle it out on the stage, to be called 2016’s TECH-Wiz.</p></li>
                            <li><p>The stage quiz will contain several rounds comprising of straight-answer type
questions, audio-visuals, and rapid-fire questions, spanning all aspects of Technology
and Business.</p></li>
                            <li><p>Winners will be decided based on the score at the end of the final round. The scores
will be awarded as per rules set down by the organizers.</p></li>
                            <li><p>The decision of the organizers is final and binding under all circumstances.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#FF5722">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 4,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,500</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('techwiz'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/kaleidoscope/35" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#FF5722">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#FF5722">
                        <p>Mustafa Shahid</p>9496786484                     
                    </div>
                    <div class="col-lg-6" align="right" style="color:#FF5722">
                        <p>Sudhanshu Kandpal</p>9496770804                
                    </div>
				</div>
			</div>
            
              <div class="content__item" id="content-4">
				<img style="margin-top:-700px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/kal4.png" alt="Alpha Geek Content" />
				<div class="content__item-inner">
					<h2 style="color:#FF5722">&#945; - &#947; &#949; &#949; &#954; ( Alpha Geek )</h2><br>
					<p style="color:#FF5722">Being a Dude is too mainstream, if you are a geek then standout, prove it to everyone that you
are a geek, not the gamma, beta but the alpha one.</p>
                    <br>  
                    <h3>Format : </h3>
                        <ul style="color:#FF5722">
                            <li><p>Level 1 will be Question Paper based having 25-30 questions.</p></li>
                            <li><p>Level 2 will be Constructive Question Paper with 15-20 questions having connections within
themselves and real world. Top 3-5 will be selected.</p></li>
                            <li><p>Level 3 will development of solution based event in which teams will be asked to develop a
solution
to a given problem with given materials to them. Only 1 winner would be there.</p></li>
                        </ul>   
                    <br>   
                    <h3>Rules : </h3>
                        <ul style="color:#FF5722">
                            <li><p>It is an individual event.</p></li>
                            <li><p>No use of calculator or any other electronics device.</p></li>
                            <li><p>Participants will not be allowed to leave the room while event is going on.</p></li>
                            <li><p>In case of any malpractice, participant will be disqualified by the organizers.</p></li>
                            <li><p>In case of a tie, priority questions will decide the winner.</p></li>
                            <li><p>Winners will be decided based on the score at the end of the final round. The scores
will be awarded as per rules set down by the organizers.</p></li>
                            <li><p>The decision of event organizer will be final and binding.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#FF5722">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 4,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('alphageek'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/kaleidoscope/36" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#FF5722">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#FF5722">
                        <p>Aathira</p>9526640769                     
                    </div>
                    <div class="col-lg-6" align="right" style="color:#FF5722">
                        <p>Jayadev</p>8547822404                
                    </div>
				</div>
			</div>
            
            <div class="content__item" id="content-5">
				<img style="margin-top:-400px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/kal5.png" alt="Bletchley Park Content" />
				<div class="content__item-inner">
					<h2 style="color:#FF5722">Bletchley Park</h2><br>
					<p style="color:#FF5722">Bletchley Park was the central site for Britain's codebreakers during WWII. But why are we talking
about history here? Because... that very strand of history created by these codebreakers flipped the
table for allies. What would you have done? Come, find out for yourself at Bletchley park..!
P.S. Haha.. Don't worry, as a new recruit at Bletchley Park, Conscientia 2k16, you will not be
subjected to interviews to join us. If you're clueless, maybe, consider watching The Imitation Game.</p>
                    <br>  
                    <h3>Rules : </h3>
                        <ul style="color:#FF5722">
                            <li><p>The competition consists of 2 rounds.</p></li>
                            <li><p>Round 1 will be a written round. Just to orient you to how things are done at Bletcley park.
Beware, you could be fired at the end of this round.</p></li>
                            <li><p>Round 2 will be a surprise for the geniuses who are still at Bletchley park.</p></li>
                            <li><p>Come alone, or if you're too afraid, bring a friend along.</p></li>
                            <li><p>DECISION OF THE TURINGS WILL BE FINAL AND BINDING.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#FF5722">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 4,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,500</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('bletchleypark'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/kaleidoscope/37" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#FF5722">For more details, contact The Turings :</p>
                    <div class="col-lg-6" align="left" style="color:#FF5722">
                        <p>N. Anand</p>9496736678                     
                    </div>
                    <div class="col-lg-6" align="right" style="color:#FF5722">
                        <p>Gowtham S.</p>9496930332                
                    </div>
				</div>
			</div>
            
            <div class="content__item" id="content-6">
				<img style="margin-top:-400px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/kal6.png" alt="MATH Quiz Content" />
				<div class="content__item-inner">
					<h2 style="color:#FF5722">MATH quiz</h2><br>
					<h3>
					<blockquote>"Life is good for only two things, discovering mathematics and teaching mathematics."<br><h3 style="text-align : right;font-size:15px">Simeon Poisson</h3></blockquote> </h3>
<p style="color:#FF5722">It is not enough to have a good mind, what's important is to use it well. So if
numbers are an innate part of your nature then battle against your likes to find
out who is better.</p><br>
                    <h3>Format : </h3>
				    <div style="font-size: 20px;color: #FF8855;">Round 1</div> 
                        <ul style="color:#FF5722">
                            <li><p>In the first round there will be 30 questions based on essential engineering mathematics.</p></li>
                            <li><p>There will be some star marked question which will be decisive for the tie-breaks.</p></li>
                            <li><p>Subjective will be 10 and objective will be 20 (+3,-1).</p></li>
                            <li><p>In subjective step marking will be there.</p></li>
                        </ul>    
                    <div style="font-size: 20px;color: #FF8855;">Round 2</div>  
                        <p style="color:#FF5722">In interview, the panel will ask the questions and will decide the winners. The decision of the panel will be
UNQUESTIONABLE.
                        </p>    
                    <br>  
                    <h3>Prize Money : </h3>
                        <ul style="color:#FF5722">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 2,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 1,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('mathquiz'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/kaleidoscope/38" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#FF5722;border:#FF5722"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#FF5722">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#FF5722">
                        <p>Nimai Chand Das Adhikari</p>9538498519                     
                    </div>
				</div>
			</div>
            
            
            
			<button  style="color : #FF5722" class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
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
      "color": "#FF5722",
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