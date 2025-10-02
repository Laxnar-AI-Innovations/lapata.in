<style>
    .swal2-title{
        font-size:larger;
        font-weight:100;
    }
    .swal2-html-container{
        overflow-x:hidden;
        overflow-y:auto;
        max-height:300px;
    }
    .locpop{
        width:80%;
        height:500px;
    }
</style>
        
        <div class="main-wrapper">

        <header class="header sticktop">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="<?php echo base_url(); ?>" class="navbar-brand d-none d-lg-block">
                                               <img src="assets1/img/logo.png" class="img-fluid" alt="Logo" style="width:100%;height:80px">
                                        </a>
                    <!--<a href="<?php echo base_url(); ?>" class="navbar-brand logo-small">-->
                    <!--    <img src="assets1/img/logo.png" class="img-fluid" alt="Logo" style="width:100%;height:100px">-->
                    <!--</a>-->
                    <?php
                        if(isset($_SESSION['city']))
                        {
                    ?>
                    <a class="text-light" style="font-family:poppins;position: absolute;right: 25px;bottom: 25px;" id="locationpopup"><?php echo $_SESSION['city']; ?> <i class="fa fa-chevron-down"></i></a>
                    <?php }else{ ?>
                        <a class="text-light" style="font-family:poppins;position: absolute;right: 25px;bottom: 25px;" id="locationpopup">Bangalore <i class="fa fa-chevron-down"></i></a>
                    <?php } ?>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header my-5">
                        <a href="<?php echo base_url(); ?>" class="menu-logo">
                            <img src="assets1/img/logo.png" class="img-fluid" alt="Logo" style="width:100%;height:100px">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
					                <!-- when vendor login -->
                          <?php 
                              if($this->session->userdata('vendor_login') == 'yes'){ ?>
                             <li><a href="<?php echo base_url(); ?>home/service_by_user">Add Post Detail</a></li>
                               
                               <li><a href="<?php echo base_url(); ?>home/complete_service_details">Complete Service Details</a></li>


                             <li class="has-submenu">
                            <a href="javascript:;">
                              <?php echo $this->session->userdata('name')?>
                              <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu lang-blk">
                                <li> <a href="<?php echo base_url(); ?>home/service_of_shop_keeper" >
                                            My services</a></li>
                          <li> <a href="<?php echo base_url(); ?>" >
                                            Profile</a></li>
                                                            </ul>
                        </li>
                            <li>
                              <a href="<?php echo base_url();?>home/logout">logout</a>
                            </li>
                            <?php  } else if($this->session->userdata('user_login') == 'yes'){
                          ?>
                            <li><a href="<?php echo base_url(); ?>"> Home</a></li>
                            <li><a href="<?php echo base_url(); ?>home/faq"> FAQ</a></li>
                            
                            <!--<li><a href="<?php echo base_url(); ?>home/blog_details">Blog Details</a></li>-->
                             <li class="has-submenu">
                            <a href="javascript:;">
                              <?php echo $this->session->userdata('first_name')?>
                              <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu lang-blk">
                              
                          <li> <a href="<?php echo base_url(); ?>" >
                                            Profile</a></li>
                        <li> <a href="<?php echo base_url(); ?>home/my_booking" >
                                            My bookings</a></li>
                                              <li> <a href="<?php echo base_url(); ?>home/logout" >
                                            logout</a></li>
                                                            </ul>
                        </li>
                        <?php } else { ?>
                            
                            <li><a href="<?php echo base_url(); ?>"> Home</a></li>
                            <li><a href="<?php echo base_url(); ?>home/faq"> FAQ</a></li>
                            
                            <li><a href="<?php echo base_url(); ?>home/blog">Blog </a></li>
                            <li><a href="<?php echo base_url(); ?>create-account">Register Youself</a></li>
                            <li><a href="<?php echo base_url(); ?>home/shop_keeper_info">Open A Franchisee</a></li>
                            <li><a href="<?php echo base_url(); ?>home/sales">For SALE </a></li>
                            
                        <!--<li class="has-submenu">-->
                        <!--    <a href="javascript:;">-->
                        <!--      Page-->
                        <!--      <i class="fas fa-chevron-down"></i></a>-->
                        <!--    <ul class="submenu lang-blk">-->
                             
                        <!--        <li> <a href="<?php echo base_url(); ?>login" >-->
                        <!--                    User Login</a></li>-->
                        <!--  <li> <a href="<?php echo base_url(); ?>home/login_form" >-->
                        <!--                    Vendor Login</a></li>-->
                        <!--                                    </ul>-->
                        <!--</li>-->
                        <ul class="nav header-navbar-rht">
                                            <li class="nav-item">
                            <a class="nav-link header-login" href="<?php echo base_url(); ?>login" >Login</a>
                        </li>
                        
                    
                                    </ul>
                                <?php } ?>
                                            </ul>		 
                </div>		 
                
            </nav>
        </header>

