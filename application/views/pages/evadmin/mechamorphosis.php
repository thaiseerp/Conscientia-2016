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
		$junk='';
        $mach='';
        $screw='';
        $bridge='';
        $contra='';
        $cad='';
        $hyd='';
        $i=$j=$k=$l=$m=$n=$o=1;
        if(!empty($junkyardwars))
        {
            foreach($junkyardwars as $row){
				$junk.="<tr>";
				$junk.="<td>".$i."</td>";
				$junk.="<td>".$row['name']."</td>";
				$junk.="<td>".$row['email']."</td>";
				$junk.="<td>".$row['phone']."</td>";
				$junk.="<td>".$row['college']."</td>";
				$junk.="</tr>";
                $i++;
		    }
        }
        if(!empty($machinist))
        {
            foreach($machinist as $row){
				$mach.="<tr>";
				$mach.="<td>".$j."</td>";
				$mach.="<td>".$row['name']."</td>";
				$mach.="<td>".$row['email']."</td>";
				$mach.="<td>".$row['phone']."</td>";
				$mach.="<td>".$row['college']."</td>";
				$mach.="</tr>";
                $j++;
		   }
        }
        if(!empty($screwed))
        {
            foreach($screwed as $row){
				$screw.="<tr>";
				$screw.="<td>".$k."</td>";
				$screw.="<td>".$row['name']."</td>";
				$screw.="<td>".$row['email']."</td>";
				$screw.="<td>".$row['phone']."</td>";
				$screw.="<td>".$row['college']."</td>";
				$screw.="</tr>";
                $k++;
		   }
        }
        if(!empty($bridgeup))
        {
            foreach($bridgeup as $row){
				$bridge.="<tr>";
				$bridge.="<td>".$l."</td>";
				$bridge.="<td>".$row['name']."</td>";
				$bridge.="<td>".$row['email']."</td>";
				$bridge.="<td>".$row['phone']."</td>";
				$bridge.="<td>".$row['college']."</td>";
				$bridge.="</tr>";
                $l++;
		   }
        }
        if(!empty($contraptions))
        {
            foreach($contraptions as $row){
				$contra.="<tr>";
				$contra.="<td>".$m."</td>";
				$contra.="<td>".$row['name']."</td>";
				$contra.="<td>".$row['email']."</td>";
				$contra.="<td>".$row['phone']."</td>";
				$contra.="<td>".$row['college']."</td>";
				$contra.="</tr>";
                $k++;
		   }
        }
        if(!empty($caddraw))
        {
            foreach($caddraw as $row){
				$cad.="<tr>";
				$cad.="<td>".$n."</td>";
				$cad.="<td>".$row['name']."</td>";
				$cad.="<td>".$row['email']."</td>";
				$cad.="<td>".$row['phone']."</td>";
				$cad.="<td>".$row['college']."</td>";
				$cad.="</tr>";
                $l++;
		   }
        }
        if(!empty($hydranoid))
        {
            foreach($hydranoid as $row){
				$hyd.="<tr>";
				$hyd.="<td>".$o."</td>";
				$hyd.="<td>".$row['name']."</td>";
				$hyd.="<td>".$row['email']."</td>";
				$hyd.="<td>".$row['phone']."</td>";
				$hyd.="<td>".$row['college']."</td>";
				$hyd.="</tr>";
                $l++;
		   }
        }

		?>
    <table>
        <tr>
            <th colspan="5" style="color:#A48CFF">Junkyard Wars</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$junk?>
    </table>
    
    <table>
        <tr>
            <th colspan="5" style="color:#A48CFF">Machinist</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$mach?>
    </table>
    
    <table>
        <tr>
            <th colspan="5" style="color:#A48CFF">Screwed</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$screw?>
    </table>
    
    <table>
        <tr>
            <th colspan="5" style="color:#A48CFF">Bridge Up</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$bridge?>
    </table>
    
    <table>
        <tr>
            <th colspan="5" style="color:#A48CFF">Contraptions</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$contra?>
    </table>

    <table style="margin-bottom:100px">
        <tr>
            <th colspan="5" style="color:#A48CFF">CADDraw</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$cad?>
    </table>

    <table style="margin-bottom:100px">
        <tr>
            <th colspan="5" style="color:#A48CFF">Hydarnoid</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College</th>
        </tr>
        <?=$hyd?>
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