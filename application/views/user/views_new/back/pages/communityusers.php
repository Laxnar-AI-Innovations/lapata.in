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
                            <h6 class="m-0 font-weight-bold text-primary">Users Details</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                       <?php if($editname=='do_edit'){ ?>
                    <div class="col-md-12">
                      <?php foreach ($communityusersdata as $key => $value) { ?>        
                        <form method="post" action="<?php echo base_url('admin/communityusers/do_update/'.$value["id"]) ?>" enctype="multipart/form-data">

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label>Community Name</label>
                              <input type="text" name="txtcommunityname" class="form-control" 
                              value="<?php echo $value['communitname']; ?>">
                            </div>


                             <div class="form-group col-md-6">
                                   <label>Contact Number</label>
                                  <input type="number" name="number" class="form-control"
                                  value="<?php echo $value['number']; ?>">
                                   </div>

                                    <div class="form-group col-md-6">
                                  <label>Description</label>
                                  <textarea rows="1" cols="50" name="txtdescription" class="form-control">
                                    <?php echo $value['description']; ?>
                                  </textarea> 
                                  </div>

                                   <div class="form-group col-md-6">
                                   <label>Email address</label>
                                  <input type="text" name="txtemail" class="form-control"  placeholder="Email" value="<?php echo $value['email']; ?>">
                                   </div>

                                   <div class="form-group col-md-6">
                                    <label>Username</label>
                                    <input type="text" name="txtusrename" class="form-control" value="<?php echo $value['username']; ?>">
                                     </div>

                                   <div class="form-group col-md-6">
                                    <label>Address</label>
                                    <input type="text" name="txtaddress" class="form-control" value="<?php echo $value['address']; ?>">
                                   </div>

                                   <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="txtname" class="form-control" value="<?php echo $value['name']; ?>">
                                     </div>

                                      <div class="form-group col-md-6">
                                     <label>City</label>
                                     <input type="text" name="txtcity" class="form-control" value="<?php echo $value['city']; ?>">
                                   </div>

                                    <div class="form-group col-md-6">
                                    <label>Hero Image</label>
                                    <input type="file" name="image" class="form-control" value="<?php echo $value['heroimage']; ?>">
                                    </div>
                               
                                   <div class="form-group col-md-6">
                                   <label> Post Code</label>
                                  <input type="text" name="txtpostcode" class="form-control" placeholder="post code" value="<?php echo $value['postcode']; ?>">
                                   </div>

                                    <div class="form-group col-md-6">
                                    <label>Logo Image</label>
                                    <input type="file" name="logo" class="form-control" value="<?php echo $value['logoimage']; ?>">
                                    </div>
                                  </div>
  

      <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Update the details</button>
       <a href="<?php echo base_url('admin/communityusers') ?>" class="btn btn-warning">Go to back </a>
  
   <div class="form-group">

                   <img src="<?php echo base_url($value['heroimage']); ?>"  style="width: 200px; height: 200px;" name="oldimage"> 
                 </div>

                  <div class="form-group">
                   <img src="<?php echo base_url($value['logoimage']); ?>"  style="width: 200px; height: 200px;" name="logoimage"> 
                 </div>

    </div>
    </form>  
        <?php  } ?>       
      </div>
         <?php } else { ?>  

                        <div class="col-md-12">
              
                        <form method="post" action="<?php echo base_url('admin/communityusers/do_add'); ?>" enctype="multipart/form-data">

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label>Community Name</label>
                              <input type="text" name="txtcommunityname" class="form-control">
                            </div>


                             <div class="form-group col-md-6">
                                   <label>Contact Number</label>
                                  <input type="number" name="number" class="form-control">
                                   </div>

                                    <div class="form-group col-md-6">
                                  <label>Description</label>
                                  <textarea rows="1" cols="50" name="txtdescription" class="form-control">
                                  </textarea> 
                                  </div>

                                   <div class="form-group col-md-6">
                                   <label>Email address</label>
                                  <input type="text" name="txtemail" class="form-control" placeholder="Email">
                                   </div>

                                   <div class="form-group col-md-6">
                                    <label>Username</label>
                                    <input type="text" name="txtusrename" class="form-control">
                                     </div>

                                   <div class="form-group col-md-6">
                                    <label>Address</label>
                                    <input type="text" name="txtaddress" class="form-control">
                                   </div>

                                   <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="txtname" class="form-control">
                                     </div>

                                      <div class="form-group col-md-6">
                                     <label>City</label>
                                     <input type="text" name="txtcity" class="form-control">
                                   </div>

                                    <div class="form-group col-md-6">
                                    <label>Hero Image</label>
                                    <input type="file" name="image" class="form-control">
                                    </div>
                               
                                   <div class="form-group col-md-6">
                                   <label> Post Code</label>
                                  <input type="text" name="txtpostcode" class="form-control" placeholder="post code">
                                   </div>

                                    <div class="form-group col-md-6">
                                    <label>Logo Image</label>
                                    <input type="file" name="logo" class="form-control">
                                    </div>
                                  </div>
  

      <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
       <a href="<?php echo base_url('admin/communityusers_table'); ?>" class="btn btn-danger" >View Communityusers Info</a>
  

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