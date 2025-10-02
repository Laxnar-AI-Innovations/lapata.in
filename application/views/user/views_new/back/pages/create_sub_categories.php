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
        <h1>Categories</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Sub Categories</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3">
                        <div class="row mb-3">
                            <div class="px-0 col-lg-12 col-sm-12 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Create Sub Category</b></a>
                            </div>
                        </div>
                        <hr>
                        <form id="addDl" action="<?php echo base_url(); ?>admin/postSubCategory" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
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
                                        <option value="<?= $v['Id']; ?>"><?= $v['hindiCategoryName'].'/'. $v['englishCategoryName']; ?></option>
                                        <?php } ?>
                                        <?php }else{ ?>
                                        <option value="">No Category Found</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="hindiSubCategoryName" class="col-md-6 col-lg-6 col-form-label">Enter Hindi Sub Category Name</label>
                                <div class="col-md-6 col-lg-6">
                                    <input type="text" class="form-control" id="hindiSubCategoryName" name="hindiSubCategoryName" placeholder="Enter Hindi Sub Category Name" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="englishSubCategoryName" class="col-md-6 col-lg-6 col-form-label">Enter English Sub Category Name</label>
                                <div class="col-md-6 col-lg-6">
                                    <input type="text" class="form-control" id="englishSubCategoryName" name="englishSubCategoryName" placeholder="Enter English Sub Category Name" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button id="btnDl" type="submit" class="btn d-block btn-primary disabled-on-loading w-100"> Save</button>
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