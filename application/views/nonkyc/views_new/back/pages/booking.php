
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
                            
                             
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                <div class="col-md-12">

                            <div >
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Minimum Date:</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" id="min" name="min" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Maximum Date:</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" id="max" name="max" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                     <th>Customer Name</th> 
                                    <th>Service Name</th>
                                    <th>Booking date</th>
                                    <th>Booking Time</th>
                                    <th>Location</th>
                                    <th>Payment Mode</th>
                                    <th>Booking Status</th>    
                                    <th>View Detail</th>                 
                                </tr>
                            </thead>
                            <tbody>

                                 <?php
                                $i = 0;
                                 $book_data=$this->db->query('select * from booking_service ')->result_array();
                                    foreach($book_data as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                   <td><?php echo $bd['customer_name'] ?></td>
                                   <td><?php echo $bd['service_name'] ?></td>
                                   
                                   <td><?php echo $bd['booking_date'] ?></td>
                                   <td><?php echo $bd['from_time'] ?></td>
                                   <td><?php echo $bd['service_location'] ?></td>
                                   <td><?php 
                                   if($bd['cod']==2){
                                       echo "wallet";
                                   }
                                   else{
                                       echo "Cash On Delievery";
                                   }
                                   ?></td> 

                                   <td>
                                       <select class="form-control w-auto" onchange="updateStatus(this.value,<?php echo $bd['id']; ?>)">
                                           <option value="pending" <?php if($bd['booking_status'] == 'pending'){ echo "selected"; } ?>>Pending</option>
                                           <option value="complete" <?php if($bd['booking_status'] == 'complete'){ echo "selected"; } ?>>Complete</option>
                                           <option value="cancel" <?php if($bd['booking_status'] == 'cancel'){ echo "selected"; } ?>>Cancel</option>
                                       </select>
                                   </td>
                                    <td><a class="btn btn-success" href="<?php echo base_url('admin/booking/do_view/'.$bd['id']); ?>">View</a></td>

                                </tr>
                                <?php }?>                   
                            </tbody>
                                <!-- <?php
                                $i = 0;
                                    foreach($booking_data as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td> 
                                    <td><?php echo $bd['service_location'] ?></td>
                                    <td><?php echo $bd['service_name'] ?></td>
                                    <td><?php echo $bd['category_name'] ?></td>
                                    <td><?php echo $bd['sub_category_name'] ?></td>
                                 
                                   
                                </tr>
                                <?php }?>                     
                            </tbody> -->
                        </table>
                    </div>
                    </div>
                   </div>
                  </div>
                  </div> 
                  <script>
                     function updateStatus(val,id)
                     {
                         $.ajax({
                             url:'<?php echo base_url(); ?>Admin/updateBookingStatus',
                             type:'post',
                             data:{status:val,id:id},
                             success:function(res)
                             {
                                 alert('Status Updated Successfully');
                                 location.reload();
                             }
                         })
                     }
                 </script>