<header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="index">
            <img src="assets/images/naspan_logo.jpg" style="height: 40px;">
            NAS<span>PAN</span>
          </a></h1>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                About<span class="fa fa-angle-down"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <a class="dropdown-item" href="about">About Us</a>
                <a class="dropdown-item" href="industry_overview">Industry Overview</a>
                <a class="dropdown-item" href="executives">Executive Members</a>
                <a class="dropdown-item" href="strategic_focus">Strategic Focus</a>
                <a class="dropdown-item" href="members_list">Members List</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Media <span class="fa fa-angle-down"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <a class="dropdown-item" href="blog">News & Event</a>
                <a class="dropdown-item" href="gallery">Gallery</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Contact</a>
            </li>
            <?php
            if(isset($_SESSION['login']))
            {
            ?>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle align-center img-fluid" src="assets/images/naspan_user.jpg" alt="user_logo" width="50px"><?php echo $_SESSION['fname'];?> <span class="fa fa-angle-down"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <a class="dropdown-item" href="member_dashboard">Dashboard</a>
                <a class="dropdown-item" href="profile">Profile</a>
                <a class="dropdown-item" href="server/logout">Logout</a>
              </div>
            </li>
            <?php
            }else{
            ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Member Area <span class="fa fa-angle-down"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <a class="dropdown-item" href="signin">Sign In</a>
                <a class="dropdown-item" href="become">Register</a>
                <a class="dropdown-item" href="membership">Membership</a>
              </div>
            </li>
          </ul>
        </div>
        
        <?php } ?>
        <div class="d-lg-block d-none">
          <a href="become" class="btn btn-style btn-secondary ml-lg-3">Become a Member</a>
        </div>
        <div class="d-lg-block d-none">
          <a href="conference.php" class="btn btn-style btn-secondary ml-lg-3">Conference 2022</a>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>