<?php 
session_start();
include('includes/config.php');
include('includes/header.php');
?>
<body>
  <!--header-->
  <?php 
  include('includes/nav.php');
  ?>
  <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">About Us</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!-- /about-6-->
  <section class="w3l-cta4 py-5">
      <div class="container py-lg-5">
        <div class="ab-section">
          <h6 class="sub-title"></h6>
          <h3 class="hny-title">About NASPAN</h3>
          <p class="py-3">the Making of the association.</p>
           
        </div>
        <div class="row mt-5">
          <div class="col-md-6">
            <img src="assets/images/NASPAN-Shea-belt-nigeria.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-6 mt-md-0 mt-4">
            <img src="assets/images/NASPAN-pure-shea-nut.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
  </section>
  <!-- //about-6-->
   <!-- /content-6-->
   <section class="w3l-content-6 py-5" id="why">
    <div class="container py-lg-5">
      <div class="row">
        <div class="col-lg-3 content-6-left">
          <h6 class="sub-title"></h6>
          <h3 class="hny-title">NASPAN</h3>
        </div>
        <div class="col-lg-5 content-6-right mt-lg-0 mt-4">
          <p class="mb-3">The National Shea Products Association of Nigeria (NASPAN) is a Non-profit, Non-Governmental Organisation registered with Corporate Affairs Commission of Nigeria (CAC) in October 2010. 
            The Association has 23 State Chapters headed by State Coordinators, who are charged with responsibilities of manning the States in collaboration with the Local Shea Industry Cooperative Associations.</p>
            <p class="mb-3">NASPAN is overseen by a duly elected National Executive Council and its secretariat is run by a head of secretariat who is also the Chief Executive Officer. The Head of Secretariat oversee the operation, projects and strategic collaborations of the Association. The administrative head office is located in Abuja, the Federal Capital Territory of Nigeria.</p>
            
        </div>
        <div class="col-lg-4 content-6-right mt-lg-0 mt-4">
          <p class="mb-3">NASPAN’s strategic interest is to develop innovative solutions that will tackle the perennial issues in the sector including standards, market and sustainability; while ensuring sustainable growth and development. </p>
            <p class="mb-3">The Association is also positioned to provide technical assistance, which includes public enlightenment, stakeholders’ engagement and advocacy.
              The three pronged corporate direction of NASPAN is therefore – Quality, Market Development and Sustainability.</p>
            
        </div>
      </div>
    </div>
</section>
<!-- //content-6-->
  <!-- stats -->
  <section class="w3l-statshny py-5" id="stats">
    <div class="container py-lg-5 py-md-4">
      <div class="w3-stats-inner-info">
        <div class="row">
          <div class="col-lg-4 col-6 stats_info counter_grid text-left">
            <span class="fa fa-smile-o"></span>
            <p class="counter">1730</p>
            <h4>Members</h4>
          </div>
          <div class="col-lg-4 col-6 stats_info counter_grid1 text-left">
            <span class="fa fa-users"></span>
            <p class="counter">730</p>
            <h4>Cooperatives</h4>
          </div>
          <div class="col-lg-4 col-6 stats_info counter_grid mt-lg-0 mt-5 text-left">
            <span class="fa fa-database"></span>
            <p class="counter">30</p>
            <h4>State Chapters</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->
  <!--/w3l-footer-29-main-->
  <?php 
  include('includes/footer.php');
  ?>
  <!-- //footer-29 block -->
  <!-- disable body scroll which navbar is in active -->
  <?php 
  include('includes/scripts.php');
  ?>