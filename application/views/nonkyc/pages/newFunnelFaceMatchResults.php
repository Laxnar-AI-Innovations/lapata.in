<?php 
    $_SESSION['isLoaded'] = 1;
?>
<script type="text/javascript" src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>
<style>
    .btn_new_css{
        background-image:linear-gradient(93deg, #061aa3, #d90f0f)!important;
        border:none!important;
        font-size:1rem!important;
        color:white!important;
        font-weight: 600!important;
    }
    
    .swal2-close1{
        margin: -1rem -1rem -1rem auto;
        position: relative!important;
        color: #fff!important;
        font-size: 20px!important;
        line-height: 20px!important;
        font-weight: 600!important;
        padding: 10px 10px!important;
        border-radius: 0px!important;
        opacity: 1!important;
        background-color:black!important;
    }
    .heightModal{
        max-height: 300px;
        overflow: auto;
    }

    /* Width and height of the scrollbar */
    .heightModal::-webkit-scrollbar {
      width: 8px; /* Vertical scrollbar */
      height: 8px; /* Horizontal scrollbar */
    }

    /* Track (the area the scrollbar moves in) */
    .heightModal::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 10px;
    }

    /* Scrollbar thumb (the draggable part) */
    .heightModal::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 10px;
    }

    .heightModal::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    .text-gradient1 {
      background: linear-gradient(to right, #f23a00, #FFA500, #FF0000);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 2px 2px 4px rgba(255, 153, 51,0.6);
    }

    .card-titlenew {
        padding: 20px 0 15px 0;
        font-size: 18px;
        font-weight: 500;
        color: #012970;
        font-family: "Poppins", sans-serif;
    }
    .morecontent span{
        font-size: 0.6rem!important;
        color: red!important;
    }
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

</style>
<style>
#swal2-html-container{
    margin: 0 1rem!important;
}

div:where(.swal2-container) div:where(.swal2-popup){
    width:auto;
}

.shiva_height1 p {
    margin-bottom: 0.3rem !important;
    font-size: 0.7rem !important;
}

.shiva_user_height p{
    margin-bottom:0.3rem!important;
    font-size:0.8rem!important;
}
.shiva_height p{
    margin-bottom:0.3rem!important;
    font-size:0.7rem!important;
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
    $familyIds = array();
    if($getDetails[0]['matchedFamilyIds'] != '')
    {
        $familyIds = array_unique(explode(',',$getDetails[0]['matchedFamilyIds']));   
    }
    $mahakumbhIds = array();
    if($getDetails[0]['matchedMahakumbhIds'] != '')
    {
        $mahakumbhIds = array_unique(explode(',',$getDetails[0]['matchedMahakumbhIds']));   
    }
    $specialIds = array();
    if($getDetails[0]['matchedSpecialIds'] != '')
    {
        $specialIds = array_unique(explode(',',$getDetails[0]['matchedSpecialIds']));   
    }
    $funnelMissingIds = array();
    if($getDetails[0]['matchedFunnelMissingIds'] != '')
    {
        $funnelMissingIds = array_unique(explode(',',$getDetails[0]['matchedFunnelMissingIds']));   
    }
    $funnelFamilyIds = array();
    if($getDetails[0]['matchedFunnelFamilyIds'] != '')
    {
        $funnelFamilyIds = array_unique(explode(',',$getDetails[0]['matchedFunnelFamilyIds']));   
    }
    $missingperson = array();
    if(count($missingIds) > 0)
    {
        $this->db->where_in('Id',$missingIds);   
        $this->db->order_by("dateCreated", "desc");
        $missingperson = $this->db->get('missingperson')->result_array();
    }
    $funnelmissingperson = array();
    if(count($funnelMissingIds) > 0)
    {
        foreach($funnelMissingIds as $k=>$v)
        {
            $this->db->where('id',$v);
            $this->db->where('isFinalSubmitted',1);
            array_push($funnelmissingperson,$this->db->get('funnel_missing')->result_array());
        }
    }
    $funnelfamilyperson = array();
    if(count($funnelFamilyIds) > 0)
    {
        foreach($funnelFamilyIds as $k=>$v)
        {
            $this->db->where('id',$v);
            $this->db->where('isFinalSubmitted',1);
            array_push($funnelfamilyperson,$this->db->get('funnelfamily')->result_array());
        }
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
    $familyperson = array();
    if(count($familyIds) > 0)
    {
        foreach($familyIds as $k=>$v)
        {
            $this->db->where('id',$v);
            $this->db->where('isFinalSubmitted',1);
            array_push($familyperson,$this->db->get('familyMember')->result_array());
        }
    }
    $mahakumbhperson = array();
    if(count($mahakumbhIds) > 0)
    {
        foreach($mahakumbhIds as $k=>$v)
        {
            $this->db->where('id',$v);
            $this->db->where('isFinalSubmitted',1);
            array_push($mahakumbhperson,$this->db->get('mahakumbhMember')->result_array());
        }
    }
    $specialperson = array();
    if(count($specialIds) > 0)
    {
        foreach($specialIds as $k=>$v)
        {
            $this->db->where('id',$v);
            $this->db->where('isFound',0);
            array_push($specialperson,$this->db->get('mahakumbhSpecial')->result_array());
        }
    }
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<main id="main" class="main px-2">
    <div class="pagetitle">
      <h1>Search Person By Face Photo</h1>
    </div>
    <div>
        <div class="container-fluid px-0 px-md-2 mt-3">

          <section class="section register d-flex flex-column align-items-center justify-content-center bg-soft-primary">
            <div class="container-fluid px-1 px-md-2">
                <div class="row align-items-center my-3 mx-0 p-2" style="justify-content:space-around;box-shadow:0px 1px 2px grey;background:white;">
                    <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($missingperson) > 0) ? '' : 'd-none'; ?>">
                        <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Missing - <?php echo (count($missingperson) > 1 ? count($missingperson).' Records' : count($missingperson).' Record'); ?></a>
                    </div>
                    <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($wantedperson) > 0) ? '' : 'd-none'; ?>">
                        <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Wanted - <?php echo (count($wantedperson) > 1 ? count($wantedperson).' Records' : count($wantedperson).' Record'); ?></a>
                    </div>
                    <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($criminalperson) > 0) ? '' : 'd-none'; ?>">
                        <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Criminal - <?php echo (count($criminalperson) > 1 ? count($criminalperson).' Records' : count($criminalperson).' Record'); ?></a>
                    </div>
                    <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= count($funnelmissingperson) + count($lapataperson) > 0 ? '' : 'd-none'; ?>">
                        <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Missing - <?php echo ((count($funnelmissingperson) + count($lapataperson)) > 1 ? (count($funnelmissingperson) + count($lapataperson)).' Records' : (count($funnelmissingperson) + count($lapataperson)).' Record'); ?></a>
                    </div>
                    <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($unknownperson) > 0) ? '' : 'd-none'; ?>">
                        <a href="javascript:void(0)" style="color:red;text-decoration:none;font-weight:bold;">Appeal for Identification - <?php echo (count($unknownperson) > 1 ? count($unknownperson).' Records' : count($unknownperson).' Record'); ?></a>
                    </div>
                    <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($userperson) > 0) ? '' : 'd-none'; ?>">
                        <a href="javascript:void(0)" style="color:green;text-decoration:none;font-weight:bold;">Verified - <?php echo (count($userperson) > 1 ? count($userperson).' Records' : count($userperson).' Record'); ?></a>
                    </div>
                    <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= count($familyperson) + count($funnelfamilyperson) > 0 ? '' : 'd-none'; ?>">
                        <a href="javascript:void(0)" style="color:green;text-decoration:none;font-weight:bold;">General - <?php echo ((count($funnelfamilyperson) + count($familyperson)) > 1 ? (count($funnelfamilyperson) + count($familyperson)).' Records' : (count($funnelfamilyperson) + count($familyperson)).' Record'); ?></a>
                    </div>
                    <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($mahakumbhperson) > 0) ? '' : 'd-none'; ?>">
                        <a href="javascript:void(0)" class="text-gradient1" style="text-decoration:none;font-weight:bold;">Mahakumbh 2025 - <?php echo (count($mahakumbhperson) > 1 ? count($mahakumbhperson).' Records' : count($mahakumbhperson).' Record'); ?></a>
                    </div>
                    <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($specialperson) > 0) ? '' : 'd-none'; ?>">
                        <a href="javascript:void(0)" class="text-gradient1" style="text-decoration:none;font-weight:bold;">KHOYA PAYA - <?php echo (count($specialperson) > 1 ? count($specialperson).' Records' : count($specialperson).' Record'); ?></a>
                    </div>
                    <div class="col-lg-auto col-sm-12 col-md-auto text-end my-1">
                        <button type="button" onclick='location.href=`<?= base_url(); ?>non-kyc-funnel-facematch`' class="btn mt-0 btn-style-grey btn-dark disabled-on-loading"> <i class="fa fa-arrow-circle-left"></i></button>
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
                <?php 
                    $decode = json_decode($getDetails[0]['totalResponse'],true);
                    $decode1 = json_decode($getDetails[0]['totalResponse'],true);
                    $decode = array_unique(array_merge($decode['confidence']['High'],$decode['confidence']['Medium']));
                    $decode = array_unique(array_merge($decode,$decode1['confidence']['Low']));
                ?>            
            <div class="row align-items-center mx-1 justify-content-center">
                <?php 
                    $finalcount = 0;
                    $lapataNewIds = array();
                    $newFamilyId = array();
                    $funnelMissingNewIds = array();
                    $funnelFamilyNewIds = array();
                    $newMahakumbhId = array();
                    $newSpecialId = array();
                    $newUnknownIds = array();
                    $newUnknownPhotos = array();
                    foreach($decode as $k=>$v)
                    {
                        if($finalcount >= 0)
                        {
                            $split = explode('_',$v);
                            if($split[0] == 'GEN')
                            {
                                $this->db->or_where('imageId',$v);
                                $this->db->or_where('imageId1',$v);
                                $this->db->or_where('imageId2',$v);
                                $user = $this->db->get('user')->result_array();
                                if(count($user) > 0)
                                {
                                    foreach($user as $k1=>$row)
                                    {
                                        if(strtolower($getDetails[0]['gender']) == strtolower($row['gender']))
                                        {
                                            $finalcount++;
                ?>
                <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-type="user" data-id="<?= $row['uid']; ?>">
                    <div class="card mb-3 shiva_user_height bg-light1">
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
                                        <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['aadharname']??"--" ?></span></p>
                                        <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['gender'] == 'MALE' ? 'Male':'Female'); ?></span></p>
                                    <?php }else{ ?>
                                        <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['gender'] == 'MALE' ? 'Male':'Female'); ?></span></p>
                                    <?php } ?>
                                   
                                    <?php if($row['dob'] != '' || $row['dob'] != NULL){ 
                                        $from=new DateTime(date('Y-m-d'));
                                        $to   = new DateTime($row['dob']);
                                        $age = ($from->diff($to)->y).'- Years';
                                    ?>
                                        <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:black;"><?php echo $age??"--"?></span></p>
                                    <?php } ?>
                                </div>
                                <div class="row col-12 mx-0 px-0">
                                    <p class="card-title py-0 mb-0"><b style="color:black;"><?php echo substr_replace($row['aadhar_id'],'xxxxxxxx',0,8);?></b></p>
                                </div>
                                <hr class="my-0">
                                <div class="row w-100 mx-0 align-items-center">
                                    <?php 
                                        if($this->session->userdata('user_login') == 'yes'){
                                    ?>
                                    <div class="col-12 mt-4">
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
                                    <?php }else{ 
                                    ?>
                                    <div class="col-12 mt-4">
                                        <b style="font-size:.8rem!important">Contact To: - Well Wisher</b>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="javascript:void(0)" onclick="showLogin('user',<?= $row['uid']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mt-3">
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
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                }else{
                    $getAadharImageId = $this->db->query('select * from user where aadharImageId="'.$v.'"')->result_array();
                    if(count($getAadharImageId) > 0)
                    {
                        foreach($getAadharImageId as $k1=>$row)
                        {
                            if(strtolower($getDetails[0]['gender']) == strtolower($row['gender']))
                            {
                                if(strtotime($row['aadharExpiryDate']) >= strtotime(date('Y-m-d')))
                                {
                                    $finalcount++;   
                ?>
                <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-type="user" data-id="<?= $row['uid']; ?>">
                    <div class="card mb-3 shiva_user_height bg-light1">
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
                                        <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['aadharname']??"--" ?></span></p>
                                        <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['gender'] == 'MALE' ? 'Male':'Female'); ?></span></p>
                                    <?php }else{ ?>
                                        <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['gender'] == 'MALE' ? 'Male':'Female'); ?></span></p>
                                    <?php } ?>
                                   
                                    <?php if($row['dob'] != '' || $row['dob'] != NULL){ 
                                        $from=new DateTime(date('Y-m-d'));
                                        $to   = new DateTime($row['dob']);
                                        $age = ($from->diff($to)->y).'- Years';
                                    ?>
                                        <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:black;"><?php echo $age??"--"?></span></p>
                                    <?php } ?>
                                </div>
                                <div class="row col-12 mx-0 px-0">
                                    <p class="card-title py-0 mb-0"><b style="color:black;"><?php echo substr_replace($row['aadhar_id'],'xxxxxxxx',0,8);?></b></p>
                                </div>
                                <hr class="my-0">
                                <div class="row w-100 mx-0 align-items-center">
                                    <?php 
                                        if($this->session->userdata('user_login') == 'yes'){
                                    ?>
                                    <div class="col-12 mt-4">
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
                                    <?php }else{ 
                                    ?>
                                    <div class="col-12 mt-4">
                                        <b style="font-size:.8rem!important">Contact To: - Well Wisher</b>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="javascript:void(0)" onclick="showLogin('user',<?= $row['uid']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mt-3">
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
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <?php
                                }
                            }
                        }   
                    }
                }           
            }
            if($split[0] == 'FUM')
            {
                $this->db->or_where('imageId',$v);
                $this->db->or_where('imageId1',$v);
                $this->db->or_where('imageId2',$v);
                $lapata = $this->db->get('funnel_missing')->result_array();
                if(count($lapata) > 0)
                {
                    foreach($lapata as $k1=>$row)
                    {
                        if(strtotime($row['expiryDate']) >= strtotime(date('Y-m-d')))
                        {
                            if($row['isFound'] == '0')
                            {
                                $gender = $getDetails[0]['gender'] == 'male' ? 'boy' : ($getDetails[0]['gender'] == 'female' ? 'girl' : 'other');
                                if($gender == strtolower($row['Gender']))
                                {
                                    if($row['isFinalSubmitted'] == 1)
                                    {
                                        array_push($funnelMissingNewIds,$row['id']);
                                        $finalcount++;
                ?>
                <input type="hidden" id="firstFunnelMissingId" value="<?= $funnelMissingNewIds[0]; ?>">
                <input type="hidden" id="isFirstFunnelMissingSent" value="0">
                <input type="hidden" id="isFunnelMissingNotificationSent_<?= $row['id']; ?>" value="0">
                <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-type="FunnelMissing" data-id="<?= $row['id']; ?>">
                <div class="card mb-3 shiva_height bg-light1">
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
                                <button type="button" class="btn btn-dark" onclick="share('funnelmissing',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                <button type="button" class="btn btn-primary" onclick="view('funnelmissing',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                            </div>
                            <div class="col-12">
                                <p class="mb-1"><b style="color:black;font-size:.7rem!important">Application No :- </b><b style="color:black;font-size:.7rem!important"><?php echo $row['Application_no']; ?></b></p>
                            </div>
                            <div class="col-12">
                                <p ><b style="color:black;font-size:.7rem!important">Uploaded Date :- </b><b style="color:black;font-size:.7rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
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
                            $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
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
                        <?php } ?>
                        <?php
                            $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                        ?>
                        <div class="row w-100 mx-0 mt-3 align-items-center">
                            <?php 
                                if($this->session->userdata('user_login') == 'yes'){
                            ?>
                            <div class="col-12 mt-4">
                                <b style="font-size:.8rem!important">Contact To: - </b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                    {
                                ?>
                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                <button onclick="sendNotification(this,'FunnelMissing',<?= $row['id'] ?>)" data-applicationno="<?= $row['Application_no']; ?>" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                <button onclick="sendNotification(this,'FunnelMissing',<?= $row['id'] ?>)" data-applicationno="<?= $row['Application_no']; ?>" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php }
                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                  <button onclick="sendNotification(this,'FunnelMissing',<?= $row['id'] ?>)" data-applicationno="<?= $row['Application_no']; ?>" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } ?>
                                <?php }else{ ?>
                                <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                <?php } ?>
                            </div>
                            <?php }else{ 
                                if(!isset($_SESSION['landingMob']))
                                {
                            ?>
                            <div class="col-12 mt-4">
                                <b style="font-size:.8rem!important">Contact To: - </b>
                            </div>
                            <div class="col-12 text-center">
                                <a href="javascript:void(0)" onclick="showLogin('FunnelMissing',<?= $row['id']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mb-3 mt-md-0">
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
                            </div>
                            <?php }else{ ?>
                            <div class="col-12 mt-4">
                                <b style="font-size:.8rem!important">Contact To: - </b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                    {
                                ?>
                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                <button onclick="sendNotification(this,'FunnelMissing',<?= $row['id'] ?>)" data-applicationno="<?= $row['Application_no']; ?>" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                <button onclick="sendNotification(this,'FunnelMissing',<?= $row['id'] ?>)" data-applicationno="<?= $row['Application_no']; ?>" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php }
                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                  <button onclick="sendNotification(this,'FunnelMissing',<?= $row['id'] ?>)" data-applicationno="<?= $row['Application_no']; ?>" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } ?>
                                <?php }else{ ?>
                                <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                <?php } ?>
                            </div>
                            <?php } ?>
                            <?php } ?>
                        </div>
                        <br>
                    </div>
                </div>
                </div>
                <?php
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                if($split[0] == 'FFU')
                {
                    $this->db->or_where('imageId',$v);
                    $this->db->or_where('imageId1',$v);
                    $this->db->or_where('imageId2',$v);
                    $familyMember = $this->db->get('funnelfamily')->result_array();
                    if(count($familyMember) > 0)
                    {
                        foreach($familyMember as $k1=>$row)
                        {
                            if(strtotime($row['expiryDate']) >= strtotime(date('Y-m-d')))
                            {
                                if($row['activeStatus'] == 1)
                                {
                                    $gender = $getDetails[0]['gender'] == 'male' ? 'boy' : ($getDetails[0]['gender'] == 'female' ? 'girl' : 'other');
                                    if($gender == strtolower($row['Gender']))
                                    {
                                        if($row['isFinalSubmitted'] == 1)
                                        {
                                            array_push($funnelFamilyNewIds,$row['id']);
                                            $finalcount++;
                ?>
                <input type="hidden" id="firstFunnelFamilyId" value="<?= $funnelFamilyNewIds[0]; ?>">
                <input type="hidden" id="isFirstFunnelFamilySent" value="0">
                <input type="hidden" id="isFunnelFamilyNotificationSent_<?= $row['id']; ?>" value="0">
                <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-type="FunnelFamily" data-id="<?= $row['id']; ?>">
                <div class="card mb-3 shiva_height bg-light" style="height: auto;">
                <div class="card-body px-0 pt-0">
                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                        <?php
                            if($row['Photo'] != '' || $row['Photo'] != NULL)
                            {
                        ?>
                        <div class="col-6 text-center px-1 mt-2">
                            <h5 class="text-center text-success mb-1 fs-20">General</h5>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-primary" onclick="view('funnelfamily',this,'<?php echo $row['id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
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
                    <hr class="my-0">
                    <?php 
                        $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['parentId'])->result_array();       
                        if(count($getUserDetail) > 0)
                        {
                    ?>
                    <?php 
                        if($row['relation'] == 23)
                        {
                            $name = $row['otherrelationname'];
                        }else{
                            $getRelation = $this->db->query('select * from familyRelations where Id='.$row['relation'])->result_array();
                            $name = $getRelation[0]['relationName'];
                        }
                    ?>
                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                        <div class="col-12 text-start">
                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Added By :- </b><b style="color:<?= 'blue'; ?>;font-size:1rem!important"><?= $name; ?> - </b>
                             <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                             <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                        </div>
                    </div>
                    <?php } ?>
                    <?php
                        $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['parentId'])->result_array();       
                    ?>
                    <div class="row w-100 mx-0 mt-3 align-items-center">
                        <?php 
                            if($this->session->userdata('user_login') == 'yes'){
                        ?>
                        <div class="col-12 ">
                            <b style="font-size:.8rem!important">Contact To: - </b>
                        </div>
                        <div class="col-12 text-center">
                            <?php 
                                if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                {
                            ?>
                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                            <button onclick="sendNotification(this,'FunnelFamily',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                            <button onclick="sendNotification(this,'FunnelFamily',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                            <?php }
                              if($row['well3']!='' || $row['well3']!=null) { ?>
                              <button onclick="sendNotification(this,'FunnelFamily',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                            <?php } ?>
                            <?php }else{ ?>
                            <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                            <?php } ?>
                        </div>
                        <?php }else{ 
                            if(!isset($_SESSION['landingMob']))
                            {
                        ?>
                        <div class="col-12 ">
                            <b style="font-size:.8rem!important">Contact To: - </b>
                        </div>
                        <div class="col-12 text-center">
                            <a href="javascript:void(0)" onclick="showLogin('FunnelFamily',<?= $row['id']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mb-3 mt-md-0">
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
                        </div>
                        <?php }else{ ?>
                        <div class="col-12 ">
                            <b style="font-size:.8rem!important">Contact To: - </b>
                        </div>
                        <div class="col-12 text-center">
                            <?php 
                                if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                {
                            ?>
                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                            <button onclick="sendNotification(this,'FunnelFamily',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                            <button onclick="sendNotification(this,'FunnelFamily',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                            <?php }
                              if($row['well3']!='' || $row['well3']!=null) { ?>
                              <button onclick="sendNotification(this,'FunnelFamily',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                            <?php } ?>
                            <?php }else{ ?>
                            <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                            <?php } ?>
                        </div>
                        <?php } } ?>
                    </div>
                    <br>
                </div>
                </div>
                </div>
                <?php
                                    }
                                }
                            }
                        }
                    }
                }
            }
            if($split[0] == 'LAP')
            {
                $this->db->or_where('imageId',$v);
                $this->db->or_where('imageId1',$v);
                $this->db->or_where('imageId2',$v);
                $lapata = $this->db->get('unknown_person')->result_array();
                if(count($lapata) > 0)
                {
                    foreach($lapata as $k1=>$row)
                    {
                        if(strtotime($row['expiryDate']) >= strtotime(date('Y-m-d')))
                        {
                            if($row['isFound'] == '0')
                            {
                                if($row['awsEventName'] == 'All')
                                {
                                    $gender = $getDetails[0]['gender'] == 'male' ? 'boy' : ($getDetails[0]['gender'] == 'female' ? 'girl' : 'other');
                                    if($gender == strtolower($row['Gender']))
                                    {
                                        if($row['isFinalSubmitted'] == 1)
                                        {
                                            array_push($lapataNewIds,$row['id']);
                                            $finalcount++;
                ?>
                <input type="hidden" id="firstLapataId" value="<?= $lapataNewIds[0]; ?>">
                <input type="hidden" id="isFirstLapataSent" value="0">
                <input type="hidden" id="isLapataNotificationSent_<?= $row['id']; ?>" value="0">
                <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-type="lapata" data-id="<?= $row['id']; ?>">
                    <div class="card mb-3 shiva_height bg-light1">
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
                                    <p class="mb-1"><b style="color:black;font-size:.7rem!important">Application No :- </b><b style="color:black;font-size:.7rem!important"><?php echo $row['Application_no']; ?></b></p>
                                </div>
                                <div class="col-12">
                                    <p ><b style="color:black;font-size:.7rem!important">Uploaded Date :- </b><b style="color:black;font-size:.7rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
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
                                     <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:black;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b>
                                     </p>
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
                            <?php 
                                if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                {
                                    $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                            ?>
                            <div class="row w-100 mx-0 align-items-center">
                                <div class="col-12 mt-4">
                                    <b style="font-size:.8rem!important">Contact To: - NGO </b>
                                </div>
                                <div class="col-12 ">
                                    <?php 
                                        if($this->session->userdata('user_login') == 'yes')
                                        {
                                    ?>
                                        
                                        <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                        <button onclick="sendNotification(this,'Lapata',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                        <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                        <button onclick="sendNotification(this,'Lapata',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                        <?php }
                                          if($row['well3']!='' || $row['well3']!=null) { ?>
                                          <button onclick="sendNotification(this,'Lapata',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                        <?php } ?>
                                    <?php }else
                                        { 
                                            if(!isset($_SESSION['landingMob']))
                                            {
                                    ?>
                                    <a href="javascript:void(0)" onclick="showLogin('lapata',<?= $row['id']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mb-3 mt-md-0">
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
                                    <?php } else{ ?>
                                        <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                        <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                            <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                        <?php }
                                          if($row['well3']!='' || $row['well3']!=null) { ?>
                                            <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                        <?php } ?>
                                    <?php } } ?>
                                </div>
                            </div>
                            <?php }else
                                { 
                                    if($row['policeId'] != NULL)
                                    {
                                        $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                            ?>
                            <div class="row w-100 mx-0 align-items-center">
                                <div class="col-12 mt-4">
                                    <b style="font-size:.8rem!important">Contact To: - POLICE THANA</b>
                                </div>
                                <div class="col-12 ">
                                    <?php 
                                        if($this->session->userdata('user_login') == 'yes'){
                                    ?>
                                    <!--<a href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>-->
                                    <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                    <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                    <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                      <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                    <?php }
                                      if($row['well3']!='' || $row['well3']!=null) { ?>
                                      <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                    <?php } ?>
                                    <?php }else{ 
                                        if(!isset($_SESSION['landingMob']))
                                        {
                                    ?>
                                    <a href="javascript:void(0)" onclick="showLogin('lapata',<?= $row['id']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mb-3 mt-md-0">
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
                                    <?php }else{ ?>
                                        <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                        <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                        <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                          <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                        <?php }
                                          if($row['well3']!='' || $row['well3']!=null) { ?>
                                          <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                        <?php } ?>
                                    <?php } } ?>
                                </div>
                            </div>
                            <?php }else{ 
                                if($row['isKyc'] == 0)
                                {
                                    $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                                }else{
                                    $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                }
                            ?>
                            <div class="row w-100 mx-0 mt-3 align-items-center">
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes'){
                                ?>
                                <div class="col-12 mt-4">
                                    <b style="font-size:.8rem!important">Contact To: - </b>
                                </div>
                                <div class="col-12 text-center">
                                    <?php 
                                        if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                        {
                                    ?>
                                    <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                    <button onclick="sendNotification(this,'Lapata',<?= $row['id'] ?>)" data-applicationno="<?= $row['Application_no']; ?>" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                    <button onclick="sendNotification(this,'Lapata',<?= $row['id'] ?>)" data-applicationno="<?= $row['Application_no']; ?>" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php }
                                      if($row['well3']!='' || $row['well3']!=null) { ?>
                                      <button onclick="sendNotification(this,'Lapata',<?= $row['id'] ?>)" data-applicationno="<?= $row['Application_no']; ?>" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                    <?php } ?>
                                </div>
                                <?php }else{ 
                                    if(!isset($_SESSION['landingMob']))
                                    {
                                ?>
                                <div class="col-12 mt-4">
                                    <b style="font-size:.8rem!important">Contact To: - </b>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="javascript:void(0)" onclick="showLogin('lapata',<?= $row['id']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mb-3 mt-md-0">
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
                                </div>
                                <?php }else{ ?>
                                <div class="col-12 mt-4">
                                    <b style="font-size:.8rem!important">Contact To: - </b>
                                </div>
                                <div class="col-12 text-center">
                                    <?php 
                                        if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                        {
                                    ?>
                                    <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                    <button onclick="sendNotification(this,'Lapata',<?= $row['id'] ?>)" data-applicationno="<?= $row['Application_no']; ?>" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                    <button onclick="sendNotification(this,'Lapata',<?= $row['id'] ?>)" data-applicationno="<?= $row['Application_no']; ?>" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php }
                                      if($row['well3']!='' || $row['well3']!=null) { ?>
                                      <button onclick="sendNotification(this,'Lapata',<?= $row['id'] ?>)" data-applicationno="<?= $row['Application_no']; ?>" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                                <?php } ?>
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
                                }
                            }
                        }
                    }
                }
            }
            if($split[0] == 'FAM')
            {
                $this->db->or_where('imageId',$v);
                $this->db->or_where('imageId1',$v);
                $this->db->or_where('imageId2',$v);
                $familyMember = $this->db->get('familyMember')->result_array();
                if(count($familyMember) > 0)
                {
                    foreach($familyMember as $k1=>$row)
                    {
                        if(strtotime($row['expiryDate']) >= strtotime(date('Y-m-d')))
                        {
                            if($row['activeStatus'] == 1)
                            {
                                $gender = $getDetails[0]['gender'] == 'male' ? 'boy' : ($getDetails[0]['gender'] == 'female' ? 'girl' : 'other');
                                if($gender == strtolower($row['Gender']))
                                {
                                    if($row['isFinalSubmitted'] == 1)
                                    {
                                        array_push($newFamilyId,$row['id']);
                                        $finalcount++;
            ?>
            <input type="hidden" id="firstFamilyId" value="<?= $newFamilyId[0]; ?>">
            <input type="hidden" id="isFirstFamilySent" value="0">
            <input type="hidden" id="isFamilyNotificationSent_<?= $row['id']; ?>" value="0">
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-type="family" data-id="<?= $row['id']; ?>">
                <div class="card mb-3 shiva_height bg-light" style="height: auto;">
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <?php
                                if($row['Photo'] != '' || $row['Photo'] != NULL)
                                {
                            ?>
                            <div class="col-6 text-center px-1 mt-2">
                                <h5 class="text-center text-success mb-1 fs-20">General</h5>
                            </div>
                            <div class="col-6 text-end">
                                <button type="button" class="btn btn-primary" onclick="view('family',this,'<?php echo $row['id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
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
                        <hr class="my-0">
                        <?php 
                            if($row['isKyc'] == 0)
                            {
                                $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['parentId'])->result_array();       
                            }else{
                                $getUserDetail = $this->db->query('select * from user where uid='.$row['parentId'])->result_array();    
                            }
                            if(count($getUserDetail) > 0)
                            {
                        ?>
                        <?php 
                            if($row['relation'] == 23)
                            {
                                $name = $row['otherrelationname'];
                            }else{
                                $getRelation = $this->db->query('select * from familyRelations where Id='.$row['relation'])->result_array();
                                $name = $getRelation[0]['relationName'];
                            }
                        ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Added By :- </b><b style="color:<?= $row['isKyc'] == 0 ? 'blue' : 'green'; ?>;font-size:1rem!important"><?= $name; ?> - </b>
                                 <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                 <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php } ?>
                        <?php
                            if($row['isKyc'] == 0)
                            {
                                $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['parentId'])->result_array();       
                            }else{
                                $getUserDetail = $this->db->query('select * from user where uid='.$row['parentId'])->result_array();    
                            }
                        ?>
                        <div class="row w-100 mx-0 mt-3 align-items-center">
                            <?php 
                                if($this->session->userdata('user_login') == 'yes'){
                            ?>
                            <div class="col-12 ">
                                <b style="font-size:.8rem!important">Contact To: - </b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                    {
                                ?>
                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                <button onclick="sendNotification(this,'Family',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                <button onclick="sendNotification(this,'Family',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php }
                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                  <button onclick="sendNotification(this,'Family',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } ?>
                                <?php }else{ ?>
                                <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                <?php } ?>
                            </div>
                            <?php }else{ 
                                if(!isset($_SESSION['landingMob']))
                                {
                            ?>
                            <div class="col-12 ">
                                <b style="font-size:.8rem!important">Contact To: - </b>
                            </div>
                            <div class="col-12 text-center">
                                <a href="javascript:void(0)" onclick="showLogin('Family',<?= $row['id']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mb-3 mt-md-0">
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
                            </div>
                            <?php }else{ ?>
                            <div class="col-12 ">
                                <b style="font-size:.8rem!important">Contact To: - </b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                    {
                                ?>
                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                <button onclick="sendNotification(this,'Family',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                <button onclick="sendNotification(this,'Family',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php }
                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                  <button onclick="sendNotification(this,'Family',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } ?>
                                <?php }else{ ?>
                                <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                <?php } ?>
                            </div>
                            <?php } } ?>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <?php
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $getSettings = $this->db->query('select * from settings where name="mahakumbhFamily"')->result_array();
            if($getSettings[0]['value'] == 'yes')
            {
                if($split[0] == 'MAH')
                {
                    $this->db->or_where('imageId',$v);
                    $this->db->or_where('imageId1',$v);
                    $this->db->or_where('imageId2',$v);
                    $familyMember = $this->db->get('mahakumbhMember')->result_array();
                    if(count($familyMember) > 0)
                    {
                        foreach($familyMember as $k1=>$row)
                        {
                            if(strtotime($row['expiryDate']) >= strtotime(date('Y-m-d')))
                            {
                                if($row['activeStatus'] == 1)
                                {
                                    $gender = $getDetails[0]['gender'] == 'male' ? 'boy' : ($getDetails[0]['gender'] == 'female' ? 'girl' : 'other');
                                    if($gender == strtolower($row['Gender']))
                                    {
                                        if($row['isFinalSubmitted'] == 1)
                                        {
                                            array_push($newMahakumbhId,$row['id']);
                                            $finalcount++;
                ?>
                <input type="hidden" id="firstMahakumbhId" value="<?= $newMahakumbhId[0]; ?>">
                <input type="hidden" id="isFirstMahakumbhSent" value="0">
                <input type="hidden" id="isMahakumbhNotificationSent_<?= $row['id']; ?>" value="0">
                <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-type="mahakumbh" data-id="<?= $row['id']; ?>">
                    <div class="card mb-3 shiva_height bg-light" style="height: auto;">
                        <div class="card-header" style="background-color: white;border: 2px solid lightgrey;">
                            <div class="row justify-content-between align-items-baseline">
                                <div class="col-4 px-0">
                                    <img src="<?= base_url(); ?>assets_landing_page/modi.png" style="width: 100%;height: 75px;">
                                </div>
                                <div class="col-4 px-0">
                                    <h6 class="text-center text-gradient1 mb-1 fs-20" style="font-size: 0.6rem!important;">SPECIAL MAHAKUMBH 2025</h6>
                                </div>
                                <div class="col-4">
                                    <img src="<?= base_url(); ?>assets/Prayagraj_Mahakumbh_2025_Logo-removebg-preview.png" style="width: 100%;height: 75px;">
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0">
                            <div class="row align-items-center px-0 mx-0 justify-content-center">
                                <?php
                                    if($row['Photo'] != '' || $row['Photo'] != NULL)
                                    {
                                ?>
                                <div class="col-12 text-end">
                                    <button type="button" class="btn btn-primary" onclick="view('mahakumbh',this,'<?php echo $row['id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
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
                            <hr class="my-0">
                            <?php 
                                if($row['isKyc'] == 0)
                                {
                                    $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['parentId'])->result_array();       
                                }else{
                                    $getUserDetail = $this->db->query('select * from user where uid='.$row['parentId'])->result_array();    
                                }
                                if(count($getUserDetail) > 0)
                                {
                            ?>
                            <?php 
                                if($row['relation'] == 23)
                                {
                                    $name = $row['otherrelationname'];
                                }else{
                                    $getRelation = $this->db->query('select * from familyRelations where Id='.$row['relation'])->result_array();
                                    $name = $getRelation[0]['relationName'];
                                }
                            ?>
                            <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                <div class="col-12 text-start">
                                     <p class="my-2"><b style="color:black;font-size:.8rem!important">Added By :- </b><b style="color:<?= $row['isKyc'] == 0 ? 'blue' : 'green'; ?>;font-size:1rem!important"><?= $name; ?> - </b>
                                     <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                     <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                                </div>
                            </div>
                            <?php } ?>
                            <?php
                                if($row['isKyc'] == 0)
                                {
                                    $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['parentId'])->result_array();       
                                }else{
                                    $getUserDetail = $this->db->query('select * from user where uid='.$row['parentId'])->result_array();    
                                }
                            ?>
                            <div class="row w-100 mx-0 mt-3 align-items-center">
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes'){
                                ?>
                                <div class="col-12 ">
                                    <b style="font-size:.8rem!important">Contact To: - </b>
                                </div>
                                <div class="col-12 text-center">
                                    <?php 
                                        if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                        {
                                    ?>
                                    <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                    <button onclick="sendNotification(this,'Mahakumbh',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                    <button onclick="sendNotification(this,'Mahakumbh',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php }
                                      if($row['well3']!='' || $row['well3']!=null) { ?>
                                      <button onclick="sendNotification(this,'Mahakumbh',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                    <?php } ?>
                                </div>
                                <?php }else{ 
                                    if(!isset($_SESSION['landingMob']))
                                    {
                                ?>
                                <div class="col-12 ">
                                    <b style="font-size:.8rem!important">Contact To: - </b>
                                </div>
                                <div class="col-12 text-center">
                                    <?php 
                                        if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                        {
                                    ?>
                                    <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                    <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </a>
                                    <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                    <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </a>
                                    <?php }
                                      if($row['well3']!='' || $row['well3']!=null) { ?>
                                      <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </a>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                    <?php } ?>
                                </div>
                                <?php }else{ ?>
                                <div class="col-12 ">
                                    <b style="font-size:.8rem!important">Contact To: - </b>
                                </div>
                                <div class="col-12 text-center">
                                    <?php 
                                        if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                        {
                                    ?>
                                    <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                    <button onclick="sendNotification(this,'Mahakumbh',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                    <button onclick="sendNotification(this,'Mahakumbh',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php }
                                      if($row['well3']!='' || $row['well3']!=null) { ?>
                                      <button onclick="sendNotification(this,'Mahakumbh',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                    <?php } ?>
                                </div>
                                <?php } } ?>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            <?php
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $getSettings = $this->db->query('select * from settings where name="mahakumbhSpecial"')->result_array();
            if($getSettings[0]['value'] == 'yes')
            {
                if($split[0] == 'SPE')
                {
                    $this->db->or_where('imageId',$v);
                    $this->db->or_where('imageId1',$v);
                    $this->db->or_where('imageId2',$v);
                    $specialperson = $this->db->get('mahakumbhSpecial')->result_array();
                    if(count($specialperson) > 0)
                    {
                        foreach($specialperson as $k1=>$row)
                        {
                            if($row['isFound'] == 0)
                            {
                                if(strtolower($getDetails[0]['gender']) == strtolower($row['Gender']))
                                {
                                    array_push($newSpecialId,$row['id']);
                                    $finalcount++;
            ?>
            <input type="hidden" id="firstSpecialId" value="<?= $newSpecialId[0]; ?>">
            <input type="hidden" id="isFirstSpecialSent" value="1">
            <?php 
                if($row['id'] == $newSpecialId[0])
                {
            ?>
            <input type="hidden" id="isSpecialNotificationSent_<?= $row['id']; ?>" value="1">
            <?php }else{ ?>
            <input type="hidden" id="isSpecialNotificationSent_<?= $row['id']; ?>" value="0">
            <?php } ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-type="special" data-id="<?= $row['id']; ?>">
                <div class="card mb-3 shiva_height bg-light" style="height: auto;">
                    <div class="card-header" style="background-color: white;border: 2px solid lightgrey;">
                        <div class="row justify-content-center align-items-baseline">
                            <div class="col-4 px-0">
                                <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/bhadarvipoonam.gif" 
                                   class="img-fluid" 
                                   style="height:100px;width:100px;">
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <div class="col-5 text-start mb-2">
                                <?php 
                                    if($row['uploadType'] == 'missing')
                                    {
                                ?>
                                <h6 class="text-start text-danger mb-0">MISSING </h6>
                                <?php }else{ 
                                    if($row['uploadType'] == 'general')
                                    {
                                ?>
                                <h6 class="text-start text-danger mb-0">GENERAL</h6>
                                <?php }else{ ?>
                                <h6 class="text-start text-danger mb-0">APPEAL FOR IDENTIFICATION </h6>
                                <?php } } ?>
                            </div>
                            <div class="col-7 text-end">
                                <button type="button" class="btn btn-primary" onclick="view('special',this,'<?php echo $row['id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
                            </div>
                            <?php 
                                if($row['Application_no'] != NULL)
                                {
                            ?>
                            <div class="col-12">
                                <p class="mb-1"><b style="color:black;font-size:.7rem!important">Application No :- </b><b style="color:black;font-size:.7rem!important"><?php echo $row['Application_no']; ?></b></p>
                            </div>
                            <?php } ?>
                            <?php
                                if($row['uploadType'] == 'general')
                                {
                            ?>
                            <div class="col-12">
                                <p ><b style="color:black;font-size:.7rem!important">Uploaded Date :- </b><b style="color:black;font-size:.7rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                            </div>
                            <?php }else if($row['uploadType'] == 'missing'){ ?>
                            <div class="col-12">
                                <p ><b style="color:black;font-size:.7rem!important">Uploaded Date :- </b><b style="color:black;font-size:.7rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                            </div>
                            <div class="col-12 text-start">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Missing Date :- </b><b style="color:red;font-size:.8rem!important;"><?= $row['missingDate'] != '0000-00-00' ? date('d-m-Y',strtotime($row['missingDate'])) : date('d-m-Y',strtotime($row['dateCreated'])); ?></b></p>
                            </div>
                            <?php }else{ ?>
                            <div class="col-12">
                                <p ><b style="color:black;font-size:.7rem!important">Uploaded Date :- </b><b style="color:black;font-size:.7rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                            </div>
                            <div class="col-12 text-start">
                                <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Rescue Date :- </b><b style="color:red;font-size:.8rem!important;"><?= $row['missingDate'] != '0000-00-00' ? date('d-m-Y',strtotime($row['missingDate'])) : date('d-m-Y',strtotime($row['dateCreated'])); ?></b></p>
                            </div>
                            <?php } ?>
                            <div class="col-5 ">
                                <a href="<?php echo base_url().$row['Photo']?>" data-lightbox="roadtrip">
                                    <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['Photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                </a>
                            </div>
                            <div class="col-7 px-0">
                                <?php if($row['person_name'] != '' || $row['person_name'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['person_name']??"--" ?></span></p>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                                <?php }else{ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                                <?php } ?>
                               
                                <?php if($row['AgeBand'] != '' || $row['AgeBand'] != NULL){ ?>
                                    <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age Band - </b><span style="color:black;"><?php echo $row['AgeBand']??"--"?></span></p>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                            <div class="row col-12 px-3 mt-2 mb-1 mx-0">
                               <p class="card-title text-start py-0 border border-danger text-center px-0"><b style="color:black;">Message:- </b><b style="color:red;" class="message"><?php echo $row['Message']??"--"?></b></p> 
                            </div>
                        <?php } ?>
                        <hr class="my-0">
                        <?php 
                            $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                            if(count($getUserDetail) > 0)
                            {
                        ?>
                        <div class="row w-100 mx-0 align-items-center" style="height:50px">
                            <div class="col-12 text-start">
                                 <p class="my-2"><b style="color:black;font-size:.8rem!important">Added By :- </b>
                                 <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                 <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                            </div>
                        </div>
                        <?php } ?>
                        <?php
                            $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                        ?>
                        <div class="row w-100 mx-0 mt-3 align-items-center">
                            <?php 
                                if($this->session->userdata('user_login') == 'yes'){
                            ?>
                            <div class="col-12 ">
                                <b style="font-size:.8rem!important">Contact To: - </b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                    {
                                ?>
                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                <button onclick="sendNotification(this,'Special',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                <button onclick="sendNotification(this,'Special',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php }
                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                  <button onclick="sendNotification(this,'Special',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } ?>
                                <?php }else{ ?>
                                <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                <?php } ?>
                            </div>
                            <?php }else{ 
                                if(!isset($_SESSION['landingMob']))
                                {
                            ?>
                            <div class="col-12 ">
                                <b style="font-size:.8rem!important">Contact To: - </b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                    {
                                ?>
                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </a>
                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </a>
                                <?php }
                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                  <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </a>
                                <?php } ?>
                                <?php }else{ ?>
                                <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                <?php } ?>
                            </div>
                            <?php }else{ ?>
                            <div class="col-12 ">
                                <b style="font-size:.8rem!important">Contact To: - </b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if(($row['well1'] != '' || $row['well1']!=null) || ($row['well2']!='' || $row['well2']!=null) && ($row['well3']!='' || $row['well3']!=null))
                                    {
                                ?>
                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                <button onclick="sendNotification(this,'Special',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                <button onclick="sendNotification(this,'Special',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php }
                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                  <button onclick="sendNotification(this,'Special',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } ?>
                                <?php }else{ ?>
                                <h6 class="border fs-23 border-danger p-1" style="color:Red;"><b>Oops.. No Contact Number.</b></h6>
                                <?php } ?>
                            </div>
                            <?php } } ?>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <?php
                                }
                            }
                        }
                    }
                }
            }
            $this->db->or_where('imageId',$v);
            $this->db->or_where('imageId1',$v);
            $this->db->or_where('imageId2',$v);
            $getUnknownDetail = $this->db->get('unknown_person')->result_array();
            if(count($getUnknownDetail) > 0)
            {
                foreach($getUnknownDetail as $k1=>$row)
                {
                    if(strtotime($row['expiryDate']) >= strtotime(date('Y-m-d')))
                    {
                        if($row['isFound'] == '0' && $row['awsEventName'] != 'All')
                        {
                            $gender = $getDetails[0]['gender'] == 'male' ? 'boy' : ($getDetails[0]['gender'] == 'female' ? 'girl' : 'other');
                            if($gender == strtolower($row['Gender']))
                            {
                                if($row['isFinalSubmitted'] == 1)
                                {
                                    array_push($newUnknownIds,$row['id']);
                                    $photo = '';
                                    if($row['isKyc'] == 0)
                                    {
                                        if(file_exists('upload/unknownperson/nonkyc/'.$v.'.jpeg'))
                                        {
                                            $photo = 'upload/unknownperson/nonkyc/'.$v.'.jpeg';
                                            array_push($newUnknownPhotos,base_url().'upload/unknownperson/nonkyc/'.$v.'.jpeg');
                                        }else{
                                            $photo = 'upload/unknownperson/'.$v.'.jpeg';
                                            array_push($newUnknownPhotos,base_url().'upload/unknownperson/'.$v.'.jpeg');
                                        }
                                    }else{
                                        if(file_exists('upload/unknownperson/kyc/'.$v.'.jpeg'))
                                        {
                                            $photo = 'upload/unknownperson/kyc/'.$v.'.jpeg';
                                            array_push($newUnknownPhotos,base_url().'upload/unknownperson/kyc/'.$v.'.jpeg');
                                        }else{
                                            $photo = 'upload/unknownperson/'.$v.'.jpeg';
                                            array_push($newUnknownPhotos,base_url().'upload/unknownperson/'.$v.'.jpeg');
                                        }
                                    }
                                    $finalcount++;
                                    if($_SESSION['user_login'] == 'yes')
                                    {
                                        if(isset($_SESSION['searchFaceIdAfterLogin']))
                                        {
                                            if($_SESSION['login_type'] == 'NonKyc')
                                            {
                                                $getIfSearchAllotmentAvailable = $this->db->query('select * from allotedsearchpackages where userId='.$_SESSION['user_id'])->result_array();
                                                if(count($getIfSearchAllotmentAvailable) > 0)
                                                {
                                                    $insertData = array(
                                                        'idNumber' => $_SESSION['searchFaceIdAfterLogin'],
                                                        'isKyc' => 0,
                                                        'userId' => $_SESSION['user_id'],
                                                        'amount' => 49,
                                                        'type' => 'unknown',
                                                        'dateCreated' => date('Y-m-d H:i:s A')
                                                    );
                                                    $this->db->insert('unknownTransactions', $insertData);
                                                }
                                                $getTransaction = $this->db->query('select * from unknownTransactions where idNumber="'.$_SESSION['searchFaceIdAfterLogin'].'" and isKyc=0 and userId='.$_SESSION['user_id'])->result_array();
                                            }else{
                                                $getTransaction = $this->db->query('select * from unknownTransactions where idNumber="'.$_SESSION['searchFaceIdAfterLogin'].'" and isKyc=1 and userId='.$_SESSION['user_id'])->result_array();
                                            }
                                        }else{
                                            if($_SESSION['login_type'] == 'NonKyc')
                                            {
                                                $getIfSearchAllotmentAvailable = $this->db->query('select * from allotedsearchpackages where userId='.$_SESSION['user_id'])->result_array();
                                                if(count($getIfSearchAllotmentAvailable) > 0)
                                                {
                                                    $insertData = array(
                                                        'idNumber' => $_SESSION['searchFaceIdAfterLogin'],
                                                        'isKyc' => 0,
                                                        'userId' => $_SESSION['user_id'],
                                                        'amount' => 49,
                                                        'type' => 'unknown',
                                                        'dateCreated' => date('Y-m-d H:i:s A')
                                                    );
                                                    $this->db->insert('unknownTransactions', $insertData);
                                                }
                                                $getTransaction = $this->db->query('select * from unknownTransactions where idNumber="'.$_SESSION['searchFaceId'].'" and isKyc=0 and userId='.$_SESSION['user_id'])->result_array();
                                            }else{
                                                $getTransaction = $this->db->query('select * from unknownTransactions where idNumber="'.$_SESSION['searchFaceId'].'" and isKyc=1 and userId='.$_SESSION['user_id'])->result_array();
                                            }
                                        }
                                    }else{
                                        $getTransaction = array();
                                    }
                                    if(count($getTransaction) > 0)
                                    {
            ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-type="unknown" data-id="<?= $row['id']; ?>">
                <div class="card mb-3 shiva_height bg-light1">
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
                                <p class="mb-1"><b style="color:black;font-size:.7rem!important">Application No :- </b><b style="color:black;font-size:.7rem!important"><?php echo $row['Application_no']; ?></b></p>
                            </div>
                            <div class="col-12 px-2">
                                <p ><b style="color:black;font-size:.7rem!important">Uploaded Date :- </b><b style="color:black;font-size:.7rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
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
                        <?php 
                            if($row['ngoId'] != NULL || $row['ngoId'] != '')
                            {
                                $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                        ?>
                        <div class="row w-100 mx-0 mt-3 align-items-center">
                            <div class="col-12 mt-4">
                                <b style="font-size:.8rem!important">Contact To: - NGO </b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes'){
                                ?>
                                    <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $getNgoDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                    <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                    <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php }
                                      if($row['well3']!='' || $row['well3']!=null) { ?>
                                      <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } ?>
                                <?php }else{ 
                                    if(!isset($_SESSION['landingMob']))
                                    {
                                ?>
                                <a href="javascript:void(0)" onclick="showLogin('unknown',<?= $row['id']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mt-3">
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
                                <?php }else{ ?>
                                    <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $getNgoDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                    <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                    <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php }
                                      if($row['well3']!='' || $row['well3']!=null) { ?>
                                      <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } ?>
                                <?php } }  ?>
                            </div>
                        </div>
                        <?php }else{ 
                            if($row['policeId'] != NULL)
                            {
                                $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                        ?>
                        <div class="row w-100 mx-0 align-items-center">
                            <div class="col-12 mt-4">
                                <b style="font-size:.8rem!important">Contact To: - POLICE THANA</b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes'){
                                ?>
                                <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php }
                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                  <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } ?>
                                <?php }else{ 
                                    if(!isset($_SESSION['landingMob']))
                                    {
                                ?>
                                <a href="javascript:void(0)" onclick="showLogin('unknown',<?= $row['id']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mt-3">
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
                                <?php }else{ ?>
                                    <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                    <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                    <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php }
                                      if($row['well3']!='' || $row['well3']!=null) { ?>
                                      <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } ?>
                                <?php } } ?>
                            </div>
                        </div>
                        <?php }else{ 
                            if($row['isKyc'] == 0)
                            {
                                $getUserDetail = $this->db->query('select * from nonKycUser where uid='.$row['userId'])->result_array();       
                            }else{
                                $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                            }
                        ?>
                        <div class="row w-100 mx-0 align-items-center">
                            <div class="col-12 mt-4">
                                <b style="font-size:.8rem!important">Contact To: - </b>
                            </div>
                            <div class="col-12 text-center">
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes'){
                                ?>
                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php }
                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                  <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } ?>
                                <?php }else{ 
                                    if(!isset($_SESSION['landingMob']))
                                    {
                                ?>
                                <a href="javascript:void(0)" onclick="showLogin('unknown',<?= $row['id']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mt-3">
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
                                <?php }else{ ?>
                                    <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                    <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                    <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php }
                                      if($row['well3']!='' || $row['well3']!=null) { ?>
                                      <button onclick="sendNotification(this,'Unknown',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                    <?php } ?>
                                <?php } } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <br>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" data-type="unknown" data-id="<?= $row['id']; ?>">
                <div class="card mb-3 bg-light1" style="border: 2px solid black;">
                    <div class="card-body px-0 pt-0">
                        <div class="row align-items-center px-0 mx-0 justify-content-center">
                            <div class="col-12 text-center my-2">
                                <h6 class="text-center text-danger mb-0">APPEAL FOR IDENTIFICATION </h6>
                            </div>
                            <div class="col-6 ">
                                <a href="<?php echo base_url().$photo; ?>" data-lightbox="roadtrip">
                                    <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['Photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <?php 
                                    if($_SESSION['user_login'] == 'yes')
                                    {
                                ?>
                                <h6 class="text-center0" style="color: black;font-weight: bold;text-decoration: underline;text-underline-offset: 6px;text-decoration-color: grey;"><b>Pay and View Full details</b></h6>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#appealModal" class="btn btn-style-red" style="font-size:1rem!important;">Click Here <i class="fa fa-hand-point-up"></i></a>
                                <?php }else{ ?>
                                <h6 class="text-center" style="color: black;font-weight: bold;text-decoration: underline;text-underline-offset: 6px;text-decoration-color: grey;"><b>Please login <i class="fa fa-sign-in"></i> to view details</b></h6>
                                <a href="javascript:void(0)" onclick="showLoginAccordingly()" class="btn btn-style-red" style="font-size:1rem!important;">Click Here <i class="fa fa-eye"></i></a>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php } ?>
            <?php
                                }
                            }
                        }
                    }
                }
            }   
        }
    } 
?>
          </section>

        </div>
    </div>
</main>
<div class="modal fade" id="appealModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="appealModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="appealModalLabel">Appeal For Identification</h5>
                <button type="button" class="close btn btn-default swal2-close1" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center heightModal">
                <?php 
                    if(count($newUnknownIds) > 0)
                    {
                        foreach($newUnknownPhotos as $k=>$v)
                        {
                ?>
                <div class="col-6 col-md-5 text-center form-group">
                    <img src="<?= $v; ?>" class="img-fluid" style="height: 100px;width: 100%;">
                </div>
                <?php } } ?>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <h6 class="text-center w-100" style="color: black;">You have to pay Rs. 49 Only</h6>
                <button type="button" class="btn btn_new_css disabled-on-loading" onclick="payNow(this)"> Pay Now <i class="fa fa-money"></i></button>
            </div>
        </div>
    </div>
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
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

    $(document).ready(function () {
        let seen = {};

        $(".col-search").each(function () {
            let type = $(this).attr("data-type");
            let id = $(this).attr("data-id");
            let key = type + "-" + id; // Create a unique key for combination

            if (seen[key]) {
                $(this).remove();
            } else {
                seen[key] = true; // Mark as seen
            }
        });
    });
    
    function payNow(ele)
    {
        $(ele).attr('disabled',true);
        let rzpData = new FormData();
        rzpData.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        rzpData.append('amount', (49 * 100));
        $.ajax({
            url:'<?= base_url(); ?>user/createOrder',
            type:'post',
            data:rzpData,
            contentType: false,
            cache: false,
            processData:false,
            success:function(rzpRes)
            {
                let rzpParse = JSON.parse(rzpRes);
                var options = {
                    "order_id" : rzpParse.orderId,
                    "key": "rzp_live_IS6pmFuBDVlq9p",
                    "amount": (49 * 100),
                    "name": "KHOJI",
                    "description": "Face Match Payment",
                    "image": "<?php echo base_url(); ?>assets/images/khoji.webp",// COMPANY LOGO
                    "handler": function (response) {
                        $.ajax({
                            url:'<?php echo base_url(); ?>landing/savePersonalUnknownPayment',
                            type:'get',
                            success:function(res)
                            {
                                Swal.fire({
                                    title:'<strong style="font-size:1rem;color:black;">Payment Completed Successfully</strong>',
                                    html:'<h6 class="text-success">You can view the appeal for identification results</h6>',
                                    icon:'success',
                                    customClass:{
                                        actions:'mt-0'
                                    },
                                    allowOutsideClick:false,
                                    showCloseButton: false,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:true,
                                    confirmButtonText:'Continue'
                                }).then((result) => {
                                    location.reload();
                                })
                            }
                        })
                    },
                    modal:{
                        onDismiss:function()
                        {
                            toastr.error('Payment Cancelled');
                            $(ele).removeAttr('disabled');        
                        }
                    },
                    "prefill": {
                        "name": "<?php echo $_SESSION['aadharName']; ?>", // pass customer name
                        "contact": '<?php echo $_SESSION['loginmob']; ?>' //customer phone no.
                    },
                    "theme": {
                        "color": "#ff271d" // screen color
                    }
                };
                var propay = new Razorpay(options);
                propay.open();
                propay.on('payment.failed', function (response){
                    toastr.error(response.error.description);
                    $(ele).removeAttr('disabled');
                });
            }
        })   
    }
</script>
<script type="text/javascript">
    
    $(document).ready(function() {
    
        $(".message").shorten({
            "showChars" : 150,
            "moreText"  : "See More",
            "lessText"  : "Less",
        });
    });
    
    function showFileUpload(){
        $('#uploadFile').click();
    }
    
    <?php 
        if($this->session->userdata('user_login') == 'yes' || isset($_SESSION['landingMob']))
        {
            if(count($lapataperson) > 0)
            {
    ?>
    $(document).ready(function()
    {
        let data = new FormData();
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        data.append('appNo','<?= $lapataperson[0][0]['Application_no']; ?>');
        data.append('type','facematch');
        $.ajax({
            url:'<?php echo base_url(); ?>landing/sendMissingMsg',
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.status == 'error')
                {
                    toastr.error(parse.msg);
                }
            }
        })
    })
    <?php } } ?>
    
    function sendNotification(ele,type,id)
    {
        $(ele).attr('disabled',true);
        if(type == 'Lapata')
        {
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('appNo',$(ele).attr('data-applicationno'));
            data.append('type','facematch');
            $.ajax({
                url:'<?php echo base_url(); ?>landing/sendMissingMsg',
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
                        let firstId = '';
                        <?php 
                            if(count($lapataperson) > 0)
                            {
                        ?>
                            firstId = $('#firstLapataId').val();
                        <?php }else{ ?>
                            firstId = $('#firstUnknownId').val();
                        <?php } ?>
                        if(id == firstId)
                        {
                            $(ele).removeAttr('disabled');
                            window.location.href = $(ele).attr('href');
                        }else{
                            if($('#is'+type+'NotificationSent_'+id).val() == '0')
                            {
                                let data= new FormData();
                                data.append('type',type);
                                data.append('id',id);
                                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                $.ajax({
                                    url:'<?php echo base_url(); ?>landing/sendCallNotification',
                                    data:data,
                                    timeout: 60000,
                                    contentType: false,
                                    cache: false,
                                    processData:false,
                                    type:'post',
                                    success:function(res)
                                    {
                                        $(ele).removeAttr('disabled');
                                        $('#is'+type+'NotificationSent_'+id).val(1);
                                        window.location.href = $(ele).attr('href');
                                    }
                                })      
                            }else{
                                $(ele).removeAttr('disabled');
                                window.location.href = $(ele).attr('href');
                            }
                        }
                    }else{
                        toastr.error(parse.msg);
                        $(ele).attr('disabled',false);
                    }
                }
            })   
        }else{
            if(type == 'Family')
            {
                if($('#is'+type+'NotificationSent_'+id).val() == '0')
                {
                    let data= new FormData();
                    data.append('type',type);
                    data.append('id',id);
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>landing/sendCallNotification',
                        data:data,
                        timeout: 60000,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            $(ele).removeAttr('disabled');
                            $('#is'+type+'NotificationSent_'+id).val(1);
                            window.location.href = $(ele).attr('href');
                        }
                    })      
                }else{
                    $(ele).removeAttr('disabled');
                    window.location.href = $(ele).attr('href');
                }
            }else{
                if(type == 'FunnelMissing')
                {
                    let firstId = '';
                    firstId = $('#firstFunnelMissingId').val();
                    if(id == firstId)
                    {
                        $(ele).removeAttr('disabled');
                        window.location.href = $(ele).attr('href');
                    }else{
                        if($('#is'+type+'NotificationSent_'+id).val() == '0')
                        {
                            let data= new FormData();
                            data.append('type',type);
                            data.append('id',id);
                            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                            $.ajax({
                                url:'<?php echo base_url(); ?>landing/sendCallNotification',
                                data:data,
                                timeout: 60000,
                                contentType: false,
                                cache: false,
                                processData:false,
                                type:'post',
                                success:function(res)
                                {
                                    $(ele).removeAttr('disabled');
                                    $('#is'+type+'NotificationSent_'+id).val(1);
                                    window.location.href = $(ele).attr('href');
                                }
                            })      
                        }else{
                            $(ele).removeAttr('disabled');
                            window.location.href = $(ele).attr('href');
                        }
                    }
                }else{
                    if(type == 'FunnelFamily')
                    {
                        if($('#is'+type+'NotificationSent_'+id).val() == '0')
                        {
                            let data= new FormData();
                            data.append('type',type);
                            data.append('id',id);
                            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                            $.ajax({
                                url:'<?php echo base_url(); ?>landing/sendCallNotification',
                                data:data,
                                timeout: 60000,
                                contentType: false,
                                cache: false,
                                processData:false,
                                type:'post',
                                success:function(res)
                                {
                                    $(ele).removeAttr('disabled');
                                    $('#is'+type+'NotificationSent_'+id).val(1);
                                    window.location.href = $(ele).attr('href');
                                }
                            })      
                        }else{
                            $(ele).removeAttr('disabled');
                            window.location.href = $(ele).attr('href');
                        }
                    }else{
                        let firstId = '';
                        <?php 
                            if(count($lapataperson) > 0)
                            {
                        ?>
                            firstId = $('#firstLapataId').val();
                        <?php }else{ ?>
                            firstId = $('#firstSpecialId').val();
                        <?php } ?>
                        if(id == firstId)
                        {
                            $(ele).removeAttr('disabled');
                            window.location.href = $(ele).attr('href');
                        }else{
                            if($('#is'+type+'NotificationSent_'+id).val() == '0')
                            {
                                let data= new FormData();
                                data.append('type',type);
                                data.append('id',id);
                                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                $.ajax({
                                    url:'<?php echo base_url(); ?>landing/sendCallNotification',
                                    data:data,
                                    timeout: 60000,
                                    contentType: false,
                                    cache: false,
                                    processData:false,
                                    type:'post',
                                    success:function(res)
                                    {
                                        $(ele).removeAttr('disabled');
                                        $('#is'+type+'NotificationSent_'+id).val(1);
                                        window.location.href = $(ele).attr('href');
                                    }
                                })      
                            }else{
                                $(ele).removeAttr('disabled');
                                window.location.href = $(ele).attr('href');
                            }
                        }
                    }
                }
            }
        }
    }
    
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
    
    $('.close1').click(function()
    {
        $('#uploadFile').val('');
        $('#mainPhotoUploaded').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#mainPhotoSelected').val('');
        $('#uploadimageModal').modal('hide');
        swal.close();
    })
    
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
          size: 'original',
          format:'jpeg'
        }).then(function(response){
            $('#mainPhotoUploaded').attr('src',response);
            $('#mainPhotoSelected').val(response);
            $('#element').show();
            $('#btnInactiveSave').click();
            $('.crop_image').attr('disabled','disabled');
            $('#uploadBtnDiv').addClass('d-none');
            $('#retakebtndiv').removeClass('d-none');
        })
    });
    
    $('#retake button').click(function(){
        $('#videodiv').removeClass('d-none');
        $('#canvasdiv').addClass('d-none');
        $('#mainPhotoSelected').val();
        $('#clickdiv').removeClass('d-none');
        $('#retake').addClass('d-none');
    })

    function sendFirstNotification()
    {
        let data= new FormData();
        <?php 
            if(count($lapataperson) > 0)
            {
        ?>
            data.append('isFirstSent',$('#isFirstLapataSent').val());   
            data.append('firstType','Lapata');
            data.append('firstId',$('#firstLapataId').val());   
        <?php }else{ ?>
            data.append('isFirstSent',$('#isFirstUnknownSent').val());   
            data.append('firstType','Unknown');
            data.append('firstId',$('#firstUnknownId').val());   
        <?php } ?>
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>landing/sendFaceFirstNotification',
            data:data,
            timeout: 60000,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.status == 'error')
                {
                    toastr.error(parse.msg);
                }
            }
        })
    }

    function showLoginAccordingly()
    {
        Swal.fire({
          customClass:{
            popup:'py-0',
            title:'pt-0'
          },
          allowOutsideClick:false,
          html:
            '<h6 class="text-center mt-3">Click here to view details</h6><div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto px-0 col-sm-12 col-md-auto mb-3"><button onclick="saveUnknownCallingId(`withoutLogin`)" class="w-100 btn-style-grey text-light disabled-on-loading btn"> Mobile Verification <i class="fa fa-mobile fa-1x"></i></button></div><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="saveUnknownCallingId(`login`)" class="w-100 btn-style-green disabled-on-loading btn" style="padding:12px 35px!important;"> Login <i class="fa fa-sign-in"></i></button></div><div class="col-lg-auto col-sm-12 col-md-auto"><button onclick="saveUnknownCallingId(`signup`)" class="w-100 btn-style-five disabled-on-loading btn"> Signup <i class="fa fa-vcard"></i></button></div></div></div>',
          showCloseButton: true,
          showCancelButton: false,
          focusConfirm: false,
          showConfirmButton:false
        })      
    }
    
    function showLogin(type,id)
    {
        let visibility = 1;
        if(visibility == 0)
        {
            <?php 
                if($getInactiveSettings[0]['value'] == 1)
                {
            ?>
                Swal.fire({
                  customClass:{
                    popup:'py-0',
                    title:'pt-0'
                  },
                  allowOutsideClick:false,
                  html:
                    '<div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><a href="<?php echo base_url(); ?>login" class="w-100 save btn">Login</a></div><div class="col-lg-auto col-sm-12 col-md-auto"><a href="<?php echo base_url(); ?>landing/checkregister" class="w-100 next btn">Signup</a></div></div></div>',
                  showCloseButton: true,
                  showCancelButton: false,
                  focusConfirm: false,
                  showConfirmButton:false
                })       
            <?php }else{ ?>
                Swal.fire({
                    iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:200px;">',
                    customClass: {
                        icon: 'no-border'
                    },
                    allowOutsideClick:false,
                    html: '<div class="row mt-3 mx-0 justify-content-center w-min-content"><div class="col-lg-12 col-md-12"><h6 style="color:red;font-weight:bold;">No More Information Enabled By the User !</h6></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="<?php echo base_url(); ?>landing/checkPersonFace?pn=3" class="btn btn-primary btn-style-primary"><i class="fa fa-search"></i> Search Another</a></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="<?php echo base_url(); ?>" class="btn btn-success save"><i class="fa fa-home"></i> Homepage</a></div>',
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    showConfirmButton:false,
                }).then((result) => {
                    if(result.isDismissed)
                    {
                        $('#step2CheckAadhar').removeAttr('disabled');
                        $('#step2CheckVoter').removeAttr('disabled');
                        $('#step2CheckDl').removeAttr('disabled');
                        $('#step2CheckPan').removeAttr('disabled');
                        $('#step2CheckGold').removeAttr('disabled');
                        $('#step2CheckVehicle').removeAttr('disabled');
                    }
                })
            <?php } ?>               
        }else{
            if(type != 'user')
            {
                Swal.fire({
                  customClass:{
                    popup:'py-0',
                    title:'pt-0'
                  },
                  allowOutsideClick:false,
                  html:
                    '<h6 class="text-center mt-3">Choose the suitable option to contact</h6><div class="form-group mb-2 justify-content-center"><img src="<?= base_url(); ?>assets/icons/calling.webp" style="width:100px;height:75px;"></div><div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto px-0 col-sm-12 col-md-auto mb-3"><button onclick="saveCallingId(`withoutLogin`)" class="w-100 btn-style-grey text-light disabled-on-loading btn phone"> <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve"><path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path><path d="M41.1,15.7c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path><path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8C65.7,8.6,67.8,10.4,69,11.4z"></path></svg>Mobile Verification <i class="fa fa-mobile fa-1x"></i></button></div><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="saveCallingId(`login`)" class="w-100 btn-style-green disabled-on-loading btn phone"> <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve"><path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path><path d="M41.1,15.7c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path><path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8C65.7,8.6,67.8,10.4,69,11.4z"></path></svg> Login <i class="fa fa-sign-in"></i></button></div><div class="col-lg-auto col-sm-12 col-md-auto"><button onclick="saveCallingId(`signup`)" class="w-100 btn-style-five disabled-on-loading btn phone"> <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve"><path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path><path d="M41.1,15.7c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path><path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8C65.7,8.6,67.8,10.4,69,11.4z"></path></svg> Signup <i class="fa fa-vcard"></i></button></div></div></div>',
                  showCloseButton: true,
                  showCancelButton: false,
                  focusConfirm: false,
                  showConfirmButton:false
                })          
            }else{
                Swal.fire({
                  title: '<strong>Signup/Login</strong>',
                  customClass:{
                    popup:'py-0',
                    title:'pt-0'
                  },
                  allowOutsideClick:false,
                  html:
                    '<h6 class="text-center mt-3">Choose the suitable option to contact</h6><div class="form-group mb-2 justify-content-center"><img src="<?= base_url(); ?>assets/icons/calling.webp" style="width:100px;height:75px;"></div><div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto px-0 col-sm-12 col-md-auto mb-3"><button onclick="saveCallingId(`withoutLogin`)" class="w-100 btn-style-grey text-light disabled-on-loading btn phone"> <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve"><path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path><path d="M41.1,15.7c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path><path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8C65.7,8.6,67.8,10.4,69,11.4z"></path></svg>Mobile Verification <i class="fa fa-mobile fa-1x"></i></button></div><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="saveCallingId(`login`)" class="w-100 btn-style-green disabled-on-loading btn phone"> <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve"><path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path><path d="M41.1,15.7c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path><path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8C65.7,8.6,67.8,10.4,69,11.4z"></path></svg> Login <i class="fa fa-sign-in"></i></button></div><div class="col-lg-auto col-sm-12 col-md-auto"><button onclick="saveCallingId(`signup`)" class="w-100 btn-style-five disabled-on-loading btn phone"> <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve"><path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path><path d="M41.1,15.7c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path><path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8C65.7,8.6,67.8,10.4,69,11.4z"></path></svg> Signup <i class="fa fa-vcard"></i></button></div></div></div>',
                  showCloseButton: true,
                  showCancelButton: false,
                  focusConfirm: false,
                  showConfirmButton:false
                })       
            }
        }
    }

    function saveUnknownCallingId(logintype)
    {
        if(logintype == 'withoutLogin')
        {
            Swal.fire({
              customClass:{
                popup:'py-0',
                title:'pt-0'
              },
              allowOutsideClick:false,
              html:
                `<form class="row g-3 mx-0 needs-validation mt-4" method="post" action="<?php echo base_url(); ?>landing/newFaceMatch/step2" novalidate id="stepCallingForm">
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
              showCloseButton: true,
              showCancelButton: false,
              focusConfirm: false,
              showConfirmButton:false
            })
        }else if(logintype == 'login')
        {
            location.href="<?= base_url(); ?>login";
        }else{
            location.href="<?= base_url(); ?>landing/checkregister";
        }
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
              showCloseButton: true,
              showCancelButton: false,
              focusConfirm: false,
              showConfirmButton:false
            })
        }else if(logintype == 'login')
        {
            location.href="<?= base_url(); ?>login";
        }else{
            location.href="<?= base_url(); ?>landing/checkregister";
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
                url:'<?php echo base_url(); ?>landing/sendSearchFaceOtp',
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
                        toastr.success(parse.msg);
                        $('#mobileNumber').attr('readonly',true);   
                        $('#sendOtpDiv').addClass('d-none');
                        $('#otpdiv').removeClass('d-none');
                    }else{
                        $(ele).removeAttr('disabled');
                        toastr.error('Something Went Wrong');
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
                url:'<?php echo base_url(); ?>landing/sendSearchFaceOtp',
                data:data,
                timeout: 60000,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    toastr.success(parse.msg);
                    $(ele).removeAttr('disabled');
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
    
    function back(ele)
    {
        $(ele).attr('disabled','disabled');
        location.href="<?= base_url(); ?>";
    }
    
    function previewFile(ele)
    {
        if($(ele)[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL($(ele)[0].files[0]);
            $('#uploadimageModal').modal('show');   
        }
    }
    
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
                timeout: 60000,
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
            toastr.error('Please capture the photo to continue');
            $('.crop_image').removeAttr('disabled');
        }
    })
    
    function openCameraPopup()
    {
        <?php 
            if($getInactiveSettings[0]['value'] == 1)
            {
        ?>
        Swal.fire({
            allowOutsideClick:false,
            html: '<div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-10 col-md-6"><input type="file" hidden id="uploadFile" onchange="previewFile(this)" accept="image/*"><h5 class="text-center">Sample Photo</h5><img src="<?php echo base_url(); ?>assets/images/facematch.webp" style="width:100%;height:200px;"><input type="hidden" name="mainPhotoSelected" id="mainPhotoSelected"></div></div><div class="row mx-0 mt-3 justify-content-center" style="display:none" id="element"><div class="col-lg-10 col-md-6"><h5 class="text-center">Preview Photo</h5><img src="<?php echo base_url(); ?>assets/img/noimage.jpg" style="width:100%;height:200px;" id="mainPhotoUploaded"></div></div><div class="row mx-0 mt-3 justify-content-center" id="uploadBtnDiv"><div class="col-lg-10 col-md-6 text-center"><button type="button" class="btn w-100 btn-primary btn-style-four" id="uploadPhotoBtn" onclick="showFileUpload()">Upload Photo <i class="fa fa-upload"></i></button></div></div><div class="row mx-0 mt-4 mb-3 justify-content-center nextBtnDiv d-none"><div class="col-6 px-1 d-none" id="retakebtndiv"><button type="button" class="btn w-100 btn-primary btn-style-yellow" id="retakePhotoBtn" onclick="showFileUpload()">Retake <i class="fa fa-upload"></i></button></div><div class="col-lg-6 px-1 col-sm-12 col-6 col-md-6"><button type="button" id="btn3" onclick="nextInactive(this)" class="w-100 btn btn-primary btn-style-green disabled-on-loading"> Next <i class="fa fa-arrow-circle-right"></i></button></div></div>',
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:false,
        }).then((result) => {
            if(result.isDismissed)
            {
                $('#step2CheckAadhar').removeAttr('disabled');
                $('#step2CheckVoter').removeAttr('disabled');
                $('#step2CheckDl').removeAttr('disabled');
                $('#step2CheckPan').removeAttr('disabled');
                $('#step2CheckGold').removeAttr('disabled');
                $('#step2CheckVehicle').removeAttr('disabled');
            }
        })
        <?php }else{ ?>
        Swal.fire({
            iconHtml: '<img src="<?php echo base_url(); ?>assets/images/oops.png" style="height:200px;">',
            customClass: {
                icon: 'no-border'
            },
            allowOutsideClick:false,
            html: '<div class="row mt-3 mx-0 justify-content-center w-min-content"><div class="col-lg-12 col-md-12"><h6 style="color:red;font-weight:bold;">No More Information Enabled By the User !</h6></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="<?php echo base_url(); ?>landing/checkPerson?pn=2" class="btn btn-primary btn-style-primary"><i class="fa fa-search"></i> Search Another</a></div><div class="row mt-3 mx-0 justify-content-center"><div class="col-lg-12 col-md-12"><a href="<?php echo base_url(); ?>" class="btn btn-success save"><i class="fa fa-home"></i> Homepage</a></div>',
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            showConfirmButton:false,
        }).then((result) => {
            if(result.isDismissed)
            {
                $('#step2CheckAadhar').removeAttr('disabled');
                $('#step2CheckVoter').removeAttr('disabled');
                $('#step2CheckDl').removeAttr('disabled');
                $('#step2CheckPan').removeAttr('disabled');
                $('#step2CheckGold').removeAttr('disabled');
                $('#step2CheckVehicle').removeAttr('disabled');
            }
        })
        <?php } ?>
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
    }
    
    function view(type,ele,appNo)
    {
        <?php 
            $_SESSION['previousType'] = 'facematch';
        ?>
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
                timeout: 60000,
                type:'get',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        url = '<?php echo base_url(); ?>find-general-person?Id='+appNo;          
                        window.open(url,'_blank');   
                    }else{
                        openCameraPopup();
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
        }
        else if(type == 'unknown')
        {
            url = '<?php echo base_url(); ?>find-missing-person?id='+appNo;
            window.open(url,'_blank');   
        }else if(type == 'family')
        {
            url = '<?php echo base_url(); ?>find-family-person?id='+appNo;
            window.open(url,'_blank');   
        }else if(type == 'mahakumbh')
        {
            url = '<?php echo base_url(); ?>find-mahakumbh-person?id='+appNo;
            window.open(url,'_blank');   
        }else if(type == 'special')
        {
            url = '<?php echo base_url(); ?>find-mahakumbh-special-person?id='+appNo;
            window.open(url,'_blank');   
        }
        else if(type == 'funnelfamily')
        {
            url = '<?php echo base_url(); ?>find-funnel-family-person?id='+appNo;
            window.open(url,'_blank');   
        }else if(type == 'funnelmissing')
        {
            url = '<?php echo base_url(); ?>find-funnel-person?id='+appNo;
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
            }else if(type == 'funnelfamily')
            {
                url = '<?php echo base_url(); ?>find-funnel-family-person?id='+appNo;
            }else if(type == 'funnelmissing')
            {
                url = '<?php echo base_url(); ?>find-funnel-person?id='+appNo;
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
            "moreText"  : "See More",
         "lessText" : "Less",
        });
    });
</script>