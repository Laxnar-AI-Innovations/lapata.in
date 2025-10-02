
<section class="hero-section">
    <div class="layer"> 
        <div class="home-banner" style="background-image: url('assets1/img/banner.jpg');"></div>	
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-search">
                       <h3> India's best laptop sales and service brand</h3>
						<p>We care as you desire</p>						
                        <div class="search-box">
                                <div class="search-input line">
                                    <i class="fas fa-tv bficon"></i>
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control common_search" name="common_search" id="search-blk" placeholder="What are you looking for?" >
                                    </div>
                                </div>
                                <div class="search-input">
                                    <i class="fas fa-location-arrow bficon"></i>
                                    <div class="form-group mb-0">
                                        <input type="hidden" value="" id="serviceauto">
                                        <input type="hidden" value="" id="serviceautoslug">
                                        <input type="hidden" value="" id="citywithgoogleapi">
                                        <input type="text" class="form-control" value="" name="user_address" id="user_address" placeholder="Type City Name" autocomplete="off">
                                        <input type="hidden" class="form-control" value="" name="user_address" id="cityauto" placeholder="Type City Name" autocomplete="off">
                                        <input type="hidden" class="form-control" value="" name="user_address" id="cityauto" placeholder="Type City Name" autocomplete="off">
                                        <input type="hidden" class="form-control" value="" name="user_address" id="cityautovalue" placeholder="Type City Name">
                                    </div>
                                </div>
                                <div class="search-input search-btn">
                                    <button id="search" class="btn" name="search" value="search"  type="button">Search</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    if(isset($_SESSION['city']))
    {
        $getCategories = $this->db->query('select * from businesscategory ')->result_array();
    }else
    {
        $getCategories = $this->db->query('select * from businesscategory ')->result_array();
    }
    if(count($getCategories) > 0)
    {
?>
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
                    <div class="col-md-6">
                        <div class="viewall">
                            <h4><a href="<?php echo base_url('home/view_all_category'); ?>">View All <i class="fas fa-angle-right"></i></a></h4>
                            <span>Featured Categories</span>
                        </div>
                    </div>
                </div>						
                <div class="catsec">
                    <div class="row">
                       <?php
                        foreach($getCategories as $gc) {
                        ?>
                                                        <div class="col-lg-4 col-md-6">
                                    <a href="<?php echo base_url(); ?>home/service_type">
                                        <div class="cate-widget">										           <img src="<?php echo base_url().$gc['image'];?>" alt="" style="height: 200px">										                                            <div class="cate-title">
                                                <h3><span><i class="fas fa-circle"></i> <?php echo $gc['categoryname']; ?></span></h3>
                                            </div>
                                            <!--<div class="cate-count">-->
                                            <!--    <i class="fas fa-clone"></i> 3                                           
                                            </div>-->
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
<?php } ?>
<?php 
    if(isset($_SESSION['city']))
    {
        $getServices = $this->db->query('select * from service where city="'.$_SESSION['city'].'"')->result_array();
    }else
    {
        $getServices = $this->db->query('select * from service where city="Bangalore"')->result_array();
    }
    if(count($getServices) > 0)
    {
?>
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
                    <div class="col-md-6">
                        <div class="viewall">
                            <h4><a href="<?php echo base_url('home/view_all_service'); ?>">View All <i class="fas fa-angle-right"></i></a></h4>
                            <span>Most Popular</span>
                        </div>
                    </div>
                </div>
                <div class="catsec">
                    <div class="row">
                         <?php
                            foreach($getServices as $g) {
                        ?>
                        
                            <div class="col-md-4  service-widget p-2">
                                    <div class=" cate-widget ">
                                        <a href="<?php echo base_url(); ?>home/more_details/<?php echo $g['id']; ?>">												                                    
                                        <img class="img-fluid serv-img" alt="Service Image" src="<?php echo base_url().$g['image'];?>" alt="" style="height: 200px">
										
                                        </a>
                                        <div class="item-info ">
                                            <div class="service-user">
                                                <a href="<?php echo base_url(); ?>home/more_details/<?php echo $gc['id']; ?>">                                                                                                           <img src="<?php echo base_url().$g['image'];?>">
                                                                                                    </a>
                                                <span class="service-price">Rs. <?php echo $g['service_cost']; ?></span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="#"><?php echo $g['category_name']; ?></a></div>
                                        </div>
                                    </div>
                                    <div class="service-content ">
                                        <h3 class="title text-center">
                                    <!--<a href="home/service_details/<?php echo $g['id']?>"><?php echo $g['service_name']; ?></a>-->
                                        <a href="service_details/<?php echo $g['city']; ?>/<?php echo $g['slug']; ?>/<?php echo $g['id']; ?>"><?php echo $g['service_name']; ?></a>
                                        </h3>
                                        <h6>
                                    <a href="service_details/<?php echo $g['city']; ?>/<?php echo $g['slug']; ?>/<?php echo $g['id']; ?>"><?php echo $g['address']; ?></a>
                                        </h6>
                                       <div class="rating">
                                            <i class="fas fa-star <?php if($g['star_rating'] < 6){ echo "filled"; } ?>"></i>
                                            <i class="fas fa-star <?php if($g['star_rating'] < 6 && $g['star_rating'] >= 2){ echo "filled"; } ?>"></i>
                                            <i class="fas fa-star  <?php if($g['star_rating'] < 6 && $g['star_rating'] >= 3){ echo "filled"; } ?>"></i>
                                            <i class="fas fa-star  <?php if($g['star_rating'] < 6 && $g['star_rating'] >= 4){ echo "filled"; } ?>"></i>
                                            <i class="fas fa-star  <?php if($g['star_rating'] >= 5){ echo "filled"; } ?>"></i>                                           
                                            <span class="d-inline-block average-rating">(
                                                <?php
                                                $count_review=$this->db->query('select count(id) as c_review from review where  city="'.$g['city'].'" and service_name="'.$g['service_name'].'"')->result_array();
                                                if($count_review >= 0){
                                                    echo $count_review[0]['c_review'];
                                                }
                                                
                                                ?>
                                                )
                                            </span>
                                        </div>
                               
                                        <div class="user-info">

                                            <div class="row">                                                                                  
                                            <span class="col ser-contact"><i class="fas fa-phone mr-1"></i> <span><a href="tel:<?php echo $g['phone_no']; ?>">
                                                <?php echo $g['phone_no']; ?></a></span></span>
                                                        <span class="col ser-location"><span title="<?php echo $g['Area']; ?>,<?php echo $g['city']; ?>"><?php echo $g['Area']; ?>,<?php echo $g['city']; ?></span> <i class="fas fa-map-marker-alt ml-1" title="<?php echo $g['Area']; ?>,<?php echo $g['city']; ?>"></i></span>
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
<?php } ?>

<section class="how-work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading howitworks">
                    <h2>How It Works</h2>
                    <span>Aliquam lorem ante, dapibus in, viverra quis</span>
                </div>
                <div class="howworksec">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="howwork">
                                <div class="iconround">
                                    <div class="steps">01</div>
										<img src="assets1/img/icon-1.png">                                    
                                </div>
                                <h3>
								Choose What To Do								</h3>
                                <p>
								Click on your city and find the service centers near you. Just login and book a slot at ease.								</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="howwork">
                                <div class="iconround">
                                    <div class="steps">02</div>
                                    <img src="assets1/img/icon-2.png">                                </div>
                                <h3>
								Find What You Want								</h3>
                                <p>
								Just locate the center and share the details of service you need for the best results at reasonable price								</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="howwork">
                                <div class="iconround">
                                    <div class="steps">03</div>
                                    <img src="assets1/img/icon-3.png">                                </div>
                               <h3>
							5 Star rated service								</h3>
                                <p>
								 We do care for your comfort, fix appointment and get the best service even at your home								</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="app-section" id="how-work">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="heading howitworks">-->
<!--                    <h2>Download Our App</h2>-->
<!--                    <span>Aliquam lorem ante, dapibus in, viverra quis</span>-->
<!--                    <div class="mt-3">-->
<!--                        <a href="#"><img src="assets1/img/gp-01.jpg" alt=""></a>-->
<!--                        <a href="#"><img src="assets1/img/gp-02.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<style>
.accordion {
  background-color: #0095d3;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  border:1px solid white;
  margin-bottom:2px;
}

/*.active, .accordion:hover {*/
/*  background-color: #ccc;*/
/*}*/

.accordion:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
<br>
<section>

    <div class="container" >
   <h2 style="text-align: center;">If you have any question?</h2>

   <?php $faq= $this->db->query('select * from faqs order by id desc limit 8')->result_array(); 
    foreach ($faq as $key => $fq) { ?>
       <button class="accordion" style=" text-transform: uppercase;"><?php echo $fq['question']; ?></button>
<div class="panel">
  <p style=" text-transform: uppercase;"><?php echo $fq['answer']; ?></p>
</div>
 <?php   }
   ?>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</div>

</section>

<br>

<!-- blog design -->


<!-- blog design end -->

    <style>
        body {
  padding: 2rem 0rem;
}

.card-img {
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
}

.card-title {
  margin-bottom: 0.3rem;
}

.cat {
  display: inline-block;
  margin-bottom: 1rem;
}

.fa-users {
  margin-left: 1rem;
}

.card-footer {
  font-size: 0.8rem;
}
    </style>
    
    <div class="row">
                 <div  class="col-lg-12 col-sm-12 col-md-12 form-group">
            <h4 class="text-center">Blogs</h4>
        </div>
    <div class="container">
  <div class="row">
       <?php $blog = $this->db->query('select * from blog')->result_array(); 
foreach ($blog as $key => $bg) {  ?>
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img" src="<?php echo base_url().$bg['image'];   ?>" alt="Laptop Store" style="height:150px">
        <!--<div class="card-img-overlay">-->
        <!--  <a href="#" class="btn btn-light btn-sm"><?php echo $bg['title']; ?></a>-->
        <!--</div>-->
        <div class="card-body">
          <h4 class="card-title"><?php echo $bg['title']; ?></h4>
          <!--<small class="text-muted cat">-->
          <!--  <i class="far fa-clock text-info"></i> 30 minutes-->
          <!--  <i class="fas fa-users text-info"></i> 4 portions-->
          <!--</small>-->
          <p class="card-text"<?php echo substr($bg['details'],20); ?></p>
              
                            <?php
                                if(isset($_SESSION['city']))
                                {
                            ?>
                            <a href="<?php echo base_url(); ?>blog-details/<?php echo $_SESSION['city'] ?>/<?php echo str_replace(' ','-',$bg['title']); ?>" class="btn btn-info">
                                Read More
                            </a>
                            <?php }else{ ?>
                                <a href="<?php echo base_url(); ?>blog-details/Bangalore/<?php echo str_replace(' ','-',$bg['title']); ?>" class="btn btn-info">
                                    Read More
                                </a>
                            <?php } ?>
          <!--<a href="<?php echo base_url(); ?>blog-details/<?php echo $_SESSION['city'] ?>/<?php echo str_replace(' ','-',$bg['title']); ?>" class="btn btn-info">Read MOre</a>-->
        </div>
        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
          <div class="views"><?php echo $bg['date']; ?>
          </div>
          <div class="stats">
           	<i class="far fa-eye"></i> <?php echo $bg['views']; ?>
            <!--<i class="far fa-comment"></i> 12-->
          </div>
           
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
</div>
<br>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function buyPackage(pId)
    {
        var options = {
            "key": "rzp_live_ILhbPWiB3ndkd8",
            "amount": pId * 100,
            "currency": "INR",
            "name": "Dial Worker",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "handler": function (response){
                $.ajax({
                    url:'<?php echo base_url(); ?>Home/savePackageDetails',
                    data:{pId:pId},
                    type:'post',
                    success:function(res)
                    {
                        alert('Package Successfully Added');
                    }
                })
            },
            "prefill": {
                "name": "<?php echo $_SESSION['fname']; ?>",
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
</script>