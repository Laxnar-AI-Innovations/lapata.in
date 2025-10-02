<style>
.btn-style-netflix-1{
    background:white!important;
    color:black!important;
    border-image:1px solid #0d6efd!important;
}

.btn-style-netflix-1:hover{
    background:green!important;
}

.btn-style-netflix-2{
    
}

.text-red{
    color:red!important;
}
.text-green{
    color:green!important;
}
::-webkit-scrollbar {
	width: 15px;
}

::-webkit-scrollbar-track {
	background-color: transparent;
}

::-webkit-scrollbar-thumb {
	background-color: var(--black);
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

.btn:hover {
	background-color: var(--crimson);
	color: var(--white);
}

a:hover{
    background:transparent!important;
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

.side-bar {
	height: -webkit-fill-available;
	width: 300px;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1000;
	background-color: var(--white);
	padding: 20px;
	border-right: var(--border);
	overflow-y: scroll;
}

.side-bar::-webkit-scrollbar {
	width: 5px;
}

.side-bar .box {
	border-bottom: var(--border);
	padding: 20px 0;
}

.side-bar .box .title {
	margin-bottom: 10px;
	color: var(--black);
	font-size: 20px;
	text-transform: uppercase;
}

.side-bar .btn {
	margin-left: 5px;
}

.side-bar .btn.active {
	background-color: var(--crimson);
	color: var(--white);
}

.side-bar .box #search-box {
	border: var(--border);
	padding: 12px;
	text-transform: none;
	color: var(--light-black);
	width: 100%;
	font-size: 17px;
}

.side-bar .reset-btn .btn {
	margin-top: 20px;
	width: 100%;
}

#side-menu {
	position: fixed;
	top: 135px;
	right: 50px;
	height: 50px;
	width: 50px;
	line-height: 50px;
	text-align: center;
	background-color: var(--white);
	color: var(--black);
	cursor: pointer;
	font-size: 25px;
	z-index: 1100;
	box-shadow: var(--box-shadow);
	border: var(--border);
	display: none;
}

.image-popup {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1200;
	background-color: var(--dark-bg);
	height: 100vh;
	width: 100%;
	display: none;
	align-items: center;
	justify-content: center;
	padding: 100px 20px;
	overflow-y: scroll;
}

.image-popup img {
	width: 600px;
	cursor: pointer;
	border: 10px solid var(--white);
	background-color: var(--white);
}



:root {
	--crimson: crimson;
	--black: #333;
	--white: #fff;
	--light-black: #666;
	--light-bg: #eee;
	--dark-bg: rgba(0, 0, 0, .7);
	--border: 1px solid #999;
	--box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
}

* {
	font-family: 'Poppins', sans-serif;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	outline: none;
	border: none;
	text-decoration: none;
	transition: all .2s linear;
}

select{
    appearance:auto!important;
}

@media (max-width:1900px) {

	.gallery {
		padding-left: 20px;
	}

	#side-menu {
		display: block;
	}

	#side-menu.fa-times {
		top: 0;
		left: 300px;
	}

	.side-bar {
		left: -350px;
	}

	.side-bar.active {
		box-shadow: 0 0 0 100vw var(--dark-bg);
		left: 0;
		z-index: 1000;
	}
    .shiva_height{
        height:600px;
        max-height:600px;
    }
}

@media (max-width:768px) {

	.image-popup img {
		width: 100%;
	}
	    .shiva_height{
        height:430px;
        max-height:430px;
    }

}

@media (max-width:450px) {

	#side-menu.fa-times {
		top: 10px;
		left: 10px;
	}

	.side-bar.active {
		padding-top: 70px;
	}
	    .shiva_height{
       height:470px;
        max-height:470px;
    }

}
.margin_tp{
 margin-top: 120px;
    /*background-color: floralwhite;*/
    /*border-radius: 6px 9px;*/
    /*border: 1px solid lightpink;   */
}
</style>

<!--card ke liye css-->
<style>
  /*********************** Demo - 3 *******************/
.email-signature3{font-family:'Roboto Condensed',sans-serif;background:linear-gradient(-45deg,#ced6e0,#dfe4ea);padding:0 0 60px 180px;box-shadow:10px 10px 10px rgba(0,0,0,.2);position:relative}
.email-signature3 .signature-img{background:linear-gradient(-45deg,#e82c56,#fc718e);width:145px;height:145px;padding:10px 10px;overflow:hidden;position:absolute;top:25px;left:17px}
.email-signature3 .signature-img img{width:100%;height:auto}
.email-signature3 .signature-details{color:#fff;background:linear-gradient(to right,#e82c56,#fc718e);padding:15px 15px;margin-bottom:15px;box-shadow:0 3px 10px rgba(0,0,0,.3)}
.email-signature3 .title{font-size:24px;font-weight:600;letter-spacing:1px;text-transform:uppercase;margin:0 0 5px;display:inline-block}
.email-signature3 .title:after{content:'/';display:inline-block;margin:0 0 0 5px}
.email-signature3 .post{font-size:15px;font-weight:500;letter-spacing:1px;text-transform:capitalize;display:inline-block}
.email-signature3 .signature-content{color:#5a5a5a;font-size:16px;line-height:35px;padding:0 0 0 10px;margin:0;list-style:none}
.email-signature3 .signature-content li span{margin:0 6px 0 0}
.email-signature3 .icon{padding:0;margin:0;list-style:none;box-shadow:0 -1px 10px rgba(0,0,0,.3);position:absolute;bottom:0;left:0}
.email-signature3 .icon li{margin-right:-35px;display:inline-block;-webkit-clip-path:polygon(29% 0,100% 0,69% 100%,0 100%);clip-path:polygon(29% 0,100% 0,69% 100%,0 100%)}
.email-signature3 .icon li:first-child{-webkit-clip-path:polygon(0 0,100% 0,69% 100%,0 100%);clip-path:polygon(0 0,100% 0,69% 100%,0 100%)}
.email-signature3 .icon li a{color:#fff;background:linear-gradient(to right,#e82c56 50%,#fc718e);font-size:18px;line-height:45px;height:45px;padding:0 40px;display:block;transition:all .3s ease 0s}
.email-signature3 .icon li a:hover{background:linear-gradient(to right,#373c44 50%,#57606f);text-decoration:none;}
.email-signature3 .signature-website{font-size:16px;position:absolute;bottom:10px;right:20px}
@media screen and (max-width:576px){.email-signature3{padding:180px 0 75px 0}
.email-signature3 .signature-img{top:17px;left:0;right:0;margin:0 auto}
.email-signature3 .signature-details{text-align:center}
.email-signature3 .title{display:block}
.email-signature3 .title:after{display:none}
.email-signature3 .post{display:block;margin:0}
.email-signature3 .signature-content{padding:0;margin-bottom:7px;text-align:center}
.email-signature3 .icon{box-shadow:none;transform:translateX(-50%);bottom:42px;left:50%}
.email-signature3 .icon li{margin:0 3px;-webkit-clip-path:none;clip-path:none}
.email-signature3 .icon li:first-child{-webkit-clip-path:none;clip-path:none}
.email-signature3 .icon li a{text-align:center;line-height:30px;width:30px;height:30px;padding:0}
.email-signature3 .signature-website{transform:translateX(50%);right:50%;bottom:10px}
}

</style>
<!--end card css-->
<main id="main" class="main">
    <div class="pagetitle row align-items-center">
        <div class="col-sm-12 col-md-6 mb-3">
            <h1>Manage Missing Person</h1>
        </div>
        <div class="col-sm-12 text-end col-md-6 mb-3">
            <a href="<?= base_url(); ?>NonKyc/manageDraft?type=bothmissing" class="btn btn-primary save py-3">Manage Draft</a>
        </div>
    </div>
    <div>
        <div class="container-fluid px-0">
            <?php 
                if(count($data) > 0)
                {
            ?>
            <?php 
                if(!isset($_GET['appNo']))
                {
            ?>
            <div class="row align-items-end" style="justify-content:space-between">
                <div class="col-lg-7 col-xl-8 col-sm-12 col-md-6">
                    <h2 class="my-0 text-danger text-center"><b><span id="personcount"><?php echo ($rows != 0 ? ((($rows) > 1) ? (($rows).' Records') : (($rows).' Record')) : 'NO Records'); ?>...</span></b></h2>
                </div>
                <div class="col-lg-4 col-xl-3 col-sm-12 mt-3 col-10 mt-md-0 col-md-5 text-end pe-lg-0">
                    <input type="text" class="form-control col-xl-auto col-12 text-uppercase" onkeypress="showBtnAccordingly(this.value)" onkeyup="showBtnAccordingly(this.value)" onInput="showBtnAccordingly(this.value)" placeholder="Search by application number..." id="search-box" value="<?= isset($_GET['appNo']) ? strtoupper($_GET['appNo']) : ''; ?>">
                </div>
                <div class="col-lg col-xl-1 col-sm-12 mt-3 mt-md-0 col-2 col-md-1 text-end ps-lg-0">
                    <button type="button" onclick="checkApp(this)" id="search-btn" style="border-radius:5px 5px!important;padding: 9px 15px!important" class="btn btn-style-grey disabled text-center disabled-on-loading"> <i class="fa fa-check-circle"></i></button>
                </div>
            </div>
            <?php }else{ ?>
            <div class="row align-items-end" style="justify-content:space-between">
                <div class="col-lg-7 col-xl-8 col-sm-12 col-md-6">
                    <h2 class="text-center my-0 text-danger"><b><span id="personcount"><?php echo (count($data) != 0 ? ((count($data) > 1) ? (count($data).' Complaints') : (count($data).' Complaint')) : 'NO Complaints'); ?></span> Found...</b></h2>
                </div>
                <div class="col-lg col-xl col-sm-12 mt-3 mt-md-0 col col-md-1 text-end ps-lg-0">
                    <button type="button" onclick="clearSearch(this)" style="border-radius:5px 5px!important;padding: 9px 15px!important" class="btn btn-style-netflix-1 text-center disabled-on-loading"> <i class="fa fa-arrow-circle-left"></i> Back</button>
                </div>
            </div>
            <?php } ?>
            <div class="gallery px-0">
                <div class="image-container row">
                    <?php
                        foreach($data as $row)
                        {
                        	$isPaymentDone = 0;
                            $isExpired = 0;
                            $isActive = '';
                            $status = 'Inactive';
                            $isPaymentDone = 1;
                            if(strtotime(date('d-m-Y')) <= strtotime(date('d-m-Y',strtotime($row['expiryDate']))))
                            {
                                $isExpired = 1;
                            }   
                            if((!$row['isFound']))
                            {
                                if($isExpired == 1)
                                {
                                    $status = 'Active';
                                    $isActive = 'checked';   
                                }
                            }
                          ?>
                        <div class="col-lg-4 col-md-6 px-0 px-md-2 col-12 col-search pb-2">
                            <div class="card mb-3" >
                                <div class="card-body p-0">
                                    <div class="row align-items-center px-0 mx-0 justify-content-center">
                                        <?php
                                            if($row['Photo'] != '' || $row['Photo'] != NULL)
                                            {
                                        ?>
                                        <div class="col mb-2">
                                            <div class="row">
                                                <div class="col col-md-6 col-lg col-xl-6 mt-3">
                                                    <div class="form-check form-switch">
                                                      <input class="form-check-input" type="checkbox" onclick="showColorAccordingly('<?= $row['type']; ?>',<?= $isExpired; ?>,this,<?= $row['id']; ?>,'<?= $row['Application_no']; ?>')" id="<?= $row['id']; ?>" <?= $isActive; ?>>
                                                      <label class="form-check-label" for="<?= $row['id']; ?>"><b class="text-red">MISSING</b><br><b class="text-black">Status-</b><b id="statusColor<?= $row['id']; ?>" class="<?php echo ($isActive == '' ? 'text-red' : 'text-green'); ?>"> <br><?php echo ($isActive == '' ? 'In-active' : 'Active'); ?></b></label>
                                                    </div>  
                                                </div>
                                                <div class="col col-md-6 col-lg col-xl-6 ms-auto mt-1">
                                                    <button type="button" class="btn btn-dark" onclick="showShare('<?= $row['type']; ?>','<?php echo $row['Application_no']; ?>','<?php echo $row['Photo']; ?>')" style="background:black!important;color:white!important;padding:0.5rem 0.6rem;"><i class="fa fa-share-alt"></i></button>
                                                    <button type="button" class="btn btn-dark" onclick="edit('<?= $row['type']; ?>',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;padding:0.5rem 0.6rem;"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-outline-danger btn-dark disabled-on-loading" onclick="deleteComplaint('<?= $row['type']; ?>',this,'<?php echo $row['Application_no']; ?>')" style="background:white!important;color:red!important;padding:0.5rem 0.6rem;"> <i class="fa fa-trash"></i></button>
                                                    <button type="button" class="btn btn-primary" onclick="view('<?= $row['type']; ?>',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;padding:0.5rem 0.6rem;"><i class="fa fa-eye"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Application No :- </b><b style="color:black;font-size:.8rem!important;"><?php echo $row['Application_no']; ?></b></p>
                                        </div>
                                        <div class="col-10">
                                            <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important;"><?php echo date('d-m-Y h:i A',strtotime($row['dateCreated'])); ?></b></p>
                                        </div>
                                        <div class="col-12 text-start">
                                            <p class="mb-1"><b style="color:red;font-size:.8rem!important;font-weight:700;">Missing Date :- </b><b style="color:black;font-size:.8rem!important;"><?= $row['missingDate'] != NULL ? date('d-m-Y',strtotime($row['missingDate'])) : date('d-m-Y',strtotime($row['dateCreated'])); ?></b></p>
                                        </div>
                                        <div class="col-5 ">
                                            <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['Photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
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
                                                <p class="card-title text-start py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Age - </b><b style="font-size:.8rem!important;color:black;"><?php echo $row['Age']??"--"?></b></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                                    <div class="row col-12 px-4 pt-2" style="max-height:auto;">
                                        <p class="card-title text-start py-0 fs-6"><b style="color:red;font-weight:500;">Message:- </b><b style="color:black;font-size:.8rem!important;" class="message"><?php echo $row['Message']??"--"?></b></p> 
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($isExpired)
                                        {
                                    ?>
                                    <div class="row col-12 px-1 mx-0 pt-2 text-light" style="max-height:auto;background:green;">
                                        <p class="mb-1"><b style="font-weight:500;">Plan Expiring on Date- <?php echo date('d/m/Y',strtotime($row['expiryDate'])); ?></b></p>
                                        <?php 
                                        	if($row['type'] == 'missing')
                                        	{
                                        ?>
                                       	<p><b style="font-weight:500;">Want to Renew Your Plan- <a href="<?php echo base_url(); ?>NonKyc/showPaymentModels?id=<?php echo $row['id']; ?>" class="text-white" style="text-decoration:underline;">Click here</a></b></p>
                                       	<?php }else{ ?>
                                       	<p><b style="font-weight:500;">Want to Renew Your Plan- <a href="<?php echo base_url(); ?>NonKyc/showFunnelPaymentModels?id=<?php echo $row['id']; ?>" class="text-white" style="text-decoration:underline;">Click here</a></b></p>
                                       	<?php } ?>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="row col-12 px-1 mx-0 pt-2 text-light" style="max-height:auto;background:red;">
                                        <p class="mb-1"><b style="font-weight:500;">Plan Already Expired on- <?php echo date('d/m/Y',strtotime($row['expiryDate'])); ?></b></p>
                                        <?php 
                                        	if($row['type'] == 'missing')
                                        	{
                                        ?>
                                        <p><b style="font-weight:500;">Want to Renew Your Plan- <a href="<?php echo base_url(); ?>NonKyc/showPaymentModels?id=<?php echo $row['id']; ?>" class="text-white" style="text-decoration:underline;">Click here</a></b></p>
                                        <?php }else{ ?>
                                       	<p><b style="font-weight:500;">Want to Renew Your Plan- <a href="<?php echo base_url(); ?>NonKyc/showFunnelPaymentModels?id=<?php echo $row['id']; ?>" class="text-white" style="text-decoration:underline;">Click here</a></b></p>
                                       	<?php } ?>
                                    </div>
                                    <?php } ?>
                                    <style>
                                        .social a.btn-circle .btn-google {
                                                    color: #fff;
                                                    background-color: #e44134;
                                                    border-color: transparent;
                                                }
                                                .btn-police1{
                                                     color: #fff;
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
                                                    .btn:hover {
            color: var(--bs-btn-hover-color);
            background-color: var(--bs-btn-hover-bg);
            border-color: var(--bs-btn-hover-border-color);
        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            	<div class="image-popup">
            		<img src="" alt="">
            	</div>
            </div>
            <?php 
                if($paginationCtrls != '')
                {
            ?>
            <div class="row mx-0">
                <div class="col-12 table-responsive">
                    <div id="pagination_controls" class="py-0 py-md-3" style="text-align:center;background:white;"><?php echo $paginationCtrls; ?></div>
                </div>
            </div>
            <?php } ?>
            <?php }else{ ?>
            <div class="card col-md-6 col-12 mx-auto">
                <div class="card-header">
                <div class="card-body pb-0 text-center d-block d-md-none">
                    <h5 class="text-danger mb-0"><b>No Missing data</b></h5>
                </div>
                <div class="card-body pb-0 text-center d-none d-md-block">
                    <h5 class="text-danger mb-0"><b>No Missing data</b></h5>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>
<script type="text/javascript" src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>
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

<script>
    $(document).ready(function() {
	
		$(".message").shorten({
        	"showChars" : 150,
        	"moreText"	: "See More",
	        "lessText"	: "Less",
        });
	});
    let sideMenu = document.querySelector('#side-menu');
let sideBar = document.querySelector('.side-bar');

function showShare(type,appNo,photo)
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
            `<hr class="mt-0"><div class="row justify-content-center mx-0 align-items-center"><div class="col-md-12 col-sm-12 mb-3"><button type="button" style="padding:0.5rem!important;border-radius:0rem!important;white-space:break-spaces;" class="save d-flex align-items-center btn-style-netflix-1 btn btn-primary d-block w-100 disabled-on-loading" onclick="share('`+type+`','with','`+appNo+`')"> <img src="<?php echo base_url(); ?>`+photo+`" style="width:50px;height:50px;"> - Share missing person detail's link <br><br>with photo</button></div><div class="col-md-12 col-sm-12 mb-2"><button type="button" style="padding:0rem!important;border-radius:0rem!important;white-space:break-spaces;" class="mt-0 save btn-style-netflix-1 btn btn-primary d-block d-flex align-items-center w-100 disabled-on-loading" onclick="share('`+type+`','without','`+appNo+`')"> <img src="<?php echo base_url(); ?>assets/images/khoji.webp" style="width:100px;height:100px;">- Share missing person detail's link <br><br>without photo</button></div></div>`,
        showCloseButton: false,
        showCancelButton: true,
        'cancelButtonText':'Back',
        showConfirmButton:false
    })
}

function showColorAccordingly(type,isExpired,ele,id,appNo)
{
	if(type == 'funnel_missing')
	{
		if(ele.checked)
	    {
	        Swal.fire({
	            title: '<strong class="text-danger" style="font-size:20px;">Complaint Activate- '+appNo+'</strong>',
	            icon: 'info',
	            allowOutsideClick:false,
	            html:
	                '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to activate complaint again?</label></div>',
	            showCloseButton: true,
	            showCancelButton: true,
	            confirmButtonText:'Yes',
	            cancelButtonText:'No',
	            focusConfirm: false,
	            showConfirmButton:true
	        }).then((result) => {
	            if (result.isConfirmed) {
	                let data = new FormData();
	                data.append('id',id);
	                data.append('status',1);
	                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
	                if(type == 'funnel_missing')
	                {
	                	$.ajax({
		                    url:'<?php echo base_url(); ?>NonKyc/reactivateFunnelComplaint',
		                    data:data,
		                    contentType: false,
		                    cache: false,
		                    processData:false,
		                    type:'post',
		                    success:function(res)
		                    {
		                        toastr.success('complaint activated successfully');
		                        setTimeout(function()
		                        {
		                            location.reload();
		                        },2000);
		                    }
		                });
	                }else{
	                	$.ajax({
		                    url:'<?php echo base_url(); ?>NonKyc/reactivateComplaint',
		                    data:data,
		                    contentType: false,
		                    cache: false,
		                    processData:false,
		                    type:'post',
		                    success:function(res)
		                    {
		                        toastr.success('complaint activated successfully');
		                        setTimeout(function()
		                        {
		                            location.reload();
		                        },2000);
		                    }
		                });
	                }
	            }else{
	                $(ele).prop('checked',false);
	            }
	        })      
	    }else{
	        Swal.fire({
	            title: '<strong class="text-danger" style="font-size:20px;">Complaint Deactivate- '+appNo+'</strong>',
	            icon: 'info',
	            allowOutsideClick:false,
	            html:
	                '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to deactivate complaint?</label></div>',
	            showCloseButton: true,
	            showCancelButton: true,
	            confirmButtonText:'Yes',
	            cancelButtonText:'No',
	            focusConfirm: false,
	            showConfirmButton:true
	        }).then((result) => {
	            if (result.isConfirmed) {
	                let data = new FormData();
	                data.append('id',id);
	                data.append('status',0);
	                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
	                if(type == 'funnel_missing')
	                {
	                	$.ajax({
		                    url:'<?php echo base_url(); ?>NonKyc/reactivateFunnelComplaint',
		                    data:data,
		                    contentType: false,
		                    cache: false,
		                    processData:false,
		                    type:'post',
		                    success:function(res)
		                    {
		                        toastr.success('complaint deactivated successfully');
		                        setTimeout(function()
		                        {
		                            location.reload();
		                        },2000);
		                    }
		                });
	                }else{
	                	$.ajax({
		                    url:'<?php echo base_url(); ?>NonKyc/reactivateComplaint',
		                    data:data,
		                    contentType: false,
		                    cache: false,
		                    processData:false,
		                    type:'post',
		                    success:function(res)
		                    {
		                        toastr.success('complaint deactivated successfully');
		                        setTimeout(function()
		                        {
		                            location.reload();
		                        },2000);
		                    }
		                });
	                }
	            }else{
	                $(ele).prop('checked',true);
	            }
	        })
	    }
	}else{
		if(!isExpired)
	    {
	        $(ele).prop('checked',false);
	        location.href="<?php echo base_url(); ?>NonKyc/showPaymentModels?id="+id;
	    }else{
		    if(ele.checked)
		    {
		        Swal.fire({
		            title: '<strong class="text-danger" style="font-size:20px;">Complaint Activate- '+appNo+'</strong>',
		            icon: 'info',
		            allowOutsideClick:false,
		            html:
		                '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to activate complaint again?</label></div>',
		            showCloseButton: true,
		            showCancelButton: true,
		            confirmButtonText:'Yes',
		            cancelButtonText:'No',
		            focusConfirm: false,
		            showConfirmButton:true
		        }).then((result) => {
		            if (result.isConfirmed) {
		                let data = new FormData();
		                data.append('id',id);
		                data.append('status',1);
		                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
		                if(type == 'funnel_missing')
		                {
		                	$.ajax({
			                    url:'<?php echo base_url(); ?>NonKyc/reactivateFunnelComplaint',
			                    data:data,
			                    contentType: false,
			                    cache: false,
			                    processData:false,
			                    type:'post',
			                    success:function(res)
			                    {
			                        toastr.success('complaint activated successfully');
			                        setTimeout(function()
			                        {
			                            location.reload();
			                        },2000);
			                    }
			                });
		                }else{
		                	$.ajax({
			                    url:'<?php echo base_url(); ?>NonKyc/reactivateComplaint',
			                    data:data,
			                    contentType: false,
			                    cache: false,
			                    processData:false,
			                    type:'post',
			                    success:function(res)
			                    {
			                        toastr.success('complaint activated successfully');
			                        setTimeout(function()
			                        {
			                            location.reload();
			                        },2000);
			                    }
			                });
		                }
		            }else{
		                $(ele).prop('checked',false);
		            }
		        })      
		    }else{
		        Swal.fire({
		            title: '<strong class="text-danger" style="font-size:20px;">Complaint Deactivate- '+appNo+'</strong>',
		            icon: 'info',
		            allowOutsideClick:false,
		            html:
		                '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to deactivate complaint?</label></div>',
		            showCloseButton: true,
		            showCancelButton: true,
		            confirmButtonText:'Yes',
		            cancelButtonText:'No',
		            focusConfirm: false,
		            showConfirmButton:true
		        }).then((result) => {
		            if (result.isConfirmed) {
		                let data = new FormData();
		                data.append('id',id);
		                data.append('status',0);
		                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
		                if(type == 'funnel_missing')
		                {
		                	$.ajax({
			                    url:'<?php echo base_url(); ?>NonKyc/reactivateFunnelComplaint',
			                    data:data,
			                    contentType: false,
			                    cache: false,
			                    processData:false,
			                    type:'post',
			                    success:function(res)
			                    {
			                        toastr.success('complaint deactivated successfully');
			                        setTimeout(function()
			                        {
			                            location.reload();
			                        },2000);
			                    }
			                });
		                }else{
		                	$.ajax({
			                    url:'<?php echo base_url(); ?>NonKyc/reactivateComplaint',
			                    data:data,
			                    contentType: false,
			                    cache: false,
			                    processData:false,
			                    type:'post',
			                    success:function(res)
			                    {
			                        toastr.success('complaint deactivated successfully');
			                        setTimeout(function()
			                        {
			                            location.reload();
			                        },2000);
			                    }
			                });
		                }
		            }else{
		                $(ele).prop('checked',true);
		            }
		        })
		    }
		}
	}
}

function showPreview(ele)
{
    if($('#facematchfilter').get(0).files.length > 0)
    {
        $('#facePreview').attr('src',URL.createObjectURL($('#facematchfilter').get(0).files[0]));
        $('#facePreviewDiv').removeClass('d-none');
    }else{
        $('#facePreviewDiv').addClass('d-none');
        $('#facematchfilter').val('');
        $('#facePreview').removeAttr('src');
    }
}

function deleteComplaint(type,ele,appNo)
{
    $(ele).attr('disabled','disabled');
     Swal.fire({
        title: '<strong class="text-danger" style="font-size:20px;">Complaint Delete- '+appNo+'</strong>',
        icon: 'error',
        allowOutsideClick:false,
        html:
            '<div class="form-group mt-3"><label class="form-label" style="font-size:17px!important;">Are you sure you want to delete this complaint?</label></div>',
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText:'Yes',
        cancelButtonText:'No',
        focusConfirm: false,
        showConfirmButton:true
    }).then((result) => {
        if (result.isConfirmed) {
            let data = new FormData();
            data.append('id',appNo);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            if(type == 'funnel_missing')
            {
            	$.ajax({
	                url:'<?php echo base_url(); ?>NonKyc/deleteFunnelComplaint',
	                data:data,
	                contentType: false,
	                cache: false,
	                processData:false,
	                type:'post',
	                success:function(res)
	                {
	                    toastr.success('complaint deleted successfully');
	                    setTimeout(function()
	                    {
	                        location.reload();
	                    },2000);
	                }
	            });
            }else{
            	$.ajax({
	                url:'<?php echo base_url(); ?>NonKyc/deleteComplaint',
	                data:data,
	                contentType: false,
	                cache: false,
	                processData:false,
	                type:'post',
	                success:function(res)
	                {
	                    toastr.success('complaint deleted successfully');
	                    setTimeout(function()
	                    {
	                        location.reload();
	                    },2000);
	                }
	            });
            }
        }else{
            $(ele).prop('disabled',false);
        }
    })
}

function view(type,ele,id)
{
	if(type == 'funnel_missing')
	{
		window.open('<?php echo base_url(); ?>find-funnel-person?id='+id,'_blank');   
	}else{
		window.open('<?php echo base_url(); ?>find-lapata-person?id='+id,'_blank');   
	}
}

function edit(type,ele,appNo)
{
	if(type == 'funnel_missing')
	{
		$(ele).attr('disabled','disabled');
    	location.href="<?php echo base_url(); ?>NonKyc/editFunnelMissingDetails?id="+appNo;
	}else{
		$(ele).attr('disabled','disabled');
    	location.href="<?php echo base_url(); ?>NonKyc/editLapataDetails?id="+appNo;
	}
}

function share(specialType,type,id)
{
	if(specialType == 'funnel_missing')
	{
		if (navigator.share) {
	        navigator.share({
	          title: 'Khoji',
	          url: '<?php echo base_url(); ?>find-funnel-person?id='+id+'&type='+type,
	          text:'🙏🙏कृपया, इस पोस्ट को ज्यादा से ज्यादा शेयर करे I शायद, आप के एक शेयर से यह व्यक्ति मिल जाए I '
	        }).then(() => {
	          swal.close();
	        })
	        .catch(console.error);
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
	}else{
		if (navigator.share) {
	        navigator.share({
	          title: 'Khoji',
	          url: '<?php echo base_url(); ?>find-lapata-person?id='+id+'&type='+type,
	          text:'🙏🙏कृपया, इस पोस्ट को ज्यादा से ज्यादा शेयर करे I शायद, आप के एक शेयर से यह व्यक्ति मिल जाए I '
	        }).then(() => {
	          swal.close();
	        })
	        .catch(console.error);
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
}

function showBtnAccordingly(val)
{
    if(val.length >= 1)
    {
        $('#search-btn').removeClass('btn-style-grey disabled').addClass('btn-style-green');
    }else{
        $('#search-btn').addClass('btn-style-grey disabled').removeClass('btn-style-green');
    }
}

function checkLength(val,limit)
{
    if(val.length == limit)
    {
        return false;
    }else{
        return true;
    }
}

let galleryImages = document.querySelectorAll('.image-container .col-search');
let imagePop = document.querySelector('.image-popup');
let galleryImages1 = document.querySelectorAll('.image-container .col-search img');

galleryImages1.forEach(img => {
	img.onclick = () => {
		let imageSrc = img.getAttribute('src');
		imagePop.style.display = 'flex';
		imagePop.querySelector('img').src = imageSrc;
	};
});

imagePop.onclick = () => {
	imagePop.style.display = 'none';
};

function checkApp(ele)
{
    $(ele).attr('disabled','disabled');
    var value = document.querySelector('#search-box').value.toLowerCase();
	if(value != '')
	{
	    location.href="<?= base_url(); ?>NonKyc/manage_both_missing?appNo="+value;   
	}else{
	    location.href="<?= base_url(); ?>NonKyc/manage_both_missing";
	}
}

function clearSearch(ele)
{
    $(ele).attr('disabled','disabled');
    location.href="<?= base_url(); ?>NonKyc/manage_both_missing";
}
</script>