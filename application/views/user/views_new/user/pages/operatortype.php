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
                            <h6 class="m-0 font-weight-bold text-primary">Operator Type</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <?php if($editname=='do_edit'){?>
                    <div class="col-md-12">
                      <?php foreach ($operatortypedata as $key => $value) {?>
                         
                        <form method="post" action="<?php echo base_url('admin/operatortype/do_update/'.$value["id"]) ?>" enctype="multipart/form-data">

                         <div class="form-row">
                            <div class="form-group col-md-6">
                              <label>Type Name</label>
                              <input type="text" name="txtname" class="form-control"  value="<?php echo $value['name']; ?>">
                             </div>

                              <div class="form-group col-md-6">
                              <label>Status</label>
                              <select name= "ddlstatus" class="form-control">
                                <option>Select</option>
                              <option value="visible">Visible</option>
                              <option value="hide">Hide</option>
                              </select>
                            </div>


                            <div class="form-group col-md-6">
                              <label>Permission</label>
                              <select name= "ddlpermission" class="form-control">
                                <option>Select</option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              </select>
                            </div>
                          </div>


      <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Update the details</button>
       <a href="<?php echo base_url('admin/operatortype') ?>" class="btn btn-warning">Go to back </a>
  

    </div>
    </form> 
    <?php  } ?>         
      </div>
        <?php } else { ?>

                          <div class="col-md-12">
        
                         
                        <form method="post" action="<?php echo base_url('admin/operatortype/do_add'); ?>" enctype="multipart/form-data">

                         <div class="form-row">
                            <div class="form-group col-md-6">
                              <label>Type Name</label>
                              <input type="text" name="txtname" class="form-control">
                             </div>

                              <div class="form-group col-md-6">
                              <label>Status</label>
                              <select name= "ddlstatus" class="form-control">
                                <option>Select</option>
                              <option value="visible">Visible</option>
                              <option value="hide">Hide</option>
                              </select>
                            </div>


                            <div class="form-group col-md-6">
                              <label>Permission</label>
                              <select name= "ddlpermission" class="form-control">
                                <option>Select</option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              </select>
                            </div>
                          </div>


      <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
        <a href="<?php echo base_url('admin/operatortype_table'); ?>" class="btn btn-danger" >View Operatortype Info</a>
  

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