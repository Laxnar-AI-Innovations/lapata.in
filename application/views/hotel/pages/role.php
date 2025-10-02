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
                            <h6 class="m-0 font-weight-bold text-primary">Role</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                       
                        <form method="post" action="<?php echo base_url('admin/role/do_add'); ?>" enctype="multipart/form-data">
                           
                            
                            <div class="form-group col-md-4">
                            <label>Role Name</label>
                            <input type="text" name="txtrolename" class="form-control">
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
                                    <th>rolename</th>
                                    <th>date</th>
                                 
                                    <th>action</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($role as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                   <td><?php echo $bd['rolename'] ?></td>
                                   <td><?php echo $bd['date'] ?></td>
                                   
                                   <td><a class="btn btn-danger" href="<?php echo base_url('admin/role/do_delete/'.$bd['id']); ?>">Delete</a></td>
                                                                   
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