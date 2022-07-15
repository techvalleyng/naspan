<?php
session_start();
include('includes/header.php');
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['adminlogin'])==0)
  { 
header('location:index.php');
}
?>

  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php
    include('includes/nav.php');
    ?>
    <!-- Sidebar menu-->
    <?php
    include('includes/sidebar.php');
    ?>
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Membership</h1>
        <p>New Membership Payment</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Request</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="tile">
          <h3 class="tile-title">Recent Payments</h3>
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Payment For</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>30/03/22</td>
                <td>N 20, 000.00</td>
                <td>Cooperate membership</td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-6">
        <div class="tile">

          <div class="tile-title-w-btn">
            <h3 class="title">New Membership Payment</h3>
            <p><a class="btn btn-primary icon-btn" href=""><i class="fa fa-plus"></i> </a></p>
          </div>
          <div class="tile-body">
            <form>
              <div class="form-group">
                <label class="control-label">Member ID/Name</label>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Member ID/Name</label>
                  <div class="input-group">
                    <input class="form-control" id="exampleInputAmount" type="text" placeholder="Member ID/Name">
                    
                  </div>
                </div>
                <div class="form-group align-self-end">
                  <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-search"></i>Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    
  </main>
  <!-- Essential javascripts for application to work-->
  <?php
    include('includes/footer.php');
  ?>