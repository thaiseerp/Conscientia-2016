<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conscientia 2016 | Events | Mechamorphosis</title>
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
    height: 175px;
    width: 175px;
            position: absolute;
	           top: 62.35%;
	left: 49%;
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
						<img style="z-index:1" class="zoomer__image" src="<?=base_url()?>contents/images/events/mecheve.png" alt="Junkyard Wars" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/mech1_p.png" alt="Junkyard Wars preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#1A7551" class="slide__title">Junkyard Wars<p style="font-size:15px">reuse, recycle, innovate!</p></h2>
			</div>
            
			<div class="slide" data-content="content-2">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img style="z-index:1"  class="zoomer__image" src="<?=base_url()?>contents/images/events/mecheve.png" alt="Machinist" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/mech2_p.png" alt="Machinist preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#1A7551" class="slide__title">Machinist<p style="font-size:15px">prize mill-ega</p></h2>
			</div>
            
			<div class="slide" data-content="content-3">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img style="z-index:1"  class="zoomer__image" src="<?=base_url()?>contents/images/events/mecheve.png" alt="Screwed" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/mech3_p.png" alt="Screwed preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#1A7551" class="slide__title">Screwed<p style="font-size:15px">any engineer always carries a screwdriver</p></h2>
			</div>
            
			<div class="slide" data-content="content-4">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img style="z-index:1"  class="zoomer__image" src="<?=base_url()?>contents/images/events/mecheve.png" alt="Bridge Up" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/mech4_p.png" alt="Bridge Up preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#1A7551" class="slide__title">Bridge Up<p style="font-size:15px">the icecream stick bridge-making</p></h2>
			</div>
            
            <div class="slide" data-content="content-5">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img style="z-index:1"  class="zoomer__image" src="<?=base_url()?>contents/images/events/mecheve.png" alt="Contraptions" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/mech5_p.png" alt="Contraptions preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#1A7551" class="slide__title">Contraptions<p style="font-size:15px">perform a task - indirectly</p></h2>
			</div>
            
            <div class="slide" data-content="content-6">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img style="z-index:1"  class="zoomer__image" src="<?=base_url()?>contents/images/events/mecheve.png" alt="CADDraw" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/mech6_p.png" alt="CADDraw preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#1A7551" class="slide__title">CADDraw<p style="font-size:15px">real artists CAD, not Paint</p></h2>
			</div>
            
            <div class="slide" data-content="content-7">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img style="z-index:1"  class="zoomer__image" src="<?=base_url()?>contents/images/events/mecheve.png" alt="Hydranoid" />
						<div class="preview">
							<img src="<?=base_url()?>contents/images/events/mech7_p.png" alt="Hydranoid preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 style="color:#1A7551" class="slide__title">Hydranoid<p style="font-size:15px">make Pascal proud</p></h2>
			</div>
            
			<nav class="slider__nav">
				<button style="color:#1A7551" class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous event</span></button>
				<button style="color:#1A7551" class="button button--zoom"><span>View details</span></button>
				<button style="color:#1A7551" class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next event</span></button>
			</nav>
		</section>
		<!-- /slider-->
		<section class="content">
			<div class="content__item" id="content-1">
				<img style="margin-top:-1700px"class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/mech1.png" alt="Junkyard Wars Content" />
				<div class="content__item-inner">
					<h2 style="color:#1A7551">Junkyard Wars</h2><br>
					
<p style="color:#1A7551">Bring out the best mechanic in you! Nothing is a waste in the eyes of the best mechanical
engineer! Utilize anything and everything in the junkyard to succeed in you mission. Learn to
improvise and innovate to beat the other teams. There will be three rounds to test you
patience and skills. Additional rules will be provided at the beginning of each round. So buckle
up for a thrill ride! </p>
                    <br>
                    <h3>Format : </h3>
                    <p  style="color:#1A7551">Each team consists of maximum of 5 members. The event consists of three rounds:</p>
				    <div style="font-size: 20px;color: #1AAA88;">Round 1</div> 
                        <ul style="color:#1A7551">
                            <li><p>The prelims paper will be theory-based testing the general aptitude of the teams (some of them would
challenge you technically).</p></li>
                            <li><p>Questions will be based on logical reasoning and some practical problems.</p></li>
                            <li><p>The selection of the teams will be based on the marks scored in the test.</p></li>
                        </ul>    
                        <div style="font-size: 20px;color: #1AAA88;">Round 2</div>  
                        <ul style="color:#1A7551">
                            <li><p>This round is only for first round-selected teams. So if you want to be a part of this then tighten
your
seat belts.</p></li>
                            <li><p>This round will test your application skills.</p></li>
                            <li><p>Teams will be given a task which has to be completed within the allocated time period.</p></li>
                        </ul>      
                        <div style="font-size: 20px;color: #1AAA88;">Round 3</div>  
                        <ul style="color:#1A7551">
                            <li><p>The problem statement, the final task, will be released at the time of event.•It will also contain a
list of machine parts and other components available in the junkyard, if needed
the teams will be allowed to visit the junkyard site to check what components they can use.</p></li>
                            <li><p>The teams will also be given a certain amount of virtual money. Each and every part available in
the
junkyard will cost a certain amount of money.</p></li>
                            <li><p>The teams then have to give a rough estimate of the list of components they will require and will
have
to ensure that the total cost of all the components falls within the money provided to them.</p></li>
                            <li><p>The teams then have to submit their respective design and its specifications to the organizers.</p></li>
                            <li><p>They will have to build the machine they designed by buying the required components from the
junkyard.</p></li>
<li><p>The making of the machine will involve tasks like welding, building electronic connections,
carpentry
work etc.</p></li>
                        </ul>         
                        <div style="font-size: 20px;color: #1AAA88;">Final Showdown</div>  
                        <ul style="color:#1A7551">
                            <li><p>After all the teams have built their machines, there will be a head-on competition between all the
machines.</p></li>
                            <li><p>The machine which excels this round will be declared as the winner.</p></li>
                            <li><p>No part of prototype should consist of foreign element, i.e. the one outside the domain of the junk
provided.</p></li>
                            <li><p>It is recommended that you keep the physical exertion of the final round in mind while choosing
your
team mates. Teams cannot be changed between rounds.</p></li>
                            <li><p>Participants need to have a basic idea about operational precautions.</p></li>
<li><p>In case of any misconduct, decision of the event organisers shall be final and binding.</p></li>
                        </ul>    
                    <br>
                    <h3>Prize Money : </h3>
                        <ul style="color:#1A7551">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 12,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377;  &nbsp; &nbsp;  &nbsp;  8,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('junkyardwars'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/mechamorphosis/8" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#1A7551">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#1A7551">
                        <p>Ardhendhu Barman</p>9446974973                    
                    </div>
                    <div class="col-lg-6" align="right" style="color:#1A7551">
                        <p>Sanjay Pandit</p>9496710321                
                    </div>
				</div>
			</div>
            
			<div class="content__item" id="content-2">
				<img style="margin-top:-900px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/mech2.png" alt="Machinist Content" />
				<div class="content__item-inner">
					<h2 style="color:#1A7551">Machinist</h2><br>
					
<p style="color:#1A7551">Does the sound of metal meeting metal excite you? Do you find the sparks of welding riveting?
Here is a platform for you to test you machinist skills.</p>
                    <br>
                    <h3>Format : </h3>
                        <ul style="color:#1A7551">
                            <li><p>It consists of 2 rounds.</p></li>
                            <li><p>1<sup>st</sup> round will be a written prelim in which questions on various basic manufacturing
processes, theory of machines, engineering graphics will be asked.</p></li>
                            <li><p>2<sup>nd</sup> round will be a practical round in which, the participants will be given a drawing of
the component to be made and they need to make the component on the given
machine.</p></li>
                        </ul>   
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#1A7551">
                            <li><p>Team should consist of maximum 2 members.</p></li>
                            <li><p>The team members can be from different colleges.</p></li>
                            <li><p>Participants must stick to the guidelines given.</p></li>
                            <li><p>Participants must take care that their activity does not physically harm other
participants in the Hall.</p></li>
                            <li><p>Use of any material not provided by the organizers is strictly prohibited. Participants
doing so will be disqualified.</p></li>
                            <li><p>Scoring patterns will be mentioned at the time of the event.</p></li>
                            <li><p>This event is open to all college students with valid ID cards.</p></li>
                            <li><p>The decision of the event organizers will be final and binding under all circumstances.</p></li>
                        </ul>   
                    <br>
                    <h3>Evaluation : </h3>
                        <ul style="color:#1A7551">
                            <li><p>1<sup>st</sup> round: Each question will carry some marks and based on the maximum marks
obtained, the top 5 teams will be selected for the 2<sup>nd</sup> round.</p></li>
                            <li><p>2<sup>nd</sup> round: Based on quality and accuracy of the component made, marks will be
awarded.</p></li>
                        </ul>   
                    <br>
                    <h3>Prize Money : </h3>
                        <ul style="color:#1A7551">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 4,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377;  2,500</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('machinist'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/mechamorphosis/9" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#1A7551">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#1A7551">
                        <p>P.Hemanth Chandra</p>9446909276                 
                    </div>
				</div>
			</div>
            
            <div class="content__item" id="content-3">
				<img  style="margin-top:-1800px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/mech3.png" alt="Screwed Content" />
				<div class="content__item-inner">
					<h2 style="color:#1A7551">Screwed</h2><br>
					
<p style="color:#1A7551">Basically a Assemble-Disassemble game in which you have to break your head to
survive. Conscientia 2016 gives you the opportunity to play with screws , drivers
and many other tools. So get up and get ready to face the challenge and to
unscrew the Screwed.</p>
                    <br>
                    <h3>Format : </h3>
                        <ul style="color:#1A7551">
                            <li><p>This event comprises of three rounds.</p></li>
                            <li><p>This is an individual event.</p></li>
                            <li><p>The participant has to pick up a chit from a lot by which the participant will be
assigned a device.</p></li>
                            <li><p>The first round is an elimination round, in the next rounds the participant has
to find number 1 to 5 that are hidden at different places inside the device, the
participants have to find any three parts at level 2,all five at level 3 and in addition
to disassembling, the participant has to identify a working mechanism.</p></li>
                            <li><p>For every 15 participants in the first round, 5 participants will be advanced to
the next round, and out of that five 3 will advance to round 3.</p></li>
                            <li><p>The third round will be conducted between all the participants that will reach
third round and a winner will be selected.</p></li>
                            <li><p>For finding the given parts or hints, they’ll have to disassemble the device
properly, and search with keen observation, thoroughness.</p></li>
                            <li><p>After finding the three/five spots, they’ll have to reassemble the device back
perfectly, failing which will disqualify them.</p></li>
                            <li><p>Use of unfair means is strictly prohibited and this will lead to disqualification of
the participant from the event.</p></li>
                        </ul>   
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#1A7551">
                            <li><p>One person is allowed to participate only once.</p></li>
                            <li><p>In case of a tie levels, participant with least time in completing the task shall be
declared as the winner.</p></li>
                            <li><p>After finding every number/clue/answer, the participant must report to the
concerned volunteer/organiser.</p></li>
                            <li><p>Decision of organizers shall be final and binding.</p></li>
                        </ul>   
                    <br>
                    <h3>Judging Criteria : </h3>
                        <ul style="color:#1A7551">
                            <li><p>In the first round after the participant is allotted a device he will be given 3
minutes time for disassembly and 3 minutes to re-assemble the device back.</p></li>
                            <li><p>In the first round for every part the participant disassembles he/she will be
given 5 points, if the participant fails to reassemble the given parts in given 3
minutes of time and takes extra time for every 30 seconds 5 points will be
deducted; in case if the participant wants to stop reassembly then for each part
he/she did not reassemble 3 points will be deducted.</p></li>
                            <li><p>In round 2 the participant will be given 5 minutes time to find the 3 numbers
given to him/her and 3 minutes to reassemble the parts back, for every correct
number the participant finds he will be awarded 5 points; if the participant fails to
reassemble all the parts in 3 min and takes extra time for every 30 seconds 5
points will be deducted and in case the participant chooses to stop after 3
minutes without reassembling all the parts 3 points per part will be deducted.</p></li>
                            <li><p>In round 3 the participant will be given 5 minutes to find all the 5 five numbers,
for every number he/she gets 5 points, they will be given 3 minutes of reassembly
time and for every 30 seconds extra time taken 5 points will be deducted, in caseif the participant
wishes to stop reassembly for each part he/she fails to
reassemble 3 points will be deducted.</p></li>
                        </ul>   
                    <br>
                    <h3>Prize Money : </h3>
                        <ul style="color:#1A7551">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 3,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377;  2,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('screwed'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/mechamorphosis/10" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#1A7551">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#1A7551">
                        <p>Priyanka</p>9446120929                 
                    </div>
                    <div class="col-lg-6" align="right" style="color:#1A7551">
                        <p>Ajitha</p>9446286757               
                    </div>
				</div>
			</div>
            
              <div class="content__item" id="content-4">
				<img style="margin-top:-900px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/mech4.png" alt="Bridge Up Content" />
				<div class="content__item-inner">
					<h2 style="color:#1A7551">Bridge Up</h2><br>
					<h3>
					<blockquote>"We build too many walls and not enough bridges."<br><h3 style="text-align : right;font-size:15px">Isaac Newton</h3></blockquote> </h3>
<p style="color:#1A7551">Bridges not only serve the purpose of bringing people together, they are the marvels of Engineering
and Architecture. Since ancient times human beings have constructed wonderful bridges which are
admired time and again. If you have a great imagination and innovative skills, opportunity is
waiting for you. Apply your Engineering skills and design the world’s finest model bridge.</p>
                    <br>
                    <h3>Format : </h3>
                        <p style="color:#1A7551">Each team will be given materials required to build a stable bridge which can withstand the
maximum load in the given time.</p>
<br>  
                    <h3>Rules : </h3>
                        <ul style="color:#1A7551">
                            <li><p>A team can have a maximum of 3 members.</p></li>
                            <li><p>Every team member must have a valid college ID.</p></li>
                            <li><p>Time limit: 3 hours</p></li>
                            <li><p>A team cannot use any items other than what will be provided.</p></li>
                            <li><p>Violation of any of the above rules will lead to immediate disqualification.</p></li>
                        </ul>   
                    <br>   
                    <h3>Evaluation : </h3>
                        <ul style="color:#1A7551">
                            <li><p>The bridge must follow the given dimensional constraints. These constraints will be provided on
the spot.</p></li>
                            <li><p>It will be loaded to destruction by applying load at the center which will be gradually increased.
The maximum load it sustains without failure will be the judging criteria.</p></li>
                            <li><p>In case of tie, the engineering viewpoint will be taken into consideration.</p></li>
                            <li><p>The decision of the judges and organisers will be final and binding.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#1A7551">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 4,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 2,500</p></li>
                            <li><p>3<sup>rd</sup> &nbsp; Prize : &nbsp;  &#8377;  1,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('bridgeup'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/mechamorphosis/11" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#1A7551">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#1A7551">
                        <p>Nikunj Gupta</p>9811538317                    
                    </div>
                    <div class="col-lg-6" align="right" style="color:#1A7551">
                        <p>Chintan Panigrahi</p>9446358046                
                    </div>
				</div>
			</div>
            
            
            <div class="content__item" id="content-5">
				<img style="margin-top:-1800px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/mech5.png" alt="Contraptions Content" />
				<div class="content__item-inner">
					<h2 style="color:#1A7551">Contraptions</h2><br>
					
<p style="color:#1A7551">There’s nothing like the satisfaction of a plan falling into place. “Contraptions” is your chance to
invoke your creativity and come up with your own grand plan to build a Rube Goldberg
machine.</p>
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#1A7551">
                            <li><p>The final task is to score a goal using a tennis ball (dia-max 70mm) into a goal post kept at a distance of 75cm and maximum width of 15 cm. The tennis ball will be provided and the goal post has to be made by the team. Participants are required to bring ALL the materials required for building their contraption other than the materials provided by the organizers.</p></li>
                            <li><p>There can be a maximum of 7 members for a team. All the team members must have a valid
college ID.</p></li>
                            <li><p>A preparation time of 3 hrs will be given and run time should not exceed 7 minutes including the
final action.</p></li>
                            <li><p>NO BONUS TIME will be provided if the participant/participants are late.</p></li>
                            <li><p>A maximum space of 10 ft x 10 ft will be provided per team.</p></li>
                            <li><p>One power plug point will be provided per team.</p></li>
                            <li><p>In case of a tie, the contraption with innovative ideas and more number of steps in the given time
will be considered as a winner.</p></li>
                            <li><p>Maximum of 2 trials will be allowed per team out of which the best will be chosen.</p></li>
                            <li><p>Teams will have 3 minutes before the first run to explain their contraption.</p></li>
                            <li><p>In case a contraption gets stuck during the run, then with the permission of the Judge(s), one of
the participants will be allowed to intervene (with a penalty).</p></li>
                            <li><p>There are no restrictions on the materials you can use though use of "questionable" materials
should be consulted with the organisers beforehand.</p></li>
                            <li><p>Explosives and hazardous materials are STRICTLY PROHIBITED.</p></li>
                            <li><p>Any intentional or
unintentional damage to other team's machine will result in an immediate
disqualification.</p></li>
                            <li><p>Decision of the Judges will be final and binding.</p></li>
                        </ul>   
                    <br>   
                    <h3>Evaluation : </h3>
                    <p style="color:#1A7551">Run-time will not be a factor in the Evaluation.Final score will be decided entirely by the Judges based on the following criteria :</p>
                        <ul style="color:#1A7551">
                            <li><p>INNOVATION ( 20 % )<br>
Entirely upto the judges to decide qualitatively. Depending on ingenuity of the Design.</p></li>
                            <li><p>NUMBER OF STEPS ( 40 % )<br>
A step is defined as anything which starts with a trigger (eg : Motion Transfer, Energy Transfer,
Chemical Reactions) from a previous step and results in an action. Similar or identical steps will be
counted as one.(eg : 1000 falling dominos on a table will be counted as a single step).</p></li>
                            <li><p>PARALLEL ROUTES ( 5 % )<br>
Step which has actions occurring in parallel and ends in the same trigger.</p></li>
                            <li><p>PERFECT RUN (No Interventions) ( 20 % )<br>
First Intervention will reduce 5% and every subsequent one will reduce 2% each.</p></li>
                            <li><p>FINAL ACTION OF MACHINE ( 10 % )<br>
10% marks will be allotted for completion of the task that is given.</p></li>
                            <li><p>AESTHETICALLY PLEASING DESIGNS ( 5 % )<br>
Qualitatively decided by the judges based on the best usage of the materials.</p></li>
                        </ul>   
                    <br>   
                    <h3>Prize Money : </h3>
                        <ul style="color:#1A7551">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 11,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377;  &nbsp; &nbsp;  &nbsp;  7,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('contraptions'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/mechamorphosis/12" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#1A7551">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#1A7551">
                        <p>Shashank</p>9446614658                    
                    </div>
                    <div class="col-lg-6" align="right" style="color:#1A7551">
                        <p>Althaf</p>9446210359                
                    </div>
				</div>
			</div>
            
            <div class="content__item" id="content-6">
				<img style="margin-top:-750px" class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/mech6.png" alt="CADDraw Content" />
				<div class="content__item-inner">
					<h2 style="color:#1A7551">CADDraw</h2><br>
					
<p style="color:#1A7551">Although we perceive the world around us in 3 dimensions, the engineering aspect begins only
when an object is seen on paper, i.e., projected. We as engineers realize how crucial drawings are; it
is now time to establish how scrutinous you are about it.</p>
                    <br>
                    <h3>Format : </h3>
                        <ul style="color:#1A7551">
                            <li><p>There will be two rounds :<br>
a. Part design in AutoCAD<sup>&#174;</sup><br>
b. Mechanical assembly Design in CATIA<sup>&#8482;</sup></p></li>
                            <li><p>Part 1 will involve only the orthographic projections of 2 parts (no assembly) which the
participant is expected to reproduce with all the necessary dimensions and drawing lines.</p></li>
                            <li><p>Part 2 will involve the assembly of a working real life mechanism, provided along with the
necessary metrological instruments.</p></li>
                        </ul>   
                    <br>   
                    <h3>Rules : </h3>
                        <ul style="color:#1A7551">
                            <li><p>Maximum time for Part 2 is 3 hours, but completion ahead of time will invite more credits.</p></li>
                            <li><p>For part 1, credits are awarded based on,<br>
a. Correctness of each projection<br>
b. Exactness of dimensions<br>
c. Presence of appropriate drawing lines</p></li>
                            <li><p>For part 2, credits are awarded based on,<br>
a. Completion of drawing<br>
b. Working of mechanism<br>
c. Exactness of dimensions<br>
d. Time of completion</p></li>
                            <li><p>All decisions of the judges are final and binding.</p></li>
                        </ul>   
                    <br> 
                    <h3>Prize Money : </h3>
                        <ul style="color:#1A7551">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 3,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377;  2,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('caddraw'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/mechamorphosis/13" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#1A7551">For more details, contact</p>
                    <div class="col-lg-6" align="right" style="color:#1A7551">
                        <p>Puneet</p>            
                    </div>                    
                    <div class="col-lg-6" align="left" style="color:#1A7551">
                        <p>Siddharth Subbaraman</p>9496710359                    
                    </div>
				</div>
			</div>
            
              <div class="content__item" id="content-7">
				<img style="margin-top:-1200px"class="content__item-img rounded-right" src="<?=base_url()?>contents/images/events/mech7.png" alt="Hydranoid Content" />
				<div class="content__item-inner">
					<h2 style="color:#1A7551">Hydranoid</h2><br>
					
<p style="color:#1A7551">Make a mechanically Controlled Hydraulic Actuated Arm.</p>
                    <br>
                    <h3>Rules : </h3>
                        <ul style="color:#1A7551">
                            <li><p>Dimensions of the whole assembly when not in operational mode should not exceed
40 cm x 40 cm x 45 cm.</p></li>
                            <li><p>No electrical and electronic equipment allowed.</p></li>
                            <li><p>Operators : Minimum 2, Maximum 4.</p></li>
                            <li><p>Each team will be allowed to have maximum three attempts of five minutes and have to start from beginning.</p></li>
                            <li><p>Maximum one minute will be given to each team to start the task after placing
the assembly in the arena.</p></li>
                            <li><p>The teams can take the three chances consequently or can take a break of
maximum 18 minutes (only once), but after taking break no extra time will be given for the
adjustment of assembly (as soon as they put the assembly back time will start).</p></li>
                            <li><p>If the stack falls by any reason (remember the arena is yours) the points will be
awarded only for the number of blocks that are left after the collapse.</p></li>
                            <li><p>Penalty: If any participant touches any part of the assembly after their chance
starts then one block will be subtracted from the total number of blocks stacked
for each touch.</p></li>
                        </ul>   
                    <br>   
                    <h3>Task : </h3>
                     <p style="color:#1A7551">   The team can select any six of the eight positions available where they want
the blocks to be placed initially.<br>
The team is supposed to make stack of six block(tower of six blocks), by using their
hydraulic assembly. Once they complete the stack of six blocks, they will have to
make another tower just adjacent to that tower (positions are specified in the
diagram) by dismantling it. There is no penalty if the stack falls during the
dismantling of the tower to make the new one. The position of the blocks are
given in the diagram of the arena. The dimension of block is 4 cm x 4 cm x 2 cm.</p>
                    <br>   
                    <h3>Arena : </h3>
                    <img src="<?=base_url()?>contents/images/events/hydr_arena.png" alt="Hydranoid Arena" />
                    <br> <br>
                    <h3>Prize Money : </h3>
                        <ul style="color:#1A7551">
                            <li><p>1<sup>st</sup> &nbsp; Prize : &nbsp;  &#8377; 5,000</p></li>
                            <li><p>2<sup>nd</sup> Prize : &nbsp;  &#8377; 3,000</p></li>
                        </ul>   
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_event('hydranoid'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>events/mechamorphosis/14" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#1A7551;border:#1A7551"> Register for this event   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#1A7551">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#1A7551">
                        <p>Vijay Simha</p>9446109104                   
                    </div>
				</div>
			</div>
            
			<button style="color:#1A7551" class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
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
        "width": 1,
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
      "color": "#1A7551",
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