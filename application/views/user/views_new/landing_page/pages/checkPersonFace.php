<style>
    label{
        font-weight:bold;
        font-size:1rem!important;
    }
</style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="<?php if($pn != 4){ echo "container"; }else{ echo "container-fluid px-lg-5"; } ?>">

  <section class="section register d-flex flex-column align-items-center justify-content-center py-2">
    <div class="<?php if($pn != 4){ echo "container"; }else{ echo "container-fluid"; } ?>">
        <div class="row text-center mt-3">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h5><b>Search Person By Face</b></h5>
            </div>
        </div>
      <div class="row justify-content-center align-items-center">
          <div class="col-lg-6">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/search person by filter.png" srcset="assets_landing_page/img/illustrations/search person by filter.png" alt=""></figure>
                </div>
            </div>
        <div class="px-0 <?php if($pn != 4){ echo "col-lg-4"; }else{ echo "col-lg-6"; } ?> col-md-12 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3 py-1 px-0 w-100">

            <div class="card-body py-0">

              <!--<div class="pt-0 pb-2">-->
              <!--      <h5 class="card-title text-center pb-0 pt-1"><span class="text-danger" style="font-weight:500;">Search- </span>Person By <span class="text-danger" style="font-weight:500;">Filter</span></h5>-->
              <!--</div>-->
                
                <form class="row g-3 mt-1 needs-validation <?php if($pn != 1){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>landing/checkPersonFace/step1" id="step1Form">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="form-group mb-0">
                        <input type="radio" name="type" style="width:1rem;height:1rem;" id="type1" value="1" required>
                        <label for="type1"><span class="text-danger">By-</span> Face Match</label>
                    </div>
                    <div class="form-group mt-0 mb-0">
                        <input type="radio" name="type" style="width:1rem;height:1rem;" id="type2" value="2" required>
                        <label for="type2"><span class="text-danger">By-</span> Fingerprint</label>
                    </div>
                    <div class="form-group mt-0 text-right">
                        <button type="submit" id="btn1" class="btn btn-primary next disabled-on-loading"> Next</button>
                    </div>
                </form>
                
                <form class="row g-3 needs-validation <?php if($pn != 2){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>landing/checkPersonFace/step2" novalidate id="step2Form">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <?php 
                        if(isset($_SESSION['searchFaceId']))
                        {
                    ?>
                    <div class="form-floating mt-4 col-12">
                      <input type="number" class="form-control" name="mobileNumber" id="mobileNumber" required placeholder="Mobile Number" onKeyUp="showOtpAccordingly(this.value)">
                      <label for="mobileNumber" class="px-4">Enter Mobile Number</label>
                      <div class="invalid-feedback">Please enter your mobile number.</div>
                    </div>
                    <div class="mb-3 col-lg-12 col-sm-12 col-md-12 px-lg-1" id="sendOtpDiv">
                        <button type="button" onclick="sendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading disabled"> Send OTP <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                    <div class="form-group col-12 mt-3 d-none" id="otpdiv">
                        <div class="form-floating mb-3">
                          <input type="number" class="form-control" name="otp" id="otp" placeholder="Enter OTP">
                          <label for="otp">Enter OTP</label>
                        </div>
                        <button class="btn btn-primary w-100 disabled-on-loading btn-style-green" id="btn2" type="submit"> Next <i class="fa fa-arrow-circle-right"></i></button>
                        <div class="row px-0 mx-0 mt-4" style="justify-content:right;">
                            <div class="col-md-auto col-sm-6 col-8 px-0" style="text-align:right;">
                                <button type="button" onclick="resendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading" > Resend OTP <i class="bi bi-bootstrap-reboot"></i></button>
                            </div>
                        </div>
                    </div>
                    <?php }else{ ?>
                        <div class="col-12">
                            <h6 class="text-danger text-center">Please Select Search Type</h6>
                        </div>
                        <div class="col-lg-auto col-md-auto col-sm-12">
                            <button type="button" id="btn2Back" class="w-100 btn btn-primary next disabled-on-loading" style="background:black!important;"> Back</button>
                        </div>
                    <?php } ?>
                </form>
                <form class="row g-3 needs-validation justify-content-center <?php if($pn != 3){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>landing/checkPersonFace/step3" novalidate id="step3Form">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <?php 
                        if(isset($_SESSION['searchFaceId']))
                        {
                    ?>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <h6 class="card-title text-dark text-center pb-0 pt-1">Upload Search Person's Image</h6>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-lg-10 col-md-6">
                            <input type="file" hidden id="uploadFile" accept="image/*">
                            <h5 class="text-center">Sample Photo</h5>
                            <img src="<?php echo base_url(); ?>assets/images/facematch.webp" style="width:100%;height:200px;">
                            <input type="hidden" name="mainPhotoSelected" id="mainPhotoSelected">
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center" style="display:none" id="element">
                        <div class="col-lg-10 col-md-6">
                            <h5 class="text-center">Preview Photo</h5>
                            <img src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:200px;" id="mainPhotoUploaded">
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center" id="uploadBtnDiv">
                        <!--<div class="col-lg-12 text-center">-->
                        <!--    <button type="button" class="btn w-100 btn-primary btn-style-five" onclick="showCameraModal()"><i class="fa fa-camera"></i> Start Camera</button>-->
                        <!--</div>-->
                        <!--<h5 class="text-center my-3">OR</h5>-->
                        <div class="col-lg-10 col-md-6 text-center">
                            <button type="button" class="btn w-100 btn-primary btn-style-four" id="uploadPhotoBtn" onclick="showFileUpload()">Upload Photo <i class="fa fa-upload"></i></button>
                        </div>
                    </div>
                    <div class="row mt-4 justify-content-center">
                        <div class="col-6 px-1 d-none" id="retakebtndiv">
                            <button type="button" class="btn w-100 btn-primary btn-style-yellow" id="retakePhotoBtn" onclick="showFileUpload()">Retake <i class="fa fa-upload"></i></button>
                        </div>
                        <div class="col-lg-6 px-1 col-sm-12 col-6 col-md-6">
                            <button type="submit" id="btn3" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Next <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </div>
                    <?php }else{ ?>
                        <div class="col-12">
                            <h6 class="text-danger text-center">Please Select Search Type</h6>
                        </div>
                        <div class="col-lg-auto col-md-auto col-sm-12">
                            <button type="button" id="btn2Back" class="w-100 btn btn-primary next disabled-on-loading" style="background:black!important;"> Back</button>
                        </div>
                    <?php } ?>
                </form>
                <form class="row g-3 p-3 align-items-center justify-content-center <?php if($pn != 4){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>landing/checkPersonFace/step4" id="step4Form">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <?php 
                        if(isset($_SESSION['searchFaceId']))
                        {
                    ?>
                    <div class="col-lg-12 col-xl-12 col-sm-12 border border-dark p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="text-center">Enter- <span class="text-danger">Person's Details</span></h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col-lg-4 col-sm-12 col-md-4">
                                <label style="font-size:1.1rem!important;">State <b class="text-danger">*</b></label>
                                <select required id="facestate" name="state" class="form-control select2">
                                    <option value="">Select State</option>
                                    <option value="All">All</option>
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
                            <div class="form-group col-lg-4 col-sm-12 col-md-4" id="distdiv">
                                <label style="font-size:1.1rem!important;">District</label>
                                <select id="faceDistrict" name="district" class="form-control select2">
                                    <option value="">Select District</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-4" id="citydiv">
                                <label style="font-size:1.1rem!important;">City</label>
                                <select id="city" name="city" class="form-control select2">
                                    <option value="">Select City</option>
                                </select>
                                <!--<input type="text" class="form-control" name="city" id="city" placeholder="Enter City">-->
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-4">
                                <label style="font-size:1.1rem!important;">Gender <b class="text-danger">*</b></label>
                                <select class="form-control" name="gender" required id="gender" style="appearance:auto!important;">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <?php 
                                $getCategories = $this->db->query('select * from categories where isDeleted=0 order by Id desc')->result_array();
                                $count = 0;
                                if(count($getCategories) > 0)
                                {
                                    foreach($getCategories as $k=>$v)
                                    {
                                        $getSubCategories = $this->db->query('select * from subcategories where categoryId='.$v['Id'].' and isDeleted=0')->result_array();
                                        if(count($getSubCategories) > 0 && ((strtolower($v['englishCategoryName']) == 'height') || (strtolower($v['englishCategoryName']) == 'age')) )
                                        {
                                            $count++;
                            ?>
                            <div class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label class="text-capitalize" style="font-size:1.1rem!important;"><?= $v['englishCategoryName']; ?>  <?php if(strtolower($v['englishCategoryName']) == 'age'){ echo "<b class='text-danger'>*</b>"; } ?></label>  
                                <select class="form-control englishSubCategory" <?php if(strtolower($v['englishCategoryName']) == 'age'){ echo "required"; } ?> name="<?php echo strtolower($v['englishCategoryName']); ?>" style="appearance:auto!important;">
                                    <option value="">Select <?= $v['englishCategoryName']; ?></option>
                                    <?php 
                                        foreach($getSubCategories as $k1=>$v1)
                                        {
                                    ?>
                                    <option value="<?php echo $v1['Id']; ?>"><?= $v1['englishSubCategoryName']; ?></option>
                                    <?php }  ?>
                                </select>    
                            </div>
                            <?php       
                                        } 
                                    } 
                                }
                            ?>
                            <div class="form-group col-lg-4 col-sm-12 col-md-4">
                                <label style="font-size:1.1rem!important;">Religion</label>
                                <select class="form-control" name="religion" id="religion" style="appearance:auto;">
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
                        <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                            <label style="font-size:1.1rem!important;">Person Name</label>
                            <input type="text" class="form-control" id="personName" name="personName" placeholder="Person Name">
                        </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-auto col-sm-12 col-md-auto">
                                <button id="btn4" type="submit" class="btn btn-primary btn-style-green disabled-on-loading w-100"> Filter <i class="fa fa-filter"></i></button>
                            </div>
                        </div>
                    </div>
                    <?php }else{ ?>
                        <div class="col-12">
                            <h6 class="text-danger text-center">Please Select Search Type</h6>
                        </div>
                        <div class="col-lg-auto col-md-auto col-sm-12">
                            <button type="button" id="btn4Back" class="w-100 btn btn-primary next disabled-on-loading" style="background:black!important;"> Back</button>
                        </div>
                    <?php } ?>
                </form>
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>

</div>
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
                <div class="row my-3 justify-content-center">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <video id="video" width="100%" height="240" autoplay></video>  
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-auto col-sm-12 col-md-auto text-center">
                        <button id="click-photo" class="btn btn-primary btn-style-four">Click Photo</button>
                    </div>
                </div>
                <canvas class="d-none" id="canvas" width="320" height="240"></canvas>
            </div>
        </div>
    </div>
</div>
<div id="uploadimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn btn-danger close1" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title">You Can Crop Image</h4>
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
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style type="text/css">
        .no-border {
              border: 0 !important;
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

.no-border {
  border: 0 !important;
}
        
    </style>
<script type="text/javascript">

    $('#step4Form').on('submit',function(e)
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
                    if(parse.count > 0)
                    {
                        $('#btn4').removeAttr('disabled');
                        
                        Swal.fire({
                          icon: 'success',
                          allowOutsideClick:false,
                          html:html,
                          showCloseButton: true,
                          showCancelButton: false,
                          focusConfirm: false,
                          showConfirmButton:false
                        })   
                    }else{
                        swal.fire('','No Persons Found','error');
                        $('#btn4').removeAttr('disabled');
                    }
                }else{
                    swal.fire('',parse.message,'error');
                    $('#btn4').removeAttr('disabled');
                }
            }
        });
    })
    
    function closeSwal()
    {
        swal.close();
    }
    
    function showFileUpload(){
        $('#uploadFile').click();
    }
    
    let camera_button = document.querySelector("#start-camera");
    let video = document.querySelector("#video");
    let click_button = document.querySelector("#click-photo");
    let canvas = document.querySelector("#canvas");
    let stream = null;
    click_button.addEventListener('click', function() {
       	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
       	let image_data_url = canvas.toDataURL('image/jpeg');
        $('#mainPhotoUploaded').attr('src',image_data_url);
        $('#mainPhotoSelected').val(image_data_url);
        $('#cameraModal').modal('hide');
     
        stream.getTracks().forEach(function(track) {
          track.stop();
        });
    });
    
    $('.close').click(function()
    {
        stream.getTracks().forEach(function(track) {
          track.stop();
        });
    })
    
    const toBase64 = file => new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result);
        reader.onerror = error => reject(error);
    });
    
    async function Main() {
       const file = document.querySelector('#myfile').files[0];
       console.log(await toBase64(file));
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
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport',
          format:'jpeg'
        }).then(function(response){
            $('#mainPhotoUploaded').attr('src',response);
            $('#mainPhotoSelected').val(response);
            $('#element').show();
            $('#uploadimageModal').modal('hide');
            $('#uploadBtnDiv').addClass('d-none');
            $('#retakebtndiv').removeClass('d-none');
        })
    });
    
    $('.close1').click(function()
    {
        $('#mainPhotoUploaded').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#mainPhotoSelected').val('');
        $('#uploadimageModal').modal('hide');
    })
    
    $('#uploadFile').on('change',async function(e)
    {
        if($(this)[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL($(this)[0].files[0]);
            $('#uploadimageModal').modal('show');   
        }
    })
    
    $('#btn4Back').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>landing/checkPersonFace?pn=1";
    })
    
    $('#btn2Back').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>landing/checkPersonFace?pn=1";
    })
    
    async function showCameraModal()
    {
        stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
    	video.srcObject = stream;
        $('#cameraModal').modal('show');
    }
    
    $('#step3Form').on('submit',function(e)
    {
        $('#btn3').attr('disabled','disabled');
        e.preventDefault();
        if(($('#mainPhotoSelected').val()) != '')
        {
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
                    location.href="<?php echo base_url(); ?>landing/checkPersonFace?pn=4";   
                }
            });
        }else{
            Swal.fire({
                icon:'error',
                html: "<h4 style='color:black;'><b>Please Upload Person's Photo</b></h4>",
                showCloseButton:true,
                showConfirmButton:false,
                showCancelButton:true,
                'cancelButtonText':'Ok'
            })
            $('#btn3').removeAttr('disabled');
        }
    })
    
    $('#step2Form').on('submit',function(e)
    {
        let arr = $(this).serializeArray();
        let count = 0;
        for(let i=0;i<arr.length;i++)
        {
          if(arr[i].value != '')
          {
            count++;
          }
        }
        e.preventDefault();
        if(count == arr.length)
        {
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
                        location.href="<?php echo base_url(); ?>landing/checkPersonFace?pn=3";   
                    }else{
                        toastr.error(parse.message);
                        $('#btn2').removeAttr('disabled');
                    }
                }
            });
        }else{
            return false;
        }
    })
    
    $('#step1Form').on('submit',function(e)
    {
        let arr = $(this).serializeArray();
        let count = 0;
        for(let i=0;i<arr.length;i++)
        {
          if(arr[i].value != '')
          {
            count++;
          }
        }
        e.preventDefault();
        if(count == arr.length)
        {
            if($('input[name="type"]:checked').val() != 2)
            {
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
                        if(parse.isMobileAvailable)
                        {
                            location.href="<?php echo base_url(); ?>landing/checkPersonFace?pn=3";   
                        }else{
                            location.href="<?php echo base_url(); ?>landing/checkPersonFace?pn=2";
                        }
                    }
                });   
            }else{
                Swal.fire({
                  html: '<h3 style="color:skyblue;"><b>Coming Soon</b></h3>',
                  customClass: {
                    icon: 'no-border'
                  }
                })
            }
        }else{
            return false;
        }
    })
    
    function sendOtp(ele)
    {
        let val = $('#mobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>landing/sendSearchFaceOtp',
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
                        $('#otp').attr('required',true);
                        toastr.success('OTP Sent Successfully');
                        $('#mobileNumber').attr('readonly',true);   
                        $('#sendOtpDiv').addClass('d-none');
                        $('#otpdiv').removeClass('d-none');
                    }else{
                        $(ele).removeAttr('disabled');
                        toastr.error('Something Went Wrong');
                        $('#otpdiv').addClass('d-none');
                    }
                }
            })
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
            $('#otpdiv').addClass('d-none');
        }
    }
    
    function showOtpAccordingly(val)
    {
        if(val.length == 10)
        {
            $('#sendOtpDiv button').removeClass('disabled');
        }else{
            $('#sendOtpDiv button').addClass('disabled');
        }
    }
    
    function resendOtp(ele)
    {
        let val = $('#mobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>landing/sendSearchFaceOtp',
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
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
        }
    }
    
</script>