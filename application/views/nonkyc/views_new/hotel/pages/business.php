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
                            <h6 class="m-0 font-weight-bold text-primary">Business Details</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                       <?php if($editname=='do_edit'){?>
                    <div class="col-md-12">
                     <?php foreach ($businessdata as $key => $value) {?>  
                        <form method="post" action="<?php echo base_url('admin/business/do_update/'.$value["id"]) ?>" enctype="multipart/form-data">

                            <div class="form-row">
                              <div class="form-group col-md-3">
                                <label>City</label>
                                <select name="ddlcity" class="form-control" value="<?php echo $value['city']; ?>">
                                  <option>Select City</option>
                                </select>
                              </div>

                                <div class="form-group col-md-3">
                                  <label>Phone Number</label>
                                  <input type="text" name="txtphnno" class="form-control" value="<?php echo $value['phonenumber']; ?>">
                                </div>

                                <div class="form-group col-md-3">
                                  <label>Address</label>
                                  <input type="text" name="txtaddress" class="form-control" value="<?php echo $value['address']; ?>">
                                </div>

                                <div class="form-group col-md-3">
                                  <label>Community</label>
                                  <select name="ddlcommunity" class="form-control">
                                    <option>Select Community</option>
                                     <?php foreach ($community as $key => $cm) {  ?>
                                    <option value="<?php echo $cm['community']; ?>"><?php echo $value['community']; ?></option>
                          <?php     } ?>   
                                  </select>
                                </div>

                                 <div class="form-group col-md-3">
                                  <label>Category</label>
                                  <select name="ddlcategory" class="form-control">
                                    <option>Select Category</option>
                                     <?php foreach ($businesssubcategory as $key => $cat) {  ?>
                                    <option value="<?php echo $cm['category']; ?>"><?php echo $value['category']; ?></option>
                          <?php     } ?>   
                                  </select>
                                </div>

                                <div class="form-group col-md-3">
                                  <label>Email address</label>
            <input type="text" name="txtemail" class="form-control" value="<?php echo $value['email'];  ?>"    >
                                  </div>

                                  <div class="form-group col-md-3">
                                    <label>City</label>
                                    <input type="text" name="txtcityy" class="form-control" value="<?php echo $value['cityy']; ?>">
                                  </div>

                                  <div class="form-group col-md-3">
                                    <label>Sub Category</label>
                                    <select name="ddlsubcat" class="form-control">
                                      <option>Select</option>
                                      <?php foreach ($businesssubcategory as $key => $bs) {  ?>
                                    <option value="<?php echo $bs['subcategoryname']; ?>"><?php echo $value['subcategoryname']; ?></option>
                          <?php     } ?> 
                                     
                                    </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                      <label>Website</label>
                                      <input type="text" name="txtwebsite" class="form-control" value="<?php echo $value['website']; ?>">
                                      </div>
                              
                              <div class="form-group col-md-3">
                                <label>Post Code</label>
                                <input type="text" name="txtpostcode" class="form-control" value="<?php echo $value['postcode']; ?>">
                                </div>

                                <div class="form-group col-md-3">
                                  <label>Business Title</label>
                                  <input type="text" name="txttitle" class="form-control" value="<?php echo $value['businesstitle']; ?>">
                                 </div>

                                 

                                  <div class="form-group col-md-3">
                                    <label>Star Rating</label>
                                    <select name="ddlstarrating" class="form-control">
                                      <option value="1.0">1.0</option>
                                      <option value="1.5">1.5</option>
                                      <option value="2.0">2.0</option>
                                      <option value="2.5">2.5</option>
                                      <option value="3.0">3.5</option>
                                    </select>
                                  </div>

                                    <div class="form-group col-md-10">
                                  <label>Business Description</label>
                                  <textarea rows="5"  name="txtdescription" class="form-control" placeholder="Description">
                                    <?php echo $value['description']; ?>
                                  </textarea> 
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label>Add Image</label>
                                    <input type="file" name="image" class="form-control">
                                  </div>
                                  </div>

                                          <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Update the details</button>
      <a href="<?php echo base_url('admin/business') ?>" class="btn btn-warning">Go to back </a>
  </div>
    <div class="form-group">
                   <img src="<?php echo base_url($value['image']); ?>"  style="width: 200px; height: 200px;" name="oldimage"> 
                 </div>
              
  

    </div>
    </form> 
     <?php  } ?>        
      </div>
    <?php } else { ?>
            

                    <div class="col-md-12">
                      
                        <form method="post" action="<?php echo base_url('admin/business/do_add'); ?>" enctype="multipart/form-data">

                            <div class="form-row">
                              <div class="form-group col-md-3">
                                <label>City</label>
                                <select name="ddlcity" class="form-control">
                                  <option>Select City</option>
                                </select>
                              </div>

                                <div class="form-group col-md-3">
                                  <label>Phone Number</label>
                                  <input type="text" name="txtphnno" class="form-control">
                                </div>

                                <div class="form-group col-md-3">
                                  <label>Address</label>
                                  <input type="text" name="txtaddress" class="form-control">
                                </div>

                                <div class="form-group col-md-3">
                                  <label>Community</label>
                                  <select name="ddlcommunity" class="form-control">
                                    <option>Select Community</option>
                                     <?php foreach ($community as $key => $value) {  ?>
                                    <option value="<?php echo $value['community']; ?>"><?php echo $value['community']; ?></option>
                          <?php     } ?>   
                                  </select>
                                </div>

                                <div class="form-group col-md-3">
                                  <label>Category</label>
                                  <select name="ddlcategory" class="form-control">
                                    <option>Select Category</option>
                                     <?php foreach ($businesssubcategory as $key => $cat) {  ?>
                                    <option value="<?php echo $cm['category']; ?>"><?php echo $value['category']; ?></option>
                          <?php     } ?>   
                                  </select>
                                </div>


                                <div class="form-group col-md-3">
                                  <label>Email address</label>
                                  <input type="text" name="txtemail" class="form-control">
                                  </div>

                                  <div class="form-group col-md-3">
                                    <label>City</label>
                                    <input type="text" name="txtcityy" class="form-control">
                                  </div>

                                  <div class="form-group col-md-3">
                                    <label>Sub Category</label>
                                    <select name="ddlsubcat" class="form-control">
                                      <option>Select</option>
                                      <?php foreach ($businesssubcategory as $key => $value) {  ?>
                                    <option value="<?php echo $value['subcategoryname']; ?>"><?php echo $value['subcategoryname']; ?></option>
                          <?php     } ?> 
                                     
                                    </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                      <label>Website</label>
                                      <input type="text" name="txtwebsite" class="form-control">
                                      </div>
                              
                              <div class="form-group col-md-3">
                                <label>Post Code</label>
                                <input type="text" name="txtpostcode" class="form-control">
                                </div>

                                <div class="form-group col-md-3">
                                  <label>Business Title</label>
                                  <input type="text" name="txttitle" class="form-control">
                                 </div>

                                 <div class="form-group col-md-3">
                                  <label>Business Description</label>
                                  <textarea rows="1" cols="50" name="txtdescription" class="form-control" placeholder="Description">
                                  </textarea> 
                                  </div>

                                  <div class="form-group col-md-3">
                                    <label>Star Rating</label>
                                    <select name="ddlstarrating" class="form-control">
                                      <option value="1.0">1.0</option>
                                      <option value="1.5">1.5</option>
                                      <option value="2.0">2.0</option>
                                      <option value="2.5">2.5</option>
                                      <option value="3.0">3.5</option>
                                    </select>
                                  </div>

                                  <div class="form-group col-md-3">
                                    <label>Add Image</label>
                                    <input type="file" name="image" class="form-control">
                                  </div>
                                  </div>

                                          <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
      <a href="<?php echo base_url('admin/businesstable'); ?>" class="btn btn-danger" >View Business Info</a>
  

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
<SCRIPT language=Javascript>
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