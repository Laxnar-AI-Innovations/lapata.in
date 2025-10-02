
<div class="container">
      <div class="row">
                    <div class="col-md-12">
                       <div class="section-header text-center">
                    <h2>Post your Service</h2>
                </div>
                        <form method="post" action="<?php echo base_url('home/service/do_add'); ?>" enctype="multipart/form-data">

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
                             <select name="ddlcategory" class="form-control" onchange="getSubCategories(this.value)">
                             <option>Select Category</option>
                             <?php foreach ($businesscategory as $key => $bcat) {  ?>
                            <option value="<?php echo $bcat['id']; ?>"><?php echo $bcat['categoryname']; ?></option>
                          <?php  } ?>         

                             </select>
                             </div>

                              <div class="form-group col-md-4">
                                    <label>Sub Category</label>
                                    <select id="subcat" name="ddlsub_category" class="form-control">
                                    </select>
                                  </div>

                                   <div class="form-group col-md-4">
                              <label>Service Name</label>
                              <input type="text" name="txtservicename" class="form-control">
                            </div>

                                   <div class="form-group col-md-4">
                                    <label>City</label>
                                    <select name="ddlcity" class="form-control">
                                      <option>Select</option>
                                     <?php foreach ($community as $key => $cum) { ?>

                             <option value="<?php echo $cum['city']; ?>">
                               <?php echo $cum['city']; ?> </option>
                             <?php } ?>

                                    </select>
                                  </div>


                                 

                             <div class="form-group col-md-4">
                             <label>Address</label>
                             <input type="text" name="txtaddress" class="form-control">
                             </div>

                              <div class="form-group col-md-4">
                             <label>Service Provider Name</label>
                             <input type="text" name="txtservice_Provider" class="form-control">
                             </div>

                             <div class="form-group col-md-4">
                             <label>Email</label>
                             <input type="text" name="txtemail" class="form-control">
                             </div>

                              <div class="form-group col-md-4">
                                    <label>Phone Number</label>
                                    <input type="text" name="txtphonenumber" class="form-control">
                                   </div>


                                   <div class="form-group col-md-4">
                                   <label>Service Cost</label>
                                   <input type="text" name="txtservice_cost" class="form-control">
                                   </div>

                                    <div class="form-group col-md-12">
                                  <label>Details</label>
                                  <textarea rows="5" name="txtdetails" class="form-control">
                                  
                                  </textarea> 
                                  </div> 

                                    <div class="form-group col-md-4">
                                    <label>Star Rating</label>
                                    <select name="ddlstarrating" class="form-control">
                                      <option>Select</option>
                                      <option value="1.0">1.0</option>
                                      <option value="1.5">1.5</option>
                                      <option value="2.0">2.0</option>
                                      <option value="2.5">2.5</option>
                                      <option value="3.0">3.5</option>
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
       <!--  <a href="<?php echo base_url('admin/service_table'); ?>" class="btn btn-danger" >View Service Table Info</a>
   -->
  

  

    </div>
    </form>         
      </div>
                            
                        
                </div>
              </div>
<script type="text/javascript">
    function getSubCategories(val)
    {
        $('#subcat').empty();
        if(val != '')
        {
            $.ajax({
                url:'<?php echo base_url(); ?>Home/getSubCategoriesBasedOnCategory',
                data:{id:val},
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.length > 0)
                    {
                        $.each(parse, function(key, value) {   
                             $('#subcat')
                                 .append($("<option></option>")
                                            .attr("value", value.id)
                                            .text(value.subcategoryname )); 
                        });
                    }else
                    {
                        $('#subcat').empty();
                        $('#subcat').append($("<option></option>").attr('value','').text('No Sub Categories Found'));
                    }
                }
            })
        }else
        {
            $('#subcat').empty();
        }
    }
</script>