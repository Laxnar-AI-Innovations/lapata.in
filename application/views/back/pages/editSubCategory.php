<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Categories</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Edit Sub Categories</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row justify-content-right mb-3">
                            <div class="col-lg-6 col-sm-6 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark">Edit Sub Category</a>
                            </div>
                            <div class="col-lg-6 col-sm-6 text-end">
                                <a href="<?php echo base_url(); ?>admin/create_sub_categories" class="btn btn-dark">Create Sub Categories</a>
                            </div>
                        </div>
                        <hr>
                        <form id="addDl" action="<?php echo base_url(); ?>admin/updateSubCategory" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <input type="hidden" name="Id" value="<?= $subcategory[0]['Id'];?>" />
                            <div class="row mb-3">
                                <label for="category" class="col-md-6 col-lg-6 col-form-label">Select Category</label>
                                <div class="col-md-6 col-lg-6">
                                    <select class="form-control" name="categoryId" required>
                                        <?php 
                                            $getCategories = $this->db->query('select * from categories where isDeleted=0')->result_array();
                                            if(count($getCategories) > 0)
                                            {
                                        ?>
                                        <option value="">Select Category</option>
                                        <?php 
                                            foreach($getCategories as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?= $v['Id']; ?>" <?php if($v['Id'] == $subcategory[0]['categoryId']){ echo "selected"; } ?>><?= $v['hindiCategoryName'].'/'. $v['englishCategoryName']; ?></option>
                                        <?php } ?>
                                        <?php }else{ ?>
                                        <option value="">No Category Found</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="hindiCategoryName" class="col-md-6 col-lg-6 col-form-label">Enter Hindi Sub Category Name</label>
                                <div class="col-md-6 col-lg-6">
                                    <input type="text" class="form-control" id="hindiSubCategoryName" value="<?php echo $subcategory[0]['hindiSubCategoryName']; ?>" name="hindiSubCategoryName" placeholder="Enter Hindi Sub Category Name" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="englishCategoryName" class="col-md-6 col-lg-6 col-form-label">Enter English Category Name</label>
                                <div class="col-md-6 col-lg-6">
                                    <input type="text" class="form-control" id="englishSubCategoryName" value="<?php echo $subcategory[0]['englishSubCategoryName']; ?>" name="englishSubCategoryName" placeholder="Enter English Sub Category Name" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button id="btnDl" type="submit" class="btn d-block btn-primary disabled-on-loading w-100"> Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

  <script type="text/javascript">
    $('#addDl').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnDl').attr('disabled','disabled');
        let data = new FormData(this);
        $.ajax({
            url:$(this).attr('action'),
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                 let parse = JSON.parse(res);
                 if(parse.status == 'success')
                 {
                    toastr.success(parse.message);
                    setTimeout(function()
                    {
                      location.reload();
                    },2000);
                 }else{
                    toastr.error(parse.message);
                    $('#btnDl').removeAttr('disabled');
                }  
            }
        });
    })    
  </script>