<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .no-border {
        border: 0;
    }
    
    div:where(.swal2-container) div:where(.swal2-popup){
        width:auto;
    }
    #swal2-html-container{
        margin: 0 0rem!important;
    }
    .btn{
        border:0!important;
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
        width: 25px;
        height: 30px;
        /*padding-bottom: 22px;*/
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
    label{
        font-weight:bold!important;
        color:black!important;
    }
</style>
<style>
    @media only screen and (max-width: 600px) {
 .imgae_display{
      display: none;
 }
}
</style>
<div class="container">

  <section class="section register min-vh-70 d-flex flex-column align-items-center justify-content-center py-2">
    <div class="container px-1">
      <div class="row justify-content-center align-items-center">
         <div class="col-lg-6 col-xl-4 col-6 imgae_display">
            
            <img class="img-fluid" src="assets_landing_page/img/illustrations/3d2.png" style="height:300px;" srcset="assets_landing_page/img/illustrations/3d2.png 2x" alt="">
          </div>
        <div class="col-lg-6 col-xl-4 px-0 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="card my-4 p-1 w-100">
            
            <div class="card-body p-1">
                <div class="pb-2">
                <h5 class="card-title text-center pb-0 pt-2" style="font-size:1.2rem!important">Fill Your Personal Details</h5>
              </div>
                <form action="<?php echo base_url(); ?>landing/saveFinalProfileStep" method="post" class="row gy-3 gx-0 needs-validation1" id="loginform">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <input type="hidden" name="specialType" value="funnel">
                    <div class="mb-3 px-0 col-12 form-floating">
                        <input type="text" class="form-control" name="aadharname" required id="aadharname">
                        <label for="aadharname" style="font-size: 1rem;">Name <b class="text-danger" style="font-weight: bolder;">*</b></label>
                    </div>
                    <?php 
                        $getSettings = $this->db->query('select * from settings where Id=39')->result_array();
                        if($getSettings[0]['value'] == 1)
                        {
                    ?>
                    <input type="hidden" name="dateSetting" value="1">
                    <div class="row gx-1">
                        <div class="col-4 form-floating mb-3">
                            <select class="form-select" required onchange="getAge()" id="day" name="day">
                                <option value="">DD</option>
                                <?php for ($i = 1; $i <= 31; $i++): ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                            <label for="day" style="font-size: 0.8rem;display: flex;align-items: center;">Day</label>
                        </div>

                        <!-- Month Dropdown -->
                        <div class="col-4 form-floating mb-3">
                            <select class="form-select" required onchange="getAge()" id="month" name="month">
                                <option value="">MM</option>
                                <?php 
                                    $months = [
                                        1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
                                        5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
                                        9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
                                    ];
                                    foreach ($months as $num => $name): 
                                ?>
                                    <option value="<?= $num ?>"><?= $name ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="month" style="font-size: 0.8rem;display: flex;align-items: center;">Month</label>
                        </div>

                        <!-- Year Dropdown -->
                        <div class="col-4 form-floating mb-3">
                            <select class="form-select px-3" required onchange="getAge()" id="year" name="year">
                                <option value="">YYYY</option>
                                <?php 
                                    $current_year = date('Y');
                                    for ($y = $current_year; $y >= ($current_year - 100); $y--): 
                                ?>
                                    <option value="<?= $y ?>"><?= $y ?></option>
                                <?php endfor; ?>
                            </select>
                            <label for="year" style="font-size: 0.8rem;display: flex;align-items: center;">Year</label>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <input type="hidden" name="dateSetting" value="0">
                    <div class="row px-0 mx-0" style="justify-content:space-between;">
                        <div class="mb-3 col-9 px-0 form-floating">
                            <input type="date" min="01/01/0001" max="<?= date('Y-m-d') ?>" class="form-control" required name="dob" id="dob" onchange="calculateAge(this.value)">
                            <label for="dob" style="font-size: 0.8rem;display: flex;align-items: center;">Select Date of Birth <b class="text-danger ms-2 mt-2" style="font-size: xx-large;">*</b></label>
                        </div>
                        <div class="mb-3 col-3 form-floating">
                            <input type="text" class="form-control" name="age" id="age" disabled>
                            <label for="age">Age</label>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row px-0 gx-1 mx-0" id="innerDiv">
                        <?php 
                            if($getSettings[0]['value'] == 1)
                            {
                        ?>
                        <div class="mb-3 col-3 form-floating">
                            <input type="text" class="form-control" name="age" id="age" disabled>
                            <label for="age">Age</label>
                        </div>
                        <div class="mb-3 col-9 form-floating">
                            <select class="form-control" name="gender" id="gender" style="appearance:auto!important;" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label for="gender" style="font-size: 0.8rem;display: flex;align-items: center;">Select Gender <b class="text-danger ms-2 mt-2" style="font-size: xx-large;">*</b></label>
                        </div>
                        <?php }else{ ?>
                        <div class="mb-3 col-12 form-floating">
                            <select class="form-control" name="gender" id="gender" style="appearance:auto!important;" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label for="gender" style="font-size: 0.8rem;display: flex;align-items: center;">Select Gender <b class="text-danger ms-2 mt-2" style="font-size: xx-large;">*</b></label>
                        </div>
                        <?php } ?>
                        <div class="mb-3 col-12 form-group">
                            <label><b>Select State</b></label>
                            <select name="state" id="curnotsamestate" class="form-control select2">
                                <option value="All">Select State</option>
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
                        <div class="mb-3 px-0 col-12 form-group">
                            <label><b>Select District</b></label>
                            <select name="district" id="curnotsamedistrict" class="form-control select2">
                                <option value="">Select District</option>
                            </select>
                        </div>
                        <div class="form-group col-12 mb-3">
                            <button type="submit" class="w-100 btn btn-style-five btn-primary disabled-on-loading" id="proceedBtn"> Proceed</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

</div>
<script type="text/javascript">
    
    $('#loginform').on('submit',function(e)
    {
        $('#proceedBtn').attr('disabled',true);
        e.preventDefault();
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
                location.href="<?= base_url(); ?>thank-you-page";
            }
        });
    })

    function redirectAccordingly()
    {
        <?php 
            if(!isset($_GET['type']))
            {
        ?>
            location.href=document.referrer;
        <?php
            }else{
                if($_GET['type'] == 'searchUnknown')
                {
        ?>
            location.href="<?= base_url(); ?>NonKyc/search_person_details?pn=7&type=unknown";
        <?php
            }else if($_GET['type'] == 'unknown')
            {
        ?>
            location.href="<?= base_url(); ?>NonKyc/upload_unknown_details";
        <?php }else if($_GET['type'] == 'missing'){ ?>
            location.href="<?= base_url(); ?>NonKyc/lapata_login";
        <?php }else if($_GET['type'] == 'dashboard'){ ?>
            location.href="<?= base_url(); ?>non-kyc-dashboard-profile";
        <?php }else if($_GET['type'] == 'mahakumbh'){ ?>
            location.href="<?= base_url(); ?>NonKyc/add_mahakumbh_member";
        <?php }else if($_GET['type'] == 'special'){ ?>
            location.href="<?= base_url(); ?>NonKyc/add_mahakumbh_member_special";
        <?php }else if($_GET['type'] == 'filter'){ ?>
            location.href="<?= base_url(); ?>NonKyc/search_mahakumbh_filter";
        <?php } ?>
        <?php 
            } 
        ?>
    }

    function verifyId(ele)
    {
        if($('#idNumber').val() != '')
        {
            if($('#idType').val() == 'DL')
            {
                if($('#dob').val() != '')
                {
                    $(ele).attr('disabled',true);
                    let data = new FormData();
                    data.append('idNumber',$('#idNumber').val());
                    data.append('dob',$('#dob').val());
                    data.append('idType',$('#idType').val());
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>landing/getIdDataAccordingly',
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
                                $('#verifyDiv').addClass('d-none');
                                $('#innerDiv').removeClass('d-none');
                                if(parse.hasOwnProperty('dob'))
                                {
                                    $('#dob').val(parse.dob).prop('readonly',true);
                                }
                                if(parse.hasOwnProperty('name'))
                                {
                                    $('#aadharname').val(parse.name).prop('readonly',true);
                                }
                                if(parse.hasOwnProperty('gender'))
                                {
                                    $('#gender').val(parse.gender).prop('readonly',true);
                                }
                                if(parse.hasOwnProperty('state'))
                                {
                                    $('#curnotsamestate').val(parse.state).trigger('change').prop('readonly',true);
                                }
                                $(ele).attr('disabled',false);
                            }else{
                                if(parse.status == 'invalid')
                                {
                                    $('#verifyDiv').removeClass('d-none');
                                    toastr.error(parse.message);
                                    $(ele).prop('disabled',false);
                                }else{
                                    $('#verifyDiv').removeClass('d-none');
                                    $('#innerDiv').removeClass('d-none');
                                    $(ele).prop('disabled',false);
                                }
                            }
                        }
                    });         
                }else{
                    toastr.error('Please select DOB to continue');
                    $(ele).prop('disabled',false);
                }
            }else{
                $(ele).attr('disabled',true);
                let data = new FormData();
                data.append('idNumber',$('#idNumber').val());
                data.append('dob',$('#dob').val());
                data.append('idType',$('#idType').val());
                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                $.ajax({
                    url:'<?php echo base_url(); ?>landing/getIdDataAccordingly',
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
                            $('#verifyDiv').addClass('d-none');
                            $('#dobDiv').removeClass('d-none');
                            $('#innerDiv').removeClass('d-none');
                            if(parse.hasOwnProperty('dob'))
                            {
                                $('#dob').val(parse.dob).prop('readonly',true);
                            }
                            if(parse.hasOwnProperty('name'))
                            {
                                $('#aadharname').val(parse.name).prop('readonly',true);
                            }
                            if(parse.hasOwnProperty('gender'))
                            {
                                $('#gender').val(parse.gender).prop('readonly',true);
                            }
                            if(parse.hasOwnProperty('state'))
                            {
                                $('#curnotsamestate').val(parse.state).trigger('change').prop('readonly',true);
                            }
                            $(ele).prop('disabled',false);
                        }else{
                            if(parse.status == 'invalid')
                            {
                                $('#verifyDiv').removeClass('d-none');
                                toastr.error(parse.message);
                                $(ele).prop('disabled',false);
                            }else{
                                $('#verifyDiv').removeClass('d-none');
                                $('#dobDiv').removeClass('d-none');
                                $('#innerDiv').removeClass('d-none');
                                $(ele).prop('disabled',false);
                            }
                        }
                    }
                });   
            }
        }else{
            toastr.error('Please enter ID Number to continue');
        }
    }

    function showIdAccordingly(type)
    {
        let html = '';
        switch(type){
            case 'Aadhaar':
                html = '<input type="number" class="form-control" style="font-weight:bold;color:black;" name="idNumber" onkeydown="limit(this,`aadhar`);" onkeyup="limit(this,`aadhar`);" id="idNumber" required placeholder="Aadhar Number"><label for="idNumber">Enter Your ID Number</label><div class="invalid-feedback">Enter Your ID Number</div>';
                $('#dobDiv').addClass('d-none');
                break;
            case 'PAN':
                html = '<input type="text" class="form-control text-uppercase" style="font-weight:bold;color:black;" name="idNumber" maxlength="10" minlength="10" id="idNumber" required placeholder="Aadhar Number"><label for="idNumber">Enter Your ID Number</label><div class="invalid-feedback">Enter Your ID Number</div>';
                $('#dobDiv').addClass('d-none');
                break;
            case 'DL':
                html = '<input type="text" class="form-control text-uppercase" style="font-weight:bold;color:black;" name="idNumber" minlength="1" id="idNumber" required placeholder="Aadhar Number"><label for="idNumber">Enter Your ID Number</label><div class="invalid-feedback">Enter Your ID Number</div>';
                $('#dobDiv').removeClass('d-none');
                break;
            case '':
                html = '';
                $('#dobDiv').addClass('d-none');
                break;
        }
        if(html == '')
        {
            $('#idDiv').html(html).addClass('d-none');
            $('#verifyDiv').addClass('d-none');
        }else{
            $('#idDiv').html(html).removeClass('d-none');
            $('#verifyDiv').removeClass('d-none');
        }
    }

    function getAge()
    {
        let isFilled = 1;
        if($('#year').val() == '')
        {
            isFilled = 0;
        }
        if($('#month').val() == '')
        {
            isFilled = 0;
        }
        if($('#day').val() == '')
        {
            isFilled = 0;
        }
        if(isFilled == 0)
        {
            $('#age').val('');
        }else{
            let data = new FormData();
            data.append('dob',($('#year').val()) + '-' + $('#month').val() + '-' + $('#day').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>landing/getAge',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    $('#age').val(res);
                }
            })
        }
    }
    
    function calculateAge(val)
    {
        if(val == '')
        {
            $('#age').val('');
        }else{
            let data = new FormData();
            data.append('dob',$('#dob').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>landing/getAge',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    $('#age').val(res);
                }
            })
        }
    }
    
    function limit(val,type){
        var max_chars = 11;
        if(val.value.length > max_chars) {
            val.value = val.value.substr(0, (max_chars + 1));
        }   
    }
</script>