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
                            <h6 class="m-0 font-weight-bold text-primary">brand</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                  
 <!-- form design-->
                    <div class="container">

                        <div class="row">

                        <!-- edit form start -->
                        <?php if ($editname=='do_edit'){?>


                            <div class="col-md-4 col-sm-4">
                              <?php foreach ($brand as $key => $value) { ?>



                         <form method="post" action="<?php echo base_url('admin/brand/do_add') ?>" enctype="multipart/form-data">
                                
                            <div class="form-group">
                                <label>Brand Name</label>
                         <input type="text" name="txtbrandname" class="form-control" value="<?php echo $value['name']; ?>">
                            </div>
                        
                            <div class="form-group">
                                <label>Brand Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>
                            <div class="form-group">
                              <label>Status</label>
                              <select name= "ddlstatus" class="form-control">
                                <option value="select">Select</option>
                                
                              <option value="visible">Visible</option>
                                <option value="hide">Hide</option>
                              </select>
                            </div>
                                
                           <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Update the details</button>
      <a href="<?php echo base_url('admin/brand') ?>" class="btn btn-warning">Go to Back </a>
    </div>
    </form> 
    <?php } ?>



      </div>
      <?php } else { ?>


                         <div class="col-md-4 col-sm-4">
                         <form method="post" action="<?php echo base_url('admin/brand/do_add') ?>" enctype="multipart/form-data">
                                
                            <div class="form-group">
                                <label>Brand Name</label>
                         <input type="text" name="txtbrandname" class="form-control">
                            </div>
                        
                            <div class="form-group">
                                <label>Brand Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>
                            <div class="form-group">
                              <label>Status</label>
                              <select name= "ddlstatus" class="form-control">
                                
                              <option value="visible">Visible</option>
                                <option value="hide">Hide</option>
                              </select>
                            </div>
                                
                           <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
  

    </div>
    </form>         
      </div>
      <?php } ?>

         
                            <div class="col-md-8">
                            <div >
                                <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
                                 
                            <thead>
                                <tr>
                                    <th class="mansi">Sr No</th>
                                    <th class="mansi">Brand Name</th>
                                      <th class="mansi">logo</th>
                                      <th class="mansi">Remove</th>
                                      <!--<th class="mansi">Edit/View</th>-->

                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($brand_data as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                   <td><?php echo $bd['name'] ?></td>
                                   <td>
                                    <a href="<?php echo base_url($bd['logo']); ?>"  target="_blank" title="You can click to view image">
                                    <img src="<?php echo base_url($bd['logo']); ?>" style="width:100px;height: 50px">
                                      </a>
                                  </td>
                                   
                                    <td><a class="btn btn-danger" href="<?php echo base_url('admin/Brand/do_delete/'.$bd['id']); ?>">Delete</a></td>

                                    <!--<td><a class="btn btn-success" href="<?php echo base_url('admin/brand/do_edit/'.$bd['id']); ?>">Edit/View</a></td>-->

                                </tr>
                                <?php }?>                   
                            </tbody>
                        </table>
                    </div>
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