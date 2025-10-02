<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
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

          <div class="card">
            <div class="card-body">
              
                <div class="tab-content">

                    <div class="tab-pane fade profile-overview" id="profile-overview">
                        <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $userdetail[0]['aadharname']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8"><?php echo $userdetail[0]['country']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">District</div>
                    <div class="col-lg-9 col-md-8"><?php echo $userdetail[0]['district']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">State</div>
                    <div class="col-lg-9 col-md-8"><?php echo $userdetail[0]['state']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">City</div>
                    <div class="col-lg-9 col-md-8"><?php echo $userdetail[0]['vtc']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $userdetail[0]['registration_mobile']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $userdetail[0]['email_id']; ?></div>
                  </div>

                </div>

                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                    <div id="step1" class="<?php if($pn != 1){ echo "d-none"; } ?>">
                        <form id="step1Form">
                            <h5 class="card-title mb-0">Upload your personal data (detail)</h5>
                            <hr class="my-0">
                            <div class="row mb-3">
                                <div class="col-md-6 col-lg-6 form-group">
                                    <label for="aadharNumber" class="col-form-label">Aadhar Number</label>
                                    <input type="text" class="form-control" id="aadharNumber" value="<?php echo $userdetail[0]['aadhar_id']; ?>" readonly>
                                </div>
                                <div class="col-md-6 col-lg-6 form-group">
                                    <label for="fullName" class="col-form-label">Name (in Aadhar)</label>
                                    <input type="text" class="form-control" id="fullName" value="<?php echo $userdetail[0]['aadharname']; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 col-lg-6 form-group">
                                    <label for="fatherName" class="col-form-label">Father Name (in Aadhar)</label>
                                    <input type="text" class="form-control" id="fatherName" value="<?php echo $userdetail[0]['careof']; ?>" readonly>
                                </div>
                                <div class="col-md-6 col-lg-6 form-group">
                                    <label for="dob" class="col-form-label">Date of Birth</label>
                                    <input type="text" class="form-control" id="dob" value="<?php echo date('d-m-Y',strtotime($userdetail[0]['dob'])); ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 col-lg-6 form-group">
                                    <label for="gender" class="col-form-label">Gender</label>
                                    <input type="text" class="form-control" id="gender" value="<?php echo $userdetail[0]['gender']; ?>" readonly>
                                </div>
                                <div class="col-md-6 col-lg-6 form-group">
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
                            <h5 class="card-title mb-0">Aadhar Address</h5>
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
                                     <h5 class="card-title mb-0">Upload your current address</h5>
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
                            <h5 class="card-title mb-0">Upload your photo for face match</h5>
                            <hr class="my-0">
                            <div class="row my-3 align-items-center text-center">
                                <div class="col-lg-5 mb-3 col-sm-12 col-md-5">
                                    <label class="form-label">Sample Photo</label>
                                    <img src="<?php echo base_url(); ?>assets/images/facematch.webp" style="width:100%;height:150px;">
                                </div>
                                <div class="col-md-5 col-lg-5 form-group">
                                    <input type="hidden" name="oldphoto" value="<?php echo $getProfileDetail[0]['facematchphoto']; ?>">
                                    <input type="hidden" name="facematch" id="facematch">
                                    <label class="form-label">Choose Photo</label>
                                    <input type="file" class="form-control" required name="uploadPhoto" onchange="cropPhoto(event)">
                                </div>
                                <div class="col-lg-5 mt-3 col-sm-12 col-md-5 d-none" id="previewFaceDiv">
                                    <label class="form-label">Preview Photo</label>
                                    <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" id="previewPhoto" style="width:100%;height:150px;">
                                </div>
                                <?php 
                                    if($getProfileDetail[0]['facematchphoto'] != NULL)
                                    {
                                ?>
                                <div class="col-lg-5 mt-3 col-sm-12 col-md-5">
                                    <label class="form-label">Your Photo</label>
                                    <img src="<?php echo base_url(); ?><?php echo $getProfileDetail[0]['facematchphoto']; ?>" style="width:100%;height:150px;">
                                </div>
                                <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-auto col-lg-auto mb-3">
                                    <button type="button" id="btn3Back" class="btn btn-dark disabled-on-loading w-100 save" style="background:black!important;"> Back</button>
                                </div>
                                <div class="col-lg-auto col-md-auto col-sm-12 mb-3">
                                    <button type="submit" id="btn3" class="w-100 save btn btn-primary disabled-on-loading"> Save</button>
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
                            <h5 class="card-title mb-0">Upload your latest photos</h5>
                                <div class="row mb-2">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <b class="text-danger" style="font-weight:600;font-size:13px;">Note: You can upload upto 5 photos</b>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="row my-3 align-items-center">
                                <div class="col-lg-4 col-sm-12 col-md-6">
                                    <input type="hidden" name="imagecount" id="imagecount" value="<?php echo count($getPhotos); ?>">
                                    <input type="hidden" name="oldphoto" value="<?php echo $getProfileDetail[0]['facematchphoto']; ?>">
                                    <input type="file" class="form-control" name="photos[]" accept="image/*" id="photoupload" multiple onchange="showPreview(event)">
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
                                            <a href="javascript:void(0)" class="btn btn-outline-danger mt-2" onclick="deletePhoto(<?php echo $v['Id']; ?>)"><i class="fa fa-trash"></i></a>
                                            <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip" class="btn btn-outline-info mt-2"><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-outline-success mt-2" onclick="editPhoto(<?php echo $v['Id']; ?>)"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>
                            <div class="row">
                                <div class="col-sm-12 col-md-auto col-lg-auto mt-3">
                                    <button type="button" id="btn4Back" class="btn btn-dark disabled-on-loading w-100 save" style="background:black!important;"> Back</button>
                                </div>
                                <!--<div class="col-lg-auto col-md-auto col-sm-12 mt-3">-->
                                <!--    <button class="w-100 btn btn-primary reset disabled-on-loading" type="button" id="reset1"> Reset</button>-->
                                <!--</div>-->
                                <div class="col-lg-auto col-md-auto col-sm-12 mt-3">
                                    <button type="submit" id="btn4" class="w-100 save btn btn-primary disabled-on-loading"> Save</button>
                                </div>
                                <div class="col-lg-auto col-md-auto col-sm-12 mt-3">
                                    <button type="button" id="btn4Next" class="w-100 next btn btn-primary disabled-on-loading"> Next</button>
                                </div>
                            </div>
                        </form><!-- End Profile Edit Form -->
                    </div>
                    <div id="step5" class="<?php if($pn != 5){ echo "d-none"; } ?>">
                        <form id="step5Form">
                            <h5 class="card-title mb-0">Upload your well wisher contact number</h5>
                            <div class="row mb-2">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <b class="text-danger" style="font-weight:600;font-size:13px;">Note: You can upload upto 3 numbers</b>
                                </div>
                            </div>
                            <hr class="my-0">
                            <?php 
                                $getRelations = $this->db->query('select * from relations')->result_array();
                            ?>
                            <?php
                                if($getProfileDetail[0]['nominee1'] != NULL || $getProfileDetail[0]['nominee1'] != '')
                                {
                            ?>
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label class="form-label">Select Relation</label>
                                    <select class="form-control" name="relation1" required disabled>
                                        <?php 
                                            if(count($getRelations) > 0)
                                            {
                                        ?>
                                        <option value="">Select Relation</option>
                                        <option value="0" <?php if($getProfileDetail[0]['relation1'] == 0){ echo "selected"; } ?>>Other</option>
                                        <?php 
                                            foreach($getRelations as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getProfileDetail[0]['relation1']){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                                        <?php } }else{ ?>
                                        <option value="0" <?php if($getProfileDetail[0]['relation1'] == 0){ echo "selected"; } ?>>Other</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-10 mb-3">
                                    <label for="alternatemob1" class="form-label">First Contact Number</label>
                                    <input readonly value="<?php echo $getProfileDetail[0]['nominee1']; ?>" type="text" name="alternatemob1" class="form-control" id="alternatemob1">
                                </div>
                                <div class="col-2 p-0 mb-sm-7">
                                    <button type="button" id="deletebtn1" class="btn btn-primary disabled-on-loading" onclick="deleteAlternate(this,1)"> <i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="col-12 gy-0">
                              <input type="checkbox" name="othershow1" value="1" id="othershow1" onclick="showOther(this,1)">
                              <label for="othershow1" style="display:inline;">Change your first contact number</label>
                            </div>
                            <div class="row mb-3 d-none" id="other1div">
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label class="form-label">Select Relation</label>
                                    <select class="form-control" name="otherrelation1" id="otherrelation1" required>
                                        <?php 
                                            if(count($getRelations) > 0)
                                            {
                                        ?>
                                        <option value="">Select Relation</option>
                                        <option value="0">Other</option>
                                        <?php 
                                            foreach($getRelations as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?php echo $v['Id']; ?>"><?php echo $v['relationName']; ?></option>
                                        <?php } }else{ ?>
                                        <option value="0">Other</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label for="othermob1" class="form-label">Enter New Mobile Number</label>
                                    <input type="text" class="form-control" id="othermob1">
                                </div>
                                <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                                <div class="form-group col-12">
                                    <span class="text-danger">Note: Number will verify Through OTP</span>
                                </div>
                                <div class="form-group col-sm-12 col-md-auto col-lg-auto" style="margin-top: 0.5rem;">
                                    <button class="save btn btn-primary w-100" id="btnOtp1" onclick="sendOtp(1)" type="button">Send OTP</button>
                                    <button class="next btn btn-primary w-100 d-none disabled-on-loading" id="btnResendOtp1" onclick="resendOtp(this,1)" type="button">Resend OTP</button>
                                </div>
                                <div class="col-12">
                                    <div class="row d-none" id="otp1div" style="text-align: center;margin-top: 0.5rem;">
                                        <div class="form-group col-12 text-right">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-4 col-sm-12">
                                                    <input type="number" class="form-control mb-2" id="otp1" placeholder="Enter OTP">
                                                </div>
                                                <div class="col-md-auto col-lg-auto col-sm-12">
                                                    <button type="button" class="w-100 save btn btn-success d-block disabled-on-loading" id="btnVerify1" onclick="verifyOtp(this,1)"> Verify</button>      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                                <div class="col-12 gy-0">
                                  <input type="checkbox" name="othershow1" value="1" id="othershow1" onclick="showOther(this,1)">
                                  <label for="othershow1" style="display:inline;">Create your first contact number</label>
                                </div>
                                <div class="row mb-3 d-none" id="other1div">
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label class="form-label">Select Relation</label>
                                    <select class="form-control" name="otherrelation1" id="otherrelation1" required>
                                        <?php 
                                            if(count($getRelations) > 0)
                                            {
                                        ?>
                                        <option value="">Select Relation</option>
                                        <option value="0">Other</option>
                                        <?php 
                                            foreach($getRelations as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?php echo $v['Id']; ?>"><?php echo $v['relationName']; ?></option>
                                        <?php } }else{ ?>
                                        <option value="0">Other</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label for="othermob1" class="form-label">Enter New Mobile Number</label>
                                    <input type="text" class="form-control" id="othermob1">
                                    <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                                </div>
                                <div class="form-group col-12">
                                    <span class="text-danger">Note: Number will verify Through OTP</span>
                                </div>
                                <div class="form-group col-lg-auto col-md-auto col-sm-12" style="margin-top: 0.5rem;">
                                    <button class="save btn btn-primary w-100" id="btnOtp1" onclick="sendOtp(1)" type="button">Send OTP</button>
                                    <button class="next btn btn-primary w-100 d-none disabled-on-loading" id="btnResendOtp1" onclick="resendOtp(this,1)" type="button">Resend OTP</button>
                                </div>
                                    <div class="col-12">
                                        <div class="row d-none" id="otp1div" style="text-align: center;margin-top: 0.5rem;">
                                            <div class="form-group col-12 text-right">
                                                <div class="row">
                                                    <div class="col-md-4 col-lg-4 col-sm-12">
                                                        <input type="number" class="form-control mb-2" id="otp1" placeholder="Enter OTP">
                                                    </div>
                                                    <div class="col-md-auto col-lg-auto col-sm-12">
                                                        <button type="button" class="save btn w-100 btn-success d-block disabled-on-loading" id="btnVerify1" onclick="verifyOtp(this,1)"> Verify</button>      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php 
                                if($getProfileDetail[0]['nominee2'] != NULL || $getProfileDetail[0]['nominee2'] != '')
                                {
                            ?>
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label class="form-label">Select Relation</label>
                                    <select class="form-control" name="relation2" required disabled>
                                        <?php 
                                            if(count($getRelations) > 0)
                                            {
                                        ?>
                                        <option value="">Select Relation</option>
                                        <option value="0" <?php if($getProfileDetail[0]['relation2'] == 0){ echo "selected"; } ?>>Other</option>
                                        <?php 
                                            foreach($getRelations as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getProfileDetail[0]['relation2']){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                                        <?php } }else{ ?>
                                        <option value="0" <?php if($getProfileDetail[0]['relation2'] == 0){ echo "selected"; } ?>>Other</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-10 mb-3">
                                    <label for="alternatemob2" class="form-label">Second Contact Number</label>
                                    <input readonly value="<?php echo $getProfileDetail[0]['nominee2']; ?>" type="text" name="alternatemob2" class="form-control" id="alternatemob2">
                                </div>
                                <div class="col-2 p-0 mb-sm-7">
                                    <button type="button" id="deletebtn2" class="btn btn-primary disabled-on-loading" onclick="deleteAlternate(this,2)"> <i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="col-12 gy-0">
                              <input type="checkbox" name="othershow2" value="1" id="othershow2" onclick="showOther(this,2)">
                              <label for="othershow2" style="display:inline;">Change your second contact number</label>
                            </div>
                            <div class="row mb-3 d-none" id="other2div">
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label class="form-label">Select Relation</label>
                                    <select class="form-control" name="otherrelation2" id="otherrelation2" required>
                                        <?php 
                                            if(count($getRelations) > 0)
                                            {
                                        ?>
                                        <option value="">Select Relation</option>
                                        <option value="0">Other</option>
                                        <?php 
                                            foreach($getRelations as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?php echo $v['Id']; ?>"><?php echo $v['relationName']; ?></option>
                                        <?php } }else{ ?>
                                        <option value="0">Other</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label for="othermob2" class="form-label">Enter New Mobile Number</label>
                                    <input type="text" class="form-control" id="othermob2">
                                    <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                                </div>
                                <div class="form-group col-12">
                                    <span class="text-danger">Note: Number will verify Through OTP</span>
                                </div>
                                <div class="form-group col-md-auto col-lg-auto col-sm-12" style="margin-top: 0.5rem;">
                                    <button class="save btn btn-primary w-100" id="btnOtp2" onclick="sendOtp(2)" type="button">Send OTP</button>
                                    <button class="next btn btn-primary w-100 d-none disabled-on-loading" id="btnResendOtp2" onclick="resendOtp(this,2)" type="button">Resend OTP</button>
                                </div>
                                <div class="col-12">
                                    <div class="row d-none" id="otp2div" style="text-align: center;margin-top: 0.5rem;">
                                        <div class="form-group col-12 text-right">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-4 col-sm-12">
                                                    <input type="number" class="form-control mb-2" id="otp2" placeholder="Enter OTP">
                                                </div>
                                                <div class="col-md-auto col-lg-auto col-sm-12">
                                                    <button type="button" class="save w-100 btn btn-success d-block disabled-on-loading" id="btnVerify2" onclick="verifyOtp(this,2)"> Verify</button>      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                                <div class="col-12 gy-0">
                                  <input type="checkbox" name="othershow2" value="1" id="othershow2" onclick="showOther(this,2)">
                                  <label for="othershow2" style="display:inline;">Create your second contact number</label>
                                </div>
                
                                <div class="row mb-3 d-none" id="other2div">
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                        <label class="form-label">Select Relation</label>
                                        <select class="form-control" name="otherrelation2" id="otherrelation2" required>
                                            <?php 
                                                if(count($getRelations) > 0)
                                                {
                                            ?>
                                            <option value="">Select Relation</option>
                                            <option value="0">Other</option>
                                            <?php 
                                                foreach($getRelations as $k=>$v)
                                                {
                                            ?>
                                            <option value="<?php echo $v['Id']; ?>"><?php echo $v['relationName']; ?></option>
                                            <?php } }else{ ?>
                                            <option value="0">Other</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                        <label for="othermob2" class="form-label">Enter New Mobile Number</label>
                                        <input type="text" class="form-control" id="othermob2">
                                        <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                                    </div>
                                    <div class="form-group col-12">
                                        <span class="text-danger">Note: Number will verify Through OTP</span>
                                    </div>
                                    <div class="form-group col-md-auto col-lg-auto col-sm-12" style="margin-top: 0.5rem;">
                                        <button class="save btn btn-primary w-100" id="btnOtp2" onclick="sendOtp(2)" type="button">Send OTP</button>
                                        <button class="next btn btn-primary w-100 d-none disabled-on-loading" id="btnResendOtp2" onclick="resendOtp(this,2)" type="button">Resend OTP</button>
                                    </div>
                                    <div class="col-12">
                                        <div class="row d-none" id="otp2div" style="text-align: center;margin-top: 0.5rem;">
                                            <div class="form-group col-12 text-right">
                                                <div class="row">
                                                    <div class="col-md-4 col-lg-4 col-sm-12">
                                                        <input type="number" class="form-control mb-2" id="otp2" placeholder="Enter OTP">
                                                    </div>
                                                    <div class="col-md-auto col-lg-auto col-sm-12">
                                                        <button type="button" class="save btn btn-success w-100 d-block disabled-on-loading" id="btnVerify2" onclick="verifyOtp(this,2)"> Verify</button>      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php 
                                if($getProfileDetail[0]['nominee3'] != NULL || $getProfileDetail[0]['nominee3'] != '')
                                {
                            ?>
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label class="form-label">Select Relation</label>
                                    <select class="form-control" name="relation3" required disabled>
                                        <?php 
                                            if(count($getRelations) > 0)
                                            {
                                        ?>
                                        <option value="">Select Relation</option>
                                        <option value="0" <?php if($getProfileDetail[0]['relation3'] == 0){ echo "selected"; } ?>>Other</option>
                                        <?php 
                                            foreach($getRelations as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getProfileDetail[0]['relation3']){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                                        <?php } }else{ ?>
                                        <option value="0" <?php if($getProfileDetail[0]['relation3'] == 0){ echo "selected"; } ?>>Other</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-10 mb-3">
                                    <label for="alternatemob3" class="form-label">Third Contact Number</label>
                                    <input readonly value="<?php echo $getProfileDetail[0]['nominee3']; ?>" type="text" name="alternatemob3" class="form-control" id="alternatemob3">
                                </div>
                                <div class="col-2 p-0 mb-sm-7">
                                    <button type="button" id="deletebtn3" class="btn btn-primary disabled-on-loading" onclick="deleteAlternate(this,3)"> <i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="col-12 gy-0">
                              <input type="checkbox" name="othershow3" value="1" id="othershow3" onclick="showOther(this,3)">
                              <label for="othershow3" style="display:inline;">Change your third contact number</label>
                            </div>
                            <div class="row mb-3 d-none" id="other3div">
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label class="form-label">Select Relation</label>
                                    <select class="form-control" name="otherrelation3" id="otherrelation3" required>
                                        <?php 
                                            if(count($getRelations) > 0)
                                            {
                                        ?>
                                        <option value="">Select Relation</option>
                                        <option value="0">Other</option>
                                        <?php 
                                            foreach($getRelations as $k=>$v)
                                            {
                                        ?>
                                        <option value="<?php echo $v['Id']; ?>"><?php echo $v['relationName']; ?></option>
                                        <?php } }else{ ?>
                                        <option value="0">Other</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label for="othermob3" class="form-label">Enter New Mobile Number</label>
                                    <input type="text" class="form-control" id="othermob3">
                                    <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                                </div>
                                <div class="form-group col-12">
                                    <span class="text-danger">Note: Number will verify Through OTP</span>
                                </div>
                                <div class="form-group col-lg-auto col-md-auto col-sm-12" style="margin-top: 0.5rem;">
                                    <button class="save btn btn-primary w-100" id="btnOtp3" onclick="sendOtp(3)" type="button">Send OTP</button>
                                    <button class="next btn btn-primary w-100 d-none disabled-on-loading" id="btnResendOtp3" onclick="resendOtp(this,3)" type="button">Resend OTP</button>
                                </div>
                                <div class="col-12">
                                    <div class="row d-none" id="otp3div" style="text-align: center;margin-top: 0.5rem;">
                                        <div class="form-group col-12 text-right">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-4 col-sm-12">
                                                    <input type="number" class="form-control mb-2" id="otp3" placeholder="Enter OTP">
                                                </div>
                                                <div class="col-md-auto col-lg-auto col-sm-12">
                                                    <button type="button" class="save btn btn-success w-100 d-block disabled-on-loading" id="btnVerify3" onclick="verifyOtp(this,3)"> Verify</button>      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                                <div class="col-12 gy-0">
                                  <input type="checkbox" name="othershow3" value="1" id="othershow3" onclick="showOther(this,3)">
                                  <label for="othershow3" style="display:inline;">Create your third contact number</label>
                                </div>
                
                                <div class="row mb-3 d-none" id="other3div">
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                        <label class="form-label">Select Relation</label>
                                        <select class="form-control" name="relation3" id="otherrelation3" required>
                                            <?php 
                                                if(count($getRelations) > 0)
                                                {
                                            ?>
                                            <option value="">Select Relation</option>
                                            <option value="0">Other</option>
                                            <?php 
                                                foreach($getRelations as $k=>$v)
                                                {
                                            ?>
                                            <option value="<?php echo $v['Id']; ?>"><?php echo $v['relationName']; ?></option>
                                            <?php } }else{ ?>
                                            <option value="0">Other</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                        <label for="othermob3" class="form-label">Enter New Mobile Number</label>
                                        <input type="text" class="form-control" id="othermob3">
                                        <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                                    </div>
                                    <div class="form-group col-12">
                                        <span class="text-danger">Note: Number will verify Through OTP</span>
                                    </div>
                                    <div class="form-group col-lg-auto col-md-auto col-sm-12" style="margin-top: 0.5rem;">
                                        <button class="save btn btn-primary w-100" id="btnOtp3" onclick="sendOtp(3)" type="button">Send OTP</button>
                                        <button class="next btn btn-primary w-100 d-none disabled-on-loading" id="btnResendOtp3" onclick="resendOtp(this,3)" type="button">Resend OTP</button>
                                    </div>
                                    <div class="col-12">
                                        <div class="row d-none" id="otp3div" style="text-align: center;margin-top: 0.5rem;">
                                            <div class="form-group col-12 text-right">
                                                <div class="row">
                                                    <div class="col-md-4 col-lg-4 col-sm-12">
                                                        <input type="number" class="form-control mb-2" id="otp3" placeholder="Enter OTP">
                                                    </div>
                                                    <div class="col-md-auto col-lg-auto col-sm-12">
                                                        <button type="button" class="w-100 save btn btn-success d-block disabled-on-loading" style="background:green!important;" id="btnVerify3" onclick="verifyOtp(this,3)"> Verify</button>      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="row">
                                <div class="col-sm-12 col-md-auto col-lg-auto mt-3">
                                    <button type="button" id="btn5Back" class="btn btn-dark disabled-on-loading w-100 save" style="background:black!important;"> Back</button>
                                </div>
                                <div class="col-lg-auto col-md-auto col-sm-12 mt-3">
                                    <button type="button" id="btn5" class="next w-100 btn btn-primary disabled-on-loading"> Next</button>
                                </div>
                            </div>
                        </form><!-- End Profile Edit Form -->
                    </div>
                    <div id="step6" class="<?php if($pn != 6){ echo "d-none"; } ?>">
                        <form id="step6Form">
                            <h5 class="card-title mb-0 text-danger">Marital Details</h5>
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
                                    <input type="radio" name="maritalstatus" id="maritalstatus1" class="radio-custom" value="0" <?php if($getUserDetail[0]['isMarried'] == 0){ echo "checked"; } ?> required>
                                    <label for="maritalstatus1" class="mx-2 radio-custom-label">Single</label>
                                    <input type="radio" name="maritalstatus" id="maritalstatus2" class="radio-custom" value="1" <?php if($getUserDetail[0]['isMarried'] == 1){ echo "checked"; } ?> required>
                                    <label for="maritalstatus2" class="mx-2 radio-custom-label">Married</label>
                                </div>
                            </div>
                            <div class="form-group mt-2 <?php if($getUserDetail[0]['isMarried'] == 0){ echo "d-none"; } ?>" id="spouseNameDiv">
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
                                            <button type="button" class="btn btn-primary save disabled-on-loading" onclick="checkSpouseDetail(this)">Go</button>
                                        </div>
                                        <div class="text-start form-group col-lg-3 col-sm-12 col-md-auto mb-2">
                                            <label>Spouse Name</label>
                                            <input type="text" class="form-control" id="spouseName" readonly name="spouseName" style="text-transform:upper;color:green!important;font-weight:bold">
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
                                        <button type="submit" class="btn btn-primary save w-100 disabled-on-loading" id="btnSubmit"> Save</button>
                                    </div>
                                <?php } ?>
                                <div class="col-sm-12 col-md-auto col-lg-auto mt-3 d-none" id="clearAadharDiv" >
                                    <button type="button" id="clearAadhar" class="btn btn-dark disabled-on-loading w-100 save" style="background:crimson!important;"> Clear Aadhar</button>
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
                    $('#btnSubmit').addClass('d-none');
                    $(ele).addClass('d-none');
                    $('#otpnumberdiv').removeClass('d-none');
                    $('#spouseOtp').attr('required',true);
                    $('#sendotpdiv').addClass('d-none');
                    $('#resendotpdiv').removeClass('d-none');
                    $('.spouseotpdiv').removeClass('d-none');
                }
            });
        }else{
            $('#btnSubmit').removeClass('d-none');
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
                        $('#clearAadharDiv').addClass('d-none');
                        $('#otpnumberspan').html(parse.data.vismobile1);
                        $('#spouseMobile').val(parse.data.mobile1);
                        $('#spouseName').val(parse.spouseName); 
                        $('#detailspousediv').removeClass('d-none');
                    }else{
                        Swal.fire({
                            title: '<strong class="text-danger" style="font-size:20px;">No Data Found</strong>',
                            icon: 'error',
                            allowOutsideClick:false,
                            html:
                                '<div class="form-group mt-3"><label class="form-label">'+parse.message+'</label></div>',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:true
                        }).then((result) => {
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
            $('#isDataNotAvail').addClass('d-none');    
        }else{
            $('#marrieddiv').addClass('d-none');
            $('input[name="isSpouseNameAdded"]').prop('required',true);
            $('#spouseNameDiv').removeClass('d-none');
            $('#isDataNotAvail').addClass('d-none');
        }
    })
    
    $('#step6Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnSubmit').attr('disabled','disabled');
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
                    $('#btnSubmit').removeAttr('disabled');
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
                            $('#btnSubmit').removeAttr('disabled');
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
                            toastr.success('Spouse Added Successfully');
                            setTimeout(function(){
                                location.reload();
                            },3000);
                        }else{
                            toastr.success('Something Went Wrong');
                            $('#btnSubmit').removeAttr('disabled');
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
                        $('#btnSubmit').removeAttr('disabled');
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
    
    function goToDashboard(ele)
    {
        $(ele).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user";
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
        if(confirm('Are you sure you want to delete this photo?'))
        {
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
                location.reload();
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
        if(confirm('Are you sure you want to delete nominee mobile '+index+'?'))
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
                    Swal.fire({
                      title: '<strong>Enter OTP to proceed </strong>',
                      icon: 'success',
                      allowOutsideClick:false,
                      html:
                        '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="number" class="form-control" id="deleteOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteOtp(this,'+index+')"> Verify OTP</button></div><div class="form-group mt-3"><button type="button" class="w-100 btn btn-primary next disabled-on-loading" onclick="resendDeleteOtp(this,'+index+')"> Resend OTP</button></div>',
                      showCloseButton: false,
                      showCancelButton: false,
                      focusConfirm: false,
                      showConfirmButton:false
                    })
                }
            })
        }
    }
    
    function verifyOtp(ele,index)
    {
        if($('#otp'+index).val() != '')
        {
            if($('#otherrelation'+index).val() != '')
            {
                $(ele).attr('disabled','disabled');
                let data= new FormData();
                data.append('otp',$('#otp'+index).val());
                data.append('index',index);
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                data.append('mobile',$('#othermob'+index).val());
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
                toastr.error('Please Select Relation');
            }
        }else{
            toastr.error('Please Enter Valid OTP');
        }   
    }

    function sendOtp(index)
    {
        if($('#othermob'+index).val() != '')
        {
            let data= new FormData();
            data.append('mobile',$('#othermob'+index).val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('type','aadhar');
            data.append('typeval','<?php echo $_SESSION['aadhar_id']; ?>');

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
                      toastr.success(parse.message);
                      $('#othermob'+index).attr('readonly',true);
                      $('#btnOtp'+index).addClass('d-none');
                      $('#btnResendOtp'+index).removeClass('d-none');
                      $('#otp'+index+'div').removeClass('d-none');                          
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
            toastr.error('Please Enter Valid Mobile Number');
        }
    }
    
    function resendOtp(ele,index)
    {
        if($('#othermob'+index).val() != '')
        {
            $(ele).attr('disabled','disabled');
            let data= new FormData();
            data.append('mobile',$('#othermob'+index).val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('type','aadhar');
            data.append('typeval','<?php echo $_SESSION['aadhar_id']; ?>');

            $.ajax({
              url:'<?php echo base_url(); ?>user/sendProfileMobileOtp',
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
                      $('#othermob'+index).attr('readonly',true);
                      $('#btnOtp'+index).addClass('d-none');
                      $('#otp'+index+'div').removeClass('d-none');                          
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
            toastr.error('Please Enter Valid Mobile Number');
        }
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
    
    function cropPhoto(evt)
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
  </script>