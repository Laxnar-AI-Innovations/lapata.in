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
                            <h6 class="m-0 font-weight-bold text-primary">profile</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                  

                    <!-- form design-->
                    <div class="container">

                        <div class="row">
                          <?php if ($editname=='do_edit'){?>
                         <div class="col-md-4 col-sm-4">

                          <?php foreach ($prodata as $key => $value) { ?>
                            
                         <form method="post" action="<?php echo base_url('admin/profile/do_update/'.$value['id']); ?>" enctype="multipart/form-data">
                                
                            <div class="form-group">
                                <label>update System Name</label>
                                <input type="text" name="txtsystemname" class="form-control" value="<?php echo $value['systemname']; ?>">
                            </div>
                        
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="txtemail" class="form-control" value="<?php echo $value['email']; ?>">
                            </div>
                              
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" name="txtcontact" class="form-control" value="<?php echo $value['contact']; ?>">
                            </div>
                            <div class="form-group">
                                <label>About</label>
                                <input type="text" name="txtabout" class="form-control" value="<?php echo $value['about']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Facebook Link</label>
                                <input type="text" name="txtfblink" class="form-control" value="<?php echo $value['facebooklink']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Instragram Link</label>
                                <input type="text" name="txtinstralink" class="form-control" value="<?php echo $value['instragramlink']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Twitter Link</label>
                                <input type="text" name="txttwitterlink" class="form-control" value="<?php echo $value['twitterlink']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="txtaddress" class="form-control" value="<?php echo $value['address']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Upload Logo</label>
                                <input type="file" name="logo" class="form-control" value="<?php echo $value['logo']; ?>">
                            </div>

                   




                             <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Update the details</button>
      <a href="<?php echo base_url('admin/profile') ?>" class="btn btn-warning">Go to Profile </a>
    </div>
      </div>         <div class="form-group">
                   <img src="<?php echo base_url($value['logo']); ?>"  style="width: 200px; height: 200px;" name="oldimage"> 
                 </div>
              
                
         </form>
         <?php } ?>

         </div>  

          <?php } else { ?>


                        <div class="col-md-12">
                         <form method="post" action="<?php echo base_url('admin/profile/do_add') ?>" enctype="multipart/form-data">

                           <div class="form-row">    
                            <div class="form-group col-md-4">
                                <label>System Name</label>
                                <input type="text" name="txtsystemname" class="form-control">
                            </div>
                        
                            <div class="form-group col-md-4">
                                <label>Email</label>
                                <input type="text" name="txtemail" class="form-control">
                            </div>
                              
                            <div class="form-group col-md-4">
                                <label>Contact</label>
                                <input type="text" name="txtcontact" class="form-control">
                            </div>
                             <div class="form-group col-md-4">
                                <label>Facebook Link</label>
                                <input type="text" name="txtfblink" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Instragram Link</label>
                                <input type="text" name="txtinstralink" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Twitter Link</label>
                                <input type="text" name="txttwitterlink" class="form-control">
                            </div>
                          </div>


                                <div class="form-group">
                                <label>About</label>
           <textarea name="txtabout" class="form-control ckeditor" row="10"></textarea> 
                            </div>
                           
                           <div class="form-group">
                           <label>Address</label>
                         <textarea name="txtaddress" class="form-control" row="10"></textarea>
                         </div> 

                            
                            <div class="form-group">
                                <label>Upload Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>
                             <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
    </div>
      </div>
         </form>

         </div>  

       <?php }?>





                            <div class="col-md-12">
                            <div class="table-responsive" style="overflow: scroll;height: 500px">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="design">Sr No</th>
                                    <th class="design">Systemname</th>
                                      <th class="design">Email</th>
                                      <th class="design">Contact</th>
                                      <th class="design">About</th>
                                       <th class="design">Logo</th>
                                      <th class="design">Facebooklink</th>
                                      <th class="design">Instragramlink</th>
                                      <th class="design">Twitterlink</th>
                                      <th class="design">address</th>
                                      <th class="design">Login</th>
                                      <th class="design">Date</th>
                                      <th class="design">Remove</th>
                                      <th class="design">View/Edit</th>
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($profile_data as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                   <td><?php echo $bd['systemname'] ?></td>
                                   <td><?php echo $bd['email'] ?></td>
                                   <td><?php echo $bd['contact'] ?></td>
                                   <td><?php echo $bd['about'] ?></td>
                                   <td>
                                    <a href="<?php echo base_url($bd['logo']); ?>"  target="_blank" title="You can click to view image">
                                    <img src="<?php echo base_url($bd['logo']); ?>" style="width:100px;height: 50px">
                                      </a>
                                  </td>
                                   <td><?php echo $bd['facebooklink'] ?></td>
                                   <td><?php echo $bd['instragramlink'] ?></td>
                                   <td><?php echo $bd['twitterlink'] ?></td>
                                   <td><?php echo $bd['address'] ?></td>
                                   <td><?php echo $bd['login'] ?></td>
                                   <td><?php echo $bd['date'] ?></td>
                                   <td><a class="btn btn-danger" href="<?php echo base_url('admin/profile/do_delete/'.$bd['id']); ?>">Delete</a></td>
                                   <td><a class="btn btn-success" href="<?php echo base_url('admin/profile/do_edit/'.$bd['id']); ?>">View/Edit</a></td>
                                   

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