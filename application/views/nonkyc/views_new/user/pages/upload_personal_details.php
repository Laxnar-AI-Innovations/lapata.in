<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .select2-container{
        width:-webkit-fill-available!important;
    }
    select{
        appearance:auto!important;
    }
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
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
<style>
    .form-label{
        font-weight:bold!important;
        display:block!important;
        color:black!important;
    }
    
    @media screen and (max-width:525px)
    {
        .mb-sm-7{
            margin-top:1.6rem;
        }
    }
</style>
<style>

.progress{width:100%;margin:20px auto;text-align:center}

.progress .circle,.progress .bar{position:relative;display:inline-block;background:#fff;width:40px;height:40px;border-radius:40px;border:1px solid #d5d5da}

.progress .circle:not(:last-child){margin-right:80px;}

.progress .bar{position:absolute;width:85px;height:6px;top:16px;left:40px;border-left:none;border-right:none;border-radius:0}

.progress .circle .label{display:inline-block;width:32px;height:32px;line-height:32px;border-radius:32px;margin-top:4px;color:#b5b5ba;font-size:17px}

.progress .circle .title{display:block;color:#b5b5ba;font-size:13px;line-height:30px;width:200px;margin-left:-80px;text-align:center}

.progress .done .bar,.progress .circle.done{background:#eee}

.progress .circle.done .label{color:#FFF;background:#8bc435}

.progress .circle.done .title{color:#444}

.progress .circle.active .label{color:#FFF;background:#0c95be}

.progress .circle.active .title{color:#0c95be}

</style>
<?php 
    $getProfileDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array();
?>
<main id="main" class="main">
    <div class="pagetitle">
      <h5>Welcome, <?= $_SESSION['aadharName']; ?></h5>
    </div><!-- End Page Title -->
    
    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="<?php if($pn !=5 && $pn !=4){ echo "card"; } ?>">
            <div class="<?php if($pn !=5 && $pn !=4){ echo "card-body"; } ?>">
              
                <div class="tab-content">

                <div class="tab-pane fade show active pt-3">
                    <div class="floatingButtonWrap">
                        <div class="floatingButtonInner">
                            <a href="#" class="floatingButton">
                                <div class="menu__wrapper">
                                    <div class="menu__item--bento mt-2" tabindex="3">
                                      <div class="box"></div>
                                      <div class="box"></div>
                                      <div class="box"></div>
                                      <div class="box"></div>
                                      <div class="box"></div>
                                      <div class="box"></div>
                                      <div class="box"></div>
                                      <div class="box"></div>
                                      <div class="box"></div>
                                    </div><span>Menu</span>
                                </div>
                            </a>
                            <ul class="floatingMenu">
                                <li>
                                    <a href="<?php echo base_url(); ?>user/upload_personal_details?pn=1">Add Basic Details</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>user/upload_personal_details?pn=2">Add Your Address</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>user/upload_personal_details?pn=3">Add Face Match Photo</a>
                                </li>
                                <?php 
                                    if($userdetail[0]['facematchphoto'] != NULL)
                                    {   
                                ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>user/upload_personal_details?pn=4">Add Latest Photos</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>user/upload_personal_details?pn=5">Add Contact Numbers</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>user/upload_personal_details?pn=6">Marital Details</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>user/upload_personal_details?pn=7">Active / In-Active Profile</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                </div>
                
                <div class="tab-pane fade show active profile-edit pt-0" id="profile-edit">

                  <!-- Profile Edit Form -->
                    <div id="step1" class="<?php if($pn != 1){ echo "d-none"; } ?>">
                        <form id="step1Form">
                            <h5 class="card-title pt-0 mb-0">Thanks for Registering. Now let's build your profile</h5>
                            <hr class="my-0">
                            <div class="row mb-3">
                                <div class="col-md-4 col-lg-3 form-group">
                                    <label for="aadharNumber" class="col-form-label">Aadhar Number</label>
                                    <input type="text" class="form-control" id="aadharNumber" value="<?php echo $userdetail[0]['aadhar_id']; ?>" readonly>
                                </div>
                               <div class="col-md-4 col-lg-3 form-group">
                                    <label for="fullName" class="col-form-label">Name (in Aadhar)</label>
                                    <input type="text" class="form-control" id="fullName" value="<?php echo $userdetail[0]['aadharname']; ?>" readonly>
                                </div>
                                <div class="col-md-4 col-lg-3 form-group">
                                    <label for="fatherName" class="col-form-label">Father Name (in Aadhar)</label>
                                    <input type="text" class="form-control" id="fatherName" value="<?php echo $userdetail[0]['careof']; ?>" readonly>
                                </div>
                                <div class="col-md-4 col-lg-3 form-group">
                                    <label for="dob" class="col-form-label">Date of Birth</label>
                                    <input type="text" class="form-control" id="dob" value="<?php echo date('d-m-Y',strtotime($userdetail[0]['dob'])); ?>" readonly>
                                </div>
                                <div class="col-md-4 col-lg-3 form-group">
                                    <label for="gender" class="col-form-label">Gender</label>
                                    <input type="text" class="form-control" id="gender" value="<?php echo $userdetail[0]['gender']; ?>" readonly>
                                </div>
                                <div class="col-md-4 col-lg-3 form-group">
                                    <label for="religion" class="col-form-label">Religion</label>
                                    <select class="form-control" required name="religion" id="religion" style="appearance:auto;">
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
                                        <option value="<?php echo $v['religionName']; ?>" <?php if(strtolower($userdetail[0]['religion']) == strtolower($v['religionName'])){ echo "selected"; } ?>><?php echo $v['religionName']; ?></option>
                                        <?php } ?>
                                        <?php }else{ ?>
                                            <option value="Other" <?php if(strtolower($userdetail[0]['religion']) == 'Other'){ echo "selected"; } ?>>Other</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 col-lg-2">
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
                                        <option value="<?= $v['Id']; ?>" <?php echo (($userdetail[0]['goldType'] == $v['Id']) ? 'selected' : ''); ?>><?= $v['Name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 col-lg-2">
                                    <label class="col-form-label">Gold HUID Number</label>
                                    <input type="text" class="form-control text-uppercase" name="goldHUID" id="goldId" maxlength="6" placeholder="Gold HUID Number" value="<?php echo $userdetail[0]['goldHUID']; ?>">
                                </div>
                                <div class="form-group col-md-4 col-lg-2">
                                    <label class="col-form-label">Vehicle Number</label>
                                    <input type="text" class="form-control text-uppercase" maxlength="10" name="vehicleNumber" placeholder="Vehicle Number" value="<?php echo $userdetail[0]['vehicleNumber']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-auto col-md-auto mb-3">
                                    <button type="submit" id="btn1" class="save w-100 btn btn-primary disabled-on-loading"> Save</button>
                                </div>
                                <div class="col-sm-12 col-lg-auto col-md-auto mb-3">
                                    <button type="button" id="btn1Next" class="next w-100 btn btn-primary disabled-on-loading"> Next</button>
                                </div>
                            </div>
                        </form><!-- End Profile Edit Form -->
                    </div>
                    <div id="step2" class="<?php if($pn != 2){ echo "d-none"; } ?>">
                        <form id="step2Form">
                            <h5 class="card-title pt-0 mb-0">Aadhar Address</h5>
                            <hr class="my-0">
                            <div class="row mb-0">
                                <div class="col-md-6 col-lg-6 form-group">
                                    <label for="address" class="col-form-label">Address</label>
                                    <input type="text" class="form-control" id="address" value="<?php echo (($userdetail[0]['landmark'] != '') ? $userdetail[0]['landmark'].',' : ''); ?><?php echo (($userdetail[0]['locality'] != '') ? $userdetail[0]['locality'] : ''); ?>" readonly>
                                </div>
                                <div class="col-md-6 col-lg-6 form-group">
                                    <label for="state" class="col-form-label">State</label>
                                    <input type="text" class="form-control" id="state" value="<?php echo $userdetail[0]['state']; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-4 col-lg-4 form-group">
                                    <label for="district" class="col-form-label">District</label>
                                    <input type="text" class="form-control" id="district" value="<?php echo $userdetail[0]['district']; ?>" readonly>
                                </div>
                                <div class="col-md-4 col-lg-4 form-group">
                                    <label for="city" class="col-form-label">City</label>
                                    <input type="text" class="form-control" id="city" value="<?php echo $userdetail[0]['vtc']; ?>" readonly>
                                </div>
                                <div class="col-md-4 col-lg-4 form-group">
                                    <label for="pincode" class="col-form-label">Pincode</label>
                                    <input type="text" class="form-control readonly" id="pincode" value="<?php echo $userdetail[0]['pincode']; ?>" readonly>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-12 col-lg-auto col-md-4 mt-2">
                                     <h5 class="card-title mb-0">Add your current address</h5>
                                </div>
                                <div class="col-sm-12 col-lg-auto col-md-4 mt-2">
                                    <input type="checkbox" class="form-check-input" id="isSame" name="isSame" <?php if($userdetail[0]['isSame'] == 1){ echo "checked"; } ?>>
                                    <label for="isSame" class="d-inline text-dark">Current Address is same as Aadhar Address</label>
                                </div>
                                <?php 
                                    if($userdetail[0]['isSame'] == 0)
                                    {
                                ?>
                                <div class="col-sm-12 col-lg-auto col-md-4 mt-2">
                                    <input type="checkbox" class="form-check-input" onclick="enableEdit(this)">
                                    <label for="isSame" class="d-inline text-dark">Want to edit current Address?</label>
                                </div>
                                <?php } ?>
                            </div>
                            <hr class="my-2">
                            <div id="samediv" class="<?php if($userdetail[0]['isSame'] != 1){ echo 'd-none'; } ?>">
                                <div class="row mb-3">
                                    <div class="col-md-6 col-lg-6 form-group">
                                        <label for="address" class="col-form-label">Address</label>
                                        <input type="text" class="form-control" <?php if($userdetail[0]['isSame'] == 1){ ?> name="curaddress" required <?php } ?> id="cursameaddress" readonly value="<?php echo (($userdetail[0]['curaddress'] != '') ? $userdetail[0]['curaddress'] : ''); ?>">
                                    </div>
                                    <div class="col-md-6 col-lg-6 form-group">
                                        <label for="state" class="col-form-label">State</label>
                                        <input type="text" <?php if($userdetail[0]['isSame'] == 1){ ?> name="curstate" required <?php } ?> class="form-control" id="cursamestate" readonly value="<?php echo $userdetail[0]['curstate']; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4 col-lg-4 form-group">
                                        <label for="district" class="col-form-label">District</label>
                                        <input type="text" <?php if($userdetail[0]['isSame'] == 1){ ?> name="curdistrict" required <?php } ?> class="form-control" readonly id="cursamedistrict" value="<?php echo $userdetail[0]['curdistrict']; ?>">
                                    </div>
                                    <div class="col-md-4 col-lg-4 form-group">
                                        <label for="curcity" class="col-form-label">City</label>
                                        <input type="text" class="form-control" <?php if($userdetail[0]['isSame'] == 1){ ?> name="curcity" required <?php } ?> readonly id="cursamecity" value="<?php echo $userdetail[0]['curcity']; ?>">
                                    </div>
                                    <div class="col-md-4 col-lg-4 form-group">
                                        <label for="pincode" class="col-form-label">Pincode</label>
                                        <input type="text" <?php if($userdetail[0]['isSame'] == 1){ ?> name="curpincode" required <?php } ?> class="form-control" readonly id="cursamepincode" value="<?php echo $userdetail[0]['curpincode']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div id="notsamediv" class="<?php if($userdetail[0]['isSame'] != 0){ echo 'd-none'; } ?>">
                                <div class="row mb-3">
                                    <div class="col-md-6 col-lg-6 form-group">
                                        <label for="address" class="col-form-label">Address</label>
                                        <input type="text" class="form-control" <?php if($userdetail[0]['isSame'] == 0){ ?> name="curaddress" disabled required <?php } ?>  id="curnotsameaddress" value="<?php echo (($userdetail[0]['curaddress'] != '') ? $userdetail[0]['curaddress'] : ''); ?>">
                                    </div>
                                    <div class="col-md-6 col-lg-6 form-group">
                                        <label for="state" class="col-form-label">State</label>
                                        <select <?php if($userdetail[0]['isSame'] == 0){ ?> name="curstate" disabled required <?php } ?> id="curnotsamestate" class="form-control select2">
                                            <option value="All">Select State</option>
                                            <option value="Andhra Pradesh" <?php if($userdetail[0]['curstate'] == 'Andhra Pradesh'){ echo "selected"; } ?>>Andhra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands"<?php if($userdetail[0]['curstate'] == 'Andaman and Nicobar Islands'){ echo "selected"; } ?>>Andaman and Nicobar Islands</option>
                                            <option value="Arunachal Pradesh"<?php if($userdetail[0]['curstate'] == 'Arunachal Pradesh'){ echo "selected"; } ?>>Arunachal Pradesh</option>
                                            <option value="Assam"<?php if($userdetail[0]['curstate'] == 'Assam'){ echo "selected"; } ?>>Assam</option>
                                            <option value="Bihar"<?php if($userdetail[0]['curstate'] == 'Bihar'){ echo "selected"; } ?>>Bihar</option>
                                            <option value="Chandigarh"<?php if($userdetail[0]['curstate'] == 'Chandigarh'){ echo "selected"; } ?>>Chandigarh</option>
                                            <option value="Chhattisgarh"<?php if($userdetail[0]['curstate'] == 'Chhattisgarh'){ echo "selected"; } ?>>Chhattisgarh</option>
                                            <option value="Dadar and Nagar Haveli" <?php if($userdetail[0]['curstate'] == 'Dadar and Nagar Haveli'){ echo "selected"; } ?>>Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu" <?php if($userdetail[0]['curstate'] == 'Daman and Diu'){ echo "selected"; } ?>>Daman and Diu</option>
                                            <option value="Delhi" <?php if($userdetail[0]['curstate'] == 'Delhi'){ echo "selected"; } ?>>Delhi</option>
                                            <option value="Lakshadweep" <?php if($userdetail[0]['curstate'] == 'Lakshadweep'){ echo "selected"; } ?>>Lakshadweep</option>
                                            <option value="Puducherry" <?php if($userdetail[0]['curstate'] == 'Puducherry'){ echo "selected"; } ?>>Puducherry</option>
                                            <option value="Goa" <?php if($userdetail[0]['curstate'] == 'Goa'){ echo "selected"; } ?>>Goa</option>
                                            <option value="Gujarat" <?php if($userdetail[0]['curstate'] == 'Gujarat'){ echo "selected"; } ?>>Gujarat</option>
                                            <option value="Haryana" <?php if($userdetail[0]['curstate'] == 'Haryana'){ echo "selected"; } ?>>Haryana</option>
                                            <option value="Himachal Pradesh" <?php if($userdetail[0]['curstate'] == 'Himachal Pradesh'){ echo "selected"; } ?>>Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir" <?php if($userdetail[0]['curstate'] == 'Jammu and Kashmir'){ echo "selected"; } ?>>Jammu and Kashmir</option>
                                            <option value="Jharkhand" <?php if($userdetail[0]['curstate'] == 'Jharkhand'){ echo "selected"; } ?>>Jharkhand</option>
                                            <option value="Karnataka" <?php if($userdetail[0]['curstate'] == 'Karnataka'){ echo "selected"; } ?>>Karnataka</option>
                                            <option value="Kerala" <?php if($userdetail[0]['curstate'] == 'Kerala'){ echo "selected"; } ?>>Kerala</option>
                                            <option value="Madhya Pradesh" <?php if($userdetail[0]['curstate'] == 'Madhya Pradesh'){ echo "selected"; } ?>>Madhya Pradesh</option>
                                            <option value="Maharashtra" <?php if($userdetail[0]['curstate'] == 'Maharashtra'){ echo "selected"; } ?>>Maharashtra</option>
                                            <option value="Manipur" <?php if($userdetail[0]['curstate'] == 'Manipur'){ echo "selected"; } ?>>Manipur</option>
                                            <option value="Meghalaya" <?php if($userdetail[0]['curstate'] == 'Meghalaya'){ echo "selected"; } ?>>Meghalaya</option>
                                            <option value="Mizoram" <?php if($userdetail[0]['curstate'] == 'Mizoram'){ echo "selected"; } ?>>Mizoram</option>
                                            <option value="Nagaland" <?php if($userdetail[0]['curstate'] == 'Nagaland'){ echo "selected"; } ?>>Nagaland</option>
                                            <option value="Odisha" <?php if($userdetail[0]['curstate'] == 'Odisha'){ echo "selected"; } ?>>Odisha</option>
                                            <option value="Punjab" <?php if($userdetail[0]['curstate'] == 'Punjab'){ echo "selected"; } ?>>Punjab</option>
                                            <option value="Rajasthan" <?php if($userdetail[0]['curstate'] == 'Rajasthan'){ echo "selected"; } ?>>Rajasthan</option>
                                            <option value="Sikkim" <?php if($userdetail[0]['curstate'] == 'Sikkim'){ echo "selected"; } ?>>Sikkim</option>
                                            <option value="Tamil Nadu" <?php if($userdetail[0]['curstate'] == 'Tamil Nadu'){ echo "selected"; } ?>>Tamil Nadu</option>
                                            <option value="Telangana" <?php if($userdetail[0]['curstate'] == 'Telangana'){ echo "selected"; } ?>>Telangana</option>
                                            <option value="Tripura" <?php if($userdetail[0]['curstate'] == 'Tripura'){ echo "selected"; } ?>>Tripura</option>
                                            <option value="Uttar Pradesh" <?php if($userdetail[0]['curstate'] == 'Uttar Pradesh'){ echo "selected"; } ?>>Uttar Pradesh</option>
                                            <option value="Uttarakhand" <?php if($userdetail[0]['curstate'] == 'Uttarakhand'){ echo "selected"; } ?>>Uttarakhand</option>
                                            <option value="West Bengal" <?php if($userdetail[0]['curstate'] == 'West Bengal'){ echo "selected"; } ?>>West Bengal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4 col-lg-4 form-group">
                                        <label for="district" class="col-form-label">District</label>
                                        <select <?php if($userdetail[0]['isSame'] == 0){ ?> name="curdistrict" disabled required <?php } ?> id="curnotsamedistrict" class="form-control select2">
                                            <option value="">Select District</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-lg-4 form-group">
                                        <label for="curcity" class="col-form-label">City</label>
                                        <input type="text" class="form-control" <?php if($userdetail[0]['isSame'] == 0){ ?> name="curcity" disabled required <?php } ?> id="curnotsamecity" value="<?php echo $userdetail[0]['curcity']; ?>">
                                    </div>
                                    <div class="col-md-4 col-lg-4 form-group">
                                        <label for="pincode" class="col-form-label">Pincode</label>
                                        <input type="text" name="curpincode" <?php if($userdetail[0]['isSame'] == 0){ ?> name="curpincode" disabled required <?php } ?> class="form-control" id="curnotsamepincode" value="<?php echo $userdetail[0]['curpincode']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-auto col-lg-auto mt-3">
                                    <button type="button" id="btn2Back" class="btn btn-dark disabled-on-loading w-100 save" style="background:black!important;"> Back</button>
                                </div>
                                <div class="col-sm-12 col-md-auto col-lg-auto mt-3">
                                    <button type="submit" id="btn2" class="save btn btn-primary disabled-on-loading w-100"> Save</button>
                                </div>
                                <div class="col-sm-12 col-md-auto col-lg-auto mt-3">
                                    <button type="button" id="btn2Next" class="next btn btn-primary w-100 disabled-on-loading"> Next</button>
                                </div>
                            </div>
                        </form><!-- End Profile Edit Form -->
                    </div>
                    <div id="step3" class="<?php if($pn != 3){ echo "d-none"; } ?>">
                        <form id="step3Form">
                            <h5 class="card-title pt-0 mb-0">Upload your Face Photo for face match</h5>
                            <hr class="my-0">
                            <div class="row my-3 align-items-center text-center">
                                <?php 
                                    if($getProfileDetail[0]['facematchphoto'] == NULL)
                                    {
                                ?>
                                <div class="col-lg-5 mb-3 col-sm-12 col-md-5">
                                    <label class="form-label">Sample Photo</label>
                                    <img src="<?php echo base_url(); ?>assets/images/facematch.webp" style="width:100%;height:150px;">
                                </div>
                                <?php } ?>
                                <div class="col-md-4 col-lg-4 px-0 form-group">
                                    <input type="hidden" name="oldphoto" id="oldphoto" value="<?php echo $getProfileDetail[0]['facematchphoto']; ?>">
                                    <input type="hidden" name="facematch" id="facematch">
                                    <label class="form-label">Choose Photo</label>
                                    <div style="position:relative;">
                                        <?php 
                                            if($getProfileDetail[0]['facematchphoto'] != NULL)
                                            {
                                        ?>
                                        <div class="col-lg-12 col-sm-12 col-md-12 px-0">
                                            <div class="row border border-secondary mx-0 p-3" style="border-radius:15px;border-color:lightgrey!important;">
                                                <div class="col-lg-auto col px-0">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                                            <h6><b>File Uploaded</b></h6>
                                                        </div>
                                                    </div>  
                                                    <?php 
                                                        $split = explode('upload/profile/facematch/',$getProfileDetail[0]['facematchphoto']);
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                                            <p class="mb-1" style="color:grey;"><?php echo $split[1]; ?></p>
                                                        </div>
                                                    </div>  
                                                    <div class="row" style="margin-top:10px;">
                                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                                            <a title="Preview" href="<?php echo base_url(); ?><?php echo $getProfileDetail[0]['facematchphoto']; ?>" data-lightbox="facematch" style="color:#fff!important;border:0px solid #0d6efd;padding:10px;border-radius:50%;background:#0d6efd;"><i class="fa fa-eye"></i></a>
                                                            <a title="Re-upload" href="javascript:void(0)" style="color:#fff!important;border:0px solid #ffb309;padding:10px;border-radius:50%;background:#ffb309;margin-left:7px;" onclick="showFaceMatchReUpload()"><i class="fa fa-edit"></i></a>
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
                                            <div class="row mt-3 mx-0 d-none" id="reUploadFaceDiv">
                                                <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                    <label class="form-label">Re-upload image</label>
                                                    <input type="file" class="form-control" accept="image/*" name="uploadPhoto" id="uploadPhoto" onchange="cropPhoto(event)">
                                                </div>
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                            <div class="col-lg-12 col-sm-12 col-md-12 border border-secondary p-3 text-center" style="border-radius:15px;border-color:lightgrey!important;">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <h6>PNG, JPEG or JPG formats only</h6>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#reUploadFaceModal" class="btn btn-style-upload w-100"> <i class="fa fa-cloud-upload"></i> Upload File</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="reUploadFaceModal" class="modal" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border:0;padding-bottom:0;padding-top:0;">
                                                            <button type="button" class="btn btn-default ms-auto py-0" data-bs-dismiss="modal" style="color: darkgrey;background: transparent!important;font-size: xx-large;">&times;</button>
                                                        </div>
                                                        <div class="modal-body px-3 px-md-5 pt-0">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                                    <h4 class="modal-title text-center"><?php echo $j; ?>Upload Face Match Photo</h4>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-0">
                                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                                    <div class="row mt-3 mx-0" id="reUploadFaceDiv">
                                                                        <div class="col-md-12 col-sm-12 col-lg-12 px-0 text-start">
                                                                            <label class="form-label">Upload image</label>
                                                                            <input type="file" class="form-control" accept="image/*" name="uploadPhoto" id="uploadPhoto" onchange="cropPhoto(event)">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                 </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-5 mt-3 col-sm-12 col-md-5 d-none" id="previewFaceDiv">
                                    <label class="form-label">Preview Photo</label>
                                    <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" id="previewPhoto" style="width:100%;height:150px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-auto col-lg-auto mb-3">
                                    <button type="button" id="btn3Back" class="btn btn-dark disabled-on-loading w-100 save" style="background:black!important;"> Back</button>
                                </div>
                                <?php 
                                    if($getProfileDetail[0]['facematchphoto'] != NULL)
                                    {
                                ?>
                                <div class="col-lg-auto col-md-auto col-sm-12 mb-3">
                                    <button type="button" id="btn3Next" class="w-100 next btn btn-primary disabled-on-loading"> Next</button>
                                </div>
                                <?php } ?>
                            </div>
                        </form><!-- End Profile Edit Form -->
                    </div>
                    <div id="step4" class="<?php if($pn != 4){ echo "d-none"; } ?>">
                        <form id="step4Form">
                            <?php 
                                $getPhotos = $this->db->query('select * from userphotos where userId='.$_SESSION['user_id'])->result_array();
                            ?>
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <h5 class="text-dark mb-0">Upload your latest photos</h5>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <?php 
                                $j=0;
                                for($i=0;$i<5;$i++)
                                {
                                    $j++;
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
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#reUploadModal<?php echo $j; ?>" class="btn btn-style-upload w-100"> <i class="fa fa-cloud-upload"></i> Upload File</button>
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
                                                    <h4 class="modal-title text-center"><?php echo $j; ?>- Upload Your Latest Photo</h4>
                                                </div>
                                            </div>
                                            <div class="row mt-0">
                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                    <div class="row mt-3 mx-0" id="reUploadDiv<?php echo $i; ?>">
                                                        <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                            <label class="form-label">Upload image</label>
                                                            <input type="file" class="form-control" name="photo<?php echo $i; ?>" accept="image/*" id="photoupload<?php echo $i; ?>">
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
                                                <h5 class="modal-title"><?php echo $j; ?>- Uploaded Latest Photo</h5>
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
                                                            $split = explode('upload/profile/',$getPhotos[$i]['photourl']);
                                                        ?>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                <p class="mb-1" style="color:grey;"><?php echo $split[1]; ?></p>
                                                            </div>
                                                        </div>  
                                                        <div class="row" style="margin-top:10px;">
                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                <a title="Preview" href="<?php echo base_url(); ?><?php echo $getPhotos[$i]['photourl']; ?>" data-lightbox="rd2" style="color:#fff!important;border:0px solid #0d6efd;padding:10px;border-radius:50%;background:#0d6efd;"><i class="fa fa-eye"></i></a>
                                                                <a title="Re-upload" href="javascript:void(0)" style="color:#fff!important;border:0px solid #ffb309;padding:10px;border-radius:50%;background:#ffb309;margin-left:7px;" onclick="showReUpload(<?php echo $i; ?>)"><i class="fa fa-edit"></i></a>
                                                                <a title="Remove" href="javascript:void(0)" class="btn btn-danger" style="background:white!important;color:red!important;margin-left:7px;" onclick="deletePhoto(<?php echo $getPhotos[$i]['Id']; ?>)"><i class="fa fa-trash"></i></a>
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
                                                        <input type="file" class="form-control" name="photo<?php echo $i; ?>" accept="image/*" id="photoupload<?php echo $i; ?>">
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
                                                        <h5 class="modal-title"><?php echo $j; ?>- Uploaded Latest Photo</h5>
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
                                                                    $split = explode('upload/profile/',$getPhotos[$i]['photourl']);
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
                                                                <input type="file" class="form-control" accept="image/*" id="photo<?php echo $i; ?>">
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
                                    <?php } ?>
                            <?php } ?>
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row text-start justify-content-start">
                                        <div class="col-lg-auto col-md-auto col-sm-12 col-6">
                                            <button type="button" id="btn4Back" class="btn-style-grey btn btn-primary d-block w-100 disabled-on-loading"> Back</button>
                                        </div>
                                        <div class="col-lg-auto col-md-auto col-sm-12 col-6">
                                            <button type="button" id="btn4Next" class="btn-style-five btn btn-primary d-block w-100 disabled-on-loading"> Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form><!-- End Profile Edit Form -->
                    </div>
                    <div id="step5" class="<?php if($pn != 5){ echo "d-none"; } ?>">
                        <?php 
                            $getSettings = $this->db->query('select * from settings where name="deleteOTP"')->result_array();
                            $getRelations = $this->db->query('select * from relations')->result_array();
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0 pb-0">Add your well wisher contact number</h5>
                                <?php 
                                    if($getSettings[0]['value'] == 1)
                                    {
                                ?>
                                <hr>
                                <h6 class="text-left"><b class="text-danger">Note:-</b> An OTP will be sent to same number during deletion.</h6>
                                <?php } ?>
                            </div>
                        </div>
                        <?php 
                            for($i=1;$i<=3;$i++)
                            {
                        ?>
                        <?php 
                            if($getProfileDetail[0]['well'.$i] != NULL)
                            {
                        ?>
                        <div class="card">
                            <div class="card-body py-3">
                                <div class="row my-3 align-items-end">
                                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                                        <label class="form-label">Select Relation</label>
                                        <select class="form-control select2" <?php if($getProfileDetail[0]['well'.$i] != NULL) { echo "disabled"; } ?> id="wellrel<?php echo $i; ?>" name="wellrel<?php echo $i; ?>" required>
                                            <?php 
                                                if(count($getRelations) > 0)
                                                {
                                            ?>
                                            <option value="">Select Relation</option>
                                            <?php 
                                                foreach($getRelations as $k=>$v)
                                                {
                                            ?>
                                            <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getProfileDetail[0]['wellrel'.$i]){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                                            <?php } } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-auto col-md-auto col-sm-12 mb-3 <?php echo (($getProfileDetail[0]['wellrel'.$i] != 23) ? 'd-none' : '') ?>" id="otherrelationdiv<?php echo $i; ?>">
                                        <label class="form-label">Enter Other Relation</label>
                                        <input type="text" disabled value="<?php echo (($getProfileDetail[0]['wellrel'.$i] == 23) ? $getProfileDetail[0]['otherrelationname'.$i] : '') ?>" class="form-control" placeholder="Enter Other Relation" name="otherrelation<?php echo $i ?>" id="otherrelation<?php echo $i ?>">
                                    </div>
                                    <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                        <label for="othermob<?php echo $i; ?>">Mobile Number</label>
                                        <input type="number" max="10" size="10" value="<?php echo (($getProfileDetail[0]['well'.$i] != NULL) ? $getProfileDetail[0]['well'.$i] : '') ?>" <?php if($getProfileDetail[0]['well'.$i] != NULL) { echo "disabled"; } ?> class="form-control mt-2" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="othermob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="othermob<?php echo $i; ?>" required>  
                                    </div>
                                    <div class="col-lg-3 mb-2 <?php if($getProfileDetail[0]['wellrel'.$i] != NULL) { echo "d-none"; } ?>" id="sendOtpDiv<?php echo $i; ?>">
                                        <button type="button" class="btn btn-info btn-style-grey disabled-on-loading disabled" id="btnOtp<?php echo $i; ?>" onclick="sendOtp(<?php echo $i; ?>)"> Send OTP</button>
                                    </div>  
                                    <div class="col-lg-auto mb-3 col-sm-12 col-md-auto text-center" id="actiondiv">
                                        <button type="button" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="deleteAlternate(this,<?php echo $i; ?>,<?php echo $getSettings[0]['value']; ?>)"> <i class="fa fa-trash"></i></button>
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
                                    <select class="form-control select2" onchange="showAccordingly(this.value,<?php echo $i; ?>)" <?php if($getProfileDetail[0]['wellrel'.$i] != NULL) { echo "disabled"; } ?> id="wellrel<?php echo $i; ?>" name="wellrel<?php echo $i; ?>" required>
                                        <?php 
                                            if(count($getRelations) > 0)
                                            {
                                        ?>
                                        <option value="">Select Relation</option>
                                        <?php 
                                            foreach($getRelations as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getProfileDetail[0]['wellrel'.$i]){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
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
                                    <label for="othermob<?php echo $i; ?>">Mobile Number</label>
                                    <input type="number" max="10" size="10" value="<?php echo (($getProfileDetail[0]['well'.$i] != NULL) ? $getProfileDetail[0]['well'.$i] : '') ?>" <?php if($getProfileDetail[0]['wellrel'.$i] != NULL) { echo "disabled"; } ?> class="form-control mt-2" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="othermob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="othermob<?php echo $i; ?>" required>  
                                </div>
                                <div class="col-lg-auto text-center col-md-auto mb-2 <?php if($getProfileDetail[0]['wellrel'.$i] != NULL) { echo "d-none"; } ?>" id="sendOtpDiv<?php echo $i; ?>">
                                    <button type="button" class="w-100 btn btn-info btn-style-grey disabled-on-loading disabled" id="btnOtp<?php echo $i; ?>" onclick="sendOtp(<?php echo $i; ?>)"> Send OTP</button>
                                </div>  
                            </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <div class="card">
                            <div class="card-body py-3">
                                <div class="row mb-0 align-items-center">
                                    <div class="col-sm-12 col-md-auto col-lg-auto mt-1 mb-1">
                                        <button type="button" id="btn5Back" class="btn btn-dark disabled-on-loading w-100 save" style="background:black!important;"> Back</button>
                                    </div>
                                    <div class="col-lg-auto col-md-auto col-sm-12 mt-1 mb-1">
                                        <button type="button" id="btn5" class="next w-100 btn btn-primary disabled-on-loading"> Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step6" class="<?php if($pn != 6){ echo "d-none"; } ?>">
                        <form id="step6Form">
                            <h5 class="card-title pt-0 mb-0 text-danger">Marital Details</h5>
                            <?php 
                                if($getUserDetail[0]['spouseAadhar'] != '')
                                {
                            ?>
                            <hr class="my-0 mb-1">
                            <p class="text-danger mb-0 text-center">Note: An OTP will be sent to registered (in Aadhaar) mobile number during deletion.</p>
                            <hr class="my-0 mt-1">
                            <?php } ?>
                             <?php if($getUserDetail[0]['spouseAadhar'] == NULL){ ?>
                            <div class="form-group mt-0">
                                <label class="form-label">Select Marital Status</label>
                                <div class="form-group mb-2">
                                    <input type="radio" name="maritalstatus" id="maritalstatus1" class="radio-custom" value="0" <?php if($getUserDetail[0]['isMarried'] == 0 && $getUserDetail[0]['isMarried'] != NULL){ echo "checked"; } ?> required>
                                    <label for="maritalstatus1" class="mx-2 radio-custom-label">Single</label>
                                    <input type="radio" name="maritalstatus" id="maritalstatus2" class="radio-custom" value="1" <?php if($getUserDetail[0]['isMarried'] == 1){ echo "checked"; } ?> required>
                                    <label for="maritalstatus2" class="mx-2 radio-custom-label">Married</label>
                                </div>
                            </div>
                            <div class="form-group mt-2 <?php if($getUserDetail[0]['isMarried'] != 1){ echo "d-none"; } ?>" id="spouseNameDiv">
                                <label class="form-label " style="color:red!important;text-transform: capitalize;">Do you want to add your spouse (Husband / Wife) name:</label>
                                <div class="form-group mb-2">
                                    <input type="radio" name="isSpouseNameAdded" id="spousestatus1" class="radio-custom" value="1">
                                    <label for="spousestatus1" class="mx-2 radio-custom-label">Yes</label>
                                    <input type="radio" name="isSpouseNameAdded" id="spousestatus2" class="radio-custom" value="0" checked>
                                    <label for="spousestatus2" class="mx-2 radio-custom-label">No</label>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="mt-2 <?php if($getUserDetail[0]['isSpouseNameAdded'] == 0){ echo "d-none"; } ?>" id="marrieddiv">
                                <div id="isDataAvail" class="<?php if($getUserDetail[0]['spouseAadhar'] == ''){ echo "d-none"; } ?>">
                                    <div class="row">
                                        <div class="form-group col-lg-3 col-sm-12 col-md-6 mt-2">
                                            <label>Spouse Aadhar Number</label>
                                            <input type="text" class="form-control" readonly value="<?php echo $getUserDetail[0]['spouseAadhar']; ?>">
                                        </div>
                                        <?php 
                                            if($getUserDetail[0]['spouseAadhar'] != '')
                                            {
                                                $getSpouseDetail = $this->db->query('select * from user where aadhar_id="'.$getUserDetail[0]['spouseAadhar'].'"')->result_array();
                                                if(count($getSpouseDetail) > 0)
                                                {
                                        ?>
                                        <div class="form-group col-lg-3 col-sm-12 col-md-6 mt-2">
                                            <label>Spouse Name</label>
                                            <input type="text" class="form-control" id="spouseAadharName" readonly value="<?php echo $getSpouseDetail[0]['aadharname']; ?>">
                                        </div>
                                        <input type="hidden" id="registeredmobile" value="<?php echo $getSpouseDetail[0]['registration_mobile']; ?>">
                                        <div class="form-group col-lg-3 col-sm-12 col-md-6 mt-2">
                                            <label>Date of Birth</label>
                                            <input type="text" class="form-control" readonly value="<?php echo date('d-m-Y',strtotime($getSpouseDetail[0]['dob'])); ?>">
                                        </div>
                                        <div class="form-group col-lg-3 col-sm-12 col-md-6 mt-2">
                                            <label>Gender</label>
                                            <input type="text" class="form-control" readonly value="<?php echo $getSpouseDetail[0]['gender']; ?>">
                                        </div>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div id="isDataNotAvail" class="<?php if($getUserDetail[0]['spouseAadhar'] != ''){ echo "d-none"; } ?>">
                                    <div class="row align-items-end text-center">
                                        <div class="text-start form-group col-lg-3 col-sm-12 col-md-auto mb-2">
                                            <label >Enter Spouse Aadhar Number</label>
                                            <input type="text" class="form-control" id="spouseAadhar" name="spouseAadhar">
                                        </div>
                                        <div class="form-group mb-2 col-lg-auto col-sm-12 col-md-auto">
                                            <button type="button" class="btn btn-primary save disabled-on-loading" onclick="checkSpouseDetail(this)"> Go</button>
                                        </div>
                                        <div class="text-start form-group col-lg-4 col-sm-12 col-md-5 mb-2 d-none" id="spouseNameVisDiv">
                                            <label>Spouse Name</label>
                                            <textarea class="form-control readonly" id="spouseName" readonly name="spouseName"></textarea>
                                        </div>
                                    </div>
                                    <div class="row align-items-end d-none" id="detailspousediv">
                                        <input type="hidden" id="spouseMobile">
                                        <div class="form-group col-lg-auto col-sm-12 col-md-auto mt-3" id="sendotpdiv">
                                            <button type="button" class="w-100 btn btn-primary btn-style-four disabled-on-loading" onclick="sendSpouseOtp(this)"> Send OTP</button>
                                        </div>
                                        <div id="otpnumberdiv" class="d-none">
                                            <hr>
                                            <div class="col-12 my-2">
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <h5>OTP has been sent to <span id="otpnumberspan" style="color:crimson;font-weight:bold;"></span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="form-group col-lg-auto col-sm-12 col-md-auto d-none mt-3" id="resendotpdiv">
                                            <button type="button" class="w-100 btn btn-primary next disabled-on-loading" onclick="resendSpouseOtp(this)"> Resend OTP</button>
                                        </div>
                                        <div class="spouseotpdiv d-none form-group col-lg-auto col-sm-12 col-md-auto mt-3">
                                            <label>Enter OTP</label>
                                            <input type="number" class="form-control" id="spouseOtp">
                                        </div>
                                        <div class="spouseotpdiv d-none form-group col-lg-auto col-sm-12 col-md-auto mt-3">
                                            <button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifySpouseOtp(this)"> Verify OTP</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-auto col-lg-auto mt-3" >
                                    <button type="button" id="btn6Back" class="btn btn-dark disabled-on-loading w-100 save" style="background:black!important;"> Back</button>
                                </div>
                                <?php 
                                    if($getUserDetail[0]['spouseAadhar'] != '')
                                    {
                                ?>
                                <div class="col-sm-12 col-md-auto col-lg-auto mt-3">
                                    <button type="button" class="btn btn-dark disabled-on-loading w-100 reset" onclick="deleteMarriageInfo(this)"> Delete Spouse Detail <i class="fa fa-trash"></i></button>
                                </div>
                                <?php }else{ ?>
                                    <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                                        <button type="submit" class="btn btn-primary save w-100 disabled-on-loading" id="btn6"> Save</button>
                                    </div>
                                <?php } ?>
                                <div class="col-sm-12 col-md-auto col-lg-auto mt-3 d-none" id="clearAadharDiv" >
                                    <button type="button" id="clearAadhar" class="btn btn-dark disabled-on-loading w-100 save" style="background:crimson!important;"> Clear Aadhar</button>
                                </div>
                                <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                                    <button type="button" class="btn btn-primary next w-100 disabled-on-loading" onclick="goToNext(this)"> Next</button>
                                </div>
                                <!--<div class="col-lg-auto col-sm-12 col-md-auto mt-3">-->
                                <!--    <button type="button" class="btn btn-primary next w-100 disabled-on-loading" onclick="goToDashboard(this)"> Go to Dashboard</button>-->
                                <!--</div>-->
                            </div>
                        </form>
                    </div>
                    <div id="step7" class="<?php if($pn != 7){ echo "d-none"; } ?>">
                        <form id="step7Form">
                            <h5 class="card-title pt-0 mb-0 text-danger">Privacy Settings</h5>
                            <div class="form-group mb-3">
                                <label class="form-label">Profile Visiblitiy</label>
                                <div class="form-group my-2">
                                    <span class="mx-2 <?php if($getUserDetail[0]['visibility'] == 1){ echo "activeLabel"; } ?>" id="visibility1label">
                                        <input type="radio" name="visibility" id="visibility2" class="radio-custom" value="1" <?php if($getProfileDetail[0]['visibility'] == 1){ echo "checked"; } ?> required>
                                        <label for="visibility2" class="ml-2 radio-custom-label" style="font-weight:bold;">Active Mode</label>
                                    </span>
                                    <span class="mx-2 <?php if($getUserDetail[0]['visibility'] == 0 && $getUserDetail[0]['visibility'] != NULL){ echo "activeLabel"; } ?>" id="visibility2label">
                                        <input type="radio" name="visibility" id="visibility1" class="radio-custom" value="0" <?php if($getProfileDetail[0]['visibility'] == 0 && $getProfileDetail[0]['visibility'] != NULL){ echo "checked"; } ?> required>
                                        <label for="visibility1" style="font-weight:bold;" class="ml-2 radio-custom-label">In-Active Mode</label>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-auto col-lg-auto mt-3" >
                                    <button type="button" id="btn7Back" class="btn btn-dark disabled-on-loading w-100 save" style="background:black!important;"> Back</button>
                                </div>
                                <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                                    <button type="submit" class="btn btn-primary save w-100 disabled-on-loading" id="btn7"> Save</button>
                                </div>
                                <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                                    <button type="button" class="btn btn-primary next w-100 disabled-on-loading" style="background:indigo!important;" onclick="goToFilters(this)"> Add Your Filters</button>
                                </div>
                                <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                                    <button type="button" class="btn btn-primary next w-100 disabled-on-loading" onclick="goToDashboard(this)"> Go to Dashboard</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                <form action="<?php echo base_url(); ?>user/updateSinglePhoto" id="updatePhotoForm">
                    <input type="hidden" id="updateId" name="Id">
                    <div class="form-group">
                        <label class="form-label">Select New Photo</label>
                        <input type="file" id="editInput" accept="image/*" name="photo" class="form-control" required>
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
                <button class="btn btn-success crop_image disabled-on-loading btn-style-green"> Save</button>
            </div>
        </div>
        </div>
     </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .swal2-close{
        position: relative!important;
        color: #fff!important;
        font-size: 20px!important;
        line-height: 20px!important;
        font-weight: 600!important;
        padding: 25px 25px!important;
        background-color:black!important;
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
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript">
  
    function verifySpouseOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let otp = $('#spouseOtp').val();
        if(otp != '')
        {
            let data = new FormData();
            data.append('otp',otp);
            data.append('spouseAadhar',$('#spouseAadhar').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/verifySpouseOtp',
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
                        toastr.success('Spouse Added Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },3000);
                    }else{
                        toastr.error('Invalid OTP');
                        $(ele).removeAttr('disabled');
                    }
                }
            });
        }else{
            toastr.error('Please enter valid OTP');
            $(ele).removeAttr('disabled');
        }
    }
    
    $('#step7Form').on('submit',function(e)
    {
        // e.preventDefault();
        // $('#btn7').attr('disabled','disabled');
        // let data=new FormData();
        // data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        // $.ajax({
        //     url:'<?php echo base_url(); ?>user/sendPrivacyOtp',
        //     data:data,
        //     contentType: false,
        //     cache: false,
        //     processData:false,
        //     type:'post',
        //     success:function(res)
        //     {
        //         Swal.fire({
        //           title: '<strong style="font-size:17px;">Enter OTP to proceed </strong>',
        //           icon: 'success',
        //           allowOutsideClick:false,
        //           html:
        //             '<div clas="form-group mb-3><label class="form-label">OTP hs been sent to '+res+'</label></div><div class="form-group mb-3"><input type="number" autofocus class="form-control" id="privacyOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyPrivacyOtp(this)"> Verify OTP</button></div><div class="form-group mt-3"><button type="button" class="w-100 btn btn-primary next disabled-on-loading" onclick="resendPrivacyOtp(this)"> Resend OTP</button></div>',
        //           showCloseButton: true,
        //           showCancelButton: false,
        //           focusConfirm: false,
        //           showConfirmButton:false
        //         }).then((result) => {
        //             if (result.isDismissed) {
        //                 $('#btn7').removeAttr('disabled');   
        //             }
        //         })
        //     }
        // });
        e.preventDefault();
        $('#btn7').attr('disabled','disabled');
        let data=new FormData(this);
        let visibility = $('input[name="visibility"]:checked').val();
        data.append('visibility',visibility);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/verifyPrivacyOtp',
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
                    toastr.success('Preferences Updated Successfully');
                    setTimeout(function()
                    {
                        location.reload();
                    },3000);
                 }else{
                    $(ele).removeAttr('disabled');
                    toastr.error('Invalid OTP');
                 }
            }
        })   
    })
    
    function verifyPrivacyOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let otp = $('#privacyOtpInput').val();
        if(otp != '')
        {
            let data= new FormData();
            data.append('otp',otp);
            let visibility = $('input[name="visibility"]:checked').val();
            data.append('visibility',visibility);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/verifyPrivacyOtp',
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
                        toastr.success('Preferences Updated Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },3000);
                     }else{
                        $(ele).removeAttr('disabled');
                        toastr.error('Invalid OTP');
                     }
                }
            })   
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter OTP');
        }
    }
    
    function resendPrivacyOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendPrivacyOtp',
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                toastr.success('OTP Sent Successfully');
                $(ele).removeAttr('disabled');
            }
        })
    }
    
    function sendSpouseOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let mobileNumber = $('#spouseMobile').val();
        if(mobileNumber != '')
        {
            let data = new FormData();
            data.append('mobile',mobileNumber);
            data.append('name',$('#spouseName').val());
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
                    $('#btn6').addClass('d-none');
                    $(ele).addClass('d-none');
                    $('#otpnumberdiv').removeClass('d-none');
                    $('#spouseOtp').attr('required',true);
                    $('#sendotpdiv').addClass('d-none');
                    $('#resendotpdiv').removeClass('d-none');
                    $('.spouseotpdiv').removeClass('d-none');
                }
            });
        }else{
            $('#btn6').removeClass('d-none');
            $('#spouseOtp').attr('required',false);
            toastr.error('Please Select Mobile Number');
            $(ele).removeAttr('disabled');
        }
    }
    
    function resendSpouseOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let mobileNumber = $('#spouseMobile').val();
        if(mobileNumber != '')
        {
            let data = new FormData();
            data.append('mobile',mobileNumber);
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
                    toastr.success('OTP sent to selected mobile number');
                    $(ele).removeAttr('disabled');
                }
            });
        }else{
            toastr.error('Please Select Mobile Number');
            $(ele).removeAttr('disabled');
        }
    }
    
    $('#clearAadhar').on('click',function()
    {
        $('#spouseAadhar').attr('readonly',false);
        $('#spouseAadhar').val('');
        $('#spouseName').val('');
        $('#spouseNameVisDiv').addClass('d-none');
        $('#detailspousediv').addClass('d-none');
        $('#clearAadharDiv').addClass('d-none');
    })
    
    function checkSpouseDetail(ele)
    {
        $(ele).attr('disabled','disabled');
        let aadharNumber = $('#spouseAadhar').val();
        if(aadharNumber != '')
        {
            $('#spouseAadhar').attr('readonly',true);
            let data = new FormData();
            data.append('aadhar',aadharNumber);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/checkSpouseDetail',
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
                        $('#clearAadharDiv').removeClass('d-none');
                        $('#spouseNameVisDiv').removeClass('d-none');
                        $('#otpnumberspan').html(parse.data.vismobile1);
                        $('#spouseMobile').val(parse.data.mobile1);
                        $('#spouseName').val(parse.spouseName); 
                        $('#detailspousediv').removeClass('d-none');
                    }else{
                        Swal.fire({
                            icon: 'error',
                            allowOutsideClick:false,
                            html:
                                '<div class="form-group mt-3"><label class="form-label text-danger">'+parse.message+'</label></div>',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:true
                        }).then((result) => {
                            $('#spouseNameVisDiv').addClass('d-none');
                            $('#clearAadharDiv').removeClass('d-none');
                            $(ele).removeAttr('disabled');
                            if (result.isConfirmed) {
                                $('#detailspousediv').addClass('d-none');
                            }else if(result.isDismissed)
                            {
                                $('#detailspousediv').addClass('d-none');
                            }
                        })
                    }
                }
            });
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
                $('#spouseNameVisDiv').addClass('d-none');
                $('#clearAadharDiv').removeClass('d-none');
                if (result.isConfirmed) {
                    $('#detailspousediv').addClass('d-none');
                }else if(result.isDismissed)
                {
                    $('#detailspousediv').addClass('d-none');
                }
            })
        }
    }
    
    $('input[name="maritalstatus"]').on('click',function()
    {
        let checked = $(this);
        $('input[name="isSpouseNameAdded"]').prop('checked',false);
        if(checked.val() == '0')
        {
            $('#marrieddiv').addClass('d-none');
            $('input[name="isSpouseNameAdded"]').prop('required',false);
            $('#spouseNameDiv').addClass('d-none');
            $('#spouseName').attr('required',false);
            $('#spouseAadhar').attr('required',false);
            $('#isDataNotAvail').addClass('d-none');    
        }else{
            $('#spouseName').attr('required',false);
            $('#spouseAadhar').attr('required',false);
            $('#marrieddiv').addClass('d-none');
            $('input[name="isSpouseNameAdded"]').prop('required',true);
            $('#spouseNameDiv').removeClass('d-none');
            $('#isDataNotAvail').addClass('d-none');
        }
    })
    
    $('#step6Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn6').attr('disabled','disabled');
        let data=new FormData();
        let maritalstatus = $('input[name="maritalstatus"]:checked').val();
        let isSpouseNameAdded = $('input[name="isSpouseNameAdded"]:checked').val();
        data.append('isMarried',maritalstatus);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        if(maritalstatus == '1')
        {
            data.append('isSpouseNameAdded',isSpouseNameAdded);
            if(isSpouseNameAdded == '1')
            {
                let spouseName = $('#spouseName').val();
                if(spouseName != '')
                {
                    data.append('spouseAadhar',$('#spouseAadhar').val());
                }
            }
        }
        if(maritalstatus == '1')
        {
            if(isSpouseNameAdded == '1')
            {
                if($('#spouseOtp').val() == '')
                {
                    toastr.error('Please verify the details to continue');
                    $('#btn6').removeAttr('disabled');
                }else{
                    $.ajax({
                    url:'<?php echo base_url(); ?>user/saveSpouseDetails',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.status == 'success')
                        {
                            toastr.success('Spouse Added Successfully');
                            setTimeout(function(){
                                location.reload();
                            },3000);
                        }else{
                            toastr.success('Something Went Wrong');
                            $('#btn6').removeAttr('disabled');
                        }
                    }
                })
                }   
            }else{
                $.ajax({
                    url:'<?php echo base_url(); ?>user/saveSpouseDetails',
                    data:data,
                    processData:false,
                    cache:false,
                    contentType:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        if(parse.status == 'success')
                        {
                            toastr.success('Marital Status Updated Successfully');
                            setTimeout(function(){
                                location.reload();
                            },3000);
                        }else{
                            toastr.success('Something Went Wrong');
                            $('#btn6').removeAttr('disabled');
                        }
                    }
                })
            }
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>user/saveSpouseDetails',
                data:data,
                processData:false,
                cache:false,
                contentType:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.success('Marital Status Updated Successfully');
                        setTimeout(function(){
                            location.reload();
                        },3000);
                    }else{
                        toastr.success('Something Went Wrong');
                        $('#btn6').removeAttr('disabled');
                    }
                }
            })
        }
    })
    
    function deleteMarriageInfo(ele)
    {
        Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Spouse Detail</strong>',
            icon: 'info',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to delete spouse details?</label></div>',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText:'Yes',
            cancelButtonText:'No',
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
                        Swal.fire({
                          title: '<strong style="font-size:17px;">Enter OTP to proceed </strong>',
                          icon: 'success',
                          allowOutsideClick:false,
                          html:
                            '<div clas="form-group mb-3><label class="form-label">OTP hs been sent to '+res+'</label></div><div class="form-group mb-3"><input type="number" autofocus class="form-control" id="deleteSpouseOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteSpouseOtp(this)"> Verify OTP</button></div><div class="form-group mt-3"><button type="button" class="w-100 btn btn-primary next disabled-on-loading" onclick="resendSpouseDeleteOtp(this)"> Resend OTP</button></div>',
                          showCloseButton: true,
                          showCancelButton: false,
                          focusConfirm: false,
                          showConfirmButton:false
                        }).then((result) => {
                            if (result.isDismissed) {
                                $(ele).removeAttr('disabled');   
                            }
                        })
                    }
                });
            }
        })
    }
    
    function verifyDeleteSpouseOtp(ele)
    {
        $(ele).attr('disabled','disabled');
        let otp = $('#deleteSpouseOtpInput').val();
        if(otp != '')
        {
            let data= new FormData();
            data.append('otp',otp);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/deleteSpouseDetail',
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
                        toastr.success('Spouse Deleted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },3000);
                     }else{
                        $(ele).removeAttr('disabled');
                        toastr.error('Invalid OTP');
                     }
                }
            })   
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter OTP');
        }
    }
    
    function resendDeleteSpouseOtp(ele,index)
    {
        $(ele).attr('disabled','disabled');
        let otpdata = new FormData();
        otpdata.append('mobile',$('#registeredmobile').val());
        otpdata.append('name',$('#spouseAadharName').val());
        otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendSpouseOtp',
            data:otpdata,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                toastr.success('OTP has been sent to registered mobile number.');
                $(ele).removeAttr('disabled');
            }
        })
    }
    
    $('input[name="isSpouseNameAdded"]').on('click',function()
    {
        let checked = $(this);
        if(checked.val() == '1')
        {
            $('#marrieddiv').removeClass('d-none');
            $('#isDataNotAvail').removeClass('d-none');    
            $('#spouseName').attr('required',true);
            $('#spouseAadhar').attr('required',true);
        }else{
            $('#marrieddiv').addClass('d-none');
            $('#isDataNotAvail').addClass('d-none'); 
            $('#spouseName').attr('required',false);
            $('#spouseAadhar').attr('required',false);
        }
    })
    
    function goToNext(ele)
    {
        $(ele).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=7";
    }
    
    function goToDashboard(ele)
    {
        $(ele).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user";
    }
    
    function goToFilters(ele)
    {
        $(ele).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_filter_details";
    }
    
    $('#reset1').click(function()
    {
        $('#reset1').attr('disabled','disabled');
        setTimeout(function()
        {
            $('#img0').addClass('d-none');
            $('#img1').addClass('d-none');
            $('#img2').addClass('d-none');
            $('#img3').addClass('d-none');
            $('#img4').addClass('d-none');
            $('#previewDiv').addClass('d-none');  
            $('#reset1').removeAttr('disabled');
            $('#step4Form')[0].reset();
        },2000);
    })
    
    function deletePhoto(Id)
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
                    url:'<?php echo base_url(); ?>user/deleteProfilePhoto/'+Id,
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
    
    function editPhoto(Id)
    {
        $('#editInput').trigger('focus')
        $('#updateId').val(Id);
        $('#photoModal').modal('show');
    }
    
    function showPreview(ele)
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
    
    $('#btn1Next').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=2";
    })
    
    $('#btn2Next').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=3";
    })
    
    $('#btn2Back').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=1";
    })
    
    $('#btn3Back').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=2";
    })
    
    $('#btn7Back').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=6";
    })
    
    $('#btn4Back').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=3";
    })
    
    $('#btn5Back').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=4";
    })
    
    $('#btn6Back').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=5";
    })
    
    $('#btn5').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=6";
    })
    
    $('#btn3Next').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=4";
    })
    
    $('#btn4Next').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_personal_details?pn=5";
    })
    
    $('#step4Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn4').attr('disabled','disabled');
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/prostep4',
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                location.reload();
            }
        });
    })
    
    $('#step3Form').on('submit',function(e)
    {
        e.preventDefault();
        if($('#facematch').val() != '' || $('#oldphoto').val() != '')
        {
            let data = new FormData(this);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $('#btn3').attr('disabled','disabled');
            $.ajax({
                url:'<?php echo base_url(); ?>user/prostep3',
                data:data,
                contentType:false,
                cache:false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    location.reload();
                }
            })
        }else{
            toastr.error('Please Upload Face Match Photo To Continue');
            return false;
        }
    })
    
    $('#step1Form').on('submit',function(e)
    {
        e.preventDefault();
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $('#btn1').attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>user/prostep1',
            data:data,
            contentType:false,
            cache:false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.status == 'success')
                {
                    toastr.success('Details updated successfully');
                    setTimeout(function()
                    {
                        location.reload();       
                    },2000);
                }else{
                    Swal.fire({
                        icon: 'error',
                        allowOutsideClick:false,
                        html:
                            '<div class="form-group mt-3"><label class="form-label text-danger">'+parse.message+'</label></div>',
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        showConfirmButton:true
                    }).then((result) => {
                        location.reload();
                    })
                }
            }
        })
    })
    
    $('#step2Form').on('submit',function(e)
    {
        e.preventDefault();
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $('#btn2').attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>user/prostep1',
            data:data,
            contentType:false,
            cache:false,
            processData:false,
            type:'post',
            success:function(res)
            {
                location.reload();
            }
        })
    })
    
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
                url:'<?php echo base_url(); ?>user/deleteWellWisherMobile',
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
        otpdata.append('mobile',$('#othermob'+index).val());
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
    
    function deleteAlternate(ele,index,setting)
    {
        $(ele).attr('disabled','disabled');
        if(setting == 1)
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Well Wisher</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete well wisher mobile '+index+'?</label></div>',
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
                    otpdata.append('mobile',$('#othermob'+index).val());
                    otpdata.append('index',index);
                    otpdata.append('setting',setting);
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
                                '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="number" class="form-control" id="deleteOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteOtp(this,'+index+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendDeleteOtp(this,'+index+')"> Resend OTP</button></div>',
                              showCloseButton: true,
                              showCancelButton: false,
                              focusConfirm: false,
                              showConfirmButton:false
                            })
                        }
                    })
                }else{
                    $(ele).removeAttr('disabled');
                }
            })
        }else{
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Well Wisher</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete well wisher mobile '+index+'?</label></div>',
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
                        url:'<?php echo base_url(); ?>user/deleteWellWisherMobile',
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
    
    function verifyOtp(ele,index)
    {
        if($('#otp'+index).val() != '')
        {
            let relation = $('#wellrel'+index).val();
            if( relation != '')
            {
                if(relation != 23)
                {
                    $(ele).attr('disabled','disabled');
                    let data= new FormData();
                    data.append('otp',$('#otp'+index).val());
                    data.append('index',index);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    data.append('mobile',$('#othermob'+index).val());
                    data.append('relation',$('#wellrel'+index).val());
                    $.ajax({
                      url:'<?php echo base_url(); ?>user/verifyWellWisherMobileOtp',
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
                    if($('#otherrelation'+index).val() != '')
                    {
                        $(ele).attr('disabled','disabled');
                        let data= new FormData();
                        data.append('otp',$('#otp'+index).val());
                        data.append('otherrelation',$('#otherrelation'+index).val());
                        data.append('index',index);
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        data.append('mobile',$('#othermob'+index).val());
                        data.append('relation',$('#wellrel'+index).val());
                        $.ajax({
                          url:'<?php echo base_url(); ?>user/verifyWellWisherMobileOtp',
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

    function sendOtp(index)
    {
        $('#btnOtp'+index).attr('disabled','disabled');
        if($('#othermob'+index).val() != '')
        {
            let relation = $('#wellrel'+index).val();
            if( relation != '')
            {
                if(relation != 23)
                {
                    let data= new FormData();
                    data.append('mobile',$('#othermob'+index).val());
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    data.append('type','aadhar');
                    data.append('typeval','<?php echo $_SESSION['aadhar_id']; ?>');
        
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/sendWellWisherMobileOtp',
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
                                Swal.fire({
                                    title: '<strong>Enter OTP to proceed </strong>',
                                    icon: 'success',
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="number" class="form-control" id="otp'+index+'"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyOtp(this,'+index+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendOtp(this,'+index+')"> Resend OTP</button></div>',
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
                                toastr.warning(parse.message);
                                setTimeout(function()
                                {
                                    location.reload();
                                },4000);
                            }else{
                                toastr.error(parse.message);
                                setTimeout(function()
                                {
                                    location.reload();
                                },4000);
                            }
                        }
                    })
                }else{
                    if($('#otherrelation'+index).val() != '')
                    {
                        let data= new FormData();
                        data.append('mobile',$('#othermob'+index).val());
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        data.append('type','aadhar');
                        data.append('typeval','<?php echo $_SESSION['aadhar_id']; ?>');
            
                        $.ajax({
                          url:'<?php echo base_url(); ?>user/sendWellWisherMobileOtp',
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
                                  Swal.fire({
                                    title: '<strong>Enter OTP to proceed </strong>',
                                    icon: 'success',
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="number" class="form-control" id="otp'+index+'"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyOtp(this,'+index+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendOtp(this,'+index+')"> Resend OTP</button></div>',
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
                                  toastr.warning(parse.message);
                                  setTimeout(function()
                                  {
                                    location.reload();
                                  },4000);
                              }else{
                                  toastr.error(parse.message);
                                  setTimeout(function()
                                  {
                                    location.reload();
                                  },4000);
                              }
                          }
                        })
                    }else{
                        toastr.error('Please Enter Other Relation Name');
                        $('#btnOtp'+index).removeAttr('disabled');
                    }
                }
            }else{
                toastr.error('Please Select Relation');
                $('#btnOtp'+index).removeAttr('disabled');
            }
        }else{
            toastr.error('Please Enter Valid Mobile Number');
            $('#btnOtp'+index).removeAttr('disabled');
        }
    }
    
    function resendOtp(ele,index)
    {
        let mob = $('#othermob'+index).val();
        $(ele).attr('disabled','disabled');
        let data= new FormData();
        data.append('mobile',mob);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        data.append('type','aadhar');
        data.append('typeval','<?php echo $_SESSION['aadhar_id']; ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendWellWisherMobileOtp',
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
                    toastr.success('OTP Sent Successfully');
                    $(ele).removeAttr('disabled');
                }else if(parse.status == 'username')
                {
                    toastr.warning(parse.message);
                    $(ele).removeAttr('disabled');
                }else{
                    toastr.error(parse.message);
                    $(ele).removeAttr('disabled');
                }
            }
        })
    }
    
    $('.close').click(function()
    {
        $('#photoModal').modal('hide');
    })
    
    $('.close1').click(function()
    {
        $('#step3Form')[0].reset();
        $('#uploadimageModal').modal('hide');
    })
    
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
                url:'<?php echo base_url(); ?>user/uploadPersonalLatestPhoto',
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
    
    function cropPhoto()
    {
        if($('#uploadPhoto')[0].files.length > 0)
        {
            let src = URL.createObjectURL($('#uploadPhoto')[0].files[0]);
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL($('#uploadPhoto')[0].files[0]);
            $('#uploadimageModal').modal('show');   
        }else{
            toastr.error('Please upload photo to continue');
        }
    }
    
    $('.crop_image').click(function(event){
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport',
          format:'jpeg'
        }).then(function(response){
            $('#facematch').val(response);
            let data = new FormData($('#step3Form')[0]);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $('.crop_image').attr('disabled','disabled');
            $.ajax({
                url:'<?php echo base_url(); ?>user/prostep3',
                data:data,
                contentType:false,
                cache:false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.success('Face Match Photo Updated Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
                    }else{
                        Swal.fire({
                            icon: 'error',
                            allowOutsideClick:false,
                            html:
                                '<div class="form-group mt-3"><label class="form-label text-danger">'+parse.message+'</label></div>',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:true
                        }).then((result) => {
                            location.reload();
                        })
                    }
                }
            })
        })
    });
      
    $('#isSame').click(function()
    {
        if($(this).is(':checked'))
        {
            $('#samediv').removeClass('d-none');
            $('#notsamediv').addClass('d-none');
            
            $('#cursamestate').attr('name','curstate');
            $('#cursamecity').attr('name','curcity');
            $('#cursamepincode').attr('name','curpincode');
            $('#cursamedistrict').attr('name','curdistrict');
            $('#cursameaddress').attr('name','curaddress');
            
            $('#curnotsamestate').removeAttr('name');
            $('#curnotsamecity').removeAttr('name');
            $('#curnotsamepincode').removeAttr('name');
            $('#curnotsamedistrict').removeAttr('name');
            $('#curnotsameaddress').removeAttr('name');
            
            $('#cursamestate').attr('required',true);
            $('#cursamecity').attr('required',true);
            $('#cursamepincode').attr('required',true);
            $('#cursamedistrict').attr('required',true);
            $('#cursameaddress').attr('required',true);
            
            $('#curnotsamestate').attr('required',false);
            $('#curnotsamecity').attr('required',false);
            $('#curnotsamepincode').attr('required',false);
            $('#curnotsamedistrict').attr('required',false);
            $('#curnotsameaddress').attr('required',false);
            
            $('#cursamestate').val($('#state').val());
            $('#cursamecity').val($('#city').val());
            $('#cursamepincode').val($('#pincode').val());
            $('#cursamedistrict').val($('#district').val());
            $('#cursameaddress').val($('#address').val());
        }else{
            $('#samediv').addClass('d-none');
            $('#notsamediv').removeClass('d-none');
            $('#curnotsamestate').attr('name','curstate');
            $('#curnotsamecity').attr('name','curcity');
            $('#curnotsamepincode').attr('name','curpincode');
            $('#curnotsamedistrict').attr('name','curdistrict');
            $('#curnotsameaddress').attr('name','curaddress');
            
            $('#cursamestate').removeAttr('name');
            $('#cursamecity').removeAttr('name');
            $('#cursamepincode').removeAttr('name');
            $('#cursamedistrict').removeAttr('name');
            $('#cursameaddress').removeAttr('name');
            
            $('#cursamestate').attr('required',false);
            $('#cursamecity').attr('required',false);
            $('#cursamepincode').attr('required',false);
            $('#cursamedistrict').attr('required',false);
            $('#cursameaddress').attr('required',false);
            
            $('#curnotsamestate').attr('required',true);
            $('#curnotsamestate').val('All').trigger('change');  
            $('#curnotsamecity').attr('required',true);
            $('#curnotsamepincode').attr('required',true);
            $('#curnotsamedistrict').attr('required',true);
            $('#curnotsameaddress').attr('required',true);
            $('#curnotsamecity').val('');
            $('#curnotsamepincode').val('');
            $('#curnotsameaddress').val('');
        }
    })
    
    $(document).ready(function()
    {
        <?php 
            if($userdetail[0]['isSame'] == 1)
            {
        ?>
        $('#same').click();
        <?php } ?>
        $('#curnotsamestate').trigger('change');  
        $('#curnotsamedistrict').val('<?php echo $userdetail[0]['curdistrict']; ?>').trigger('change');
    })
    
    function enableEdit(ele)
    {
        if(ele.checked)
        {
            $('#curnotsamestate').attr('disabled',false);
            $('#curnotsamestate').val('All').trigger('change');  
            $('#curnotsamecity').attr('disabled',false);
            $('#curnotsamepincode').attr('disabled',false);
            $('#curnotsamedistrict').attr('disabled',false);
            $('#curnotsameaddress').attr('disabled',false);
            $('#curnotsamecity').val('');
            $('#curnotsamepincode').val('');
            $('#curnotsameaddress').val('');
        }else{
            $('#curnotsamestate').attr('disabled',true);
            $('#curnotsamestate').val('All').trigger('change');  
            $('#curnotsamecity').attr('disabled',true);
            $('#curnotsamepincode').attr('disabled',true);
            $('#curnotsamedistrict').attr('disabled',true);
            $('#curnotsameaddress').attr('disabled',true);
            $('#curnotsamecity').val('');
            $('#curnotsamepincode').val('');
            $('#curnotsameaddress').val('');
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
    
    function checkLength(val,limit)
    {
        if(val.length == limit)
        {
            return false;
        }else{
            return true;
        }
    }
    
    function showOtpAccordingly(val,index)
    {
        if(val.length == 10)
        {
            $('#btnOtp'+index).removeClass('btn-style-grey').addClass('btn-style-five');
            $('#btnOtp'+index).removeClass('disabled');
        }else{
            $('#btnOtp'+index).removeClass('btn-style-five').addClass('btn-style-grey');
            $('#btnOtp'+index).addClass('disabled');
        }
    }
    
    function clearOtherDiv(index)
    {
        $('#rel'+index+'Div').removeClass('d-none');
        $('#otherrelationdiv'+index).addClass('d-none');
        $('#otherrelation'+index).val('');
        $('#wellrel'+index).val('').trigger('change');
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
                $('#otherrelation'+index).val('');
            }else{
                $('#rel'+index+'Div').removeClass('d-none');
                $('#otherrelationdiv'+index).addClass('d-none');
                $('#otherrelation'+index).val('');
            }
        }
    }
    
    function showFaceMatchReUpload()
    {
        $('#reUploadFaceBtnDiv').removeClass('d-none');
        $('#reUploadFaceDiv').removeClass('d-none');
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
    
    function cancelReUploadFaceMatch()
    {
        $('#reUploadFaceBtnDiv').addClass('d-none');
        $('#reUploadFaceDiv').addClass('d-none');
    }
    
    $('input[name="visibility"]').click(function()
    {
        let visibility = $('input[name="visibility"]:checked').val();
        if(visibility == 1)
        {
            $('#visibility1label').addClass('activeLabel');
            $('#visibility2label').removeClass('activeLabel');
        }
        if(visibility == 0)
        {
            <?php
                if($getUserDetail[0]['imageId'] != NULL)
                {
            ?>
            $('#visibility2label').addClass('activeLabel');
            $('#visibility1label').removeClass('activeLabel');
            <?php }else{ 
                $message = ($getUserDetail[0]['facematchphoto'] != NULL ? 'Please re-upload facematch photo to continue' : 'Please upload facematch photo to continue');    
            ?>
            Swal.fire({
                icon: 'warning',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label text-danger"><?= $message; ?></label></div>',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                $('#visibility2').prop('checked',true);
                $('#visibility1label').addClass('activeLabel');
                $('#visibility2label').removeClass('activeLabel');
            })    
            <?php } ?>
        }
    })
    
    $(document).ready(function(){
        $('.floatingButton').on('click',
            function(e){
                e.preventDefault();
                $(this).toggleClass('open');
                if($(this).children('.fa').hasClass('fa-plus'))
                {
                    $(this).children('.fa').removeClass('fa-plus');
                    $(this).children('.fa').addClass('fa-close');
                } 
                else if ($(this).children('.fa').hasClass('fa-close')) 
                {
                    $(this).children('.fa').removeClass('fa-close');
                    $(this).children('.fa').addClass('fa-plus');
                }
                $('.floatingMenu').stop().slideToggle();
            }
        );
        $(this).on('click', function(e) {
          
            var container = $(".floatingButton");
            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && $('.floatingButtonWrap').has(e.target).length === 0) 
            {
                if(container.hasClass('open'))
                {
                    container.removeClass('open');
                }
                if (container.children('.fa').hasClass('fa-close')) 
                {
                    container.children('.fa').removeClass('fa-close');
                    container.children('.fa').addClass('fa-plus');
                }
                $('.floatingMenu').hide();
            }
          
            // if the target of the click isn't the container and a descendant of the menu
            if(!container.is(e.target) && ($('.floatingMenu').has(e.target).length > 0)) 
            {
                $('.floatingButton').removeClass('open');
                $('.floatingMenu').stop().slideToggle();
            } 
        });
    });
  </script>