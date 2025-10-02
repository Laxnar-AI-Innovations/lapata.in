
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
                             <a href="<?php echo base_url('admin/community'); ?>" class="btn btn-primary purple" style="float:right;"> + Add City</a>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">

                         <div class="col-md-12">

                            <div >
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                   <!--  <th>Sr No</th> -->
                                   <th>City</th>
                                   <th>Area</th>      
                                   <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Edit/View</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($community as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <!-- <td><?php echo $i;?></td> -->
                                   <td><?php echo $bd['city'] ?></td>
                                   <td><?php echo $bd['community'] ?></td>
                                   <td>
                                       <img src="<?php echo base_url(); ?><?php echo $bd['image']; ?>" style="width:100px;">
                                   </td>
                                   <td><?php echo $bd['status'] ?></td>
                                  
                                    <td><a class="btn btn-danger" href="<?php echo base_url('admin/community/do_delete/'.$bd['id']); ?>">Delete</a></td>

                                     <td><a class="btn btn-success" href="<?php echo base_url('admin/community/do_edit/'.$bd['id']); ?>">Edit/View</a></td>

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