
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
                             <a href="<?php echo base_url('admin/worker'); ?>" class="btn btn-primary purple" style="float:right;"> + Add Worker</a>
                        </div>
            <div class="card">
                <div class="card-body">

                         <div class="col-md-12">

                            <div class="table-responsive" style="overflow: scroll;height: 500px">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                   <!--  <th>Sr No</th> -->
                                   <th>service_name</th>
                                   <th>description</th>          
                                    <th>any_id_proof</th>
                                     <th>phone_number</th>
                                   <th>additional_phone</th>          
                                    <th>landline_number </th>
                                    <th>address</th>
                                     <th>email</th>
                                      <th>website</th>
                                     <th>upload_image</th>
                                     <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($worker as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <!-- <td><?php echo $i;?></td> -->
                                   <td><?php echo $bd['service_name'] ?></td>
                                   <td><?php echo $bd['description'] ?></td>
                                    <td><?php echo $bd['any_id_proof'] ?></td>
                                   <td><?php echo $bd['phone_number'] ?></td>
                                    <td><?php echo $bd['additional_phone'] ?></td>
                                   <td><?php echo $bd['landline_number'] ?></td>
                                   <td><?php echo $bd['address'] ?></td>
                                    <td><?php echo $bd['email'] ?></td>
                                     <td><?php echo $bd['website'] ?></td>
                    
                                 
                                    <td>
                                    <a href="<?php echo base_url($bd['image']); ?>"  target="_blank" title="You can click to view image">
                                    <img src="<?php echo base_url($bd['image']); ?>" style="width:100px;height: 50px">
                                      </a>
                                  </td>
                                  
                                    <td><a class="btn btn-danger" href="<?php echo base_url('admin/worker/do_delete/'.$bd['id']); ?>">Delete</a></td>
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