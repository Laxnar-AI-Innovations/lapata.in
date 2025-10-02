<style>
#swal2-html-container{
    margin: 0 1rem!important;
}

div:where(.swal2-container) div:where(.swal2-popup){
    width:auto;
}
.no-border-radius {
  border-radius: 0 !important;
}
.no-border {
  border: 0 !important;
}
.block {
	position: static;
}

.block:before, .block:after {
	content: '';
	position: absolute;
	left: -2px;
	top: -2px;
	background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00,#ffff00, #ff0000, #fb0094, 
		#0000ff, #00ff00,#ffff00, #ff0000);
	background-size: 400%;
	width: calc(100% + 4px);
	height: calc(100% + 4px);
	z-index: -1;
	animation: steam 20s linear infinite;
}

@keyframes steam {
	0% {
		background-position: 0 0;
	}
	50% {
		background-position: 400% 0;
	}
	100% {
		background-position: 0 0;
	}
}

.block:after {
	filter: blur(50px);
}
.btn-style-netflix-1{
    background:white!important;
    color:black!important;
    border-image:1px solid #0d6efd!important;
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
<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <div class="col-md-6 col-12 text-center text-md-start">
                <?php 
                    if($_GET['type'] == 'unknown')
                    {
                ?>
                <h1>Your Uploaded Unknown Person Data</h1>  
                <?php }else{ ?>
                <h1>Your Uploaded Missing Person Data</h1>  
                <?php } ?>
            </div>
            <div class="col-md-6 col-12 text-center text-md-end">
                <button type="button" onclick="showPopupAccordingly()" style="padding: 9px 15px!important;font-family:math;" class="btn btn-primary next text-light text-lowercase">want guidance?</button>
            </div>
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
                    <h2 class="text-center my-0 text-danger"><b><span id="personcount"><?php echo ($rows != 0 ? ((($rows) > 1) ? (($rows).' Details') : (($rows).' Detail')) : 'NO Details'); ?></span> Found...</b></h2>
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
                        foreach($data as $k=>$row)
                        {
                    ?>
                    <div class="col-lg-4 col-md-6 px-0 px-md-2 col-12 col-search pb-2">
                        <div class="card mb-3" >
                            <div class="card-body px-0">
                                <div class="row align-items-center px-0 mx-0 justify-content-center">
                                    <div class="col-10">
                                        <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Application No :- </b><b style="color:black;font-size:.8rem!important;"><?php echo $row['Application_no']; ?></b></p>
                                    </div>
                                    <div class="col-10">
                                        <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Uploaded Date :- </b><b style="color:black;font-size:.8rem!important;"><?php echo date('d-m-Y h:i A',strtotime($row['dateCreated'])); ?></b></p>
                                    </div>
                                    <?php 
                                        if($row['person_name'] != '')
                                        {
                                    ?>
                                    <div class="col-10">
                                        <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Name - </b><b style="color:black;font-size:.8rem!important;"><?php echo $row['person_name']; ?></b></p>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($row['Age'] != '')
                                        {
                                    ?>
                                    <div class="col-10">
                                        <p class="mb-1"><b style="color:black;font-size:.8rem!important;font-weight:500;">Age - </b><b style="color:black;font-size:.8rem!important;"><?php echo $row['Age']; ?></b></p>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($row['Gender'] != '')
                                        {
                                    ?>
                                    <div class="col-10">
                                        <p class="card-title text-center py-0 fs-6"><b style="color:black;font-size:.8rem!important;font-weight:500;">Gender - </b><b style="font-size:.8rem!important;color:black;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></b></p>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if($_GET['type'] == 'missing')
                                        {
                                    ?>
                                    <div class="col-12 text-start">
                                        <p class="mb-1"><b style="color:red;font-size:.8rem!important;font-weight:700;">Missing Date :- </b><b style="color:black;font-size:.8rem!important;"><?= $row['missingDate'] != NULL ? date('d-m-Y',strtotime($row['missingDate'])) : date('d-m-Y',strtotime($row['dateCreated'])); ?></b></p>
                                    </div>
                                    <?php } ?>
                                    <input type="hidden" id="selectedGender_<?= $row['id']; ?>" value="<?= $row['Gender']; ?>">
                                    <input type="hidden" id="selectedPhoto_<?= $row['id']; ?>" value="<?= "data:image/jpeg;base64,".base64_encode(file_get_contents(base_url().''.$row['Photo'])); ?>">
                                    <div class="col-12 text-start imgDiv_<?= $row['id']; ?>">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="<?= "data:image/jpeg;base64,".base64_encode(file_get_contents(base_url().''.$row['Photo'])); ?>" onclick="markAsSelect(this,'<?= $row['id']; ?>',' with 1st Photo')" style="width:100%;height: 100px !important;border: 1px solid;" alt="">  
                                            </div>
                                            <?php 
                                                if($row['Photo1'] != NULL)
                                                {
                                            ?>
                                            <div class="col-4">
                                                <img src="<?= "data:image/jpeg;base64,".base64_encode(file_get_contents(base_url().''.$row['Photo1'])); ?>" onclick="markAsSelect(this,'<?= $row['id']; ?>',' with 2nd Photo')" style="width:100%;height: 100px !important;border: 1px solid;" alt="">        
                                            </div>
                                            <?php } ?>
                                            <?php 
                                                if($row['Photo2'] != NULL)
                                                {
                                            ?>
                                            <div class="col-4">
                                                <img src="<?= "data:image/jpeg;base64,".base64_encode(file_get_contents(base_url().''.$row['Photo2'])); ?>" onclick="markAsSelect(this,'<?= $row['id']; ?>',' with 3rd Photo')" style="width:100%;height: 100px !important;border: 1px solid;" alt="">  
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <button type="button" id="search_<?= $row['id']; ?>" onclick="search(this,<?= $row['id']; ?>)" class="btn btn-success save disabled-on-loading search" style="padding:0.6rem!important;text-transform:unset;"> <i class="fa fa-search"></i> with 1st Photo</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
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
            <div class="card">
                <div class="card-body text-center">
                    <img src="<?php echo base_url(); ?>assets/icons/nodata.png" style="height:400px;">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>

<script>

<?php 
    $getFinalId = $this->db->query('select max(Id) as Id from searchfacehistoryafterlogin')->result_array();
    if($getFinalId[0]['Id'] != NULL)
    {
        $_SESSION['searchFaceIdAfterLogin'] = $getFinalId[0]['Id'] + 1;
    }else{
        $_SESSION['searchFaceIdAfterLogin'] = 1;
    }
    $insertdata = array(
        'Id' => $_SESSION['searchFaceIdAfterLogin'],
        'userId' => $_SESSION['user_id']
    );
    $insert = $this->db->insert('searchfacehistoryafterlogin',$insertdata);
?>
<?php 
    $checkIfAlready = $this->db->query('select * from guidePopup where userId='.$_SESSION['user_id'].' and isKyc=1 and url="'.current_url().'"')->result_array();
    if(count($checkIfAlready) == 0)
    {
?>
showPopupAccordingly();
<?php } ?>

function markAsSelect(ele,id,message)
{
    $('#selectedPhoto_'+id).val($(ele).attr('src'));
    $('#search_'+id).html(' <i class="fa fa-search"></i> '+message);
    $('.imgDiv_'+id).find('img').css({
        'border':'1px solid',
        'border-image':'unset',
        'background-image':'unset'
    });
    $(ele).css({
        'border':'10px solid',
        'border-image': 'linear-gradient(315deg, rgb(0, 0, 0) 0%, rgb(162, 155, 254) 74%) 100% / 1 / 0 stretch',
        'background-image': 'linear-gradient(#0C0C0C, #4834D4)'
    });
}

function showPopupAccordingly()
{
    Swal.fire({
        iconHtml: '<h6 style="color:black;font-size:4rem;margin-bottom:0;"><b>𝟙</b></h6>',
        customClass: {
            actions: 'mt-0',
            cancelButton: 'reset',
            popup: 'pb-2',
            confirmButton: 'btn-style-primary-no-border',
            icon: 'mb-0 mt-3'
        },
        html: "<div class='form-group'><h6 style='color:black;' class='text-center'><b>Click on any desired image.</b></h6><div class='col-12 border border-5 border-dark pt-3'><img src='<?= base_url(); ?>assets/images/1stSlide.png' style='width:100%;height:auto;'></div></div>",
        showCloseButton:true,
        showConfirmButton:true,
        confirmButtonText:'Next',
        showCancelButton:true,
        'cancelButtonText':'Skip'
    }).then((result) => {
        if(result.isConfirmed)
        {
            Swal.fire({
                iconHtml: '<h6 style="color:black;font-size:4rem;margin-bottom:0;"><b>𝟚</b></h6>',
                customClass: {
                    actions: 'mt-0',
                    cancelButton: 'reset',
                    popup: 'pb-2',
                    confirmButton: 'btn-style-primary-no-border',
                    icon: 'mb-0 mt-3'
                },
                html: "<div class='form-group'><h6 style='color:black;' class='text-center'><b>The search button is enabled for particular card.</b></h6><div class='col-12 border border-5 border-dark pt-3'><img src='<?= base_url(); ?>assets/images/2ndSlide.png' style='width:100%;height:auto;'></div></div>",
                showCloseButton:true,
                showConfirmButton:true,
                confirmButtonText:'Next',
                showCancelButton:true,
                'cancelButtonText':'Skip'
            }).then(() => {
                if(result.isConfirmed)
                {
                    Swal.fire({
                        iconHtml: '<h6 style="color:black;font-size:4rem;margin-bottom:0;"><b>𝟛</b></h6>',
                        customClass: {
                            actions: 'mt-0',
                            cancelButton: 'reset',
                            popup: 'pb-2',
                            confirmButton: 'btn-style-primary-no-border',
                            icon: 'mb-0 mt-3'
                        },
                        html: "<div class='form-group'><h6 style='color:black;' class='text-center'><b>You can find which image is being selected through search button.</b></h6><div class='col-12 border border-5 border-dark pt-3'><img src='<?= base_url(); ?>assets/images/3rdSlide.png' style='width:100%;height:auto;'></div></div>",
                        showCloseButton:true,
                        showConfirmButton:true,
                        confirmButtonText:'Next',
                        showCancelButton:true,
                        'cancelButtonText':'Skip'
                    }).then(() => {
                        if(result.isConfirmed)
                        {
                            Swal.fire({
                                iconHtml: '<h6 style="color:black;font-size:4rem;margin-bottom:0;"><b>𝟜</b></h6>',
                                customClass: {
                                    actions: 'mt-0',
                                    cancelButton: 'reset',
                                    popup: 'pb-2',
                                    confirmButton: 'btn-style-primary-no-border',
                                    icon: 'mb-0 mt-3'
                                },
                                html: "<div class='form-group'><h6 style='color:black;' class='text-center'><b>After Clicking on search button. You will be able to see results.</b></h6><div class='col-12 border border-5 border-dark pt-3'><img src='<?= base_url(); ?>assets/images/4thSlide.png' style='width:100%;height:300px;'></div></div>",
                                showCloseButton:true,
                                showConfirmButton:true,
                                confirmButtonText:'OK',
                                showCancelButton:false,
                            }).then(() => {
                                let data = new FormData();
                                data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                                data.append('url','<?= current_url(); ?>');
                                $.ajax({
                                    url:'<?php echo base_url(); ?>user/hideGuidePopup',
                                    data:data,
                                    contentType: false,
                                    cache: false,
                                    processData:false,
                                    type:'post',
                                })
                            })     
                        }else{
                            let data = new FormData();
                            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                            data.append('url','<?= current_url(); ?>');
                            $.ajax({
                                url:'<?php echo base_url(); ?>user/hideGuidePopup',
                                data:data,
                                contentType: false,
                                cache: false,
                                processData:false,
                                type:'post'
                            })
                        }       
                    })     
                }else{
                    let data = new FormData();
                    data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    data.append('url','<?= current_url(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/hideGuidePopup',
                        data:data,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                    })
                }       
            })     
        }else{
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('url','<?= current_url(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/hideGuidePopup',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
            })
        }
    })  
}

function search(ele,id)
{
    if($('#selectedPhoto_'+id).val() == '')
    {
        toastr.error('Please select some photo to continue.');
    }else{
        $(ele).attr('disabled','disabled');
        let data = new FormData();
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        data.append('mainPhotoSelectedFacematch',$('#selectedPhoto_'+id).val());
        <?php 
            if($_GET['type'] == 'missing')
            {
        ?>
        data.append('type','unknown');
        <?php }else{ ?>
        data.append('type','missing');
        <?php } ?>
        if($('#selectedGender_'+id).val() == 'boy')
        {
            data.append('gender','male');   
        }else{
            data.append('gender','female');   
        }
        $.ajax({
            url:'<?php echo base_url(); ?>user/searchPersonFaceNew',
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.finalCount > 0)
                {
                    $.ajax({
                        url:'<?= base_url(); ?>user/createOverallFaceHistory',
                        success:function(res)
                        {
                            location.href="<?php echo base_url(); ?>user/completeFaceMatchResults";      
                        }
                    })
                }else{
                    Swal.fire({
                        iconHtml: '<img src="'+$('#selectedPhoto_'+id).val()+'" style="height: 100%;border-radius: 0;width: 80px;">',
                        customClass: {
                            actions: 'mt-0',
                            cancelButton: 'save',
                            popup: 'pb-2',
                            confirmButton: 'btn-style-primary-no-border',
                            icon: 'no-border-radius mb-0 mt-3'
                        },
                        html: "<h5 style='color:red;font-weight:bold;' class='mt-1'><b>Oops ! Face not Matched</b></h5><div class='form-group mb-2'><button type='button' class='btn btn-success save' onclick='swal.close();'>Please Try Again</button></div><div class='form-group mb-0 text-end'><button type='button' class='btn btn-primary btn-style-primary-no-border'>View Guidlines</button></div>",
                        showCloseButton:true,
                        showConfirmButton:false,
                        confirmButtonText:'View Guidlines',
                        showCancelButton:false,
                        'cancelButtonText':'Please Try Again'
                    })
                    $(ele).removeAttr('disabled');            
                }
            }
        });
    }
}

$(document).ready(function()
{
    $('.col-search').each(function() {
        $(this).find('img:first').css({
            'border':'10px solid',
            'border-image': 'linear-gradient(315deg, rgb(0, 0, 0) 0%, rgb(162, 155, 254) 74%) 100% / 1 / 0 stretch',
            'background-image': 'linear-gradient(#0C0C0C, #4834D4)'
        });
    });
})

function checkLength(val,limit)
{
    if(val.length == limit)
    {
        return false;
    }else{
        return true;
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

function checkApp(ele)
{
    $(ele).attr('disabled','disabled');
    var value = document.querySelector('#search-box').value.toLowerCase();
	if(value != '')
	{
	    location.href="<?= base_url(); ?>user/manageGallery?appNo="+value+"&type=<?= $_GET['type']; ?>";   
	}else{
	    location.href="<?= base_url(); ?>user/manageGallery?type=<?= $_GET['type']; ?>";
	}
}

function clearSearch(ele)
{
    $(ele).attr('disabled','disabled');
    location.href="<?= base_url(); ?>user/manageGallery?type=<?= $_GET['type']; ?>";
}

</script>