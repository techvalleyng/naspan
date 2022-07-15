<?php 
session_start();
include('includes/config.php');
include('includes/header.php');
if(!isset($_SESSION['login']))
  {
    echo "<script type='text/javascript'> document.location = 'signin'; </script>";
  }
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
      <div class="container">
        <h2 class="title">NASPAN Member Dashboard</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url"><b>Home</b></a></li>
          <li><a href="#url"><span class="fa fa-arrow-right mx-2" aria-hidden="true" style="color:white;"></span> <b>My Payments</b></a></li>
          <li><a href="#url"><span class="fa fa-arrow-right mx-2" aria-hidden="true" style="color:white;"></span> <b>Profile</b></a></li>
          <li><a href="#url"><span class="fa fa-arrow-right mx-2" aria-hidden="true" style="color:white;"></span> <b>My Comments</b></a></li>
          <li><a href="#url"><span class="fa fa-arrow-right mx-2" aria-hidden="true" style="color:white;"></span> <b>Special Announcement</b></a></li>
          <!-- <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> News </li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!--/blog-->
  <section class="w3l-text-11 py-5">
    <div class="text11 py-md-5 py-4">
      <div class="container">
        <div class="row">

        </div>
      </div>
    </div>
  </section>
  <!-- //single post -->
  <!--//blog-->
  <!--/w3l-footer-29-main-->
  <?php
  include('includes/footer.php');
  ?>
  <!-- //footer-29 block -->
  <?php
  include('includes/scripts.php');
  ?>