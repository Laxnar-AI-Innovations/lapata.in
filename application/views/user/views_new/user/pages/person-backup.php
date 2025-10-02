<style>
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

    <div class="pagetitle">
      <p>Welcome,<b><?= $_SESSION['aadharName']; ?></b></p>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" style="background:white!important;" data-bs-toggle="tab" data-bs-target="#profile-edit">Add Complaint</button>
                </li>

              </ul>
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
                            <div class="row mb-3">
                                <div class="form-group col-md-6">
                                  <label for="fullName" class="col-form-label">Complainant Aadhar</label>
                                  <input type="text" class="form-control" id="aadharNumber" name="aadharNumber" value="<?php echo $_SESSION['aadhar_id']; ?>" placeholder="Enter Complainant Aadhar Number" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="ownerName" class="col-form-label">Complainant Name</label>
                                  <input type="text" class="form-control" value="<?php echo strtoupper($getUserDetail[0]['aadharname']); ?>" id="complainantName" name="complainantName" placeholder="Enter Complainant Name" readonly>
                                </div>
                            </div>
                            <hr>
                            <h5 style="font-weight:bold;" class="text-danger text-center">Add Missing Person Details</h5>
                            <hr>
                            <div class="row mb-3 align-items-end">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="row">
                                        <div class="form-group col-md-4 col-lg-3 col-sm-12 mb-3">
                                            <label for="fullName" class="col-form-label">Is Person Registered?</label>
                                            <select class="form-control" name="isRegistered" id="isRegistered" required onchange="showAccordingly(this.value)">
                                                <option value="">Select choice</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>  
                                    </div>
                                    <div class="row align-items-end d-none" id="registereddiv">
                                        <div class="form-group col-md-4 col-lg-3 col-sm-12 mb-3">
                                            <label for="fullName" class="col-form-label">Missing Person Aadhar</label>
                                            <input type="text" class="form-control" id="missingaadhar" placeholder="Enter Missing Person Aadhar">
                                        </div>
                                        <div class="form-group col-md-4 col-lg-3 col-sm-12 mb-3 text-center">
                                            <button type="button" class="btn btn-primary next disabled-on-loading" onclick="getAadharName(this)"> Check Details</button>
                                        </div>
                                        <div class="form-group col-md-6 col-lg-3 col-sm-12 mb-3">
                                            <label for="ownerName" class="col-form-label">Missing Person Name</label>
                                            <input type="text" class="form-control" id="missingName" placeholder="Enter Missing Person Name">
                                        </div>  
                                    </div>
                                    <div class="row d-none" id="nonregistereddiv">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <div class="row align-items-end">
                                                <div class="form-group col-md-4 col-lg-3 mb-3">
                                                    <label for="missingstate" class=" col-form-label">Missing Person Aadhar</label>
                                                    <input type="text" class="form-control" id="missingnonaadhar" placeholder="Enter Missing Person Aadhar">
                                                </div>
                                                <!--<div class="form-group col-md-4 col-lg-3 mb-3 col-sm-12 text-center">-->
                                                <!--    <button type="button" class="btn btn-primary next disabled-on-loading" onclick="getPreviousDetail(this)"> Check Details</button>-->
                                                <!--</div>-->
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
                            <hr>
                            <h5 style="font-weight:bold;" class="text-danger text-center">Please Provide FIR Details</h5>
                            <hr>
                            <div class="row mb-3">
                                <div class="form-group col-md-6 col-lg-3">
                                    <label for="firstate" class=" col-form-label">Select FIR State</label>
                                    <select name="firstate" id="firstate" class="form-control select2" required>
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
                                    <label for="firdistrict" class="col-form-label">Select FIR District</label>
                                    <select name="firdistrict" id="firDistrict" class="form-control select2" required>
                                        <option value="">Select FIR District</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-lg-3">
                                    <label for="fircity" class="col-form-label">Enter FIR City</label>
                                    <input type="text" name="fircity" class="form-control" id="fircity" placeholder="Enter FIR City" required>
                                </div>
                                <div class="form-group col-md-6 col-lg-3">
                                    <label for="firvillage" class="col-form-label">Enter FIR Village (Optional)</label>
                                    <input type="text" name="firvillage" class="form-control" id="firvillage" placeholder="Enter FIR Village">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-md-6 col-lg-3">
                                    <label for="policeThanaName" class="col-form-label">Enter Police Thana Name</label>
                                    <input type="text" class="form-control" id="policeThanaName" name="policeThanaName" placeholder="Enter Police Thana Name" required>
                                </div>
                                <div class="form-group col-md-6 col-lg-3">
                                    <label for="firdate" class="col-form-label">Select FIR Date</label>
                                    <input type="date" class="form-control" id="firdate" name="firdate" required max="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <div class="form-group col-md-6 col-lg-3">
                                    <label for="missingdate" class="col-form-label">Select Missing Date</label>
                                    <input type="date" class="form-control" id="missingdate" name="missingdate" required max="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <div class="form-group col-md-6 col-lg-3">
                                    <label for="firNumber" class="col-form-label">Enter FIR Number</label>
                                    <input type="text" class="form-control" id="firNumber" name="firNumber" placeholder="Enter FIR Number" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-auto col-md-auto col-sm-12 mb-3">
                                    <button type="submit" class="next btn btn-primary disabled-on-loading" id="btn1"> Next</button>  
                                </div>    
                            </div>
                        </form>
                    </div>
                    <div class="row mb-3 <?php if($pn != 2){ echo "d-none";} ?>" id="step2">
                        <form action="<?php echo base_url(); ?>user/personstep2" id="step2form" class="col-md-12" method="post">
                            <div class="row form-group mx-0 mb-3">
                                <div class="col-md-4 col-sm-12 col-lg-4 form-group">
                                    <h5 class="form-label mb-3">An OTP has been sent to your mobile number (<?php echo substr_replace($_SESSION['loginmob'],'xxxxxxx',0,7); ?>).</h5>
                                    <label class="form-label">Enter OTP<span class="text-danger">*</span></label>
                                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                    <input type="number" class="form-control" name="otp" required>
                                </div>
                            </div>
                            <div class="row form-group mx-0">
                                <div class="col-md-auto col-sm-12 col-lg-auto mb-3">
                                    <button type="submit" class="btn btn-primary save disabled-on-loading" id="btn2"> Submit</button>
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
                            $getFullMissingDetails = $this->db->query('select * from missingpersondetail where missingId='.$getMissingDetails[0]['Id'])->result_array();
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$getMissingDetails[0]['missingaadhar'].'"')->result_array();
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
                                    <input type="text" class="form-control" value="<?php echo $getUserDetail[0]['dob']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Gender</label>
                                    <input type="text" class="form-control" value="<?php echo $getUserDetail[0]['gender']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Religion</label>
                                    <?php 
                                        if($getMissingDetails[0]['missingreligion'] == NULL)
                                        {
                                    ?>
                                    <select class="form-control" style="appearance:auto;" required name="religion" <?php if($getMissingDetails[0]['missingreligion'] != NULL || $getUserDetail[0]['religion'] != NULL){ echo "disabled"; } ?> <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
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
                                    <?php }else{ ?>
                                        <select class="form-control" style="appearance:auto;" required name="religion" <?php if($getMissingDetails[0]['missingreligion'] != NULL || $getUserDetail[0]['religion'] != NULL){ echo "disabled"; } ?> <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
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
                                            <option value="<?php echo $v['religionName']; ?>" <?php if(strtolower($getMissingDetails[0]['religion']) == strtolower($v['religionName'])){ echo "selected"; } ?>><?php echo $v['religionName']; ?></option>
                                            <?php } ?>
                                            <?php }else{ ?>
                                                <option value="Other" <?php if(strtolower($getMissingDetails[0]['religion']) == 'Other'){ echo "selected"; } ?>>Other</option>
                                            <?php } ?>
                                        </select>
                                    <?php } ?>
                                </div>
                            </div>
                            <hr>
                            <h5 style="font-weight:bold;" class="text-danger text-center">Upload missing person other detail</h5>
                            <hr>
                            <div class="row mb-3">
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Pan Card</label>
                                    <?php 
                                        $getPanDetail = $this->db->query('select * from panlist where userId='.$getUserDetail[0]['uid'])->result_array();
                                    ?>
                                    <input type="text" class="form-control" value="<?php echo $getPanDetail[0]['panNumber']; ?>" name="missingpan" <?php if(count($getPanDetail) == 0){ echo "readonly"; } ?> <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Driving License Number</label>
                                    <?php 
                                        $getDlDetail = $this->db->query('select * from dllist where userId='.$getUserDetail[0]['uid'])->result_array();
                                    ?>
                                    <input type="text" class="form-control" value="<?php echo $getDlDetail[0]['dlNumber']; ?>" name="missingdl" <?php if(count($getDlDetail) == 0){ echo "readonly"; } ?> <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Voter Card Number</label>
                                    <?php 
                                        $getVoterDetail = $this->db->query('select * from voterslist where userId='.$getUserDetail[0]['uid'])->result_array();
                                    ?>
                                    <input type="text" class="form-control" name="missingvoter" value="<?php echo $getVoterDetail[0]['voterNumber']; ?>" <?php if(count($getVoterDetail) == 0){ echo "readonly"; } ?> <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                                </div>
                            </div>
                            <hr>
                                <h5 style="font-weight:bold;" class="text-danger text-center">Upload missing person latest picture</h5>
                            <hr>
                            <?php 
                                $getMissingDetails = $this->db->query('select * from missingperson where missingId="'.$_SESSION['missingPersonId'].'"')->result_array();
                                $getUserPhotos = $this->db->query('select * from userphotos where userId='.$getUserDetail[0]['uid'])->result_array();
                                $getPhotos = $this->db->query('select * from missingpersonphotos where missingId='.$getMissingDetails[0]['Id'])->result_array();
                            ?>
                            <div class="row mb-2">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <b class="text-danger" style="font-weight:600;font-size:16px;">Note: You can upload maximum 5 photos only</b>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="row my-3 align-items-center">
                                <div class="col-lg-4 col-sm-12 col-md-6">
                                    <?php 
                                        if(count($getPhotos) > 0)
                                        {
                                            $j=0;
                                            for($i=0;$i<=4;$i++)
                                            {
                                                $j++;
                                    ?>
                                    <input type="hidden" name="oldimg<?php echo $j; ?>" value="<?php echo ((isset($getPhotos[$i]) ? $getPhotos[$i]['photourl'] : '')); ?>">
                                    <?php 
                                        if($j == 5)
                                        {
                                    ?>
                                    <input type="hidden" name="imagecount" id="imagecount" value="<?php echo count($getPhotos); ?>">
                                    <?php } } }else{ 
                                        if(count($getUserPhotos) > 0)
                                        {
                                            $j=0;
                                            for($i=0;$i<=4;$i++)
                                            {
                                                $j++;
                                    ?>
                                    <input type="hidden" name="oldimg<?php echo $j; ?>" value="<?php echo ((isset($getUserPhotos[$i]) ? $getUserPhotos[$i]['photourl'] : '')); ?>">
                                    <?php 
                                        if($j == 5)
                                        {
                                    ?>
                                    <input type="hidden" name="imagecount" id="imagecount" value="<?php echo count($getUserPhotos); ?>">
                                    <?php } } }else{ ?>
                                    <input type="hidden" name="imagecount" id="imagecount" value="0">
                                    <?php } } ?>
                                    <input type="file" class="form-control" name="personPhoto[]" accept="image/*" id="personPhoto" multiple onchange="showPreview(event,this)" <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                                </div>
                            </div>
                            <div class="row d-none" id="previewDiv">
                                <?php 
                                    for($i=0;$i<5;$i++)
                                    {
                                ?>
                                <div class="col-lg-2 mt-3 col-6 col-md-auto">
                                    <img id="img<?php echo $i; ?>" class="d-none" src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:150px;">
                                </div>
                                <?php } ?>
                            </div>
                            <?php
                                if(count($getPhotos) > 0)
                                {
                            ?>
                            <hr>
                            <div class="row">
                                <?php 
                                    foreach($getPhotos as $k=>$v)
                                    {
                                ?>
                                <div class="col-lg-2 mt-3 col-6 col-md-auto text-center">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <img src="<?php echo base_url(); ?><?php echo $v['photourl']; ?>" style="width:100%;height:150px;">
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                            <?php if($getMissingDetails[0]['isFinalSubmitted'] == 0){ ?>
                                            <a href="javascript:void(0)" class="btn btn-outline-danger mt-2" onclick="deletePhoto(<?php echo $getMissingDetails[0]['Id']; ?>,<?php echo $v['Id']; ?>)"><i class="fa fa-trash"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-outline-success mt-2" onclick="editPhoto(<?php echo $getMissingDetails[0]['Id']; ?>,<?php echo $v['Id']; ?>)"><i class="fa fa-edit"></i></a>
                                            <?php } ?>
                                            <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip" class="btn btn-outline-info mt-2"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <?php }else{ ?>
                                <?php
                                    if(count($getUserPhotos) > 0)
                                    {
                                ?>
                                <hr>
                                <div class="row">
                                    <?php 
                                        foreach($getUserPhotos as $k=>$v)
                                        {
                                    ?>
                                    <div class="col-lg-2 mt-3 col-6 col-md-auto text-center">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                <img src="<?php echo base_url(); ?><?php echo $v['photourl']; ?>" style="width:100%;height:150px;">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip" class="btn btn-outline-info mt-2"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            <?php } } ?>
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
                                    <input type="file" class="form-control" name="uploadPhoto" onchange="cropPhoto(event)" <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
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
                                <?php }else{ 
                                    if($getUserDetail[0]['facematchphoto'] != '' || $getUserDetail[0]['facematchphoto'] != NULL)
                                    {
                                ?>
                                <input type="hidden" name="oldfacephoto" value="<?php echo $getUserDetail[0]['facematchphoto']; ?>">
                                <div class="col-lg-3 mt-3 col-sm-12 col-md-3">
                                    <label class="form-label d-block">Old Photo</label>
                                    <img src="<?php echo base_url(); ?><?php echo $getUserDetail[0]['facematchphoto']; ?>" style="width:100%;height:150px;">
                                </div>
                                <?php }else{ ?>
                                <input type="hidden" name="oldfacephoto" value="">
                                <div class="col-lg-3 mt-3 col-sm-12 col-md-3">
                                    <label class="form-label d-block">Old Photo</label>
                                    <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:150px;">
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                            <div class="form-group mt-0 mt-md-4 mt-lg-4 ">
                                <div  class="col-md-2 col-lg-2 col-sm-12 text-center">
                                    <button id="btn4" type="submit" class="w-100 save mt-1 btn btn-primary disabled-on-loading"> Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } else{ ?>
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
                                        <input type="text" class="form-control" name="fathername" value="<?php echo $getFullMissingDetails[0]['fatherName']; ?>" <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "readonly"; } ?> required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Date of Birth</label>
                                        <input type="date" max="<?php echo date('Y-m-d') ?>" class="form-control" name="dob" value="<?php echo $getFullMissingDetails[0]['dob']; ?>"  <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "readonly"; } ?> required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Gender</label>
                                        <select class="form-control" name="gender" <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?> required>
                                            <option value="">Select Gender</option>
                                            <option value="Male" <?php if($getFullMissingDetails[0]['gender'] == 'Male'){ echo "selected"; } ?>>Male</option>
                                            <option value="Female" <?php if($getFullMissingDetails[0]['gender'] == 'Female'){ echo "selected"; } ?>>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Religion</label>
                                        <input type="text" class="form-control" name="religion" value="<?php echo $getFullMissingDetails[0]['religion']; ?>" <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "readonly"; } ?> required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mb-3 align-items-end">
                                    <div class="form-group col-md-12">
                                        <h5 style="font-weight:bold;" class="text-info text-center mb-0">No Pan, Voting and driving license details available</h5>
                                    </div>
                                </div>
                                <hr>
                                <h5 style="font-weight:bold;" class="text-danger text-center">Upload missing person latest picture</h5>
                                <hr>
                                <?php 
                                    $getMissingDetails = $this->db->query('select * from missingperson where missingId="'.$_SESSION['missingPersonId'].'"')->result_array();
                                    $getPhotos = $this->db->query('select * from missingpersonphotos where missingId='.$getMissingDetails[0]['Id'])->result_array();
                                ?>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <b class="text-danger" style="font-weight:600;font-size:16px;">Note: You can upload maximum 5 photos only</b>
                                    </div>
                                </div>
                                <hr class="my-0">
                                <div class="row my-3 align-items-center">
                                    <div class="col-lg-4 col-sm-12 col-md-6">
                                        <?php 
                                        if(count($getPhotos) > 0)
                                        {
                                            $j=0;
                                            for($i=0;$i<=4;$i++)
                                            {
                                                $j++;
                                    ?>
                                    <input type="hidden" name="oldimg<?php echo $j; ?>" value="<?php echo ((isset($getPhotos[$i]) ? $getPhotos[$i]['photourl'] : '')); ?>">
                                    <?php 
                                        if($j == 5)
                                        {
                                    ?>
                                    <input type="hidden" name="imagecount" id="imagecount" value="<?php echo count($getPhotos); ?>">
                                    <?php } } }else{ ?> 
                                        <input type="hidden" name="imagecount" id="imagecount" value="<?php echo count($getPhotos); ?>">
                                    <?php } ?>
                                        <input type="file" class="form-control" name="personPhoto[]" accept="image/*" id="personPhoto" multiple onchange="showPreview(event,this)" <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                                    </div>
                                </div>
                                <div class="row d-none" id="previewDiv">
                                    <?php 
                                        for($i=0;$i<5;$i++)
                                        {
                                    ?>
                                    <div class="col-lg-2 mt-3 col-6 col-md-auto">
                                        <img id="img<?php echo $i; ?>" class="d-none" src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:150px;">
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php
                                    if(count($getPhotos) > 0)
                                    {
                                ?>
                                <hr>
                                <div class="row">
                                    <?php 
                                        foreach($getPhotos as $k=>$v)
                                        {
                                    ?>
                                    <div class="col-lg-2 mt-3 col-6 col-md-auto text-center">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                <img src="<?php echo base_url(); ?><?php echo $v['photourl']; ?>" style="width:100%;height:150px;">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                <?php if($getMissingDetails[0]['isFinalSubmitted'] == 0){ ?>
                                                    <a href="javascript:void(0)" class="btn btn-outline-danger mt-2" onclick="deletePhoto(<?php echo $getMissingDetails[0]['Id']; ?>,<?php echo $v['Id']; ?>)"><i class="fa fa-trash"></i></a>
                                                    <a href="javascript:void(0)" class="btn btn-outline-success mt-2" onclick="editPhoto(<?php echo $getMissingDetails[0]['Id']; ?>,<?php echo $v['Id']; ?>)"><i class="fa fa-edit"></i></a>
                                                <?php } ?>
                                                <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip" class="btn btn-outline-info mt-2"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php } ?>
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
                                        <input type="file" class="form-control" name="uploadPhoto" onchange="cropPhoto(event)" <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
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
                                <div class="form-group mt-0 mt-md-4 mt-lg-4 ">
                                    <div  class="col-md-2 col-lg-2 col-sm-12 text-center">
                                        <button id="btn4" type="submit" class="w-100 save mt-1 btn btn-primary disabled-on-loading"> Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php } ?>
                    <?php } ?>
                    <div id="step5div" class="row mb-3 <?php if($pn != 5){ echo "d-none";} ?>">
                        <form action="<?php echo base_url(); ?>user/updateMissingStep5Detail" id="step5form" class="col-md-12">
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
                            <h6 style="font-weight:bold;" class="text-danger text-center">Upload your well wisher mobile number and reward amount</h6>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-lg-3 col-sm-12 col-md-4">
                                    <label for="personMob1">Mobile Number</label>
                                    <input type="text" class="form-control mt-2" id="personMob1" value="<?php echo $getMissingDetails[0]['mobile1'];  ?>" placeholder="Enter Mobile Number" name="personMob1" required <?php if($mobcount >= 1 ){ echo "readonly"; }  ?>>  
                                </div>
                                 <?php if($mobcount == 0 ){ ?>
                                    <div class="col-lg-2 mt-4">
                                        <button type="button" class="next btn btn-primary mt-2 disabled-on-loading" id="sendOtp1" onclick="sendContactOtp(this,1)"> Send OTP</button>
                                    </div>  
                                    <div class="col-lg-auto mt-4">
                                        <button type="button" class="d-none next btn btn-primary mt-2 disabled-on-loading" id="resendOtp1" onclick="sendContactOtp(this,1)"> Resend OTP</button>
                                    </div>  
                                    <div class="col-lg-3 d-none" id="otp1div">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="otp1">Enter OTP</label>
                                                <input type="number" class="form-control mt-2" id="otp1" name="otp1">
                                            </div>
                                            <div class="col-lg-6 mt-4">
                                                <a href="javascript:void(0)" class="btn btn-outline-success mt-2" onclick="verifyContactOtp(this,1)">Verify OTP</a>          
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php 
                                if($mobcount < 3 &&  $getMissingDetails[0]['isFinalSubmitted'] == 0)
                                {
                            ?>
                            <div class="row">
                                <div class="col-md-12" style="text-align:left;">
                                    <a href="javascript:void(0)" class="btn btn-dark mb-3 mx-3 mx-sm-0" onclick="addMobile()">Add More Contacts</a>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="row mb-2 mt-0">
                                <div class="col-md-12" style="text-align:left;">
                                    <b class="text-danger">You can add 2 more mobile numbers</b>
                                </div>
                            </div>
                            <input type="hidden" name="mobCount" value="<?php if($mobcount == 0){ echo '1'; }else{ echo $mobcount; } ?>" id="mobCount">
                            <input type="hidden" name="mob1" id="mob1" value="<?php if($mobcount >= 1 ){ echo $getMissingDetails[0]['mobile1']; }  ?>">
                            <input type="hidden" name="mob2" id="mob2" value="<?php if($mobcount >= 2 ){ echo $getMissingDetails[0]['mobile2']; }  ?>">
                            <input type="hidden" name="mob3" id="mob3" value="<?php if($mobcount >= 3 ){ echo $getMissingDetails[0]['mobile3']; }  ?>">
                            <input type="hidden" name="mob1veri" id="mob1veri" value="<?php if($mobcount >= 1 ){ echo '1'; }else{ echo "0"; } ?>">
                            <input type="hidden" name="mob2veri" id="mob2veri" value="<?php if($mobcount >= 2 ){ echo '1'; }else{ echo "0"; } ?>">
                            <input type="hidden" name="mob3veri" id="mob3veri" value="<?php if($mobcount >= 3 ){ echo '1'; }else{ echo "0"; } ?>">
                            <div id="addMoreMobileDiv"></div>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="form-group row">
                                <div class="col-md-3 col-sm-12 col-lg-3">
                                    <label>Enter Reward Amount</label>
                                    <input type="number" class="form-control mt-2" id="rewardAmount" name="rewardAmount" <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "readonly"; } ?> value="<?php if($getMissingDetails[0]['rewardamount'] != NULL || $getMissingDetails[0]['rewardamount'] != ''){ echo $getMissingDetails[0]['rewardamount']; }else{ echo "0"; } ?>" required placeholder="Enter Reward Amount">
                                </div>
                            </div>
                            <input type="hidden" name="language" value="English" id="language">
                            <hr>
                            <h5 style="font-weight:bold;" class="text-danger text-center">Select Missing Person Qualities</h5>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                    <label>Select Language</label>
                                    <select class="form-control mt-2" required name="prefLang" onchange="step7Prefer(this.value)" <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                    </select>  
                                </div>
                            </div>
                            <div id="englishDiv">
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
                                <div class="row mt-3 mb-2">
                                    <div class="col-sm-12">
                                        <h5 class="text-left mb-0 text-dark"><?= $v['englishCategoryName']; ?></h5>  
                                    </div>
                                </div>
                                <hr class="mt-0">
                                <div class="row mb-3">
                                    <div class="col-md-auto col-sm-12">
                                        <select class="form-control englishSubCategory" name="subcategory[]" <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                                            <option value="c-<?php echo $v['Id']; ?>">Select Characteristics</option>
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
                            <div id="hindiDiv" class="d-none">
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
                                <div class="row mt-3 mb-2">
                                    <div class="col-sm-12">
                                        <h4 class="text-left mb-0"><?= $v['hindiCategoryName']; ?></h4>  
                                    </div>
                                </div>
                                <hr class="mt-0">
                                <div class="row mb-3">
                                    <div class="col-md-auto col-sm-12">
                                        <select class="form-control hindiSubCategory" <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                                            <option value="c-<?php echo $v['Id']; ?>">विशेषताओं का चयन करें</option>
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
                            <button class="btn btn-dark text-light disabled-on-loading save" id="step5"> Save</button>
                            <?php } ?>
                        </form>
                    </div>
                    <?php 
                        if(isset($_SESSION['missingPersonId']))
                        {
                    ?>
                    <div id="step6div" class="row mb-3 <?php if($pn != 6){ echo "d-none";} ?>">
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
                                    <textarea autofocus class="form-control" name="otherDetail" <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>><?php echo $missingperson[0]['otherDetail']; ?></textarea>
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
                    <div id="step7div" class="row mb-3 <?php if($pn != 7){ echo "d-none";} ?>">
                        <?php 
                            $missingperson = $this->db->query('select * from missingperson where missingId='.$_SESSION['missingPersonId'])->result_array();
                            $getAllByAadhar = $this->db->query('select * from missingperson where missingaadhar="'.$missingperson[0]['missingaadhar'].'" and isFound=0')->result_array();
                        ?>
                        <div class="col-lg-10 col-md-10 col-sm-12 d-flex flex-column mx-auto">
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
                                            <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">Missing Date : </span> <?php echo date('d-m-Y',strtotime($missingperson[0]['dateCreated'])); ?></h6>
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
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Date : </span> <span id="missingfirdate"><?php echo date('d-m-Y',strtotime($missingperson[0]['firdate'])); ?></span></h6>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Thana & Address : </span> <span id="firthanaaddress"><?php echo (($missingperson[0]['firpolicethananame'] != NULL ? ($missingperson[0]['firpolicethananame'].',') : '')); ?><?php echo (($missingperson[0]['firstate'] != NULL ? ($missingperson[0]['firstate'].',') : '')); ?><?php echo (($missingperson[0]['firdistrict'] != NULL ? ($missingperson[0]['firdistrict'].',') : '')); ?><?php echo (($missingperson[0]['fircity'] != NULL ? ($missingperson[0]['fircity'].',') : '')); ?><?php echo (($missingperson[0]['firvillage'] != NULL ? ($missingperson[0]['firvillage']) : '')); ?></span></h6>
                                        </div>
                                    </div>
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
                                <h6 style="color: green;text-transform:uppercase;"><?php echo ((count($getSpouseDetail) > 0) ? $getSpouseDetail[0]['aadharname'] : '-'); ?></h6>
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
                            <?php 
                                if($this->session->userdata('user_login') == 'yes'){
                            ?>
                            <div class="row mt-2 px-md-5 px-sm-3">
                                <div class="col-md-12 text-center border border-dark p-3">
                                    <h6 class="text-dark mb-0">Now you can contact to person's Family Member 
                                        <a href="tel:<?php echo $missingperson[0]['mobile1']; ?>" id="contactspan" class="btn btn-primary btn-style-four" style="width:max-content;"><i class="fa fa-phone"></i> Click Here</a>
                                    </h6>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="row mt-2 px-md-5 px-sm-3">
                                <div class="col-md-12 text-center border border-dark p-3">
                                    <h6 class="text-dark text-uppercase mb-0">To Contact to person's Family Member 
                                        <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;"><i class="fa fa-phone"></i> Click Here</a>
                                    </h6>
                                </div>
                            </div>
                            <?php } ?>
                        <?php } ?>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row text-center justify-content-center">
                                <?php 
                                    if($missingperson[0]['isFinalSubmitted'] == 0)
                                    {
                                ?>
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <button type="button" class="save btn btn-primary d-block w-100 disabled-on-loading" onclick="finalSubmit(this)"> Submit</button>
                                </div>
                                <?php } ?>
                                <?php 
                                    if($missingperson[0]['isFinalSubmitted'] == 1)
                                    {
                                ?>
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <button type="button" class="save btn btn-primary d-block w-100 disabled-on-loading" onclick="copyLink(<?php echo $missingperson[0]['Id']; ?>)"> Copy Link <i class="fa fa-copy"></i></button>
                                </div>
                                <!--<div class="col-lg-auto mt-3 col-md-auto col-sm-12">-->
                                <!--    <button type="button" class="reset btn btn-primary d-block w-100 disabled-on-loading" onclick="downloadPdf(this,'<?php echo base_url().''.$missingperson[0]['pdf']; ?>')"> Download Pdf <i class="fa fa-file-pdf"></i></button>-->
                                <!--</div>-->
                                <?php } ?>
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <a href="<?php echo base_url(); ?>user" class="next btn btn-primary d-block">Dashboard</a>
                                </div>
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
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport'
        }).then(function(response){
            $('#facematch').val(response);
            $('#previewFaceDiv').removeClass('d-none')
            $('#previewPhoto').attr('src',response);
            $('#uploadimageModal').modal('hide');
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
        if(val == '')
        {
            toastr.error('Please select your choice to continue');
            $('#missingaadhar').attr('required',false);
            $('#missingName').attr('required',false);
            
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
        $('#step5').attr('disabled','disabled');
        let mob1 = $('#mob1').val();
        let mob2 = $('#mob2').val();
        let mob3 = $('#mob3').val();
        let mob1verified = false;
        if(mob1 != '')
        {
            if($('#mob1veri').val() == 1)
            {
                mob1verified = true;
            }else{
                mob1verified = false;
            }
        }
        let mob2verified = false;
        if(mob2 != '')
        {
            if($('#mob2veri').val() == 1)
            {
                mob2verified = true;
            }else{
                mob2verified = false;
            }
        }
        let mob3verified = false;
        if(mob3 != '')
        {
            if($('#mob3veri').val() == 1)
            {
                mob3verified = true;
            }else{
                mob3verified = false;
            }
        }
        if(mob1verified || mob2verified || mob3verified)
        {
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
                        $('#step5').removeAttr('disabled');
                    }  
                }
            });  
        }else{
            toastr.error('Entered Numbers Not Verified');
            $('#step5').removeAttr('disabled');
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
                        location.href="<?php echo base_url(); ?>user/upload_person_details?pn=7";  
                    },4000);
                 }else{
                    toastr.error(parse.message);
                    $('#step6').removeAttr('disabled');
                }  
            }
        });  
    })
    
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

    function verifyContactOtp(ele,count)
    {
        if($('#otp'+count).val() != '')
        {
            let data= new FormData();
            data.append('otp',$('#otp'+count).val());
            data.append('mobile',$('#personMob'+count).val());
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
                      $('#sendOtp'+count).addClass('d-none');
                      $('#resendOtp'+count).addClass('d-none');
                      $('#resendOtp'+count).removeAttr('disabled');
                      $('#otp'+count+'div').addClass('d-none');
                      $('#mob'+count+'veri').val(1);
                      $('#mob'+count).val($('#personMob'+count).val());
                      $('#personMob'+count).attr('readonly',true);
                      $('#personMob'+count).addClass('is-valid');
                  }else{
                      toastr.error(parse.message);
                  }
              }
            })
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

    function addMobile()
    {
        let count = parseInt(parseInt($('#mobCount').attr('value')) + parseInt(1));
        if(count <=3)
        {
            let html = `<div class="row mb-3">
                            <div class="col-lg-3 col-sm-12 col-md-4">
                                <label for="ownerName">Mobile Number</label>
                                <input type="text" class="form-control mt-2" id="personMob`+count+`" name="personMob`+count+`" required placeholder="Enter Mobile Number">  
                            </div>
                            <div class="col-lg-2 mt-4">
                                <button type="button" class="next btn btn-primary mt-2 disabled-on-loading" id="sendOtp`+count+`" onclick="sendContactOtp(this,`+count+`)"> Send OTP</button>
                            </div>    
                            <div class="col-lg-auto mt-4">
                                <button type="button" class="d-none next btn btn-primary mt-2 disabled-on-loading" id="resendOtp`+count+`" onclick="sendContactOtp(this,`+count+`)"> Resend OTP</button>
                            </div>  
                          <div class="col-lg-3 d-none" id="otp`+count+`div">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <label for="ownerName">Enter OTP</label>
                                      <input type="number" class="form-control mt-2" id="otp`+count+`" name="otp`+count+`">
                                  </div>
                                  <div class="col-lg-6 mt-4">
                                      <a href="javascript:void(0)" class="btn btn-outline-success mt-2" onclick="verifyContactOtp(this,`+count+`)">Verify OTP</a>          
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-2 mt-4">
                            <a href="javascript:void(0)" class="btn btn-outline-danger mt-2" onclick="removeMobile(`+count+`)"><i class="fa fa-times" title="remove Mobile"></i></a>
                          </div>
                      </div>`;
          $('#addMoreMobileDiv').append(html);
          $('#mobCount').attr('value',count);   
        }else{
            toastr.error('You can add upto two contact numbers');
        }
    }

    function sendContactOtp(ele,count)
    {
        let mob = $('#personMob'+count).val();
        $(ele).attr('disabled','disabled');
        if(mob != '')
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
                        $('#missingName').val(parse.name);
                        $('#missingName').addClass('readonly');
                        $(ele).removeAttr('disabled');
                    }else{
                        $('#missingName').val('');
                        $('#missingName').removeClass('readonly');
                        $(ele).removeAttr('disabled');
                        toastr.error(parse.message);
                    }
                }
            })
        }else{
            $('#missingName').val('');
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
                    toastr.error(parse.message);
                    $('#btn1').removeAttr('disabled');
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
                    location.href="<?php echo base_url(); ?>user/upload_person_details?pn=3";
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
    
    function deletePhoto(missingId,Id)
    {
        if(confirm('Are you sure you want to delete this photo?'))
        {
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
    }
    
    function copyLink(Id)
    {
        navigator.clipboard.writeText('<?php echo base_url(); ?>user/missingpersondetail/'+Id);
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
    
  </script>
  <script>
    $(".readonly").on('keydown paste focus mousedown', function(e){
        if(e.keyCode != 9) // ignore tab
            e.preventDefault();
    });
</script>