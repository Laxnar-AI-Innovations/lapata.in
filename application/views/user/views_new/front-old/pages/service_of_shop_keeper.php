<div class="content">
<div class="container">
   <div class="row">
      <div class="col-xl-3 col-md-4 theiaStickySidebar">
         <div class="mb-4">
            <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
               <img alt="profile image" src="assets/img/user-placeholder.jpg" class="avatar-lg rounded-circle">
               <div class="ml-sm-3 ml-md-0 ml-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0 info-blk-style">
                  <h6 class="mb-0"><?php echo $this->session->userdata('name')?></h6>
                  <p class="text-muted mb-0">Member Since Sep 2021</p>
               </div>
            </div>
         </div>
         <div class="widget settings-menu">
            <ul>
               <li class="nav-item">
                  <a href="<?php echo base_url(); ?>home/service_by_user" class="nav-link ">
                  <i class="fas fa-chart-line"></i>
                  <span>Add Post</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo base_url(); ?>home/service_of_shop_keeper" class="nav-link active">
                  <i class="far fa-address-book"></i>
                  <span>My Services</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo base_url(); ?>home/complete_service_details" class="nav-link ">
                  <i class="far fa-calendar-check"></i>
                  <span>Booking List</span>
                  </a>
               </li>
               <!--<li class="nav-item">-->
               <!--   <a href="provider-settings" class="nav-link " >-->
               <!--   <i class="far fa-user"></i>-->
               <!--   <span>Profile Settings</span>-->
               <!--   </a>-->
               <!--</li>-->
               <!--<li class="nav-item">-->
               <!--   <a href="provider-wallet" class="nav-link " >-->
               <!--   <i class="far fa-money-bill-alt"></i>-->
               <!--   <span>Wallet re</span>-->
               <!--   </a>-->
               <!--</li>-->
               <!--<li class="nav-item">-->
               <!--   <a href="provider-subscription" class="nav-link " >-->
               <!--   <i class="far fa-calendar-alt"></i>-->
               <!--   <span>Subscription</span>-->
               <!--   </a>-->
               <!--</li>-->
               <!--<li class="nav-item">-->
               <!--   <a href="provider-availability"  class="nav-link " >-->
               <!--   <i class="far fa-clock"></i>-->
               <!--   <span>Availability</span>-->
               <!--   </a>-->
               <!--</li>-->
               <!--<li class="nav-item">-->
               <!--   <a href="provider-reviews"  class="nav-link " >-->
               <!--   <i class="far fa-star"></i>-->
               <!--   <span>Reviews</span>-->
               <!--   </a>-->
               <!--</li>-->
               <!--<li class="nav-item">-->
               <!--   <a href="provider-payment"  class="nav-link " >-->
               <!--   <i class="fas fa-hashtag"></i>-->
               <!--   <span>Payment</span>-->
               <!--   </a>-->
               <!--</li>-->
            </ul>
         </div>
      </div>
      <div class="col-xl-9 col-md-8">
         <h4 class="widget-title">My Services</h4>
         <ul class="nav nav-tabs menu-tabs">
            <li class="nav-item active">
               <a class="nav-link" href="my-services">Active Services</a>
            </li>
            <!--<li class="nav-item">-->
            <!--   <a class="nav-link" href="my-services-inactive">Inactive Services</a>-->
            <!--</li>-->
         </ul>
         <div class="row" id="dataList">
            <!-- we are fetching services of particular vendor -->
            <?php  
            $service_data=$this->db->query('select * from service where vendor_id='.$this->session->userdata('vendor_id').'')->result_array();

            foreach ($service_data as $key => $sd) { ?>
            <div class="col-lg-4 col-md-6">
               <div class="service-widget">
                  <div class="service-img">
                     <a href="service-preview/12?sid=c20ad4d76fe97759aa27a0c99bff6710">
                     <img class="img-fluid serv-img" alt="Service Image" src="<?php echo base_url().$sd['service_pro_img']; ?>">
                     </a>
                     <div class="item-info">
                        <div class="service-user">
                           <a href="javascript:void(0);">
                           <img src="<?php echo base_url().$sd['image']; ?>">
                           </a>
                           <span class="service-price">Rs. <?php echo $sd['service_cost']; ?></span>
                        </div>
                        <div class="cate-list">
                           <a class="bg-yellow" href="search/appliance"><?php echo $sd['category_name']; ?></a>
                        </div>
                     </div>
                  </div>
                  <div class="service-content">
                     <h3 class="title">
                        <a href="<?php echo base_url(); ?>home/more_details/<?php echo $sd['id']; ?>"><?php echo $sd['service_name']; ?></a>
                     </h3>
                     <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>                                            <span class="d-inline-block average-rating">(<?php echo $sd['star_rating']; ?>)</span>
                     </div>
                  </div>
               </div>
               <!-- Pagination Links -->
            </div>   
          <?php  }
            ?>
            
         </div>
      </div>
   </div>
</div>