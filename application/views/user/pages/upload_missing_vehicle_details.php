<!--this css from shiva sir change the size in mobile and laptop-->
<link href="<?php echo base_url(); ?>assets/css/font_size.css" rel="stylesheet">

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
<style>
/*    @media only screen and (max-width: 600px) {*/
/*  h6{*/
/*      font-size:0.8rem!important;*/
/*  }*/
/*}*/
/*@media only screen and (min-width: 768px) {*/

/*    h6{*/
/*        font-size:1.0rem!important;*/
/*    }*/
/*}*/
</style>
<main id="main" class="main">

    <div class="pagetitle mb-0">
      <p class="mb-0">Welcome,<b><?= $_SESSION['aadharName']; ?>!</b></p>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12 px-1">

          <div class="<?php if($pn != 3 && $pn != 1 && $pn != 6 && $pn != 4 && $pn != 5){ echo "card";} ?>">
            <div class="<?php if($pn != 3 && $pn != 1 && $pn != 4 && $pn != 5 && $pn != 6){ echo "card-body p-3";} ?>">
              <!-- Bordered Tabs -->
              <div class="tab-content">

                <div class="tab-pane fade show active profile-edit" id="profile-edit">
                    
                    <div id="step1" class="<?php if($pn != 1){ echo "d-none"; } ?>">
                        <?php 
                            $getUserDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array();
                        ?>
                        <form action="<?php echo base_url(); ?>user/checkMissingVehicleDetails" id="step1form" method="post">
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
                                    <!--<h5 style="font-weight:bold;" class="text-danger text-center">Add Missing Vehicle Details</h5>-->
                                    <h5 class="text-danger text-center"><b>You can register missing complaint of your vehicles.</b></h5>
                                    <hr>
                                    <div class="row mb-3 align-items-end">
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="row align-items-end" id="registereddiv">
                                                <div class="form-floating col-md-6 col-sm-12 col-lg-3 mb-3">
                                                    <select name="vehicleType" onchange="getVehicleNumber(this.value)" style="appearance:none!important;" class="form-select" id="vehicleType" required>
                                                        <option value="">Select Vehicle Type</option>
                                                        <?php 
                                                            $getDistinctCategory = $this->db->query('select * from vehicle_type')->result_array();
                                                            if(count($getDistinctCategory) > 0)
                                                            {
                                                              foreach($getDistinctCategory as $k=>$v)
                                                              {
                                                        ?>
                                                        <option value="<?php echo $v['vehicleType']; ?>"><?php echo $v['vehicleType']; ?></option>
                                                          <?php } ?>
                                                        <?php }else{ ?>
                                                        <option value="Two Wheeler">Two Wheeler</option>
                                                        <?php } ?>
                                                    </select>
                                                    <label for="vehicleType" class="col-form-label mx-2">Vehicle Type</label>
                                                </div>
                                                <div class="form-floating col-md-6 col-sm-12 col-lg-3 mb-3">
                                                    <select name="rcNumber" style="appearance:none!important;" class="form-select" id="rcNumber" required>
                                                        <option value="">Choose Vehicle Number</option>
                                                    </select>
                                                    <label for="rcNumber" class="col-form-label mx-2">Choose Vehicle Number</label>
                                                </div>
                                                <div class="form-floating form-group col-lg-3 col-sm-12 col-md-6 mb-3">
                                                    <input type="date" class="form-control" name="missingdate" onchange="showStep1Btn(this.value)" id="missingdate" required max="<?php echo date('Y-m-d'); ?>">
                                                    <label for="missingdate" class="col-form-label mx-2">Select Missing Date</label>
                                                </div>
                                                <div class="form-group col-md-3 col-lg-auto col-sm-12 mb-3 text-center">
                                                    <button type="submit" id="btn1" class="btn btn-primary btn-style-grey disabled-on-loading disabled"> Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="card">-->
                            <!--    <div class="card-body py-3">-->
                            <!--        <h5 style="font-weight:bold;" class="text-danger text-center">Please Provide FIR Details</h5>-->
                            <!--        <p class="text-left d-none" id="nomineeYesNote" style="font-size:19px;"><small class="text-dark"><b><span class="text-danger">Note: </span>We found that you are a nominee  of missing person. So you can skip filling of FIR details</b></small></p>-->
                            <!--        <p class="text-left d-none" id="nomineeNoNote" style="font-size:19px;"><small class="text-dark"><b><span class="text-danger">Note: </span>We found that you are not a nominee  of missing person. So FIR details filling is compulsory</b></small></p>-->
                            <!--        <hr>-->
                            <!--        <div class="row mb-3">-->
                            <!--            <div class="form-group col-md-6 col-lg-3">-->
                            <!--                <label for="firstate" class=" col-form-label">Select FIR State <span id="stateoptional" class="text-danger">*</span></label>-->
                            <!--                <select id="firstate" name="firstate" required class="form-control select2">-->
                            <!--                    <option value="">Select FIR State</option>-->
                            <!--                    <option value="Andhra Pradesh">Andhra Pradesh</option>-->
                            <!--                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>-->
                            <!--                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>-->
                            <!--                    <option value="Assam">Assam</option>-->
                            <!--                    <option value="Bihar">Bihar</option>-->
                            <!--                    <option value="Chandigarh">Chandigarh</option>-->
                            <!--                    <option value="Chhattisgarh">Chhattisgarh</option>-->
                            <!--                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>-->
                            <!--                    <option value="Daman and Diu">Daman and Diu</option>-->
                            <!--                    <option value="Delhi">Delhi</option>-->
                            <!--                    <option value="Lakshadweep">Lakshadweep</option>-->
                            <!--                    <option value="Puducherry">Puducherry</option>-->
                            <!--                    <option value="Goa">Goa</option>-->
                            <!--                    <option value="Gujarat">Gujarat</option>-->
                            <!--                    <option value="Haryana">Haryana</option>-->
                            <!--                    <option value="Himachal Pradesh">Himachal Pradesh</option>-->
                            <!--                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>-->
                            <!--                    <option value="Jharkhand">Jharkhand</option>-->
                            <!--                    <option value="Karnataka">Karnataka</option>-->
                            <!--                    <option value="Kerala">Kerala</option>-->
                            <!--                    <option value="Madhya Pradesh">Madhya Pradesh</option>-->
                            <!--                    <option value="Maharashtra">Maharashtra</option>-->
                            <!--                    <option value="Manipur">Manipur</option>-->
                            <!--                    <option value="Meghalaya">Meghalaya</option>-->
                            <!--                    <option value="Mizoram">Mizoram</option>-->
                            <!--                    <option value="Nagaland">Nagaland</option>-->
                            <!--                    <option value="Odisha">Odisha</option>-->
                            <!--                    <option value="Punjab">Punjab</option>-->
                            <!--                    <option value="Rajasthan">Rajasthan</option>-->
                            <!--                    <option value="Sikkim">Sikkim</option>-->
                            <!--                    <option value="Tamil Nadu">Tamil Nadu</option>-->
                            <!--                    <option value="Telangana">Telangana</option>-->
                            <!--                    <option value="Tripura">Tripura</option>-->
                            <!--                    <option value="Uttar Pradesh">Uttar Pradesh</option>-->
                            <!--                    <option value="Uttarakhand">Uttarakhand</option>-->
                            <!--                    <option value="West Bengal">West Bengal</option>-->
                            <!--                  </select>-->
                            <!--            </div>-->
                            <!--            <div class="form-group col-md-6 col-lg-3">-->
                            <!--                <label for="firdistrict" class="col-form-label">Select FIR District <span id="distoptional" class="text-danger">*</span></label>-->
                            <!--                <select id="firDistrict" name="firdistrict" required class="form-control select2">-->
                            <!--                    <option value="">Select FIR District</option>-->
                            <!--                </select>-->
                            <!--            </div>-->
                            <!--            <div class="form-group col-md-6 col-lg-3">-->
                            <!--                <label for="fircity" class="col-form-label">Enter FIR City <span id="cityoptional" class="text-danger">*</span></label>-->
                            <!--                <input type="text" name="fircity" required class="form-control" id="fircity" placeholder="Enter FIR City">-->
                            <!--            </div>-->
                            <!--            <div class="form-group col-md-6 col-lg-3">-->
                            <!--                <label for="firvillage" class="col-form-label">Enter FIR Village (Optional)</label>-->
                            <!--                <input type="text" name="firvillage" class="form-control" id="firvillage" placeholder="Enter FIR Village">-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        <div class="row mb-3">-->
                            <!--            <div class="form-group col-md-6 col-lg-3">-->
                            <!--                <label for="policeThanaName" class="col-form-label">Enter Police Thana Name <span id="policethanaoptional" class="text-danger">*</span></label>-->
                            <!--                <input type="text" required name="policeThanaName" class="form-control" id="policeThanaName" placeholder="Enter Police Thana Name">-->
                            <!--            </div>-->
                            <!--            <div class="form-group col-md-6 col-lg-3">-->
                            <!--                <label for="firdate" class="col-form-label">Select FIR Date <span id="firdateoptional" class="text-danger">*</span></label>-->
                            <!--                <input type="date" required name="firdate" class="form-control" id="firdate" max="<?php echo date('Y-m-d'); ?>">-->
                            <!--            </div>-->
                            <!--            <div class="form-group col-md-6 col-lg-3">-->
                            <!--                <label for="firNumber" class="col-form-label">Enter FIR Number <span id="firnumberoptional" class="text-danger">*</span></label>-->
                            <!--                <input type="text" required name="firNumber" class="form-control" id="firNumber" placeholder="Enter FIR Number">-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        <div class="row">-->
                            <!--            <div class="col-lg-auto col-md-auto col-sm-12 mb-3">-->
                            <!--                <button type="submit" class="next btn btn-primary disabled-on-loading" id="btn1"> Next</button>  -->
                            <!--            </div>    -->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </form>
                    </div>
                    <?php 
                        if(isset($_SESSION['missingVehicleId']))
                        {
                            $getMissingVehicleDetails = $this->db->query('select * from missingvehicle where Id='.$_SESSION['missingVehicleId'])->result_array();
                            if(count($getMissingVehicleDetails) > 0)
                            {
                    ?>
                    <div class="row mb-3 <?php if($pn != 2){ echo "d-none";} ?>" id="step2">
                        <form id="step2form" class="col-md-12">
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 style="font-weight:bold;text-align:center;" class="text-danger">Missing Complain for vehicle</h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-4 mb-3">
                                    <label for="missingstate" class=" col-form-label">Owner's Name</label>
                                    <input type="text" class="form-control" value="<?php echo $getMissingVehicleDetails[0]['ownerName']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-4 mb-3">
                                    <label class="col-form-label">Vehicle Type</label>
                                    <input type="text" class="form-control" value="<?php echo $getMissingVehicleDetails[0]['vehicleType']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-4 mb-3">
                                    <label class="col-form-label">Vehicle Number</label>
                                    <input type="text" class="form-control" value="<?php echo $getMissingVehicleDetails[0]['rcNumber']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-4 mb-3">
                                    <label class="col-form-label">Chassis Number</label>
                                    <input type="text" class="form-control" value="<?php echo $getMissingVehicleDetails[0]['chasisNumber']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-4 mb-3">
                                    <label class="col-form-label">Engine Number</label>
                                    <input type="text" class="form-control" value="<?php echo $getMissingVehicleDetails[0]['engineNumber']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-4 mb-3">
                                    <label class="col-form-label">Company Name</label>
                                    <input type="text" class="form-control" value="<?php echo $getMissingVehicleDetails[0]['companyName']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-4 mb-3">
                                    <label class="col-form-label">Model Number</label>
                                    <input type="text" class="form-control" value="<?php echo $getMissingVehicleDetails[0]['modelNumber']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-4 mb-3">
                                    <label class="col-form-label">Registered Address</label>
                                    <input type="text" class="form-control" value="<?php echo $getMissingVehicleDetails[0]['fathercurrentaddress']; ?>" readonly>
                                </div>
                            </div>
                            <button id="btn2" type="submit" class="btn-style-four mt-1 btn btn-primary disabled-on-loading"> Next</button>
                        </form>
                    </div>
                    <?php } } ?>
                    <?php 
                        if(isset($_SESSION['missingVehicleId']))
                        {
                            $getMissingVehicleDetails = $this->db->query('select * from missingvehicle where Id='.$_SESSION['missingVehicleId'])->result_array();
                    ?>
                    <div id="step3div" class="row mb-3 <?php if($pn != 3){ echo "d-none";} ?>">
                        <form action="<?php echo base_url(); ?>user/updateMissingVehicleStep3Detail" id="step3form" class="col-md-12">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <h5 class="text-dark mb-0">Upload latest photos of vehicle</h5>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            
                            <?php
                                $getLatestPhotos = $this->db->query('select * from missingvehiclephotos where missingId='.$getMissingVehicleDetails[0]['Id'])->result_array();
                                $j=0;
                                for($i=0;$i<5;$i++)
                                {
                                    $j++;
                                    if(count($getLatestPhotos) <= $i)
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
                                            <input type="hidden" id="isLatestPhotoUploaded<?php echo $i; ?>" value="0">
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
                                                    <h4 class="modal-title text-center"><?php echo $j; ?>- Upload Missing vehicle's Photo</h4>
                                                </div>
                                            </div>
                                            <div class="row mt-0">
                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                    <div class="row mt-3 mx-0" id="reUploadDiv<?php echo $i; ?>">
                                                        <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                            <label class="form-label">Upload image</label>
                                                            <input type="file" <?php if($getMissingVehicleDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?> class="form-control" id="latestFile<?php echo $i; ?>">
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
                                            <h5 class="modal-title"><?php echo $j; ?>- Uploaded Missing vehicle's Photo</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-4 col-sm-12 col-md-6 px-0">
                                            <div class="row border border-secondary mx-0 p-3" style="border-radius:15px;border-color:lightgrey!important;">
                                                <input type="hidden" id="isLatestPhotoUploaded<?php echo $i; ?>" value="<?php echo $getLatestPhotos[$i]['Id']; ?>">
                                                <div class="col-lg-auto col px-0">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                                            <h6><b>File Uploaded</b></h6>
                                                        </div>
                                                    </div>  
                                                    <?php 
                                                        $split = explode('upload/missingvehicle/',$getLatestPhotos[$i]['photourl']);
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                                            <p class="mb-1" style="color:grey;"><?php echo $split[1]; ?></p>
                                                        </div>
                                                    </div>  
                                                    <div class="row" style="margin-top:10px;">
                                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                                            <a title="Preview" href="<?php echo base_url(); ?><?php echo $getLatestPhotos[$i]['photourl']; ?>" data-lightbox="rd2" style="color:#fff!important;border:0px solid #0d6efd;padding:10px;border-radius:50%;background:#0d6efd;"><i class="fa fa-eye"></i></a>
                                                            <a title="Re-upload" href="javascript:void(0)" style="color:#fff!important;border:0px solid #ffb309;padding:10px;border-radius:50%;background:#ffb309;margin-left:7px;" onclick="showReUpload(<?php echo $i; ?>)"><i class="fa fa-upload"></i></a>
                                                            <a title="Remove" href="javascript:void(0)" class="btn btn-danger" style="background:white!important;color:red!important;margin-left:7px;" onclick="deletePhoto(<?php echo $getLatestPhotos[$i]['Id']; ?>,<?php echo $i; ?>)"><i class="fa fa-trash"></i></a>
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
                                                    <input type="file" <?php if($getMissingVehicleDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?> class="form-control" id="latestFile<?php echo $i; ?>">
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
                                                    <h5 class="modal-title"><?php echo $j; ?>- Uploaded Missing vehicle's Photo</h5>
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
                                                                $split = explode('upload/missingvehicle/',$getLatestPhotos[$i]['photourl']);
                                                            ?>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                                    <p class="mb-1" style="color:grey;"><?php echo $split[1]; ?></p>
                                                                </div>
                                                            </div>  
                                                            <div class="row">
                                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                                    <a href="<?php echo base_url(); ?><?php echo $getLatestPhotos[$i]['photourl']; ?>" data-lightbox="rd1" style="color:#403ab4!important;">Preview</a>
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
                                                            <input type="file" class="form-control" id="latestFile<?php echo $i; ?>">
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
                                <div class="card-body p-4">
                                    <div class="row text-start justify-content-start">
                                        <div class="col-lg-auto mt-3 col-md-auto col-sm-12 col-6">
                                            <button type="button" id="btn3Back" class="btn-style-grey btn btn-primary d-block w-100 disabled-on-loading"> Back</button>
                                        </div>
                                        <input type="hidden" name="imagecount" id="imagecount" value="<?php echo ($getMissingVehicleDetails[0]['photos'] != NULL ? count($getLatestPhotos) : 0) ?>">

                                        <div class="col-lg-auto mt-3 col-md-auto col-sm-12 col-6">
                                            <button type="button" id="btn3Next" class="btn-style-five btn btn-primary d-block w-100 disabled-on-loading"> Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                    <?php 
                        if(isset($_SESSION['missingVehicleId']))
                        {
                            $getMissingVehicleDetails = $this->db->query('select * from missingvehicle where Id='.$_SESSION['missingVehicleId'])->result_array();
                    ?>
                    <div id="vehicleMobDiv" class="row mb-3 <?php if($pn != 4){ echo "d-none"; }?>">
                        <?php 
                            $getVehicleDetails = $this->db->query('select * from missingvehicle where Id="'.(isset($_SESSION['missingVehicleId']) ? $_SESSION['missingVehicleId'] : 0).'"')->result_array();
                        ?>
                        <form id="vehicleMobForm" class="col-lg-12" action="<?php echo base_url(); ?>user/addMissingVehicleMobile">
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <?php 
                                $getRelations = $this->db->query('select * from vehicle_relation')->result_array();
                                $count = 0;
                                $getSettings = $this->db->query('select * from settings where name="deleteOTP"')->result_array();
                            ?>
                            <div class="card">
                                <div class="card-body pt-3">
                                    <div class="row mt-3">
                                        <div class="col-lg-auto col-sm-12 col-md-6 text-center text-md-start">
                                            <h6 class="text-dark"><b>You can save your contact numbers in the missing complaint. So people can contact you.</b></h6>
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
                            <div class="card">
                                <div class="card-body pt-4 pb-2">
                                    <div class="row mb-3 align-items-end">
                                        <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                                            <label class="form-label">Owner Name</label>
                                            <input disabled type="text" class="form-control disabled" value="<?php echo $getUserDetail[0]['aadharname']; ?>" id="ownerName">
                                        </div> 
                                        <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                            <label for="ownerName">Owner Number</label>
                                            <input type="number" disabled value="<?php echo (($getUserDetail[0]['registration_mobile'])); ?>" class="form-control mt-2" id="ownerNumber" placeholder="Enter Mobile Number" required>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                for($i=1;$i<=3;$i++)
                                {
                                    if($getVehicleDetails[0]['relation'.$i] != NULL)
                                    {
                                        $count++;
                                    }
                            ?>
                            <?php 
                                if($getVehicleDetails[0]['relation'.$i] != NULL)
                                {
                            ?>
                            <div class="card">
                                <div class="card-body pt-4 pb-2">
                                    <div class="row mb-3 align-items-end">
                                        <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                                            <label class="form-label">Person</label>
                                            <select class="form-control select2" <?php if($getVehicleDetails[0]['relation'.$i] != NULL) { echo "disabled"; } ?> id="wellrel<?php echo $i; ?>" name="wellrel<?php echo $i; ?>" required>
                                                <?php 
                                                    if(count($getRelations) > 0)
                                                    {
                                                ?>
                                                <option value="">Select Person</option>
                                                <?php 
                                                    foreach($getRelations as $k=>$v)
                                                    {
                                                ?>
                                                <option value="<?php echo $v['id']; ?>" <?php if($v['id'] == $getVehicleDetails[0]['relation'.$i]){ echo "selected"; } ?>><?php echo $v['name']; ?></option>
                                                <?php } } ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-auto col-md-auto col-sm-12 mb-3 <?php echo (($getVehicleDetails[0]['relation'.$i] != 3) ? 'd-none' : '') ?>" id="otherrelationdiv<?php echo $i; ?>">
                                            <label class="form-label">Enter Other Relation</label>
                                            <input type="text" disabled value="<?php echo (($getVehicleDetails[0]['relation'.$i] == 3) ? $getVehicleDetails[0]['otherrelationname'.$i] : '') ?>" class="form-control" placeholder="Enter Other Relation" name="otherrelation<?php echo $i ?>" id="otherrelation<?php echo $i ?>">
                                        </div>
                                        <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                            <label for="ownerName">Mobile Number</label>
                                            <input type="number" <?php if($getVehicleDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?> max="10" size="10" value="<?php echo (($getVehicleDetails[0]['mobile'.$i] != NULL) ? $getVehicleDetails[0]['mobile'.$i] : '') ?>" <?php if($getVehicleDetails[0]['relation'.$i] != NULL) { echo "disabled"; } ?> class="form-control mt-2" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="vehicleMob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="vehicleMob<?php echo $i; ?>" required>  
                                        </div>
                                        <div class="col-lg-3 mb-2 <?php if($getVehicleDetails[0]['relation'.$i] != NULL) { echo "d-none"; } ?>" id="sendOtpDiv<?php echo $i; ?>">
                                            <button type="button" class="btn btn-info btn-style-grey disabled-on-loading disabled" id="sendOtp<?php echo $i; ?>" onclick="sendVehicleMobileOtp(<?php echo $i; ?>)"> Send OTP</button>
                                        </div>  
                                         <?php if($getVehicleDetails[0]['isFinalSubmitted'] != 1){ ?>
                                        <div class="col-lg-auto mb-3 col-sm-12 col-md-auto text-center" id="actiondiv">
                                            <button type="button" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="deleteConatct(this,<?php echo $i; ?>,<?php echo $getSettings[0]['value']; ?>)"> <i class="fa fa-trash"></i></button>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="card">
                                <div class="card-body pt-4 pb-2">
                                    <div class="row mb-3 align-items-end">
                                        <div class="col-lg-3 col-md-3 col-sm-12 mb-3" id="rel<?php echo $i; ?>Div">
                                            <label class="form-label">Person</label>
                                            <select class="form-control select2" <?php if($getVehicleDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?> onchange="showRelationAccordingly(this.value,<?php echo $i; ?>)" <?php if($getVehicleDetails[0]['relation'.$i] != NULL) { echo "disabled"; } ?> id="wellrel<?php echo $i; ?>" name="wellrel<?php echo $i; ?>" required>
                                                <?php 
                                                    if(count($getRelations) > 0)
                                                    {
                                                ?>
                                                <option value="">Select Person</option>
                                                <?php 
                                                    foreach($getRelations as $k=>$v)
                                                    {
                                                ?>
                                                <option value="<?php echo $v['id']; ?>" <?php if($v['id'] == $getVehicleDetails[0]['relation'.$i]){ echo "selected"; } ?>><?php echo $v['name']; ?></option>
                                                <?php } } ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-auto col-md-auto col-sm-12 mb-3 d-none" id="otherrelationdiv<?php echo $i; ?>">
                                            <label class="form-label">Enter Other Relation</label>
                                            <div class="input-group">
                                                <input type="text" aria-describedby="otherClear<?php echo $i; ?>" class="form-control" <?php if($getVehicleDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?> placeholder="Enter Other Relation" name="otherrelation<?php echo $i ?>" id="otherrelation<?php echo $i ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" style="border-radius:0;padding:0.7rem;background:white;" onclick="clearOtherDiv(<?php echo $i; ?>)" id="otherClear<?php echo $i; ?>"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                            <label for="ownerName">Mobile Number</label>
                                            <input type="number" max="10" size="10" <?php if($getVehicleDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?> value="<?php echo (($getVehicleDetails[0]['mobile'.$i] != NULL) ? $getVehicleDetails[0]['mobile'.$i] : '') ?>" <?php if($getVehicleDetails[0]['relation'.$i] != NULL) { echo "disabled"; } ?> class="form-control mt-2" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="vehicleMob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="vehicleMob<?php echo $i; ?>" required>  
                                        </div>
                                        <div class="col-lg-auto text-center col-md-auto mb-2 <?php if($getVehicleDetails[0]['relation'.$i] != NULL) { echo "d-none"; } ?>" id="sendOtpDiv<?php echo $i; ?>">
                                            <button type="button" class="w-100 btn btn-info btn-style-grey disabled-on-loading disabled" id="sendOtp<?php echo $i; ?>" onclick="sendVehicleMobileOtp(<?php echo $i; ?>)"> Send OTP</button>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } ?>
                            <?php 
                                $getSections = $this->db->query('select * from sections where sectionName="vehicleContact"')->result_array();
                                if($getSections[0]['sectionPermission'] == 1)
                                {
                            ?>
                            <input type="hidden" name="mobCount" value="<?php echo $count; ?>" id="mobCount">
                            <?php }else{ ?>
                            <input type="hidden" name="mobCount" value="1" id="mobCount">
                            <?php } ?>
                            <div class="card">
                                <div class="card-body pt-4 pb-2">
                                    <div class="row">
                                        <div class="col-lg-auto col-md-auto col-6 px-0 mb-3">
                                            <button class="btn btn-dark text-light w-100 btn-style-grey disabled-on-loading" type="button" id="btn4Back"> Back</button>  
                                        </div>
                                        <div class="col-lg-auto col-md-auto col-6 mb-3" style="padding-right:0;">
                                            <button class="btn btn-dark text-light w-100 btn-style-five disabled-on-loading" type="button" id="btn4Next"> Next</button>  
                                            <!--<a class="btn btn-warning mx-3 mt-3 disabled-on-loading" href="javascript:void(0)" id="btnCancel"> Cancel</a>-->
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                    <?php 
                        if(isset($_SESSION['missingVehicleId']))
                        {
                    ?>
                    <div id="step5div" class="row mb-3 <?php if($pn != 5){ echo "d-none";} ?>">
                        <form action="<?php echo base_url(); ?>user/updateMissingVehicleStep5Detail" id="step5form" class="col-md-12">
                            <?php 
                                $missingvehicle = $this->db->query('select * from missingvehicle where Id='.$_SESSION['missingVehicleId'])->result_array();
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <h6 class="text-danger mb-0 text-left"><b>Fill Some Other Details</b></h6>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row mb-3">
                                        <div class="form-group col-lg-6 col-sm-12 col-md-6">
                                            <label class="mb-2">Enter Some Details</label>
                                            <textarea autofocus  maxlength="250" class="form-control" onKeyPress="return checkLength(this.value,250)" onKeyUp="showOtherButtonAccordingly(this,this.value)" name="otherDetail" <?php if($missingvehicle[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>><?php echo $missingvehicle[0]['otherDetail']; ?></textarea>
                                            <div id="the-count">
                                                <span id="current"><?php echo strlen($missingvehicle[0]['otherDetail']); ?></span>
                                                <span id="maximum">/ 250</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3 col-sm-12 col-md-3">
                                            <label class="mb-2">Current State</label>
                                            <select name="currentState" required class="form-control select2" <?php if($missingvehicle[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                                                <option value="">Select State</option>
                                                <option value="Andhra Pradesh" <?php if($missingvehicle[0]['currentState'] == 'Andhra Pradesh'){ echo "selected"; } ?>>Andhra Pradesh</option>
                                                <option value="Andaman and Nicobar Islands"<?php if($missingvehicle[0]['currentState'] == 'Andaman and Nicobar Islands'){ echo "selected"; } ?>>Andaman and Nicobar Islands</option>
                                                <option value="Arunachal Pradesh"<?php if($missingvehicle[0]['currentState'] == 'Arunachal Pradesh'){ echo "selected"; } ?>>Arunachal Pradesh</option>
                                                <option value="Assam"<?php if($missingvehicle[0]['currentState'] == 'Assam'){ echo "selected"; } ?>>Assam</option>
                                                <option value="Bihar"<?php if($missingvehicle[0]['currentState'] == 'Bihar'){ echo "selected"; } ?>>Bihar</option>
                                                <option value="Chandigarh"<?php if($missingvehicle[0]['currentState'] == 'Chandigarh'){ echo "selected"; } ?>>Chandigarh</option>
                                                <option value="Chhattisgarh"<?php if($missingvehicle[0]['currentState'] == 'Chhattisgarh'){ echo "selected"; } ?>>Chhattisgarh</option>
                                                <option value="Dadar and Nagar Haveli" <?php if($missingvehicle[0]['currentState'] == 'Dadar and Nagar Haveli'){ echo "selected"; } ?>>Dadar and Nagar Haveli</option>
                                                <option value="Daman and Diu" <?php if($missingvehicle[0]['currentState'] == 'Daman and Diu'){ echo "selected"; } ?>>Daman and Diu</option>
                                                <option value="Delhi" <?php if($missingvehicle[0]['currentState'] == 'Delhi'){ echo "selected"; } ?>>Delhi</option>
                                                <option value="Lakshadweep" <?php if($missingvehicle[0]['currentState'] == 'Lakshadweep'){ echo "selected"; } ?>>Lakshadweep</option>
                                                <option value="Puducherry" <?php if($missingvehicle[0]['currentState'] == 'Puducherry'){ echo "selected"; } ?>>Puducherry</option>
                                                <option value="Goa" <?php if($missingvehicle[0]['currentState'] == 'Goa'){ echo "selected"; } ?>>Goa</option>
                                                <option value="Gujarat" <?php if($missingvehicle[0]['currentState'] == 'Gujarat'){ echo "selected"; } ?>>Gujarat</option>
                                                <option value="Haryana" <?php if($missingvehicle[0]['currentState'] == 'Haryana'){ echo "selected"; } ?>>Haryana</option>
                                                <option value="Himachal Pradesh" <?php if($missingvehicle[0]['currentState'] == 'Himachal Pradesh'){ echo "selected"; } ?>>Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir" <?php if($missingvehicle[0]['currentState'] == 'Jammu and Kashmir'){ echo "selected"; } ?>>Jammu and Kashmir</option>
                                                <option value="Jharkhand" <?php if($missingvehicle[0]['currentState'] == 'Jharkhand'){ echo "selected"; } ?>>Jharkhand</option>
                                                <option value="Karnataka" <?php if($missingvehicle[0]['currentState'] == 'Karnataka'){ echo "selected"; } ?>>Karnataka</option>
                                                <option value="Kerala" <?php if($missingvehicle[0]['currentState'] == 'Kerala'){ echo "selected"; } ?>>Kerala</option>
                                                <option value="Madhya Pradesh" <?php if($missingvehicle[0]['currentState'] == 'Madhya Pradesh'){ echo "selected"; } ?>>Madhya Pradesh</option>
                                                <option value="Maharashtra" <?php if($missingvehicle[0]['currentState'] == 'Maharashtra'){ echo "selected"; } ?>>Maharashtra</option>
                                                <option value="Manipur" <?php if($missingvehicle[0]['currentState'] == 'Manipur'){ echo "selected"; } ?>>Manipur</option>
                                                <option value="Meghalaya" <?php if($missingvehicle[0]['currentState'] == 'Meghalaya'){ echo "selected"; } ?>>Meghalaya</option>
                                                <option value="Mizoram" <?php if($missingvehicle[0]['currentState'] == 'Mizoram'){ echo "selected"; } ?>>Mizoram</option>
                                                <option value="Nagaland" <?php if($missingvehicle[0]['currentState'] == 'Nagaland'){ echo "selected"; } ?>>Nagaland</option>
                                                <option value="Odisha" <?php if($missingvehicle[0]['currentState'] == 'Odisha'){ echo "selected"; } ?>>Odisha</option>
                                                <option value="Punjab" <?php if($missingvehicle[0]['currentState'] == 'Punjab'){ echo "selected"; } ?>>Punjab</option>
                                                <option value="Rajasthan" <?php if($missingvehicle[0]['currentState'] == 'Rajasthan'){ echo "selected"; } ?>>Rajasthan</option>
                                                <option value="Sikkim" <?php if($missingvehicle[0]['currentState'] == 'Sikkim'){ echo "selected"; } ?>>Sikkim</option>
                                                <option value="Tamil Nadu" <?php if($missingvehicle[0]['currentState'] == 'Tamil Nadu'){ echo "selected"; } ?>>Tamil Nadu</option>
                                                <option value="Telangana" <?php if($missingvehicle[0]['currentState'] == 'Telangana'){ echo "selected"; } ?>>Telangana</option>
                                                <option value="Tripura" <?php if($missingvehicle[0]['currentState'] == 'Tripura'){ echo "selected"; } ?>>Tripura</option>
                                                <option value="Uttar Pradesh" <?php if($missingvehicle[0]['currentState'] == 'Uttar Pradesh'){ echo "selected"; } ?>>Uttar Pradesh</option>
                                                <option value="Uttarakhand" <?php if($missingvehicle[0]['currentState'] == 'Uttarakhand'){ echo "selected"; } ?>>Uttarakhand</option>
                                                <option value="West Bengal" <?php if($missingvehicle[0]['currentState'] == 'West Bengal'){ echo "selected"; } ?>>West Bengal</option>
                                              </select>
                                        </div>
                                        <div class="form-group col-lg-3 col-sm-12 col-md-3">
                                            <label class="mb-2">Current City</label>
                                            <select class="form-control select2" required <?php if($missingvehicle[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?> name="currentCity">
                                                <option value="">Select City</option>
                                                <?php 
                                                    $getCities = $this->db->query('select * from cities')->result_array();
                                                    if(count($getCities) > 0)
                                                    {
                                                        foreach($getCities as $k=>$v)
                                                        {
                                                ?>
                                                <option value="<?php echo $v['city']; ?>" <?php if($missingvehicle[0]['currentCity'] == $v['city']){ echo "selected"; } ?>><?php echo $v['city']; ?></option>
                                                <?php } } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row justify-content-center justify-content-md-start">
                                        <div class="form-group col-lg-auto col-sm-12 col-auto col-md-auto mb-3">
                                            <button class="btn btn-dark text-light disabled-on-loading btn-style-grey w-100" type="button" id="step5Back"> Back</button>
                                        </div>
                                        <div class="form-group col-lg-auto col-sm-12 col-auto col-md-auto mb-3">
                                            <button class="btn btn-dark text-light disabled-on-loading btn-style-green w-100" <?php if($missingvehicle[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?> type="submit" id="step5"> Save</button>
                                        </div>
                                        <div class="form-group col-lg-auto col-sm-12 col-11 col-md-auto mb-3">
                                            <button class="btn btn-dark text-light disabled-on-loading btn-style-four w-100" type="button" id="step5Next"> Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                    <?php 
                        if(isset($_SESSION['missingVehicleId']))
                        {
                            $getMissingVehicleDetails = $this->db->query('select * from missingvehicle where Id='.$_SESSION['missingVehicleId'])->result_array();
                    ?>
                    <div id="step6div" class="row mb-3 <?php if($pn != 6){ echo "d-none";} ?>">
                        <form id="step6Form" class="col-lg-12" action="<?php echo base_url(); ?>user/updateMissingVehicleStep6Detail" method="post">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <h5 class="text-dark mb-0">Add your reward amount</h5>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <input type="hidden" name="paymentStatus" id="paymentStatus" value="<?php echo ($getMissingVehicleDetails[0]['paymentStatus']); ?>">
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="row" id="rewarddiv">
                                        <div class="form-group form-floating col-md-3 col-sm-12 col-lg-2">
                                            <input type="number" onkeyup="showPaymentAccordingly(this.value)" <?php if($getMissingVehicleDetails[0]['paymentStatus'] == 'Success'){ echo "disabled"; } ?> <?php if($getMissingVehicleDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?> value="<?php echo ($getMissingVehicleDetails[0]['rewardamount'] != NULL ? $getMissingVehicleDetails[0]['rewardamount'] : 0) ?>" min="<?php echo ($getMissingVehicleDetails[0]['rewardamount'] != NULL ? $getMissingVehicleDetails[0]['rewardamount'] : 0) ?>" required class="form-control" id="rewardAmount" name="rewardAmount" placeholder="Reward Amount">
                                            <label for="rewardAmount" class="col-md-4 col-lg-3 col-form-label mx-2">Reward Amount</label>      
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <?php if($getMissingVehicleDetails[0]['paymentStatus'] != NULL && $getMissingVehicleDetails[0]['paymentStatus'] == 'Success'){ ?>
                                    <div class="col-auto text-start">
                                        <img src="<?php echo base_url(); ?>assets/images/paid.jpg">
                                    </div>
                                    <?php } ?>
                                </div>
                                <hr class="my-0">
                                <div class="card-body p-4 pt-3">
                                    <div class="row">
                                        <div class="form-group col-md-3 col-sm-12 col-lg-auto">
                                            <label>Reward Amount: <i class="fa fa-rupee-sign"></i> <span id="rewardLabel"><?php echo ($getMissingVehicleDetails[0]['rewardamount'] != NULL ? $getMissingVehicleDetails[0]['rewardamount'] : 0) ?></span></label>
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
                                            <label>Total Charges: <i class="fa fa-rupee-sign"></i> <span id="totalChargesLabel"><?php echo ($getMissingVehicleDetails[0]['finalAmount'] != NULL ? $getMissingVehicleDetails[0]['finalAmount'] : (300 + ($getMissingVehicleDetails[0]['rewardamount'] != NULL ? $getMissingVehicleDetails[0]['rewardamount'] : 0))) ?></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="totalAmount" id="totalAmount" value="<?php echo ($getMissingVehicleDetails[0]['finalAmount'] != NULL ? $getMissingVehicleDetails[0]['finalAmount'] : (300 + ($getMissingVehicleDetails[0]['rewardamount'] != NULL ? $getMissingVehicleDetails[0]['rewardamount'] : 0))) ?>">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row justify-content-center justify-content-md-start">
                                        <div class="form-group col-lg-auto col-sm-12 col-auto col-md-auto mb-3">
                                            <button class="btn btn-dark text-light disabled-on-loading btn-style-grey w-100" type="button" id="step6Back"> Back</button>
                                        </div>
                                        <?php 
                                            if($getMissingVehicleDetails[0]['isFinalSubmitted'] != 1){
                                        ?>
                                        <div class="form-group col-lg-auto col-sm-12 col-11 col-md-auto mb-3">
                                            <button class="btn btn-danger disabled-on-loading btn-style-green w-100" id="btnPay"> Make Payment</button>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="form-group col-lg-auto col-sm-12 col-auto col-md-auto mb-3">
                                            <button class="btn btn-dark text-light disabled-on-loading btn-style-four w-100" type="button" id="step6Next"> Next</button>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                    <?php 
                        if(isset($_SESSION['missingVehicleId']))
                        {
                    ?>
                    <div id="step7div" class="row mb-3 <?php if($pn != 7){ echo "d-none";} ?>">
                        <?php 
                            $missingvehicle = $this->db->query('select * from missingvehicle where Id='.$_SESSION['missingVehicleId'])->result_array();
                            $getAllByVehicle = $this->db->query('select * from missingvehicle where Id="'.$missingvehicle[0]['Id'].'" and isFound=0 and paymentStatus="Success" and paymentId is not NULL')->result_array();
                        ?>
                        <div class="px-0 col-lg-10 col-md-12 col-sm-12 d-flex flex-column mx-lg-auto">
                            <div class="row px-5 align-items-center">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <h6 class="text-success"><b>Missing complaint registered successfully.</b></h6>
                                    <h6 class="text-dark"><b>Missing Id - <?php echo $_SESSION['longMissingVehicleId']; ?></b></h6>
                                    <!--<h6 clas="text-success"><b class="text-success">Current Status - Missing/Stolen</b></h6>-->
                                </div>
                            </div>
                            <hr class="border-dark">
                            <div class="row px-3 align-items-center">
                                <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <h5 class="text-danger text-uppercase"><b>Missing</b></h5>
                                            <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">Missing Date : </span> <?php echo date('d-m-Y',strtotime($missingvehicle[0]['missingdate'])); ?></h6>
                                        </div>
                                    </div>
                                    <?php 
                                        $rewardcount = 0;
                                        foreach($getAllByVehicle as $k=>$v)
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
                                                    foreach($getAllByVehicle as $k=>$v)
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
                                        if($missingvehicle[0]['firdate'] != NULL)
                                        {
                                    ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Date : </span> <span id="missingfirdate"><?php echo date('d-m-Y',strtotime($missingvehicle[0]['firdate'])); ?></span></h6>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($missingvehicle[0]['firpolicethananame'] != NULL)
                                        {
                                    ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12 text-center border border-2 border-danger p-3">
                                            <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Thana & Address : </span> <span id="firthanaaddress"><?php echo (($missingvehicle[0]['firpolicethananame'] != NULL ? ($missingvehicle[0]['firpolicethananame'].',') : '')); ?><?php echo (($missingvehicle[0]['firstate'] != NULL ? ($missingvehicle[0]['firstate'].',') : '')); ?><?php echo (($missingvehicle[0]['firdistrict'] != NULL ? ($missingvehicle[0]['firdistrict'].',') : '')); ?><?php echo (($missingvehicle[0]['fircity'] != NULL ? ($missingvehicle[0]['fircity'].',') : '')); ?><?php echo (($missingvehicle[0]['firvillage'] != NULL ? ($missingvehicle[0]['firvillage']) : '')); ?></span></h6>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" id="photosspan">
                                        <?php 
                                            $decode = json_decode($missingvehicle[0]['photos'],true);
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
                                            $getLatestUserPhotos = $this->db->query('select * from missingvehiclephotos where missingId='.$missingvehicle[0]['Id'])->result_array();
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
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 mx-1 align-items-center">
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                     <h6 style="color: black;font-size:13px;"><b>Vehicle Number : </b></h6>
                                    
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="rcNumber" class="text-danger text-uppercase"><b><?php echo $missingvehicle[0]['rcNumber']; ?></b></h6>
                                    
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 mx-1 align-items-center">
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                   <h6 style="color: black;font-size:13px;"><b>Owner Name : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                   <h6  style="font-size:13px;"><b id="personname"><?php echo $missingvehicle[0]['ownerName']; ?></b></h6>
                                </div>
                            </div>
                            <div class="bg-dark row mt-2 mx-3 p-2">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <label class="text-light"><b>Vehicle's Other Details</b></label>
                                </div>
                            </div>
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Vehicle Type : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="typespan"><b><?php echo $missingvehicle[0]['vehicleType']; ?></b></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Chassis Number : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                     <h6 style="color: black;font-size:13px;" id="chassisNumberspan"><b><?php echo (($missingvehicle[0]['chasisNumber'] != '') ? $missingvehicle[0]['chasisNumber'] : ''); ?></b></h6>
                                   
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Engine Number : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="engineNumberSpan"><b><?php echo (($missingvehicle[0]['engineNumber'] != '') ? $missingvehicle[0]['engineNumber'] : ''); ?></b></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Company Name : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="companyNameSpan"><b><?php echo ($missingvehicle[0]['companyName']); ?></b></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Model Number : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="modelNumberSpan"><b><?php echo ($missingvehicle[0]['modelNumber']); ?></b></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:13px;"><b>Other Detail : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;font-size:13px;" id="otherdetailspan"><b><?php echo $missingvehicle[0]['otherDetail']; ?></b></h6>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <?php 
                                    if($missingvehicle[0]['isFinalSubmitted'] == 0)
                                    {
                                ?>
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <button type="button" class="btn-style-green btn btn-primary d-block w-100 disabled-on-loading" onclick="finalSubmit(this)"> Final Submit</button>
                                </div>
                                <?php } ?>
                                <?php 
                                    if($missingvehicle[0]['isFinalSubmitted'] == 1)
                                    {
                                ?>
                                <!--<div class="col-lg-auto mt-3 col-md-auto col-sm-12">-->
                                <!--    <button type="button" class="btn-style-four btn btn-primary d-block w-100 disabled-on-loading" onclick="copyLink('without',<?php echo $missingvehicle[0]['Id']; ?>)"> Generate link without vehicle photo and vehicle no. <i class="fa fa-copy"></i></button>-->
                                <!--</div>-->
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <button type="button" class="btn-style-four btn btn-primary d-block w-100 disabled-on-loading" onclick="copyLink('with',<?php echo $missingvehicle[0]['Id']; ?>)"> Generate link with vehicle photo and vehicle no. <i class="fa fa-copy"></i></button>
                                </div>
                                <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                    <a href="<?php echo base_url(); ?>user" class="btn-style-green btn btn-primary d-block">Dashboard <i class="fa fa-home" aria-hidden="true"></i></a>
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
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script type="text/javascript">
  
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
        if (characterCount > 90 && characterCount < 100) {
            current.css('color', '#793535');
        }
        if (characterCount > 100 && characterCount < 120) {
            current.css('color', '#841c1c');
        }
        if (characterCount > 120 && characterCount < 139) {
            current.css('color', '#8f0001');
        }
        if (characterCount >= 140) {
            maximum.css('color', '#8f0001');
            current.css('color', '#8f0001');
            theCount.css('font-weight','bold');
        } else {
            maximum.css('color','#666');
            theCount.css('font-weight','normal');
        }
        if(val != '')
        {
            $('#step5').removeClass('btn-style-green').addClass('btn-style-yellow');
        }else{
            $('#step5').addClass('btn-style-green').removeClass('btn-style-yellow');
        }
    }
    
    $('#btn4Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=3";
    })
    
    $('#btn4Next').click(function()
    {
        if($('#mobCount').val() > 0)
        {
            location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=5";   
        }else{
            toastr.error('Please add one mobile number to continue');
        }
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
      
      function showReUpload(index)
      {
          $('#reUploadBtn'+index).removeClass('d-none');
          $('#reUploadDiv'+index).removeClass('d-none');
      }
      
      function resendDeleteContactOtp(ele,index)
    {
        $(ele).attr('disabled','disabled');
        let otpdata = new FormData();
        otpdata.append('mobile',$('#vehicleMob'+index).val());
        otpdata.append('index',index);
        otpdata.append('setting',1);
        otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendDeleteVehicleMissingContactOtp',
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
                url:'<?php echo base_url(); ?>user/deleteMissingVehicleContact',
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
                    otpdata.append('mobile',$('#vehicleMob'+index).val());
                    otpdata.append('index',index);
                    otpdata.append('setting',setting);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/sendDeleteVehicleMissingContactOtp',
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
                                '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="number" class="form-control" id="deleteOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteContactOtp(this,'+index+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendDeleteContactOtp(this,'+index+')"> Resend OTP</button></div>',
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
                        url:'<?php echo base_url(); ?>user/deleteMissingVehicleContact',
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
                    url:'<?php echo base_url(); ?>user/finalMissingVehicleSumbit',
                    type:'get',
                    success:function(res)
                    {
                        toastr.success('Final Data Submitted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
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
    
    function clearAadhar(ele)
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
    
    function clearOtherDiv(index)
    {
        $('#rel'+index+'Div').removeClass('d-none');
        $('#otherrelationdiv'+index).addClass('d-none');
        $('#otherrelation'+index).val('');
        $('#wellrel'+index).val('').trigger('change');
    }
    
    function showRelationAccordingly(val,index)
    {
        if(val == '')
        {
            $('#rel'+index+'Div').removeClass('d-none');
            $('#otherrelationdiv'+index).addClass('d-none');
            $('#otherrelation'+index).val('');
        }else{
            if(val == 3)
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

    function showAccordingly(val)
    {
        if(val == '')
        {
            toastr.error('Please select your choice to continue');
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
        $('#step5').attr('disabled','disabled');
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
                        location.reload();
                    },2000);
                 }else{
                    toastr.error(parse.message);
                    $('#step5').removeAttr('disabled');
                }  
            }
        });  
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

    $('#step6Form').on('submit',function(e)
    {
        e.preventDefault();
        if(($('#totalAmount').val() != '' && $('#totalAmount').val() != 0))
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
                success:function(res)
                {
                    let rzpParse = JSON.parse(res);
                    var options = {
                        "order_id" : rzpParse.orderId,
                    	"key": "rzp_live_IS6pmFuBDVlq9p",
                    	"amount": (($('#totalAmount').val()) * 100),
                    	"name": "Khoji",
                    	"description": "Add Reward",
                    	"image": "<?php echo base_url(); ?>assets/img/logo.png",// COMPANY LOGO
                    	"handler": function (response) {
                    		$.ajax({
                    		    url:'<?php echo base_url(); ?>user/saveVehicleReward',
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
            toastr.error('Please Enter Valid Amount');
        }
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
                    },2000);
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
            if($('#wellrel'+count).val() != '')
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
                toastr.error('Please Select Person');
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
    
    function addMobile()
    {
        let count = parseInt(parseInt($('#mobCount').attr('value')) + parseInt(1));
        if(count <=3)
        {
            let html = '<div class="row mb-3">';
            if(count == 2)
            {
                html += `<div class="col-lg-2 col-md-3 col-sm-12 mb-3">
                        <label class="form-label">Select Person</label>
                        <select class="form-control" name="wellrel`+count+`" id="wellrel`+count+`" required <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                            <?php 
                                if(count($getRelations) > 0)
                                {
                            ?>
                            <option value="" <?php if(!isset($getMissingDetails[0]['relation2'])){ echo "selected"; } ?>>Select Person</option>
                            <option value="0" <?php if($getMissingDetails[0]['relation2'] == 0 && isset($getMissingDetails[0]['relation2'])){ echo "selected"; } ?>>Other</option>
                            <?php 
                                foreach($getRelations as $k=>$v)
                                {
                            ?>
                            <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getMissingDetails[0]['relation2']){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                            <?php } }else{ ?>
                            <option value="0" <?php if($getMissingDetails[0]['relation2'] == 0 && isset($getMissingDetails[0]['relation2'])){ echo "selected"; } ?>>Other</option>
                            <?php } ?>
                        </select>
                    </div>`;   
            }else{
                html += `<div class="col-lg-2 col-md-3 col-sm-12 mb-3">
                        <label class="form-label">Select Person</label>
                        <select class="form-control" name="wellrel`+count+`" id="wellrel`+count+`" required <?php if($getMissingDetails[0]['isFinalSubmitted'] != 0){ echo "disabled"; } ?>>
                            <?php 
                                if(count($getRelations) > 0)
                                {
                            ?>
                            <option value="" <?php if(!isset($getMissingDetails[0]['relation3'])){ echo "selected"; } ?>>Select Person</option>
                            <option value="0" <?php if($getMissingDetails[0]['relation3'] == 0 && isset($getMissingDetails[0]['relation3'])){ echo "selected"; } ?>>Other</option>
                            <?php 
                                foreach($getRelations as $k=>$v)
                                {
                            ?>
                            <option value="<?php echo $v['Id']; ?>" <?php if($v['Id'] == $getMissingDetails[0]['relation3']){ echo "selected"; } ?>><?php echo $v['relationName']; ?></option>
                            <?php } }else{ ?>
                            <option value="0" <?php if($getMissingDetails[0]['relation3'] == 0 && isset($getMissingDetails[0]['relation3'])){ echo "selected"; } ?>>Other</option>
                            <?php } ?>
                        </select>
                    </div>`;
            }
            html += `
                    <div class="col-lg-2 col-sm-12 col-md-4">
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
                              <input type="text" class="form-control mt-2" id="otp`+count+`" name="otp`+count+`">
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
                    toastr.success(parse.message);
                    setTimeout(function()
                    {
                        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=2";     
                    },2000);
                }else{
                    if(parse.status == 'closed')
                    {
                        Swal.fire({
                            title: '<span class="text-dark" style="font-size:20px;">If you want to make a new complaint of vehicle No. - <span class="text-danger">'+($('#rcNumber').val()).toUpperCase()+'</span> then You have to delete old complaint of same Vehicle.</span>',
                            html:'<button type="button" class="btn btn-style-five disabled-on-loading" onclick="goToManageComplaint(this)"> Go to Manage complaint</button>',
                            icon: 'error',
                            allowOutsideClick:false,
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:false
                        }).then((result) => {
                            $('#btn1').removeAttr('disabled');       
                        })
                    }else{
                        Swal.fire({
                            title: '<span class="text-dark" style="font-size:20px;">If you want to make a new complaint of vehicle No. - <span class="text-danger">'+($('#rcNumber').val()).toUpperCase()+'</span> then You have to delete old complaint of same Vehicle.</span>',
                            html:'<button type="button" class="btn btn-style-five disabled-on-loading" onclick="goToManageComplaint(this)"> Go to Manage complaint</button>',
                            icon: 'error',
                            allowOutsideClick:false,
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:false
                        }).then((result) => {
                            $('#btn1').removeAttr('disabled');       
                        })
                    }
                }
            }
        })
    })
    
    function goToManageComplaint(ele)
    {
        $(ele).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/manage_missing_vehicle_details";
    }
    
    $('#step5Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=4";
    })
    
    $('#step5Next').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=6";   
    })
    
    $('#step6Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=5";
    })
    
    $('#step6Next').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=7";
    })
    
    $('#btn3Next').click(function()
    {
        if($('#imagecount').val() > 0)
        {
            location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=4";   
        }else{
            toastr.error('Please add one photo to continue');
        }
    })
    
    $('#btn3Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=2";
    })
    
    $('#step2form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn2').attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user/upload_missing_vehicle_details?pn=3";
    })
    
    function showPaymentAccordingly(val)
    {
        if(val == '0' || val == '')
        {
            $('#rewardLabel').html('0');
            $('#totalChargesLabel').html(300);
            $('#totalAmount').val(300);
        }else{
            $('#rewardLabel').html(val);
            $('#totalChargesLabel').html(parseInt(val) + 300);
            $('#totalAmount').val(parseInt(val) + 300);
        }
    }
    
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
                    url:'<?php echo base_url(); ?>user/deleteMissingVehiclePhoto/'+missingId,
                    type:'get',
                    success:function(res)
                    {
                        toastr.success('Photo Deleted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
                    }
                })
            }
        })
    }
    
    function copyLink(type,Id)
    {
        navigator.clipboard.writeText('<?php echo base_url(); ?>user/missingvehicledetail?Id='+Id+'&type='+type);
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
    
    function cancelReUpload(ele,index)
    {
        $('#reUploadBtn'+index).addClass('d-none');
        $('#reUploadDiv'+index).addClass('d-none');   
    }
    
    function uploadLatestPhoto(ele,index)
    {
        if($('#latestFile'+index).val() == '')
        {
            toastr.error('Please Select Photo to continue');
        }else{
            $(ele).attr('disabled','disabled');
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('isUploaded',$('#isLatestPhotoUploaded'+index).val());
            let file = $('#latestFile'+index)[0].files[0];
            data.append('file',file);
            $.ajax({
                url:'<?php echo base_url(); ?>user/uploadVehicleLatestPhoto',
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
            $('#sendOtpDiv'+index+' button').removeClass('btn-style-grey').addClass('btn-style-five');
            $('#sendOtpDiv'+index+' button').removeClass('disabled');
        }else{
            $('#sendOtpDiv'+index+' button').removeClass('btn-style-five').addClass('btn-style-grey');
            $('#sendOtpDiv'+index+' button').addClass('disabled');
        }
    }
    
    function getVehicleNumber(val)
    {
        if(val == '')
        {
            $('#rcNumber').empty();
            $('#rcNumber').append('<option value="">Choose Vehicle Number</option>');
            toastr.error('Please Select Vehicle Type');
        }else{
            $.ajax({
                url:'<?php echo base_url(); ?>user/getVehicleNumber',
                data:{_token:'<?php echo $this->security->get_csrf_hash(); ?>','type':val},
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        $('#rcNumber').empty();
                        $('#rcNumber').append('<option value="">Choose Vehicle Number</option>');
                        for(let i=0;i<parse.data.length;i++)
                        {
                            $('#rcNumber').append('<option value="'+parse.data[i].rcNumber+'">'+parse.data[i].rcNumber+'</option>');
                        }
                    }else{
                        $('#rcNumber').empty();
                        $('#rcNumber').append('<option value="">Choose Vehicle Number</option>');
                        toastr.error('No Vehicles Found');
                    }
                }
            })
        }
    }
    
    function showStep1Btn(val)
    {
        if(val.length > 6)
        {
            $('#btn1').removeClass('disabled');
            $('#btn1').removeClass('btn-style-grey').addClass('btn-style-five');
        }else{
            $('#btn1').addClass('disabled');
            $('#btn1').removeClass('btn-style-five').addClass('btn-style-grey');
        }
    }
    
    $('#rcNumber').on('keypress', function(e) {
        if (e.which == 32){
            return false;
        }
    });
    
    function verifyVehicleMobileOtp(ele,count)
    {
        $(ele).attr('disabled','disabled');
        if($('#otp'+count).val() != '')
        {
            let relation = $('#wellrel'+count).val();
            if( relation != '')
            {
                if(relation != 3)
                {
                    let data= new FormData();
                    data.append('relation',$('#wellrel'+count).val());
                    data.append('otp',$('#otp'+count).val());
                    data.append('mobile',$('#vehicleMob'+count).val());
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    data.append('count',count);
                    $.ajax({
                      url:'<?php echo base_url(); ?>user/verifyVehicleMissingMobileOtp',
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
                              $(ele).removeAttr('disabled');
                          }
                      }
                    })   
                }else{
                    if($('#otherrelation'+count).val() != '')
                    {
                        let data= new FormData();
                        data.append('relation',$('#wellrel'+count).val());
                        data.append('otherrelation',$('#otherrelation'+count).val());
                        data.append('otp',$('#otp'+count).val());
                        data.append('mobile',$('#vehicleMob'+count).val());
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        data.append('count',count);
                        $.ajax({
                          url:'<?php echo base_url(); ?>user/verifyVehicleMissingMobileOtp',
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
                toastr.error('Please Select Person');
                $(ele).removeAttr('disabled');
            }
        }else{
            toastr.error('Please Enter Valid OTP');
            $(ele).removeAttr('disabled');
        }
    }
    
    function resendVehicleMobileOtp(ele,index)
    {
        let mob = $('#vehicleMob'+index).val();
        $(ele).attr('disabled','disabled');
        let data= new FormData();
        data.append('mobile',mob);
        data.append('count',index);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendVehicleMissingMobileOtp',
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

    function sendVehicleMobileOtp(count)
    {
        let mob = $('#vehicleMob'+count).val();
        $('#sendOtp'+count).attr('disabled','disabled');
        if(mob != '')
        {
            if(mob != $('#ownerNumber').val())
            {
                let relation = $('#wellrel'+count).val();
                if( relation != '')
                {
                    if(relation != 3)
                    {
                        let data= new FormData();
                        data.append('mobile',mob);
                        data.append('count',count);
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        $.ajax({
                            url:'<?php echo base_url(); ?>user/sendVehicleMissingMobileOtp',
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
                                    $('#vehicleMob'+count).attr('readonly',true);
                                    Swal.fire({
                                      title: '<strong>Enter OTP to proceed </strong>',
                                      icon: 'success',
                                      allowOutsideClick:false,
                                      html:
                                        '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="number" class="form-control" id="otp'+count+'"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyVehicleMobileOtp(this,'+count+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendVehicleMobileOtp(this,'+count+')"> Resend OTP</button></div>',
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
                    		            icon:'warning',
                    		            html:'<b>This mobile number is already in your account</b>',
                                        allowOutsideClick:false,
                                        showCloseButton: true,
                                        showCancelButton: false,
                                        focusConfirm: true,
                                        showConfirmButton:true
                                    }).then(() => {
                                        $('#sendOtp'+count).removeAttr('disabled');      
                                    })
                                }else{
                                    toastr.error(parse.message);
                                    $('#sendOtp'+count).removeAttr('disabled');
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
                                url:'<?php echo base_url(); ?>user/sendVehicleMissingMobileOtp',
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
                                        $('#vehicleMob'+count).attr('readonly',true);
                                        Swal.fire({
                                          title: '<strong>Enter OTP to proceed </strong>',
                                          icon: 'success',
                                          allowOutsideClick:false,
                                          html:
                                            '<div class="form-group mb-3"><label class="form-label">Enter OTP</label><input type="number" class="form-control" id="otp'+count+'"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyVehicleMobileOtp(this,'+count+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendVehicleMobileOtp(this,'+count+')"> Resend OTP</button></div>',
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
                        		            icon:'warning',
                        		            html:'<b>This mobile number is already in your account</b>',
                                            allowOutsideClick:false,
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: true,
                                            showConfirmButton:true
                                        }).then(() => {
                                            $('#sendOtp'+count).removeAttr('disabled');      
                                        })
                                    }else{
                                        toastr.error(parse.message);
                                        $('#sendOtp'+count).removeAttr('disabled');
                                    }
                              }
                            })   
                        }else{
                            toastr.error('Please Enter Other Relation Name');
                            $('#sendOtp'+count).removeAttr('disabled');
                        }
                    }
                }else{
                    toastr.error('Please Select Person');
                    $('#sendOtp'+count).removeAttr('disabled');    
                }
            }else{
                Swal.fire({
		            icon:'warning',
		            html:'<b>This mobile number is already in your account</b>',
                    allowOutsideClick:false,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: true,
                    showConfirmButton:true
                }).then(() => {
                    $('#sendOtp'+count).removeAttr('disabled');      
                })
            }
        }else{
            toastr.error('Please Enter Valid Mobile Number');
            $('#sendOtp'+count).removeAttr('disabled');
        }
    }
    
    </script>
  <script>
    $(".readonly").on('keydown paste focus mousedown', function(e){
        if(e.keyCode != 9) // ignore tab
            e.preventDefault();
    });
</script>