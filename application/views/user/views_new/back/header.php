<style>
    .preloader {
  display: none;
  justify-content: center;
  align-items: center;
  height: 100vh;
  width: 100%;
  background: rgb(23, 22, 22);
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;
  transition: opacity 0.3s linear;
}

.reset{
    position: relative;
    color: #fff;
    font-size: 16px;
    line-height: 16px;
    font-weight: 600;
    padding: 12px 35px;
    border-radius: 25px;
}

.next{
    background: #1e88e5!important;
    position: relative;
    color: #fff;
    font-size: 16px;
    line-height: 16px;
    font-weight: 600;
    padding: 12px 35px;
    border-radius: 25px;
}

.save{
    position: relative;
    color: #fff;
    font-size: 16px;
    line-height: 16px;
    font-weight: 600;
    padding: 12px 35px;
    border-radius: 25px;
    background-color:#008000!important;
}
</style>
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Missing Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url(); ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>admin/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->