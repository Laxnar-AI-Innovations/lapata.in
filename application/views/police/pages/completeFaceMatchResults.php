<style>
#swal2-html-container{
    margin: 0 1rem!important;
}

div:where(.swal2-container) div:where(.swal2-popup){
    width:auto;
}

.morecontent span{
    color:red!important;
    font-weight:bold!important;
}
.shiva_user_height p{
    margin-bottom:0.3rem!important;
    font-size:0.8rem!important;
}
.shiva_height p{
    margin-bottom:0.3rem!important;
    font-size:0.8rem!important;
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
        height:470px;
        max-height:470px;
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
       height:480px;
        max-height:480px;
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
                 color: #fff;
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
            body{
                background:#f6f9ff!important;
            }
                
    </style>
<?php 
    $getDetails = $this->db->query('select * from searchfacehistoryafterlogin where Id='.$_SESSION['searchFaceIdAfterLogin'])->result_array();
    $missingIds = array();
    if($getDetails[0]['matchedMissingIds'] != '')
    {
        $missingIds = explode(',',$getDetails[0]['matchedMissingIds']);   
    }
    $wantedIds = array();
    if($getDetails[0]['matchedWantedIds'] != '')
    {
        $wantedIds = explode(',',$getDetails[0]['matchedWantedIds']);   
    }
    $lapataIds = array();
    if($getDetails[0]['matchedLapataIds'] != '')
    {
        $lapataIds = array_unique(explode(',',$getDetails[0]['matchedLapataIds']));   
    }
    $userIds = array();
    if($getDetails[0]['matchedUserIds'] != '')
    {
        $userIds = array_unique(explode(',',$getDetails[0]['matchedUserIds']));   
    }
    $criminalIds = array();
    if($getDetails[0]['matchedCriminalIds'] != '')
    {
        $criminalIds = explode(',',$getDetails[0]['matchedCriminalIds']);   
    }
    $unknownIds = array();
    if($getDetails[0]['matchedUnknownIds'] != '')
    {
        $unknownIds = array_unique(explode(',',$getDetails[0]['matchedUnknownIds']));   
    }
    $missingperson = array();
    if(count($missingIds) > 0)
    {
        $this->db->where_in('Id',$missingIds);   
        $this->db->order_by("dateCreated", "desc");
        $missingperson = $this->db->get('missingperson')->result_array();
    }
    $wantedperson = array();
    if(count($wantedIds) > 0)
    {
        $this->db->where_in('Id',$wantedIds);   
        $this->db->order_by("dateCreated", "desc");
        $wantedperson = $this->db->get('criminals')->result_array();
    }
    $criminalperson = array();
    if(count($criminalIds) > 0)
    {
        $this->db->where_in('Id',$criminalIds);   
        $this->db->order_by("dateCreated", "desc");
        $criminalperson = $this->db->get('criminals')->result_array();
    }
    $userperson = array();
    if(count($userIds) > 0)
    {
        foreach($userIds as $k=>$v)
        {
            $this->db->where('uid',$v);
            array_push($userperson,$this->db->get('user')->result_array());
        }
    }
    $lapataperson = array();
    if(count($lapataIds) > 0)
    {
        foreach($lapataIds as $k=>$v)
        {
            $this->db->where('id',$v);
            array_push($lapataperson,$this->db->get('unknown_person')->result_array());
        }
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
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<main id="main" class="main px-2">
    <div class="pagetitle">
        <h1>Face Match Results</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active">Face Match Results</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <section class="section profile">
        <div class="container-fluid px-0">
            <div class="row align-items-center mx-1 mb-3 p-1" style="justify-content:space-around;box-shadow:0px 1px 2px grey;background:white;">
                <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($missingperson) > 0) ? '' : 'd-none'; ?>">
                    <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Missing - <?php echo (count($missingperson) > 1 ? count($missingperson).' Records' : count($missingperson).' Record'); ?></a>
                </div>
                <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($wantedperson) > 0) ? '' : 'd-none'; ?>">
                    <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Wanted - <?php echo (count($wantedperson) > 1 ? count($wantedperson).' Records' : count($wantedperson).' Record'); ?></a>
                </div>
                <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($criminalperson) > 0) ? '' : 'd-none'; ?>">
                    <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Criminal - <?php echo (count($criminalperson) > 1 ? count($criminalperson).' Records' : count($criminalperson).' Record'); ?></a>
                </div>
                <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($lapataperson) > 0) ? '' : 'd-none'; ?>">
                    <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Missing - <?php echo (count($lapataperson) > 1 ? count($lapataperson).' Records' : count($lapataperson).' Record'); ?></a>
                </div>
                <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($unknownperson) > 0) ? '' : 'd-none'; ?>">
                    <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Appeal for Identification - <?php echo (count($unknownperson) > 1 ? count($unknownperson).' Records' : count($unknownperson).' Record'); ?></a>
                </div>
                <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($userperson) > 0) ? '' : 'd-none'; ?>">
                    <a href="javascript:void(0)" style="color:green;text-decoration:none;font-weight:bold;">Verified - <?php echo (count($userperson) > 1 ? count($userperson).' Records' : count($userperson).' Record'); ?></a>
                </div>
                <div class="col-lg-auto col-sm-12 col-md-auto text-end my-1">
                    <button type="button" onclick="back(this)" class="btn mt-0 btn-style-grey btn-dark disabled-on-loading"> <i class="fa fa-arrow-circle-left"></i></button>
                </div>
            </div>
            <div class="row align-items-center mx-1 mb-3 p-1 justify-content-center" style="box-shadow:0px 1px 2px grey;background:white;">
                <h3 class="text-danger text-center" style="font-family:cursive;"><b>Searched Photo</b></h3>
                <div class="col-auto px-0 mb-2" style="border:5px solid black;">
                    <a href="<?php echo base_url().''.$getDetails[0]['mainPhoto']; ?>" data-lightbox="roadtrip">
                        <img src="<?php echo base_url().''.$getDetails[0]['mainPhoto']; ?>" style="height:200px;">
                    </a>
                </div>
            </div>
            <div class="row align-items-center justify-content-center px-3">
            <?php 
                if(count($missingperson) > 0)
                {
            ?>
            <?php 
                foreach($missingperson as $k=>$row)
                {
            ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-1 col-12 col-search pb-2">
                <div class="card mb-3 shiva_height" >
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <?php
                                if($row['facematchphoto'] != '' || $row['facematchphoto'] != NULL)
                                {
                            ?>
                            <div class="col-6">
                                <h5 class="text-center text-danger">Missing Persons</h5>
                            </div>
                            <div class="col-6 text-end">
                                <button type="button" class="btn btn-dark" onclick="share('missing',this,'<?php echo $row['Id']; ?>')" style="background:black!important;color:white!important;padding:10px 15px;"><i class="fa fa-share-alt"></i></button>
                                <button type="button" class="btn btn-primary" onclick="view('missing',this,'<?php echo $row['Id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
                            </div>
                            <div class="col-12">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important">Missing Id :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $row['missingId']; ?></b></p>
                            </div>
                            <div class="col-12">
                                <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                            </div>
                            <div class="col-5 ">
                                <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['facematchphoto']?>" style="height: 100px !important;border: 1px solid;" alt="">
                            </div>
                            <?php }else{ ?>
                            <div class="col-5 ">
                                <?php if(strtolower($row['missinggender']) == 'male'){ ?>
                                <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                <?php }else{ ?>
                                <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                <?php } ?>
                            </div>
                            <?php } ?>
                            <div class="col-7 px-0">
                                <?php if($row['missingname'] != '' || $row['missingname'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['missingname']??"--" ?></span></p>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo (ucfirst($row['missinggender'])); ?></span></p>
                                <?php }else{ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo (ucfirst($row['missinggender'])); ?></span></p>
                                <?php } ?>
                            <?php if($row['fatherstate'] != '' || $row['fatherstate'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Address - </b><span style="color:grey;"><?php echo ($row['fatherstate']) ?> , <?php echo ($row['fatherdistrict']) ?> - <?php echo ($row['fathercity']); ?></span></p>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if($row['otherDetail'] != '' || $row['otherDetail'] != NULL){ ?>
                        <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                           <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['otherDetail']??"--"?></b></p> 
                        </div>
                        <?php } ?>
                        <hr class="my-0">
                        <?php 
                            $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();
                        ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                 <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                 <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <div class="row w-100 mx-0 align-items-center">
                            <div class="col-12 text-start">
                                <b style="font-size:.8rem!important">Contact To : - Well Wishers </b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes'){
                                ?>
                              <?php if($row['mobile1']!='' || $row['mobile1']!=null) { ?>
                                <a href="tel:<?= $row['mobile1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                <?php } if($row['mobile2']!='' || $row['mobile2']!=null) { ?>
                                  <a href="tel:<?= $row['mobile2']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                <?php }
                                  if($row['mobile3']!='' || $row['mobile3']!=null) { ?>
                                  <a href="tel:<?= $row['mobile3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                <?php } ?>
                                <?php }else{ ?>
                                <?php if($row['mobile1']!='' || $row['mobile1']!=null) { ?>
                                <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                <?php } if($row['mobile2']!='' || $row['mobile2']!=null) { ?>
                                  <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                <?php }
                                  if($row['mobile3']!='' || $row['mobile3']!=null) { ?>
                                  <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
            <?php 
                if(count($lapataperson) > 0)
                {
            ?>
            <?php 
                foreach($lapataperson as $k=>$row)
                {
                    if(isset($row[0]))
                    {
                        $row = $row[0];
            ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                <div class="card mb-3 shiva_height">
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <?php
                                if($row['Photo'] != '' || $row['Photo'] != NULL)
                                {
                            ?>
                            <div class="col-6 px-1 text-center mb-2">
                                <h5 class="text-center text-danger fs-20">Missing </h5>
                                <?php if($row['rewardamount'] != '' && $row['rewardamount'] != NULL && $row['rewardamount'] != 0){ ?>
                                    <div class="row col-12 mx-0 p-0" style="border:1px solid red;">
                                        <h6 class="card-title text-center px-1 py-0 mb-0" style="font-size:16px;"> <b style="color:red;font-weight:600;">Reward - </b><span style="color:black;">Rs. <?php echo $row['rewardamount']??"--"?></span></h6>
                                     </div>
                                <?php } ?>
                            </div>
                            <div class="col-6 text-end mb-2">
                                <button type="button" class="btn btn-dark" onclick="share('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                <button type="button" class="btn btn-primary" onclick="view('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                            </div>
                            <div class="col-12">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                            </div>
                            <div class="col-12">
                                <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
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
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['person_name']??"--" ?></span></p>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php }else{ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                <?php } ?>
                               
                                <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age Band - </b><span style="color:grey;"><?php echo $row['Age']??"--"?></span></p>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                            <div class="row col-6">
                                <h5 class="card-title text-center py-0 fs-6 mb-0"><b style="color:black;"><?php echo substr_replace($row['aadharNumber'],'xxxxxxxx',0,8);?></b></h5>
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
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                              
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
                                 <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
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
                                 <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
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
                            <div class="col-12 ">
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes'){
                                ?>
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
                            <div class="col-12 ">
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes'){
                                ?>
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
            <?php } ?>
            <?php } } ?>
            <?php 
                if(count($unknownperson) > 0)
                {
            ?>
            <?php 
                foreach($unknownperson as $k=>$row)
                {
                    if(isset($row[0]))
                    {
                        $row = $row[0];
            ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                <div class="card mb-3 shiva_height">
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
                            $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                            if(count($getUserDetail) > 0)
                            {
                        ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:red;font-size:.8rem!important">SAMAJSEVI - </b>
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
            <?php } ?>
            <?php } } ?>
            <?php 
                if(count($wantedperson) > 0)
                {
            ?>
            <?php 
                foreach($wantedperson as $k=>$row)
                {
            ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                <div class="card mb-3 shiva_height">
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <?php
                                if($row['photo'] != '' || $row['photo'] != NULL)
                                {
                            ?>
                            <div class="col-6">
                                <h5 class="text-center text-danger">Wanted Person </h5>
                            </div>
                            <div class="col-6 text-end mb-2">
                                <button type="button" class="btn btn-dark" onclick="share('wanted',this,'<?php echo $row['Id']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                <button type="button" class="btn btn-primary" onclick="view('wanted',this,'<?php echo $row['Id']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                            </div>
                            <div class="col-12">
                                <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                            </div>
                            <div class="col-5 ">
                                <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                            </div>
                            <?php }else{ ?>
                            <div class="col-5 ">
                                <?php if($row['Gender'] == 'Male'){ ?>
                                <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                <?php }else{ ?>
                                <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                <?php } ?>
                            </div>
                            <?php } ?>
                            <div class="col-7 px-0">
                                <?php if($row['personName'] != '' || $row['personName'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['personName']??"--" ?></span></p>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                                <?php }else{ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                                <?php } ?>
                               
                                <?php if($row['age'] != '' || $row['age'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:grey;"><?php echo $row['age']??"--"?></span></p>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if($row['message'] != '' || $row['message'] != NULL){ ?>
                        <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                           <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['message']??"--"?></b></p> 
                        </div>
                        <?php } ?>
                        <hr class="my-0">
                        <?php
                            if($row['policeThanaId'] != NULL)
                            {
                                $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeThanaId'])->result_array();
                        ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                 <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
                                 <?php echo $getPoliceDetails[0]['district'].' - '; ?><?php echo $getPoliceDetails[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php } ?>
                        <?php
                            if($row['policeThanaId'] != NULL)
                            {
                                $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeThanaId'])->result_array();
                        ?>
                        <div class="row w-100 mx-0 align-items-center">
                            <div class="col-12 ">
                                <b style="font-size:.8rem!important">Contact To: - POLICE THANA</b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes'){
                                ?>
                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                  <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                <?php }
                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                  <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                <?php } ?>
                                <?php }else{ ?>
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
                        <br>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
            <?php 
                if(count($criminalperson) > 0)
                {
            ?>
            <?php 
                foreach($criminalperson as $k=>$row)
                {
            ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                <div class="card mb-3 shiva_height">
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <?php
                                if($row['photo'] != '' || $row['photo'] != NULL)
                                {
                            ?>
                            <div class="col-6">
                                <h5 class="text-center text-danger">Criminal</h5>
                            </div>
                            <div class="col-6 text-end">
                                <button type="button" class="btn btn-dark" onclick="share('criminal',this,'<?php echo $row['Id']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                <button type="button" class="btn btn-primary" onclick="view('criminal',this,'<?php echo $row['Id']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                            </div>
                            <div class="col-12">
                                <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                            </div>
                            <div class="col-5 ">
                                <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                            </div>
                            <?php }else{ ?>
                            <div class="col-5 ">
                                <?php if($row['Gender'] == 'Male'){ ?>
                                <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                <?php }else{ ?>
                                <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                <?php } ?>
                            </div>
                            <?php } ?>
                            <div class="col-7 px-0">
                                <?php if($row['personName'] != '' || $row['personName'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['personName']??"--" ?></span></p>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                                <?php }else{ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                                <?php } ?>
                               
                                <?php if($row['age'] != '' || $row['age'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:grey;"><?php echo $row['age']??"--"?></span></p>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if($row['message'] != '' || $row['message'] != NULL){ ?>
                        <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                           <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['Message']??"--"?></b></p> 
                        </div>
                        <?php } ?>
                        <hr class="my-0">
                        <?php
                            if($row['policeThanaId'] != NULL)
                            {
                                $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeThanaId'])->result_array();
                        ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                 <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
                                 <?php echo $getPoliceDetails[0]['district'].' - '; ?><?php echo $getPoliceDetails[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php } ?>
                        <?php
                            if($row['policeThanaId'] != NULL)
                            {
                                $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeThanaId'])->result_array();
                        ?>
                        <div class="row w-100 mx-0 align-items-center">
                            <div class="col-12 ">
                                <b style="font-size:.8rem!important">Contact To: - POLICE THANA</b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes'){
                                ?>
                                    <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                    <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                    <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                      <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                    <?php }
                                      if($row['well3']!='' || $row['well3']!=null) { ?>
                                      <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                    <?php } ?>
                                <?php }else{ ?>
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
                        <br>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
            <?php 
                if(count($userperson) > 0)
                {
            ?>
            <?php 
                foreach($userperson as $k=>$row)
                {
                    if(isset($row[0]))
                    {
                        $row = $row[0];
            ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                <div class="card mb-3 shiva_user_height">
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <div class="col-6">
                                <img src="<?php echo base_url(); ?>assets/images/verified.webp" style="width:100%;height:auto;">
                            </div>
                            <div class="col-6 text-end mb-2">
                                <button type="button" class="btn btn-primary" onclick="view('general',this,'<?php echo $row['uid']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <?php
                                if($row['facematchphoto'] != '' || $row['facematchphoto'] != NULL)
                                {
                            ?>
                            <div class="col-5 ">
                                <a href="<?php echo base_url().$row['aadharphoto']?>" data-lightbox="roadtrip">
                                    <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['aadharphoto']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                </a>
                            </div>
                            <?php }else{ ?>
                            <div class="col-5 ">
                                <a href="<?php echo base_url().$row['aadharphoto']?>" data-lightbox="roadtrip">
                                    <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['aadharphoto']; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                </a>
                            </div>
                            <?php } ?>
                            <div class="col-7 px-0">
                                <?php if($row['aadharname'] != '' || $row['aadharname'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['aadharname']??"--" ?></span></p>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['gender'] == 'MALE' ? 'Male':'Female'); ?></span></p>
                                <?php }else{ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['gender'] == 'MALE' ? 'Male':'Female'); ?></span></p>
                                <?php } ?>
                               
                                <?php if($row['dob'] != '' || $row['dob'] != NULL){ 
                                    $from=new DateTime(date('Y-m-d'));
                                    $to   = new DateTime($row['dob']);
                                    $age = ($from->diff($to)->y).'- Years';
                                ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:grey;"><?php echo $age??"--"?></span></p>
                                <?php } ?>
                            </div>
                            <hr class="my-0">
                            <div class="row w-100 mx-0 align-items-center">
                                <?php 
                                    if($this->session->userdata('user_login') != 'yes'){
                                ?>
                                <div class="col-12 ">
                                    <b style="font-size:.8rem!important">Contact To: - Well Wisher</b>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="javascript:void(0)" onclick="showLogin()" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                </div>
                                <?php }else{ ?>
                                    <div class="col-12 ">
                                        <b style="font-size:.8rem!important">Contact To: - Well Wisher</b>
                                    </div>
                                    <div class="col-12 text-center">
                                        <?php 
                                            if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                            {
                                        ?>
                                        <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                        <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                        <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                          <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                        <?php }
                                          if($row['well3']!='' || $row['well3']!=null) { ?>
                                          <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                        <?php } ?>
                                        <?php }else{ ?>
                                        <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } } ?>
        </div>
        </div>
    </section>
</main>
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
                        <button id="click-photo" class="w-100 btn btn-primary btn-style-five">Capture Photo <i class='fa fa-camera fa-spin'></i></button>
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
                <div class="col-lg-6 col-sm-12 col-6 px-1 col-md-6 text-center d-none mb-3" id="retake">
                    <button id="retake-photo" class="w-100 btn btn-dark btn-style-yellow" style="background:black!important;color:white!important;">Retake <i class='fa fa-camera fa-spin'></i></button>
                </div>
                <div class="col-lg-6 col-sm-12 col-6 px-1 col-md-6 text-center d-none mb-3" id="retakeMobile">
                    <button id="retake-mobile" class="w-100 btn btn-dark btn-style-yellow" onclick="openCamera()" style="background:black!important;color:white!important;">Retake <i class='fa fa-camera fa-spin'></i></button>
                </div>
                <div class="col-lg-6 col-sm-12 col-6 px-1 col-md-6 text-center mb-3">
                    <button id="btnInactiveSave" class="w-100 btn btn-danger btn-style-red disabled-on-loading"> Search <i class='fa fa-search'></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="uploadimageModal" class="modal" data-bs-backdrop="static" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content" style="width:min-content;max-width:100%;">
        <div class="modal-body pt-0">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <div id="image_demo" style="width:100%; margin-top:21px"></div>
            </div>
            <div class="col-6 text-end">
                <button type="button" class="btn btn-dark close1 save" style="background:black!important;color:white;" data-dismiss="modal">Back</button>
            </div>
            <div class="col-6 text-start">
                <button class="btn btn-success crop_image save">OK</button>
            </div>
        </div>
        </div>
     </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript" src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>
<?php 
    $getInactiveSettings = $this->db->query('select * from settings where name="inactiveMode"')->result_array();
?>
<script type="text/javascript">
    
    $(document).ready(function() {
	
		$(".message").shorten({
        	"showChars" : 150,
        	"moreText"	: "See More",
	        "lessText"	: "Less",
        });
	});
	
	function showLogin()
    {
        Swal.fire({
          title: '<strong>Signup/Login</strong>',
          allowOutsideClick:false,
          html:
            '<div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><a href="<?php echo base_url(); ?>login" class="w-100 save btn">Login</a></div><div class="col-lg-auto col-sm-12 col-md-auto"><a href="<?php echo base_url(); ?>landing/checkregister" class="w-100 next btn">Signup</a></div></div></div>',
          showCloseButton: true,
          showCancelButton: false,
          focusConfirm: false,
          showConfirmButton:false
        })       
    }
	
	function back(ele)
	{
	    $(ele).attr('disabled','disabled');
	    location.href="<?= base_url(); ?>police/search_person_details?pn=7";
	}
	
	function view(type,ele,appNo)
    {
        let url = '';
        if(type == 'missing')
        {
            url = '<?php echo base_url(); ?>find-missed-person?Id='+appNo;
            window.open(url,'_blank');
        }else if(type == 'lapata'){
            url = '<?php echo base_url(); ?>find-lapata-person?id='+appNo;
            window.open(url,'_blank');
        }else if(type == 'criminal')
        {
            url = '<?php echo base_url(); ?>find-criminal-person?Id='+appNo;
            window.open(url,'_blank');
        }else if(type == 'wanted')
        {
            url = '<?php echo base_url(); ?>find-wanted-person?Id='+appNo;
            window.open(url,'_blank');
        }else if(type == 'general')
        {
            $.ajax({
                url:'<?php echo base_url(); ?>landing/checkVisibility?Id='+appNo,
                type:'get',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        url = '<?php echo base_url(); ?>find-general-person?Id='+appNo;          
                        window.open(url,'_blank');   
                    }else{
                        openBackCamera();
                    }
                }
            })
        }else if(type == 'unknown')
        {
            url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
            window.open(url,'_blank');
        }
    }
    
    async function openFrontCamera()
    {
        if(stream != null)
        {
            stream.getTracks().forEach(function(track) {
              track.stop();
            });   
        }
        $('#backcameradiv').removeClass('d-none');
        $('#frontcameradiv').addClass('d-none');
        stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false,facingMode:'user' });
        video.srcObject = stream;
        $('#cameraModal').modal('show');
        swal.close();
    }
    
    async function openBackCamera()
    {
        <?php 
            if($getInactiveSettings[0]['value'] == 1)
            {
        ?>
            if(stream != null)
            {
                stream.getTracks().forEach(function(track) {
                  track.stop();
                });   
            }
            $('#backcameradiv').addClass('d-none');
            $('#frontcameradiv').removeClass('d-none');
            stream = await navigator.mediaDevices.getUserMedia({ video: {facingMode:'environment'}, audio: false});
            video.srcObject = stream;
            $('#cameraModal').modal('show');
            swal.close();
        <?php }else{ ?>
            Swal.fire({
                iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:200px;">',
                customClass: {
                    icon: 'no-border'
                },
                allowOutsideClick:false,
                html: '<div class="row mt-3 mx-0 justify-content-center w-min-content"><div class="col-lg-12 col-md-12"><h6 style="color:red;font-weight:bold;">No More Information Enabled By the User !</h6></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="javascript:void(0)" onclick="back(this)" class="btn btn-primary btn-style-primary"><i class="fa fa-search"></i> Search Another</a></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="<?php echo base_url(); ?>police" class="btn btn-success save">Go To Dashboard</a></div>',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton:false,
            })
        <?php } ?>
    }
    
    function openCamera()
    {
        $('#fileMobInput').click();
    }
    
    if(window.innerWidth <= 525)
    {
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:'100%',
              height:400,
              type:'square' //circle
            },
            boundary:{
              width:'100%',
              height:500
            }
          });    
    }else{
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:'300',
              height:400,
              type:'square' //circle
            },
            boundary:{
              width:'400',
              height:500
            }
          });
    }
    
    $('.crop_image').click(function(event){
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport',
          format:'jpeg'
        }).then(function(response){
            $('#mobileimage').attr('src',response);
            $('#mainPhotoSelected').val(response);
            // $('#uploadimageModal').modal('hide');
            $('#clickdiv').addClass('d-none');
            $('#bothcameradiv').addClass('d-none');
           	$('#videodiv').addClass('d-none');
           	$('#btnInactiveSave').click();
           	$('.crop_image').attr('disabled','disabled');
           	$('#mobileimagediv').removeClass('d-none');
            $('#retakeMobile').removeClass('d-none');
        })
    });
    
    $('#btnInactiveSave').click(function()
    {
        if($('#mainPhotoSelected').val() != '')
        {
            $(this).attr('disabled','disabled');      
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('photo',$('#mainPhotoSelected').val());
            $.ajax({
                url:'<?php echo base_url(); ?>landing/checkInactiveFace',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    let idType = $('#idType').val();
                    if(parse.status == 'success')
                    {
                        location.href="<?php echo base_url(); ?>find-general-person?Id="+ parse.id;
                    }
                    else{
                        toastr.error(parse.message);
                        $('.crop_image').removeAttr('disabled');
                        $('#btnInactiveSave').removeAttr('disabled');
                    }  
                }
            })
        }else{
            toastr.error('Please capture the photo to continue');
        }
    })
    
    $('.close1').click(function()
    {
        $('#mainPhotoUploaded').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#mainPhotoSelected').val('');
        $('#uploadimageModal').modal('hide');
    })
    
    let camera_button = document.querySelector("#start-camera");
    let video = document.querySelector("#video");
    let click_button = document.querySelector("#click-photo");
    let canvas = document.querySelector("#canvas");
    let stream = null;
    click_button.addEventListener('click', function() {
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
    let image_data_url = canvas.toDataURL('image/jpeg');
    $('#videodiv').addClass('d-none');
    $('#canvasdiv').removeClass('d-none');
    $('#mainPhotoSelected').val(image_data_url);
    $('#clickdiv').addClass('d-none');
    $('#retake').removeClass('d-none');
    });
    
    $('.close').click(function()
    {
    location.reload();
    })
    
    $('#retake button').click(function(){
    $('#videodiv').removeClass('d-none');
    $('#canvasdiv').addClass('d-none');
    $('#mainPhotoSelected').val();
    $('#clickdiv').removeClass('d-none');
    $('#retake').addClass('d-none');
    })
    
    $('#fileMobInput').on('change', async function(e)
    {
        if($(this)[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              })
            }
            reader.readAsDataURL($(this)[0].files[0]);
            $('#uploadimageModal').modal('show');   
            swal.close();
        }
    })
    
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
<input type="hidden" id="mainPhotoSelected" >