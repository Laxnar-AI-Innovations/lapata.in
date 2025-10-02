<style>
    .select2-results__option{
        text-transform:uppercase;
    }
    select{
        appearance:auto!important;
    }
</style>
<main id="main" class="main px-0">
    <div class="pagetitle ms-3">
      <h1>Upload WANTED Person</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>police">Home</a></li>
          <li class="breadcrumb-item active">Upload WANTED Person</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container-fluid px-0">
        <section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center">
            <div class="container-fluid">
                <div class="row justify-content-center g-3">
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 1){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0"><span class="text-danger fs-4">Enter- WANTED</span> Person Details</h5>
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
                        <form id="step1Form" action="<?php echo base_url(); ?>police/save_wanted_details/step1" method="post" class="row g-1 needs-validation1"  enctype="multipart/form-data">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="card mb-3 w-100">
                                <div class="card-body mt-0">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <input type="number" class="form-control" required name="aadharNumber" onkeydown="limit(this,'aadhar');" onkeyup="limit(this,'aadhar');" id="aadharNumber"  placeholder="Aadhar Number">
                                            <label for="pkgdur" class="ms-3"> Aadhar No.* </label>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <input type="text" class="form-control" name="PAN" id="PAN"  placeholder="Aadhar Number">
                                            <label for="PAN" class="ms-3">PAN No.</label>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <input type="text" class="form-control" name="DL_no"   id="DL_no"  placeholder="Aadhar Number">
                                            <label for="DL_no" class="ms-3">DL No.</label>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <input type="text" class="form-control" name="voter_id"   id="voter_id"  placeholder="Aadhar Number">
                                            <label for="voter_id" class="ms-3">Voter ID No.</label>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                          <input type="text" class="form-control" name="person_name"   id="person_name"  placeholder="Aadhar Number">
                                          <label for="pkgdur" class="ms-3">Person Name</label>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                            <select class="form-control" name="Gender" id="Gender" >
                                                <option value="">Select Gender </option>
                                                <option value="Male">Male </option>
                                                <option value="Female">Female </option>
                                                <option value="Other">Other </option>
                                            </select>
                                            <label for="Gender" class="ms-3">Gender </label>     
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                          <input type="date" class="form-control" name="dob" id="dob"  placeholder="dob" onchange="getAge(this.value)">
                                          <label for="dob" class="ms-3">DOB</label>
                                        </div>
                                        <div class="form-floating my-3 col-12 col-md-3">
                                          <input type="text" readonly class="form-control" name="age"   id="age"  placeholder="age">
                                          <label for="age" class="ms-3">Age</label>
                                        </div>
                                        <div class="row align-items-center justify-content-center">
                                            <div class="my-3 col-12 col-md-3">
                                                <label class="mb-2">State </label>
                                                <select class="form-control select2" name="state" id="state" onchange="getdistrict(this.value);" >
                                                <option value="">Select State </option>
                                                <?php 
                                                    $state = $this->db->query('select * from states')->result_array();
                                                    if(count($state)>0)
                                                    {
                                                        foreach($state as $row)
                                                        {
                                                        ?>
                    
                                                            <option value="<?php echo $row['name'] ?>"><?php echo $row['name']?></option>
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
                                            <div class="my-3 col-12 col-md-3">
                                                <label class="mb-2">District </label>                          
                                                <select class="form-control select2" name="district" id="district" onchange="getcity(this.value);" >
                                                    <option value="">Select District </option>
                                                </select>
                                            </div>
                                            <div class="my-3 col-12 col-md-3">
                                                <label class="mb-2">City </label>                            
                                                <select class="form-control select2" name="city" id="city" >
                                                    <option value="">Select City </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body" id="firBody">
                                    <input type="hidden" id="firCount" name="firCount">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 text-end mt-3">
                                            <button type="button" class="btn btn-style-red disabled-on-loading" style="border-radius:0!important;background:black!important;" id="addMore" onclick="addMoreFir()"> Add More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-3 my-3 col-6">
                                            <button class="btn btn-primary w-100 btn-style-green disabled-on-loading" id="btn1Submit" type="submit" style="background-color:  #05106c !important;"> Save</button>
                                        </div>
                                        <?php 
                                            if(isset($_SESSION['wantedId']))
                                            {
                                        ?>
                                        <div class="col-lg-3 my-3 col-6">
                                            <button class="btn btn-primary w-100 btn-style-four disabled-on-loading" id="btn1Next" type="button"> Next</button>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 2){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0"><span class="text-danger fs-4">Upload- Wanted</span> Person Photos</h5>
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
                        <form id="step2Form" action="<?php echo base_url(); ?>police/save_wanted_details/step2" method="post" class="row g-1 needs-validation1 w-100"  enctype="multipart/form-data">
                            <?php 
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <?php 
                                if(isset($_SESSION['wantedId']))
                                {
                                    
                            ?>
                            <?php
                                $getLatestPhotos = $this->db->query('select * from criminalphotos where crimeId='.$_SESSION['wantedId'])->result_array();
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
                                                    <h4 class="modal-title text-center"><?php echo $j; ?>- Upload Wanted Person Photos</h4>
                                                </div>
                                            </div>
                                            <div class="row mt-0">
                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                    <div class="row mt-3 mx-0" id="reUploadDiv<?php echo $i; ?>">
                                                        <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                                                            <label class="form-label">Upload image</label>
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
                            <?php }else{ ?>
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <h5 class="modal-title"><?php echo $j; ?>- Uploaded Wanted Person's Photo</h5>
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
                                                        $split = explode('upload/criminal/',$getLatestPhotos[$i]['photourl']);
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
                                                    <input type="file" class="form-control" id="latestFile<?php echo $i; ?>">
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
                                                    <h5 class="modal-title"><?php echo $j; ?>- Uploaded Wanted Person's Photo</h5>
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
                                                                $split = explode('upload/criminal/',$getLatestPhotos[$i]['photourl']);
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
                            <?php } ?>
                            <div class="card">
                                <div class="card-body mt-0 pb-0">
                                    <div class="row align-items-center justify-content-start">
                                        <?php 
                                            if(isset($_SESSION['wantedId']))
                                            {
                                        ?>
                                        <div class="col-lg-auto col-md-auto my-3 col-12">
                                            <button class="btn btn-primary w-100 btn-style-five disabled-on-loading" id="btn2Next" type="button"> Next</button>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 3){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0"><span class="text-danger fs-4">Upload- </span> Documents</h5>
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
                        <form id="step3Form" class="col-lg-12" action="<?php echo base_url(); ?>police/save_wanted_details/step3" method="post" class="row g-1 needs-validation1 w-100"  enctype="multipart/form-data">
                            <?php 
                                $getDocs = $this->db->query('select * from criminalDocs where crimeId='.(isset($_SESSION['wantedId']) ? $_SESSION['wantedId'] : 0))->result_array();
                            ?>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mt-3" style="align-items: self-end;">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <input type="hidden" id="isDocUploaded1" value="<?php echo ((count($getDocs) > 0) ? $getDocs[0]['Id'] : 0); ?>">
                                            <div class="row mb-3 align-items-end">
                                                <div class="form-group col-lg-3 col-md-3 mb-3">
                                                    <label for="documentName1" class="col-form-label">Document Name (optional)</label>
                                                    <input type="text" class="form-control" id="documentName1" value="<?php echo ((count($getDocs) > 0) ? $getDocs[0]['documentName'] : ''); ?>">
                                                </div>
                                                <div class="form-group col-lg-auto col mb-3" style="position:relative;">
                                                    <label for="documentFile1" class="col-form-label">Document File</label>
                                                    <input type="file" class="form-control" id="documentFile1" name="documentFile1" accept="image/*">
                                                    <?php 
                                                        if(count($getDocs) > 0)
                                                        {
                                                    ?>
                                                    <div style="position:absolute;z-index:1;bottom:7px;left:128px;background:white;color:green;">
                                                        <i class="fa fa-check"></i> File Uploaded
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-lg-auto col-sm-12 col-md-auto mb-3">
                                                    <button type="button" class="btn btn-dark disabled-on-loading w-100 save" onclick="uploadDoc(this,1)"> Upload</button>
                                                </div>
                                                <?php 
                                                    if(count($getDocs) > 0)
                                                    {
                                                ?>
                                                <div class="col-lg-auto col-sm-12 mb-3 col-md-auto text-center">
                                                    <a href="javascript:void(0)" class="btn btn-danger" style="background:white!important;color:red!important;" onclick="deleteDoc('<?php echo $getDocs[0]['documentFile']; ?>',<?php echo $getDocs[0]['Id']; ?>)"><i class="fa fa-trash"></i></a>
                                                    <a href="<?php echo base_url(); ?><?php echo $getDocs[0]['documentFile']; ?>"  data-lightbox="roadtrip2" class="btn btn-outline-info"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="align-items: self-end;">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <input type="hidden" id="isDocUploaded2" value="<?php echo ((count($getDocs) > 1) ? $getDocs[1]['Id'] : 0); ?>">
                                            <div class="row mb-3 align-items-end">
                                                <div class="form-group col-lg-3 col-md-3 mb-3">
                                                    <label for="documentName2" class="col-form-label">Document Name (optional)</label>
                                                    <input type="text" class="form-control" id="documentName2" value="<?php echo ((count($getDocs) > 1) ? $getDocs[1]['documentName'] : ''); ?>">
                                                </div>
                                                <div class="form-group col-lg-auto col mb-3" style="position:relative;">
                                                    <label for="documentFile2" class="col-form-label">Document File</label>
                                                    <input type="file" class="form-control" id="documentFile2" name="documentFile2" accept="image/*">
                                                    <?php 
                                                        if(count($getDocs) > 1)
                                                        {
                                                    ?>
                                                    <div style="position:absolute;z-index:1;bottom:7px;left:128px;background:white;color:green;">
                                                        <i class="fa fa-check"></i> File Uploaded
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-lg-auto col-sm-12 col-md-auto mb-3">
                                                    <button type="button" class="btn btn-dark disabled-on-loading w-100 save" onclick="uploadDoc(this,2)"> Upload</button>
                                                </div>
                                                <?php 
                                                    if(count($getDocs) > 1)
                                                    {
                                                ?>
                                                <div class="col-lg-auto col-sm-12 mb-3 col-md-auto text-center">
                                                    <a href="javascript:void(0)" class="btn btn-danger" style="background:white!important;color:red!important;" onclick="deleteDoc('<?php echo $getDocs[1]['documentFile']; ?>',<?php echo $getDocs[1]['Id']; ?>)"><i class="fa fa-trash"></i></a>
                                                    <a href="<?php echo base_url(); ?><?php echo $getDocs[1]['documentFile']; ?>"  data-lightbox="roadtrip2" class="btn btn-outline-info"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="card">
                                <div class="card-body pt-4 pb-2">
                                    <div class="row ms-md-3 ms-0">
                                        <div class="col-lg-auto col-md-auto col-6 px-0 mb-3">
                                            <button class="btn btn-dark text-light w-100 btn-style-grey disabled-on-loading" type="button" id="btn3Back"> Back</button>  
                                        </div>
                                        <div class="col-lg-auto col-md-auto col-6 mb-3" style="padding-right:0;">
                                            <button class="btn btn-dark text-light w-100 btn-style-five disabled-on-loading" type="button" id="btn3Next"> Next</button>  
                                            <!--<a class="btn btn-warning mx-3 mt-3 disabled-on-loading" href="javascript:void(0)" id="btnCancel"> Cancel</a>-->
                                        </div>
                                        <input type="hidden" name="doccount" id="doccount" value="<?php echo (count($getDocs)); ?>">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex flex-column align-items-center justify-content-center <?php if($pn != 4){ echo "d-none"; } ?>">
                        <div class="card mb-3 w-100">
                            <div class="card-body mt-0">
                                <div class="pt-0 pb-0">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-0"><span class="text-danger fs-4">Add Message</h5>
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
                        <form id="step4Form" action="<?php echo base_url(); ?>police/save_wanted_details/step4" method="post" class="row g-1 needs-validation1 w-100"  enctype="multipart/form-data">
                            <?php 
                                $getPreviousDetail = $this->db->query('select * from criminals where Id='.(isset($_SESSION['wantedId']) ? $_SESSION['wantedId'] : 0))->result_array();
                            ?>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mt-3" style="align-items: self-end;">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <textarea name="message" id="message" class="form-control" placeholder="Enter Your Message"><?php echo ((count($getPreviousDetail) > 0) ? $getPreviousDetail[0]['message'] : ''); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mt-3 justify-content-start" style="align-items: self-end;">
                                        <div class="col-lg-auto col-sm-12 col-md-auto form-floating">
                                            <input type="number" min="0" class="form-control" required id="rewardAmount" name="rewardAmount" value="<?php echo ((count($getPreviousDetail) > 0) ? ($getPreviousDetail[0]['rewardAmount'] != NULL ? $getPreviousDetail[0]['rewardAmount'] : '0') : '0'); ?>">
                                            <label for="rewardAmount" class="ms-2" style="color:black;"><b>Enter Reward Amount</b></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                if(count($getPreviousDetail) > 0)
                                {
                                    if($getPreviousDetail[0]['isFinalSubmitted'] != 1 &&  $getPreviousDetail[0]['rewardAmount'] == NULL)
                                    {
                            ?>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mt-3 justify-content-start" style="align-items: self-end;">
                                        <div class="col-lg-auto col-sm-12 col-md-12 form-check">
                                            <input type="checkbox" id="terms" class="form-check-input" name="terms" value="1" required>
                                            <label for="terms" class="form-check-label" style="color:black;display:inline;font-weight:bold;"><b class="text-danger">Declaration:</b> I hereby declare that all the details furnished above are true and correct to the best of my knowledge and belief. In case any of the above information is found to be false or untrue or misleading or misrepresenting. I am aware that i may be held liable for it.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } } ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="card">
                                <div class="card-body pt-4 pb-2 px-0">
                                    <div class="row ms-md-3 mx-2">
                                        <?php 
                                            if(count($getPreviousDetail) > 0)
                                            {
                                                if($getPreviousDetail[0]['isFinalSubmitted'] != 1)
                                                {
                                        ?>
                                        <div class="col-lg-auto col-md-auto col-6 mb-3">
                                            <button class="btn btn-dark text-light w-100 btn-style-grey disabled-on-loading" type="button" id="btn4Back"> Back</button>  
                                        </div>
                                        <div class="col-lg-auto col-md-auto col-12 mb-3">
                                            <button class="btn btn-dark text-light w-100 btn-style-green disabled-on-loading" type="button" onclick="finalSubmit(this)"> Final Submit</button>  
                                        </div>
                                        <?php }else{?>
                                        <div class="col-lg-auto col-md-auto col-12 mb-3">
                                            <button class="btn btn-dark text-light w-100 btn-style-grey disabled-on-loading" type="button" id="btn4Back"> Back</button>  
                                        </div>
                                        <div class="col-lg-auto col-md-auto col-12 mb-3">
                                            <button class="btn btn-dark text-light w-100 btn-style-five disabled-on-loading" type="button" onclick="goToDashboard(this)"> Go to Dashboard</button>  
                                        </div>
                                        <?php } }else{ ?>
                                        <div class="col-lg-auto col-md-auto col-12 mb-3">
                                            <button class="btn btn-dark text-light w-100 btn-style-grey disabled-on-loading" type="button" id="btn4Back"> Back</button>  
                                        </div>
                                        <div class="col-lg-auto col-md-auto col-12 mb-3">
                                            <button class="btn btn-dark text-light w-100 btn-style-five disabled-on-loading" type="button" onclick="goToDashboard(this)"> Go to Dashboard</button>  
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="credits">
                            Designed by <a href="https://shammtech.in/">Shammtech It Solution</a>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<script>
    let firCount = 0;
    addMoreFir();
    
    function goToDashboard(ele)
    {
        $(ele).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>police";
    }
    
    $('#btn2Next').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>police/upload_wanted_detail?pn=3";
    })
    
    $('#btn3Next').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>police/upload_wanted_detail?pn=4";
    })
    
    $('#btn4Back').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>police/upload_wanted_detail?pn=3";
    })
    
    $('#btn3Back').click(function(){
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>police/upload_wanted_detail?pn=2";
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
                    url:'<?php echo base_url(); ?>police/deleteCriminalDoc',
                    data:{url:url,index:index,'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
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
    
    function addMoreFir()
    {
        $('#addMore').attr('disabled','disabled');
        firCount++;
        let html = '<div class="row align-items-center"><div class="col-lg-3 col-sm-12 mt-3 form-floating"><input type="date" class="form-control" placeholder="FIR Date" name="firDate'+firCount+'" id="firDate'+firCount+'" max="<?php echo date('Y-m-d'); ?>"><label for="firDate'+firCount+'" class="ms-2">Select FIR Date</div>';
        html += '<div class="col-lg-3 col-sm-12 mt-3 form-floating"><input type="text" class="form-control" placeholder="FIR No." name="firNumber'+firCount+'" id="firNumber'+firCount+'"><label for="firNumber'+firCount+'" class="ms-2">Enter FIR Number</div>';
        html += '<div class="col-lg-3 col-sm-12 mt-3 form-floating"><input type="text" class="form-control" placeholder="IPC Dhara" name="ipcDhara'+firCount+'" id="ipcDhara'+firCount+'"><label for="ipcDhara'+firCount+'" class="ms-2">Enter IPC Dhara</div>';
        html += '<div class="col-lg-3 col-sm-12 mt-3"><button type="button" onclick="removeFir()" class="btn btn-danger" style="background:white!important;color:red!important;"><i class="fa fa-times"></i></button></div></div>';
        $('#firBody').append(html);
        $('#firCount').val(firCount);
        $('#addMore').removeAttr('disabled');
    }
    
    function removeFir()
    {
        $('#firBody').children().last().remove();
        firCount--;
        $('#firCount').val(firCount);
    }
    
    $('#step1Form').on('submit',function(e)
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
                      location.href="<?php echo base_url(); ?>police/upload_wanted_detail?pn=2";
                    },2000);
                }else{
                   toastr.error(parse.message);
                    $('#btn1Submit').removeAttr('disabled');
                }
            }
        });
    })
    
    function finalSubmit(ele)
    {
        if($('#terms').is(':checked'))
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
                    let data = new FormData($('#step4Form')[0]);
                    data.append('isFinalSubmitted',1);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>police/finalWantedSumbit',
                        data:data,
                        type:'post',
                        contentType:false,
                        processData:false,
                        cache:false,
                        success:function(res)
                        {
                            toastr.success('Record Saved Successfully');
                            setTimeout(function()
                            {
                                location.href="<?php echo base_url(); ?>police";
                            },2000);
                        }
                    })   
                }
            })   
        }else{
            toastr.error('Please accept terms and conditions to continue');
        }
    }
    
    $('#step4Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn4Submit').attr('disabled','disabled');
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
                    $('#btn4Submit').removeAttr('disabled');
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
    
    function showReUpload(index)
    {
        $('#reUploadBtn'+index).removeClass('d-none');
        $('#reUploadDiv'+index).removeClass('d-none');
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
    
    function cancelReUpload(ele,index)
    {
        $('#reUploadBtn'+index).addClass('d-none');
        $('#reUploadDiv'+index).addClass('d-none');   
    }
    
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
                    url:'<?php echo base_url(); ?>police/deleteCriminalPhoto/'+crimeId,
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
                url:'<?php echo base_url(); ?>police/uploadWantedPhoto',
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
    
    function uploadDoc(ele,index)
    {
        if($('#documentFile'+index).val() == '')
        {
            if($('#isDocUploaded'+index).val() == 0)
            {
                toastr.error('Please Select Document to continue');
            }else{
                $(ele).attr('disabled','disabled');
                let data = new FormData();
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                data.append('documentName',$('#documentName'+index).val());
                data.append('isUploaded',$('#isDocUploaded'+index).val());
                data.append('index',index);
                let file = $('#documentFile'+index)[0].files[0];
                data.append('file',file);
                $.ajax({
                    url:'<?php echo base_url(); ?>police/uploadWantedDoc',
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
        }else{
            $(ele).attr('disabled','disabled');
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('documentName',$('#documentName'+index).val());
            data.append('isUploaded',$('#isDocUploaded'+index).val());
            data.append('index',index);
            let file = $('#documentFile'+index)[0].files[0];
            data.append('file',file);
            $.ajax({
                url:'<?php echo base_url(); ?>police/uploadWantedDoc',
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
    
    function getAge(val) {
        var today = new Date();
        var birthDate = new Date(val);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        if(!isNaN(age))
        $('#age').val(age);
        else
        $('#age').val('');
    }
    </script>
</body>

</html>