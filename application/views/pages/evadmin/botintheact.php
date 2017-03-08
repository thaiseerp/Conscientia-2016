<!DOCTYPE HTML>
<html>
<head>
<title>Conscientia 2016 | Event Admin Page</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?=base_url()?>favicon.ico">
<link href="<?=base_url()?>contents/css/form.css" rel="stylesheet" type="text/css"  />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/header.css" media="all" /> 

<style>
    table {
        margin-bottom:25px;
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
		$bot='';
        $line='';
        $sal='';
        $i=$j=$k=1;
        if(!empty($botsup))
        {
            foreach($botsup as $row){
				$bot.="<tr>";
				$bot.="<td>".$i."</td>";
				$bot.="<td>".$row['name']."</td>";
				$bot.="<td>".$row['email']."</td>";
				$bot.="<td>".$row['phone']."</td>";
				$bot.="<td>".$row['college']."</td>";
				$bot.="</tr>";
                $i++;
		    }
        }
        if(!empty($linefollower))
        {
            foreach($linefollower as $row){
				$line.="<tr>";
				$line.="<td>".$j."</td>";
				$line.="<td>".$row['name']."</td>";
				$line.="<td>".$row['email']."</td>";
				$line.="<td>".$row['phone']."</td>";
				$line.="<td>".$row['college']."</td>";
				$line.="</tr>";
                $j++;
		   }
        }
        if(!empty($salilsthalchar))
        {
            foreach($salilsthalchar as $row){
				$sal.="<tr>";
				$sal.="<td>".$k."</td>";
				$sal.="<td>".$row['name']."</td>";
				$sal.="<td>".$row['email']."</td>";
				$sal.="<td>".$row['phone']."</td>";
				$sal.="<td>".$row['college']."</td>";
				$sal.="</tr>";
                $k++;
		   }
        }

		?>
    <table>
        <tr>
            <th colspan="5">Bots Up</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$bot?>
    </table>
    
    <table>
        <tr>
            <th colspan="5">Line Follower</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$line?>
    </table>
    
    <table style="margin-bottom:100px">
        <tr>
            <th colspan="5">Salilsthalchar</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$sal?>
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