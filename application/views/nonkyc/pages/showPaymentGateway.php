<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .white_pkg{
        color: black!important;
        background:white!important;
        min-height: 95px;
    }
    label{
        color:unset!important;
    }
    .first_pkg {
        border: 1px solid rebeccapurple;
        border-radius: 12px;
        padding: 0px 21px 16px;
        overflow: hidden;
        width: 100%;
        min-height: 95px;
        color: white!important;
        box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px;
        transition: transform 250ms ease-in-out 0s, box-shadow 250ms ease-in-out 0s;
        background: radial-gradient(140.76% 131.96% at 100% 100%, rgb(229, 9, 20) 0%, rgba(74, 42, 150, 0.5) 73.57%, rgba(74, 42, 150, 0) 100%), rgb(29, 82, 157)!important;
    }
    
    .second_pkg {
        border: 1px solid rebeccapurple;
        border-radius: 12px;
        padding: 0px 21px 16px;
        overflow: hidden;
        width: 100%;
        min-height: 95px;
        color: white!important;
        box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px;
        transition: transform 250ms ease-in-out 0s, box-shadow 250ms ease-in-out 0s;
        background: radial-gradient(140.76% 131.96% at 100% 100%, rgb(176, 56, 220) 0%, rgba(74, 42, 150, 0.5) 73.57%, rgba(74, 42, 150, 0) 100%), rgb(29, 82, 157)!important;
    }
    
    .third_pkg {
        border: 1px solid rebeccapurple;
        border-radius: 12px;
        padding: 0px 21px 16px;
        overflow: hidden;
        width: 100%;
        min-height: 95px;
        color: white!important;
        box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px;
        transition: transform 250ms ease-in-out 0s, box-shadow 250ms ease-in-out 0s;
        background: radial-gradient(140.76% 131.96% at 100% 100%, rgb(109, 59, 227) 0%, rgba(74, 42, 150, 0.5) 73.57%, rgba(74, 42, 150, 0) 100%), rgb(29, 82, 157)!important;
    }

</style>
<style>
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

.card{
    height:max-content;
}

</style>
<!--end card css-->
<main id="main" class="main">
    <div class="card">
        <div class="card-header py-1">
            <div class="row align-items-center">
                <div class="col-9 px-0">
                    <h5 class="card-title mb-0 text-start text-danger" style="font-size:0.85rem;">Appeal For Identification Data</h5>
                </div>
                <div class="col ps-0 text-end">
                    <button type="button" onclick="location.href='<?= base_url(); ?>NonKyc/search_person_details?pn=7&type=unknown'" class="btn btn-style-grey disabled-on-loading" style="padding:8px 19px!important;"> <i class="fa fa-arrow-circle-left"></i></button>  
                </div>
            </div>
        </div>
         <div class="card-body mt-3">
            <?php 
                $getFaceMatchResults = $this->db->query('select * from searchfacehistoryafterlogin where Id='.$_SESSION['searchFaceIdAfterLogin'])->result_array();
                $explode = array_unique(explode(',',$getFaceMatchResults[0]['matchedUnknownIds']));
            ?>
            <div class="row jusitfy-content-center">
                <div class="col-12">
                    <h6 style="text-align: center;color:red;"><b style="color:#00c000;">Some Similar Matches Found !</b></h6>
                    <h6 style="text-align: center;color:red;"><b>Results (<?= count($explode); ?>)</b></h6>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 col-lg-3 mt-3">
                    <?php 
                        $getFaceMatchResults = $this->db->query('select * from searchfacehistoryafterlogin where Id='.$_SESSION['searchFaceIdAfterLogin'])->result_array();
                        if($getFaceMatchResults[0]['mainPhoto'] == NULL)
                        {
                    ?>
                    <img src="<?php echo base_url(); ?>assets/icons/payImg.avif" style="width:100%;height:300px;object-fit:fill;">
                    <?php }else{ 
                        $explode = array_unique(explode(',',$getFaceMatchResults[0]['matchedUnknownIds']));
                        $photos = array();
                        foreach($explode as $k=>$v)
                        {
                            $getDetail = $this->db->query('select * from unknown_person where id='.$v)->result_array();
                            array_push($photos,base_url().''.$getDetail[0]['Photo']);
                        }
                    ?>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-interval="2000" data-bs-ride="carousel">
                        <div class="carousel-inner" id="photosspan">
                            <?php 
                                foreach($photos as $k=>$v)
                                {
                            ?>
                            <div class="carousel-item <?= $k == 0 ? 'active' : ''; ?>">
                                <a href="<?php echo $v; ?>" data-lightbox="roadtrip">
                                    <img src="<?php echo $v; ?>" style="width:100%;height:200px;object-fit:fill;">
                                </a>
                            </div>
                            <?php } ?>
                            <a href="javascript:void(0)" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </a>
                            <a href="javascript:void(0)" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                    <?php } ?>  
                </div>
            </div>   
            <?php 
                $getSettings = $this->db->query('select * from settings where name="personalUnknownFaceAmount"')->result_array();
            ?>
            <h5 class="payDiv text-center card-title mb-0 pb-0">To View Complete Details <br><u style="color: #d82124;">Pay Rs. <?= $getSettings[0]['value']; ?> Only</u></h5>
            <div class="row justify-content-center mt-3">
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="row justify-content-center payDiv">
                        <div class="form-group col-12 col-md-4 col-lg-6 mt-1 text-center">
                            <button type="button" class="mx-0 btn btn-style-five disabled-on-loading w-100" style="padding: 0.6rem!important;" onclick="payNow(this)"> <i class="bi bi-cash"></i> Pay Now</button>
                        </div>
                    </div>
                    <div class="row justify-content-center d-none" id="viewResultDiv">
                        <div class="text-center col-12 col-md-4 col-lg-6 mt-1">
                            <a href="<?= base_url(); ?>NonKyc/completeFaceMatchResults?type=unknown" style="padding: 0.6rem!important;" class="mx-0 btn btn-style-green disabled-on-loading w-100">View All Results Here...</a>
                        </div>
                    </div>  
                </div>
            </div>
         </div>
    </div>
</main>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    
    function payNow(ele)
    {
        $(ele).attr('disabled',true);
        let rzpData = new FormData();
        rzpData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        rzpData.append('amount', (49 * 100));
        $.ajax({
            url:'<?= base_url(); ?>user/createOrder',
            type:'post',
            data:rzpData,
            contentType: false,
            cache: false,
            processData:false,
            success:function(rzpRes)
            {
                let rzpParse = JSON.parse(rzpRes);
                var options = {
                    "order_id" : rzpParse.orderId,
                    "key": "rzp_live_IS6pmFuBDVlq9p",
                    "amount": (49 * 100),
                    "name": "KHOJI",
                    "description": "Face Match Payment",
                    "image": "<?php echo base_url(); ?>assets/images/khoji.webp",// COMPANY LOGO
                    "handler": function (response) {
                        $.ajax({
                            url:'<?php echo base_url(); ?>NonKyc/savePersonalUnknownPayment',
                            type:'get',
                            success:function(res)
                            {
                                Swal.fire({
                                    title:'<strong style="font-size:1rem;color:black;">Payment Completed Successfully</strong>',
                                    icon:'success',
                                    customClass:{
                                        actions:'mt-0'
                                    },
                                    allowOutsideClick:false,
                                    showCloseButton: false,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true,
                                    confirmButtonText:'Continue'
                                }).then((result) => {
                                    $('.payDiv').addClass('d-none');
                                    $('#viewResultDiv').removeClass('d-none');
                                })
                            }
                        })
                    },
                    modal:{
                        onDismiss:function()
                        {
                            toastr.error('Payment Cancelled');
                            $(ele).removeAttr('disabled');        
                        }
                    },
                    "prefill": {
                        "name": "<?php echo $_SESSION['aadharName']; ?>", // pass customer name
                        "contact": '<?php echo $_SESSION['loginmob']; ?>' //customer phone no.
                    },
                    "theme": {
                        "color": "#ff271d" // screen color
                    }
                };
                var propay = new Razorpay(options);
                propay.open();
                propay.on('payment.failed', function (response){
                    toastr.error(response.error.description);
                    $(ele).removeAttr('disabled');
                });
            }
        })   
    }
</script>