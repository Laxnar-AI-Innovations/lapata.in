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
        <h6 class="m-0 font-weight-bold text-primary w-50 d-inline">Category</h6>
        <a href="<?php echo base_url(); ?>Admin/category" class="btn btn-primary m-0 font-weight-bold d-inline text-right" style="float:right">Back To Category</a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
               <div class="col-md-4">
                    <form method="post" action="<?php echo base_url('admin/upload_bulk_data'); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Category Uploader</label>
                            <input type="file" class="form-control" name="bulkdata" required accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                        </div>
                        <div class="form-group">
                            <button name="btnsubmit" class="btn btn-primary">Save the details</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <br>
                    <a href="<?php echo base_url();?>admin" class="btn btn-success" style="margin-top:10px">Download Demo Cateogry Excel sheet</a>
                </div>
            </div>
        </div>
    </div>
</div>