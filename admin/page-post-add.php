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
    <!-- Main Quill library -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.quilljs.com/1.3.6/quill.snow.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">


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
                <p>Add Post</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">post</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">New Post </h3>
                    <div class="tile-body">
                        <form method="post" enctype="multipart/form-data" action="server/post-add" name="postAddForm" id="postAddForm">
                            <div class="form-group">
                                <label class="control-label">Post Title</label>
                                <input class="form-control" type="text" placeholder="Enter post Title" name="posttitle">
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label">Post Descriptioin</label>
                                <textarea class="form-control" rows="4" placeholder="Enter Meta Description"></textarea>
                            </div> -->
                            <div class="form-group">
                                <label class="control-label">Post Picture/Thumbnail</label>
                                <input class="form-control" type="file" name="postimage">
                            </div>
                            <div class="form-group">
                                <label for="post_cat">Post Category</label>
                                <select class="form-control" id="post_cat" name="category">
                                    <option value="news">News/Events</option>
                                    <option value="articles">Articles</option>
                                    <option value="press_release">Press Release</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Post Description</label>
                                <div id="content" style="height: 400px"></div>
    <input type="hidden" id="editor" name="postdescription" class="form-control">
                            </div>
                            
                            <button class="btn btn-primary" type="submit" name="add"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit Post</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <?php
    include('includes/footer.php');
    ?>
    <!-- Page specific javascripts-->
    <script type="text/javascript">
        // var container = document.getElementById('editor');
        // var editor = new Quill(container);
        var quill = new Quill('#content', {
            modules: {
                
                toolbar: [
                    [{ header: [1, 2, 3, 4, 5, 6, false] }],
                    ['bold', 'italic', 'underline'],
                    ['link', 'blockquote', 'code-block', 'image'],
                    [{ list: 'ordered' }, { list: 'bullet' }]
                ]
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'  // or 'bubble'
        });
    $('#postAddForm').submit(function() {
        $('#editor').val(quill.root.innerHTML);
        alert($('#editor').val());
    });

    </script>