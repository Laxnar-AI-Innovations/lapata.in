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
      <h1>Search Person Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Search Person Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row justify-content-center">
        <div class="col-xl-12 p-0 <?php if($pn != 1){ echo "d-none"; } ?>">

          <div class="card">
            <div class="card-body pt-3 p-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4 class="text-danger mb-0">Choose Search Option</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <div class="row">
                            <div class="plans col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-lg-3 mt-0">
                                <label class="plan basic-plan" for="type1">
                                  <input checked type="radio" value="2" name="type" id="type1" />
                                  <div class="plan-content">
                                    <img loading="lazy" src="<?php echo base_url(); ?>assets/img/identity.png" alt="" />
                                    <div class="plan-details">
                                        <span>Search By Identity</span>
                                    </div>
                                  </div>
                                </label>
                              </div>
                              <div class="plans col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-lg-3 mt-0">
                                <label class="plan basic-plan" for="type2">
                                  <input value="3" type="radio" name="type" id="type2" />
                                  <div class="plan-content">
                                    <img loading="lazy" src="<?php echo base_url(); ?>assets/img/fingerprint.png" alt="" />
                                    <div class="plan-details">
                                      <span>Search By Biometric</span>
                                    </div>
                                  </div>
                                </label>
                              </div>
                              <div class="plans col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-lg-3 mt-0">
                                <label class="plan basic-plan" for="type3">
                                  <input type="radio" value="3" name="type" id="type3" />
                                  <div class="plan-content">
                                    <img loading="lazy" src="<?php echo base_url(); ?>assets/img/qr.webp" alt="" />
                                    <div class="plan-details">
                                      <span>Search By QR Code</span>
                                    </div>
                                  </div>
                                </label>
                              </div>
                              <div class="plans col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-lg-3 mt-0">
                                <label class="plan basic-plan" for="type4">
                                  <input type="radio" value="3" name="type" id="type4" />
                                  <div class="plan-content">
                                    <img loading="lazy" src="<?php echo base_url(); ?>assets/img/filter.png" alt="" />
                                    <div class="plan-details">
                                      <span>Search Person By Filter</span>
                                    </div>
                                  </div>
                                </label>
                              </div>
                              <div class="plans col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-lg-3 mt-0">
                                <label class="plan basic-plan" for="type5">
                                  <input type="radio" value="3" name="type" id="type5" />
                                  <div class="plan-content">
                                    <img loading="lazy" src="<?php echo base_url(); ?>assets/img/male.png" alt="" />
                                    <div class="plan-details">
                                      <span>Search Person By Face</span>
                                    </div>
                                  </div>
                                </label>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group mt-4 col-lg-3 col-md-4 col-sm-12">
                                <button type="button" class="next btn btn-primary w-100" onclick="showAccordingly()">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div>
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
                                <?php 
                                    $getGoldType = $this->db->query('select * from goldType')->result_array();
                                ?>
                                <select class="form-control" name="goldType" id="goldType">
                                    <option value="">All</option>
                                    <?php 
                                        foreach($getGoldType as $k=>$v)
                                        {
                                    ?>
                                    <option value="<?= $v['Id']; ?>"><?= $v['Name']; ?></option>
                                    <?php } ?>
                                </select>
                                <label for="goldType" id="goldTypeLabelForm" class="ps-2">Select Gold Type (optional)</label>
                            </div>
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
        <div class="col-xl-8 px-0 <?php if($pn != 3){ echo "d-none"; } ?>">

          <div class="card">
            <div class="card-body px-0">
                <div class="row mx-0">
                <?php 
                    if(isset($_SESSION['searchId']))
                    {
                        $getDetails= $this->db->query('select * from searchpersonhistory where Id='.$_SESSION['searchId'])->result_array();
                        if($getDetails[0]['isLapata'] == 1)
                        {
                            $unknownperson = $this->db->query('select * from unknown_person where id='.$getDetails[0]['lapataId'])->result_array();
                ?>
                    <div class="px-0 col-lg-12 col-md-12 col-sm-12 d-flex flex-column mx-lg-auto">
                        <div class="row mx-0 align-items-center" style="background:#f78b77;padding:0.5rem;">
                            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                <h1 class="text-light mb-0" style="font-size: 1.5rem;"><b>लापता</b></h1>
                            </div>
                        </div>
                        <div class="row mx-0 align-items-center justify-content-center">
                            <div class="col-md-6 col-sm-12 col-lg-6 px-0">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" id="photosspan">
                                        <?php
                                            $getLatestUserPhotos = $this->db->query('select * from unknownphotos where unknownId='.$unknownperson[0]['id'])->result_array();
                                            if(count($getLatestUserPhotos) > 0)
                                            {
                                                foreach($getLatestUserPhotos as $k=>$v)
                                                {
                                        ?>
                                        <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                            <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip">
                                                <img src="<?php echo base_url().''.$v['photourl']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                            </a>
                                        </div>
                                        <?php } }else{ ?>
                                        <div class="carousel-item active">
                                            <a href="<?php echo base_url(); ?><?php echo $unknownperson[0]['Photo']; ?>"  data-lightbox="roadtrip">
                                                <img src="<?php echo base_url().''.$unknownperson[0]['Photo']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mt-3 mx-0">
                            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                <h6 class="mb-0">Application No: - <span style="color:back;"><?php echo $unknownperson[0]['Application_no'];?></span></h6>
                            </div>
                        </div>
                        <div class="row mx-0 justify-content-center">
                            <div class="col-lg-6 col-md-6 col-12 px-0" style="top:-50px!important;background:white;height:auto;min-height:150px;">
                                <div class="row mx-0 align-items-center justify-content-center">
                                    <div class="col-md-12 px-0 col-12 mt-1 col-sm-12 col-lg-12 text-center">
                                        <h5 class="text-dark text-uppercase"><b id="personname">Name:- <?php echo ($unknownperson[0]['person_name'] != '' ? $unknownperson[0]['person_name'] : 'UNKNOWN'); ?></b></h5>
                                    </div>
                                </div>
                                <div class="row align-items-center mx-0">
                                    <div class="col-6">
                                        <button type="button" style="color: white!important;background:#616161!important;width:100%;padding:0.4rem 1rem;"><b><?php echo ($unknownperson[0]['Gender'] == 'boy' ? 'Male' : 'Female'); ?></b></button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" style="color: white!important;background:#616161!important;width:100%;padding:0.4rem 1rem;"><b><?php echo $unknownperson[0]['Age']; ?> YEARS</b></button>
                                    </div>
                                </div>
                                <?php 
                                    if($unknownperson[0]['Message'] != '')
                                    {
                                ?>
                                <div class="row align-items-center mt-3 mx-0">
                                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                        <p class="mb-0"><?php echo $unknownperson[0]['Message'] ?></p>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php 
                                    $getUserDetail = $this->db->query('select * from user where uid='.$unknownperson[0]['userId'])->result_array();
                                ?>
                                <div class="row align-items-center mt-3 mx-0">
                                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                        <h6 class="mb-0">Uploaded By: - <?php echo $getUserDetail[0]['aadharname'].', '. $getUserDetail[0]['state'].', '.$getUserDetail[0]['district'];?></h6>
                                    </div>
                                </div>
                                <div class="row align-items-center mt-3 mx-0">
                                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                        <h6 class="mb-0">Uploaded Date: - <span style="color:grey;"><?php echo date('d-m-Y H:i A',strtotime($unknownperson[0]['dateCreated']));?></span></h6>
                                    </div>
                                </div>
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes'){
                                ?>
                                <?php 
                                    if($unknownperson[0]['well1'] != NULL || $unknownperson[0]['well2'] != NULL || $unknownperson[0]['well3'] != NULL)
                                    {
                                ?>
                                <div class="row align-items-center mx-0 mt-3 justify-content-center" style="position:relative;">
                                    <div class="col-md-12 text-center">
                                        <h6 class="text-dark">
                                            <?php 
                                                if($unknownperson[0]['well1'] != NULL)
                                                {
                                            ?>
                                            <a href="tel:<?php echo $unknownperson[0]['well1']; ?>" class="btn btn-circle btn-sm btn-police1 mt-2">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                            <?php }
                                                if($unknownperson[0]['well2'] != NULL){ 
                                            ?>
                                            <a href="tel:<?php echo $unknownperson[0]['well2']; ?>" class="btn btn-circle btn-sm btn-police2 mt-2">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                            <?php }
                                                if($unknownperson[0]['well3'] != NULL){ 
                                            ?>
                                            <a href="tel:<?php echo $unknownperson[0]['well3']; ?>" class="btn btn-circle btn-sm btn-police3 mt-2">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                            <?php } ?>
                                        </h6>
                                    </div>
                                </div>
                                <?php }else{ 
                                    $mobile = '';
                                    if($unknownperson[0]['policeId'] != NULL)
                                    {
                                        $mobile = $getPoliceDetail[0]['registration_mobile'];
                                    }else{
                                        $mobile = $getngoDetail[0]['registration_mobile'];
                                    }
                                    
                                ?>
                                    <div class="row align-items-center mx-0 mt-3 justify-content-center" style="position:relative;">
                                        <div class="col-md-12 text-center">
                                            <h6 class="text-dark">
                                                <a href="tel:<?php echo $mobile; ?>" class="btn btn-circle btn-sm btn-police1 mt-2">
                                                    <i class="fa fa-phone"></i>
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php }else{ ?>
                                <div class="row align-items-center my-3 justify-content-center mx-0">
                                    <div class="col-auto text-center">
                                        <h6 class="text-dark mb-0">
                                            <span class="mb-3">To Contact </span>
                                                <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mb-3 mt-md-0">
                                                <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                                     
                                                <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                                							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                                							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                                							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                                							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                                							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                                <path d="M41.1,15.7
                                                							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                                							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                                <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                                							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                                         C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                                </svg>
                                                <span>Click Here</span>
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php          
                        }else{
                            if($getDetails[0]['isMissing'] == 1)
                            {
                                $missingperson = $this->db->query('select * from missingperson where Id in('.$getDetails[0]['missingId'].')')->result_array();
                            }else{
                                $missingperson = array();
                            }
                            if(count($missingperson) > 0)
                            {
                                $getAllByAadhar = $this->db->query('select * from missingperson where missingaadhar="'.$missingperson[0]['missingaadhar'].'" and isFound=0')->result_array();
                    ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 d-flex flex-column">
                            <div class="row px-3 align-items-center">
                                <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <h5 class="text-danger text-uppercase"><b>Missing</b></h5>
                                            <h5 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;font-size:17px;">Missing Date : <span id="missingdatespan"><?php echo date('d-m-Y',strtotime($missingperson[0]['missingdate'])); ?></span></span></h5>
                                        </div>
                                    </div>
                                    <?php 
                                        $rewardcount = 0;
                                        foreach($getAllByAadhar as $k=>$v)
                                        {
                                            if($v['rewardamount'] != 0)
                                            {
                                                $rewardcount++;
                                    ?>
                                    <?php } } ?>
                                    <?php if($rewardcount > 0){ ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <select class="form-control border border-2 border-danger text-center" style="font-weight:bold;font-size:1.3rem;appearance:auto;" id="reward" onchange="showRewardsAccordingly(this.value)">
                                                <?php 
                                                    foreach($getAllByAadhar as $k=>$v)
                                                    {
                                                        if($v['rewardamount'] != 0)
                                                        {
                                                ?>
                                                <option value="<?php echo $v['Id']; ?>"><b>Reward - ₹<?php echo ($v['rewardamount'] != NULL ? $v['rewardamount'] : '0' ); ?></b></option>
                                                <?php } } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($missingperson[0]['firdate'] != NULL)
                                        {
                                    ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Date : </span> <span id="missingfirdate"><?php echo date('d-m-Y',strtotime($missingperson[0]['firdate'])); ?></span></h6>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($missingperson[0]['firpolicethananame'] != NULL)
                                        {
                                    ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Thana & Address : </span> <span id="firthanaaddress"><?php echo (($missingperson[0]['firpolicethananame'] != NULL ? ($missingperson[0]['firpolicethananame'].',') : '')); ?><?php echo (($missingperson[0]['firstate'] != NULL ? ($missingperson[0]['firstate'].',') : '')); ?><?php echo (($missingperson[0]['firdistrict'] != NULL ? ($missingperson[0]['firdistrict'].',') : '')); ?><?php echo (($missingperson[0]['fircity'] != NULL ? ($missingperson[0]['fircity'].',') : '')); ?><?php echo (($missingperson[0]['firvillage'] != NULL ? ($missingperson[0]['firvillage']) : '')); ?></span></h6>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner" id="photosspan">
                                            <?php 
                                                $decode = json_decode($missingperson[0]['photos'],true);
                                                if(count($decode) > 0)
                                                {
                                                    foreach($decode as $k=>$v)
                                                    {
                                            ?>
                                            <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                                <a href="<?php echo base_url(); ?><?php echo $v; ?>"  data-lightbox="roadtrip">
                                                    <img src="<?php echo base_url().''.$v; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                                </a>
                                            </div>
                                            <?php } }else{ 
                                                $getLatestUserPhotos = $this->db->query('select * from missingpersonphotos where missingId='.$missingperson[0]['Id'])->result_array();
                                                foreach($getLatestUserPhotos as $k=>$v)
                                                {
                                            ?>
                                            <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                                <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip">
                                                    <img src="<?php echo base_url().''.$v['photourl']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                                </a>
                                            </div>
                                            <?php } } ?>
                                        </div>
                                        <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                $getMissingPersonDetail = $this->db->query('select * from user where aadhar_id="'.$missingperson[0]['missingaadhar'].'"')->result_array();
                                if(count($getMissingPersonDetail) > 0)
                                {
                            ?>
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                    <h6 style="color: black;"><b>Person Name : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h5 class="text-danger"><b id="personname"><?php echo $getMissingPersonDetail[0]['aadharname']; ?></b></h5>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                    <h6 style="color: black;"><b>Aadhar Number : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h6 style="color: black;" id="aadharNumber"><?php echo substr_replace($missingperson[0]['missingaadhar'],'xxxxxxxx',0,8); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                    <h6 style="color: black;"><b>Religion : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h6 style="color: black;" id="religion"><?php echo ($getMissingPersonDetail[0]['religion']); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <?php 
                                
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getMissingPersonDetail[0]['dob']);
                            ?>
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                                    <h6 style="color: black;"><b>Age : </b></h6>
                                </div>
                                <div class="text-left col-md-6 col-6 col-sm-12 col-lg-6">
                                    <h6 style="color: black;" id="agespan"><?php echo $from->diff($to)->y; ?>- Years</h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                                    <h6 style="color: black;"><b>Gender : </b></h6>
                                </div>
                                <div class="text-left col-6 col-md-6 col-sm-12 col-lg-6">
                                    <h6 style="color: black;" id="genderspan"><?php echo $getMissingPersonDetail[0]['gender']; ?></h6>
                                </div>
                            </div>
                            <div class="bg-dark row mt-2 mx-3 p-2">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <label class="text-light"><b>Person's Other Details</b></label>
                                </div>
                            </div>
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:0.9em;"><b>Date of Birth : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;" id="dobspan"><?php echo date('d-m-Y',strtotime($getMissingPersonDetail[0]['dob'])); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div id="userproperty">
                                <?php 
                                    $getUserProperty = $this->db->query('select * from userproperty where personId='.$missingperson[0]['Id'])->result_array();
                                    if(count($getUserProperty) > 0)
                                    {
                                        foreach($getUserProperty as $k=>$v)
                                        {
                                            $getSubCategoryName = $this->db->query('select * from subcategories where Id='.$v['userSubCategory'].' and isDeleted=0')->result_array();
                                            if(count($getSubCategoryName) > 0)
                                            {
                                                $getCategoryName = $this->db->query('select * from categories where Id='.$getSubCategoryName[0]['categoryId'])->result_array();   
                                            }else{
                                                $getCategoryName = array();
                                            }
                                ?>
                                <?php 
                                    if(count($getCategoryName) > 0)
                                    {
                                ?>
                                <div class="row mt-2 p-2 align-items-center">
                                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                        <h6 style="color: black;font-size:0.9em;"><b><?php echo $getCategoryName[0]['englishCategoryName']; ?> : </b></h6>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                        <h6 style="color: black;"><?php echo $getSubCategoryName[0]['englishSubCategoryName']; ?></h6>
                                    </div>
                                </div>
                                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                <?php } ?>
                                <?php } } ?>
                            </div>
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:0.9em;"><b>Care of : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;" id="careofspan"><?php echo $getMissingPersonDetail[0]['careof']; ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:0.9em;"><b>Marital Status : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;" id="maritalstatusspan"><?php echo ($getMissingPersonDetail[0]['isMarried'] == 1 ? 'Married' : 'Single'); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <?php 
                                if($getMissingPersonDetail[0]['spouseAadhar'] != NULL)
                                {
                                    $getSpouseDetail = $this->db->query('select * from user where aadhar_id="'.$getMissingPersonDetail[0]['spouseAadhar'].'"')->result_array();   
                                }else{
                                    $getSpouseDetail = array();
                                }
                                if(count($getSpouseDetail) > 0)
                                {
                            ?>
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:0.9em;"><b>Spouse Name : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: green;text-transform:uppercase;"><?php echo ((count($getSpouseDetail) > 0) ? ($getSpouseDetail[0]['aadharname'].','.$getSpouseDetail[0]['vtc'].','.$getSpouseDetail[0]['state']) : '-'); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <?php } ?>
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;"><b>Current Address : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <?php 
                                        if($getMissingPersonDetail[0]['curaddress'] == NULL)
                                        {
                                    ?>
                                    <h6 style="color: black;" id="addressspan"><?php echo (($getMissingPersonDetail[0]['landmark'] != '') ? $getMissingPersonDetail[0]['landmark'].',' : ''); ?><?php echo (($getMissingPersonDetail[0]['locality'] != '') ? $getMissingPersonDetail[0]['locality'] : ''); ?></h6>
                                    <?php }else{ ?>
                                    <h6 style="color: black;" id="addressspan"><?php echo (($getMissingPersonDetail[0]['curaddress'] != '') ? $getMissingPersonDetail[0]['curaddress'].',' : ''); ?><?php echo (($getMissingPersonDetail[0]['curcity'] != '') ? $getMissingPersonDetail[0]['curcity'].',' : ''); ?><?php echo (($getMissingPersonDetail[0]['curdistrict'] != '') ? $getMissingPersonDetail[0]['curdistrict'].',' : ''); ?><?php echo (($getMissingPersonDetail[0]['curstate'] != '') ? $getMissingPersonDetail[0]['curstate'].',' : ''); ?></h6>
                                    <?php } ?>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:0.9em;"><b>Other Detail : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;" id="otherdetailspan"><?php echo $missingperson[0]['otherDetail']; ?></h6>
                                </div>
                            </div>
                            <!--<div class="row mt-2 align-items-center px-md-5 px-sm-3 justify-content-center">-->
                            <!--    <div class="col-md-12 text-center border border-dark p-3">-->
                            <!--        <h6 class="text-dark">-->
                            <!--            <span class="mt-2">Now you can contact to person's Family Member </span>-->
                            <!--            <a href="tel:<?php echo $missingperson[0]['mobile1']; ?>" id="contactspan" class="btn btn-primary btn-style-four mt-2" style="width:max-content;"><i class="fa fa-phone"></i> Click Here</a>-->
                            <!--        </h6>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="row mt-2 px-md-5 px-sm-3">
                                <div class="col-md-12 text-center border border-dark px-1 pb-3">
                                    
                                        <?php 
                                            if($this->session->userdata('user_login') == 'yes'){
                                        ?>
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6 mt-3">
                                                <h6 class="text-dark text-uppercase mb-0"> 
                                                    <a href="tel:<?php echo $missingperson[0]['mobile1']; ?>" style="width:100%;" class="phone btn btn-primary btn-style-green mt-2">
                                                        <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                                             
                                                        <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                                        							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                                        							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                                        							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                                        							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                                        							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                                        <path d="M41.1,15.7
                                                        							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                                        							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                                        <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                                        							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                                                 C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                                        </svg>
                                                        <span>CALL FAMILY MEMBER</span>
                                                    </a>
                                                </h6>  
                                            </div>
                                            <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6">
                                                <h6 class="text-dark text-uppercase mb-0 mt-3"> 
                                                    <a href="tel:<?php echo $missingperson[0]['mobile1']; ?>" style="width:100%;" class="phone btn btn-primary btn-style-red mt-2">
                                                        <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                                             
                                                        <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                                        							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                                        							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                                        							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                                        							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                                        							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                                        <path d="M41.1,15.7
                                                        							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                                        							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                                        <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                                        							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                                                 C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                                        </svg>
                                                        <span>CALL FIR THANA</span>
                                                    </a>
                                                </h6>  
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                        <h6 class="text-dark text-uppercase mb-0">To Contact to person's Family Member 
                                            <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;" class="phone btn btn-primary btn-style-four mt-2">
                                                <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                                     
                                                <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                                							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                                							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                                							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                                							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                                							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                                <path d="M41.1,15.7
                                                							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                                							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                                <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                                							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                                         C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                                </svg>
                                                <span>Click Here</span>
                                            </a>
                                        </h6>
                                        <?php } ?>
                                    
                                </div>
                            </div>
                            <?php }else{ 
                                $getMissingFullDetails = $this->db->query('select * from missingpersondetail where missingId='.$missingperson[0]['Id'])->result_array();
                            ?>
                                <div class="row mt-2 mx-3 align-items-center">
                                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                        <h6 style="color: black;"><b>Person Name : </b></h6>
                                    </div>
                                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                        <h5 class="text-danger"><b id="personname"><?php echo $missingperson[0]['missingname']; ?></b></h5>
                                    </div>
                                </div>
                                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                <div class="row mt-2 mx-3 align-items-center">
                                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                        <h6 style="color: black;"><b>Aadhar Number : </b></h6>
                                    </div>
                                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                        <h6 style="color: black;" id="aadharNumber"><?php echo substr_replace($missingperson[0]['missingaadhar'],'xxxxxxxx',0,8); ?></h6>
                                    </div>
                                </div>
                                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                <div class="row mt-2 mx-3 align-items-center">
                                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                        <h6 style="color: black;"><b>Religion : </b></h6>
                                    </div>
                                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                        <h6 style="color: black;" id="religion"><?php echo ($getMissingFullDetails[0]['religion']); ?></h6>
                                    </div>
                                </div>
                                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                <?php 
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($getMissingFullDetails[0]['dob']);
                                ?>
                                <div class="row mt-2 mx-3 align-items-center">
                                    <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                                        <h6 style="color: black;"><b>Age : </b></h6>
                                    </div>
                                    <div class="text-left col-md-6 col-6 col-sm-12 col-lg-6">
                                        <h6 style="color: black;" id="agespan"><?php echo $from->diff($to)->y; ?>- Years</h6>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-2 mx-3 align-items-center">
                                    <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                                        <h6 style="color: black;"><b>Gender : </b></h6>
                                    </div>
                                    <div class="text-left col-6 col-md-6 col-sm-12 col-lg-6">
                                        <h6 style="color: black;" id="genderspan"><?php echo $getMissingFullDetails[0]['gender']; ?></h6>
                                    </div>
                                </div>
                                <div class="bg-dark row mt-2 mx-3 p-2">
                                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                        <label class="text-light"><b>Person's Other Details</b></label>
                                    </div>
                                </div>
                                <div class="row mt-2 align-items-center">
                                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                        <h6 style="color: black;font-size:0.9em;"><b>Date of Birth : </b></h6>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                        <h6 style="color: black;" id="dobspan"><?php echo date('d-m-Y',strtotime($getMissingFullDetails[0]['dob'])); ?></h6>
                                    </div>
                                </div>
                                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                <div id="userproperty">
                                    <?php 
                                        $getUserProperty = $this->db->query('select * from userproperty where personId='.$missingperson[0]['Id'])->result_array();
                                        if(count($getUserProperty) > 0)
                                        {
                                            foreach($getUserProperty as $k=>$v)
                                            {
                                                $getSubCategoryName = $this->db->query('select * from subcategories where Id='.$v['subCategoryId'].' and isDeleted=0')->result_array();
                                                if(count($getSubCategoryName) > 0)
                                                {
                                                    $getCategoryName = $this->db->query('select * from categories where Id='.$getSubCategoryName[0]['categoryId'])->result_array();   
                                                }else{
                                                    $getCategoryName = array();
                                                }
                                    ?>
                                    <?php 
                                        if(count($getCategoryName) > 0)
                                        {
                                    ?>
                                    <div class="row mt-2 p-2 align-items-center">
                                        <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                            <h6 style="color: black;font-size:0.9em;"><b><?php echo $getCategoryName[0]['englishCategoryName']; ?> : </b></h6>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                            <h6 style="color: black;"><?php echo $getSubCategoryName[0]['englishSubCategoryName']; ?></h6>
                                        </div>
                                    </div>
                                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                    <?php } ?>
                                    <?php } } ?>
                                </div>
                                <div class="row mt-2 align-items-center">
                                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                        <h6 style="color: black;font-size:0.9em;"><b>Care of : </b></h6>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                        <h6 style="color: black;" id="careofspan"><?php echo $getMissingFullDetails[0]['fatherName']; ?></h6>
                                    </div>
                                </div>
                                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                <div class="row mt-2 align-items-center">
                                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                        <h6 style="color: black;font-size:0.9em;"><b>Other Detail : </b></h6>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                        <h6 style="color: black;" id="otherdetailspan"><?php echo $missingperson[0]['otherDetail']; ?></h6>
                                    </div>
                                </div>
                                <div class="row mt-2 px-md-5 px-sm-3">
                                    <div class="col-md-12 text-center border border-dark px-1 pb-3">
                                        
                                            <?php 
                                                if($this->session->userdata('user_login') == 'yes'){
                                            ?>
                                            <div class="row">
                                                <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6 mt-3">
                                                    <h6 class="text-dark text-uppercase mb-0"> 
                                                        <a href="tel:<?php echo $missingperson[0]['mobile1']; ?>" style="width:100%;" class="phone btn btn-primary btn-style-green mt-2">
                                                            <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                                                 
                                                            <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                                            							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                                            							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                                            							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                                            							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                                            							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                                            <path d="M41.1,15.7
                                                            							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                                            							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                                            <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                                            							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                                                     C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                                            </svg>
                                                            <span>CALL FAMILY MEMBER</span>
                                                        </a>
                                                    </h6>  
                                                </div>
                                                <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6">
                                                    <h6 class="text-dark text-uppercase mb-0 mt-3"> 
                                                        <a href="tel:<?php echo $missingperson[0]['mobile1']; ?>" style="width:100%;" class="phone btn btn-primary btn-style-red mt-2">
                                                            <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                                                 
                                                            <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                                            							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                                            							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                                            							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                                            							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                                            							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                                            <path d="M41.1,15.7
                                                            							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                                            							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                                            <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                                            							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                                                     C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                                            </svg>
                                                            <span>CALL FIR THANA</span>
                                                        </a>
                                                    </h6>  
                                                </div>
                                            </div>
                                            <?php }else{ ?>
                                            <h6 class="text-dark text-uppercase mb-0">To Contact to person's Family Member 
                                                <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;" class="phone btn btn-primary btn-style-four mt-2">
                                                    <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                                         
                                                    <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                                    							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                                    							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                                    							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                                    							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                                    							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                                    <path d="M41.1,15.7
                                                    							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                                    							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                                    <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                                    							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                                             C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                                    </svg>
                                                    <span>Click Here</span>
                                                </a>
                                            </h6>
                                            <?php } ?>
                                        
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="row justify-content-center">
                                <div class="col-md-auto col-lg-auto col-sm-12 mt-2">
                                    <a href="<?php echo base_url(); ?>ngo/search_person_details" class="btn btn-primary next w-100"><i class="fa fa-search"></i> Search Another</a>
                                </div>
                            </div>
                        </div>
                        <?php }else{ 
                            $getUserDetail = array();
                            if($getDetails[0]['Idtype'] == 'aadhar')
                            {
                                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getDetails[0]['IdNumber'].'"')->result_array();
                            }else if($getDetails[0]['Idtype'] == 'voter')
                            {
                                $getVoterDetails = $this->db->query('select * from voterslist where voterNumber="'.$getDetails[0]['IdNumber'].'"')->result_array();
                                $getUserDetail = $this->db->query('select * from user where uid="'.$getVoterDetails[0]['userId'].'"')->result_array();
                            }else if($getDetails[0]['Idtype'] == 'pan')
                            {
                                $getPanDetails = $this->db->query('select * from panlist where panNumber="'.$getDetails[0]['IdNumber'].'"')->result_array();
                                $getUserDetail = $this->db->query('select * from user where uid="'.$getPanDetails[0]['userId'].'"')->result_array();
                            }else if($getDetails[0]['Idtype'] == 'dl')
                            {
                                $getDlDetails = $this->db->query('select * from dllist where dlNumber="'.$getDetails[0]['IdNumber'].'"')->result_array();
                                $getUserDetail = $this->db->query('select * from user where uid="'.$getDlDetails[0]['userId'].'"')->result_array();
                            }
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 d-flex flex-column">
                            <div class="row px-3 align-items-center justify-content-center">
                                <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php
                                                $getLatestUserPhotos = $this->db->query('select * from userphotos where userId='.(count($getUserDetail) > 0 ? $getUserDetail[0]['uid'] : 0))->result_array();
                                                if(count($getLatestUserPhotos) > 0)
                                                {
                                                    foreach($getLatestUserPhotos as $k=>$v)
                                                    {
                                            ?>
                                            <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                                <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip">
                                                    <img src="<?php echo base_url().''.$v['photourl']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                                </a>
                                            </div>
                                            <?php } }else{ 
                                                if($getUserDetail[0]['facematchphoto'] != NULL)
                                                {
                                            ?>
                                            <div class="carousel-item active">
                                                <a href="<?php echo base_url(); ?><?php echo $getUserDetail[0]['facematchphoto']; ?>"  data-lightbox="roadtrip">
                                                    <img src="<?php echo base_url().''.$getUserDetail[0]['facematchphoto']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                                </a>
                                            </div>
                                            <?php }else{ ?>
                                            <div class="carousel-item active">
                                                <a href="<?php echo base_url(); ?><?php echo $persondetail[0]['aadharphoto']; ?>"  data-lightbox="roadtrip">
                                                    <img src="<?php echo base_url().''.$getUserDetail[0]['aadharphoto']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                                </a>
                                            </div>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                        <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.6rem;">
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                    <h6 style="color: black;"><b>Person Name : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h5 class="text-success"><b><?php echo $getUserDetail[0]['aadharname']; ?></b></h5>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                    <h6 style="color: black;"><b>Aadhar Number : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h6 style="color: black;" id="aadharNumber"><?php echo substr_replace($getUserDetail[0]['aadhar_id'],'xxxxxxxx',0,8); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <?php 
                                if($getUserDetail[0]['religion'] != NULL)
                                {
                            ?>
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                    <h6 style="color: black;"><b>Religion : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h6 style="color: black;" id="religion"><?php echo ($getUserDetail[0]['religion']); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <?php } ?>
                            <?php 
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getUserDetail[0]['dob']);
                            ?>
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                                    <h6 style="color: black;"><b>Age : </b></h6>
                                </div>
                                <div class="text-left col-md-6 col-6 col-sm-12 col-lg-6">
                                    <h6 style="color: black;"><?php echo $from->diff($to)->y; ?>- Years</h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                                    <h6 style="color: black;"><b>Gender : </b></h6>
                                </div>
                                <div class="text-left col-6 col-md-6 col-sm-12 col-lg-6">
                                    <h6 style="color: black;"><?php echo $getUserDetail[0]['gender']; ?></h6>
                                </div>
                            </div>
                            <div class="bg-dark row mt-2 mx-0 p-2">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <label class="text-light"><b>Person's Other Details</b></label>
                                </div>
                            </div>
                            <div class="row mt-2 p-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:0.9em;"><b>Date of Birth : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;"><?php echo date('d-m-Y',strtotime($getUserDetail[0]['dob'])); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <?php 
                                $getUserProperty = $this->db->query('select * from userOtherInfo where userId='.(count($getUserDetail) > 0 ? $getUserDetail[0]['uid'] : 0))->result_array();
                                if(count($getUserProperty) > 0)
                                {
                                    foreach($getUserProperty as $k=>$v)
                                    {
                                        $getSubCategoryName = $this->db->query('select * from subcategories where Id='.$v['subCategoryId'].' and isDeleted=0')->result_array();
                                        if(count($getSubCategoryName) > 0)
                                        {
                                            $getCategoryName = $this->db->query('select * from categories where Id='.$getSubCategoryName[0]['categoryId'])->result_array();   
                                        }else{
                                            $getCategoryName = array();
                                        }
                            ?>
                            <?php 
                                if(count($getCategoryName) > 0)
                                {
                            ?>
                            <div class="row mt-2 p-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:0.9em;"><b><?php echo $getCategoryName[0]['englishCategoryName']; ?> : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;"><?php echo $getSubCategoryName[0]['englishSubCategoryName']; ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <?php } ?>
                            <?php } } ?>
                            <div class="row mt-2 p-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:0.9em;"><b>Care of : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;"><?php echo $getUserDetail[0]['careof']; ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 p-2 align-items-center" id="addressparent">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;"><b>Current Address : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <?php 
                                        if($getUserDetail[0]['curaddress'] == NULL)
                                        {
                                    ?>
                                    <h6 style="color: black;"><?php echo (($getUserDetail[0]['landmark'] != '') ? $getUserDetail[0]['landmark'].',' : ''); ?><?php echo (($getUserDetail[0]['locality'] != '') ? $getUserDetail[0]['locality'] : ''); ?></h6>
                                    <?php }else{ ?>
                                    <h6 style="color: black;"><?php echo (($getUserDetail[0]['curaddress'] != '') ? $getUserDetail[0]['curaddress'].',' : ''); ?><?php echo (($getUserDetail[0]['curcity'] != '') ? $getUserDetail[0]['curcity'].',' : ''); ?><?php echo (($getUserDetail[0]['curdistrict'] != '') ? $getUserDetail[0]['curdistrict'].',' : ''); ?><?php echo (($getUserDetail[0]['curstate'] != '') ? $getUserDetail[0]['curstate'].',' : ''); ?></h6>
                                    <?php } ?>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:0.9em;"><b>Marital Status : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;" id="maritalstatusspan"><?php echo ($getUserDetail[0]['isMarried'] == 1 ? 'Married' : 'Single'); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <?php 
                                if($getUserDetail[0]['spouseAadhar'] != NULL)
                                {
                                    $getSpouseDetail = $this->db->query('select * from user where aadhar_id="'.$getUserDetail[0]['spouseAadhar'].'"')->result_array();   
                                }else{
                                    $getSpouseDetail = array();
                                }
                                if(count($getSpouseDetail) > 0)
                                {
                            ?>
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:0.9em;"><b>Spouse Name : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: green;text-transform:uppercase;"><?php echo ((count($getSpouseDetail) > 0) ? ($getSpouseDetail[0]['aadharname'].','.$getSpouseDetail[0]['vtc'].','.$getSpouseDetail[0]['state']) : '-'); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <?php } ?>
                            <?php 
                                if($this->session->userdata('user_login') == 'yes'){
                            ?>
                            <div class="row mt-2 align-items-center px-md-5 px-sm-3 justify-content-center">
                                <div class="col-md-12 text-center border border-dark p-3">
                                    <h6 class="text-dark">
                                        <span class="mt-2">Now you can contact to person's Family Member </span>
                                        <a href="tel:<?php echo $getUserDetail[0]['registration_mobile']; ?>" id="contactspan" style="width:max-content;" class="phone btn btn-primary btn-style-green mt-2">
                                            <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                                 
                                            <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                            							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                            							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                            							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                            							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                            							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                            <path d="M41.1,15.7
                                            							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                            							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                            <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                            							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                                     C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                            </svg>
                                            <span>CALL FAMILY MEMBER</span>
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="row mt-2 align-items-center px-md-5 px-sm-3 justify-content-center">
                                <div class="col-md-12 text-center border border-dark p-3">
                                    <h6 class="text-dark mb-0">To Contact to person's Family Member 
                                        <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;" class="phone btn btn-primary btn-style-four mt-2">
                                            <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                                 
                                            <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                            							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                            							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                            							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                            							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                            							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                            <path d="M41.1,15.7
                                            							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                            							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                            <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                            							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                                     C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                            </svg>
                                            <span>Click Here</span>
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="row justify-content-center">
                                <div class="col-md-auto col-lg-auto col-sm-12 mt-2">
                                    <a href="<?php echo base_url(); ?>ngo/search_person_details" class="btn btn-primary next"><i class="fa fa-search"></i> Search Another</a>
                                </div>
                            </div>
                        </div>
                        <?php       
                                }
                        }
                    }
                ?>          
                </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 <?php if($pn != 4){ echo "d-none"; } ?>">

          <div class="card">
            <div class="card-body pt-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4 class="text-danger mb-0">Search Unknown Person</h4>
                    </div>
                </div>
                <hr>
                <form class="row g-3 needs-validation" method="post" action="<?php echo base_url(); ?>ngo/filterUnknownPerson" id="filterForm" novalidate>
                    <?php 
                        $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-4 mb-2">
                                <label class="form-label">Select Start Date</label>
                                <input type="date" class="form-control" name="startdate" id="startdate" max="<?php echo date('Y-m-d'); ?>">  
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-4 mb-2">
                                <label class="form-label">Select End Date</label>
                                <input type="date" class="form-control" name="enddate" id="enddate" max="<?php echo date('Y-m-d'); ?>">  
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-4 mb-2">
                                <label class="form-label">Select Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-4 mb-2">
                                <label class="form-label">Enter Person Name</label>
                                <input type="text" class="form-control" name="personName" id="personName" placeholder="Enter Person Name">  
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-4 mb-2">
                                <label class="form-label">Person Father Name</label>
                                <input type="text" class="form-control" name="fatherName" id="fatherName" placeholder="Person Father Name">  
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-4 mb-3">
                                <label class="form-label">Select Dob</label>
                                <input type="date" class="form-control" name="dob" id="dob" max="<?php echo date('Y-m-d'); ?>">  
                            </div>
                            <div class="col-lg-auto col-md-auto col-sm-12 mb-3">
                                <button class="btn btn-primary w-100 disabled-on-loading save" id="btn4" type="submit"> Check</button>  
                            </div>
                            <div class="col-lg-auto col-md-auto col-sm-12 mb-2">
                                <button class="btn btn-primary w-100 disabled-on-loading next" id="btn4skip" type="button"> Skip</button>  
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row d-none" id="resultdiv">
                    
                </div>
                <div class="row d-none" id="noresultdiv">
                    
                </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
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
                data.append('idNumber',$('#vehicleNumber').val());
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
                    url:'<?php echo base_url(); ?>ngo/checkPersonIdAfterLogin',
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
                                typeLabel += '<b> लापता /</b>';
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
                            if(parse.isVisible == '1')
                            {
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+(parse.address != '' ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                                    $('#step2CheckVehicle').removeAttr('disabled');
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
                                                    $('#step2CheckVehicle').removeAttr('disabled');
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
                        else{
                            if(parse.status == 'error')
                            {
                                toastr.error(parse.message);
                                $('#step2CheckVehicle').removeAttr('disabled');
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
                                    })
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
            data.append('goldType',$('#goldType').val());   
            label = 'Gold HUID Number';
            if($('#huidNumber').val() != '')
            {
                count = 1;
                data.append('idNumber',$('#huidNumber').val());
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
                    url:'<?php echo base_url(); ?>ngo/checkPersonIdAfterLogin',
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
                                typeLabel += '<b> लापता /</b>';
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
                            if(parse.isVisible == '1')
                            {
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+(parse.address != '' ? '' : 'd-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                        else{
                            if(parse.status == 'error')
                            {
                                toastr.error(parse.message);
                                $('#step2CheckGold').removeAttr('disabled');
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
                                    })
                                }
                            }
                        }
                    }
                })
            }
        })
        
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
                        $('#step2CheckAadhar').removeAttr('disabled');
                    }else if(result.isDismissed)
                    {
                        $('#step2CheckAadhar').removeAttr('disabled');
                    }
                })
            }else{
                $.ajax({
                    url:'<?php echo base_url(); ?>ngo/checkPersonIdAfterLogin',
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
                            typeLabel += '<b> लापता /</b>';
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
                        if(parse.isVisible == '1')
                        {
                            if(parse.isWanted == 1 || parse.isCriminal == 1)
                            {
                                if(parse.isRegistered == 0 && parse.isMissing == 1)
                                {
                                     let html = '';
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                     html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
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
                                     html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                })
            }
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
    }
    
    function openCamera()
    {
        $('#fileMobInput').click();
    }
    
    $('#fileMobInput').on('change',function(e)
    {
        $('#cameraModal').modal('show');
        swal.close();
        const selectedfile = e.target.files;
        if (selectedfile.length > 0) {
          const [imageFile] = selectedfile;
          const fileReader = new FileReader();
          fileReader.onload = () => {
            $('#mainPhotoSelected').val(fileReader.result);
            $('#mobileimage').attr('src',fileReader.result);
          };
          fileReader.readAsDataURL(imageFile);
        }
        $('#clickdiv').addClass('d-none');
        $('#bothcameradiv').addClass('d-none');
       	$('#videodiv').addClass('d-none');
       	$('#mobileimagediv').removeClass('d-none');
        $('#retakeMobile').removeClass('d-none');
    })
    
    function openCameraPopup()
    {
        Swal.fire({
            allowOutsideClick:false,
            icon : 'info',
            html: "<div class='form-group mb-3'><h5>To get person's more details, you have to click person's face photo</h5></div><div class='row mx-0 d-md-none d-block'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' class='btn btn-style-green btn-primary' onclick='openCamera()'>Open Camera <i class='fa fa-camera fa-spin'></i></button></div></div><div class='row mx-0 d-none d-md-flex'><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' style='width:max-content!important;' class='btn btn-style-green btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button></div><div class='col-lg-6 col-sm-12 col-md-6 mt-3'><button type='button' style='width:max-content!important;' class='btn btn-style-green btn-primary' onclick='openBackCamera()'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button></div></div>",
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:false,
        }).then((result) => {
            if(result.isDismissed)
            {
                $('#step2CheckVehicle').removeAttr('disabled');
                $('#step2CheckGold').removeAttr('disabled');
                $('#step2CheckAadhar').removeAttr('disabled');
                $('#step2CheckDl').removeAttr('disabled');
                $('#step2CheckVoter').removeAttr('disabled');
                $('#step2CheckPan').removeAttr('disabled');
            }
        })   
    }
    
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
                    $('#step2CheckDl').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckDl').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>ngo/checkPersonIdAfterLogin',
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
                            typeLabel += '<b> लापता /</b>';
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
                        if(parse.isVisible == '1')
                        {
                            if(parse.isWanted == 1 || parse.isCriminal == 1)
                            {
                                if(parse.isRegistered == 0 && parse.isMissing == 1)
                                {
                                     let html = '';
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                     html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
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
                                     html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                    $('#step2CheckVoter').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckVoter').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>ngo/checkPersonIdAfterLogin',
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
                            typeLabel += '<b> लापता /</b>';
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
                        if(parse.isVisible == '1')
                        {
                            if(parse.isWanted == 1 || parse.isCriminal == 1)
                            {
                                if(parse.isRegistered == 0 && parse.isMissing == 1)
                                {
                                     let html = '';
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                     html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
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
                                     html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                    $('#step2CheckPan').removeAttr('disabled');
                }else if(result.isDismissed)
                {
                    $('#step2CheckPan').removeAttr('disabled');
                }
            })
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>ngo/checkPersonIdAfterLogin',
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
                            typeLabel += '<b> लापता /</b>';
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
                        if(parse.isVisible == '1')
                        {
                            if(parse.isWanted == 1 || parse.isCriminal == 1)
                            {
                                if(parse.isRegistered == 0 && parse.isMissing == 1)
                                {
                                     let html = '';
                                     if(parse.isVerified == 1)
                                     {
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                     html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2()"> Click Here</button></div>',
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                         html = '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
                                     }else{
                                         html = '<div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>';
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
                                            '<div class="form-group"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup()"> Click Here</button></div>',
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
                                     html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>ngo/criminalRecordAfterLogin" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>ngo/wantedRecordAfterLogin" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
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
            })
        }
    })
        
        function showRewardsAccordingly(Id)
    {
        $.ajax({
            url:'<?php echo base_url(); ?>ngo/showRewardsAccordingly',
            data:{Id:Id,'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                $('#missingdatespan').html(parse.missingdate);
                $('#missingfirdate').html(parse.firdate);
                $('#firthanaaddress').html(parse.firthanaaddress);
                $('#photosspan').html('');
                for(let i=0;i<parse.images.length;i++)
                {
                    if(i == 0)
                    {
                        $('#photosspan').append('<div class="carousel-item active"><a href="'+parse.images[i]+'"  data-lightbox="roadtrip"><img src="'+parse.images[i]+'" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="..."></a></div>');      
                    }else{
                        $('#photosspan').append('<div class="carousel-item"><a href="'+parse.images[i]+'"  data-lightbox="roadtrip"><img src="'+parse.images[i]+'" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="..."></a></div>');   
                    }
                }
                $('#personname').html(parse.personname);
                $('#agespan').html(parse.age);
                $('#genderspan').html(parse.gender);
                $('#dobspan').html(parse.dob);
                $('#userproperty').html(parse.userproperty);
                $('#careofspan').html(parse.careof);
                if(parse.address != '')
                {
                    $('#addressspan').html(parse.address);   
                }else{
                    $('#addressparent').addClass('d-none');
                }
                $('#otherdetailspan').html(parse.otherdetail);
                $('#contactspan').attr('href',parse.contact);
            }
        })
    }
    
        $('#btn4skip').click(function()
        {
            $('#filterForm')[0].reset();
            $('#btn4').click();
        })
        
        $('#step4form').on('submit',function(e)
        {
            e.preventDefault();
            $('#btn4').attr('disabled','disabled');
            let data = new FormData(this);
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
                    $('#btn4').removeAttr('disabled');
                    if(parse.status == 'success')
                    {
                        let paginator = Paginator(parse.data,1,50);   
                        if(paginator.data.length > 0)
                        {
                            $('#resultdiv').removeClass('d-none');   
                            $('#resultdiv').html('');
                            for(let i=0;i<paginator.data.length;i++)
                            {
                                $('#resultdiv').append('<div class="col-md-4 col-sm-12 col-lg-3 mt-2 text-center px-3"><div class="w-100 card"><img class="card-img-top" src="<?php echo base_url(); ?>'+paginator.data[i].facematchphoto+'" style="width:100%;height:200px;" alt="Card image cap"><div class="card-body"><h5 class="card-title">'+paginator.data[i].personName+'</h5><p class="card-text">'+paginator.data[i].gender+'</p><p class="card-text">'+paginator.data[i].dateCreated+'</p></div></div></div>');
                            }
                        }else{
                            $('#resultdiv').addClass('d-none');   
                            $('#noresultdiv').addClass('d-none');   
                        }
                    }
                }
            })
        })
        
        function sendCheckOtp(ele)
        {
            location.href="<?php echo base_url(); ?>ngo/search_person_details?pn=3";
        }
        
        $('#step2form').on('submit',function(e)
        {
            e.preventDefault();
            $('#btn2').attr('disabled','disabled');
            let data = new FormData(this);
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
                    let idType = $('#idType').val();
                     if(parse.status == 'success')
                     {
                         if(parse.isRegistered == 0 && parse.isMissing == 0)
                         {
                             Swal.fire({
                                title: '<strong class="text-danger" style="font-size:20px;">No Data Found</strong>',
                                icon: 'error',
                                allowOutsideClick:false,
                                html:
                                    '<div class="form-group mt-3"><label class="form-label">No Data Found in our records</label></div>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }else if(result.isDismissed)
                                {
                                    location.reload();
                                }
                            })
                         }else if(parse.isRegistered == 0 && parse.isMissing == 1)
                         {
                             Swal.fire({
                                allowOutsideClick:false,
                                html:
                                    '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bold;font-size: 16px!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="sendCheckOtp(this)"> Click Here</button></div>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href="<?php echo base_url(); ?>ngo/search_person_details?pn=3";
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
                                    '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="sendCheckOtp(this)"> Click Here</button></div>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href="<?php echo base_url(); ?>ngo/search_person_details?pn=3";
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
                                    '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bold;font-size: 21px!important;" class="text-danger">MISSING</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="sendCheckOtp(this)"> Click Here</button></div>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href="<?php echo base_url(); ?>ngo/search_person_details?pn=3";
                                }else if(result.isDismissed)
                                {
                                    location.reload();
                                }
                            })   
                         }
                        $('#idType').attr('disabled','disabled');
                        if(idType == 'aadhar')
                        {
                            $('#aadharNumber').attr('readonly',true);   
                        }
                        if(idType == 'dl')
                        {
                            $('#dlNumber').attr('readonly',true);   
                        }
                        if(idType == 'voter')
                        {
                            $('#voterId').attr('readonly',true);   
                        }
                        if(idType == 'pan')
                        {
                            $('#panNumber').attr('readonly',true);   
                        }
                        $('#btn2').addClass('d-none');
                     }else{
                         if(parse.status == 'error')
                         {
                            toastr.error(parse.message);
                            $('#btnSubmit').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
                            $('#aadharNumber').attr('readonly',false);
                            $('#mobileNumber').attr('readonly',false);
                            $('#btnSubmit').removeClass('d-none');   
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
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
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
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
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
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
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
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
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
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
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
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
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
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }else if(result.isDismissed)
                                    {
                                        location.reload();
                                    }
                                })
                            }
                            $('#btnSubmit').removeAttr('disabled');
                            $('#otpdiv').addClass('d-none');
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
                            $('#mobileNumber').attr('readonly',false);
                            $('#btn2').removeClass('d-none');
                         }
                    }  
                }
            })
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
            $('#huidNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',false);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huidNumber').attr('required',false);
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
            $('#huidNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huidNumber').attr('required',false);
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
            $('#huidNumber').removeAttr('name');
            
            $('#aadharNumber').attr('required',false);
            $('#voterIdentity').removeClass('d-none');
            $('#voterId').attr('required',true);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huidNumber').attr('required',false);
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
            $('#huidNumber').removeAttr('name');
            
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').removeClass('d-none');
            $('#panNumber').attr('required',true);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huidNumber').attr('required',false);
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
            $('#huidNumber').removeAttr('name');
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').removeClass('d-none');
            $('#dlNumber').attr('required',true);
            $('#goldIdentity').addClass('d-none');
            $('#huidNumber').attr('required',false);
            $('#vehicleIdentity').addClass('d-none');
            $('#vehicleNumber').attr('required',false);
        }
        if(val == 'gold')
        {
            $('#panNumber').removeAttr('name');
            $('#huidNumber').attr('name','huidNumber');
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
            $('#huidNumber').attr('required',true);
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
            $('#huidNumber').removeAttr('name');
            
            $('#aadharIdentity').addClass('d-none');
            $('#aadharNumber').attr('required',true);
            $('#voterIdentity').addClass('d-none');
            $('#voterId').attr('required',false);
            $('#panIdentity').addClass('d-none');
            $('#panNumber').attr('required',false);
            $('#dlIdentity').addClass('d-none');
            $('#dlNumber').attr('required',false);
            $('#goldIdentity').addClass('d-none');
            $('#huidNumber').attr('required',false);
            $('#vehicleIdentity').removeClass('d-none');
            $('#vehicleNumber').attr('required',true);
        }
    }
    
    function redirectToStep2()
    {
        window.open('<?php echo base_url(); ?>ngo/search_person_details?pn=3','_blank');
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
        
        function showAccordingly()
        {
            let choice = $('input[name="type"]:checked').val();   
            if(choice == undefined)
            {
                toastr.error('Please Select Choice');
            }else{
                if(choice != 3)
                {
                    location.href="<?php echo base_url(); ?>ngo/search_person_details?pn="+choice;      
                }else{
                    toastr.warning('Coming Soon');
                }
            }
        }
  </script>