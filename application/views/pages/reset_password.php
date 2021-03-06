<?php 
$this->session->keep_flashdata('redirect_url');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Conscientia 2016 | Reset Password</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" />
<link href="<?=base_url()?>contents/css/form.css" rel="stylesheet" type="text/css" media="all" /> 
</head>
<body style="background-color:#000020">
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
 <div class="wrap">
<div class="contact-form" >
    <div align="center">
        <?php
            $form = array('class' => 'contact_form', 'name' => 'contact_form', 'autocomplete' =>'off');

 echo form_open('reset_password/' . $code,$form);?>
        
        <h1>Reset Password</h1>
<div id="errormsg"><?php echo $message;?></div>
	    <ul >
	        <li>
	            
	            <?php echo form_input($new_password);?>
	        </li>
	        <li >
	            <?php echo form_input($new_password_confirm);?>
	        </li>
         </ul>
	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

<?php echo form_submit('submit','Update Password');?>

<?php echo form_close();?>
<div class="clear"></div>	
</div>

</div>
</div>
          <footer class="footer" role="contentinfo" style="margin-top:70px">
                
				<div id="inner-footer" class="wrap clearfix" style="width:90%">
                    <div class="explore" style="border-bottom:1px solid #616A7A;margin-bottom:10px">
                        <p style="font-size:22px">Explore Conscientia 2016</p>
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
</body>
</html>