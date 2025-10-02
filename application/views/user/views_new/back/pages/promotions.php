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
                            <h6 class="m-0 font-weight-bold text-primary">Promotions Details</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                       <?php if($editname=='do_edit'){?>
                    <div class="col-md-12">
                       <?php foreach ($promotionsdata as $key => $value) {?> 
                       
                        <form method="post" action="<?php echo base_url('admin/promotions/do_update/'.$value["id"]) ?>"enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Select Business</label>
                                   <select name="ddlselectbusiness" class="form-control">
                                   <option>Select Business</option> 

                                     </select>
                                     </div>

                                  
                                  <div class="form-group col-md-4">
                                    <label>Add Image</label>
                                    <input type="file" name="image" class="form-control">
                                    </div>

                                    <div class="form-group col-md-4">
                                      <label>Promotion Title</label>
                                      <input type="text" name="txtprotitle" class="form-control"
                                      value="<?php echo $value['title']; ?>">
                                      </div>

                                      <div class="form-group col-md-4">
                                        <label>Start Date</label>
                                        <input type="date" name="startdate" class="form-control" value="<?php echo $value['startdate']; ?>">
                                         </div>
                                         <div class="form-group col-md-4">
                                          <label>Community</label>
                                          <select name="ddlcommunity" class="form-control">
                                            <option>Select Community</option>
                                             <?php foreach ($community as $key => $com) {  ?>
                                    <option value="<?php echo $value['community']; ?>"><?php echo $value['community']; ?></option>
                          <?php     } ?>         

                                          </select>
                                           </div>


                                         <div class="form-group col-md-4">
                                          <label>Promotion Code</label>
                                          <input type="text" name="txtpromotioncode" class="form-control"value="<?php echo $value['promotioncode']; ?>">
                                         </div>

                                          <div class="form-group col-md-4">
                                        <label>End Date</label>
                                        <input type="date" name="endtdate" class="form-control" value="<?php echo $value['enddate']; ?>">
                                         </div>

                                         

                                    <div class="form-group col-md-4">
                                    <label>Star Rating</label>
                                    <select name="ddlstarrating" class="form-control">
                                      <option value="1.0">1.0</option>
                                      <option value="1.5">1.5</option>
                                      <option value="2.0">2.0</option>
                                      <option value="2.5">2.5</option>
                                      <option value="3.0">3.5</option>
                                    </select>
                                  </div>
                                </div>
                               
                                  <div class="form-group col-md-10">
                                  <label>Promotion Description</label>
                                  <textarea rows="5" name="txtpromotiondescription" class="form-control" placeholder="Description">
                                     <?php echo $value['description']; ?>
                                  </textarea> 
                                  </div>
                             


                                 <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Update the details</button>
       <a href="<?php echo base_url('admin/promotions') ?>" class="btn btn-warning">Go to back </a>
  </div>
 <div class="form-group">
                   <img src="<?php echo base_url($value['image']); ?>"  style="width: 200px; height: 200px;" name="oldimage"> 
                 </div>
              
   
    </form>  
         <?php  } ?>       
      </div>
           <?php } else { ?>  

                        <div class="col-md-12">
                       
                        <form method="post" action="<?php echo base_url('admin/promotions/do_add'); ?>" enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Select Business</label>
                                   <select name="ddlselectbusiness" class="form-control">
                                   <option>Select Business</option> 

                                     </select>
                                     </div>

                                  <div class="form-group col-md-4">
                                  <label>Promotion Description</label>
                                  <textarea rows="1" cols="50" name="txtpromotiondescription" class="form-control" placeholder="Description">
                                  </textarea> 
                                  </div>

                                  <div class="form-group col-md-4">
                                    <label>Add Image</label>
                                    <input type="file" name="image" class="form-control">
                                    </div>

                                    <div class="form-group col-md-4">
                                      <label>Promotion Title</label>
                                      <input type="text" name="txtprotitle" class="form-control">
                                      </div>

                                      <div class="form-group col-md-4">
                                        <label>Start Date</label>
                                        <input type="date" name="startdate" class="form-control">
                                         </div>
                                         <div class="form-group col-md-4">
                                          <label>Community</label>
                                          <select name="ddlcommunity" class="form-control">
                                            <option>Select Community</option>
                                             <?php foreach ($community as $key => $value) {  ?>
                                    <option value="<?php echo $value['community']; ?>"><?php echo $value['community']; ?></option>
                          <?php     } ?>         

                                          </select>
                                           </div>


                                         <div class="form-group col-md-4">
                                          <label>Promotion Code</label>
                                          <input type="text" name="txtpromotioncode" class="form-control">
                                         </div>

                                          <div class="form-group col-md-4">
                                        <label>End Date</label>
                                        <input type="date" name="endtdate" class="form-control">
                                         </div>

                                         

                                    <div class="form-group col-md-4">
                                    <label>Star Rating</label>
                                    <select name="ddlstarrating" class="form-control">
                                      <option value="1.0">1.0</option>
                                      <option value="1.5">1.5</option>
                                      <option value="2.0">2.0</option>
                                      <option value="2.5">2.5</option>
                                      <option value="3.0">3.5</option>
                                    </select>
                                  </div>
                                  </div>


                                 <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
      <a href="<?php echo base_url('admin/promotionstable'); ?>" class="btn btn-danger" >View Promotions Info</a>
  
  

    </div>
    </form>        
      </div>  
      <?php } ?>              
                        
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


                                        