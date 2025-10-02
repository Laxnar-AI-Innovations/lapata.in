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
                            <h6 class="m-0 font-weight-bold text-primary">Organisation Details</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                      <?php if($editname=='do_edit'){ ?>
                    <div class="col-md-12">
                      <?php foreach ($organisationdata as $key => $value) { ?>      
                        <form method="post" action="<?php echo base_url('admin/organisation/do_update/'.$value["id"]) ?>" enctype="multipart/form-data">

                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label>Title</label>
                              <input type="text" name="txttitle" class="form-control"
                              value="<?php echo $value['title']; ?>">
                            </div>

                             <div class="form-group col-md-4">
                             <label>Community</label>
                             <select name="ddlcommunity" class="form-control">
                             <option>Select Community</option>
                             <?php foreach ($community as $key => $com) {  ?>
                            <option value="<?php echo $value['community']; ?>"><?php echo $value['community']; ?></option>
                          <?php     } ?>         

                             </select>
                             </div>

                             <div class="form-group col-md-4">
                                   <label>Phone Number</label>
                                  <input type="number" name="number" class="form-control" 
                                  value="<?php echo $value['phoneno']; ?>">
                                   </div>

                                  <div class="form-group col-md-4">
                                  <label>Description</label>
                                  <textarea rows="1" cols="50" name="txteventdescription" class="form-control" value="<?php echo $value['description']; ?>">
                                    <?php echo $value['description']; ?>
                                  </textarea> 
                                  </div>           

                                  <div class="form-group col-md-4">
                                    <label>Address</label>
                                    <input type="text" name="txtaddress" class="form-control" 
                                    value="<?php echo $value['address']; ?>">
                                   </div>

                                   <div class="form-group col-md-4">
                                   <label>Email address</label>
                                  <input type="text" name="txtemail" class="form-control" value="<?php echo $value['email']; ?>" placeholder="Email">
                                   </div>

                                   <div class="form-group col-md-4">
                                     <label>City</label>
                                     <input type="text" name="txtcity" class="form-control" value="<?php echo $value['city']; ?>">
                                   </div>

                                   <div class="form-group col-md-4">
                                  <label>Website</label>
                                  <input type="text" name="txtwebsite" class="form-control" value="<?php echo $value['website']; ?>" placeholder="Web URL">
                                   </div>

                                   <div class="form-group col-md-4">
                                   <label> Post Code</label>
                                  <input type="text" name="txtpostcode" class="form-control" placeholder="post code" value="<?php echo $value['postcode']; ?>">
                                   </div>

                                  <div class="form-group col-md-4">
                                    <label>Add Image</label>
                                    <input type="file" name="image" class="form-control">
                                    </div>
                                  </div>

                                  
      

       <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Update the details</button>
       <a href="<?php echo base_url('admin/organisation') ?>" class="btn btn-warning">Go to back </a>
       
        <div class="form-group">
                   <img src="<?php echo base_url($value['image']); ?>"  style="width: 200px; height: 200px;" name="oldimage"> 
                 </div>

    </div>
    </form> 
         <?php  } ?>  

      </div>
       <?php } else { ?>
                       <div class="col-md-12">
                       
                        <form method="post" action="<?php echo base_url('admin/organisation/do_add'); ?>" enctype="multipart/form-data">

                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label>Title</label>
                              <input type="text" name="txttitle" class="form-control">
                            </div>

                             <div class="form-group col-md-4">
                             <label>Community</label>
                             <select name="ddlcommunity" class="form-control">
                             <option>Select Community</option>
                             <?php foreach ($community as $key => $value) {  ?>
                            <option value="<?php echo $value['community']; ?>"><?php echo $value['community']; ?></option>
                          <?php     } ?>         

                             </select>
                             </div>

                             <div class="form-group col-md-4">
                                   <label>Phone Number</label>
                                  <input type="number" name="number" class="form-control">
                                   </div>

                                  <div class="form-group col-md-4">
                                  <label>Description</label>
                                  <textarea rows="1" cols="50" name="txteventdescription" class="form-control">
                                  </textarea> 
                                  </div>           

                                  <div class="form-group col-md-4">
                                    <label>Address</label>
                                    <input type="text" name="txtaddress" class="form-control">
                                   </div>

                                   <div class="form-group col-md-4">
                                   <label>Email address</label>
                                  <input type="text" name="txtemail" class="form-control" placeholder="Email">
                                   </div>

                                   <div class="form-group col-md-4">
                                     <label>City</label>
                                     <input type="text" name="txtcity" class="form-control">
                                   </div>

                                   <div class="form-group col-md-4">
                                  <label>Website</label>
                                  <input type="text" name="txtwebsite" class="form-control" placeholder="Web URL">
                                   </div>

                                   <div class="form-group col-md-4">
                                   <label> Post Code</label>
                                  <input type="text" name="txtpostcode" class="form-control" placeholder="post code">
                                   </div>

                                  <div class="form-group col-md-4">
                                    <label>Add Image</label>
                                    <input type="file" name="image" class="form-control">
                                    </div>
                                  </div>

                                  
      

       <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
       <a href="<?php echo base_url('admin/organisation_table'); ?>" class="btn btn-danger" >View Organisation Info</a>
  

    </div>
    </form>         
      </div>
            <?php }  ?>                
                        
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