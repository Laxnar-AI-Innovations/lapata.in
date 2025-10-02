
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
 <div class="card shadow mb-1">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">Community</h6> -->
                             <a href="<?php echo base_url('admin/business'); ?>" class="btn btn-primary purple" style="float:right;"> + Add Business</a>
                        </div>
            <div class="card">
                <div class="card-body">

                         <div class="col-md-12">

                            <div >
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                   <!--  <th>Sr No</th> -->
                                    <th>Vendor Name</th>
                                    <th>Category</th>
                                    <th>Service Name</th>
                                     <th>Address</th>
                                     <th>View details</th>   
              
                                   
                             </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                
                                    foreach($all_vendor_service as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <!-- <td><?php echo $i;?></td> -->
                                     <td><?php $vendor_name=$this->db->query('select name from shop_keeper where id='.$bd['vendor_id'].'')->result_array();
                                     
                                     foreach($vendor_name as $vd) {
                                         echo $vd['name'];
                                     }
                                     
                                     ?></td>
                                   <td>
                                        <?php 
                                            $getCategoryname = $this->db->query('select * from businesscategory where id='.$bd['category_id'])->result_array();
                                        ?>
                                       <?php echo $getCategoryname[0]['categoryname'] ?></td>
                                   <td><?php echo $bd['service_name'] ?></td>
                                    <td><?php echo $bd['address'] ?></td>
                                    <td></td>
                                  
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