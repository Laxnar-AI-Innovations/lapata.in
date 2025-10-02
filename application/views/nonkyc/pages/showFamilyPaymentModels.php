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
    <div class="pagetitle">
      <h4 class="text-center text-danger">Select Your Plan</h4>
    </div>
    <div class="container-fluid px-0">
        <div class="row justify-content-center">
            <?php 
                $getPackages = $this->db->query('select * from packages where type="family" order by Id asc')->result_array();
                foreach($getPackages as $k=>$v)
                {
                    if($_SESSION['landingMob'] == '8707440907' || $_SESSION['landingMob'] == '9415031312' || $_SESSION['landingMob'] == '8707624604')
                    {
                        $v['amount'] = 0;
                    }
            ?>
            <div class="col-sm-12 col-lg-3 col-md-5 me-md-3 mt-0 card px-0">
                <?php 
                    if($k == 2)
                    {
                ?>
                <div class="card-header py-0" id="<?php echo 'color-'.$k; ?>">
                <?php }else if($k == 1){ ?>
                <div class="card-header py-0" id="<?php echo 'color-'.$k; ?>">
                <?php }else{ ?>
                <div class="card-header py-0" id="<?php echo 'color-'.$k; ?>">
                <?php } ?>
                    <div class="row" style="justify-content:space-between;align-items:<?= ($v['amount'] == 0) ? 'baseline' : 'end'; ?>;">
                        <div class="col-auto px-0">
                            <input type="radio" class="radio-custom" value="<?php echo $v['Id'].'-'.$v['amount']; ?>" name="plan" id="<?= $k; ?>" <?php echo (($k == 0) ? 'checked' : ''); ?>>
                            <label for="<?= $k; ?>" style="display:-webkit-inline-box!important;" class="card-title radio-custom-label mb-0"><?php echo $v['packageName']; ?></label>  
                        </div>
                        <div class="col-auto px-0">
                            <?php 
                                if($v['amount'] == 0)
                                {
                            ?>
                            <p class="mb-0 text-end"><b>FREE</b></p>
                            <?php }else{ ?>
                            <p><b><i class="fa fa-rupee-sign"></i> <?= $v['amount']; ?></b></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="card-body descDiv p-0 align-items-center my-3 d-flex" id="card-body<?= $k; ?>">
                    <ul type="disc" class="mb-0">
                        <?php 
                            if($k == 2)
                            {
                        ?>
                        <li style="color:black;font-size:0.9rem;">Anyone can Search Your Missing Person through Face / Identify as Uploaded by you.</li>
                        <li style="color:black;font-size:0.9rem;">Instant Alert Notification with Alarm to you if Missing Person is Searched.</li>
                        <li style="color:black;font-weight:Bold;font-size:0.9rem;">Link Sharing facility of Missing Person details with Active / Inactive operations.</li>
                        <li style="color:black;font-size:0.9rem;">Instant Alert Notification to you if Your Missing Person Information Uploaded for <b class="text-danger" style="font-weight:600;font-size:0.9rem;">APPEAL FOR IDENTIFICATION</b> by (<b class="text-warning" style="font-weight:600;font-size:0.9rem;">NGO</b>,<b class="text-danger" style="font-weight:600;font-size:0.9rem;">Police</b>,<b class="text-success" style="font-weight:600;font-size:0.9rem;">Samajsevi</b>,etc).</li>
                        <li style="color:black;font-size:0.9rem;">We will promote and Circulate your Missing Person Details To NGO & Samajasevi Group.</li>
                        <?php }else if($k == 1){ ?>
                        <li style="color:black;font-size:0.9rem;">Anyone can Search Your Missing Person through Face / Identify as Uploaded by you.</li>
                        <li style="color:black;font-size:0.9rem;">Instant Alert Notification with Alarm to you if Missing Person is Searched.</li>
                        <li style="color:black;font-weight:Bold;font-size:0.9rem;">Link Sharing facility of Missing Person details with Active / Inactive operations.</li>
                        <li style="color:black;font-size:0.9rem;">Instant Alert Notification to you if Your Missing Person Information Uploaded for <b class="text-danger" style="font-weight:600;font-size:0.9rem;">APPEAL FOR IDENTIFICATION</b> by (<b class="text-warning" style="font-weight:600;font-size:0.9rem;">NGO</b>,<b class="text-danger" style="font-weight:600;font-size:0.9rem;">Police</b>,<b class="text-success" style="font-weight:600;font-size:0.9rem;">Samajsevi</b>,etc).</li>
                        <?php }else{ ?>
                        <li style="color:black;font-size:0.9rem;">Anyone can Search Your Missing Person through Face / Identify as Uploaded by you.</li>
                        <li style="color:black;font-size:0.9rem;">Instant Alert Notification with Alarm to you if Missing Person is Searched.</li>
                        <li style="color:black;font-weight:Bold;font-size:0.9rem;">Link Sharing facility of Missing Person details with Active / Inactive operations.</li>
                        <li style="color:black;font-size:0.9rem;">Instant Alert Notification to you if Your Missing Person Information Uploaded for <b class="text-danger" style="font-weight:600;font-size:0.9rem;">APPEAL FOR IDENTIFICATION</b> by (<b class="text-warning" style="font-weight:600;font-size:0.9rem;">NGO</b>,<b class="text-danger" style="font-weight:600;font-size:0.9rem;">Police</b>,<b class="text-success" style="font-weight:600;font-size:0.9rem;">Samajsevi</b>,etc).</li>
                        <li style="color:black;font-size:0.9rem;">We will promote and Circulate your Missing Person Details To NGO & Samajasevi Group.</li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center card1">
                <div class="card-body p-0 py-3">
                    <button type="button" id="payNow" onclick="payWithout(this)" class="btn mt-0 btn-style-red disabled-on-loading" style="border-radius:0!important;padding:15px 50px!important;"> Continue</button>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    
    $(document).ready(function()
    {
        $('input[name="plan"]').eq(0).click();
    })
    
    $('input[name="plan"]').click(function()
    {
        let val = $('input[name="plan"]:checked').attr('id');
        let id = [];
        let header = $('.card-header');
        for(let i=0;i<header.length;i++)
        {
            id.push(header[i].id);
        }
        if(id[id.length - 1] == null)
        {
            id.pop();   
        }
        for(let j=0;j<id.length;j++)
        {
            $('#'+id[j]).removeClass('first_pkg second_pkg third_pkg').addClass('white_pkg');
            if(id[j] == 'color-'+val)
            {
                let value = ($('input[name="plan"]:checked').val()).split('-');
                if(value[1] == '0')
                {
                    $('#payNow').html(' Next');
                }else{
                    $('#payNow').html(' <i class="fa fa-rupee"></i> Pay Now');
                }
                if(val == '0')
                {
                    $('#'+id[j]).addClass('first_pkg');
                    $('label[for='+val+']').css('color','white!important;');
                }else{
                    if(val == '1')
                    {
                        $('#'+id[j]).addClass('second_pkg');
                        $('label[for='+val+']').css('color','white!important;');
                    }else{
                        $('#'+id[j]).addClass('third_pkg');
                        $('label[for='+val+']').css('color','white!important;');
                    }
                }
                if(window.outerWidth <= 768)
                {
                    $('.descDiv').slideUp('slow').removeClass('d-flex');
                    $('#card-body'+(parseInt(value))).slideDown('slow').addClass('d-flex');   
                }
            }
        }
    })
    
    function payWithout(ele)
    {
        $(ele).attr('disabled',true);
        let planId = $('input[name="plan"]:checked').val();
        let split = planId.split('-');
        if(split[1] == 0)
        {
            let paymentData = new FormData();
            paymentData.append('Id','<?= $_GET['id']; ?>');
            paymentData.append('planId',split[0]);
            paymentData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            paymentData.append('amount',split[1]);
            $.ajax({
                url:'<?php echo base_url(); ?>NonKyc/saveFamilyPayment',
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
                        location.href="<?= base_url(); ?>NonKyc/manage_both_family";
                    })
                }
            })
        }else{
            let rzpData = new FormData();
            rzpData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            rzpData.append('amount', (split[1] * 100));
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
                        "amount": (split[1] * 100),
                        "name": "KHOJI",
                        "description": "Face Match Payment",
                        "image": "<?php echo base_url(); ?>assets/images/khoji.webp",// COMPANY LOGO
                        "handler": function (response) {
                            let paymentData = new FormData();
                            paymentData.append('Id','<?= $_GET['id']; ?>');
                            paymentData.append('planId',split[0]);
                            paymentData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                            paymentData.append('amount',split[1]);
                            $.ajax({
                                url:'<?php echo base_url(); ?>NonKyc/saveFamilyPayment',
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
                                        location.href="<?= base_url(); ?>NonKyc/manage_both_family";
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
    }
    
</script>