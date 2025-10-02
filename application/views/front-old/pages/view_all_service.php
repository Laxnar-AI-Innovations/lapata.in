<section class="popular-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading">
                            <h2>Most Popular Services</h2>
                            <span>Explore the greates our services. You won’t be disappointed</span>
                        </div>
                    </div>
                    <!--<div class="col-md-6">-->
                    <!--    <div class="viewall">-->
                    <!--        <h4><a href="<?php echo base_url('home/view_all_service'); ?>">View All <i class="fas fa-angle-right"></i></a></h4>-->
                    <!--        <span>Most Popular</span>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
                <div class="service-carousel">
                    <div class="service-slider owl-carousel owl-theme">
                         <?php $get_services = $this->db->query('select * from service')->result_array();
                        foreach($get_services as $g) {
                        ?>
                        
                            <div class="service-widget">
                                    <div class="service-img">
                                        <a href="<?php echo base_url(); ?>home/more_details/<?php echo $g['id']; ?>">												                                            <img class="img-fluid serv-img" alt="Service Image" src="<?php echo base_url().$g['image'];?>" alt="" style="height: 200px">
										
                                        </a>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="<?php echo base_url(); ?>home/more_details/<?php echo $g['id']; ?>">                                                                                                           <img src="<?php echo base_url().$g['image'];?>">
                                                                                                    </a>
                                                <span class="service-price">&#36;50</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="#"><?php echo $g['category_name']; ?></a></div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                    <a href="service_details/<?php echo $g['city']; ?>/<?php echo $g['slug']; ?>"><?php echo $g['service_name']; ?></a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i><i class="fas fa-star filled"></i>                                            <span class="d-inline-block average-rating">(5)</span>
                                        </div>
                                        <div class="user-info">

                                            <div class="row">                                                                                     <span class="col ser-contact"><i class="fas fa-phone mr-1"></i> <span><?php echo $g['phone_no']; ?></span></span>
                                                        <span class="col ser-location"><span><?php echo $g['city']; ?></span> <i class="fas fa-map-marker-alt ml-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php  }?>
                                                                
                                                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>