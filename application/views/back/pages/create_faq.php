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
        <h1>Faqs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">FAQS</li>
                <li class="breadcrumb-item active">Create FAQ</li>
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
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Create Faqs</b></a>
                            </div>
                        </div>
                        <hr>
                        <form id="addDl" action="<?php echo base_url(); ?>admin/postfaq" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="form-group form-floating mb-1">
                                <select class="form-control" id="typeId" style="appearance:auto!important;" autofocus name="typeId" required>
                                    <?php 
                                        $getFaqTypes = $this->db->query('select * from faqTypes where Status=1')->result_array();
                                        if(count($getFaqTypes) > 0)
                                        {
                                    ?>
                                    <option value="">choose FAQ Type</option>
                                    <?php foreach($getFaqTypes as $k=>$v)
                                        {
                                    ?>
                                    <option value="<?= $v['Id']; ?>" <?= isset($_GET['typeId']) ? $_GET['typeId'] == $v['Id'] ? 'selected' : '' : '' ?>><?= $v['EnglishName'].' / '.$v['hindiName']; ?></option>
                                    <?php
                                        }
                                        }else{
                                    ?>
                                    <option value="">No FAQ Types</option>
                                    <?php } ?>
                                </select>
                                <label for="typeId">Select FAQ Type</label>
                            </div>
                            <div class="row mb-2">
                                <label for="faqEnglishQues" class="col-md-6 col-lg-6 col-form-label">Enter English Question </label>
                                <div class="col-md-12 col-lg-12">
                                    <input type="text" class="form-control" id="faqEnglishQues" name="faqEnglishQues" required>
                                </div>
                                <label for="faqEnglishAns" class="col-md-6 col-lg-6 col-form-label">Enter English Answer </label>
                                <div class="col-md-12 col-lg-12 mt-1">
                                    <input type="text" class="form-control" id="faqEnglishAns" name="faqEnglishAns" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="faqHindiQues" class="col-md-6 col-lg-6 col-form-label">Enter Hindi Question </label>
                                <div class="col-md-12 col-lg-12">
                                    <input type="text" class="form-control" id="faqHindiQues" name="faqHindiQues" required>
                                </div>
                                <label for="faqHindiAns" class="col-md-6 col-lg-6 col-form-label">Enter Hindi Answer </label>
                                <div class="col-md-12 col-lg-12 mt-1">
                                    <input type="text" class="form-control" id="faqHindiAns" name="faqHindiAns" required>
                                </div>
                            </div>
                            <div class="row" style="justify-content:center;">
                                <div class="col-12 col-md-4 mt-3">
                                    <button id="btnDl" type="submit" value="save" class="btn d-block btn-primary disabled-on-loading w-100 save"> Save</button>
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                    <button id="btnNext" type="submit" value="saveNext" class="btn d-block btn-primary disabled-on-loading w-100 next"> Save & Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

  <script type="text/javascript">
  
    function deleteFaqType(ele,Id)
    {
        if(confirm('Are you sure you want to delete this faq?'))
        {
            $(ele).attr('disabled',true);
            $.ajax({
                url:'<?php echo base_url(); ?>admin/deleteFaqType',
                data:{Id:Id,_token:'<?=$csrf['hash'];?>'},
                type:'post',
                success:function(res)
                {
                    toastr.success('FAQ Deleted Successfully');
                    setTimeout(function()
                    {
                      location.reload();
                    },2000);
                }
            })       
        }
    }
  
    function updateStatus(val,Id)
    {
        let data = new FormData();
        data.append('status',val);
        data.append('Id',Id);
        data.append('<?= $csrf['name'] ?>','<?= $csrf['hash']; ?>');
        $.ajax({
            url:'<?= base_url(); ?>admin/updateFaqStatus',
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
        var clickedButton = $(document.activeElement).val();
        if(clickedButton == 'save')
        {
            $('#btnDl').attr('disabled','disabled');   
        }else{
            $('#btnNext').attr('disabled','disabled');
        }
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
                        if(clickedButton == 'save')
                        {
                            location.href="<?= base_url(); ?>admin/create_faq";
                        }else{
                            location.href="<?= base_url(); ?>admin/create_faq?typeId="+$('#typeId').val();
                        }
                    },2000);
                 }else{
                    toastr.error(parse.message);
                    if(clickedButton == 'save')
                    {
                        $('#btnDl').attr('disabled',false);   
                    }else{
                        $('#btnNext').attr('disabled',false);
                    }
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