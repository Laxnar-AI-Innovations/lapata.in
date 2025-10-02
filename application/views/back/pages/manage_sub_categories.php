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
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row mb-3">
                            <div class="px-0 col-lg-12 col-sm-12 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Manage Sub Category</b></a>
                            </div>
                        </div>
                        <hr>
                        <table class="table text-center table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Hindi Category</th>
                                <th>English Category</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                                $getSubCategories = $this->db->query('select * from subcategories where isDeleted=0')->result_array();
                                if(count($getSubCategories) > 0)
                                {
                                    $i = 0;
                                    foreach($getSubCategories as $k=>$v)
                                    {
                                        $i++;
                                        $getCategoryDetail = $this->db->query('select * from categories where Id='.$v['categoryId'])->result_array();
                            ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $getCategoryDetail[0]['hindiCategoryName'].'/'.$getCategoryDetail[0]['englishCategoryName']; ?></td>
                                <td><?= $v['hindiSubCategoryName']; ?></td>
                                <td><?= $v['englishSubCategoryName']; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/editSubCategory/<?= $v['Id']; ?>" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteSubCategory(<?= $v['Id']; ?>)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr>
                                <td colspan="5">No Sub Categories Found</td>
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
function deleteSubCategory(Id)
{
    if(confirm('Are you sure you want to delete this Sub category?'))
    {
        $.ajax({
            url:'<?php echo base_url(); ?>admin/deleteSubCategory',
            data:{Id:Id,_token:'<?=$this->security->get_csrf_hash();?>'},
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
</script>