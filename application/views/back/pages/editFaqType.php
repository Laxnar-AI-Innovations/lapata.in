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
        <h1>Edit Faq Types</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">FAQS</li>
                <li class="breadcrumb-item active">Edit FAQ Types</li>
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
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Edit Faq Types</b></a>
                            </div>
                        </div>
                        <hr>
                        <form id="addDl" action="<?php echo base_url(); ?>admin/updateFaqTypes" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <input type="hidden" name="Id" value="<?= $data[0]['Id']; ?>">
                            <div class="row mb-3">
                                <label for="typeName" class="col-md-6 col-lg-6 col-form-label">Enter FAQ Type English Name </label>
                                <div class="col-md-12 col-lg-12">
                                    <input type="text" class="form-control" id="typeEnglishName" value="<?= $data[0]['EnglishName']; ?>" name="typeEnglishName" placeholder="Enter FAQ Type English Name" autofocus required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="typeName" class="col-md-6 col-lg-6 col-form-label">Enter FAQ Type Hindi Name </label>
                                <div class="col-md-12 col-lg-12">
                                    <input type="text" class="form-control" id="typeHindiName" value="<?= $data[0]['hindiName']; ?>" name="typeHindiName" placeholder="Enter FAQ Type Hindi Name" autofocus required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button id="btnDl" type="submit" class="btn d-block btn-primary disabled-on-loading w-100 save"> Update</button>
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
                toastr.success("Data Updated Successfully");
                setTimeout(function()
                {
                  location.href="<?= base_url(); ?>admin/create_faq_types";
                },2000);
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