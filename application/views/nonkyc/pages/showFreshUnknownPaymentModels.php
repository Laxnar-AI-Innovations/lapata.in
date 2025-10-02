<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    ul li img {
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    ul {
        list-style: none;
        font-family: THICCCBOI, sans-serif;
        padding-left: 1rem;
    }

    .descDiv ul li {
        display: flex
    ;
        align-items: center;
        margin-bottom: 10px;
        font-size: 0.8rem;
    }

    .white_pkg{
        color: black!important;
        background:white!important;
        min-height: 75px;
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
        min-height: 75px;
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
        min-height: 75px;
        color: white!important;
        box-shadow: rgba(0, 0, 0, 0) 0pxa 0px 0px 0px;
        transition: transform 250ms ease-in-out 0s, box-shadow 250ms ease-in-out 0s;
        background: radial-gradient(140.76% 131.96% at 100% 100%, rgb(176, 56, 220) 0%, rgba(74, 42, 150, 0.5) 73.57%, rgba(74, 42, 150, 0) 100%), rgb(29, 82, 157)!important;
    }
    
    .third_pkg {
        border: 1px solid rebeccapurple;
        border-radius: 12px;
        padding: 0px 21px 16px;
        overflow: hidden;
        width: 100%;
        min-height: 75px;
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
        <h2 class="fs-25 mb-3 text-center text-dark">Choose <span class="text-gradient gradient-theme"> Your Plan</span></h2>
    </div>
    <?php 
        $isUpload = 0;
        if($_SERVER['HTTP_REFERER'] != base_url().'NonKyc/upload_unknown_details_new?pn=3')
        {
    ?>
        <?php 
            if($_SERVER['HTTP_REFERER'] != base_url().'NonKyc/manage_unknown_details_new')
            {
                $getId = parse_url($_SERVER['HTTP_REFERER'],PHP_URL_QUERY);
                $explode = explode('&',$getId);
        ?>
        <input type="hidden" id="redirect" value="<?php echo base_url().'NonKyc/editUnknownDetailsNew?'.$explode[0].'&pn=4'; ?>">
        <?php      
            }else{
        ?>
        <input type="hidden" id="redirect" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
        <?php } ?>
    <?php }else{ 
        $isUpload = 1;
    ?>
    <input type="hidden" id="redirect" value="<?php echo base_url().'NonKyc/upload_unknown_details_new?pn=4'; ?>">
    <?php } ?>
    <div class="container-fluid px-0">
        <div class="row justify-content-center">
            <?php 
                $getPackages = $this->db->query('select * from packages where type="unknown" order by validity asc')->result_array();
                foreach($getPackages as $k=>$v)
                {
                    $getPersonDetail = $this->db->query('select * from unknown_person where id='.(isset($_GET['id']) ? $_GET['id'] : (isset($_SESSION['unknownId']) ? $_SESSION['unknownId'] : 0)))->result_array();
                    if(count($getPersonDetail) > 0)
                    {
                        if($getPersonDetail[0]['Application_no'] != NULL)
                        {
                            $getIfAlready = $this->db->query('select * from uploadtransactions where isKyc=0 and idNumber="'.$getPersonDetail[0]['Application_no'].'" and type="unknown"')->result_array();      
                        }else{
                            $getIfAlready = array();
                        }
                    }else{
                        $getIfAlready = array();
                    }
                    $getAllotedPackages = $this->db->query('select * from allotedPackages where userType="NonKyc" and userId='.$_SESSION['user_id'].' and packageId='.$v['Id'].' and complaintType="Unknown"')->result_array();
                    if(count($getAllotedPackages) > 0)
                    {
                        $v['amount'] = 0;
                    }else{
                        if($getPersonDetail[0]['isFree'] == 0)
                        {
                            if($v['amount'] == 0)
                            {
                                continue;
                            }
                        }else{
                            if($v['packageName'] == '1 Week')
                            {
                                $v['amount'] = 0;
                            }
                        }
                    }
            ?>
            <div class="col-sm-12 col-lg-3 col-md-5 me-md-3 mt-0 card px-0">
                <?php 
                    if($k == 2)
                    {
                ?>
                <div class="card-header card-header1 py-0" id="<?php echo 'color-'.$k; ?>">
                <?php }else if($k == 1){ ?>
                <div class="card-header card-header1 py-0" id="<?php echo 'color-'.$k; ?>">
                <?php }else{ ?>
                <div class="card-header card-header1 py-0" id="<?php echo 'color-'.$k; ?>">
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
                            <?php 
                                if($v['packageName'] == '1 Week')
                                {
                            ?>
                            <?php 
                                $getIfFreeCredit = $this->db->query('select * from nonKycUser where uid='.$_SESSION['user_id'])->result_array();
                                $freeCredit = 0;
                                if($getIfFreeCredit[0]['freeUnknownCreditUsed'] == NULL || $getIfFreeCredit[0]['freeUnknownCreditUsed'] < 10)
                                {
                                    if($getIfFreeCredit[0]['freeUnknownCreditUsed'] == NULL)
                                    {
                                        $freeCredit = 10;
                                    }else{
                                        $freeCredit = 10 - $getIfFreeCredit[0]['freeUnknownCreditUsed'];   
                                    }
                                }
                                if($freeCredit != 0)
                                {
                            ?>
                            <h6 class="text-center text-light mb-0"><b style="font-family:math;">Credits Left : - <?= $freeCredit; ?> / 10</b></h6>
                            <?php } ?>
                            <?php } ?>
                            <?php }else{ ?>
                            <p><b><i class="fa fa-rupee-sign"></i> <?= $v['amount']; ?></b></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="card-body descDiv p-0 align-items-center my-3 d-flex" id="card-body<?= $v['Id']; ?>">
                    <ul type="disc" class="mb-0">
                        <li style="color:black;font-size:0.9rem;"><img src="<?php echo base_url();?>assets_landing_page/price_icon/active.png" alt=""><span><b class="text-gradient gradient-theme d-inline">Your Missing Person data stays active for <?= $v['packageName']; ?></b><b> after successful purchase.</b></span></li>
                        <li style="color:black;font-size:0.9rem;"><img src="<?php echo base_url();?>assets_landing_page/price_icon/1.png" alt=""><span><b class="text-gradient gradient-theme">Anyone can search</b><b> your missing person using face or ID details uploaded by you.</b></span></li>
                        <li style="color:black;font-size:0.9rem;"><img src="<?php echo base_url();?>assets_landing_page/price_icon/2.png" alt=""><span><b class="text-gradient gradient-theme">Instant alert with alarm</b><b> if someone searches for your missing person.</b></span></li>
                        <li style="color:black;font-size:0.9rem;"><img src="<?php echo base_url();?>assets_landing_page/price_icon/3.png" alt=""><span><b class="text-gradient gradient-theme">Share link</b><b> of your missing person's details with ON/OFF control.</b></span></li>
                        <li style="color:black;font-size:0.9rem;"><img src="<?php echo base_url();?>assets_landing_page/price_icon/4.png" alt=""><span><b>Get alerts if NGOs, police, or volunteers upload your case for </b><b class="text-gradient gradient-theme">public identification.</b></span></li>
                        <li style="color:black;font-size:0.9rem;"><img src="<?php echo base_url();?>assets_landing_page/price_icon/share.png" alt=""><span><b>We will </b><b class="text-gradient gradient-theme">promote & share your details</b><b> with NGOs and social workers for faster help.</b></span></li>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
        <input type="hidden" id="unknownId" value="<?= $getPersonDetail[0]['id']; ?>">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center card">
                <div class="card-body p-0 py-3">
                    <button type="button" onclick="payNow(this,'<?php echo $getPersonDetail[0]['Application_no']; ?>')" class="btn mt-0 btn-style-red disabled-on-loading" style="border-radius:0!important;padding:15px 50px!important;"> Next</button>
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
    
    <?php 
        $getFinalId = $this->db->query('select max(Id) as Id from searchfacehistoryafterlogin')->result_array();
        if($getFinalId[0]['Id'] != NULL)
        {
            $_SESSION['searchFaceIdAfterLogin'] = $getFinalId[0]['Id'] + 1;
        }else{
            $_SESSION['searchFaceIdAfterLogin'] = 1;
        }
        $insertdata = array(
            'Id' => $_SESSION['searchFaceIdAfterLogin'],
            'userId' => $_SESSION['user_id'],
            'isKyc' => 0
        );
        $insert = $this->db->insert('searchfacehistoryafterlogin',$insertdata);
    ?>
    
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
    
    function payNow(ele,idNumber)
    {
        $(ele).attr('disabled',true);
        let planId = $('input[name="plan"]:checked').val();
        let split = planId.split('-');
        if(split[1] == '0')
        {
            $.ajax({
    		    url:'<?php echo base_url(); ?>NonKyc/saveLapataUploadPayment',
    		    data:{unknownId:$('#unknownId').val(),'isUpload': <?= $isUpload; ?>,idNumber:idNumber,packageId:split[0],amount: split[1],type:'unknown','_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
    		    type:'post',
    		    success:function(res)
    		    {
    		        let paymentResponse = JSON.parse(res);
    		        Swal.fire({
    		            title:'<strong style="font-size:1rem;color:black;">Uploaded Successfully</strong>',
    		            icon:'success',
    		            customClass:{
    		                title : 'pt-0',
                            actions:'mt-2'
    		            },
                        allowOutsideClick:false,
                        showCloseButton: false,
                        showCancelButton: false,
                        focusConfirm: false,
                        showConfirmButton:true,
                        confirmButtonText:'Continue'
                    }).then((result) => {
                        let data = new FormData();
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        data.append('mainPhotoSelectedFacematch','<?= "data:image/jpeg;base64,".base64_encode(file_get_contents(base_url().''.$getPersonDetail[0]['Photo'])); ?>');
                        data.append('type','missing');
                        <?php 
                            if($getPersonDetail[0]['Gender'] == 'boy')
                            {
                        ?>
                        data.append('gender','male');   
                        <?php }else{ ?>
                        data.append('gender','female');   
                        <?php } ?>
                        $.ajax({
                            url:'<?php echo base_url(); ?>NonKyc/searchPersonFaceNew',
                            data:data,
                            contentType: false,
                            cache: false,
                            processData:false,
                            type:'post',
                            success:function(res)
                            {
                                let parse = JSON.parse(res);
                                if(parse.finalCount > 0)
                                {
                                    location.href='<?php echo base_url(); ?>NonKyc/view_expiry_unknown?id='+paymentResponse.Id+'&redirect='+$('#redirect').val();
                                }else{
                                    location.href='<?php echo base_url(); ?>NonKyc/view_expiry_unknown?id='+paymentResponse.Id+'&redirect='+$('#redirect').val();
                                }
                            }
                        });
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
                    	"name": "Khoji",
                    	"description": "Unknown Payment",
                    	"image": "<?php echo base_url(); ?>assets/images/khoji.webp",// COMPANY LOGO
                    	"handler": function (response) {
                    		$.ajax({
                    		    url:'<?php echo base_url(); ?>NonKyc/saveLapataUploadPayment',
                    		    data:{unknownId:$('#unknownId').val(),'isUpload': <?= $isUpload; ?>,idNumber:idNumber,packageId:split[0],amount: split[1],type:'unknown','_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
                    		    type:'post',
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
                                    }).then((result) => {
                                        let data = new FormData();
                                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                        data.append('mainPhotoSelectedFacematch','<?= "data:image/jpeg;base64,".base64_encode(file_get_contents(base_url().''.$getPersonDetail[0]['Photo'])); ?>');
                                        data.append('type','missing');
                                        <?php 
                                            if($getPersonDetail[0]['Gender'] == 'boy')
                                            {
                                        ?>
                                        data.append('gender','male');   
                                        <?php }else{ ?>
                                        data.append('gender','female');   
                                        <?php } ?>
                                        $.ajax({
                                            url:'<?php echo base_url(); ?>NonKyc/searchPersonFaceNew',
                                            data:data,
                                            contentType: false,
                                            cache: false,
                                            processData:false,
                                            type:'post',
                                            success:function(res)
                                            {
                                                let parse = JSON.parse(res);
                                                if(parse.finalCount > 0)
                                                {
                                                    location.href='<?php echo base_url(); ?>NonKyc/view_expiry_unknown?id='+paymentResponse.Id+'&redirect='+$('#redirect').val();
                                                }else{
                                                    location.href='<?php echo base_url(); ?>NonKyc/view_expiry_unknown?id='+paymentResponse.Id+'&redirect='+$('#redirect').val();
                                                }
                                            }
                                        });
                                    })
                    		    }
                    		})
                    	},
                    	modal:{
                    	    onDismiss:function()
                    	    {
                    	        $.ajax({
                    	            url:'<?= base_url(); ?>NonKyc/savePaymentStatus',
                    	            data:{id:'<?= $getPersonDetail[0]['id']; ?>',status:'Cancelled','_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
                    	            'type':'post',
                    	            success:function(res)
                    	            {
                    	                toastr.error('Payment Cancelled');
                                        $(ele).removeAttr('disabled');              
                    	            }
                    	        })
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
                    propay.on('payment.error', function (response){
                        toastr.error(response.error.description);
                        $(ele).removeAttr('disabled');
                    });
                }
            })
        }
    }
</script>