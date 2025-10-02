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
                            <h6 class="m-0 font-weight-bold text-primary">Service Provider</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                       
                        <form method="post" action="<?php echo base_url('admin/service_provider/do_add'); ?>" enctype="multipart/form-data">

                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label>Service Name</label>
                              <input type="text" name="txtservicename" class="form-control">
                            </div>

                             <div class="form-group col-md-4">
                             <label>Company Name</label>
                             <input type="text" name="txtcompanyname" class="form-control">
                             </div>

                              <div class="form-group col-md-4">
                              <label>Owner Name</label>
                              <input type="text" name="txtownername" class="form-control">
                              </div>

                               <div class="form-group col-md-4">
                             <label>Description</label>
                             <input type="text" name="txtdescription" class="form-control">
                             </div>


                             <div class="form-group col-md-4">
                                    <label>GST number</label>
                                    <input type="text" name="txtgstnumber" class="form-control">
                                   </div>


                                   <div class="form-group col-md-4">
                              <label>Any id proof</label>
                              <input type="text" name="txtidproof" class="form-control">
                              </div>           

           

                                  <div class="form-group col-md-4">
                                    <label>Phone Number</label>
                                    <input type="text" name="txtphonenumber" class="form-control">
                                   </div>

                                   <div class="form-group col-md-4">
                                   <label>Additional phone number(Optional)</label>
                                   <input type="text" name="txtnumber" class="form-control">
                                   </div>

                                   <div class="form-group col-md-4">
                                     <label>Landline number(Optional)</label>
                                     <input type="text" name="txtlandline" class="form-control">
                                   </div>

                                   <div class="form-group col-md-4">
                                   <label>Address</label>
                                   <input type="text" name="txtaddress" class="form-control">
                                   </div>

                                   <div class="form-group col-md-4">
                                   <label>Email</label>
                                   <input type="text" name="txtemail" class="form-control">
                                   </div>

                                   <div class="form-group col-md-4">
                                   <label>Website</label>
                                   <input type="text" name="txtwebsite" class="form-control">
                                   </div>

                                   <div class="form-group col-md-4">
                                   <label>Upload Image</label>
                                  <input type="file" name="image" class="form-control">
                                   </div>
                                   </div>

                                  
      

       <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
  

    </div>
    </form>         
      </div>
                            
                        
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