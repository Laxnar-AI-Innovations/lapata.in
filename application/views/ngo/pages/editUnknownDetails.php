<style>
    #the-count {
      float: right;
      padding: 0.1rem 0 0 0;
      font-size: 0.875rem;
    }
    .select2-results__option{
        text-transform:uppercase;
    }
    select{
        appearance:auto!important;
    }
</style>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Edit Unknown Person</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>ngo">Home</a></li>
          <li class="breadcrumb-item active">Edit Unknown Person</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container-fluid px-0">
        <section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 1){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0">Edit Unknown Person Details</h5>
                                </div>
                                <div>
                                    <!--Success message-->
                                    <?php 
                                        $add_succ=$this->session->flashdata('success');
                                        if($add_succ){
                                    ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong><?php echo $add_succ;?></strong> 
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        $del_succ=$this->session->flashdata('error');
                                        if($del_succ){
                                    ?>
                                    <div class="invalid-feedback d-block"><?php echo $del_succ;?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <form id="loginForm" action="<?php echo base_url(); ?>ngo/with" method="post" class="row g-3 needs-validation1"  enctype="multipart/form-data">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <input type="hidden" name="id" value="<?= $data[0]['id']; ?>">
                            <input type="hidden" name="applicationNo" value="<?= $data[0]['Application_no']; ?>">
                            <div class="card">
                                <div class="card-body mt-0">
                                    <div class="row align-items-center ">
                                        <div class="form-floating my-3 col-12 col-md-3">
                                          <input type="text" class="form-control" value="<?php echo $data[0]['person_name']; ?>" <?php echo ($data[0]['person_name'] != '' ? 'readonly' : ''); ?> name="person_name"   id="person_name"  placeholder="Aadhar Number">
                                          <label for="pkgdur" class="ms-2">Person Name</label>
                                        </div>
                                         <div class="form-floating my-3 col-12 col-md-3">
                                            <select class="form-control" name="Gender" disabled id="Gender" required>
                                                <option value="" <?php echo ($data[0]['Gender'] == '' ? 'selected' : ''); ?>>Select Gender *</option>
                                                <option value="boy" <?php echo ($data[0]['Gender'] == 'boy' ? 'selected' : ''); ?>>Male </option>
                                                <option value="girl" <?php echo ($data[0]['Gender'] == 'girl' ? 'selected' : ''); ?>>Female </option>
                                                <option value="Other" <?php echo ($data[0]['Gender'] == 'other' ? 'selected' : ''); ?>>Other </option>
                                                
                                            </select>
                                            <label for="Gender" class="ms-3">Gender *</label>     
                                            <div class="invalid-feedback">Please Select Gender.</div>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <select class="form-control" name="Age" id="Age" required>
                                                <option value="">Select Age Band *</option>
                                                <?php 
                                                    $state = $this->db->query('SELECT * FROM categories as c1, subcategories as s1 WHERE categoryId=4 AND c1.Id=4')->result_array();
                                                    if(count($state)>0)
                                                    {
                                                        foreach($state as $row)
                                                        {
                                                        ?>
                
                                                            <option value="<?php echo $row['hindiSubCategoryName'] ?>" <?php echo ($data[0]['Age'] == $row['hindiSubCategoryName'] ? 'selected' : ''); ?>><?php echo $row['hindiSubCategoryName']?></option>
                                                        <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                        ?>
                
                                                        <option value="no">No Found Religion</option>
                                                    <?php
                                                    }
                                                ?>
                                            </select>
                                            <label for="Age"class="ms-3">Age Band *</label>          
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <select class="form-control" name="Height" id="Height" >
                                                <option value="">Select Height </option>
                                                <?php 
                                                    $state = $this->db->query('SELECT * FROM categories as c1, subcategories as s1 WHERE categoryId=2 AND c1.Id=2')->result_array();
                                                    if(count($state)>0)
                                                    {
                                                        foreach($state as $row)
                                                        {
                                                        ?>
                    
                                                            <option value="<?php echo $row['hindiSubCategoryName'] ?>" <?php echo ($data[0]['Height'] == $row['hindiSubCategoryName'] ? 'selected' : ''); ?>><?php echo $row['hindiSubCategoryName']?></option>
                                                        <?php
                                                        }
                                                        
                                                    }
                                                    else
                                                    {
                                                        ?>
                    
                                                        <option value="no">No data</option>
                                                    <?php
                                                    }
                                                ?>
                                            </select>
                                            <label for="pkgdurtype" class="ms-3">Height </label>          
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <select class="form-control" name="Religion" id="Religion" >
                                                <option value="">Select Religion </option>
                                                <?php 
                                                    $state = $this->db->query('select * from religions')->result_array();
                                                    if(count($state)>0)
                                                    {
                                                        foreach($state as $row)
                                                        {
                                                ?>
                                                <option value="<?php echo $row['religionName'] ?>" <?php echo ($data[0]['Religion'] == $row['hindiSubCategoryName'] ? 'selected' : ''); ?>><?php echo $row['religionName']?></option>
                                                <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                ?>
                                                <option value="no">No Found Religion</option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                            <label for="pkgdur" class="ms-3">Religion</label>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <select class="form-control" name="Mental" id="Mental" >
                                                <option value="" <?php echo ($data[0]['Mental_status'] == '' ? 'selected' : ''); ?>>Select Mental Status </option>
                                                <option class="text-success" <?php echo ($data[0]['Mental_status'] == 'Good' ? 'selected' : ''); ?> value="Good">Normal </option>
                                                <option class="text-danger" <?php echo ($data[0]['Mental_status'] == 'Not Good' ? 'selected' : ''); ?> value="Not Good">Abnormal </option>
                                            </select>
                                            <label for="Mental" class="ms-3">Mental Status </label>     
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 w-100">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0">Photo for facematch & message </h5>
                                </div>
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-3 col-md-4 my-3 col-10 text-center">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div style="position:relative;text-align:center;">
                                                        <img class="w-100" id="profile-pic" src="<?php echo base_url(); ?><?php echo ($data[0]['Photo'] == '' ? '' : $data[0]['Photo']); ?>" style="height: 152px!important;border: 1px solid;object-fit:fill;" alt="">
                                                        <div style="position:absolute;z-index:2;box-shadow:0px 1px 1px 2px;background:black;color:white;top:0px;right:0px;padding:0.4rem 0.7rem;cursor:pointer;" class="d-none" id="crossIcon">
                                                            <i class="fa fa-times"></i>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-12 col-md-5">
                                            <textarea  maxlength="100"  onKeyPress="showOtherButtonAccordingly(this,this.value)" onKeyUp="showOtherButtonAccordingly(this,this.value)" class="form-control" rows="50" style="height: 96px;"  id="Message" name="Message" placeholder="Enter Message"><?php echo ($data[0]['Message'] == '' ? '' : $data[0]['Message']); ?></textarea>
                                            <div id="the-count">
                                                <span id="current"><?php echo strlen($data[0]['Message']); ?></span>
                                                <span id="maximum">/ 100</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 w-100">
                                 <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0">Add Identification Details</h5>
                                </div>
                                <div class="card-body mt-0">
                                    <div class="row align-items-center ">
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <input type="number" class="form-control" value="<?php echo ($data[0]['aadharNumber'] == '' ? '' : $data[0]['aadharNumber']); ?>" name="aadharNumber" onkeydown="limit(this,'aadhar');" onkeyup="limit(this,'aadhar');" id="aadharNumber"  placeholder="Aadhar Number">
                                            <label for="pkgdur" class="ms-3"> Aadhar No. </label>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <input type="text" class="form-control" name="PAN"   id="PAN"  placeholder="Aadhar Number" value="<?php echo ($data[0]['PAN'] == '' ? '' : $data[0]['PAN']); ?>">
                                            <label for="PAN" class="ms-3">PAN No.</label>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <input type="text" class="form-control" name="DL_no"   id="DL_no"  placeholder="Aadhar Number" value="<?php echo ($data[0]['DL_no'] == '' ? '' : $data[0]['DL_no']); ?>">
                                            <label for="DL_no" class="ms-3">DL No.</label>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <input type="text" class="form-control" name="voter_id"   id="voter_id"  placeholder="Aadhar Number" value="<?php echo ($data[0]['voter_id'] == '' ? '' : $data[0]['voter_id']); ?>">
                                            <label for="voter_id" class="ms-3">Voter ID No.</label>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <input type="text" class="form-control" name="vehicle_no"   id="vehicle_no"  placeholder="Aadhar Number" value="<?php echo ($data[0]['vehicle_no'] == '' ? '' : $data[0]['vehicle_no']); ?>">
                                            <label for="vehicle_no" class="ms-3">Vehicle No.</label>
                                        </div>
                                        <!--<div class="form-floating my-3 col-12 col-md-3">-->
                                        <!--    <input type="text" class="form-control" name="HUID"   id="HUID"  placeholder="Aadhar Number">-->
                                        <!--    <label for="pkgdur" class="ms-3">Gold HUID No.</label>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 w-100">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0">Add Gold Jewellery HUID Number</h5>
                                </div>
                                <div class="card-body mt-0 pb-0" id="goldDetail">
                                    <input type="hidden" id="goldCount" name="goldCount" value="<?php echo count($gold); ?>">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 text-end my-3">
                                            <button type="button" class="btn btn-style-red disabled-on-loading" style="border-radius:0!important;background:black!important;" id="addMore" onclick="addMoreGold()"> Add More</button>
                                        </div>
                                    </div>
                                    <?php 
                                        if(count($gold) > 0)
                                        {
                                            $i=0;
                                            foreach($gold as $k=>$v)
                                            {
                                                $i++;
                                    ?>
                                    <div class="row align-items-center justify-content-start justify-content-md-center"><div class="col-lg-auto col-10 col-md-auto col-sm-12 mt-2 form-floating">
                                        <select class="form-control" name="goldType<?= $i; ?>" id="goldType<?= $i; ?>">
                                            <option value="">Select Gold Type</option>
                                            <?php 
                                                $getGoldType = $this->db->query('select * from goldType')->result_array();
                                                foreach($getGoldType as $k1=>$v1)
                                                {
                                            ?>
                                            <option class="<?= $v1['color']; ?>" <?php echo ($v['goldType'] == $v1['Id'] ? 'selected' : ''); ?> value="<?= $v1['Id']; ?>"><?= $v1['Name']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="goldType<?= $i; ?>" class="ms-3">Select Gold Type</label>
                                    </div>
                                    <input type="hidden" name="oldId<?= $i; ?>" id="oldId<?= $i; ?>" value="<?= $v['Id']; ?>">
                                    <div class="col-lg-auto col-md-auto col-sm-12 col-10 my-3 form-floating">
                                        <input type="text" class="form-control text-uppercase" value="<?= $v['goldHUID']; ?>" placeholder="GOLD HUID No." maxlength="6" name="goldHUIDNumber<?= $i; ?>" id="goldHUIDNumber<?= $i; ?>">
                                        <label for="goldHUIDNumber<?= $i; ?>" class="ms-2">Enter Gold HUID Number</div>
                                        <div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3">
                                            <button type="button" onclick="removeGold(this,'old',<?= $i; ?>)" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;"> <i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <?php } } ?>
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
                                                    <button type="button" class="btn btn-success crop_image disabled-on-loading btn-style-green"> Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 w-100">
                                 <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0">Address Of Unknown Person</h5>
                                </div>
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="mb-3 col-12 col-md-4">
                                            <label class="mb-2 d-block">State </label>
                                            <select class="form-control select2" name="state" id="state" onchange="getdistrict(this.value);" >
                                            <option value="">Select State </option>
                                            <?php 
                                                $state = $this->db->query('select * from states')->result_array();
                                                if(count($state)>0)
                                                {
                                                    foreach($state as $row)
                                                    {
                                                    ?>
                
                                                        <option value="<?php echo $row['name'] ?>" <?php echo ($data[0]['state'] == $row['name'] ? 'selected' : ''); ?>><?php echo $row['name']?></option>
                                                    <?php
                                                    }
                                                    
                                                }
                                                else
                                                {
                                                    ?>
                
                                                    <option value="no">No Found State</option>
                                                <?php
                                                }
                                            ?>
                                             
                                            </select>
                                            <div class="invalid-feedback">Please Select State *.</div>
                                        </div>    
                                        <div class="mb-3 col-12 col-md-4">
                                            <label class="mb-2 d-block">District </label>                          
                                            <select class="form-control select2" name="district" id="district" onchange="getcity(this.value);" >
                                                <?php 
                                                    if($data[0]['state'] != '')
                                                    {
                                                        $snm=$data[0]['state'];
                                                        $district=$this->db->query("select * from district where st_name='$snm'")->result_array();
                                                        $str='<option value="">Select District (optional)</option>';
                                                        if(count($district)<=0)
                                                        {
                                                            $str='<option value="nod">No District found</option>';
                                                        }
                                                        foreach($district as $d)
                                                        {
                                                            $isSelected = '';
                                                            if(strtoupper($d['d_name']) == strtoupper($data[0]['district']))
                                                            {
                                                                $isSelected = 'selected';
                                                            }
                                                            $str.='<option value="'.$d['d_name'].'" '.$isSelected.'>'. $d['d_name'].'</option>';
                                                        }
                                                        echo $str;
                                                ?>
                                                <?php }else{ ?>
                                                <option value="">Select District </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-12 col-md-4">
                                            <label class="mb-2 d-block">City </label>                            
                                            <select class="form-control select2" name="city" id="city" >
                                                <?php 
                                                    if($data[0]['city'] != '')
                                                    {
                                                        $sid=$data[0]['state'];
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
                                                            if(strtoupper($d['city']) == strtoupper($data[0]['city']))
                                                            {
                                                                $isSelected = 'selected';
                                                            }
                                                            $str.='<option value="'.$d['city'].'"'.$isSelected.'>'. $d['city'].'</option>';
                                                        }
                                                        echo $str;
                                                ?>
                                                <?php }else{ ?>
                                                    <option value="">Select City </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-3 my-3 col-12 col-md-6">
                                            <button class="btn btn-primary w-100 btn-style-green disabled-on-loading" name="btnwith" id="btn1Submit" type="button" style="background-color:  #05106c !important;"> Save & Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 2){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0"><span class="text-danger fs-4">Upload- Unknown Person</span> Photos</h5>
                                </div>
                                <div>
                                    <!--Success message-->
                                    <?php 
                                        $add_succ=$this->session->flashdata('success');
                                        if($add_succ){
                                    ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong><?php echo $add_succ;?></strong> 
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        $del_succ=$this->session->flashdata('error');
                                        if($del_succ){
                                    ?>
                                    <div class="invalid-feedback d-block"><?php echo $del_succ;?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <form id="step2Form" method="post" class="row g-1 needs-validation1 w-100"  enctype="multipart/form-data">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <?php
                                $getLatestPhotos = $this->db->query('select * from unknownphotos where unknownId='.$data[0]['id'])->result_array();
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
                                                    <h4 class="modal-title text-center"><?php echo $j; ?>- Upload Unknown Person Photos</h4>
                                                </div>
                                            </div>
                                            <div class="row mt-0">
                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                    <div class="row mt-3 mx-0" id="reUploadDiv<?php echo $i; ?>">
                                                        <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                            <label class="form-label">Upload image</label>
                                                            <input type="file" class="form-control" accept="image/*" id="latestFile<?php echo $i; ?>">
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
                                            <h5 class="modal-title"><?php echo $j; ?>- Uploaded Unknown Person's Photo</h5>
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
                                                        $split = explode('upload/unknown/',$getLatestPhotos[$i]['photourl']);
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
                                                    <input type="file" class="form-control" accept="image/*" id="latestFile<?php echo $i; ?>">
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
                                                    <h5 class="modal-title"><?php echo $j; ?>- Uploaded Unknown Person's Photo</h5>
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
                                                                $split = explode('upload/unknown/',$getLatestPhotos[$i]['photourl']);
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
                                                            <input type="file" class="form-control" accept="image/*" id="latestFile<?php echo $i; ?>">
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
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-start">
                                        <div class="col-lg-auto col-md-auto my-3 col-12">
                                            <button class="btn btn-dark w-100 btn-style-grey disabled-on-loading" id="btn2Back" type="button"> Back</button>
                                        </div>
                                        <div class="col-lg-auto col-md-auto my-3 col-12">
                                            <button class="btn btn-primary w-100 btn-style-five disabled-on-loading" id="btn2Next" type="button"> Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="step3" class="<?php if($pn != 3){ echo "d-none"; } ?>">
                        <?php 
                            $getPersonDetail = $this->db->query('select * from unknown_person where id='.$data[0]['id'])->result_array();
                        ?>
                        <?php 
                            $getSettings = $this->db->query('select * from settings where name="deleteOTP"')->result_array();
                            $getRelations = $this->db->query('select * from relations')->result_array();
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0 pb-0">Add/update unknown person contact number</h5>
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
                            if($getPersonDetail[0]['well'.$i] != NULL)
                            {
                        ?>
                        <div class="card">
                            <div class="card-body py-3">
                                <div class="row my-3 align-items-end">
                                    <div class="col-lg-auto mb-3 col-sm-12 col-md-auto">
                                        <label for="othermob<?php echo $i; ?>">Mobile Number</label>
                                        <input type="number" max="10" size="10" value="<?php echo (($getPersonDetail[0]['well'.$i] != NULL) ? $getPersonDetail[0]['well'.$i] : '') ?>" <?php if($getPersonDetail[0]['well'.$i] != NULL) { echo "disabled"; } ?> class="form-control mt-2" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="othermob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="othermob<?php echo $i; ?>" required>  
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
                                <div class="row align-items-center" id="defaultContactDiv<?= $i; ?>">
                                    <div class="form-floating mb-3 col-sm-12 col-md-4 col-lg-3">
                                        <?php 
                                            $profileDetail = $this->db->query('select * from ngo where Id='.$_SESSION['ngo_id'])->result_array();
                                        ?>
                                        <input type="number" readonly class="form-control" value="<?php echo ($profileDetail[0]['alternate_mobile'.$i] != NULL) ? $profileDetail[0]['alternate_mobile'.$i] : '' ?>" id="otherMob<?= $i; ?>" name="otherMob<?= $i; ?>" placeholder="Enter Mobile Number">
                                        <label for="otherMob<?= $i; ?>" class="ms-2">Enter Mobile Number</label>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-auto text-center">
                                        <input type="checkbox" class="form-check-input" id="editContact<?= $i; ?>" name="editContact<?= $i; ?>" onclick="editContact(<?= $i; ?>,this)">
                                        <label for="editContact<?= $i; ?>" class="form-check-label"><b>Want to <?php echo ($profileDetail[0]['alternate_mobile'.$i] != NULL) ? 'change ' : 'add ' ?>contact?</b></label>
                                    </div>
                                </div>
                                <div class="row align-items-end" style="display:none;" id="editContactDiv<?php echo $i; ?>">
                                    <div class="col-lg-auto mb-2 col-sm-12 col-md-auto">
                                        <label for="othermob<?php echo $i; ?>">Mobile Number</label>
                                        <input type="number" max="10" size="10" value="<?php echo (($getPersonDetail[0]['well'.$i] != NULL) ? $getPersonDetail[0]['well'.$i] : '') ?>" <?php if($getPersonDetail[0]['wellrel'.$i] != NULL) { echo "disabled"; } ?> class="form-control" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,<?php echo $i; ?>)" id="othermob<?php echo $i; ?>" placeholder="Enter Mobile Number" name="othermob<?php echo $i; ?>" required>  
                                    </div>
                                    <div class="col-lg-auto text-center col-md-auto mb-2 <?php if($getPersonDetail[0]['wellrel'.$i] != NULL) { echo "d-none"; } ?>" id="sendOtpDiv<?php echo $i; ?>">
                                        <button type="button" class="w-100 btn btn-info btn-style-grey disabled-on-loading disabled" id="btnOtp<?php echo $i; ?>" onclick="sendOtp(<?php echo $i; ?>)"> Send OTP</button>
                                    </div>  
                                    <div class="col-lg-auto text-center col-md-auto mb-2">
                                        <button type="button" class="btn btn-danger disabled-on-loading" onclick="removeContact(<?= $i; ?>,this)" style="background:white!important;color:red!important;"> <i class="fa fa-times"></i></button>
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
                                        <button type="button" id="btn3Back" class="btn btn-dark disabled-on-loading w-100 btn-style-green" style="background:black!important;"> Back</button>
                                    </div>
                                    <div class="col-sm-12 col-md-auto col-lg-auto mt-1 mb-1">
                                        <button type="button" id="btn3Dashboard" class="btn btn-dark disabled-on-loading w-100 btn-style-green"> Final Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step4" class="<?php if($pn != 4){ echo "d-none"; } ?>">
                        <?php 
                            $getPersonDetail = $this->db->query('select * from unknown_person where id='.(isset($_SESSION['unknownId']) ? $_SESSION['unknownId'] : 0))->result_array();
                            if(count($getPersonDetail) > 0)
                            {
                        ?>
                        <div class="card">
                            <div class="card-body py-3">
                                <div class="px-0 col-lg-10 col-md-12 col-sm-12 d-flex flex-column mx-lg-auto">
                                    <div class="row px-5 align-items-center">
                                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                            <h6 class="text-success">Complaint registered successfully.</h6>
                                            <h6 class="text-dark"><b>Application Number - <?php echo $getPersonDetail[0]['Application_no']; ?></b></h6>
                                            <h6 clas="text-success"><b class="text-success">Current Status - Active</b></h6>
                                        </div>
                                    </div>
                                    <hr class="border-dark">
                                    <div class="row px-3 align-items-center">
                                        <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                                            <div class="row mt-3">
                                                <div class="col-md-12 text-center border border-2 border-danger p-3">
                                                    <h5 class="text-danger text-uppercase"><b>Unknown</b></h5>
                                                    <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">Age : </span> <?php echo $getPersonDetail[0]['Age']; ?></h6>
                                                </div>
                                            </div>
                                            <?php 
                                                if($getPersonDetail[0]['dateCreated'] != NULL)
                                                {
                                            ?>
                                            <div class="row mt-3">
                                                <div class="col-md-12 text-center border border-2 border-danger p-3">
                                                    <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">Date : </span> <span id="missingfirdate"><?php echo date('d-m-Y',strtotime($getPersonDetail[0]['dateCreated'])); ?></span></h6>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <div class="row mt-3">
                                                <div class="col-md-12 text-center border border-2 border-danger p-3">
                                                    <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">Thana Name : </span> <span id="firthanaaddress"><?php echo (($_SESSION['thanaName'])); ?></span></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner" id="photosspan">
                                                    <?php
                                                        $getLatestUserPhotos = $this->db->query('select * from unknownphotos where unknownId='.$getPersonDetail[0]['id'])->result_array();
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
                                                        <a href="<?php echo base_url(); ?><?php echo $getPersonDetail[0]['Photo']; ?>"  data-lightbox="roadtrip">
                                                            <img src="<?php echo base_url().''.$getPersonDetail[0]['Photo']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
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
                                    <?php 
                                        if($getPersonDetail[0]['person_name'] != '')
                                        {
                                    ?>
                                    <div class="row mt-2 mx-3 align-items-center">
                                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                            <h6 style="color: black;"><b>Person Name : </b></h6>
                                        </div>
                                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                            <h5 class="text-danger"><b id="personname"><?php echo $getPersonDetail[0]['person_name']; ?></b></h5>
                                        </div>
                                    </div>
                                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                    <?php } ?>
                                    <?php 
                                        if($getPersonDetail[0]['aadharNumber'] != '')
                                        {
                                    ?>
                                    <div class="row mt-2 mx-3 align-items-center">
                                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                            <h6 style="color: black;"><b>Aadhar Number : </b></h6>
                                        </div>
                                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                            <h6 style="color: black;" id="aadharNumber"><?php echo substr_replace($getPersonDetail[0]['aadharNumber'],'xxxxxxxx',0,8); ?></h6>
                                        </div>
                                    </div>
                                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                    <?php } ?>
                                    <?php 
                                        if($getPersonDetail[0]['Religion'] != '')
                                        {
                                    ?>
                                    <div class="row mt-2 mx-3 align-items-center">
                                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                            <h6 style="color: black;"><b>Religion : </b></h6>
                                        </div>
                                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                            <h6 style="color: black;" id="religion"><?php echo ($getPersonDetail[0]['religion']); ?></h6>
                                        </div>
                                    </div>
                                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                    <?php } ?>
                                    <div class="row mt-2 mx-3 align-items-center">
                                        <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                                            <h6 style="color: black;"><b>Gender : </b></h6>
                                        </div>
                                        <div class="text-left col-6 col-md-6 col-sm-12 col-lg-6">
                                            <h6 style="color: black;" id="genderspan"><?php echo ($getPersonDetail[0]['Gender'] == 'boy' ? 'Male' : 'Female'); ?></h6>
                                        </div>
                                    </div>
                                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                    <div class="row mt-2 mx-3 align-items-center">
                                        <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                                            <h6 style="color: black;"><b>Age : </b></h6>
                                        </div>
                                        <div class="text-left col-md-6 col-6 col-sm-12 col-lg-6">
                                            <h6 style="color: black;" id="agespan"><?php echo $getPersonDetail[0]['Age']; ?></h6>
                                        </div>
                                    </div>
                                    <?php
                                        if($getPersonDetail[0]['Height'] != '' || $getPersonDetail[0]['Mental_status'] != '' || $getPersonDetail[0]['state'] != '' || $getPersonDetail[0]['district'] != '' || $getPersonDetail[0]['city'] != '' || $getPersonDetail[0]['Message'] != '')
                                        {
                                    ?>
                                        <div class="bg-dark row mt-2 mx-3 p-2">
                                            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                                <label class="text-light"><b>Person's Other Details</b></label>
                                            </div>
                                        </div>
                                        <?php 
                                            if($getPersonDetail[0]['Height'] != '')
                                            {
                                        ?>
                                        <div class="row mt-3 align-items-center">
                                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                                <h6 style="color: black;font-size:0.9em;"><b>Height: </b></h6>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                                <h6 style="color: black;" id="otherdetailspan"><?php echo $getPersonDetail[0]['Height']; ?></h6>
                                            </div>
                                        </div>
                                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                        <?php } ?>
                                        <?php 
                                            if($getPersonDetail[0]['Mental_status'] != '')
                                            {
                                        ?>
                                        <div class="row mt-3 align-items-center">
                                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                                <h6 style="color: black;font-size:0.9em;"><b>Mental Status: </b></h6>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                                <h6 style="color: black;" id="otherdetailspan"><?php echo $getPersonDetail[0]['Mental_status']; ?></h6>
                                            </div>
                                        </div>
                                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                        <?php } ?>
                                        <?php 
                                            if($getPersonDetail[0]['state'] != '')
                                            {
                                        ?>
                                        <div class="row mt-3 align-items-center">
                                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                                <h6 style="color: black;font-size:0.9em;"><b>State: </b></h6>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                                <h6 style="color: black;"><?php echo $getPersonDetail[0]['state']; ?></h6>
                                            </div>
                                        </div>
                                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                        <?php } ?>
                                        <?php 
                                            if($getPersonDetail[0]['district'] != '')
                                            {
                                        ?>
                                        <div class="row mt-3 align-items-center">
                                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                                <h6 style="color: black;font-size:0.9em;"><b>District: </b></h6>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                                <h6 style="color: black;"><?php echo $getPersonDetail[0]['district']; ?></h6>
                                            </div>
                                        </div>
                                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                        <?php } ?>
                                        <?php 
                                            if($getPersonDetail[0]['city'] != '')
                                            {
                                        ?>
                                        <div class="row mt-3 align-items-center">
                                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                                <h6 style="color: black;font-size:0.9em;"><b>City: </b></h6>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                                <h6 style="color: black;"><?php echo $getPersonDetail[0]['city']; ?></h6>
                                            </div>
                                        </div>
                                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                                        <?php } ?>
                                        <?php 
                                            if($getPersonDetail[0]['Message'] != '')
                                            {
                                        ?>
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                                <h6 style="color: black;font-size:0.9em;"><b>Other Detail : </b></h6>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                                <h6 style="color: black;" id="otherdetailspan"><?php echo $getPersonDetail[0]['Message']; ?></h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <?php } ?>
                                    <?php } ?>
                                    <div class="row text-center justify-content-center">
                                        <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                            <button type="button" class="btn-style-five btn btn-primary d-block w-100 disabled-on-loading" onclick="copyLink('<?php echo $getPersonDetail[0]['Application_no']; ?>')"> Generate link <i class="fa fa-copy"></i></button>
                                        </div>
                                        <div class="col-lg-auto mt-3 col-md-auto col-sm-12">
                                            <a href="<?php echo base_url(); ?>ngo/upload_detail" class="btn-style-green btn btn-primary d-block">Add More Unknown Person</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    
    function copyLink(Id)
    {
        navigator.clipboard.writeText('<?php echo base_url(); ?>find-missing-person?id='+Id);
        toastr.success('Link Copied Successfully');
    }
    
    function removeContact(index,ele)
    {
        $('#defaultContactDiv'+index).slideDown('fast');
        $('#editContactDiv'+index).slideUp('fast');
        $('#editContact'+index).prop('checked',false);
    }

    function editContact(index,ele)
    {
        if(ele.checked)
        {
            $('#defaultContactDiv'+index).slideUp('fast');
            $('#editContactDiv'+index).slideDown('fast');
        }else{
            $('#defaultContactDiv'+index).slideDown('fast');
            $('#editContactDiv'+index).slideUp('fast');
        }
    }

    function addContact(ele,index)
    {
        $(ele).attr('disabled','disabled');
        let data = new FormData();
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        data.append('mobile',$('#profilemob'+index).val());
        data.append('index',index);
        $.ajax({
            url:'<?php echo base_url(); ?>police/addUnknownProfileContact',
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
        });
    }

    function openAddButton(index,val)
    {
        if(val == '')
        {
            $('#btnAdd'+index).addClass('disabled').addClass('btn-style-grey').removeClass('btn-style-green');
        }else{
            $('#btnAdd'+index).removeClass('disabled').removeClass('btn-style-grey').addClass('btn-style-green');
        }
    }

    function getContactAccordingly(index,val)
    {
        if(val == '')
        {
            $('#addNewDiv'+index).addClass('d-none');
            $('#addProfileDiv'+index).addClass('d-none');
        }else{
            if(val == '0')
            {
                $('#addNewDiv'+index).removeClass('d-none');
                $('#addProfileDiv'+index).addClass('d-none');
            }else{
                $('#addNewDiv'+index).addClass('d-none');
                $('#addProfileDiv'+index).removeClass('d-none');
            }
        }
    }
    
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
                            console.log(response);
                            $('#facematch').val(response);
                            let profile=document.getElementById('profile-pic');
                            $('#crossIcon').removeClass('d-none'); 
                            $('#uploadimageModal').modal('hide');
                            profile.src=response;
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
        });
    });
    
    function cropPhoto()
    {
        if($('#input-file')[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL($('#input-file')[0].files[0]);
            $('#uploadimageModal').modal('show');   
        }else{
            toastr.error('Please upload photo to continue');
        }
    }
    
    function cancelReUpload(ele,index)
    {
        $('#reUploadBtn'+index).addClass('d-none');
        $('#reUploadDiv'+index).addClass('d-none');   
    }
    
    $('.close1').click(function()
    {
        $('#facematch').val('');
        $('#crossIcon').click();
        $('#uploadimageModal').modal('hide');
    })
    
    function deletePhoto(crimeId,Id)
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
                    url:'<?php echo base_url(); ?>police/deleteUnknownPhoto/'+crimeId,
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
    
    function showReUpload(index)
    {
        $('#reUploadBtn'+index).removeClass('d-none');
        $('#reUploadDiv'+index).removeClass('d-none');
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
            data.append('id','<?php echo $data[0]['id']; ?>');
            data.append('isUploaded',$('#isLatestPhotoUploaded'+index).val());
            let file = $('#latestFile'+index)[0].files[0];
            data.append('file',file);
            $.ajax({
                url:'<?php echo base_url(); ?>police/uploadUnknownPhoto',
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
    
    let goldCount = <?php echo count($gold); ?>;
    <?php 
        if(count($gold) == 0)
        {
    ?>
    addMoreGold();
    <?php } ?>
    
    function addMoreGold()
    {
        if(goldCount < 3)
        {
            $('#addMore').attr('disabled','disabled');
            goldCount++;
            let html = '<div class="row align-items-center justify-content-start justify-content-md-center"><div class="col-lg-auto col-10 col-md-auto col-sm-12 mt-2 form-floating">';
            $.ajax({
                url:'<?php echo base_url(); ?>police/getGoldType',
                type:'get',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.length > 0)
                    {
                        html += '<select class="form-control" name="goldType'+goldCount+'" id="goldType'+goldCount+'"><option value="">Select Gold Type</option>';
                        for(let i=0;i<parse.length;i++)
                        {
                            html += '<option class="'+parse[i].color+'" value="'+parse[i].Id+'">'+parse[i].Name+'</option>';
                        }
                        html += '</select>';
                    }else{
                        html += '<select class="form-control" name="goldType'+goldCount+'" id="goldType'+goldCount+'"><option value="">No Gold Type</option></select>';
                    }
                    html += '<label for="goldType'+goldCount+'" class="ms-3">Select Gold Type</label></div><div class="col-lg-auto col-md-auto col-sm-12 col-10 my-3 form-floating"><input type="text" class="form-control text-uppercase" placeholder="GOLD HUID No." maxlength="6" name="goldHUIDNumber'+goldCount+'" id="goldHUIDNumber'+goldCount+'"><label for="goldHUIDNumber'+goldCount+'" class="ms-2">Enter Gold HUID Number</div>';
                    html += '<div class="col-lg-auto col-md-auto col-sm-12 col-2 my-3"><button type="button" onclick="removeGold(this,`new`,'+goldCount+')" class="btn btn-danger" style="background:white!important;color:red!important;"><i class="fa fa-times"></i></button></div></div>';
                    $('#goldDetail').append(html);
                    $('#goldCount').val(goldCount);
                    $('#addMore').removeAttr('disabled');
                }
            })   
        }else{
            toastr.error('Only 3 Gold Information can be added.');
        }
    }
    
    function removeGold(ele,type,index)
    {
        if(type == 'old')
        {
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Gold</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete gold details?</label></div>',
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
                    otpdata.append('oldId',$('#oldId'+index).val());
                    otpdata.append('index',index);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>police/deleteUnknownGold',
                        data:otpdata,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            toastr.success('Gold Information deleted successfully');
                            setTimeout(function()
                            {
                                location.reload();
                            },2000);
                        }
                    })
                }
            })
        }else{
            $('#goldDetail').children().last().remove();
            goldCount--;
            $('#goldCount').val(goldCount);   
        }
    }
    
    $('#crossIcon').click(function()
    {
        $('#input-file').val('');
        $('#facematch').val('');
        let profile=document.getElementById('profile-pic');
        $('#crossIcon').addClass('d-none');
        profile.src='<?php echo base_url(); ?>assets/images/facematch.webp';
    })
    
    $('#my-button').click(function(){
        $('#input-file').click();
    });
    $('#my-button1').click(function(){
        $('#input-file1').click();
        let profile=document.getElementById('profile-pic1');
        let inputFile=document.getElementById('input-file1');
        inputFile.onchange=function()
        {
            profile.src=URL.createObjectURL(inputFile.files[0]);
            //window.print();
        }
    });
    $('#btnOtp').addClass('btn-style-grey').removeClass('btn-style-five');
    $('#btnOtp').addClass('disabled');
    
    $('#btn1Submit').click(function()
    {
        $(this).attr('disabled','disabled');
        if($('#Gender').val() == '' || $('#Age').val() == '')
        {
            toastr.error('Please Add Gender, Age');
            $(this).removeAttr('disabled');
        }else{
            $('#loginForm')[0].submit();
        }
    })
    
    $('#loginForm1').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn1Submit').attr('disabled','disabled');
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
                    setTimeout(function()
                    {
                      location.reload();
                    },2000);
                }
            }
        });
    })
    function limit(val,type)
    {
        if(type == 'aadhar')
        {
            var max_chars = 11;
            if(val.value.length > max_chars) {
                $('#btnaadharNext').removeClass('btn-style-grey').addClass('btn-style-five');
                $('#btnaadharNext').removeClass('disabled');
                val.value = val.value.substr(0, (max_chars + 1));
            }else{
                $('#btnaadharNext').addClass('btn-style-grey').removeClass('btn-style-five');
                $('#btnaadharNext').addClass('disabled');
            }   
        }else{
            var min_chars = 9;
            if(val.value.length > min_chars) {
                $('#btnOtp').removeClass('btn-style-grey').addClass('btn-style-five');
                $('#btnOtp').removeClass('disabled');
                val.value = val.value.substr(0, (min_chars + 1));
            }else{
                $('#btnOtp').addClass('btn-style-grey').removeClass('btn-style-five');
                $('#btnOtp').addClass('disabled');
            }
        }
    }
    function getdistrict(id)
    {
      $('#district').prop('selectedIndex',0);
      $('#city').prop('selectedIndex',0);
      $('#city').html('<option value="">Select City</option>');
      if(id!="")
      {
        $.ajax({
          url:"<?php echo base_url(); ?>/ngo/getdistrict?id="+id,
            data:id,
            
            type:'get',
            success:function(res)
            {
              $('#district').html(res);
            }
        })
      }
      else
      {
        $('#district').html('<option value="">Select District</option>');
        $('#city').html('<option value="">Select City</option>');
      }
      
    }
    function getcity(id)
    {
      var sid=$('#state').val();
      $('#city').prop('selectedIndex',0);
      if(id!="")
      {
        $.ajax({
          url:"<?php echo base_url(); ?>/ngo/getdistrict?cid="+id+"&sid="+sid,
            
            type:'get',
            success:function(res)
            {
              $('#city').html(res);
            }
        })
      }
      else
      {
        
        $('#city').html('<option value="">Select City</option>');
      }
      
    }
    
    $('#btn3Back').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>ngo/editUnknownDetails?id=<?php echo $data[0]['Application_no'] ?>&pn=2";
    })
    
    function finalSubmitFirst(ele)
    {
        $(ele).attr('disabled','disabled');
        if($('#Gender').val() == '' || $('#Age').val() == '' || $('#facematch').val() == '')
        {
            toastr.error('Please Add Gender, Age and Photo');
            $(ele).removeAttr('disabled');
        }else{
            let data = new FormData($('#loginForm')[0]);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>police/finalUnknownSubmit',
                type:'post',
                processData:false,
                contentType:false,
                data:data,
                cache:false,
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.success('Record Successfully Saved. -'+parse.applicationNumber);
                        setTimeout(function()
                        {
                            location.href="<?php echo base_url(); ?>police/upload_detail?pn=4";  
                        },2000);
                    }else{
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
                    }
                }
            })
        }
    }
    
    $('#btn3Dashboard').click(function(){
        $(this).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>ngo/updateContact?id=<?= $data[0]['id']; ?>',
            type:'get',
            success:function(res)
            {
                toastr.success('Details Uploaded Successfully');
                setTimeout(function()
                {
                    location.href="<?php echo base_url(); ?>ngo/manage_unknown_person";  
                },2000);      
            }
        })
    })
    
    $('#btn2Next').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>ngo/editUnknownDetails?id=<?php echo $data[0]['Application_no'] ?>&pn=3";
    })
    
    $('#btn2Back').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>ngo/editUnknownDetails?id=<?php echo $data[0]['Application_no'] ?>&pn=1";
    })
    
    $('input[type=radio]').change(function() {
        if (this.value == 'with') 
        {
            $('#loginForm').removeClass('d-none');
            $('#loginForm2').addClass('d-none');
        }
        else  
        {
            
            $('#loginForm2').removeClass('d-none');
            $('#loginForm').addClass('d-none');
        }
    });
    
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
    
    function verifyDeleteOtp(ele,index,setting)
    {
        $(ele).attr('disabled','disabled');
        let otp = $('#deleteOtpInput').val();
        if(otp != '')
        {
            let data= new FormData();
            data.append('index',index);
            data.append('id',<?= $data[0]['id']; ?>);
            data.append('otp',otp);
            data.append('setting',setting);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>police/deleteUnknownPersonMobile',
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
        otpdata.append('id',<?= $data[0]['id']; ?>);
        otpdata.append('mobile',$('#othermob'+index).val());
        otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>police/sendDeleteUnknownPersonOtp',
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
                title: '<strong class="text-danger" style="font-size:20px;">Unknown Person Contact</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete unknown person mobile '+index+'?</label></div>',
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
                    otpdata.append('id',<?= $data[0]['id']; ?>);
                    otpdata.append('mobile',$('#othermob'+index).val());
                    otpdata.append('index',index);
                    otpdata.append('setting',setting);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>police/sendDeleteUnknownPersonOtp',
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
                                '<div class="form-group mb-3"><input type="number" class="form-control" id="deleteOtpInput"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyDeleteOtp(this,'+index+','+setting+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendDeleteOtp(this,'+index+')"> Resend OTP</button></div>',
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
                title: '<strong class="text-danger" style="font-size:20px;">Unknown Person Contact</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete unknown person mobile '+index+'?</label></div>',
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
                    otpdata.append('id',<?= $data[0]['id']; ?>);
                    otpdata.append('setting',setting);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>police/deleteUnknownPersonMobile',
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
            $(ele).attr('disabled','disabled');
            let data= new FormData();
            data.append('otp',$('#otp'+index).val());
            data.append('index',index);
            data.append('id',<?= $data[0]['id']; ?>);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('mobile',$('#othermob'+index).val());
            $.ajax({
                url:'<?php echo base_url(); ?>police/verifyUnknownPersonMobileOtp',
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
            toastr.error('Please Enter Valid OTP');
        }   
    }

    function sendOtp(index)
    {
        $('#btnOtp'+index).attr('disabled','disabled');
        if($('#othermob'+index).val() != '')
        {
            let data= new FormData();
            data.append('mobile',$('#othermob'+index).val());
            data.append('id',<?= $data[0]['id']; ?>);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            
            $.ajax({
                url:'<?php echo base_url(); ?>police/sendUnknownPersonMobileOtp',
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
                                '<div class="form-group mb-3"><input type="number" class="form-control" id="otp'+index+'"></div><div class="form-group"><button type="button" class="w-100 btn btn-primary save disabled-on-loading" onclick="verifyOtp(this,'+index+')"> Verify OTP</button></div><div class="form-group mt-3 col-lg-6 col-md-6 col-sm-12" style="margin-left:auto;"><button type="button" class="w-100 btn btn-primary btn-style-five disabled-on-loading" onclick="resendOtp(this,'+index+')"> Resend OTP</button></div>',
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
        data.append('id',<?= $data[0]['id']; ?>);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>police/sendUnknownPersonMobileOtp',
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
    
    </script>
</body>

</html>