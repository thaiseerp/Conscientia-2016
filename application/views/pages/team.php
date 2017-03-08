<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Conscientia 2016 | Team</title>
		<meta name="description" content="Thumbnail Pile Effect with Automatic Grouping" />
		<meta name="keywords" content="jquery, pile, effect, images, grid, thumbnails, css3, grouping, albums" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="<?=base_url()?>favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/team.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/loader.css" />
        <script src="<?=base_url()?>contents/js/modernizr-2.6.2.min.js"></script>
		<!--[if lte IE 7]><style>.support-note .note-ie{display:block;}</style><![endif]-->

	</head>
	<body >
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
	
            <div class="support-note">
                <span class="note-ie">Sorry, only modern browsers.</span>
            </div>
				
            
			<section class="main">
				
				<div class="wrapper">

					<div class="topbar">
						<span id="close" class="back">&larr;</span>
						<h2>Conscientia 2016 Team</h2><h3 id="name"></h3>
					</div>
					
					<ul id="tp-grid" class="tp-grid">
						<!-- Coordinator -->
						<li data-pile="Overall Coordinator">
							<a href="https://www.facebook.com/nsrs09" target="_blank">
								<span class="tp-info"><span>Shankar Ram<br />+919446434184</span></span>
								<img src="<?=base_url()?>contents/images/team/shankar.jpg" />
							</a>
						</li>
                        
                        <!-- Creatives -->
						<li data-pile="Creatives">
							<a href="https://www.facebook.com/hemantaishwary" target="_blank">
								<span class="tp-info"><span>Aishwary Mishra <br />+919496735893</span></span>
								<img src="<?=base_url()?>contents/images/team/mishra.jpg" />
							</a>
						</li>
                          
						<!-- Events -->
						<li data-pile="Events">
							<a href="https://www.facebook.com/amith.kurian.9" target="_blank">
								<span class="tp-info"><span>Amith Kurian<br />+919496742822</span></span>
								<img src="<?=base_url()?>contents/images/team/amit.jpg" />
							</a>
						</li>
						<li data-pile="Events">
							<a href="https://www.facebook.com/ankit.sachan.96742" target="_blank">
								<span class="tp-info"><span>Ankit Sachan<br />+919496742756</span></span>
								<img src="<?=base_url()?>contents/images/team/ankit.jpg" />
							</a>
						</li>
						<li data-pile="Events">
							<a href="https://www.facebook.com/Malay.P.Sontakke" target="_blank">
								<span class="tp-info"><span>Malay Sontakke<br />+919496740959</span></span>
								<img src="<?=base_url()?>contents/images/team/malay.jpg" />
							</a>
						</li>
						<li data-pile="Events">
							<a href="https://www.facebook.com/pesala.manasa" target="_blank">
								<span class="tp-info"><span>Manasa Pesala<br />+919496923438</span></span>
								<img src="<?=base_url()?>contents/images/team/manasa.jpg" />
							</a>
						</li>
						<li data-pile="Events">
							<a href="https://www.facebook.com/manishkumar.mishra.144" target="_blank">
								<span class="tp-info"><span>Manish Kumar Mishra<br />+919496762206</span></span>
								<img src="<?=base_url()?>contents/images/team/manish.jpg" />
							</a>
						</li>
						<li data-pile="Events">
							<a href="https://www.facebook.com/mariya.ratlami" target="_blank">
								<span class="tp-info"><span>Mariya Ratlami<br />+919496951400</span></span>
								<img src="<?=base_url()?>contents/images/team/mariya.jpg" />
							</a>
						</li>
						<li data-pile="Events">
							<a href="https://www.facebook.com/nikhil.anand.1253" target="_blank">
								<span class="tp-info"><span>Nikhil Anand <br />+919496715413</span></span>
								<img src="<?=base_url()?>contents/images/team/nikhil.jpg" />
							</a>
						</li>
						<li data-pile="Events">
							<a href="https://www.facebook.com/kraanthi.vatyam" target="_blank">
								<span class="tp-info"><span>Sai Kraanthi<br />+919496761836</span></span>
								<img src="<?=base_url()?>contents/images/team/kranthi.jpg" />
							</a>
						</li>                        
						<li data-pile="Events">
							<a href="https://www.facebook.com/shrija.bhattacharyya" target="_blank">
								<span class="tp-info"><span>Shrija Bhattacharyya<br />+919496700493</span></span>
								<img src="<?=base_url()?>contents/images/team/shrija.jpg" />
							</a>
						</li>
						<li data-pile="Events">
							<a href="https://www.facebook.com/profile.php?id=100005671749347" target="_blank">
								<span class="tp-info"><span>Shruti Nair<br />+919496711124</span></span>
								<img src="<?=base_url()?>contents/images/team/shruti.jpg" />
							</a>
						</li>
						<li data-pile="Events">
							<a href="https://www.facebook.com/siddharth.sbbrmn" target="_blank">
								<span class="tp-info"><span>Siddharth<br />+919496710359</span></span>
								<img src="<?=base_url()?>contents/images/team/siddharth.jpg" />
							</a>
						</li>
						<li data-pile="Events">
							<a href="https://www.facebook.com/anusha.sircilla" target="_blank">
								<span class="tp-info"><span>Sircilla Anusha<br />+919496852995</span></span>
								<img src="<?=base_url()?>contents/images/team/sircilla.jpg" />
							</a>
						</li>
						<li data-pile="Events">
							<a href="https://www.facebook.com/swetapuspa.soumyashree" target="_blank">
								<span class="tp-info"><span>Swetapuspa<br />+919496730893</span></span>
								<img src="<?=base_url()?>contents/images/team/sweta.jpg" />
							</a>
						</li>                          
                        <li data-pile="Events">
							<a href="https://www.facebook.com/susmitha2" target="_blank">
								<span class="tp-info"><span>V.Susmitha Reddy<br />+919496770978</span></span>
								<img src="<?=base_url()?>contents/images/team/susmitha.jpg" />
							</a>
						</li>
                                           
						<!-- Finance -->
						<li data-pile="Finance">
							<a href="https://www.facebook.com/akriti.kulshrestha.5" target="_blank">
								<span class="tp-info"><span>Akriti Kulshrestha<br />+919496886720</span></span>
								<img src="<?=base_url()?>contents/images/team/akriti.jpg" />
							</a>
						</li>
						<li data-pile="Finance">
							<a href="https://www.facebook.com/anandsanto" target="_blank">
								<span class="tp-info"><span>Anand Narayanan<br />+919496736678</span></span>
								<img src="<?=base_url()?>contents/images/team/anandn.jpg" />
							</a>
						</li>
						<li data-pile="Finance">
							<a href="https://www.facebook.com/rabinarayan.rath.75" target="_blank">
								<span class="tp-info"><span>Rabi Narayan Rath<br />+919439769069</span></span>
								<img src="<?=base_url()?>contents/images/team/rabi.jpg" />
							</a>
						</li>
						<li data-pile="Finance">
							<a href="https://www.facebook.com/sourita.saha" target="_blank">
								<span class="tp-info"><span>Sourita Saha<br />+919496792945</span></span>
								<img src="<?=base_url()?>contents/images/team/sourita.jpg" />
							</a>
						</li>

						<li data-pile="Finance">
							<a href="https://www.facebook.com/yash.raj.562" target="_blank">
								<span class="tp-info"><span>Yash Raj<br />+919496710517</span></span>
								<img src="<?=base_url()?>contents/images/team/yashraj.jpg" />
							</a>
						</li>
						<!-- Hospitality -->
						<li data-pile="Hospitality">
							<a href="#" onclick="return false;">
								<span class="tp-info"><span>Netra S Pillai<br />+919496710547</span></span>
								<img src="<?=base_url()?>contents/images/team/netra.jpg" />
							</a>
						</li>
						<li data-pile="Hospitality">
							<a href="https://www.facebook.com/kanishk.singh.9655" target="_blank">
								<span class="tp-info"><span>Kanishk Singh<br />+919496844081</span></span>
								<img src="<?=base_url()?>contents/images/team/kaka.jpg" />
							</a>
						</li>
                        
						<!-- Lectures and Talks -->
						<li data-pile="Luctures & Talks">
							<a href="https://www.facebook.com/profile.php?id=100004707912254"   target="_blank">
								<span class="tp-info"><span>Gautam Kumar Jha<br />+919496684268</span></span>
								<img src="<?=base_url()?>contents/images/team/jha.jpg" />
							</a>
						</li>

						<!-- Logistics -->
						<li data-pile="Logistics">
							<a href="#" onclick="return false;">
								<span class="tp-info"><span>Aryan Kushwaha<br />+918765865156</span></span>
								<img src="<?=base_url()?>contents/images/team/aryan.jpg" />
							</a>
						</li>
						<li data-pile="Logistics">
							<a href="https://www.facebook.com/mustafa.shahid.98"  target="_blank">
								<span class="tp-info"><span>Musthafa Shahid<br />+919496786484</span></span>
								<img src="<?=base_url()?>contents/images/team/musthafa.jpg" />
							</a>
						</li>
						<li data-pile="Logistics">
							<a href="https://www.facebook.com/vandana.vijayan.56" target="_blank">
								<span class="tp-info"><span>Vandana Vijayan<br />+919495058958</span></span>
								<img src="<?=base_url()?>contents/images/team/vandana.jpg" />
							</a>
						</li>
						<!-- Publicity -->
						<li data-pile="Publicity">
							<a href="#" onclick="return false;">
								<span class="tp-info"><span>Aswin Jacobs<br />+918281078141</span></span>
								<img src="<?=base_url()?>contents/images/team/ashwin.jpg" />
							</a>
						</li>
						<li data-pile="Publicity">
							<a href="https://www.facebook.com/aravind.rs.9212" target="_blank">
								<span class="tp-info"><span>Aravind <br />+919496937478</span></span>
								<img src="<?=base_url()?>contents/images/team/aravind.jpg" />
							</a>
						</li>
						<li data-pile="Publicity">
							<a href="https://www.facebook.com/g.s.v.chandrakanth" target="_blank">
								<span class="tp-info"><span>Chandrakanth <br />+919496691341</span></span>
								<img src="<?=base_url()?>contents/images/team/chandru.jpg" />
							</a>
						</li>
						<li data-pile="Publicity">
							<a href="https://www.facebook.com/dupam.kusuma" target="_blank">
								<span class="tp-info"><span>Nagakusuma <br />+919496710887</span></span>
								<img src="<?=base_url()?>contents/images/team/dupam.jpg" />
							</a>
						</li>
						<li data-pile="Publicity">
							<a href="https://www.facebook.com/VishnuTS.IIST" target="_blank">
								<span class="tp-info"><span>Vishnu Sasikumar<br />+919496731326</span></span>
								<img src="<?=base_url()?>contents/images/team/sasi.jpg" />
							</a>
						</li>
                        
						<!-- Science Expo -->
						<li data-pile="Science Expo">
							<a href="https://www.facebook.com/profile.php?id=100005852678801" target="_blank">
								<span class="tp-info"><span>Raj Biswas<br />+919496852938</span></span>
								<img src="<?=base_url()?>contents/images/team/raj.jpg" />
							</a>
						</li>
                                            
						<!-- Web -->
						<li data-pile="Web">
							<a href="https://www.facebook.com/nitinmbhanu9" target="_blank">
								<span class="tp-info"><span>Nitin M Bhanu<br />+919496701184</span></span>
								<img src="<?=base_url()?>contents/images/team/nitin.jpg" />
							</a>
						</li>
						<li data-pile="Web">
							<a href="https://www.facebook.com/thaiseerparammal" target="_blank">
								<span class="tp-info"><span>Thaiseer Parammal<br />+919746444550</span></span>
								<img src="<?=base_url()?>contents/images/team/thaiseer.jpg" />
							</a>
						</li>
						<!-- Workshops -->
						<li data-pile="Workshops">
							<a href="https://www.facebook.com/akshay.p.vetal" target="_blank">
								<span class="tp-info"><span>Akshay <br />+919496979934</span></span>
								<img src="<?=base_url()?>contents/images/team/akshay.jpg" />
							</a>
						</li>
						<li data-pile="Workshops">
							<a href="https://www.facebook.com/scigowtham" target="_blank">
								<span class="tp-info"><span>Gowtham Sivaraman<br />+919496930332</span></span>
								<img src="<?=base_url()?>contents/images/team/gowtham.jpg" />
							</a>
						</li>
						<li data-pile="Workshops">
							<a href="https://www.facebook.com/rahul.dhanak.017" target="_blank">
								<span class="tp-info"><span>Rahul Dhanak <br />+919496750117</span></span>
								<img src="<?=base_url()?>contents/images/team/dhanak.jpg" />
							</a>
						</li>                        

					</ul>
				</div>
			</section>
            
                        	<footer class="footer" role="contentinfo" style="bottom: -850px;width: 100%;position: absolute;z-index: 20;left: 0;">
                
				<div id="inner-footer" class="wrap clearfix">
                    <div class="explore" style="border-bottom:1px solid #616A7A;margin-bottom:10px">
                        <p style="font-size:22px">Explore Conscientia 2016</p>
                            <ul style="margin-left:-10px">
                                <li style="display: inline;"><a href="<?=base_url()?>">Home</a></li>
                                <li style="display: inline;"><a href="<?=base_url()?>events/">Events</a></li>
                                <li style="display: inline;"><a href="<?=base_url()?>workshops/">Workshops</a></li>
                                <li style="display: inline;"><a href="<?=base_url()?>team/">Contact us</a></li>
                            </ul>
                    </div>

					<p class="source-org copyright">Conscientia 2016</p>

				</div>

			</footer>              
            
		</div><!-- /container -->
                  
		<script src="<?=base_url()?>contents/js/jquery.min.js"></script>
		<script src="<?=base_url()?>contents/js/jquery.countdown.js"></script>
		<script type="text/javascript" src="<?=base_url()?>contents/js/jquery.stapel.js"></script>
		<script type="text/javascript">	
			$(function() {

				var $grid = $( '#tp-grid' ),
					$name = $( '#name' ),
					$close = $( '#close' ),
					$loader = $( '<div class="loader"><i></i><i></i><i></i><i></i><i></i><i></i><span>Loading...</span></div>' ).insertBefore( $grid ),
					stapel = $grid.stapel( {
						randomAngle : true,
						delay : 50,
						gutter : 70,
						pileAngles : 7,
						onLoad : function() {
							$loader.remove();
                            
						},
						onBeforeOpen : function( pileName ) {
							$name.html( pileName );
                            $('html, body').animate({ scrollTop: 0 }, 'slow');
						},
						onAfterOpen : function( pileName ) {
							$close.show();
						}
					} );

				$close.on( 'click', function() {
					$close.hide();
					$name.empty();
					stapel.closePile();
				} );
                
                $("#getting-started").countdown("2016/03/18 17:00:00", function(event) {
                    $(this).text(event.strftime('%D Days %Hh %Mm %Ss to go'));
                 });
                
			});
            
            $(window).load(function() {
                $('body').addClass('loaded');
            });
    
		</script>
	</body>
</html>
