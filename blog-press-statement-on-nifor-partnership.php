<?php 
session_start();
include('includes/config.php');
include('includes/header.php');
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
  $_SESSION['token'] = bin2hex(random_bytes(32));
 }
 
 if(isset($_POST['submit']))
 {
   //Verifying CSRF Token
 if (!empty($_POST['csrftoken'])) {
     if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
 $name=$_POST['name'];
 $email=$_POST['email'];
 $comment=$_POST['comment'];
 $postid=intval($_GET['nid']);
 $st1='0';
 $query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
 if($query):
   echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
   unset($_SESSION['token']);
 else :
  echo "<script>alert('Something went wrong. Please try again.');</script>";  
 
 endif;
 
 }
 }
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
            
            <img src="assets/images/naspan-caption.jpg" alt="naspan-tree" class="img-fluid">
            <h4 class="">NATIONAL SHEA PRODUCTS ASSOCIATION OF NIGERIA (NASPAN)
                PRESS STATEMENT.</h4>
            <h6>June 24, 2022</h6>
            <a href="#admin" class="admin">- by Admin</a>
            <h5 class="mt-4 mb-3">
                NASPAN COLLABORATES WITH NIFOR ON SHEA PARKLANDS AND PLANTATIONS DEVELOPMENT.
            </h5>
            <p class="mt-4 mb-3">Disturbed by continuous depletion of Shea Trees occasioned by Charcoal business and other domestic uses across Nigeria's Shea belt : The National Shea Products Association of Nigeria is pleased with the efforts of the National Institute For Oil Palm Research NIFOR Benin City ( Shea Research Sub Station Bida) in making  Shea seedlings available for States Ministries of Forestry and Environment, Forestry Projects, Local Government Councils, Tree Planting Enthusiasts, Environmental Support Organisations, Individuals and Community Based Organisations to utilize at a subsidized price.</p>
              <p class="mb-4">NIFOR with the mandate of developing Research on Shea tree has succeeded in nurturing seedlings that can adapt easily and start fruiting within 5 to 7 years thereby reducing it's gestation period significantly.</p>
              
             
            <h5 class="quote">
              Sustainable Shea production in Nigeria:Situating project spare Nigeria 
              <footer class="blockquote-footer mt-3"> NASPAN </footer>
            </h5>

            <p class="mb-4">it would be recalled that during the 2nd Annual Shea Conference held in August last year : NASPAN unveiled it's 10 Year Shea Tree Development Plan aimed at promoting Shea Plantations and Sustainable Parklands Management to nurture and protect Shea resources across the Shea belts of the Country for greater economic exploits.</p>

            <p class="mb-4">The Statement therefore calls on all interested buyers to contact Designated Officers of NIFOR in Bida on 08034357809 or NIFOR Coconut Research Sub Station in Avia - Badagry  Lagos State  or the National Publicity Secretary of NASPAN on 07031516061 for further inquiries.</p>

            <p>Sign</p>
            <p>
                Abubakar Bagudu Dallatun Kalgo<br>
                National Publicity Secretary<br>
                NASPAN.
            </p>

            <div class="social-share-blog mt-5">
              <ul class="column3 social m-0 p-0">
                <li>
                  <p class="m-0 mr-4">Share this post :</p>
                </li>
                <li><a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
            <div class="comments">
              <h3 class="aside-title ">Recent comments</h3>
              <div class="comments-grids">
              <?php
                $pid=intval($_GET['nid']); 
                $sts=1;
                $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
                while ($row=mysqli_fetch_array($query)) {
              ?>
                <div class="media-grid">
                  <div class="media">
                    <a class="comment-img" href="#"><img src="assets/images/naspan_user.jpg" class="img-fluid"
                        width="100px" alt="placeholder image"></a>
                    <div class="media-body comments-grid-right">
                      <h5><?php echo htmlentities($row['name']);?></h5>
                      <ul class="p-0 comment">
                        <li class=""><?php echo htmlentities($row['postingDate']);?></li>
                        <li>
                          <!-- <a href="#comment" class="replay"> Reply</a> -->
                        </li>
                      </ul>
                      <p><?php echo htmlentities($row['comment']);?> </p>

                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="leave-comment-form" id="comment">
              <h3 class="aside-title">Add Your Comment</h3>
              <form method="post" name="Comment">
              <input type="hidden" name="csrftoken" value='<?php echo $_SESSION["token"]?>'>
                <div class="input-grids">
                  <div class="row">
                    <div class="form-group col-lg-6">
                      <input type="text" name="name" class="form-control" placeholder="Name" required=""
                      <?php if(isset($_SESSION['login'])){ ?> value="<?php echo $_SESSION['fullname']; }?>">
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="email" name="email" class="form-control" placeholder="Email" required=""
                      <?php if(isset($_SESSION['login'])){ ?> value="<?php echo $_SESSION['login']; }?>">
                    </div> 
                    <!-- <div class="form-group col-lg-4">
                      <input type="text" name="Website" class="form-control" placeholder="Website">
                    </div> -->
                  </div>
                  <div class="form-group">
                    <textarea name="comment" class="form-control" placeholder="Your Comment" required=""></textarea>
                  </div>
                  
                </div>
                <div class="submit text-right">
                  <button class="btn btn-style btn-primary" name="submit" type="submit">Post Comment
                  </button></div>
              </form>
            </div>
         

          </div>
          <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
            <aside class="sidebar">
              <div class="sidebar-widget sidebar-blog-category">

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