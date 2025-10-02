<script type="text/javascript" src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>
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
      width:18px;
      height:18px;
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
</style>
<style>
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
        height:610px;
        max-height:610px;
    }
    
    .shiva_user_height{
        height:295px;
        max-height:295px;
    }
}

@media (max-width:1024px) {
    .shiva_height{
        height:720px;
        max-height:720px;
    }
}

@media (max-width:768px) {

	.shiva_height{
        height:650px;
        max-height:650px;
    }
    
    .shiva_user_height{
        height:275px;
        max-height:275px;
    }

}

@media (max-width:450px) {

	.shiva_height{
       height:auto;
        max-height:100%;
    }
    
    .shiva_user_height{
        height:275px;
        max-height:275px;
    }

}
.margin_tp{
 margin-top: 120px;
}
.v-gold
{
    /* visibility: hidden !important; */
    color: green;
    font-weight: 600;
}

.v-vehicle
{
    /* visibility: hidden !important; */
    color: green;
    font-weight: 600;
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
                
            #swal2-html-container{
                margin: 0 1rem!important;
            }
            
            div:where(.swal2-container) div:where(.swal2-popup){
                width:auto;
            }
                
    </style>
<?php
    $lapataIds = array();
    $missingIds = array();
    $unknownIds = array();
    $userIds = array();
    $khoyaIds = array();
    $criminalIds = array();
    $wantedIds = array();
    
    switch($checkDetail[0]['idType']){
        case 'aadhar' :
            $getMissingDetails = $this->db->query('select Id from missingperson where isFound=0 and isdeleted=0 and missingaadhar="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getMissingDetails) > 0)
            {
                foreach($getMissingDetails as $k=>$v)
                {
                    array_push($missingIds,$v['Id']);       
                }
            }
            $getLapataDetails = $this->db->query('select id from unknown_person where isFound=0 and expiryDate >="'.date('Y-m-d H:i:s A').'" and awsEventName="All" and aadharNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getLapataDetails) > 0)
            {
                foreach($getLapataDetails as $k=>$v)
                {
                    array_push($lapataIds,$v['id']);       
                }
            }
            $getUnknownDetails = $this->db->query('select id from unknown_person where isFound=0 and awsEventName != "All" and aadharNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getUnknownDetails) > 0)
            {
                foreach($getUnknownDetails as $k=>$v)
                {
                    array_push($unknownIds,$v['id']);       
                }
            }
            $getKhoyaDetails = $this->db->query('select id from mahakumbhSpecial where isFound=0 and aadharNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getKhoyaDetails) > 0)
            {
                foreach($getKhoyaDetails as $k=>$v)
                {
                    array_push($khoyaIds,$v['id']);       
                }
            }
            $getCriminalDetails = $this->db->query('select Id from criminals where type="criminal" and status="Active" and aadharNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getCriminalDetails) > 0)
            {
                foreach($getCriminalDetails as $k=>$v)
                {
                    array_push($criminalIds,$v['Id']);       
                }
            }
            $getWantedDetails = $this->db->query('select Id from criminals where type="wanted" and status="Active" and aadharNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getWantedDetails) > 0)
            {
                foreach($getWantedDetails as $k=>$v)
                {
                    array_push($wantedIds,$v['Id']);       
                }
            }
            $getUserDetails = $this->db->query('select uid from user where aadhar_id="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getUserDetails) > 0)
            {
                foreach($getUserDetails as $k=>$v)
                {
                    array_push($userIds,$v['uid']);       
                }
            }
            break;
        case 'pan' :
            $getMissingDetails = $this->db->query('select Id from missingperson where isFound=0 and isdeleted=0 and missingpan="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getMissingDetails) > 0)
            {
                foreach($getMissingDetails as $k=>$v)
                {
                    array_push($missingIds,$v['Id']);       
                }
            }
            $getLapataDetails = $this->db->query('select id from unknown_person where isFound=0 and expiryDate >="'.date('Y-m-d H:i:s A').'" and awsEventName="All" and PAN="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getLapataDetails) > 0)
            {
                foreach($getLapataDetails as $k=>$v)
                {
                    array_push($lapataIds,$v['id']);       
                }
            }
            $getUnknownDetails = $this->db->query('select id from unknown_person where isFound=0 and awsEventName != "All" and PAN="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getUnknownDetails) > 0)
            {
                foreach($getUnknownDetails as $k=>$v)
                {
                    array_push($unknownIds,$v['id']);       
                }
            }
            $getCriminalDetails = $this->db->query('select Id from criminals where type="criminal" and status="Active" and panNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getCriminalDetails) > 0)
            {
                foreach($getCriminalDetails as $k=>$v)
                {
                    array_push($criminalIds,$v['Id']);       
                }
            }
            $getWantedDetails = $this->db->query('select Id from criminals where type="wanted" and status="Active" and panNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getWantedDetails) > 0)
            {
                foreach($getWantedDetails as $k=>$v)
                {
                    array_push($wantedIds,$v['Id']);       
                }
            }
            $getPanDetails = $this->db->query('select * from panlist where panNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            $getUserDetails = array();
            if(count($getPanDetails) > 0)
            {
                $getUserDetails = $this->db->query('select uid from user where uid='.$getPanDetails[0]['userId'])->result_array();   
            }
            if(count($getUserDetails) > 0)
            {
                foreach($getUserDetails as $k=>$v)
                {
                    array_push($userIds,$v['uid']);       
                }
            }
            break;
        case 'voter' :
            $getMissingDetails = $this->db->query('select Id from missingperson where isFound=0 and isdeleted=0 and missingvoter="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getMissingDetails) > 0)
            {
                foreach($getMissingDetails as $k=>$v)
                {
                    array_push($missingIds,$v['Id']);       
                }
            }
            $getLapataDetails = $this->db->query('select id from unknown_person where isFound=0 and expiryDate >="'.date('Y-m-d H:i:s A').'" and awsEventName="All" and voter_id="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getLapataDetails) > 0)
            {
                foreach($getLapataDetails as $k=>$v)
                {
                    array_push($lapataIds,$v['id']);       
                }
            }
            $getUnknownDetails = $this->db->query('select id from unknown_person where isFound=0 and awsEventName != "All" and voter_id="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getUnknownDetails) > 0)
            {
                foreach($getUnknownDetails as $k=>$v)
                {
                    array_push($unknownIds,$v['id']);       
                }
            }
            $getCriminalDetails = $this->db->query('select Id from criminals where type="criminal" and status="Active" and voterId="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getCriminalDetails) > 0)
            {
                foreach($getCriminalDetails as $k=>$v)
                {
                    array_push($criminalIds,$v['Id']);       
                }
            }
            $getWantedDetails = $this->db->query('select Id from criminals where type="wanted" and status="Active" and voterId="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getWantedDetails) > 0)
            {
                foreach($getWantedDetails as $k=>$v)
                {
                    array_push($wantedIds,$v['Id']);       
                }
            }
            $getVoterDetails = $this->db->query('select * from voterslist where voterNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            $getUserDetails = array();
            if(count($getVoterDetails) > 0)
            {
                $getUserDetails = $this->db->query('select uid from user where uid='.$getVoterDetails[0]['userId'])->result_array();   
            }
            if(count($getUserDetails) > 0)
            {
                foreach($getUserDetails as $k=>$v)
                {
                    array_push($userIds,$v['uid']);       
                }
            }
            break;
        case 'dl' :
            $getMissingDetails = $this->db->query('select Id from missingperson where isFound=0 and isdeleted=0 and missingdl="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getMissingDetails) > 0)
            {
                foreach($getMissingDetails as $k=>$v)
                {
                    array_push($missingIds,$v['Id']);       
                }
            }
            $getLapataDetails = $this->db->query('select id from unknown_person where isFound=0 and expiryDate >="'.date('Y-m-d H:i:s A').'" and awsEventName="All" and DL_no="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getLapataDetails) > 0)
            {
                foreach($getLapataDetails as $k=>$v)
                {
                    array_push($lapataIds,$v['id']);       
                }
            }
            $getUnknownDetails = $this->db->query('select id from unknown_person where isFound=0 and awsEventName != "All" and DL_no="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getUnknownDetails) > 0)
            {
                foreach($getUnknownDetails as $k=>$v)
                {
                    array_push($unknownIds,$v['id']);       
                }
            }
            $getCriminalDetails = $this->db->query('select Id from criminals where type="criminal" and status="Active" and dlNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getCriminalDetails) > 0)
            {
                foreach($getCriminalDetails as $k=>$v)
                {
                    array_push($criminalIds,$v['Id']);       
                }
            }
            $getWantedDetails = $this->db->query('select Id from criminals where type="wanted" and status="Active" and dlNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getWantedDetails) > 0)
            {
                foreach($getWantedDetails as $k=>$v)
                {
                    array_push($wantedIds,$v['Id']);       
                }
            }
            $getDlDetails = $this->db->query('select * from dllist where dlNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            $getUserDetails = array();
            if(count($getDlDetails) > 0)
            {
                $getUserDetails = $this->db->query('select uid from user where uid='.$getDlDetails[0]['userId'])->result_array();   
            }
            if(count($getUserDetails) > 0)
            {
                foreach($getUserDetails as $k=>$v)
                {
                    array_push($userIds,$v['uid']);       
                }
            }
            break;
        case 'gold' :
            $getMissingDetails = $this->db->query('select Id from missingperson where isFound=0 and isdeleted=0 and goldId="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getMissingDetails) > 0)
            {
                foreach($getMissingDetails as $k=>$v)
                {
                    array_push($missingIds,$v['Id']);       
                }
            }
            $getGoldDetails = $this->db->query('select * from unknownPersonGold where goldHUID="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getGoldDetails) > 0)
            {
                foreach($getGoldDetails as $k=>$v)
                {
                    $getLapataDetails = $this->db->query('select id from unknown_person where isFound=0 and expiryDate >="'.date('Y-m-d H:i:s A').'" and awsEventName="All" and id='.$v['unknownId'])->result_array();   
                    if(count($getLapataDetails) > 0)
                    {
                        array_push($lapataIds,$v['unknownId']);          
                    }
                    $getUnknownDetails = $this->db->query('select id from unknown_person where isFound=0 and awsEventName != "All" and id='.$v['unknownId'])->result_array();
                    if(count($getUnknownDetails) > 0)
                    {
                        array_push($unknownIds,$v['unknownId']);       
                    }
                }
            }
            $this->db->where('goldHUIDNumber1', $checkDetail[0]['idNumber']);
            $this->db->or_where('goldHUIDNumber2', $checkDetail[0]['idNumber']);
            $this->db->or_where('goldHUIDNumber3', $checkDetail[0]['idNumber']);
            $getUserDetails = $this->db->get('user')->result_array();
            if(count($getUserDetails) > 0)
            {
                foreach($getUserDetails as $k=>$v)
                {
                    array_push($userIds,$v['uid']);       
                }
            }
            break;
        case 'vehicle' :
            $getMissingDetails = $this->db->query('select Id from missingperson where isFound=0 and isdeleted=0 and vehicleNumber="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getMissingDetails) > 0)
            {
                foreach($getMissingDetails as $k=>$v)
                {
                    array_push($missingIds,$v['Id']);       
                }
            }
            $getLapataDetails = $this->db->query('select id from unknown_person where isFound=0 and expiryDate >="'.date('Y-m-d H:i:s A').'" and awsEventName="All" and vehicle_no="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getLapataDetails) > 0)
            {
                foreach($getLapataDetails as $k=>$v)
                {
                    array_push($lapataIds,$v['id']);       
                }
            }
            $getUnknownDetails = $this->db->query('select id from unknown_person where isFound=0 and awsEventName != "All" and vehicle_no="'.$checkDetail[0]['idNumber'].'"')->result_array();
            if(count($getUnknownDetails) > 0)
            {
                foreach($getUnknownDetails as $k=>$v)
                {
                    array_push($unknownIds,$v['id']);       
                }
            }
            $this->db->where('vehicleNumber1', $checkDetail[0]['idNumber']);
            $this->db->or_where('vehicleNumber2', $checkDetail[0]['idNumber']);
            $this->db->or_where('vehicleNumber3', $checkDetail[0]['idNumber']);
            $getUserDetails = $this->db->get('user')->result_array();
            if(count($getUserDetails) > 0)
            {
                foreach($getUserDetails as $k=>$v)
                {
                    array_push($userIds,$v['uid']);       
                }
            }
            break;
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
        $this->db->where_in('uid',$userIds);
        $this->db->order_by("uid", "desc");
        $userperson = $this->db->get('user')->result_array();
    }
    $lapataperson = array();
    if(count($lapataIds) > 0)
    {
        $this->db->where_in('id',$lapataIds);
        $this->db->order_by("dateCreated", "desc");
        $this->db->where('isFinalSubmitted',1);
        $lapataperson = $this->db->get('unknown_person')->result_array();
    }
    $unknownperson = array();
    if(count($unknownIds) > 0)
    {
        $this->db->where_in('id',$unknownIds);   
        $this->db->order_by("dateCreated", "desc");
        $this->db->where('isFinalSubmitted',1);
        $unknownperson = $this->db->get('unknown_person')->result_array();
    }
    $khoyaperson = array();
    if(count($khoyaIds) > 0)
    {
        $this->db->where_in('id',$khoyaIds);   
        $this->db->order_by("dateCreated", "desc");
        $khoyaperson = $this->db->get('mahakumbhSpecial')->result_array();
    }
    // $unknownperson = array();
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container-fluid">

  <section class="section register d-flex flex-column align-items-center justify-content-center">
    <div class="container-fluid">
        <div class="row align-items-center" style="justify-content:space-around;">
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
            <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($userperson) > 0) ? '' : 'd-none'; ?>  ">
                <a href="javascript:void(0)" style="color:green;text-decoration:none;font-weight:bold;"> <span class="n-<?=$checkDetail[0]['idType']?>">Verified</span> - <?php echo (count($userperson) > 1 ? count($userperson).' Records' : count($userperson).' Record'); ?></a>
            </div>
            <div class="col-lg-auto col-sm-12 col-md-auto text-start my-1 border border-danger text-center <?= (count($khoyaperson) > 0) ? '' : 'd-none'; ?>">
                <a href="javascript:void(0)" class="text-gradient1" style="text-decoration:none;font-weight:bold;">KHOYA PAYA - <?php echo (count($khoyaperson) > 1 ? count($khoyaperson).' Records' : count($khoyaperson).' Record'); ?></a>
            </div>
            <div class="col-lg-auto col-sm-12 col-md-auto text-end my-1">
                <button type="button" onclick="back(this)" class="btn mt-0 btn-style-grey btn-dark disabled-on-loading"> <i class="fa fa-arrow-circle-left"></i></button>
            </div>
        </div>
        <input type="hidden" id="isFirstUnknownSent" value="0">
        <input type="hidden" id="isFirstLapataSent" value="0">
        <div class="row align-items-center justify-content-center">
        <?php 
            if(count($missingperson) > 0)
            {
        ?>
        <?php 
            foreach($missingperson as $k=>$row)
            {
        ?>
        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-1 col-12 col-search pb-2">
            <div class="card mb-3 bg-light" >
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
                            <p class="mb-1"><b style="color:black;font-size:.8rem!important">Missing Id :- </b><b style="color:black;font-size:.8rem!important"><?php echo $row['missingId']; ?></b></p>
                        </div>
                        <div class="col-12">
                            <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
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
                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['missingname']??"--" ?></span></p>
                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo (ucfirst($row['missinggender'])); ?></span></p>
                            <?php }else{ ?>
                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo (ucfirst($row['missinggender'])); ?></span></p>
                            <?php } ?>
                        <?php if($row['fatherstate'] != '' || $row['fatherstate'] != NULL){ ?>
                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Address - </b><span style="color:black;"><?php echo ($row['fatherstate']) ?> , <?php echo ($row['fatherdistrict']) ?> - <?php echo ($row['fathercity']); ?></span></p>
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
                             <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
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
                            <a href="javascript:void(0)" onclick="showLogin(1)" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                            <?php } if($row['mobile2']!='' || $row['mobile2']!=null) { ?>
                              <a href="javascript:void(0)" onclick="showLogin(1)" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                            <?php }
                              if($row['mobile3']!='' || $row['mobile3']!=null) { ?>
                              <a href="javascript:void(0)" onclick="showLogin(1)" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
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
        ?>
        <input type="hidden" id="firstLapataId" value="<?= $lapataperson[0]['id']; ?>">
        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
            <div class="card mb-3 bg-light">
                <div class="card-body px-2 pt-0">
                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                        <?php
                            if($row['Photo'] != '' || $row['Photo'] != NULL)
                            {
                        ?>
                        <div class="col-6 text-center mb-2">
                            <h5 class="text-center text-danger fs-20">Missing </h5>
                            <?php if($row['rewardamount'] != '' && $row['rewardamount'] != NULL && $row['rewardamount'] != 0){ ?>
                                <div class="row col-12 mx-0 p-0" style="border:1px solid red;">
                                    <h6 class="card-title text-center px-1 py-0 fs-16 mb-0"> <b style="color:red;font-weight:600;">Reward - </b><span style="color:black;">Rs. <?php echo $row['rewardamount']??"--"?></span></h6>
                                 </div>
                            <?php } ?>
                        </div>
                        <div class="col-6 text-end mb-2">
                            <button type="button" class="btn btn-dark" onclick="share('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                            <button type="button" class="btn btn-primary" onclick="view('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                        </div>
                        <div class="col-12">
                            <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Application No :- </b><b style="color:black;font-size:.8rem!important;"><?php echo $row['Application_no']; ?></b></p>
                        </div>
                        <div class="col-12">
                            <p ><b style="color:black;font-size:.8rem!important;font-weight:500;">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important;"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
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
                                <p class="card-title text-start py-0 fs-6 mb-0"><b style="color:black;font-size:.8rem!important;font-weight:500;">Name - </b><b style="font-size:.8rem!important;color:black;"><?php echo $row['person_name']??"--" ?></b></p>
                                <p class="card-title text-start py-0 fs-6 mb-0"><b style="color:black;font-size:.8rem!important;font-weight:500;">Gender - </b><b style="font-size:.8rem!important;color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></b></p>
                            <?php }else{ ?>
                                <p class="card-title text-start py-0 fs-6 mb-0"><b style="color:black;font-size:.8rem!important;font-weight:500;">Gender - </b><b style="font-size:.8rem!important;color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></b></p>
                            <?php } ?>
                           
                            <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                <p class="card-title text-start py-0 fs-6 mb-0"><b style="color:black;font-size:.8rem!important;font-weight:500;">Age - </b><b style="font-size:.8rem!important;color:black;"><?php echo $row['Age']??"--"?></b></p>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                        <div class="row col-6 px-2">
                            <h6 class="card-title text-center py-0 mb-0"><b style="color:black;font-size:0.8rem!important;font-weight:500;"><?php echo substr_replace($row['aadharNumber'],'xxxxxxxx',0,8);?></b></h6>
                        </div>
                    <?php } ?>
                    <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                    <div class="row col-12 px-4 pt-2" style="max-height:auto;">
                        <p class="card-title text-start py-0 fs-6"><b style="color:red;font-weight:500;">Message:- </b><b style="color:black;font-size:.8rem!important;" class="message"><?php echo $row['Message']??"--"?></b></p> 
                    </div>
                    <?php } ?>
                    <hr class="my-0">
                    <?php 
                        if($row['ngoId'] != NULL || $row['ngoId'] != '')
                        {
                            $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                    ?>
                    <div class="row w-100 mx-0 align-items-center">
                        <div class="col-12 text-start">
                             <p class="my-2"><b style="color:black;font-size:.8rem!important;font-weight:500;">Uploaded By :- </b><b style="color:black;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                        </div>
                    </div>
                    <?php }else{ 
                        if($row['policeId'] != NULL)
                        {
                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                    ?>
                    <div class="row w-100 mx-0 align-items-center">
                        <div class="col-12 text-start">
                             <p class="my-2"><b style="color:black;font-size:.8rem!important;font-weight:500;">Uploaded By :- </b>
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
                        <div class="col-12 ">
                            <b style="font-size:.8rem!important">Contact To: - NGO </b>
                        </div>
                        <div class="col-12 ">
                            <?php 
                                if($this->session->userdata('user_login') == 'yes'){
                            ?>
                                
                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                <button onclick="sendNotification(this,'Lapata',<?= $row['id'] ?>)" href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                <button onclick="sendNotification(this,'Lapata',<?= $row['id'] ?>)" href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php }
                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                  <button onclick="sendNotification(this,'Lapata',<?= $row['id'] ?>)" href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4 disabled-on-loading" > <i class="fa fa-phone"></i> </button>
                                <?php } ?>
                            <?php }else{ 
                                if(!isset($_SESSION['landingMob']))
                                {
                            ?>
                            <a href="javascript:void(0)" onclick="showLogin('lapata',<?= $row['id']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mt-3">
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
                            <a href="javascript:void(0)" onclick="showLogin('lapata',<?= $row['id']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mt-3">
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
                        <div class="col-12 ">
                            <b style="font-size:.8rem!important">Contact :- </b>
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
                        <div class="col-12 ">
                            <b style="font-size:.8rem!important">Contact To: - <?php echo $getUserDetail[0]['aadharname']; ?></b>
                        </div>
                        <div class="col-12 text-center">
                            <a href="javascript:void(0)" onclick="showLogin('lapata',<?= $row['id']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mt-3">
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
                                <span>Click Here</span>
                            </a>
                        </div>
                        <?php }else{ ?>
                        <div class="col-12 ">
                            <b style="font-size:.8rem!important">Contact To: - <?php echo $getUserDetail[0]['aadharname']; ?></b>
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
        <?php } ?>
        <?php } ?>
        <?php 
            if(count($unknownperson) > 0)
            {
        ?>
        <?php 
            foreach($unknownperson as $k=>$row)
            {
        ?>
        <input type="hidden" id="firstUnknownId" value="<?= $unknownperson[0]['id']; ?>">
        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
            <div class="card mb-3 shiva_height bg-light">
                <div class="card-body px-0 pt-0">
                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                        <?php
                            if($row['Photo'] != '' || $row['Photo'] != NULL)
                            {
                        ?>
                        <div class="col-6 text-center mb-2">
                            <h6 style="font-size: 0.8rem;" class="text-center text-danger mb-0">APPEAL FOR IDENTIFICATION </h6>
                        </div>
                        <div class="col-6 text-end mb-2">
                            <button type="button" class="btn btn-dark" onclick="share('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                            <button type="button" class="btn btn-primary" onclick="view('unknown',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;"><i class="fa fa-eye"></i></button>
                        </div>
                        <div class="col-12">
                            <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Application No :- </b><b style="color:black;font-size:.8rem!important;"><?php echo $row['Application_no']; ?></b></p>
                        </div>
                        <div class="col-12 px-2">
                            <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important;"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                        </div>
                        <?php 
                            if($row['rescueDate'] != NULL && $row['rescueDate'] != '0000-00-00')
                            {
                        ?>
                        <div class="col-12 text-start">
                            <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Rescue Date :- </b><b style="color:red;font-size:.8rem!important;"><?= date('d-m-Y',strtotime($row['rescueDate'])); ?></b></p>
                        </div>
                        <?php } ?>
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
                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Name - </b><b style="font-size:.8rem!important;color:black;"><?php echo $row['person_name']??"--" ?></b></p>
                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Gender - </b><b style="font-size:.8rem!important;color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></b></p>
                            <?php }else{ ?>
                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Gender - </b><b style="font-size:.8rem!important;color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></b></p>
                            <?php } ?>
                           
                            <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Age Band - </b><b style="font-size:.8rem!important;color:black;"><?php echo $row['Age']??"--"?></b></p>
                            <?php } ?>
                        </div>
                    </div>
                     <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                      <!--<div class="row col-6 px-4">-->
                      <!--          <h5 class="card-title text-start py-0 fs-6 mb-0"> <b style="color:black;font-weight:600;">Aadhaar No - </b><br><span style="color:black;"><?php echo $row['aadharNumber']??"--"?></span></h5>-->
                      <!--    </div>-->
                            <?php } ?>
                    <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                    <div class="row col-12 px-4 pt-2" style="max-height:auto;">
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
                             <p class="my-2"><b style="color:black;font-size:.8rem!important;font-weight:500;">Uploaded By :- </b><b style="color:black;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                          
                        </div>
                    </div>
                    <?php }else{ 
                        if($row['policeId'] != NULL)
                        {
                            $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                    ?>
                    <div class="row w-100 mx-0 align-items-center" style="height:50px">
                        <div class="col-12 text-start">
                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:<?= $row['isKyc'] == 0 ? 'blue' : 'red'; ?>;font-size:.8rem!important"><?= $row['isKyc'] == 0 ? 'GENERAL USER' : 'SAMAJSEVI'; ?> - </b>
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
                             <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:<?= $row['isKyc'] == 0 ? 'green;' : 'red'; ?>;font-size:.8rem!important"><?= $row['isKyc'] == 0 ? 'GENERAL USER' : 'SAMAJSEVI'; ?> - </b>
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
                        <div class="col-12 ">
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
                        <div class="col-12 ">
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
                        <div class="col-12 ">
                            <b style="font-size:.8rem!important">Contact :- </b>
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
        <?php } ?>
        <?php } ?>
        <?php 
            if(count($wantedperson) > 0)
            {
        ?>
        <?php 
            foreach($wantedperson as $k=>$row)
            {
        ?>
        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
            <div class="card mb-3 shiva_height bg-light">
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
                            <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
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
                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['personName']??"--" ?></span></p>
                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                            <?php }else{ ?>
                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                            <?php } ?>
                           
                            <?php if($row['age'] != '' || $row['age'] != NULL){ ?>
                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:black;"><?php echo $row['age']??"--"?></span></p>
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
                             <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
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
                            <!--<a href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>-->
                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                            <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                              <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                            <?php }
                              if($row['well3']!='' || $row['well3']!=null) { ?>
                              <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                            <?php } ?>
                            <?php }else{ ?>
                            <a href="javascript:void(0)" onclick="showLogin(1)" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                            <a href="javascript:void(0)" onclick="showLogin(1)" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                              <a href="javascript:void(0)" onclick="showLogin(1)" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                            <?php }
                              if($row['well3']!='' || $row['well3']!=null) { ?>
                              <a href="javascript:void(0)" onclick="showLogin(1)" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
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
            <div class="card mb-3 shiva_height bg-light">
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
                            <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
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
                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:black;"><?php echo $row['personName']??"--" ?></span></p>
                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                            <?php }else{ ?>
                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:black;"><?php echo ($row['Gender'] == 'Male' ? 'Male':'Female'); ?></span></p>
                            <?php } ?>
                           
                            <?php if($row['age'] != '' || $row['age'] != NULL){ ?>
                                <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age - </b><span style="color:black;"><?php echo $row['age']??"--"?></span></p>
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
                             <b style="color:black;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
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
                                <!--<a href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>-->
                                <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                  <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                <?php }
                                  if($row['well3']!='' || $row['well3']!=null) { ?>
                                  <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                <?php } ?>
                            <?php }else{ ?>
                            <a href="javascript:void(0)" onclick="showLogin(1)" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                            <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                            <a href="javascript:void(0)" onclick="showLogin(1)" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                            <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                              <a href="javascript:void(0)" onclick="showLogin(1)" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                            <?php }
                              if($row['well3']!='' || $row['well3']!=null) { ?>
                              <a href="javascript:void(0)" onclick="showLogin(1)" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
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
        ?>
        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2 " >
            <div class="card mb-3 shiva_user_height bg-light">
                <div class="card-body px-0 pt-0">
                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                        <div class="col-6 v-<?=$checkDetail[0]['idType']?> img-<?=$checkDetail[0]['idType']?> " data-p="<?=$checkDetail[0]['idType']?>">
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
                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Name - </b><b style="font-size:.8rem!important;color:black;"><?php echo $row['aadharname']??"--" ?></b></p>
                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Gender - </b><b style="font-size:.8rem!important;color:black;"><?php echo ($row['gender'] == 'MALE' ? 'Male':'Female'); ?></b></p>
                            <?php }else{ ?>
                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Gender - </b><b style="font-size:.8rem!important;color:black;"><?php echo ($row['gender'] == 'MALE' ? 'Male':'Female'); ?></b></p>
                            <?php } ?>
                           
                            <?php if($row['dob'] != '' || $row['dob'] != NULL){ 
                                $from=new DateTime(date('Y-m-d'));
                                $to   = new DateTime($row['dob']);
                                $age = ($from->diff($to)->y).'- Years';
                            ?>
                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Age - </b><b style="font-size:.8rem!important;color:black;"><?php echo $age??"--"?></b></p>
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
                            <?php }else{ 
                            ?>
                            <div class="col-12 ">
                                <b style="font-size:.8rem!important">Contact To: - Well Wisher</b>
                            </div>
                            <div class="col-12 text-center">
                                <a href="javascript:void(0)" onclick="showLogin('user',<?= $row['uid']; ?>)" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mt-3">
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
        <?php } ?>
        <?php } ?>
        <?php 
            if(count($khoyaperson) > 0)
            {
        ?>
        <?php 
            foreach($khoyaperson as $k=>$row)
            {
        ?>
        <input type="hidden" id="firstSpecialId" value="<?= $khoyaperson[0]['id']; ?>">
        <input type="hidden" id="isFirstSpecialSent" value="0">
        <input type="hidden" id="isSpecialNotificationSent_<?= $row['id']; ?>" value="0">
        <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
            <div class="card mb-3 shiva_height bg-light" style="height: auto;">
                <div class="card-header" style="background-color: white;border: 2px solid lightgrey;">
                    <div class="row justify-content-between align-items-baseline">
                        <div class="col-4 px-0">
                            <img src="<?= base_url(); ?>assets_landing_page/modi.png" style="width: 100%;height: 75px;">
                        </div>
                        <div class="col-4 px-0">
                            <h6 class="text-center text-gradient1 mb-1 fs-20" style="font-size: 0.6rem!important;">DIGITAL MAHAKUMBH 2025</h6>
                        </div>
                        <div class="col-4">
                            <img src="<?= base_url(); ?>assets/Prayagraj_Mahakumbh_2025_Logo-removebg-preview.png" style="width: 100%;height: 75px;">
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
                        <div class="col-12">
                            <p ><b style="color:black;font-size:.7rem!important">Uploaded Date :- </b><b style="color:black;font-size:.7rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                        </div>
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
        <?php } ?>
        <?php } ?>
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
<?php 
    $getInactiveSettings = $this->db->query('select * from settings where name="inactiveMode"')->result_array();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript" src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>
<script type="text/javascript">
    
    $(document).ready(function() {
	
		$(".message").shorten({
        	"showChars" : 150,
        	"moreText"	: "See More",
	        "lessText"	: "Less",
        });
	});
	
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
    
    function openCamera()
    {
        $('#fileMobInput').click();
    }
    
    $('#fileMobInput').on('change',function(e)
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
    })
    
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
    
    <?php
        if(isset($_SESSION['landingMob']))
        {
            if($checkDetail[0]['isFirstSent'] == 0)
            {
    ?>
    sendFirstNotification();
    <?php } }else{ 
        if($this->session->userdata('user_login') == 'yes'){
            if($checkDetail[0]['isFirstSent'] == 0)
            {
    ?>
    createOverallHistory();
    <?php } } } ?>
    
    function createOverallHistory()
    {
        $.ajax({
            url:'<?php echo base_url(); ?>landing/createOverallHistory'
        })
    }
    
    function sendFirstNotification()
    {
        $.ajax({
            url:'<?php echo base_url(); ?>landing/sendIdentityNotification'
        })
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
        data.append('appNo','<?= $lapataperson[0]['Application_no']; ?>');
        data.append('type','identity');
        data.append('beforeLogin',true);
        $.ajax({
            url:'<?php echo base_url(); ?>landing/sendMissingMsg',
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
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
            data.append('type','identity');
            data.append('beforeLogin',true);
            $.ajax({
                url:'<?php echo base_url(); ?>landing/sendMissingMsg',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    $(ele).attr('disabled',false);
                    window.location.href = $(ele).attr('href');
                }
            })
        }else{
            $(ele).attr('disabled',false);
            window.location.href = $(ele).attr('href');
        }
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
                  title: '<strong>Signup/Login</strong>',
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
                  title: '<strong>Signup/Login</strong>',
                  customClass:{
                    popup:'py-0',
                    title:'pt-0'
                  },
                  allowOutsideClick:false,
                  html:
                    '<h6 class="text-center my-3">Choose the suitable option to contact</h6><div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="saveCallingId(`withoutLogin`)" class="w-100 btn-style-grey disabled-on-loading btn"> Without Login</button></div><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="saveCallingId(`login`)" class="w-100 btn-style-green disabled-on-loading btn"> Login</button></div><div class="col-lg-auto col-sm-12 col-md-auto"><button onclick="saveCallingId(`signup`)" class="w-100 btn-style-five disabled-on-loading btn">Signup</button></div></div></div>',
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
                    '<h6 class="text-center my-3">Choose the suitable option to contact</h6><div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><button onclick="saveCallingId(`login`)" class="w-100 btn-style-green disabled-on-loading btn"> Login</button></div><div class="col-lg-auto col-sm-12 col-md-auto"><button onclick="saveCallingId(`signup`)" class="w-100 btn-style-five disabled-on-loading btn">Signup</button></div></div></div>',
                  showCloseButton: true,
                  showCancelButton: false,
                  focusConfirm: false,
                  showConfirmButton:false
                })       
            }
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
                url:'<?php echo base_url(); ?>landing/sendCheckOtpUpdated',
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
                        toastr.success(parse.message);
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
                url:'<?php echo base_url(); ?>landing/sendCheckOtpUpdated',
                data:data,
                timeout: 60000,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    toastr.success(parse.message);
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
	    window.close();
	}
	
	function view(type,ele,appNo)
    {
        <?php 
            $_SESSION['previousType'] = 'identity';
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
                type:'get',
                timeout: 60000,
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
        }else if(type == 'special')
        {
            url = '<?php echo base_url(); ?>find-mahakumbh-special-person?id='+appNo;
            window.open(url,'_blank');   
        }
    }
    
    function showFileUpload(){
        $('#image_demo').croppie('destroy');
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
        $('#uploadFile').click();
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
    
    function share(type,ele,appNo)
    {
        if (navigator.share) {
            let url = '';
            let text = '';
            if(type == 'missing')
            {
                url = '<?php echo base_url(); ?>find-missed-person?Id='+appNo;
            }else if(type == 'lapata'){
                text='🙏🙏कृपया, इस पोस्ट को ज्यादा से ज्यादा शेयर करे I शायद, आप के एक शेयर से यह व्यक्ति मिल जाए I ';
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
    // var nodl=$('.dl').length;
    // alert(nodl);
    var general='General Result ';
    $('.n-gold').html(general);
    $('.n-vehicle').html(general);
    $('.img-gold').html(general);
    $('.img-vehicle').html(general);
    
</script>