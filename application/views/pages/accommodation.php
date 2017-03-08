<?php 
    $this->session->set_flashdata('redirect_url', current_url());
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Conscientia 2016 | Accommodation</title>
		<meta name="description" content="About Us" />
		<meta name="author" content="Conscientia" />
		<link rel="shortcut icon" href="<?=base_url()?>favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/jquery.datetimepicker.css" />
        <link href="<?=base_url()?>contents/css/form.css" rel="stylesheet" type="text/css"  />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" media="all" />
        
        <style>
            .date {
                width: 286px !important;
                padding: 10px !important;
                border:1px solid #DDDDDD !important;
                border-radius: 8px 8px 0 0 !important;
                font-size: 18px !important;
                margin-top: 10px !important;
            }
            .contact_form {
                margin: 10px auto;
                width: 300px !important;
            }
            .contact_form input[type="submit"] {
                width: 310px !important;
                height: 50px !important;
                font-size: 18px !important;
                margin: 5px 0;
            }
            .error {
                color:red;
                font-size:14px;
            }
        </style>
	</head>
    <body style="background:#000020">
    <div class="wrap1">
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
    <div class="info" >
    <p>Dear participant,<p>
        <br />
        <p align="center">
             Please provide your expected date and time of arrival at <span style="color:cyan">Trivandrum city</span>
             <br />
             <div align="center" class="error"><?php echo $message;?></div>
             <?php
            $form = array('class' => 'contact_form', 'name' => 'date_form', 'autocomplete' =>'off');

 echo form_open('',$form);?>
	    
            <?php echo form_input($date);?>
	        
       	 	<?php echo form_submit('submit', 'Submit');?>
         </p>
</div>
</div>

    <footer class="footer" role="contentinfo" style="bottom: 0px;width: 100%;position: absolute;z-index: 20;left: 0;">
        
        <div id="inner-footer" class="wrap clearfix" style="padding:10px;width:95%">
            <div class="explore" style="border-bottom:1px solid #616A7A;margin-bottom:10px">
                <p style="color:#635C5C;font-size:22px">Explore Conscientia 2016</p>
                    <ul style="margin-left:-20px;padding:10px">
                        <li style="display: inline;"><a href="<?=base_url()?>">Home</a></li>
                        <li style="display: inline;"><a href="<?=base_url()?>events/">Events</a></li>
                        <li style="display: inline;"><a href="<?=base_url()?>workshops/">Workshops</a></li>
                        <li style="display: inline;"><a href="<?=base_url()?>team/">Contact us</a></li>
                    </ul>
            </div>

            <p class="source-org copyright">Conscientia 2016</p>

        </div>

    </footer>
    <script data-cfasync="false" src="<?=base_url()?>contents/js/jquery.min.js"></script> 
    <script data-cfasync="false" src="<?=base_url()?>contents/js/jquery.datetimepicker.full.min.js"></script> 
    <script>
    $( "#datepicker" ).datetimepicker({
        format:'d.m.Y H:i',
        minDate:'2016/03/16',
        maxDate:'2016/03/21'
    });
  </script>
        
    </body>
</html>