<script type="text/javascript" src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>
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
        color: #333333!important;
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
<style>
#swal2-html-container{
    margin: 0 1rem!important;
}

div:where(.swal2-container) div:where(.swal2-popup){
    width:auto;
}
.shiva_user_height p{
    margin-bottom:0.3rem!important;
    font-size:0.8rem!important;
}
.shiva_height p{
    margin-bottom:0.3rem!important;
    font-size:0.8rem!important;
}

.shiva_height h6{
    font-size:revert;
    font-weight:bold;
}

.message{
    font-size:0.6rem;
}

.heading {
	margin-bottom: 20px;
	font-size: 30px;
	color: var(--black);
	text-transform: uppercase;
	text-align: center;
}

.btn {
	margin-top: 10px;
	display: inline-block;
	padding: 10px 30px;
	cursor: pointer;
	font-size: 17px;
	background-color: var(--light-bg);
	color: var(--black);
	text-transform: capitalize;
	text-align: center;
}

.gallery {
	padding: 20px;
	text-align: center;
	padding-left: 320px;
}

.gallery .image-container {
	/*gap: 15px;*/
	/*columns: 3 350px;*/
}

.gallery .image-container img {
	break-inside: avoid;
	width: 100%;
	background-color: var(--white);
	object-fit: cover;
	cursor: pointer;
	margin-bottom: 10px;
	box-shadow: var(--box-shadow);
}

.gallery .image-container img:hover {
	transform: scale(.95);
}

@media (max-width:1900px) {

	.gallery {
		padding-left: 20px;
	}

	.shiva_height{
        height:auto;
        max-height:530px;
    }
}

@media (max-width:768px) {

	.shiva_height{
        height:auto;
        max-height:450px;
    }

}

@media (max-width:450px) {

	.shiva_height{
       height:auto;
        max-height:fit-content;
    }
}
.margin_tp{
 margin-top: 120px;
}
</style>
<style>
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
                 color: #fff;
                background-color: #5daed5!important;
                border-color: transparent;
            }
             .btn-police4{
                 color: #fff;
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
                
    </style>
<?php 
    $getDetails = $this->db->query('select * from searchfacehistory where Id='.$_SESSION['searchFaceId'])->result_array();
    $lapataIds = array();
    if($getDetails[0]['matchedLapataIds'] != '')
    {
        $lapataIds = array_unique(explode(',',$getDetails[0]['matchedLapataIds']));   
    }
    $unknownIds = array();
    if($getDetails[0]['matchedUnknownIds'] != '')
    {
        $unknownIds = array_unique(explode(',',$getDetails[0]['matchedUnknownIds']));   
    }
    $lapataperson = array();
    if(count($lapataIds) > 0)
    {
        foreach($lapataIds as $k=>$v)
        {
            $this->db->where('id',$v);
            $this->db->where('isFinalSubmitted',1);
            array_push($lapataperson,$this->db->get('unknown_person')->result_array());
        }
    }
    $unknownperson = array();
    if(count($unknownIds) > 0)
    {
        foreach($unknownIds as $k=>$v)
        {
            $this->db->where('id',$v);
            $this->db->where('isFinalSubmitted',1);
            array_push($unknownperson,$this->db->get('unknown_person')->result_array());
        }
    }
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container-fluid">

  <section class="section register d-flex flex-column align-items-center justify-content-center">
    <div class="container-fluid">
        <div class="row align-items-center" style="justify-content:space-around;">
            <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($lapataperson) > 0) ? '' : 'd-none'; ?>">
                <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Missing - <?php echo (count($lapataperson) > 1 ? count($lapataperson).' Records' : count($lapataperson).' Record'); ?></a>
            </div>
            <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($unknownperson) > 0) ? '' : 'd-none'; ?>">
                <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Appeal for Identification - <?php echo (count($unknownperson) > 1 ? count($unknownperson).' Records' : count($unknownperson).' Record'); ?></a>
            </div>
            <div class="col-lg-auto col-sm-12 col-md-auto text-end my-1">
                <button type="button" onclick='location.href=`<?= base_url(); ?>search-by-confidence`' class="btn mt-0 btn-style-grey btn-dark disabled-on-loading"> <i class="fa fa-arrow-circle-left"></i></button>
            </div>
        </div>
        <div class="row align-items-center mx-1 mb-3 p-1 justify-content-center" style="box-shadow:0px 1px 2px grey;background:white;">
            <h3 class="text-danger text-center" style="font-family:cursive;"><b>Searched Photo</b></h3>
            <div class="col-md-auto col-10 px-0 mb-2" style="border:5px solid black;">
                <a href="<?php echo base_url().''.$getDetails[0]['mainPhoto']; ?>" data-lightbox="roadtrip">
                    <img src="<?php echo base_url().''.$getDetails[0]['mainPhoto']; ?>" style="height:200px;width: 100%;">
                </a>
            </div>
        </div>
        <div class="row align-items-center" style="justify-content:space-evenly;">
            <?php 
                $decode = json_decode($getDetails[0]['totalResponse'],true);
                $high = array();
                $medium = array();
                $low = array();
                if(count($lapataperson) > 0)
                {
                    foreach($lapataperson as $k=>$v)
                    {
                        $v = $v[0];
                        if(in_array($v['imageId'],$decode['confidence']['High']))
                        {
                            if(!in_array($v['id'],$high))
                            {
                                array_push($high,array('imageId' => $v['imageId'],'key' => 1,'Id' => $v['id']));
                            }
                        }
                        if(in_array($v['imageId'],$decode['confidence']['Medium']))
                        {
                            if(!in_array($v['id'],$medium))
                            {
                                array_push($medium,array('imageId' => $v['imageId'],'key' => 1,'Id' => $v['id']));
                            }
                        }
                        if(in_array($v['imageId'],$decode['confidence']['Low']))
                        {
                            if(!in_array($v['id'],$low))
                            {
                                array_push($low,array('imageId' => $v['imageId'],'key' => 1,'Id' => $v['id']));
                            }
                        }
                        if(in_array($v['imageId1'],$decode['confidence']['High']))
                        {
                            if(!in_array($v['id'],$high))
                            {
                                array_push($high,array('imageId' => $v['imageId1'],'key' => 2,'Id' => $v['id']));
                            }
                        }
                        if(in_array($v['imageId1'],$decode['confidence']['Medium']))
                        {
                            if(!in_array($v['id'],$medium))
                            {
                                array_push($medium,array('imageId' => $v['imageId1'],'key' => 2,'Id' => $v['id']));
                            }
                        }
                        if(in_array($v['imageId1'],$decode['confidence']['Low']))
                        {
                            if(!in_array($v['id'],$low))
                            {
                                array_push($low,array('imageId' => $v['imageId1'],'key' => 2,'Id' => $v['id']));
                            }
                        }
                        if(in_array($v['imageId2'],$decode['confidence']['High']))
                        {
                            if(!in_array($v['id'],$high))
                            {
                                array_push($high,array('imageId' => $v['imageId2'],'key' => 3,'Id' => $v['id']));
                            }
                        }
                        if(in_array($v['imageId2'],$decode['confidence']['Medium']))
                        {
                            if(!in_array($v['id'],$medium))
                            {
                                array_push($medium,array('imageId' => $v['imageId2'],'key' => 3,'Id' => $v['id']));
                            }
                        }
                        if(in_array($v['imageId2'],$decode['confidence']['Low']))
                        {
                            if(!in_array($v['id'],$low))
                            {
                                array_push($low,array('imageId' => $v['imageId2'],'key' => 3,'Id' => $v['id']));
                            }
                        }
                    }
                }
                if(count($unknownperson) > 0)
                {
                    foreach($unknownperson as $k=>$v)
                    {
                        $v = $v[0];
                        if(in_array($v['imageId'],$decode['confidence']['High']))
                        {
                            array_push($high,array('imageId' => $v['imageId'],'key' => 1,'Id' => $v['id']));
                        }
                        if(in_array($v['imageId'],$decode['confidence']['Medium']))
                        {
                            array_push($medium,array('imageId' => $v['imageId'],'key' => 1,'Id' => $v['id']));
                        }
                        if(in_array($v['imageId'],$decode['confidence']['Low']))
                        {
                            array_push($low,array('imageId' => $v['imageId'],'key' => 1,'Id' => $v['id']));
                        }
                        if(in_array($v['imageId1'],$decode['confidence']['High']))
                        {
                            array_push($high,array('imageId' => $v['imageId1'],'key' => 2,'Id' => $v['id']));
                        }
                        if(in_array($v['imageId1'],$decode['confidence']['Medium']))
                        {
                            array_push($medium,array('imageId' => $v['imageId1'],'key' => 2,'Id' => $v['id']));
                        }
                        if(in_array($v['imageId1'],$decode['confidence']['Low']))
                        {
                            array_push($low,array('imageId' => $v['imageId1'],'key' => 2,'Id' => $v['id']));
                        }
                        if(in_array($v['imageId2'],$decode['confidence']['High']))
                        {
                            array_push($high,array('imageId' => $v['imageId2'],'key' => 3,'Id' => $v['id']));
                        }
                        if(in_array($v['imageId2'],$decode['confidence']['Medium']))
                        {
                            array_push($medium,array('imageId' => $v['imageId2'],'key' => 3,'Id' => $v['id']));
                        }
                        if(in_array($v['imageId2'],$decode['confidence']['Low']))
                        {
                            array_push($low,array('imageId' => $v['imageId2'],'key' => 3,'Id' => $v['id']));
                        }
                    }
                }
                if(count($high) > 0)
                {
            ?>
            <h5 class="text-center" style="color:black;font-weight: 500;font-family: ui-monospace;">High Results</h5>
            <hr>
            <?php 
                foreach($high as $k=>$v)
                {
                    if($v['key'] == 1)
                    {
                        $getDetail = $this->db->query('select * from unknown_person where imageId="'.$v['imageId'].'"')->result_array();
                    }
                    if($v['key'] == 2)
                    {
                        $getDetail = $this->db->query('select * from unknown_person where imageId1="'.$v['imageId'].'"')->result_array();
                    }
                    if($v['key'] == 3)
                    {
                        $getDetail = $this->db->query('select * from unknown_person where imageId2="'.$v['imageId'].'"')->result_array();
                    }
                    $row = $getDetail[0];
            ?>
            <?php 
                if($row['awsEventName'] == 'All')
                {
            ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-id="<?= $v['Id']; ?>">
                <div class="card mb-3 shiva_height bg-light">
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <?php
                                if($row['Photo'] != '' || $row['Photo'] != NULL)
                                {
                            ?>
                            <div class="col-6 text-center px-1 mb-2">
                                <h5 class="text-center text-danger fs-20">Missing </h5>
                                <?php if($row['rewardamount'] != '' && $row['rewardamount'] != NULL && $row['rewardamount'] != 0){ ?>
                                    <div class="row col-12 mx-0 p-0" style="border:1px solid red;">
                                        <h6 class="card-title text-center px-0 py-0 fs-13 mb-0"> <b style="color:red;font-weight:600;">Reward - </b><span style="color:black;">Rs. <?php echo $row['rewardamount']??"--"?></span></h6>
                                     </div>
                                <?php } ?>
                            </div>
                            <div class="col-6 text-end mb-2">
                                <button type="button" class="btn btn-dark" onclick="share('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                <button type="button" class="btn btn-primary" onclick="view('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                            </div>
                            <div class="col-12">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:black;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                            </div>
                            <div class="col-12">
                                <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                            </div>
                            <div class="col-12 text-start">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Missing Date :- </b><b style="color:red;font-size:.8rem!important;"><?= $row['missingDate'] != NULL ? date('d-m-Y',strtotime($row['missingDate'])) : date('d-m-Y',strtotime($row['dateCreated'])); ?></b></p>
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
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['person_name']??"--" ?></span></p>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php }else{ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php } ?>
                               
                                <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:black;"><?php echo $row['Age']??"--"?></span></p>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                            <div class="row col-6">
                                <h6 class="card-title text-center py-0 mb-0"><b style="color:black;font-size:0.6rem!important;font-weight:700;"><?php echo substr_replace($row['aadharNumber'],'xxxxxxxx',0,8);?></b></h6>
                            </div>
                        <?php } ?>
                        <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                        <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                           <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['Message']??"--"?></b></p> 
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
                            if($row['isKyc'] == 0)
                            {
                                $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                            }else{
                                $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                            }
                            if(count($getUserDetail) > 0)
                            {
                        ?>
                        <?php 
                            if($row['isKyc'] == 0)
                            {
                        ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                 <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                 <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:<?= $row['isKyc'] == 0 ? 'blue' : 'green'; ?>;font-size:.8rem!important">Verified - </b>
                                 <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                 <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } } ?>
                        <?php } ?>
                        <br>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                <div class="card mb-3 shiva_height bg-light">
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <?php
                                if($row['Photo'] != '' || $row['Photo'] != NULL)
                                {
                            ?>
                            <div class="col-6 text-center mb-2">
                                <h6 class="text-center text-danger mb-0">APPEAL FOR IDENTIFICATION </h6>
                            </div>
                            <div class="col-6 text-end mb-2">
                                <button type="button" class="btn btn-dark" onclick="share('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                <button type="button" class="btn btn-primary" onclick="view('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                            </div>
                            <div class="col-12">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:black;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                            </div>
                            <div class="col-12 px-2">
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
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['person_name']??"--" ?></span></p>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php }else{ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php } ?>
                               
                                <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age Band - </b><span style="color:black;"><?php echo $row['Age']??"--"?></span></p>
                                <?php } ?>
                            </div>
                        </div>
                         <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                          <!--<div class="row col-6 px-4">-->
                          <!--          <h5 class="card-title text-start py-0 fs-6 mb-0"> <b style="color:black;font-weight:600;">Aadhaar No - </b><br><span style="color:black;"><?php echo $row['aadharNumber']??"--"?></span></h5>-->
                          <!--    </div>-->
                                <?php } ?>
                        <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                        <div class="row col-12 px-2 mx-0 mt-2 mb-1">
                           <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['Message']??"--"?></b></p> 
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
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:red;font-size:.8rem!important">NGO - </b><b style="color:black;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                              
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
                            if($row['isKyc'] == 0)
                            {
                                $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                            }else{
                                $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                            }
                            if(count($getUserDetail) > 0)
                            {
                        ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:<?= $row['isKyc'] == 0 ? 'blue' : 'red'; ?>;font-size:.8rem!important"><?= $row['isKyc'] == 0 ? 'GENERAL USER' : 'SAMAJSEVI'; ?> - </b>
                                 <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                 <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php } } ?>
                        <?php } ?>
                        <br>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php
                if(count($medium) > 0)
                {
            ?>
            <hr class="mb-2">
            <h5 class="text-center" style="color:black;font-weight: 500;font-family: ui-monospace;">Medium Results</h5>
            <hr class="mb-3">
            <?php 
                foreach($medium as $k=>$v)
                {
                    if($v['key'] == 1)
                    {
                        $getDetail = $this->db->query('select * from unknown_person where imageId="'.$v['imageId'].'"')->result_array();
                    }
                    if($v['key'] == 2)
                    {
                        $getDetail = $this->db->query('select * from unknown_person where imageId1="'.$v['imageId'].'"')->result_array();
                    }
                    if($v['key'] == 3)
                    {
                        $getDetail = $this->db->query('select * from unknown_person where imageId2="'.$v['imageId'].'"')->result_array();
                    }
                    $row = $getDetail[0];
            ?>
            <?php 
                if($row['awsEventName'] == 'All')
                {
            ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-id="<?= $v['Id']; ?>">
                <div class="card mb-3 shiva_height bg-light">
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <?php
                                if($row['Photo'] != '' || $row['Photo'] != NULL)
                                {
                            ?>
                            <div class="col-6 text-center px-1 mb-2">
                                <h5 class="text-center text-danger fs-20">Missing </h5>
                                <?php if($row['rewardamount'] != '' && $row['rewardamount'] != NULL && $row['rewardamount'] != 0){ ?>
                                    <div class="row col-12 mx-0 p-0" style="border:1px solid red;">
                                        <h6 class="card-title text-center px-0 py-0 fs-13 mb-0"> <b style="color:red;font-weight:600;">Reward - </b><span style="color:black;">Rs. <?php echo $row['rewardamount']??"--"?></span></h6>
                                     </div>
                                <?php } ?>
                            </div>
                            <div class="col-6 text-end mb-2">
                                <button type="button" class="btn btn-dark" onclick="share('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                <button type="button" class="btn btn-primary" onclick="view('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                            </div>
                            <div class="col-12">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:black;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                            </div>
                            <div class="col-12">
                                <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                            </div>
                            <div class="col-12 text-start">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Missing Date :- </b><b style="color:red;font-size:.8rem!important;"><?= $row['missingDate'] != NULL ? date('d-m-Y',strtotime($row['missingDate'])) : date('d-m-Y',strtotime($row['dateCreated'])); ?></b></p>
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
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['person_name']??"--" ?></span></p>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php }else{ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php } ?>
                               
                                <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:black;"><?php echo $row['Age']??"--"?></span></p>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                            <div class="row col-6">
                                <h6 class="card-title text-center py-0 mb-0"><b style="color:black;font-size:0.6rem!important;font-weight:700;"><?php echo substr_replace($row['aadharNumber'],'xxxxxxxx',0,8);?></b></h6>
                            </div>
                        <?php } ?>
                        <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                        <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                           <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['Message']??"--"?></b></p> 
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
                            if($row['isKyc'] == 0)
                            {
                                $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                            }else{
                                $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                            }
                            if(count($getUserDetail) > 0)
                            {
                        ?>
                        <?php 
                            if($row['isKyc'] == 0)
                            {
                        ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                 <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                 <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:<?= $row['isKyc'] == 0 ? 'blue' : 'green'; ?>;font-size:.8rem!important">Verified - </b>
                                 <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                 <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } } ?>
                        <?php } ?>
                        <br>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                <div class="card mb-3 shiva_height bg-light">
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <?php
                                if($row['Photo'] != '' || $row['Photo'] != NULL)
                                {
                            ?>
                            <div class="col-6 text-center mb-2">
                                <h6 class="text-center text-danger mb-0">APPEAL FOR IDENTIFICATION </h6>
                            </div>
                            <div class="col-6 text-end mb-2">
                                <button type="button" class="btn btn-dark" onclick="share('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                <button type="button" class="btn btn-primary" onclick="view('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                            </div>
                            <div class="col-12">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:black;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                            </div>
                            <div class="col-12 px-2">
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
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['person_name']??"--" ?></span></p>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php }else{ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php } ?>
                               
                                <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age Band - </b><span style="color:black;"><?php echo $row['Age']??"--"?></span></p>
                                <?php } ?>
                            </div>
                        </div>
                         <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                          <!--<div class="row col-6 px-4">-->
                          <!--          <h5 class="card-title text-start py-0 fs-6 mb-0"> <b style="color:black;font-weight:600;">Aadhaar No - </b><br><span style="color:black;"><?php echo $row['aadharNumber']??"--"?></span></h5>-->
                          <!--    </div>-->
                                <?php } ?>
                        <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                        <div class="row col-12 px-2 mx-0 mt-2 mb-1">
                           <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['Message']??"--"?></b></p> 
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
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:red;font-size:.8rem!important">NGO - </b><b style="color:black;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                              
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
                            if($row['isKyc'] == 0)
                            {
                                $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                            }else{
                                $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                            }
                            if(count($getUserDetail) > 0)
                            {
                        ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:<?= $row['isKyc'] == 0 ? 'blue' : 'red'; ?>;font-size:.8rem!important"><?= $row['isKyc'] == 0 ? 'GENERAL USER' : 'SAMAJSEVI'; ?> - </b>
                                 <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                 <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php } } ?>
                        <?php } ?>
                        <br>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } } ?>
            <?php
                if(count($low) > 0)
                {
            ?>
            <hr class="mb-2">
            <h5 class="text-center" style="color:black;font-weight: 500;font-family: ui-monospace;">Low Results</h5>
            <hr class="mb-3">
            <?php 
                foreach($low as $k=>$v)
                {
                    if($v['key'] == 1)
                    {
                        $getDetail = $this->db->query('select * from unknown_person where imageId="'.$v['imageId'].'"')->result_array();
                    }
                    if($v['key'] == 2)
                    {
                        $getDetail = $this->db->query('select * from unknown_person where imageId1="'.$v['imageId'].'"')->result_array();
                    }
                    if($v['key'] == 3)
                    {
                        $getDetail = $this->db->query('select * from unknown_person where imageId2="'.$v['imageId'].'"')->result_array();
                    }
                    $row = $getDetail[0];
            ?>
            <?php 
                if($row['awsEventName'] == 'All')
                {
            ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-id="<?= $v['Id']; ?>">
                <div class="card mb-3 shiva_height bg-light">
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <?php
                                if($row['Photo'] != '' || $row['Photo'] != NULL)
                                {
                            ?>
                            <div class="col-6 text-center px-1 mb-2">
                                <h5 class="text-center text-danger fs-20">Missing </h5>
                                <?php if($row['rewardamount'] != '' && $row['rewardamount'] != NULL && $row['rewardamount'] != 0){ ?>
                                    <div class="row col-12 mx-0 p-0" style="border:1px solid red;">
                                        <h6 class="card-title text-center px-0 py-0 fs-13 mb-0"> <b style="color:red;font-weight:600;">Reward - </b><span style="color:black;">Rs. <?php echo $row['rewardamount']??"--"?></span></h6>
                                     </div>
                                <?php } ?>
                            </div>
                            <div class="col-6 text-end mb-2">
                                <button type="button" class="btn btn-dark" onclick="share('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                <button type="button" class="btn btn-primary" onclick="view('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                            </div>
                            <div class="col-12">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:black;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                            </div>
                            <div class="col-12">
                                <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                            </div>
                            <div class="col-12 text-start">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Missing Date :- </b><b style="color:red;font-size:.8rem!important;"><?= $row['missingDate'] != NULL ? date('d-m-Y',strtotime($row['missingDate'])) : date('d-m-Y',strtotime($row['dateCreated'])); ?></b></p>
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
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['person_name']??"--" ?></span></p>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php }else{ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php } ?>
                               
                                <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:black;"><?php echo $row['Age']??"--"?></span></p>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                            <div class="row col-6">
                                <h6 class="card-title text-center py-0 mb-0"><b style="color:black;font-size:0.6rem!important;font-weight:700;"><?php echo substr_replace($row['aadharNumber'],'xxxxxxxx',0,8);?></b></h6>
                            </div>
                        <?php } ?>
                        <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                        <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                           <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['Message']??"--"?></b></p> 
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
                            if($row['isKyc'] == 0)
                            {
                                $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                            }else{
                                $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                            }
                            if(count($getUserDetail) > 0)
                            {
                        ?>
                        <?php 
                            if($row['isKyc'] == 0)
                            {
                        ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                 <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                 <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:<?= $row['isKyc'] == 0 ? 'blue' : 'green'; ?>;font-size:.8rem!important">Verified - </b>
                                 <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                 <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } } ?>
                        <?php } ?>
                        <br>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                <div class="card mb-3 shiva_height bg-light">
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <?php
                                if($row['Photo'] != '' || $row['Photo'] != NULL)
                                {
                            ?>
                            <div class="col-6 text-center mb-2">
                                <h6 class="text-center text-danger mb-0">APPEAL FOR IDENTIFICATION </h6>
                            </div>
                            <div class="col-6 text-end mb-2">
                                <button type="button" class="btn btn-dark" onclick="share('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                <button type="button" class="btn btn-primary" onclick="view('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                            </div>
                            <div class="col-12">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:black;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                            </div>
                            <div class="col-12 px-2">
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
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['person_name']??"--" ?></span></p>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php }else{ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php } ?>
                               
                                <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age Band - </b><span style="color:black;"><?php echo $row['Age']??"--"?></span></p>
                                <?php } ?>
                            </div>
                        </div>
                         <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                          <!--<div class="row col-6 px-4">-->
                          <!--          <h5 class="card-title text-start py-0 fs-6 mb-0"> <b style="color:black;font-weight:600;">Aadhaar No - </b><br><span style="color:black;"><?php echo $row['aadharNumber']??"--"?></span></h5>-->
                          <!--    </div>-->
                                <?php } ?>
                        <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                        <div class="row col-12 px-2 mx-0 mt-2 mb-1">
                           <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['Message']??"--"?></b></p> 
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
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:red;font-size:.8rem!important">NGO - </b><b style="color:black;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                              
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
                            if($row['isKyc'] == 0)
                            {
                                $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                            }else{
                                $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                            }
                            if(count($getUserDetail) > 0)
                            {
                        ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:<?= $row['isKyc'] == 0 ? 'blue' : 'red'; ?>;font-size:.8rem!important"><?= $row['isKyc'] == 0 ? 'GENERAL USER' : 'SAMAJSEVI'; ?> - </b>
                                 <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                 <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php } } ?>
                        <?php } ?>
                        <br>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } } ?>
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
                <div class="row mb-0 mb-md-3 justify-content-center" id="videodiv">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <video id="video" width="100%" height="240" autoplay></video>  
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-12 col-md-auto text-center" id="clickdiv">
                        <button id="click-photo" class="w-100 btn btn-primary btn-style-five">Capture Photo</button>
                    </div>
                </div>
                <input type="file" hidden id="fileMobInput" capture="camera">
                <div class="row justify-content-center d-none" id="canvasdiv">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <canvas id="canvas" width="320" height="240"></canvas>
                    </div>
                </div>
                <div class="row justify-content-center d-none" id="mobileimagediv">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <img id="mobileimage" width="320" height="240">
                    </div>
                </div>
                <div class='row justify-content-center text-center mx-0' id="bothcameradiv">
                    <div class='col-lg-6 col-sm-12 col-md-12 mt-3 px-0' id="frontcameradiv">
                        <button type='button' class='w-100 btn btn-style-green btn-primary' onclick='openFrontCamera()'>Open Front Camera <i class='fa fa-camera fa-spin'></i></button>
                    </div>
                    <div class='col-lg-6 col-sm-12 col-md-6 mt-3 px-0 px-md-2' id="backcameradiv">
                        <button type='button' class='w-100 btn btn-style-green btn-primary' onclick='openBackCamera()'>Open Back Camera <i class='fa fa-camera fa-spin'></i></button>
                        </div>
                    </div>
                </div>
            <div class="row justify-content-center mx-0">
                <div class="col-lg-6 col-sm-12 col-md-6 text-center d-none mb-3" id="retake">
                    <button id="retake-photo" class="w-100 btn btn-primary btn-style-yellow" style="">Retake</button>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 text-center d-none mb-3" id="retakeMobile">
                    <button id="retake-mobile" class="w-100 btn btn-primary btn-style-yellow" onclick="openCamera()">Retake</button>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 text-center mb-3">
                    <button id="btnInactiveSave" class="w-100 btn btn-primary btn-style-four disabled-on-loading"> Search</button>
                </div>
                <input type="hidden" id="mainPhotoSelected" >
            </div>
        </div>
    </div>
</div>
<div id="uploadimageModal" class="modal" style="z-index:999999999999999999999999;" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn btn-danger close1" data-dismiss="modal" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <div id="image_demo" style="width:100%; margin-top:30px"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <button class="btn btn-success crop_image disabled-on-loading"> Crop Image</button>
            </div>
        </div>
        </div>
     </div>
    </div>
</div>
<?php 
    $getInactiveSettings = $this->db->query('select * from settings where name="inactiveMode"')->result_array();
?>
<script type="text/javascript" src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript">
    
    $(document).ready(function() {
	
		$(".message").shorten({
        	"showChars" : 150,
        	"moreText"	: "See More",
	        "lessText"	: "Less",
        });
	});

    document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll("[data-id]");
        const seenIds = new Set();

        cards.forEach(card => {
            const id = card.getAttribute("data-id");

            if (seenIds.has(id)) {
                // If the ID has been seen before, hide the card
                card.style.display = "none";
            } else {
                // Otherwise, add the ID to the seen set
                seenIds.add(id);
            }
        });
    });
	
	function view(type,ele,appNo)
    {
        let url = '';
        if(type == 'lapata'){
            url = '<?php echo base_url(); ?>find-lapata-person?id='+appNo;
            window.open(url,'_blank');   
        }
        else if(type == 'unknown')
        {
            url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
            window.open(url,'_blank');   
        }
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
    $(document).ready(function() {
    
    $(".message").shorten({
        	"showChars" : 50,
        	"moreText"	: "See More",
         "lessText"	: "Less",
        });
    });
</script>
