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
          <h1><i class="fa fa-dashboard"></i> Post</h1>
          <p>Post List</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Post</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">All Post</h3>
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Post Title</th>
                      <th>Post Category</th>
                      <th>Post Comments(Approved)</th>
                      <th>Date Posted</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $query=mysqli_query($con,"select tblposts.id as postid,tblposts.PostTitle,tblposts.Category,tblposts.PostingDate from tblposts");
                    $rowcount=mysqli_num_rows($query);
                    if($rowcount==0)
                      {
                      ?>
                    <tr>
                      <td colspan="5" align="center"><h3 style="color:red">No record found</h3></td>
                    <tr>
                  <?php 
                    } else {
                      $count = 1;
                      while($row=mysqli_fetch_array($query))
                    { 
                  ?>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $row['PostTitle']?></td>
                      <td><?php echo $row['Category'] ?></td>
                      <td><?php echo $row['PostingDate'] ?></td>
                      <td>0(0)</td>
                      <td>
                      <a href="page-post-edit?pid=<?php echo htmlentities($row['postid']);?>">
                        <button type="button" class="btn btn-primary"> 
                          <i class="fa fa-edit" aria-hidden="true"></i>
                          Edit
                        </button>
                      </a>
                      <a href="server/post-action?pid=<?php echo htmlentities($row['postid']);?>&&action=del" onclick="return confirm('Do you reaaly want to delete ?')" style="color:white;">
                        <button type="button" class="btn btn-danger">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                          Delete
                        </button>
                      </a>
                      </td>
                    </tr>
                    <?php $count = $count + 1; }  }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    
    <?php
    include('includes/footer.php');
    ?>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>