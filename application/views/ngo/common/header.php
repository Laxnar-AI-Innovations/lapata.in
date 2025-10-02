<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="<?php echo isset($metadescription) ? $metadescription : 'Khoji give an alert when missing person was found.'; ?>"/>
    <meta name="keywords" content="<?php echo isset($keywords) ? $keywords : 'Khoji '; ?>"/>
    <meta property="og:locale" content="en_us"/>
    <meta property="og:title" content="<?php echo isset($ogtitle) ? $ogtitle : ''; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo isset($ogurl) ? $ogurl : ''; ?>"/>
    <meta property="fb:app_id" content="689620829908421"/>
    <meta property="og:image" content="<?php echo isset($ogimage) ? $ogimage : ''; ?>"/>
    <meta property="og:site_name" content="<?php echo base_url(); ?>"/>
    <meta property="og:description" content="<?php echo isset($ogdescription) ? $ogdescription : ''; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Khoji Landing Page">
    <title>Khoji</title>
  <base href="<?php echo base_url(); ?>">
  <link href="<?php echo base_url(); ?>assets/css/lightbox.css" rel="stylesheet">
  <!--preloader-->
  <!--<link href="<?php echo base_url(); ?>assets/css/shiva_preloader.css" rel="stylesheet">-->
  <!--end preloader-->
  
  <link rel="shortcut icon" href="assets/img/logo_new.png">
  <link rel="stylesheet" href="assets_landing_page/css/plugins.css">
  <link rel="stylesheet" href="assets_landing_page/css/style.css">
  <!--<link rel="stylesheet" href="assets_landing_page/css/colors/aqua.css">-->
  <link rel="stylesheet" href="assets_landing_page/css/colors/orange.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <link rel="preload" href="assets_landing_page/css/fonts/thicccboi.css" as="style" onload="this.rel='stylesheet'">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <style>
    #loader {
        width:100px;
        height:100px;
        position:fixed;
        z-index:9999;
        visibility:visible;
        top: 30%;
        bottom: 0;
        left: 42%;
        right: 0;
    }
    
    body {
      background-color: var(--bg);
      color: var(--fg);
      transition: background-color var(--trans-dur), color var(--trans-dur);
    }

    :root {
      --hue: 18;
      --bg: hsl(var(--hue),90%,90%);
      --fg: hsl(var(--hue),90%,10%);
      --primary: hsl(var(--hue),90%,50%);
      --trans-dur: 0.3s;
      /*font-size: calc(16px + (24 - 16) * (100vw - 320px) / (2560 - 320));*/
    }
    
    .pl {
      margin: auto;
      width: 8em;
      height: 8em;
    }
    .pl__line, .pl__line-g, .pl__lines {
      animation: lineRotate 2s ease-in-out infinite;
    }
    .pl__line {
      animation-name: lineMove;
      animation-timing-function: ease-in;
    }
    .pl__line-g {
      animation-name: lineFade;
      animation-timing-function: linear;
    }
    .pl__line-g:nth-child(2), .pl__line-g:nth-child(2) .pl__line {
      animation-delay: 0.1666666667s;
    }
    .pl__line-g:nth-child(3), .pl__line-g:nth-child(3) .pl__line {
      animation-delay: 0.25s;
    }
    .pl__line-g:nth-child(4), .pl__line-g:nth-child(4) .pl__line {
      animation-delay: 0.3333333333s;
    }
    .pl__line-g:nth-child(5), .pl__line-g:nth-child(5) .pl__line {
      animation-delay: 0.4166666667s;
    }
    .pl__line-g:nth-child(6), .pl__line-g:nth-child(6) .pl__line {
      animation-delay: 0.5s;
    }
    .pl__line-g:nth-child(7), .pl__line-g:nth-child(7) .pl__line {
      animation-delay: 0.5833333333s;
    }
    .pl__line-g:nth-child(8), .pl__line-g:nth-child(8) .pl__line {
      animation-delay: 0.6666666667s;
    }
    .pl__line-g:nth-child(9), .pl__line-g:nth-child(9) .pl__line {
      animation-delay: 0.75s;
    }
    .pl__line-g:nth-child(10), .pl__line-g:nth-child(10) .pl__line {
      animation-delay: 0.8333333333s;
    }
    .pl__line-g:nth-child(11), .pl__line-g:nth-child(11) .pl__line {
      animation-delay: 0.9166666667s;
    }
    .pl__line-g:nth-child(12), .pl__line-g:nth-child(12) .pl__line {
      animation-delay: 1s;
    }
    .pl__lines {
      transform-origin: 64px 64px;
    }
    .pl__layer .pl__lines {
      stroke: #ff1800;
    }
    .pl__layer + .pl__layer .pl__lines {
      stroke: #f2520d;
    }
    
    /* Dark theme */
    @media (prefers-color-scheme: dark) {
      :root {
        --bg: hsl(var(--hue),90%,10%);
        --fg: hsl(var(--hue),90%,90%);
      }
    }
    /* Animations */
    @keyframes lineRotate {
      from {
        transform: rotate(0);
      }
      to {
        transform: rotate(0.5turn);
      }
    }
    @keyframes lineFade {
      from, 50%, to {
        opacity: 0;
      }
      10%, 45% {
        opacity: 1;
      }
    }
    @keyframes lineMove {
      from {
        stroke-dashoffset: -32;
      }
      50%, to {
        stroke-dashoffset: 32;
      }
    }
</style>
  <style>
    .form-floating label{
        font-weight:bold!important;
        color:black!important;
        font-size:0.9rem;
    }
    .form-control{
        color:black!important;
    }
    @media screen and (max-width:768px)
    {
        .form-floating label{
            font-weight:600!important;
            font-size:0.7rem;
            color:black!important;
        }   
    }
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
    .btn-style-upload{
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
    .btn-style-upload:hover {
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
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
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

.preloader {
    display:none;
  justify-content: center;
  align-items: center;
  height: 100vh;
  width: 100%;
  background: rgb(23, 22, 22);
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;
  transition: opacity 0.3s linear;
}

.reset{
    position: relative;
    color: #fff;
    font-size: 16px;
    line-height: 16px;
    font-weight: 600;
    padding: 12px 35px;
    border-radius: 25px;
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

.next:hover{
    color: #fff!important;
    background-color:crimson!important;
}

.save{
    position: relative;
    color: #fff;
    font-size: 16px;
    line-height: 16px;
    font-weight: 600;
    padding: 12px 35px;
    border-radius: 25px;
    background-color:#008000!important;
}


@keyframes gradientAnim {
  to {
    background-position: 100% top;
  }
 </style>
  <style>
    .swal2-close{
        position: relative!important;
        color: #fff!important;
        font-size: 20px!important;
        line-height: 20px!important;
        font-weight: 600!important;
        padding: 25px 25px!important;
        background-color:black!important;
    }
    
    .swal2-cancel{
        position: relative!important;
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
    .dropdown-toggle:after {
        font-size: .85rem;
        margin-right: 0rem;
    }
    .logo-img-height{
        height:4rem;
    }
    .aadhar-img-header{
height:50px;
width:50px;
}

.list-shiva{
right:11px!important;
float:left!important;
position:absolute!important;
left:auto!important;
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
<body style="visibility:hidden;font-family: 'Droid Sans';">
    <div id="loader" class="center">
        <svg class="pl" viewBox="0 0 128 128" width="128px" height="128px">
        	<defs>
        		<linearGradient id="pl-grad" x1="0" y1="0" x2="0" y2="1">
        			<stop offset="0%" stop-color="#000" />
        			<stop offset="100%" stop-color="#fff" />
        		</linearGradient>
        		<mask id="pl-mask">
        			<rect x="0" y="0" width="128" height="128" fill="url(#pl-grad)" />
        		</mask>
        	</defs>
        	<g stroke-dasharray="32 32" stroke-dashoffset="-32" stroke-linecap="round" stroke-width="6">
        		<g class="pl__layer">
        			<g class="pl__lines" stroke="hsl(48,90%,50%)">
        				<g class="pl__line-g" transform="rotate(0,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(30,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(60,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(90,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(120,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(150,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(180,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(210,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(240,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(270,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(300,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(330,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        			</g>
        		</g>
        		<g class="pl__layer" mask="url(#pl-mask)">
        			<g class="pl__lines" stroke="hsl(18,90%,50%)">
        				<g class="pl__line-g" transform="rotate(0,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(30,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(60,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(90,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(120,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(150,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(180,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(210,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(240,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(270,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(300,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        				<g class="pl__line-g" transform="rotate(330,64,64) translate(0,-28)" >
        					<polyline class="pl__line" points="64 32,64 64" />
        				</g>
        			</g>
        		</g>
        	</g>
        </svg>
    </div>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary" style="display:none;">
            <nav class="navbar navbar-expand-md classic transparent navbar-light">
                <div class="container pe-1 flex-lg-row flex-nowrap align-items-center">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="navbar-brand w-100 pb-0">
                                <img class="logo-dark logo-img-height" style="height:75px;" src="<?php echo base_url(); ?>assets/images/khoji.webp" srcset="<?php echo base_url(); ?>assets/images/khoji.webp" alt="Khoji"  />
                                <img class="logo-light logo-img-height" style="height:75px;" src="<?php echo base_url(); ?>assets/images/khoji.webp" srcset="<?php echo base_url(); ?>assets/images/khoji.webp" alt="Khoji"   />
                            </div>
                        </div>
                        <div class="col-auto d-md-none">
                            <?php 
                                if($this->session->userdata('user_login') == 'yes'){
                            ?>
                                <?php 
                                    if($_SESSION['login_type'] == 'user')
                                    {
                                ?>
                                <button class="hamburger dropdown-toggle dropdown" data-bs-toggle="dropdown"><span></span></button>
                                <ul class="py-1 dropdown-menu dropdown-menu-center" >
                                    <li>
                                        <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user-dashboard">
                                            <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                                <?php }else if($_SESSION['login_type'] == 'police'){ ?>
                                <button class="hamburger dropdown-toggle dropdown" data-bs-toggle="dropdown"><span></span></button>
                                <ul class="py-1 dropdown-menu dropdown-menu-center" >
                                    <li>
                                        <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>police">
                                            <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                                <?php }else{ 
                                    if($_SESSION['login_type'] == 'NonKyc')
                                    {
                                ?>
                                <button class="hamburger dropdown-toggle dropdown" data-bs-toggle="dropdown"><span></span></button>
                                <ul class="py-1 dropdown-menu dropdown-menu-center" >
                                    <li>
                                        <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>NonKyc">
                                            <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                                <?php }else{ 
                                    if($_SESSION['login_type'] == 'digiLocker')
                                    {
                                ?>
                                <button class="hamburger dropdown-toggle dropdown" data-bs-toggle="dropdown"><span></span></button>
                                <ul class="py-1 dropdown-menu" >
                                    <li>
                                        <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>digilocker-dashboard">
                                            <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                                <?php }else{ ?>
                                <button class="hamburger dropdown-toggle dropdown" data-bs-toggle="dropdown"><span></span></button>
                                <ul class="py-1 dropdown-menu" >
                                    <li>
                                        <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>ngo">
                                            <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                                <?php } } ?>
                            <?php } } ?>
                        </div>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto px-3 d-flex flex-column h-100">
                            <ul class="navbar-nav align-items-center">
                                <?php 
                                    if(!$this->session->userdata('user_login') == 'yes'){
                                    ?>
                                <li class="nav-item dropdown me-2 mb-2 mb-md-0 w-100">
                                    <a class="nav-link border border-1 p-1" href="<?php echo base_url();?>" >
                                    <i style="font-size: 1rem;" class="fa fa-lg fa-home ps-0 pe-2 text-center" aria-hidden="true"></i>
                                    Home </a>
                                </li>
                                <li class="nav-item dropdown me-2 mb-2 mb-md-0 w-100">
                                    <a class="nav-link dropdown-toggle border border-1 p-1" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i style="font-size: 1rem;" class="fa fa-lg fa-search ps-0 pe-2 text-center" aria-hidden="true"></i>
                                    Search &nbsp;&nbsp;</a>
                                    <ul class="dropdown-menu">
                                       
                                        <li class="nav-item"><a class="dropdown-item text-primary" href="<?php echo base_url(); ?>check-person-face">Search Person By Face Photo</a></li>
                                        <li class="nav-item"><a class="dropdown-item text-success" href="<?php echo base_url(); ?>check-person-details">Search Person By Identity</a></li>
                                        <li class="nav-item"><a class="dropdown-item text-warning" href="<?php echo base_url(); ?>login?clickedOn=missing">Search Missing Person By Filter</a></li>
                                        <!--<li class="nav-item"><a class="dropdown-item text-primary" href="<?php echo base_url(); ?>landing/checkPersonFace">Search Person By Face Photo</a></li>-->
                                        <li class="nav-item"><a class="dropdown-item text-danger" href="<?php echo base_url(); ?>login?clickedOn=unknown">Search Unknown Person By Filter</a></li>
                                        <li class="nav-item"><a class="dropdown-item text-sky" href="<?php echo base_url(); ?>check-vehicle-details">Search Vehicle Details</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-2 mb-2 mb-md-0 w-100">
                                    <a class="nav-link dropdown-toggle border border-1 p-1" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i style="font-size: 1rem;" class="fa fa-lg fa-user-plus ps-0 pe-2 text-center" aria-hidden="true"></i>
                                    Sign Up &nbsp;&nbsp;</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="<?php echo base_url(); ?>complete-your-kyc">General User</a></li>
                                        <li class="nav-item"><a class="dropdown-item text-warning" href="<?php echo base_url(); ?>commercial-register">Commercial (Firm)</a></li>
                                        <li class="nav-item"><a class="dropdown-item text-success" href="javascript:void(0);">Social NGO</a></li>
                                        <li class="nav-item"><a class="dropdown-item text-danger" href="javascript:void(0);">Police Department</a></li>
                                        
                                      
                                    </ul>
                                </li>
                                <li class="nav-item dropdown w-100">
                                    <a class="nav-link dropdown-toggle border border-1 p-1" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i style="font-size: 1rem;" class="fa fa-lg fa-user ps-0 pe-2 text-center" aria-hidden="true"></i>
                                    Login &nbsp;&nbsp;</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="<?php echo base_url(); ?>login">General User</a></li>
                                        <li class="nav-item"><a class="dropdown-item text-warning" href="<?php echo base_url(); ?>hotel">Commercial (Firm)</a></li>
                                        <li class="nav-item"><a class="dropdown-item text-success" href="<?php echo base_url(); ?>social-login">Social NGO</a></li>
                                        <li class="nav-item"><a class="dropdown-item text-danger" href="<?php echo base_url(); ?>police-thana-login">Police Department</a></li>
                                    </ul>
                                </li>
                                <?php }else{ ?>
                                <li class="nav-item dropdown pe-3">
                                    <?php 
                                        if($_SESSION['login_type'] == 'user')
                                        {
                                            $getUserDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array();
                                    ?>
                                    <span class="nav-link nav-profile d-none d-md-flex align-items-center pe-0" data-bs-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?><?php echo $getUserDetail[0]['aadharphoto']; ?>" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
                                    </span><!-- End Profile Iamge Icon -->
                                    <ul class="py-1 dropdown-menu dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                        <li>
                                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user-dashboard">
                                                <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php }else if($_SESSION['login_type'] == 'police'){ 
                                    ?>    
                                    <span class="nav-link nav-profile d-none d-md-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?>assets/img/criminal.png" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['thanaName']; ?></span>
                                    </span><!-- End Profile Iamge Icon -->
                                    <ul class="py-1 dropdown-menu dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                        <li>
                                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>police">
                                                <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php }else if($_SESSION['login_type'] == 'ngo'){ 
                                        $getNgoDetail = $this->db->query('select * from ngo where Id='.$_SESSION['ngo_id'])->result_array();
                                    ?>
                                    <span class="nav-link nav-profile d-none d-md-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?><?php echo $getNgoDetail[0]['aadharphoto']; ?>" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
                                    </span><!-- End Profile Iamge Icon -->
                                    <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                        <li>
                                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>ngo">
                                                <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php }else{ 
                                        if($_SESSION['login_type'] == 'NonKyc')
                                        {
                                    ?>
                                    <span class="nav-link nav-profile d-none d-md-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                        <?php 
                                            if(isset($_SESSION['gender']))
                                            {
                                                if($_SESSION['gender'] == 'Male')
                                                {
                                        ?>
                                        <img src="<?php echo base_url(); ?>assets/images/maleColor.avif" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <?php }else{ ?>
                                        <img src="<?php echo base_url(); ?>assets/images/femaleColor.avif" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <?php } }else{ ?>
                                        <img src="<?php echo base_url(); ?>assets/img/find_mobile.jpg" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <?php } ?>
                                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo substr_replace($_SESSION['landingMob'],'XXXXXXX',0,7); ?></span>
                                    </span><!-- End Profile Iamge Icon -->
                                    <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva">
                                        <li>
                                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>NonKyc">
                                                <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php }else{ 
                                        if($_SESSION['login_type'] == 'digiLocker')
                                        {
                                            $getUserDetail = $this->db->query('select * from digilockerUser where Id='.$_SESSION['user_id'])->result_array();
                                    ?>
                                    <span class="nav-link nav-profile d-none d-md-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?><?= $getUserDetail[0]['aadharPhoto']; ?>" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
                                    </span><!-- End Profile Iamge Icon -->
                                    <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva">
                                        <li>
                                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>digilocker-dashboard">
                                                <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php }else{ ?>
                                    <span class="nav-link nav-profile d-none d-md-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?>assets/img/hotel.png" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['name']; ?></span>
                                    </span><!-- End Profile Iamge Icon -->
                                    <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva">
                                        <li>
                                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>hotel">
                                                <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php } ?>
                                    <?php } } } ?>
                                </li>
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes')
                                    {
                                ?>
                                <li class="nav-item d-md-none d-block">
                                    <?php 
                                        if($_SESSION['login_type'] == 'user')
                                        {
                                        ?>
                                    <a href="<?php echo base_url(); ?>user-dashboard" class="nav-link" ><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</a>
                                    <?php }else if($_SESSION['login_type'] == 'police')
                                        { 
                                        ?>
                                    <a href="<?php echo base_url(); ?>police" class="nav-link"><i class="fa fa-arrow-circle-left"></i> Go to Dashboard</a>
                                    <?php }else{ 
                                        if($_SESSION['login_type'] == 'NonKyc')
                                        {
                                    ?>
                                    <a href="<?php echo base_url(); ?>NonKyc" class="nav-link"><i class="fa fa-arrow-circle-left"></i> Go to Dashboard</a>
                                    <?php }else{ 
                                        if($_SESSION['login_type'] == 'digiLocker')
                                        {
                                    ?>
                                    <a href="<?php echo base_url(); ?>digilocker-dashboard" class="nav-link"><i class="fa fa-arrow-circle-left"></i> Go to Dashboard</a>
                                    <?php }else{ ?>
                                    <a href="<?php echo base_url(); ?>ngo" class="nav-link"><i class="fa fa-arrow-circle-left"></i> Go to Dashboard</a>
                                    <?php } } ?>
                                </li>
                                <?php } }  ?>
                            </ul>
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other ms-md-4">
                        <ul class="navbar-nav flex-row align-items-center">
                            <?php 
                                if(!$this->session->userdata('user_login') == 'yes'){
                                ?>
                            <li class="nav-item d-md-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                          
                            <?php 
                                if(isset($_SESSION['landingMob']))
                                {
                                ?>
                            <li class="nav-item dropdown pe-3">
                                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <?php 
                                        if(isset($_SESSION['gender']))
                                        {
                                            if($_SESSION['gender'] == 'Male')
                                            {
                                    ?>
                                    <img src="<?php echo base_url(); ?>assets/images/maleColor.avif" alt="Profile" class="rounded-circle aadhar-img-header">
                                    <?php }else{ ?>
                                    <img src="<?php echo base_url(); ?>assets/images/femaleColor.avif" alt="Profile" class="rounded-circle aadhar-img-header">
                                    <?php } }else{ ?>
                                    <img src="<?php echo base_url(); ?>assets/img/find_mobile.jpg" alt="Profile" class="rounded-circle aadhar-img-header">
                                    <?php } ?>
                                <span class="d-none d-md-none dropdown-toggle ps-2"><?php echo substr_replace($_SESSION['landingMob'],'XXXXXXX',0,7); ?></span>
                                </a><!-- End Profile Iamge Icon -->
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile list-shiva" style="min-width:max-content;">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>landing/removeMobile">
                                        <span style="font-size:1rem;font-family: serif;">Welcome, <?php echo substr_replace($_SESSION['landingMob'],'XXXXXXX',0,7); ?></span>
                                        </a>
                                        <hr class="my-0">
                                        <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>landing/removeMobile">
                                        <span style="font-weight: 600;font-family: serif;">Guest Logout</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Profile Dropdown Items -->
                            </li>
                            <!-- End Profile Nav -->
                            <?php } ?>
                            <?php }else{ ?>
                            <li class="nav-item d-md-none">
                                <?php 
                                    if(!$this->session->userdata('user_login') == 'yes'){
                                ?>
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                                <?php } ?>
                                <li class="nav-item dropdown pe-3">
                                    <?php 
                                        if($_SESSION['login_type'] == 'user')
                                        {
                                            $getUserDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array();
                                    ?>
                                    <span class="nav-link nav-profile d-flex d-md-none align-items-center pe-0" data-bs-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?><?php echo $getUserDetail[0]['aadharphoto']; ?>" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
                                    </span><!-- End Profile Iamge Icon -->
                                    <ul class="py-1 dropdown-menu dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                        <li>
                                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>user-dashboard">
                                                <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php }else if($_SESSION['login_type'] == 'police'){ 
                                    ?>    
                                    <span class="nav-link nav-profile d-flex d-md-none align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?>assets/img/criminal.png" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['thanaName']; ?></span>
                                    </span><!-- End Profile Iamge Icon -->
                                    <ul class="py-1 dropdown-menu dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                        <li>
                                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>police">
                                                <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php }else if($_SESSION['login_type'] == 'ngo'){ 
                                        $getNgoDetail = $this->db->query('select * from ngo where Id='.$_SESSION['ngo_id'])->result_array();
                                    ?>
                                    <span class="nav-link nav-profile d-flex d-md-none align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?><?php echo $getNgoDetail[0]['aadharphoto']; ?>" alt="Profile"  class="rounded-circle aadhar-img-header">
                                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
                                    </span><!-- End Profile Iamge Icon -->
                                    <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                        <li>
                                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>ngo">
                                                <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php }else{ 
                                        if($_SESSION['login_type'] == 'NonKyc')
                                        {
                                    ?>
                                    <span class="nav-link nav-profile d-flex d-md-none align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                        <?php 
                                            if(isset($_SESSION['gender']))
                                            {
                                                if($_SESSION['gender'] == 'Male')
                                                {
                                        ?>
                                        <img src="<?php echo base_url(); ?>assets/images/maleColor.avif" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <?php }else{ ?>
                                        <img src="<?php echo base_url(); ?>assets/images/femaleColor.avif" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <?php } }else{ ?>
                                        <img src="<?php echo base_url(); ?>assets/img/find_mobile.jpg" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <?php } ?>
                                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo substr_replace($_SESSION['landingMob'],'XXXXXXX',0,7); ?></span>
                                    </span><!-- End Profile Iamge Icon -->
                                    <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                        <li>
                                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>NonKyc">
                                                <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php }else{ 
                                        if($_SESSION['login_type'] == 'digiLocker')
                                        {
                                            $getUserDetail = $this->db->query('select * from digilockerUser where Id='.$_SESSION['user_id'])->result_array();
                                    ?>
                                    <span class="nav-link nav-profile d-flex d-md-none align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?><?= $getUserDetail[0]['aadharPhoto']; ?>" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
                                    </span><!-- End Profile Iamge Icon -->
                                    <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                        <li>
                                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>digilocker-dashboard">
                                                <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php }else{ ?>
                                    <span class="nav-link nav-profile d-flex d-md-none align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?>assets/img/hotel.png" alt="Profile" class="rounded-circle aadhar-img-header">
                                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['name']; ?></span>
                                    </span><!-- End Profile Iamge Icon -->
                                    <ul class="dropdown-menu py-1 dropdown-menu-end dropdown-menu-arrow profile list-shiva" >
                                        <li>
                                            <a class="dropdown-item px-0 justify-content-center d-flex align-items-center" href="<?php echo base_url(); ?>hotel">
                                                <span style="font-weight: 600;font-family: serif;"><i class="fa fa-arrow-circle-left ps-2 pe-2 text-center fa-lg"></i> Go to Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php } ?>
                                    <?php } } ?>
                                </li>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php 
                    if($page_name == 'home')
                    {
                        if(!$this->session->userdata('user_login') == 'yes'){
                ?>
                <div class="row d-md-none mb-2 pe-1 ms-auto me-0">
                    <div class="col-sm-12 pe-0">
                        <a href="<?php echo base_url(); ?>complete-your-kyc" class="btn btn-success btn-style-green-no-border">Sign Up For Free</a>
                    </div>
                </div>
                <?php } } ?>
            </nav>
            <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
                <div class="offcanvas-header">
                    <h3 class="text-white fs-30 mb-0">Khoji</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pb-6">
                    <div class="widget mb-8">
                        <h4 class="widget-title text-white mb-3">Find More</h4>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo base_url(); ?>check-person-details">Search Person</a></li>
                            <li><a href="<?php echo base_url(); ?>check-vehicle-details">Search Vehicle</a></li>
                            <li><a href="javascript:void(0);">Search Mobile</a></li>
                            <!-- <li><a href="#">Contact Us</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </header>