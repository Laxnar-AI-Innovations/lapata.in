<div class="container">
    <div>
        <!--Success message-->
        <?php $add_succ=$this->session->flashdata('success');
            if($add_succ){
            ?>
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $add_succ;?></strong> 
        </div>
        <?php } ?>
        <!--Delete message-->
        <?php $del_succ=$this->session->flashdata('error');
            if($del_succ){
            ?>
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $del_succ;?></strong> 
        </div>
        <?php } ?>
    </div>
</div>
    <div class="card shadow mb-1">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Service</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <?php if($editname=='do_edit'){ ?>
                        <div class="col-md-12">
                       
                        <form method="post" action="<?php echo base_url('admin/service/do_update/'.$servicedata[0]['id']); ?>" enctype="multipart/form-data">

                           <div class="form-row">
                             <div class="form-group col-md-4">
                             <label>Brand Name</label>
                             <select name="ddlbrand" class="form-control">
                             <option>Select  brand</option>
                             <?php foreach ($brand_data as $key => $bar) {  ?>
                            <option value="<?php echo $bar['name']; ?>" <?php if($bar['name'] == $servicedata[0]['brand_name']){ echo "selected"; } ?>><?php echo $bar['name']; ?></option>
                          <?php  } ?>         

                             </select>
                             </div>

                               <div class="form-group col-md-4">
                             <label>Category Name</label>
                             <select name="ddlcategory" class="form-control" onclick="getSubCategory(this.value)">
                             <option>Select Category</option>
                             <?php foreach ($category as $key => $can) {  ?>
                            <option value="<?php echo $can['id']; ?>" <?php if($can['id'] == $servicedata[0]['category_id']){ echo "selected"; } ?>><?php echo $can['categoryname']; ?></option>
                          <?php  } ?>         

                             </select>
                             </div>

                              <div class="form-group col-md-4">
                                    <label>Sub Category</label>
                                    <select name="ddlsub_category"  class="form-control">
                                      <?php 
                                        $getSubCategory = $this->db->query('select * from businesssubcategory where category='.$servicedata[0]['category_id'])->result_array();
                                        if(count($getSubCategory) > 0)
                                        {
                                            foreach($getSubCategory as $key=>$subcat)
                                            {
                                      ?>
                                      <option value="<?php echo $subcat['id']; ?>" <?php if($subcat['id'] == $servicedata[0]['sub_cat_id']){ echo "selected"; } ?>><?php echo $subcat['subcategoryname']; ?></option>
                                      <?php } }else{ ?>
                                      <option>No Sub Category Found</option>
                                      <?php } ?>
                                    </select>
                                  </div>

                                   <div class="form-group col-md-4">
                              <label>Service Name</label>
                              <input type="text" name="txtservicename" class="form-control" value="<?php echo $servicedata[0]['service_name']; ?>">
                            </div>

                             <div class="form-group col-md-4">
                                    <label>country</label>
                                    <select name="ddlcountry" class="form-control">
                                      <option>Select</option>
                                      <option value="india" <?php if($servicedata[0]['country'] == 'india'){ echo "selected"; } ?>>india</option>
                                      <option value="srilanka" <?php if($servicedata[0]['country'] == 'srilanka'){ echo "selected"; } ?>>srilanka</option>
                                    </select>
                                  </div>

                                   <div class="form-group col-md-4">
                                    <label>City</label>
                                    <select name="ddlcity" class="form-control" onchange="getArea(this.value)" required>
                                      <option value="">Select</option>
                                      <?php
                                        $getCity = $this->db->query('SELECT * FROM community  where status="visible" GROUP by city')->result_array();
                                        if(count($getCity) > 0)
                                        {
                                            foreach($getCity as $key1=>$city1)
                                            {
                                      ?>
                                        <option value="<?php echo $city1['city'] ?>" <?php if($city1['city'] == $servicedata[0]['city']){ echo "selected"; } ?>><?php echo $city1['city']; ?></option>
                                      <?php } } ?>
                                    </select>
                                  </div>
                                  
                                  <div class="form-group col-md-4">
                                    <label>Area</label>
                                    <select name="area" id="area" class="form-control" required>
                                      <?php 
                                        $getArea = $this->db->query('select * from community where city="'.$servicedata[0]['city'].'"')->result_array();
                                        if(count($getArea) > 0)
                                        {
                                            foreach($getArea as $key=>$area)
                                            {
                                      ?>
                                      <option value="<?php echo $area['community']; ?>" <?php if($area['community'] == $servicedata[0]['Area']){ echo "selected"; } ?>><?php echo $area['community']; ?></option>
                                      <?php } }else{ ?>
                                      <option>No Area Found</option>
                                      <?php } ?>
                                    </select>
                                  </div>

                                  <div class="form-group col-md-4">
                                    <label>State</label>
                                    <select name="ddlstate" class="form-control">
                                      <option value="Uttar Pradesh" <?php if($servicedata[0]['state'] == 'Uttar Pradesh'){ echo "selected"; } ?>>Uttar Pradesh</option>
                                      <option value="Madhya Pradesh" <?php if($servicedata[0]['state'] == 'Madhya Pradesh'){ echo "selected"; } ?>>Madhya Pradesh</option>
                                    </select>
                                  </div>

                             <div class="form-group col-md-4">
                             <label>Address</label>
                             <input type="text" name="txtaddress" class="form-control" value="<?php echo $servicedata[0]['address']; ?>">
                             </div>

                              <div class="form-group col-md-4">
                             <label>Service Provider Name</label>
                             <input type="text" name="txtservice_Provider" class="form-control" value="<?php echo $servicedata[0]['service_provider']; ?>">
                             </div>

                             <div class="form-group col-md-4">
                             <label>Email</label>
                             <input type="text" name="txtemail" class="form-control" value="<?php echo $servicedata[0]['email']; ?>">
                             </div>

                              <div class="form-group col-md-4">
                                    <label>Phone Number</label>
                                    <input type="text" name="txtphonenumber" class="form-control" value="<?php echo $servicedata[0]['phone_no']; ?>">
                                   </div>


                                   <div class="form-group col-md-4">
                                   <label>Service Cost</label>
                                   <input type="text" name="txtservice_cost" class="form-control" value="<?php echo $servicedata[0]['service_cost']; ?>">
                                   </div>

                                    <div class="form-group col-md-12">
                                  <label>Details</label>
                                  <textarea rows="5" name="txtdetails" class="form-control"><?php echo $servicedata[0]['details']; ?></textarea> 
                                  </div> 

                                    <div class="form-group col-md-4">
                                    <label>Star Rating</label>
                                    <select name="ddlstarrating" class="form-control">
                                      <option>Select</option>
                                      <option value="1.0" <?php if($servicedata[0]['star_rating'] == '1.0'){ echo "selected"; } ?>>1.0</option>
                                      <option value="1.5" <?php if($servicedata[0]['star_rating'] == '1.5'){ echo "selected"; } ?>>1.5</option>
                                      <option value="2.0" <?php if($servicedata[0]['star_rating'] == '2.0'){ echo "selected"; } ?>>2.0</option>
                                      <option value="2.5" <?php if($servicedata[0]['star_rating'] == '2.5'){ echo "selected"; } ?>>2.5</option>
                                      <option value="3.0" <?php if($servicedata[0]['star_rating'] == '3.0'){ echo "selected"; } ?>>3.5</option>
                                      <option value="3.0" <?php if($servicedata[0]['star_rating'] == '4.0'){ echo "selected"; } ?>>3.5</option>
                                      <option value="3.0" <?php if($servicedata[0]['star_rating'] == '5.0'){ echo "selected"; } ?>>3.5</option>
                                    </select>
                                  </div>

                                   <div class="form-group col-md-4">
                                   <label> Banner Image</label>
                                  <input type="file" name="image" class="form-control">
                                   </div>

                                   <div class="form-group col-md-4">
                                    <label>Service Provider Image</label>
                                    <input type="file" name="service_pro_img" class="form-control">
                                     
                                   </div>
                                   </div>

                                  
      

       <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
        <a href="<?php echo base_url('admin/service_table'); ?>" class="btn btn-danger" >View Service Table Info</a>
  
  

  

    </div>
    </form>         
      </div>
                    <?php }else{ ?>
                    <div class="col-md-12">
                       
                        <form method="post" action="<?php echo base_url('admin/review/do_add'); ?>" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                             <label>City Name</label>
                             <select name="ddlcity" class="form-control" onclick="get_servicecc(this.value)">
                             <option>Select City</option>
                             <?php 
                             $city=$this->db->query('select distinct(city) from community ')->result_array();
                             foreach ($city as $key => $can) {  ?>
                            <option value="<?php echo $can['city']; ?>"><?php echo $can['city']; ?></option>
                          <?php  } ?>         

                             </select>
                             </div>
                <div class="form-group col-md-4">
                             <label>Service Name</label>
                             <select name="ddlservice" class="form-control"  >
                                  <option>Select Service</option>
                             <?php foreach ($service_data as $key => $can) {  ?>
                            <option value="<?php echo $can['service_name']; ?>"><?php echo $can['service_name']; ?></option>
                          <?php  } ?> 

                             </select>
                             </div>
                             </div>

                              
                                   <div class="form-group col-md-12">
                              <label>Review </label>
                              <textarea type="text" name="txtreview" class="form-control ckeditor"></textarea>
                            </div>


       <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
        <a href="<?php echo base_url('admin/review_info'); ?>" class="btn btn-danger" >View review Table Info</a>
  
  

  

    </div>
    </form>         
      </div>
    <?php } ?>                
                        
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    
    function get_servicecc(val)
    {
        $('#ddlsub').empty();
        $.ajax({
            url:'<?php echo base_url(); ?>Admin/g_service',
            data:{cityname:val},
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.length > 0)
                {
                    $.each(parse, function(key, value) {   
                         $('#subcategory')
                             .append($("<option></option>")
                                        .attr("value", value.id)
                                        .text(value.service_name)); 
                    });
                }else
                {
                    $('#subcategory').append($("<option></option>").attr("value", "").text("No Service Name Found")); 
                }
            }
        })
    }
    
    function getArea(val)
    {
        $('#area').empty();
        $.ajax({
            url:'<?php echo base_url(); ?>Admin/getArea',
            data:{area:val},
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.length > 0)
                {
                    $.each(parse, function(key, value) {   
                         $('#area')
                             .append($("<option></option>")
                                        .attr("value", value.community)
                                        .text(value.community)); 
                    });
                }else
                {
                    $('#area').append($("<option></option>").attr("value", "").text("No Area Found")); 
                }
            }
        })
    }
    
    <!--
    function isNumberKey(evt)
    {
       var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
    
       return true;
    }
    //-->
</SCRIPT>