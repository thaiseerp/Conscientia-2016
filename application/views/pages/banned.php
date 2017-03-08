<!DOCTYPE html><html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Conscientia 2016 | You are Banned !</title>
    <link rel="shortcut icon" href="<?=base_url()?>favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>contents/css/error.css"/>
    <script type="text/javascript" src="<?=base_url()?>contents/js/jquery.min.js">
    
    </script><script type="text/javascript">
    $(function(){ 
        $(this).delay(250).queue(function(){$( ".one" ).addClass("selected");
        $(this).dequeue();}).delay(250).queue(function(){$( ".two" ).addClass("selected");
        $(this).dequeue();}).delay(250).queue(function(){$( ".three" ).addClass("selected");
        $(this).dequeue();}).delay(250).queue(function(){$( ".four" ).addClass("selected");
        $(this).dequeue();}).delay(250).queue(function(){$( ".five" ).addClass("selected");
        $(this).dequeue();}).delay(250).queue(function(){$( ".six" ).addClass("selected");
        $(this).dequeue();}).delay(250).queue(function(){$( ".seven" ).addClass("selected");
        $(this).dequeue();}).delay(250).queue(function(){$( ".eight" ).addClass("selected");
        $(this).dequeue();}).delay(250).queue(function(){$( ".nine" ).addClass("selected");
        $(this).dequeue();}).delay(250).queue(function(){$( ".ten" ).addClass("selected");
        $(this).dequeue();}).delay(250).queue(function(){$( ".eleven" ).addClass("selected");
        $(this).dequeue();}).delay(250).queue(function(){$( ".twelve" ).addClass("selected");
        $(this).dequeue();}).delay(250).queue(function(){$( ".thirteen" ).addClass("selected");
        $(this).dequeue();}).delay(1500).queue(function(){$( ".fourteen" ).addClass("fuselected");
        $(this).dequeue();}).delay(0).queue(function(){$( ".fifteen" ).addClass("fuselected");
        $(this).dequeue();}).delay(0).queue(function(){$( ".sixteen" ).addClass("fuselected");
        $(this).dequeue();}).delay(0).queue(function(){$( ".seventeen" ).addClass("fuselected");
        $(this).dequeue();}).delay(0).queue(function(){$( ".eighteen" ).addClass("fuselected");
        $(this).dequeue();}).delay(0).queue(function(){$( ".ninteen" ).addClass("fuselected");
        $(this).dequeue();}).delay(0).queue(function(){$( ".twenty" ).addClass("fuselected");
        $(this).dequeue();}).delay(0).queue(function(){$( ".twentyone" ).addClass("fuselected");
        $(this).dequeue();});});
    </script>

<script type="text/javascript">
    $(function(){
        var liWidth=$("li").css("width");
        $("li").css("height",liWidth);
        $("li").css("lineHeight",liWidth);
        var totalHeight=$("#wordsearch").css("width");
        $("#wordsearch").css("height",totalHeight);});
        causeRepaintsOn=$("h1, h2, h3, p");
        $(window).resize(function(){causeRepaintsOn.css("z-index", 1);});
        $(window).on('resize', function(){var liWidth=$(".one").css("width");
        $("li").css("height",liWidth);
        $("li").css("lineHeight",liWidth);
        var totalHeight=$("#wordsearch").css("width");
        $("#wordsearch").css("height",totalHeight);});
</script>

<script type="text/javascript">
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $("div#wordsearch").fadeOut("slow", function ()
                {
                    $("div#wordsearch").hide();
                    $("video#gif").show();
                });
             }, 5000);
         });
    </script>

<style>
/*UL*/    

 #wordsearch {
	width: 45%;
	float: left;
}
 #gif {
	width: 45%;
	float: left;
}
#wordsearch ul {
	margin: 0px;
	padding: 0px;
}
video {
    object-fit: contain;
}
#wordsearch ul li {
	float: left;
	width: 12%;
	background-color: #0A4466;
	list-style: none;
	margin-right: 0.5%;
	margin-bottom: 0.5%;
    padding: 0;
    display: block;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    overflow: hidden;
    font-size: 20px;
    font-size: 1.6vw;
    font-weight: 300;
    transition: background-color 0.75s ease;
    -moz-transition: background-color 0.75s ease;
    -webkit-transition: background-color 0.75s ease;
    -o-transition: background-color 0.75s ease;
	-webkit-transform: perspective(1000px) rotate3d(0,1,0,360deg);
	transform: perspective(1000px) rotate3d(0,1,0,360deg);
}
#wordsearch ul li:hover {
    -webkit-filter: grayscale(100%);
    color: #ccc;
	-webkit-transform: perspective(1000px) rotate3d(0,1,0,0deg);
	transform: perspective(1000px) rotate3d(0,1,0,0deg);
	-webkit-transition: -webkit-transform 0.85s, color 0.85s;
	transition: transform 0.85s, color 0.85s;
    
}
#wordsearch ul li.selected {
	background-color: #fff;
	color: rgba(255,0,0,1);
	font-weight: 400;
}

/*FULI*/  
#wordsearch ul fuli {
	float: left;
	width: 12%;
	background-color: #0A4466;
	list-style: none;
	margin-right: 0.5%;
	margin-bottom: 0.5%;
    padding: 0;
    display: block;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    height: 59px;
    line-height: 59px;
    overflow: hidden;
    font-size: 20px;
    font-size: 1.6vw;
    font-weight: 300;
    transition: background-color 0.75s ease;
    -moz-transition: background-color 0.75s ease;
    -webkit-transition: background-color 0.75s ease;
    -o-transition: background-color 0.75s ease;
	-webkit-transform: perspective(1000px) rotate3d(0,1,0,360deg);
	transform: perspective(1000px) rotate3d(0,1,0,360deg);
}
#wordsearch ul fuli:hover {
    -webkit-filter: grayscale(100%);
    color: #ccc;
	-webkit-transform: perspective(1000px) rotate3d(0,1,0,0deg);
	transform: perspective(1000px) rotate3d(0,1,0,0deg);
	-webkit-transition: -webkit-transform 0.85s, color 0.85s;
	transition: transform 0.85s, color 0.85s;
    
}
#wordsearch ul fuli.fuselected{
	background-color: #f00;
	color: #fff;
	font-weight: 400;
}

</style>



</head>
<body>
    <noscript>
        <div id="noscript-warning">This site works best with Javascript enabled, as you can plainly see.</div>
    </noscript>
        
        <div id="wrap">
            
             <video style="display:none;width:550px;height:365px" id="gif" autoplay="autoplay" loop="loop" onstart="this.play();" onended="this.play();" >
                 <source src="<?=base_url()?>contents/images/fu.webm" type="video/webm">
                                        Your browser does not support the <code>video</code> element.

             </video>
          <div id="wordsearch">
              <ul>
                  <li>q</li>
                  <li>k</li>
                  <fuli class="fourteen">f</fuli>
                  <li>v</li>
                  <li>4</li>
                  <li>@</li>
                  <li>y</li>
                  <li>o</li>
                  
                  <li>p</li>
                  <li>z</li>
                  <li>x</li>
                  <fuli class="fifteen">u</fuli>
                  <li>#</li>
                  <li>t</li>
                  <li>7</li>
                  <li>j</li>
                  
                  
                  <li>!</li>
                  <li class="one">y</li>
                  <li class="two">o</li>
                  <li class="three">u</li>
                  <fuli class="sixteen">c</fuli>
                  <li>m</li>
                  <li class="four">a</li>
                  <li>n</li>
                  
                  <li>b</li>                  
                  <li>i</li>
                  <li>r</li>
                  <li>e</li>
                  <li>y</li>
                  <fuli class="seventeen">k</fuli>
                  <li class="five">r</li>
                  <li>{</li>
                  
                  <li>3</li>
                  <li>o</li>
                  <li>j</li>
                  <li>5</li>
                  <fuli class="eighteen">y</fuli>
                  <li>o</li>
                  <li class="six">e</li>
                  <li>7</li>
                  
                  <li>i</li>
                  <li>h</li>
                  <li>j</li>
                  <li>j</li>
                  <li>y</li>
                  <fuli class="ninteen">o</fuli>
                  <li>u</li>
                  <li>1</li>
                  
                  <li class="seven">b</li>
                  <li class="eight">a</li>
                  <li class="nine">n</li>
                  <li class="ten">n</li>
                  <li class="eleven">e</li>
                  <li class="twelve">d</li>
                  <fuli class="twenty">u</fuli>
                  <li class="thirteen">!</li>
                  
                  <li>*</li>
                  <li>u</li>
                  <li>l</li>
                  <li>c</li>
                  <li>a</li>
                  <li>u</li>
                  <li>o</li>
                  <fuli class="twentyone">!</fuli>
              </ul>
          </div>     
            <div id="main-content">
                <h1>Oops! <br>You are banned !</h1>
                 <p>We had already warned you.</p>
             </div>
          </div>
 </body>
</html>