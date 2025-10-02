<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $title; ?> </title>
    <meta name="author" content="<?php echo isset($author) ? $author : ''; ?>"/>
    
    <meta name="description" content="<?php echo isset($metadescription) ? $metadescription : ''; ?>"/>
    <meta name="keywords" content="<?php echo isset($keywords) ? $keywords : ''; ?>"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:title" content="<?php echo isset($ogtitle) ? $ogtitle : ''; ?>"/>
    <meta property="og:type" content="<?php echo isset($ogtype) ? $ogtype : ''; ?>"/>
    <meta property="og:url" content="<?php echo isset($ogurl) ? $ogurl : ''; ?>"/>
    <meta property="og:image" content="<?php echo isset($ogimage) ? $ogimage : ''; ?>"/>
    <meta property="og:site_name" content="<?php echo base_url(); ?>"/>
    <meta property="og:description" content="<?php echo isset($ogdescription) ? $ogdescription : ''; ?>"/>
    
  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/css/lightbox.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <style>
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
        /*background-color:#0daf96!important;*/
        background-color:crimson!important;
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
    .swal2-cancel{
        position: relative!important;
        font-size: 16px!important;
        line-height: 16px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
    }
    .btn-style-red:hover {
        color: #fff!important;
        /*background-color:#0daf96!important;*/
        background-color:crimson!important;
    }
    .select2-container {
    width: -webkit-fill-available!important;
}

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>
 <style>
    .btn-style-four{
        position: relative!important;
        color: #fff!important;
        font-size: 16px!important;
        line-height: 26px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color: #403ab4!important;
        box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-four:hover {
        color: #fff!important;
        /*background-color:#0daf96!important;*/
        background-color:crimson!important;
    }
    
    .btn-style-yellow{
        position: relative!important;
        color: #fff!important;
        border:0!important;
        font-size: 16px!important;
        line-height: 26px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color: #ff9800!important;
        box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-yellow:hover {
        color: #fff!important;
        /*background-color:#0daf96!important;*/
        background-color:crimson!important;
    }
    
    .btn-style-grey{
        position: relative!important;
        color: #fff!important;
        font-size: 16px!important;
        line-height: 26px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color: #444!important;
        box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    
    .btn-style-grey:hover {
        color: #fff!important;
        background-color:crimson!important;
    }
    
    .btn-style-five{
        position: relative!important;
        color: #fff!important;
        font-size: 16px!important;
        line-height: 26px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color: #2196f3!important;
        box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-five:hover {
        color: #fff!important;
        background-color:crimson!important;
    }
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');


#h11 {
  text-transform: uppercase;
	background-image: linear-gradient(to right top, #ffff34, #ffc812, #ff8f2f, #ff554d, #eb1267);
   background-size: 50% auto;
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
  font-family: 'Poppins', sans-serif;
  font-size: 8vw;
  animation: gradientAnim 7.5s ease  alternate infinite;
}


@keyframes gradientAnim {
  to {
    background-position: 100% top;
  }
 </style>
 
 
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Droid+Sans);
    .loader {
    	position: fixed;
    	left: 0px;
    	top: 0px;
    	width: 100%;
    	height: 100%;
    	z-index: 9999;
    	background: url('<?php echo base_url(); ?>assets/images/01-progress.gif') 50% 50% no-repeat rgb(249,249,249);
    }

.reset{
    position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 16px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
}

.next{
    background: #1e88e5!important;
    position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 16px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
}

.swal2-cancel:hover{
        color: #fff!important;
        background-color:crimson!important;
    }
    
    .swal2-confirm{
    position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 16px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color:#008000!important;
}

.swal2-confirm:hover{
    color: #fff!important;
    background-color:crimson!important;
}
.save:hover {
    color: #fff!important;
    background-color:crimson!important;
}

.next:hover{
    color: #fff!important;
    background-color:crimson!important;
}

.save{
    position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 16px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color:#008000!important;
}
</style>
<style type="text/css">
  input[readonly],textarea[readonly]{
      background: #d3d3d34d!important;
  }
  #toast-container > div{
      opacity: 1;
  }
  button:disabled{
    opacity: 0.65
  }

   .disabled-on-loading:disabled:before {
        opacity: 0.65;
        content: "\f110";
        font-weight: 900;
        margin-right:0.2rem;
        display: inline-block;
        font: normal normal normal 14px/1;
        font-family: "Font Awesome 5 Free";
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        text-rendering: auto;
        line-height: 1;
        animation: fa-spin 1s infinite steps(9);
    }
    .form-group{
      margin-bottom: 1rem;
    }
    nav .nav-link{
      color:black;
    }

    nav .nav-link.active{
     background-color:white!important;
     color:black;
     
      font-weight: 600;
    }
    .head-bg{
        background-color:white!important;
    }
     .min-vh-70 {
    min-height: 70vh!important;
}
  </style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet"/>
<script>
    $('.loader').fadeIn('slow');
    $(document).ready(function()
    {
        $('.loader').fadeOut('slow');  
    })
</script>
<body style="font-family: 'Droid Sans';">
    <div class="loader"></div>
  <main>
    <nav class="navbar navbar-expand-lg navbar-danger head-bg">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">
      <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" style="height:100px;width:100%;">
    </a>
    <button class="navbar-toggler p-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
    style="color:white">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <?php 
                if($this->session->userdata('user_login') == 'yes'){
        ?>
        <li class="nav-item">
          <a class="nav-link" style="width:max-content;" aria-current="page" href="javascript:void(0)">Hello, <b><?php echo $_SESSION['username']; ?></b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($title == 'Dashboard'){ echo "active"; } ?> " href="<?php echo base_url(); ?>user-dashboard">Dashboard</a>
        </li>
        <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link <?php if($title == 'Login'){ echo "active"; } ?>" aria-current="page" href="<?php echo base_url(); ?>user/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($title == 'Register'){ echo "active"; } ?> " href="<?php echo base_url(); ?>user/newregister">Aadhar Kyc</a>
            </li>
        <?php } ?>
        <!--<li class="nav-item">-->
        <!--  <a class="nav-link <?php if($title == 'Face Match'){ echo "active"; } ?> " href="<?php echo base_url(); ?>user/facematch">Face Match</a>-->
        <!--</li>-->
        <!--<li class="nav-item">-->
        <!--  <a class="nav-link <?php if($title == 'Missing Persons'){ echo "active"; } ?> " href="<?php echo base_url(); ?>user/missingpersons">Missing Persons</a>-->
        <!--</li>-->
        <li class="nav-item">
          <a class="nav-link <?php if($title == 'Search Vehicle'){ echo "active"; } ?> " href="<?php echo base_url(); ?>user/searchVehicle">Search Vehicle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($title == 'Check Person'){ echo "active"; } ?> " href="<?php echo base_url(); ?>user/checkPerson">Search Person Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($title == 'Search By Person'){ echo "active"; } ?> " href="<?php echo base_url(); ?>user/searchFacePerson">Search Person By Filter </a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>