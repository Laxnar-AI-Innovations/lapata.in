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
                            <h6 class="m-0 font-weight-bold text-primary">Business Category</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                      <?php if($editname=='do_edit'){ ?>
                    <div class="col-md-12">
                     <?php foreach ($businesscategorydata as $key => $value) { ?>        
                        <form method="post" action="<?php echo base_url('admin/businesscategory/do_update/'.$value["id"]) ?>" enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Category Name</label>
                                   <input type="text" name="ddlcategoryname" class="form-control" value="<?php echo $value['categoryname']; ?>" placeholder="name">
                                     </div>

                                     <div class="form-group col-md-3">
                                        <label>Community</label>
                                         <select name="ddlcommunity" class="form-control">
                                    <option>Select</option>
                               <?php foreach ($community as $key => $value1) {  ?>
                                    <option value="<?php echo $value1['community']; ?>"><?php echo $value1['community']; ?></option>
                          <?php     } ?>         

                                   
                                </select>
                                         </div>

                                         <div class="form-group col-md-3">
                                            <label>Add Image</label>
                                           <input type="file" name="image" class="form-control">
                                         </div>
                                         </div>

                                          <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Update the details</button>
  <a href="<?php echo base_url('admin/businesscategory') ?>" class="btn btn-warning">Go to back </a>
</div>
<div class="form-group">
                   <img src="<?php echo base_url($value['image']); ?>"  style="width: 200px; height: 200px;" name="oldimage"> 
                 </div>
  

   
    </form> 
         <?php  } ?>         
      </div>
        <?php } else { ?>


            <div class="col-md-12">       
                        <form method="post" action="<?php echo base_url('admin/businesscategory/do_add'); ?>" enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Category Name</label>
                                   <input type="text" name="ddlcategoryname" class="form-control" placeholder="name">
                                     </div>

                                     <div class="form-group col-md-3">
                                        <label>City</label>
                                         <select name="ddlcommunity" class="form-control">
                                    <option>Select</option>
                               <?php foreach ($community as $key => $value) {  ?>
                                    <option value="<?php echo $value['city']; ?>"><?php echo $value['city']; ?></option>
                          <?php     } ?>         

                                   
                                </select>
                                         </div>

                                         <div class="form-group col-md-3">
                                            <label>Add Image</label>
                                           <input type="file" name="image" class="form-control">
                                         </div>
                                         </div>

                                          <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
  

    </div>
    </form>        
      </div>
   <?php }  ?>
                               <div class="col-md-12">

                            <div >
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <!-- <th>Sr No</th> -->
                                   <th>Category Name</th>
                                   <th>City</th>          
                                    <th>Image</th>
                                     <th>Action</th>
                                     <th>Edit/View</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                    foreach($businesscategory as $bd){
                                        $i=$i+1;
                                ?>
                                <tr>
                                    <!-- <td><?php echo $i;?></td> -->
                                   <td><?php echo $bd['categoryname'] ?></td>
                                   <td><?php echo $bd['community'] ?></td>
                                  <td>
                                    <a href="<?php echo base_url($bd['image']); ?>"  target="_blank" title="You can click to view image">
                                    <img src="<?php echo base_url($bd['image']); ?>" style="width:100px;height: 50px">
                                      </a>
                                  </td>
                                    <td><a class="btn btn-danger" href="<?php echo base_url('admin/businesscategory/do_delete/'.$bd['id']); ?>">Delete</a></td>

                                     <td><a class="btn btn-success" href="<?php echo base_url('admin/businesscategory/do_edit/'.$bd['id']); ?>">Edit/View</a></td>
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