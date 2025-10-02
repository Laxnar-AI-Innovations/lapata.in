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
        <h1>Details of Missing Person Report</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Report</li>
                <li class="breadcrumb-item active"><?php  echo ucwords(str_replace("_"," ",$page_name)); ?></li>
                <li class="breadcrumb-item active"> Detail</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-3"></div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row justify-content-right mb-3">
                            <div class="col-lg-6 col-sm-6 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark">Missing Details : <strong><?= $i; ?></strong></a>
                            </div>
                            <!-- <div class="col-lg-6 col-sm-6 text-end">
                                <a href="<?php echo base_url(); ?>admin/missing_report/missing_report_person" class="btn btn-dark">Back</a>
                            </div> -->
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Name </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?= $v['missingname']; ?></label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Missing Id </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label "> <?php echo $v['missingId']??"--" ?> </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Missing Status </label>
                            <?php
                                if($v['isFound']!="")
                                {
                                    if($v['isFound']==1)
                                    {
                                        ?>
                                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label text-success"> Person Found</label>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label text-danger"> Person Not Found </label>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label text-danger"> No Record Found</label>
                                    <?php
                                }
                            ?>
                            
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Missing Date</label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> <?php echo date("d-m-Y", strtotime($v['missingdob'])); ?></label>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2"></div>
            <?php
               $getfaqs = $this->db->query('select * from missingperson')->result_array();
               if(count($getfaqs) > 0)
               {
                   $i = 0;
                   foreach($getfaqs as $k=>$v)
                   {
                        ++$i;
                      ?>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body pt-3 table-responsive">
                                    <div class="row justify-content-right mb-3">
                                        <div class="col-lg-6 col-sm-6 text-left">
                                            <a href="javascript:void(0)" class="btn btn-default text-dark">Missing Details : <strong><?= $i; ?></strong></a>
                                        </div>
                                        <!-- <div class="col-lg-6 col-sm-6 text-end">
                                            <a href="<?php echo base_url(); ?>admin/missing_report/missing_report_person" class="btn btn-dark">Back</a>
                                        </div> -->
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Name </label>
                                        <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?= $v['missingname']; ?></label>
                                        <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Missing Id </label>
                                        <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label "> <?php echo $v['missingId']??"--" ?> </label>
                                        <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Missing Status </label>
                                        <?php
                                            if($v['isFound']!="")
                                            {
                                                if($v['isFound']==1)
                                                {
                                                    ?>
                                                        <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label text-success"> Person Found</label>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                        <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label text-danger"> Person Not Found </label>
                                                    <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>
                                                    <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label text-danger"> No Record Found</label>
                                                <?php
                                            }
                                        ?>
                                        
                                        <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Missing Date</label>
                                        <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> <?php echo date("d-m-Y", strtotime($v['missingdob'])); ?></label>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php
                   }
                }
            ?>
            
            
           
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
    $(".mn").click(function(){
        $(this).toggleClass('bi-eye-slash');
        $(this).toggleClass("bi-eye");
        var id=$(this).prop('id')
        var v2= $(this).parent().find('span').text();

        let text = id; 
        let result = text.substr(-4, 4);
        
        var v1= $(this).parent().find('span').text("xxxxxx"+result);
        if(v2.search("xxxxxx")!=0)
        {
            var v1= $(this).parent().find('span').text("xxxxxx"+result);
        }
        else
        {
            var v1= $(this).parent().find('span').text(id);
        }
    });
    $(".ar").click(function(){
        $(this).toggleClass('bi-eye-slash');
        $(this).toggleClass("bi-eye");
        var id=$(this).prop('id')
        var v2= $(this).parent().find('span').text();

        let text = id; 
        let result = text.substr(-4, 4);
        
        var v1= $(this).parent().find('span').text("xxxx xxxx xxxx"+result);
        if(v2.search("xxxx xxxx xxxx")!=0)
        {
            var v1= $(this).parent().find('span').text("xxxx xxxx xxxx"+result);
        }
        else
        {
            var v1= $(this).parent().find('span').text(id);
        }
    });  
  </script>