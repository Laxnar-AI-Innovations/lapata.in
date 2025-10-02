<style>
    .btn_dial_special{
        position: relative;
    color: #fff;
    font-size: 16px;
    line-height: 26px;
    font-weight: 600;
    padding: 8px 35px;
    border-radius: 3px;
    background-color: #ffb300;
    box-shadow: 0 6px 9.25px rgb(194 191 255 / 65%);
    }
</style>
<div class="page-wrapper">

    <!-- Preloader -->
    <!--<div class="preloader"></div>-->
    
    <!-- Main Header-->
    <header class="main-header header-style-three">
        
        <!-- Main box -->
        <div class="main-box">
            <div class="logo-box">
                <div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/newlogo.png" alt="" style="height:80px;" title=""></a></div>

                <!-- Search Box -->
                <div class="search-box">
                    <!-- Search Backdrop -->
                    <div class="search-backdrop"></div>

                    <!--<div class="header-search-form">-->
                    <!--    <input type="text" name="header-search" id="cusom-search" data-list=".search-list" placeholder="What are you looking for?">-->
                    <!--    <span class="search-btn"><i class="flaticon-magnifying-glass"></i></span>    -->
                    <!--</div>-->

                    <!--<div class="search-list">-->
                    <!--    <div class="search-item region">-->
                    <!--        <i class="icon flaticon-placeholder"></i>-->
                    <!--        <div class="text">City Of London </div>-->
                    <!--        <span class="cat">Region</span>-->
                    <!--        <a href="listing-single.html" class="overlay-link"></a>-->
                    <!--    </div>-->
                    <!--    <div class="search-item region">-->
                    <!--        <i class="icon flaticon-placeholder"></i>-->
                    <!--        <div class="text">City of Westminster </div>-->
                    <!--        <span class="cat">Region</span>-->
                    <!--        <a href="listing-single.html" class="overlay-link"></a>-->
                    <!--    </div>-->
                    <!--    <div class="search-item region">-->
                    <!--        <i class="icon flaticon-placeholder"></i>-->
                    <!--        <div class="text">Chelsea District </div>-->
                    <!--        <span class="cat">Region</span>-->
                    <!--        <a href="listing-single.html" class="overlay-link"></a>-->
                    <!--    </div>-->
                    <!--    <div class="search-item listing">-->
                    <!--        <i class="icon flaticon-placeholder"></i>-->
                    <!--        <div class="text">Top Picks </div>-->
                    <!--        <span class="cat">Featured Listings</span>-->
                    <!--        <a href="listing-single.html" class="overlay-link"></a>-->
                    <!--    </div>-->
                    <!--    <div class="search-item shopping">-->
                    <!--        <i class="icon flaticon-placeholder"></i>-->
                    <!--        <div class="text">Shopping </div>-->
                    <!--        <span class="cat">Category</span>-->
                    <!--        <a href="listing-single.html" class="overlay-link"></a>-->
                    <!--    </div>-->
                    <!--    <div class="search-item food">-->
                    <!--        <i class="icon flaticon-placeholder"></i>-->
                    <!--        <div class="text">Local Food </div>-->
                    <!--        <span class="cat">Category</span>-->
                    <!--        <a href="listing-single.html" class="overlay-link"></a>-->
                    <!--    </div>-->
                    <!--    <div class="search-item prize">-->
                    <!--        <i class="icon flaticon-placeholder"></i>-->
                    <!--        <div class="text">Free Entrance </div>-->
                    <!--        <span class="cat">Tag</span>-->
                    <!--        <a href="listing-single.html" class="overlay-link"></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation" id="navbar">
                        <li class="current ">
                            <a href="<?php echo base_url(); ?>"><span>My Home</span></a>
                            
                        </li>
                        
                         <li><a href="<?php echo base_url(); ?>home/worker">Add Post</a></li>
                                <li><a href="<?php echo base_url(); ?>Home/my_bookings">My Bookings</a></li>
                                <li><a href="#">My Jobs</a></li>
                                <li><a href="<?php echo base_url();?>home/mypost">My Post</a></li>
                                <li><a href="#">Contact</a></li>
                                <?php  	if($this->session->userdata('user_login') != 'yes'){ ?>
                                <li><a href="<?php echo base_url(); ?>home/register">Register</a></li>
                                <li><a href="<?php echo base_url(); ?>home/login">Login</a></li>
                            <?php } else {?>
                            <li style="color:white">Hi <?php echo 
                            $this->session->userdata('fname') ; ?></li>
                            <li><a href="<?php echo base_url(); ?>home/logout">Logout</a></li>
                            <?php } ?>
                        
                       
                    </ul>
                </nav>
                <!-- Main Menu End-->

              
            </div>
        </div>

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="<?php echo base_url(); ?>" style="color:gold;"><img src="<?php echo base_url(); ?>images/newlogo.png" alt="" title=""> </a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">

                <div class="outer-box">
                    <!-- Search Btn -->
                    <div class="search-box">
                        <button class="search-btn mobile-search-btn"><i class="flaticon-magnifying-glass"></i></button>
                    </div>

                    <!-- Cart btn -->
                    <!--<div class="cart-btn">-->
                    <!--    <a href="shopping-cart.html"><i class="icon flaticon-shopping-bag"></i> <span class="count">2</span></a>-->
                    <!--</div>-->

                    <!-- Login/Register -->
                    <div class="login-box"> 
                        <a href="login.html" class="call-modal"><span class="flaticon-user"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <!--<div id="nav-mobile"></div>-->

        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop"></span>
            
            <div class="search-inner">
                <button class="close-search"><span class="fa fa-times"></span></button>
                <form method="post" action="https://softcircles.net/aqib/html_listdo/blog-showcase.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Header Search -->

    </header>
    <!--End Main Header -->
