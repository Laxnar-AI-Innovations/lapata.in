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
                            <h6 class="m-0 font-weight-bold text-primary">Blog</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                       
                        <form method="post" action="<?php echo base_url('admin/blog/do_add'); ?>" enctype="multipart/form-data">

                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label>Title</label>
                              <input type="text" name="txttitle" class="form-control">
                            </div>


                                   <div class="form-group col-md-4">
                                   <label> Image</label>
                                  <input type="file" name="image" class="form-control">
                                   </div>

                                    <div class="form-group col-md-4">
                              <label>Tags</label>
                              <input type="text" name="txttags" class="form-control">
                            </div>



                             <div class="form-group col-md-4">
                              <label>Status</label>
                              <select name= "ddlstatus" class="form-control">
                                <option value="select">Select</option>
                                
                              <option value="visible">Visible</option>
                                <option value="hide">Hide</option>
                              </select>
                            </div>


                            <div class="form-group col-md-4">
                              <label>Date</label>
                              <input type="date" name="date" class="form-control">
                            </div>
                          </div>

                           <div class="form-group col-md-12">
                            <label>Details</label>
                            <textarea rows="4" cols="50" name="txtdetails" class="form-control" >
                            
                           </textarea>
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