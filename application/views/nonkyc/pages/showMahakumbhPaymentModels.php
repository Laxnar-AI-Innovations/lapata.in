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
    <div class="pagetitle card">
      <div class="card-header text-center">
            <h5 class="mb-0 text-center"><b style="color:black;">To proceed, you have to pay <i class="fa fa-rupee-sign"></i>51</b></h5>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-4 mb-4">
            <img src="<?= base_url(); ?>assets/icons/payImg.avif" style="width: 100%;height: 300px;">
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center card">
                <div class="card-body p-0 py-3">
                    <button type="button" id="payNow" onclick="payWithout(this)" class="btn mt-0 btn-style-red disabled-on-loading" style="border-radius:0!important;padding:15px 50px!important;"> Continue</button>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    
    function payWithout(ele)
    {
        $(ele).attr('disabled',true);
        let rzpData = new FormData();
        rzpData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        rzpData.append('amount', (51 * 100));
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
                    "amount": (51 * 100),
                    "name": "KHOJI",
                    "description": "Mahakumbh Payment",
                    "image": "<?php echo base_url(); ?>assets/images/khoji.webp",// COMPANY LOGO
                    "handler": function (response) {
                        let paymentData = new FormData();
                        paymentData.append('Id','<?= $_GET['id']; ?>');
                        paymentData.append('planId',12);
                        paymentData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        paymentData.append('amount',51);
                        $.ajax({
                            url:'<?php echo base_url(); ?>NonKyc/saveMahakumbhPayment',
                            type:'post',
                            data:paymentData,
                            contentType: false,
                            cache: false,
                            processData:false,
                            success:function(res)
                            {
                                let paymentResponse = JSON.parse(res);
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
                                }).then(() => {
                                    location.href="<?= base_url(); ?>NonKyc/manage_mahakumbh_person";
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