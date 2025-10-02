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
        <h1>Details of Wanted Report</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>police">Home</a></li>
                <li class="breadcrumb-item active">Report</li>
                <li class="breadcrumb-item active"><?php  echo ucwords(str_replace("_"," ",$page_name)); ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row justify-content-right mb-3">
                            <div class="col-lg-10 col-sm-10 col-9 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark "> <strong> Wanted Id  <?php echo $missingAlldetail[0]['Id']??"--" ?> </strong></a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-2 text-end">
                                <a href="<?php echo base_url(); ?>police/wanted_report" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Person Name </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo ($missingAlldetail[0]['personName'] != '' ? $missingAlldetail[0]['personName'] : '--');?></label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Age</label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo ($missingAlldetail[0]['age'] != '0' ? $missingAlldetail[0]['age'].' Year' : '--'); ?></label>
                            
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Aadhar Number </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><span><?php echo "xxxx xxxx xxxx ".substr($missingAlldetail[0]['aadharNumber'],-4) ?> </span> <i class="bi bi-eye-slash ar" id="<?php echo $missingAlldetail[0]['aadharNumber'];?>"></i></label>

                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Date Of Birth </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo ($missingAlldetail[0]['dob'] != '0000-00-00' ? date("d-m-Y", strtotime($missingAlldetail[0]['dob'])) : '--'); ?>  </label>

                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Gender</label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo ($missingAlldetail[0]['gender'] != '' ? $missingAlldetail[0]['gender'] : '--');?> </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">City</label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo ($missingAlldetail[0]['city'] != '' ? $missingAlldetail[0]['city'] : '--');?></label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">District </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo ($missingAlldetail[0]['district'] != '' ? $missingAlldetail[0]['district'] : '--');?></label>

                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">State </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo ($missingAlldetail[0]['state'] != '' ? $missingAlldetail[0]['state'] : '--');?></label>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row justify-content-right mb-3">
                            <div class="col-lg-6 col-sm-6 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark">FIR Details</a>
                            </div>
                            <!-- <div class="col-lg-6 col-sm-6 text-end">
                                <a href="<?php echo base_url(); ?>police/wanted_report" class="btn btn-dark">Back</a>
                            </div> -->
                        </div>
                        <?php 
                            if(count($firdetails) > 0)
                            {
                        ?>
                        <div class="row mb-3">
                            <div class="col-lg-12 col-sm-12 col-md-12 table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Fir Number</th>
                                            <th>Fir Date</th>
                                            <th>IPC Dhara</th>
                                            <th>Thana Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach($firdetails as $k=>$v)
                                            {
                                                $dharaName = $this->db->query('select * from ipcDhara where Id in('.$v['ipcDhara'].')')->result_array();
                                                $finalString = array();
                                                if(count($dharaName) > 0)
                                                {
                                                    foreach($dharaName as $k1=>$v1)
                                                    {
                                                        array_push($finalString,$v1['ipcNumber']);
                                                    }
                                                }
                                                $getPoliceDetail = $this->db->query('select * from police where police_id='.$v['thanaId'])->result_array();
                                        ?>
                                        <tr>
                                            <td><?= $k + 1; ?></td>
                                            <td><?= $v['firNumber']; ?></td>
                                            <td><?= date('d-m-Y',strtotime($v['firDate'])); ?></td>
                                            <td><?= implode(',',$finalString); ?></td>
                                            <td><?= $getPoliceDetail[0]['thanaName']; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row justify-content-right mb-3">
                            <div class="col-lg-6 col-sm-6 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark">Payment Details</a>
                            </div>
                            <!-- <div class="col-lg-6 col-sm-6 text-end">
                                <a href="<?php echo base_url(); ?>admin/missing_report/missing_report_person" class="btn btn-dark">Back</a>
                            </div> -->
                        </div>
                        <hr>
                        <div class="row mb-3">
                        <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Reward Amount </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> &#8377; <?php echo $missingAlldetail[0]['rewardAmount']??"0" ?> </label>
                        </div>
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
  