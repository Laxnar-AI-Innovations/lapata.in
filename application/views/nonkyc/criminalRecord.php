<style>
.table-bordered,td,th,tr{
    border:2px solid rgb(13,202,240)!important;
}
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
	background-color: #F5F5F5;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #F5F5F5;
  border-radius: 10px;
  background-image: -webkit-gradient(linear,
				   left bottom,
				   left top,
				   color-stop(0.44, rgb(122,153,217)),
				   color-stop(0.72, rgb(73,125,189)),
				   color-stop(0.86, rgb(28,58,148)));
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<style>
    .w-lg-max-content{
        width:100%!important;
    }
    .phone {
      line-height:32px;
      font-size:18px;
      font-weight:bold;
      color:#333333;
      margin:0;
    }
    .phone svg {
      width:18px;
      height:18px;
      margin-top:2px;
      margin-right:4px;
    }
    .phone svg path {
      fill:#f03454;
    }
    .phone svg path:nth-child(2) {
      -webkit-animation: header-phone 1s infinite cubic-bezier(.1, .57, .5, 1);
      animation: header-phone 1s infinite cubic-bezier(.1, .57, .5, 1);
    }
    .phone svg path:nth-child(3) {
      -webkit-animation:header-phone2 1s infinite cubic-bezier(.1, .57, .5, 1);
      animation:header-phone2 1s infinite cubic-bezier(.1, .57, .5, 1);
    }
    
    
    
    
    /* Animate phone */
    
    @-webkit-keyframes header-phone {
      0%,30% {opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      80% {opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
    @keyframes header-phone {
      0%,30%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      80%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
    @-webkit-keyframes header-phone2 {
      0%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      70%,90%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
    @keyframes header-phone2 {
      0%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      70%,90%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
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
    .form-floating>.form-control-plaintext~label, .form-floating>.form-control:focus~label, .form-floating>.form-control:not(:placeholder-shown)~label, .form-floating>.form-select~label {
        transform: scale(.85) translateY(-0.5rem) translateX(1rem);
    }
</style>

<div class="container">

  <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container px-0">
            <div class="row justify-content-center align-items-center">
                <div class="card mb-1 w-100">
                    <div class="card-body p-3">
                        <div class="pb-0">
                            <h5 class="card-title mb-0 text-center pb-0 fs-4 pt-0 text-danger">Criminal Records</h5>
                        </div>
                    </div>
                </div>
                <?php 
                    if(count($criminalDetail) > 0)
                    {
                        foreach($criminalDetail as $k=>$v)
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$v['policeThanaId'])->result_array();
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$v['aadharNumber'].'"')->result_array();
                            $getFirDetail = $this->db->query('select * from crimeFir where crimeId="'.$v['Id'].'"')->result_array();
                ?>
                <div class="col-lg-12 col-xl-12 col-md-12 mt-4 col-sm-12 align-items-center">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <div class="row align-items-center mt-3" style="justify-content:space-evenly">
                                <?php
                                    $getLatestUserPhotos = $this->db->query('select * from criminalphotos where crimeId='.$v['Id'])->result_array();
                                    if(count($getLatestUserPhotos) > 0)
                                    {
                                ?>
                                <div class="col-md-6 col-sm-12 col-lg-5 col-xl-4 mb-3">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner" id="photosspan">
                                            <?php
                                                foreach($getLatestUserPhotos as $k2=>$v2)
                                                {
                                            ?>
                                            <div class="carousel-item <?php if($k2 == 0){ echo "active"; } ?>">
                                                <a href="<?php echo base_url(); ?><?php echo $v2['photourl']; ?>"  data-lightbox="roadtrip">
                                                    <img src="<?php echo base_url().''.$v2['photourl']; ?>" style="width:100%;height:250px;max-width:100%!important;" class="d-block w-100" alt="...">
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
                                <?php } ?>
                                <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6">
                                    <?php 
                                        if(count($getUserDetail) > 0 || $v['personName'] != '')
                                        {
                                    ?>
                                    <div class="row border border-2 border-info p-3 mb-3">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <h5 class="text-danger"><b class="text-dark">Criminal Name - </b><?php echo (count($getUserDetail) > 0 ? $getUserDetail[0]['aadharname'] : $v['personName']); ?></h5>
                                            <h5 class="text-primary mb-0"><b class="text-dark">Aadhaar No. - </b><?php echo (count($getUserDetail) > 0 ? substr_replace($getUserDetail[0]['aadhar_id'],'xxxxxxxx',0,8) : substr_replace($v['aadharNumber'],'xxxxxxxx',0,8)); ?></h5>  
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="row mb-3">
                                        <div class="col-lg-12 col-sm-12 col-md-12 px-0">
                                            <?php 
                                                if(count($getFirDetail) > 0)
                                                {
                                            ?>
                                            <div class="table-responsive" style="max-height:300px;overflow-x:auto;">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>FIR Date</th>
                                                            <th>FIR No</th>
                                                            <th>IPC Dhara</th>
                                                            <th>POLICE THANA</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                        foreach($getFirDetail as $k1=>$v1)
                                                        {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo ($v1['firDate'] != NULL ? date('d-m-Y',strtotime($v1['firDate'])) : '-') ?></td>
                                                        <td><?php echo ($v1['firNumber'] != NULL ? $v1['firNumber'] : '-') ?></td>
                                                        <td><?php echo ($v1['ipcDhara'] != NULL ? $v1['ipcDhara'] : '-') ?></td>
                                                        <td><?php echo (count($getPoliceDetail) > 0 ? $getPoliceDetail[0]['thanaName'].', ' : '') ?><?php echo (count($getPoliceDetail) > 0 ? $getPoliceDetail[0]['district'] : '') ?>-<?php echo (count($getPoliceDetail) > 0 ? $getPoliceDetail[0]['state'] : '') ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } }else{ ?>
                <div class="w-100">
                    <h5 class="card-title py-2 my-3 text-center fs-5 text-primary">No Criminal Records</h5>
                </div>    
                <?php } ?>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="card mb-1 w-100">
                    <div class="card-body p-3">
                        <div class="pb-0">
                            <h5 class="card-title mb-0 text-center pb-0 fs-4 pt-0 text-danger">Wanted Records</h5>
                        </div>
                    </div>
                </div>
                <?php 
                    if(count($wantedDetail) > 0)
                    {
                        foreach($wantedDetail as $k=>$v)
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$v['policeThanaId'])->result_array();
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$v['aadharNumber'].'"')->result_array();
                            $getFirDetail = $this->db->query('select * from crimeFir where crimeId="'.$v['Id'].'"')->result_array();
                ?>
                <div class="col-lg-6 col-xl-6 col-md-12 mt-4 col-sm-12 align-items-center justify-content-center">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <div class="row mt-3 justify-content-center">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <h5 class="card-title mb-0 text-center pb-0 fs-4 pt-0 text-danger">Wanted Record <?php echo $k + 1; ?></h5>
                                </div>
                            </div>
                            <div class="row mt-3 justify-content-center">
                                <div class="col-lg-4 col-sm-12 col-md-4 mb-3 form-floating">
                                    <input type="text" id="state" style="font-weight:bold;color: blueviolet;" disabled class="form-control text-center pt-5 pb-3" value="<?php echo (count($getPoliceDetail) > 0 ? $getPoliceDetail[0]['state'] : '') ?>">
                                    <label for="state" class="ms-2 text-center" style="opacity: 1;font-size: 18px!important;"><b>State</b></label>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-md-4 mb-3 form-floating">
                                    <input type="text" id="district" style="font-weight:bold;color: blueviolet;" disabled class="form-control text-center pt-5 pb-3" value="<?php echo (count($getPoliceDetail) > 0 ? $getPoliceDetail[0]['district'] : '') ?>">
                                    <label for="district" class="ms-2 text-center" style="opacity: 1;font-size: 18px!important;"><b>District</b></label>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-md-4 mb-3 form-floating">
                                    <input type="text" id="state" style="font-weight:bold;color: blueviolet;" disabled class="form-control text-center pt-5 pb-3" value="<?php echo (count($getPoliceDetail) > 0 ? $getPoliceDetail[0]['thanaName'] : '') ?>">
                                    <label for="thanaName" class="ms-2 text-center" style="opacity: 1;font-size: 18px!important;"><b>Thana Name</b></label>
                                </div>
                            </div>   
                            <div class="row justify-content-center align-items-center">
                                <?php
                                    $getLatestUserPhotos = $this->db->query('select * from criminalphotos where crimeId='.$v['Id'])->result_array();
                                    if(count($getLatestUserPhotos) > 0)
                                    {
                                ?>
                                <div class="col-md-6 col-sm-12 col-lg-4 mb-3">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner" id="photosspan">
                                            <?php
                                                foreach($getLatestUserPhotos as $k1=>$v1)
                                                {
                                            ?>
                                            <div class="carousel-item <?php if($k1 == 0){ echo "active"; } ?>">
                                                <a href="<?php echo base_url(); ?><?php echo $v1['photourl']; ?>"  data-lightbox="roadtrip">
                                                    <img src="<?php echo base_url().''.$v1['photourl']; ?>" style="width:100%;height:200px;max-width:100%!important;" class="d-block w-100" alt="...">
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
                                <?php } ?>
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <?php 
                                        if(count($getUserDetail) > 0 || $v['personName'] != '')
                                        {
                                    ?>
                                    <div class="row mb-3">
                                        <div class="col-12 form-floating">
                                            <input type="text" id="state" style="font-weight:bold;color: blueviolet;" disabled class="form-control text-center pt-5 pb-3" value="<?php echo (count($getUserDetail) > 0 ? $getUserDetail[0]['aadharname'] : $v['personName']); ?>">
                                            <label for="state" class="ms-2 text-center" style="opacity: 1;font-size: 18px!important;"><b>Person Name</b></label>  
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($v['rewardAmount'] != NULL && $v['rewardAmount'] != 0)
                                        {
                                    ?>
                                    <div class="row mb-3">
                                        <div class="col-12 form-floating">
                                            <input type="text" id="rewardAmount" style="font-weight:bold;color: blueviolet;" disabled class="form-control text-center pt-5 pb-3" value="<?php echo 'Rs.'.$v['rewardAmount']; ?>">
                                            <label for="rewardAmount" class="ms-2 text-center" style="opacity: 1;font-size: 18px!important;"><b>Reward Amount</b></label>  
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php 
                                if(count($getFirDetail) > 0)
                                {
                            ?>
                            <div style="max-height:300px;overflow-y: auto;overflow-x: hidden;padding-right:1rem;">
                            <?php 
                                foreach($getFirDetail as $k2=>$v2)
                                {
                            ?>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <h5 class="text-center mb-0 text-primary"><b>FIR Number <?php echo $k2 + 1; ?></b></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 col-md-4 mb-3 form-floating">
                                    <input type="text" id="firDate<?php echo $k2; ?>" style="font-weight:bold;color: blueviolet;" disabled class="form-control text-center pt-5 pb-3" value="<?php echo ($v2['firDate'] != NULL ? date('d-m-Y',strtotime($v2['firDate'])) : '-') ?>">
                                    <label for="firDate<?php echo $k2; ?>" class="ms-2 text-center" style="opacity: 1;font-size: 18px!important;"><b>Fir Date</b></label>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-md-4 mb-3 form-floating">
                                    <input type="text" id="firNumber<?php echo $k2; ?>" style="font-weight:bold;color: blueviolet;" disabled class="form-control text-center pt-5 pb-3" value="<?php echo ($v2['firNumber'] != NULL ? $v2['firNumber'] : '-') ?>">
                                    <label for="firNumber<?php echo $k2; ?>" class="ms-2 text-center" style="opacity: 1;font-size: 18px!important;"><b>Fir Number</b></label>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-md-4 mb-3 form-floating">
                                    <input type="text" id="ipcDhara<?php echo $k2; ?>" style="font-weight:bold;color: blueviolet;" disabled class="form-control text-center pt-5 pb-3" value="<?php echo ($v2['ipcDhara'] != NULL ? $v2['ipcDhara'] : '-') ?>">
                                    <label for="ipcDhara<?php echo $k2; ?>" class="ms-2 text-center" style="opacity: 1;font-size: 18px!important;"><b>IPC Dhara</b></label>
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } }else{ ?>
                        <div class="w-100">
                            <h5 class="card-title py-2 my-3 text-center fs-5 text-primary">No Wanted Records</h5>
                        </div>    
                    <?php } ?>
                <div class="credits col-12 text-center">
                    Designed by <a href="https://shammtech.in/">Shammtech It Solution</a>
                </div>
            </div>
        </div>

  </section>

</div>
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
    function showLogin()
    {
        Swal.fire({
          title: '<strong>Signup/Login</strong>',
          allowOutsideClick:false,
          html:
            '<div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><a href="<?php echo base_url(); ?>user/login" class="w-100 save btn">Login</a></div><div class="col-lg-auto col-sm-12 col-md-auto"><a href="<?php echo base_url(); ?>user/checkregister" class="w-100 next btn">Signup</a></div></div></div>',
          showCloseButton: true,
          showCancelButton: false,
          focusConfirm: false,
          showConfirmButton:false
        })       
    }
    
    $("#username").keyup(function() {
        $(this).val($(this).val().replace(/\s/g, ""));
    });
    
    function showRewardsAccordingly(Id)
    {
        $.ajax({
            url:'<?php echo base_url(); ?>user/showRewardsAccordingly',
            data:{Id:Id,'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                $('#missingdatespan').html(parse.missingdate);
                $('#missingfirdate').html(parse.firdate);
                $('#firthanaaddress').html(parse.firthanaaddress);
                $('#photosspan').html('');
                for(let i=0;i<parse.images.length;i++)
                {
                    if(i == 0)
                    {
                        $('#photosspan').append('<div class="carousel-item active"><a href="'+parse.images[i]+'"  data-lightbox="roadtrip"><img src="'+parse.images[i]+'" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="..."></a></div>');      
                    }else{
                        $('#photosspan').append('<div class="carousel-item"><a href="'+parse.images[i]+'"  data-lightbox="roadtrip"><img src="'+parse.images[i]+'" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="..."></a></div>');   
                    }
                }
                $('#personname').html(parse.personname);
                $('#agespan').html(parse.age);
                $('#genderspan').html(parse.gender);
                $('#dobspan').html(parse.dob);
                $('#userproperty').html(parse.userproperty);
                $('#careofspan').html(parse.careof);
                if(parse.address != '')
                {
                    $('#addressspan').html(parse.address);   
                }else{
                    $('#addressparent').addClass('d-none');
                }
                $('#otherdetailspan').html(parse.otherdetail);
                $('#contactspan').attr('href',parse.contact);
            }
        })
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

    function showOther(ele)
    {
      if(ele.checked)
      {
          $('#otherdiv').removeClass('d-none');
          $('#othermob').attr('required',true);
          $('#othermob').attr('name','othermob');
          $('#othermob').val('');
      }else{
          $('#otherdiv').addClass('d-none');
          $('#othermob').attr('required',false);
          $('#othermob').removeAttr('name');
          $('#othermob').val('');
      }
    }
    $('#registerForm').on('submit',function(e)
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
                        if(parse.isOther)
                        {
                            toastr.success(parse.message);
                            setTimeout(function()
                            {
                              location.href="<?php echo base_url(); ?>user/enterOtp";
                            },2000);
                        }else{
                            toastr.success(parse.message);
                            setTimeout(function()
                            {
                              location.href="<?php echo base_url(); ?>user";
                            },2000); 
                        }
                    }else if(parse.status == 'username')
                    {
                        toastr.warning(parse.message);
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
          }else{
              return false;
          }
    })
</script>