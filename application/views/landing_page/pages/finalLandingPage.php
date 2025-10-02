<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<style type="text/css">
    .swiper-button-prev,
    .swiper-button-next {
    width: 40px;
    height: 40px;
    background-color: #000; /* Change to your preferred color */
    border-radius: 50%;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 16px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }
    .swiper-button-prev::after,
    .swiper-button-next::after {
    font-size: 16px;
    }
    /* Optional: Change arrow direction color */
    .swiper-button-prev::after {
    content: '←'; /* Or use a FontAwesome icon if preferred */
    }
    .swiper-button-next::after {
    content: '→';
    }
    .video-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center; /* optional, to center the label under the video */
    margin-bottom: 10px; /* space between slides if needed */
    max-width: 300px;
    }
    .video-wrapper label {
    margin-top: 8px;
    font-size: 16px;
    text-align: center;
    }
    .swiper-container-explore {
    width: 100%;
    padding: 20px 0;
    position: relative;
    overflow: hidden;
    }
    .swiper-container-explore .swiper-slide {
    width: auto;
    display: flex;
    justify-content: center;
    }
    .swiper-container-explore video {
    width: 100%;
    max-width: 300px;
    border-radius: 10px;
    }
    .theme_bk_color {
    background-image: linear-gradient(93deg, #061aa3, #d90f0f) !important;
    }
    .marquee-container {
    width: 100%;
    overflow: hidden;
    background-color: #f0f0f0;
    padding: 10px 0;
    }
    marquee {
    display: block;
    }
    .marquee-container:hover marquee {
    animation-play-state: paused;
    }
    .marquee-item {
    margin: 0 10px;
    cursor: pointer;
    display: inline-block;
    }
    .marquee-item img,
    .marquee-item video {
    width: 260px;
    height: 150px;
    object-fit: cover;
    border: 2px solid #ddd;
    border-radius: 5px;
    }
    /* Popup styles */
    .popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
    z-index: 9999;
    }
    .popup-content {
    max-width: 90%;
    max-height: 90%;
    position: relative;
    height: 100%;
    }
    .popup-content img,
    .popup-content video {
    max-width: 100%;
    max-height: 100%;
    }
    .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #fff;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 18px;
    cursor: pointer;
    }
    .h3-main {
    text-align: center;
    font-size: 3rem;
    font-family: Arial, sans-serif;
    color: #0d0c4a;
    -webkit-text-stroke: 2px #e11313;
    }
    .d-none
    {
    display: none;
    }
    .v-none
    {
    visibility: hidden;
    }
    iframe
    {
    width:100%;
    height: 100%;
    }
    span.play-button {
    position: absolute;
    top: 40%;
    margin-left: 8%;
    color: white;
    font-size: 50px;
    cursor:pointer;
    }
    .ytp-impression-link
    {
    display: none !important;
    }
    .ytp-woyt-emc3ds-cf.ytp-impression-link {
    border-radius: 24px;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    background: rgba(0,0,0,.3);
    right: 12px;
    display: none;
    }
    @media screen and (max-width: 768px) {
    span.play-button {
    margin-left: 25%;
    }
    }
</style>
<style>
    .parent-why-us {
    background-color: #d4f4ee; /* Light greenish background */
    }
    .feature-box {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
    }
    .feature-icon img {
    width: 40px; /* Adjust size to match the design */
    }
    .feature-text p {
    font-size: 0.9rem;
    line-height: 1rem;
    margin-bottom: 5px;
    }
</style>
<style>
    .background {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: url('<?= base_url(); ?>assets_landing_page/img/Mahakumbh-main.jpg') no-repeat center center/cover;
    z-index: 1; /* Behind content */
    }
    .gradient-theme {
    background-image: linear-gradient(43deg, #0026ff 0, #ff1e0e 46%, #3F51B5 100%);
    }
    .text-gradient-core {
    -webkit-background-clip: text;
    -webkit-text-fill-color: #fff0;
    display: inline-block;
    }
    .text-gradient2 {
    background: linear-gradient(to right, #f23a00, #ff0000, #FF0000);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 2px 2px 4px rgba(255, 153, 51, 0.6);
    font-family: Cinzel !important;
    }
    /* Dark content on top */
    .content {
    position: relative;
    z-index: 2; /* Above background */
    color: #ffffff; /* White text */
    margin: auto;
    text-align: center;
    border-radius: 10px; /* Optional rounded corners */      
    transform: translateY(0%);
    }
    div:where(.swal2-container).swal2-center>.swal2-popup
    {
    position: fixed;
    top:10px;
    padding-right: .25rem!important;
    padding-left: .25rem!important;
    }
    .swal2-close{
    position: relative!important;
    color: #fff!important;
    font-size: 20px!important;
    line-height: 20px!important;
    font-weight: 600!important;
    padding: 25px 25px!important;
    background-color:black!important;
    }
    .partnerLogo{
    width:auto;
    height: 130px;
    }
    .ln-h-1-2 .card-body{
    height: auto!important;
    }
    .row{
    margin: 0!important;
    }
    .row.mt-4{
    margin-top: 1rem!important;
    }
    .row.mb-4{
    margin-bottom: 1rem!important;
    }
    .ms-auto{
    margin-left: auto!important;
    }
    .plyr--full-ui.plyr--video .plyr__control--overlaid{
    background: #d72222;
    color: white !important;
    }
    .swiper-slide-active {
    font-size: 0.7rem!important;
    }
    .swiper-slide-active p{
    font-size: larger;
    }
    .plyr__poster{
    background-size: 100% 100%;
    }
    #myVideo5{
    border: 2px solid black;
    }
    .v_width{
    object-fit: fill;
    }
    .plyr__video-wrapper{
    height: auto!important;
    }
    .plyr--video{
    height: 200px;
    }
    .mob-view
    }
    {
    display:none !important;
    }
    @media (max-width: 767px)
    {
    .mob-view
    {
    display:block !important;
    }
    .desk-view
    {
    display:none !important;
    }
    .partnerLogo{
    width:auto;
    height: 100px;
    }
    }
    .btn_new_css{
    background-image:linear-gradient(93deg, #061aa3, #d90f0f)!important;
    border:none;
    font-size:0.9rem;
    color:white;
    }
    .btn_new_css:hover{
    background-image:linear-gradient(93deg, green, red);
    border:none;
    font-size:0.9rem;
    color:white;
</style>
<style>
    .bt11:hover {
    background-color: #ff7043;
    border: 1px solid #ff7043;
    color: white !important;
    }
</style>
<section class="wrapper bg-dark desk-view">
    <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="false" data-autoplaytime="10000" data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide " style="background-image:linear-gradient(4deg, black, #710707)">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                <h5 class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">India's First One Click Solution For Finding Missing Persons.</h5>
                                <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">An easy-to-use collaborative platform for Police, NGOs, Social Workers, and families to get instant search results. Families are automatically notified when missing loved ones are found, ensuring a seamless and efficient process.</p>
                                <div class="animate__animated animate__slideInUp animate__delay-3s">
                                    <a href="javascript:void(0)" onclick="showLoginAccordingly('missing')" class="btn btn-lg rounded-pill btn_new_css">Add Your Missing Person </a>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6 ">
                                <picture>
                                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/mobile_1.jpg" type="image/jpg">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/mobile_1.jpg" style="border-radius:50%; border: 2px solid white;" alt="Banner 1">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide " style="background-image:url('https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/Red Modern Gaming Banner Landscape.png')">
                    <!--<div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" style="background-color:#888888!important">-->
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-md-6 " >
                                <picture>
                                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/police_face_scan.jpg" type="image/jpg">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/police_face_scan.jpg" style="border-radius:50%; border: 2px solid white;" alt="Search Person By Face Photo in Khoji">
                                </picture>
                            </div>
                            <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                <h4 class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Search Person <br>by Face Photo.</h4>
                                <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Search by face photo to get the best possible results  providing you with accurate and similar matched results.</p>
                                <div class="animate__animated animate__slideInUp animate__delay-3s">
                                    <a href="<?php echo base_url(); ?>check-person-face-funnel" class="btn btn-lg rounded-pill btn_new_css">Search Person By Face Photo</a>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end -->
                <div class="swiper-slide " style="background-image:linear-gradient(4deg, black, #710707)">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                <h5 class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Upload Appeal for Identification (Unidentified Person)</h5>
                                <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">NGOs, Child care institutions, shelters homes, and social workers can easily upload unidentified person details on <a href="<?= base_url(); ?>">khoji.in</a></p>
                                <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="javascript:void(0)" onclick="showLoginAccordingly('unknown')"
                                    class="btn btn-lg rounded-pill btn_new_css">Upload Appeal for Identification </a></div>
                                <br>
                            </div>
                            <div class="col-md-6 " >
                                <picture>
                                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/unknownbanner.jpg" type="image/jpg">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/unknownbanner.jpg" alt="Upload Appeal for Identification" style="border-radius:50%; border: 2px solid white;height: 600px;"/>
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end -->
                <!--start-->
                <div class="swiper-slide " style="background-image:linear-gradient(4deg, black, #710707)">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-md-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                <h5 class="display-1 fs-40 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                    Search Your Person By Identity
                                </h5>
                                <p class="lead fs-18 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                    Our Search by Identity feature helps identify missing persons by selecting a specific ID and providing instant results from our records.
                                </p>
                                <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="<?php echo base_url(); ?>check-person-details"
                                    class="btn btn-lg rounded-pill btn_new_css">Search Person By Identity </a></div>
                                <br>
                            </div>
                            <div class="col-md-6 " >
                                <picture>
                                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/sbidentity.jpg" type="image/jpg">
                                    <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/sbidentity.jpg" style="border-radius:50%; border: 2px solid white;" alt="Search Your Person By Identity">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end-->
            </div>
            <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
    </div>
    <!-- /.swiper-container -->
</section>
<section class="wrapper mob-view d-none" style="background-color:#f5f5f5;">
    <h4 class="text-justify p-2 mt-3 pb-1"><span class="text-gradient gradient-theme">If you care for your loved ones</span>, Khoji is here to help. If not, we might not be what you need.</h4>
    <div class="swiper-container dots-closer text-center mb-6" style="height: auto;" data-margin="30" data-autoplay="false" data-autoplaytime="5000"  data-dots="true" data-items="1">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <p class="text-justify p-1 pt-1 pb-0" >An easy-to-use collaborative platform for Police, NGOs, Social Workers, and families to get instant search results.
                    </p>
                    <a href="javascript:void(0)" onclick="showLoginAccordingly('missing')" class="btn btn-danger mb-2 btn_new_css" >Add Your Missing Person</a>
                    <div class="w-100">
                        <picture>
                            <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/mobile_1.jpg" type="image/jpg">
                            <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/mobile_1.jpg" alt="Add Your Missing Person">
                        </picture>
                    </div>
                </div>
                <div class="swiper-slide">
                    <h4 class="text-justify p-2 mt-3 pb-1">Search Your Person <br> By Face Photo</h4>
                    <p class="text-justify p-1 pt-1 pb-0" >Search Person by face photo to get the best possible results providing you with accurate and similar matched results.</p>
                    <a href="<?php echo base_url(); ?>check-person-face-funnel" class="btn btn-danger mb-2 btn_new_css">Search Person By Face Photo</a>
                    <div class="w-100">
                        <picture>
                            <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/pfc.jpg" type="image/jpg">
                            <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/pfc.jpg" alt="Khoji police face scan"/>
                        </picture>
                    </div>
                </div>
                <div class="swiper-slide">
                    <h4 class="text-justify p-2 mt-3 pb-1">Upload Appeal for Identification (Unidentified Person)</h4>
                    <p class="text-justify p-1 pt-1 pb-0" >NGOs, Child care institutions, shelters homes, and social workers can easily upload unidentified person details on <a href="<?= base_url(); ?>">khoji.in</a>
                    </p>
                    <a href="javascript:void(0)" onclick="showLoginAccordingly('unknown')" class="btn btn-danger mb-2 btn_new_css" >Upload Appeal for Identification</a>
                    <div class="w-100">
                        <picture>
                            <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/unknownbanner.jpg" type="image/jpg">
                            <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/unknownbanner.jpg" alt="Upload Appeal for Identification"/>
                        </picture>
                    </div>
                </div>
                <!--start-->
                <div class="swiper-slide">
                    <h4 class="text-justify p-2 mt-3 pb-1">Search Your Person <br> By Identity</h4>
                    <p class="text-justify p-1 pt-1 pb-0" >Our Search by Identity feature helps identify missing persons by selecting a specific ID and providing instant results from our records.</p>
                    <a href="<?php echo base_url(); ?>check-person-details" class="btn btn-danger mb-2 btn_new_css">Search Person By Identity</a>
                    <div class="w-100">
                        <picture>
                            <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/sbidentity.jpg" type="image/jpg">
                            <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/sbidentity.jpg" alt="Khoji search id" >
                        </picture>
                    </div>
                </div>
                <!--end-->
            </div>
        </div>
    </div>
</section>
<section class="wrapper bg-light pt-0">
    <div class="container">
        <h3 class="text-center mt-4 mb-8">Affiliations And Partnerships</h3>
        <div class="row">
            <marquee behavior="scroll" scrollamount="10" direction="">
                <picture>
                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/digilocker.webp" type="image/webp">
                    <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/digilocker.webp" alt="" title="Digilocker"/>
                </picture>
                <picture>
                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/aim.webp" type="image/png">
                    <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/aim.webp" alt="AIM" title="AIM"/>
                </picture>
                <picture>
                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/rru.png" type="image/png">
                    <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/rru.png" alt="RRU" />
                </picture>
                <picture>
                    <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/incubation.webp" type="image/webp">
                    <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/newlogos/incubation.webp" alt="incubation" />
                </picture>
            </marquee>
        </div>
    </div>
</section>
<section class="wrapper bg-light d-none">
    <div class="container py-5 ">
        <h3 class="text-center mb-8">Affiliations And Partnerships</h3>
        <!-- /.row -->
        <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">
            <!--/column -->
            <div class="col">
                <div class="card  card-border-end border-soft-purple h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <picture>
                            <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/digilocker.webp" type="image/webp">
                            <img class="partnerLogo" src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/digilocker.webp" alt="Digilocker" title="Digilocker"/>
                        </picture>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col">
                <div class="card card-border-end border-soft-leaf h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <picture>
                            <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/incubation.webp" type="image/webp">
                            <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/incubation.webp" alt="incubation" title="incubation"/>
                        </picture>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col">
                <div class="card card-border-end border-soft-purple h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <picture>
                            <source srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/aim.webp" type="image/webp">
                            <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets_landing_page/logos/aim.webp" alt="AIM" title="AIM"/>
                        </picture>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col">
                <div class="card card-border-end border-soft-leaf h-100 align-items-center">
                    <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <picture>
                            <source srcset="./assets/img/photos/rru.png" type="image/png">
                            <img src="./assets/img/photos/rru.png" alt="RRU" title="RRU"/>
                        </picture>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<section class="wrapper bg-light d-none">
    <div class="container py-4 py-md-6 px-1">
        <h4 class="mb-0 fs-35 d-none d-md-block bg-white text-center" style="font-family: math;padding: 3px;"> <b class="text-gradient1">DIGITAL MAHAKUMBH 2025</b></h4>
        <h4 class="mb-0 fs-20 d-block d-md-none bg-white text-center" style="font-family: math;padding: 3px;"> <b class="text-gradient1">DIGITAL MAHAKUMBH 2025</b></h4>
        <div class="row">
            <div class="col-xl-12 mx-auto position-relative px-1">
                <div class="background"></div>
                <div class="content">
                    <div class="row align-items-center mb-4 mt-4">
                        <div class="col-11 col-md-8 px-0 text-start text-md-end">
                            <h3 class="d-inline d-md-none mb-0 bg-white" style="font-family: CINZEL;padding: 3px;"> <b class="text-gradient1">MAHAKUMBH SPECIAL</b></h3>
                            <h1 class="d-none d-md-inline mb-0 bg-white px-3" style="font-family: CINZEL;"> <b class="text-gradient1">MAHAKUMBH SPECIAL</b></h1>
                        </div>
                        <div class="col-1 px-0 col-md-3 text-end">
                            <a href="<?= base_url(); ?>how-it-works-mahakumbh" style="background: black!important;" class="btn btn-dark p-1"><b><i class="fa fa-eye"></i></b></a>
                        </div>
                    </div>
                    <div class="row align-items-center mt-4 mb-4">
                        <div class="col-12 px-0">
                            <a href="<?= base_url(); ?>how-it-works-mahakumbh" class="btn btn-white rounded-pill" style="padding:0px 10px!important;font-size: 0.7rem;"><b>Add Your Family Member Now <i class="fa fa-user-plus"></i></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wrapper bg-light d-none">
    <div class="container py-4 pt-md-6 pb-0 px-0">
        <div class="row">
            <div class="col-xl-12 mx-auto px-1">
                <div class="card image-wrapper bg-full  bg-overlay bg-overlay-400 bg-white">
                    <div class="card-header text-center border-0 pb-0 p-1">
                        <h6 class="card-title text-center fs-20 text-gradient2 mb-0">DIGITAL MAHAKUMBH 2025</h6>
                    </div>
                    <div class="card-body p-0 p-md-2 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start mx-auto">
                        <div class="row mx-auto align-items-center" style="border:1px solid darkorange;">
                            <div class="col-12 text-center">
                                <h6 class="card-title text-center fs-22 text-gradient1 mb-0">Mahakumbh Special</h6>
                                <img src="<?= base_url(); ?>assets/Prayagraj_Mahakumbh_2025_Logo-removebg-preview.png" style="width: 100px;height: 100px;">
                            </div>
                            <div class="col-md-auto col-sm-12 p-1 p-md-2 text-center text-lg-center mx-auto">
                                <?php 
                                    if($_SESSION['landingMob'])
                                    {
                                    ?>
                                <a href="<?php echo base_url() ?>NonKyc/add_mahakumbh_member_special" style="text-wrap: auto;background-image: linear-gradient(90deg, #ff6c09,#d90f0ffc)!important;" class="btn btn-danger w-100 mb-2 rounded-pill  mb-0 text-nowrap fs-14 px-1 bt11" >Upload General / Khoya – Paya Details &nbsp;<img src="<?= base_url(); ?>assets/khoyapayafrontnew-removebg-preview.png" style="width: 25px;height: 25px;"></a>    
                                <?php }else{ ?>
                                <a href="<?php echo base_url() ?>mobile-landing-login?type=special" style="text-wrap: auto;background-image: linear-gradient(90deg, #ff6c09,#d90f0ffc)!important;" class="btn btn-danger w-100 mb-2 rounded-pill px-1 mb-0 text-nowrap fs-14 bt11" >Upload General / Khoya – Paya Details &nbsp;<img src="<?= base_url(); ?>assets/khoyapayafrontnew-removebg-preview.png" style="width: 25px;height: 25px;"></a>    
                                <?php } ?>
                            </div>
                            <div class="col-md-auto col-sm-12 p-2 p-md-2   text-center text-lg-center mx-auto">
                                <a href="<?php echo base_url() ?>check-person-face-funnel" style="background-image: linear-gradient(90deg, #ff6c09,#d90f0ffc)!important;" class="btn btn-danger mb-2 w-100 rounded-pill  mb-0 text-nowrap fs-16 bt11" > Search By Face Photo  &nbsp;<img src="<?= base_url(); ?>assets/khoyapayafront.png" style="width: 25px;height: 25px;"></a>    
                            </div>
                            <div class="col-md-auto col-sm-12 p-2 p-md-2  text-center text-lg-center mx-auto">
                                <a href="<?php echo base_url() ?>check-person-details" style="background-image: linear-gradient(90deg, #ff6c09,#d90f0ffc)!important;" class="btn btn-danger mb-2 w-100 rounded-pill mb-0 text-nowrap fs-16 bt11" > Search By Identity  &nbsp;<img src="<?= base_url(); ?>assets/identityfront.png" style="width: 25px;height: 25px;"></a>    
                            </div>
                            <?php 
                                $getSettings = $this->db->query('select * from settings where Id=36')->result_array();
                                if($getSettings[0]['value'] == 'yes')
                                {
                                ?>
                            <div class="col-md-auto col-sm-12 p-2 p-md-2  text-center text-lg-center mx-auto">
                                <a href="<?php echo base_url() ?>NonKyc/search_mahakumbh_filter" style="background-image: linear-gradient(90deg, #ff6c09,#d90f0ffc)!important;" class="btn btn-danger mb-2 w-100 rounded-pill mb-0 text-nowrap fs-16 bt11" >Search By Filter &nbsp;<img src="<?= base_url(); ?>assets/facephotofront-removebg-preview.png" style="width: 25px;height: 25px;"></a>    
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wrapper bg-light">
    <div class="container py-4 py-md-8">
        <div class="row gx-lg-8 gx-xl-12 justify-content-center align-items-center">
            <h2 class="text-center mt-2 mb-2 "><span class="text-gradient gradient-theme">Our Core Product !</span></h2>
            <div class="col-md-8 col-lg-6 col-10 col-xl-5 position-relative">
                <img src="<?= base_url(); ?>assets_landing_page/img/familymembericon.png" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 mb-3">Make Your Family Safe !</h2>
                <p class="lead fs-lg" style="font-family:inherit;">With <a href="">Khoji.in</a>, Add your family members profile in advance to  keep your family safe. Add family members and get instant alerts and calls  if any accident or emergency happens to them anywhere , so you can act quickly during the golden hour to provide the help they need.
                </p>
                <?php 
                    if($_SESSION['user_login'] == 'yes')
                    {
                    ?>
                <a href="<?php echo base_url() ?><?= $_SESSION['login_type']; ?>/add_family_member" class="mt-4 btn w-100 d-block d-md-inline btn_new_css rounded-pill"> Add Family Member </a>
                <?php }else{ ?>
                <a href="<?php echo base_url() ?>login?clickedOn=family" class="mt-4 btn_new_css btn w-100 d-block d-md-inline rounded-pill"> Add Family Member </a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<div class="container py-5 parent-why-us">
    <h3 class="mb-4 text-center">Why Add Family Member ?</h3>
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?= base_url(); ?>assets_landing_page/img/masking.png" alt="Best Prices">
                </div>
                <div class="feature-text">
                    <p>Instant Alerts to Well Wishers Via Search by Face Photo of family Member</p>
                </div>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?= base_url(); ?>assets_landing_page/img/instantIdentity.png" alt="Simple & Convenient">
                </div>
                <div class="feature-text">
                    <p>Instant Alerts to Well Wishers Via Search by identity of family Member</p>
                </div>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?= base_url(); ?>assets_landing_page/img/3rdWhyUs.png" alt="Factory Grade Data Wipe">
                </div>
                <div class="feature-text">
                    <p>No Personal Contact Number of Well Wishers is disclosed When calling is done .,Number Masking</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?= base_url(); ?>assets_landing_page/img/privacywhyus.png" alt="Instant Payment">
                </div>
                <div class="feature-text">
                    <p>Privacy of your data is the first priority of ours , Your Data is Secured .</p>
                </div>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?= base_url(); ?>assets_landing_page/img/5thWhyUs.png" alt="Free Doorstep Pickup">
                </div>
                <div class="feature-text">
                    <p>Instant Calling and  Alert Notifications as soon as Search is found .</p>
                </div>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?= base_url(); ?>assets_landing_page/img/lockWhyUs.png" alt="Valid Purchase Invoice">
                </div>
                <div class="feature-text">
                    <p>Lock or Unlock your added family Member Profile anytime .</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="bg-light">
<div class="row text-center py-6">
    <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
        <h2 class="fs-25 mb-3 text-center text-dark">Officials Also Find <span class="text-gradient gradient-theme">khoji.in</span> Effective</h2>
    </div>
</div>
<div class="marquee-container d2 d-none1">
    <marquee behavior="alternate" direction="right" scrollamount="7" onmouseover="this.stop();" onmouseout="this.start();">
        <div class="marquee-item">
            <img src="assets_landing_page/government/1.jpg"  alt="Image 1" onclick="showPopup(this)" />
            <br>
            <h6 class="text-center mb-0">Start Up India Official </h6>
        </div>
        <div class="marquee-item">
            <img src="assets_landing_page/government/5.jpg"  alt="Image 2" onclick="showPopup(this)" />
            <br>
            <h6 class="text-center mb-0">ADG ( U.P) - Crime</h6>
        </div>
        <div class="marquee-item">
            <img src="assets_landing_page/government/6.jpg"  alt="Image 3" onclick="showPopup(this)" />
            <br>
            <h6 class="text-center mb-0">ADG ( U.P) - Technical</h6>
        </div>
        <div class="marquee-item">
            <img src="assets_landing_page/government/7.jpg"  alt="Image 4" onclick="showPopup(this)" />
            <br>
            <h6 class="text-center mb-0">Director General of Police ( U.P)</h6>
        </div>
        <div class="marquee-item">
            <img src="assets_landing_page/government/8.jpg"  alt="Image 5" onclick="showPopup(this)" />
            <br>
            <h6 class="text-center mb-0">ADG ( U.P)</h6>
        </div>
        <div class="marquee-item">
            <img src="assets_landing_page/government/9.jpg"  alt="Image 6" onclick="showPopup(this)" />
            <br>
            <h6 class="text-center mb-0">Additional Secretary ( MoWCD)</h6>
        </div>
        <div class="marquee-item">
            <img src="assets_landing_page/government/10.jpg"  alt="Image 7" onclick="showPopup(this)" />
            <br>
            <h6 class="text-center mb-0">Director General Railway ( RPF)</h6>
        </div>
        <div class="marquee-item">
            <img src="assets_landing_page/government/12.jpg"  alt="Image 8" onclick="showPopup(this)" />
            <br>
            <h6 class="text-center mb-0">Cabinet Minister ( MoWCD)</h6>
        </div>
        <div class="marquee-item">
            <img src="assets_landing_page/government/13.jpg"  alt="Image 9" onclick="showPopup(this)" />
            <br>
            <h6 class="text-center mb-0">D.Director of UIDAI (Aadhar)</h6>
        </div>
    </marquee>
</div>
<div class="popup" id="popup">
    <div class="popup-content" id="popup-content"></div>
    <button class="close-btn" onclick="closePopup()">&times;</button>
</div>
<section class="wrapper coverageDiv">
    <div class="container py-0 py-md-0">
        <div class="row text-center py-3">
            <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
                <h2 class="fs-25 mb-3 text-center text-dark"><span class="text-gradient gradient-theme">Media</span> Coverage</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
            <marquee class="w-100 py-3" behavior="alternate"  scrollamount="10" onmouseover="this.stop();" onmouseout="this.start();">
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2">
                            <div class="col-12 text-center">
                                <img src="<?= base_url(); ?>assets_landing_page/yourstory.png" style="height:100px;object-fit: contain;width: 150px!important;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <button onclick="window.open('https://yourstory.com/2025/01/artificial-intelligence-ai-missing-children-search-police-crime-solve','_blank')" class="btn btn-danger theme_bk_color p-1 mt-2" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2">
                            <div class="col-12">
                                <img src="<?= base_url(); ?>assets_landing_page/img/startuppedia.jpeg" style="height:100px;object-fit: contain;width: 150px!important;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <button onclick="window.open('https://startuppedia.in/startup-stories/24-yo-btech-launches-innovative-ai-based-tech-startup-to-reunite-missing-individuals-with-family-8855843','_blank')" class="btn btn-danger theme_bk_color p-1 mt-2" style="font-size: 0.7rem;">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2">
                            <div class="col-12 text-center">
                                <img src="<?= base_url(); ?>assets_landing_page/news18com8769.jpg" style="height:100px;object-fit: contain;width: 150px!important;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <button onclick="window.open('https://hindi.news18.com/amp/news/uttar-pradesh/jhansi-khoji-website-to-help-find-lost-kids-and-others-patent-by-youth-local18-8813090.html','_blank')" class="btn btn-danger theme_bk_color p-1 mt-2" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2">
                            <div class="col-12 text-center">
                                <img src="<?= base_url(); ?>assets_landing_page/inshorts.png" style="height:100px;object-fit: contain;width: 150px!important;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <button onclick="window.open('https://inshorts.com/en/news/btech-grad-launches-ai-startup-to-reunite-missing-individuals-1743240334869','_blank')" class="btn btn-danger theme_bk_color p-1 mt-2" style="font-size: 0.7rem;">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2">
                            <div class="col-12 text-center">
                                <img src="<?= base_url(); ?>assets_landing_page/punenews.png" style="height:100px;object-fit: contain;width: 150px!important;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <button onclick="window.open('https://pune.news/apps-and-software/ai-powered-solutions-are-transforming-the-fight-against-child-disappearances-293277/','_blank')" class="btn btn-danger p-1 mt-2 theme_bk_color" style="font-size: 0.7rem;">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2">
                            <div class="col-12 text-center">
                                <img src="<?= base_url(); ?>assets_landing_page/eenadu.png" style="height:100px;object-fit: contain;width: 150px!important;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <button onclick="window.open('https://www.eenadu.net/telugu-article/sunday-magazine/how-ai-is-bringing-hope-to-families-looking-for-missing-children/28/325000148','_blank')" class="btn btn-danger theme_bk_color p-1 mt-2" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2">
                            <div class="col-12 text-center">
                                <img src="<?= base_url(); ?>assets_landing_page/dainiklogo.png" style="height:100px;object-fit: contain;width: 150px!important;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <a href="<?= base_url(); ?>assets_landing_page/dainikimage.jpg" style="font-size: 0.7rem;background: rgb(227 28 34);" data-lightbox="roadtrip" class="btn btn-danger theme_bk_color p-1 mt-2">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col marquee-item">
                    <div class="card h-100">
                        <div class="card-body p-2">
                            <div class="col-12 text-center">
                                <img src="<?= base_url(); ?>assets_landing_page/amarujalalogo.png" style="height:100px;object-fit: contain;width: 150px!important;" alt="ET Logo" class="card-icon me-0 w-100">
                                <br>
                                <a href="<?= base_url(); ?>assets_landing_page/umarujalaimage.jpg" style="font-size: 0.7rem;background: rgb(227 28 34);" data-lightbox="roadtrip" class="btn btn-danger theme_bk_color p-1 mt-2">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </marquee>
        </div>
    </div>
</section>
<!--mobile view banner-->
<!--mobilw view banner end -->
<!-- clients -->
<!-- /section -->
<!-- end clients -->
<!-- call to action start  -->
<section class="wrapper bg-light">
    <div class="container py-4 py-md-6 px-0">
        <div class="row">
            <div class="col-xl-12 mx-auto px-1">
                <div class="card image-wrapper bg-full  bg-overlay bg-overlay-400" style="background-image: linear-gradient(90deg, #283593, #d90f0ffc);">
                    <div class="card-header pb-2 border-0">
                        <h3 class="text-white text-center mb-0"> Start Your Search Now</h3>
                    </div>
                    <div class="card-body p-2 p-md-2 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start mx-auto">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-12 p-2 p-md-2   text-center text-lg-center">
                                <a href="<?php echo base_url() ?>check-person-face-funnel" class="btn btn-white mb-2 rounded-pill  mb-0 text-nowrap fs-16 bt11" >🔍 Search By Face Photo 📷 </a>    
                            </div>
                            <div class="col-lg-4 col-sm-12 p-2 p-md-2  text-center text-lg-center">
                                <a href="<?php echo base_url() ?>check-person-details" class="btn btn-white mb-2 rounded-pill mb-0 text-nowrap fs-16 bt11" >🔍 Search By Identity 🆔 </a>    
                            </div>
                            <div class="col-lg-4 col-sm-12 p-2 p-md-2  text-center text-lg-center">
                                <a href="<?php echo base_url() ?>check-vehicle-details" class="btn btn-white mb-2 rounded-pill mb-0 text-nowrap fs-16 bt11" >🔍 Search Vehicle Details 🚗 </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .h33{
    font-size: 1rem;
    }
    @media (max-width: 767px)
    {
    .v_width{
    width:100%!important;
    height:200px!important;
    } 
    }
    @media screen and (min-width: 768px) {
    .v_width{
    width:100%!important;
    height:200px!important;
    }
    }
</style>
<div class="row text-center py-6">
    <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
        <h2 class="text-center mt-2 mb-2 "><span class="text-gradient gradient-theme">Why Choose KHOJI?</span></h2>
        <h3 class="display-3 mb-md-4 mb-0 text-center text-dark"><b style="color: slategrey;font-size: 0.8rem;">Here are a </b><b style="color: black;font-size: 0.8rem;">few reasons</b> <b style="color: slategrey;font-size: 0.8rem;">why our customers choose</b> <b style="color: black;font-size: 0.8rem;">KHOJI.IN</b></h3>
    </div>
</div>
<section class="wrapper bg-light videoDiv">
    <div class="container py-2 py-md-2">
        <div class="row gx-lg-8 gx-xl-12 justify-content-center align-items-center">
            <div class="col-lg-5 col-10 position-relative">
                <div id="lottie-animation" style="width: 100%; height: 300px;"></div>
                <!--    <video id="myVideo" poster="<?= base_url(); ?>assets_landing_page/posters/poster1.jpg" class="v_width player" loop>
                    <source src="https://khoji-new.s3.ap-south-1.amazonaws.com/Scan+animation.mp4" type="video/mp4">
                    </video> -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="post-title h3 mt-0 mb-1">Quick Identification with just face photo</h2>
                <p>Khoji.in uses only a face photo to quickly identify missing persons and contact their families.
                    Our powerful face recognition algorithm enables families, police, NGOs, and social workers to locate missing individuals without needing any verbal details.
                </p>
                <!--/.row -->
                <a href="#" class="btn btn-soft-leaf rounded-pill  mb-0 d-none">More Details</a>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
</section>
<!--another section-->
<section class="wrapper videoDiv" style="background-color: #eeeeee57 !important;">
    <div class="container py-2 py-md-2">
        <div class="row gx-lg-8 gx-xl-12 justify-content-center gy-10 align-items-center" >
            <div class="col-lg-5 col-10 order-lg-2 position-relative">
                <div id="lottie-animation2" style="width: 100%; height: 300px;"></div>
                <!--  <video id="myVideo2" poster="<?= base_url(); ?>assets_landing_page/posters/poster2.jpg" class="v_width player" loop>
                    <source src="https://khoji-new.s3.ap-south-1.amazonaws.com/2.mp4" type="video/mp4">
                    </video> -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="post-title h3 mt-0 mb-1">Search by Identity</h2>
                <p> Easily verify if a person is missing by searching with Govt issued IDs . This feature helps in quickly identifying individuals and contacting their families, especially in emergencies.</p>
                <!--/.row -->
                <a href="#" class="btn btn-soft-aqua rounded-pill  mb-0 d-none">More Details</a>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<!--third section-->
<section class="wrapper bg-light videoDiv">
    <div class="container py-2 py-md-2">
        <div class="row gx-lg-8 justify-content-center gx-xl-12 align-items-center">
            <div class="col-lg-5 position-relative col-10">
                <!-- <video id="myVideo3" poster="<?= base_url(); ?>assets_landing_page/posters/poster3.jpg" class="v_width player" loop>
                    <source src="https://khoji-new.s3.ap-south-1.amazonaws.com/3.mp4" type="video/mp4">
                    </video> -->
                <div id="lottie-animation3" style="width: 100%; height: 300px;"></div>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="post-title h3 mt-0 mb-1">Real-Time Alerts</h2>
                <p>Receive immediate notifications when a missing person  is found. Our system sends alerts through various channels, and a secure calling feature connects families directly with searchers, including police and NGOs.</p>
                <!--/.row -->
                <a href="#" class="btn btn-soft-leaf rounded-pill  mb-0 d-none">More Details</a>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
</section>
<!--end third-->
<!--another section-->
<section class="wrapper videoDiv" style="background-color: #eeeeee57 !important;">
    <div class="container py-2 py-md-2">
        <div class="row gx-lg-8 gx-xl-12 gy-10 justify-content-center align-items-center" >
            <div class="col-lg-5 order-lg-2 col-10 position-relative">
                <!--  <video id="myVideo4" poster="<?= base_url(); ?>assets_landing_page/posters/poster4.jpg" class="v_width player" loop>
                    <source src="https://khoji-new.s3.ap-south-1.amazonaws.com/4.mp4" type="video/mp4">
                    </video> -->
                <div id="lottie-animation4" style="width: 100%; height: 300px;"></div>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="post-title h3">Automatic Search During Upload</h2>
                <p>When you upload details of a missing person, our system automatically checks and notify you , if they are already in the care of government organizations, NGOs, or shelter homes, providing instant feedback.</p>
                <!--/.row -->
                <a href="#" class="btn btn-soft-aqua rounded-pill  mb-0 d-none">More Details</a>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!--end 4th another-->
<!--end -->
<!--fifth section-->
<section class="wrapper bg-light videoDiv">
    <div class="container py-2 py-md-2">
        <div class="row gx-lg-8 gx-xl-12 justify-content-center align-items-center">
            <div class="col-lg-5 position-relative col-10">
                <div id="lottie-animation5" style="width: 100%; height: 300px;"></div>
                <!-- <video id="myVideo5" poster="<?= base_url(); ?>assets_landing_page/posters/poster5.jpg" class="v_width player" loop>
                    <source src="https://khoji-new.s3.ap-south-1.amazonaws.com/5.mp4" type="video/mp4">
                    </video> -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="post-title h3 ">Personalized Profiles</h2>
                <p>Create a personal profile to receive alerts if your loved one is found in emergencies or accidents, ensuring a quick response and peace of mind.</p>
                <!--/.row -->
                <a href="#" class="btn btn-soft-leaf rounded-pill  mb-0 d-none">More Details</a>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
</section>
<script>
    // Lottie animation initialize karna
    lottie.loadAnimation({
      container: document.getElementById('lottie-animation'), // Animation render hone ka container
      renderer: 'svg', // SVG format me render karne ke liye
      // loop: true, // Animation loop kare
      // autoplay: true, // Animation automatically play kare
      path: 'assets/jsons/frt2.json', // JSON file ka path
    });
    
    lottie.loadAnimation({
      container: document.getElementById('lottie-animation2'), // Animation render hone ka container
      renderer: 'svg', // SVG format me render karne ke liye
      // loop: true, // Animation loop kare
      // autoplay: true, // Animation automatically play kare
      path: 'assets/jsons/identity.json', // JSON file ka path
    });
    
     lottie.loadAnimation({
      container: document.getElementById('lottie-animation3'), // Animation render hone ka container
      renderer: 'svg', // SVG format me render karne ke liye
      // loop: true, // Animation loop kare
      // autoplay: true, // Animation automatically play kare
      path: 'assets/jsons/Notification orange.json', // JSON file ka path
    });
    
     lottie.loadAnimation({
      container: document.getElementById('lottie-animation4'), // Animation render hone ka container
      renderer: 'svg', // SVG format me render karne ke liye
      // loop: true, // Animation loop kare
      // autoplay: true, // Animation automatically play kare
      path: 'assets/jsons/Animation - 1732601941023.json', // JSON file ka path
    });
    
     lottie.loadAnimation({
      container: document.getElementById('lottie-animation5'), // Animation render hone ka container
      renderer: 'svg', // SVG format me render karne ke liye
      // loop: true, // Animation loop kare
      // autoplay: true, // Animation automatically play kare
      path: 'assets/jsons/personal-profile-making.json', // JSON file ka path
    });
</script>
<div class="row py-2">
    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <h2 class="text-center mt-2 mb-2 ">Explore <span class="text-gradient gradient-theme"> Videos</span></h2>
    </div>
</div>
<?php 
    $labels = array(
                '1' => 'Khoji.in लापता व्यक्तियों को खोजने में कैसे मदद करता है',
                '2' => 'Khoji.in की मदद से किस तरीके से बिछड़े लोग अपने परिवार से मिल चुके हैं',
                '3' => 'Khoji.in पर Search by Face Photo का इस्तेमाल कैसे करें ',
                '4' => 'Khoji.in कैसे काम करता है ',
                '5' => 'लापता व्यक्ति की जानकारी अपलोड करना देखें'
            );
    ?>
<div class="container">
    <div class="swiper-container-explore ">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="video-wrapper">
                    <video preload="metadata" loading="lazy" poster="<?= base_url(); ?>assets_landing_page/img/khojithumbnail-1.png" class="player" playsinline controls>
                        <source src="<?= base_url(); ?>assets_landing_page/missingvideo.mp4" type="video/mp4">
                    </video>
                    <label><b class="text-gradient gradient-theme"><?= $labels[5]; ?> <i class="fa fa-arrow-circle-right" style="-webkit-text-fill-color:black!important;font-size:1rem;"></i></b></label>
                </div>
            </div>
            <?php for ($i = 1; $i <= 4; $i++) { ?>
            <div class="swiper-slide">
                <div class="video-wrapper">
                    <video preload="metadata" loading="lazy" poster="https://khoji-new.s3.ap-south-1.amazonaws.com/khojiuploads/explore<?= $i; ?>.jpg" class="player" playsinline controls>
                        <source src="https://khoji-new.s3.ap-south-1.amazonaws.com/khojiuploads/explore<?= $i; ?>.mp4" type="video/mp4">
                    </video>
                    <label><b class="text-gradient gradient-theme"><?= $labels[$i]; ?> <i class="fa fa-arrow-circle-right" style="-webkit-text-fill-color:black!important;font-size:1rem;"></i></b></label>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<section class="wrapper bg-light d-none">
    <div class="container py-8 py-md-8">
        <div class="row text-center">
            <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
                <h2 class="fs-30 text-uppercase text-dark mb-3 text-center">Create Free Account</h2>
                <h3 class="display-3 mb-12 text-center">Our website offers <span class="text-gradient gradient-1">two options</span> for account creation</h3>
            </div>
            <!-- /column -->
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-10 justify-content-center align-items-center">
            <div class="col-md-8 col-lg-6 col-10 col-xl-5 order-lg-2 position-relative">
                <!--<div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>-->
                <video preload="metadata" loading="lazy" poster="https://khoji-new.s3.ap-south-1.amazonaws.com/WhatsApp+Image+2024-09-28+at+11.27.23_909fb402.jpg" allowfullscreen class="player" playsinline controls preload="none">
                    <source src="https://khoji-new.s3.ap-south-1.amazonaws.com/WhatsApp+Video+2024-09-28+at+11.27.26_a2fc9a5f.mp4" type="video/mp4">
                </video>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="display-4 mb-3">Create Your Account Using <mark>DigiLocker</mark></h2>
                <p class="lead fs-lg">Nowadays, most people are familiar with DigiLocker. If you already have a DigiLocker account, you can watch the provided video to learn how to create your account using this method.
                    <br>
                    <a href="<?php echo base_url() ?>complete-your-kyc" class="mt-4 btn btn-navy rounded-pill"> Sign Up &nbsp; <i class="fa fa-sign-in"></i></a>
                </p>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light" style="background-color: #eeeeee57 !important;">
    <div class="container py-6 py-md-6 text-center">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h2 class="fs-20 text-uppercase text-dark mb-12"><b style="color:black;">Explore More </b><b class="text-gradient gradient-theme"> Services</b></h2>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative ln-h-1-2">
            <div class="row gx-md-5 gy-5 text-center">
                <div class="col-md-6 col-xl-3">
                    <div class="card shadow-lg service-card"  onclick="toggleActive(this)" >
                        <div class="card-body">
                            <picture>
                                <source srcset="./assets/img/icons/lineal/upload.svg" type="image/svg">
                                <img src="./assets/img/icons/lineal/upload.svg" loading="lazy" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="upload" />
                            </picture>
                            <h4>Upload Missing Person Details</h4>
                            <p class="mb-2 new_font_style">
                                Khoji.in offers a fast and simple method for citizens to upload details of missing persons. Once the information is activated, the uploader gains full access to the platform’s features, 
                                assisting in the swift reunion of the missing individual with their family.
                            </p>
                            <!--<a href="#" class="more hover link-green">Learn More</a>-->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card shadow-lg service-card" onclick="toggleActive(this)">
                        <div class="card-body">
                            <picture>
                                <source srcset="./assets/img/icons/lineal/browser.svg" type="image/svg">
                                <img src="./assets/img/icons/lineal/browser.svg" loading="lazy" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="Broswer" />
                            </picture>
                            <h4>Upload Unknown Person Details</h4>
                            <p class="mb-2 new_font_style">This service is designed for police, NGOs, social workers, and organizations to upload information about unidentified persons living in institutions
                                for public identification. Once the details are saved, relatives can easily search using face photos, identity information, or filters.
                            </p>
                            <!--<a href="#" class="more hover link-red">Learn More</a>-->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card shadow-lg service-card" onclick="toggleActive(this)">
                        <div class="card-body">
                            <picture>
                                <source srcset="./assets/img/icons/lineal/id-card.svg" type="image/svg">
                                <img src="./assets/img/icons/lineal/id-card.svg" loading="lazy" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="ID CARD" />
                            </picture>
                            <h4>Create Personal Profile In Advance</h4>
                            <p class="mb-2 new_font_style">Users can create profiles for themselves or their family members in advance, ensuring quick identification and contact during emergencies or accidents. 
                                This helps authorities or first responders connect with the victim's relatives within the golden hour, boosting chances for timely medical care.
                            </p>
                            <!--<a href="#" class="more hover link-yellow">Learn More</a>-->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <!--/column -->
                <!--/column -->
                <div class="col-md-6 col-xl-3">
                    <div class="card shadow-lg service-card" onclick="toggleActive(this)">
                        <div class="card-body">
                            <picture>
                                <source srcset="./assets/img/icons/lineal/truck.svg" type="image/svg">
                                <img src="./assets/img/icons/lineal/truck.svg" loading="lazy" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="Truck" />
                            </picture>
                            <h4>Add Stolen Vehicle Details</h4>
                            <p class="mb-2 new_font_style">With vehicle theft increasing in India, Khoji.in allows users to register stolen vehicle information. 
                                This feature aids in quicker recovery by making the details accessible to law enforcement and the public, improving chances of retrieving stolen vehicles.
                            </p>
                            <!--<a href="#" class="more hover link-blue">Learn More</a>-->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.position-relative -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<?php 
    $getHomeCategory = $this->db->query('select * from faqTypes where EnglishName="About Khoji.in" and Status=1')->result_array();
    if(count($getHomeCategory) > 0)
    {
        $getHomeFaqs = $this->db->query('select * from faq where typeId='.$getHomeCategory[0]['Id'].' and status=1 limit 8')->result_array();
    }else{
        $getHomeFaqs = array();
    }
    if(count($getHomeFaqs) > 0)
    {
    ?>
<section class="wrapper bg-dark1" style="background-color: #fbe9e7!important;">
    <div class="container py-6 py-md-6">
        <div class="row justify-content-end">
            <div class="col-md-2 col-6">
                <select class="form-control" style="appearance:auto!important;" onchange="showAccordingly(this.value)">
                    <option value="en">English</option>
                    <option value="hi">Hindi</option>
                </select>
            </div>
        </div>
        <div class="row" style="justify-content:space-between;">
            <div class="col-md-12 col-12">
                <h2 class="display-4 mb-3 text-center">FAQ</h2>
            </div>
        </div>
        <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
        <div class="row englishDiv" style="justify-content:space-evenly;">
            <div id="accordion-1" class="accordion-wrapper col-12">
                <div class="row" style="justify-content:space-evenly;">
                    <?php 
                        foreach($getHomeFaqs as $k=>$v)
                        {
                        ?>
                    <div class="card accordion-item col-md-5 col-12" style="height:min-content;">
                        <div class="card-header" id="accordion-heading-1-<?= $k; ?>">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-<?= $k; ?>" aria-expanded="false" aria-controls="accordion-collapse-1-<?= $k; ?>"><?= $v['englishQuestion']; ?></button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-1-<?= $k; ?>" class="collapse" aria-labelledby="accordion-heading-1-<?= $k; ?>" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p><?= $v['englishAnswer']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row hindiDiv d-none" style="justify-content:space-evenly;">
            <div id="accordion-1" class="accordion-wrapper col-12">
                <div class="row" style="justify-content:space-evenly;">
                    <?php 
                        foreach($getHomeFaqs as $k=>$v)
                        {
                        ?>
                    <div class="card accordion-item col-md-5 col-12" style="height:min-content;">
                        <div class="card-header" id="accordion-heading-1-<?= $k; ?>">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-<?= $k; ?>" aria-expanded="false" aria-controls="accordion-collapse-1-<?= $k; ?>"><?= $v['hindiQuestion']; ?></button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-1-<?= $k; ?>" class="collapse" aria-labelledby="accordion-heading-1-<?= $k; ?>" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p><?= $v['hindiAnswer']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php 
            if(count($getHomeFaqs) > 0)
            {
            ?>
        <div class="row justify-content-center">
            <div class="col-12 col-md-auto text-center">
                <button type="button" onclick="location.href='<?= base_url(); ?>faqs/about-khoji.in'" class="btn btn-success save">View All</button>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<?php } ?>
<script>
    const swiper = new Swiper('.swiper-container-explore', {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        768: {  // Desktop
          slidesPerView: 3
        }
      }
    });
</script>
<script>
    function showAccordingly(val)
    {
        if(val == 'en')
        {
            $('.englishDiv').removeClass('d-none');
            $('.hindiDiv').addClass('d-none');
        }else{
            $('.englishDiv').addClass('d-none');
            $('.hindiDiv').removeClass('d-none');
        }
    }
    
     // Toggle active class on service cards
        function toggleActive(card) {
            var allCards = document.querySelectorAll('.service-card');
            allCards.forEach(c => c.classList.remove('active'));
            card.classList.add('active');
        }
    
</script>
<script>
    function showLoginAccordingly(type)
    {
        <?php 
        if(isset($_SESSION['landingMob']))
        {
            if(isset($_SESSION['user_login']))
            {
        ?>
            if(type == 'missing')
            {
                // Swal.fire({
                //     title: '<strong class="text-danger" style="font-size:20px;">Upload Missing</strong>',
                //     iconHtml: "<img src='<?= base_url(); ?>assets/icons/work-in-progress.png' style='width:100%;height:55px;'>",
                //     customClass:{
                //         title:'pt-1',
                //         icon:'mb-0',
                //         htmlContainer:'pt-2',
                //         actions : 'mt-0'
                //     },
                //     allowOutsideClick:false,
                //     html:
                //         '<h6><b style="color:black;">Sorry, This page is under construction. Please try later.</b></h6>',
                //     showCloseButton: true,
                //     showCancelButton: false,
                //     confirmButtonText:'OK',
                //     cancelButtonText:'No',
                //     focusConfirm: false,
                //     showConfirmButton:true
                // })
                location.href="<?= base_url(); ?>NonKyc/lapata_new_login";
            }else{
                if(type == 'searchUnknown')
                {
                    location.href="<?= base_url(); ?>NonKyc/search_person_details?pn=7&type=unknown";
                }else{
                    location.href="<?= base_url(); ?>NonKyc/upload_unknown_details_new";
                }
            }
        <?php
        }else{
        ?>
        Swal.fire({
          customClass:{
            popup:'py-0',
            title:'pt-0',
            htmlContainer:'m-0'
          },
          position:'top',
          allowOutsideClick:false,
          html:
            '<h4 class="text-center text-red my-3"><b>Choose Option</b></h4><div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`withoutLogin`,`'+type+'`)" class="w-100 btn-style-grey disabled-on-loading btn"> <i class="fa fa-mobile fa-2x"></i> &nbsp;SIGNUP Using Mobile Number </button></div><div class="col-lg col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`signup`,`'+type+'`)" class="w-100 btn-style-five disabled-on-loading btn"> <i class="fa fa-vcard"></i> &nbsp;Signup with KYC</button></div><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`login`,`'+type+'`)" class="w-100 btn-style-green disabled-on-loading btn"> <i class="fa fa-sign-in fa-2x"></i> &nbsp;Login</button></div></div></div>',
          showCloseButton: true,
          showCancelButton: false,
          focusConfirm: false,
          showConfirmButton:false
        })
        <?php
        }
        }else{
        if(isset($_SESSION['user_login']))
        {
        ?>
        if(type == 'missing')
        {
            location.href="<?= base_url(); ?>user/lapata_new_login";
        }else{
            if(type == 'searchUnknown')
            {
                location.href="<?= base_url(); ?>user/search_person_details?pn=7&type=unknown";
            }else{
                location.href="<?= base_url(); ?>user/upload_unknown_details";
            }
        }
        <?php }else{ ?>
        Swal.fire({
          customClass:{
            popup:'py-0',
            title:'pt-0',
            htmlContainer:'m-0'
          },
          allowOutsideClick:false,
          html:
            '<h4 class="text-center text-red my-3"><b>Choose Option</b></h4><div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`withoutLogin`,`'+type+'`)" class="w-100 btn-style-grey disabled-on-loading btn"> <i class="fa fa-mobile fa-2x"></i> &nbsp;SIGNUP Using Mobile Number </button></div><div class="col-lg col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`signup`,`'+type+'`)" class="w-100 btn-style-five disabled-on-loading btn"> <i class="fa fa-vcard"></i> &nbsp;Signup with KYC</button></div><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="jumpAccordingly(`login`,`'+type+'`)" class="w-100 btn-style-green disabled-on-loading btn"> <i class="fa fa-sign-in fa-2x"></i> &nbsp;Login</button></div></div></div>',
          showCloseButton: true,
          showCancelButton: false,
          focusConfirm: false,
          showConfirmButton:false
        })   
        <?php } ?>
        <?php } ?>
    }
    
    function proceedToStep1(isFinal,type)
    {
        if(isFinal == 1)
        {
            toastr.success('You are a Registered user. Please Continue');
            setTimeout(function()
            {
             location.href="<?= base_url(); ?>non-kyc-dashboard-profile";        
            },2000);
        }else{
            toastr.success('You are a new user. Please Fill Details');
            setTimeout(function()
            {
             location.href="<?= base_url(); ?>step1-guest?type="+type;     
            },2000);
        }
    }
    
    function sendOtp(ele)
    {
        let val = $('#aadharmobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('registered_mobile',$('#mobileNumber').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>landing/sendWithoutLoginOtp',
                data:data,
                timeout: 60000,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $(ele).removeAttr('disabled');
                        $('#otp').attr('required',true);
                        toastr.success(parse.msg);
                        $('#mobileNumber').attr('readonly',true);   
                        $('#aadharmobileNumber').attr('disabled','disabled');
                        $('#mobileaadhardiv').addClass('d-none');
                        $('#otpdiv').removeClass('d-none');
                        setTimeout(function(){
                            $("#otp").filter(':visible').focus();
                        }, 500);
                    }else{
                        if(parse.status == 'already')
                        {
                            proceedToStep1(parse.isFinal);
                        }else{
                            $(ele).removeAttr('disabled');
                            toastr.error('Something Went Wrong');
                            $('#otpdiv').addClass('d-none');   
                        }
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
                    }
                }
            })
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
            $('#otpdiv').addClass('d-none');
        }
    }
    
    function showOtpAccordingly(val)
    {
        var max_chars = 9;
        if(val.value.length > max_chars) {
            $('#btnaadharNext').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#btnaadharNext').removeClass('disabled');
            val.value = val.value.substr(0, (max_chars + 1));
        }else{
            $('#btnaadharNext').addClass('btn-style-grey').removeClass('btn-style-five');
            $('#btnaadharNext').addClass('disabled');
        }
    }
    
    function resendOtp(ele)
    {
        let val = $('#aadharmobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('registered_mobile',$('#mobileNumber').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>landing/sendWithoutLoginOtp',
                data:data,
                timeout: 60000,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    toastr.success(parse.msg);
                    $(ele).removeAttr('disabled');
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
                    }
                }
            })
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
        }
    }
    
    function getRegistered(type)
    {
        let data = new FormData();
        data.append('type',type);
        $('#aadharmobileNumber').empty();
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        data.append('value',$('#mobileNumber').val());
        $.ajax({
            url:'<?php echo base_url(); ?>user/getMobileDetails',
            data:data,
            timeout: 60000,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                console.log(parse);
                if(parse.status == 'success')
                {
                    if(parse.isNew == 0)
                    {
                        $('#terms').parent().addClass('d-none');
                        $('#terms').addClass('required');
                        $('#mobileNumber').attr('readonly',true);
                        $('#aadharotpdiv').removeClass('d-none');
                        $('#btnaadharNext').addClass('d-none');
                        $('#mobileaadhardiv').removeClass('d-none');
                        $('#aadharmobileNumber').append('<option value="">Select Mobile Number</option>');
                        $('#aadharmobileNumber').attr('required',true);
                        if(parse.isAlternate)
                        {
                            if(parse.isAlternate1 && !parse.isAlternate2)
                            {
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                            }else if(!parse.isAlternate1 && parse.isAlternate2)
                            {
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                            }
                            else{
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile2+'">'+parse.data.vismobile2+'</option>');
                                $('#aadharmobileNumber').append('<option value="'+parse.data.mobile3+'">'+parse.data.vismobile3+'</option>');
                            }   
                        }else{
                            $('#aadharmobileNumber').append('<option value="'+parse.data.mobile1+'">'+parse.data.vismobile1+'</option>');
                        }   
                    }else{
                        if(parse.isRegistered == 1)
                        {
                            $('#terms').parent().addClass('d-none');
                            $('#terms').addClass('required');
                            $('#otp').attr('required',true);
                            toastr.success(parse.msg);
                            $('#mobileNumber').attr('readonly','true');   
                            $('#aadharmobileNumber').attr('disabled','disabled');
                            $('#sendOtpDiv').addClass('d-none');
                            $('#mobileaadhardiv').addClass('d-none');
                            $('#otpdiv').removeClass('d-none');                       
                        }else{
                            $('#otp').attr('required',true);
                            toastr.success(parse.msg);
                            $('#mobileNumber').attr('readonly','true');   
                            $('#aadharmobileNumber').attr('disabled','disabled');
                            $('#sendOtpDiv').addClass('d-none');
                            $('#mobileaadhardiv').addClass('d-none');
                            $('#otpdiv').removeClass('d-none');                    
                        }
                    }
                }else{
                    textMessage = 'Mobile Number';
                    Swal.fire({
                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#mobile').val())+'</strong>',
                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                        customClass: {
                            icon: 'no-border',
                            title:'px-2'
                        },
                        allowOutsideClick:false,
                        showCloseButton: true,
                        showCancelButton: false,
                        confirmButtonText:'Please Try Again',
                        focusConfirm: false,
                        showConfirmButton:true
                    }).then((result) => {
                        location.reload();
                    })
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                if (textStatus == 'timeout') {
                    toastr.error('Please Try Again');
                    setTimeout(function()
                    {
                        location.reload();    
                    },2000);
                }
            }
        });
    }
    
    function jumpAccordingly(type1,type2)
    {
        if(type1 == 'login')
        {
            location.href="<?= base_url(); ?>login?clickedOn="+type2;
        }else{
            if(type1 == 'signup')
            {
                location.href="<?= base_url(); ?>complete-your-kyc?clickedOn="+type2;
            }else{
                Swal.fire({
                  title: '<span style="font-size:1rem;color:black;">Enter Your Mobile Number</span>',
                  customClass:{
                    popup:'py-0 col-lg-4',
                    title:'pt-0'
                  },
                  didOpen: () => {
                    const nameInput = document.getElementById('mobileNumber');
                    if (nameInput) {
                      nameInput.focus();
                    }
                  },
                  allowOutsideClick:false,
                  html:
                    `<form class="row g-3 mx-0 mb-3 needs-validation justify-content-center" method="post" action="<?php echo base_url(); ?>landing/verifyNonKycOtp" novalidate id="stepCallingForm">
                        <?php 
        $csrf = array(
          'name' => $this->security->get_csrf_token_name(),
          'hash' => $this->security->get_csrf_hash()
          );
        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <div class="form-floating mt-4 col-12">
                          <input type="number" class="form-control" name="mobileNumber" id="mobileNumber" required placeholder="Mobile Number" onKeyUp="showOtpAccordingly(this)">
                          <label for="mobileNumber" class="px-4">Enter Mobile Number</label>
                          <div class="invalid-feedback">Please enter your mobile number.</div>
                        </div>
                        <div class="form-group col-auto" id="sendOtpDiv">
                            <button type="button" onclick="getRegistered('mobile')" class="btn btn-default btn-style-grey disabled w-100" id="btnaadharNext">Next <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                        <div class="col-12 d-none" id="mobileaadhardiv">
                            <div class="form-floating mb-3">
                                <select name="aadharmobileNumber" style="font-weight:bold;color:black;" class="form-select" id="aadharmobileNumber" aria-label="Select Mobile Number" onchange="toggleSendOtp(this.value)">
                                    <option selected>Select Mobile Number</option>
                                </select>
                                <label for="aadharmobileNumber">Mobile Number</label>
                                <div class="invalid-feedback">Please enter your Mobile Number.</div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 mt-3 d-none" id="aadharotpdiv">
                                <button type="button" class="w-100 btn btn-style-grey disabled-on-loading disabled" onclick="sendOtp(this)"> Send OTP</button>
                            </div>
                        </div>
                        <div class="form-group col-12 mt-3 d-none" id="otpdiv">
                            <div class="form-floating mb-3">
                              <input type="number" onkeydown="limit(this,'otp');" onkeyup="limit(this,'otp');" class="form-control" name="otp" id="otp" placeholder="Enter 4 Digit OTP">
                              <label for="otp">Enter 4 Digit OTP</label>
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-check-input text-danger border border-3 border-danger" type="checkbox" name="terms" id="terms" value="1">
                                <label for="terms" style="display:inline;">
                                  By proceeding, you agree to our 
                                  <a href="<?= base_url(); ?>terms-of-use" target="_blank" style="color:blue; text-decoration:underline;">Terms</a>, 
                                  <a href="<?= base_url(); ?>privacy-policy" target="_blank" style="color:blue; text-decoration:underline;">Privacy Policy</a>, 
                                  and all other applicable policies, and confirm awareness of how this portal works.
                                </label>
                            </div>
                            <button class="btn btn-success w-100 disabled-on-loading btn-style-green" id="btn2" type="button" onclick="saveForm(this,'`+type2+`')"> Proceed</button>
                            <div class="row px-0 mx-0 mt-4" style="justify-content:right;">
                                <div class="col-md-auto col-sm-6 col-8 px-0" style="text-align:right;">
                                    <button type="button" onclick="resendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading" > Resend OTP <i class="bi bi-bootstrap-reboot"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>`,
                  showCloseButton: true,
                  showCancelButton: false,
                  focusConfirm: false,
                  showConfirmButton:false
                })
            }
        }
    }
    
    function toggleSendOtp(val)
    {
        if(val == '')
        {
            $('#aadharotpdiv button').addClass('btn-style-grey').removeClass('btn-style-five');
            $('#aadharotpdiv button').addClass('disabled');
        }else{
            $('#aadharotpdiv button').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#aadharotpdiv button').removeClass('disabled');
        }
    }
    
    function limit(val,type){
        if(type == 'aadhar')
        {
            var max_chars = 11;
            if(val.value.length > max_chars) {
                $('#btnaadharNext').removeClass('btn-style-grey').addClass('btn-style-five');
                $('#btnaadharNext').removeClass('disabled');
                val.value = val.value.substr(0, (max_chars + 1));
            }else{
                $('#btnaadharNext').addClass('btn-style-grey').removeClass('btn-style-five');
                $('#btnaadharNext').addClass('disabled');
            }   
        }else{
            if(type == 'otp')
            {
                var max_chars = 3;
                if(val.value.length > max_chars) {
                    val.value = val.value.substr(0, (max_chars + 1));
                }
            }else{
                var min_chars = 0;
                if(val.value.length > min_chars) {
                    $('#btnuserNext').removeClass('btn-style-grey').addClass('btn-style-five');
                    $('#btnuserNext').removeClass('disabled');
                }else{
                    $('#btnuserNext').addClass('btn-style-grey').removeClass('btn-style-five');
                    $('#btnuserNext').addClass('disabled');
                }   
            }
        }
    }
    
    function saveForm(ele,type)
    {
        $(ele).attr('disabled',true);
        if($('#otp').val() != '')
        {
            if(!$('#terms').hasClass('required'))
            {
                if($('#terms').is(':checked'))
                {
                    $(ele).attr('disabled','disabled');
                    let data = new FormData($('#stepCallingForm')[0]);
                    if($('#aadharmobileNumber').val() != '')
                    {
                        data.append('aadharmobileNumber',$('#aadharmobileNumber').val());   
                    }
                    $.ajax({
                        url:$('#stepCallingForm').attr('action'),
                        data:data,
                        timeout: 60000,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            let parse = JSON.parse(res);
                            if(parse.status == 'success')
                            {
                                if(parse.isFinal == 1)
                                {
                                    if(type == 'missing')
                                    {
                                        toastr.success('You are a Registered user. Please Continue');
                                        setTimeout(function()
                                        {
                                         location.href="<?= base_url(); ?>NonKyc/lapata_new_login";        
                                        },2000);
                                    }else{
                                        toastr.success('You are a Registered user. Please Continue');
                                        setTimeout(function()
                                        {
                                            if(type == 'searchUnknown')
                                            {
                                                location.href="<?= base_url(); ?>NonKyc/search_person_details?pn=7&type=unknown";
                                            }else{
                                                location.href="<?= base_url(); ?>NonKyc/upload_unknown_details_new";
                                            }
                                        },2000);
                                    }
                                }else{
                                    proceedToStep1(parse.isFinal,type);
                                }
                            }else{
                                toastr.error(parse.message);
                                $(ele).removeAttr('disabled');
                            }
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            if (textStatus == 'timeout') {
                                toastr.error('Please Try Again');
                                setTimeout(function()
                                {
                                    location.reload();    
                                },2000);
                            }
                        }
                    });         
                }else{
                    toastr.error('Please select terms to continue');
                    $(ele).removeAttr('disabled');
                }
            }else{
                $(ele).attr('disabled','disabled');
                let data = new FormData($('#stepCallingForm')[0]);
                if($('#aadharmobileNumber').val() != '')
                {
                    data.append('aadharmobileNumber',$('#aadharmobileNumber').val());   
                }
                $.ajax({
                    url:$('#stepCallingForm').attr('action'),
                    data:data,
                    timeout: 60000,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.status == 'success')
                        {
                            if(parse.isFinal == 1)
                            {
                                if(type == 'missing')
                                {
                                    toastr.success('You are a Registered user. Please Continue');
                                    setTimeout(function()
                                    {
                                     location.href="<?= base_url(); ?>NonKyc/lapata_new_login";        
                                    },2000);
                                }else{
                                    toastr.success('You are a Registered user. Please Continue');
                                    setTimeout(function()
                                    {
                                        if(type == 'searchUnknown')
                                        {
                                            location.href="<?= base_url(); ?>NonKyc/search_person_details?pn=7&type=unknown";
                                        }else{
                                            location.href="<?= base_url(); ?>NonKyc/upload_unknown_details_new";
                                        }
                                    },2000);
                                }
                            }else{
                                proceedToStep1(parse.isFinal,type);
                            }
                        }else{
                            toastr.error(parse.message);
                            $(ele).removeAttr('disabled');
                        }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        if (textStatus == 'timeout') {
                            toastr.error('Please Try Again');
                            setTimeout(function()
                            {
                                location.reload();    
                            },2000);
                        }
                    }
                });
            }
        }else{
            toastr.error('Please Enter OTP');
            $(ele).removeAttr('disabled');
        }
    }
</script>
<script>
    function showPopup(element) 
        {
            const popup = document.getElementById('popup');
            const popupContent = document.getElementById('popup-content');
    
            popupContent.innerHTML = ''; // Clear previous content
            var type=$(element).attr('data-type')??'no';
            //alert(type);
            if (element.tagName === 'IMG') 
            {
                if(type=='no')
                {
                    const img = document.createElement('img');
                    img.src = element.src;
                    popupContent.appendChild(img);
                }
                else
                {
                    const video = document.createElement('iframe');
                    video.classList.add("iframe_pop");
                    video.src = $(element).attr('data-src');
                    video.controls = true;
                    video.autoplay = true;
                    popupContent.appendChild(video);
                }
                
            } 
            else if (element.tagName === 'VIDEO') 
            {
                const video = document.createElement('video');
                video.src = element.src;
                video.controls = true;
                video.autoplay = true;
                popupContent.appendChild(video);
            }
            else if (element.tagName === 'SPAN') 
            {
                const video = document.createElement('iframe');
                video.classList.add("iframe_pop");
                video.src = $(element).attr('data-src');
                video.controls = true;
                video.autoplay = true;
                popupContent.appendChild(video);
            }
    
            popup.style.display = 'flex';
            $('.ytp-impression-link').addClass('d-none');
        }
    
        function closePopup() 
        {
            const popup = document.getElementById('popup');
            popup.style.display = 'none';
            const popupContent = document.getElementById('popup-content');
            popupContent.innerHTML = ''; 
        }
        $('.d2').addClass('v-none');
        $(document).ready(function(){
            setTimeout(() => {
                $('.d1').addClass('d-none');
                $('.d2').removeClass('d-none v-none');
            }, 2000);
        });
</script>