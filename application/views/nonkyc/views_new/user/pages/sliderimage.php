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
                            <h6 class="m-0 font-weight-bold text-primary">Slider Images</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                         <?php if($editname=='do_edit'){ ?>
                    <div class="col-md-12">
                     <?php foreach ($sliderimagedata as $key => $value) { ?>       
                        <form method="post" action="<?php echo base_url('admin/sliderimage/do_update/'.$value["id"]) ?>" enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>URL</label>
                                   <input type="text" name="txturl" class="form-control" value="<?php echo $value['url']; ?>">
                                     </div>

                                     <div class="form-group col-md-3">
                                        <label>Community</label>
                                       <select name="ddlcommunity" class="form-control" value="<?php echo $value['community']; ?>">>
                                         <option>Select Community</option>
                                    <?php foreach ($community as $key => $value5) {  ?>
                                    <option value="<?php echo $value['community']; ?>"><?php echo $value5['community']; ?></option>
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
   <a href="<?php echo base_url('admin/sliderimage') ?>" class="btn btn-warning">Go to back </a>
  

    </div>

         <div class="form-group">
                   <img src="<?php echo base_url($value['image']); ?>"  style="width: 200px; height: 200px;" name="oldimage"> 
                 </div>
    </form>
     <?php  } ?>          
      </div>
       <?php } else { ?>                      
                    <div class="col-md-12">     
                        <form method="post" action="<?php echo base_url('admin/sliderimage/do_add'); ?>" enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>URL</label>
                                   <input type="text" name="txturl" class="form-control">
                                     </div>

                                     <div class="form-group col-md-3">
                                        <label>Community</label>
                                       <select name="ddlcommunity" class="form-control">
                                         <option>Select Community</option>
                                    <?php foreach ($community as $key => $value) {  ?>
                                    <option value="<?php echo $value['community']; ?>"><?php echo $value['community']; ?></option>
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
      <a href="<?php echo base_url('admin/sliderimagetable'); ?>" class="btn btn-danger" >View Sliderimage Info</a>

    </div>
    </form>         
      </div>  
      <?php  } ?>

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