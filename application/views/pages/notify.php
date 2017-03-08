<?php
//header("Refresh:0; url=".$this->session->flashdata('redirect_url'));
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Test Page</title>
<link href="<?=base_url()?>contents/css/form.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
<body style="background-color:#000020">
 <div class="wrap1">
<div class="info" >
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
    when an unknown printer took a galley of type and scrambled it to make a type
     specimen book. It has survived not only five centuries, but also the leap into 
     electronic typesetting.<p>
        <br /><br /> <p align="center">
             This page will be redirected in <span id="time">5</span> seconds !
             
         </p>
</div>
</div>
  <script language="javascript">
  var elapsed = 5;
  function countdown() {
    if (elapsed > 0) {
      setInterval(function() {
      $("#time").html(elapsed);
      }, 1000);
    setTimeout("countdown()", 1000);
      elapsed--;
    }
  }
    setTimeout("countdown()", 1000);
    </script>
    
    <script src="<?=base_url()?>contents/js/jquery.js"></script>
</body>
</html>