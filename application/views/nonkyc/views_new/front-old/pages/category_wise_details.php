
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
  <section class="container-fluid" style="margin-bottom:25px">
      <?php 
       $cate=$this->db->query('select * from businesscategory where id='.$idd.'')->result_array();
           foreach($cate as $category) { 
           $catname=$category['categoryname'];
           }?>
     
           <div class="sec-title text-center">
                <h2><?php echo $catname;?> wise services</h2>
                <span class="divider"></span>
                <!--<div class="text">Explore the greates places in the city. You won’t be disappointed.</div>-->
            </div>

        <div class="row p-2">
            <?php foreach($service_data as $b) {  
              $bus_id=$b['id'];
            ?>
            <div class="col-lg-3 col-sm-12 col-md-3 ml-3 mb-2" style="box-shadow:0px 0px 5px 0px;border-radius:10px 10px">
                <div class="row p-2">
                    <div class="col-sm-3 col-md-3 co-lg-3" style="width:auto;">
                        <img src="<?php echo base_url().$b['image']; ?>" style="width:90px;height:90px;">
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8" style="width:auto;">
                        <h6><?php echo $b['businesstitle']; ?></h6>
                        <small style="display:block;"><?php echo $b['community']; ?></small>
                        <?php for($i=1;$i<=$b['starrating'];$i++) { 
                        if($i<=$b['starrating']){ ?>
                             <i class="fa fa-star text-warning"></i>     
                <?php    } else { ?>
                             <i class="fa fa-star "></i>
            <?php    }
                        } ?>
                       
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;">
                        <p>Rating By User</p>
                        <p><b><?php echo $b['starrating']; ?>/5</b></p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6" style="width:auto;text-align:end;margin-left:auto">
                        
                        <button type="button" onclick="location.href='<?php echo base_url(); ?>Home/service_details/<?php echo $bus_id ?>'" class="btn btn-warning">Contact</button>
                    </div>
                </div>
            </div>
            <?php } ?>
        
        </div>
    </section>

