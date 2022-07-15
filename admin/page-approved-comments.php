<?php
session_start();
include('includes/header.php');
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['adminlogin'])==0)
  { 
header('location:index.php');
}
if( $_GET['disid'])
{
	$id=intval($_GET['disid']);
	$query=mysqli_query($con,"update tblcomments set status='0' where id='$id'");
	$msg="Comment unapprove ";
}
// Code for restore
if($_GET['appid'])
{
	$id=intval($_GET['appid']);
	$query=mysqli_query($con,"update tblcomments set status='1' where id='$id'");
	$msg="Comment approved";
}

// Code for deletion
if($_GET['action']=='del' && $_GET['rid'])
{
	$id=intval($_GET['rid']);
	$query=mysqli_query($con,"delete from  tblcomments  where id='$id'");
	$delmsg="Category deleted forever";
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
          <h1><i class="fa fa-dashboard"></i> Comments</h1>
          <p>Comment List</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Approved Comments</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-sm-6">  
        <?php if($msg){ ?>
        <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> <?php echo htmlentities($msg);?>
        </div>
        <?php } ?>

        <?php if($delmsg){ ?>
        <div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> <?php echo htmlentities($delmsg);?></div>
        <?php } ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Approved Comments</h3>
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th> Name</th>
                        <th>Email Id</th>
                        <th width="300">Comment</th>
                        <th>Status</th>
                        <th>Post / News</th>
                        <th>Posting Date</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $query=mysqli_query($con,"Select tblcomments.id,tblcomments.status,  tblcomments.name,tblcomments.email,tblcomments.postingDate,tblcomments.comment,tblposts.id as postid,tblposts.PostTitle from  tblcomments join tblposts on tblposts.id=tblcomments.postId where tblcomments.status=1");
                    $rowcount=mysqli_num_rows($query);
                    if($rowcount==0)
                      {
                  ?>
                    <tr>
                      <td colspan="8" align="center"><h3 style="color:red">No record found</h3></td>
                    <tr>
                  <?php 
                    } else {
                      $count = 1;
                      while($row=mysqli_fetch_array($query))
                    { 
                  ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo htmlentities($row['name']);?></td>
                        <td><?php echo htmlentities($row['email']);?></td>
                        <td><?php echo htmlentities($row['comment']);?></td>
                        <td><?php $st=$row['status'];
                            if($st==0):
                            echo "Wating for approval";
                            else:
                            echo "Approved";
                            endif;
                            ?>
                        </td>
                        <td><a href="page-post-edit?pid=<?php echo htmlentities($row['postid']);?>"><?php echo htmlentities($row['PostTitle']);?></a> </td>
                        <td><?php echo htmlentities($row['postingDate']);?></td>
                        <td>
                        <?php if($st==1):?>
                        <a href="?disid=<?php echo htmlentities($row['id']);?>" title="Disapprove this comment">
                            <button type="button" class="btn btn-danger"> 
                                <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                                Disapprove
                            </button>
                        </a>
                        <?php else :?>
                        <a href="?appid=<?php echo htmlentities($row['id']);?>" title="Approve this comment">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-hand-o-up" aria-hidden="true"></i>
                                Approve
                            </button>
                        </a>
                        <?php endif;?>
                        <a href="?rid=<?php echo htmlentities($row['id']);?>&&action=del">
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