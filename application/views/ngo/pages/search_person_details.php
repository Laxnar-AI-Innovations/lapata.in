<style>
    .no-border {
      border: 0 !important;
    }
    .no-border-radius {
        border-radius: 0 !important;
    }
    .form-label{
        color:black;
    }
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    .lapataTitle{
        margin:3.1rem 1rem 0rem 1rem;
        padding:1rem 0rem;
        text-align:center;
    }
    @media screen and (max-width:525px)
    {
        .lapataTitle{
            margin:3.1rem 0rem 0rem 0rem;
            padding:1rem 0rem;
            font-size:unset;
            text-align:center;
        }   
    }
    #swal2-html-container{
        margin: 0 1rem!important;
    }
    .hidden {
    display: none;
    }
    .pagination-container {
    /*width: calc(100% - 2rem);*/
    display: flex;
    align-items: center;
    bottom: 0;
    padding: 1rem 0;
    justify-content: center;
    }
    .pagination-number,
    .pagination-button{
    font-size: 1.1rem;
    background-color: transparent!important;
    border: none;
    margin: 0.25rem 0.25rem;
    cursor: pointer;
    height: 2.5rem;
    width: 2.5rem;
    border-radius: .2rem;
    }
    .pagination-number:hover,
    .pagination-button:not(.disabled):hover {
    background: #fff!important;
    }
    .pagination-number.active {
    color: #fff;
    background: #0085b6!important;
    }
    div:where(.swal2-container) div:where(.swal2-popup) {
    width:auto!important;
    }
    #swal2-html-container{
    padding: 0rem 1rem;
    }
    .shiva_height p{
    margin-bottom:0.3rem!important;
    font-size:0.8rem!important;
    }
    ::-webkit-scrollbar {
    width: 15px;
    }
    ::-webkit-scrollbar-track {
    background-color: transparent;
    }
    ::-webkit-scrollbar-thumb {
    background-color: var(--black);
    }
    .heading {
    margin-bottom: 20px;
    font-size: 30px;
    color: var(--black);
    text-transform: uppercase;
    text-align: center;
    }
    .btn {
    margin-top: 10px;
    display: inline-block;
    padding: 10px 30px;
    cursor: pointer;
    font-size: 17px;
    background-color: var(--light-bg);
    color: var(--black);
    text-transform: capitalize;
    text-align: center;
    }
    .gallery {
    padding: 20px;
    text-align: center;
    padding-left: 320px;
    }
    .gallery .image-container {
    /*gap: 15px;*/
    /*columns: 3 350px;*/
    }
    .gallery .image-container img {
    break-inside: avoid;
    width: 100%;
    background-color: var(--white);
    object-fit: cover;
    cursor: pointer;
    margin-bottom: 10px;
    box-shadow: var(--box-shadow);
    }
    .gallery .image-container img:hover {
    transform: scale(.95);
    }
    .side-bar {
    height: -webkit-fill-available;
    width: 300px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    background-color: var(--white);
    padding: 20px;
    border-right: var(--border);
    overflow-y: scroll;
    }
    .side-bar::-webkit-scrollbar {
    width: 5px;
    }
    .side-bar .box {
    border-bottom: var(--border);
    padding: 20px 0;
    }
    .side-bar .box .title {
    margin-bottom: 10px;
    color: var(--black);
    font-size: 20px;
    text-transform: uppercase;
    }
    .side-bar .btn {
    margin-left: 5px;
    }
    .side-bar .btn.active {
    background-color: var(--crimson);
    color: var(--white);
    }
    .side-bar .box #search-box {
    border: var(--border);
    padding: 12px;
    text-transform: none;
    color: var(--light-black);
    width: 100%;
    font-size: 17px;
    }
    .side-bar .reset-btn .btn {
    margin-top: 20px;
    width: 100%;
    }
    #side-menu {
    position: fixed;
    top: 135px;
    right: 50px;
    height: 50px;
    width: 50px;
    line-height: 50px;
    text-align: center;
    background-color: var(--white);
    color: var(--black);
    cursor: pointer;
    font-size: 25px;
    z-index: 1100;
    box-shadow: var(--box-shadow);
    border: var(--border);
    display: none;
    }
    .image-popup {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1200;
    background-color: var(--dark-bg);
    height: 100vh;
    width: 100%;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 100px 20px;
    overflow-y: scroll;
    }
    .image-popup img {
    width: 600px;
    cursor: pointer;
    border: 10px solid var(--white);
    background-color: var(--white);
    }
    :root {
    --crimson: crimson;
    --black: #333;
    --white: #fff;
    --light-black: #666;
    --light-bg: #eee;
    --dark-bg: rgba(0, 0, 0, .7);
    --border: 1px solid #999;
    --box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
    }
    * {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    }
    select{
    appearance:auto!important;
    }
    @media (max-width:1900px) {
    .gallery {
    padding-left: 20px;
    }
    #side-menu {
    display: block;
    }
    #side-menu.fa-times {
    top: 0;
    left: 300px;
    }
    .side-bar {
    left: -350px;
    }
    .side-bar.active {
    box-shadow: 0 0 0 100vw var(--dark-bg);
    left: 0;
    z-index: 1000;
    }
    .shiva_height{
    height:470px;
    max-height:470px;
    }
    }
    @media (max-width:768px) {
    .image-popup img {
    width: 100%;
    }
    .shiva_height{
    height:450px;
    max-height:450px;
    }
    }
    @media (max-width:450px) {
    #side-menu.fa-times {
    top: 10px;
    left: 10px;
    }
    .side-bar.active {
    padding-top: 70px;
    }
    .shiva_height{
    height:480px;
    max-height:480px;
    }
    }
    .margin_tp{
    margin-top: 120px;
    /*background-color: floralwhite;*/
    /*border-radius: 6px 9px;*/
    /*border: 1px solid lightpink;   */
    }
</style>
<style>
    h1,h2,h3,h4,h5,h6{
    font-family:'serif';
    font-weight:bold;
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
</style>
<style>
    select{
    appearance:auto!important;
    }    
    .plans {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    background: #fff;
    border-radius: 20px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    }
    .plans .plan input[type="radio"] {
    position: absolute;
    opacity: 0;
    }
    .plans .plan {
    cursor: pointer;
    }
    .plans .plan .plan-content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding: 30px;
    align-items:center;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border: 2px solid #e1e2e7;
    border-radius: 10px;
    -webkit-transition: -webkit-box-shadow 0.4s;
    transition: -webkit-box-shadow 0.4s;
    -o-transition: box-shadow 0.4s;
    transition: box-shadow 0.4s;
    transition: box-shadow 0.4s, -webkit-box-shadow 0.4s;
    position: relative;
    }
    .plans .plan .plan-content img {
    margin-right: 30px;
    height: 72px;
    }
    .plans .plan .plan-details span {
    margin-bottom: 10px;
    display: block;
    font-size: 20px;
    line-height: 24px;
    color: #252f42;
    }
    .container .title {
    font-size: 20px;
    font-weight: 500;
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    color: #252f42;
    margin-bottom: 20px;
    }
    .plans .plan .plan-details p {
    color: #646a79;
    font-size: 14px;
    line-height: 18px;
    }
    .plans .plan .plan-content:hover {
    -webkit-box-shadow: 0px 3px 5px 0px #e8e8e8;
    box-shadow: 0px 3px 5px 0px #e8e8e8;
    }
    .plans .plan input[type="radio"]:checked + .plan-content:after {
    content: "";
    position: absolute;
    height: 8px;
    width: 8px;
    background: #216fe0;
    right: 20px;
    top: 20px;
    border-radius: 100%;
    border: 3px solid #fff;
    -webkit-box-shadow: 0px 0px 0px 2px #0066ff;
    box-shadow: 0px 0px 0px 2px #0066ff;
    }
    .plans .plan input[type="radio"]:checked + .plan-content {
    border: 2px solid #216ee0;
    background: #eaf1fe;
    -webkit-transition: ease-in 0.3s;
    -o-transition: ease-in 0.3s;
    transition: ease-in 0.3s;
    }
    @media screen and (max-width: 991px) {
    .plans {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    padding: 12px;
    }
    .plans .plan {
    width: 100%;
    }
    .plan.complete-plan {
    margin-top: 20px;
    }
    .plans .plan .plan-content .plan-details {
    width: 70%;
    display: inline-block;
    }
    .plans .plan input[type="radio"]:checked + .plan-content:after {
    top: 45%;
    -webkit-transform: translate(-50%);
    -ms-transform: translate(-50%);
    transform: translate(-50%);
    }
    }
    @media screen and (max-width: 767px) {
    .plans .plan .plan-content .plan-details {
    width: 60%;
    display: inline-block;
    }
    }
    @media screen and (max-width: 540px) {
    .plans .plan .plan-content img {
    margin-bottom: 20px;
    height: 56px;
    -webkit-transition: height 0.4s;
    -o-transition: height 0.4s;
    transition: height 0.4s;
    }
    .plans .plan input[type="radio"]:checked + .plan-content:after {
    top: 20px;
    right: 10px;
    }
    .plans .plan .plan-content .plan-details {
    width: 100%;
    }
    .plans .plan .plan-content {
    padding: 20px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: baseline;
    -ms-flex-align: baseline;
    align-items: center;
    }
    }
    /* inspiration */
    .inspiration {
    font-size: 12px;
    margin-top: 50px;
    position: absolute;
    bottom: 10px;
    font-weight: 300;
    }
    .inspiration a {
    color: #666;
    }
    @media screen and (max-width: 767px) {
    /* inspiration */
    .inspiration {
    display: none;
    }
    }
</style>
<style>
    .form-group{
    margin-bottom:1rem!important;
    }
    #swal2-html-container{
    margin:0!important;
    }
    /* Defining a custom border on all
    sides except the top side */
    .custom-field {
    border: 3px solid;
    border-top: none;
    margin: 0;
    padding: 8px;
    }
    /* Defining the style of the 
    heading/legend for custom fieldset */
    .custom-field h1 {
    font: 16px normal;
    margin: -16px -8px 0;
    }
    /* Using float:left allows us to mimic
    the legend like fieldset. The 
    float:right property can also be 
    used to show the legend on right side */
    .custom-field h1 span {
    float: left;
    }
    /* Creating the custom top border to make
    it look like fieldset defining small 
    border before the legend. The width 
    can be modified to change position 
    of the legend */
    .custom-field h1:before {
    border-top: 3px solid;
    content: ' ';
    float: left;
    margin: 8px 2px 0 -1px;
    width: 12px;
    }
    /* Defining a long border after the 
    legend, using overflow hidden to 
    actually hide the line behind the 
    legend text. It can be removed
    for a different effect */
    .custom-field h1:after {
    border-top: 3px solid;
    content: ' ';
    display: block;
    height: 24px;
    left: 2px;
    margin: 0 1px 0 0;
    overflow: hidden;
    position: relative;
    top: 8px;
    }
    .form-check-input.is-valid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label {
    color: black!important;
    }
    .form-check-input.is-valid:checked, .was-validated .form-check-input:valid:checked {
    background-color: #0d6efd!important;
    }
</style>
<style>
    .w-lg-max-content{
    width:100%!important;
    }
    @media screen and (min-width:720px)
    {   
    .w-lg-max-content{
    width:max-content!important;
    }
    }
    .phone {
    line-height:32px;
    font-size:18px;
    font-weight:bold;
    color:#fff;
    margin:0;
    }
    .phone svg {
    width:18px;
    height:18px;
    margin-right:4px;
    }
    .phone svg path {
    fill:#fff;
    }
    .phone svg path:nth-child(2) {
    -webkit-animation: header-phone 1s infinite cubic-bezier(.1, .57, .5, 1);
    animation: header-phone 1s infinite cubic-bezier(.1, .57, .5, 1);
    }
    .phone svg path:nth-child(3) {
    -webkit-animation:header-phone2 1s infinite cubic-bezier(.1, .57, .5, 1);
    animation:header-phone2 1s infinite cubic-bezier(.1, .57, .5, 1);
    }
    /* Animate phone */
    @-webkit-keyframes header-phone {
    0%,30% {opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
    80% {opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
    100%{opacity:0}}
    @keyframes header-phone {
    0%,30%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
    80%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
    100%{opacity:0}}
    @-webkit-keyframes header-phone2 {
    0%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
    70%,90%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
    100%{opacity:0}}
    @keyframes header-phone2 {
    0%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
    70%,90%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
    100%{opacity:0}}
    .btn-style-green{
    position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 26px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color: green!important;
    box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-green:hover {
    color: #fff!important;
    background-color:#0daf96!important;
    }
    .btn-style-red{
    position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 26px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color: #ff2201!important;
    box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-red:hover {
    color: #fff!important;
    background-color:#0daf96!important;
    }
</style>
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
        <h1>Search Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active">Search Details</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <section class="section profile">
        <div class="row justify-content-center">
            <?php 
                if($pn == 1)
                {
            ?>
            <div class="col-xl-12 <?php if($pn != 1){ echo "d-none"; } ?>">
                <div class="card">
                    <div class="card-body pt-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <h4 class="text-danger mb-0">Choose Search Option</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <div class="row">
                                    <div class="plans px-2 px-lg-0  col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-lg-3 mt-0">
                                        <label class="plan basic-plan" for="type1">
                                            <input checked type="radio" value="2" name="type" id="type1" />
                                            <div class="plan-content">
                                                <img loading="lazy" src="<?php echo base_url(); ?>assets/img/identitycard.png" alt="" style="height:100px;" />
                                                <div class="plan-details">
                                                    <span>Search Person By Identity</span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="plans px-2 col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-lg-3 mt-0">
                                        <label class="plan basic-plan" for="type5">
                                            <input type="radio" value="5" name="type" id="type5" />
                                            <div class="plan-content">
                                                <img loading="lazy" src="<?php echo base_url(); ?>assets/images/faceicon.png" alt="" />
                                                <div class="plan-details">
                                                    <span>Search Person By Face Photo</span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="plans px-2 col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-lg-3 mt-0">
                                        <label class="plan basic-plan" for="type4">
                                            <input type="radio" value="4" name="type" id="type4" />
                                            <div class="plan-content">
                                                <img src="<?php echo base_url(); ?>assets/icons/unknown.jpg">
                                                <div class="plan-details">
                                                    <span>Search Missing Person By Filter</span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="plans px-2 col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-lg-3 mt-0">
                                        <label class="plan basic-plan" for="typeUnknown" style="width:100%;">
                                            <input value="unknown" type="radio" name="type" id="typeUnknown" />
                                            <div class="plan-content" style="justify-content:space-between;">
                                                <img src="<?php echo base_url(); ?>assets/icons/unknown.jpg">
                                                <div class="plan-details">
                                                    <span>Search Unknown Person By Filter</span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="plans px-2 col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-lg-3 mt-0">
                                        <label class="plan basic-plan" for="typeVehicle" style="width:100%;">
                                            <input type="radio" value="vehicle" name="type" id="typeVehicle" />
                                            <div class="plan-content align-items-center" style="justify-content:space-between;">
                                                <i class="fa fa-car fa-5x"></i>
                                                <div class="plan-details">
                                                    <span>Search Vehicles</span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }else if($pn == 2){ ?>
            <div class="col-xl-4 col-lg-4 col-sm-12 col-md-8 px-0 <?php if($pn != 2){ echo "d-none"; } ?>">
                <div class="card">
                    <div class="card-body mt-3 py-3 w-100 p-3">
                        <form class="row g-3 needs-validation <?php if($pn != 2){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>ngo/checkPerson/step2" novalidate id="step2Form">
                            <?php 
                                $csrf = array(
                                  'name' => $this->security->get_csrf_token_name(),
                                  'hash' => $this->security->get_csrf_hash()
                                  );
                                ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="custom-field pb-4">
                                <h1>
                                    <span style="font-weight:bold;color:red;font-size:large;">
                                    Enter-
                                    </span>
                                </h1>
                                <div class="pt-0 pb-0 mt-0">
                                    <h5 class="card-title text-decoration-underline text-center pb-0 fs-4 pt-0">Search By Identity</h5>
                                </div>
                                <div class="form-group form-floating mb-0 mt-3 col-12 px-0" id="idTypeDiv">
                                    <select name="idType" class="form-control" style="appearance:auto;" id="idType" aria-label="Select Id Type" onchange="showInputAccordingly(this.value)">
                                        <option value="">Select Id Type</option>
                                        <option value="aadhar">Aadhaar</option>
                                        <option value="dl">Driving License</option>
                                        <option value="pan">PAN</option>
                                        <option value="voter">Voter Id</option>
                                        <option value="gold">Gold Jewellery HUID No.</option>
                                        <option value="vehicle">Vehicle No.</option>
                                    </select>
                                    <label for="idType" style="padding: 1rem;">Select Id Type <span class="text-danger">*</span></label>
                                </div>
                                <div id="aadharIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="number" class="form-control text-uppercase" name="aadhar_id" max="12" min="12" onKeyPress="return checkLength(this.value,12)" id="aadharNumber" required placeholder="Aadhar Number" aria-describedby="step2CheckAadhar">
                                        <label for="aadharNumber" id="aadharLabel" class="pl-2">Enter Aadhaar No</label>
                                        <div class="invalid-feedback">Please enter aadhar number.</div>
                                    </div>
                                    <div class="row mt-3 mx-0" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 col-md-6 pl-2 d-none">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnAadharClear" type="button"> Back</button>  
                                        </div>
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckAadhar" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="panIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" maxlength="10" class="form-control text-uppercase" id="panNumber" required placeholder="PAN Number" aria-describedby="step2CheckPan">
                                        <label for="panNumber" id="panLabel" class="pl-2">Enter PAN No</label>
                                        <div class="invalid-feedback">Please enter PAN Number.</div>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 col-md-6 pl-2 d-none">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnPanClear" type="button"> Back</button>  
                                        </div>
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckPan" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="voterIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" class="form-control text-uppercase" id="voterId" required placeholder="Voter Number" aria-describedby="step2CheckVoter">
                                        <label for="voterId" id="voterLabel" class="pl-2">Enter Voter No</label>
                                        <div class="invalid-feedback">Please enter Voter Number.</div>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 col-md-6 pl-2 d-none">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnVoterClear" type="button"> Back</button>  
                                        </div>
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckVoter" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="dlIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" maxlength="15" class="form-control text-uppercase" max="12" min="12" id="dlNumber" required placeholder="Driving License Number" aria-describedby="step2CheckDl">
                                        <label for="dlNumber" id="dlLabel" class="pl-2">Enter Driving License No</label>
                                        <div class="invalid-feedback">Please enter Driving License number.</div>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 col-md-6 pl-2 d-none">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-red" style="background:black!important" id="btnDlClear" type="button"> Back</button>  
                                        </div>
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckDl" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="goldIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" maxlength="6" class="form-control text-uppercase" id="huidNumber" required placeholder="Driving License Number" aria-describedby="step2CheckGold">
                                        <label for="huidNumber" id="huidLabel" class="pl-2">Enter Gold Jewellery HUID No</label>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckGold" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <div id="vehicleIdentity" class="mt-2 px-0 d-none">
                                    <div class="form-floating mt-3 pr-2 row mx-0">
                                        <input type="text" maxlength="10" class="form-control text-uppercase" id="vehicleNumber" required placeholder="Driving License Number" aria-describedby="step2CheckVehicle">
                                        <label for="vehicleNumber" id="vehicleLabel" class="pl-2">Enter Vehicle No</label>
                                    </div>
                                    <div class="row mt-3" style="justify-content:space-evenly;text-align:center;">
                                        <div class="col-6 px-0">
                                            <button class="btn btn-primary w-auto disabled-on-loading btn-style-green" id="step2CheckVehicle" type="button"> Search</button>  
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="mainPhotoSelected" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php }else if($pn == 3){ ?>
            <div class="col-xl-12 px-0 <?php if($pn != 3){ echo 'd-none'; } ?>">
                <div class="row mx-0">
                    <?php 
                        if(isset($_SESSION['searchId']))
                        {
                            $checkDetail= $this->db->query('select * from searchpersonhistory where Id='.$_SESSION['searchId'])->result_array();
                            $lapataIds = array();
                            $missingIds = array();
                            $unknownIds = array();
                            $userIds = array();
                            $criminalIds = array();
                            $wantedIds = array();
                            
                            switch($checkDetail[0]['Idtype']){
                                case 'aadhar' :
                                    $getMissingDetails = $this->db->query('select Id from missingperson where isFound=0 and isdeleted=0 and missingaadhar="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getMissingDetails) > 0)
                                    {
                                        foreach($getMissingDetails as $k=>$v)
                                        {
                                            array_push($missingIds,$v['Id']);       
                                        }
                                    }
                                    $getLapataDetails = $this->db->query('select id from unknown_person where isFound=0 and expiryDate >="'.date('Y-m-d H:i:s A').'" and uploaded_by="user" and aadharNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getLapataDetails) > 0)
                                    {
                                        foreach($getLapataDetails as $k=>$v)
                                        {
                                            array_push($lapataIds,$v['id']);       
                                        }
                                    }
                                    $getUnknownDetails = $this->db->query('select id from unknown_person where isFound=0 and uploaded_by != "user" and aadharNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getUnknownDetails) > 0)
                                    {
                                        foreach($getUnknownDetails as $k=>$v)
                                        {
                                            array_push($unknownIds,$v['id']);       
                                        }
                                    }
                                    $getCriminalDetails = $this->db->query('select Id from criminals where type="criminal" and status="Active" and aadharNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getCriminalDetails) > 0)
                                    {
                                        foreach($getCriminalDetails as $k=>$v)
                                        {
                                            array_push($criminalIds,$v['Id']);       
                                        }
                                    }
                                    $getWantedDetails = $this->db->query('select Id from criminals where type="wanted" and status="Active" and aadharNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getWantedDetails) > 0)
                                    {
                                        foreach($getWantedDetails as $k=>$v)
                                        {
                                            array_push($wantedIds,$v['Id']);       
                                        }
                                    }
                                    $getUserDetails = $this->db->query('select uid from user where aadhar_id="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getUserDetails) > 0)
                                    {
                                        foreach($getUserDetails as $k=>$v)
                                        {
                                            array_push($userIds,$v['uid']);       
                                        }
                                    }
                                    break;
                                case 'pan' :
                                    $getMissingDetails = $this->db->query('select Id from missingperson where isFound=0 and isdeleted=0 and missingpan="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getMissingDetails) > 0)
                                    {
                                        foreach($getMissingDetails as $k=>$v)
                                        {
                                            array_push($missingIds,$v['Id']);       
                                        }
                                    }
                                    $getLapataDetails = $this->db->query('select id from unknown_person where isFound=0 and expiryDate >="'.date('Y-m-d H:i:s A').'" and uploaded_by="user" and PAN="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getLapataDetails) > 0)
                                    {
                                        foreach($getLapataDetails as $k=>$v)
                                        {
                                            array_push($lapataIds,$v['id']);       
                                        }
                                    }
                                    $getUnknownDetails = $this->db->query('select id from unknown_person where isFound=0 and uploaded_by != "user" and PAN="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getUnknownDetails) > 0)
                                    {
                                        foreach($getUnknownDetails as $k=>$v)
                                        {
                                            array_push($unknownIds,$v['id']);       
                                        }
                                    }
                                    $getCriminalDetails = $this->db->query('select Id from criminals where type="criminal" and status="Active" and panNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getCriminalDetails) > 0)
                                    {
                                        foreach($getCriminalDetails as $k=>$v)
                                        {
                                            array_push($criminalIds,$v['Id']);       
                                        }
                                    }
                                    $getWantedDetails = $this->db->query('select Id from criminals where type="wanted" and status="Active" and panNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getWantedDetails) > 0)
                                    {
                                        foreach($getWantedDetails as $k=>$v)
                                        {
                                            array_push($wantedIds,$v['Id']);       
                                        }
                                    }
                                    $getPanDetails = $this->db->query('select * from panlist where panNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    $getUserDetails = array();
                                    if(count($getPanDetails) > 0)
                                    {
                                        $getUserDetails = $this->db->query('select uid from user where uid='.$getPanDetails[0]['userId'])->result_array();   
                                    }
                                    if(count($getUserDetails) > 0)
                                    {
                                        foreach($getUserDetails as $k=>$v)
                                        {
                                            array_push($userIds,$v['uid']);       
                                        }
                                    }
                                    break;
                                case 'voter' :
                                    $getMissingDetails = $this->db->query('select Id from missingperson where isFound=0 and isdeleted=0 and missingvoter="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getMissingDetails) > 0)
                                    {
                                        foreach($getMissingDetails as $k=>$v)
                                        {
                                            array_push($missingIds,$v['Id']);       
                                        }
                                    }
                                    $getLapataDetails = $this->db->query('select id from unknown_person where isFound=0 and expiryDate >="'.date('Y-m-d H:i:s A').'" and uploaded_by="user" and voter_id="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getLapataDetails) > 0)
                                    {
                                        foreach($getLapataDetails as $k=>$v)
                                        {
                                            array_push($lapataIds,$v['id']);       
                                        }
                                    }
                                    $getUnknownDetails = $this->db->query('select id from unknown_person where isFound=0 and uploaded_by != "user" and voter_id="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getUnknownDetails) > 0)
                                    {
                                        foreach($getUnknownDetails as $k=>$v)
                                        {
                                            array_push($unknownIds,$v['id']);       
                                        }
                                    }
                                    $getCriminalDetails = $this->db->query('select Id from criminals where type="criminal" and status="Active" and voterId="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getCriminalDetails) > 0)
                                    {
                                        foreach($getCriminalDetails as $k=>$v)
                                        {
                                            array_push($criminalIds,$v['Id']);       
                                        }
                                    }
                                    $getWantedDetails = $this->db->query('select Id from criminals where type="wanted" and status="Active" and voterId="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getWantedDetails) > 0)
                                    {
                                        foreach($getWantedDetails as $k=>$v)
                                        {
                                            array_push($wantedIds,$v['Id']);       
                                        }
                                    }
                                    $getVoterDetails = $this->db->query('select * from voterslist where voterNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    $getUserDetails = array();
                                    if(count($getVoterDetails) > 0)
                                    {
                                        $getUserDetails = $this->db->query('select uid from user where uid='.$getVoterDetails[0]['userId'])->result_array();   
                                    }
                                    if(count($getUserDetails) > 0)
                                    {
                                        foreach($getUserDetails as $k=>$v)
                                        {
                                            array_push($userIds,$v['uid']);       
                                        }
                                    }
                                    break;
                                case 'dl' :
                                    $getMissingDetails = $this->db->query('select Id from missingperson where isFound=0 and isdeleted=0 and missingdl="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getMissingDetails) > 0)
                                    {
                                        foreach($getMissingDetails as $k=>$v)
                                        {
                                            array_push($missingIds,$v['Id']);       
                                        }
                                    }
                                    $getLapataDetails = $this->db->query('select id from unknown_person where isFound=0 and expiryDate >="'.date('Y-m-d H:i:s A').'" and uploaded_by="user" and DL_no="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getLapataDetails) > 0)
                                    {
                                        foreach($getLapataDetails as $k=>$v)
                                        {
                                            array_push($lapataIds,$v['id']);       
                                        }
                                    }
                                    $getUnknownDetails = $this->db->query('select id from unknown_person where isFound=0 and uploaded_by != "user" and DL_no="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getUnknownDetails) > 0)
                                    {
                                        foreach($getUnknownDetails as $k=>$v)
                                        {
                                            array_push($unknownIds,$v['id']);       
                                        }
                                    }
                                    $getCriminalDetails = $this->db->query('select Id from criminals where type="criminal" and status="Active" and dlNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getCriminalDetails) > 0)
                                    {
                                        foreach($getCriminalDetails as $k=>$v)
                                        {
                                            array_push($criminalIds,$v['Id']);       
                                        }
                                    }
                                    $getWantedDetails = $this->db->query('select Id from criminals where type="wanted" and status="Active" and dlNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getWantedDetails) > 0)
                                    {
                                        foreach($getWantedDetails as $k=>$v)
                                        {
                                            array_push($wantedIds,$v['Id']);       
                                        }
                                    }
                                    $getDlDetails = $this->db->query('select * from dllist where dlNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    $getUserDetails = array();
                                    if(count($getPanDetails) > 0)
                                    {
                                        $getUserDetails = $this->db->query('select uid from user where uid='.$getDlDetails[0]['userId'])->result_array();   
                                    }
                                    if(count($getUserDetails) > 0)
                                    {
                                        foreach($getUserDetails as $k=>$v)
                                        {
                                            array_push($userIds,$v['uid']);       
                                        }
                                    }
                                    break;
                                case 'gold' :
                                    $getMissingDetails = $this->db->query('select Id from missingperson where isFound=0 and isdeleted=0 and goldId="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getMissingDetails) > 0)
                                    {
                                        foreach($getMissingDetails as $k=>$v)
                                        {
                                            array_push($missingIds,$v['Id']);       
                                        }
                                    }
                                    $getGoldDetails = $this->db->query('select * from unknownPersonGold where goldHUID="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getGoldDetails) > 0)
                                    {
                                        foreach($getGoldDetails as $k=>$v)
                                        {
                                            $getLapataDetails = $this->db->query('select id from unknown_person where isFound=0 and expiryDate >="'.date('Y-m-d H:i:s A').'" and uploaded_by="user" and id='.$v['unknownId'])->result_array();   
                                            if(count($getLapataDetails) > 0)
                                            {
                                                array_push($lapataIds,$v['unknownId']);          
                                            }
                                            $getUnknownDetails = $this->db->query('select id from unknown_person where isFound=0 and uploaded_by != "user" and id='.$v['unknownId'])->result_array();
                                            if(count($getUnknownDetails) > 0)
                                            {
                                                array_push($unknownIds,$v['unknownId']);       
                                            }
                                        }
                                    }
                                    $getUserDetails = $this->db->query('select uid from user where goldHUID="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getUserDetails) > 0)
                                    {
                                        foreach($getUserDetails as $k=>$v)
                                        {
                                            array_push($userIds,$v['uid']);       
                                        }
                                    }
                                    break;
                                case 'vehicle' :
                                    $getMissingDetails = $this->db->query('select Id from missingperson where isFound=0 and isdeleted=0 and vehicleNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getMissingDetails) > 0)
                                    {
                                        foreach($getMissingDetails as $k=>$v)
                                        {
                                            array_push($missingIds,$v['Id']);       
                                        }
                                    }
                                    $getLapataDetails = $this->db->query('select id from unknown_person where isFound=0 and expiryDate >="'.date('Y-m-d H:i:s A').'" and uploaded_by="user" and vehicle_no="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getLapataDetails) > 0)
                                    {
                                        foreach($getLapataDetails as $k=>$v)
                                        {
                                            array_push($lapataIds,$v['id']);       
                                        }
                                    }
                                    $getUnknownDetails = $this->db->query('select id from unknown_person where isFound=0 and uploaded_by != "user" and vehicle_no="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getUnknownDetails) > 0)
                                    {
                                        foreach($getUnknownDetails as $k=>$v)
                                        {
                                            array_push($unknownIds,$v['id']);       
                                        }
                                    }
                                    $getUserDetails = $this->db->query('select uid from user where vehicleNumber="'.$checkDetail[0]['IdNumber'].'"')->result_array();
                                    if(count($getUserDetails) > 0)
                                    {
                                        foreach($getUserDetails as $k=>$v)
                                        {
                                            array_push($userIds,$v['uid']);       
                                        }
                                    }
                                    break;
                            }
                            $missingperson = array();
                            if(count($missingIds) > 0)
                            {
                                $this->db->where_in('Id',$missingIds);   
                                $this->db->order_by("Id", "desc");
                                $missingperson = $this->db->get('missingperson')->result_array();
                            }
                            $wantedperson = array();
                            if(count($wantedIds) > 0)
                            {
                                $this->db->where_in('Id',$wantedIds);   
                                $this->db->order_by("Id", "desc");
                                $wantedperson = $this->db->get('criminals')->result_array();
                            }
                            $criminalperson = array();
                            if(count($criminalIds) > 0)
                            {
                                $this->db->where_in('Id',$criminalIds);   
                                $this->db->order_by("Id", "desc");
                                $criminalperson = $this->db->get('criminals')->result_array();
                            }
                            $userperson = array();
                            if(count($userIds) > 0)
                            {
                                $this->db->where_in('uid',$userIds);
                                $this->db->order_by("uid", "desc");
                                $userperson = $this->db->get('user')->result_array();
                            }
                            $lapataperson = array();
                            if(count($lapataIds) > 0)
                            {
                                $this->db->where_in('id',$lapataIds);
                                $this->db->order_by("id", "desc");
                                $lapataperson = $this->db->get('unknown_person')->result_array();
                            }
                            $unknownperson = array();
                            if(count($unknownIds) > 0)
                            {
                                $this->db->where_in('id',$unknownIds);   
                                $this->db->order_by("id", "desc");
                                $unknownperson = $this->db->get('unknown_person')->result_array();
                            }
                    ?>
                    <div class="row align-items-center mx-1 mb-3 p-1" style="justify-content:space-around;box-shadow:0px 1px 2px grey;background:white;">
                        <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($missingperson) > 0) ? '' : 'd-none'; ?>">
                            <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Missing - <?php echo (count($missingperson) > 1 ? count($missingperson).' Records' : count($missingperson).' Record'); ?></a>
                        </div>
                        <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($wantedperson) > 0) ? '' : 'd-none'; ?>">
                            <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Wanted - <?php echo (count($wantedperson) > 1 ? count($wantedperson).' Records' : count($wantedperson).' Record'); ?></a>
                        </div>
                        <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($criminalperson) > 0) ? '' : 'd-none'; ?>">
                            <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Criminal - <?php echo (count($criminalperson) > 1 ? count($criminalperson).' Records' : count($criminalperson).' Record'); ?></a>
                        </div>
                        <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($lapataperson) > 0) ? '' : 'd-none'; ?>">
                            <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Missing - <?php echo (count($lapataperson) > 1 ? count($lapataperson).' Records' : count($lapataperson).' Record'); ?></a>
                        </div>
                        <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($unknownperson) > 0) ? '' : 'd-none'; ?>">
                            <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Appeal for Identification - <?php echo (count($unknownperson) > 1 ? count($unknownperson).' Records' : count($unknownperson).' Record'); ?></a>
                        </div>
                        <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($userperson) > 0) ? '' : 'd-none'; ?>">
                            <a href="javascript:void(0)" style="color:green;text-decoration:none;font-weight:bold;">Verified - <?php echo (count($userperson) > 1 ? count($userperson).' Records' : count($userperson).' Record'); ?></a>
                        </div>
                        <div class="col-lg-auto col-sm-12 col-md-auto text-end my-1">
                            <button type="button" onclick="back(this)" class="btn mt-0 btn-style-grey btn-dark disabled-on-loading"> <i class="fa fa-arrow-circle-left"></i></button>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center px-3">
                        <?php 
                            if(count($missingperson) > 0)
                            {
                        ?>
                        <?php 
                            foreach($missingperson as $k=>$row)
                            {
                        ?>
                        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-1 col-12 col-search pb-2">
                            <div class="card mb-3 shiva_height" >
                                <div class="card-body px-0 pt-0">
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['facematchphoto'] != '' || $row['facematchphoto'] != NULL)
                                            {
                                        ?>
                                        <div class="col-6">
                                            <h5 class="text-center text-danger">Missing Persons</h5>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="button" class="btn btn-dark" onclick="share('missing',this,'<?php echo $row['Id']; ?>')" style="background:black!important;color:white!important;padding:10px 15px;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('missing',this,'<?php echo $row['Id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-1"><b style="color:black;font-size:.8rem!important">Missing Id :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $row['missingId']; ?></b></p>
                                        </div>
                                        <div class="col-12">
                                            <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                                        </div>
                                        <div class="col-5 ">
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['facematchphoto']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-5 ">
                                            <?php if(strtolower($row['missinggender']) == 'male'){ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php }else{ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                        <div class="col-7 px-0">
                                            <?php if($row['missingname'] != '' || $row['missingname'] != NULL){ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['missingname']??"--" ?></span></p>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo (ucfirst($row['missinggender'])); ?></span></p>
                                            <?php }else{ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo (ucfirst($row['missinggender'])); ?></span></p>
                                            <?php } ?>
                                        <?php if($row['fatherstate'] != '' || $row['fatherstate'] != NULL){ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Address - </b><span style="color:grey;"><?php echo ($row['fatherstate']) ?> , <?php echo ($row['fatherdistrict']) ?> - <?php echo ($row['fathercity']); ?></span></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php if($row['otherDetail'] != '' || $row['otherDetail'] != NULL){ ?>
                                    <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                                       <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['otherDetail']??"--"?></b></p> 
                                    </div>
                                    <?php } ?>
                                    <hr class="my-0">
                                    <?php 
                                        $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                             <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                             <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                                        </div>
                                    </div>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 text-start">
                                            <b style="font-size:.8rem!important">Contact To : - Well Wishers </b>
                                        </div>
                                        <div class="col-12 text-center">
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                          <?php if($row['mobile1']!='' || $row['mobile1']!=null) { ?>
                                            <a href="tel:<?= $row['mobile1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['mobile2']!='' || $row['mobile2']!=null) { ?>
                                              <a href="tel:<?= $row['mobile2']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['mobile3']!='' || $row['mobile3']!=null) { ?>
                                              <a href="tel:<?= $row['mobile3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php }else{ ?>
                                            <?php if($row['mobile1']!='' || $row['mobile1']!=null) { ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['mobile2']!='' || $row['mobile2']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['mobile3']!='' || $row['mobile3']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <?php 
                            if(count($lapataperson) > 0)
                            {
                        ?>
                        <?php 
                            foreach($lapataperson as $k=>$row)
                            {
                        ?>
                        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                            <div class="card mb-3 shiva_height">
                                <div class="card-body px-0 pt-0">
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['Photo'] != '' || $row['Photo'] != NULL)
                                            {
                                        ?>
                                        <div class="col-6 text-center mb-2">
                                            <h5 class="text-center text-danger mb-0">Missing</h5>
                                        </div>
                                        <div class="col-6 text-end mb-2">
                                            <button type="button" class="btn btn-dark" onclick="share('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;padding:10px 15px;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                                        </div>
                                        <div class="col-12">
                                            <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                                        </div>
                                        <div class="col-5 ">
                                            <a href="<?php echo base_url().$row['Photo']?>" data-lightbox="roadtrip">
                                                <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['Photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            </a>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-5 ">
                                            <?php if($row['Gender'] == 'boy'){ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php }else{ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                        <div class="col-7 px-0">
                                            <?php if($row['person_name'] != '' || $row['person_name'] != NULL){ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['person_name']??"--" ?></span></p>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                            <?php }else{ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                            <?php } ?>
                                           
                                            <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age Band - </b><span style="color:grey;"><?php echo $row['Age']??"--"?></span></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                     <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                                      <!--<div class="row col-6 px-4">-->
                                      <!--          <h5 class="card-title text-start py-0 fs-6 mb-0"> <b style="color:black;font-weight:600;">Aadhaar No - </b><br><span style="color:grey;"><?php echo $row['aadharNumber']??"--"?></span></h5>-->
                                      <!--    </div>-->
                                            <?php } ?>
                                    <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                                    <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                                       <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['Message']??"--"?></b></p> 
                                    </div>
                                    <?php } ?>
                                    <hr class="my-0">
                                    <?php 
                                        if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                        {
                                            $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                                          
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        if($row['policeId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                             <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
                                             <?php echo $getPoliceDetails[0]['district'].' - '; ?><?php echo $getPoliceDetails[0]['state']; ?></b></p>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                        if(count($getUserDetail) > 0)
                                        {
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                             <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                             <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                                        </div>
                                    </div>
                                    <?php } } ?>
                                    <?php } ?>
                                    <?php 
                                        if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                        {
                                            $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - NGO </b>
                                        </div>
                                        <div class="col-12 ">
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                                    <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                                    <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                                <?php }
                                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                                    <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                                <?php } ?>
                                            <?php }else{ ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                                <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                                <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                                <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        if($row['policeId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - POLICE THANA</b>
                                        </div>
                                        <div class="col-12 ">
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php }else{ ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - <?php echo $getUserDetail[0]['aadharname']; ?></b>
                                        </div>
                                        <div class="col-12 text-center">
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php }else{ ?>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <?php 
                            if(count($unknownperson) > 0)
                            {
                        ?>
                        <?php 
                            foreach($unknownperson as $k=>$row)
                            {
                        ?>
                        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                            <div class="card mb-3 shiva_height">
                                <div class="card-body px-0 pt-0">
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['Photo'] != '' || $row['Photo'] != NULL)
                                            {
                                        ?>
                                        <div class="col-6 text-center">
                                            <h6 class="text-center text-danger mb-0">APPEAL FOR IDENTIFICATION </h6>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="button" class="btn btn-dark" onclick="share('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;padding:10px 15px;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:black;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                                        </div>
                                        <div class="col-12">
                                            <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                                        </div>
                                        <div class="col-5 ">
                                            <a href="<?php echo base_url().$row['Photo']?>" data-lightbox="roadtrip">
                                                <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['Photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            </a>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-5 ">
                                            <?php if($row['Gender'] == 'boy'){ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php }else{ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                        <div class="col-7 px-0">
                                            <?php if($row['person_name'] != '' || $row['person_name'] != NULL){ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['person_name']??"--" ?></span></p>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                            <?php }else{ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                            <?php } ?>
                                           
                                            <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age Band - </b><span style="color:black;"><?php echo $row['Age']??"--"?></span></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                     <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                                      <!--<div class="row col-6 px-4">-->
                                      <!--          <h5 class="card-title text-start py-0 fs-6 mb-0"> <b style="color:black;font-weight:600;">Aadhaar No - </b><br><span style="color:black;"><?php echo $row['aadharNumber']??"--"?></span></h5>-->
                                      <!--    </div>-->
                                            <?php } ?>
                                    <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                                    <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                                       <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['Message']??"--"?></b></p> 
                                    </div>
                                    <?php } ?>
                                    <hr class="my-0">
                                    <?php 
                                        if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                        {
                                            $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:black;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                                          
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        if($row['policeId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                             <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
                                             <?php echo $getPoliceDetails[0]['district'].' - '; ?><?php echo $getPoliceDetails[0]['state']; ?></b></p>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                        if(count($getUserDetail) > 0)
                                        {
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                             <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                             <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                                        </div>
                                    </div>
                                    <?php } } ?>
                                    <?php } ?>
                                    <?php 
                                        if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                        {
                                            $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - NGO </b>
                                        </div>
                                        <div class="col-12 text-center">
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                                <a href="tel:<?= $getNgoDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                                    <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                                    <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                                <?php }
                                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                                    <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                                <?php } ?>
                                            <?php }else{ ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                                <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                                <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                                <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        if($row['policeId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - POLICE THANA</b>
                                        </div>
                                        <div class="col-12 text-center">
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                            <a href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php }else{ ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - <?php echo $getUserDetail[0]['aadharname']; ?></b>
                                        </div>
                                        <div class="col-12 text-center">
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php }else{ ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <?php 
                            if(count($wantedperson) > 0)
                            {
                        ?>
                        <?php 
                            foreach($wantedperson as $k=>$row)
                            {
                        ?>
                        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                            <div class="card mb-3 shiva_height">
                                <div class="card-body px-0 pt-0">
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['photo'] != '' || $row['photo'] != NULL)
                                            {
                                        ?>
                                        <div class="col-6">
                                            <h5 class="text-center text-danger">Wanted Person </h5>
                                        </div>
                                        <div class="col-6 text-end mb-2">
                                            <button type="button" class="btn btn-dark" onclick="share('wanted',this,'<?php echo $row['Id']; ?>')" style="background:black!important;color:white!important;padding:10px 15px;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('wanted',this,'<?php echo $row['Id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
                                        </div>
                                        <div class="col-12">
                                            <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                                        </div>
                                        <div class="col-5 ">
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-5 ">
                                            <?php if($row['Gender'] == 'Male'){ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php }else{ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                        <div class="col-7 px-0">
                                            <?php if($row['personName'] != '' || $row['personName'] != NULL){ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['personName']??"--" ?></span></p>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                                            <?php }else{ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                                            <?php } ?>
                                           
                                            <?php if($row['age'] != '' || $row['age'] != NULL){ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:grey;"><?php echo $row['age']??"--"?></span></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php if($row['message'] != '' || $row['message'] != NULL){ ?>
                                    <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                                       <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['message']??"--"?></b></p> 
                                    </div>
                                    <?php } ?>
                                    <hr class="my-0">
                                    <?php
                                        if($row['policeThanaId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeThanaId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                             <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
                                             <?php echo $getPoliceDetails[0]['district'].' - '; ?><?php echo $getPoliceDetails[0]['state']; ?></b></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php
                                        if($row['policeThanaId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeThanaId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - POLICE THANA</b>
                                        </div>
                                        <div class="col-12 text-center">
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php }else{ ?>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <?php 
                            if(count($criminalperson) > 0)
                            {
                        ?>
                        <?php 
                            foreach($criminalperson as $k=>$row)
                            {
                        ?>
                        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                            <div class="card mb-3 shiva_height">
                                <div class="card-body px-0 pt-0">
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['photo'] != '' || $row['photo'] != NULL)
                                            {
                                        ?>
                                        <div class="col-6">
                                            <h5 class="text-center text-danger">Criminal</h5>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="button" class="btn btn-dark" onclick="share('criminal',this,'<?php echo $row['Id']; ?>')" style="background:black!important;color:white!important;padding:10px 15px;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('criminal',this,'<?php echo $row['Id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
                                        </div>
                                        <div class="col-12">
                                            <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                                        </div>
                                        <div class="col-5 ">
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-5 ">
                                            <?php if($row['Gender'] == 'Male'){ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php }else{ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                        <div class="col-7 px-0">
                                            <?php if($row['personName'] != '' || $row['personName'] != NULL){ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['personName']??"--" ?></span></p>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                                            <?php }else{ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                                            <?php } ?>
                                           
                                            <?php if($row['age'] != '' || $row['age'] != NULL){ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:grey;"><?php echo $row['age']??"--"?></span></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php if($row['message'] != '' || $row['message'] != NULL){ ?>
                                    <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                                       <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['Message']??"--"?></b></p> 
                                    </div>
                                    <?php } ?>
                                    <hr class="my-0">
                                    <?php
                                        if($row['policeThanaId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeThanaId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                             <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
                                             <?php echo $getPoliceDetails[0]['district'].' - '; ?><?php echo $getPoliceDetails[0]['state']; ?></b></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php
                                        if($row['policeThanaId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeThanaId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - POLICE THANA</b>
                                        </div>
                                        <div class="col-12 text-center">
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                                <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                                  <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                                <?php }
                                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                                  <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                                <?php } ?>
                                            <?php }else{ ?>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <?php 
                            if(count($userperson) > 0)
                            {
                        ?>
                        <?php 
                            foreach($userperson as $k=>$row)
                            {
                        ?>
                        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                            <div class="card mb-3 shiva_user_height">
                                <div class="card-body px-0 pt-0">
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <div class="col-6">
                                            <img src="<?php echo base_url(); ?>assets/images/verified.webp" style="width:100%;height:auto;">
                                        </div>
                                    </div>
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['facematchphoto'] != '' || $row['facematchphoto'] != NULL)
                                            {
                                        ?>
                                        <div class="col-5 ">
                                            <a href="<?php echo base_url().$row['facematchphoto']?>" data-lightbox="roadtrip">
                                                <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['facematchphoto']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            </a>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-5 ">
                                            <a href="<?php echo base_url().$row['aadharphoto']?>" data-lightbox="roadtrip">
                                                <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['aadharphoto']; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <div class="col-7 px-0">
                                            <?php if($row['aadharname'] != '' || $row['aadharname'] != NULL){ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['aadharname']??"--" ?></span></p>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['gender'] == 'MALE' ? 'Male':'Female'); ?></span></p>
                                            <?php }else{ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['gender'] == 'MALE' ? 'Male':'Female'); ?></span></p>
                                            <?php } ?>
                                           
                                            <?php if($row['dob'] != '' || $row['dob'] != NULL){ 
                                                $from=new DateTime(date('Y-m-d'));
                                                $to   = new DateTime($row['dob']);
                                                $age = ($from->diff($to)->y).'- Years';
                                            ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:grey;"><?php echo $age??"--"?></span></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="row w-100 mx-0 align-items-center">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - Well Wisher</b>
                                        </div>
                                        <div class="col-12 text-center">
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                                <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                                  <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                                <?php }
                                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                                  <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                                <?php } ?>
                                            <?php }else{ ?>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
                </div>
            </div>
            <?php }else if($pn == 5){ ?>
            <div class="card col-lg-12 col-xl-12 col-sm-12 <?php if($pn != 5){ echo "d-none"; } ?>">
                <div class="card-header border-0 pb-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-center">Enter- <span class="text-danger">Person's Details</span></h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url(); ?>user/filterDetailsAfterLogin" id="filterForm" method="post">
                        <div class="row mt-2">
                            <div class="form-group col-lg-4 col-sm-12 col-md-6">
                                <label style="font-size:1.1rem!important;">Start Date <b class="text-danger">*</b></label>
                                <input type="date" class="form-control" min="<?= date('Y-m-d',strtotime('-3 months')) ?>" value="<?= date('Y-m-d',strtotime('-3 months')) ?>" max="<?= date('Y-m-d'); ?>" name="startDate" id="startDate" required>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-6">
                                <label style="font-size:1.1rem!important;">End Date <b class="text-danger">*</b></label>
                                <input type="date" class="form-control" min="<?= date('Y-m-d',strtotime('-3 months')) ?>" value="<?= date('Y-m-d'); ?>" max="<?= date('Y-m-d'); ?>" name="endDate" id="endDate" required>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-4">
                                <label style="font-size:1.1rem!important;">Gender <b class="text-danger">*</b></label>
                                <select class="form-control" name="gender" required id="gender" style="appearance:auto!important;">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-4">
                                <label style="font-size:1.1rem!important;">State</label>
                                <select id="facestate" name="state" class="form-control select2">
                                    <option value="">Select State</option>
                                    <option value="All">All</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-4" id="distdiv">
                                <label style="font-size:1.1rem!important;">District</label>
                                <select id="faceDistrict" name="district" class="form-control select2">
                                    <option value="">Select District</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-4" id="citydiv">
                                <label style="font-size:1.1rem!important;">City</label>
                                <select id="city" name="city" class="form-control select2">
                                    <option value="">Select City</option>
                                </select>
                                <!--<input type="text" class="form-control" name="city" id="city" placeholder="Enter City">-->
                            </div>
                            <?php 
                                $getCategories = $this->db->query('select * from categories where isDeleted=0 order by Id desc')->result_array();
                                $count = 0;
                                if(count($getCategories) > 0)
                                {
                                    foreach($getCategories as $k=>$v)
                                    {
                                        $getSubCategories = $this->db->query('select * from subcategories where categoryId='.$v['Id'].' and isDeleted=0')->result_array();
                                        if(count($getSubCategories) > 0 && ((strtolower($v['englishCategoryName']) == 'height') || strtolower($v['englishCategoryName']) == 'age'))
                                        {
                                            $count++;
                                ?>
                            <div class="form-group col-sm-12 col-md-3 col-lg-3">
                                <label class="text-capitalize" style="font-size:1.1rem!important;"><?= $v['englishCategoryName']; ?></label>  
                                <select class="form-control englishSubCategory" name="<?php echo strtolower($v['englishCategoryName']); ?>" style="appearance:auto!important;">
                                    <option value="">Select <?= $v['englishCategoryName']; ?></option>
                                    <?php 
                                        foreach($getSubCategories as $k1=>$v1)
                                        {
                                        ?>
                                    <option value="<?php echo $v1['Id']; ?>"><?= $v1['englishSubCategoryName']; ?></option>
                                    <?php }  ?>
                                </select>
                            </div>
                            <?php       
                                } 
                                } 
                                }
                                ?>
                            <div class="form-group col-lg-3 col-sm-12 col-md-3">
                                <label style="font-size:1.1rem!important;">Religion</label>
                                <select class="form-control" name="religion" id="religion" style="appearance:auto;">
                                    <?php 
                                        $getReligions = $this->db->query('select * from religions where isDeleted=0')->result_array();
                                        if(count($getReligions) > 0)
                                        {
                                        ?>
                                    <option value="">Select Religion</option>
                                    <?php 
                                        foreach($getReligions as $k=>$v)
                                        {
                                        ?>
                                    <option value="<?php echo $v['religionName']; ?>"><?php echo $v['religionName']; ?></option>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <option value="Other">Other</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                                <label style="font-size:1.1rem!important;">Person Name</label>
                                <input type="text" class="form-control" id="personName" name="personName" placeholder="Person Name">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-auto col-sm-12 col-md-auto">
                                <button id="btnFilter" type="submit" class="btn btn-primary btn-style-green disabled-on-loading w-100"> Filter <i class="fa fa-filter"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php }else if($pn == 6){ ?>
            <div class="row align-items-end justify-content-center <?php if($pn != 6){ echo "d-none"; } ?>">
                <?php 
                    if(isset($_SESSION['filteredId']))
                    {
                        $getData = $this->db->query('select * from searchFilterLogsAfterLogin where Id='.$_SESSION['filteredId'])->result_array();
                    ?>
                <?php 
                    $count = 0;
                    if($getData[0]['missingIds'] != NULL && $getData[0]['missingIds'] != '')
                    {
                        $getMissingPerson = $this->db->query('select * from missingperson where Id in('.$getData[0]['missingIds'].')')->result_array();
                        $count += count($getMissingPerson);
                    ?>
                <?php } ?>
                <?php 
                    if($getData[0]['lapataId'] != NULL && $getData[0]['lapataId'] != '')
                    {
                        $getLapataPerson = $this->db->query('select * from unknown_person where id in('.$getData[0]['lapataId'].')')->result_array();
                        $count += count($getLapataPerson);
                    ?>
                <?php } ?>
                <div class="col-lg-12 col-sm-12 col-md-12 mb-2">
                    <h4 class="text-center my-0 text-danger"><b><span id="personcount"><?php echo ($count != 0 ? (($count > 1) ? ($count.' Persons') : ($count.' Person')) : 'NO Person'); ?></span> Found...</b></h4>
                </div>
                <div id="side-menu" class="fas fa-filter" ></div>
                <div class="side-bar" >
                    <h4>Filter</h4>
                    <div class="row">
                        <div class="mb-0 col-12 col-md-12 col-lg-12">
                            <label for="facematchForm" class="mb-2 fs-15">Search By Face Image (Optional)</label>
                            <input type="file" accept="image/*" class="form-control fs-15" onchange="showPreview(this)" placeholder="Search" name="facematch" id="facematchfilter">
                        </div>
                    </div>
                    <div class="row d-none mt-3 justify-content-center" id="facePreviewDiv">
                        <div class="col-10 col-md-12">
                            <img id="facePreview" style="width:100%;height:130px;object-fit:fill;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-2 form-floating">
                            <button type="button" class="mx-0 btn btn-style-green disabled-on-loading w-100" style="padding:12px 0px!important;" onclick="search(this)"> Search</button>
                        </div>
                        <div class="col-6 mt-2 form-floating">
                            <button type="button" class="mx-0 btn btn-style-red disabled-on-loading w-100" onclick="clearFace(this)"> Clear</button>
                        </div>
                    </div>
                    <hr class="mb-0">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 mt-3 form-floating">
                            <input type="date" id="startFilterDate" max="<?php echo date('Y-m-d'); ?>" value="<?php echo $getData[0]['startDate']; ?>" class="form-control fs-15" name="startFilterDate" required>
                            <label for="startFilterDate" class="ms-3">Start Date <b class="text-danger">*</b></label>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 mt-3 form-floating">
                            <input type="date" id="endFilterDate" max="<?php echo date('Y-m-d'); ?>" value="<?php echo $getData[0]['endDate']; ?>" class="form-control fs-15" name="endFilterDate" required>
                            <label for="endFilterDate" class="ms-3">End Date <b class="text-danger">*</b></label>
                        </div>
                        <div class="form-floating mt-3 col-12">
                            <select class="form-control fs-15" name="gender" id="genderFilter">
                                <option value="" <?php echo (isset($getData[0]['gender']) ? ($getData[0]['gender'] == '' ? 'selected' : '') : ''); ?>>Select Gender</option>
                                <option value="boy" <?php echo (isset($getData[0]['gender']) ? ($getData[0]['gender'] == 'Male' ? 'selected' : '') : ''); ?>>Male</option>
                                <option value="girl" <?php echo (isset($getData[0]['gender']) ? ($getData[0]['gender'] == 'Female' ? 'selected' : '') : ''); ?>>Female</option>
                                <option value="other" <?php echo (isset($getData[0]['gender']) ? ($getData[0]['gender'] == 'other' ? 'selected' : '') : ''); ?>>Other</option>
                            </select>
                            <label for="gender" class="ms-3">Gender <b class="text-danger">*</b></label>
                            <div class="invalid-feedback">Please Select Gender.</div>
                        </div>
                        <div class="fs-15 mt-2 col-12">
                            <label for="pkgdurtype" class="fs-15">State </label>
                            <select class="form-control select2 text-capitalize fs-15" name="state" <?php if($pn == 3){ ?> id="facestate"<?php } ?>>
                                <option value="All" <?php echo (isset($getData[0]['state']) ? ($getData[0]['state'] == '' ? 'selected' : '') : ''); ?>>All State (optional)</option>
                                <?php 
                                    $state = $this->db->query('select * from states')->result_array();
                                    if(count($state)>0)
                                    {
                                        foreach($state as $row)
                                        {
                                        ?>
                                <option value="<?php echo $row['name'] ?>" <?php echo (isset($getData[0]['state']) ? (($row['name'] == $getData[0]['state']) ? 'selected' : '') : ''); ?>><?php echo $row['name']?></option>
                                <?php
                                    }
                                    
                                    }
                                    else
                                    {
                                    ?>
                                <option value="All">No Found State</option>
                                <?php
                                    }
                                    ?>
                            </select>
                            <div class="invalid-feedback">Please Select State *.</div>
                        </div>
                        <div class="fs-15 mt-2 col-12 <?php if($getData[0]['state'] == '' || $getData[0]['state'] == 'All'){ echo "d-none"; } ?>" <?php if($pn == 3){ ?>id="distdiv"<?php } ?>>
                            <label for="district" class="fs-15">District (optional)</label>
                            <select class="form-control select2 fs-15" name="district" <?php if($pn == 3){ ?> id="faceDistrict"<?php } ?>>
                                <?php 
                                    if($getData[0]['state'] != '')
                                    {
                                        $snm=$getData[0]['state'];
                                        $district=$this->db->query("select * from district where st_name='$snm'")->result_array();
                                        $str='<option value="">Select District (optional)</option>';
                                        if(count($district)<=0)
                                        {
                                            $str='<option value="nod">No District found</option>';
                                        }
                                        foreach($district as $d)
                                        {
                                            $isSelected = '';
                                            if(strtoupper($d['d_name']) == strtoupper($getData[0]['district']))
                                            {
                                                $isSelected = 'selected';
                                            }
                                            $str.='<option value="'.$d['d_name'].'" '.$isSelected.'>'. $d['d_name'].'</option>';
                                        }
                                        echo $str;
                                    ?>
                                <?php }else{ ?>
                                <option value="" <?php echo (isset($getData[0]['district']) ? ($getData[0]['district'] == '' ? 'selected' : '') : ''); ?>>Select District </option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">Please Select District *.</div>
                        </div>
                        <div class="fs-15 mt-2 col-12 <?php if($getData[0]['state'] == '' || $getData[0]['state'] == 'All'){ echo "d-none"; } ?>" <?php if($pn == 3){ ?>id="citydiv"<?php } ?>>
                            <label for="city" class="fs-15">City (optional)</label>
                            <select class="form-control select2 fs-15" name="city" <?php if($pn == 3){ ?> id="city"<?php } ?>>
                                <?php 
                                    if($getData[0]['state'] != '')
                                    {
                                        $sid=$getData[0]['state'];
                                        $state=$this->db->query("select * from states where name='$sid'")->result_array();
                                        $st_id=0;
                                        if(count($state)>0)
                                        {
                                            $st_id=$state[0]['id'];
                                        }
                                       
                                        $district=$this->db->query("select * from cities where state_id='$st_id'")->result_array();
                                        $str='<option value="">Select City (optional)</option>';
                                        if(count($district)<=0)
                                        {
                                            $str='<option value="nod">No City found</option>';
                                        }
                                        foreach($district as $d)
                                        {
                                            $isSelected = '';
                                            if(strtoupper($d['city']) == strtoupper($getData[0]['city']))
                                            {
                                                $isSelected = 'selected';
                                            }
                                            $str.='<option value="'.$d['city'].'"'.$isSelected.'>'. $d['city'].'</option>';
                                        }
                                        echo $str;
                                    ?>
                                <?php }else{ ?>
                                <option value="" <?php echo (isset($getData[0]['city']) ? ($getData[0]['city'] == '' ? 'selected' : '') : ''); ?>>Select City </option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">Please Select City *.</div>
                        </div>
                        <?php 
                            $getCategories = $this->db->query('select * from categories where isDeleted=0 order by Id desc')->result_array();
                            $count = 0;
                            if(count($getCategories) > 0)
                            {
                                foreach($getCategories as $k=>$v)
                                {
                                    $getSubCategories = $this->db->query('select * from subcategories where categoryId='.$v['Id'].' and isDeleted=0')->result_array();
                                    if(count($getSubCategories) > 0 && ((strtolower($v['englishCategoryName']) == 'height') || strtolower($v['englishCategoryName']) == 'age'))
                                    {
                                        $count++;
                            ?>
                        <div class="form-floating fs-15 mt-3 col-12">
                            <select class="form-control fs-15 englishSubCategory" id="<?php echo strtolower($v['englishCategoryName']); ?>Filter" name="<?php echo strtolower($v['englishCategoryName']); ?>" style="appearance:auto!important;">
                                <option value="">Select <?= $v['englishCategoryName']; ?></option>
                                <?php 
                                    foreach($getSubCategories as $k1=>$v1)
                                    {
                                        if($v['englishCategoryName'] == 'age')
                                        {
                                    ?>
                                <option value="<?php echo $v1['englishSubCategoryName']; ?>" <?php echo (isset($getData[0]['age']) ? ($getData[0]['age'] == $v1['englishSubCategoryName'] ? 'selected' : '') : ''); ?>><?= $v1['englishSubCategoryName']; ?></option>
                                <?php }else{ ?>
                                <option value="<?php echo $v1['englishSubCategoryName']; ?>" <?php echo (isset($getData[0]['height']) ? ($getData[0]['height'] == $v1['englishSubCategoryName'] ? 'selected' : '') : ''); ?>><?= $v1['englishSubCategoryName']; ?></option>
                                <?php } ?>
                                <?php }  ?>
                            </select>
                            <label class="text-capitalize ms-3" for="<?php echo strtolower($v['englishCategoryName']); ?>"><?= $v['englishCategoryName']; ?></label>  
                        </div>
                        <?php       
                            } 
                            } 
                            }
                            ?>
                        <div class="form-floating fs-15 mt-3 col-12">
                            <select class="form-control fs-15" name="religionFilter" id="religionFilter" style="appearance:auto;">
                                <?php 
                                    $getReligions = $this->db->query('select * from religions where isDeleted=0')->result_array();
                                    if(count($getReligions) > 0)
                                    {
                                    ?>
                                <option value="">Select Religion</option>
                                <?php 
                                    foreach($getReligions as $k=>$v)
                                    {
                                    ?>
                                <option value="<?php echo $v['religionName']; ?>" <?php echo (isset($getData[0]['religion']) ? ($getData[0]['religion'] == $v['religionName'] ? 'selected' : '') : ''); ?>><?php echo $v['religionName']; ?></option>
                                <?php } ?>
                                <?php }else{ ?>
                                <option value="Other" <?php echo (isset($getData[0]['religion']) ? ($getData[0]['religion'] == 'Other' ? 'selected' : '') : ''); ?>>Other</option>
                                <?php } ?>
                            </select>
                            <label class="ms-3" for="religion">Religion</label>
                        </div>
                        <div class="col-12 my-3 form-floating">
                            <input type="text" class="form-control" name="personNameFilter" id="personNameFilter" placeholder="Enter Person Name" value="<?php echo (isset($getData[0]['personName']) ? $getData[0]['personName'] : ''); ?>">
                            <label for="personNameFilter" class="ms-2">Enter Person Name</label>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 form-floating">
                            <button type="button" class="btn btn-style-green disabled-on-loading w-100" onclick="apply(this)"> Apply</button>
                        </div>
                        <div class="reset-btn">
                            <div class="btn">reset all</div>
                        </div>
                    </div>
                </div>
                <div id="paginated-list" class="col-lg-12 col-sm-12 col-md-12">
                    <div class="row">
                        <?php 
                            if($getData[0]['lapataId'] != NULL && $getData[0]['lapataId'] != ''){ 
                            $getLapataPerson = $this->db->query('select * from unknown_person where id in('.$getData[0]['lapataId'].')')->result_array();
                            foreach($getLapataPerson as $k=>$row)
                            {
                            ?>
                        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2 pagination-items" data-imageId="<?php echo $row['imageId']??"-" ?>">
                            <div class="card mb-3 shiva_height bg-light">
                                <div class="card-body px-0 pt-0">
                                    <div class="row align-items-end px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['Photo'] != '' || $row['Photo'] != NULL)
                                            {
                                            ?>
                                        <div class="col-6">
                                            <h5 class="text-center text-danger">Missing</h5>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="button" class="btn btn-dark" onclick="share('lapata',<?php echo ($row['userId'] != NULL ? 'user' : 'police'); ?>',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;padding:10px 17px;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 17px;"><i class="fa fa-eye"></i></button>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                                        </div>
                                        <div class="col-12">
                                            <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                                        </div>
                                        <div class="col-5 ">
                                            <a href="<?php echo base_url().$row['Photo']?>" data-lightbox="roadtrip">
                                                <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['Photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            </a>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-5 ">
                                            <?php if($row['Gender'] == 'boy'){ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php }else{ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                        <div class="col-7 px-0">
                                            <?php if($row['person_name'] != '' || $row['person_name'] != NULL){ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['person_name']??"--" ?></span></p>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                            <?php }else{ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                            <?php } ?>
                                            <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age Band - </b><span style="color:grey;"><?php echo $row['Age']??"--"?></span></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                                    <!--<div class="row col-6 px-4">-->
                                    <!--          <h5 class="card-title text-start py-0 fs-6 mb-0"> <b style="color:black;font-weight:600;">Aadhaar No - </b><br><span style="color:grey;"><?php echo $row['aadharNumber']??"--"?></span></h5>-->
                                    <!--    </div>-->
                                    <?php } ?>
                                    <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                                    <div class="row col-12 px-4 pt-2" style="max-height:100px">
                                        <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Other Details :- </b><br><span style="color:grey;" class="message"><?php echo $row['Message']??"--"?></span></p>
                                    </div>
                                    <?php } ?>
                                    <hr class="my-0">
                                    <?php 
                                        if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                        {
                                            $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                        ?>
                                    <div class="row w-100 mx-0 align-items-end divheight">
                                        <div class="col-12 text-start">
                                            <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        if($row['policeId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                        ?>
                                    <div class="row w-100 mx-0 align-items-end divheight">
                                        <div class="col-12 text-start">
                                            <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                                <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
                                                <?php echo $getPoliceDetails[0]['district'].' - '; ?><?php echo $getPoliceDetails[0]['state']; ?></b>
                                            </p>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                        ?>
                                    <div class="row w-100 mx-0 align-items-end divheight">
                                        <div class="col-12 text-start">
                                            <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                                <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                                <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b>
                                            </p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                    <style>
                                        .social a.btn-circle .btn-google {
                                        color: #fff;
                                        background-color: #e44134;
                                        border-color: transparent;
                                        }
                                        .btn-police1{
                                        color: #fff;
                                        background-color: green!important;
                                        border-color: transparent;
                                        }
                                        .btn-police2{
                                        color: #fff;
                                        background-color: #e44134!important;
                                        border-color: transparent;
                                        }
                                        .btn-police3{
                                        color: #fff;
                                        background-color: #5daed5!important;
                                        border-color: transparent;
                                        }
                                        .btn-police4{
                                        color: #fff;
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
                                    </style>
                                    <?php 
                                        if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                        {
                                            $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                        ?>
                                    <div class="row w-100 mx-0 align-items-end">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - NGO </b>
                                        </div>
                                        <div class="col-12 ">
                                            <a href="tel:<?= $getNgoDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                            <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                                if($row['well3']!='' || $row['well3']!=null) { ?>
                                            <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        if($row['policeId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                        ?>
                                    <div class="row w-100 mx-0 align-items-end">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - POLICE THANA</b>
                                        </div>
                                        <div class="col-12 ">
                                            <a href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                            <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                                if($row['well3']!='' || $row['well3']!=null) { ?>
                                            <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                        ?>
                                    <div class="row w-100 mx-0 align-items-end">
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - <?php echo $getUserDetail[0]['aadharname']; ?></b>
                                        </div>
                                        <div class="col-12 text-center">
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                            <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                                if($row['well3']!='' || $row['well3']!=null) { ?>
                                            <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <?php 
                            if($getData[0]['missingIds'] != NULL && $getData[0]['missingIds'] != '')
                            {
                                foreach($getMissingPerson as $k=>$row)
                                {
                            ?>
                        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-1 col-12 col-search pb-2 pagination-items" data-imageId="<?php echo $row['imageId']??"-" ?>">
                            <div class="card mb-3 shiva_height bg-light" >
                                <div class="card-body px-0 pt-0">
                                    <div class="row align-items-end px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['facematchphoto'] != '' || $row['facematchphoto'] != NULL)
                                            {
                                            ?>
                                        <div class="col-6">
                                            <h5 class="text-center text-danger">Missing</h5>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="button" class="btn btn-dark" onclick="share('missing',this,'<?php echo $row['Id']; ?>')" style="background:black!important;color:white!important;padding:10px 17px;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('missing',this,'<?php echo $row['Id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 17px;"><i class="fa fa-eye"></i></button>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <p class="mb-1"><b style="color:black;font-size:.8rem!important">Missing Id :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $row['missingId']; ?></b></p>
                                        </div>
                                        <div class="col-12">
                                            <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                                        </div>
                                        <div class="col-5 ">
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['facematchphoto']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-5 ">
                                            <?php if(strtolower($row['missinggender']) == 'male'){ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php }else{ ?>
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                        <div class="col-7 px-0">
                                            <?php if($row['missingname'] != '' || $row['missingname'] != NULL){ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['missingname']??"--" ?></span></p>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo (ucfirst($row['missinggender'])); ?></span></p>
                                            <?php }else{ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo (ucfirst($row['missinggender'])); ?></span></p>
                                            <?php } ?>
                                            <?php if($row['fatherstate'] != '' || $row['fatherstate'] != NULL){ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Address - </b><span style="color:grey;"><?php echo ($row['fatherstate']) ?> , <?php echo ($row['fatherdistrict']) ?> - <?php echo ($row['fathercity']); ?></span></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php if($row['otherDetail'] != '' || $row['otherDetail'] != NULL){ ?>
                                    <div class="row col-12 px-4 pt-2" style="max-height:100px">
                                        <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Other Details :- </b><br><span style="color:grey;" class="message"><?php echo $row['otherDetail']??"--"?></span></p>
                                    </div>
                                    <?php } ?>
                                    <style>
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
                                        color: #fff;
                                        background-color: #e44134!important;
                                        border-color: transparent;
                                        }
                                        .btn-police3{
                                        color: #fff;
                                        background-color: #5daed5!important;
                                        border-color: transparent;
                                        }
                                        .btn-police4{
                                        color: #fff;
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
                                    </style>
                                    <div class="row w-100 mx-0 align-items-end">
                                        <div class="col-12 text-center">
                                            <b style="font-size:.8rem!important">Contact To : - Well Wishers </b>
                                        </div>
                                        <div class="col-12 text-center">
                                            <?php if($row['mobile1']!='' || $row['mobile1']!=null) { ?>
                                            <a href="tel:<?= $row['mobile1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['mobile2']!='' || $row['mobile2']!=null) { ?>
                                            <a href="tel:<?= $row['mobile2']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                                if($row['mobile3']!='' || $row['mobile3']!=null) { ?>
                                            <a href="tel:<?= $row['mobile3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <nav class="pagination-container">
                    <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
                    &lt;
                    </button>
                    <div id="pagination-numbers">
                    </div>
                    <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
                    &gt;
                    </button>
                </nav>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <form class="row g-3 needs-validation justify-content-center <?php if($pn != 7){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>ngo/searchPersonFace" novalidate id="step7Form">
            <?php 
                $csrf = array(
                  'name' => $this->security->get_csrf_token_name(),
                  'hash' => $this->security->get_csrf_hash()
                  );
                ?>
            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <?php 
                if(isset($_SESSION['searchFaceIdAfterLogin']))
                {
                ?>
            <div class="card col-lg-4">
                <div class="card-body">
                    <div class="row mt-3 justify-content-center">
                        <div class="col-lg-10 col-md-6" id="sampleDiv">
                            <input type="file" hidden id="uploadFile" accept="image/*">
                            <h5 class="text-center">Sample Photo</h5>
                            <img src="<?php echo base_url(); ?>assets/images/faceicon.png" style="width:100%;height:200px;">
                            <input type="hidden" name="mainPhotoSelectedFacematch" id="mainPhotoSelectedFacematch">
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center" style="display:none" id="element">
                        <div class="col-lg-10 col-md-6">
                            <h5 class="text-center">Preview Photo</h5>
                            <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:200px;" id="mainPhotoUploaded">
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center" id="uploadBtnDiv">
                        <div class="col-lg-10 col-md-6 text-center">
                            <button type="button" class="btn w-100 btn-primary btn-style-four" id="uploadPhotoBtn" onclick="showFileUpload()">Upload Photo <i class="fa fa-upload"></i></button>
                        </div>
                    </div>
                    <div class="row mt-4 mb-3 justify-content-center">
                        <div class="col-6 px-1 d-none" id="retakebtndiv">
                            <button type="button" class="btn w-100 btn-primary btn-style-yellow" id="retakePhotoBtn" onclick="showFileUpload()">Retake <i class="fa fa-upload"></i></button>
                        </div>
                        <div class="col-lg-6 px-1 col-sm-12 col-6 col-md-6">
                            <button type="submit" id="btn3" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Search <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </div>
                    <?php } ?>  
                </div>
            </div>
        </form>
    </section>
</main>
<!-- End #main -->
<div id="cameraModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Camera</h5>
                <a class="close btn btn-default" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <div class="row mb-0 mb-md-3 justify-content-center" id="videodiv">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <video id="video" width="100%" height="240" autoplay></video>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-12 col-md-auto text-center" id="clickdiv">
                        <button id="click-photo" class="w-100 btn btn-primary btn-style-five">Capture Photo <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                </div>
                <input type="file" hidden id="fileMobInput" capture="camera">
                <div class="row justify-content-center d-none" id="canvasdiv">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <canvas id="canvas" width="320" height="240"></canvas>
                    </div>
                </div>
                <div class="row justify-content-center d-none" id="mobileimagediv">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <img id="mobileimage" width="320" height="240">
                    </div>
                </div>
                <div class='row justify-content-center text-center mx-0' id="bothcameradiv">
                    <div class='col-lg-6 col-sm-12 col-md-12 mt-3 px-0' id="frontcameradiv">
                        <button type='button' class='w-100 btn btn-style-green btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                    <div class='col-lg-6 col-sm-12 col-md-6 mt-3 px-0 px-md-2' id="backcameradiv">
                        <button type='button' class='w-100 btn btn-style-green btn-primary' onclick='openBackCamera()'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mx-0">
                <div class="col-lg-6 col-sm-12 col-6 px-1 col-md-6 text-center d-none mb-3" id="retake">
                    <button id="retake-photo" class="w-100 btn btn-dark btn-style-yellow" style="background:black!important;color:white!important;">Retake <i class='fa fa-camera fa-spin'></i></button>
                </div>
                <div class="col-lg-6 col-sm-12 col-6 px-1 col-md-6 text-center d-none mb-3" id="retakeMobile">
                    <button id="retake-mobile" class="w-100 btn btn-dark btn-style-yellow" onclick="openCamera()" style="background:black!important;color:white!important;">Retake <i class='fa fa-camera fa-spin'></i></button>
                </div>
                <div class="col-lg-6 col-sm-12 col-6 px-1 col-md-6 text-center mb-3">
                    <button id="btnInactiveSave" class="w-100 btn btn-danger btn-style-red disabled-on-loading"> Search <i class='fa fa-search'></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="uploadimageModal" class="modal" data-bs-backdrop="static" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content" style="width:min-content;max-width:100%;">
        <div class="modal-body pt-0">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <div id="image_demo" style="width:100%; margin-top:21px"></div>
            </div>
            <div class="col-6 text-end">
                <button type="button" class="btn btn-dark close1 save" style="background:black!important;color:white;" data-dismiss="modal">Back</button>
            </div>
            <div class="col-6 text-start">
                <button class="btn btn-success crop_image save">OK</button>
            </div>
        </div>
        </div>
     </div>
    </div>
</div>
<style>
    .save {
    position: relative;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 16px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color: #008000!important;
    }
    .swal2-close{
    position: relative!important;
    color: #000!important;
    font-size: 38px!important;
    line-height: 20px!important;
    font-weight: 600!important;
    padding: 25px 25px!important;
    background-color: white!important;
    }
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript" src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>
<script type="text/javascript">
    function Paginator(items, page, per_page) {
      var page = page || 1,
      per_page = per_page || 10,
      offset = (page - 1) * per_page,
    
      paginatedItems = items.slice(offset).slice(0, per_page),
      total_pages = Math.ceil(items.length / per_page);
      return {
      page: page,
      per_page: per_page,
      pre_page: page - 1 ? page - 1 : null,
      next_page: (total_pages > page) ? page + 1 : null,
      total: items.length,
      total_pages: total_pages,
      data: paginatedItems
      };
    }
    
    $(document).ready(function() {
    
    $(".message").shorten({
        	"showChars" : 150,
        	"moreText"	: "See More",
         "lessText"	: "Less",
        });
    });
    
    $('.close1').click(function()
    {
        $('#uploadBtnDiv').removeClass('d-none');
        $('#element').hide();
        $('#uploadFile').val('');
        $('#retakebtndiv').addClass('d-none');
        $('#mainPhotoUploaded').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#mainPhotoSelectedFacematch').val('');
        $('#uploadimageModal').modal('hide');
    })
    
    $('#filterForm').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnFilter').attr('disabled','disabled');
        let data = new FormData(this);
        data.append('_token','<?php echo $csrf['hash']; ?>');
        $.ajax({
            url:$(this).attr('action'),
            data:data,
            processData:false,
            cache:false,
            contentType:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.count > 0)
                {
                    location.href="<?php echo base_url(); ?>ngo/search_person_details?pn=6";   
                }else{
                    toastr.error('No Records Found');
                    $('#btnFilter').removeAttr('disabled');
                }
            }
        })
    })
    
    $('.close').click(function()
    {
    location.reload();
    })
    
    $('#btnInactiveSave').click(function()
    {
    if($('#mainPhotoSelected').val() != '')
    {
        $(this).attr('disabled','disabled');      
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        if(idType == 'aadhar')
        {
            label = 'Aadhar Number';
            if($('#aadharNumber').val() != '')
            {
                count = 1;
                
                data.append('idNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'error',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#btnInactiveSave').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#btnInactiveSave').removeAttr('disabled');
                }
            })
        }else{
            data.append('photo',$('#mainPhotoSelected').val());
            $.ajax({
                url:'<?php echo base_url(); ?>ngo/checkInactiveInfoAfterLogin',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#idType').val();
                    if(parse.status == 'success')
                    {
                        location.href="<?php echo base_url(); ?>ngo/search_person_details?pn=3";
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#btnInactiveSave').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                         }else{
                            let textMessage = '';
                            if(idType == 'aadhar')
                            {
                                textMessage = 'Aadhar Card';
                            }
                            if(idType == 'dl')
                            {
                                textMessage = 'Driving License Number';
                            }
                            if(idType == 'voter')
                            {
                                textMessage = 'Voter Id';
                            }
                            if(idType == 'pan')
                            {
                                textMessage = 'Pan Number';
                            }
                            if(!parse.isDobCorrect && !parse.isAadharCorrect && parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnInactiveSave').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect && !parse.isAadharCorrect && parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+' and Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnInactiveSave').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnInactiveSave').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect && !parse.isGenderCorrect && !parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">'+textMessage+', Gender and date of birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnInactiveSave').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isAadharCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">No Record Found</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnInactiveSave').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isDobCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Date of Birth is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnInactiveSave').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                            else if(!parse.isGenderCorrect)
                            {
                                Swal.fire({
                                    title: '<strong class="text-dark" style="font-size:20px;">Gender is incorrect</strong>',
                                    icon: 'info',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $('#btnInactiveSave').removeAttr('disabled');
                                    $('#idType').removeAttr('disabled');
                                    if(idType == 'aadhar')
                                    {
                                        $('#aadharNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'dl')
                                    {
                                        $('#dlNumber').attr('readonly',false);   
                                    }
                                    if(idType == 'voter')
                                    {
                                        $('#voterId').attr('readonly',false);   
                                    }
                                    if(idType == 'pan')
                                    {
                                        $('#panNumber').attr('readonly',false);   
                                    }
                                })
                            }
                        }
                    }  
                }
            })
        }
    }else{
        toastr.error('Please capture the photo to continue');
    }
    })
    
    function checkLength(val,limit)
    {
    if(val.length == limit)
    {
        return false;
    }else{
        return true;
    }
    }
    
    $('input[name="type"]').click(function()
    {
    showAccordingly();
    })
    
    function showAccordingly()
    {
        let choice = $('input[name="type"]:checked').val();   
        if(choice == undefined)
        {
            toastr.error('Please Select Choice');
        }else{
            if(choice == 'unknown')
            {
                location.href="<?php echo base_url(); ?>ngo/unknown_person_filter_after_login";
            }else if(choice == 'lapata')
            {
                location.href="<?php echo base_url(); ?>ngo/lapta_person_after_login";
            }else if(choice == 'vehicle')
            {
                location.href="<?php echo base_url(); ?>ngo/search_vehicle_details";
            }else if(choice == 'device')
            {
                toastr.warning('Coming Soon');   
            }else{
                if(choice != 3)
                {
                    if(choice != 4)
                    {
                        if(choice != 5)
                        {
                            if(choice == 2)
                            {
                                location.href="<?php echo base_url(); ?>ngo/search_person_by_identity";         
                            }else{
                                location.href="<?php echo base_url(); ?>ngo/search_person_details?pn="+choice;         
                            }
                        }else{
                            if(choice == 5)
                            {
                                $.ajax({
                                    url:'<?php echo base_url(); ?>ngo/addFaceSearch',
                                    type:'get',
                                    success:function(res)
                                    {
                                        location.href="<?php echo base_url(); ?>ngo/search_person_details?pn=7";                       
                                    }
                                })
                            }
                        }
                    }else{
                        location.href="<?php echo base_url(); ?>ngo/search_person_details?pn=5";      
                    }
                }else{
                    if(choice != 4)
                    {
                        toastr.warning('Coming Soon');   
                    }else{
                        location.href="<?php echo base_url(); ?>ngo/search_person_details?pn="+choice;      
                    }
                }   
            }
        }
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
    let galleryImages = document.querySelectorAll('.pagination-items');
    
    function search(ele)
    {
    $(ele).attr('disabled','disabled');
    if($('#facematchfilter').get(0).files.length > 0)
    {
        let data = new FormData();
        data.append('file',$('#facematchfilter').get(0).files[0]);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>landing/searchByImage',
            type:'post',
            processData:false,
            contentType:false,
            cache:false,
            data:data,
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.status == 'success')
                {
                    $('#side-menu').click();
                    let count = 0;
                    galleryImages.forEach(img => {
                        var filter = img.getAttribute('data-imageid');
                        if (parse.finalId.includes(filter)) {
                		    count++;
                			img.style.display = 'block';
                		} else {
                			img.style.display = 'none';
                		};
                    })
                    if(count != 0)
                    {
                        if(count > 1)
                        {
                            $('#personcount').html(count + ' Persons');
                        }else{
                            $('#personcount').html(count + ' Person');
                        }
                    }else{
                        $('#personcount').html('NO Person');
                    }
                }else{
                    galleryImages.forEach(img => {
            			img.style.display = 'none';
            		});
            		$('#personcount').html('NO Person');
                }
                $(ele).removeAttr('disabled');
            }
        })      
    }else{
        toastr.error('Please select the file to continue');
        $(ele).removeAttr('disabled');
    }
    }
    
    function clearFace(ele)
    {
    location.reload();
    }
    
    function showPreview(ele)
    {
    if($('#facematchfilter').get(0).files.length > 0)
    {
        $('#facePreview').attr('src',URL.createObjectURL($('#facematchfilter').get(0).files[0]));
        $('#facePreviewDiv').removeClass('d-none');
    }else{
        $('#facePreviewDiv').addClass('d-none');
        $('#facematchfilter').val('');
        $('#facePreview').removeAttr('src');
    }
    }
    
    function apply(ele)
    {
    $(ele).attr('disabled','disabled');
    let startFilterDate = $('#startFilterDate').val();
    let endFilterDate = $('#endFilterDate').val();
    let gender= $('#genderFilter').val();
    let age = $('#ageFilter').val();
    let height = $('#heightFilter').val();
    let personName = $('#personNameFilter').val();
    let state = $('#facestate').val();
    let district = $('#faceDistrict').val();
    let city = $('#city').val();
    let religion = $('#religionFilter').val();
    if(startFilterDate == '')
    {
        toastr.error('Select Start Date');
        $(ele).removeAttr('disabled');
    }else if(endFilterDate == '')
    {
        toastr.error('Select End Date');
        $(ele).removeAttr('disabled');
    }else if(gender == '')
    {
        toastr.error('Select Gender');
        $(ele).removeAttr('disabled');
    }else{
        let data = new FormData();
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');    
        data.append('startDate',startFilterDate);
        data.append('endDate',endFilterDate);
        data.append('state',state);
        data.append('district',district);
        data.append('city',city);
        data.append('gender',(gender == 'boy' ? 'Male' : 'Female'));
        data.append('religion',religion);
        data.append('personName',personName);
        data.append('age',age);
        data.append('height',height);
        $.ajax({
            url:'<?php echo base_url(); ?>user/filterDetailsAfterLogin',
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.count > 0)
                {
                    location.href="<?php echo base_url(); ?>ngo/search_person_details?pn=6";   
                }else{
                    toastr.error('No Records Found');
                    $(ele).removeAttr('disabled');
                }
            }    
        })
    }
    }
    
</script>
<script>
    const paginationNumbers = document.getElementById("pagination-numbers");
    const paginatedList = document.getElementById("paginated-list");
    let listItems = [];
    if(paginatedList != null)
    {
        listItems = paginatedList.querySelectorAll(".pagination-items");   
    }
    const nextButton = document.getElementById("next-button");
    const prevButton = document.getElementById("prev-button");
    
    const paginationLimit = 10;
    let pageCount = 0;
    if(listItems)
    {
        pageCount = Math.ceil(listItems.length / paginationLimit);   
    }
    let currentPage = 1;
    
    const disableButton = (button) => {
        if(button != null)
        {
            button.classList.add("disabled");
            button.setAttribute("disabled", true);   
        }
    };
    
    const enableButton = (button) => {
        if(button != null)
        {
            button.classList.remove("disabled");
            button.removeAttribute("disabled");
        }
    };
    
    const handlePageButtonsStatus = () => {
      if (currentPage === 1) {
        disableButton(prevButton);
      } else {
        enableButton(prevButton);
      }
    
      if (pageCount === currentPage) {
        disableButton(nextButton);
      } else {
        enableButton(nextButton);
      }
    };
    
    const handleActivePageNumber = () => {
      document.querySelectorAll(".pagination-number").forEach((button) => {
        button.classList.remove("active");
        const pageIndex = Number(button.getAttribute("page-index"));
        if (pageIndex == currentPage) {
          button.classList.add("active");
        }
      });
    };
    
    const appendPageNumber = (index) => {
      const pageNumber = document.createElement("button");
      pageNumber.className = "pagination-number";
      pageNumber.innerHTML = index;
      pageNumber.setAttribute("page-index", index);
      pageNumber.setAttribute("aria-label", "Page " + index);
    
      paginationNumbers.appendChild(pageNumber);
    };
    
    const getPaginationNumbers = () => {
      for (let i = 1; i <= pageCount; i++) {
        appendPageNumber(i);
      }
    };
    
    const setCurrentPage = (pageNum) => {
      currentPage = pageNum;
    
      handleActivePageNumber();
      handlePageButtonsStatus();
      
      const prevRange = (pageNum - 1) * paginationLimit;
      const currRange = pageNum * paginationLimit;
    
      listItems.forEach((item, index) => {
        item.classList.add("hidden");
        if (index >= prevRange && index < currRange) {
          item.classList.remove("hidden");
        }
      });
    };
    
    window.addEventListener("load", () => {
      getPaginationNumbers();
      setCurrentPage(1);
    
        if(prevButton != null)
        {
            prevButton.addEventListener("click", () => {
                setCurrentPage(currentPage - 1);
            });   
        }
    
        if(nextButton != null)
        {
            nextButton.addEventListener("click", () => {
                setCurrentPage(currentPage + 1);
            });
        }
    
      document.querySelectorAll(".pagination-number").forEach((button) => {
        const pageIndex = Number(button.getAttribute("page-index"));
    
        if (pageIndex) {
          button.addEventListener("click", () => {
            setCurrentPage(pageIndex);
          });
        }
      });
    });
    
    let resetButton = document.querySelector('.reset-btn .btn');
    if(resetButton != null)
    {
        resetButton.onclick = () => {
        	window.location.href="<?php echo base_url(); ?>ngo/search_person_details?pn=5";
        };
    }
    
    let sideMenu = document.querySelector('#side-menu');
    let sideBar = document.querySelector('.side-bar');
    if(sideMenu != null)
    {
    sideMenu.onclick = () => {
    	sideMenu.classList.toggle('fa-times');
    	sideBar.classList.toggle('active');
    };   
    }
</script>
<script>
    function showFileUpload(){
        $('#image_demo').croppie('destroy');
        if(window.innerWidth <= 525)
        {
            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                  width:'100%',
                  height:400,
                  type:'square' //circle
                },
                boundary:{
                  width:'100%',
                  height:500
                }
              });    
        }else{
            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                  width:'300',
                  height:400,
                  type:'square' //circle
                },
                boundary:{
                  width:'400',
                  height:500
                }
              });
        }
        $('#uploadFile').click();
    }
    
    if(window.innerWidth <= 525)
    {
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:'100%',
              height:400,
              type:'square' //circle
            },
            boundary:{
              width:'100%',
              height:500
            }
          });    
    }else{
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:'300',
              height:400,
              type:'square' //circle
            },
            boundary:{
              width:'400',
              height:500
            }
          });
    }
      
    $('.crop_image').click(function(event){
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport',
          format:'jpeg'
        }).then(function(response){
            $('#mainPhotoUploaded').attr('src',response);
            $('#mainPhotoSelectedFacematch').val(response);
            $('#sampleDiv').hide();
            $('#element').show();
            $('#uploadimageModal').modal('hide');
            $('#uploadBtnDiv').addClass('d-none');
            $('#retakebtndiv').removeClass('d-none');
        })
    });
    
    $('#uploadFile').on('change',async function(e)
    {
        if($(this)[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL($(this)[0].files[0]);
            $('#uploadimageModal').modal('show');   
        }
    })
    
    $('#step7Form').on('submit',function(e)
    {
        $('#btn3').attr('disabled','disabled');
        e.preventDefault();
        if(($('#mainPhotoSelectedFacematch').val()) != '')
        {
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
                    if(parse.finalCount > 0)
                    {
                        location.href="<?php echo base_url(); ?>ngo/completeFaceMatchResults";      
                    }else{
                        Swal.fire({
                            iconHtml: '<img src="'+$('#mainPhotoSelectedFacematch').val()+'" style="height: 100%;border-radius: 0;width: 80px;">',
                            customClass: {
                                actions: 'mt-0',
                                cancelButton: 'save',
                                popup: 'pb-2',
                                confirmButton: 'btn-style-primary-no-border',
                                icon: 'no-border-radius mb-0 mt-3'
                            },
                            html: "<h5 style='color:red;font-weight:bold;' class='mt-1'><b>Oops ! Face not Matched</b></h5><div class='form-group mb-2'><button type='button' class='btn btn-success save' onclick='swal.close();'>Please Try Again</button></div><div class='form-group mb-0 text-end'><button type='button' class='btn btn-primary btn-style-primary-no-border'>View Guidlines</button></div>",
                            showCloseButton:true,
                            showConfirmButton:false,
                            confirmButtonText:'View Guidlines',
                            showCancelButton:false,
                            'cancelButtonText':'Please Try Again'
                        })
                        $('#btn3').removeAttr('disabled');            
                    }
                }
            });
        }else{
            Swal.fire({
                icon:'error',
                html: "<h4 style='color:black;'><b>Please Upload Person's Photo</b></h4>",
                showCloseButton:true,
                showConfirmButton:false,
                showCancelButton:true,
                'cancelButtonText':'Ok'
            })
            $('#btn3').removeAttr('disabled');
        }
    })
    
    function back(ele)
	{
	    window.close();
	}
    
    function shareLap(ele,appNo)
    {
        if (navigator.share) {
            let url = '';
            url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
            navigator.share({
              title: 'Khoji',
              url: url
            }).then(() => {
              toastr.success('Thanks for sharing!');
            })
            .catch(console.error);
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
</script>