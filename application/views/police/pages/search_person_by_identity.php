<style>
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
    padding: 10px 10px;
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
        <h1>Search Person By Identity</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active">Search Person By Identity</li>
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
            <div class="col-xl-4 col-lg-4 col-sm-12 col-md-8 px-0 <?php if($pn != 1){ echo "d-none"; } ?>">
                <div class="card">
                    <div class="card-body mt-3 py-3 w-100 p-3">
                        <form class="row g-3 needs-validation <?php if($pn != 1){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>police/checkPerson/step2" novalidate id="step2Form">
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
                                        <input type="text" maxlength="6" class="form-control text-uppercase" id="huIdNumber" required placeholder="Driving License Number" aria-describedby="step2CheckGold">
                                        <label for="huIdNumber" id="huidLabel" class="pl-2">Enter Gold Jewellery HUID No</label>
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
            <?php }else if($pn == 2){ ?>
            <div class="col-xl-12 px-0 <?php if($pn != 2){ echo 'd-none'; } ?>">
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
                                    $this->db->where('goldHUIdNumber1', $checkDetail[0]['IdNumber']);
                                    $this->db->or_where('goldHUIdNumber2', $checkDetail[0]['IdNumber']);
                                    $this->db->or_where('goldHUIdNumber3', $checkDetail[0]['IdNumber']);
                                    $getUserDetails = $this->db->get('user')->result_array();
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
                                    $this->db->where('vehicleNumber1', $checkDetail[0]['IdNumber']);
                                    $this->db->or_where('vehicleNumber2', $checkDetail[0]['IdNumber']);
                                    $this->db->or_where('vehicleNumber3', $checkDetail[0]['IdNumber']);
                                    $getUserDetails = $this->db->get('user')->result_array();
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
                                $this->db->order_by("dateCreated", "desc");
                                $missingperson = $this->db->get('missingperson')->result_array();
                            }
                            $wantedperson = array();
                            if(count($wantedIds) > 0)
                            {
                                $this->db->where_in('Id',$wantedIds);   
                                $this->db->order_by("dateCreated", "desc");
                                $wantedperson = $this->db->get('criminals')->result_array();
                            }
                            $criminalperson = array();
                            if(count($criminalIds) > 0)
                            {
                                $this->db->where_in('Id',$criminalIds);   
                                $this->db->order_by("dateCreated", "desc");
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
                                $this->db->order_by("dateCreated", "desc");
                                $lapataperson = $this->db->get('unknown_person')->result_array();
                            }
                            $unknownperson = array();
                            if(count($unknownIds) > 0)
                            {
                                $this->db->where_in('id',$unknownIds);   
                                $this->db->order_by("dateCreated", "desc");
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
                    <input type="hidden" id="mainPhotoSelected" >
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
                                            <button type="button" class="btn btn-dark" onclick="share('missing',this,'<?php echo $row['Id']; ?>')" style="background:black!important;color:white!important;padding:10px 10px;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('missing',this,'<?php echo $row['Id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 10px;"><i class="fa fa-eye"></i></button>
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
                                    <?php if($row['rewardamount'] != '' && $row['rewardamount'] != NULL && $row['rewardamount'] != 0){ ?>
                                        <div class="row col-12 mx-0 p-2" style="border:1px solid red;">
                                            <h6 class="card-title text-center py-0 mb-0"> <b style="color:red;font-weight:600;">Reward - </b><span style="color:black;">Rs. <?php echo $row['rewardamount']??"--"?></span></h6>
                                         </div>
                                    <?php } ?>
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
                            <div class="card mb-3 shiva_height bg-light">
                                <div class="card-body px-0 pt-0">
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['Photo'] != '' || $row['Photo'] != NULL)
                                            {
                                        ?>
                                        <div class="col-6 px-1 text-center mb-2">
                                            <h5 class="text-center text-danger fs-20">Missing </h5>
                                            <?php if($row['rewardamount'] != '' && $row['rewardamount'] != NULL && $row['rewardamount'] != 0){ ?>
                                                <div class="row col-12 mx-0 p-0" style="border:1px solid red;">
                                                    <h6 class="card-title text-center px-1 py-0 mb-0" style="font-size:16px;"> <b style="color:red;font-weight:600;">Reward - </b><span style="color:black;">Rs. <?php echo $row['rewardamount']??"--"?></span></h6>
                                                 </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-6 text-end mb-2">
                                            <button type="button" class="btn btn-dark" onclick="share('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
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
                                        <div class="row col-6">
                                            <h5 class="card-title text-center py-0 fs-6 mb-0"><b style="color:black;"><?php echo substr_replace($row['aadharNumber'],'xxxxxxxx',0,8);?></b></h5>
                                        </div>
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
                                        <div class="col-12 ">
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                                <!--<a href="tel:<?= $getNgoDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>-->
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
                                            <!--<a href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>-->
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
                                        <?php 
                                            if($this->session->userdata('user_login') != 'yes'){
                                        ?>
                                        <div class="col-12 ">
                                            <b style="font-size:.8rem!important">Contact To: - <?php echo $getUserDetail[0]['aadharname']; ?></b>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                        </div>
                                        <?php }else{ ?>
                                            <div class="col-12 ">
                                                <b style="font-size:.8rem!important">Contact To: - <?php echo $getUserDetail[0]['aadharname']; ?></b>
                                            </div>
                                            <div class="col-12 text-center">
                                                <?php 
                                                    if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                                    {
                                                ?>
                                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                                <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                                  <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                                <?php }
                                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                                    <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                                <?php } ?>
                                                <?php }else{ ?>
                                                <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
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
                            <div class="card mb-3 shiva_height bg-light">
                                <div class="card-body px-0 pt-0">
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['Photo'] != '' || $row['Photo'] != NULL)
                                            {
                                        ?>
                                        <div class="col-6 text-center mb-2">
                                            <h6 class="text-center text-danger mb-0">APPEAL FOR IDENTIFICATION </h6>
                                        </div>
                                        <div class="col-6 text-end mb-2">
                                            <button type="button" class="btn btn-dark" onclick="share('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:black;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                                        </div>
                                        <div class="col-12 px-2">
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
                                    <div class="row col-12 px-2 mx-0 mt-2 mb-1">
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
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:red;font-size:.8rem!important">NGO - </b><b style="color:black;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                                          
                                        </div>
                                    </div>
                                    <?php }else{ 
                                        if($row['policeId'] != NULL)
                                        {
                                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                    ?>
                                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                        <div class="col-12 text-start">
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:red;font-size:.8rem!important">THANA - </b>
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
                                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:red;font-size:.8rem!important">SAMAJSEVI - </b>
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
                                                <a href="tel:<?= $getNgoDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                                    <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                                    <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                                <?php }
                                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                                    <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
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
                                            <a href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                              <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php }else{ ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
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
                                              <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                              <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                            <?php }else{ ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
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
                                            <button type="button" class="btn btn-dark" onclick="share('wanted',this,'<?php echo $row['Id']; ?>')" style="background:black!important;color:white!important;padding:10px 10px;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('wanted',this,'<?php echo $row['Id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 10px;"><i class="fa fa-eye"></i></button>
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
                                            <button type="button" class="btn btn-dark" onclick="share('criminal',this,'<?php echo $row['Id']; ?>')" style="background:black!important;color:white!important;padding:10px 10px;"><i class="fa fa-share-alt"></i></button>
                                            <button type="button" class="btn btn-primary" onclick="view('criminal',this,'<?php echo $row['Id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 10px;"><i class="fa fa-eye"></i></button>
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
                            <div class="card mb-3 shiva_user_height bg-light">
                                <div class="card-body px-0 pt-0">
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <div class="col-6">
                                            <img src="<?php echo base_url(); ?>assets/images/verified.webp" style="width:100%;height:auto;">
                                        </div>
                                        <div class="col-6 text-end mb-2">
                                            <button type="button" class="btn btn-primary" onclick="view('general',this,'<?php echo $row['uid']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
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
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['aadharname']??"--" ?></span></p>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['gender'] == 'MALE' ? 'Male':'Female'); ?></span></p>
                                            <?php }else{ ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['gender'] == 'MALE' ? 'Male':'Female'); ?></span></p>
                                            <?php } ?>
                                           
                                            <?php if($row['dob'] != '' || $row['dob'] != NULL){ 
                                                $from=new DateTime(date('Y-m-d'));
                                                $to   = new DateTime($row['dob']);
                                                $age = ($from->diff($to)->y).'- Years';
                                            ?>
                                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:black;"><?php echo $age??"--"?></span></p>
                                            <?php } ?>
                                        </div>
                                        <hr class="my-0">
                                        <div class="row w-100 mx-0 align-items-center">
                                            <?php 
                                                if($this->session->userdata('user_login') != 'yes'){
                                            ?>
                                            <div class="col-12 ">
                                                <b style="font-size:.8rem!important">Contact To: - Well Wisher</b>
                                            </div>
                                            <div class="col-12 text-center">
                                                <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            </div>
                                            <?php }else{ ?>
                                                <div class="col-12 ">
                                                    <b style="font-size:.8rem!important">Contact To: - Well Wisher</b>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <?php 
                                                        if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                                        {
                                                    ?>
                                                    <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                                    <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                                    <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                                      <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                                    <?php }
                                                      if($row['well3']!='' || $row['well3']!=null) { ?>
                                                      <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                                    <?php } ?>
                                                    <?php }else{ ?>
                                                    <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                                    <?php } ?>
                                                </div>
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
            <?php } ?>
        </div>
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
    padding: 12px 22px!important;
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
        $('#mainPhotoUploaded').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#mainPhotoSelected').val('');
        $('#uploadimageModal').modal('hide');
    })
    
    $('#btnDlClear').click(function()
    {
        $('#step2Form')[0].reset();
        $('#step2CheckAadhar').removeAttr('disabled');
        $('#step2CheckDl').removeAttr('disabled');
        $('#step2CheckVoter').removeAttr('disabled');
        $('#step2CheckPan').removeAttr('disabled');
        $('#aadharNumber').attr('readonly',false);
        $('#dlNumber').attr('readonly',false);
        $('#panNumber').attr('readonly',false);
        $('#voterId').attr('readonly',false);
        $('#idTypeDiv').removeClass('d-none');
        $('#genderdiv').addClass('d-none');
        $('#aadharIdentity').addClass('d-none');
        $('#panNumber').removeAttr('name');
        $('#voterId').removeAttr('name');
        $('#dlNumber').removeAttr('name');
        $('#aadharNumber').removeAttr('name');
        
        $('#aadharNumber').attr('required',false);
        $('#voterIdentity').addClass('d-none');
        $('#voterId').attr('required',false);
        $('#panIdentity').addClass('d-none');
        $('#panNumber').attr('required',false);
        $('#dlIdentity').addClass('d-none');
        $('#dlNumber').attr('required',false);
    })
    
    $('#btnPanClear').click(function()
    {
        $('#step2Form')[0].reset();
        $('#step2CheckAadhar').removeAttr('disabled');
        $('#step2CheckDl').removeAttr('disabled');
        $('#step2CheckVoter').removeAttr('disabled');
        $('#step2CheckPan').removeAttr('disabled');
        $('#aadharNumber').attr('readonly',false);
        $('#dlNumber').attr('readonly',false);
        $('#panNumber').attr('readonly',false);
        $('#voterId').attr('readonly',false);
        $('#idTypeDiv').removeClass('d-none');
        $('#genderdiv').addClass('d-none');
        $('#aadharIdentity').addClass('d-none');
        $('#panNumber').removeAttr('name');
        $('#voterId').removeAttr('name');
        $('#dlNumber').removeAttr('name');
        $('#aadharNumber').removeAttr('name');
        
        $('#aadharNumber').attr('required',false);
        $('#voterIdentity').addClass('d-none');
        $('#voterId').attr('required',false);
        $('#panIdentity').addClass('d-none');
        $('#panNumber').attr('required',false);
        $('#dlIdentity').addClass('d-none');
        $('#dlNumber').attr('required',false);
    })
    
    $('#btnVoterClear').click(function()
    {
        $('#step2Form')[0].reset();
        $('#step2CheckAadhar').removeAttr('disabled');
        $('#step2CheckDl').removeAttr('disabled');
        $('#step2CheckVoter').removeAttr('disabled');
        $('#step2CheckPan').removeAttr('disabled');
        $('#aadharNumber').attr('readonly',false);
        $('#dlNumber').attr('readonly',false);
        $('#panNumber').attr('readonly',false);
        $('#voterId').attr('readonly',false);
        $('#idTypeDiv').removeClass('d-none');
        $('#genderdiv').addClass('d-none');
        $('#aadharIdentity').addClass('d-none');
        $('#panNumber').removeAttr('name');
        $('#voterId').removeAttr('name');
        $('#dlNumber').removeAttr('name');
        $('#aadharNumber').removeAttr('name');
        
        $('#aadharNumber').attr('required',false);
        $('#voterIdentity').addClass('d-none');
        $('#voterId').attr('required',false);
        $('#panIdentity').addClass('d-none');
        $('#panNumber').attr('required',false);
        $('#dlIdentity').addClass('d-none');
        $('#dlNumber').attr('required',false);
    })
    
    $('#btnAadharClear').click(function()
    {
        $('#step2Form')[0].reset();
        $('#step2CheckAadhar').removeAttr('disabled');
        $('#step2CheckDl').removeAttr('disabled');
        $('#step2CheckVoter').removeAttr('disabled');
        $('#step2CheckPan').removeAttr('disabled');
        $('#aadharNumber').attr('readonly',false);
        $('#dlNumber').attr('readonly',false);
        $('#panNumber').attr('readonly',false);
        $('#voterId').attr('readonly',false);
        $('#idTypeDiv').removeClass('d-none');
        $('#genderdiv').addClass('d-none');
        $('#aadharIdentity').addClass('d-none');
        $('#panNumber').removeAttr('name');
        $('#voterId').removeAttr('name');
        $('#dlNumber').removeAttr('name');
        $('#aadharNumber').removeAttr('name');
        
        $('#aadharNumber').attr('required',false);
        $('#voterIdentity').addClass('d-none');
        $('#voterId').attr('required',false);
        $('#panIdentity').addClass('d-none');
        $('#panNumber').attr('required',false);
        $('#dlIdentity').addClass('d-none');
        $('#dlNumber').attr('required',false);
    })
    
    let camera_button = document.querySelector("#start-camera");
    let video = document.querySelector("#video");
    let click_button = document.querySelector("#click-photo");
    let canvas = document.querySelector("#canvas");
    let stream = null;
    click_button.addEventListener('click', function() {
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
    let image_data_url = canvas.toDataURL('image/jpeg');
    $('#videodiv').addClass('d-none');
    $('#canvasdiv').removeClass('d-none');
    $('#mainPhotoSelected').val(image_data_url);
    $('#clickdiv').addClass('d-none');
    $('#retake').removeClass('d-none');
    });
    
    $('.close').click(function()
    {
    location.reload();
    })
    
    $('#retake button').click(function(){
    $('#videodiv').removeClass('d-none');
    $('#canvasdiv').addClass('d-none');
    $('#mainPhotoSelected').val();
    $('#clickdiv').removeClass('d-none');
    $('#retake').addClass('d-none');
    })
    
    <?php 
        if($pn == 1)
        {
    ?>
    
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
                    
                    data.append('IdNumber',$('#aadharNumber').val());   
                }
            }
            if(idType == 'voter')
            {
                label = 'Voter Id';
                if($('#voterId').val() != '')
                {
                    count = 1;
                    data.append('IdNumber',$('#voterId').val());
                }
            }
            if(idType == 'pan')
            {
                label = 'PAN Number';
                if($('#panNumber').val() != '')
                {
                    count = 1;
                    data.append('IdNumber',$('#panNumber').val());
                }
            }
            if(idType == 'dl')
            {
                label = 'Driving License Number';
                if($('#dlNumber').val() != '')
                {
                    count = 1;
                    data.append('IdNumber',$('#dlNumber').val());
                }
            }
            if(idType == 'gold')
            {
                label = 'Gold HUID Number';
                if($('#huIdNumber').val() != '')
                {
                    count = 1;
                    data.append('IdNumber',$('#huIdNumber').val());
                }
            }
            if(idType == 'vehicle')
            {
                label = 'Vehicle Number';
                if($('#vehicleNumber').val() != '')
                {
                    count = 1;
                    data.append('IdNumber',$('#vehicleNumber').val());
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
                    url:'<?php echo base_url(); ?>police/checkInactiveInfoAfterLogin',
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
                            window.open('<?php echo base_url(); ?>find-general-person?Id='+parse.id,'_blank');
                            location.reload();
                        }
                        else{
                            if(parse.status == 'error')
                            {
                                toastr.error(parse.message);
                                $('.crop_image').removeAttr('disabled');
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
                                        $('.crop_image').removeAttr('disabled');
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
    
    <?php }else{ ?>
    
    $('#btnInactiveSave').click(function()
    {
        if($('#mainPhotoSelected').val() != '')
        {
            $(this).attr('disabled','disabled');      
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('photo',$('#mainPhotoSelected').val());
            $.ajax({
                url:'<?php echo base_url(); ?>landing/checkInactiveFace',
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
                        location.href="<?php echo base_url(); ?>find-general-person?Id="+ parse.id;
                    }
                    else{
                        toastr.error(parse.message);
                        $('.crop_image').removeAttr('disabled');
                        $('#btnInactiveSave').removeAttr('disabled');
                    }  
                }
            })
        }else{
            toastr.error('Please capture the photo to continue');
        }
    })
    
    <?php } ?>
    
    <?php 
        $getInactiveSettings = $this->db->query('select * from settings where name="inactiveMode"')->result_array();
    ?>
    
    async function openFrontCamera()
    {
        if(stream != null)
        {
            stream.getTracks().forEach(function(track) {
              track.stop();
            });   
        }
        $('#backcameradiv').removeClass('d-none');
        $('#frontcameradiv').addClass('d-none');
        stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false,facingMode:'user' });
        video.srcObject = stream;
        $('#cameraModal').modal('show');
        swal.close();
    }
    
    async function openBackCamera()
    {
        <?php 
            if($getInactiveSettings[0]['value'] == 1)
            {
        ?>
            if(stream != null)
            {
                stream.getTracks().forEach(function(track) {
                  track.stop();
                });   
            }
            $('#backcameradiv').addClass('d-none');
            $('#frontcameradiv').removeClass('d-none');
            stream = await navigator.mediaDevices.getUserMedia({ video: {facingMode:'environment'}, audio: false});
            video.srcObject = stream;
            $('#cameraModal').modal('show');
            swal.close();
        <?php }else{ ?>
            Swal.fire({
                iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                customClass: {
                    icon: 'no-border',
                    htmlContainer:'px-0'
                },
                allowOutsideClick:false,
                html: '<div class="row mt-3 mx-0 justify-content-center" style="width:15em;"><div class="col-lg-12 col-md-12"><h6 style="color:red;font-weight:bold;">No More Information Enabled By the User !</h6></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="javascript:void(0)" onclick="back(this)" class="btn btn-primary btn-style-primary"><i class="fa fa-search"></i> Search Another</a></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="<?php echo base_url(); ?>user-dashboard" class="btn btn-success save">Go To Dashboard</a></div>',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:false,
            })
        <?php } ?>
    }
    
    function openCamera()
    {
        $('#fileMobInput').click();
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
            $('#mobileimage').attr('src',response);
            $('#mainPhotoSelected').val(response);
            // $('#uploadimageModal').modal('hide');
            $('#clickdiv').addClass('d-none');
            $('#bothcameradiv').addClass('d-none');
           	$('#videodiv').addClass('d-none');
           	$('#btnInactiveSave').click();
           	$('.crop_image').attr('disabled','disabled');
           	$('#mobileimagediv').removeClass('d-none');
            $('#retakeMobile').removeClass('d-none');
        })
    });
    
    $('#fileMobInput').on('change', async function(e)
    {
        if($(this)[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              })
            }
            reader.readAsDataURL($(this)[0].files[0]);
            $('#uploadimageModal').modal('show');   
            swal.close();
        }
    })
    
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
    
    function openCameraPopup()
    {
        <?php 
            if($getInactiveSettings[0]['value'] == 1)
            {
        ?>
        Swal.fire({
            allowOutsideClick:false,
            html: '<div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-10 col-md-6"><input type="file" hidden id="uploadFile" onchange="previewFile(this)" accept="image/*"><h5 class="text-center">Sample Photo</h5><img src="<?php echo base_url(); ?>assets/images/facematch.webp" style="width:100%;height:200px;"><input type="hidden" name="mainPhotoSelected" id="mainPhotoSelected"></div></div><div class="row mx-0 mt-3 justify-content-center" style="display:none" id="element"><div class="col-lg-10 col-md-6"><h5 class="text-center">Preview Photo</h5><img src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:200px;" id="mainPhotoUploaded"></div></div><div class="row mx-0 mt-3 justify-content-center" id="uploadBtnDiv"><div class="col-lg-10 col-md-6 text-center"><button type="button" class="btn w-100 btn-primary btn-style-four" id="uploadPhotoBtn" onclick="showFileUpload()">Upload Photo <i class="fa fa-upload"></i></button></div></div><div class="row mx-0 mt-4 mb-3 justify-content-center nextBtnDiv d-none"><div class="col-6 px-1 d-none" id="retakebtndiv"><button type="button" class="btn w-100 btn-primary btn-style-yellow" id="retakePhotoBtn" onclick="showFileUpload()">Retake <i class="fa fa-upload"></i></button></div><div class="col-lg-6 px-1 col-sm-12 col-6 col-md-6"><button type="button" id="btn3" onclick="nextInactive(this)" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Next <i class="fa fa-arrow-circle-right"></i></button></div></div>',
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:false,
        }).then((result) => {
            if(result.isDismissed)
            {
                $('#step2CheckAadhar').removeAttr('disabled');
                $('#step2CheckVoter').removeAttr('disabled');
                $('#step2CheckDl').removeAttr('disabled');
                $('#step2CheckPan').removeAttr('disabled');
                $('#step2CheckGold').removeAttr('disabled');
                $('#step2CheckVehicle').removeAttr('disabled');
            }
        })
        <?php }else{ ?>
        Swal.fire({
            iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
            customClass: {
                icon: 'no-border',
                htmlContainer:'px-0'
            },
            allowOutsideClick:false,
            html: '<div class="row mt-3 mx-0 justify-content-center" style="width:15em;"><div class="col-lg-12 col-md-12"><h6 style="color:red;font-weight:bold;">No More Information Enabled By the User !</h6></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="javascript:void(0)" onclick="location.reload();" class="btn btn-primary btn-style-primary"><i class="fa fa-search"></i> Search Another</a></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="<?php echo base_url(); ?>user-dashboard" class="btn btn-success save">Go To Dashboard</a></div>',
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:false,
        }).then((result) => {
            if(result.isDismissed)
            {
                $('#step2CheckAadhar').removeAttr('disabled');
                $('#step2CheckVoter').removeAttr('disabled');
                $('#step2CheckDl').removeAttr('disabled');
                $('#step2CheckPan').removeAttr('disabled');
                $('#step2CheckGold').removeAttr('disabled');
                $('#step2CheckVehicle').removeAttr('disabled');
            }
        })
        <?php } ?>
    }
    
    $('#step2CheckAadhar').click(function()
    {
        $('#step2CheckAadhar').attr('disabled','disabled');
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
                
                data.append('IdNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('IdNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('IdNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('IdNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'danger',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#step2CheckAadhar').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckAadhar').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>police/checkPersonIdAfterLogin',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#idType').val();
                    if(parse.status == 'success')
                    {   
                        let typeLabel = '';
                        if(parse.isLapata == 1)
                        {
                            typeLabel += '<b> Missing /</b>';
                        }else{
                            if(parse.isMissing == 1)
                            {
                                typeLabel += '<b> Missing /</b>';
                            }   
                        }
                        if(parse.isWanted)
                        {
                            typeLabel = '<b> Wanted /</b>';
                        }
                        typeLabel = (typeLabel.slice(0,typeLabel.length - 5)) + '</b>';
                        if(parse.isLapata != 1)
                        {
                            if(parse.isVisible == '1')
                            {
                                if(parse.isCriminal == 1)
                                {
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         if(parse.personName != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                                         }
                                         html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                                         if(parse.gender != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                                         }
                                         if(parse.age != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                                         }
                                         if(parse.address != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }
                                }else{
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }      
                                }
                            }else{
                                if(parse.isWanted == 1 || parse.isCriminal == 1)
                                {
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckAadhar').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckAadhar').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         if(parse.personName != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                                         }
                                         html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                                         if(parse.gender != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                                         }
                                         if(parse.age != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                                         }
                                         if(parse.address != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }   
                                }else{
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         let html = '';
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckAadhar').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckAadhar').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }   
                                }
                            }
                        }else{
                            let html = '';
                             if(parse.isVerified == 1)
                             {
                                 html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                             }else{
                                 html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band:- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                             }
                             Swal.fire({
                                allowOutsideClick:false,
                                html: html,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href="<?php echo base_url(); ?>landing/checkStep2";
                                }else if(result.isDismissed)
                                {
                                    location.reload();
                                }
                            })
                        }
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#step2CheckAadhar').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                         }else{
                                if(parse.status == 'unknown')
                                {
                                    let html = '';
                                    if(parse.isUserFound == 1)
                                    {
                                        html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
                                    }else{
                                        html = '<div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
                                    }
                                    Swal.fire({
                                        allowOutsideClick:false,
                                        html: html,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href="<?php echo base_url(); ?>landing/checkStep2";
                                        }else if(result.isDismissed)
                                        {
                                            location.reload();
                                        }
                                    })
                                }else{
                                    let textMessage = '';
                                    if(idType == 'aadhar')
                                    {
                                        textMessage = 'Aadhar Number';
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
                                    if(!parse.isAadharCorrect)
                                    {
                                        Swal.fire({
                                            title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + $('#aadharNumber').val())+'</strong>',
                                            iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                                            customClass: {
                                                icon: 'no-border'
                                            },
                                            allowOutsideClick:false,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            confirmButtonText:'Please Try Again',
                                            focusConfirm: false,
                                            showConfirmButton:true
                                        }).then((result) => {
                                            $('#step2CheckAadhar').removeAttr('disabled');
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
                }
            })
        }
    })
    
    $('#step2CheckDl').click(function()
    {
        $('#step2CheckDl').attr('disabled','disabled');
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
                
                data.append('IdNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('IdNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('IdNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('IdNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'danger',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#step2CheckDl').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckDl').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>police/checkPersonIdAfterLogin',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#idType').val();
                    if(parse.status == 'success')
                    {   
                        let typeLabel = '';
                        if(parse.isLapata == 1)
                        {
                            typeLabel += '<b> Missing /</b>';
                        }else{
                            if(parse.isMissing == 1)
                            {
                                typeLabel += '<b> Missing /</b>';
                            }   
                        }
                        if(parse.isWanted)
                        {
                            typeLabel = '<b> Wanted /</b>';
                        }
                        typeLabel = (typeLabel.slice(0,typeLabel.length - 5)) + '</b>';
                        if(parse.isLapata != 1)
                        {
                            if(parse.isVisible == '1')
                            {
                                if(parse.isWanted == 1 || parse.isCriminal == 1)
                                {
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         if(parse.personName != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                                         }
                                         html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                                         if(parse.gender != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                                         }
                                         if(parse.age != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                                         }
                                         if(parse.address != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }
                                }else{
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }      
                                }
                            }else{
                                if(parse.isWanted == 1 || parse.isCriminal == 1)
                                {
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckDl').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckDl').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         if(parse.personName != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                                         }
                                         html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                                         if(parse.gender != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                                         }
                                         if(parse.age != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                                         }
                                         if(parse.address != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }   
                                }else{
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         let html = '';
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckDl').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckDl').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }   
                                }
                            }  
                        }else{
                            let html = '';
                             if(parse.isVerified == 1)
                             {
                                 html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                             }else{
                                 html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                             }
                             Swal.fire({
                                allowOutsideClick:false,
                                html: html,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href="<?php echo base_url(); ?>landing/checkStep2";
                                }else if(result.isDismissed)
                                {
                                    location.reload();
                                }
                            })
                        }
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#step2CheckDl').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                         }else{
                            if(parse.status == 'unknown')
                            {
                                let html = '';
                                if(parse.isUserFound == 1)
                                {
                                    html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
                                }else{
                                    html = '<div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
                                }
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href="<?php echo base_url(); ?>landing/checkStep2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                            }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Number';
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
                                if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + ($('#dlNumber').val()).toUpperCase())+'</strong>',
                                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                                        customClass: {
                                            icon: 'no-border'
                                        },
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        confirmButtonText:'Please Try Again',
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckDl').removeAttr('disabled');
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
                }
            })
        }
    })
    
    $('#step2CheckVoter').click(function()
    {
        $('#step2CheckVoter').attr('disabled','disabled');
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
                
                data.append('IdNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('IdNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('IdNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('IdNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'danger',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#step2CheckVoter').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckVoter').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>police/checkPersonIdAfterLogin',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#idType').val();
                    if(parse.status == 'success')
                    {   
                        let typeLabel = '';
                        if(parse.isLapata == 1)
                        {
                            typeLabel += '<b> Missing /</b>';
                        }else{
                            if(parse.isMissing == 1)
                            {
                                typeLabel += '<b> Missing /</b>';
                            }   
                        }
                        if(parse.isWanted)
                        {
                            typeLabel = '<b> Wanted /</b>';
                        }
                        typeLabel = (typeLabel.slice(0,typeLabel.length - 5)) + '</b>';
                        if(parse.isLapata != 1)
                        {
                            if(parse.isVisible == '1')
                            {
                                if(parse.isWanted == 1 || parse.isCriminal == 1)
                                {
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         if(parse.personName != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                                         }
                                         html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                                         if(parse.gender != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                                         }
                                         if(parse.age != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                                         }
                                         if(parse.address != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }
                                }else{
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }      
                                }
                            }else{
                                if(parse.isWanted == 1 || parse.isCriminal == 1)
                                {
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckVoter').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckVoter').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         if(parse.personName != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                                         }
                                         html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                                         if(parse.gender != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                                         }
                                         if(parse.age != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                                         }
                                         if(parse.address != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }   
                                }else{
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         let html = '';
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckVoter').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckVoter').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }   
                                }
                            }
                        }else{
                            let html = '';
                             if(parse.isVerified == 1)
                             {
                                 html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                             }else{
                                 html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band:- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                             }
                             Swal.fire({
                                allowOutsideClick:false,
                                html: html,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href="<?php echo base_url(); ?>landing/checkStep2";
                                }else if(result.isDismissed)
                                {
                                    location.reload();
                                }
                            })
                        }
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#step2CheckVoter').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                         }else{
                            if(parse.status == 'unknown')
                            {
                                let html = '';
                                if(parse.isUserFound == 1)
                                {
                                    html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
                                }else{
                                    html = '<div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
                                }
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href="<?php echo base_url(); ?>landing/checkStep2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                            }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Number';
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
                                if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + ($('#voterId').val()).toUpperCase())+'</strong>',
                                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                                        customClass: {
                                            icon: 'no-border'
                                        },
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        confirmButtonText:'Please Try Again',
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckVoter').removeAttr('disabled');
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
                }
            })
        }
    })
    
    $('#step2CheckPan').click(function()
    {
        $('#step2CheckPan').attr('disabled','disabled');
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
                
                data.append('IdNumber',$('#aadharNumber').val());   
            }
        }
        if(idType == 'voter')
        {
            label = 'Voter Id';
            if($('#voterId').val() != '')
            {
                count = 1;
                data.append('IdNumber',$('#voterId').val());
            }
        }
        if(idType == 'pan')
        {
            label = 'PAN Number';
            if($('#panNumber').val() != '')
            {
                count = 1;
                data.append('IdNumber',$('#panNumber').val());
            }
        }
        if(idType == 'dl')
        {
            label = 'Driving License Number';
            if($('#dlNumber').val() != '')
            {
                count = 1;
                data.append('IdNumber',$('#dlNumber').val());
            }
        }
        data.append('_token','<?php echo $csrf['hash']; ?>');
        if(count == 0)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Enter '+label+'</strong>',
                icon: 'danger',
                allowOutsideClick:false,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#step2CheckPan').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckPan').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>police/checkPersonIdAfterLogin',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#idType').val();
                    if(parse.status == 'success')
                    {   
                        let typeLabel = '';
                        if(parse.isLapata == 1)
                        {
                            typeLabel += '<b> Missing /</b>';
                        }else{
                            if(parse.isMissing == 1)
                            {
                                typeLabel += '<b> Missing /</b>';
                            }   
                        }
                        if(parse.isWanted)
                        {
                            typeLabel = '<b> Wanted /</b>';
                        }
                        typeLabel = (typeLabel.slice(0,typeLabel.length - 5)) + '</b>';
                        if(parse.isLapata != 1)
                        {
                            if(parse.isVisible == '1')
                            {
                                if(parse.isWanted == 1 || parse.isCriminal == 1)
                                {
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         if(parse.personName != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                                         }
                                         html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                                         if(parse.gender != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                                         }
                                         if(parse.age != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                                         }
                                         if(parse.address != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }
                                }else{
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                location.href="<?php echo base_url(); ?>landing/checkStep2";
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }      
                                }
                            }else{
                                if(parse.isWanted == 1 || parse.isCriminal == 1)
                                {
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         let html = '';
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckPan').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckPan').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }else{
                                         let html = '';
                                         if(parse.image != '')
                                         {
                                             html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                         }
                                         html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         if(parse.personName != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                                         }
                                         html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                                         if(parse.gender != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                                         }
                                         if(parse.age != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                                         }
                                         if(parse.address != '')
                                         {
                                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }   
                                }else{
                                    if(parse.isRegistered == 0 && parse.isMissing == 1)
                                    {
                                         let html = '';
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false,
                                        }).then((result) => {
                                            if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                                     {
                                         let html = '';
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                         if(parse.isVerified == 1)
                                         {
                                             html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }else{
                                             html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                         }
                                         Swal.fire({
                                            allowOutsideClick:false,
                                            html: html,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckPan').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })
                                     }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                                     {
                                         let typediv = '';
                                         if(typeLabel != '</b>')
                                         {
                                             typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                         }
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            html:
                                                '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    allowOutsideClick:false,
                                                    icon : 'info',
                                                    html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                                    showCloseButton: true,
                                                    showCancelButton: false,
                                                    focusConfirm: false,
                                                    showConfirmButton:true,
                                                    'confirmButtonText':'Open Camera',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        showCameraModal();      
                                                        $('#step2CheckPan').removeAttr('disabled');
                                                    }else if(result.isDismissed)
                                                    {
                                                        location.reload();
                                                    }
                                                })   
                                            }else if(result.isDismissed)
                                            {
                                                location.reload();
                                            }
                                        })   
                                     }   
                                }
                            }   
                        }else{
                            let html = '';
                             if(parse.isVerified == 1)
                             {
                                 html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                             }else{
                                 html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>police/criminalRecordAfterLogin" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band:- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+((parse.address != ',') ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+parse.isOnlyUser+','+parse.personId+')"> Click Here</button></div>';
                             }
                             Swal.fire({
                                allowOutsideClick:false,
                                html: html,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href="<?php echo base_url(); ?>landing/checkStep2";
                                }else if(result.isDismissed)
                                {
                                    location.reload();
                                }
                            })
                        }
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#step2CheckPan').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                         }else{
                            if(parse.status == 'unknown')
                            {
                                let html = '';
                                if(parse.isUserFound == 1)
                                {
                                    html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
                                }else{
                                    html = '<div class="form-group"><img src="'+parse.photo+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">APPEAL FOR IDENTIFICATION</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadharNumber+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age Band :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2(0,``)"> Click Here</button></div>';
                                }
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href="<?php echo base_url(); ?>landing/checkStep2";
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                            }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Number';
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
                                if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + ($('#panNumber').val()).toUpperCase())+'</strong>',
                                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                                        customClass: {
                                            icon: 'no-border'
                                        },
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        confirmButtonText:'Please Try Again',
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckPan').removeAttr('disabled');
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
                }
            })
        }
    })
    
    $('#step2CheckVehicle').click(function()
    {
        $('#step2CheckVehicle').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        label = 'Vehicle Number';
        if($('#vehicleNumber').val() != '')
        {
            count = 1;
            data.append('IdNumber',$('#vehicleNumber').val());
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
                    $('#step2CheckVehicle').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckVehicle').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>police/checkPersonIdAfterLogin',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#idType').val();
                    if(parse.status == 'success')
                    {   
                        $('#step2CheckVehicle').removeAttr('disabled');
                        window.open('<?php echo base_url(); ?>police/search_person_by_identity?pn=2','_blank');
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#step2CheckVehicle').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                         }else{
                            if(parse.status == 'unknown')
                            {
                                $('#step2CheckVehicle').removeAttr('disabled');
                                window.open('<?php echo base_url(); ?>landing/search_person_by_identity?pn=2','_blank');
                            }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Number';
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
                                if(idType == 'vehicle')
                                {
                                    textMessage = 'Vehicle Number';
                                }
                                if(idType == 'gold')
                                {
                                    textMessage = 'Huid Number';
                                }
                                if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + ($('#vehicleNumber').val()).toUpperCase())+'</strong>',
                                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                                        customClass: {
                                            icon: 'no-border'
                                        },
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        confirmButtonText:'Please Try Again',
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckVehicle').removeAttr('disabled');
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
                                        if(idType == 'vehicle')
                                        {
                                            $('#vehicleNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'gold')
                                        {
                                            $('#huIdNumber').attr('readonly',false);   
                                        }
                                    })
                                }   
                             }
                        }
                    }
                }
            })
        }
    })
    
    $('#step2CheckGold').click(function()
    {
        $('#step2CheckGold').attr('disabled','disabled');
        let data = new FormData();
        let idType = $('#idType').val();
        let label = '';
        let count = 0;
        data.append('idType',$('#idType').val());   
        label = 'Gold HUID Number';
        if($('#huIdNumber').val() != '')
        {
            count = 1;
            data.append('IdNumber',$('#huIdNumber').val());
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
                    $('#step2CheckGold').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckGold').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>police/checkPersonIdAfterLogin',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#idType').val();
                    if(parse.status == 'success')
                    {   
                        $('#step2CheckGold').removeAttr('disabled');
                        window.open('<?php echo base_url(); ?>police/search_person_by_identity?pn=2','_blank');
                    }
                    else{
                        if(parse.status == 'error')
                        {
                            toastr.error(parse.message);
                            $('#step2CheckGold').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                        }else{
                            if(parse.status == 'unknown')
                            {
                                $('#step2CheckGold').removeAttr('disabled');
                                window.open('<?php echo base_url(); ?>police/search_person_by_identity?pn=2','_blank');
                            }else{
                                let textMessage = '';
                                if(idType == 'aadhar')
                                {
                                    textMessage = 'Aadhar Number';
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
                                if(idType == 'vehicle')
                                {
                                    textMessage = 'Vehicle Number';
                                }
                                if(idType == 'gold')
                                {
                                    textMessage = 'Huid Number';
                                }
                                if(!parse.isAadharCorrect)
                                {
                                    Swal.fire({
                                        title: '<strong style="font-size:1rem;color:red;"><span style="color:black;">Oops! No Record Found</span><br>'+(textMessage + '- ' + ($('#huIdNumber').val()).toUpperCase())+'</strong>',
                                        iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:150px;">',
                                        customClass: {
                                            icon: 'no-border'
                                        },
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        confirmButtonText:'Please Try Again',
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $('#step2CheckGold').removeAttr('disabled');
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
                                        if(idType == 'vehicle')
                                        {
                                            $('#vehicleNumber').attr('readonly',false);   
                                        }
                                        if(idType == 'gold')
                                        {
                                            $('#huIdNumber').attr('readonly',false);   
                                        }
                                    })
                                }   
                             }    
                        }
                    }
                }
            })
        }
    })
    
    function showInputAccordingly(val)
    {
        if(val == '')
        {
            $('#aadharIdentity').addClass('d-none');
            
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            $('#vehicleNumber').removeAttr('name');
            $('#huIdNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',false);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huIdNumber').attr('required',false);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'aadhar')
        {
            $('#aadharIdentity').removeClass('d-none');
            
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').attr('name','aadhar_id');
            $('#vehicleNumber').removeAttr('name');
            $('#huIdNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huIdNumber').attr('required',false);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'voter')
        {
            $('#aadharIdentity').addClass('d-none');
            
            $('#panNumber').removeAttr('name');
            $('#voterId').attr('name','voterId');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            $('#vehicleNumber').removeAttr('name');
            $('#huIdNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',false);
            $('#voterIdentity').removeClass('d-none');
            $('#voterId').attr('required',true);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huIdNumber').attr('required',false);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'pan')
        {
            $('#panNumber').attr('name','panNumber');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            $('#vehicleNumber').removeAttr('name');
            $('#huIdNumber').removeAttr('name');
            
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').removeClass('d-none');
            $('#panNumber').attr('required',true);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huIdNumber').attr('required',false);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'dl')
        {
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').attr('name','dlNumber');
            $('#aadharNumber').removeAttr('name');
            $('#vehicleNumber').removeAttr('name');
            $('#huIdNumber').removeAttr('name');
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').removeClass('d-none');
            $('#dlNumber').attr('required',true);
            $('#goldIdentity').addClass('d-none');
            $('#huIdNumber').attr('required',false);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'gold')
        {
            $('#panNumber').removeAttr('name');
            $('#huIdNumber').attr('name','huIdNumber');
            $('#vehicleNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').attr('name','dlNumber');
            $('#aadharNumber').removeAttr('name');
            
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',false);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').removeClass('d-none');
            $('#huIdNumber').attr('required',true);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'vehicle')
        {
            $('#panNumber').removeAttr('name');
            $('#voterId').removeAttr('name');
            $('#dlNumber').removeAttr('name');
            $('#aadharNumber').removeAttr('name');
            $('#vehicleNumber').attr('name','vehicleNumber');
            $('#huIdNumber').removeAttr('name');
            
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huIdNumber').attr('required',false);
            $('#vehicleIdentity').removeClass('d-none');
            $('#vehicleNumber').attr('required',true);
        }
    }
    
    function redirectToStep2(type,id)
    {
        if(type)
        {
            window.open('<?php echo base_url(); ?>find-general-person?Id='+id,'_blank');
        }else{
            window.open('<?php echo base_url(); ?>police/search_person_by_identity?pn=2','_blank');
        }
    }
    
    function checkLength(val,limit)
    {
        if(val.length == limit)
        {
            return false;
        }else{
            return true;
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
            window.open(url,'_blank');
        }else if(type == 'lapata'){
            url = '<?php echo base_url(); ?>find-lapata-person?id='+appNo;
            window.open(url,'_blank');
        }else if(type == 'criminal')
        {
            url = '<?php echo base_url(); ?>find-criminal-person?Id='+appNo;
            window.open(url,'_blank');
        }else if(type == 'wanted')
        {
            url = '<?php echo base_url(); ?>find-wanted-person?Id='+appNo;
            window.open(url,'_blank');
        }else if(type == 'general')
        {
            $.ajax({
                url:'<?php echo base_url(); ?>landing/checkVisibility?Id='+appNo,
                type:'get',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        url = '<?php echo base_url(); ?>find-general-person?Id='+appNo;          
                        window.open(url,'_blank');   
                    }else{
                        openBackCamera();
                    }
                }
            })
        }else if(type == 'unknown')
        {
            url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
            window.open(url,'_blank');
        }
    }
    
    function back(ele)
	{
	    window.close();
	}
</script>