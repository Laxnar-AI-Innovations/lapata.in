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
                <li class="breadcrumb-item active">Categories</li>
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
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Create Category</b></a>
                            </div>
                        </div>
                        <hr>
                        <form id="addDl" action="<?php echo base_url(); ?>admin/postCategory" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="row mb-3">
                                <label for="hindiCategoryName" class="col-md-6 col-lg-6 col-form-label">Enter Hindi Category Name</label>
                                <div class="col-md-6 col-lg-6">
                                    <input type="text" class="form-control" id="hindiCategoryName" name="hindiCategoryName" placeholder="Enter Hindi Category Name" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="englishCategoryName" class="col-md-6 col-lg-6 col-form-label">Enter English Category Name</label>
                                <div class="col-md-6 col-lg-6">
                                    <input type="text" class="form-control" id="englishCategoryName" name="englishCategoryName" placeholder="Enter English Category Name" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button id="btnDl" type="submit" class="btn d-block btn-primary disabled-on-loading w-100"> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row mb-3">
                            <div class="px-0 col-lg-12 col-sm-12 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Manage Category</b></a>
                            </div>
                        </div>
                        <hr>
                        <table class="table text-center table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Hindi Category</th>
                                <th>English Category</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                                $getCategories = $this->db->query('select * from categories where isDeleted=0')->result_array();
                                if(count($getCategories) > 0)
                                {
                                    $i = 0;
                                    foreach($getCategories as $k=>$v)
                                    {
                                        $i++;
                            ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['hindiCategoryName']; ?></td>
                                <td><?= $v['englishCategoryName']; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/editCategory/<?= $v['Id']; ?>" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteCategory(<?= $v['Id']; ?>)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr>
                                <td colspan="4">No Categories Found</td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

  <script type="text/javascript">
    function deleteCategory(Id)
    {
        if(confirm('Are you sure you want to delete this category?'))
        {
            $.ajax({
                url:'<?php echo base_url(); ?>admin/deleteCategory',
                data:{Id:Id,_token:'<?=$csrf['hash'];?>'},
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
                    }   
                }
            })       
        }
    }
    
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