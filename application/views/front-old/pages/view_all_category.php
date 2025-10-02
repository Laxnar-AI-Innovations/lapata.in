
<section class="category-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading">
                            <h2>Featured Categories</h2>
                            <span>What do you need to find?</span>
                        </div>
                    </div>
                    <!--<div class="col-md-6">-->
                    <!--    <div class="viewall">-->
                    <!--        <h4><a href="#">View All <i class="fas fa-angle-right"></i></a></h4>-->
                    <!--        <span>Featured Categories</span>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>						
                <div class="catsec">
                    <div class="row">
                       <?php $getCategories = $this->db->query('select * from businesscategory')->result_array();
                        foreach($getCategories as $gc) {
                        ?>
                                                        <div class="col-lg-4 col-md-6">
                                    <a href="<?php echo base_url(); ?>home/service_type">
                                        <div class="cate-widget">										           <img src="<?php echo base_url().$gc['image'];?>" alt="" style="height: 200px">										                                            <div class="cate-title">
                                                <h3><span><i class="fas fa-circle"></i> <?php echo $gc['categoryname']; ?></span></h3>
                                            </div>
                                            <div class="cate-count">
                                                <i class="fas fa-clone"></i> 3                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php } ?> 
                                                                        
                                                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
