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
        <h1>Edit FAQ</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">FAQ</li>
                <li class="breadcrumb-item active">Edit FAQ</li>
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
                                <a href="javascript:void(0)" class="btn btn-default text-dark">Edit Faq</a>
                            </div>
                            <div class="col-lg-6 col-sm-6 text-end">
                                <a href="<?php echo base_url(); ?>admin/create_faq" class="btn btn-dark">Create Faq</a>
                            </div>
                        </div>
                        <hr>
                        <form id="addDl" action="<?php echo base_url(); ?>admin/updatefaq" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <input type="hidden" name="id" value="<?= $faq[0]['Id'];?>" />
                            <div class="row mb-2">
                                <label for="faqEnglishQues" class="col-md-6 col-lg-6 col-form-label">Enter English Question </label>
                                <div class="col-md-12 col-lg-12">
                                    <input type="text" class="form-control" value=<?= stripcslashes((trim($faq[0]['englishQuestion'],"'"))); ?> id="faqEnglishQues" name="faqEnglishQues" placeholder="Enter English Question" required>
                                </div>
                                <label for="faqEnglishAns" class="col-md-6 col-lg-6 col-form-label">Enter English Answer </label>
                                <div class="col-md-12 col-lg-12 mt-1">
                                    <input type="text" class="form-control" value=<?= stripcslashes((trim($faq[0]['englishAnswer'],"'"))); ?> id="faqEnglishAns" name="faqEnglishAns" placeholder="Enter English Answer" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="faqHindiQues" class="col-md-6 col-lg-6 col-form-label">Enter Hindi Question </label>
                                <div class="col-md-12 col-lg-12">
                                    <input type="text" class="form-control" value=<?= stripcslashes((trim($faq[0]['hindiQuestion'],"'"))); ?> id="faqHindiQues" name="faqHindiQues" placeholder="Enter Hindi Question" required>
                                </div>
                                <label for="faqHindiAns" class="col-md-6 col-lg-6 col-form-label">Enter English Answer </label>
                                <div class="col-md-12 col-lg-12 mt-1">
                                    <input type="text" class="form-control" value=<?= stripcslashes((trim($faq[0]['hindiAnswer'],"'"))); ?> id="faqHindiAns" name="faqHindiAns" placeholder="Enter Hindi Answer" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button id="btnDl" type="submit" class="btn d-block btn-primary disabled-on-loading w-100 save"> Update</button>
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
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Manage Faqs</b></a>
                            </div>
                        </div>
                        <hr>
                        <label >English Question : </label>
                        <p style="padding-left: 10px;"><?= trim(stripcslashes($faq[0]['englishQuestion']),"'"); ?> </p>
                        <label  >English Answer : </label>
                        <p style="padding-left: 10px;"><?= trim(stripcslashes($faq[0]['englishAnswer']),"'"); ?> </p>
                        <label >Hindi Question : </label>
                        <p style="padding-left: 10px;"><?= trim(stripcslashes($faq[0]['hindiQuestion']),"'"); ?> </p>
                        <label  >Hindi Answer : </label>
                        <p style="padding-left: 10px;"><?= trim(stripcslashes($faq[0]['hindiAnswer']),"'"); ?> </p>
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