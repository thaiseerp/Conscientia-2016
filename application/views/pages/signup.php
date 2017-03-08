<?php
 $this->session->keep_flashdata('redirect_url');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Conscientia 2016 | Signup</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="shortcut icon" href="">
        
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/signup.css" />
         <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" media="all" />
		<script src="<?=base_url()?>contents/js/modernizr.custom.js"></script>
	</head>
	<body>
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
			<div class="fs-form-wrap" id="fs-form-wrap">

<div class="fs-message-error fs-show"><?php echo $message;?></div>
<?php 
$form = array('class' => 'fs-form fs-form-full', 'id' => 'myform', 'autocomplete' =>'off');
echo form_open("", $form);?>
<ol class="fs-fields">
    <li>
        <label class="fs-field-label fs-anim-upper" for="q1">What's your name?</label>
            <?php echo form_input($user_name);?>
	</li>
    <li>
        <label class="fs-field-label fs-anim-upper" for="q1">What's your mobile no. ?</label>
            <?php echo form_input($phone);?>
    </li>
	<li>
	    <label class="fs-field-label fs-anim-upper" for="q1">Your College?</label>
            <?php echo form_input($college);?>
    </li>
    <li>
        <label class="fs-field-label fs-anim-upper" for="q1" data-info="As mentioned on your college ID">What's your student ID ?</label>
            <?php echo form_input($student_id);?>
    </li>
    <li data-input-trigger>
        <label class="fs-field-label fs-anim-upper" for="q3">Sex?</label>
        <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
            <span>
            <?php 
            $gender = array(
                  'id' => 'q3b',
                  'name'    => 'gender',
                  'value' => 'male',
                  'required'  => '',
                  'checked'     => (set_value('gender') === 'male' ? TRUE : FALSE),
                );
            echo form_radio($gender);?><label for="q3b" class="radio-male">Male</label></span>
            <span>
            <?php 
            $gender = array(
                  'id' => 'q3c',
                  'name'    => 'gender',
                  'value' => 'female',
                  'checked'     => (set_value('gender') === 'female' ? TRUE : FALSE),
                );
            echo form_radio($gender);?><label for="q3c" class="radio-female">Female</label></span>
            <span>
            <?php 
            $gender = array(
                  'id' => 'q3a',
                  'name'    => 'gender',
                  'value' => 'other',
                  'checked'     => (set_value('gender') === 'other' ? TRUE : FALSE),
                );
            echo form_radio($gender);?><label for="q3a" class="radio-others">Others</label></span>
        </div>
    </li>
    <li data-input-trigger>
        <label class="fs-field-label fs-anim-upper" for="q3" data-info="Our hospitality team will contact you for more details">Do you need accomodation? </label><a href="#" target="_blank" style="color:green">Hospitality Details</a>
		<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
		  <span>
            <?php 
            $accomodation = array(
                    'id' => 'q4b',
                    'name'    => 'accomodation',
                    'value' => '1',
                    'checked'     => (set_value('accomodation') === '1' ? TRUE : FALSE),
                    'required' => '',
                );
            echo form_radio($accomodation);?><label for="q4b" class="radio-yes">Yes</label></span>
		  <span>
            <?php 
            $accomodation = array(
                    'id' => 'q4c',
                    'name'    => 'accomodation',
                    'value' => '0',
                    'checked'     => (set_value('accomodation') === '0' ? TRUE : FALSE),
                );
            echo form_radio($accomodation);?><label for="q4c" class="radio-no">No</label></span>
        </div>
	</li>
</ol>

      <p><?php 
      $submit = array(
          'class' => 'button fs-submit',
      );
      echo form_submit('submit', 'Submit',$submit);?></p>

<?php echo form_close();?>
</div><!-- /fs-form-wrap -->
            <footer class="footer" role="contentinfo" style="margin:-10px">
                <div id="inner-footer" class="wrap clearfix">
                    <div class="explore" style="border-bottom:1px solid #616A7A;margin-bottom:10px">
                        <p style="font-size:22px">Explore Conscientia 2016</p>
                            <ul style="margin-left: -50px;">
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
		<script src="<?=base_url()?>contents/js/classie.js"></script>
		<script src="<?=base_url()?>contents/js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );
				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' );
					}
				} );
			})();
            function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
		</script>
	</body>
</html>
