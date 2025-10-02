<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.select2-container{
        width:-webkit-fill-available!important;
    }
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
    select{
        appearance:auto!important;
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
</style>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Upload Nominee Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Upload Nominee Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php $getProfileDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array(); ?>
    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row" style="justify-content:space-between;align-items:center">
                        <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                            <b class="text-danger" style="font-weight:600;font-size:13px;">Note: You can upload upto 3 numbers</b>
                        </div>
                        <div class="col-lg-auto col-md-auto col-sm-12 mt-3">
                            <button type="button" id="btn5" class="next w-100 btn btn-primary disabled-on-loading text-center" onclick="goToDashboard(this)"> <i class="fa fa-arrow-circle-left"></i> Dashboard</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
            <div class="card-body pt-3">
                <form id="step1Form">
                    <?php 
                        $getRelations = $this->db->query('select * from relations')->result_array();
                    ?>
                    <?php
                        if($getProfileDetail[0]['nominee1'] != NULL || $getProfileDetail[0]['nominee1'] != '')
                        {
                    ?>
                    <div class="row align-items-end">
                        <div class="col-lg-2 col-md-6 col-sm-12 my-3">
                            <label class="form-label">Relation</label>
                            <select class="form-control select2" name="relation1" required disabled>
                                <?php 
                                    if(count($getRelations) > 0)
                                    {
                                ?>
                                <option value="">Relation</option>
                                <?php 
                                    foreach($getRelations as $k=>$v)
                                    {
                                ?>
                                <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getProfileDetail[0]['relation1']){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                        <div class="col-lg-auto col-md-auto col-sm-12 mb-3 <?php echo (($getProfileDetail[0]['relation1'] != 23) ? 'd-none' : '') ?>" id="otherrelationdiv1">
                            <label class="form-label">Enter Other Relation</label>
                            <input type="text" disabled value="<?php echo (($getProfileDetail[0]['relation1'] == 23) ? $getProfileDetail[0]['othernomineename1'] : '') ?>" class="form-control" placeholder="Enter Other Relation" name="otherrelationname1" id="otherrelationname1">
                        </div>
                        <?php 
                            $getNomineeDetail = $this->db->query('select * from user where aadhar_id="'.$getProfileDetail[0]['nominee1Aadhar'].'"')->result_array();
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-3">
                            <label for="aadharname1" class="form-label">First Nominee Name</label>
                            <input readonly value="<?php echo $getNomineeDetail[0]['aadharname']; ?>" type="text" name="aadharname1" class="form-control" id="aadharname1">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-3">
                            <label for="alternatemob1" class="form-label">First Nominee Contact</label>
                            <input readonly value="<?php echo $getProfileDetail[0]['nominee1']; ?>" type="text" name="alternatemob1" class="form-control" id="alternatemob1">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-10 mb-3">
                            <label for="aadhar1" class="form-label">First Nominee Aadhar</label>
                            <input readonly value="<?php echo $getProfileDetail[0]['nominee1Aadhar']; ?>" type="text" name="aadhar1" class="form-control" id="aadhar1">
                        </div>
                        <div class="col-1 p-0 mb-3">
                            <button type="button" id="deletebtn1" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="deleteAlternate(this,1)"> <i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                    <!--<div class="col-12 gy-0">-->
                    <!--  <input type="checkbox" name="othershow1" value="1" id="othershow1" onclick="showOther(this,1)">-->
                    <!--  <label for="othershow1" style="display:inline;">Change your first contact number</label>-->
                    <!--</div>-->
                    <?php }else{ ?>
                        <div class="col-12 gy-0">
                          <input type="checkbox" name="othershow1" value="1" style="height:1rem;width:1rem;" id="othershow1" onclick="showOther(this,1)">
                          <label for="othershow1" style="display:inline;font-size:16px!important;">Create your first nominee name</label>
                        </div>
                        <div class="row my-3 d-none" id="other1div">
                            <div class="col-12">
                                <div class="row align-items-end">
                                    <div class="col-lg-3 col-md-3 col-sm-12 mb-2" id="rel1Div">
                                        <label class="form-label">Select Relation</label>
                                        <select class="form-control select2" onchange="showAccordingly(this.value,1)" name="otherrelation1" id="otherrelation1" required>
                                            <?php 
                                                if(count($getRelations) > 0)
                                                {
                                            ?>
                                            <option value="">Select Relation</option>
                                            <?php 
                                                foreach($getRelations as $k=>$v)
                                                {
                                            ?>
                                            <option value="<?php echo $v['Id']; ?>"><?php echo $v['relationName']; ?></option>
                                            <?php } } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-auto col-md-auto col-sm-12 mb-2 d-none" id="otherrelationdiv1">
                                        <label class="form-label">Enter Other Relation</label>
                                        <div class="input-group">
                                            <input type="text" aria-describedby="otherClear1" class="form-control" placeholder="Enter Other Relation" name="otherrelationname1" id="otherrelationname1">
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="border-radius:0;padding:0.7rem;background:white;cursor:pointer;" onclick="clearOtherDiv(1)" id="otherClear1"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start form-group col-lg-3 col-sm-12 col-md-4 mb-2">
                                        <label class="form-label">Enter Nominee Aadhar Number</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nominee1Aadhar" name="nominee1Aadhar" onKeyPress="return checkLength(this.value,12)" onKeyUp="showGoAccordingly(this.value,1)">
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="border-radius: 0;background: white;padding: 0.7rem;cursor:pointer;" onclick="clearAadhar(this,1)"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-sm-12 col-md-auto mb-2">
                                        <button type="button" class="btn btn-primary btn-style-grey disabled disabled-on-loading w-100" style="padding: 0.5rem 1.5rem!important;" id="goBtn1" onclick="checkSpouseDetail(this,1)"> Go</button>
                                    </div>
                                </div>
                                <div class="row d-none mt-2 align-items-end" id="nominee1NameDiv">
                                    <div class="text-start form-group col-lg-3 col-sm-12 col-md-4 mb-2">
                                        <label>Nominee Name</label>
                                        <textarea class="form-control text-success readonly" style="font-weight:bold;" id="nominee1Name" readonly name="nominee1Name"></textarea>
                                    </div>
                                    <div class="text-start form-group col-lg-3 col-sm-12 col-md-3 mb-2">
                                        <label>Enter mobile number that is register in website</label>
                                        <input type="number" class="form-control" id="nominee1Mobile" name="nominee1Mobile" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,1)">
                                    </div>
                                    <div class="form-group col-lg-auto col-sm-12 col-md-auto mt-3" id="sendotp1div">
                                        <button type="button" class="w-100 btn btn-primary btn-style-grey disabled disabled-on-loading" onclick="sendSpouseOtp(this,1)"> Send OTP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
            <div class="card">
                <div class="card-body pt-3">
                <form id="step2Form">
                    <?php
                        if($getProfileDetail[0]['nominee2'] != NULL || $getProfileDetail[0]['nominee2'] != '')
                        {
                    ?>
                    <div class="row align-items-end">
                        <div class="col-lg-2 col-md-6 col-sm-12 mb-3">
                            <label class="form-label">Relation</label>
                            <select class="form-control select2" name="otherrelation2" required disabled>
                                <?php 
                                    if(count($getRelations) > 0)
                                    {
                                ?>
                                <option value="">Relation</option>
                                <?php 
                                    foreach($getRelations as $k=>$v)
                                    {
                                ?>
                                <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getProfileDetail[0]['relation2']){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                        <div class="col-lg-auto col-md-auto col-sm-12 mb-3 <?php echo (($getProfileDetail[0]['relation2'] != 23) ? 'd-none' : '') ?>" id="otherrelationdiv2">
                            <label class="form-label">Enter Other Relation</label>
                            <input type="text" disabled value="<?php echo (($getProfileDetail[0]['relation2'] == 23) ? $getProfileDetail[0]['othernomineename2'] : '') ?>" class="form-control" placeholder="Enter Other Relation" name="otherrelationname2" id="otherrelationname2">
                        </div>
                        <?php 
                            $getNomineeDetail = $this->db->query('select * from user where aadhar_id="'.$getProfileDetail[0]['nominee2Aadhar'].'"')->result_array();
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-3">
                            <label for="aadharname2" class="form-label">Second Nominee Name</label>
                            <input readonly value="<?php echo $getNomineeDetail[0]['aadharname']; ?>" type="text" name="aadharname1" class="form-control" id="aadharname2">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-3">
                            <label for="alternatemob2" class="form-label">Second Nominee Contact</label>
                            <input readonly value="<?php echo $getProfileDetail[0]['nominee2']; ?>" type="text" name="alternatemob1" class="form-control" id="alternatemob2">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-10 mb-3">
                            <label for="aadhar2" class="form-label">Second Nominee Aadhar</label>
                            <input readonly value="<?php echo $getProfileDetail[0]['nominee2Aadhar']; ?>" type="text" name="aadhar1" class="form-control" id="aadhar2">
                        </div>
                        <div class="col-1 p-0 mb-3">
                            <button type="button" id="deletebtn2" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="deleteAlternate(this,2)"> <i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                    <!--<div class="col-12 gy-0">-->
                    <!--  <input type="checkbox" name="othershow1" value="1" id="othershow1" onclick="showOther(this,1)">-->
                    <!--  <label for="othershow1" style="display:inline;">Change your first contact number</label>-->
                    <!--</div>-->
                    <?php }else{ ?>
                        <div class="col-12 gy-0">
                          <input type="checkbox" name="othershow2" value="2" style="height:1rem;width:1rem;" id="othershow2" onclick="showOther(this,2)">
                          <label for="othershow2" style="display:inline;font-size:16px!important;">Create your second nominee name</label>
                        </div>
                        <div class="row my-3 d-none" id="other2div">
                            <div class="col-12">
                                <div class="row align-items-end">
                                    <div class="col-lg-3 col-md-4 col-sm-12 mb-2" id="rel2Div">
                                        <label class="form-label">Select Relation</label>
                                        <select class="form-control select2" onchange="showAccordingly(this.value,2)" name="otherrelation2" id="otherrelation2" required>
                                            <?php 
                                                if(count($getRelations) > 0)
                                                {
                                            ?>
                                            <option value="">Select Relation</option>
                                            <?php 
                                                foreach($getRelations as $k=>$v)
                                                {
                                            ?>
                                            <option value="<?php echo $v['Id']; ?>"><?php echo $v['relationName']; ?></option>
                                            <?php } } ?>
                                        </select>
                                    </div>  
                                    <div class="col-lg-auto col-md-auto col-sm-12 mb-2 d-none" id="otherrelationdiv2">
                                        <label class="form-label">Enter Other Relation</label>
                                        <div class="input-group">
                                            <input type="text" aria-describedby="otherClear2" class="form-control" placeholder="Enter Other Relation" name="otherrelationname2" id="otherrelationname2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="border-radius:0;padding:0.7rem;background:white;cursor:pointer;" onclick="clearOtherDiv(2)" id="otherClear2"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start form-group col-lg-3 col-sm-12 col-md-4 mb-2">
                                        <label class="form-label">Enter Nominee Aadhar Number</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nominee2Aadhar" name="nominee2Aadhar" onKeyPress="return checkLength(this.value,12)" onKeyUp="showGoAccordingly(this.value,2)">
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="border-radius: 0;background: white;padding: 0.7rem;cursor:pointer;" onclick="clearAadhar(this,2)"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-sm-12 col-md-auto mb-2">
                                        <button type="button" class="btn btn-primary btn-style-grey disabled disabled-on-loading w-100" id="goBtn2" style="padding: 0.5rem 1.5rem!important;" onclick="checkSpouseDetail(this,2)"> Go</button>
                                    </div>
                                </div>
                                <div class="row d-none mt-2 align-items-end" id="nominee2NameDiv">
                                    <div class="text-start form-group col-lg-3 col-sm-12 col-md-4 mb-2">
                                        <label>Nominee Name</label>
                                        <textarea class="form-control text-success readonly" style="font-weight:bold;" id="nominee2Name" readonly name="nominee2Name"></textarea>
                                    </div>
                                    <div class="text-start form-group col-lg-3 col-sm-12 col-md-5 mb-2">
                                        <label>Enter mobile number that is register in website</label>
                                        <input type="text" class="form-control" id="nominee2Mobile" name="nominee2Mobile">
                                    </div>
                                    <div class="form-group col-lg-auto col-sm-12 col-md-auto mt-3" id="sendotp2div">
                                        <button type="button" class="w-100 btn btn-primary btn-style-grey disabled disabled-on-loading" onclick="sendSpouseOtp(this,2)"> Send OTP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </form><!-- End Profile Edit Form -->
            </div>
            </div>
            <div class="card">
                <div class="card-body pt-3">
                <form id="step3Form">
                    <?php
                        if($getProfileDetail[0]['nominee3'] != NULL || $getProfileDetail[0]['nominee3'] != '')
                        {
                    ?>
                    <div class="row align-items-end">
                        <div class="col-lg-2 col-md-6 col-sm-12 mb-3">
                            <label class="form-label">Relation</label>
                            <select class="form-control select2" name="otherrelation3" required disabled>
                                <?php 
                                    if(count($getRelations) > 0)
                                    {
                                ?>
                                <option value="">Relation</option>
                                <?php 
                                    foreach($getRelations as $k=>$v)
                                    {
                                ?>
                                <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getProfileDetail[0]['relation3']){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                        <div class="col-lg-auto col-md-auto col-sm-12 mb-3 <?php echo (($getProfileDetail[0]['relation3'] != 23) ? 'd-none' : '') ?>" id="otherrelationdiv3">
                            <label class="form-label">Enter Other Relation</label>
                            <input type="text" disabled value="<?php echo (($getProfileDetail[0]['relation3'] == 23) ? $getProfileDetail[0]['othernomineename3'] : '') ?>" aria-describedby="otherClear3" class="form-control" placeholder="Enter Other Relation" name="otherrelationname3" id="otherrelationname3">
                        </div>
                        <?php 
                            $getNomineeDetail = $this->db->query('select * from user where aadhar_id="'.$getProfileDetail[0]['nominee3Aadhar'].'"')->result_array();
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-3">
                            <label for="aadharname3" class="form-label">Third Nominee Name</label>
                            <input readonly value="<?php echo $getNomineeDetail[0]['aadharname']; ?>" type="text" name="aadharname3" class="form-control" id="aadharname3">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-3">
                            <label for="alternatemob3" class="form-label">Third Nominee Contact</label>
                            <input readonly value="<?php echo $getProfileDetail[0]['nominee3']; ?>" type="text" name="alternatemob3" class="form-control" id="alternatemob3">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-10 mb-3">
                            <label for="aadhar3" class="form-label">Third Nominee Aadhar</label>
                            <input readonly value="<?php echo $getProfileDetail[0]['nominee3Aadhar']; ?>" type="text" name="aadhar3" class="form-control" id="aadhar3">
                        </div>
                        <div class="col-1 p-0 mb-3">
                            <button type="button" id="deletebtn3" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="deleteAlternate(this,3)"> <i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                    <!--<div class="col-12 gy-0">-->
                    <!--  <input type="checkbox" name="othershow1" value="1" style="height:1rem;width:1rem;" id="othershow1" onclick="showOther(this,1)">-->
                    <!--  <label for="othershow1" style="display:inline;font-size:16px!important;">Change your first contact number</label>-->
                    <!--</div>-->
                    <?php }else{ ?>
                        <div class="col-12 gy-0">
                          <input type="checkbox" name="othershow3" style="height:1rem;width:1rem;" value="3" id="othershow3" onclick="showOther(this,3)">
                          <label for="othershow3" style="display:inline;font-size:16px!important;">Create your third nominee name</label>
                        </div>
                        <div class="row my-3 d-none" id="other3div">
                            <div class="col-12">
                                <div class="row align-items-end">
                                    <div class="col-lg-3 col-md-4 col-sm-12 mb-2" id="rel3Div">
                                        <label class="form-label">Select Relation</label>
                                        <select class="form-control select2" onchange="showAccordingly(this.value,3)" name="otherrelation3" id="otherrelation3" required>
                                            <?php 
                                                if(count($getRelations) > 0)
                                                {
                                            ?>
                                            <option value="">Select Relation</option>
                                            <?php 
                                                foreach($getRelations as $k=>$v)
                                                {
                                            ?>
                                            <option value="<?php echo $v['Id']; ?>"><?php echo $v['relationName']; ?></option>
                                            <?php } } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-auto col-md-auto col-sm-12 mb-2 d-none" id="otherrelationdiv3">
                                        <label class="form-label">Enter Other Relation</label>
                                        <div class="input-group">
                                            <input type="text" aria-describedby="otherClear3" class="form-control" placeholder="Enter Other Relation" name="otherrelationname3" id="otherrelationname3">
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="border-radius:0;padding:0.7rem;background:white;cursor:pointer;" onclick="clearOtherDiv(3)" id="otherClear3"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start form-group col-lg-3 col-sm-12 col-md-3 mb-2">
                                        <label >Enter Nominee Aadhar Number</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nominee3Aadhar" name="nominee3Aadhar" onKeyPress="return checkLength(this.value,12)" onKeyUp="showGoAccordingly(this.value,3)">
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="border-radius: 0;background: white;padding: 0.7rem;cursor:pointer;" onclick="clearAadhar(this,3)"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-sm-12 col-md-auto mb-2">
                                        <button type="button" class="btn btn-primary btn-style-grey disabled disabled-on-loading w-100" id="goBtn3" style="padding: 0.5rem 1.5rem!important;" onclick="checkSpouseDetail(this,3)"> Go</button>
                                    </div>
                                </div>
                                <div class="row d-none mt-2 align-items-end" id="nominee3NameDiv">
                                    <div class="text-start form-group col-lg-3 col-sm-12 col-md-3 mb-2">
                                        <label>Nominee Name</label>
                                        <textarea class="form-control text-success readonly" style="font-weight:bold;" id="nominee3Name" readonly name="nominee3Name"></textarea>
                                    </div>
                                    <div class="text-start form-group col-lg-3 col-sm-12 col-md-3 mb-2">
                                        <label>Enter mobile number that is register in website</label>
                                        <input type="text" class="form-control" id="nominee3Mobile" name="nominee3Mobile">
                                    </div>
                                    <div class="form-group col-lg-auto col-sm-12 col-md-auto mt-3" id="sendotp3div">
                                        <button type="button" class="w-100 btn btn-primary btn-style-grey disabled disabled-on-loading" onclick="sendSpouseOtp(this,3)"> Send OTP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </form><!-- End Profile Edit Form -->
            </div>
            </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
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
    .swal2-confirm{
    position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 16px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color:#008000!important;
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
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
  
    function checkLength(val,limit)
    {
        if(val.length == limit)
        {
            return false;
        }else{
            return true;
        }
    }
    
    function showGoAccordingly(val,index)
    {
        if(val.length == 12)
        {
            $('#goBtn'+index).removeClass('btn-style-grey').addClass('btn-style-five');
            $('#goBtn'+index).removeClass('disabled');
        }else{
            $('#goBtn'+index).removeClass('btn-style-five').addClass('btn-style-grey');
            $('#goBtn'+index).addClass('disabled');
        }
    }
  
    function clearOtherDiv(index)
    {
        $('#rel'+index+'Div').removeClass('d-none');
        $('#otherrelationdiv'+index).addClass('d-none');
        $('#otherrelationname'+index).val('');
        $('#otherrelation'+index).val('').trigger('change');
    }
    
    function showAccordingly(val,index)
    {
        if(val == '')
        {
            $('#rel'+index+'Div').removeClass('d-none');
            $('#otherrelationdiv'+index).addClass('d-none');
            $('#otherrelation'+index).val('');
        }else{
            if(val == 23)
            {
                $('#rel'+index+'Div').addClass('d-none');
                $('#otherrelationdiv'+index).removeClass('d-none');
                $('#otherrelationname'+index).val('');
            }else{
                $('#rel'+index+'Div').removeClass('d-none');
                $('#otherrelationdiv'+index).addClass('d-none');
                $('#otherrelationname'+index).val('');
            }
        }
    }
    
    function sendSpouseOtp(ele,index)
    {
        if($('#nominee'+index+'Mobile').val() != '')
        {
            let data= new FormData();
            data.append('index',index);
            data.append('mobile',$('#nominee'+index+'Mobile').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('type','aadhar');
            data.append('typeval',$('#nominee'+index+'Aadhar').val());

            $.ajax({
                url:'<?php echo base_url(); ?>user/sendNomineeMobileOtp',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.success('OTP Sent Successfully To - '+parse.vismobile1);
                        Swal.fire({
                            title: '<strong>Enter OTP to proceed </strong>',
                            icon: 'success',
                            allowOutsideClick:false,
                            html:
                                '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="number" class="form-control" id="otp'+index+'"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifySpouseOtp(this,'+index+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendSpouseOtp(this,'+index+')"> Resend OTP</button></div>',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:false
                            }).then((result) => {
                                if(result.isDismissed){
                                    location.reload();
                                }
                            })                      
                  }else if(parse.status == 'username')
                  {
                      Swal.fire({
                            title: '<strong class="text-danger" style="font-size:20px;">'+parse.message+'</strong>',
                            icon: 'error',
                            allowOutsideClick:false,
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:true
                        }).then((result) => {
                            $(ele).removeAttr('disabled');
                        })
                  }else{
                        Swal.fire({
                            title: '<strong class="text-danger" style="font-size:20px;">'+parse.message+'</strong>',
                            icon: 'error',
                            allowOutsideClick:false,
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:true
                        }).then((result) => {
                            $(ele).removeAttr('disabled');
                        })
                  }
              }
            })
        }else{
            toastr.error('Please Enter Valid Mobile Number');
        }
    }
    
    function resendSpouseOtp(ele,index)
    {
        $(ele).attr('disabled','disabled');
        if($('#nominee'+index+'Mobile').val() != '')
        {
            let data= new FormData();
            data.append('mobile',$('#nominee'+index+'Mobile').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('type','aadhar');
            data.append('typeval',$('#nominee'+index+'Aadhar').val());

            $.ajax({
              url:'<?php echo base_url(); ?>user/sendNomineeMobileOtp',
              data:data,
              contentType: false,
              cache: false,
              processData:false,
              type:'post',
              success:function(res)
              {
                  let parse = JSON.parse(res);
                  if(parse.status == 'success')
                  {
                      toastr.success('OTP Sent Successfully To - '+parse.vismobile1);
                      $(ele).removeAttr('disabled');
                  }else{
                      toastr.error(parse.message);
                      $(ele).removeAttr('disabled');
                  }
              }
            })
        }else{
            toastr.error('Please Enter Valid Mobile Number');
            $(ele).removeAttr('disabled');
        }
    }
    
    function verifySpouseOtp(ele,index)
    {
        if($('#otp'+index).val() != '')
        {
            let relation = $('#otherrelation'+index).val();
            if( relation != '')
            {
                if(relation != 23)
                {
                    $(ele).attr('disabled','disabled');
                    let data= new FormData();
                    data.append('otp',$('#otp'+index).val());
                    data.append('index',index);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    data.append('aadhar',$('#nominee'+index+'Aadhar').val());
                    data.append('mobile',$('#nominee'+index+'Mobile').val());
                    data.append('relation',$('#otherrelation'+index).val());
                    $.ajax({
                      url:'<?php echo base_url(); ?>user/verifyNomineeMobileOtp',
                      data:data,
                      contentType: false,
                      cache: false,
                      processData:false,
                      type:'post',
                      success:function(res)
                      {
                          let parse = JSON.parse(res);
                          if(parse.status == 'success')
                          {
                              toastr.success(parse.message);
                              setTimeout(function()
                              {
                                location.reload();
                              },3000);
                          }else{
                              toastr.error(parse.message);
                              $(ele).removeAttr('disabled');
                          }
                      }
                    })   
                }else{
                    if($('#otherrelationname'+index).val() != '')
                    {
                        $(ele).attr('disabled','disabled');
                        let data= new FormData();
                        data.append('otp',$('#otp'+index).val());
                        data.append('index',index);
                        data.append('otherrelation',$('#otherrelationname'+index).val());
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        data.append('aadhar',$('#nominee'+index+'Aadhar').val());
                        data.append('mobile',$('#nominee'+index+'Mobile').val());
                        data.append('relation',$('#otherrelation'+index).val());
                        $.ajax({
                          url:'<?php echo base_url(); ?>user/verifyNomineeMobileOtp',
                          data:data,
                          contentType: false,
                          cache: false,
                          processData:false,
                          type:'post',
                          success:function(res)
                          {
                              let parse = JSON.parse(res);
                              if(parse.status == 'success')
                              {
                                  toastr.success(parse.message);
                                  setTimeout(function()
                                  {
                                    location.reload();
                                  },3000);
                              }else{
                                  toastr.error(parse.message);
                                  $(ele).removeAttr('disabled');
                              }
                          }
                        })
                    }else{
                        toastr.error('Please Enter Other Relation Name');
                        $(ele).removeAttr('disabled');
                    }
                }
            }else{
                toastr.error('Please Select Relation');
            }
        }else{
            toastr.error('Please Enter Valid OTP');
        }
    }
    
    function goToDashboard(ele)
    {
        $(ele).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user";
    }
    
    function verifyDeleteOtp(ele,index)
    {
        $(ele).attr('disabled','disabled');
        let otp = $('#deleteOtpInput').val();
        if(otp != '')
        {
            let data= new FormData();
            data.append('index',index);
            data.append('otp',otp);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/deleteNomineeMobile',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.success(parse.message);
                        setTimeout(function()
                        {
                            location.reload();
                        },3000);
                     }else{
                        $(ele).removeAttr('disabled');
                        toastr.error(parse.message);
                     }
                }
            })   
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter OTP');
        }
    }
    
    function resendDeleteOtp(ele,index)
    {
        $(ele).attr('disabled','disabled');
        let otpdata = new FormData();
        otpdata.append('mobile',$('#alternatemob'+index).val());
        otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendDeleteProfileOtp',
            data:otpdata,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                toastr.success('An OTP has been sent on same number');
                $(ele).removeAttr('disabled');
            }
        })
    }
    
    function deleteAlternate(ele,index)
    {
        Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Nominee</strong>',
            icon: 'error',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete nominee mobile '+index+'?</label></div>',
            showCloseButton: true,
            confirmButtonText:'Yes',
            cancelButtonText:'No',
            showCancelButton: true,
            focusConfirm: false,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                $(ele).attr('disabled','disabled');
                let otpdata = new FormData();
                otpdata.append('mobile',$('#alternatemob'+index).val());
                otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                $.ajax({
                    url:'<?php echo base_url(); ?>user/sendDeleteProfileOtp',
                    data:otpdata,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('An OTP has been sent on same number');
                        $(ele).removeAttr('disabled');
                        Swal.fire({
                          title: '<strong>Enter OTP to proceed </strong>',
                          icon: 'success',
                          allowOutsideClick:false,
                          html:
                            '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="text" class="form-control" id="deleteOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteOtp(this,'+index+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendDeleteOtp(this,'+index+')"> Resend OTP</button></div>',
                          showCloseButton: true,
                          showCancelButton: false,
                          focusConfirm: false,
                          showConfirmButton:false
                        })
                    }
                })
            }
        })
    }
    
    function clearAadhar(ele,index)
    {
        $(ele).attr('disabled','disabled');
        $('#nominee'+index+'Aadhar').attr('readonly',false);
        $('#nominee'+index+'Aadhar').val('');
        $('#nominee'+index+'Name').val('');
        $('#nominee'+index+'NameDiv').addClass('d-none');
        $(ele).removeAttr('disabled');
    }
    
    function checkSpouseDetail(ele,index)
    {
        $(ele).attr('disabled','disabled');
        let aadharNumber = $('#nominee'+index+'Aadhar').val();
        if(aadharNumber != '')
        {
            let relation = $('#otherrelation'+index).val();
            if( relation != '')
            {
                if(relation != 23)
                {
                    $('#nominee'+index+'Aadhar').attr('readonly',true);
                    let data = new FormData();
                    data.append('aadhar',aadharNumber);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/checkNomineeDetail',  
                        data:data,
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
                                $('#spouseMobile'+index).val(parse.data.mobile1);
                                $('#nominee'+index+'NameDiv').removeClass('d-none');
                                $('#nominee'+index+'Name').val(parse.spouseName); 
                                $('#detail'+index+'spousediv').removeClass('d-none');
                            }else{
                                Swal.fire({
                                    title: '<strong class="text-danger" style="font-size:20px;">'+parse.message+'</strong>',
                                    icon: 'error',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true
                                }).then((result) => {
                                    $(ele).removeAttr('disabled');
                                    if (result.isConfirmed) {
                                        $('#nominee'+index+'NameDiv').addClass('d-none');
                                        $('#detail'+index+'spousediv').addClass('d-none');
                                    }else if(result.isDismissed)
                                    {
                                        $('#nominee'+index+'NameDiv').addClass('d-none');
                                        $('#detail'+index+'spousediv').addClass('d-none');
                                    }
                                })
                            }
                        }
                    });
                }else{
                    if($('#otherrelationname'+index).val() != '')
                    {
                        $('#nominee'+index+'Aadhar').attr('readonly',true);
                        let data = new FormData();
                        data.append('aadhar',aadharNumber);
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        $.ajax({
                            url:'<?php echo base_url(); ?>user/checkNomineeDetail',  
                            data:data,
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
                                    $('#spouseMobile'+index).val(parse.data.mobile1);
                                    $('#nominee'+index+'NameDiv').removeClass('d-none');
                                    $('#nominee'+index+'Name').val(parse.spouseName); 
                                    $('#detail'+index+'spousediv').removeClass('d-none');
                                }else{
                                    Swal.fire({
                                        title: '<strong class="text-danger" style="font-size:20px;">'+parse.message+'</strong>',
                                        icon: 'error',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: false,
                                        showConfirmButton:true
                                    }).then((result) => {
                                        $(ele).removeAttr('disabled');
                                        if (result.isConfirmed) {
                                            $('#nominee'+index+'NameDiv').addClass('d-none');
                                            $('#detail'+index+'spousediv').addClass('d-none');
                                        }else if(result.isDismissed)
                                        {
                                            $('#nominee'+index+'NameDiv').addClass('d-none');
                                            $('#detail'+index+'spousediv').addClass('d-none');
                                        }
                                    })
                                }
                            }
                        });
                    }else{
                        toastr.error('Please Enter Other Relation Name');
                        $(ele).removeAttr('disabled');
                    }
                }
            }else{
                toastr.error('Please Select Relation');
                $(ele).removeAttr('disabled');
            }
        }else{
            $(ele).removeAttr('disabled');
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Aadhar Number</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Please Enter Aadhar Number</label></div>',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#nominee'+index+'NameDiv').addClass('d-none');
                    $('#detail'+index+'spousediv').addClass('d-none');
                }else if(result.isDismissed)
                {
                    $('#nominee'+index+'NameDiv').addClass('d-none');
                    $('#detail'+index+'spousediv').addClass('d-none');
                }
            })
        }
    }
    
    function deleteMarriageInfo(ele)
    {
        Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Spouse Detail</strong>',
            icon: 'error',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete spouse details?</label></div>',
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                $(ele).attr('disabled','disabled');
                let data = new FormData();
                data.append('mobile',$('#registeredmobile').val());
                data.append('name',$('#spouseAadharName').val());
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                $.ajax({
                    url:'<?php echo base_url(); ?>user/sendSpouseOtp',
                    data:data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('OTP Sent Successfully To - '+res);
                        Swal.fire({
                          title: '<strong>Enter otp to proceed </strong>',
                          icon: 'success',
                          allowOutsideClick:false,
                          html:
                            '<div class="form-group mb-3"><label class="form-label">Enter Otp</label><input type="number" class="form-control" id="deleteOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteOtp(this)"> Verify Otp</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendDeleteOtp(this)"> Resend Otp</button></div>',
                          showCloseButton: true,
                          showCancelButton: false,
                          focusConfirm: false,
                          showConfirmButton:false
                        })
                    }
                });
            }
        })
    }
    
    function showOtpAccordingly(val,index)
    {
        if(val.length == 10)
        {
            $('#sendotp'+index+'div button').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#sendotp'+index+'div button').removeClass('disabled');
        }else{
            $('#sendotp'+index+'div button').removeClass('btn-style-five').addClass('btn-style-grey');
            $('#sendotp'+index+'div button').addClass('disabled');
        }
    }
    
    function showOther(ele,index)
    {
      if(ele.checked)
      {
          $('#other'+index+'div').removeClass('d-none');
          $('#othermob'+index).attr('required',true);
          $('#othermob'+index).attr('name','othermob'+index);
          $('#othermob'+index).val('');
      }else{
          $('#other'+index+'div').addClass('d-none');
          $('#othermob'+index).attr('required',false);
          $('#othermob'+index).removeAttr('name');
          $('#othermob'+index).val('');
      }
    }
  </script>