<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .imageThumb {
        max-height: 75px;
        border: 2px solid;
        padding: 1px;
        cursor: pointer;
    }
    
    .pip {
        display: inline-block;
        margin: 10px 10px 0 0;
    }
    
    .remove {
        display: block;
        background: #444;
        border: 1px solid black;
        color: white;
        text-align: center;
        cursor: pointer;
    }
    
    .remove:hover {
        background: white;
        color: black;
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
    
    @media screen and (max-width:525px)
    {
        .mb-sm-7{
            margin-top:1.6rem;
        }
    }
    .form-label{
        font-weight:bold;
    }
</style>
<main id="main" class="main px-2">

    <div class="pagetitle">
      <h1>Welcome, <span class="text-success"><?php echo $_SESSION['aadharName']; ?>!</span></h1>
    </div><!-- End Page Title -->
    <div class="container-fluid px-0">

  <section class="section register d-flex flex-column align-items-center justify-content-center">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 px-0">

          <div class="card mb-3">

            <div class="card-body w-100 px-3">

              <div class=" pb-2">
                <h5 class="card-title text-center pb-0 fs-4 text-primary">Profile</h5>
              </div>
                
                <!--<div class="row mb-3 align-items-center">-->
                <!--    <div class="col-lg-2 col-sm-12 col-md-6 col-6">-->
                <!--        <b>Select Page</b>-->
                <!--    </div>-->
                <!--    <div class="col-lg-2 col-sm-12 col-md-6 col-6 px-0">-->
                <!--        <ul class="nav nav-dropdown d-inline">-->
                <!--            <a class="nav-link dropdown-toggle text-dark border text-center border-3 border-success" id="droplabel" data-bs-toggle="dropdown" href="javascript:void(0)"  role="button" aria-expanded="false">Profile</a>-->
                <!--            <ul class="dropdown-menu" style="cursor:pointer;">-->
                <!--                <li><a class="dropdown-item" id="profile">Profile</a></li>-->
                <!--                <li><a class="dropdown-item" id="photos">Photos</a></li>-->
                <!--                <li><a class="dropdown-item" id="other">Other Detail</a></li>-->
                <!--                <li><a class="dropdown-item" id="address">Address</a></li>-->
                <!--            </ul>-->
                <!--        </ul>  -->
                <!--    </div>-->
                <!--</div>-->
                <div class="tab-content">
                    <?php $getProfileDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array(); ?>
                    <div class="tab-pane fade profileTab active show" id="profileTab">
                       
                        <hr class="mb-4">
                        <form class="row g-3" method="post" action="<?php echo base_url(); ?>user/step2/do_register" id="registerForm">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                          <label for="aadharNumber" class="form-label">User ID</label>
                          <input type="text" name="aadhar_id" readonly class="form-control" id="aadharNumber" required value="<?php echo $_SESSION['aadhar_id']; ?>">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                          <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                          <input type="text" autofocus name="username" <?php if($getProfileDetail[0]['username'] != '' || $getProfileDetail[0]['username'] != NULL){ echo "readonly"; } ?> class="form-control mb-2 <?php if($getProfileDetail[0]['username'] != '' || $getProfileDetail[0]['username'] != NULL){ echo "readonly"; } ?>" value="<?php echo $getProfileDetail[0]['username']; ?>" id="username" onchange="checkUsername(this.value)">
                          <div class="invalid-feedback">Please enter a valid Username</div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                          <label for="email" class="form-label">Enter Email Id</label>
                          <input type="email" name="email" class="form-control" id="email" value="<?php echo $getProfileDetail[0]['email_id']; ?>">
                          <div class="invalid-feedback">Please enter a valid Email</div>
                        </div>
                        <?php 
                            if($getProfileDetail[0]['registration_mobile'] != NULL)
                            {
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                            <label for="registermob" class="form-label">Registered Mobile Number</label>
                            <input readonly value="<?php echo $getProfileDetail[0]['registration_mobile']; ?>" type="text" name="registermob" class="form-control mb-2" id="registermob" required>
                            <div class="invalid-feedback">Please enter a valid Registered Mobile Number</div>
                        </div>
                        <?php }else{ ?>
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                            <label for="registermob" class="form-label">Registered Mobile Number</label>
                            <input type="text" name="registermob" class="form-control mb-2" id="registermob" required>
                            <div class="invalid-feedback">Please enter a valid Registered Mobile Number</div>
                        </div>
                        <?php } ?>
                    </div>
                     <div class="row mb-2">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                  <b  style="font-weight:600;font-size:15px;"><span class="text-danger">Note:</span> You can add another mobile number for login.</b>
                                  <br>
                                  
                            </div>
                        </div>
                    <?php 
                        if($getProfileDetail[0]['alternate_mobile1'] != NULL || $getProfileDetail[0]['alternate_mobile1'] != '')
                        {
                    ?>
                    <div class="row align-items-end">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-10 mb-0">
                            <label for="alternatemob1" class="form-label">First Contact Number</label>
                            <input readonly value="<?php echo $getProfileDetail[0]['alternate_mobile1']; ?>" type="number" name="alternatemob1" class="form-control mb-2" id="alternatemob1">
                        </div>
                        <div class="col-2 mb-2">
                            <button type="button" id="deletebtn1" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="deleteAlternate(this,1)"> <i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                    <!--<div class="col-12 gy-0">-->
                    <!--  <input type="checkbox" name="othershow1" value="1" id="othershow1" onclick="showOther(this,1)">-->
                    <!--  <label for="othershow1" style="display:inline;">Change your first contact</label>-->
                    <!--</div>-->
    
                    <div class="row mb-3 d-none" id="other1div">
                        <label for="othermob1" class="col-md-12 col-lg-12 col-form-label"><b>Enter New Mobile Number</b></label>
                        <div class="col-md-auto col-lg-auto">
                            <input type="number" class="form-control mb-2" id="othermob1" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,1)">
                        </div>
                        <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                        <div class="form-group col-12">
                            <span class="text-danger">Note: Number will be verify Through OTP</span>
                        </div>
                        <div class="form-group col-8" style="margin-top: 0.5rem;">
                            <button class="btn btn-primary btn-style-grey disabled disabled-on-loading btn-style-grey" id="btnOtp1" onclick="sendOtp(1)" type="button"> Send OTP</button>
                        </div>
                        <div class="col-12">
                            <div class="row d-none" id="otp1div" style="text-align: center;margin-top: 0.5rem;">
                                <div class="form-group col-12 text-right">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-2 col-sm-12">
                                            <input type="number" style="padding:0.8rem;" class="form-control mb-2" id="otp1" placeholder="Enter OTP">
                                        </div>
                                        <div class="col-md-4 col-lg-auto col-sm-12 col-6">
                                            <button type="button" class="btn-style-green btn btn-success d-block disabled-on-loading" id="btnVerify1" onclick="verifyOtp(this,1)"> Verify</button>      
                                        </div>
                                        <div class="col-md-4 col-lg-auto col-6 col-sm-12">
                                            <button class="btn btn-primary d-none btn-style-five disabled-on-loading" id="btnResendOtp1" onclick="resendOtp(this,1)" type="button">Resend OTP</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }else{ ?>
                        <div class="col-12 gy-0">
                          <input type="checkbox" name="othershow1" value="1" id="othershow1" onclick="showOther(this,1)">
                          <label for="othershow1" style="display:inline;">Add your alternate mobile number 1</label>
                        </div>
        
                        <div class="row mb-3 d-none" id="other1div">
                            <label for="othermob1" class="col-md-12 col-lg-12 col-form-label"><b>Enter New Mobile Number</b></label>
                            <div class="col-md-auto col-lg-auto">
                                <input type="number" class="form-control mb-2" id="othermob1" onKeyUp="showOtpAccordingly(this.value,1)" onKeyPress="return checkLength(this.value,10)">
                            </div>
                            <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                            <div class="form-group col-12">
                                <span class="text-danger">Note: Number will be verify Through OTP</span>
                            </div>
                            <div class="form-group col-8" style="margin-top: 0.5rem;">
                                <button class="btn btn-primary disabled-on-loading btn-style-grey disabled" id="btnOtp1" onclick="sendOtp(1)" type="button"> Send OTP</button>
                            </div>
                            <div class="col-12">
                                <div class="row d-none" id="otp1div" style="text-align: center;margin-top: 0.5rem;">
                                    <div class="form-group col-12 text-right">
                                        <div class="row">
                                            <div class="col-md-3 col-lg-2 col-sm-12">
                                                <input type="number" style="padding:0.8rem;" class="form-control mb-2" id="otp1" placeholder="Enter OTP">
                                            </div>
                                            <div class="col-md-4 col-lg-auto col-sm-12 col-6">
                                                <button type="button" class="btn-style-green btn btn-success d-block disabled-on-loading" id="btnVerify1" onclick="verifyOtp(this,1)"> Verify</button>      
                                            </div>
                                            <div class="col-md-4 col-lg-auto col-6 col-sm-12">
                                                <button class="btn btn-primary d-none btn-style-five disabled-on-loading" id="btnResendOtp1" onclick="resendOtp(this,1)" type="button">Resend OTP</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php 
                        if($getProfileDetail[0]['alternate_mobile2'] != NULL || $getProfileDetail[0]['alternate_mobile2'] != '')
                        {
                    ?>
                    <div class="row align-items-end">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-10">
                            <label for="alternatemob2" class="form-label">Second Contact Number</label>
                            <input readonly value="<?php echo $getProfileDetail[0]['alternate_mobile2']; ?>" type="text" name="alternatemob2" class="form-control mb-2" id="alternatemob2">
                        </div>
                        <div class="col-2 mb-2">
                            <button type="button" id="deletebtn2" class="btn btn-danger disabled-on-loading" style="background:white!important;color:red!important;" onclick="deleteAlternate(this,2)"> <i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                    <!--<div class="col-12 gy-0">-->
                    <!--  <input type="checkbox" name="othershow2" value="1" id="othershow2" onclick="showOther(this,2)">-->
                    <!--  <label for="othershow2" style="display:inline;">Change your second contact</label>-->
                    <!--</div>-->
    
                    <div class="row mb-3 d-none" id="other2div">
                        <label for="othermob1" class="col-md-12 col-lg-12 col-form-label"><b>Enter New Mobile Number</b></label>
                        <div class="col-md-auto col-lg-auto">
                            <input type="number" class="form-control mb-2" id="othermob2" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,2)">
                        </div>
                        <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                        <div class="form-group col-12">
                            <span class="text-danger">Note: Number will be verify Through OTP</span>
                        </div>
                        <div class="form-group col-8" style="margin-top: 0.5rem;">
                            <button class="btn btn-primary btn-style-grey disabled disabled-on-loading" id="btnOtp2" onclick="sendOtp(2)" type="button"> Send OTP</button>
                        </div>
                        <div class="col-12">
                            <div class="row d-none" id="otp2div" style="text-align: center;margin-top: 0.5rem;">
                                <div class="form-group col-12 text-right">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-2 col-sm-12">
                                            <input type="number" style="padding:0.8rem;" class="form-control mb-2" id="otp2" placeholder="Enter OTP">
                                        </div>
                                        <div class="col-md-4 col-lg-auto col-sm-12 col-6">
                                            <button type="button" class="btn-style-green btn btn-success d-block disabled-on-loading" id="btnVerify2" onclick="verifyOtp(this,2)"> Verify</button>      
                                        </div>
                                        <div class="col-md-4 col-lg-auto col-6 col-sm-12">
                                            <button class="btn btn-primary btn-style-five d-none disabled-on-loading" id="btnResendOtp2" onclick="resendOtp(this,2)" type="button">Resend OTP</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }else{ ?>
                        <div class="col-12 gy-0">
                          <input type="checkbox" name="othershow2" value="1" id="othershow2" onclick="showOther(this,2)">
                          <label for="othershow2" style="display:inline;">Add your alternate mobile number 2</label>
                        </div>
        
                        <div class="row mb-3 d-none" id="other2div">
                            <label for="othermob1" class="col-md-12 col-lg-12 col-form-label"><b>Enter New Mobile Number</b></label>
                            <div class="col-md-auto col-lg-auto">
                                <input type="number" class="form-control mb-2" id="othermob2" onKeyPress="return checkLength(this.value,10)" onKeyUp="showOtpAccordingly(this.value,2)">
                            </div>
                            <div class="invalid-feedback">Please enter a valid Mobile Number</div>
                            <div class="form-group col-12">
                                <span class="text-danger">Note: Number will be verify Through OTP</span>
                            </div>
                            <div class="form-group col-8" style="margin-top: 0.5rem;">
                                <button class="btn btn-primary btn-style-grey disabled disabled-on-loading" id="btnOtp2" onclick="sendOtp(2)" type="button"> Send OTP</button>
                            </div>
                            <div class="col-12">
                                <div class="row d-none" id="otp2div" style="text-align: center;margin-top: 0.5rem;">
                                    <div class="form-group col-12 text-right">
                                        <div class="row">
                                            <div class="col-md-3 col-lg-2 col-sm-12">
                                                <input type="number" style="padding:0.8rem;" class="form-control mb-2" id="otp2" placeholder="Enter OTP">
                                            </div>
                                            <div class="col-md-4 col-lg-auto col-sm-12 col-6">
                                                <button type="button" class="btn-style-green btn btn-success d-block disabled-on-loading" id="btnVerify2" onclick="verifyOtp(this,2)"> Verify</button>      
                                            </div>
                                            <div class="col-md-4 col-lg-auto col-6 col-sm-12">
                                                <button class="btn btn-primary btn-style-five d-none disabled-on-loading" id="btnResendOtp2" onclick="resendOtp(this,2)" type="button">Resend OTP</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <hr class="mb-0">
                    <div class="form-group mb-3">
                        <div class="row" style="justify-content:space-between;">
                            <div class="col-auto">
                                <label class="form-label">Status : </label>
                            </div>
                            <div class="col-auto text-end">
                                <a href="javascript:void(0)" class="text-dark" style="text-decoration:underline;text-underline-offset:3px;"><b>What does it mean?</b></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                                <span class="mx-2 <?php if($getProfileDetail[0]['visibility'] == 1){ echo "activeLabel"; } ?>" id="visibility1label">
                                    <input type="radio" name="visibility" id="visibility2" class="radio-custom" value="1" <?php if($getProfileDetail[0]['visibility'] == 1){ echo "checked"; } ?> required>
                                    <label for="visibility2" class="ml-2 radio-custom-label" style="font-weight:bold;">Active Mode</label>
                                </span>
                            </div>
                            <div class="col-lg-auto col-sm-12 col-md-auto mt-3">
                                <span class="mx-2 <?php if($getProfileDetail[0]['visibility'] == 0 && $getProfileDetail[0]['visibility'] != NULL){ echo "activeLabel"; } ?>" id="visibility2label">
                                    <input type="radio" name="visibility" id="visibility1" class="radio-custom" value="0" <?php if($getProfileDetail[0]['visibility'] == 0 && $getProfileDetail[0]['visibility'] != NULL){ echo "checked"; } ?> required>
                                    <label for="visibility1" style="font-weight:bold;" class="ml-2 radio-custom-label">In-Active Mode</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mx-2 px-0">
                        <div class="col-sm-12 px-0 col-5 col-md-auto d-block d-md-none col-lg-auto mt-3">
                          <button style="padding: 13px 10px!important;" class="save btn btn-primary w-100 disabled-on-loading" id="btnSubmit" type="submit"> Save</button>
                        </div>
                        <div class="col-sm-12 px-0 col-5 col-md-auto d-none d-md-block col-lg-auto mt-3">
                          <button class="save btn btn-primary w-100 disabled-on-loading" id="btnSubmit" type="submit"> Save</button>
                        </div>
                        <div class="col-sm-12 col-7 col-md-auto px-1 col-lg-auto mt-3">
                          <button class="btn btn-primary w-100 next" style="padding:12px 10px!important;" type="button" onclick="location.href='<?php echo base_url(); ?>user-dashboard'">Dashboard</button>
                        </div>
                        <!--<div class="col-sm-12 col-md-auto col-lg-auto mt-3">-->
                        <!--  <button class="btn btn-primary w-100 btnGoPhoto" type="button" style="background:black!important;"> Go To Photos</button>-->
                        <!--</div>-->
                        <!--<div class="col-sm-12 col-md-auto col-lg-auto mt-3">-->
                        <!--  <button class="btn btn-primary w-100 btnGoOther" type="button" style="background:blue!important;"> Go To Other Detail</button>-->
                        <!--</div>-->
                    </div>
                  </form>
                    </div>
                </div>

            </div>
          </div>

          <div class="credits">
            Designed by <a href="https://shammtech.in/">Shammtech It Solution</a>
          </div>

        </div>
      </div>
    </div>

  </section>

</div>
</main>
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
<style>
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
<script type="text/javascript">
    $('.close').click(function()
    {
        $('#photoModal').modal('hide');
    })
    $("#username").keyup(function() {
        $(this).val($(this).val().replace(/\s/g, ""));
    });
    
    $('.btnGoPhoto').click(function()
    {
        $('#photos').click();  
    })
    
    $('.btnGoAddress').click(function()
    {
        $('#address').click();  
    })
    
    $('.btnGoProfile').click(function()
    {
        $('#profile').click();  
    })
    
    $('.btnGoOther').click(function()
    {
        $('#other').click();  
    })
    
    $('#photos').click(function()
    {
        $('#droplabel').html('Photos');
        $('#profileTab').removeClass('show active').addClass('d-none');
        $('#otherTab').removeClass('show active').addClass('d-none');
        $('#addressTab').removeClass('show active').addClass('d-none');
        $('#photosTab').addClass('show active').removeClass('d-none');
    })
    
    $('#profile').click(function()
    {
        $('#droplabel').html('Profile');
        $('#photosTab').removeClass('show active').addClass('d-none');
        $('#profileTab').addClass('show active').removeClass('d-none');
        $('#otherTab').removeClass('show active').addClass('d-none');
        $('#addressTab').removeClass('show active').addClass('d-none');
    })
    
    $('#other').click(function()
    {
        $('#droplabel').html('Other Detail');
        $('#photosTab').removeClass('show active').addClass('d-none');
        $('#profileTab').removeClass('show active').addClass('d-none');
        $('#otherTab').addClass('show active').removeClass('d-none');
        $('#addressTab').removeClass('show active').addClass('d-none');
    })
    
    $('#address').click(function()
    {
        $('#droplabel').html('Address');
        $('#photosTab').removeClass('show active').addClass('d-none');
        $('#profileTab').removeClass('show active').addClass('d-none');
        $('#otherTab').removeClass('show active').addClass('d-none');
        $('#addressTab').addClass('show active').removeClass('d-none');
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
                url:'<?php echo base_url(); ?>user/deleteAlternateMobile',
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
                toastr.success('An otp has been sent on same number');
                $(ele).removeAttr('disabled');
            }
        })
    }
    
    function deleteAlternate(ele,index)
    {
        Swal.fire({
            title: '<strong class="text-dark" style="font-size:20px;">Delete Contact</strong>',
            icon: 'info',
            html:'<div class="form-group mb-2">Are you sure you want to delete alternate mobile '+index+'?</div>',
            allowOutsideClick:true,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
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
    
    function verifyOtp(ele,index)
    {
        if($('#otp'+index).val() != '')
        {
            $(ele).attr('disabled','disabled');
            let data= new FormData();
            data.append('otp',$('#otp'+index).val());
            data.append('index',index);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('mobile',$('#othermob'+index).val());

            $.ajax({
              url:'<?php echo base_url(); ?>user/verifyProfileMobileOtp',
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
        if($('#othermob'+index).val() != '')
        {
            if($('#othermob'+index).val().length == 10)
            {
                let data= new FormData();
                data.append('mobile',$('#othermob'+index).val());
                $('#btnOtp'+index).attr('disabled','disabled');
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
                            $('#btnResendOtp'+index).removeClass('d-none');
                            $('#otp'+index+'div').removeClass('d-none');  
                            setTimeout(function(){
                                $("#otp"+index).filter(':visible').focus();
                            }, 500);
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
                toastr.error('Mobile number must be 10 digit number');
            }
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

    function checkUsername(val)
    {
        if(val != '')
        {
            let data = new FormData();
            data.append('value',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/checkUsername',
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
                        toastr.success('Username Available');
                    }else{
                        $('#username').val('');
                        toastr.error('Username Not Available');
                    }
                }
            })
        }else{
            toastr.error('Please Enter Valid Username');
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
    
    $('#photosForm').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnPhoto').attr('disabled','disabled');
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
                }
            }
        });
    })
    
    $('#addressForm').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnAddress').attr('disabled','disabled');
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
                }
            }
        });
    })
    
    $('#otherDetailForm').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnOther').attr('disabled','disabled');
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
                }
            }
        });
    })
    
    $('#registerForm').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnSubmit').attr('disabled','disabled');
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
                }
            }
        });
    })
    
    $('#reset').click(function()
    {
        $('#img0').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#img1').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#img2').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#img3').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#img4').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#previewDiv').addClass('d-none');
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
    
    function showPreview(ele)
    {
        $('#img0').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#img1').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#img2').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#img3').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#img4').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
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
            }   
        }else{
            toastr.error('You can upload upto 5 files');
            $('#reset').click();
        }
    }
</script>