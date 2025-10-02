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
        <h1>Faq Types</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">FAQS</li>
                <li class="breadcrumb-item active">Create FAQ Types</li>
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
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Create Faq Types</b></a>
                            </div>
                        </div>
                        <hr>
                        <form id="addDl" action="<?php echo base_url(); ?>admin/postFaqTypes" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="row mb-3">
                                <label for="typeName" class="col-md-6 col-lg-6 col-form-label">Enter FAQ Type English Name </label>
                                <div class="col-md-12 col-lg-12">
                                    <input type="text" class="form-control" id="typeEnglishName" name="typeEnglishName" autofocus required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="typeName" class="col-md-6 col-lg-6 col-form-label">Enter FAQ Type Hindi Name </label>
                                <div class="col-md-12 col-lg-12">
                                    <input type="text" class="form-control" id="typeHindiName" name="typeHindiName" autofocus required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button id="btnDl" type="submit" class="btn d-block btn-primary disabled-on-loading w-100 save"> Save</button>
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
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Manage Faq Types</b></a>
                            </div>
                        </div>
                        <hr>
                        <table class="table text-center table-bordered">
                            <tr>
                                <th>#</th>
                                <th>English Name</th>
                                <th>Hindi Name</th>
                                <th>Status</th>
                                <th>Action &nbsp;&nbsp;&nbsp;</th>
                            </tr>
                            <?php 
                                $getfaqs = $this->db->query('select * from faqTypes')->result_array();
                                if(count($getfaqs) > 0)
                                {
                                    $i = 0;
                                    foreach($getfaqs as $k=>$v)
                                    {
                                        $i++;
                            ?>
                            <?php 
                                if($v['Status'] == 1)
                                {
                            ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['EnglishName']; ?></td>
                                <td><?= $v['hindiName']; ?></td>
                                <td>
                                    <select style="appearance:auto!important;background-color:green;color:white;font-weight:bold;" class="form-control" onchange="updateStatus(this.value,<?= $v['Id']; ?>)">
                                        <option value="1" <?= ($v['Status'] == 1 ? 'selected' : ''); ?>>Active</option>
                                        <option value="0" <?= ($v['Status'] == 0 ? 'selected' : ''); ?>>In-Active</option>
                                    </select>
                                </td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/editFaqType/<?= $v['Id']; ?>" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <?php }else{ ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['Name']; ?></td>
                                <td>
                                    <select style="appearance:auto!important;background-color:red;color:white;font-weight:bold;" class="form-control" onchange="updateStatus(this.value,<?= $v['Id']; ?>)">
                                        <option value="1" <?= ($v['Status'] == 1 ? 'selected' : ''); ?>>Active</option>
                                        <option value="0" <?= ($v['Status'] == 0 ? 'selected' : ''); ?>>In-Active</option>
                                    </select>
                                </td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/editFaqType/<?= $v['Id']; ?>" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php } }else{ ?>
                            <tr>
                                <td colspan="5">No Faq Types Found</td>
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
  
    function updateStatus(val,Id)
    {
        let data = new FormData();
        data.append('status',val);
        data.append('Id',Id);
        data.append('<?= $csrf['name'] ?>','<?= $csrf['hash']; ?>');
        $.ajax({
            url:'<?= base_url(); ?>admin/updateFaqTypeStatus',
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                toastr.success('Status Updated Successfully');
                setTimeout(function()
                {
                  location.reload();
                },2000);
            }
        });
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
                    },100);
                 }else{
                    toastr.error(parse.message);
                    $('#btnDl').removeAttr('disabled');
                }  
            }
        });
    })    
  </script>
  <?php

if($this->session->flashdata('message_name')) {
$message = $this->session->flashdata('message_name');
?>

<script>
    toastr.success('<?php echo $message; ?>');
    setTimeout(function() { location.reload(); },1000);
</script>
<?php
}

?>