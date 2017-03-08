<!DOCTYPE HTML>
<html>
<head>
<title>Conscientia 2016 | Hospitality Admin Page</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?=base_url()?>favicon.ico">
<link href="<?=base_url()?>contents/css/form.css" rel="stylesheet" type="text/css"  />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" media="all" /> 

<style>
    table {
        margin-bottom:500px;
        align:center;
        border: 2px solid #555555;
        width:100%;
    }
    th,td {
        border: 1px solid #555555;
        padding:7px;
        color:#E6E6E6;
    }
    td {
        font-size:15px;
        color:#828282;
        font-weight:normal;
    }
</style>

</head>
<body style="background-color:#000020">
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
   		<?php
		$cos='';
        $i=1;
        if(!empty(acco_details))
        {
            foreach(acco_details as $row){
				$cos.="<tr>";
				$cos.="<td>".$i."</td>";
				$cos.="<td>".$row['name']."</td>";
				$cos.="<td>".$row['email']."</td>";
				$cos.="<td>".$row['phone']."</td>";
				$cos.="<td>".$row['college']."</td>";
                $cos.="<td>".$row['date']."</td>";
				$cos.="</tr>";
                $i++;
		    }
        }
		?>
    <table>
        <tr>
            <th colspan="5" style="color:#A48CFF;margin-bottom:100px">Expected Arrival Date and Time</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
            <th>Date & Time</th>
        </tr>
        <?=$cos?>
    </table>   
</div>
</div>

<footer class="footer" role="contentinfo" >
        
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

</body>
</html>