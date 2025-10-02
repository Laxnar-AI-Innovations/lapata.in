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
      font-weight: bold!important;
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
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Vehicle</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Edit Vehicle</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

            <!-- Bordered Tabs -->
              <ul class="nav nav-tabs border-0">
                <?php 
                    $csrf = array(
                      'name' => $this->security->get_csrf_token_name(),
                      'hash' => $this->security->get_csrf_hash()
                      );
                  ?>
              </ul>
              <div class="tab-content">

                <div class="tab-pane fade active show " id="profile-edit">

                    <div id="vehiclePhotos" class="row mb-3 <?php if($pn != 1){ echo "d-none"; } ?>">
                        <form id="vehiclePhotoForm" class="col-lg-12" action="<?php echo base_url(); ?>user/saveVehiclePhoto">
                            <?php 
                                $decode = array();
                                if($vehicles[0]['vehiclePhoto'] != NULL)
                                {
                                    $decode = json_decode($vehicles[0]['vehiclePhoto'],true);
                                }
                            ?>
                            <div class="card">
                                <div class="card-body pt-3">
                                    <div class="row mt-3">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <h6 class="text-dark"><b>Upload your vehicle's photo</b></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                for($i=0;$i<4;$i++)
                                {
                            ?>
                            <div class="card">
                                <div class="card-body pt-3">
                                    <div class="row mb-3 align-items-center">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <input type="hidden" id="isUploaded<?php echo $i; ?>" value="<?php echo ($vehicles[0]['vehiclePhoto'] != NULL ? (isset($decode[$i]) ? $decode[$i]: 0) : 0) ?>">
                                    <div class="row">
                                        <div class="col-lg-auto col-sm-12 col-md-auto mt-3" style="position:relative;">
                                            <input type="file" class="form-control" name="vehiclePhoto<?php echo $i; ?>" accept="image/*" id="vehiclePhoto<?php echo $i; ?>">
                                            <?php 
                                                if($vehicles[0]['vehiclePhoto'] != NULL)
                                                {
                                                    if(isset($decode[$i]))
                                                    {
                                            ?>
                                            <div style="position:absolute;z-index:1;bottom:7px;left:128px;background:white;color:green;">
                                                <i class="fa fa-check"></i> File Uploaded
                                            </div>
                                            <?php } } ?>
                                        </div>
                                        <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                                            <button type="button" class="btn btn-dark disabled-on-loading w-100 save" onclick="uploadLatestPhoto(this,<?php echo $i; ?>)"> Upload</button>
                                        </div>
                                        <?php 
                                            if($vehicles[0]['vehiclePhoto'] != NULL)
                                            {
                                                if(isset($decode[$i]))
                                                {
                                        ?>
                                        <div class="col-lg-auto col-sm-12 col-md-auto text-center">
                                            <a href="javascript:void(0)" class="btn btn-danger mt-3" style="background:white!important;color:red!important;" onclick="deletePhoto('<?php echo $decode[$i]; ?>',<?php echo $i; ?>)"><i class="fa fa-trash"></i></a>
                                            <a href="<?php echo base_url(); ?><?php echo $decode[$i]; ?>"  data-lightbox="roadtrip1" class="btn btn-outline-info mt-3 mx-2"><i class="fa fa-eye"></i></a>
                                        </div>
                                        <?php } } ?>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                            <?php } ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="card mt-3">
                                <div class="card-body pt-3">
                                    <div class="row">
                                        <div class="col-lg-auto col-md-auto col-auto">
                                            <button class="btn btn-dark text-light my-3 w-100 btn-style-green disabled-on-loading" type="button" id="btn1Save"> Next</button>  
                                        </div>
                                        <?php 
                                            $getSections = $this->db->query('select * from sections where sectionName="vehiclePhoto"')->result_array();
                                            if($getSections[0]['sectionPermission'] == 1)
                                            {
                                        ?>
                                        <input type="hidden" name="imagecount" id="imagecount" value="<?php echo ($vehicles[0]['vehiclePhoto'] != NULL ? count($decode) : 0) ?>">
                                        <?php }else{ ?>'
                                        <input type="hidden" name="imagecount" id="imagecount" value="1">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="vehicleDoc" class="row mb-3 <?php if($pn != 2){ echo "d-none"; } ?>">
                        <form id="vehicleDocForm" class="col-lg-12" action="<?php echo base_url(); ?>user/saveVehicleDoc">
                            <?php 
                                $getDocumentName = $this->db->query('select * from vehicleDocuments')->result_array();
                            ?>
                            <div class="card">
                                <div class="card-body pt-3">
                                    <div class="row mt-3">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <h6 class="text-dark"><b>Upload your vehicle's document</b></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                if(count($getDocumentName) > 0)
                                {
                                    foreach($getDocumentName as $k=>$v)
                                    {
                                        $getVehicleDocs = $this->db->query('select * from newVehicleDocs where documentName='.$v['Id'].' and vehicleId='.$id)->result_array();
                                        $getSections = $this->db->query('select * from sections where sectionName="vehicleDocs"')->result_array();
                            ?>
                            <div class="card">
                                <div class="card-body pt-3">
                                    <div class="row mt-3" style="align-items: self-end;">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <input type="hidden" id="isDocUploaded<?php echo $k; ?>" value="<?php echo ((count($getVehicleDocs) > 0) ? $getVehicleDocs[0]['Id'] : 0); ?>">
                                    <div class="row mb-3 align-items-end">
                                        <div class="form-group col-lg-3 col-md-3 mb-3">
                                            <label for="documentName<?php echo $k; ?>" class="col-form-label">Document Name <?php echo ($getSections[0]['sectionPermission'] == 1) ? '<b class="text-danger"">*</b>':'(optional)'; ?></label>
                                            <select name="documentName<?php echo $k; ?>" style="padding:0.5rem;appearance:none!important;" class="form-control" id="documentName<?php echo $k; ?>" aria-label="Enter Document Name">
                                                <option value="<?php echo $v['Id']; ?>"><?php echo $v['docName']; ?></option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-auto col mb-3" style="position:relative;">
                                            <label for="documentFile<?php echo $k; ?>" class="col-form-label">Document File</label>
                                            <input type="file" class="form-control" id="documentFile<?php echo $k; ?>" name="documentFile<?php echo $k; ?>">
                                            <?php 
                                                if(count($getVehicleDocs) > 0)
                                                {
                                            ?>
                                            <div style="position:absolute;z-index:1;bottom:7px;left:128px;background:white;color:green;">
                                                <i class="fa fa-check"></i> File Uploaded
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-lg-auto col-sm-12 col-md-auto mb-3">
                                            <button type="button" class="btn btn-dark disabled-on-loading w-100 save" onclick="uploadDoc(this,<?php echo $k; ?>)"> Upload</button>
                                        </div>
                                        <?php 
                                            if(count($getVehicleDocs) > 0)
                                            {
                                        ?>
                                        <div class="col-lg-auto col-sm-12 mb-3 col-md-auto text-center">
                                            <a href="javascript:void(0)" class="btn btn-danger" style="background:white!important;color:red!important;" onclick="deleteDoc('<?php echo $getVehicleDocs[0]['documentFile']; ?>',<?php echo $getVehicleDocs[0]['Id']; ?>)"><i class="fa fa-trash"></i></a>
                                            <a href="<?php echo base_url(); ?><?php echo $getVehicleDocs[0]['documentFile']; ?>"  data-lightbox="roadtrip2" class="btn btn-outline-info mx-2"><i class="fa fa-eye"></i></a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                            <?php } }else{ ?>
                            <div class="card">
                                <div class="card-body pt-3">
                                    <div class="row align-items-center justify-content-center text-center">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <h5 class="text-danger">No need to upload the documents.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="row align-items-end">
                                        <div class="col-lg-auto col-md-auto col-6 px-0">
                                            <button class="btn btn-dark text-light my-3 w-100 btn-style-grey disabled-on-loading" type="button" id="btn2Back"> Back</button>  
                                        </div>
                                        <div class="col-lg-auto col-md-auto col-6" style="padding-right:0;">
                                            <button class="btn btn-dark text-light my-3 w-100 btn-style-five disabled-on-loading" type="button" id="btn2Next"> Next</button>  
                                            <!--<a class="btn btn-warning mx-3 mt-3 disabled-on-loading" href="javascript:void(0)" id="btnCancel"> Cancel</a>-->
                                        </div>
                                        <?php 
                                            $getSections = $this->db->query('select * from sections where sectionName="vehicleDocs"')->result_array();
                                            if($getSections[0]['sectionPermission'] == 1)
                                            {
                                                $getVehicleDocs = $this->db->query('select * from newVehicleDocs where vehicleId='.$id)->result_array();
                                        ?>
                                        <input type="hidden" name="doccount" id="doccount" value="<?php echo (count($getVehicleDocs)); ?>">
                                        <?php }else{ ?>
                                        <input type="hidden" name="doccount" id="doccount" value="1">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="vehicleMobDiv" class="row mb-3 <?php if($pn != 3){ echo "d-none"; }?>">
                        <?php 
                            $getVehicleDetails = $this->db->query('select * from vehicles where Id="'.$id.'"')->result_array();
                        ?>
                        <form id="vehicleMobForm" class="col-lg-12" action="<?php echo base_url(); ?>user/addVehicleMobile">
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <?php 
                                $getRelations = $this->db->query('select * from vehicle_relation')->result_array();
                                $count = 0;
                                $getSettings = $this->db->query('select * from settings where name="deleteOTP"')->result_array();
                                $getUserDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array();
                            ?>
                            <div class="card">
                                <div class="card-body pt-3">
                                    <div class="row mt-3">
                                        <div class="col-lg-6 col-sm-12 col-md-6 text-center text-md-start">
                                            <h6 class="text-dark"><b>Add / Edit your contact number for Emergency</b></h6>
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
                                <div class="card-body py-3">
                                    <div class="row my-3 align-items-end">
                                <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                                    <label class="form-label">Select Relation</label>
                                    <select class="form-control select2" <?php if($getVehicleDetails[0]['relation'.$i] != NULL) { echo "disabled"; } ?> id="wellrel<?php echo $i; ?>" name="wellrel<?php echo $i; ?>" required>
                                        <?php 
                                            if(count($getRelations) > 0)
                                            {
                                        ?>
                                        <option value="">Select Relation</option>
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
                                    <input type="number" max="10" size="10" value="<?php echo (($getVehicleDetails[0]['mobile'.$i] != NULL) ? $getVehicleDetails[0]['mobile'.$i] : '') ?>" <?php if($getVehicleDetails[0]['relation'.$i] != NULL) { echo "disabled"; } ?> class="form-control mt-2" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="vehicleMob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="vehicleMob<?php echo $i; ?>" required>  
                                </div>
                                <div class="col-lg-3 mb-2 <?php if($getVehicleDetails[0]['relation'.$i] != NULL) { echo "d-none"; } ?>" id="sendOtpDiv<?php echo $i; ?>">
                                    <button type="button" class="btn btn-info btn-style-grey disabled-on-loading disabled" id="sendOtp<?php echo $i; ?>" onclick="sendVehicleMobileOtp(<?php echo $i; ?>)"> Send OTP</button>
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
                                        <select class="form-control select2" onchange="showAccordingly(this.value,<?php echo $i; ?>)" <?php if($getVehicleDetails[0]['relation'.$i] != NULL) { echo "disabled"; } ?> id="wellrel<?php echo $i; ?>" name="wellrel<?php echo $i; ?>" required>
                                            <?php 
                                                if(count($getRelations) > 0)
                                                {
                                            ?>
                                            <option value="">Select Relation</option>
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
                                            <input type="text" aria-describedby="otherClear<?php echo $i; ?>" class="form-control" placeholder="Enter Other Relation" name="otherrelation<?php echo $i ?>" id="otherrelation<?php echo $i ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="border-radius:0;padding:0.7rem;background:white;cursor:pointer;" onclick="clearOtherDiv(<?php echo $i; ?>)" id="otherClear<?php echo $i; ?>"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                        <label for="ownerName">Mobile Number</label>
                                        <input type="number" max="10" size="10" value="<?php echo (($getVehicleDetails[0]['mobile'.$i] != NULL) ? $getVehicleDetails[0]['mobile'.$i] : '') ?>" <?php if($getVehicleDetails[0]['relation'.$i] != NULL) { echo "disabled"; } ?> class="form-control mt-2" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="vehicleMob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="vehicleMob<?php echo $i; ?>" required>  
                                    </div>
                                    <div class="col-lg-auto text-center col-md-auto mb-2 <?php if($getVehicleDetails[0]['relation'.$i] != NULL) { echo "d-none"; } ?>" id="sendOtpDiv<?php echo $i; ?>">
                                        <button type="button" class="w-100 btn btn-info btn-style-grey disabled-on-loading disabled" id="sendOtp<?php echo $i; ?>" onclick="sendVehicleMobileOtp(<?php echo $i; ?>)"> Send OTP</button>
                                    </div>  
                                </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } ?>
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="row">
                                        <div class="col-lg-auto col-md-auto col-6 px-0 my-3">
                                            <button class="btn btn-dark text-light w-100 btn-style-grey disabled-on-loading" type="button" id="btn3Back"> Back</button>  
                                        </div>
                                        <div class="col-lg-auto col-md-auto col-6 my-3" style="padding-right:0;">
                                            <button class="btn btn-dark text-light w-100 btn-style-five disabled-on-loading" type="button" id="btn3Next"> Next</button>  
                                            <!--<a class="btn btn-warning mx-3 mt-3 disabled-on-loading" href="javascript:void(0)" id="btnCancel"> Cancel</a>-->
                                        </div>
                                        <?php 
                                            $getSections = $this->db->query('select * from sections where sectionName="vehicleContact"')->result_array();
                                            if($getSections[0]['sectionPermission'] == 1)
                                            {
                                        ?>
                                        <input type="hidden" name="mobCount" value="<?php echo $count; ?>" id="mobCount">
                                        <?php }else{ ?>
                                        <input type="hidden" name="mobCount" value="1" id="mobCount">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="step4" class="<?php if($pn != 4){ echo "d-none"; } ?>">
                        <form id="step4Form">
                            <div class="card">
                                <div class="card-body py-0">
                                    <h5 class="card-title text-danger">Upload photo for face match</h5>        
                                </div>
                            </div>
                            <?php 
                                $getVehicleInactivities = $this->db->query('select * from vehicleFaceMatch where vehicleId='.$id)->result_array();
                            ?>
                            <?php
                                for($i=0;$i<3;$i++)
                                {
                            ?>
                                <div class="card">
                                    <div class="card-body py-3">
                                        <div class="form-group mb-3">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                    <input type="hidden" id="isUploadedInactive<?php echo $i; ?>" value="<?php echo ($getVehicleInactivities[$i]['facematchphoto'] != NULL ? ($getVehicleInactivities[$i]['Id']) : 0) ?>">
                                                    <div class="row align-items-end">
                                                        <div class="col-lg-3 col col-md-auto col-sm-12 mb-3 <?php if($getVehicleInactivities[$i]['relationId'] == 3) { echo "d-none"; } ?>" id="inactiverel<?php echo $i; ?>Div">
                                                            <label class="form-label d-block">Person</label>
                                                            <select class="form-control select2" onchange="showInactiveRelationAccordingly(this.value,<?php echo $i; ?>)" id="inactiveRelation<?php echo $i; ?>" name="inactiveRelation<?php echo $i; ?>" required>
                                                                <?php 
                                                                    if(count($getRelations) > 0)
                                                                    {
                                                                ?>
                                                                <option value="">Select Person</option>
                                                                <?php 
                                                                    foreach($getRelations as $k=>$v)
                                                                    {
                                                                ?>
                                                                <option value="<?php echo $v['id']; ?>" <?php if($v['id'] == $getVehicleInactivities[$i]['relationId']){ echo "selected"; } ?>><?php echo $v['name']; ?></option>
                                                                <?php } } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-auto col-md-auto col col-sm-12 mb-3 <?php echo (($getVehicleInactivities[$i]['relationId']) != 3 ? 'd-none' : ''); ?>" id="otherrelationinactivediv<?php echo $i; ?>">
                                                            <label class="form-label">Enter Other Relation</label>
                                                            <div class="input-group">
                                                                <input type="text" aria-describedby="otherInactiveClear<?php echo $i; ?>" value="<?php echo (($getVehicleInactivities[$i]['relationId']) == 3 ? $getVehicleInactivities[$i]['otherRelationName'] : ''); ?>" class="form-control" placeholder="Enter Other Relation" name="otherInactiveRelation<?php echo $i ?>" id="otherInactiveRelation<?php echo $i ?>">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" style="border-radius:0;padding:0.7rem;background:white;cursor:pointer;" onclick="clearInactiveOtherDiv(<?php echo $i; ?>)" id="otherInactiveClear<?php echo $i; ?>"><i class="fa fa-times"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-auto col-sm-12 col-md-auto mb-3" style="position:relative;">
                                                            <label class="form-label">Select Face Match Photo</label>
                                                            <input type="file" class="form-control" name="vehicleInactivePhoto<?php echo $i; ?>" accept="image/*" id="vehicleInactivePhoto<?php echo $i; ?>">
                                                            <?php 
                                                                if($getVehicleInactivities[$i]['facematchphoto'] != NULL)
                                                                {
                                                            ?>
                                                            <div style="position:absolute;z-index:1;bottom:7px;left:128px;background:white;color:green;">
                                                                <i class="fa fa-check"></i> File Uploaded
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-lg-auto col-sm-12 col-md-auto mb-3">
                                                            <button type="button" class="btn btn-dark disabled-on-loading w-100 save" onclick="uploadFaceMatchPhoto(this,<?php echo $i; ?>)"> Upload</button>
                                                        </div>
                                                        <?php 
                                                            if($getVehicleInactivities[$i]['facematchphoto'] != NULL)
                                                            {
                                                        ?>
                                                        <div class="col-lg-auto col-sm-12 col-md-auto text-center">
                                                            <a href="javascript:void(0)" class="btn btn-danger mb-3" style="background:white!important;color:red!important;" onclick="deleteFaceMatchPhoto('<?php echo $getVehicleInactivities[$i]['facematchphoto']; ?>',<?php echo $getVehicleInactivities[$i]['Id']; ?>)"><i class="fa fa-trash"></i></a>
                                                            <a href="<?php echo base_url(); ?><?php echo $getVehicleInactivities[$i]['facematchphoto']; ?>"  data-lightbox="roadtrip2" class="btn btn-outline-info mb-3"><i class="fa fa-eye"></i></a>
                                                        </div>
                                                        <?php } ?>
                                                        <div id="uploadimageModal<?php echo $i; ?>" class="modal" role="dialog">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="color:white;">&times;</button>
                                                                        <h4 class="modal-title">Crop Image</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                                                                                <div id="image_demo<?php echo $i; ?>" style="width:100%; margin-top:30px;"></div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                                                                                <button class="btn btn-success crop_image<?php echo $i; ?> btn-style-green disabled-on-loading" type="button"> Save</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-auto col-lg-auto my-3" >
                                            <button type="button" id="btn4Back" class="btn btn-dark disabled-on-loading w-100 btn-style-grey"> Back</button>
                                        </div>
                                        <div class="col-lg-auto col-sm-12 col-md-auto my-3">
                                            <button class="btn btn-primary btn-style-five w-100 disabled-on-loading" type="button" id="btn4Next"> Save</button>
                                        </div>
                                    </div>
                                    <?php 
                                        $getSections = $this->db->query('select * from sections where sectionName="vehicleInactivePhoto"')->result_array();
                                        if($getSections[0]['sectionPermission'] == 1)
                                        {
                                    ?>
                                    <input type="hidden" name="inactiveImageCount" value="<?php echo count($getVehicleInactivities); ?>" id="inactiveImageCount">
                                    <?php }else{ ?>
                                    <input type="hidden" name="inactiveImageCount" value="1" id="inactiveImageCount">
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="step5" class="<?php if($pn != 5){ echo "d-none"; } ?>">
                        <form id="step5Form">
                            <div class="card">
                                <div class="card-body py-0">
                                    <h5 class="card-title text-danger">Update Privacy Settings</h5>        
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body py-3">
                                    <label class="form-label">Vehicle Visiblitiy</label>
                                    <hr class="mt-0">
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-md-auto my-2 col-8 <?php if($getVehicleDetails[0]['visibility'] == 1){ echo "activeLabel"; } ?>" id="visibility1label">
                                                <input type="radio" name="visibility" id="visibility2" class="radio-custom" value="1" <?php if($getVehicleDetails[0]['visibility'] == 1){ echo "checked"; } ?> required>
                                                <label for="visibility2" class="ml-2 radio-custom-label" style="font-weight:bold;">Active Mode</label>
                                            </div>
                                            <div class="col-md-auto my-2 col-auto <?php if($getVehicleDetails[0]['visibility'] == 0 && $getVehicleDetails[0]['visibility'] != NULL){ echo "activeLabel"; } ?>" id="visibility2label">
                                                <input type="radio" name="visibility" id="visibility1" class="radio-custom" value="0" <?php if($getVehicleDetails[0]['visibility'] == 0 && $getVehicleDetails[0]['visibility'] != NULL){ echo "checked"; } ?> required>
                                                <label for="visibility1" style="font-weight:bold;" class="ml-2 radio-custom-label">In-Active Mode</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-auto col-lg-auto mt-3" >
                                            <button type="button" id="btn5Back" class="btn btn-dark disabled-on-loading w-100 btn-style-grey"> Back</button>
                                        </div>
                                        <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                                            <button type="submit" class="btn btn-primary btn-style-five w-100 disabled-on-loading" id="btn5Next"> Save</button>
                                        </div>
                                        <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                                            <button type="button" class="btn btn-primary btn-style-four w-100 disabled-on-loading" onclick="goToDashboard(this)"> Go to Dashboard</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

              </div><!-- End Bordered Tabs -->

        </div>
      </div>
    </section>

  </main><!-- End #main -->
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
            <!--<i class="fa fa-plus icon-default"></i>-->
        </a>
        <ul class="floatingMenu">
            <li>
                <a href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=1">Add Vehicle Photo</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=2">Add Vehicle Documents</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=3">Add Contact Details</a>
            </li>
            <?php 
                $getVehicleDetails = $this->db->query('select * from vehicles where Id='.$id)->result_array();
                if(count($getVehicleDetails) > 0)
                {
                    if($getVehicleDetails[0]['paymentStatus'] == 1)
                    {   
            ?>
            <li>
                <a href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=4">Add Face Match Photo</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=5">Active / In-Active Profile</a>
            </li>
            <?php } }  ?>
        </ul>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript">
    
    $('#btn3Next').click(function()
    {
        if($('#mobCount').val() > 0)
        {
            location.href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=4";   
        }else{
            toastr.error('Please add one mobile number to continue');
        }
    })
    
    $('#btn4Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=3";   
    })
    
    $('#btn5Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=4";   
    })
    
    $('#btn4Next').click(function()
    {
        if($('#inactiveImageCount').val() > 0)
        {
            location.href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=5";   
        }else{
            toastr.error('Please add one face match photo to continue');
        }
    })
    
    $image_crop0 = $('#image_demo0').croppie({
        enableExif: true,
        viewport: {
          width:320,
          height:240,
          type:'square' //circle
        },
        boundary:{
          width:320,
          height:240
        }
      });
     
    $image_crop1 = $('#image_demo1').croppie({
        enableExif: true,
        viewport: {
          width:320,
          height:240,
          type:'square' //circle
        },
        boundary:{
          width:320,
          height:240
        }
      });
      
     $image_crop2 = $('#image_demo2').croppie({
        enableExif: true,
        viewport: {
          width:320,
          height:240,
          type:'square' //circle
        },
        boundary:{
          width:320,
          height:240
        }
      });
      
    $image_crop3 = $('#image_demo3').croppie({
        enableExif: true,
        viewport: {
          width:320,
          height:240,
          type:'square' //circle
        },
        boundary:{
          width:320,
          height:240
        }
      });
      
    $('.crop_image0').click(function(event){
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
                        $image_crop0.croppie('result', {
                          type: 'canvas',
                          size: 'viewport',
                          format:'jpeg',
                          quality: parseFloat(qualityVal)
                        }).then(function(response){
                            $('.crop_image0').attr('disabled','disabled');
                            let index = 0;
                            let relation = $('#inactiveRelation'+index).val();
                            if( relation != '')
                            {
                                if(relation != 3)
                                {
                                    let data= new FormData();
                                    data.append('relation',$('#inactiveRelation'+index).val());
                                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                    data.append('isUploaded',$('#isUploadedInactive'+index).val());
                                    data.append('id',<?php echo $id; ?>);
                                    data.append('index',index);
                                    data.append('file',response);
                                    $.ajax({
                                      url:'<?php echo base_url(); ?>user/uploadNewVehicleFaceMatchPhoto',
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
                                              })
                                          }else{
                                              toastr.error(parse.message);
                                              $('.crop_image0').removeAttr('disabled');
                                          }
                                      }
                                    })   
                                }else{
                                    if($('#otherInactiveRelation'+index).val() != '')
                                    {
                                        let data= new FormData();
                                        data.append('relation',$('#inactiveRelation'+index).val());
                                        data.append('otherrelation',$('#otherInactiveRelation'+index).val());
                                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                        data.append('id',<?php echo $id; ?>);
                                        data.append('isUploaded',$('#isUploadedInactive'+index).val());
                                        data.append('index',index);
                                        data.append('file',response);
                                        $.ajax({
                                          url:'<?php echo base_url(); ?>user/uploadNewVehicleFaceMatchPhoto',
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
                                                  })
                                              }else{
                                                  toastr.error(parse.message);
                                                  $('.crop_image0').removeAttr('disabled');
                                              }
                                          }
                                        })   
                                    }else{
                                        toastr.error('Please Enter Other Relation Name');
                                        $('.crop_image0').removeAttr('disabled');
                                    }
                                }
                            }else{
                                toastr.error('Please Select Relation');
                                $('.crop_image0').removeAttr('disabled');
                            }
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
      
    $('.crop_image1').click(function(event){
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
                        $image_crop1.croppie('result', {
                          type: 'canvas',
                          size: 'viewport',
                          format:'jpeg',
                          quality: parseFloat(qualityVal)
                        }).then(function(response){
                            let index = 1;
                            $('.crop_image1').attr('disabled','disabled');
                            let relation = $('#inactiveRelation'+index).val();
                            if( relation != '')
                            {
                                if(relation != 3)
                                {
                                    let data= new FormData();
                                    data.append('relation',$('#inactiveRelation'+index).val());
                                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                    data.append('isUploaded',$('#isUploadedInactive'+index).val());
                                    data.append('id',<?php echo $id; ?>);
                                    data.append('index',index);
                                    data.append('file',response);
                                    $.ajax({
                                      url:'<?php echo base_url(); ?>user/uploadNewVehicleFaceMatchPhoto',
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
                                              })
                                          }else{
                                              toastr.error(parse.message);
                                              $('.crop_image1').removeAttr('disabled');
                                          }
                                      }
                                    })   
                                }else{
                                    if($('#otherInactiveRelation'+index).val() != '')
                                    {
                                        let data= new FormData();
                                        data.append('relation',$('#inactiveRelation'+index).val());
                                        data.append('otherrelation',$('#otherInactiveRelation'+index).val());
                                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                        data.append('id',<?php echo $id; ?>);
                                        data.append('isUploaded',$('#isUploadedInactive'+index).val());
                                        data.append('index',index);
                                        data.append('file',response);
                                        $.ajax({
                                          url:'<?php echo base_url(); ?>user/uploadNewVehicleFaceMatchPhoto',
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
                                                  })
                                              }else{
                                                  toastr.error(parse.message);
                                                  $('.crop_image1').removeAttr('disabled');
                                              }
                                          }
                                        })   
                                    }else{
                                        toastr.error('Please Enter Other Relation Name');
                                        $('.crop_image1').removeAttr('disabled');
                                    }
                                }
                            }else{
                                toastr.error('Please Select Relation');
                                $('.crop_image1').removeAttr('disabled');
                            }
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
      
      $('.crop_image2').click(function(event){
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
                        $image_crop2.croppie('result', {
                          type: 'canvas',
                          size: 'viewport',
                          format:'jpeg',
                          quality: parseFloat(qualityVal)
                        }).then(function(response){
                            $('.crop_image2').attr('disabled','disabled');
                            let index = 2;
                            let relation = $('#inactiveRelation'+index).val();
                            if( relation != '')
                            {
                                if(relation != 3)
                                {
                                    let data= new FormData();
                                    data.append('relation',$('#inactiveRelation'+index).val());
                                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                    data.append('isUploaded',$('#isUploadedInactive'+index).val());
                                    data.append('id',<?php echo $id; ?>);
                                    data.append('index',index);
                                    data.append('file',response);
                                    $.ajax({
                                      url:'<?php echo base_url(); ?>user/uploadNewVehicleFaceMatchPhoto',
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
                                              })
                                          }else{
                                              toastr.error(parse.message);
                                              $('.crop_image2').removeAttr('disabled');
                                          }
                                      }
                                    })   
                                }else{
                                    if($('#otherInactiveRelation'+index).val() != '')
                                    {
                                        let data= new FormData();
                                        data.append('relation',$('#inactiveRelation'+index).val());
                                        data.append('otherrelation',$('#otherInactiveRelation'+index).val());
                                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                        data.append('id',<?php echo $id; ?>);
                                        data.append('isUploaded',$('#isUploadedInactive'+index).val());
                                        data.append('index',index);
                                        data.append('file',response);
                                        $.ajax({
                                          url:'<?php echo base_url(); ?>user/uploadNewVehicleFaceMatchPhoto',
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
                                                  })
                                              }else{
                                                  toastr.error(parse.message);
                                                  $('.crop_image2').removeAttr('disabled');
                                              }
                                          }
                                        })   
                                    }else{
                                        toastr.error('Please Enter Other Relation Name');
                                        $('.crop_image2').removeAttr('disabled');
                                    }
                                }
                            }else{
                                toastr.error('Please Select Relation');
                                $('.crop_image2').removeAttr('disabled');
                            }
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
      
      $('.crop_image3').click(function(event){
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
                        $image_crop3.croppie('result', {
                          type: 'canvas',
                          size: 'viewport',
                          format:'jpeg',
                          quality: parseFloat(qualityVal)
                        }).then(function(response){
                            $('.crop_image3').attr('disabled','disabled');
                            let index = 3;
                            let relation = $('#inactiveRelation'+index).val();
                            if( relation != '')
                            {
                                if(relation != 3)
                                {
                                    let data= new FormData();
                                    data.append('relation',$('#inactiveRelation'+index).val());
                                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                    data.append('isUploaded',$('#isUploadedInactive'+index).val());
                                    data.append('id',<?php echo $id; ?>);
                                    data.append('index',index);
                                    data.append('file',response);
                                    $.ajax({
                                      url:'<?php echo base_url(); ?>user/uploadNewVehicleFaceMatchPhoto',
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
                                              })
                                          }else{
                                              toastr.error(parse.message);
                                              $('.crop_image3').removeAttr('disabled');
                                          }
                                      }
                                    })   
                                }else{
                                    if($('#otherInactiveRelation'+index).val() != '')
                                    {
                                        let data= new FormData();
                                        data.append('relation',$('#inactiveRelation'+index).val());
                                        data.append('otherrelation',$('#otherInactiveRelation'+index).val());
                                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                        data.append('id',<?php echo $id; ?>);
                                        data.append('isUploaded',$('#isUploadedInactive'+index).val());
                                        data.append('index',index);
                                        data.append('file',response);
                                        $.ajax({
                                          url:'<?php echo base_url(); ?>user/uploadNewVehicleFaceMatchPhoto',
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
                                                  })
                                              }else{
                                                  toastr.error(parse.message);
                                                  $('.crop_image3').removeAttr('disabled');
                                              }
                                          }
                                        })   
                                    }else{
                                        toastr.error('Please Enter Other Relation Name');
                                        $('.crop_image3').removeAttr('disabled');
                                    }
                                }
                            }else{
                                toastr.error('Please Select Relation');
                                $('.crop_image3').removeAttr('disabled');
                            }
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
    
    function uploadFaceMatchPhoto(ele,index)
    {
        if($('#vehicleInactivePhoto'+index).val() == '')
        {
            toastr.error('Please Select Photo to continue');
        }else{
            let relation = $('#inactiveRelation'+index).val();
            if( relation != '')
            {
                if(relation != 3)
                {
                    var reader = new FileReader();
                    reader.onload = function (event) {
                        if(index == 0)
                        {
                            $image_crop0.croppie('bind', {
                                url: event.target.result
                            }).then(function(){
                                console.log('jQuery bind complete');
                            });   
                        }else if(index == 1)
                        {
                            $image_crop1.croppie('bind', {
                                url: event.target.result
                            }).then(function(){
                                console.log('jQuery bind complete');
                            });   
                        }else if(index == 2)
                        {
                            $image_crop2.croppie('bind', {
                                url: event.target.result
                            }).then(function(){
                                console.log('jQuery bind complete');
                            });   
                        }else{
                            $image_crop3.croppie('bind', {
                                url: event.target.result
                            }).then(function(){
                                console.log('jQuery bind complete');
                            });   
                        }
                    }
                    reader.readAsDataURL($('#vehicleInactivePhoto'+index)[0].files[0]);
                    $('#image_demo'+index+' img').css('max-width','100%!important');
                    $('#uploadimageModal'+index).modal('show');
                }else{
                    if($('#otherInactiveRelation'+index).val() != '')
                    {
                        var reader = new FileReader();
                        reader.onload = function (event) {
                            if(index == 0)
                            {
                                $image_crop0.croppie('bind', {
                                    url: event.target.result
                                }).then(function(){
                                    console.log('jQuery bind complete');
                                });   
                            }else if(index == 1)
                            {
                                $image_crop1.croppie('bind', {
                                    url: event.target.result
                                }).then(function(){
                                    console.log('jQuery bind complete');
                                });   
                            }else if(index == 2)
                            {
                                $image_crop2.croppie('bind', {
                                    url: event.target.result
                                }).then(function(){
                                    console.log('jQuery bind complete');
                                });   
                            }else{
                                $image_crop3.croppie('bind', {
                                    url: event.target.result
                                }).then(function(){
                                    console.log('jQuery bind complete');
                                });   
                            }
                        }
                        reader.readAsDataURL($('#vehicleInactivePhoto'+index)[0].files[0]);
                        $('#image_demo'+index+' img').css('max-width','100%!important');
                        $('#uploadimageModal'+index).modal('show');   
                    }else{
                        toastr.error('Please Enter Other Relation Name');
                        $(ele).removeAttr('disabled');
                    }
                }
            }else{
                toastr.error('Please Select Relation');
                $(ele).removeAttr('disabled');
            }
        }
    }
    
    function deleteFaceMatchPhoto(url,index)
    {
        Swal.fire({
            title: '<strong class="text-dark" style="font-size:20px;">Delete Face Match Detail</strong>',
            icon: 'info',
            html:'<div class="form-group mb-2">Are you sure you want to delete this detail?</div>',
            allowOutsideClick:true,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                    $.ajax({
                    url:'<?php echo base_url(); ?>user/deleteNewVehicleFaceMatchPhoto',
                    data:{url:url,index:index,'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('Details Deleted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },3000);
                    }
                })
            }
        })
    }
    
    function showInactiveRelationAccordingly(val,index)
    {
        if(val == '')
        {
            $('#inactiverel'+index+'Div').removeClass('d-none');
            $('#otherrelationinactivediv'+index).addClass('d-none');
            $('#otherInactiveRelation'+index).val('');
        }else{
            if(val == 3)
            {
                $('#inactiverel'+index+'Div').addClass('d-none');
                $('#otherrelationinactivediv'+index).removeClass('d-none');
                $('#otherInactiveRelation'+index).val('');
            }else{
                $('#inactiverel'+index+'Div').removeClass('d-none');
                $('#otherrelationinactivediv'+index).addClass('d-none');
                $('#otherInactiveRelation'+index).val('');
            }
        }
    }
    
    function goToDashboard(ele)
    {
        $(ele).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>user";
    }
    
    $('#step5Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn5Next').attr('disabled','disabled');
        let data=new FormData(this);
        let visibility = $('input[name="visibility"]:checked').val();
        data.append('visibility',visibility);
        data.append('id',<?php echo $id; ?>);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/updateVehicleVisibility',
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                toastr.success('Preferences Updated Successfully');
                setTimeout(function()
                {
                    location.reload();
                },3000);
            }
        })   
    })
    
    $('#btn1Skip').click(function()
    {
        location.href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=2";   
    })
    
    $('#btn1Save').click(function()
    {
        if($('#imagecount').val() > 0)
        {
            location.href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=2";   
        }else{
            toastr.error('Please add one photo to continue');
        }
    })
    
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
                    data.append('id',<?php echo $id; ?>);
                    data.append('relation',$('#wellrel'+count).val());
                    data.append('otp',$('#otp'+count).val());
                    data.append('mobile',$('#vehicleMob'+count).val());
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    data.append('count',count);
                    $.ajax({
                      url:'<?php echo base_url(); ?>user/verifyVehicleMobileOtp',
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
                        data.append('relation',$('#wellrel'+count).val());
                        data.append('id',<?php echo $id; ?>);
                        data.append('otherrelation',$('#otherrelation'+count).val());
                        data.append('otp',$('#otp'+count).val());
                        data.append('mobile',$('#vehicleMob'+count).val());
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        data.append('count',count);
                        $.ajax({
                          url:'<?php echo base_url(); ?>user/verifyVehicleMobileOtp',
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
                                  })
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
                $(ele).removeAttr('disabled');
            }
        }else{
            toastr.error('Please Enter Valid OTP');
            $(ele).removeAttr('disabled');
        }
    }
    
    function clearOtherDiv(index)
    {
        $('#rel'+index+'Div').removeClass('d-none');
        $('#otherrelationdiv'+index).addClass('d-none');
        $('#otherrelation'+index).val('');
        $('#wellrel'+index).val('').trigger('change');
    }
    
    function clearInactiveOtherDiv(index)
    {
        $('#inactiverel'+index+'Div').removeClass('d-none');
        $('#otherrelationinactivediv'+index).addClass('d-none');
        $('#otherInactiveRelation'+index).val('');
        $('#inactiveRelation'+index).val('').trigger('change');
    }
    
    function showAccordingly(val,index)
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
    
    function resendVehicleMobileOtp(ele,index)
    {
        let mob = $('#vehicleMob'+index).val();
        $(ele).attr('disabled','disabled');
        let data= new FormData();
        data.append('mobile',mob);
        data.append('id',<?php echo $id; ?>);
        data.append('count',index);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendVehicleMobileOtp',
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
                        data.append('id',<?php echo $id; ?>);
                        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                        $.ajax({
                            url:'<?php echo base_url(); ?>user/sendVehicleMobileOtp',
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
                                        '<div class="form-group mb-3"><input type="number" class="form-control" id="otp'+count+'"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyVehicleMobileOtp(this,'+count+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendVehicleMobileOtp(this,'+count+')"> Resend OTP</button></div>',
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
                                    $('#sendOtp'+count).removeAttr('disabled');
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
                            data.append('id',<?php echo $id; ?>);
                            data.append('count',count);
                            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                            $.ajax({
                                url:'<?php echo base_url(); ?>user/sendVehicleMobileOtp',
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
                                            '<div class="form-group mb-3"><input type="number" class="form-control" id="otp'+count+'"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyVehicleMobileOtp(this,'+count+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendVehicleMobileOtp(this,'+count+')"> Resend OTP</button></div>',
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
                    toastr.error('Please Select Relation');
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
    
    function uploadDoc(ele,index)
    {
        if($('#documentFile'+index).val() == '')
        {
            toastr.error('Please Select Document to continue');
        }else{
            $(ele).attr('disabled','disabled');
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('documentName',$('#documentName'+index).val());
            data.append('isUploaded',$('#isDocUploaded'+index).val());
            data.append('id',<?php echo $id; ?>);
            data.append('index',index);
            let file = $('#documentFile'+index)[0].files[0];
            data.append('file',file);
            $.ajax({
                url:'<?php echo base_url(); ?>user/uploadNewVehicleDoc',
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
    
    function uploadLatestPhoto(ele,index)
    {
        if($('#vehiclePhoto'+index).val() == '')
        {
            toastr.error('Please Select Photo to continue');
        }else{
            $(ele).attr('disabled','disabled');
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('isUploaded',$('#isUploaded'+index).val());
            data.append('index',index);
            data.append('id',<?php echo $id; ?>);
            let file = $('#vehiclePhoto'+index)[0].files[0];
            data.append('file',file);
            $.ajax({
                url:'<?php echo base_url(); ?>user/uploadNewVehiclePhoto',
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
    
    $('#btn2Next').click(function()
    {
        if($('#doccount').val() > 0)
        {
            location.href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=3";
        }else{
            toastr.error('Please upload the documents of the vehicle');
        }
    })
    
    $('#btn2Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=1";
    })
    
    function resendDeleteContactOtp(ele,index)
    {
        $(ele).attr('disabled','disabled');
        let otpdata = new FormData();
        otpdata.append('mobile',$('#vehicleMob'+index).val());
        otpdata.append('id',<?php echo $id; ?>);
        otpdata.append('index',index);
        otpdata.append('setting',1);
        otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendDeleteVehicleContactOtp',
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
            otpdata.append('id',<?php echo $id; ?>);
            otpdata.append('setting',1);
            otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/deleteVehicleContact',
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
                    otpdata.append('id',<?php echo $id; ?>);
                    otpdata.append('setting',setting);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/sendDeleteVehicleContactOtp',
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
                                '<div class="form-group mb-3"><input type="number" class="form-control" id="deleteOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteContactOtp(this,'+index+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendDeleteContactOtp(this,'+index+')"> Resend OTP</button></div>',
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
                    otpdata.append('id',<?php echo $id; ?>);
                    otpdata.append('setting',setting);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/deleteVehicleContact',
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
    
    $('#btn2Skip').click(function()
    {
        location.href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=3";
    })
    
    $('#btn3Back').click(function()
    {
        location.href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=2";
    })
    
    $('#btn3Skip').click(function()
    {
        location.href="<?php echo base_url(); ?>user/editVehicle/<?php echo $id; ?>?pn=4";
    })
    
    function deleteDoc(url,index)
    {
        Swal.fire({
            title: '<strong class="text-dark" style="font-size:20px;">Delete Document</strong>',
            icon: 'info',
            html:'<div class="form-group mb-2">Are you sure you want to delete this document?</div>',
            allowOutsideClick:true,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
            showConfirmButton:true
        }).then((result) => {
            if (result.isConfirmed) {
                    $.ajax({
                    url:'<?php echo base_url(); ?>user/deleteNewVehicleDoc',
                    data:{id:<?php echo $id; ?>,url:url,index:index,'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('Document Deleted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },3000);
                    }
                })
            }
        })
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
            $('#visibility2label').addClass('activeLabel');
            $('#visibility1label').removeClass('activeLabel');
        }
    })
    
    function deletePhoto(url,index)
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
                    url:'<?php echo base_url(); ?>user/deleteNewVehiclePhoto',
                    data:{id:<?php echo $id; ?>,url:url,index:index,'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
                    type:'post',
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