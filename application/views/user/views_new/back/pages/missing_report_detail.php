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
                                <a href="javascript:void(0)" class="btn btn-default text-dark "> <strong> Missing Id  <?php echo $missingAlldetail[0]['missingId']??"--" ?> </strong></a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-2 text-end">
                                <a href="<?php echo base_url(); ?>admin/missing_report/missing_report_person" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Missing Person Name </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> <?php echo $missingAlldetail[0]['missingname']??"--" ?> </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Nick Name </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> <?php echo $missingAlldetail[0]['personNickname']??"--" ?> </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Father Name </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> <?php echo $missingAlldetail[0]['personFathername']??"--" ?> </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Mother Name </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> <?php echo $missingAlldetail[0]['personMothername']??"--" ?> </label>
                            
                            <?php
                                if($missingAlldetail[0]['personSpousename']!='')
                                {
                                    ?>
                                        <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Marital Status </label>
                                        <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> Married</label>
                                        <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Mother Name </label>
                                        <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> <?php echo $missingAlldetail[0]['personMothername']??"--" ?> </label>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                        <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Mother Name </label>
                                        <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> Single </label>
                                        
                                    <?php
                                }
                            ?>

                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Aadhar Number </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><span><?php echo "xxxx xxxx xxxx ".substr($missingAlldetail[0]['missingaadhar'],-4) ?> </span> <i class="bi bi-eye-slash ar" id="<?php echo $missingAlldetail[0]['missingaadhar'];?>"></i></label>

                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Mobile Number </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><span><?php echo "xxxxxx".substr($missingAlldetail[0]['mobile1']??"0000",-4) ?> </span> <i class="bi bi-eye-slash mn" id="<?php echo $missingAlldetail[0]['mobile1']??"0000000000";?>"></i></label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Date Of Birth </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo date("d-m-Y", strtotime($missingAlldetail[0]['missingdob'])); ?>  </label>

                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Gender</label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label">male </label>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row justify-content-right mb-3">
                            <div class="col-lg-4 col-sm-4 col-5 pt-2 text-left">
                                <a href="javascript:void(0)" class="btn1 bt1n-default text-dark">User Details </a>
                            </div>
                            <div class="col-lg-7 col-sm-7 col-7 text-end">
                                <a href="javascript:void(0)" class="btn btn-default"><strong> User Id :-  <?php echo $userdetail[0]['username']??"--" ?> </strong></a>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="faqQues" class="col-md-5 col-lg-5 col-4 col-form-label">Name </label>
                            <label for="faqQues" class="col-md-7 col-lg-7 col-8 col-form-label"> <?php echo $userdetail[0]['aadharname'];?>  </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-4 col-form-label">Care Of </label>
                            <label for="faqQues" class="col-md-7 col-lg-7 col-8 col-form-label"> <?php echo str_replace(":"," ",$userdetail[0]['careof']) ?>  </label>
                            

                            <label for="faqQues" class="col-md-5 col-lg-5 col-4 col-form-label">Aadhar NO. </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-8 col-form-label"><span><?php  echo "xxxx xxxx xxxx ".substr($userdetail[0]['aadhar_id'],-4); ?></span>  <i class="bi bi-eye-slash ar" id="<?php echo $userdetail[0]['aadhar_id'];?>"></i></label>

                            <label for="faqQues" class="col-md-5 col-lg-5 col-4 col-form-label">Mobile </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-8 col-form-label"><span><?php   echo "xxxxxx".substr($userdetail[0]['registration_mobile']??"0000",-4);?> </span> <i class="bi bi-eye-slash mn" id="<?php echo $userdetail[0]['registration_mobile'];?>"></i>  </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-4 col-form-label">Email Id </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-8 col-form-label"><?php echo $userdetail[0]['email_id']??"--";?>  </label>

                            <label for="faqQues" class="col-md-5 col-lg-5 col-4 col-form-label">Gender</label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-8 col-form-label"><?php echo $userdetail[0]['gender']??"--";?>  </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-4 col-form-label">DOB </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-8 col-form-label"><?php  echo date("d-m-Y", strtotime($userdetail[0]['dob']));?></label>
                            
                            <label for="faqQues" class="col-md-3 col-lg-3 col-4 col-form-label text-success">Address </label>
                            <!-- <label for="faqQues" class="col-md-1 col-lg-1 col-1 col-form-label"> </label> -->
                            <label for="faqQues" class="col-md-9 col-lg-9 col-8 col-form-label">
                                <?php echo $userdetail[0]['localty']." ".$userdetail[0]['landmark']
                                ."<br> ".$userdetail[0]['district']." , ".$userdetail[0]['state']
                                ." , ".$userdetail[0]['country']." , ".$userdetail[0]['pincode']?> 
                            </label>
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
                                <a href="<?php echo base_url(); ?>admin/missing_report/missing_report_person" class="btn btn-dark">Back</a>
                            </div> -->
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">FIR NO </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> <?php echo $missingAlldetail[0]['firno']??"--";?>  </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">FIR Date </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label"><?php echo date("d-m-Y", strtotime($missingAlldetail[0]['firdate'])); ?>  </label>

                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Thana </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['firpolicethananame']??"--";?>  </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Village </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['firvillage']??"--";?>  </label>

                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">City</label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['fircity']??"--";?>  </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">District </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['firdistrict']??"--";?>  </label>

                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">State </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['firstate']??"--";?>  </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Date Of Missing </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo  date("d-m-Y", strtotime($missingAlldetail[0]['missingdate']));  ?>  </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row justify-content-right mb-3">
                            <div class="col-lg-6 col-sm-6 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark">Document Details</a>
                            </div>
                            <!-- <div class="col-lg-6 col-sm-6 text-end">
                                <a href="<?php echo base_url(); ?>admin/missing_report/missing_report_person" class="btn btn-dark">Back</a>
                            </div> -->
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">PAN Number </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['missingpan']??"--";?></label>

                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Driving Licence </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['missingdl']??"--";?>  </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Voter ID </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['missingvoter']??"--";?>  </label>

                            <label for="faqQues" class="col-md-12 col-lg-12 col-form-label text-success">Address </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Village </label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['fathervillage']??"--";?>  </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">City</label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['fathercity']??"--";?> </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">District</label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['fatherdistrct']??"--";?>  </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">State</label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['fatherstate']??"--";?> </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Pincode</label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"><?php echo $missingAlldetail[0]['fatherpincode']??"--";?> </label>

                        </div>
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
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> &#8377; <?php echo $missingAlldetail[0]['rewardamount']??"0" ?> </label>
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Payment Status </label>
                            <?php
                                if($missingAlldetail[0]['paymentStatus']!="")
                                {
                                    if($missingAlldetail[0]['paymentStatus']=='Success'||$missingAlldetail[0]['paymentStatus']=="success")
                                    {
                                        ?>
                                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label text-success"> <?php echo $missingAlldetail[0]['paymentStatus']??"--" ?> </label>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label text-danger"> <?php echo $missingAlldetail[0]['paymentStatus']??"--" ?> </label>
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
                            
                            <label for="faqQues" class="col-md-5 col-lg-5 col-6 col-form-label">Payment Id</label>
                            <label for="faqQues" class="col-md-6 col-lg-6 col-6 col-form-label"> <?php echo $missingAlldetail[0]['paymentId']??"--" ?> </label>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row justify-content-right mb-3">
                            <div class="col-lg-6 col-sm-6 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark">Other Details</a>
                            </div>
                            <!-- <div class="col-lg-6 col-sm-6 text-end">
                                <a href="<?php echo base_url(); ?>admin/missing_report/missing_report_person" class="btn btn-dark">Back</a>
                            </div> -->
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="faqQues" class="col-md-12 col-lg-12 col-form-label">Missing Person Photos</label>
                            <?php
                                if(count($missingPhotos)==0)
                                {
                                    ?>
                                        <label for="faqQues" class="col-md-4 col-lg-4 col-form-label">No Record Found</label>
                                    <?php
                                }
                                foreach($missingPhotos as $k=>$row)
                                {
                                    
                                    $filename = $row['photourl'];

                                    if (file_exists($filename)) 
                                    {
                                        ?>
                                            <label for="faqQues" class="col-md-4 col-lg-4 col-form-label"><img src="<?php echo base_url(). $row['photourl']??"0" ?>" style="width: 76%;max-height: 68%;" alt="<?php echo $row['photourl']??"No Pthot" ?>">  <p style="text-align: center; width: 172px;"><?php echo $k+1;?>.</p> </label>
                                        <?php
                                    } 
                                    else 
                                    {
                                        ?>
                                            <label for="faqQues" class="col-md-4 col-lg-4 col-form-label">This file not found</label>
                                        <?php
                                    }
                                   
                                }
                            ?>
                            
                            
                            
                            
                            
                            
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
  