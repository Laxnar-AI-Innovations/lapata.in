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
                            <h6 class="m-0 font-weight-bold text-primary">Subcategory</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                       
                        <form method="post" action="<?php echo base_url('admin/subcategory/do_add'); ?>" enctype="multipart/form-data">
                           
                            <div class="form-row">
                            <div class="form-group col-md-4">
                            <label>Category Name</label>
                            <select name="ddlcatename" class="form-control">
                                <option>Select</option>
                           <?php foreach ($category as $key => $value) {  ?>
                            <option value="<?php echo $value['categoryname']; ?>"><?php echo $value['categoryname']; ?></option>
                          <?php     } ?>
                            </select>
                            </div>
 
                            <div class="form-group col-md-4">
                            <label> Sub Category Name</label>
                           <input type="text" name="txtsubcatename" class="form-control">
                            </div>


                              <div class="form-group col-md-4">
                              <label>Status</label>
                              <select name= "ddlstatus" class="form-control">
                                <option value="select">Select</option>
                                
                              <option value="visible">Visible</option>
                                <option value="hide">Hide</option>
                              </select>
                            </div>
                            </div>
                      

      <div class="form-group">
    <button name="btnsubmit" class="btn btn-primary">Save the details</button>
    </div>
    </form>
    </div>
</div>
                              <div class="col-md-12">

                            <div class="table-responsive" style="overflow: scroll;height: 500px">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>categoryname</th>
                                    <th>subcategoryname</th>
                                    <th>status</th>
                                      <th>action</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($subcategory as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                   <td><?php echo $bd['categoryname'] ?></td>
                                   <td><?php echo $bd['subcategoryname'] ?></td>
                                   <td><?php echo $bd['status'] ?></td>
                                   
                                   <td><a class="btn btn-danger" href="<?php echo base_url('admin/subcategory/do_delete/'.$bd['id']); ?>">Delete</a></td>
                                                                   
                                    </td> 
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