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
      <div class="container">
        <h2 class="title">NASPAN News</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> News </li>
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

          <div class="col-lg-8 text11-content">
           <!-- Blog Post -->
            <?php 
              if($_POST['searchtitle']!=''){
                $st=$_SESSION['searchtitle']=$_POST['searchtitle'];
              }
              $st;

              if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
              } else {
                $pageno = 1;
              }
              $no_of_records_per_page = 8;
              $offset = ($pageno-1) * $no_of_records_per_page;
              $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
              $result = mysqli_query($con,$total_pages_sql);
              $total_rows = mysqli_fetch_array($result)[0];
              $total_pages = ceil($total_rows / $no_of_records_per_page);

              $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblposts.Category,tblposts.PostDetails, tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.PostTitle like '%$st%' and tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
              $rowcount=mysqli_num_rows($query);
              if($rowcount==0)
               {
               echo "No record found";
               }
              else {
              while ($row=mysqli_fetch_array($query)) {
            ?>
            <div class="item mt-5 pt-lg-3">
              <div class="card">
                <div class="card-header p-0 position-relative border-0">
                  <a href="blog-single?nid=<?php echo htmlentities($row['pid'])?>">
                    <img class="card-img-bottom d-block radius-image" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>"
                        alt="<?php echo htmlentities($row['posttitle']);?>">
                  </a>
                </div>
                <div class="card-body p-0 blog-details">
                  <h6 class="mt-4"><?php echo htmlentities($row['postingdate']);?></h6>
                  <a href="#" class="admin">- by Admin </a>
                  <br>
                  <a href="blog-single?nid=<?php echo htmlentities($row['pid'])?>" class="blog-desc"><?php echo htmlentities($row['posttitle']);?></a>
                  <!-- <p>As part of the build up towards the upcoming NASPAN Conference scheduled to hold from the 24-26th of August 2021, the President of NASAPAN, Mohammed Kontagora today, the 10th of August received the Chairperson of the Better Life for Rural Women in Africa her excellency, Aisha Babangida at the NASPAN Head office in Abuja.</p> -->
                    <a href="blog-single?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-style btn-primary mt-lg-4 mt-3">Read more </a>
                </div>
              </div>
            </div>
            <?php }} ?>
            <!-- /Blog Post -->

            <!-- pagination -->
            <div class="paginarions mt-5 pt-lg-5">
            
              <ul class="pager">
                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> pager__item">
                  <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="pager__link">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                  </a>
                </li>
                <?php for($pageno; $pageno<=$total_pages; $pageno++ ){?>
                  <li class="pager__item active"><a class="pager__link" href="?pageno=<?php echo $pageno ?>"><?php echo $pageno; ?></a></li>
                <?php } ?>
                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> pager__item">
                    <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="pager__link">
                      <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    </a>
                </li>
              </ul>
            </div>
            <!-- //pagination -->
       

          </div>
          <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
            <aside class="sidebar">
              <div class="sidebar-widget sidebar-blog-category">

              <!-- <div class="textwidget mx-auto text-center">
                <a href="#"> <img class="rounded-circle align-center img-fluid" src="assets/images/c1.jpg" alt="user_logo"></a>
                       <div class="sidebar-title">
                        <h4 class="mb-2 mt-3">Jack Harry</h4>
                      </div>
                <p class="text-center px-lg-4">Hi! I`m an authtor of this blog. Read our post - be in trend!</p>
                  <div class="widget-social-icons mt-4">
                    <ul class="column3 social m-0 p-0">
                     
                      <li><a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
                    </ul>
                  </div>
              </div> -->
              </div>
              <!--Blog Category Widget-->
              <div class="sidebar-widget sidebar-blog-category">
                <div class="sidebar-title">
                  <h4>Search here</h4>
                </div>
              <form action="search" class="search-form" method="post" name="search">
                <input type="search" name="searchtitle" placeholder="Search..." required="">
                <button type="submit"><span class="fa fa-search"></span></button>
              </form>
            </div>


              <!-- Popular Post Widget-->
              <div class="sidebar-widget popular-posts">
                <div class="sidebar-title">
                  <h4>Latest Updates</h4>
                </div>
                
                <?php 
                  $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblposts.Category,tblposts.PostDetails, tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT 5");
                  while ($row=mysqli_fetch_array($query)) {
                ?>
                <article class="post">
                  <figure class="post-thumb"><img src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>"
                        alt="<?php echo htmlentities($row['posttitle']);?>"></figure>
                  <div class="text"><a href="blog-single?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                  </div>
                  <div class="post-info"><?php echo htmlentities($row['postingdate']);?></div>
                </article>
                <?php } ?>
                
    
              </div>
              <!-- sidebar sticky -->
              <div class="sidebar-sticky">
                <div class="sidebar-sticky-fix">
                  <!--Blog Category Widget-->
                

                 

                  <!-- Tags Widget-->
                  <!-- <div class="sidebar-widget popular-tags">
                    <div class="sidebar-title">
                      <h4>Post Tag</h4>
                    </div>
                    <a href="#url">Agricultural</a>
                    <a href="#url">Organic</a>
                    <a href="#url">Farm</a>
                    <a href="#url">Dairy</a>
                    <a href="#url">Gargen</a>

                  </div> -->

                  <!-- Subscribe Widget-->

                </div>
              </div>
              <!-- //sidebar sticky -->

            </aside>
          </div>
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