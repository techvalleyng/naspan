<?php
session_start();
include('includes/header.php');
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['adminlogin'])==0)
  { 
header('location:index.php');
}
if($_GET['action']='edit')
  {
if(isset($_POST['edit']))
  {
  
    $membertypeid=intval($_GET['mtid']);
    $membertype=$_POST['membertype'];
    $fee=$_POST['fee'];
    $query=mysqli_query($con,"update tblmembertype set memberType='$membertype', fee='$fee' where id='$membertypeid'");
    if($query)
    {
    $msg="membertype Updated ";
    // header('location:../page-member-type');
    }
    else{
    $error="Something went wrong . Please try again.";    
    } 
  }
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
        <p>New Membership Type</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">membership type</a></li>
      </ul>
    </div>
    <div class="row">
      
      <div class="col-md-12">
        <div class="tile">

          <div class="tile-title-w-btn">
            <h3 class="title">New Membership Type</h3>
            <!-- <p><a class="btn btn-primary icon-btn" href=""><i class="fa fa-plus"></i> </a></p> -->
          </div>
          <div class="tile-body">
          <?php

if(isset($_POST['galleryTitle'])){
  $title = $_POST['galleryTitle'];
  $caption = $_POST['galleryCaption'];
  $galleryid = rand();
  $post = $_POST['selectPost'];
  $imgsrc = "";
  $created_at = date('Y-m-d H:i:s');
  $userid = $_SESSION['adminlogin'];
  $uploadOk = 1;

  $target_dir = "assets/images/gallery/";
  
  $countfiles = count($_FILES['galleryImages']['name']);
  for($i=0;$i<$countfiles;$i++){
      $target_file = $target_dir . basename($_FILES["galleryImages"]["name"][$i]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
      // Check file size
      if ($_FILES["galleryImages"]["size"][$i] > 50000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }

      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }

      // Check if file already exists
      if (file_exists("../".$target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["galleryImages"]["tmp_name"][$i], "../".$target_file)) {
            $status =  "The file ". htmlspecialchars( basename( $_FILES["galleryImages"]["name"][$i])). " has been uploaded.";
            if (!mysqli_query($con,"INSERT INTO tblgallery(title, img_caption, post_id, gallery_id, img_src, created_at, `user_id`)
            VALUES ('$title', '$caption', $post, $galleryid, '$target_file', '$created_at', '$userid')")) {
              // echo("Error description: " . mysqli_error($con));
              $addStatus = "Error";
            }else{
              $addStatus = "Gallery Added";
            }
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
      }    
      
  }
   
}

if(isset($addStatus)){
  echo $addStatus;
}
?>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label">Gallery Title</label>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Gallery Title</label>
                  <div class="input-group">
                    <input class="form-control" id="galleryTitle" name="galleryTitle" type="text" placeholder="Gallery Title">
                  </div>
                </div>
                <div class="form-group">
                  <label for="selectPost">Select Post</label>
                  <select class="form-control" id="selectPost" name="selectPost">
                  <?php
                    $query=mysqli_query($con,"select * from tblposts");
                    $rowcount=mysqli_num_rows($query);
                    if($rowcount==0){
                  ?>
                    <option value="0">Independent Gallery</option>
                  <?php 
                    } else {
                    
                      echo '<option value="0">Independent Gallery</option>';
                      $count = 1;
                      while($row=mysqli_fetch_array($query))
                    { 
                  ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['PostTitle'] ?></option>
                  <?php $count = $count + 1; }  }?>
                  </select>
                </div>
                
                <label class="control-label">Image Caption</label>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Image Caption</label>
                  <div class="input-group">
                    <input class="form-control" id="galleryCaption" name="galleryCaption" type="text" placeholder="Image Caption">
                  </div>
                </div>
                <label class="control-label">Gallery Images</label>
                <div class="form-group">
                  <label class="sr-only" for="galleryImages">Gallery Images</label>
                  <div class="input-group">
                    
                    <div class="upload__box">
                      <div class="upload__btn-box">
                        <label class="upload__btn">
                          <p>Upload images</p>
                          <input name="galleryImages[]" id="galleryImages" type="file" multiple  data-max_length="20" class="upload__inputfile">
                        </label>
                      </div>
                      <div class="upload__img-wrap"></div>
                    </div>
                  </div>
                </div>
                <div class="form-group align-self-end">
                  <button class="btn btn-primary" type="submit" name="add"><i class="fa fa-plus"></i>Add Album</button>
                </div>
              </div>
            </form>
            
          </div>
        </div>
      </div>
      <div class="col-md-12" id="edit-membertype">
        <div class="tile">

          <div class="tile-title-w-btn">
            <h3 class="title">Gallery List</h3>
            <!-- <p><a class="btn btn-primary icon-btn" href=""><i class="fa fa-plus"></i> </a></p> -->
          </div>
          <!-- <div class="tile-body">
            <?php
              $membertypeid=intval($_GET['mtid']);
              $query=mysqli_query($con,"select * from tblmembertype where id='$membertypeid'");
              while($row=mysqli_fetch_array($query)){
            ?>
            <form action=""  method="post">
              <div class="form-group">
                <label class="control-label">Membership Type</label>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Member type</label>
                  <div class="input-group">
                    <input class="form-control" id="exampleInputAmount" name="membertype" type="text" placeholder="Member Type" value="<?php echo htmlentities($row['memberType']);?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Fee (NGN)</label>
                  <div class="input-group">
                    <input class="form-control" id="exampleInputAmount" name="fee" type="number" placeholder="Membership Fee" value="<?php echo htmlentities($row['fee']);?>">
                  </div>
                </div>
                <div class="form-group align-self-end">
                  <button class="btn btn-primary" type="submit" name="edit"><i class="fa fa-plus"></i>Update</button>
                </div>
              </div>
            </form>
            <?php } ?>
          </div> -->
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    
  </main>
  <!-- Essential javascripts for application to work-->
  <?php
    include('includes/footer.php');
  ?>
  <style>
  .upload__box {
        padding: 40px;
        }
        .upload__inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
        }
        .upload__btn {
        display: inline-block;
        font-weight: 600;
        color: #fff;
        text-align: center;
        min-width: 116px;
        padding: 5px;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid;
        background-color: #009688;
        border-color: #009688;
        border-radius: 10px;
        line-height: 26px;
        font-size: 14px;
        }
        .upload__btn:hover {
        background-color: unset;
        color: #009688;
        transition: all 0.3s ease;
        }
        .upload__btn-box {
        margin-bottom: 10px;
        }
        .upload__img-wrap {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -10px;
        }
        .upload__img-box {
        width: 200px;
        padding: 0 10px;
        margin-bottom: 12px;
        }
        .upload__img-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
        }
        .upload__img-close:after {
        content: "✖";
        font-size: 14px;
        color: white;
        }

        .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        padding-bottom: 100%;
        }
        </style>
        <script>
        jQuery(document).ready(function () {
        ImgUpload();
        });

        function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];

        $(".upload__inputfile").each(function () {
          $(this).on("change", function (e) {
            imgWrap = $(this).closest(".upload__box").find(".upload__img-wrap");
            var maxLength = $(this).attr("data-max_length");

            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
            var iterator = 0;
            filesArr.forEach(function (f, index) {
              if (!f.type.match("image.*")) {
                return;
              }

              if (imgArray.length > maxLength) {
                return false;
              } else {
                var len = 0;
                for (var i = 0; i < imgArray.length; i++) {
                  if (imgArray[i] !== undefined) {
                    len++;
                  }
                }
                if (len > maxLength) {
                  return false;
                } else {
                  imgArray.push(f);

                  var reader = new FileReader();
                  reader.onload = function (e) {
                    var html =
                      "<div class='upload__img-box'><div style='background-image: url(" +
                      e.target.result +
                      ")' data-number='" +
                      $(".upload__img-close").length +
                      "' data-file='" +
                      f.name +
                      "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                    imgWrap.append(html);
                    iterator++;
                  };
                  reader.readAsDataURL(f);
                }
              }
            });
          });
        });

        $("body").on("click", ".upload__img-close", function (e) {
          var file = $(this).parent().data("file");
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i].name === file) {
              imgArray.splice(i, 1);
              break;
            }
          }
          $(this).parent().parent().remove();
        });
        }

  </script>

  