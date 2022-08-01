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
        <h2 class="title">List of All Regstered Members</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Members List </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!-- /about-6-->
  <section class="w3l-cta4 ">
      <div class="container py-lg-5">
        <div class="row mt-0">
          <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="membersList">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Contact Desk</th>
                      <th>Email</th>
                      <th>Membership Type</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>NASPAN</td>
                      <td>Abuja</td>
                      <td> <a href="mailto:info@naspan.com.ng">info@naspan.com.ng</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>JE OILS</td>
                      <td>MR. GBENGA IDOWU</td>
                      <td> <a href="mailto:gbenga.idowu@jeoils.com">info@naspan.com.ng</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>NATURALLY TRIBAL</td>
                      <td>SHALOM LLYOD </td>
                      <td> <a href="mailto:shalom@naturallytribalgroup">shalom@naturallytribalgroup</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>LADGROUP </td>
                      <td>Mr. ROBERT       OGIRRI       (MD) </td>
                      <td> <a href="mailto:r.ogirri@ladgroup.org">r.ogirri@ladgroup.org</a></td>
                      <td>Corporate</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
          
        </div>
      </div>
  </section>
  <!-- //about-6-->
  <!--/w3l-footer-29-main-->
  <?php 
  include('includes/footer.php');
  ?>
  <!-- //footer-29 block -->
  <!-- disable body scroll which navbar is in active -->
  <?php 
  include('includes/scripts.php');
  ?>
  <!-- Data table plugin-->
    <script type="text/javascript" src="admin/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="admin/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#membersList').DataTable();</script>