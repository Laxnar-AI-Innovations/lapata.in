
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
                             <a href="<?php echo base_url('admin/review'); ?>" class="btn btn-primary purple" style="float:right;"> + Add review</a>
                        </div>
            <div class="card">
                <div class="card-body">

                         <div class="col-md-12">

                            <div >
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                     <th>Sr No</th> 
                                   <th>Service Name</th>
                                   <th>Review Name</th> 
                                   <th>Date</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($review_data as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                     <td><?php echo $i;?></td> 
                                   <td><?php  
                                   $service_name=$this->db->query('select service_name from service where id='.$bd['service_name'])->result_array();
                                   echo $service_name[0]['service_name'];
                                   ?></td>
                                 <td><?php echo $bd['review'] ?></td>
                                 <td><?php echo $bd['date'] ?></td>    
                                   
                                    <!--<td><a class="btn btn-danger" href="<?php echo base_url('admin/service/do_delete/'.$bd['id']); ?>">Delete</a></td>-->
                                    <!--<td><a class="btn btn-primary" href="<?php echo base_url('admin/service/do_edit/'.$bd['id']); ?>">Edit</a></td>-->
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