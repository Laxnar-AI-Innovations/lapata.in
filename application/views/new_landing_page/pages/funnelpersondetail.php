<style>
    #swal2-html-container{
        margin: 0 1rem!important;
    }
    
    div:where(.swal2-container) div:where(.swal2-popup){
        width:20em;
    }
    .social a.btn-circle .btn-google {
                color: #fff;
                background-color: #e44134;
                border-color: transparent;
            }
            .btn-police1{
                 color: #fff!important;
                background-color: green!important;
                border-color: transparent;
            }
             .btn-police2{
                 color: #fff!important;
                background-color: #e44134!important;
                border-color: transparent;
            }
             .btn-police3{
                 color: #fff!important;
                background-color: #5daed5!important;
                border-color: transparent;
            }
             .btn-police4{
                 color: #fff!important;
                background-color: orange!important;
                border-color: transparent;
            }
            .btn-group-sm>.btn.btn-circle, .btn.btn-circle.btn-sm {
                    width: 2.8rem;
                    height: 2.8rem;
                    font-size: .8rem;
                }
                .btn.btn-circle {
                    padding: 0;
                    border-radius: 100%!important;
                    width: 2.2rem;
                    height: 2.2rem;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1rem;
                    line-height: 1;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    margin-right:2px;
                }
                .btn:hover {
color: var(--bs-btn-hover-color);
background-color: var(--bs-btn-hover-bg);
border-color: var(--bs-btn-hover-border-color);
}
</style>
<style>
    body{
        background:#edf2fc;
    }
    .w-lg-max-content{
        width:100%!important;
    }
    @media screen and (min-width:991px) and (max-width:1220px)
    {   
        .w-lg-max-content{
            width:max-content!important;
        }
    }
    .phone {
        line-height: 32px!important;
        font-size: 20px!important;
        font-weight: bold!important;
        color: #333333;
        margin: 0;
        padding: 0.3rem 1rem!important;
    }
    .phone svg {
      width:28px;
      height:36px;
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
    padding: 7px 35px!important;
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
    .border-danger_new{
      border-color:#d9534f!important;
    }
    .text-left{
        text-align:left!important;
    }
}
</style>
<?php 
    if($isFound)
    {
        $getLabelSettings = $this->db->query('select * from settings where name="bottomdetailLabels"')->result_array();
        $decode1 = json_decode($getLabelSettings[0]['value'],true);
        $getLabelSettings = $this->db->query('select * from settings where name="facematchWatermarkLabels"')->result_array();
        $decode2 = json_decode($getLabelSettings[0]['value'],true);
        $getLabelSettings = $this->db->query('select * from settings where name="latestWatermarkLabels"')->result_array();
        $decode3 = json_decode($getLabelSettings[0]['value'],true);
?>
<div class="container">

  <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container px-0">
      <div class="row mx-0 justify-content-center">
        <div class="px-0 col-lg-12 col-xl-8 col-md-12 d-flex flex-column align-items-center justify-content-center">

          <div class="card w-100">
            <div class="card-body pb-0 pt-0 px-0 w-100">
                <div class="px-0 col-lg-12 col-md-12 col-sm-12 d-flex flex-column mx-lg-auto">
                    <div class="row mx-0 align-items-center" style="background:#f78b77;padding:0.5rem;">
                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                            <h1 class="text-light mb-0" style="font-size: 1.5rem;"><b>MISSING</b></h1>
                        </div>
                    </div>
                    <div class="row mx-0 align-items-center justify-content-center">
                        <div class="col-md-6 col-sm-12 col-lg-6 px-0">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-interval="2000" data-bs-ride="carousel">
                                <div class="carousel-inner" id="photosspan">
                                    <div class="carousel-item active">
                                        <a href="<?php echo base_url(); ?><?php echo $unknownperson[0]['Photo']; ?>"  data-lightbox="roadtrip">
                                            <img src="<?php echo base_url().''.$unknownperson[0]['Photo']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                        </a>
                                        <div class="carousel-caption" style="bottom:0;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>">
                                            <<?= $decode1['font-size']; ?> style="color:<?= $decode1['color']; ?>;">Face Photo 1</<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:52%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['top']; ?> 1</<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:52%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['top']; ?> 1</<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:22%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['bottom']; ?></<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:22%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['bottom']; ?></<?= $decode1['font-size']; ?>>
                                        </div>
                                    </div>
                                    <?php 
                                        if($unknownperson[0]['Photo1'] != NULL)
                                        {
                                    ?>
                                    <div class="carousel-item">
                                        <a href="<?php echo base_url(); ?><?php echo $unknownperson[0]['Photo1']; ?>"  data-lightbox="roadtrip">
                                            <img src="<?php echo base_url().''.$unknownperson[0]['Photo1']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                        </a>
                                        <div class="carousel-caption" style="bottom:0;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>">
                                            <<?= $decode1['font-size']; ?> style="color:<?= $decode1['color']; ?>;">Face Photo 2</<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:52%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['top']; ?> 2</<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:52%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['top']; ?> 2</<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:22%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['bottom']; ?></<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:22%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['bottom']; ?></<?= $decode1['font-size']; ?>>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($unknownperson[0]['Photo2'] != NULL)
                                        {
                                    ?>
                                    <div class="carousel-item">
                                        <a href="<?php echo base_url(); ?><?php echo $unknownperson[0]['Photo2']; ?>"  data-lightbox="roadtrip">
                                            <img src="<?php echo base_url().''.$unknownperson[0]['Photo2']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                        </a>
                                        <div class="carousel-caption" style="bottom:0;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>">
                                            <<?= $decode1['font-size']; ?> style="color:<?= $decode1['color']; ?>;">Face Photo 3</<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:52%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['top']; ?> 3</<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:52%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['top']; ?> 3</<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:22%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['bottom']; ?></<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:22%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode2['bottom']; ?></<?= $decode1['font-size']; ?>>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php
                                        $getLatestUserPhotos = $this->db->query('select * from funnelphotos where funnelId='.$unknownperson[0]['id'])->result_array();
                                        if(count($getLatestUserPhotos) > 0)
                                        {
                                            foreach($getLatestUserPhotos as $k=>$v)
                                            {
                                    ?>
                                    <div class="carousel-item">
                                        <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip">
                                            <img src="<?php echo base_url().''.$v['photourl']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                        </a>
                                        <div class="carousel-caption" style="bottom:0;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>">
                                            <<?= $decode1['font-size']; ?> style="color:<?= $decode1['color']; ?>;">General Photo <?= $k + 1; ?></<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:52%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode3['top']; ?> <?= $k + 1; ?></<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:52%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode3['top']; ?> <?= $k + 1; ?></<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:22%;right:unset;left:10%;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode3['bottom']; ?></<?= $decode1['font-size']; ?>>
                                        </div>
                                        <div class="carousel-caption" style="bottom:22%;right:10%;left:unset;padding-bottom:0;padding-top:0;font-family:<?= $decode1['font-family']; ?>;opacity:0.2;">
                                            <<?= $decode1['font-size']; ?> style="color:white;"><?= $decode3['bottom']; ?></<?= $decode1['font-size']; ?>>
                                        </div>
                                    </div>
                                    <?php }} ?>
                                </div>
                                <a href="javascript:void(0)" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </a>
                                <a href="javascript:void(0)" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php 
                        if($unknownperson[0]['rewardamount'] != NULL && $unknownperson[0]['rewardamount'] != 0)
                        {
                    ?>
                    <div class="row align-items-center justify-content-center mt-3 mx-0">
                        <div class="col-lg-4 col-sm-12 col-md-6 text-center py-2" style="border:1px solid red;">
                            <h4 class="mb-1" style="color:red;">Reward</h4>
                            <h4 class="mb-1" style="color:black;"><?php echo 'Rs. '.$unknownperson[0]['rewardamount']; ?></h4>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row align-items-center mt-3 mx-0">
                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                            <h6 class="mb-0">Application No: - <span style="color:back;"><?php echo $unknownperson[0]['Application_no'];?></span></h6>
                        </div>
                    </div>
                    <div class="row mx-0 justify-content-center">
                        <div class="col-lg-6 col-md-6 col-12 px-0" style="top:-50px!important;background:white;height:auto;min-height:150px;">
                            <div class="row mx-0 align-items-center justify-content-center">
                                <div class="col-md-12 px-0 col-12 mt-1 col-sm-12 col-lg-12 text-center">
                                    <h4 class="text-dark text-uppercase mb-0"><b id="personname">Name:- <?php echo ($unknownperson[0]['person_name'] != '' ? $unknownperson[0]['person_name'] : 'UNKNOWN'); ?></b></h4>
                                </div>
                            </div>
                            <div class="row mx-0 align-items-center justify-content-center">
                                <div class="col-md-12 px-0 col-12 col-sm-12 col-lg-12 text-center">
                                    <h5 class="text-dark text-uppercase mb-3" style="font-size:1.2rem;font-family:initial;"><b>Missing Date:- </b><b style="color:red;"><?php echo $unknownperson[0]['missingDate'] != NULL ? date('d-m-Y',strtotime($unknownperson[0]['missingDate'])) : date('d-m-Y',strtotime($unknownperson[0]['dateCreated'])); ?></b></h5>
                                </div>
                            </div>
                            <div class="row align-items-center mx-0">
                                <div class="col-6">
                                    <button type="button" style="color: white;background:#616161;width:100%;"><b><?php echo ($unknownperson[0]['Gender'] == 'boy' ? 'Male' : 'Female'); ?></b></button>
                                </div>
                                <div class="col-6">
                                    <button type="button" style="color: white;background:#616161;width:100%;padding:0.4rem 1rem;"><b><?php echo $unknownperson[0]['Age']; ?> YEARS</b></button>
                                </div>
                            </div>
                            <?php 
                                if($unknownperson[0]['Message'] != '')
                                {
                            ?>
                            <div class="row align-items-center mt-3 mx-0 border border-danger">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <p class="mb-0"><b style="color:black;">Message:- </b><b style="color:red;"><?php echo $unknownperson[0]['Message'] ?></b></p>
                                </div>
                            </div>
                            <?php } ?>
                            <?php 
                                if($unknownperson[0]['isKyc'] == 1)
                                {
                                    $getUserDetail = $this->db->query('select * from user where uid='.$unknownperson[0]['userId'])->result_array();   
                                }else{
                                    $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$unknownperson[0]['userId'])->result_array();
                                }
                            ?>
                            <div class="row align-items-center mt-3 mx-0">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <h6 class="mb-0">Uploaded By: - <?php echo $getUserDetail[0]['aadharname'].', '. $getUserDetail[0]['state'].', '.$getUserDetail[0]['district'];?></h6>
                                </div>
                            </div>
                            <div class="row align-items-center mt-3 mx-0">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <h6 class="mb-0">Uploaded Date: - <span style="color:grey;"><?php echo date('d-m-Y h:i A',strtotime($unknownperson[0]['dateCreated']));?></span></h6>
                                </div>
                            </div>
                            <?php 
                                if($this->session->userdata('user_login') == 'yes'){
                            ?>
                            <?php 
                                if($unknownperson[0]['well1'] != NULL || $unknownperson[0]['well2'] != NULL || $unknownperson[0]['well3'] != NULL)
                                {
                            ?>
                            <div class="row align-items-center mx-0 mt-3 justify-content-center" style="position:relative;">
                                <div class="col-md-12 text-center">
                                    <h6 class="text-dark">
                                        <?php 
                                            if($unknownperson[0]['well1'] != NULL)
                                            {
                                        ?>
                                        <a href="tel:<?php echo $unknownperson[0]['well1']; ?>" class="btn btn-circle btn-sm btn-police1 mt-2">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <?php }
                                            if($unknownperson[0]['well2'] != NULL){ 
                                        ?>
                                        <a href="tel:<?php echo $unknownperson[0]['well2']; ?>" class="btn btn-circle btn-sm btn-police2 mt-2">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <?php }
                                            if($unknownperson[0]['well3'] != NULL){ 
                                        ?>
                                        <a href="tel:<?php echo $unknownperson[0]['well3']; ?>" class="btn btn-circle btn-sm btn-police3 mt-2">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <?php } ?>
                                    </h6>
                                </div>
                            </div>
                            <?php }else{ 
                                $mobile = '';
                                if($unknownperson[0]['policeId'] != NULL)
                                {
                                    $mobile = $getPoliceDetail[0]['registration_mobile'];
                                }else{
                                    $mobile = $getngoDetail[0]['registration_mobile'];
                                }
                                
                            ?>
                                <div class="row align-items-center mx-0 mt-3 justify-content-center" style="position:relative;">
                                    <div class="col-md-12 text-center">
                                        <h6 class="text-dark">
                                            <a href="tel:<?php echo $mobile; ?>" class="btn btn-circle btn-sm btn-police1 mt-2">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php }else{ 
                                if(!isset($_SESSION['landingMob']))
                                {
                            ?>
                            <div class="row align-items-center my-3 justify-content-center mx-0">
                                <div class="col-auto text-center">
                                    <h6 class="text-dark mb-0">
                                        <span class="mb-3">To Contact </span>
                                            <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mb-3 mt-md-0">
                                            <svg version="1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                                 
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
                                            <span>Click Here</span>
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <?php 
                                if($unknownperson[0]['well1'] != NULL || $unknownperson[0]['well2'] != NULL || $unknownperson[0]['well3'] != NULL)
                                {
                            ?>
                            <div class="row align-items-center mx-0 mt-3 justify-content-center" style="position:relative;">
                                <div class="col-md-12 text-center">
                                    <h6 class="text-dark">
                                        <?php 
                                            if($unknownperson[0]['well1'] != NULL)
                                            {
                                        ?>
                                        <a href="tel:<?php echo $unknownperson[0]['well1']; ?>" class="btn btn-circle btn-sm btn-police1 mt-2">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <?php }
                                            if($unknownperson[0]['well2'] != NULL){ 
                                        ?>
                                        <a href="tel:<?php echo $unknownperson[0]['well2']; ?>" class="btn btn-circle btn-sm btn-police2 mt-2">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <?php }
                                            if($unknownperson[0]['well3'] != NULL){ 
                                        ?>
                                        <a href="tel:<?php echo $unknownperson[0]['well3']; ?>" class="btn btn-circle btn-sm btn-police3 mt-2">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <?php } ?>
                                    </h6>
                                </div>
                            </div>
                            <?php }else{ 
                                $mobile = '';
                                if($unknownperson[0]['policeId'] != NULL)
                                {
                                    $mobile = $getPoliceDetail[0]['registration_mobile'];
                                }else{
                                    $mobile = $getngoDetail[0]['registration_mobile'];
                                }
                                
                            ?>
                                <div class="row align-items-center mx-0 mt-3 justify-content-center" style="position:relative;">
                                    <div class="col-md-12 text-center">
                                        <h6 class="text-dark">
                                            <a href="tel:<?php echo $mobile; ?>" class="btn btn-circle btn-sm btn-police1 mt-2">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php } } ?>
                        </div>
                        <hr class="border border-danger my-2">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <h5 class="text-center d-flex align-items-center mb-0" style="color:red;">लापता व्यक्ति को खोजें khoji.in के साथ . Watch Full Video:- &nbsp;<i class="fa fa-play-circle-o fa-2x" style="cursor:pointer;color:black;" onclick="showVideo()"></i></h5>
                            </div>
                        </div>
                        <hr class="border border-danger my-2">
                        <div class="row px-md-5 px-sm-3">
                            <div class="col-md-12 text-center text-danger px-1 pb-3 p-3" style="font-weight:bold;">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-12 col-md-8">
                                        कृपया इस व्यक्ति को खोजने में मेरी मदद करें। कृपया इस लिंक को अधिक से अधिक लोगों को शेयर करने की कृपा करें।  
                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-md-4">
                                        <button type="button" class="btn-style-red btn btn-primary d-block w-100 disabled-on-loading" style="background:black!important" onclick="showShare('<?= $unknownperson[0]['Application_no']; ?>','<?= $unknownperson[0]['Photo']; ?>')"> Share <i class="fa fa-share-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
          <div class="share-dialog">
              <header>
                <button class="close-button"><svg><use href="#close"></use></svg></button>
              </header>
              <div class="targets">
                <a class="button">
                  <svg>
                    <use href="#facebook"></use>
                  </svg>
                  <span>Facebook</span>
                </a>
                
                <a class="button">
                  <svg>
                    <use href="#twitter"></use>
                  </svg>
                  <span>Twitter</span>
                </a>
                
                <a class="button">
                  <svg>
                    <use href="#linkedin"></use>
                  </svg>
                  <span>LinkedIn</span>
                </a>
                
                <a class="button">
                  <svg>
                    <use href="#email"></use>
                  </svg>
                  <span>Email</span>
                </a>
              </div>
              <div class="link">
                <div class="pen-url">https://codepen.io/ayoisaiah/pen/YbNazJ</div>
                <button class="copy-link">Copy Link</button>
              </div>
            </div>
            
            <svg class="hidden">
              <defs>
                <symbol id="share-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></symbol>
                
                <symbol id="facebook" viewBox="0 0 24 24" fill="#3b5998" stroke="#3b5998" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></symbol>
                
                <symbol id="twitter" viewBox="0 0 24 24" fill="#1da1f2" stroke="#1da1f2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></symbol>
                
                <symbol id="email" viewBox="0 0 24 24" fill="#777" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></symbol>
                
                <symbol id="linkedin" viewBox="0 0 24 24" fill="#0077B5" stroke="#0077B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></symbol>
                
                <symbol id="close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="9" x2="15" y2="15"></line><line x1="15" y1="9" x2="9" y2="15"></line></symbol>
              </defs>
            </svg>

        </div>
      </div>
    </div>

  </section>

</div>
<?php }else{ ?>
<div class="container">
    <section class="section register min-vh-50 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container px-0">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="card mb-2 px-4 py-2">
                        <div class="card-body p-0">
                            <div class="row">
                                <?php 
                                    if(count($unknownperson) > 0)
                                    {
                                ?>
                                <div class="col-md-12 text-center border border-danger p-3">
                                    <h4 class="text-danger text-uppercase mb-0" style="font-weight:bold;"><span class="text-success">Missing Status is</span> Closed!</h4>
                                    <h5 class="text-danger"><b>Closed Date: - <span style="color:black;"><?php echo date('d-m-Y h:i A',strtotime($unknownperson[0]['dateCreated'])); ?></span></b></h5>
                                </div>
                                <?php }else{ ?>
                                    <div class="col-md-12 text-center border border-danger p-3">
                                        <h4 class="text-danger text-uppercase mb-0" style="font-weight:bold;">Missing Status not found!</h4>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center p-3">
                                    <h6 class="text-uppercase mb-0" style="font-weight:bold;">To know more or use our services.</h6>
                                </div>
                            </div>
                            <?php 
                                if(!$this->session->userdata('user_login') == 'yes'){
                            ?>
                            <div class="row">
                                <div class="col-md-12 text-center p-0">
                                    <a href="<?php echo base_url(); ?>landing" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> <b>Login</b></a>
                                    <a href="<?php echo base_url(); ?>create-an-account" class="ms-md-2 btn btn-primary"><i class="fas fa-user-plus"></i> <b>Sign up </b></a>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="row">
                                <div class="col-md-12 text-center p-3">
                                    <?php 
                                        if($_SESSION['login_type'] == 'user')
                                        {
                                      ?>
                                    <a href="<?php echo base_url(); ?>user-dashboard" class="btn btn-sm btn-primary rounded-pill" >Go to Dashboard</a>
                                    <?php }else if($_SESSION['login_type'] == 'police')
                                        { 
                                    ?>
                                    <a href="<?php echo base_url(); ?>police" class="btn btn-sm btn-primary rounded-pill" >Go to Dashboard</a>
                                    <?php }else{ 
                                        if($_SESSION['login_type'] != 'NonKyc')
                                        {
                                    ?>
                                    <a href="<?php echo base_url(); ?>non-kyc-dashboard-profile" class="btn btn-sm btn-primary rounded-pill" >Go to Dashboard</a>
                                    <?php }else{ ?>
                                    <a href="<?php echo base_url(); ?>ngo" class="btn btn-sm btn-primary rounded-pill" >Go to Dashboard</a>
                                    <?php } } ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php } ?>
<style>
    .hidden {
  display: none;
}

svg {
  width: 20px;
  height: 20px;
  margin-right: 7px;
}

button, .button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: auto;
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: center;
  font-size: 14px;
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: 2px;
  text-transform: capitalize;
  text-decoration: none;
  white-space: nowrap;
  border-radius: 4px;
  border: 1px solid #ddd;
  cursor: pointer;
}

button:hover, .button:hover {
  border-color: #cdd;
}

.share-button, .copy-link {
  padding-left: 30px;
  padding-right: 30px;
}

.share-button, .share-dialog {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.share-dialog {
  display: none;
  width: 95%;
  max-width: 500px;
  box-shadow: 0 8px 16px rgba(0,0,0,.15);
  z-index: -1;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 4px;
  background-color: #fff;
}

.share-dialog.is-open {
  display: block;
  z-index: 2;
}

header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}

.targets {
  display: grid;
  grid-template-rows: 1fr 1fr;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
  margin-bottom: 20px;
}

.close-button {
  background-color: transparent;
  border: none;
  padding: 0;
}

.close-button svg {
  margin-right: 0;
}

.link {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  border-radius: 4px;
  background-color: #eee;
}

.pen-url {
  margin-right: 15px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
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
          customClass:{
            popup:'py-0',
            title:'pt-0'
          },
          allowOutsideClick:false,
          html:
            '<h6 class="text-center mt-3">Choose the suitable option to contact</h6><div class="form-group mb-2 justify-content-center"><img src="<?= base_url(); ?>assets/icons/calling.webp" style="width:100px;height:75px;"></div><div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto px-0 col-sm-12 col-md-auto mb-3"><button onclick="saveCallingId(`withoutLogin`)" class="w-100 btn-style-grey text-light disabled-on-loading btn phone"> <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve"><path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path><path d="M41.1,15.7c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path><path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8C65.7,8.6,67.8,10.4,69,11.4z"></path></svg>Mobile Verification &nbsp;<i class="fa fa-mobile fa-1x"></i></button></div><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="saveCallingId(`login`)" class="w-100 btn-style-green disabled-on-loading btn phone"> <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve"><path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path><path d="M41.1,15.7c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path><path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8C65.7,8.6,67.8,10.4,69,11.4z"></path></svg> Login  &nbsp;<i class="fa fa-sign-in"></i></button></div><div class="col-lg-auto col-sm-12 col-md-auto"><button onclick="saveCallingId(`signup`)" class="w-100 btn-style-five disabled-on-loading btn phone"> <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve"><path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path><path d="M41.1,15.7c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path><path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8C65.7,8.6,67.8,10.4,69,11.4z"></path></svg> Signup  &nbsp;<i class="fa fa-vcard"></i></button></div></div></div>',
          showCloseButton: true,
          showCancelButton: false,
          focusConfirm: false,
          showConfirmButton:false
        }) 
    }
    
    function showShare(appNo,photo)
    {
        Swal.fire({
            title: '<strong style="font-size:17px;color:black;">Application No- '+appNo+'</strong>',
            allowOutsideClick:false,
            customClass:{
                htmlContainer: 'mx-0 mt-2',
                actions:'mt-1',
                title:'pt-0',
                popup:'pb-1'
            },
            html:
                `<hr class="mt-0"><div class="row justify-content-center mx-0 align-items-center"><div class="col-md-12 col-sm-12 mb-3"><button type="button" style="padding:0.5rem!important;border-radius:0rem!important;white-space:break-spaces;" class="save d-flex align-items-center btn-style-netflix-1 btn btn-primary d-block w-100 disabled-on-loading" onclick="share('with','`+appNo+`')"> <img src="<?php echo base_url(); ?>`+photo+`" style="width:50px;height:50px;"> - Share missing person detail's link <br><br>with photo</button></div><div class="col-md-12 col-sm-12 mb-2"><button type="button" style="padding:0rem!important;border-radius:0rem!important;white-space:break-spaces;" class="mt-0 save btn-style-netflix-1 btn btn-primary d-block d-flex align-items-center w-100 disabled-on-loading" onclick="share('without','`+appNo+`')"> <img src="<?php echo base_url(); ?>assets/images/khoji.webp" style="width:100px;height:100px;">- Share missing person detail's link <br><br>without photo</button></div></div>`,
            showCloseButton: false,
            showCancelButton: true,
            'cancelButtonText':'Back',
            showConfirmButton:false
        })
    }
    
    function showVideo()
    {
        Swal.fire({
          allowOutsideClick:false,
          html:
            '<iframe allowfullscreen="true" class="mt-5" src="https://khoji-new.s3.ap-south-1.amazonaws.com/guidance-new.mp4"></iframe>',
          showCloseButton: true,
          showCancelButton: false,
          focusConfirm: false,
          showConfirmButton:false
        })
    }
    
    function saveCallingId(logintype)
    {
        if(logintype == 'withoutLogin')
        {
            Swal.fire({
              title: '<span class="text-danger" style="font-size:1rem;">Note- </span><span style="font-size:1rem;color:black;">To Contact Verify Your Mobile Number</span>',
              customClass:{
                popup:'py-0',
                title:'pt-0'
              },
              allowOutsideClick:false,
              <?php 
                if($_SESSION['previousType'] == 'facematch')
                {
              ?>
              html:
                `<form class="row g-3 mx-0 needs-validation" method="post" action="<?php echo base_url(); ?>landing/checkPersonFaceUpdated/step2" novalidate id="stepCallingForm">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
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
                        <button class="btn btn-primary w-100 disabled-on-loading btn-style-green" id="btn2" type="button" onclick="saveForm(this)"> Next <i class="fa fa-arrow-circle-right"></i></button>
                        <div class="row px-0 mx-0 mt-4" style="justify-content:right;">
                            <div class="col-md-auto col-sm-6 col-8 px-0" style="text-align:right;">
                                <button type="button" onclick="resendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading" > Resend OTP <i class="bi bi-bootstrap-reboot"></i></button>
                            </div>
                        </div>
                    </div>
                </form>`,
              <?php }else{ ?>
              html:
                `<form class="row g-3 mx-0 needs-validation" method="post" action="<?php echo base_url(); ?>landing/checkPersonUpdated/step1" novalidate id="stepCallingForm">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
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
                        <button class="btn btn-primary w-100 disabled-on-loading btn-style-green" id="btn2" type="button" onclick="saveForm(this)"> Next <i class="fa fa-arrow-circle-right"></i></button>
                        <div class="row px-0 mx-0 mt-4" style="justify-content:right;">
                            <div class="col-md-auto col-sm-6 col-8 px-0" style="text-align:right;">
                                <button type="button" onclick="resendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading" > Resend OTP <i class="bi bi-bootstrap-reboot"></i></button>
                            </div>
                        </div>
                    </div>
                </form>`,
              <?php } ?>
              showCloseButton: true,
              showCancelButton: false,
              focusConfirm: false,
              showConfirmButton:false
            })
        }else if(logintype == 'login')
        {
            location.href="<?= base_url(); ?>landing/login?id=<?= $id; ?>";
        }else{
            location.href="<?= base_url(); ?>landing/unknownregister?id=<?= $id ?>";
        }
    }
    
    function share(type,id)
    {
        if (navigator.share) {
            navigator.share({
              title: 'Khoji',
              url: '<?php echo base_url(); ?>find-lapata-person?id='+id+'&type='+type,
              text:'🙏🙏कृपया, इस पोस्ट को ज्यादा से ज्यादा शेयर करे I शायद, आप के एक शेयर से यह व्यक्ति मिल जाए I '
            })
        } else {
            const shareButton = document.querySelector('.share-button');
            const shareDialog = document.querySelector('.share-dialog');
            const closeButton = document.querySelector('.close-button');
            
            shareButton.addEventListener('click', event => {
              shareDialog.classList.add('is-open');
            });
            
            closeButton.addEventListener('click', event => {
              shareDialog.classList.remove('is-open');
            });
        }
    }
    
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
                <?php 
                    if($_SESSION['previousType'] == 'facematch')
                    {
                ?>
                url:'<?php echo base_url(); ?>landing/sendSearchFaceOtp',
                <?php }else{ ?>
                url:'<?php echo base_url(); ?>landing/sendCheckOtpUpdated',
                <?php } ?>
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
                        $(ele).removeAttr('disabled');
                        $('#otp').attr('required',true);
                        toastr.success('OTP Sent Successfully');
                        $('#mobileNumber').attr('readonly',true);   
                        $('#sendOtpDiv').addClass('d-none');
                        $('#otpdiv').removeClass('d-none');
                    }else{
                        $(ele).removeAttr('disabled');
                        toastr.error((parse.message ? parse.message : parse.msg));
                        $('#otpdiv').addClass('d-none');
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
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
            $('#otpdiv').addClass('d-none');
        }
    }
    
    function saveForm(ele)
    {
        if($('#otp').val() != '')
        {
            $(ele).attr('disabled','disabled');
            let data = new FormData($('#stepCallingForm')[0]);
            $.ajax({
                url:$('#stepCallingForm').attr('action'),
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
                        location.reload();
                    }else{
                        toastr.error(parse.message);
                        $(ele).removeAttr('disabled');
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
            toastr.error('Please Enter OTP');
            $(ele).removeAttr('disabled');
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
                <?php 
                    if($_SESSION['previousType'] == 'facematch')
                    {
                ?>
                url:'<?php echo base_url(); ?>landing/sendSearchFaceOtp',
                <?php }else{ ?>
                url:'<?php echo base_url(); ?>landing/sendCheckOtpUpdated',
                <?php } ?>
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
                        toastr.success('OTP Sent Successfully');
                        $(ele).removeAttr('disabled');
                    }else{
                        toastr.error((parse.message ? parse.message : parse.msg));
                        $(ele).removeAttr('disabled');
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
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
        }
    }
    
    function showRewardsAccordingly(Id)
    {
        location.href="<?php echo base_url(); ?>user/missingpersondetail/"+Id;
    }
</script>