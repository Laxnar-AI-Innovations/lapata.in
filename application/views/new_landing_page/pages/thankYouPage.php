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
</style>
<div class="container">

<section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center py-2">
    <div class="thankyou-page">
        <div id="lottie-animation" class="mx-auto" style="width:200px;height: 200px;"></div>
        <div>
            <?php 
                $getDetail = $this->db->query('select * from nonKycUser where uid='.$_SESSION['user_id'])->result_array();
                if($getDetail[0]['gender'] == 'Male')
                {
            ?>
            <h1 class="text-center mb-0">Thank You!</h1>
            <h5 class="text-center text-success mt-3 px-3"><b>You are registered successfully! </b></h5>
            <div class="form-group mb-2 text-center">
                <h4 style="color:black;">Your Name = <?= $getDetail[0]['aadharname']; ?></h4>
            </div>
            <div class="form-group mb-2 text-center">
                <h4 style="color:black;">Your ID = <?= $_SESSION['landingMob']; ?> (Mob no)</h4>
            </div>
            <div class="form-group mb-2 col-12 mx-auto">
                <h4 style="color:green;" class="text-center">You are eligible to upload missing & unknown person details</h4>
            </div>
            <?php }else{ ?>
            <h5 class="text-center text-success mt-3 px-3"><b>You are registered successfully! </b></h5>
            <div class="form-group mb-2 text-center">
                <h4 style="color:black;">Your Name = <?= $getDetail[0]['aadharname']; ?></h4>
            </div>
            <div class="form-group mb-2 text-center">
                <h4 style="color:black;">Your ID = <?= $_SESSION['landingMob']; ?> (Mob no)</h4>
            </div>
            <div class="form-group mb-2 col-12 mx-auto">
                <h4 style="color:green;" class="text-center">You are eligible to upload missing & unknown person details</h4>
            </div>
            <?php } ?>
            <div class="form-group mt-2 row justify-content-center mx-0">
                <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                    <button onclick="redirectAccordingly('upload')" class="w-100 btn-style-red disabled-on-loading btn"> Upload Your Missing Person</button>
                </div>
                <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                    <button onclick="redirectAccordingly('dashboard')" class="w-100 btn-style-green disabled-on-loading btn"> Go To Dashboard</button>
                </div>
            </div>
            <div id="lottie-animation1" style="position:absolute;bottom: 1px;z-index: -1;"></div>
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
        if(type == 'upload')
        {
            location.href="<?= base_url(); ?>NonKyc/lapata_new_login";
        }else{
            location.href="<?= base_url(); ?>non-kyc-dashboard-profile";
        }
    }
</script>