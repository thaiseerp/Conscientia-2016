<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conscientia 2016 | Workshops </title>
    <meta name="description" content="Conscientia Workshops" />
    <meta name="author" content="Conscientia" />
    <link rel="shortcut icon" href="<?=base_url()?>favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/workshops.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/loader.css" />
    
   
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
     <script src="<?=base_url()?>contents/js/jquery.countdown.js"></script>
    <script src="<?=base_url()?>contents/js/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    

    <script>
        $(window).load(function() {
            $('body').addClass('loaded');
        });
    
        jQuery(function($){
            setTimeout(function(){
                $('#myModal').modal('show');
            },1000);
        });
    if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
        var root = document.getElementsByTagName('html')[0];
        root.setAttribute('class', 'ff');
    };
       
    </script>
    

</head>

<body class="workshops">
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
        
        <header class="link link--yaku" href="#">
					
                    <span> W</span><span>o</span><span>r</span><span>k</span><span>s</span><span>h</span><span>o</span><span>p</span><span>s</span>				
				</header>
        <div class="content">
            <!-- trianglify pattern container -->
            <div class="pattern pattern--hidden"></div>
            <!-- cards -->
            <div class="wrapper">
                
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1200" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath1">
                                    <polygon class="clip" points="0,1200 0,0 1920,0 1920,1200"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath1)" width="1920" height="1200" xlink:href="<?=base_url()?>contents/images/workshops/w1.jpg"></image>
                        </svg>
                        <div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title" style="color:#000">Sphere Drone</h2>
								<p class="card__subtitle">Sphere drone is a new type of unmanned aerial vehicle having a distinctive ball-like shape
and single rotor design allowing for some amazing flyability.</p>
							</div>
							<div class="card__copy">
								
								<p>
                                    It has possible applications in search & rescue, film making, military and many more such domains.
                                </p>
                                <p>
                                    This unique workshop in sphere drone making, introduces you to various UAV structures and
                                     engineering principles. Developing the sphere drone on
                                     your own will help you gain practical insights on flight theory and other drone technologies.
                                </p>
                                <p>
                                    This workshop is conducted by AerotriX, a division of Skyfi Labs that 
                                    develops courses with a focus on Mechanical, Aeronautical and Automobile Engineering disciplines.
                                </p>
                                <h3>Fee:</h3>
                                <p>
                                   &#8377; 1350 per person<br />In group &#8377; 6250 (max. 5 persons)
                                </p>
                                <h3>Course Highlights</h3>
                                <ul>
                                    <li>Learn all concepts of UAV Development and Engineering</li>
                                    <li>Design, Fabricate and Test a Sphere Drone</li>
                                    <li>Learn about stability and control of Drones</li>
                                    <li>Hands-on experience with in-flight electronics - Transmitter, Receiver, Servos, Brushless Motors, Electronic Controller, etc.</li>
                                    
                                </ul>
                                <h3>Topics Covered</h3>
                                <ul>
                                    <li>Introduction to Drones and UAVs</li>
                                    <li>Aerodynamics of Drone</li>
                                    <li>Stability and Control of Drone</li>
                                    <li>Advanced technologies used in UAVs</li>
                                    
                                </ul>
                                <h3>Kit Content</h3>
                                <ul>
                                    <li>Brushless DC Motor</li>
                                    <li>Electronic Speed Controller - ESC</li>
                                    <li>Transmitter *</li>
                                    <li>Receiver *</li>
                                    <li>Li-Po Battery</li>
                                    <li>Servo Motor</li>
                                    <li>Coroplast</li>
                                    <li>Working Tools *</li>
                                    <li>Other miscellaneous items</li>
                                    
                                </ul>
                                <p>
                                    All the above components would be provided during the program to participants in groups of 5 but would be taken back at the end. This is being done to reduce the cost of the program and make it affordable for students who do not want to buy the take-away kit. </p><p><strong>Take-away kit</strong> consists of all the above items excluding the items marked with *. Take-away kit can be purchased at the venue by paying an additional fee of ₹ 6,500
                                </p>
                                <h3>Online Portal</h3>
                                <p>Participants have access to an exclusive <a href="http://www.aerotrix.com/events/drone-uav-training-in-iist-trivandrum-2788" target="_blank">online portal</a> to:</p>
                                <ul>
                                    <li>View status of registered and attended workshops</li>
                                    <li>View study material for workshops</li>
                                    <li>Write online exams and receive separate certificates with scores. These certificates with scores 
                                        will provide students an opportunity to show their learning in job interviews.</li>
                                </ul>
                                <h3>Certification</h3>
                                <ul>
                                    <li>All AerotriX certificates have a unique ID which can be verified online for authentication</li>
                                    <li>Certificate of Completion</li>
                                    <li>Certificate of Completion with Distinction (for top performers)</li>
                                    
                                </ul>
                                <h3>Course Structure</h3>
                                <ul>
                                    <li>Lecture Session - 4 hrs</li>
                                    <li>Design Session - 1 hr</li>
                                    <li>Fabrication Session - 7 hrs</li>
                                    <li>Testing Session all drones designed by the participants are flown by an expert flyer of Team AerotriX - 3.5 hrs</li>
                                    <li>Certificate Distribution - 0.5 hr</li>
                                </ul>     
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_workshops('spheredrone'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>workshops/spheredrone" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000"> Register for this workshop   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000"> Register for this workshop   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#77ff66">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#77ff66">
                        <p>Gowtham S.</p>9496930332                    
                    </div>                          
							</div>
						</div>
					</div>
                </div>
                
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1200" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath1">
                                    <polygon class="clip" points="0,1200 0,0 1920,0 1920,1200"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath1)" width="1920" height="1200" xlink:href="<?=base_url()?>contents/images/workshops/w2.jpg"></image>
                        </svg>
                        <div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title" style="color:#26efd0">Swarm Robotics</h2>
								<p class="card__subtitle">Swarm Robotics deals with the Artificial Swarm Intelligence and involves 
                                    the usage of multiple Robots which coordinate among themselves to complete a mission.</p>
							</div>
							<div class="card__copy">
								
								<p> 
                                    The Swarm robots communicate with each other wirelessly and take decisions. This workshop involves development of autonomous swarm robots enabled with master-slave communication.The master robot controls the slave robot while performing its own task and the slave robot functions based on the signal received from the master robot (both being autonomous).
                                </p>
                                <p>
                                    This workshop is conducted by Roboversity, a division of Skyfi Labs that develops courses with
                                     a focus on Electrical and Electronics Engineering disciplines.
                                </p>
                                <h3>Fee:</h3>
                                <p>
                                   &#8377; 1350 per person<br />In group &#8377; 6250 (max. 5 persons)
                                </p>
                                <h3>Course Outcomes</h3>
                                <ul>
                                    <li>Understanding Swarm Intelligence, Interfacing Sensors, Wireless Communication and Micro controller Programming</li>
                                    <li>Understanding Machine to Machine Communication</li>
                                    <li>Development of Autonomous Robots which send signals to communicate with each other</li>
                                    <li>Micro controller Programming to receive signals from other Robots and behave accordingly</li>
                                    <li>Introduction to structure and programming of micro controllers</li>
                                    <li>Practical experience for participants with DC motors, Radio Frequency Modules, Micro controllers, Infrared Sensors, etc.</li>
                                    
                                </ul>
                                <h3>Kit Content</h3>
                                <ul>
                                    <li>DC motors</li>
                                    <li>Embedded Development board</li>
                                    <li>9V Battery</li>
                                    <li>IR Sensors</li>
                                    <li>Radio Frequency Modules(Encoder & Decoder)</li>
                                    <li>Nose plier*</li>
                                    <li>Wire stripper*</li>
                                    <li>Screw driver*</li>
                                </ul>
                                <p>
                                    All the above components would be provided during the program to participants in groups of 5 but would be taken back at the end. </p>
                                    <p>
                                        Participants registering in groups of 5 will get take-home kit for free. Take-home kit 
                                        consists of all the above items excluding the items marked with *.
                                </p>
                                <h3>Online Portal</h3>
                                <p>Participants have access to an exclusive <a href="http://www.roboversity.com/events/robotics-trainings-in-iist-trivandrum-2791" target="_blank">online portal</a> to:</p>
                                <ul>
                                    <li>View status of registered and attended workshops</li>
                                    <li>View study material for workshops</li>
                                    <li>Write online exams and receive separate certificates with scores. These certificates with scores 
                                        will provide students an opportunity to show their learning in job interviews.</li>
                                </ul>
                                <h3>Certification</h3>
                                <ul>
                                    <li>All Roboversity certificates have a unique ID which can be verified online for authentication</li>
                                    <li>Certificate of Completion</li>
                                    <li>Certificate of Completion with Distinction (for top performers)</li>
                                    
                                </ul>
                                <h3>Note</h3>
                                    <p>Each team is advised to carry a laptop for the program</p>
                                <h3>Course Structure & Topics covered</h3>
                                <ul>
                                    <li>Lecture by Expert on Swarm Intelligence, Wireless Communication and Autonomous Robotics - 4 hours</li>
                                    <li>Designing the Swarm Robot - 1 hour</li>
                                    <li>Fabricating the Swarm Robot - 2 hours</li>
                                    <li>Programming the Swarm Robot - 6 hours</li>
                                    <li>Testing of Swarm Robots and Competition - 2 hours</li>
                                    <li>Awards and Certificates - 0.5 hours</li>
                                </ul> <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_workshops('swarmrobotics'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>workshops/swarmrobotics" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000"> Register for this workshop   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000"> Register for this workshop   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#77ff66">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#77ff66">
                        <p>Akshay Pandit</p>9496979934                    
                    </div>                                 
							</div>


						</div>
					</div>
                </div>
                
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1200" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath1">
                                    <polygon class="clip" points="0,1200 0,0 1920,0 1920,1200"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath1)" width="1920" height="1200" xlink:href="<?=base_url()?>contents/images/workshops/w3.jpg"></image>
                        </svg>
                        <div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">Game Development</h2>
								<p class="card__subtitle">Unity is a flexible and powerful development platform for creating multiplatform 3D and 2D games and interactive experiences. It's a complete ecosystem for anyone who aims to build a business on creating high-end content and connecting to their most loyal and enthusiastic players and customers.</p>
							</div>

							<div class="card__copy">
								
								<p> 
                                    Unity3D is a powerful cross-platform 3D engine and a user friendly development environment. It is easy enough for the beginner and powerful enough for the expert. Unity should interest anybody who wants to easily create 3D games and applications for mobile, desktop, the web, and consoles.
                                </p>
                                <p>
                                   The workshop is scheduled to go right from getting one set up to testing on device. During the course students will be introduced to basics of Android OS work through modules throughout the day. To top it off students will end by building a sample projects that can be taken to modify. The classes are designed to demonstrate best practices for solving common Android development problems. Each class explains the steps required to solve a problem, or implement a feature, with code snippets and sample code to use within your own apps.
                                </p>
                                <p>
                                    This workshop is conducted by ARK Technosolutions, an award winning company as “Business Leader in Robotics and Android Training in India” works on designing and developing experiential learning tools. The vision of the company is to develop and promote the spirit of science and technology to students, enabling them to have hands on feel of technology and its applications.
                                </p>
                                <h3>Fee:</h3>
                                <p>
                                   &#8377; 900 per person
                                </p>
                                <h3>The modules include</h3>
                                <ul>
                                    <li>Learning to use tools available in Unity</li>
                                    <li>Developing Unity Game Applications</li>
                                    <li>Movement Application</li>
                                    <li>Basic Game Development</li>
                                    <li>Adding Graphics to Unity Game Models</li>
                                    <li>Personalized Game Development.</li>
                                </ul>
                                <p>Even after the workshop, online and offline technical support will be offered to students to convert their ideas into reality “UNITY3D”</p>
                                <h3>Duration</h3>
                                <p>
                                    The proposed course will be conducted for 16 Hours, document containing session plan are in the following pages.
                                </p>
                                <p>
                                        <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
.tg td{font-family:Aller, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#77FF66;color:#A9F7CF;background-color:#2A3861;}
.tg th{font-family:Aller, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#77FF66;color:#77FF66;background-color:#2A3861;}
.tg .tg-hgcj{font-weight:bold;text-align:center}
.tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-yw4l{vertical-align:top}
</style>
<table style="margin:0 auto 0 auto;width:90%" class="tg">
  <tr>
    <th class="tg-hgcj">Session</th>
    <th class="tg-hgcj">Outline</th>
  </tr>
  <tr>
    <td class="tg-031e"></td>
    <td class="tg-hgcj">Day 1</td>
  </tr>
  <tr>
    <td class="tg-hgcj" rowspan="6">1</td>
    <td class="tg-031e" rowspan="6">What is Android?<br>Why is android Important to you?<br>Android Architecture<br>Difference between Open Source &amp; Free Software<br>What is Unity?<br>Why is android game development Important to you?<br>Introduction to Unity &amp; Game design tools<br>Developing simple model of game</td>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
    <td class="tg-amwm" rowspan="4"><br><br>2</td>
    <td class="tg-yw4l" rowspan="4">Configuring Unity<br>Configuring SDK<br>Creating 3D Unity Project<br>Designing 3D Models &amp; Playing with Attributes<br>Generating APK file &amp; installing on Emulator</td>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-amwm">Day 2</td>
  </tr>
  <tr>
    <td class="tg-amwm" rowspan="4"><br><br>1</td>
    <td class="tg-yw4l" rowspan="4">What is a Script?<br>How is a Script used for Movement?<br>Developing simple model with Movement feature<br>What is Graphics Design?<br>Adding basic Graphics to Model</td>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
    <td class="tg-amwm" rowspan="4"><br><br>2</td>
    <td class="tg-yw4l" rowspan="4">Introductions to Game Engine<br>Application on Game Engine<br>Many more applications on all<br>Doubt Solving Session<br>Competition</td>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
</table>
                                </p>
                                <h3>The Fee includes</h3>
                                <p>
                                    Unity Development Kit
                                </p>
                                <ul>
                                    <li>Android SDK</li>
                                    <li>Java JDK</li>
                                    <li>Post Workshop Material with loads of Games.</li>
                                    <li>Android Game Development out line study material.</li>
                                </ul>  
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_workshops('gamedevelopment'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>workshops/gamedevelopment" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000"> Register for this workshop   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000"> Register for this workshop   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#77ff66">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#77ff66">
                        <p>Gowtham S.</p>9496930332                    
                    </div>                          
                                                                
							</div>

						</div>
					</div>
                </div>
                
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1200" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath1">
                                    <polygon class="clip" points="0,1200 0,0 1920,0 1920,1200"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath1)" width="1920" height="1200" xlink:href="<?=base_url()?>contents/images/workshops/w4.jpg"></image>
                        </svg>
                        <div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title">Mind controlled Robotics</h2>
								<p class="card__subtitle">A Human Brain being the most complicated computer in the world, studying its
behaviour in different scenarios can lead to breakthroughs</p>
							</div>
							<div class="card__copy">
								
								<p> 
                                    For the 1st time in India, introducing khb on ARDUINO, an EEG
(Electroencephalography) & microcontroller based robotics workshop by ARK
Technosolutions, an excellent opportunity to learn the making of mind
controlled robots. This workshop teaches you the fundamentals of brainwaves
and their applications in today’s world and provides guidance in the field of
integrating Brainwave technology and Robotics (which generally involves a
microcontroller, actuators, power supply, etc.) It also focuses on
conceptualization and designing of complex systems in order to harness the
power of mind in the form of brainwaves. This workshop will also help clear
concepts related to embedded systems, artificial intelligence and automation.
                                </p>
                                <p>
                                   Working on autonomous robotics kit specially designed by Team ARK, which
includes microcontroller based board, sensors, actuators etc. and a hands-on
sessions on this kit will help the participants to enhance their embedded C
programming, PC hardware interfacing skills.
                                </p>
                                <h3>Fee</h3>
                                <p>
                                   &#8377; 900 per person<br />In group &#8377; 4250 (max. 5 persons)
                                </p>
                                <h3>Duration</h3>
                                <p>
                                    We conduct workshops on 2 consecutive days, each day 8 hours session so in
total 16 hours properly divided into theory and hands on sessions. In the end we
organize a small competition among the participants of the workshop so that the
students get the real feel of competitive environment. Winner of the competition
will be awarded with certificate of merit & other prizes
                                </p>
                                <h3>*What is Arduino?*</h3>
                                <p>
                                    Arduino is an open-source electronics prototyping platform based on flexible,
easy-to-use Hardware and Software. It's intended for artists, designers,
hobbyists, and anyone interested in creating interactive objects or environments.
                                </p>
                                <h3>What will you learn after attending the work shop</h3>
                                
                                <ul>
                                    <li>Details on EEG based instruments.</li>
                                    <li>Details on microcontroller</li>
                                    <li>Programming the microcontroller using ARDUINO Interface</li>
                                    <li>Interfacing and controlling various devices like LED, motors, sensors etc
with Microcontroller</li>
                                    <li>Use of wireless devices such as a wireless Bluetooth module for different
interface control</li>
                                    <li>Making of various types of robots, their algorithms and coding</li>
                                    <li>Application of micro controllers in industry, military, medical, home
Appliances, home automation etc</li>
                                    <li>Use of brainwave sensors and its application</li>
                                </ul>
                                <h3>KIT Content of Brain Wave Control Robot on ARKDUINO</h3>
                                <p>Not Take Away</p>
                                <ul>
                                    <li>Wireless Bluetooth Mindwave headset</li>
                                </ul>
                                <p>Take Away</p>
                                <ul>
                                    <li>ARKDUINO circuit board</li>
                                    <li>1 Bluetooth Module</li>
                                    <li>1 Bluetooth Modem</li>
                                    <li>Micro Controller - ATMEL ATmega 32
                                        <ul>
                                            <li>Operating Voltage - 5V</li>
                                            <li>Input voltage - 6V-20V</li>
                                            <li>Digital I/O pins - 14 out of which 6 provide PWM</li>
                                            <li>Analog Input Pins - 6</li>
                                            <li>DC Current per I/O pin - 40mA</li>
                                            <li>Flash Memory - 32KB</li>
                                            <li>SRAM - 1KB</li>
                                            <li>EEPROM - 512Bytes</li>
                                            <li>Clock Speed 16 MHz</li>
                                            <li>USB-UART converter</li>
                                            <li>Proper Indicator LED's</li>
                                            <li>USB/ EXT input voltage</li>
                                            <li>5V output supply pins - 3</li>
                                            <li>3.3 V output supply pins - 1</li>
                                            <li>Breadboard Compatibility (dimension of a 40 pin DIP IC)</li>
                                        </ul>
                                    </li>
                                    <li>ACRYLIC Multipurpose Robot Chassis</li>
                                    <li>Plastic Wheels</li>
                                    <li>DC Motors</li>
                                    <li>360’ Castor Wheel</li>
                                    <li>Battery (9v)</li>
                                    <li>A to B USB Cable for Programming</li>
                                    <li>Connecting Wires</li>
                                    <li>Screws</li>
                                    <li>Screw Driver</li>
                                    <li>Battery snaps CD containing Course Material & Mindwave software (Codes,
Software’s, videos etc)</li>
                                </ul>
                                <h3>The Robots Can be made using this kit</h3>
                                
                                <ul>
                                    <li>Mind controlled Robot</li>
                                    <li>Speed control based on Mind Waves</li>
                                    <li>Attention measurement</li>
                                    <li>Meditation measurement</li>
                                    <li>Blink controlled Bot</li>
                                    <li>Wireless controlled Bot</li>
                                    <li>PC controlled Bot</li>
                                </ul>
                                <h3>The concepts to be covered are</h3>
                                <ul>
                                    <li>Types of Brainwaves</li>
                                    <li>Sensors to record Brainwaves</li>
                                    <li>Types of Autonomous Robots</li>
                                    <li>Wireless Communication</li>
                                    <li>Elements of an autonomous robot</li>
                                    <li>Microcontroller based robots</li>
                                    <li>Pre-programmed robots</li>
                                    <li>Self-learning robots</li>
                                </ul>
                                <h3>Microcontroller</h3>
                                <ul>
                                    <li>Overview of available microcontrollers</li>
                                    <li>The ATMEGA series of micro controller and its core</li>
                                    <li>Its features and capabilities</li>
                                </ul>
                                <h3>Programming of IDE</h3>
                                <ul>
                                    <li>Use of ARDUINO Software</li>
                                    <li>Writing code</li>
                                    <li>Accessing various functions of micro controller</li>
                                    <li>Implementation of various algorithms</li>
                                    <li>Implementation of artificial intelligence</li>
                                </ul>
                                <h3>Actuators</h3>
                                <ul>
                                    <li>DC Geared motors</li>
                                    <li>Stepper Motors</li>
                                    <li>Servo Motors</li>
                                    <li>Motor Drivers</li>
                                    <li>Electromechanical: Relays</li>
                                    <li>Solid-state drivers: H-bridge, IC drivers</li>
                                </ul>
                                <h3>Sensors</h3>
                                <ul>
                                    <li>EEG based Sensors</li>
                                    <li>Light: LDR, photodiodes, phototransistors</li>
                                    <li>Heat: Thermostats</li>
                                    <li>Sound miken</li>
                                    <li>Ultra-Sonics</li>
                                    <li>Mechanical touch sensors</li>
                                </ul>
                                <h3>Power Supplies</h3>
                                <ul>
                                    <li>AC adaptor</li>
                                    <li>Different types of batteries</li>
                                </ul>  
                    <br>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_workshops('mindrobotics'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>workshops/mindrobotics" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000"> Register for this workshop   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000"> Register for this workshop   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#77ff66">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#77ff66">
                        <p>Akshay Pandit</p>9496979934                    
                    </div>                          
                                                                
							</div>


						</div>
					</div>
                </div>
                
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1200" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath1">
                                    <polygon class="clip" points="0,1200 0,0 1920,0 1920,1200"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath1)" width="1920" height="1200" xlink:href="<?=base_url()?>contents/images/workshops/w5.jpg"></image>
                        </svg>
                        <div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title" style="color:#22CE28">Motorbike overhauling</h2>
								<p class="card__subtitle">MotorBike Overhauling is an introductory program on Bike Design and dismantling. 
                                    Which is designed to provide introductory aspects on Bike designing and dynamics.</p>
							</div>
							<div class="card__copy">
								
								<p> 
                                    In this program, we do complete dismantling of Bike and Mopeds to look into detailing of parts
and understanding their functioning. This program contains following components:
                                </p>
                                <ul>
                                    <li>Bike Designing Aspects</li>
                                    <li>Bike Dynamics and Balancing</li>
                                    <li>Advancements</li>
                                </ul>
                                <p>
                                    Motorbikes are always the attractively engineered piece since its discovery and
evolved by the time into different characters as per human choice. While getting
involved with MotorBikes, we always find some interesting question related to its
engineering, dynamics and many more.
                                </p>
                                <h3>Fee:</h3>
                                <p>
                                   &#8377; 1000 per person
                                </p>  
                    <br>
                    <p align="center">
                    <img src="<?=base_url()?>contents/images/workshops/motorbike.jpg">
                    </p>
                    <?php 
                    if ($this->ion_auth->logged_in())
                    { 
                        if($this->events_model->check_register_workshops('motorbike'))
                        {
                        ?>
                    <p align="center">
                        <a href="#" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000" onclick="return false;"> Already Registered </a>
                    </p>
                    <?php 
                        }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>workshops/motorbike" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000"> Register for this workshop   </a>
                    </p> 
                      <?php  }
                    }else { ?>
                    <p align="center">
                        <a href="<?=base_url()?>login" class="btn btn-default rbutton" style="color:#FFF;background-color:#000;border:#000"> Register for this workshop   </a>
                    </p>
                    <?php
                    }                     
                     ?>
                    <br>
                    <p style="color:#77ff66">For more details, contact</p>
                    <div class="col-lg-6" align="left" style="color:#77ff66">
                        <p>Gowtham S.</p>9496930332                    
                    </div>                          
                                
                                                                
							</div>							
                            
                            
                            
						</div>
					</div>
                </div>
                
                
                
               
                
            </div>
            <!-- /cards -->
        </div>

    </div>
    <!-- /container -->
                                	<footer class="footer" role="contentinfo">
                
				<div id="inner-footer" class="wrap clearfix">
                    <div class="explore" style="border-bottom:1px solid #616A7A;margin-bottom:10px">
                        <p style="font-size:22px">Explore Conscientia 2016</p>
                            <ul style="margin-left:-50px">
                                <li style="display: inline;"><a href="<?=base_url()?>">Home</a></li>
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>
                                <li style="display: inline;"><a href="<?=base_url()?>events/">Events</a></li>
                                <li style="display: inline;"><a href="<?=base_url()?>workshops/">Workshops</a></li>
                                <li style="display: inline;"><a href="<?=base_url()?>team/">Contact us</a></li>
                            </ul>
                    </div>

					<p class="source-org copyright">Conscientia 2016</p>

				</div>

			</footer>     
            <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Dear participant(s),</h4>
      </div>
      <div class="modal-body">
         <p> Welcome into the unknown! This is regarding your registration for the workshops during Conscientia 2016, the annual Astronomy and Technology festival of Indian Institute of Space Science and Technology.</p>
          <p>Please go  through the following details carefully and do the needful.</p>
          <strong>General Instructions:</strong>
          <ul>
              <li>Please check your registered email and reply to the same with your team
details(IF ANY) and confirm the registration.</li>
              <li>The accomodation details can be found @ <a href="<?=base_url()?>">www.conscientia.co.in</a></li>
              <li>All the workshops are planned to be held for 2 days (8 hours every day),
    from 0930 to 1700 hours.</li>
              <li>Participants registered for Robotics and Game development workshop are 
    requested  to bring their laptop (IF POSSIBLE).</li>
              <li>Fee (if not paid) will be collected at the desk before the commencement
    of the workshop only through CASH.</li>
              <li>Bus timings to IIST will be updated in the official website soon with 
    the festival schedule. Stay tuned @ <a href="<?=base_url()?>">www.conscientia.co.in</a> for the changes.</li>
          </ul>
          <strong>NOTE:</strong>
          <p>It has been noted that some have registered for more than one workshops
	and since the dates of the workshops are clashing you
	can take part in only one. Kindly go through the details of 
	all the workshops and reply us with the details of the one
	in which you would like to participate.</p>
      </div>
      <div class="modal-footer">
        <span style="float:left">See you at the festival. </span>
      </div>
    </div>
  </div>
</div>
    
    <!-- JS -->
    <script src="<?=base_url()?>contents/js/trianglify.min.js"></script>
    <script src="<?=base_url()?>contents/js/TweenMax.min.js"></script>
    <script src="<?=base_url()?>contents/js/ScrollToPlugin.min.js"></script>
    <script src="<?=base_url()?>contents/js/cash.min.js"></script>
    <script src="<?=base_url()?>contents/js/Card-polygon.js"></script>
    <script src="<?=base_url()?>contents/js/workshops.js"></script>
</body>
</html>