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
                            <h6 class="m-0 font-weight-bold text-primary">Product Info</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                            <div class="col-md-12">
                            <div class="table-responsive" style="overflow: scroll;height: 500px">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                     <th>Sr No</th>
                                    <th>Cate name</th>
                                    <th>Subcate name</th>
                                      <th>Product name</th>
                                      <th>Quantity</th>
                                      <th>Remove</th>
                                      <th>Edit/View</th>
                                      </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($productinfo_data as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                   <td><?php echo $bd['catname'] ?></td>
                                   <td><?php echo $bd['subcatname'] ?></td>
                                   <td><?php echo $bd['productname'] ?></td>
                                   <td><?php echo $bd['qty'] ?></td>
                                   <td><a class="btn btn-danger" href="<?php echo base_url('admin/productinfo/do_delete/'.$bd['id']); ?>">Delete</a></td>
                                    <td><a class="btn btn-danger" href="<?php echo base_url('admin/productinfo/do_edit/'.$bd['id']); ?>">Edit/View</a></td>
                                    



                                   <!-- <td><a class="btn btn-danger" href="<?php echo base_url('admin/blog/do_delete/'.$bd['id']); ?>">Delete</a> -->
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