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
    .thankyou-page ._header {
    background: #fee028;
    padding: 30px 30px;
    text-align: center;
    background: darkturquoise;
}
.thankyou-page ._header .logo {
    max-width: 200px;
    margin: 0 auto;
}
.thankyou-page ._header .logo img {
    width: 100%;
}
.thankyou-page ._header h1 {
    font-size: 45px;
    font-weight: 800;
    color: white;
    margin: 0;
}
.thankyou-page ._body {
    margin: -30px 0 30px;
}
.thankyou-page ._body ._box {
    margin: auto;
    max-width: 90%;
    padding: 50px 20px 25px 20px;
    background: white;
    border-radius: 3px;
    box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
    -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
    -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
}
.thankyou-page ._body ._box h2 {
    font-size: 32px;
    font-weight: 600;
    color: #4ab74a;
}
.thankyou-page ._footer {
    text-align: center;
    padding: 10px 30px;
}

.thankyou-page ._footer .btn {
    background: #4ab74a;
    color: white;
    border: 0;
    font-size: 14px;
    font-weight: 600;
    border-radius: 0;
    letter-spacing: 0.8px;
    padding: 20px 33px;
    text-transform: uppercase;
}

.text-gradient2 {
    background: linear-gradient(to right, blue, blue, #FF0000);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 2px 2px 4px rgba(255, 153, 51, 0.6);
    font-family: Cinzel !important;
}
</style>
<div class="container">

<section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center py-2">
    <div class="thankyou-page">
        <div class="mx-auto" style="width:200px;height: 200px;" id="lottie-animation"></div>
        <div>
            <?php 
                $getDetail = $this->db->query('select * from nonKycUser where uid='.$_SESSION['user_id'])->result_array();
            ?>
            <h4 class="text-center mb-0"><b style="color:black;">Hii,</b> <b class="text-gradient2 gradient-theme"><?= $getDetail[0]['aadharname']; ?></b> </h4>
            <h4 class="text-center mb-0"><b style="color: black;">Select the service</b></h4>
            <h4 class="text-center mb-0"><b style="color:black;">You want to continue</b></h4>
            <div class="form-group mt-2 row justify-content-center mx-0">
                <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                    <button onclick="redirectAccordingly('family')" class="w-100 btn-style-five disabled-on-loading btn" style="padding:10px!important;font-size:0.9rem!important;">Want to add Family Member <img src="<?= base_url(); ?>assets_landing_page/familiy_15540129.png" class="ms-2" style="width: 30px;height: 30px;"></button>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<script type="text/javascript">

    lottie.loadAnimation({
        container: document.getElementById('lottie-animation'), // Animation render hone ka container
        renderer: 'svg', // SVG format me render karne ke liye
        // loop: true, // Animation loop kare
        // autoplay: true, // Animation automatically play kare
        path: '<?= base_url(); ?>assets_landing_page/Animation - 1741149838261.json', // JSON file ka path
      });

    function redirectAccordingly(type)
    {
        location.href="<?= base_url(); ?>payment-family-page?type="+type;
    }
</script>