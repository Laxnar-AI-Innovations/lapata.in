<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    @media (max-width:1900px) {

	.gallery {
		padding-left: 20px;
	}

	.shiva_height{
        height:530px;
        max-height:530px;
    }
}

@media (max-width:768px) {

	.shiva_height{
        height:450px;
        max-height:450px;
    }
}

@media (max-width:450px) {

	.shiva_height{
       height:auto;
        max-height:fit-content;
    }
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
    
    div:where(.swal2-container) div:where(.swal2-popup){
            width:auto;
        }
    #swal2-html-container{
        margin: 0 1rem!important;
    }


</style>
<!--end card css-->
<main id="main" class="main">
    <div class="container-fluid px-0">
        <div class="row justify-content-center">
            <div class="col-xl-12 px-0">
                <div class="row mx-0">
                    <?php
                        if(isset($_SESSION['previous_url']))
                        {
                            redirect(base_url().'user-dashboard','refresh');
                        }
                        $getDetails = $this->db->query('select * from searchfacehistoryafterlogin where Id='.$_SESSION['searchFaceIdAfterLogin'])->result_array();
                        $unknownIds = array();
                        if($getDetails[0]['matchedUnknownIds'] != '')
                        {
                            $unknownIds = array_unique(explode(',',$getDetails[0]['matchedUnknownIds']));   
                        }
                        $unknownperson = array();
                        if(count($unknownIds) > 0)
                        {
                            foreach($unknownIds as $k=>$v)
                            {
                                $this->db->where('id',$v);
                                array_push($unknownperson,$this->db->get('unknown_person')->result_array());
                            }
                        }
                        if(count($unknownperson) > 0)
                        {
                            $photos = array();
                            foreach($unknownIds as $k=>$v)
                            {
                                $getDetail = $this->db->query('select * from unknown_person where id='.$v)->result_array();
                                array_push($photos,base_url().''.$getDetail[0]['Photo']);
                            }
                    ?>
                    <div class="card col-12">
                        <div class="card-header py-0">
                            <div class="row align-items-center my-3 d-md-flex d-none justify-content-center">
                                <div class="col-12 col-md-2 border border-5 border-dark px-0">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-interval="2000" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php 
                                                foreach($photos as $k=>$v)
                                                {
                                            ?>
                                            <div class="carousel-item <?= $k == 0 ? 'active' : ''; ?>">
                                                <a href="<?php echo $v; ?>" data-lightbox="roadtrip">
                                                    <img src="<?php echo $v; ?>" style="width:100%;height:200px;object-fit:fill;">
                                                </a>
                                            </div>
                                            <?php } ?>
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
                            </div>
                            <div class="row align-items-center my-3 d-md-flex d-none">
                                <div class="col-md-6 col-12">
                                    <h6 class="text-center card-title pb-2 mb-0 text-success" style="font-size:1.3rem;">Some Similar Matches Found !!</h6>  
                                    <div class="row align-items-center mx-1 mb-3 p-1" style="justify-content:space-around;">
                                        <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-3 border-danger text-center <?= (count($unknownperson) > 0) ? '' : 'd-none'; ?>">
                                            <a target="_blank" href="<?= base_url(); ?>view-face-match-results" class="text-danger" style="text-decoration:none;font-weight:bold;">Appeal for Identification - <?php echo (count($unknownperson) > 1 ? count($unknownperson) : count($unknownperson)); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 text-md-end text-center mb-3 mb-md-0">
                                    <a href="<?= base_url(); ?>view-face-match-results" target="_blank" class="btn btn-primary btn-style-five">View Results</a>
                                </div>
                            </div>
                            <div class="row align-items-center d-block d-md-none">
                                <div class="col-md-6 col-12 px-0">
                                    <h6 class="text-center card-title pb-2 mb-0 text-success" style="font-size:1.1rem;">Some Similar Matches Found !!</h6>  
                                </div>
                                <div class="col-10 mx-auto col-md-2 border border-5 border-dark px-0">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-interval="2000" data-bs-ride="carousel">
                                        <div class="carousel-inner" id="photosspan">
                                            <?php 
                                                foreach($photos as $k=>$v)
                                                {
                                            ?>
                                            <div class="carousel-item <?= $k == 0 ? 'active' : ''; ?>">
                                                <a href="<?php echo $v; ?>" data-lightbox="roadtrip">
                                                    <img src="<?php echo $v; ?>" style="width:100%;height:200px;object-fit:fill;">
                                                </a>
                                            </div>
                                            <?php } ?>
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
                                <div class="row align-items-center mx-1 mb-3 p-1" style="justify-content:space-around;">
                                    <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-3 border-danger text-center <?= (count($unknownperson) > 0) ? '' : 'd-none'; ?>">
                                        <a target="_blank" href="<?= base_url(); ?>view-face-match-results" class="text-danger" style="text-decoration:none;font-weight:bold;">Appeal for Identification - <?php echo (count($unknownperson) > 1 ? count($unknownperson) : count($unknownperson)); ?></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 text-md-end text-center mb-3 mt-2 my-md-0">
                                    <a href="<?= base_url(); ?>view-face-match-results" target="_blank" class="btn btn-primary btn-style-five">View Results</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none align-items-center mx-1 mb-3 p-1 justify-content-center" style="box-shadow:0px 1px 2px grey;background:white;">
                        <h5 class="text-danger text-center" style="font-family:cursive;"><b>Your Uploaded Photo</b></h5>
                        <div class="col-auto px-0 mb-2" style="border:5px solid black;">
                            <a href="<?php echo base_url().''.$getDetails[0]['mainPhoto']; ?>" data-lightbox="roadtrip">
                                <img src="<?php echo base_url().''.$getDetails[0]['mainPhoto']; ?>" style="height:200px;">
                            </a>
                        </div>
                    </div>
                    <?php
                        foreach($unknownperson as $k=>$row)
                        {
                            $row = $row[0];
                    ?>
                    <div class="col-lg-4 d-none col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                        <div class="card mb-3 shiva_height">
                            <div class="card-body px-0 pt-3">
                                <div class="row align-items-center px-0 mx-0 justify-content-center">
                                    <?php
                                        if($row['Photo'] != '' || $row['Photo'] != NULL)
                                        {
                                    ?>
                                    <div class="col-6 text-center">
                                        <h6 class="text-center text-danger mb-0" style="font-size:0.8rem;">APPEAL FOR IDENTIFICATION </h6>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button type="button" class="btn btn-dark" onclick="share('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;padding:10px 15px;"><i class="fa fa-share-alt"></i></button>
                                        <button type="button" class="btn btn-primary" onclick="view('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
                                    </div>
                                    <div class="col-12">
                                        <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:black;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                                    </div>
                                    <div class="col-12">
                                        <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                                    </div>
                                    <div class="col-5 ">
                                        <a href="<?php echo base_url().$row['Photo']?>" data-lightbox="roadtrip">
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['Photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                        </a>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="col-5 ">
                                        <?php if($row['Gender'] == 'boy'){ ?>
                                        <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                        <?php }else{ ?>
                                        <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                        <?php } ?>
                                    </div>
                                    <?php } ?>
                                    <div class="col-7 px-0">
                                        <?php if($row['person_name'] != '' || $row['person_name'] != NULL){ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;font-size:0.8rem;">Name - </b><span style="color:black;"><?php echo $row['person_name']??"--" ?></span></p>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;font-size:0.8rem;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                        <?php }else{ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;font-size:0.8rem;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                        <?php } ?>
                                       
                                        <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;font-size:0.8rem;">Age Band - </b><span style="color:black;"><?php echo $row['Age']??"--"?></span></p>
                                        <?php } ?>
                                    </div>
                                </div>
                                 <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                                  <!--<div class="row col-6 px-4">-->
                                  <!--          <h5 class="card-title text-start py-0 fs-6 mb-0"> <b style="color:black;font-weight:600;">Aadhaar No - </b><br><span style="color:black;"><?php echo $row['aadharNumber']??"--"?></span></h5>-->
                                  <!--    </div>-->
                                        <?php } ?>
                                <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                                <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                                   <p class="card-title text-start py-0 fs-6"><b style="color:red;font-weight:500;">Message:- </b><b style="color:black;font-size:.8rem!important;" class="message"><?php echo $row['Message']??"--"?></b></p> 
                                </div>
                                <?php } ?>
                                <hr class="my-0">
                                <?php 
                                    if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                    {
                                        $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                ?>
                                <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                    <div class="col-12 text-start">
                                         <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:black;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                                      
                                    </div>
                                </div>
                                <?php }else{ 
                                    if($row['policeId'] != NULL)
                                    {
                                        $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                ?>
                                <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                    <div class="col-12 text-start">
                                         <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                         <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
                                         <?php echo $getPoliceDetails[0]['district'].' - '; ?><?php echo $getPoliceDetails[0]['state']; ?></b></p>
                                    </div>
                                </div>
                                <?php }else{ 
                                    $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                    if(count($getUserDetail) > 0)
                                    {
                                ?>
                                <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                    <div class="col-12 text-start">
                                         <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                         <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                         <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                                    </div>
                                </div>
                                <?php } } ?>
                                <?php } ?>
                                <?php 
                                    if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                    {
                                        $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                ?>
                                <div class="row w-100 mx-0 align-items-center">
                                    <div class="col-12 ">
                                        <b style="font-size:.8rem!important">Contact To: - NGO </b>
                                    </div>
                                    <div class="col-12 text-center">
                                        <?php 
                                            if($this->session->userdata('user_login') == 'yes'){
                                        ?>
                                            <a href="tel:<?= $getNgoDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                                <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                                <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                            <?php }
                                              if($row['well3']!='' || $row['well3']!=null) { ?>
                                                <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                            <?php } ?>
                                        <?php }else{ ?>
                                        <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                        <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                        <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                        <?php }
                                          if($row['well3']!='' || $row['well3']!=null) { ?>
                                            <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php }else{ 
                                    if($row['policeId'] != NULL)
                                    {
                                        $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                ?>
                                <div class="row w-100 mx-0 align-items-center">
                                    <div class="col-12 ">
                                        <b style="font-size:.8rem!important">Contact To: - POLICE THANA</b>
                                    </div>
                                    <div class="col-12 text-center">
                                        <?php 
                                            if($this->session->userdata('user_login') == 'yes'){
                                        ?>
                                        <a href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                        <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                        <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                        <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                          <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                        <?php }
                                          if($row['well3']!='' || $row['well3']!=null) { ?>
                                          <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                        <?php } ?>
                                        <?php }else{ ?>
                                        <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                        <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                        <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                        <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                          <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                        <?php }
                                          if($row['well3']!='' || $row['well3']!=null) { ?>
                                          <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php }else{ 
                                    $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                ?>
                                <div class="row w-100 mx-0 align-items-center">
                                    <div class="col-12 ">
                                        <b style="font-size:.8rem!important">Contact To: - <?php echo $getUserDetail[0]['aadharname']; ?></b>
                                    </div>
                                    <div class="col-12 text-center">
                                        <?php 
                                            if($this->session->userdata('user_login') == 'yes'){
                                        ?>
                                        <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                        <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                        <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                          <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                        <?php }
                                          if($row['well3']!='' || $row['well3']!=null) { ?>
                                          <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                        <?php } ?>
                                        <?php }else{ ?>
                                        <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                        <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                        <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                        <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                          <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                        <?php }
                                          if($row['well3']!='' || $row['well3']!=null) { ?>
                                          <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                                <br>
                            </div>
                        </div>
                    </div>
                    <?php 
                            } 
                        }
                    ?>
                </div>
            </div>
            <?php 
                if(!isset($_GET['type']))
                {
            ?>
            <?php
                $getTransactions = $this->db->query('select * from uploadtransactions where Id='.$_GET['id'])->result_array();
                $getPackageDetails = $this->db->query('select * from packages where Id='.$getTransactions[0]['packageId'])->result_array();
                $date1 = date('Y-m-d',strtotime('+'.$getPackageDetails[0]['validity'].' days'));
                $date2 = date('Y-m-d');
                $diff = abs(strtotime($date2) - strtotime($date1));
                $years = floor($diff / (365*60*60*24));
                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                $label = '';
                if($days == 0)
                {
                    if($months > 1)
                    {
                        if($years == 0)
                        {
                            $label = $months.' Months' ;       
                        }else{
                            if($years > 1)
                            {
                                $label = $years.' Years' ;       
                            }else{
                                $label = 'Yearly' ;       
                            }
                        }
                    }else{
                        $label = 'Monthly' ; 
                    }
                }else{
                    $label = $days.' Day';
                }
            ?>
            <div class="col-sm-12 col-lg-4 col-md-5 me-md-3 mt-0 card px-0">
                <div class="card-header py-2">
                    <div class="row" style="justify-content:center;">
                        <div class="col-12 text-center" style="color:green;">
                            <i class="fa fa-check-circle" style="font-size:1.5em;"></i>
                            <br>
                             <?php 
                                if($getPackageDetails[0]['validity'] > 1)
                                {
                                    if($getPackageDetails[0]['amount'] == 0)
                                    {
                            ?>
                            <h6>UPLOADED <br> SUCCESSFULLY</h6>
                            <?php }else{ ?>
                            <h6>PAYMENT <br> SUCCESSFUL</h6>
                            <?php } }else{ ?>
                            <h6>FREE</h6>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 align-items-center my-3">
                    <div class="row px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> STATUS</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:green;"><b>Active</b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> PLAN</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo $label; ?></b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> VALID FROM</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo date('d-m-Y',strtotime($getTransactions[0]['dateCreated'])); ?></b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> VALID TILL</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo date('d-m-Y',strtotime($getTransactions[0]['expiryDate'])); ?></b></h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row mt-2 mb-1 justify-content-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <button type="button" onclick="proceed(this)" class="btn mt-0 btn-style-green disabled-on-loading" style="border-radius:0!important;padding:15px 50px!important;"> Proceed <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }else{ 
                if($_GET['type'] == 'personal')
                {
                    $getTransactions = $this->db->query('select * from uploadtransactions where Id='.$_GET['id'])->result_array();
            ?>
            <div class="col-sm-12 col-lg-auto col-md-auto me-md-3 mt-0 card px-0">
                <div class="card-header py-2">
                    <div class="row" style="justify-content:center;">
                        <div class="col-12 text-center" style="color:green;">
                            <i class="fa fa-check-circle" style="font-size:1.5em;"></i>
                            <br>
                            <h6>PAYMENT <br> SUCCESSFUL</h6>
                            <h5><b>Your Profile <i class="fa fa-user"></i> Completed With <br>Face Match Facility Active !</b></h5>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 align-items-center my-3">
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> PLAN</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b>1 Year</b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> VALID FROM</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo date('d-m-Y',strtotime($getTransactions[0]['dateCreated'])); ?></b></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-2 align-items-end" style="justify-content:space-between;">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h6><b><i class="fa fa-check-circle" style="color:green;font-size:1.5em;"></i> VALID TILL</b></h6>
                        </div>
                        <div class="col-5 text-center">
                            <h6 style="color:black;"><b><?php echo date('d-m-Y',strtotime($getTransactions[0]['expiryDate'])); ?></b></h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row mt-2 mb-1 justify-content-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <button type="button" onclick="proceed(this)" class="btn mt-0 btn-style-green disabled-on-loading" style="border-radius:0!important;padding:5px 5px!important;"> Upload Your Face Match Photo <i class="fa fa-arrow-circle-right"></i><br><img src="<?php echo base_url(); ?>assets/images/faceicon.png" style="width:50px;height:50px;"></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</main>
<script>
    function proceed(ele)
    {
        <?php 
            $unknowndetails = $this->db->query('select * from unknown_person where Application_no="'.($getTransactions[0]['idNumber'] ?? 0).'"')->result_array();
            if(count($unknowndetails) > 0)
            {
        ?>
        Swal.fire({
            html:'<div class="row justify-content-center"><div class="col-12"><div id="lottie-popup-container" style="width:100%;height:200px;"></div></div></div><h6 style="text-align:center;color:black;font-weight:bold;" class="mb-2">Missing Person added successfully.</h6><h6 class="text-center"><b style="color:crimson;">Person Name:- </b><b style="color:green;"><?= $unknowndetails[0]['person_name']; ?></b></h6>',
            willOpen : () => {
                lottie.loadAnimation({
                container: document.getElementById('lottie-popup-container'), // Animation render hone ka container
                renderer: 'svg', // SVG format me render karne ke liye
                // loop: true, // Animation loop kare
                // autoplay: true, // Animation automatically play kare
                path: '<?= base_url(); ?>assets/jsons/Animation - 1735135651799.json', // JSON file ka path
              });
            },
            customClass:{
                actions:'mt-1'
            },
            allowOutsideClick:false,
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: true,
            showConfirmButton:true,
            confirmButtonText:'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                <?php 
                    if(!$_GET['type'])
                    {
                ?>
                <?php 
                    if(strpos($_GET['redirect'],'editLapataDetails') !== false)
                    {
                ?>
                $(ele).attr('disabled',true);
                location.href="<?php echo $_GET['redirect']; ?>&pn=4";
                <?php }else{ ?>
                $(ele).attr('disabled',true);
                location.href="<?php echo $_GET['redirect']; ?>";
                <?php } ?>
                <?php }else{ ?>
                location.href="<?php echo $_GET['redirect']; ?>";
                <?php } ?>
            }
        })
        <?php }else{ ?>
        Swal.fire({
            html:'<div class="row justify-content-center"><div class="col-12"><div id="lottie-popup-container" style="width:100%;height:200px;"></div></div></div><h6 style="text-align:center;color:black;font-weight:bold;" class="mb-2">Missing Person added successfully.</h6>',
            willOpen : () => {
                lottie.loadAnimation({
                container: document.getElementById('lottie-popup-container'), // Animation render hone ka container
                renderer: 'svg', // SVG format me render karne ke liye
                // loop: true, // Animation loop kare
                // autoplay: true, // Animation automatically play kare
                path: '<?= base_url(); ?>assets/jsons/Animation - 1735135651799.json', // JSON file ka path
              });
            },
            customClass:{
                actions:'mt-1'
            },
            allowOutsideClick:false,
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: true,
            showConfirmButton:true,
            confirmButtonText:'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                <?php 
                    if(!$_GET['type'])
                    {
                ?>
                <?php 
                    if(strpos($_GET['redirect'],'editLapataDetails') !== false)
                    {
                ?>
                $(ele).attr('disabled',true);
                location.href="<?php echo $_GET['redirect']; ?>&pn=4";
                <?php }else{ ?>
                $(ele).attr('disabled',true);
                location.href="<?php echo $_GET['redirect']; ?>";
                <?php } ?>
                <?php }else{ ?>
                location.href="<?php echo $_GET['redirect']; ?>";
                <?php } ?>
            }
        })
        <?php } ?>
    }
    
    function share(type,ele,appNo)
    {
        if (navigator.share) {
            let url = '';
            let text = '';
            if(type == 'missing')
            {
                url = '<?php echo base_url(); ?>find-missed-person?Id='+appNo;
            }else if(type == 'lapata'){
                url = '<?php echo base_url(); ?>find-lapata-person?id='+appNo;
                text='🙏🙏कृपया, इस पोस्ट को ज्यादा से ज्यादा शेयर करे I शायद, आप के एक शेयर से यह व्यक्ति मिल जाए I ';
            }else if(type == 'criminal')
            {
                url = '<?php echo base_url(); ?>find-criminal-person?Id='+appNo;
            }else if(type == 'wanted')
            {
                url = '<?php echo base_url(); ?>find-wanted-person?Id='+appNo;
            }else if(type == 'general')
            {
                url = '<?php echo base_url(); ?>find-general-person?Id='+appNo;
            }else if(type == 'unknown')
            {
                url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
            }
            navigator.share({
              title: 'Khoji',
              url: url,
              text:text
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
    
    function view(type,ele,appNo)
    {
        let url = '';
        if(type == 'missing')
        {
            url = '<?php echo base_url(); ?>find-missed-person?Id='+appNo;
        }else if(type == 'lapata'){
            url = '<?php echo base_url(); ?>find-lapata-person?id='+appNo;
        }else if(type == 'criminal')
        {
            url = '<?php echo base_url(); ?>find-criminal-person?Id='+appNo;
        }else if(type == 'wanted')
        {
            url = '<?php echo base_url(); ?>find-wanted-person?Id='+appNo;
        }else if(type == 'general')
        {
            url = '<?php echo base_url(); ?>find-general-person?Id='+appNo;
        }else if(type == 'unknown')
        {
            url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
        }
        window.open(url,'_blank');
    }
</script>