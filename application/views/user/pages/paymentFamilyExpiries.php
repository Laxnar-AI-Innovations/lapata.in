<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    @media (max-width:1900px) {

	.gallery {
		padding-left: 20px;
	}

	.shiva_height{
        height:530px;
        max-height:530px;
    }
}

@media (max-width:768px) {

	.shiva_height{
        height:450px;
        max-height:450px;
    }
}

@media (max-width:450px) {

	.shiva_height{
       height:auto;
        max-height:fit-content;
    }
}
    .social a.btn-circle .btn-google {
                color: #fff;
                background-color: #e44134;
                border-color: transparent;
            }
            .btn-police1{
                 color: #fff!important;
                background-color: green!important;
                border-color: transparent;
            }
             .btn-police2{
                 color: #fff!important;
                background-color: #e44134!important;
                border-color: transparent;
            }
             .btn-police3{
                 color: #fff!important;
                background-color: #5daed5!important;
                border-color: transparent;
            }
             .btn-police4{
                 color: #fff!important;
                background-color: orange!important;
                border-color: transparent;
            }
            .btn-group-sm>.btn.btn-circle, .btn.btn-circle.btn-sm {
                    width: 2.8rem;
                    height: 2.8rem;
                    font-size: .8rem;
                }
                .btn.btn-circle {
                    padding: 0;
                    border-radius: 100%!important;
                    width: 2.2rem;
                    height: 2.2rem;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1rem;
                    line-height: 1;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    margin-right:2px;
                }
                .btn:hover {
color: var(--bs-btn-hover-color);
background-color: var(--bs-btn-hover-bg);
border-color: var(--bs-btn-hover-border-color);
}
.checkbox-custom, .radio-custom {
        opacity: 0;
        position: absolute;   
    }
    
    .checkbox-custom, .checkbox-custom-label, .radio-custom, .radio-custom-label {
        display: inline-block;
        vertical-align: middle;
        margin: 5px;
        cursor: pointer;
    }
    
    .activeLabel{
            background-color: #ffc107;
            padding: 16px;
            border-radius: 30px;
            font-weight:bold;
        }
    
    .checkbox-custom-label, .radio-custom-label {
        position: relative;
    }
    
    .checkbox-custom + .checkbox-custom-label:before, .radio-custom + .radio-custom-label:before {
        content: '';
        background: #fff;
        border: 2px solid #ddd;
        display: inline-block;
        vertical-align: middle;
        width: 22px;
        height: 22px;
        padding-bottom: 22px;
        margin-right: 10px;
        text-align: center;
    }
    
    .checkbox-custom:checked + .checkbox-custom-label:before {
        content: "\f00c";
        font-family: 'FontAwesome';
        background: rebeccapurple;
        color: #fff;
    }
    
    .radio-custom + .radio-custom-label:before {
        border-radius: 50%;
    }
    
    .radio-custom:checked + .radio-custom-label:before {
        content: "\f00c";
        font-family: 'FontAwesome';
        color: green;
    }
    
    div:where(.swal2-container) div:where(.swal2-popup){
            width:auto;
        }
    #swal2-html-container{
        margin: 0 1rem!important;
    }


</style>
<!--end card css-->
<main id="main" class="main">
    <div class="container-fluid px-0">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-4 col-md-5 me-md-3 mt-0 card px-0">
                <div class="card-header py-2">
                    <div class="row" style="justify-content:center;">
                        <div class="col-12 text-center" style="color:green;">
                            <i class="fa fa-check-circle" style="font-size:1.5em;"></i>
                            <br>
                             <?php 
                                if($getPackageDetails[0]['validity'] > 1)
                                {
                                    if($getPackageDetails[0]['amount'] == 0)
                                    {
                            ?>
                            <h6>UPLOADED <br> SUCCESSFULLY</h6>
                            <?php }else{ ?>
                            <h6>PAYMENT <br> SUCCESSFUL</h6>
                            <?php } }else{ ?>
                            <h6>FREE</h6>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 align-items-center my-3">
                    <div class="row px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> STATUS</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:green;"><b>Active</b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> PLAN</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo $label; ?></b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> VALID FROM</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo date('d-m-Y',strtotime($getTransactions[0]['dateCreated'])); ?></b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> VALID TILL</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo date('d-m-Y',strtotime($getTransactions[0]['expiryDate'])); ?></b></h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row mt-2 mb-1 justify-content-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <button type="button" onclick="proceed(this)" class="btn mt-0 btn-style-green disabled-on-loading" style="border-radius:0!important;padding:15px 50px!important;"> Proceed <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }else{ 
                if($_GET['type'] == 'personal')
                {
                    $getTransactions = $this->db->query('select * from uploadtransactions where Id='.$_GET['id'])->result_array();
            ?>
            <div class="col-sm-12 col-lg-auto col-md-auto me-md-3 mt-0 card px-0">
                <div class="card-header py-2">
                    <div class="row" style="justify-content:center;">
                        <div class="col-12 text-center" style="color:green;">
                            <i class="fa fa-check-circle" style="font-size:1.5em;"></i>
                            <br>
                            <h6>PAYMENT <br> SUCCESSFUL</h6>
                            <h5><b>Your Profile <i class="fa fa-user"></i> Completed With <br>Face Match Facility Active !</b></h5>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 align-items-center my-3">
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> PLAN</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b>1 Year</b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> VALID FROM</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo date('d-m-Y',strtotime($getTransactions[0]['dateCreated'])); ?></b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> VALID TILL</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo date('d-m-Y',strtotime($getTransactions[0]['expiryDate'])); ?></b></h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row mt-2 mb-1 justify-content-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <button type="button" onclick="proceed(this)" class="btn mt-0 btn-style-green disabled-on-loading" style="border-radius:0!important;padding:5px 5px!important;"> Upload Your Face Match Photo <i class="fa fa-arrow-circle-right"></i><br><img src="<?php echo base_url(); ?>assets/images/faceicon.png" style="width:50px;height:50px;"></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</main>
<script>
    function proceed(ele)
    {
        <?php 
            if(!$_GET['type'])
            {
        ?>
        <?php 
            if(strpos($_GET['redirect'],'editLapataDetails') !== false)
            {
        ?>
        $(ele).attr('disabled',true);
        location.href="<?php echo $_GET['redirect']; ?>&pn=4";
        <?php }else{ ?>
        $(ele).attr('disabled',true);
        location.href="<?php echo $_GET['redirect']; ?>";
        <?php } ?>
        <?php }else{ ?>
        location.href="<?php echo $_GET['redirect']; ?>";
        <?php } ?>
    }
    
    function share(type,ele,appNo)
    {
        if (navigator.share) {
            let url = '';
            let text = '';
            if(type == 'missing')
            {
                url = '<?php echo base_url(); ?>find-missed-person?Id='+appNo;
            }else if(type == 'lapata'){
                url = '<?php echo base_url(); ?>find-lapata-person?id='+appNo;
                text='🙏🙏कृपया, इस पोस्ट को ज्यादा से ज्यादा शेयर करे I शायद, आप के एक शेयर से यह व्यक्ति मिल जाए I ';
            }else if(type == 'criminal')
            {
                url = '<?php echo base_url(); ?>find-criminal-person?Id='+appNo;
            }else if(type == 'wanted')
            {
                url = '<?php echo base_url(); ?>find-wanted-person?Id='+appNo;
            }else if(type == 'general')
            {
                url = '<?php echo base_url(); ?>find-general-person?Id='+appNo;
            }else if(type == 'unknown')
            {
                url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
            }
            navigator.share({
              title: 'Khoji',
              url: url,
              text:text
            })
          } else {
                const shareButton = document.querySelector('.share-button');
                const shareDialog = document.querySelector('.share-dialog');
                const closeButton = document.querySelector('.close-button');
                
                shareButton.addEventListener('click', event => {
                  shareDialog.classList.add('is-open');
                });
                
                closeButton.addEventListener('click', event => {
                  shareDialog.classList.remove('is-open');
                });
          }
    }
    
    function view(type,ele,appNo)
    {
        let url = '';
        if(type == 'missing')
        {
            url = '<?php echo base_url(); ?>find-missed-person?Id='+appNo;
        }else if(type == 'lapata'){
            url = '<?php echo base_url(); ?>find-lapata-person?id='+appNo;
        }else if(type == 'criminal')
        {
            url = '<?php echo base_url(); ?>find-criminal-person?Id='+appNo;
        }else if(type == 'wanted')
        {
            url = '<?php echo base_url(); ?>find-wanted-person?Id='+appNo;
        }else if(type == 'general')
        {
            url = '<?php echo base_url(); ?>find-general-person?Id='+appNo;
        }else if(type == 'unknown')
        {
            url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
        }
        window.open(url,'_blank');
    }
</script>