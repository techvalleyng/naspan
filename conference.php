<?php 
session_start();
include('includes/config.php');
include('includes/header.php');
?>
<body>
    <style>
        :root{
    --colorPrincipal: #7DB4B5;
    --colorSecundario: #680148;
    --colorSombra: rgba(125, 180, 181, 0.2)
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

body{
    background-color: rgb(248, 248, 248);
}

h1{
    font-size: 48px;
    text-align: center;
    text-transform: uppercase;
    padding: -1px 0;
    letter-spacing: 2px;
    color: var(--colorPrincipal);
}

/*Timeline*/
.timeline{
    position: relative;
    margin: 50px auto;
    padding: 40px 0;
    width: 100%;
}

.timeline::before{
    content: '';
    position: absolute;
    left: 50%;
    width: 2px;
    height: 100%;
    background-color: #e4e4e4;
}

.timeline ul li:hover .time{
    transform: scale(1.1);
}

/*Elementos de lista*/
.timeline ul li{
    list-style: none;
    position: relative;
    width: 50%;
    padding: 20px 40px;
}

.timeline ul li:nth-child(odd){
    float: left;
    text-align: right;
    clear: both;
}

.timeline ul li:nth-child(even){
    float: right;
    text-align: left;
    clear: both;
}

/*Circulo indicador*/
.timeline ul li::before{
    content: '';
    position: absolute;
    top: 30px;
    width: 10px;
    height: 10px;
    background-color: var(--colorPrincipal);
    border-radius: 50%;
    box-shadow: 0 0 0 3px var(--colorSombra);
}

.timeline ul li:nth-child(odd)::before{
    right: -6px;
}

.timeline ul li:nth-child(even)::before{
    left: -4px;
}

.timeline ul li:hover::before{
    transform: scale(1.5);
}

/*Fecha*/
.time{
    display: inline-block;
    font-weight: 400;
    font-size: 14px;
    padding: 5px 10px;
    margin-bottom: 15px;
    background-color: #E0EFF1;
    color: var(--colorSecundario);
    border-radius: 20px;
    box-shadow: 0 0 0 3px var(--colorSombra);
}

h3{
    font-weight: 400;
}

/*Contenido*/
.content{
    padding-bottom: 20px;
}

.timeline ul li h2{
    font-weight: 500;
    color: var(--colorPrincipal);
}

.timeline ul li p{
    margin: 10px 0;
    font-weight: 300;
}
/*Countdown*/
#countdown{
	width: 465px;
	height: 150px;
	text-align: center;
	background: #222;
	background-image: -webkit-linear-gradient(top, #222, #333, #333, #222); 
	background-image:    -moz-linear-gradient(top, #222, #333, #333, #222);
	background-image:     -ms-linear-gradient(top, #222, #333, #333, #222);
	background-image:      -o-linear-gradient(top, #222, #333, #333, #222);
	border: 1px solid #111;
	border-radius: 5px;
	box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.6);
	margin: auto;
	padding: 24px 0;
	position: absolute;
  top: 0; bottom: 0; left: 100; right: 0;
}

#countdown:before{
	content:"";
	width: 8px;
	height: 65px;
	background: #444;
	background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
	background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
	background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
	background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
	border: 1px solid #111;
	border-top-left-radius: 6px;
	border-bottom-left-radius: 6px;
	display: block;
	position: absolute;
	top: 48px; left: -10px;
}

#countdown:after{
	content:"";
	width: 8px;
	height: 65px;
	background: #444;
	background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
	background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
	background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
	background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
	border: 1px solid #111;
	border-top-right-radius: 6px;
	border-bottom-right-radius: 6px;
	display: block;
	position: absolute;
	top: 48px; right: -10px;
}

#countdown #tiles{
	position: relative;
	z-index: 1;
}

#countdown #tiles > span{
	width: 92px;
	max-width: 92px;
	font: bold 48px 'Droid Sans', Arial, sans-serif;
	text-align: center;
	color: #111;
	background-color: #ddd;
	background-image: -webkit-linear-gradient(top, #bbb, #eee); 
	background-image:    -moz-linear-gradient(top, #bbb, #eee);
	background-image:     -ms-linear-gradient(top, #bbb, #eee);
	background-image:      -o-linear-gradient(top, #bbb, #eee);
	border-top: 1px solid #fff;
	border-radius: 3px;
	box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.7);
	margin: 0 7px;
	padding: 18px 0;
	display: inline-block;
	position: relative;
}

#countdown #tiles > span:before{
	content:"";
	width: 100%;
	height: 13px;
	background: #111;
	display: block;
	padding: 0 3px;
	position: absolute;
	top: 41%; left: -3px;
	z-index: -1;
}

#countdown #tiles > span:after{
	content:"";
	width: 100%;
	height: 1px;
	background: #eee;
	border-top: 1px solid #333;
	display: block;
	position: absolute;
	top: 48%; left: 0;
}

#countdown .labels{
	width: 100%;
	height: 25px;
	text-align: center;
	position: absolute;
	bottom: 8px;
}

#countdown .labels li{
	width: 102px;
	font: bold 15px 'Droid Sans', Arial, sans-serif;
	color: #f47321;
	text-shadow: 1px 1px 0px #000;
	text-align: center;
	text-transform: uppercase;
	display: inline-block;
}
/*End Countdown*/
    </style>
  <!--header-->
  <?php 
  include('includes/nav.php');
  ?>
  <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">NASPAN Annual Shea Conference</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Conference </li>
        </ul>
        <div id="countdown">
          <div id='tiles'></div>
          <div class="labels">
            <li>Days</li>
            <li>Hours</li>
            <li>Mins</li>
            <li>Secs</li>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
   <!-- /content-6-->
   <section class="w3l-content-6 py-5" id="why">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 content-6-left">
           <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <h1>Timeline of the Conference</h1>
    <div class="timeline">
        <ul>
            <li>
                <div class="content">
                <div class="time">
                    <h3>22 June, 2022</h3>
                </div>
                    <h2>NASPAN LAUNCHES IT'S 3RD ANNUAL SHEA CONFERENCE 2022</h2>
                    <p>The conference is scheduled for August 23-25th 2022. The Secretariat and Committee members chaired by Richard Akomode VP II have been working tirelessly to make the 3rd Annual conference a success.</p>
                        <a href="assets/images/sponsorship.jpg" target="blank">
                        <img src="assets/images/sponsorship.jpg" alt="sponsorship" class="img-fluid" style="max-height:200px;">
                        </a>
                        <a href="assets/images/fees.jpg" target="blank">
                        <img src="assets/images/fees.jpg" alt="fees" class="img-fluid" style="max-height:200px;">
                        </a>
                </div>
            </li>
            <li>
                <div class="content">
                    <div class="time">
                        <h3>28 June, 2022</h3>
                    </div>
                    <h2>NASPAN INAUGURATES LOCAL ORGANIZING COMMITTEE FOR SHEA 2022 ANNUAL CONFERENCE.</h2>
                    <p>Preparations towards the August 2022 3rd Annual Shea Conference; NASPAN President Muhammad Ahmed Kontagora today inaugurated the local Organizing Committee to ensure successful hosting of the conference in Abuja.
                    </p>
                </div>
            </li>
            <li>
                <div class="content">
                    <div class="time">
                        <h3>2 July, 2022</h3>
                    </div>
                    <h2>SYNOPSIS FOR 3RD ANNUAL CONFERENCE.</h2>
                    <p>
                        1.0 INTRODUCTION. 
In August 2021, the National Shea Products Association of Nigeria (NASPAN) revived its annual shea conference about 10 years after the last one was held.The Association also resolved to hold its conference annually. The revival of the conference was a strategic initiative to enhance the visibility of Shea, promote its value, scale up its performance in the national and international markets, track emerging issues, bolster peer parity and attract local and foreign investment. These objectives were considerably achieved in 2021, as there is now a renewed interest in Shea products. The success of the 2021 conference is an impetus to hold the 2022 Shea conference, coming up on August 23-25, 2022.
                    </p>
                    <p> For more information <a href="https://naspan.com.ng/blog-single?nid=22" class="text-primary font-weight-bold">click here</a></p>
                </div>
            </li>
           
           
            <div style="clear: both;"></div>
        </ul>
    </div>

        </div>
      </div>
    </div>
</section>
<!-- //content-6-->
 
  <!--/w3l-footer-29-main-->
  <?php 
  include('includes/footer.php');
  ?>
  <!-- //footer-29 block -->
  <!-- disable body scroll which navbar is in active -->
  <?php 
  include('includes/scripts.php');
  ?>
  <script>
    var target_date = new Date().getTime() + (1000*3600*624); // set the countdown date
var days, hours, minutes, seconds; // variables for time units

var countdown = document.getElementById("tiles"); // get tag element

getCountdown();

setInterval(function () { getCountdown(); }, 1000);

function getCountdown(){

	// find the amount of "seconds" between now and target
	var current_date = new Date().getTime();
	var seconds_left = (target_date - current_date) / 1000;

	days = pad( parseInt(seconds_left / 86400) );
	seconds_left = seconds_left % 86400;
		 
	hours = pad( parseInt(seconds_left / 3600) );
	seconds_left = seconds_left % 3600;
		  
	minutes = pad( parseInt(seconds_left / 60) );
	seconds = pad( parseInt( seconds_left % 60 ) );

	// format countdown string + set tag value
	countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>"; 
}

function pad(n) {
	return (n < 10 ? '0' : '') + n;
}

</script>