
<!-- get data from table using service id -->
<?php 
    $get_service_data=$this->db->query('select * from service where id='.$service_id.'')->result_array();
    foreach ($get_service_data as $key => $gsd) {
        $service_name=$gsd['service_name'];
        $city=$gsd['city'];
        $state=$gsd['state'];
        $country=$gsd['country'];
        $category=$gsd['category_name'];
        $image=$gsd['image'];
        $cost=$gsd['service_cost'];
        $details=$gsd['details'];
        $service_provider_img=$gsd['service_pro_img'];
        $email=$gsd['email'];
        $phone_num=$gsd['phone_no'];
        $service_provider=$gsd['service_provider'];
    }
?>

<div class="page-wrapper">

    <div class="content container-fluid">
        <div class="text-right mb-3">
            <a href="#" class="btn btn-primary">Back</a>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="service-header">
                            <div class="service-inner">
                                <h2><?php echo $service_name; ?></h2>
                                <address class="service-location"><i class="fas fa-location-arrow"></i> <?php echo $city; ?>, <?php echo $state; ?>, <?php echo $country; ?></address>
                                <div class="rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 
                            <span class="d-inline-block average-rating">(0)</span>
                                </div>
                                <div class="service-cate">
                                    <a href="javascript:void(0);"><?php echo $category; ?></a>
                                </div>
                            </div>
                            <!--<div class="service-amount">-->
                            <!--    <span><?php echo $cost; ?></span>-->
                            <!--</div>-->
                        </div>
                        <div class="service-description">
                            <div class="service-images service-carousel">
                                <div class="images-carousel owl-carousel owl-theme">
                                <div class="item"><img src="<?php echo base_url().$image; ?>" style="height: 400px"  alt="" class="img-fluid"></div>                               </div>
                            </div>
                            <h5 class="card-title"><?php echo $details; ?></h5>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                 <div class="sidebar-widget widget">
                    <div class="service-amount">
                        <span>INR <?php echo $cost; ?></span>
                    </div>
                    <!--<div class="service-book">-->
                    <!--                                <a href="<?php echo base_url('home/booking_ser/'.$service_id.''); ?>" class="btn btn-primary" > Book Service </a>-->
                    <!--                                                </div>-->
                </div>
                <div class="card provider-widget clearfix">
                    <div class="card-body">
                        <h5 class="card-title">Service Provider</h5>
                
                                                <div class="about-author">
                            <div class="about-provider-img">
                                <div class="provider-img-wrap">
                                    </div>                                                  <a href="javascript:void(0);"><img class="img-fluid rounded-circle" alt="" src="<?php echo base_url(). $service_provider_img; ?>" style="height: 100px;width: 100%"></a>
                                </div>
                            </div>
                            <div class="provider-details">
                                    <a href="javascript:void(0);" class="ser-provider-name"><?php echo $service_provider;?></a>
                                                <p class="last-seen">                       <i class="fas fa-circle"></i> Last seen: &nbsp;
                                                29 days 
                                                                                                                                                 ago
                                                </p>                                        <p class="text-muted mb-1">Member Since Sep 2021</p>
                            </div>

                        <hr>
                        <div class="provider-info">
                            <p class="mb-1"><i class="far fa-envelope"></i> <a href="/cdn-cgi/l/email-protection" ><?php echo $email; ?></a></p>
                                            <p class="mb-0"><i class="fas fa-phone-alt"></i><?php echo $phone_num; ?></p>
                        </div>
                                                </div>
                </div>
                <div class="card available-widget">
                    <div class="card-body">
                        <h5 class="card-title">Service Availability</h5>
                        <ul>
                            <li><span>Monday</span>07:00 AM - 11:00 PM</li><li><span>Tuesday</span>07:00 AM - 11:00 PM</li><li><span>Wednesday</span>07:00 AM - 11:00 PM</li><li><span>Thursday</span>07:00 AM - 11:00 PM</li><li><span>Friday</span>07:00 AM - 11:00 PM</li><li><span>Saturday</span>07:00 AM - 11:00 PM</li><li><span>Sunday</span>07:00 AM - 11:00 PM</li>                       </ul>
                    </div>              
                </div>
            </div>
        </div>
    </div>