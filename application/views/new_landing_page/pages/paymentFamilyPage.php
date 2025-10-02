<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2048451915513172');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2048451915513172&ev=PageView&noscript=1"
/></noscript>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .nav-tabs .nav-link.active {
    background-color: darkred;
    /* background-image: linear-gradient(93deg, #061aa3, #d90f0f) !important; */
    color: #fff;
    font-weight: bold;
}
    ul li img {
    width: 40px;
    height: 40px;
    margin-right: 10px;
}

ul {
    list-style: none;
    padding: 0;
}

ul li {
    display: flex
;
    align-items: center;
    margin-bottom: 10px;
    font-size: 0.8rem;
}

.tab-content {
    padding: 10px;
}
    .form-control,.form-select{
        border:2px solid black!important;
        color:black!important;
        font-weight:bold;
    }
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    #swal2-html-container{
        margin: 0 0rem!important;
    }
    .btn{
        border:0!important;
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
        width: 25px;
        height: 30px;
        /*padding-bottom: 22px;*/
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
    .price-card {
    max-width: 400px;
    margin: auto;
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.gradient-theme {
    background-image: linear-gradient(43deg, #0026ff 0, #ff1e0e 46%, #3F51B5 100%);
}
.text-gradient {
    -webkit-background-clip: text;
    -webkit-text-fill-color: #fff0;
    display: inline-block;
}
</style>
<style>
    @media only screen and (max-width: 600px) {
 .imgae_display{
      display: none;
 }
}
</style>
<div class="container">
    <?php 
        $getTransaction = $this->db->query('select * from funneltransactions where isFinalSubmitted=0 and userId='.$_SESSION['user_id'].' and paymentType="'.($_GET['type'] == 'upload' ? 'missing' : 'family').'" order by Id desc limit 1')->result_array();
        if(count($getTransaction) > 0)
        {
    ?>
    <section class="section register mt-0 mb-5 d-flex flex-column align-items-center justify-content-center py-2">
        <div class="thankyou-page">
            <div id="lottie-animation" class="mx-auto" style="width:200px;height: 200px;"></div>
            <div>
                <h1 class="text-center mb-0">Thank You!</h1>
                <div class="form-group my-2 col-12 mx-auto">
                    <?php 
                        if($_GET['type'] == 'upload')
                        {
                    ?>
                    <h4 style="color:green;" class="text-center mb-0">Now Start Uploading Missing Person Details</h4>
                    <?php }else{ ?>
                    <h4 style="color:green;" class="text-center mb-0">Now Start Uploading Family Member Details</h4>
                    <?php } ?>
                </div>
                <div class="form-group mt-0 row justify-content-center mx-0">
                    <?php 
                        if($_GET['type'] == 'upload')
                        {
                    ?>
                    <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                        <button onclick="redirectAccordingly('missing')" class="w-100 btn-style-red disabled-on-loading btn"> Click Here to upload <img src="<?= base_url(); ?>assets_landing_page/upload_17871647.png" style="width: 30px;height: 30px;" class="ms-2"></button>
                    </div>
                    <?php }else{ ?>
                    <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                        <button onclick="redirectAccordingly('family')" class="w-100 btn-style-five disabled-on-loading btn"> Click Here to upload <img src="<?= base_url(); ?>assets_landing_page/upload_17871647.png" class="ms-2" style="width: 30px;height: 30px;"></button>
                    </div>
                    <?php } ?>
                </div>
                <div id="lottie-animation1" style="position:absolute;bottom: 1px;z-index: -1;"></div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        lottie.loadAnimation({
            container: document.getElementById('lottie-animation'), // Animation render hone ka container
            renderer: 'svg', // SVG format me render karne ke liye
            // loop: true, // Animation loop kare
            // autoplay: true, // Animation automatically play kare
            path: '<?= base_url(); ?>assets/jsons/check_popup.json', // JSON file ka path
          });

        lottie.loadAnimation({
            container: document.getElementById('lottie-animation1'), // Animation render hone ka container
            renderer: 'svg', // SVG format me render karne ke liye
            // loop: true, // Animation loop kare
            // autoplay: true, // Animation automatically play kare
            path: '<?= base_url(); ?>assets/jsons/Animation - 1739357108262-1.json', // JSON file ka path
          });
        function redirectAccordingly(type)
        {
            if(type == 'missing')
            {
                location.href="<?= base_url(); ?>upload-missing-funnel";
            }else{
                if(type == 'dashboard')
                {
                    location.href="<?= base_url(); ?>non-kyc-dashboard-profile";
                }else{
                    location.href="<?= base_url(); ?>upload-family-member-funnel";
                }
            }
        }
    </script>
    <?php }else{ ?>
    <section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center py-2">
         <div class="container py-0">
            <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
                <h2 class="fs-25 mb-3 text-center text-dark">Choose <span class="text-gradient gradient-theme"> Your Plan</span></h2>
                <h5 class="text-center text-danger">After Payment, you can upload details</h5>
            </div>
            <div class="price-card">
                <ul class="nav nav-tabs nav-fill border-0" id="priceTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="three-months-tab" data-bs-toggle="tab" data-bs-target="#three-months" type="button" role="tab" aria-controls="three-months" aria-selected="false"><?= $_GET['type'] == 'upload' ? '3 Month' : '1 Year'; ?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="one-month-tab" data-bs-toggle="tab" data-bs-target="#one-month" type="button" role="tab" aria-controls="one-month" aria-selected="true"><?= $_GET['type'] == 'upload' ? '1 Year' : '3 Years'; ?></button>
                    </li>
                </ul>
                <div class="tab-content mt-0" id="priceTabContent">
                    <div class="tab-pane fade show active" id="three-months" role="tabpanel" aria-labelledby="three-months-tab">
                       <h5 class="text-center fs-20">Start with just <span class="text-danger "> <?= $_GET['type'] == 'upload' ? '₹299' : '₹299'; ?></span></h5>
                        <ul class="english_divi">
                           <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/1.png" alt="">Any one can Search for your missing persons using face photo, identity, or uploaded details.</li>
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/2.png" alt="">Receive instant WhatsApp and SMS notifications when a match is found.</li>
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/3.png" alt="">Easy-to-share link with active/inactive status options. </li>
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/4.png" alt="">Get alerts when police, NGOs, or social workers upload your missing person details for identification.</li>
                        </ul>
                        <ul class="hindi_divi d-none">
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/1.png" alt="">कोई भी अब आपके लापता व्यक्तत को केवल चेहरे और अपलोडेड जानकारी के ही माध्यम से सचच करके आपसे संपकच कर सकता है</li>
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/2.png" alt="">जैसे ही आपके लापता व्यक्तत से संबंधित मैच फाउंड होगा तो तुरंत व्हाट्सएप और एसएमएस नोटिफफकेशन प्राप्त करें।</li>
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/3.png" alt="">लापता व्यक्तत की डडिेल्स ऐक्तिव ओर इनएक्तिव जैसी सुवविाओं के साथ आसानी से शेयर कर सकते हैं</li>
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/4.png" alt="">जब पुलिस, एनजीओ या सोशल वकचर आपके गुमशुदा व्यक्तत की जानकारी पहचान के ललए अपलोड करें, तो आपको अलिच लमलेगा।</li>
                        </ul>
                         <div class="text-center">
                            <button type="button" onclick="payNow('<?= $_GET['type'] == 'upload' ? '299' : '299'; ?>',this,'<?= $_GET['type'] == 'upload' ? '3 month' : '1 year'; ?>')" class="btn btn-danger theme_bk_color getStarted disabled-on-loading" style="border:1px dotted white;" > Pay Now&nbsp; ></button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="one-month" role="tabpanel" aria-labelledby="one-month-tab">
                        <h5 class="text-center fs-20">Start with just <span class="text-danger "> ₹999</span></h5>
                        <ul class="english_divi">
                           <li ><img src="<?php echo base_url();?>assets_landing_page/price_icon/1.png" alt="">Any one can Search for your missing persons using face photo, identity, or uploaded details.</li>
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/2.png" alt="">Receive instant WhatsApp and SMS notifications when a match is found.</li>
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/3.png" alt="">Easy-to-share link with active/inactive status options. </li>
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/4.png" alt="">Get alerts when police, NGOs, or social workers upload your missing person details for identification.</li>
                        </ul>
                        <ul class="hindi_divi d-none">
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/1.png" alt="">कोई भी अब आपके लापता व्यक्तत को केवल चेहरे और अपलोडेड जानकारी के ही माध्यम से सचच करके आपसे संपकच कर सकता है</li>
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/2.png" alt="">जैसे ही आपके लापता व्यक्तत से संबंधित मैच फाउंड होगा तो तुरंत व्हाट्सएप और एसएमएस नोटिफफकेशन प्राप्त करें।</li>
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/3.png" alt="">लापता व्यक्तत की डडिेल्स ऐक्तिव ओर इनएक्तिव जैसी सुवविाओं के साथ आसानी से शेयर कर सकते हैं</li>
                            <li><img src="<?php echo base_url();?>assets_landing_page/price_icon/4.png" alt="">जब पुलिस, एनजीओ या सोशल वकचर आपके गुमशुदा व्यक्तत की जानकारी पहचान के ललए अपलोड करें, तो आपको अलिच लमलेगा।</li>
                        </ul>
                        <div class="text-center">
                            <button type="button" onclick="payNow('<?= $_GET['type'] == 'upload' ? '1' : '999'; ?>',this,'<?= $_GET['type'] == 'upload' ? '1 year' : '3 year'; ?>')" class="btn btn-danger theme_bk_color getStarted disabled-on-loading" style="border:1px dotted white;" > Pay Now&nbsp; ></a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center mb-0 mt-3"><b><a style="text-decoration: underline;" href="<?= base_url(); ?>non-kyc-dashboard-profile">No, i want to proceed without plan</a></b></p>
        </div>
    </section>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script type="text/javascript">
        function payNow(amount,ele,duration)
        {
            $(ele).attr('disabled',true);
            let rzpData = new FormData();
            rzpData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            rzpData.append('amount', (amount * 100));
            rzpData.append('paymentType','<?= ($_GET['type']) == 'upload' ? 'missing' : 'family' ?>');
            rzpData.append('duration',duration);
            rzpData.append('specialType','funnel');
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
                        "amount": (amount * 100),
                        "name": "KHOJI",
                        "description": "Funnel Payment",
                        "image": "<?php echo base_url(); ?>assets/images/khoji.webp",// COMPANY LOGO
                        "handler": function (response) {
                            Swal.fire({
                                html:'<div class="row justify-content-center"><div class="col-12"><div id="lottie-popup-container" style="width:100%;height:200px;"></div></div></div><h6 style="text-align:center;color:black;font-weight:bold;font-size:0.8rem;" class="mb-2">Payment Completed Successfully.</h6>',
                                willOpen : () => {
                                    lottie.loadAnimation({
                                    container: document.getElementById('lottie-popup-container'), // Animation render hone ka container
                                    renderer: 'svg', // SVG format me render karne ke liye
                                    // loop: true, // Animation loop kare
                                    // autoplay: true, // Animation automatically play kare
                                    path: '<?= base_url(); ?>assets_landing_page/Animation - 1742031770346.json', // JSON file ka path
                                  });
                                },
                                customClass:{
                                    actions:'mt-0',
                                    htmlContainer:'mx-1 overflow-hidden',
                                    'popup':'px-3'
                                },
                                allowOutsideClick:false,
                                showCloseButton: false,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:true,
                                confirmButtonText:'Continue'
                            }).then((result) => {
                                location.reload();
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
    <?php } ?>
</div>