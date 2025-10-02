
<head>
    <script>
        let baseurl = '<?php echo base_url(); ?>';
        let hash = '<?php echo $this->security->get_csrf_hash(); ?>';
    </script>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo isset($metadescription) ? $metadescription : 'Khoji give an alert when missing person was found.'; ?>"/>
    <meta name="keywords" content="<?php echo isset($keywords) ? $keywords : 'Khoji'; ?>"/>
    <meta property="og:locale" content="en_us"/>
    <meta property="og:title" content="<?php echo isset($ogtitle) ? $ogtitle : ''; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo isset($ogurl) ? $ogurl : ''; ?>"/>
    <meta property="fb:app_id" content="689620829908421"/>
    <meta property="og:image" content="<?php echo isset($ogimage) ? $ogimage : ''; ?>"/>
    <meta property="og:site_name" content="<?php echo base_url(); ?>"/>
    <meta property="og:description" content="<?php echo isset($ogdescription) ? $ogdescription : ''; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Khoji">
    <title>Khoji</title>
  <base href="<?php echo base_url(); ?>">
  
  <link href="<?php echo base_url(); ?>assets/css/lightbox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/newstyle.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/shiva_sir_responsive_landing.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/images/khoji.webp">
  <link rel="stylesheet" href="assets_landing_page/css/plugins.css">
  <link rel="stylesheet" href="assets_landing_page/css/style.css">
  <link rel="stylesheet" href="assets_landing_page/css/colors/orange.css">

    <link rel="stylesheet" href="assets_landing_page/css/other_landing_page.css">


  <link href="<?php echo base_url(); ?>assets_landing_page/inc-head/toastr.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="<?php echo base_url(); ?>assets_landing_page/inc-head/jquery.min.js"></script>

  <link rel="preload" href="assets_landing_page/css/fonts/thicccboi.css" as="style" onload="this.rel='stylesheet'">
  <link href="<?php echo base_url(); ?>assets_landing_page/inc-head/header-style.css" rel="stylesheet">
  
  <!-- for google fonts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.1/lottie.min.js"></script>

  <style>
.display-6{font-size:1.2rem!important}.fs-12{font-size:.85rem!important}.lead.fs-lg{font-size:17px!important;line-height:1.2}.ln-h-1-2 p{line-height:1.4!important;text-align:justify;font-size:.7rem}a.btn.btn-lg.btn-outline-white.rounded-pill{font-size:12px!important;padding:10px;margin-top:-30px}.swiper-hero,.swiper-hero .swiper-slide{height:495px!important}.swiper-slide.bg-overlay-400:before{background:rgb(131 135 140 / 0%)}.display-3{font-size:20px;line-height:1}.post-header p{line-height:1.3;font-weight:unset}.card-body.h-100vh{height:33vh;overflow:hidden}iframe{width:100%;height:200px!important}.plyr__video-wrapper{height:180px}.plyr__poster{background-size:cover;background-position:center center;background-repeat:no-repeat}marquee img{width:200px;height:fit-content;margin-right:20px}.ln-h-1-2 .card-body{height:20rem!important}.service-card:hover{box-shadow:0 6px 12px rgba(0,0,0,.2)}.service-card.active{border:2px solid red}a.more.hover{display:none}@media (max-width:767px){.ln-h-1-2 .card-body{height:18rem!important}.fs-20{font-size:20px!important}.fs-11{font-size:11px!important}.fs-14{font-size:14px!important}.fs-12{font-size:12px!important}.display-3{font-size:15px;line-height:1}.display-6{font-size:17px!important}.swiper-hero,.swiper-hero .swiper-slide{height:180px!important}.swiper-hero .swiper-slide{background-size:contain;background-position:center center;background-repeat:no-repeat}.swiper-slide.swiper-slide-active{width:380px;margin-right:30px}iframe{width:100%;height:205px}.card-body.h-100vh{height:33vh;overflow:hidden}}.new_font_style{font-family:system-ui!important;font-size:.75rem!important}.theme_bk_color{background-image: linear-gradient(93deg, #061aa3, #d90f0f) !important;}.gradient-theme{background-image: linear-gradient(43deg, #0026ff 0, #ff1e0e 46%, #3F51B5 100%);
}
 .app_bar_bottom
  {
    display: none !important;
  }

  .nav-link,.nav-item{
    display: block;
    width: 100%;
  }
  
  @media screen and (max-width: 768px)
  {
    .app_bar_bottom {
        position: fixed;
        width: 100%;
        bottom: 0;
        z-index: 10000;
        display: block !important;
    }
        button.col-12.bg-get-st {
        background: #45a69a;
        padding: 6px;
        font-size: 25px;
        border-radius: 4px 4px 0px 0px;
        color: white;
        font-weight: 500;
    }
   
  }
  body {
font-family:  math,sans-serif !important;

}
p{
    font-size: 0.9rem!important;
    line-height: normal;
      
}

 .input_f {font-weight:bold;}
 .slider_txt_color{color: #d92123;}
.price-card {
            max-width: 400px;
            margin: auto;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .nav-tabs .nav-link {
/*            flex: 1;*/
            text-align: center;
            color: black;
        }
        .nav-tabs .nav-link.active {
            background-color: darkred;
/*background-image: linear-gradient(93deg, #061aa3, #d90f0f) !important;*/
            color: #fff;
            font-weight: bold;
            padding: 0!important;
        }
        .tab-content {
            padding: 20px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        ul li img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }


  </style>

<style type="text/css">
 @media screen and (max-width: 768px)
  {
    .wh{
    width: 10.6rem;
/*    height: 10.6rem;*/
  }
      .wh1{
    width: 12.6rem;
/*    height: 7.6rem;*/
  }
  .wh2{
   width: 15.6rem;
    height: 12.0rem;
  }
  }
  @media screen and (min-width: 769px)
  {
    .wh{
    width: 10.6rem;
/*    height: 10.6rem;*/
  }

  .wh1{
    width: 12.6rem;
/*    height: 12.6rem;*/
  }
  }
  .hindi_divi{
    p{
        font-size: 0.8rem!important
    }
  }
/*hilight start*/
   
        .highlight {
            border: 2px solid darkred;
        }
/*        hilieght end*/
</style>

  
</head>

