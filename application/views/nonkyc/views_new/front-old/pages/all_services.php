
    <style>
        .font14{
            font-size:14px;
        }
        .font12{
            font-size:12px;
        }
    
    </style>
<!--service provider start-->
 <section  class="container mt-5"> 
     
                <div class=" text-center">
                <h2> Our Service Provider</h2>
                <span class="divider"></span>
                <!--<div class="text">Explore the greates places in the city. You won’t be disappointed.</div>-->
            </div>

        <div class="row p-2 " >
            <?php 
            
            $service_data=$this->db->query('select * from service_provider')->result_array();
            foreach($service_data as $b) {  
              $bus_id=$b['id'];
            ?>
            <div class="col-lg-3 col-sm-12 col-md-3 m-4 " style="box-shadow:0px 4px 8px 0px grey;border-radius:10px 10px;background-color:white">
                <div class="row p-2">
                    <div class="col-sm-12 col-md-12 col-lg-12" style="width:auto;">
                        <img src="<?php echo base_url().$b['image']; ?>" style="width:375px;height:200px;border-radius: 20px 5px;">
                        <br>
                        <span class="text-center">
                        <br>
                         <h5 class="font14" style="color:orange"><?php echo $b['servicename']; ?></h5>
                         <h6 class="font12"><?php echo $b['service_category']; ?></h6>
                         </span>
                    </div>
                    
                </div>
                <div class="row p-3">
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;">
                        <h6 class="font14">Owner Name</h6>
                        <p class="font12"><b><?php echo $b['ownername']; ?></b></p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;text-align:end;margin-left:auto">
                        <h6 class="font14">Company Name</h6>
                        <p class="font12"><b><?php echo $b['companyname']; ?></b></p>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-sm-12 col-md-12 col-lg-12" style="width:auto;text-align:right">
                        
            <?php if($b['phonenumber']!='') { ?>
            <p class="font12"><b>
                            <i class="fa fa-phone"></i> +91- <?php echo $b['phonenumber']; ?></b></p>
                            <?php } ?>
                            
                            <?php if($b['email']!='') { ?>
            <p class="font12"><b>
                            <i class="fa fa-envelope"></i>  <?php echo $b['email']; ?></b></p>
                            <?php } ?>
                            
                            <?php if($b['website']!='') { ?>
            <p class="font12"><b>
                            <i class="fa fa-globe"></i>  <?php echo $b['website']; ?></b></p>
                            <?php } ?>
                    </div>
                   
                </div>
                
                
            </div>
            <?php } ?>
        
        </div>
    </section>
    <!--service provider end -->
    