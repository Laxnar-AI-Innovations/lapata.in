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
                                    <select name="ddlsub_category" id="subcategory" class="form-control">
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
                                  <textarea rows="5" name="txtdetails" class="form-control ckeditor"><?php echo $servicedata[0]['details']; ?></textarea> 
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
                       
                        <form method="post" action="<?php echo base_url('admin/service/do_add'); ?>" enctype="multipart/form-data">

                           <div class="form-row">
                             <div class="form-group col-md-4">
                             <label>Brand Name</label>
                             <select name="ddlbrand" class="form-control">
                             <option>Select  brand</option>
                             <?php foreach ($brand_data as $key => $bar) {  ?>
                            <option value="<?php echo $bar['name']; ?>"><?php echo $bar['name']; ?></option>
                          <?php  } ?>         

                             </select>
                             </div>

                               <div class="form-group col-md-4">
                             <label>Category Name</label>
                             <select name="ddlcategory" class="form-control" onclick="getSubCategory(this.value)">
                             <option>Select Category</option>
                             <?php foreach ($category as $key => $can) {  ?>
                            <option value="<?php echo $can['id']; ?>"><?php echo $can['categoryname']; ?></option>
                          <?php  } ?>         

                             </select>
                             </div>

                              <div class="form-group col-md-4">
                                    <label>Sub Category</label>
                                    <select name="ddlsub_category" id="subcategory" class="form-control">
                                      <option>Select</option>
                                    </select>
                                  </div>

                                   <div class="form-group col-md-4">
                              <label>Service Name</label>
                              <input type="text" name="txtservicename" class="form-control">
                            </div>

                             <div class="form-group col-md-4">
                                    <label>country</label>
                                    <select name="ddlcountry" class="form-control">
                                      <option>Select</option>
                                      <option>india</option>
                                      <option>shri lanka</option>
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
                                        <option value="<?php echo $city1['city'] ?>"><?php echo $city1['city']; ?></option>
                                      <?php } } ?>
                                    </select>
                                  </div>
                                  
                                  <div class="form-group col-md-4">
                                    <label>Area</label>
                                    <select name="area" id="area" class="form-control" required>
                                      <option>Select</option>
                                    </select>
                                  </div>

                                  <div class="form-group col-md-4">
                                    <label>State</label>
                                    <select name="ddlstate" class="form-control">
                                      <option>Select</option>
                                      <option>Uttar Pradesh</option>
                                      <option>Madhya Pradesh</option>
                                    </select>
                                  </div>

                             <div class="form-group col-md-4">
                             <label>Address</label>
                             <input type="text" name="txtaddress" class="form-control">
                             </div>

                              <div class="form-group col-md-4">
                             <label>Service Provider Name</label>
                                <select class="select2 form-control" name="txtservice_Provider" required onchange="showEmailAndPhone(this.value)">
                                    <option value="">Select Service Provider Name</option>
                                    <?php 
                                        $getVendors = $this->db->query('select * from shop_keeper')->result_array();
                                        if(count($getVendors) > 0)
                                        {
                                            foreach($getVendors as $key=>$value)
                                            {
                                    ?>
                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name']. '('.$value['contact'].')'; ?></option>
                                    <?php } }else{ ?>
                                        <option value="">No Vendors Found</option>
                                    <?php } ?>
                                </select>
                             </div>

                             <div class="form-group col-md-4">
                             <label>Email</label>
                             <input type="text" name="txtemail" class="form-control" id="email" readonly>
                             </div>

                              <div class="form-group col-md-4">
                                    <label>Phone Number</label>
                                    <input type="text" name="txtphonenumber" class="form-control"  id="phone" readonly>
                                   </div>


                                   <div class="form-group col-md-4">
                                   <label>Service Cost</label>
                                   <input type="text" name="txtservice_cost" class="form-control">
                                   </div>

                                    <div class="form-group col-md-12">
                                  <label>Details</label>
                                  <textarea rows="5" name="txtdetails" class="form-control ckeditor">
                                  
                                  </textarea> 
                                  </div> 

                                    <div class="form-group col-md-4">
                                    <label>Star Rating</label>
                                    <select name="ddlstarrating" class="form-control">
                                      <option>Select</option>
                                      <option value="1.0">1.0</option>
                                      <option value="1.5">1.5</option>
                                      <option value="2">2</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
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
    <?php } ?>                
                        
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
     .select2-container{
        display: block;
        width: auto!important;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #6e707e;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #d1d3e2;
        border-radius: 0.35rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
     }
     .select2-container--default .select2-selection--single{
         padding-top:3px;
         height:100%;
     }
     .select2-container--default .select2-selection--single .select2-selection__arrow{
         height:100%;
     }
</style>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>

    $('.select2').select2();
    
    function getSubCategory(val)
    {
        $('#subcategory').empty();
        $.ajax({
            url:'<?php echo base_url(); ?>Admin/getSubCategories',
            data:{catId:val},
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
                                        .text(value.subcategoryname)); 
                    });
                }else
                {
                    $('#subcategory').append($("<option></option>").attr("value", "").text("No Sub Category Found")); 
                }
            }
        })
    }
    
    function showEmailAndPhone(val)
    {
        $.ajax({
            url:'<?php echo base_url(); ?>Admin/showEmailAndPhone',
            data:{id:val},
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                $('#email').val(parse.email);
                $('#phone').val(parse.phone);
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