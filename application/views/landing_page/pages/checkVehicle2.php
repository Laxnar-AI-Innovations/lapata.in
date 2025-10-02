<!--this css from shiva sir change the size in mobile and laptop-->
<link href="<?php echo base_url(); ?>assets/css/font_size.css" rel="stylesheet">

<style>
    @media only screen and (max-width: 600px) {
  h6 {
    font-size:0.8rem!important;
  }
  .mobile_img{
      height:150px!important;
  }
}
</style>
<style>
    .phone {
      line-height:32px;
      font-size:18px;
      font-weight:bold;
      color:#fff;
      margin:0;
    }
    .phone svg {
      width:30px;
      height:30px;
    }
    .phone svg path {
      fill:#f44336;
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
</style>

<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="px-0 col-lg-10 col-xl-8 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3 w-100">

            <div class="card-body p-3">
                <div class="pb-2">
                    <h4 class="card-title text-center pb-0 pt-2">Vehicle Details</h4>
                </div>
                <?php 
                    if($checkDetail[0]['searchType'] == 'vehicleNumber')
                    {
                        $missingvehicle = $this->db->query('select * from missingvehicle where rcNumber="'.$checkDetail[0]['idNumber'].'" and paymentStatus="Success" and isdeleted != 1 and isFound = 0 and expiryDate >= "'.date('d-m-Y').'"')->result_array();
                    }
                    if($checkDetail[0]['searchType'] == 'chassisNumber')
                    {
                        $missingvehicle = $this->db->query('select * from missingvehicle where chasisNumber="'.$checkDetail[0]['idNumber'].'" and paymentStatus="Success" and isdeleted != 1 and isFound = 0 and expiryDate >= "'.date('d-m-Y').'"')->result_array();
                    }
                    if($checkDetail[0]['searchType'] == 'engineNumber')
                    {
                        $missingvehicle = $this->db->query('select * from missingvehicle where engineNumber="'.$checkDetail[0]['idNumber'].'" and paymentStatus="Success" and isdeleted != 1 and isFound = 0 and expiryDate >= "'.date('d-m-Y').'"')->result_array();
                    }
                    if(count($missingvehicle) > 0)
                    {
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 d-flex flex-column">
                    <div class="row px-3 align-items-center">
                        <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                            <div class="row mt-3">
                                <div class="col-md-12 text-center border border-2 border-danger p-3">
                                    <h4 class="text-danger text-uppercase"><b>Missing</b></h4>
                                    <h5 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;font-size:17px;">Missing Date : <span id="missingdatespan"><?php echo date('d-m-Y',strtotime($missingvehicle[0]['dateCreated'])); ?></span></span></h5>
                                </div>
                            </div>
                            <?php 
                                $rewardcount = 0;
                                foreach($missingvehicle as $k=>$v)
                                {
                                    if($v['rewardamount'] != 0 && $v['rewardamount'] != NULL)
                                    {
                                        $rewardcount++;
                            ?>
                            <?php } } ?>
                            <?php if($rewardcount > 0){ ?>
                                <div class="row mt-3">
                                    <div class="col-md-12 text-center  p-3">
                                        <select class="form-control border border-2 border-danger text-center" style="font-weight:bold;font-size:1.3rem;appearance:auto;" id="reward" onchange="showRewardsAccordingly(this.value)">
                                            <?php 
                                                foreach($missingvehicle as $k=>$v)
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
                    <?php 
                        $decode = json_decode($missingvehicle[0]['photos'],true);
                        if(count($decode) > 0)
                        {
                    ?>
                    <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="photosspan">
                                <?php 
                                    foreach($decode as $k=>$v)
                                    {
                                ?>
                                <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                    <a href="<?php echo base_url(); ?><?php echo $v; ?>"  data-lightbox="roadtrip">
                                        <img src="<?php echo base_url().''.$v; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100 mobile_img" alt="...">
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
                    <?php }else{ 
                        $getLatestVehiclePhotos = $this->db->query('select * from missingvehiclephotos where missingId='.$missingvehicle[0]['Id'])->result_array();
                        if(count($getLatestVehiclePhotos) > 0)
                        {
                    ?>
                    <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="photosspan">
                                <?php 
                                    foreach($getLatestUserPhotos as $k=>$v)
                                    {
                                ?>
                                <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                    <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip">
                                        <img src="<?php echo base_url().''.$v['photourl']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100 mobile_img" alt="...">
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
                <?php }else{ ?>
                        <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" id="photosspan">
                                    <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                        <a href="<?php echo base_url().'assets/img/noimage.jpg'; ?>"  data-lightbox="roadtrip">
                                            <img src="<?php echo base_url().'assets/img/noimage.jpg'; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100 mobile_img" alt="...">
                                        </a>
                                    </div>
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
                        <?php } } ?>
                </div>
                
                <div class="row mt-2 mx-0 align-items-center">
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>Vehicle Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h6 class="text-danger text-uppercase" id="rcNumber"><b><?php echo $missingvehicle[0]['rcNumber']; ?></b></h6>
                    </div>
                </div> 
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 mx-1 align-items-center">
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                        <h6 style="color: black;font-size:13px;"><b>OWNER NAME : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h6 style="color: black;font-size:13px;"><b id="personname"><?php echo $missingvehicle[0]['ownerName']; ?></b></h6>
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
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <?php 
                    if($missingvehicle[0]['relation1'] != NULL || $missingvehicle[0]['relation2'] != NULL || $missingvehicle[0]['relation3'] != NULL)
                    {
                ?>
                <div class="row mt-2 px-md-5 px-sm-3">
                    <div class="col-md-12 text-center  px-1 pb-4 py-4">
                        <?php 
                            if($this->session->userdata('user_login') == 'yes'){
                        ?>
                        <div class="row justify-content-center align-items-center">
                            <?php 
                                $getUserDetail = $this->db->query('select * from user where uid='.$missingvehicle[0]['userId'])->result_array();
                            ?>
                            <div class="col-lg-auto col-xl-auto col-sm-12 col-md-auto mt-3 mt-md-3">
                                <h6 class="text-dark mb-0">
                                    <a href="tel:<?= $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;" class="btn btn-primary btn-style-green mt-2 mt-md-2 d-md-inline d-none">
                                        <i class="fa fa-phone"></i> CALL OWNER
                                    </a>
                                </h6>
                                <a href="tel:<?= $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;" class="btn btn-primary btn-style-green mt-0 mt-md-0 d-md-none mx-auto d-block">
                                    <i class="fa fa-phone"></i> CALL OWNER
                                </a>
                            </div>
                            <?php 
                                for($i=1;$i<=3;$i++)
                                {
                                    if($missingvehicle[0]['relation'.$i] != NULL)
                                    {
                                        $getVehicleRelation = $this->db->query('select * from vehicle_relation where id='.$missingvehicle[0]['relation'.$i])->result_array();
                                        if($missingvehicle[0]['relation'.$i] != 3)
                                        {
                            ?>
                            <div class="col-lg-auto col-xl-auto col-sm-12 col-md-auto mt-1">
                                <h6 class="text-dark text-uppercase mb-0"> 
                                    <a href="tel:<?php echo $missingvehicle[0]['mobile'.$i]; ?>" style="width:max-content;" class="btn btn-primary btn-style-<?php if($i==1){ echo "yellow"; }else if($i == 2){ echo "red"; }else{ echo "four"; } ?> mt-2">
                                        <i class="fa fa-phone"></i> CALL <?php echo $getVehicleRelation[0]['name']; ?>
                                    </a>
                                </h6>  
                            </div>
                            <?php }else{ ?>
                            <div class="col-lg-auto col-xl-auto col-sm-12 col-md-auto mt-1">
                                <h6 class="text-dark text-uppercase mb-0"> 
                                    <a href="tel:<?php echo $missingvehicle[0]['mobile'.$i]; ?>" style="width:max-content;" class="btn btn-primary btn-style-<?php if($i==1){ echo "yellow"; }else if($i == 2){ echo "red"; }else{ echo "four"; } ?> mt-2">
                                        <i class="fa fa-phone"></i> CALL <?php echo $missingvehicle[0]['otherrelationname'.$i]; ?></span>
                                    </a>
                                </h6>  
                            </div>
                            <?php } ?>
                            <?php } } ?>
                        </div>
                        <?php }else{ ?>
                            <h6 class="text-dark my-3 text-center">
                                <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-inline d-none">
                                    <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                         
                                    <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                    							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                    							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                    							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                    							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                    							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                    <path d="M41.1,15.7
                                    							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                    							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                    <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                    							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                             C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                    </svg>
                                    <span>Call OWNER</span><span style="color: #11d011;
        font-size: 1.2rem;
        text-decoration: underline;"> Click Here</span>
                                </a>
                            </h6>
                            <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-none mx-auto d-block">
                                <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                     
                                <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                <path d="M41.1,15.7
                                							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                         C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                </svg>
                                <span>Call OWNER</span>&nbsp;<span style="color: #11d011;
        font-size: 1.2rem;
        text-decoration: underline;">Click Here</span>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <?php }else{ ?>
                    <?php 
                        if($this->session->userdata('user_login') != 'yes'){
                    ?>
                    <h6 class="text-dark my-3 text-center">
                        <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-inline d-none">
                            <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                 
                            <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                            							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                            							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                            							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                            							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                            							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                            <path d="M41.1,15.7
                            							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                            							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                            <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                            							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                     C65.7,8.6,67.8,10.4,69,11.4z"></path>
                            </svg>
                            <span>Call OWNER</span><span style="color: #11d011;
font-size: 1.2rem;
text-decoration: underline;"> Click Here</span>
                        </a>
                    </h6>
                    <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-none mx-auto d-block">
                        <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                             
                        <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                        							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                        							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                        							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                        							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                        							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                        <path d="M41.1,15.7
                        							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                        							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                        <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                        							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                 C65.7,8.6,67.8,10.4,69,11.4z"></path>
                        </svg>
                        <span>Call OWNER</span>&nbsp;<span style="color: #11d011;
font-size: 1.2rem;
text-decoration: underline;">Click Here</span>
                    </a>
                    <?php }else{ 
                        $getUserDetail = $this->db->query('select * from user where uid='.$missingvehicle[0]['userId'])->result_array();
                    ?>
                        <h6 class="text-dark mb-0 text-center mt-4">
                            <a href="tel:<?php echo $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;background:green!important;color:white!important;border:1px solid green!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-inline d-none">
                                <!--<svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">-->
                                     
                                <!--<path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4-->
                                <!--							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0-->
                                <!--							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3-->
                                <!--							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6-->
                                <!--							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8-->
                                <!--							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>-->
                                <!--<path d="M41.1,15.7-->
                                <!--							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8-->
                                <!--							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>-->
                                <!--<path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2-->
                                <!--							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8-->
                                <!--         C65.7,8.6,67.8,10.4,69,11.4z"></path>-->
                                <!--</svg>-->
                                <i class="fa fa-phone"></i>
                                <span>CALL OWNER</span>
                                <!--<span style="color: #11d011;font-size: 1.2rem;text-decoration: underline;"> Click Here</span>-->
                            </a>
                        </h6>
                        <a href="tel:<?php echo $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-none mx-auto d-block">
                        <i class="fa fa-phone"></i>
                                    <span>CALL OWNER</span>
                    </a>
                    <?php } ?>
                <?php } ?>
                <div class="row justify-content-center">
                    <div class="col-md-auto col-lg-auto col-sm-12 mt-3">
                        <?php 
                            if($this->session->userdata('user_login') == 'yes'){
                        ?>
                        <a href="<?php echo base_url(); ?>user/search_vehicle_details" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                        <?php }else{ ?>
                            <a href="<?php echo base_url(); ?>check-vehicle-details" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                        <?php } ?>
                    </div>
                    <div class="col-md-auto col-lg-auto col-sm-12 mt-3">
                        <a href="<?php echo base_url(); ?>" class="btn btn-primary save" style="width:-webkit-fill-available;"><i class="fa fa-home"></i> Homepage</a>
                    </div>
                </div>
            </div>
              <?php }else{ ?>
                  <div class="col-lg-12 col-md-12 col-sm-12 d-flex flex-column">
                    <div class="row px-3 align-items-center justify-content-center">
                    <?php 
                        $decode = json_decode($vehicledetail[0]['vehiclePhoto'],true);
                        if(count($decode) > 0)
                        {
                    ?>
                    <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="photosspan">
                                <?php 
                                    foreach($decode as $k=>$v)
                                    {
                                ?>
                                <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                    <a href="<?php echo base_url(); ?><?php echo $v; ?>"  data-lightbox="roadtrip">
                                        <img src="<?php echo base_url().''.$v; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100 mobile_img" alt="...">
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
                    <?php }else{ ?>
                    <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="photosspan">
                                <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                    <a href="<?php echo base_url().'assets/img/noimage.jpg'; ?>"  data-lightbox="roadtrip">
                                        <img src="<?php echo base_url().'assets/img/noimage.jpg'; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100 mobile_img" alt="...">
                                    </a>
                                </div>
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
                </div>
                 <div class="row mt-2 mx-1 align-items-center">
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                        <h6 style="color: black;"><b>Vehicle Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h6 style="color: black;" id="rcNumber" class="text-success text-uppercase"><b><?php echo $vehicledetail[0]['rcNumber']; ?></b></h6>
                    </div>
                </div>
                
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
               <div class="row mt-2 mx-3 align-items-center">
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                        <h6 style="color: black;"><b>OWNER NAME : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h6  id="personname"><?php echo $vehicledetail[0]['personname']; ?></h6>
                    </div>
                </div>
                <div class="bg-dark row mt-2 mx-3 p-2">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <label class="text-light"><b>Vehicle's Other Details</b></label>
                    </div>
                </div>
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:0.9em;"><b>Vehicle Type : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;" id="typespan"><?php echo $vehicledetail[0]['vehicleType']; ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:0.9em;"><b>Chassis Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;font-size:13px;" id="chassisNumberspan"><?php echo substr_replace($vehicledetail[0]['chassis_number'],'<i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i>',0,13); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;"><b>Engine Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h6 style="color: black;" id="engineNumberSpan">
                            <?php echo substr_replace($vehicledetail[0]['engine_number'],'<i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i><i class="fa fa-hashtag" style="font-size:small;"></i>',0,9); ?>
                            </h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:0.9em;"><b>Company Name : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;" id="companyNameSpan"><?php echo ($vehicledetail[0]['company']); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:0.9em;"><b>Model Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;" id="modelNumberSpan"><?php echo ($vehicledetail[0]['maker_model']); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <?php 
                    if($vehicledetail[0]['relation1'] != NULL || $vehicledetail[0]['relation2'] != NULL || $vehicledetail[0]['relation3'] != NULL)
                    {
                ?>
                <div class="row mt-2 px-md-5 px-sm-3">
                    <div class="col-md-12 text-center  px-1 pb-4 py-4">
                        <?php 
                            if($this->session->userdata('user_login') == 'yes'){
                        ?>
                        <div class="row justify-content-center align-items-center">
                            <?php 
                                $getUserDetail = $this->db->query('select * from user where uid='.$vehicledetail[0]['userId'])->result_array();
                            ?>
                            <div class="col-lg-auto col-xl-auto col-sm-12 col-md-auto mt-3 mt-md-3">
                                <h6 class="text-dark mb-0">
                                    <a href="tel:<?= $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;" class="btn btn-primary btn-style-green mt-2 mt-md-2 d-md-inline d-none">
                                        <i class="fa fa-phone"></i> CALL OWNER
                                    </a>
                                </h6>
                                <a href="tel:<?= $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;" class="btn btn-primary btn-style-green mt-0 mt-md-0 d-md-none mx-auto d-block">
                                    <i class="fa fa-phone"></i> CALL OWNER
                                </a>
                            </div>
                            <?php 
                                for($i=1;$i<=3;$i++)
                                {
                                    if($vehicledetail[0]['relation'.$i] != NULL)
                                    {
                                        $getVehicleRelation = $this->db->query('select * from vehicle_relation where id='.$vehicledetail[0]['relation'.$i])->result_array();
                                        if($vehicledetail[0]['relation'.$i] != 3)
                                        {
                            ?>
                            <div class="col-lg-auto col-xl-auto col-sm-12 col-md-auto mt-1">
                                <h6 class="text-dark text-uppercase mb-0"> 
                                    <a href="tel:<?php echo $vehicledetail[0]['mobile'.$i]; ?>" style="width:max-content;" class="btn btn-primary btn-style-<?php if($i==1){ echo "yellow"; }else if($i == 2){ echo "red"; }else{ echo "four"; } ?> mt-2">
                                        <i class="fa fa-phone"></i> CALL <?php echo $getVehicleRelation[0]['name']; ?>
                                    </a>
                                </h6>  
                            </div>
                            <?php }else{ ?>
                            <div class="col-lg-auto col-xl-auto col-sm-12 col-md-auto mt-1">
                                <h6 class="text-dark text-uppercase mb-0"> 
                                    <a href="tel:<?php echo $vehicledetail[0]['mobile'.$i]; ?>" style="width:max-content;" class="btn btn-primary btn-style-<?php if($i==1){ echo "yellow"; }else if($i == 2){ echo "red"; }else{ echo "four"; } ?> mt-2">
                                        <i class="fa fa-phone"></i> CALL <?php echo $vehicledetail[0]['otherrelationname'.$i]; ?></span>
                                    </a>
                                </h6>  
                            </div>
                            <?php } ?>
                            <?php } } ?>
                        </div>
                        <?php }else{ ?>
                        <h6 class="text-dark my-3 text-center">
                            <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-inline d-none">
                                <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                     
                                <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                <path d="M41.1,15.7
                                							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                         C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                </svg>
                                <span>Call OWNER</span><span style="color: #11d011;
    font-size: 1.2rem;
    text-decoration: underline;"> Click Here</span>
                            </a>
                        </h6>
                        <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-none mx-auto d-block">
                            <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                 
                            <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                            							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                            							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                            							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                            							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                            							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                            <path d="M41.1,15.7
                            							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                            							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                            <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                            							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                     C65.7,8.6,67.8,10.4,69,11.4z"></path>
                            </svg>
                            <span>Call OWNER</span>&nbsp;<span style="color: #11d011;
    font-size: 1.2rem;
    text-decoration: underline;">Click Here</span>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <?php }else{ ?>
                        <?php 
                            if($this->session->userdata('user_login') != 'yes'){
                        ?>
                        <h6 class="text-dark my-3 text-center">
                            <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-inline d-none">
                                <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                     
                                <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                <path d="M41.1,15.7
                                							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                         C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                </svg>
                                <span>Call OWNER</span><span style="color: #11d011;
    font-size: 1.2rem;
    text-decoration: underline;"> Click Here</span>
                            </a>
                        </h6>
                        <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-none mx-auto d-block">
                            <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                 
                            <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                            							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                            							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                            							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                            							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                            							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                            <path d="M41.1,15.7
                            							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                            							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                            <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                            							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                     C65.7,8.6,67.8,10.4,69,11.4z"></path>
                            </svg>
                            <span>Call OWNER</span>&nbsp;<span style="color: #11d011;
    font-size: 1.2rem;
    text-decoration: underline;">Click Here</span>
                        </a>
                        <?php }else{ 
                            $getUserDetail = $this->db->query('select * from user where uid='.$vehicledetail[0]['userId'])->result_array();
                        ?>
                            <h6 class="text-dark mb-0 text-center mt-4">
                                <a href="tel:<?php echo $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;background:green!important;color:white!important;border:1px solid green!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-inline d-none">
                                    <!--<svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">-->
                                         
                                    <!--<path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4-->
                                    <!--							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0-->
                                    <!--							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3-->
                                    <!--							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6-->
                                    <!--							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8-->
                                    <!--							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>-->
                                    <!--<path d="M41.1,15.7-->
                                    <!--							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8-->
                                    <!--							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>-->
                                    <!--<path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2-->
                                    <!--							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8-->
                                    <!--         C65.7,8.6,67.8,10.4,69,11.4z"></path>-->
                                    <!--</svg>-->
                                    <i class="fa fa-phone"></i>
                                    <span>CALL OWNER</span>
                                    <!--<span style="color: #11d011;font-size: 1.2rem;text-decoration: underline;"> Click Here</span>-->
                                </a>
                            </h6>
                            <a href="tel:<?php echo $getUserDetail[0]['registration_mobile']; ?>" style="width:max-content;background:white!important;color:#130202!important;border:1px solid red!important;padding:1rem!important;" class="phone btn btn-primary btn-style-four mt-0 mt-md-0 d-md-none mx-auto d-block">
                            <i class="fa fa-phone"></i>
                            <span>CALL OWNER</span>
                        </a>
                        <?php } ?>
                    <?php } ?>
                <div class="row justify-content-center mt-4">
                    <div class="col-md-auto col-lg-auto col-sm-12 mt-2">
                        <?php 
                            if($this->session->userdata('user_login') == 'yes'){
                        ?>
                        <a href="<?php echo base_url(); ?>search_vehicle_details" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                        <?php }else{ ?>
                            <a href="<?php echo base_url(); ?>check-vehicle-details" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                        <?php } ?>
                    </div>
                    <div class="col-md-auto col-lg-auto col-sm-12 mt-2">
                        <a href="<?php echo base_url(); ?>" class="btn btn-primary save" style="width:-webkit-fill-available;"><i class="fa fa-home"></i> Homepage</a>
                    </div>
                </div>
            </div>
              <?php } ?>

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
            '<div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><a href="<?php echo base_url(); ?>login" class="w-100 save btn">Login</a></div><div class="col-lg-auto col-sm-12 col-md-auto"><a href="<?php echo base_url(); ?>landing/checkvehicleregister" class="w-100 next btn">Signup</a></div></div></div>',
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
            url:'<?php echo base_url(); ?>user/showVehicleRewardsAccordingly',
            timeout: 60000,
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
                        $('#photosspan').append('<div class="carousel-item active"><a href="'+parse.images[i]+'"  data-lightbox="roadtrip"><img src="'+parse.images[i]+'" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100 mobile_img" alt="..."></a></div>');      
                    }else{
                        $('#photosspan').append('<div class="carousel-item"><a href="'+parse.images[i]+'"  data-lightbox="roadtrip"><img src="'+parse.images[i]+'" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100 mobile_img" alt="..."></a></div>');   
                    }
                }
                $('#personname').html(parse.personname);
                $('#otherdetailspan').html(parse.otherdetail);
                $('#contactspan').attr('href',parse.contact);
            },
            error: function(xhr, textStatus, errorThrown) {
                if (textStatus == 'timeout') {
                    toastr.error('Please Try Again');
                    setTimeout(function()
                    {
                        location.reload();    
                    },2000);
                }
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
                timeout: 60000,
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
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
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
                timeout: 60000,
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
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
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