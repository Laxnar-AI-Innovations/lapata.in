
<style>
         .d1{
             border-radius: 7px 6px 6px 7px;
             border: 1px solid #dedede;
    box-shadow: 0px 0px 3px 0px;
    width:150px;
    text-align:center;
         }
         .d2{
             text-align:center;
             position: relative;
    color: #fff;
    font-size: 14px;
    line-height: 26px;
   width:140px;
    padding: 8px 35px;
    border-radius: 3px;
    background-color: #ffc107;
    box-shadow: 0 6px 9.25px 0.75px rgb(194 191 255 / 65%);
    margin:6px;
    padding:4px;
         }
         .d3{
             border: 1px solid #dcdcdc;
    border-radius: 6px;
  
    box-shadow: 2px 4px 8px;
    margin: 4px;
         }
     </style>
     
     <!--contractor start-->
 <section class="container-fluid" style="margin-bottom:25px">
     
                <div class="sec-title text-center">
                <h2> Worker Wise Post</h2>
                <span class="divider"></span>
                <!--<div class="text">Explore the greates places in the city. You won’t be disappointed.</div>-->
            </div>

        <div class="row p-2" >
            <?php 
             if($this->session->userdata('user_login') == 'yes'){
            $idd=$this->session->userdata('user_id');
             }else {
    		redirect('home/login','refresh');
    	}
            $service_data=$this->db->query('select * from worker where userid='.$idd.'')->result_array();
            foreach($service_data as $b) {  
              $bus_id=$b['id'];
            ?>
            <div class="col-lg-3 col-sm-12 col-md-3 ml-3 mb-2" style="box-shadow:0px 4px 8px 0px grey;border-radius:10px 10px;background-color:white">
                <div class="row p-2">
                    <div class="col-sm-12 col-md-12 col-lg-12" style="width:auto;">
                        <img src="<?php echo base_url().$b['image']; ?>" style="width:375px;height:200px;border-radius: 20px 5px;">
                        <br>
                        <span class="text-center">
                        <br>
                         <h4><?php echo $b['service_name']; ?></h4>
                         <h6><?php echo $b['service_category']; ?></h6>
                         </span>
                    </div>
                    
                </div>
                <!--<div class="row p-3">-->
                <!--    <div class="col-sm-12 col-md-12 col-lg-12" style="width:auto;">-->
                <!--        <h5>Detail</h5>-->
                <!--        <p ><?php echo $b['description']; ?></p>-->
                <!--    </div>-->
                   
                <!--</div>-->
                
                <div class="row p-3">
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;">
                        
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;text-align:end;margin-left:auto">
                        
                        <button type="button" onclick="location.href='<?php echo base_url(); ?>Home/mypost/delete/<?php echo $bus_id ?>'" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
            <?php } ?>
        
        </div>
    </section>
    <!--contractor end -->
     <!--my service provider post-->
      <section class="container-fluid" style="margin-bottom:25px">
     
                <div class="sec-title text-center">
                <h2> Service Provider Wise Post</h2>
                <span class="divider"></span>
                <!--<div class="text">Explore the greates places in the city. You won’t be disappointed.</div>-->
            </div>

        <div class="row p-2" >
            <?php 
             if($this->session->userdata('user_login') == 'yes'){
            $idd=$this->session->userdata('user_id');
             }else {
    		redirect('home/login','refresh');
    	}
            $service_data=$this->db->query('select * from service_provider where userid='.$idd.'')->result_array();
            foreach($service_data as $b) {  
              $bus_id=$b['id'];
            ?>
            <div class="col-lg-3 col-sm-12 col-md-3 ml-3 mb-2" style="box-shadow:0px 4px 8px 0px grey;border-radius:10px 10px;background-color:white">
                <div class="row p-2">
                    <div class="col-sm-12 col-md-12 col-lg-12" style="width:auto;">
                        <img src="<?php echo base_url().$b['image']; ?>" style="width:375px;height:200px;border-radius: 20px 5px;">
                        <br>
                        <span class="text-center">
                        <br>
                         <h4><?php echo $b['servicename']; ?></h4>
                         <h6><?php echo $b['service_category']; ?></h6>
                         </span>
                    </div>
                    
                </div>
                <div class="row p-3">
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;">
                        <h5>Owner Name</h5>
                        <p style="text-"><b><?php echo $b['ownername']; ?></b></p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;text-align:end;margin-left:auto">
                        <h5>Company Name</h5>
                        <p ><b><?php echo $b['companyname']; ?></b></p>
                    </div>
                </div>
                
                <div class="row p-3">
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;">
                        
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;text-align:end;margin-left:auto">
                        
                        <button type="button" onclick="location.href='<?php echo base_url(); ?>Home/mypost/delete/<?php echo $bus_id ?>'" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
            <?php } ?>
        
        </div>
    </section>
     
     <!--end of my service provider post  -->
     
     <!--contractor start-->
     
       <section class="container-fluid" style="margin-bottom:25px">
     
                <div class="sec-title text-center">
                <h2> Contractor Wise Post</h2>
                <span class="divider"></span>
                <!--<div class="text">Explore the greates places in the city. You won’t be disappointed.</div>-->
            </div>

        <div class="row p-2" >
            <?php 
             if($this->session->userdata('user_login') == 'yes'){
            $idd=$this->session->userdata('user_id');
             }else {
    		redirect('home/login','refresh');
    	}
            $service_data=$this->db->query('select * from contractor where userid='.$idd.'')->result_array();
            foreach($service_data as $b) {  
              $bus_id=$b['id'];
            ?>
            <div class="col-lg-3 col-sm-12 col-md-3 ml-3 mb-2" style="box-shadow:0px 4px 8px 0px grey;border-radius:10px 10px;background-color:white">
                <div class="row p-2">
                    <div class="col-sm-12 col-md-12 col-lg-12" style="width:auto;">
                        <img src="<?php echo base_url().$b['image']; ?>" style="width:375px;height:200px;border-radius: 20px 5px;">
                        <br>
                        <span class="text-center">
                        <br>
                         <h4><?php echo $b['servicename']; ?></h4>
                         <h6><?php echo $b['service_category']; ?></h6>
                         </span>
                    </div>
                    
                </div>
                <div class="row p-3">
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;">
                        <h5>Owner Name</h5>
                        <p style="text-"><b><?php echo $b['ownername']; ?></b></p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;text-align:end;margin-left:auto">
                        <h5>Company Name</h5>
                        <p ><b><?php echo $b['companyname']; ?></b></p>
                    </div>
                </div>
                
                <div class="row p-3">
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;">
                        
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;text-align:end;margin-left:auto">
                        
                        <button type="button" onclick="location.href='<?php echo base_url(); ?>Home/mypost/delete/<?php echo $bus_id ?>'" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
            <?php } ?>
        
        </div>
    </section>
     <!--end of contractor-->

