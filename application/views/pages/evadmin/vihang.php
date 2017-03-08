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
        margin-bottom:50px;
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
        $astro='';
        $night='';
        $abc='';
        $i=$j=$k=$l=1;
        if(!empty($airstrike))
        {
            foreach($airstrike as $row){
				$cos.="<tr>";
				$cos.="<td>".$i."</td>";
				$cos.="<td>".$row['name']."</td>";
				$cos.="<td>".$row['email']."</td>";
				$cos.="<td>".$row['phone']."</td>";
				$cos.="<td>".$row['college']."</td>";
				$cos.="</tr>";
                $i++;
		    }
        }
        if(!empty($techflight))
        {
            foreach($techflight as $row){
				$astro.="<tr>";
				$astro.="<td>".$j."</td>";
				$astro.="<td>".$row['name']."</td>";
				$astro.="<td>".$row['email']."</td>";
				$astro.="<td>".$row['phone']."</td>";
				$astro.="<td>".$row['college']."</td>";
				$astro.="</tr>";
                $j++;
		   }
        }
        if(!empty($prakshepan))
        {
            foreach($prakshepan as $row){
				$night.="<tr>";
				$night.="<td>".$k."</td>";
				$night.="<td>".$row['name']."</td>";
				$night.="<td>".$row['email']."</td>";
				$night.="<td>".$row['phone']."</td>";
				$night.="<td>".$row['college']."</td>";
				$night.="</tr>";
                $k++;
		   }
        }
        if(!empty($airglide))
        {
            foreach($airglide as $row){
				$abc.="<tr>";
				$abc.="<td>".$l."</td>";
				$abc.="<td>".$row['name']."</td>";
				$abc.="<td>".$row['email']."</td>";
				$abc.="<td>".$row['phone']."</td>";
				$abc.="<td>".$row['college']."</td>";
				$abc.="</tr>";
                $l++;
		   }
        }

		?>
    <table>
        <tr>
            <th colspan="5" style="color:#A48CFF">Air Strike</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$cos?>
    </table>
    
    <table>
        <tr>
            <th colspan="5" style="color:#A48CFF">TechFlight</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$astro?>
    </table>
    
    <table>
        <tr>
            <th colspan="5" style="color:#A48CFF">Prakshepan</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$night?>
    </table>

    <table style="margin-bottom:100px">
        <tr>
            <th colspan="5" style="color:#A48CFF">Techglide</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$abc?>
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