
<div class="container-fluid">
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
 <div class="card shadow mb-1">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">Community</h6> -->
                             <a href="<?php echo base_url('admin/add_vendor'); ?>" class="btn btn-primary purple" style="float:right;"> + Add Vendpr</a>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                <div class="col-md-12">

                            <div >
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Vendor Name</th> 
                                    <th>Shop Name</th>
                                    <th>Shop Address</th>
                                    <th>Shop Image</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($vendor_data as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td> 
                                    <td><?php echo $bd['name'] ?></td>
                                    <td><?php echo $bd['shop_name'] ?></td>
                                    <td><?php echo $bd['shop_address'] ?></td>
                                    <td><img src="<?php echo base_url(); ?><?php echo $bd['vendor_img']; ?>" style="width:100%;height:100px;"></td>
                                    <td><?php echo $bd['contact'] ?></td>
                                    <td>
                                        <?php if($bd['status'] == 0){ ?>
                                        <select class="form-control w-auto" onchange="updateVendorStatus(this.value,<?php echo $bd['id']; ?>)">
                                            <option value="">Select Status</option>
                                            <option value="1">Approve</option>
                                            <option value="2">Cancel</option>
                                        </select>
                                        <?php }else{
                                            if($bd['status'] == 1)
                                            {
                                                echo "Verified";
                                            }else
                                            {
                                                echo "Cancelled";
                                            }
                                        } ?>
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
                 <script>
                     function updateVendorStatus(val,id)
                     {
                         $.ajax({
                             url:'<?php echo base_url(); ?>Admin/updateVendorStatus',
                             data:{status:val,id:id},
                             type:'post',
                             success:function(res)
                             {
                                 alert('Status Updated Successfully');
                                 location.reload();
                             }
                         })
                     }
                 </script>