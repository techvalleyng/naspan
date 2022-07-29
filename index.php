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
  <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-left">
                    <p></p>
                    <h5>STREGHTENING NIGERIA'S SHEA INDUSTRY​</h5>
                    <!--<a href="about" class="btn btn-white">Read More</a>-->
                  </div>
                </div>
              </div>
              <div class="banhny-w3grids">
                <div class="banhny-w3grids-1">
                  <img src="assets/images/NASPAN-pure-shea-nut.png" class="img-curve img-fluid" alt="" />
                  <h4><a href="#" class="hnys-title">Sustainable Shea</a></h4>
                </div>
                <div class="banhny-w3grids-1">
                  <img src="assets/images/NASPAN-shea_butter.jpg" class="img-curve img-fluid" alt="" />
                  <h4><a href="#" class="hnys-title">Empowering People</a></h4>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info  banner-view banner-top1 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-left">
                    <!-- <p>NASPAN</p> -->
                    <h5>Promoting sustainable shea production in Nigeria</h5>
                    <!--<a href="about" class="btn btn-white">Read More</a>-->
                  </div>
                </div>
              </div>
              <div class="banhny-w3grids">
                <div class="banhny-w3grids-1">
                  <img src="assets/images/NASPAN-pure-shea-nut.png" class="img-curve img-fluid" alt="" />
                  <h4><a href="#" class="hnys-title">Strenghtening Production</a></h4>
                </div>
                <div class="banhny-w3grids-1">
                  <img src="assets/images/NASPAN-SHEA-BUTTER-TREE-OF-LIFE-PURU-100-natural-vegan-1.jpg" class="img-curve img-fluid" alt="" />
                  <h4><a href="#" class="hnys-title">Empowering People</a></h4>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top2 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-left">
                    <!-- <p>NASPAN</p> -->
                    <h5>Empowering local women in the industry</h5>
                    <!--<a href="about" class="btn btn-white">Read More</a>-->
                  </div>
                </div>
              </div>
              <div class="banhny-w3grids">
                <div class="banhny-w3grids-1">
                  <img src="assets/images/NASPAN-shea_butter.jpg" class="img-curve img-fluid" alt="" />
                  <h4><a href="#" class="hnys-title">Strenghtening Shea</a></h4>
                </div>
                <div class="banhny-w3grids-1">
                  <img src="assets/images/NASPAN-Shea-nut.jpg" class="img-curve img-fluid" alt="" />
                  <h4><a href="#" class="hnys-title">Sustainable Production</a></h4>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top3 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-left">
                    <!-- <p>NASPAN</p> -->
                    <h5>Promoting Agriculture and Industrialisation</h5>
                    <!--<a href="about" class="btn btn-white">Read More</a>-->
                  </div>
                </div>
              </div>
              <div class="banhny-w3grids">
                <div class="banhny-w3grids-1">
                  <img src="assets/images/NASPAN-pure-shea-nut.png" class="img-curve img-fluid" alt="" />
                  <h4><a href="#" class="hnys-title">Adequate Training</a></h4>
                </div>
                <div class="banhny-w3grids-1">
                  <img src="assets/images/NASPAN-shea_butter.jpg" class="img-curve img-fluid" alt="" />
                  <h4><a href="#" class="hnys-title">Expert & Professional Farm</a></h4>
                </div>
              </div>
            </div>
          </li>
        </div>
      </div>
    </div>
  </section>
  <!-- /main-slider -->
  <!--/grids-->
  <section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5">
      <div class="row bottom-ab-grids align-items-center">
        <div class="col-lg-4 bottom-ab-left pr-lg-5">
          <h6 class="sub-title">About Us</h6>
          <h3 class="hny-title">
            A New Dawn in Shea</h3>
          <p class="my-3 pr-lg-4">Shea has gained a firm foothold in the cosmetic industry. Recent innovations and highly functional derivatives are now being introduced into cosmetic products with strong consumer appeal. Participants will discuss new trends and advancement in cosmetic formulation and explore latest technologies.</p>
          <a href="about" class="btn btn-style btn-secondary mt-4">Read More</a>
        </div>
        <div class="col-lg-4 bottom-ab-right mt-lg-0 mt-5">
          <img src="assets/images/NASPAN-SHEA-BUTTER-TREE-OF-LIFE-PURU-100-natural-vegan-1.jpg" class="img-curve img-fluid" alt="" />
        </div>
        <div class="col-lg-4 bottom-ab-right mt-lg-0 mt-5">
          <!-- Popular Post Widget-->
          <div class="sidebar-widget popular-posts">
            <div class="sidebar-title">
              <h4>Latest Updates</h4>
            </div>
            <?php 
                  $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblposts.Category,tblposts.PostDetails, tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT 3");
                  while ($row=mysqli_fetch_array($query)) {
                ?>
                <article class="post">
                  <figure class="post-thumb"><img src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>"
                        alt="<?php echo htmlentities($row['posttitle']);?>"></figure>
                  <div class="text"><a href="blog-single?nid=<?php echo htmlentities($row['pid'])?>">
                      <?php echo htmlentities(mb_strimwidth($row['posttitle'], 0, 50, "..."));?></a>
                  </div>
                  <div class="post-info"><?php echo htmlentities($row['postingdate']);?></div>
                </article>
                <hr>
                <?php } ?>
                
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//grids-->
  <!-- /Core values -->
  <section class="w3l-cta5">
    <div class="call-to-action-5 py-5">
      <div class="container py-lg-5">
        <div class="call-to-action-5-content text-center">
          <h3 class="hny-title">Our Core Values</h3>
          <div class="three-grids row">
            <div class="col-lg-4 col-md-6 grid mt-md-0 mt-4">
              <div class="icon">
                <span class="fa fa-flask" aria-hidden="true"></span>
              </div>
              <div class="icon-info">
                <h4><a href="#">Drive Industry Development</a></h4>
                <p>NASPAN members commit to working with all stakeholders in the shea value chain to drive the development of the industry in Nigeria</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 grid mt-md-0 mt-4">
              <div class="icon">
                <span class="fa fa-lemon-o" aria-hidden="true"></span>
              </div>
              <div class="icon-info">
                <h4><a href="#">Best Practice</a></h4>
                <p>We commit to building trust and respect throughout the supply chain. Members commit to fair business practice in trade as it applies nationally and globally today</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 grid">
              <div class="icon">
                <span class="fa fa-pagelines" aria-hidden="true"></span>
              </div>
              <div class="icon-info">
                <h4><a href="#">Improve Quality</a></h4>
                <p>We commit to improving the quality of shea nuts produced by pickers across the shea zones and states in Nigeria</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //Core values -->
  <!--/grids2-->
  <section class="w3l-how-grids-3" id="how">
    <div class="container">
      <div class="w3l-header mb-md-5 mb-4">
        <h3 class="hny-title text-center">Our Partners</h3>
      </div>
      <div class="row bottom-ab-grids align-items-center">
        <div class="col-lg-2 bottom-ab-left">
          <div class="grdhny-info">
            <img src="assets/images/naspan_partner_gsa.png" class="img-curve img-fluid" alt="NASPAN_PARTNER_GSA" />
          </div>
        </div>
        <div class="col-lg-2 bottom-ab-right my-lg-0 my-5">
          <div class="grdhny-info">
            <img src="assets/images/naspan_partner_moa.jpg" class="img-curve img-fluid" alt="NASPAN Ministry of Agric" />
          </div>
        </div>
        <div class="col-lg-2 bottom-ab-right my-lg-0 my-5">
          <div class="grdhny-info">
            <img src="assets/images/naspan_partner_mofITI.png" class="img-curve img-fluid" alt="NASPAN partner MoITI" />
          </div>
        </div>
        <div class="col-lg-2 bottom-ab-right my-lg-0 my-5">
          <div class="grdhny-info">
            <img src="assets/images/naspan-partner-nepc.png" class="img-curve img-fluid" alt="NASPAN Partner UNIDO" />
          </div>
        </div>
        <div class="col-lg-2 bottom-ab-right my-lg-0 my-5">
          <div class="grdhny-info">
            <img src="assets/images/naspan-partner-nscepa.png" class="img-curve img-fluid" alt="NASPAN Ministry of Agric" />
          </div>
        </div>
        <div class="col-lg-2 bottom-ab-right my-lg-0 my-5">
          <div class="grdhny-info">
            <img src="assets/images/naspan_partner_mofITI.png" class="img-curve img-fluid" alt="NASPAN partner MoITI" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//grids2-->
    <!-- testimonials -->
    <section class="w3l-clients" id="clients">
      <!-- /grids -->
      <div class="cusrtomer-layout py-5">
        <div class="container py-lg-4 py-md-3 pb-lg-0">
          <div class="heading text-center mx-auto">
            <h3 class="hny-title mb-md-5 mb-4">What People Say About NASPAN</h3>
          </div>
          <!-- /grids -->
          <div class="testimonial-width mt-5">
            <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
              <div class="item">
                <div class="testimonial-content">
                  <div class="testimonial">
                    <blockquote>
                      <span class="fa fa-quote-left" aria-hidden="true"></span>
                     Your Leadership at NASPAN has moved the association forward!!!
                    </blockquote>
                    <div class="testi-des">
                      <div class="test-img"><img src="assets/images/naspan_user.jpg" class="img-fluid" alt="client-img">
                      </div>
                      <div class="peopl align-self">
                        <h3>Phoebe Clerk</h3>
                        <p class="indentity">Phoebe Clerk</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-content">
                  <div class="testimonial">
                    <blockquote>
                      <span class="fa fa-quote-left" aria-hidden="true"></span>
                      I believe with the selfless work of Mr President and his team he can approach the National Assembly for legislation on the felling of trees
                    </blockquote>
                    <div class="testi-des">
                      <div class="test-img"><img src="assets/images/naspan_user.jpg" class="img-fluid" alt="client-img">
                      </div>
                      <div class="peopl align-self">
                        <h3>NASPAN Member</h3>
                        <p class="indentity"> City</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-content">
                  <div class="testimonial">
                    <blockquote>
                      <span class="fa fa-quote-left" aria-hidden="true"></span>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae integer sit amet .
                    </blockquote>
                    <div class="testi-des">
                      <div class="test-img"><img src="assets/images/naspan_user.jpg" class="img-fluid" alt="client-img">
                      </div>
                      <div class="peopl align-self">
                        <h3>Name</h3>
                        <p class="indentity">City</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-content">
                  <div class="testimonial">
                    <blockquote>
                      <span class="fa fa-quote-left" aria-hidden="true"></span>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae integer sit amet .
                    </blockquote>
                    <div class="testi-des">
                      <div class="test-img"><img src="assets/images/naspan_user.jpg" class="img-fluid" alt="client-img">
                      </div>
                      <div class="peopl align-self">
                        <h3>Name</h3>
                        <p class="indentity"> City</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-content">
                  <div class="testimonial">
                    <blockquote>
                      <span class="fa fa-quote-left" aria-hidden="true"></span>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae integer sit amet .
                    </blockquote>
                    <div class="testi-des">
                      <div class="test-img"><img src="assets/images/naspan_user.jpg" class="img-fluid" alt="client-img">
                      </div>
                      <div class="peopl align-self">
                        <h3>Name</h3>
                        <p class="indentity"> City</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-content">
                  <div class="testimonial">
                    <blockquote>
                      <span class="fa fa-quote-left" aria-hidden="true"></span>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae integer sit amet .
                    </blockquote>
                    <div class="testi-des">
                      <div class="test-img"><img src="assets/images/naspan_user.jpg" class="img-fluid" alt="client-img">
                      </div>
                      <div class="peopl align-self">
                        <h3>Name</h3>
                        <p class="indentity"> City</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
            </div>
          </div>
        </div>
        <!-- /grids -->
      </div>
      <!-- //grids -->
    </section>
    <!-- //testimonials -->
  <!--/w3l-bottom-->
  <section class="w3l-bottom py-5">
    <div class="container py-md-4 py-3 text-center">
      <div class="row my-lg-4 mt-4">
        <div class="col-lg-9 col-md-10 ml-auto">
          <div class="subscribe ml-auto">
            <div class="header-section text-left">
              <h3 class="hny-title two">Become a Member</h3>
              <h4 class="my-2"> Don't miss the door to unlimited opportunities</h4>
            </div>
            <form action="#" method="post" class="subscribe-wthree pt-lg-3 mt-4">
              <div class="flex-wrap subscribe-wthree-field">
                <button class="btn btn-style btn-primary" type="submit">REGISTER</button>
              </div>
              
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//w3l-bottom-->

  <!--/w3l-footer-29-main-->
  <?php
  include('includes/footer.php');
  ?>
  <!-- //footer-29 block -->
  <?php
  include('includes/scripts.php');
  ?>