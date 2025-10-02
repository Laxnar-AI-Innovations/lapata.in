
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
                             <a href="<?php echo base_url('admin/seo'); ?>" class="btn btn-primary purple" style="float:right;"> + Add SEO</a>
                        </div>
            <div class="card">
                <div class="card-body">

                         <div class="col-md-12">

                            <div class="table-responsive" style="overflow: scroll;height: 500px">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                   <!--  <th>Sr No</th> -->
                                  
                                     <th>Page Name</th>
                                     <th>Title</th>  
                                   <!--   <th>Description</th>          
                                     <th>keyword</th>
                                     <th>Tag</th> -->
                                     <th>Action</th>
                                     <th>Edit/View</th>

                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($seo as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <!-- <td><?php echo $i;?></td> -->
                                  
                                    <td><?php echo $bd['pagename'] ?></td>
                                     <td><?php echo $bd['title'] ?></td>
                                  <!--  <td><?php echo $bd['description'] ?></td>
                                    <td><?php echo $bd['keyword'] ?></td>
                                   <td><?php echo $bd['tag'] ?></td>
                                   -->
                                 
                                   
                                  
                                    <td><a class="btn btn-danger" href="<?php echo base_url('admin/seo/do_delete/'.$bd['id']); ?>">Delete</a></td>
                                    <td><a class="btn btn-success" href="<?php echo base_url('admin/seo/do_edit/'.$bd['id']); ?>">Edit/View</a></td>

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