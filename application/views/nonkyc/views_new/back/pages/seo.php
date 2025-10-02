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
                            <h6 class="m-0 font-weight-bold text-primary">SEO</h6>
                        </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                       <?php if($editname=='do_edit'){?>
                    <div class="col-md-12">
                      <?php foreach ($seodata as $key => $value) {?>
                       
                        <form method="post" action="<?php echo base_url('admin/seo/do_update/'.$value["id"]) ?>" enctype="multipart/form-data">

                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label>Page Name</label>
                                <select name="ddlpagename" class="form-control">
                                  <option>Select</option>
                                  <option value="businesscategory">businesscategory</option>
                                  <option value="businesssubcategory">businesssubcategory</option>
                                  <option value="events">events</option>
                                  <option value="promotions">promotions</option>
                                </select>
                              </div>

                              <div class="form-group col-md-4">
                              <label>Meta Title</label>
                              <input type="text" name="txtmeta" class="form-control" value="<?php echo $value['title']; ?>">
                              </div>

                              <div class="form-group col-md-4">
                              <label>Meta Description</label>
                              <textarea rows="1" cols="50" name="txtdescription" class="form-control" placeholder="Description">
                                <?php echo $value['description']; ?>
                                  </textarea> 
                                
                              </div>

                              <div class="form-group col-md-4">
                                <label>Keyword</label>
                                <textarea rows="1" cols="50" name="txtkeyword" class="form-control" placeholder="Keywords">
                                  <?php echo $value['keyword']; ?>
                                  </textarea> 
                                </div>

                                <div class="form-group col-md-4">
                              <label>Meta Tag</label>
                              <input type="text" name="txtmetatag" class="form-control" value="<?php echo $value['tag']; ?>">
                              </div>
                            </div>

                         <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Update the seo</button>
       <a href="<?php echo base_url('admin/seo') ?>" class="btn btn-warning">Go to back </a>
  

    </div>
    </form> 
           <?php  } ?> 

    </div>
      <?php } else { ?>

                        <div class="col-md-12">
                       
                        <form method="post" action="<?php echo base_url('admin/seo/do_add'); ?>" enctype="multipart/form-data">

                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label>Page Name</label>
                                <select name="ddlpagename" class="form-control">
                                  <option>Select</option>
                                  <option value="businesscategory">businesscategory</option>
                                  <option value="businesssubcategory">businesssubcategory</option>
                                  <option value="events">events</option>
                                  <option value="promotions">promotions</option>
                                </select>
                              </div>

                              <div class="form-group col-md-4">
                              <label>Meta Title</label>
                              <input type="text" name="txtmeta" class="form-control">
                              </div>

                              <div class="form-group col-md-4">
                              <label>Meta Description</label>
                              <textarea rows="1" cols="50" name="txtdescription" class="form-control" placeholder="Description">
                                  </textarea> 
                                
                              </div>

                              <div class="form-group col-md-4">
                                <label>Keyword</label>
                                <textarea rows="1" cols="50" name="txtkeyword" class="form-control" placeholder="Description">
                                  </textarea> 
                                </div>

                                <div class="form-group col-md-4">
                              <label>Meta Tag</label>
                              <input type="text" name="txtmetatag" class="form-control">
                              </div>
                            </div>

                         <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
    <a href="<?php echo base_url('admin/seotable'); ?>" class="btn btn-danger" >View SEO Info</a>

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