<?php 
    $getPaymentSettings = $this->db->query('select * from settings where name="personPayment"')->result_array();
?>
<style>
    #the-count {
      float: right;
      padding: 0.1rem 0 0 0;
      font-size: 0.875rem;
    }
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
    select{
        appearance:auto!important;
    }
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
      font-weight: bold!important;
      color: black!important;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle mb-0">
      <p class="mb-0">Welcome,<b><?= $_SESSION['aadharName']; ?>!</b></p>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12 px-1">

          <div class="<?php if($pn !=6 && $pn != 5 && $pn != 1){ echo "card";} ?>">
            <div class="<?php if($pn !=6 && $pn != 5 && $pn != 1){ echo "card-body p-4";} ?>">
              <!-- Bordered Tabs -->
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
                    
                    <div id="step1" class="<?php if($pn != 1){ echo "d-none"; } ?>">
                        <?php 
                            $getUserDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array();
                        ?>
                        <form action="<?php echo base_url(); ?>user/updateMissingStepFirDetail" id="step1form" method="post">
                            <?php 
                                $csrf = array(
                                  'name' => $this->security->get_csrf_token_name(),
                                  'hash' => $this->security->get_csrf_hash()
                                  );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="row mb-3">
                                        <div class="form-group col-md-3">
                                          <label for="fullName" class="col-form-label">Complainant Aadhar</label>
                                          <input type="text" class="form-control" id="aadharNumber" name="aadharNumber" value="<?php echo $_SESSION['aadhar_id']; ?>" placeholder="Enter Complainant Aadhar Number" readonly>
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="ownerName" class="col-form-label">Complainant Name</label>
                                          <input type="text" class="form-control" value="<?php echo strtoupper($getUserDetail[0]['aadharname']); ?>" id="complainantName" name="complainantName" placeholder="Enter Complainant Name" readonly>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body py-3">
                                    <h5 style="font-weight:bold;" class="text-danger text-center">Add Missing Person Details</h5>
                                    <hr>
                                    <div class="row mb-3 align-items-end">
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-lg-3 col-sm-12 mb-3">
                                                    <label for="fullName" class="col-form-label">Is Person Registered in our website?</label>
                                                    <select class="form-control" name="isRegistered" id="isRegistered" required onchange="showAccordingly(this.value)">
                                                        <option value="">Select choice</option>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                </div>  
                                            </div>
                                            <div class="row align-items-end d-none" id="registereddiv">
                                                <div class="text-start form-group col-lg-3 col-sm-12 col-md-4 mb-3">
                                                    <label >Missing Person Aadhar</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="missingaadhar" onKeyPress="return checkLength(this.value,12)" onKeyUp="showGoAccordingly(this.value)">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" style="border-radius: 0;background: #ff2001;color: white;padding: 0.6rem 0.75rem;cursor:pointer;" onclick="clearAadhar()"><i class="fa fa-times"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3 col-lg-auto col-sm-12 mb-3 text-center">
                                                    <button type="button" class="btn btn-primary btn-style-grey disabled disabled-on-loading" id="goBtn" style="padding: 1.2rem!important;padding-top: 7px!important;padding-bottom: 7px!important;" onclick="getAadharName(this)"> Go</button>
                                                </div>
                                                <div class="form-group col-md-4 col-sm-12 col-lg-3 mb-3 registerednamediv d-none">
                                                    <label for="missingdate" class="col-form-label">Select Missing Date</label>
                                                    <input type="date" class="form-control" id="missingdate" max="<?php echo date('Y-m-d'); ?>">
                                                </div>
                                                <div class="form-group col-md-auto col-lg-3 col-sm-12 mb-3 registerednamediv d-none">
                                                    <label for="ownerName" class="col-form-label">Missing Person Name</label>
                                                    <input type="text" class="form-control" id="missingName" placeholder="Enter Missing Person Name">
                                                </div>  
                                                <div class="form-group col-md-2 col-lg-3 col-sm-12 mb-3 registerednamediv d-none">
                                                    <label for="isNominee" class="col-form-label">Nominee</label>
                                                    <input type="text" class="form-control" id="isNominee">
                                                </div>  
                                            </div>
                                            <div class="row d-none" id="nonregistereddiv">
                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                    <div class="row align-items-end">
                                                        <div class="form-group col-md-4 col-lg-3 mb-3">
                                                            <label for="missingstate" class=" col-form-label">Missing Person Aadhar</label>
                                                            <input type="number" onKeyPress="return checkLength(this.value,12)" onchange="checkAadhar(this,this.value)" class="form-control" id="missingnonaadhar" placeholder="Enter Missing Person Aadhar">
                                                        </div>
                                                        <!--<div class="form-group col-md-4 col-lg-3 mb-3 col-sm-12 text-center">-->
                                                        <!--    <button type="button" class="btn btn-primary next disabled-on-loading" onclick="getPreviousDetail(this)"> Check Details</button>-->
                                                        <!--</div>-->
                                                        <div class="form-group col-md-4 col-sm-12 col-lg-3 mb-3">
                                                            <label for="missingdate" class="col-form-label">Select Missing Date</label>
                                                            <input type="date" class="form-control" id="missingnondate" max="<?php echo date('Y-m-d'); ?>">
                                                        </div>
                                                        <div class="form-group col-md-4 col-lg-3 mb-3">
                                                            <label for="ownerName" class="col-form-label">Missing Person Name</label>
                                                            <input type="text" class="form-control" id="missingnonname" placeholder="Enter Missing Person Name">
                                                        </div>
                                                        <div class="form-group col-md-4 col-lg-3 mb-3">
                                                            <label class="col-form-label">Father Name</label>
                                                            <input type="text" class="form-control" id="missingnonfathername" placeholder="Enter Father Name">
                                                        </div>
                                                        <div class="form-group col-md-4 col-lg-3 mb-3">
                                                            <label class="col-form-label">Date of Birth</label>
                                                            <input type="date" max="<?php echo date('Y-m-d') ?>" class="form-control" id="missingnondob">
                                                        </div>
                                                        <div class="form-group col-md-4 col-lg-3 mb-3">
                                                            <label class="col-form-label">Gender</label>
                                                            <select class="form-control" id="missingnongender">
                                                                <option value="">Select Gender</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4 col-lg-3 mb-3">
                                                            <label class="col-form-label">Religion</label>
                                                            <select class="form-control" id="missingnonreligion" style="appearance:auto;">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body py-3">
                                    <h5 style="font-weight:bold;" class="text-danger text-center">Please Provide FIR Details</h5>
                                    <p class="text-left d-none" id="nomineeYesNote" style="font-size:19px;"><small class="text-dark"><b><span class="text-danger">Note: </span>We found that you are a nominee  of missing person. So you can skip filling of FIR details</b></small></p>
                                    <p class="text-left d-none" id="nomineeNoNote" style="font-size:19px;"><small class="text-dark"><b><span class="text-danger">Note: </span>We found that you are not a nominee  of missing person. So FIR details filling is compulsory</b></small></p>
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="form-group col-md-6 col-lg-3">
                                            <label for="firstate" class=" col-form-label">Select FIR State <span id="stateoptional" class="text-danger">*</span></label>
                                            <select id="firstate" name="firstate" required class="form-control select2">
                                                <option value="">Select FIR State</option>
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
                                        <div class="form-group col-md-6 col-lg-3">
                                            <label for="firdistrict" class="col-form-label">Select FIR District <span id="distoptional" class="text-danger">*</span></label>
                                            <select id="firDistrict" name="firdistrict" required class="form-control select2">
                                                <option value="">Select FIR District</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 col-lg-3">
                                            <label for="fircity" class="col-form-label">Enter FIR City <span id="cityoptional" class="text-danger">*</span></label>
                                            <select id="fircity" name="fircity" required class="select2 form-control">
                                                <option value="">Select FIR City</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 col-lg-3">
                                            <label for="firvillage" class="col-form-label">Enter FIR Village (Optional)</label>
                                            <input type="text" name="firvillage" class="form-control" id="firvillage" placeholder="Enter FIR Village">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="form-group col-md-6 col-lg-3">
                                            <label for="policeThanaName" class="col-form-label">Enter Police Thana Name <span id="policethanaoptional" class="text-danger">*</span></label>
                                            <input type="text" required name="policeThanaName" class="form-control" id="policeThanaName" placeholder="Enter Police Thana Name">
                                        </div>
                                        <div class="form-group col-md-6 col-lg-3">
                                            <label for="firdate" class="col-form-label">Select FIR Date <span id="firdateoptional" class="text-danger">*</span></label>
                                            <input type="date" required name="firdate" class="form-control" id="firdate" max="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                        <div class="form-group col-md-6 col-lg-3">
                                            <label for="firNumber" class="col-form-label">Enter FIR Number <span id="firnumberoptional" class="text-danger">*</span></label>
                                            <input type="text" required name="firNumber" class="form-control" id="firNumber" placeholder="Enter FIR Number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-auto col-md-auto col-sm-12 mb-3">
                                            <button type="submit" class="next btn btn-primary disabled-on-loading" id="btn1"> Next</button>  
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row mb-3 <?php if($pn != 2){ echo "d-none";} ?>" id="step2">
                        <form action="<?php echo base_url(); ?>user/personstep2" id="step2form" class="col-md-12" method="post">
                            <div class="row form-group mx-0 mb-0">
                                <div class="col-md-auto col-sm-12 col-lg-4 form-group">
                                    <h5 class="form-label mb-2">An OTP has been sent to your mobile number (<?php echo substr_replace($_SESSION['loginmob'],'xxxxxxx',0,7); ?>).</h5>
                                </div>
                            </div>
                            <div class="row form-group mx-0 mb-3">
                                <div class="col-md-auto col-sm-12 col-lg-4 form-group">
                                    <label class="form-label">Enter OTP <span class="text-danger">*</span></label>
                                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                    <input type="text" class="form-control" name="otp" required>
                                </div>
                            </div>
                            <div class="row form-group mx-0">
                                <div class="col-md-auto col-sm-12 col-lg-auto mb-3">
                                    <button type="submit" class="btn btn-primary w-100 save disabled-on-loading" id="btn2"> Submit</button>
                                </div>
                                <div class="col-md-auto col-sm-12 col-lg-auto mb-3">
                                    <button type="button" class="btn btn-primary w-100 next disabled-on-loading" onclick="resendFirOtp(this)"> Resend OTP</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row mb-3 <?php if($pn != 3){ echo "d-none";} ?>" id="step3">
                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                            <div class="form-group">
                                <h5 class="text-success"><b>Missing Complaint Generated</b></h5>
                            </div>
                            <div class="form-group">
                                <p><b>Missing Id - <?php echo $_SESSION['missingPersonId']; ?></b></p>
                            </div>
                            <div class="form-group">
                                <p>Fir information you submitted is valid.</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <button type="button" class="next btn btn-primary disabled-on-loading" id="btn3Next"> Proceed</button>
                            </div>
                        </div>
                    </div>
                    <?php 
                        if(isset($_SESSION['missingPersonId']))
                        {
                            $getMissingDetails = $this->db->query('select * from missingperson where missingId='.$_SESSION['missingPersonId'])->result_array();
                            if(count($getMissingDetails) > 0)
                            {
                                $getFullMissingDetails = $this->db->query('select * from missingpersondetail where missingId='.$getMissingDetails[0]['Id'])->result_array();
                                $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getMissingDetails[0]['missingaadhar'].'"')->result_array();   
                            }else{
                                $getFullMissingDetails = array();
                                $getUserDetail = array();
                            }
                            if(count($getUserDetail) > 0)
                            {
                    ?>
                    <div class="row mb-3 <?php if($pn != 4){ echo "d-none";} ?>" id="step4">
                        <form action="<?php echo base_url(); ?>user/updateMissingStep4Detail" id="step4form" class="col-md-12">
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 style="font-weight:bold;text-align:center;" class="text-danger">Missing Complain for person (Missing-id:- <?php echo $_SESSION['missingPersonId']; ?>)</h5>
                                </div>
                            </div>
                            <hr>
                            <input type="hidden" name="isAvailable" value="1">
                            <div class="row mb-3">
                                <div class="form-group col-md-4">
                                    <label for="missingstate" class=" col-form-label">Aadhar Number</label>
                                    <input type="text" class="form-control" value="<?php echo $getUserDetail[0]['aadhar_id']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="missingstate" class=" col-form-label">Name (in Aadhar)</label>
                                    <input type="text" class="form-control" value="<?php echo $getUserDetail[0]['aadharname']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Father Name (in Aadhar)</label>
                                    <input type="text" class="form-control" value="<?php echo $getUserDetail[0]['careof']; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Date of Birth</label>
                                    <input type="text" class="form-control" value="<?php echo date('d-m-Y',strtotime($getUserDetail[0]['dob'])); ?>" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Gender</label>
                                    <input type="text" class="form-control" value="<?php echo $getUserDetail[0]['gender']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Religion</label>
                                    <select class="form-control" style="appearance:auto;" required name="religion" <?php if($getUserDetail[0]['religion'] != NULL){ echo "disabled"; } ?>>
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
                                        <option value="<?php echo $v['religionName']; ?>" <?php if(strtolower($getUserDetail[0]['religion']) == strtolower($v['religionName'])){ echo "selected"; } ?>><?php echo $v['religionName']; ?></option>
                                        <?php } ?>
                                        <?php }else{ ?>
                                            <option value="Other" <?php if(strtolower($getUserDetail[0]['religion']) == 'Other'){ echo "selected"; } ?>>Other</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <h5 style="font-weight:bold;" class="text-danger text-center">Current address of missing person</h5>
                            <hr>
                            <?php 
                                if($getUserDetail[0]['curaddress'] != '' || $getUserDetail[0]['curaddress'] != NULL)
                                {
                            ?>
                            <div class="row mb-3">
                                <div class="col-md-6 col-lg-6 form-group">
                                    <label for="address" class="col-form-label">Address</label>
                                    <input type="text" class="form-control" <?php if($getUserDetail[0]['curaddress'] != '' || $getUserDetail[0]['curaddress'] != NULL){ echo "disabled"; } ?> name="curaddress" required  id="curaddress" value="<?php echo (($getUserDetail[0]['curaddress'] != '') ? $getUserDetail[0]['curaddress'] : ''); ?>">
                                </div>
                                <div class="col-md-6 col-lg-6 form-group">
                                    <label for="state" class="col-form-label">State</label>
                                    <select name="curstate" <?php if($getUserDetail[0]['curstate'] != '' || $getUserDetail[0]['curstate'] != NULL){ echo "disabled"; } ?> required id="curstate" class="form-control select2">
                                        <option value="All">Select State</option>
                                        <option value="Andhra Pradesh" <?php if($getUserDetail[0]['curstate'] == 'Andhra Pradesh'){ echo "selected"; } ?>>Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands"<?php if($getUserDetail[0]['curstate'] == 'Andaman and Nicobar Islands'){ echo "selected"; } ?>>Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh"<?php if($getUserDetail[0]['curstate'] == 'Arunachal Pradesh'){ echo "selected"; } ?>>Arunachal Pradesh</option>
                                        <option value="Assam"<?php if($getUserDetail[0]['curstate'] == 'Assam'){ echo "selected"; } ?>>Assam</option>
                                        <option value="Bihar"<?php if($getUserDetail[0]['curstate'] == 'Bihar'){ echo "selected"; } ?>>Bihar</option>
                                        <option value="Chandigarh"<?php if($getUserDetail[0]['curstate'] == 'Chandigarh'){ echo "selected"; } ?>>Chandigarh</option>
                                        <option value="Chhattisgarh"<?php if($getUserDetail[0]['curstate'] == 'Chhattisgarh'){ echo "selected"; } ?>>Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli" <?php if($getUserDetail[0]['curstate'] == 'Dadar and Nagar Haveli'){ echo "selected"; } ?>>Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu" <?php if($getUserDetail[0]['curstate'] == 'Daman and Diu'){ echo "selected"; } ?>>Daman and Diu</option>
                                        <option value="Delhi" <?php if($getUserDetail[0]['curstate'] == 'Delhi'){ echo "selected"; } ?>>Delhi</option>
                                        <option value="Lakshadweep" <?php if($getUserDetail[0]['curstate'] == 'Lakshadweep'){ echo "selected"; } ?>>Lakshadweep</option>
                                        <option value="Puducherry" <?php if($getUserDetail[0]['curstate'] == 'Puducherry'){ echo "selected"; } ?>>Puducherry</option>
                                        <option value="Goa" <?php if($getUserDetail[0]['curstate'] == 'Goa'){ echo "selected"; } ?>>Goa</option>
                                        <option value="Gujarat" <?php if($getUserDetail[0]['curstate'] == 'Gujarat'){ echo "selected"; } ?>>Gujarat</option>
                                        <option value="Haryana" <?php if($getUserDetail[0]['curstate'] == 'Haryana'){ echo "selected"; } ?>>Haryana</option>
                                        <option value="Himachal Pradesh" <?php if($getUserDetail[0]['curstate'] == 'Himachal Pradesh'){ echo "selected"; } ?>>Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir" <?php if($getUserDetail[0]['curstate'] == 'Jammu and Kashmir'){ echo "selected"; } ?>>Jammu and Kashmir</option>
                                        <option value="Jharkhand" <?php if($getUserDetail[0]['curstate'] == 'Jharkhand'){ echo "selected"; } ?>>Jharkhand</option>
                                        <option value="Karnataka" <?php if($getUserDetail[0]['curstate'] == 'Karnataka'){ echo "selected"; } ?>>Karnataka</option>
                                        <option value="Kerala" <?php if($getUserDetail[0]['curstate'] == 'Kerala'){ echo "selected"; } ?>>Kerala</option>
                                        <option value="Madhya Pradesh" <?php if($getUserDetail[0]['curstate'] == 'Madhya Pradesh'){ echo "selected"; } ?>>Madhya Pradesh</option>
                                        <option value="Maharashtra" <?php if($getUserDetail[0]['curstate'] == 'Maharashtra'){ echo "selected"; } ?>>Maharashtra</option>
                                        <option value="Manipur" <?php if($getUserDetail[0]['curstate'] == 'Manipur'){ echo "selected"; } ?>>Manipur</option>
                                        <option value="Meghalaya" <?php if($getUserDetail[0]['curstate'] == 'Meghalaya'){ echo "selected"; } ?>>Meghalaya</option>
                                        <option value="Mizoram" <?php if($getUserDetail[0]['curstate'] == 'Mizoram'){ echo "selected"; } ?>>Mizoram</option>
                                        <option value="Nagaland" <?php if($getUserDetail[0]['curstate'] == 'Nagaland'){ echo "selected"; } ?>>Nagaland</option>
                                        <option value="Odisha" <?php if($getUserDetail[0]['curstate'] == 'Odisha'){ echo "selected"; } ?>>Odisha</option>
                                        <option value="Punjab" <?php if($getUserDetail[0]['curstate'] == 'Punjab'){ echo "selected"; } ?>>Punjab</option>
                                        <option value="Rajasthan" <?php if($getUserDetail[0]['curstate'] == 'Rajasthan'){ echo "selected"; } ?>>Rajasthan</option>
                                        <option value="Sikkim" <?php if($getUserDetail[0]['curstate'] == 'Sikkim'){ echo "selected"; } ?>>Sikkim</option>
                                        <option value="Tamil Nadu" <?php if($getUserDetail[0]['curstate'] == 'Tamil Nadu'){ echo "selected"; } ?>>Tamil Nadu</option>
                                        <option value="Telangana" <?php if($getUserDetail[0]['curstate'] == 'Telangana'){ echo "selected"; } ?>>Telangana</option>
                                        <option value="Tripura" <?php if($getUserDetail[0]['curstate'] == 'Tripura'){ echo "selected"; } ?>>Tripura</option>
                                        <option value="Uttar Pradesh" <?php if($getUserDetail[0]['curstate'] == 'Uttar Pradesh'){ echo "selected"; } ?>>Uttar Pradesh</option>
                                        <option value="Uttarakhand" <?php if($getUserDetail[0]['curstate'] == 'Uttarakhand'){ echo "selected"; } ?>>Uttarakhand</option>
                                        <option value="West Bengal" <?php if($getUserDetail[0]['curstate'] == 'West Bengal'){ echo "selected"; } ?>>West Bengal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 col-lg-4 form-group">
                                    <label for="district" class="col-form-label">District</label>
                                    <?php 
                                        if($getUserDetail[0]['curaddress'] == '' || $getUserDetail[0]['curaddress'] == NULL){
                                    ?>
                                    <select name="curdistrict" required <?php if($getUserDetail[0]['curaddress'] != '' || $getUserDetail[0]['curaddress'] != NULL){ echo "disabled"; } ?> id="curdistrict" class="form-control select2">
                                        <option value="">Select District</option>
                                    </select>
                                    <?php }else{ ?>
                                        <input type="text" name="curdistrict" class="form-control" readonly id="curdistrict" value="<?php echo $getUserDetail[0]['curdistrict']; ?>">
                                    <?php } ?>
                                </div>
                                <div class="col-md-4 col-lg-4 form-group">
                                    <label for="curcity" class="col-form-label">City</label>
                                    <input type="text" class="form-control" required <?php if($getUserDetail[0]['curcity'] != '' || $getUserDetail[0]['curcity'] != NULL){ echo "disabled"; } ?> name="curcity" id="curcity" value="<?php echo $getUserDetail[0]['curcity']; ?>">
                                </div>
                                <div class="col-md-4 col-lg-4 form-group">
                                    <label for="pincode" class="col-form-label">Pincode</label>
                                    <input type="text" name="curpincode" <?php if($getUserDetail[0]['curpincode'] != '' || $getUserDetail[0]['curpincode'] != NULL){ echo "disabled"; } ?> required class="form-control" id="curpincode" value="<?php echo $getUserDetail[0]['curpincode']; ?>">
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="row mb-3">
                                    <div class="col-md-6 col-lg-6 form-group">
                                        <label for="address" class="col-form-label">Address</label>
                                        <input type="text" class="form-control" <?php if($getMissingDetails[0]['fathercurrentaddress'] != '' || $getMissingDetails[0]['fathercurrentaddress'] != NULL){ echo "disabled"; } ?> name="curaddress" required  id="curaddress" value="<?php echo (($getMissingDetails[0]['fathercurrentaddress'] != '') ? $getMissingDetails[0]['fathercurrentaddress'] : ''); ?>">
                                    </div>
                                    <div class="col-md-6 col-lg-6 form-group">
                                        <label for="state" class="col-form-label">State</label>
                                        <select name="curstate" <?php if($getMissingDetails[0]['fatherstate'] != '' || $getMissingDetails[0]['fatherstate'] != NULL){ echo "disabled"; } ?> required id="curstate" class="form-control select2">
                                            <option value="All">Select State</option>
                                            <option value="Andhra Pradesh" <?php if($getMissingDetails[0]['fatherstate'] == 'Andhra Pradesh'){ echo "selected"; } ?>>Andhra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands"<?php if($getMissingDetails[0]['fatherstate'] == 'Andaman and Nicobar Islands'){ echo "selected"; } ?>>Andaman and Nicobar Islands</option>
                                            <option value="Arunachal Pradesh"<?php if($getMissingDetails[0]['fatherstate'] == 'Arunachal Pradesh'){ echo "selected"; } ?>>Arunachal Pradesh</option>
                                            <option value="Assam"<?php if($getMissingDetails[0]['fatherstate'] == 'Assam'){ echo "selected"; } ?>>Assam</option>
                                            <option value="Bihar"<?php if($getMissingDetails[0]['fatherstate'] == 'Bihar'){ echo "selected"; } ?>>Bihar</option>
                                            <option value="Chandigarh"<?php if($getMissingDetails[0]['fatherstate'] == 'Chandigarh'){ echo "selected"; } ?>>Chandigarh</option>
                                            <option value="Chhattisgarh"<?php if($getMissingDetails[0]['fatherstate'] == 'Chhattisgarh'){ echo "selected"; } ?>>Chhattisgarh</option>
                                            <option value="Dadar and Nagar Haveli" <?php if($getMissingDetails[0]['fatherstate'] == 'Dadar and Nagar Haveli'){ echo "selected"; } ?>>Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu" <?php if($getMissingDetails[0]['fatherstate'] == 'Daman and Diu'){ echo "selected"; } ?>>Daman and Diu</option>
                                            <option value="Delhi" <?php if($getMissingDetails[0]['fatherstate'] == 'Delhi'){ echo "selected"; } ?>>Delhi</option>
                                            <option value="Lakshadweep" <?php if($getMissingDetails[0]['fatherstate'] == 'Lakshadweep'){ echo "selected"; } ?>>Lakshadweep</option>
                                            <option value="Puducherry" <?php if($getMissingDetails[0]['fatherstate'] == 'Puducherry'){ echo "selected"; } ?>>Puducherry</option>
                                            <option value="Goa" <?php if($getMissingDetails[0]['fatherstate'] == 'Goa'){ echo "selected"; } ?>>Goa</option>
                                            <option value="Gujarat" <?php if($getMissingDetails[0]['fatherstate'] == 'Gujarat'){ echo "selected"; } ?>>Gujarat</option>
                                            <option value="Haryana" <?php if($getMissingDetails[0]['fatherstate'] == 'Haryana'){ echo "selected"; } ?>>Haryana</option>
                                            <option value="Himachal Pradesh" <?php if($getMissingDetails[0]['fatherstate'] == 'Himachal Pradesh'){ echo "selected"; } ?>>Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir" <?php if($getMissingDetails[0]['fatherstate'] == 'Jammu and Kashmir'){ echo "selected"; } ?>>Jammu and Kashmir</option>
                                            <option value="Jharkhand" <?php if($getMissingDetails[0]['fatherstate'] == 'Jharkhand'){ echo "selected"; } ?>>Jharkhand</option>
                                            <option value="Karnataka" <?php if($getMissingDetails[0]['fatherstate'] == 'Karnataka'){ echo "selected"; } ?>>Karnataka</option>
                                            <option value="Kerala" <?php if($getMissingDetails[0]['fatherstate'] == 'Kerala'){ echo "selected"; } ?>>Kerala</option>
                                            <option value="Madhya Pradesh" <?php if($getMissingDetails[0]['fatherstate'] == 'Madhya Pradesh'){ echo "selected"; } ?>>Madhya Pradesh</option>
                                            <option value="Maharashtra" <?php if($getMissingDetails[0]['fatherstate'] == 'Maharashtra'){ echo "selected"; } ?>>Maharashtra</option>
                                            <option value="Manipur" <?php if($getMissingDetails[0]['fatherstate'] == 'Manipur'){ echo "selected"; } ?>>Manipur</option>
                                            <option value="Meghalaya" <?php if($getMissingDetails[0]['fatherstate'] == 'Meghalaya'){ echo "selected"; } ?>>Meghalaya</option>
                                            <option value="Mizoram" <?php if($getMissingDetails[0]['fatherstate'] == 'Mizoram'){ echo "selected"; } ?>>Mizoram</option>
                                            <option value="Nagaland" <?php if($getMissingDetails[0]['fatherstate'] == 'Nagaland'){ echo "selected"; } ?>>Nagaland</option>
                                            <option value="Odisha" <?php if($getMissingDetails[0]['fatherstate'] == 'Odisha'){ echo "selected"; } ?>>Odisha</option>
                                            <option value="Punjab" <?php if($getMissingDetails[0]['fatherstate'] == 'Punjab'){ echo "selected"; } ?>>Punjab</option>
                                            <option value="Rajasthan" <?php if($getMissingDetails[0]['fatherstate'] == 'Rajasthan'){ echo "selected"; } ?>>Rajasthan</option>
                                            <option value="Sikkim" <?php if($getMissingDetails[0]['fatherstate'] == 'Sikkim'){ echo "selected"; } ?>>Sikkim</option>
                                            <option value="Tamil Nadu" <?php if($getMissingDetails[0]['fatherstate'] == 'Tamil Nadu'){ echo "selected"; } ?>>Tamil Nadu</option>
                                            <option value="Telangana" <?php if($getMissingDetails[0]['fatherstate'] == 'Telangana'){ echo "selected"; } ?>>Telangana</option>
                                            <option value="Tripura" <?php if($getMissingDetails[0]['fatherstate'] == 'Tripura'){ echo "selected"; } ?>>Tripura</option>
                                            <option value="Uttar Pradesh" <?php if($getMissingDetails[0]['fatherstate'] == 'Uttar Pradesh'){ echo "selected"; } ?>>Uttar Pradesh</option>
                                            <option value="Uttarakhand" <?php if($getMissingDetails[0]['fatherstate'] == 'Uttarakhand'){ echo "selected"; } ?>>Uttarakhand</option>
                                            <option value="West Bengal" <?php if($getMissingDetails[0]['fatherstate'] == 'West Bengal'){ echo "selected"; } ?>>West Bengal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4 col-lg-4 form-group">
                                        <label for="district" class="col-form-label">District</label>
                                        <?php 
                                            if($getMissingDetails[0]['fatherdistrict'] == '' || $getMissingDetails[0]['fatherdistrict'] == NULL){
                                        ?>
                                        <select name="curdistrict" required <?php if($getMissingDetails[0]['fatherdistrict'] != '' || $getMissingDetails[0]['fatherdistrict'] != NULL){ echo "disabled"; } ?> id="curdistrict" class="form-control select2">
                                            <option value="">Select District</option>
                                        </select>
                                        <?php }else{ ?>
                                            <input type="text" name="curdistrict" class="form-control" readonly id="curdistrict" value="<?php echo $getMissingDetails[0]['fatherdistrict']; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-4 col-lg-4 form-group">
                                        <label for="curcity" class="col-form-label">City</label>
                                        <input type="text" class="form-control" required <?php if($getMissingDetails[0]['fathercity'] != '' || $getMissingDetails[0]['fathercity'] != NULL){ echo "disabled"; } ?> name="curcity" id="curcity" value="<?php echo $getMissingDetails[0]['fathercity']; ?>">
                                    </div>
                                    <div class="col-md-4 col-lg-4 form-group">
                                        <label for="pincode" class="col-form-label">Pincode</label>
                                        <input type="text" name="curpincode" <?php if($getMissingDetails[0]['fatherpincode'] != '' || $getMissingDetails[0]['fatherpincode'] != NULL){ echo "disabled"; } ?> required class="form-control" id="curpincode" value="<?php echo $getMissingDetails[0]['fatherpincode']; ?>">
                                    </div>
                                </div>
                            <?php } ?>
                            <hr>
                            <h5 style="font-weight:bold;" class="text-danger text-center">Upload missing person other detail</h5>
                            <hr>
                            <div class="row mb-3">
                                <div class="form-group col-md-2">
                                    <label class="col-form-label">Pan Card</label>
                                    <?php 
                                        $getPanDetail = $this->db->query('select * from panlist where userId='.$getUserDetail[0]['uid'])->result_array();
                                    ?>
                                    <input type="text" class="form-control" value="<?php echo $getPanDetail[0]['panNumber']; ?>" name="missingpan" <?php if(count($getPanDetail) == 0){ echo "readonly"; } ?>>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="col-form-label">Driving License Number</label>
                                    <?php 
                                        $getDlDetail = $this->db->query('select * from dllist where userId='.$getUserDetail[0]['uid'])->result_array();
                                    ?>
                                    <input type="text" class="form-control" value="<?php echo $getDlDetail[0]['dlNumber']; ?>" name="missingdl" <?php if(count($getDlDetail) == 0){ echo "readonly"; } ?>>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="col-form-label">Voter Card Number</label>
                                    <?php 
                                        $getVoterDetail = $this->db->query('select * from voterslist where userId='.$getUserDetail[0]['uid'])->result_array();
                                    ?>
                                    <input type="text" class="form-control" name="missingvoter" value="<?php echo $getVoterDetail[0]['voterNumber']; ?>" <?php if(count($getVoterDetail) == 0){ echo "readonly"; } ?>>
                                </div>
                                <?php 
                                    if($getMissingDetails[0]['goldType'] != '' || $getMissingDetails[0]['goldType'] != NULL){
                                ?>
                                <div class="form-group col-md-2">
                                    <label class="col-form-label">Gold Type</label>
                                    <?php 
                                        $getGoldType = $this->db->query('select * from goldType')->result_array();
                                    ?>
                                    <select class="form-control" name="goldType" id="goldType">
                                        <option value="">Choose Option</option>
                                        <?php 
                                            foreach($getGoldType as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?= $v['Id']; ?>" <?php echo (($getMissingDetails[0]['goldType'] == $v['Id']) ? 'selected' : ''); ?>><?= $v['Name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <?php }else{ ?>
                                <div class="form-group col-md-2">
                                    <label class="col-form-label">Gold Type</label>
                                    <?php 
                                        $getGoldType = $this->db->query('select * from goldType')->result_array();
                                    ?>
                                    <select class="form-control" name="goldType" id="goldType">
                                        <option value="">Choose Option</option>
                                        <?php 
                                            foreach($getGoldType as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?= $v['Id']; ?>" <?php echo (($getUserDetail[0]['goldType'] == $v['Id']) ? 'selected' : ''); ?>><?= $v['Name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <?php } ?>
                                <?php 
                                    if($getMissingDetails[0]['goldId'] != '' || $getMissingDetails[0]['goldId'] != NULL){
                                ?>
                                <div class="form-group col-md-2">
                                    <label class="col-form-label">Gold HUID Number</label>
                                    <input type="text" class="form-control text-uppercase" name="goldId" id="goldId" maxlength="6" placeholder="Gold HUID Number" value="<?php echo $getMissingDetails[0]['goldId']; ?>">
                                </div>
                                <?php }else{ ?>
                                <div class="form-group col-md-2">
                                    <label class="col-form-label">Gold HUID Number</label>
                                    <input type="text" class="form-control text-uppercase" name="goldId" id="goldId" maxlength="6" placeholder="Gold HUID Number" value="<?php echo $getUserDetail[0]['goldHUID']; ?>">
                                </div>
                                <?php } ?>
                                <?php 
                                    if($getMissingDetails[0]['vehicleNumber'] != '' || $getMissingDetails[0]['vehicleNumber'] != NULL){
                                ?>
                                <div class="form-group col-md-2">
                                    <label class="col-form-label">Vehicle Number</label>
                                    <input type="text" class="form-control text-uppercase" maxlength="10" name="vehicleNumber" placeholder="Vehicle Number" value="<?php echo $getMissingDetails[0]['vehicleNumber']; ?>">
                                </div>
                                <?php }else{ ?>
                                <div class="form-group col-md-2">
                                    <label class="col-form-label">Vehicle Number</label>
                                    <input type="text" class="form-control text-uppercase" maxlength="10" name="vehicleNumber" placeholder="Vehicle Number" value="<?php echo $getUserDetail[0]['vehicleNumber']; ?>">
                                </div>
                                <?php } ?>
                            </div>
                            <hr>
                            <h5 style="font-weight:bold;" class="text-danger text-center">Upload missing person face match photo</h5>
                            <hr>
                            <div class="row my-3 align-items-center text-center">
                                <div class="col-lg-3 mb-3 col-sm-12 col-md-3">
                                    <label class="form-label d-block">Sample Photo</label>
                                    <img src="<?php echo base_url(); ?>assets/images/facematch.webp" style="width:100%;height:150px;">
                                </div>
                                <div class="col-md-3 col-lg-3 form-group">
                                    <input type="hidden" name="facematch" id="facematch">
                                    <label class="form-label d-block">Choose Photo</label>
                                    <input type="file" class="form-control" accept="image/*" id="facematchfile" name="uploadPhoto" onchange="cropPhoto(event)">
                                </div>
                                <div class="col-lg-3 mt-3 col-sm-12 col-md-3 d-none" id="previewFaceDiv">
                                    <label class="form-label d-block">Preview Photo</label>
                                    <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" id="previewPhoto" style="width:100%;height:150px;">
                                </div>
                                <?php 
                                    if($getMissingDetails[0]['facematchphoto'] != '' || $getMissingDetails[0]['facematchphoto'] != NULL)
                                    {
                                ?>
                                <input type="hidden" name="oldfacephoto" value="<?php echo $getMissingDetails[0]['facematchphoto']; ?>">
                                <div class="col-lg-3 mt-3 col-sm-12 col-md-3">
                                    <label class="form-label d-block">Old Photo</label>
                                    <img src="<?php echo base_url(); ?><?php echo $getMissingDetails[0]['facematchphoto']; ?>" style="width:100%;height:150px;">
                                </div>
                                <?php }else{ ?>
                                <input type="hidden" name="oldfacephoto" value="">
                                <div class="col-lg-3 mt-3 col-sm-12 col-md-3">
                                    <label class="form-label d-block">Old Photo</label>
                                    <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:150px;">
                                </div>
                                <?php } ?>
                            </div>
                            <hr>
                            <h5 style="font-weight:bold;" class="text-danger text-center">Enter Filtering Details</h5>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                                    <label>Person Nickname</label>
                                    <input type="text" class="form-control" name="personNickname" id="personNickname" value="<?php if($getMissingDetails[0]['personNickname'] != NULL || $getMissingDetails[0]['personNickname'] != ''){ echo $getMissingDetails[0]['personNickname']; } ?>">
                                </div>
                                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                                    <label>Person Father Name</label>
                                    <input type="text" class="form-control" name="personFathername" id="personFathername" value="<?php if($getMissingDetails[0]['personFathername'] != NULL || $getMissingDetails[0]['personFathername'] != ''){ echo $getMissingDetails[0]['personFathername']; } ?>">
                                </div>
                                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                                    <label>Person Mother Name</label>
                                    <input type="text" class="form-control" name="personMothername" id="personMothername" value="<?php if($getMissingDetails[0]['personMothername'] != NULL || $getMissingDetails[0]['personMothername'] != ''){ echo $getMissingDetails[0]['personMothername']; } ?>">
                                </div>
                                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                                    <label>Spouse Name</label>
                                    <input type="text" class="form-control" name="personSpousename" id="personSpousename" value="<?php if($getMissingDetails[0]['personSpousename'] != NULL || $getMissingDetails[0]['personSpousename'] != ''){ echo $getMissingDetails[0]['personSpousename']; } ?>">
                                </div>
                            </div>
                            <hr>
                                <h5 style="font-weight:bold;" class="text-danger text-center">Select Missing Person Qualities</h5>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                    <label>Select Language</label>
                                    <select class="form-control mt-2" required name="prefLang" onchange="step7Prefer(this.value)">
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                    </select>  
                                </div>
                            </div>
                            <div id="englishDiv">
                                <div class="row mt-3 mb-2">
                                    <?php 
                                        $getCategories = $this->db->query('select * from categories where isDeleted=0')->result_array();
                                        $count = 0;
                                        if(count($getCategories) > 0)
                                        {
                                            foreach($getCategories as $k=>$v)
                                            {
                                                $getSubCategories = $this->db->query('select * from subcategories where categoryId='.$v['Id'].' and isDeleted=0')->result_array();
                                                if(count($getSubCategories) > 0)
                                                {
                                                    $count++;
                                    ?>
                                    <div class="col-sm-12 col-md-4 col-lg-3">
                                        <label class="text-left form-label text-capitalize text-dark"><?= $v['englishCategoryName']; ?></label>  
                                        <div class="row mb-3">
                                            <div class="col-md-auto col-sm-12">
                                                <select class="form-control englishSubCategory" name="subcategory[]">
                                                    <option value="">Select Characteristics</option>
                                                    <?php 
                                                        foreach($getSubCategories as $k1=>$v1)
                                                        {
                                                            $getIfAlready = $this->db->query('select * from userproperty where userSubCategory='.$v1['Id'].' and personId='.$getMissingDetails[0]['Id'])->result_array();
                                                    ?>
                                                    <option value="<?php echo $v1['Id']; ?>" <?php if(count($getIfAlready) > 0){ echo "selected"; } ?>><?= $v1['englishSubCategoryName']; ?></option>
                                                    <?php }  ?>
                                                </select>    
                                            </div>
                                        </div>
                                    </div>
                                    <?php       
                                                } 
                                            } 
                                        }
                                        if($count == 0){
                                    ?>
                                    <div class="row mt-3 mb-2">
                                        <div class="col-sm-12">
                                            <h5 class="text-center mb-0">No Extra Info Found</h5>  
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="hindiDiv" class="d-none">
                                <div class="row mt-3 mb-2">
                                    <?php 
                                        $count = 0;
                                        $getCategories = $this->db->query('select * from categories where isDeleted=0')->result_array();
                                        if(count($getCategories) > 0)
                                        {
                                            foreach($getCategories as $k=>$v)
                                            {
                                                $getSubCategories = $this->db->query('select * from subcategories where categoryId='.$v['Id'].' and isDeleted=0')->result_array();
                                            if(count($getSubCategories) > 0)
                                            {
                                                $count++;
                                    ?>
                                        <div class="col-sm-12 col-md-4 col-lg-3">
                                        <label class="text-left form-label text-capitalize text-dark"><?= $v['hindiCategoryName']; ?></label>  
                                        <div class="row mb-3">
                                            <div class="col-md-auto col-sm-12">
                                                <select class="form-control hindiSubCategory">
                                                    <option value="">विशेषताओं का चयन करें</option>
                                                    <?php 
                                                        foreach($getSubCategories as $k1=>$v1)
                                                        {
                                                            $getIfAlready = $this->db->query('select * from userproperty where userSubCategory='.$v1['Id'].' and personId='.$getMissingDetails[0]['Id'])->result_array();
                                                    ?>
                                                    <option value="<?php echo $v1['Id']; ?>" <?php if(count($getIfAlready) > 0){ echo "selected"; } ?>><?= $v1['hindiSubCategoryName']; ?></option>
                                                    <?php }  ?>
                                                </select>    
                                            </div>
                                        </div>
                                    </div>
                                    <?php   
                                                }
                                            } 
                                        }
                                        if($count == 0){
                                    ?>
                                    <div class="row mt-3 mb-2">
                                        <div class="col-sm-12">
                                            <h4 class="text-center mb-0">No Extra Info Found</h4>  
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <button id="btn4" type="submit" class="save mt-1 btn btn-primary disabled-on-loading"> Save</button>
                        </form>
                    </div>
                    <?php } else{ 
                                if(count($getMissingDetails) > 0)
                                {
                    ?>
                        <div class="row mb-3 <?php if($pn != 4){ echo "d-none";} ?>" id="step4">
                            <form action="<?php echo base_url(); ?>user/updateMissingStep4Detail" id="step4form" class="col-md-12">
                                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 style="font-weight:bold;text-align:center;" class="text-danger">Missing Complain for person (Missing-id:- <?php echo $_SESSION['missingPersonId']; ?>)</h5>
                                    </div>
                                </div>
                                <hr>
                                <input type="hidden" name="isAvailable" value="0">
                                <div class="row mb-3">
                                    <div class="form-group col-md-4">
                                        <label for="missingstate" class=" col-form-label">Aadhar Number</label>
                                        <input type="text" class="form-control" value="<?php echo $getMissingDetails[0]['missingaadhar']; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="missingstate" class=" col-form-label">Name</label>
                                        <input type="text" class="form-control" value="<?php echo $getMissingDetails[0]['missingname']; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Father Name</label>
                                        <input type="text" <?php if($getFullMissingDetails[0]['fatherName'] != ''){ echo "readonly"; } ?> class="form-control" name="fathername" value="<?php echo $getFullMissingDetails[0]['fatherName']; ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Date of Birth</label>
                                        <input type="date" <?php if($getMissingDetails[0]['missingdob'] != NULL){ echo "readonly"; } ?> max="<?php echo date('Y-m-d') ?>" class="form-control" name="dob" value="<?php echo date('Y-m-d',strtotime($getMissingDetails[0]['missingdob'])); ?>"  required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Gender</label>
                                        <select class="form-control" name="gender" <?php if($getMissingDetails[0]['missinggender'] != ''){ echo "disabled"; } ?> required>
                                            <option value="">Select Gender</option>
                                            <option value="Male" <?php if($getMissingDetails[0]['missinggender'] == 'Male'){ echo "selected"; } ?>>Male</option>
                                            <option value="Female" <?php if($getMissingDetails[0]['missinggender'] == 'Female'){ echo "selected"; } ?>>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Religion</label>
                                        <select class="form-control" style="appearance:auto;" required name="religion" <?php if($getMissingDetails[0]['missingreligion'] != NULL){ echo "disabled"; } ?>>
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
                                            <option value="<?php echo $v['religionName']; ?>" <?php if(strtolower($getMissingDetails[0]['missingreligion']) == strtolower($v['religionName'])){ echo "selected"; } ?>><?php echo $v['religionName']; ?></option>
                                            <?php } ?>
                                            <?php }else{ ?>
                                                <option value="Other" <?php if(strtolower($getMissingDetails[0]['missingreligion']) == 'Other'){ echo "selected"; } ?>>Other</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <h5 style="font-weight:bold;" class="text-danger text-center">Current address of missing person</h5>
                                <hr>
                                <div class="row mb-3">
                                    <div class="col-md-6 col-lg-6 form-group">
                                        <label for="address" class="col-form-label">Address</label>
                                        <input type="text" class="form-control" <?php if($getMissingDetails[0]['fathercurrentaddress'] != '' || $getMissingDetails[0]['fathercurrentaddress'] != NULL){ echo "disabled"; } ?> name="curaddress" required  id="curaddress" value="<?php echo (($getMissingDetails[0]['fathercurrentaddress'] != '') ? $getMissingDetails[0]['fathercurrentaddress'] : ''); ?>">
                                    </div>
                                    <div class="col-md-3 col-lg-3 form-group">
                                        <label for="state" class="col-form-label">State</label>
                                        <select name="curstate" <?php if($getMissingDetails[0]['fatherstate'] != '' || $getMissingDetails[0]['fatherstate'] != NULL){ echo "disabled"; } ?> required id="curstate" class="form-control select2">
                                            <option value="All">Select State</option>
                                            <option value="Andhra Pradesh" <?php if($getMissingDetails[0]['fatherstate'] == 'Andhra Pradesh'){ echo "selected"; } ?>>Andhra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands"<?php if($getMissingDetails[0]['fatherstate'] == 'Andaman and Nicobar Islands'){ echo "selected"; } ?>>Andaman and Nicobar Islands</option>
                                            <option value="Arunachal Pradesh"<?php if($getMissingDetails[0]['fatherstate'] == 'Arunachal Pradesh'){ echo "selected"; } ?>>Arunachal Pradesh</option>
                                            <option value="Assam"<?php if($getMissingDetails[0]['fatherstate'] == 'Assam'){ echo "selected"; } ?>>Assam</option>
                                            <option value="Bihar"<?php if($getMissingDetails[0]['fatherstate'] == 'Bihar'){ echo "selected"; } ?>>Bihar</option>
                                            <option value="Chandigarh"<?php if($getMissingDetails[0]['fatherstate'] == 'Chandigarh'){ echo "selected"; } ?>>Chandigarh</option>
                                            <option value="Chhattisgarh"<?php if($getMissingDetails[0]['fatherstate'] == 'Chhattisgarh'){ echo "selected"; } ?>>Chhattisgarh</option>
                                            <option value="Dadar and Nagar Haveli" <?php if($getMissingDetails[0]['fatherstate'] == 'Dadar and Nagar Haveli'){ echo "selected"; } ?>>Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu" <?php if($getMissingDetails[0]['fatherstate'] == 'Daman and Diu'){ echo "selected"; } ?>>Daman and Diu</option>
                                            <option value="Delhi" <?php if($getMissingDetails[0]['fatherstate'] == 'Delhi'){ echo "selected"; } ?>>Delhi</option>
                                            <option value="Lakshadweep" <?php if($getMissingDetails[0]['fatherstate'] == 'Lakshadweep'){ echo "selected"; } ?>>Lakshadweep</option>
                                            <option value="Puducherry" <?php if($getMissingDetails[0]['fatherstate'] == 'Puducherry'){ echo "selected"; } ?>>Puducherry</option>
                                            <option value="Goa" <?php if($getMissingDetails[0]['fatherstate'] == 'Goa'){ echo "selected"; } ?>>Goa</option>
                                            <option value="Gujarat" <?php if($getMissingDetails[0]['fatherstate'] == 'Gujarat'){ echo "selected"; } ?>>Gujarat</option>
                                            <option value="Haryana" <?php if($getMissingDetails[0]['fatherstate'] == 'Haryana'){ echo "selected"; } ?>>Haryana</option>
                                            <option value="Himachal Pradesh" <?php if($getMissingDetails[0]['fatherstate'] == 'Himachal Pradesh'){ echo "selected"; } ?>>Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir" <?php if($getMissingDetails[0]['fatherstate'] == 'Jammu and Kashmir'){ echo "selected"; } ?>>Jammu and Kashmir</option>
                                            <option value="Jharkhand" <?php if($getMissingDetails[0]['fatherstate'] == 'Jharkhand'){ echo "selected"; } ?>>Jharkhand</option>
                                            <option value="Karnataka" <?php if($getMissingDetails[0]['fatherstate'] == 'Karnataka'){ echo "selected"; } ?>>Karnataka</option>
                                            <option value="Kerala" <?php if($getMissingDetails[0]['fatherstate'] == 'Kerala'){ echo "selected"; } ?>>Kerala</option>
                                            <option value="Madhya Pradesh" <?php if($getMissingDetails[0]['fatherstate'] == 'Madhya Pradesh'){ echo "selected"; } ?>>Madhya Pradesh</option>
                                            <option value="Maharashtra" <?php if($getMissingDetails[0]['fatherstate'] == 'Maharashtra'){ echo "selected"; } ?>>Maharashtra</option>
                                            <option value="Manipur" <?php if($getMissingDetails[0]['fatherstate'] == 'Manipur'){ echo "selected"; } ?>>Manipur</option>
                                            <option value="Meghalaya" <?php if($getMissingDetails[0]['fatherstate'] == 'Meghalaya'){ echo "selected"; } ?>>Meghalaya</option>
                                            <option value="Mizoram" <?php if($getMissingDetails[0]['fatherstate'] == 'Mizoram'){ echo "selected"; } ?>>Mizoram</option>
                                            <option value="Nagaland" <?php if($getMissingDetails[0]['fatherstate'] == 'Nagaland'){ echo "selected"; } ?>>Nagaland</option>
                                            <option value="Odisha" <?php if($getMissingDetails[0]['fatherstate'] == 'Odisha'){ echo "selected"; } ?>>Odisha</option>
                                            <option value="Punjab" <?php if($getMissingDetails[0]['fatherstate'] == 'Punjab'){ echo "selected"; } ?>>Punjab</option>
                                            <option value="Rajasthan" <?php if($getMissingDetails[0]['fatherstate'] == 'Rajasthan'){ echo "selected"; } ?>>Rajasthan</option>
                                            <option value="Sikkim" <?php if($getMissingDetails[0]['fatherstate'] == 'Sikkim'){ echo "selected"; } ?>>Sikkim</option>
                                            <option value="Tamil Nadu" <?php if($getMissingDetails[0]['fatherstate'] == 'Tamil Nadu'){ echo "selected"; } ?>>Tamil Nadu</option>
                                            <option value="Telangana" <?php if($getMissingDetails[0]['fatherstate'] == 'Telangana'){ echo "selected"; } ?>>Telangana</option>
                                            <option value="Tripura" <?php if($getMissingDetails[0]['fatherstate'] == 'Tripura'){ echo "selected"; } ?>>Tripura</option>
                                            <option value="Uttar Pradesh" <?php if($getMissingDetails[0]['fatherstate'] == 'Uttar Pradesh'){ echo "selected"; } ?>>Uttar Pradesh</option>
                                            <option value="Uttarakhand" <?php if($getMissingDetails[0]['fatherstate'] == 'Uttarakhand'){ echo "selected"; } ?>>Uttarakhand</option>
                                            <option value="West Bengal" <?php if($getMissingDetails[0]['fatherstate'] == 'West Bengal'){ echo "selected"; } ?>>West Bengal</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-lg-3 form-group">
                                        <label for="district" class="col-form-label">District</label>
                                        <?php 
                                            if($getMissingDetails[0]['fatherdistrict'] == '' || $getMissingDetails[0]['fatherdistrict'] == NULL){
                                        ?>
                                        <select name="curdistrict" required <?php if($getMissingDetails[0]['fatherdistrict'] != '' || $getMissingDetails[0]['fatherdistrict'] != NULL){ echo "disabled"; } ?> id="curdistrict" class="form-control select2">
                                            <option value="">Select District</option>
                                        </select>
                                        <?php }else{ ?>
                                            <input type="text" name="curdistrict" class="form-control" readonly id="curdistrict" value="<?php echo $getMissingDetails[0]['fatherdistrict']; ?>">
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3 col-lg-3 col-sm-12 form-group">
                                        <label for="curcity" class="col-form-label">City</label>
                                        <?php 
                                            if($getMissingDetails[0]['fathercity'] == '' || $getMissingDetails[0]['fathercity'] == NULL){
                                        ?>
                                        <select name="curcity" required <?php if($getMissingDetails[0]['fathercity'] != '' || $getMissingDetails[0]['fathercity'] != NULL){ echo "disabled"; } ?> id="curcity" class="form-control select2">
                                            <option value="">Select City</option>
                                        </select>
                                        <?php }else{ ?>
                                            <input type="text" name="curcity" class="form-control" readonly id="curcity" value="<?php echo $getMissingDetails[0]['fathercity']; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-3 col-lg-3 form-group">
                                        <label for="pincode" class="col-form-label">Pincode</label>
                                        <input type="text" name="curpincode" <?php if($getMissingDetails[0]['fatherpincode'] != '' || $getMissingDetails[0]['fatherpincode'] != NULL){ echo "disabled"; } ?> required class="form-control" id="curpincode" value="<?php echo $getMissingDetails[0]['fatherpincode']; ?>">
                                    </div>
                                </div>
                                <hr>
                                <div class="row mb-3 align-items-end">
                                    <div class="form-group col-md-12">
                                        <h5 style="font-weight:bold;" class="text-info text-center mb-0">No Pan, Voting and driving license details available</h5>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="col-form-label">Gold Type (Optional)</label>
                                        <?php 
                                            $getGoldType = $this->db->query('select * from goldType')->result_array();
                                        ?>
                                        <select class="form-control" name="goldType" id="goldType">
                                            <option value="">Choose Option</option>
                                            <?php 
                                                foreach($getGoldType as $k=>$v)
                                                {
                                            ?>
                                            <option value="<?= $v['Id']; ?>" <?php echo (($getMissingDetails[0]['goldType'] == $v['Id']) ? 'selected' : ''); ?>><?= $v['Name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="col-form-label">Gold HUID Number</label>
                                        <input type="text" class="form-control text-uppercase" name="goldId" value="<?php echo $getMissingDetails[0]['goldId']; ?>" id="goldId" maxlength="6" placeholder="Gold HUID Number" value="<?php echo $getUserDetail[0]['goldHUID']; ?>">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="col-form-label">Vehicle Number</label>
                                        <input type="text" class="form-control text-uppercase" maxlength="10" value="<?php echo $getMissingDetails[0]['vehicleNumber']; ?>" name="vehicleNumber" placeholder="Vehicle Number" value="<?php echo $getUserDetail[0]['vehicleNumber']; ?>">
                                    </div>
                                </div>
                                <hr>
                                <h5 style="font-weight:bold;" class="text-danger text-center">Upload missing person face match photo</h5>
                                <hr>
                                <div class="row my-3 align-items-center text-center">
                                    <div class="col-lg-3 mb-3 col-sm-12 col-md-3">
                                        <label class="form-label d-block">Sample Photo</label>
                                        <img src="<?php echo base_url(); ?>assets/images/facematch.webp" style="width:100%;height:150px;">
                                    </div>
                                    <div class="col-md-3 col-lg-3 form-group">
                                        <input type="hidden" name="facematch" id="facematch">
                                        <label class="form-label d-block">Choose Photo</label>
                                        <input type="file" class="form-control" accept="image/*" id="facematchfile" name="uploadPhoto" onchange="cropPhoto(event)">
                                    </div>
                                    <div class="col-lg-3 mt-3 col-sm-12 col-md-3 d-none" id="previewFaceDiv">
                                        <label class="form-label d-block">Preview Photo</label>
                                        <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" id="previewPhoto" style="width:100%;height:150px;">
                                    </div>
                                    <?php 
                                        if($getMissingDetails[0]['facematchphoto'] != '' || $getMissingDetails[0]['facematchphoto'] != NULL)
                                        {
                                    ?>
                                    <input type="hidden" name="oldfacephoto" value="<?php echo $getMissingDetails[0]['facematchphoto']; ?>">
                                    <div class="col-lg-3 mt-3 col-sm-12 col-md-3">
                                        <label class="form-label d-block">Old Photo</label>
                                        <img src="<?php echo base_url(); ?><?php echo $getMissingDetails[0]['facematchphoto']; ?>" style="width:100%;height:150px;">
                                    </div>
                                    <?php }else{ ?>
                                        <input type="hidden" name="oldfacephoto" value="">
                                        <div class="col-lg-3 mt-3 col-sm-12 col-md-3">
                                            <label class="form-label d-block">Old Photo</label>
                                            <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:150px;">
                                        </div>
                                    <?php } ?>
                                </div>
                                
                            <hr>
                            <h5 style="font-weight:bold;" class="text-danger text-center">Enter Filtering Details</h5>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                                    <label>Person Nickname</label>
                                    <input type="text" class="form-control" name="personNickname" id="personNickname" value="<?php if($getMissingDetails[0]['personNickname'] != NULL || $getMissingDetails[0]['personNickname'] != ''){ echo $getMissingDetails[0]['personNickname']; } ?>">
                                </div>
                                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                                    <label>Person Father Name</label>
                                    <input type="text" class="form-control" name="personFathername" id="personFathername" value="<?php if($getMissingDetails[0]['personFathername'] != NULL || $getMissingDetails[0]['personFathername'] != ''){ echo $getMissingDetails[0]['personFathername']; } ?>">
                                </div>
                                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                                    <label>Person Mother Name</label>
                                    <input type="text" class="form-control" name="personMothername" id="personMothername" value="<?php if($getMissingDetails[0]['personMothername'] != NULL || $getMissingDetails[0]['personMothername'] != ''){ echo $getMissingDetails[0]['personMothername']; } ?>">
                                </div>
                                <div class="col-lg-3 col-sm-12 col-md-6 mb-3">
                                    <label>Spouse Name</label>
                                    <input type="text" class="form-control" name="personSpousename" id="personSpousename" value="<?php if($getMissingDetails[0]['personSpousename'] != NULL || $getMissingDetails[0]['personSpousename'] != ''){ echo $getMissingDetails[0]['personSpousename']; } ?>">
                                </div>
                            </div>
                            <hr>
                                <h5 style="font-weight:bold;" class="text-danger text-center">Select Missing Person Qualities</h5>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                    <label>Select Language</label>
                                    <select class="form-control mt-2" required name="prefLang" onchange="step7Prefer(this.value)">
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                    </select>  
                                </div>
                            </div>
                            <div id="englishDiv">
                                <div class="row mt-3 mb-2">
                                    <?php 
                                        $getCategories = $this->db->query('select * from categories where Id != 4 and isDeleted=0')->result_array();
                                        $count = 0;
                                        if(count($getCategories) > 0)
                                        {
                                            foreach($getCategories as $k=>$v)
                                            {
                                                $getSubCategories = $this->db->query('select * from subcategories where categoryId='.$v['Id'].' and isDeleted=0')->result_array();
                                                    if(count($getSubCategories) > 0)
                                                    {
                                                        $count++;
                                    ?>
                                    <div class="col-sm-auto col-md-auto col-lg-auto">
                                        <label class="text-left form-label text-capitalize text-dark"><?= $v['englishCategoryName']; ?></label>  
                                        <div class="row mb-3">
                                            <div class="col-md-auto col-sm-12">
                                                <select class="form-control englishSubCategory" name="subcategory[]">
                                                    <option value="">Select Characteristics</option>
                                                    <?php 
                                                        foreach($getSubCategories as $k1=>$v1)
                                                        {
                                                            $getIfAlready = $this->db->query('select * from userproperty where userSubCategory='.$v1['Id'].' and personId='.$getMissingDetails[0]['Id'])->result_array();
                                                    ?>
                                                    <option value="<?php echo $v1['Id']; ?>" <?php if(count($getIfAlready) > 0){ echo "selected"; } ?>><?= $v1['englishSubCategoryName']; ?></option>
                                                    <?php }  ?>
                                                </select>    
                                            </div>
                                        </div>
                                    </div>
                                    <?php       
                                                } 
                                            } 
                                        }
                                        if($count == 0){
                                    ?>
                                    <div class="row mt-3 mb-2">
                                        <div class="col-sm-12">
                                            <h5 class="text-center mb-0">No Extra Info Found</h5>  
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="hindiDiv" class="d-none">
                                <div class="row mt-3 mb-2">
                                    <?php 
                                        $count = 0;
                                        $getCategories = $this->db->query('select * from categories where isDeleted=0')->result_array();
                                        if(count($getCategories) > 0)
                                        {
                                            foreach($getCategories as $k=>$v)
                                            {
                                                $getSubCategories = $this->db->query('select * from subcategories where categoryId='.$v['Id'].' and isDeleted=0')->result_array();
                                            if(count($getSubCategories) > 0)
                                            {
                                                $count++;
                                    ?>
                                        <div class="col-sm-12 col-md-4 col-lg-3">
                                        <label class="text-left form-label text-capitalize text-dark"><?= $v['hindiCategoryName']; ?></label>  
                                        <div class="row mb-3">
                                            <div class="col-md-auto col-sm-12">
                                                <select class="form-control hindiSubCategory">
                                                    <option value="">विशेषताओं का चयन करें</option>
                                                    <?php 
                                                        foreach($getSubCategories as $k1=>$v1)
                                                        {
                                                            $getIfAlready = $this->db->query('select * from userproperty where userSubCategory='.$v1['Id'].' and personId='.$getMissingDetails[0]['Id'])->result_array();
                                                    ?>
                                                    <option value="<?php echo $v1['Id']; ?>" <?php if(count($getIfAlready) > 0){ echo "selected"; } ?>><?= $v1['hindiSubCategoryName']; ?></option>
                                                    <?php }  ?>
                                                </select>    
                                            </div>
                                        </div>
                                    </div>
                                    <?php   
                                                }
                                            } 
                                        }
                                        if($count == 0){
                                    ?>
                                    <div class="row mt-3 mb-2">
                                        <div class="col-sm-12">
                                            <h4 class="text-center mb-0">No Extra Info Found</h4>  
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <button id="btn4" type="submit" class="save mt-1 btn btn-primary disabled-on-loading"> Save</button>
                        </form>
                    </div>
                    <?php }else{ 
                        unset($_SESSION['missingPersonId']);
                    ?>
                    <?php } ?>
                        <?php } ?>
                    <?php } ?>
                    <div id="stepPhoto" class="row mb-3 g-2 <?php if($pn != 5){ echo "d-none"; } ?>">
                        <?php 
                            if(isset($_SESSION['missingPersonId']))
                            {
                        ?>
                            <div class="card px-0">
                                <div class="card-body p-3">
                                        <h5 style="font-weight:bold;" class="text-danger text-center">Upload missing person latest picture</h5>
                                    <hr>
                                    <?php 
                                        $getMissingDetails = $this->db->query('select * from missingperson where missingId="'.$_SESSION['missingPersonId'].'"')->result_array();
                                        $getUserPhotos = array();
                                        $getPhotos = $this->db->query('select * from missingpersonphotos where missingId='.$getMissingDetails[0]['Id'])->result_array();
                                    ?>
                                    <div class="row mb-2">
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <b class="text-danger" style="font-weight:600;font-size:16px;">Note: You can upload maximum 5 photos only</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="stepPhotoForm" action="<?php echo base_url(); ?>user/updateMissingLatestPhotoForm">
                                <?php 
                                    if(count($getPhotos) > 0)
                                    {
                                ?>
                                <input type="hidden" name="imagecount" id="imagecount" value="<?php echo count($getPhotos); ?>">
                                <input type="hidden" name="uploadType" id="uploadType" value="missing">
                                <?php }else{ 
                                    if(count($getUserPhotos) > 0)
                                    {
                                ?>
                                <input type="hidden" name="imagecount" id="imagecount" value="<?php echo count($getUserPhotos); ?>">
                                <input type="hidden" name="uploadType" id="uploadType" value="user">
                                <?php }else{ ?>
                                <input type="hidden" name="imagecount" id="imagecount" value="0">
                                <input type="hidden" name="uploadType" id="uploadType" value="none">
                                <?php } ?>
                                <?php } ?>
                                <?php 
                                    $j=0;
                                    for($i=0;$i<5;$i++)
                                    {
                                        $j++;
                                ?>
                                <hr class="my-0">
                                <?php 
                                    if(count($getPhotos) <= $i)
                                    {
                                ?>
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12 col-md-6 border border-secondary p-3 text-center" style="border-radius:15px;border-color:lightgrey!important;">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <h6>PNG, JPEG or JPG formats only</h6>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="isUploaded<?php echo $i; ?>" value="0">
                                                <div class="row mt-2">
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#reUploadModal<?php echo $j; ?>" class="btn btn-style-upload w-100"> <i class="fa fa-cloud-upload-alt"></i> Upload File</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <div id="reUploadModal<?php echo $j; ?>" class="modal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border:0;padding-bottom:0;padding-top:0;">
                                                <button type="button" class="btn btn-default ms-auto py-0" data-bs-dismiss="modal" style="color: darkgrey;background: transparent!important;font-size: xx-large;">&times;</button>
                                            </div>
                                            <div class="modal-body px-3 px-md-5 pt-0">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                        <h4 class="modal-title text-center"><?php echo $j; ?>- Upload Missing person's Photo</h4>
                                                    </div>
                                                </div>
                                                <div class="row mt-0">
                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                        <div class="row mt-3 mx-0" id="reUploadDiv<?php echo $i; ?>">
                                                            <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                                <label class="form-label">Upload image</label>
                                                                <input type="file" class="form-control" accept="image/*" id="photoupload<?php echo $i; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                <button type="button" class="btn btn-style-upload w-100 disabled-on-loading" onclick="uploadLatestPhoto(this,<?php echo $i; ?>)"> Continue</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                     </div>
                                    </div>
                                </div>
                                <?php }else{ ?>
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                <h5 class="modal-title"><?php echo $j; ?>- Uploaded Missing person's Photo</h5>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-4 col-sm-12 col-md-6 px-0">
                                                <div class="row border border-secondary mx-0 p-3" style="border-radius:15px;border-color:lightgrey!important;">
                                                    <input type="hidden" id="isUploaded<?php echo $i; ?>" value="<?php echo $getPhotos[$i]['Id']; ?>">
                                                    <div class="col-lg-auto col px-0">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                <h6><b>File Uploaded</b></h6>
                                                            </div>
                                                        </div>  
                                                        <?php 
                                                            $split = explode('upload/missingperson/',$getPhotos[$i]['photourl']);
                                                        ?>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                <p class="mb-1" style="color:grey;"><?php echo $split[1]; ?></p>
                                                            </div>
                                                        </div>  
                                                        <div class="row" style="margin-top:10px;">
                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                <a title="Preview" href="<?php echo base_url(); ?><?php echo $getPhotos[$i]['photourl']; ?>" data-lightbox="rd2" style="color:#fff!important;border:0px solid #0d6efd;padding:10px;border-radius:50%;background:#0d6efd;"><i class="fa fa-eye"></i></a>
                                                                <a title="Re-upload" href="javascript:void(0)" style="color:#fff!important;border:0px solid #ffb309;padding:10px;border-radius:50%;background:#ffb309;margin-left:7px;" onclick="showReUpload(<?php echo $i; ?>)"><i class="fa fa-upload"></i></a>
                                                                <a title="Remove" href="javascript:void(0)" class="btn btn-danger" style="background:white!important;color:red!important;margin-left:7px;" onclick="deletePhoto(<?php echo $getPhotos[$i]['Id']; ?>,<?php echo $i; ?>)"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <div class="col px-0 text-end">
                                                        <span class="fa-stack fa-2x" style="background: #80808008;border-radius: 50%;height:1.7em;line-height:1.7em;width:1.7em;">
                                                            <i class="fa fa-check fa-stack-1x fa-1x" style="color:white;--fa-stack-z-index: 10;z-index: 2;font-size: 0.5em;top: 0.1em;"></i>
                                                            <i class="fa fa-cloud fa-stack-1x text-success" style="z-index: 1;color: #85dc4f;"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3 mx-0 d-none" id="reUploadDiv<?php echo $i; ?>">
                                                    <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                        <label class="form-label">Re-upload image</label>
                                                        <input type="file" class="form-control" accept="image/*" id="photoupload<?php echo $i; ?>">
                                                    </div>
                                                </div>
                                                <div class="row mt-3 d-none justify-content-center" id="reUploadBtn<?php echo $i; ?>">
                                                    <div class="col-lg-auto col-sm-12 col-md-auto col-auto pe-0">
                                                        <button type="button" class="btn btn-style-upload w-100 disabled-on-loading" onclick="uploadLatestPhoto(this,<?php echo $i; ?>)"> Continue</button>
                                                    </div>
                                                    <div class="col-lg-auto col-sm-12 col-md-auto col-auto pe-0">
                                                        <button type="button" class="btn btn-style-red w-100 disabled-on-loading" onclick="cancelReUpload(this,<?php echo $i; ?>)"> Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="reUploadModal<?php echo $j; ?>" class="modal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border:0;padding-bottom:0;padding-top:0;">
                                                <button type="button" class="btn btn-default ms-auto py-0" data-bs-dismiss="modal" style="color: darkgrey;background: transparent!important;font-size: xx-large;">&times;</button>
                                            </div>
                                            <div class="modal-body px-3 px-md-5 pt-0">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                        <h5 class="modal-title"><?php echo $j; ?>- Uploaded Missing person's Photo</h5>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                        <div class="row border border-secondary mx-0 p-3" style="border-radius:15px;border-color:lightgrey!important;">
                                                            <div class="col px-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                                        <h6><b>File Uploaded</b></h6>
                                                                    </div>
                                                                </div>  
                                                                <?php 
                                                                    $split = explode('upload/missingperson/',$getPhotos[$i]['photourl']);
                                                                ?>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                                        <p class="mb-1" style="color:grey;"><?php echo $split[1]; ?></p>
                                                                    </div>
                                                                </div>  
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                                        <a href="<?php echo base_url(); ?><?php echo $getPhotos[$i]['photourl']; ?>" data-lightbox="rd1" style="color:#403ab4!important;">Preview</a>
                                                                        <a href="javascript:void(0)" style="color:#403ab4!important;" onclick="showReUpload(<?php echo $i; ?>)">Re-upload</a>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="col px-0 text-end">
                                                                <span class="fa-stack fa-2x" style="background: #80808008;border-radius: 50%;height:1.7em;line-height:1.7em;width:1.7em;">
                                                                    <i class="fa fa-check fa-stack-1x fa-1x" style="color:white;--fa-stack-z-index: 10;z-index: 2;font-size: 0.5em;top: 0.1em;"></i>
                                                                    <i class="fa fa-cloud fa-stack-1x text-success" style="z-index: 1;color: #85dc4f;"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3 mx-0 d-none" id="reUploadDiv<?php echo $i; ?>">
                                                            <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                                <input type="file" class="form-control" accept="image/*" id="photoupload<?php echo $i; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                <button type="button" class="btn btn-style-upload w-100 disabled-on-loading" onclick="uploadLatestPhoto(this,<?php echo $i; ?>)"> Continue</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } } ?>
                                <div class="card">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-lg-auto col-md-auto col-6 px-0">
                                                <button class="btn btn-dark text-light w-100 btn-style-grey disabled-on-loading" type="button" id="btn4Back"> Back</button>  
                                            </div>
                                            <div class="col-lg-auto col-md-auto col-6" style="padding-right:0;">
                                                <button class="btn btn-dark text-light w-100 btn-style-green disabled-on-loading" type="submit" id="btnPhoto"> Next</button>  
                                                <!--<a class="btn btn-warning mx-3 mt-3 disabled-on-loading" href="javascript:void(0)" id="btnCancel"> Cancel</a>-->
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                    <div id="step5div" class="row mb-3 <?php if($pn != 6){ echo "d-none"; }?>">
                        <?php 
                            if(isset($_SESSION['missingPersonId']))
                            {
                                $getMissingDetails = $this->db->query('select * from missingperson where missingId='.$_SESSION['missingPersonId'])->result_array();
                                $mobcount = 0;
                                if($getMissingDetails[0]['mobile1'] != '' || $getMissingDetails[0]['mobile1'] != NULL)
                                {
                                    $mobcount++;
                                }
                                if($getMissingDetails[0]['mobile2'] != '' || $getMissingDetails[0]['mobile2'] != NULL)
                                {
                                    $mobcount++;
                                }
                                if($getMissingDetails[0]['mobile3'] != '' || $getMissingDetails[0]['mobile3'] != NULL)
                                {
                                    $mobcount++;
                                }
                        ?>
                        <form action="<?php echo base_url(); ?>user/updateMissingStep5Detail" id="step5form" class="col-md-12">
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <?php 
                                $getRelations = $this->db->query('select * from relations')->result_array();
                                $getSettings = $this->db->query('select * from settings where name="deleteOTP"')->result_array();
                            ?>
                            <div class="card">
                                <div class="card-body pt-3">
                                    <div class="row mt-3">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <h6 class="text-dark"><b>Add / Edit your well wisher contact number.</b></h6>
                                            <?php 
                                                if($getSettings[0]['value'] == 1)
                                                {
                                            ?>
                                            <hr>
                                            <h6 class="text-left"><b class="text-danger">Note:-</b> An OTP will be sent to same number during deletion.</h6>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                for($i=1;$i<=3;$i++)
                                {
                                    if($getMissingDetails[0]['relation'.$i] != NULL)
                                    {
                                        $count++;
                                    }
                            ?>
                            <?php 
                                if($getMissingDetails[0]['relation'.$i] != NULL)
                                {
                            ?>
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="row my-3 align-items-end">
                                <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                                    <label class="form-label">Select Relation</label>
                                    <select class="form-control select2" <?php if($getMissingDetails[0]['relation'.$i] != NULL) { echo "disabled"; } ?> id="wellrel<?php echo $i; ?>" name="wellrel<?php echo $i; ?>" required>
                                        <?php 
                                            if(count($getRelations) > 0)
                                            {
                                        ?>
                                        <option value="">Select Relation</option>
                                        <?php 
                                            foreach($getRelations as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getMissingDetails[0]['relation'.$i]){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                                <div class="col-lg-auto col-md-auto col-sm-12 mb-3 <?php echo (($getMissingDetails[0]['relation'.$i] != 3) ? 'd-none' : '') ?>" id="otherrelationdiv<?php echo $i; ?>">
                                    <label class="form-label">Enter Other Relation</label>
                                    <input type="text" disabled value="<?php echo (($getMissingDetails[0]['relation'.$i] == 3) ? $getMissingDetails[0]['otherrelationname'.$i] : '') ?>" class="form-control" placeholder="Enter Other Relation" name="otherrelation<?php echo $i ?>" id="otherrelation<?php echo $i ?>">
                                </div>
                                <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                    <label for="ownerName">Mobile Number</label>
                                    <input type="number" max="10" size="10" value="<?php echo (($getMissingDetails[0]['mobile'.$i] != NULL) ? $getMissingDetails[0]['mobile'.$i] : '') ?>" <?php if($getMissingDetails[0]['relation'.$i] != NULL) { echo "disabled"; } ?> class="form-control mt-2" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="personMob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="personMob<?php echo $i; ?>" required>  
                                </div>
                                <div class="col-lg-3 mb-2 <?php if($getMissingDetails[0]['relation'.$i] != NULL) { echo "d-none"; } ?>" id="sendOtpDiv<?php echo $i; ?>">
                                    <button type="button" class="btn btn-info btn-style-grey disabled-on-loading disabled" id="sendOtp<?php echo $i; ?>" onclick="sendContactOtp(this,<?php echo $i; ?>)"> Send OTP</button>
                                </div>  
                                <div class="col-lg-auto d-none" id="otp<?= $i ?>div">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="otp1">Enter OTP</label>
                                            <input type="number" class="form-control mt-2" id="otp<?= $i ?>" name="otp<?= $i ?>">
                                        </div>
                                        <div class="col-lg-6 mt-4">
                                            <a href="javascript:void(0)" class="btn btn-outline-success mt-2" onclick="verifyContactOtp(this,<?= $i ?>)">Verify OTP</a>          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-auto mb-3">
                                    <button type="button" class="d-none next btn btn-primary mt-2 disabled-on-loading" id="resendOtp<?= $i ?>" onclick="sendContactOtp(this,<?= $i ?>)"> Resend OTP</button>
                                </div>  
                                <div class="col-lg-auto mb-3 col-sm-12 col-md-auto text-center" id="actiondiv">
                                    <button type="button" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="deleteConatct(this,<?php echo $i; ?>,<?php echo $getSettings[0]['value']; ?>)"> <i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="row my-3 align-items-end">
                                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3" id="rel<?php echo $i; ?>Div">
                                        <label class="form-label">Select Relation</label>
                                        <select class="form-control select2" onchange="showRelationAccordingly(this.value,<?php echo $i; ?>)" <?php if($getMissingDetails[0]['relation'.$i] != NULL) { echo "disabled"; } ?> id="wellrel<?php echo $i; ?>" name="wellrel<?php echo $i; ?>">
                                            <?php 
                                                if(count($getRelations) > 0)
                                                {
                                            ?>
                                            <option value="">Select Relation</option>
                                            <?php 
                                                foreach($getRelations as $k=>$v)
                                                {
                                            ?>
                                            <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getMissingDetails[0]['relation'.$i]){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                                            <?php } } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-auto col-md-auto col-sm-12 mb-3 d-none" id="otherrelationdiv<?php echo $i; ?>">
                                        <label class="form-label">Enter Other Relation</label>
                                        <div class="input-group">
                                            <input type="text" aria-describedby="otherClear<?php echo $i; ?>" class="form-control" placeholder="Enter Other Relation" name="otherrelation<?php echo $i ?>" id="otherrelation<?php echo $i ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="border-radius:0;padding:0.7rem;background:white;cursor:pointer;" onclick="clearOtherDiv(<?php echo $i; ?>)" id="otherClear<?php echo $i; ?>"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                        <label for="ownerName">Mobile Number</label>
                                        <input type="number" max="10" size="10" value="<?php echo (($getMissingDetails[0]['mobile'.$i] != NULL) ? $getMissingDetails[0]['mobile'.$i] : '') ?>" <?php if($getMissingDetails[0]['relation'.$i] != NULL) { echo "disabled"; } ?> class="form-control mt-2" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="personMob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="personMob<?php echo $i; ?>">  
                                    </div>
                                    <div class="col-lg-auto text-center col-md-auto mb-2 <?php if($getMissingDetails[0]['relation'.$i] != NULL) { echo "d-none"; } ?>" id="sendOtpDiv<?php echo $i; ?>">
                                        <button type="button" class="w-100 btn btn-info btn-style-grey disabled-on-loading disabled" id="sendOtp<?php echo $i; ?>" onclick="sendContactOtp(this,<?php echo $i; ?>)"> Send OTP</button>
                                    </div> 
                                    <div class="col-lg-auto d-none mb-3" id="otp<?= $i ?>div">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="otp1">Enter OTP</label>
                                                <input type="number" class="form-control mt-2" id="otp<?= $i ?>" name="otp<?= $i ?>">
                                            </div>
                                            <div class="col-lg-6 mt-4">
                                                <a href="javascript:void(0)" class="btn btn-outline-success mt-2" onclick="verifyContactOtp(this,<?= $i ?>)">Verify OTP</a>          
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto mb-3">
                                        <button type="button" class="d-none next btn btn-primary mt-2 disabled-on-loading" id="resendOtp<?= $i ?>" onclick="sendContactOtp(this,<?= $i ?>)"> Resend OTP</button>
                                    </div>  
                                </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } ?>
                            <input type="hidden" name="mobCount" value="<?php echo $mobcount; ?>" id="mobCount">
                            <div class="card p-3">
                                <div class="card-body">
                                    <h6 style="font-weight:bold;" class="text-danger text-center">Add Reward</h6>
                                    <hr>
                                    <div class="form-group row">
                                    <div class="col-md-3 col-sm-12 col-lg-3">
                                        <label>Enter Reward Amount</label>
                                        <input type="hidden" name="paymentStatus" id="paymentStatus" value="<?php echo ($getMissingDetails[0]['paymentStatus']); ?>">
                                        <input type="number" onkeyup="showPaymentAccordingly(this.value)" value="<?php echo ($getMissingDetails[0]['rewardamount'] != NULL ? $getMissingDetails[0]['rewardamount'] : 0) ?>" min="<?php echo ($getMissingDetails[0]['rewardamount'] != NULL ? $getMissingDetails[0]['rewardamount'] : 0) ?>" required class="form-control" id="rewardAmount" name="rewardAmount" placeholder="Reward Amount">
                                    </div>
                                </div>
                                <input type="hidden" name="language" value="English" id="language">        
                                </div>
                            </div>
                            <?php 
                                if($getPaymentSettings[0]['value'] == 1)
                                {
                            ?>
                            <div class="card">
                                <h5 class="card-title mx-4 my-0">Complaint Charges</h5>
                                <hr class="my-2">
                                <p class="text-left mx-4 text-danger mb-2" style="font-size:16px;"><small class="text-danger"><b><span class="text-danger">Note: </span>The missing complaint will be visible for one month and charges will be <i class="fa fa-rupee-sign"></i> 300</b></small></p>
                                <hr class="my-0">
                                <div class="card-body p-4 pt-3">
                                    <div class="row">
                                        <div class="form-group form-floating col-md-3 col-sm-12 col-lg-auto">
                                            <input type="number" onkeyup="showPaymentAccordingly(this.value)" disabled value="300" required class="form-control" id="chargeAmount" name="chargeAmount">
                                            <label for="chargeAmount" class="col-md-4 col-lg-3 col-form-label mx-2">Complaint Charges ( in <i class="fa fa-rupee-sign"></i> )</label>      
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row align-items-center justify-content-center justify-content-md-start">
                                    <div class="col">
                                        <h5 class="card-title mx-3 my-0 text-center text-md-start">Total Amount</h5>  
                                    </div>
                                    <?php if($getMissingDetails[0]['paymentStatus'] != NULL && $getMissingDetails[0]['paymentStatus'] == 'Success'){ ?>
                                    <div class="col-auto text-start">
                                        <img src="<?php echo base_url(); ?>assets/images/paid.jpg">
                                    </div>
                                    <?php } ?>
                                </div>
                                <hr class="my-0">
                                <div class="card-body p-4 pt-3">
                                    <div class="row">
                                        <div class="form-group col-md-3 col-sm-12 col-lg-auto">
                                            <label>Reward Amount: <i class="fa fa-rupee-sign"></i> <span id="rewardLabel"><?php echo ($getMissingDetails[0]['rewardamount'] != NULL ? $getMissingDetails[0]['rewardamount'] : 0) ?></span></label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-md-3 col-sm-12 col-lg-auto">
                                            <label>Complaint Charges: <i class="fa fa-rupee-sign"></i> <span id="complaintLabel"><?php echo 300; ?></span></label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-md-3 col-sm-12 col-lg-auto">
                                            <label>Total Charges: <i class="fa fa-rupee-sign"></i> <span id="totalChargesLabel"><?php echo ($getMissingDetails[0]['finalAmount'] != NULL ? $getMissingDetails[0]['finalAmount'] : (300 + ($getMissingDetails[0]['rewardamount'] != NULL ? $getMissingDetails[0]['rewardamount'] : 0))) ?></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="totalAmount" id="totalAmount" value="<?php echo ($getMissingDetails[0]['finalAmount'] != NULL ? $getMissingDetails[0]['finalAmount'] : (300 + ($getMissingDetails[0]['rewardamount'] != NULL ? $getMissingDetails[0]['rewardamount'] : 0))) ?>">
                            <?php } ?>
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row justify-content-center justify-content-md-start">
                                        <div class="form-group col-lg-auto col-sm-12 col-auto col-md-auto my-3">
                                            <button class="btn btn-dark text-light disabled-on-loading btn-style-grey w-100" type="button" id="step5Back"> Back</button>
                                        </div>
                                        <?php 
                                            if($getMissingDetails[0]['isFinalSubmitted'] != 1){
                                        ?>
                                        <div class="form-group col-lg-auto col-sm-12 col-11 col-md-auto my-3">
                                            <button class="btn btn-danger disabled-on-loading btn-style-green w-100" id="btnPay"> Make Payment</button>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="form-group col-lg-auto col-sm-12 col-auto col-md-auto my-3">
                                            <button class="btn btn-dark text-light disabled-on-loading btn-style-four w-100" type="button" id="step5Next"> Next</button>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!--<button class="btn btn-dark text-light disabled-on-loading save" id="step5"> Save</button>-->
                        </form>
                        <?php } ?>
                    </div>
                    <?php 
                        if(isset($_SESSION['missingPersonId']))
                        {
                    ?>
                    <div id="step6div" class="row mb-3 <?php if($pn != 7){ echo "d-none";} ?>">
                        <form action="<?php echo base_url(); ?>user/updateMissingStep6Detail" id="step6form" class="col-md-12">
                            <?php 
                                $missingperson = $this->db->query('select * from missingperson where missingId='.$_SESSION['missingPersonId'])->result_array();
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <h5 class="text-info mb-3 text-center">Fill Some Other Details</h5>
                                    <h6 class="text-dark mb-3 text-center"><b>Missing Id - <?php echo $_SESSION['missingPersonId']; ?></b></h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-lg-8 col-sm-12 col-md-12">
                                    <label class="mb-2">Enter Some Details</label>
                                    <textarea autofocus onKeyPress="return checkLength(this.value,100)" maxlength="100" onKeyUp="showOtherButtonAccordingly(this,this.value)" class="form-control" name="otherDetail"><?php echo $missingperson[0]['otherDetail']; ?></textarea>
                                    <div id="the-count">
                                        <span id="current"><?php echo strlen($missingvehicle[0]['otherDetail']); ?></span>
                                        <span id="maximum">/ 100</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-lg-auto col-sm-12 col-md-4">
                                    <button class="btn btn-dark text-light disabled-on-loading save w-100" id="step6"> Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                    <?php 
                        if(isset($_SESSION['missingPersonId']))
                        {
                    ?>
                    <div id="step7div" class="row mb-3 <?php if($pn != 8){ echo "d-none";} ?>">
                        <?php 
                            $missingperson = $this->db->query('select * from missingperson where missingId='.$_SESSION['missingPersonId'])->result_array();
                            $getAllByAadhar = $this->db->query('select * from missingperson where missingId="'.$missingperson[0]['missingId'].'" and isFound=0')->result_array();
                        ?>
                        <div class="px-0 col-lg-10 col-md-12 col-sm-12 d-flex flex-column mx-lg-auto">
                            <div class="row px-5 align-items-center">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <h6 class="text-success">Missing complaint registered successfully.</h6>
                                    <h6 class="text-dark"><b>Missing Id - <?php echo $_SESSION['missingPersonId']; ?></b></h6>
                                    <h6 clas="text-success"><b class="text-success">Current Status - Active</b></h6>
                                </div>
                            </div>
                            <hr class="border-dark">
                            <div class="row px-3 align-items-center">
                                <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <h5 class="text-danger text-uppercase"><b>Missing</b></h5>
                                            <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">Missing Date : </span> <?php echo date('d-m-Y',strtotime($missingperson[0]['missingdate'])); ?></h6>
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
                                        <div class="col-md-12 text-center py-3 px-0">
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
                                            if($missingperson[0]['photos'] != NULL)
                                            {
                                                $decode = json_decode($missingperson[0]['photos'],true);
                                            }else{
                                                $decode = array();
                                            }
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
                        <!--<hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">-->
                        <!--<div class="row mt-2 mx-3 align-items-center">-->
                        <!--    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">-->
                        <!--        <h6 style="color: black;"><b>Religion : </b></h6>-->
                        <!--    </div>-->
                        <!--    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">-->
                        <!--        <h6 style="color: black;" id="religion"><?php echo ($getMissingPersonDetail[0]['religion']); ?></h6>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                        <?php 
                            
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getMissingPersonDetail[0]['dob']);
                        ?>
                        <div class="row mt-2 mx-3 align-items-center">
                            <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                                <h6 style="color: black;"><b>Gender : </b></h6>
                            </div>
                            <div class="text-left col-6 col-md-6 col-sm-12 col-lg-6">
                                <h6 style="color: black;" id="genderspan"><?php echo $getMissingPersonDetail[0]['gender']; ?></h6>
                            </div>
                        </div>
                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                        <div class="row mt-2 mx-3 align-items-center">
                            <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                                <h6 style="color: black;"><b>Age : </b></h6>
                            </div>
                            <div class="text-left col-md-6 col-6 col-sm-12 col-lg-6">
                                <h6 style="color: black;" id="agespan"><?php echo $from->diff($to)->y; ?>- Years</h6>
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
                        <div class="row mt-2 align-items-center">
                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                <h6 style="color: black;font-size:0.9em;"><b>Care of : </b></h6>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                <h6 style="color: black;" id="careofspan"><?php echo $getMissingPersonDetail[0]['careof']; ?></h6>
                            </div>
                        </div>
                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                        <?php 
                            if($getMissingPersonDetail[0]['isMarried'] != NULL)
                            {
                        ?>
                        <div class="row mt-2 align-items-center">
                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                <h6 style="color: black;font-size:0.9em;"><b>Marital Status : </b></h6>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                <h6 style="color: black;" id="maritalstatusspan"><?php echo ($getMissingPersonDetail[0]['isMarried'] == 1 ? 'Married' : 'Single'); ?></h6>
                            </div>
                        </div>
                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                        <?php } ?>
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
                                <h6 style="color: black;" id="addressspan"><?php echo $missingperson[0]['fathercurrentaddress'].','.$missingperson[0]['fatherstate'].','.$missingperson[0]['fatherdistrict'].','.$missingperson[0]['fathercity'].','.$missingperson[0]['fatherpincode']; ?></h6>
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
                            <?php 
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($getMissingFullDetails[0]['dob']);
                            ?>
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                    <h6 style="color: black;"><b>Religion : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h6 style="color: black;" id="religion"><?php echo (($getMissingFullDetails[0]['religion'] != NULL) ? $getMissingFullDetails[0]['religion'] : $missingperson[0]['missingreligion']); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                                    <h6 style="color: black;"><b>Gender : </b></h6>
                                </div>
                                <div class="text-left col-6 col-md-6 col-sm-12 col-lg-6">
                                    <h6 style="color: black;" id="genderspan"><?php echo (($getMissingFullDetails[0]['gender'] != NULL) ? $getMissingFullDetails[0]['gender'] : $missingperson[0]['missinggender']); ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                                    <h6 style="color: black;"><b>Age : </b></h6>
                                </div>
                                <div class="text-left col-md-6 col-6 col-sm-12 col-lg-6">
                                    <h6 style="color: black;" id="agespan"><?php echo $from->diff($to)->y; ?>- Years</h6>
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
                        <?php } ?>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row text-center justify-content-center">
                                <?php 
                                    if($missingperson[0]['isFinalSubmitted'] == 0)
                                    {
                                ?>
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <button type="button" class="save btn btn-primary d-block w-100 disabled-on-loading" onclick="finalSubmit(this)"> Final Submit</button>
                                </div>
                                <?php } ?>
                                <?php 
                                    if($missingperson[0]['isFinalSubmitted'] == 1)
                                    {
                                ?>
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <button type="button" class="btn-style-four btn btn-primary d-block w-100 disabled-on-loading" onclick="copyLink('without',<?php echo $missingperson[0]['Id']; ?>)"> Generate link without person photo and name <i class="fa fa-copy"></i></button>
                                </div>
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <button type="button" class="btn-style-five btn btn-primary d-block w-100 disabled-on-loading" onclick="copyLink('with',<?php echo $missingperson[0]['Id']; ?>)"> Generate link with person photo and name <i class="fa fa-copy"></i></button>
                                </div>
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <a href="<?php echo base_url(); ?>user" class="btn-style-green btn btn-primary d-block">Dashboard</a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <div id="photoModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Photo</h5>
                <a class="close btn btn-default" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>user/updateMissingPersonPhoto" id="updatePhotoForm">
                    <input type="hidden" id="updateId" name="Id">
                    <input type="hidden" id="updateMissingId" name="missingId">
                    <div class="form-group">
                        <label class="form-label">Select New Photo</label>
                        <input type="file" id="editInput" name="photo" class="form-control" required>
                    </div>
                    <div class="form-group mt-3 text-center">
                        <button class="btn btn-primary disabled-on-loading" id="btnPhotoupdate"> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  <div id="uploadimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn btn-danger close1" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title">Crop Image</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <div id="image_demo" style="width:100%; margin-top:30px"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <button class="btn btn-success crop_image">Crop Image</button>
            </div>
        </div>
        </div>
     </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    .swal2-cancel{
        position: relative!important;
        font-size: 16px!important;
        line-height: 16px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
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
  <script type="text/javascript">
    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
          width:200,
          height:200,
          type:'square' //circle
        },
        boundary:{
          width:200,
          height:200
        }
      });
      
    $('#step5Next').click(function()
    {
        if($('#mobCount').val() > 0)
        {
            $('#step5Next').attr('disabled','disabled');
            <?php 
                if($getPaymentSettings[0]['value'] == 1)
                {
            ?>
                location.href="<?php echo base_url(); ?>user/upload_person_details?pn=7";        
            <?php }else{ ?>
            $.ajax({
    		    url:'<?php echo base_url(); ?>user/updateMissingStep5Detail',
    		    data:{rewardAmount:$('#rewardAmount').val(),totalAmount: ($('#rewardAmount').val()),paymentId:0,'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
    		    type:'post',
    		    success:function(res)
    		    {
    		        Swal.fire({
    		            title:'Data Saved Successfully',
    		            icon:'success',
                        allowOutsideClick:false,
                        showCloseButton: false,
                        showCancelButton: false,
                        focusConfirm: false,
                        showConfirmButton:false
                    })
    		        setTimeout(function()
    		        {
    		            location.href="<?php echo base_url(); ?>user/upload_person_details?pn=7";        
    		        },2000);
    		    }
    		})
    		<?php } ?>
        }else{
            toastr.error('One Mobile Number Required');
        }
    })
    
    $('#btn4Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_person_details?pn=4";     
    })
    
    $('#step5Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_person_details?pn=5";     
    })
    
    $('.close1').click(function()
    {
        $('#facematch').val('');
        $('#crossIcon').click();
        $('#facematchfile').val('');
        $('#uploadimageModal').modal('hide');
    })
     
     function finalSubmit(ele)
     {
         Swal.fire({
            title: '<strong class="text-dark" style="font-size:20px;">Final Submit</strong>',
            icon: 'info',
            html:'<div class="form-group mb-2">Are you sure you want to final submit?</div>',
            allowOutsideClick:true,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                $(ele).attr('disabled','disabled');
                $.ajax({
                    url:'<?php echo base_url(); ?>user/finalMissingPersonSumbit',
                    type:'get',
                    success:function(res)
                    {
                        toastr.success('Final Data Submitted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },3000);
                    }
                })   
            }
        })
     }
      
     $('#updatePhotoForm').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnPhotoupdate').attr('disabled','disabled');
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
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
                if(parse.status == 'success')
                {
                    toastr.success(parse.message);
                    setTimeout(function()
                    {
                      location.reload();
                    },2000);
                }else{
                    toastr.error(parse.message);
                }
            }
        });
    })
    
    function clearAadhar()
    {
        $('#nomineeYesNote').addClass('d-none');
        $('#nomineeNoNote').addClass('d-none');
        $('#missingName').removeAttr('name');
        $('#missingdate').removeAttr('name');
        $('#missingdate').attr('required',false);
        $('#missingdate').val('');
        $('#isNominee').removeAttr('name');
        $('#stateoptional').removeClass('d-none');
        $('#firstate').attr('name','firstate');
        $('#firstate').attr('required',true);
        
        $('#distoptional').removeClass('d-none');
        $('#firDistrict').attr('name','firdistrict');
        $('#firDistrict').attr('required',true);
        
        $('#cityoptional').removeClass('d-none');
        $('#fircity').attr('required',true);
        $('#fircity').attr('name','fircity');
        
        $('#policethanaoptional').removeClass('d-none');
        $('#policeThanaName').attr('required',true);
        $('#policeThanaName').attr('name','policeThanaName');
        
        $('#firdateoptional').removeClass('d-none');
        $('#firdate').attr('required',true);
        $('#firdate').attr('name','firdate');
        
        $('#firnumberoptional').removeClass('d-none');
        $('#firNumber').attr('required',true);
        $('#firNumber').attr('name','firNumber');
        
        $('.registerednamediv').addClass('d-none');
        $('#missingaadhar').val('');
        $('#missingaadhar').attr('readonly',false);
        $('#goBtn').addClass('disabled').removeClass('btn-style-green').addClass('btn-style-grey');
        $('#missingaadhar').removeClass('disabled');
        $('#isNominee').val('');
        $('#missingName').val('');
        $('#missingName').removeClass('readonly');
        $('#missingName').attr('required',false);
        $('#isNominee').removeClass('readonly');
    }
    
    function cropPhoto(evt)
    {
        if(evt.target.files.length > 0)
        {
            let src = URL.createObjectURL(evt.target.files[0]);
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL(evt.target.files[0]);
            $('#uploadimageModal').modal('show');   
        }else{
            $('#previewFaceDiv').addClass('d-none');
            $('#facematch').val('');
            $('#previewPhoto').attr('src','');
        }
    }
    
    $('.crop_image').click(function(event){
        $.ajax({
            url: "https://shammtech.in/api/quality-management",
            type: "POST",
            data: { 
                api_key: "<?php echo $this->config->item('face_key'); ?>",
                _token: "<?php echo $this->security->get_csrf_hash(); ?>"
            },
            success: function(response) {
                try {
                    let res = (typeof response === "string") ? JSON.parse(response) : response;

                    if (res.status === "success") {
                        // Decode quality from base64
                        let qualityVal = atob(res.quality);
                        $image_crop.croppie('result', {
                          type: 'canvas',
                          size: 'viewport',
                          format:'jpeg',
                          quality: parseFloat(qualityVal)
                        }).then(function(response){
                            $('#facematch').val(response);
                            $('#previewFaceDiv').removeClass('d-none')
                            $('#previewPhoto').attr('src',response);
                            $('#uploadimageModal').modal('hide');
                        })
                    } else {
                        toastr.error(res.message);
                    }
                } catch (e) {
                    console.error("❌ Parse Error:", e, response);
                }
            },
            error: function(xhr, status, error) {
                console.error("❌ AJAX Error:", error);
                console.error("Response:", xhr.responseText);
            }
        })
      });
    
    $('#complaintform').on('submit',function(e)
    {
        e.preventDefault();
        $('#aadharbtn').attr('disabled','disabled');
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
                 if(parse.status == 'success')
                 {
                    toastr.success(parse.message);
                    $('#complaintform').addClass('d-none');
                    $('#step2div').removeClass('d-none');
                    $('#stepNewform').html(parse.html);
                 }else{
                    toastr.error(parse.message);
                    $('#aadharbtn').removeAttr('disabled');
                }  
            }
        });
    })
    
    function getPreviousDetail(ele)
    {
        $(ele).attr('disabled','disabled');
        let val = $('#missingnonaadhar').val();
        if(val != '')
        {
            let data = new FormData();
            data.append('aadhar',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/getPreviousDetail',
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
                        $('#missingnonname').val(parse.name);
                        $('#missingnondob').val(parse.dob);
                        $('#missingnonfathername').val(parse.fathername);
                        $('#missingnonreligion').val(parse.religion);
                        $('#missingnongender').val(parse.gender);
                        $(ele).removeAttr('disabled');   
                    }else{
                        toastr.error('No Previous Detail Found Please Enter Details Manually');
                        $(ele).removeAttr('disabled');   
                        $('#missingnonname').val('');
                        $('#missingnondob').val('');
                        $('#missingnonfathername').val('');
                        $('#missingnonreligion').val('');
                        $('#missingnongender').val('');
                    }
                }
            })   
        }else{
            toastr.error('Please Enter Aadhar Number');
            $(ele).removeAttr('disabled');   
            $('#missingnonname').val('');
            $('#missingnondob').val('');
            $('#missingnonfathername').val('');
            $('#missingnonreligion').val('');
            $('#missingnongender').val('');
        }
    }

    function showAccordingly(val)
    {
        showFirAccordingly('');
        clearAadhar();
        if(val == '')
        {
            toastr.error('Please select your choice to continue');
            $('#nomineeNoNote').addClass('d-none');
            $('#nomineeYesNote').addClass('d-none');
            $('#missingaadhar').attr('required',false);
            $('#missingName').attr('required',false);
            $('#missingdate').attr('required',false);
            $('#missingnondate').attr('required',false);
            $('#missingdate').removeAttr('name');
            $('#missingnondate').removeAttr('name');
            $('#missingaadhar').removeAttr('name');
            $('#missingName').removeAttr('name');
            
            $('#missingnonaadhar').attr('required',false);
            $('#missingnonname').attr('required',false);
            $('#missingnondob').attr('required',false);
            $('#missingnonfathername').attr('required',false);
            $('#missingnonreligion').attr('required',false);
            $('#missingnongender').attr('required',false);
            
            $('#missingnonaadhar').removeAttr('name');
            $('#missingnonname').removeAttr('name');
            $('#missingnondob').removeAttr('name');
            $('#missingnonfathername').removeAttr('name');
            $('#missingnonreligion').removeAttr('name');
            $('#missingnongender').removeAttr('name');
            
            $('#registereddiv').addClass('d-none');
            $('#nonregistereddiv').addClass('d-none');
        }else{
            if(val == '1')
            {
                $('#nomineeNoNote').addClass('d-none');
                $('#nomineeYesNote').addClass('d-none');
                $('#missingdate').attr('required',true);
                $('#missingnondate').attr('required',false);
                $('#missingdate').attr('name','missingdate');
                $('#missingnondate').removeAttr('name');
                $('#missingaadhar').attr('required',true);
                $('#missingName').attr('required',true);
                
                $('#missingaadhar').attr('name','missingaadhar');
                $('#missingName').attr('name','missingName');
                $('#missingnonaadhar').attr('required',false);
                $('#missingnonname').attr('required',false);
                $('#missingnondob').attr('required',false);
                $('#missingnonfathername').attr('required',false);
                $('#missingnonreligion').attr('required',false);
                $('#missingnongender').attr('required',false);
                
                $('#missingnonaadhar').removeAttr('name');
                $('#missingnonname').removeAttr('name');
                $('#missingnondob').removeAttr('name');
                $('#missingnonfathername').removeAttr('name');
                $('#missingnonreligion').removeAttr('name');
                $('#missingnongender').removeAttr('name');
                
                $('#registereddiv').removeClass('d-none');
                $('#nonregistereddiv').addClass('d-none');
            }else{
                $('#nomineeNoNote').addClass('d-none');
                $('#nomineeYesNote').addClass('d-none');
                $('#missingdate').attr('required',false);
                $('#missingnondate').attr('required',true);
                $('#missingdate').removeAttr('name');
                $('#missingnondate').attr('name','missingdate');
                
                $('#missingaadhar').attr('required',false);
                $('#missingName').attr('required',false);
                
                $('#missingaadhar').removeAttr('name');
                $('#missingName').removeAttr('name');
                
                $('#missingnonaadhar').attr('required',true);
                $('#missingnonname').attr('required',true);
                $('#missingnondob').attr('required',true);
                $('#missingnonfathername').attr('required',true);
                $('#missingnonreligion').attr('required',true);
                $('#missingnongender').attr('required',true);
                
                $('#missingnonaadhar').attr('name','missingaadhar');
                $('#missingnonname').attr('name','missingName');
                $('#missingnondob').attr('name','missingdob');
                $('#missingnonfathername').attr('name','missingfathername');
                $('#missingnonreligion').attr('name','missingreligioname');
                $('#missingnongender').attr('name','missinggender');
                
                $('#registereddiv').addClass('d-none');
                $('#nonregistereddiv').removeClass('d-none');
            }
        }
    }

    $('#stepNewform').on('submit',function(e)
    {
        e.preventDefault();
        $('#okbtn').attr('disabled','disabled');
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
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
                 if(parse.status == 'success')
                 {
                    toastr.success(parse.message);
                    $('#step2div').addClass('d-none');
                    $('#stepFirdiv').removeClass('d-none');
                 }else{
                    toastr.error(parse.message);
                    $('#okbtn').removeAttr('disabled');
                }  
            }
        });  
    })

    $('#stepFirform').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnFir').attr('disabled','disabled');
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
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
                 if(parse.status == 'success')
                 {
                    toastr.success(parse.message);
                    $('#stepFirdiv').addClass('d-none');
                    $('#step3div').removeClass('d-none');
                 }else{
                    toastr.error(parse.message);
                    $('#btnFir').removeAttr('disabled');
                }  
            }
        });  
    })

    $('#step3form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnSubmit3').attr('disabled','disabled');
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
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
                 if(parse.status == 'success')
                 {
                    toastr.success(parse.message);
                    $('#step3div').addClass('d-none');
                    $('#step4div').removeClass('d-none');
                 }else{
                    toastr.error(parse.message);
                    $('#btnSubmit3').removeAttr('disabled');
                }  
            }
        });  
    })
    
    $('#step5form').on('submit',function(e)
    {
        e.preventDefault();
        if(($('#totalAmount').val() != '' && $('#totalAmount').val() != 0))
        {
            if($('#mobCount').val() > 0)
            {
                $('#btnPay').attr('disabled','disabled');
                let rzpData = new FormData();
                rzpData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                rzpData.append('amount', (($('#totalAmount').val()) * 100));
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
                        	"amount": (($('#totalAmount').val()) * 100),
                        	"name": "Khoji",
                        	"description": "Add Reward",
                        	"image": "<?php echo base_url(); ?>assets/images/khoji.webp",// COMPANY LOGO
                        	"handler": function (response) {
                        		$.ajax({
                        		    url:'<?php echo base_url(); ?>user/updateMissingStep5Detail',
                        		    data:{rewardAmount:$('#rewardAmount').val(),totalAmount: ($('#totalAmount').val()),paymentId:response.razorpay_payment_id,'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
                        		    type:'post',
                        		    success:function(res)
                        		    {
                        		        Swal.fire({
                        		            title:'Payment Done Successfully',
                        		            icon:'success',
                                            allowOutsideClick:false,
                                            showCloseButton: false,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:false
                                        })
                        		        setTimeout(function()
                        		        {
                        		            location.reload();  
                        		        },2000);
                        		    }
                        		})
                        	},
                        	modal:{
                        	    onDismiss:function()
                        	    {
                                    toastr.error('Payment Cancelled');
                                    $('#btnPay').removeAttr('disabled');	        
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
                            $('#btnPay').removeAttr('disabled');
                        });
                    }
                })   
            }else{
                toastr.error('One Mobile Number Required');
                $('#btnPay').removeAttr('disabled');
            }
        }else{
            toastr.error('Please Enter Valid Amount');
        }
    })

    $('#isRewarded').click(function()
    {
        if($(this).is(':checked'))
        { 
            $('#rewarddiv').removeClass('d-none');
            $('#rewardAmount').attr('required',true);
            $('#rewardAmount').attr('min',1);
        }else{
            $('#rewarddiv').addClass('d-none');
            $('#rewardAmount').attr('required',false);
            $('#rewardAmount').removeAttr('min');
        }
    })

    $('#step6form').on('submit',function(e)
    {
        e.preventDefault();
        $('#step6').attr('disabled','disabled');
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
                 if(parse.status == 'success')
                 {
                    toastr.success(parse.message);
                    setTimeout(function()
                    {
                        location.href="<?php echo base_url(); ?>user/upload_person_details?pn=8";  
                    },4000);
                 }else{
                    toastr.error(parse.message);
                    $('#step6').removeAttr('disabled');
                }  
            }
        });  
    })
    
    function verifyDeleteContactOtp(ele,index)
    {
        let otp = $('#deleteOtpInput').val();
        $(ele).attr('disabled','disabled');
        if(otp != '')
        {
            let otpdata = new FormData();
            otpdata.append('otp',$('#deleteOtpInput').val());
            otpdata.append('index',index);
            otpdata.append('setting',1);
            otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/deleteMissingPersonContact',
                data:otpdata,
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
                        },2000);
                    }else{
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
                    }
                }
            })      
        }else{
            toastr.error('Please Enter OTP to continue');
            $(ele).removeAttr('disabled');
        }
    }
    
    function resendDeleteContactOtp(ele,index)
    {
        $(ele).attr('disabled','disabled');
        let otpdata = new FormData();
        otpdata.append('mobile',$('#personMob'+index).val());
        otpdata.append('index',index);
        otpdata.append('setting',1);
        otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendDeletePersonContactOtp',
            data:otpdata,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.status == 'success')
                {
                    toastr.success('An OTP has been sent on same number');
                }else{
                    toastr.error(parse.message);
                }
                $(ele).removeAttr('disabled');
            }
        })
    }
    
    function deleteConatct(ele,index,setting)
    {
        $(ele).attr('disabled','disabled');
        if(setting == 1)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Contact</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete contact?</label></div>',
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
                    otpdata.append('mobile',$('#personMob'+index).val());
                    otpdata.append('index',index);
                    otpdata.append('setting',setting);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/sendDeletePersonContactOtp',
                        data:otpdata,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            let parse = JSON.parse(res);
                            if(parse.status == 'success')
                            {
                                toastr.success('An OTP has been sent on same number');
                                $(ele).removeAttr('disabled');
                                Swal.fire({
                                  title: '<strong>Enter OTP to proceed </strong>',
                                  icon: 'success',
                                  allowOutsideClick:false,
                                  html:
                                    '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="number" class="form-control" id="deleteOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteContactOtp(this,'+index+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendDeleteContactOtp(this,'+index+')"> Resend OTP</button></div>',
                                  showCloseButton: true,
                                  showCancelButton: false,
                                  focusConfirm: false,
                                  showConfirmButton:false
                                })
                            }else{
                                toastr.error(parse.message);
                                $(ele).removeAttr('disabled');
                            }
                        }
                    })
                }else{
                    $(ele).removeAttr('disabled');
                }
            })
        }else{
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Contact</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete contact details?</label></div>',
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
                    otpdata.append('index',index);
                    otpdata.append('setting',setting);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/deleteMissingPersonContact',
                        data:otpdata,
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
                                },2000);
                            }else{
                                toastr.error(parse.message);
                                $(ele).removeAttr('disabled');
                            }
                        }
                    })
                }else{
                    $(ele).removeAttr('disabled');
                }
            })
        }
    }
    
    $('#step7Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnSaveOtherInfo').attr('disabled','disabled');
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
                 if(parse.status == 'success')
                 {
                    toastr.success(parse.message);
                    $('#step7div').addClass('d-none');
                    $('#step6div').removeClass('d-none');
                 }else{
                    toastr.error(parse.message);
                    $('#btnSaveOtherInfo').removeAttr('disabled');
                }  
            }
        });  
    })

    function updateVal(ele,type)
    {
        if(type == 'pan')
        {
            if(ele.checked)
            { 
                $('#isPanAdded').val($('#panNumber').val());
            }else{
                $('#isPanAdded').val('');
            }
        }
        if(type == 'voter')
        {
            if(ele.checked)
            { 
                $('#isVoterAdded').val($('#voterNumber').val());
            }else{
                $('#isVoterAdded').val('');
            }   
        }
        if(type == 'dl')
        {
            if(ele.checked)
            { 
                $('#isDlAdded').val($('#dlNumber').val());
            }else{
                $('#isDlAdded').val('');
            }   
        }
    }
    
    $('#step4form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn4').attr('disabled','disabled');
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
                 if(parse.status == 'success')
                 {
                    toastr.success(parse.message);
                    setTimeout(function()
                    {
                        location.href="<?php echo base_url(); ?>user/upload_person_details?pn=5";  
                    },3000);
                 }else{
                    toastr.error(parse.message);
                    $('#btn4').removeAttr('disabled');
                }  
            }
        });
    })
    
    $('#stepPhotoForm').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnPhoto').attr('disabled','disabled');
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
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
                 if(parse.status == 'success')
                 {
                    toastr.success(parse.message);
                    setTimeout(function()
                    {
                        location.href="<?php echo base_url(); ?>user/upload_person_details?pn=6";  
                    },3000);
                 }else{
                    toastr.error(parse.message);
                    $('#btnPhoto').removeAttr('disabled');
                }  
            }
        });
    })

    function verifyContactOtp(ele,count)
    {
        if($('#otp'+count).val() != '')
        {
            if($('#wellrel'+count).val() != '')
            {
                let relation = $('#wellrel'+count).val();
                if( relation != '')
                {
                    if(relation != 23)
                    {
                        let data= new FormData();
                        data.append('count',count);
                        data.append('otp',$('#otp'+count).val());
                        data.append('mobile',$('#personMob'+count).val());
                        data.append('relation',$('#wellrel'+count).val());
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            
                        $.ajax({
                          url:'<?php echo base_url(); ?>user/verifyMissingMobileOtp',
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
                                  setTimeout(function(){
                                      location.reload();
                                  },2000);
                              }else{
                                  toastr.error(parse.message);
                              }
                          }
                        })   
                    }else{
                        if($('#otherrelation'+count).val() != '')
                        {
                            let data= new FormData();
                            data.append('count',count);
                            data.append('otp',$('#otp'+count).val());
                            data.append('mobile',$('#personMob'+count).val());
                            data.append('otherrelation',$('#otherrelation'+count).val());
                            data.append('relation',$('#wellrel'+count).val());
                            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                
                            $.ajax({
                              url:'<?php echo base_url(); ?>user/verifyMissingMobileOtp',
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
                                      setTimeout(function(){
                                          location.reload();
                                      },2000);
                                  }else{
                                      toastr.error(parse.message);
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
                    $(ele).removeAttr('disabled');
                }
            }else{
                toastr.error('Please Select Relation');
            }
        }else{
            toastr.error('Please Enter Valid Otp');
        }   
    }

    function verifyOtpFunc(ele)
    {
        $(ele).attr('disabled','disabled');
        if($('#verifyOtp').val() != '')
        {
            let data= new FormData();
            data.append('otp',$('#verifyOtp').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            
            $.ajax({
              url:'<?php echo base_url(); ?>user/verifyMissingMobileOtp',
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
                      $('#btnSendOtp').addClass('d-none');
                      $('#verifyDiv').addClass('d-none');
                      $('#mobNumber').attr('disabled',true);
                      $('#btnFir').click();
                  }else{
                      toastr.error(parse.message);
                      $(ele).removeAttr('disabled');
                      $('#Firdiv').addClass('d-none');
                  }
              }
            })
        }else{
            toastr.error('Please Enter Valid Otp');
            $(ele).removeAttr('disabled');
            $('#Firdiv').addClass('d-none');
        }
    }

    function removeMobile(index)
    {
        let count = parseInt(parseInt($('#mobCount').attr('value')));
        if(count > 0)
        {
            $('#addMoreMobileDiv').children().last().remove();
            $('#mob'+index).val('');
            $('#mob'+index+'veri').val(0);
            $('#mobCount').attr('value',((count)) - 1);
        }else{
            $('#mobCount').attr('value',1);
        }
    }

    function sendContactOtp(ele,count)
    {
        let mob = $('#personMob'+count).val();
        $(ele).attr('disabled','disabled');
        if(mob != '')
        {
            let relation = $('#wellrel'+count).val();
            if( relation != '')
            {
                if(relation != 23)
                {
                    let data= new FormData();
                    data.append('mobile',mob);
                    data.append('count',count);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/sendMissingPersonVerifyOtp',
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
                                $('#sendOtp'+count).parent().addClass('d-none');
                                $('#sendOtp'+count).addClass('d-none');
                                $('#resendOtp'+count).removeAttr('disabled');
                                $('#resendOtp'+count).removeClass('d-none');
                                $('#personMob'+count).attr('readonly',true);
                                $('#otp'+count+'div').removeClass('d-none');
                            }else if(parse.status == 'username')
                            {
                                Swal.fire({
                		            icon:'warning',
                		            html:'<b>This mobile number is already in your account</b>',
                                    allowOutsideClick:false,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: true,
                                    showConfirmButton:true
                                }).then(() => {
                                    $(ele).removeAttr('disabled');      
                                })
                            }else{
                                toastr.error(parse.message);
                                $(ele).removeAttr('disabled');
                            }
                        }
                    })
                }else{
                    if($('#otherrelation'+count).val() != '')
                    {
                        let data= new FormData();
                        data.append('mobile',mob);
                        data.append('count',count);
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        $.ajax({
                          url:'<?php echo base_url(); ?>user/sendMissingPersonVerifyOtp',
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
                                  $('#sendOtp'+count).parent().addClass('d-none');
                                  $('#sendOtp'+count).addClass('d-none');
                                  $('#resendOtp'+count).removeAttr('disabled');
                                  $('#resendOtp'+count).removeClass('d-none');
                                  $('#personMob'+count).attr('readonly',true);
                                  $('#otp'+count+'div').removeClass('d-none');
                              }else if(parse.status == 'username')
                              {
                                  toastr.warning(parse.message);
                                  removeMobile(count);
                                  $(ele).removeAttr('disabled');
                              }else{
                                  toastr.error(parse.message);
                                  removeMobile(count);
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
                $('#sendOtp'+count).removeAttr('disabled');    
            }
        }else{
            toastr.error('Please Enter Valid Mobile Number');
            $(ele).removeAttr('disabled');
        }
    }

    function sendOtp(ele)
    {
        let mob = $('#mobNumber').val();
        $(ele).attr('disabled','disabled');
        if(mob != '')
        {
            let data= new FormData();
            data.append('mobile',mob);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
              url:'<?php echo base_url(); ?>user/sendMissingPersonVerifyOtp',
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
                      $('#mobNumber').attr('readonly',true);
                      $('#verifyDiv').removeClass('d-none');
                  }else{
                      toastr.error(parse.message);
                      $(ele).removeAttr('disabled');
                  }
              }
            })
        }else{
            toastr.error('Please Select Mobile Number');
            $(ele).removeAttr('disabled');
        }
    }
    
    function getAadharName(ele)
    {
        let val = $('#missingaadhar').val();
        if(val != '')
        {
            $(ele).attr('disabled','disabled');
            let data= new FormData();
            data.append('val',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/getAadharName',
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                data:data,
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $('#missingaadhar').addClass('disabled');
                        $('#missingaadhar').attr('readonly',true);
                        $('#missingName').attr('name','missingName');
                        $('#missingdate').attr('required',true);
                        $('#missingnondate').attr('required',false);
                        $('#missingdate').attr('name','missingdate');
                        $('#missingnondate').removeAttr('name');
                        $('#isNominee').attr('name','isNominee');
                        if(parse.isNominee == 'Yes')
                        {
                            $('#nomineeYesNote').removeClass('d-none');
                            $('#nomineeNoNote').addClass('d-none');
                            $('.registerednamediv').removeClass('d-none');
                            $('#isNominee').val(parse.isNominee);
                            $('#missingName').val(parse.name);
                            $('#missingName').addClass('readonly');
                            $('#missingName').attr('required',true);
                            $('#isNominee').addClass('readonly');
                            $('#stateoptional').addClass('d-none');
                            $('#firstate').attr('name','firstate');
                            $('#firstate').attr('required',false);
                            
                            $('#distoptional').addClass('d-none');
                            $('#firDistrict').attr('name','firdistrict');
                            $('#firDistrict').attr('required',false);
                            
                            $('#cityoptional').addClass('d-none');
                            $('#fircity').attr('required',false);
                            $('#fircity').attr('name','fircity');
                            
                            $('#policethanaoptional').addClass('d-none');
                            $('#policeThanaName').attr('required',false);
                            $('#policeThanaName').attr('name','policeThanaName');
                            
                            $('#firdateoptional').addClass('d-none');
                            $('#firdate').attr('required',false);
                            $('#firdate').attr('name','firdate');
                            
                            $('#firnumberoptional').addClass('d-none');
                            $('#firNumber').attr('required',false);
                            $('#firNumber').attr('name','firNumber');
                        }else{
                            $('#nomineeYesNote').addClass('d-none');
                            $('#nomineeNoNote').removeClass('d-none');
                            $('#stateoptional').removeClass('d-none');
                            $('#firstate').attr('name','firstate');
                            $('#firstate').attr('required',true);
                            
                            $('#distoptional').removeClass('d-none');
                            $('#firDistrict').attr('name','firdistrict');
                            $('#firDistrict').attr('required',true);
                            
                            $('#cityoptional').removeClass('d-none');
                            $('#fircity').attr('required',true);
                            $('#fircity').attr('name','fircity');
                            
                            $('#policethanaoptional').removeClass('d-none');
                            $('#policeThanaName').attr('required',true);
                            $('#policeThanaName').attr('name','policeThanaName');
                            
                            $('#firdateoptional').removeClass('d-none');
                            $('#firdate').attr('required',true);
                            $('#firdate').attr('name','firdate');
                            
                            $('#firnumberoptional').removeClass('d-none');
                            $('#firNumber').attr('required',true);
                            $('#firNumber').attr('name','firNumber');
                            
                            $('.registerednamediv').removeClass('d-none');
                            $('#isNominee').val(parse.isNominee);
                            $('#missingName').val(parse.name);
                            $('#missingName').addClass('readonly');
                            $('#missingName').attr('required',true);
                            $('#isNominee').addClass('readonly');
                        }
                        $(ele).removeAttr('disabled');
                    }else{
                        $('#missingdate').attr('required',false);
                        $('#missingnondate').attr('required',false);
                        $('#missingdate').removeAttr('name');
                        $('#missingnondate').removeAttr('name');
                        
                        $('#nomineeYesNote').addClass('d-none');
                        $('#nomineeNoNote').addClass('d-none');
                        $('#missingName').removeAttr('name');
                        $('#isNominee').removeAttr('name');
                        $('#stateoptional').removeClass('d-none');
                        $('#firstate').attr('name','firstate');
                        $('#firstate').attr('required',true);
                        
                        $('#distoptional').removeClass('d-none');
                        $('#firDistrict').attr('name','firdistrict');
                        $('#firDistrict').attr('required',true);
                        
                        $('#cityoptional').removeClass('d-none');
                        $('#fircity').attr('required',true);
                        $('#fircity').attr('name','fircity');
                        
                        $('#policethanaoptional').removeClass('d-none');
                        $('#policeThanaName').attr('required',true);
                        $('#policeThanaName').attr('name','policeThanaName');
                        
                        $('#firdateoptional').removeClass('d-none');
                        $('#firdate').attr('required',true);
                        $('#firdate').attr('name','firdate');
                        
                        $('#firnumberoptional').removeClass('d-none');
                        $('#firNumber').attr('required',true);
                        $('#firNumber').attr('name','firNumber');
                        
                        $('.registerednamediv').addClass('d-none');
                        $('#isNominee').val('');
                        $('#missingName').val('');
                        $('#missingName').removeClass('readonly');
                        $('#missingName').attr('required',false);
                        $('#isNominee').removeClass('readonly');
                        $(ele).removeAttr('disabled');
                        toastr.error(parse.message);
                    }
                }
            })
        }else{
            $('#missingdate').attr('required',false);
            $('#missingnondate').attr('required',false);
            $('#missingdate').removeAttr('name');
            $('#missingnondate').removeAttr('name');
            $('#nomineeYesNote').addClass('d-none');
            $('#nomineeNoNote').addClass('d-none');
            $('#missingName').removeAttr('name');
            $('#isNominee').removeAttr('name');
            $('#stateoptional').removeClass('d-none');
            $('#firstate').attr('name','firstate');
            $('#firstate').attr('required',true);
            
            $('#distoptional').removeClass('d-none');
            $('#firDistrict').attr('name','firdistrict');
            $('#firDistrict').attr('required',true);
            
            $('#cityoptional').removeClass('d-none');
            $('#fircity').attr('required',true);
            $('#fircity').attr('name','fircity');
            
            $('#policethanaoptional').removeClass('d-none');
            $('#policeThanaName').attr('required',true);
            $('#policeThanaName').attr('name','policeThanaName');
            
            $('#firdateoptional').removeClass('d-none');
            $('#firdate').attr('required',true);
            $('#firdate').attr('name','firdate');
            
            $('#firnumberoptional').removeClass('d-none');
            $('#firNumber').attr('required',true);
            $('#firNumber').attr('name','firNumber');
            
            $('.registerednamediv').addClass('d-none');
            $('#isNominee').val('');
            $('#missingName').val('');
            $('#missingName').removeClass('readonly');
            $('#missingName').attr('required',false);
            $('#isNominee').removeClass('readonly');
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Aadhar Number');
        }
    }
    
    function getPreferenceAccordingly(val)
    {
        if(val == '')
        {
            $('#preferredmissingaadhar').attr('required',false);
            $('#prefer2missingname').attr('required',false);
            $('#prefer2missingaadhar').attr('required',false);
            $('#aadharDoc').attr('required',false);
            toastr.error('Please select one preference');
            $('#prefer1div').addClass('d-none');
            $('#prefer2div').addClass('d-none');
        }else{
            if(val == '1')
            {
                $('#prefer2missingname').attr('required',false);
                $('#prefer2missingaadhar').attr('required',false);
                $('#preferredmissingaadhar').attr('required',true);
                $('#aadharDoc').attr('required',false);
                $('#prefer1div').removeClass('d-none');
                $('#prefer2div').addClass('d-none');
            }else{
                $('#prefer2missingname').attr('required',true);
                $('#prefer2missingaadhar').attr('required',true);
                $('#preferredmissingaadhar').attr('required',false);
                $('#aadharDoc').attr('required',true);
                $('#prefer1div').addClass('d-none');
                $('#prefer2div').removeClass('d-none');
            }
        }
    }
    
    $('#step1form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn1').attr('disabled','disabled');
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
                if(parse.status == 'success')
                {
                    if(!parse.isFinalSubmitted)
                    {
                        location.href="<?php echo base_url(); ?>user/upload_person_details?pn=2";   
                    }else{
                        location.href="<?php echo base_url(); ?>user/upload_person_details?pn=3";   
                    }
                }else{
                    if(parse.status == 'lapata')
                    {
                        Swal.fire({
                            icon: 'info',
                            html:'<div class="form-group mb-2"><b>Missing की शिकायत बंद कर दी जाएगी</b></div>',
                            allowOutsideClick:true,
                            showCloseButton: true,
                            showCancelButton: true,
                            confirmButtonText:'Continue',
                            cancelButtonText:'Cancel',
                            focusConfirm: true,
                            showConfirmButton:true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                    $.ajax({
                                        url:'<?php echo base_url(); ?>user/saveMissingFirDetails',
                                        data:data,
                                        contentType: false,
                                        cache: false,
                                        processData:false,
                                        type:'post',
                                        success:function(res)
                                        {
                                            if(!parse.isFinalSubmitted)
                                            {
                                                location.href="<?php echo base_url(); ?>user/upload_person_details?pn=2";   
                                            }else{
                                                location.href="<?php echo base_url(); ?>user/upload_person_details?pn=3";   
                                            }
                                        }
                                    })
                            }else{
                                location.reload();
                            }
                        })
                    }else{
                        toastr.error(parse.message);
                        $('#btn1').removeAttr('disabled');   
                    }
                }
            }
        })
    })
    
    $('#btn3Next').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_person_details?pn=4";
    })
    
    $('#step2form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn2').attr('disabled','disabled');
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
                if(parse.status == 'success')
                {
                    <?php 
                        if($getPaymentSettings[0]['value'] == 1)
                        {
                    ?>
                    location.href="<?php echo base_url(); ?>user/upload_person_details?pn=3";
                    <?php }else{ ?>
                    location.href="<?php echo base_url(); ?>user/upload_person_details?pn=4";
                    <?php } ?>
                }else{
                    toastr.error(parse.message);
                    if(parse.isAlready)
                    {
                        setTimeout(function()
                        {
                            location.href="<?php echo base_url(); ?>user/upload_person_details?pn=1";
                        },3000);
                    }else{
                        $('#btn2').removeAttr('disabled');   
                    }
                }
            }
        })
    })
    
    function step7Prefer(val)
    {
        if(val == 'English')
        {
            $('.hindiSubCategory').removeAttr('name');
            $('.englishSubCategory').prop('name','subcategory[]');
            $('#language').val('English');
            $('#englishDiv').removeClass('d-none');
            $('#hindiDiv').addClass('d-none');
            $('#englishDiv input:checkbox').eq(0).attr('required',false);
            $('#hindiDiv input:checkbox').attr('required',false);    
        }else{
            $('.englishSubCategory').removeAttr('name');
            $('.hindiSubCategory').prop('name','subcategory[]');
            $('#language').val('Hindi');
            $('#englishDiv').addClass('d-none');
            $('#hindiDiv').removeClass('d-none');
            $('#englishDiv input:checkbox').attr('required',false);
            $('#hindiDiv input:checkbox').eq(0).attr('required',false);
        }
    }
    
    function showPreview(ele,ev)
    {
        let imagecount = $('#imagecount').val();
        for(let j=0;j<5;j++)
        {
            $('#img'+j).addClass('d-none');   
        }
        for(let j=0;j<ele.target.files.length;j++)
        {
            $('#img'+j).removeClass('d-none');   
        }
        if(imagecount == 0)
        {
            if(ele.target.files.length <= 5)
            {
                if(ele.target.files.length > 0){
                    $('#previewDiv').removeClass('d-none');
                    for (var i = 0; i < ele.target.files.length; i++) {
                        var src = URL.createObjectURL(ele.target.files[i]);
                        var preview = document.getElementById("img"+i);
                        preview.src = src;
                    }
                }else{
                    toastr.error('Please Select Files');
                    $(ev).val('');
                    for(let j=0;j<5;j++)
                    {
                        $('#img'+j).addClass('d-none');   
                    }
                }   
            }else{
                toastr.error('You can upload upto 5 files');
                $(ev).val('');
                for(let j=0;j<5;j++)
                {
                    $('#img'+j).addClass('d-none');   
                }
            }
        }else{
            if(ele.target.files.length <= (5- imagecount))
            {
                if(ele.target.files.length > 0){
                    $('#previewDiv').removeClass('d-none');
                    for (var i = 0; i < ele.target.files.length; i++) {
                        var src = URL.createObjectURL(ele.target.files[i]);
                        var preview = document.getElementById("img"+i);
                        preview.src = src;
                    }
                }else{
                    toastr.error('Please Select Files');
                    $(ev).val('');
                    for(let j=0;j<5;j++)
                    {
                        $('#img'+j).addClass('d-none');   
                    }
                }
            }else{
                toastr.error('You have already uploaded '+imagecount+' files');
                $(ev).val('');
                for(let j=0;j<5;j++)
                {
                    $('#img'+j).addClass('d-none');   
                }
            }
        }
    }
    
    $('.close').click(function()
    {
        $('#photoModal').modal('hide');
    })
    
    function deletePhoto(Id,index)
    {
        Swal.fire({
            title: '<strong class="text-dark" style="font-size:20px;">Delete Photo</strong>',
            icon: 'info',
            html:'<div class="form-group mb-2">Are you sure you want to delete this photo?</div>',
            allowOutsideClick:true,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                    $.ajax({
                    url:'<?php echo base_url(); ?>user/deleteMissingPersonPhoto/'+Id,
                    type:'get',
                    success:function(res)
                    {
                        toastr.success('Photo Deleted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },3000);
                    }
                })
            }
        })
    }
    
    function copyLink(type,Id)
    {
        navigator.clipboard.writeText('<?php echo base_url(); ?>find-missed-person?Id='+Id+'&type='+type);
        toastr.success('Link Copied Successfully');
    }
    
    function downloadPdf(ele,url)
    {
        const a = document.createElement('a')
        a.href = url
        a.download = url.split('/').pop()
        document.body.appendChild(a)
        a.click()
        document.body.removeChild(a)
    }
    
    function editPhoto(missingId,Id)
    {
        $('#editInput').trigger('focus')
        $('#updateId').val(Id);
        $('#updateMissingId').val(missingId);
        $('#photoModal').modal('show');
    }
    
    function uploadLatestPhoto(ele,index)
    {
        if($('#photoupload'+index).val() == '')
        {
            toastr.error('Please Select Photo to continue');
        }else{
            $(ele).attr('disabled','disabled');
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('isUploaded',$('#isUploaded'+index).val());
            let file = $('#photoupload'+index)[0].files[0];
            data.append('file',file);
            $.ajax({
                url:'<?php echo base_url(); ?>user/uploadPersonLatestPhoto',
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
                        },2000);
                    }else{
                        toastr.error(parse.message);
                    }
                }
            });
        }
    }
    
    function showFirAccordingly(val)
    {
        if(val == '')
        {
            $('#stateoptional').removeClass('d-none');
            $('#firstate').attr('name','firstate');
            $('#firstate').attr('required',true);
            
            $('#distoptional').removeClass('d-none');
            $('#firDistrict').attr('name','firdistrict');
            $('#firDistrict').attr('required',true);
            
            $('#cityoptional').removeClass('d-none');
            $('#fircity').attr('required',true);
            $('#fircity').attr('name','fircity');
            
            $('#policethanaoptional').removeClass('d-none');
            $('#policeThanaName').attr('required',true);
            $('#policeThanaName').attr('name','policeThanaName');
            
            $('#firdateoptional').removeClass('d-none');
            $('#firdate').attr('required',true);
            $('#firdate').attr('name','firdate');
            
            $('#missingdateoptional').removeClass('d-none');
            $('#missingdate').attr('required',true);
            $('#missingdate').attr('name','missingdate');
            
            $('#firnumberoptional').removeClass('d-none');
            $('#firNumber').attr('required',true);
            $('#firNumber').attr('name','firNumber');
        }else{
            if(val == '1')
            {
                $.ajax({
                    url:'<?php echo base_url(); ?>user/checkMissingNominee',
                    type:'get',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.status == 'success')
                        {
                            $('#stateoptional').addClass('d-none');
                            $('#firstate').removeAttr('name');
                            $('#firstate').attr('required',false);
                            
                            $('#distoptional').addClass('d-none');
                            $('#firDistrict').removeAttr('name');
                            $('#firDistrict').attr('required',false);
                            
                            $('#cityoptional').addClass('d-none');
                            $('#fircity').attr('required',false);
                            $('#fircity').removeAttr('name');
                            
                            $('#policethanaoptional').addClass('d-none');
                            $('#policeThanaName').attr('required',false);
                            $('#policeThanaName').removeAttr('name');
                            
                            $('#firdateoptional').addClass('d-none');
                            $('#firdate').attr('required',false);
                            $('#firdate').removeAttr('name');
                            
                            $('#missingdateoptional').addClass('d-none');
                            $('#missingdate').attr('required',false);
                            $('#missingdate').removeAttr('name');
                            
                            $('#firnumberoptional').addClass('d-none');
                            $('#firNumber').attr('required',false);
                            $('#firNumber').removeAttr('name');
                        }else{
                            Swal.fire({
                                title: '<strong class="text-danger" style="font-size:20px;">You are not a nominee</strong>',
                                icon: 'error',
                                allowOutsideClick:false,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:true
                            }).then((result) => {
                                $('#stateoptional').removeClass('d-none');
                                $('#firstate').attr('name','firstate');
                                $('#firstate').attr('required',true);
                                
                                $('#distoptional').removeClass('d-none');
                                $('#firDistrict').attr('name','firdistrict');
                                $('#firDistrict').attr('required',true);
                                
                                $('#cityoptional').removeClass('d-none');
                                $('#fircity').attr('required',true);
                                $('#fircity').attr('name','fircity');
                                
                                $('#policethanaoptional').removeClass('d-none');
                                $('#policeThanaName').attr('required',true);
                                $('#policeThanaName').attr('name','policeThanaName');
                                
                                $('#firdateoptional').removeClass('d-none');
                                $('#firdate').attr('required',true);
                                $('#firdate').attr('name','firdate');
                                
                                $('#missingdateoptional').removeClass('d-none');
                                $('#missingdate').attr('required',true);
                                $('#missingdate').attr('name','missingdate');
                                
                                $('#firnumberoptional').removeClass('d-none');
                                $('#firNumber').attr('required',true);
                                $('#firNumber').attr('name','firNumber');
                            })
                        }
                    }
                })
            }else{
                $('#stateoptional').removeClass('d-none');
                $('#firstate').attr('name','firstate');
                $('#firstate').attr('required',true);
                
                $('#distoptional').removeClass('d-none');
                $('#firDistrict').attr('name','firdistrict');
                $('#firDistrict').attr('required',true);
                
                $('#cityoptional').removeClass('d-none');
                $('#fircity').attr('required',true);
                $('#fircity').attr('name','fircity');
                
                $('#policethanaoptional').removeClass('d-none');
                $('#policeThanaName').attr('required',true);
                $('#policeThanaName').attr('name','policeThanaName');
                
                $('#firdateoptional').removeClass('d-none');
                $('#firdate').attr('required',true);
                $('#firdate').attr('name','firdate');
                
                $('#missingdateoptional').removeClass('d-none');
                $('#missingdate').attr('required',true);
                $('#missingdate').attr('name','missingdate');
                
                $('#firnumberoptional').removeClass('d-none');
                $('#firNumber').attr('required',true);
                $('#firNumber').attr('name','firNumber');
            }
        }
    }
    
    function resendFirOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>user/resendFirOtp',
            type:'get',
            success:function(res)
            {
                toastr.success('OTP Sent Succesfully');
                $(ele).removeAttr('disabled');
            }
        })
    }
    
    function showGoAccordingly(val)
    {
        if(val.length == 12)
        {
            $('#goBtn').removeClass('disabled').addClass('btn-style-green').removeClass('btn-style-grey');
        }else{
            $('#goBtn').addClass('disabled').removeClass('btn-style-green').addClass('btn-style-grey');
        }
    }
    
    function checkAadhar(ele,val)
    {
        if(val.length != 12)
        {
            Swal.fire({
                icon: 'error',
                html:'<div class="form-group text-danger"><b>Please enter 12 digit Aadhar Number.</b></div>',
                allowOutsideClick:true,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: true,
                showConfirmButton:true
            }).then(() => {
                $(ele).val('');
            })
        }
    }
    
    function showOtherButtonAccordingly(ele,val)
    {
        var characterCount = $(ele).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#the-count');
        current.text(characterCount);
        if (characterCount < 70) {
            current.css('color', '#666');
        }
        if (characterCount > 70 && characterCount < 90) {
            current.css('color', '#6d5555');
        }
        if (characterCount > 90 && characterCount <= 100) {
            maximum.css('color', '#8f0001');
            current.css('color', '#8f0001');
            theCount.css('font-weight','bold');
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
    
    function clearOtherDiv(index)
    {
        $('#rel'+index+'Div').removeClass('d-none');
        $('#otherrelationdiv'+index).addClass('d-none');
        $('#otherrelation'+index).val('');
        $('#wellrel'+index).val('').trigger('change');
    }
    
    function showOtpAccordingly(val,index)
    {
        if(val.length == 10)
        {
            $('#sendOtpDiv'+index+' button').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#sendOtpDiv'+index+' button').removeClass('disabled');
        }else{
            $('#sendOtpDiv'+index+' button').removeClass('btn-style-five').addClass('btn-style-grey');
            $('#sendOtpDiv'+index+' button').addClass('disabled');
        }
    }
    
    function showRelationAccordingly(val,index)
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
                $('#otherrelation'+index).val('');
            }else{
                $('#rel'+index+'Div').removeClass('d-none');
                $('#otherrelationdiv'+index).addClass('d-none');
                $('#otherrelation'+index).val('');
            }
        }
    }
    
    function showPaymentAccordingly(val)
    {
        if(val == '0' || val == '')
        {
            $('#rewardLabel').html('0');
            $('#totalChargesLabel').html(300);
            $('#totalAmount').val(300);
        }else{
            if(val >= '0')
            {
                $('#rewardLabel').html(val);
                $('#totalChargesLabel').html(parseInt(val) + 300);
                $('#totalAmount').val(parseInt(val) + 300);   
            }else{
                $('#rewardLabel').html('0');
                $('#totalChargesLabel').html(300);
                $('#totalAmount').val(300);
                $('#rewardAmount').val(0);
            }
        }
    }
    
    function showReUpload(index)
    {
        $('#reUploadBtn'+index).removeClass('d-none');
        $('#reUploadDiv'+index).removeClass('d-none');
    }
    
    function cancelReUpload(ele,index)
    {
        $('#reUploadBtn'+index).addClass('d-none');
        $('#reUploadDiv'+index).addClass('d-none');   
    }
    
    </script>
  <script>
    $(".readonly").on('keydown paste focus mousedown', function(e){
        if(e.keyCode != 9) // ignore tab
            e.preventDefault();
    });
</script>