<style>
    #terms {
        width: 1.2em!important;
        height: 1.2em!important;
    }
    
    .dot-typing {
        position:relative;
        left:-9999px;
      display: inline-block;
      vertical-align: bottom;
      -webkit-animation: dot-typing 1.5s infinite linear;
      animation: dot-typing 1.5s infinite linear;
      content: "\2026";
      /* ascii code for the ellipsis character */
      width: 10px;
      font-weight:bolder;
      height: 10px;
      border-radius: 5px;
      background-color: black;
      color: black;
      animation: dot-typing 1s infinite linear;
    }
    
    @keyframes dot-typing {
      0% {
        box-shadow: 9984px 0 0 0 black, 9999px 0 0 0 black, 10014px 0 0 0 black;
      }
      16.667% {
        box-shadow: 9984px -10px 0 0 black, 9999px 0 0 0 black, 10014px 0 0 0 black;
      }
      33.333% {
        box-shadow: 9984px 0 0 0 black, 9999px 0 0 0 black, 10014px 0 0 0 black;
      }
      50% {
        box-shadow: 9984px 0 0 0 black, 9999px -10px 0 0 black, 10014px 0 0 0 black;
      }
      66.667% {
        box-shadow: 9984px 0 0 0 black, 9999px 0 0 0 black, 10014px 0 0 0 black;
      }
      83.333% {
        box-shadow: 9984px 0 0 0 black, 9999px 0 0 0 black, 10014px -10px 0 0 black;
      }
      100% {
        box-shadow: 9984px 0 0 0 black, 9999px 0 0 0 black, 10014px 0 0 0 black;
      }
    }

    <?php 
        if(current_url() == base_url().'user/newUnknownFaceMatchResults')
        {
    ?>
    #loader {
        display:flex;
        align-items:center;
        justify-content:center;
        height:80vh;
        position:fixed;
        z-index:9999;
        visibility:visible;
        width:100%;
    }
    <?php }else{ ?>
    #loader {
        display:flex;
        align-items:center;
        justify-content:center;
        height:100vh;
        position:fixed;
        z-index:9999;
        visibility:visible;
        width:100%;
    }
    <?php } ?>
    
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
.line, .box {
  transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.line {
  height: 8px;
  width: 45px;
  background: #fff;
  margin: 5px auto;
}
.box {
    width: 5px;
    height: 5px;
    background: #fff;
    margin: 1px 3px;
    display: inline-block;
}
.circle {
  width: 12px;
  height: 12px;
  margin: 3px;
  background: #fff;
  border-radius: 50%;
  display: block;
}
.menu__wrapper {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  flex: 1;
}
.menu__wrapper > div {
    width: 40px;
    height: 30px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
.menu__wrapper > span {
    display: inline-block;
    text-align: center;
    line-height: 1.2;
    margin-top: auto;
  }
.menu__wrapper > div:hover, .menu__wrapper > div:focus {
  outline: none;
}

.menu__item--bento:hover .box:nth-child(2), .menu__item--bento:focus .box:nth-child(2), .menu__item--bento:hover .box:nth-child(4), .menu__item--bento:focus .box:nth-child(4), .menu__item--bento:hover .box:nth-child(6), .menu__item--bento:focus .box:nth-child(6), .menu__item--bento:hover .box:nth-child(8), .menu__item--bento:focus .box:nth-child(8) {
  opacity: 0;
}

    .floatingButtonWrap {
    display: block;
    position: fixed;
    bottom: 60px;
    right: 60px;
    z-index: 999999999;
}

.floatingButtonInner {
    position: relative;
}

.floatingButton {
    display: block;
    width: 75px;
    height: 75px;
    text-align: center;
    background: -webkit-linear-gradient(45deg, #3935dc, #353bdc);
    background: -o-linear-gradient(45deg, #3935dc, #353bdc);
    background: linear-gradient(45deg, #3935dc, #353bdc);
    color: #fff;
    line-height: 83px;
    position: absolute;
    border-radius: 50% 50%;
    bottom: 25px;
    right: -35px;
    border: 5px solid #b2bedc;
    /* opacity: 0.3; */
    opacity: 1;
    transition: all 0.4s;
}

.floatingButton .fa {
    font-size: 15px !important;
}

.floatingButton.open,
.floatingButton:hover,
.floatingButton:focus,
.floatingButton:active {
    opacity: 1;
    color: #fff;
}


.floatingButton .fa {
    transform: rotate(0deg);
    transition: all 0.4s;
}

.floatingButton.open .fa {
    transform: rotate(270deg);
}

.floatingMenu {
    position: absolute;
    bottom: 60px;
    right: 0px;
    /* width: 200px; */
    display: none;
}

.floatingMenu li {
    width: 100%;
    float: right;
    list-style: none;
    text-align: right;
    margin-bottom: 5px;
}

.floatingMenu li a {
    padding: 8px 15px;
    display: inline-block;
    background: #ccd7f5;
    color: #6077b0;
    border-radius: 5px;
    overflow: hidden;
    white-space: nowrap;
    transition: all 0.4s;
    /* -webkit-box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.22);
    box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.22); */
    -webkit-box-shadow: 1px 3px 5px rgba(211, 224, 255, 0.5);
    box-shadow: 1px 3px 5px rgba(211, 224, 255, 0.5);
}

.floatingMenu li a:hover {
    margin-right: 10px;
    text-decoration: none;
}
</style>
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
        background:black!important;
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
    position: relative;
    color: #fff;
    font-size: 16px;
    line-height: 16px;
    font-weight: 600;
    padding: 12px 35px;
    border-radius: 25px;
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
    <?php 
        if($this->uri->segment(1) != 'user-dashboard')
        {
    ?>
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
<?php }else{ ?>
div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
    border: 0;
    border-radius: .25em;
    background: initial;
    background-color: #7066e0!important;
    color: #fff;
    font-size: 1em;
}
<?php } ?>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url(); ?>" class=" d-flex align-items-center">
        <img src="<?php echo base_url(); ?>assets/images/khoji.webp" alt="" style="height:75px;width:125px">
        <span class="d-none d-lg-block"></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="<?= base_url(); ?>user/view_all_notifications">
            <i class="bi bi-bell"></i>
            <?php 
                $getCount = $this->db->query('select * from Notification where status="Active" and userId='.$_SESSION['user_id'])->result_array();
                $getSearchCount = $this->db->query('select * from searchnotification where status="Active" and complainantUserType="user" and complainantUserId='.$_SESSION['user_id'].' order by Id desc')->result_array();
                $overallCount = count($getSearchCount) + count($getCount);
                if($overallCount >= 100)
                {
                    $overallCount = '99+';
                }
            ?>
            <span class="badge bg-primary badge-number"><?= $overallCount; ?></span>
          </a><!-- End Notification Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" style="max-height:300px;overflow:auto;">
            <li class="dropdown-header">
              You have <?= ($overallCount == 0 ? 'no' : ($overallCount)); ?> new notifications
              <a href="<?= base_url(); ?>user/view_all_notifications"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <?php 
                function time_elapsed_string($datetime, $full = false) {
                    $now = new DateTime;
                    $ago = new DateTime($datetime);
                    $diff = $now->diff($ago);
                
                    $diff->w = floor($diff->d / 7);
                    $diff->d -= $diff->w * 7;
                
                    $string = array(
                        'y' => 'year',
                        'm' => 'month',
                        'w' => 'week',
                        'd' => 'day',
                        'h' => 'hour',
                        'i' => 'minute',
                        's' => 'second',
                    );
                    foreach ($string as $k => &$v) {
                        if ($diff->$k) {
                            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                        } else {
                            unset($string[$k]);
                        }
                    }
                
                    if (!$full) $string = array_slice($string, 0, 1);
                    return $string ? implode(', ', $string) . ' ago' : 'just now';
                }
                if(count($getCount) > 0)
                {
                    foreach($getCount as $k=>$v)
                    {
                        $getMissingDetail = $this->db->query('select * from missingperson where Id='.$v['foundPerson'])->result_array();
                        $getHotelDetail = $this->db->query('select * from hotel where hotel_id='.$v['hotelId'])->result_array();
            ?>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li class="notification-item" style="cursor:pointer;" onclick="openNotification('old',<?= $v['Id']; ?>)">
              <i class="bi bi-exclamation-circle text-danger"></i>
              <div>
                <span><b class="text-capitalize"><?= $v['personType']; ?> Person - </b></span><b><span class="text-danger"><?= $getMissingDetail[0]['missingname']; ?></span><span> is found active in </span><span class="text-danger"><?= $getHotelDetail[0]['name']; ?></span></b>
                <p class="text-primary text-decoration-underline">Click here to view complete details</p>
                <p><?= time_elapsed_string($v['dateCreated']); ?></p>
              </div>
            </li>
            <?php } } ?>
            <?php 
                if(count($getSearchCount) > 0)
                {
                    foreach($getSearchCount as $k=>$v)
                    {
                        if($v['searchType'] == 'Lapata')
                        {
            ?>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li class="notification-item" style="cursor:pointer;" onclick="openNotification('search',<?= $v['Id']; ?>)">
              <i class="bi bi-exclamation-circle text-danger"></i>
              <div>
                  <?php 
                    $split = explode(' ',$_SESSION['aadharName']);
                  ?>
                <span><b class="text-capitalize text-danger" style="font-weight:600;">MATCH FOUND ALERT!!!</b><b style="font-weight:600;"> DEAR <?= strtoupper($split[0]); ?>,  PLEASE CHECK OUT THE NOTIFICATION</b></span>
                <p class="text-primary text-decoration-underline">View More</p>
                <p><?= time_elapsed_string($v['dateCreated']); ?></p>
              </div>
            </li>
            <?php }else{ ?>
            <li class="notification-item" style="cursor:pointer;" onclick="openNotification('search',<?= $v['Id']; ?>)">
              <i class="bi bi-exclamation-circle text-danger"></i>
              <div>
                  <?php 
                    $split = explode(' ',$_SESSION['aadharName']);
                  ?>
                <span><b class="text-capitalize text-danger" style="font-weight:600;">MATCH FOUND ALERT!!!</b><b style="font-weight:600;"> DEAR <?= strtoupper($split[0]); ?>,  PLEASE CHECK OUT THE NOTIFICATION</b></span>
                <p class="text-primary text-decoration-underline">View More</p>
                <p><?= time_elapsed_string($v['dateCreated']); ?></p>
              </div>
            </li>
            <?php } } } ?>
            <?php 
                if(($overallCount) > 0)
                {
            ?>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="<?= base_url(); ?>user/view_all_notifications">Show all notifications</a>
            </li>
            <?php } ?>

          </ul><!-- End Notification Dropdown Items -->

        </li>
        
        <li class="nav-item dropdown pe-3">
          <?php 
            $getUserDetail = $this->db->query('select * from user where uid='.$_SESSION['user_id'])->result_array();
          ?>
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url(); ?><?php echo $getUserDetail[0]['aadharphoto'] ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['aadharName']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['aadharName']; ?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <?php 
                if(isset($title) && $title == 'Profile')
                {
            ?>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>user-dashboard">
                <i class="fa fa-arrow-circle-left"></i>
                <span>Go to Dashboard</span>
              </a>
            </li>
            <?php         
                }else{
            ?>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>user/profile">
                <i class="fa fa-user"></i>
                <span>General Settings</span>
              </a>
            </li>
            <?php } ?>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>user/handover">
                <i class="fa fa-rupee-sign"></i>
                <span>Handover</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>user/view_all_notifications">
                <i class="fa fa-bell"></i>
                <span>All Notifications</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>user/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  
  <div class="preloader">
    
    <svg width="200" height="200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-ripple" style="background:0 0"><circle cx="50" cy="50" r="4.719" fill="none" stroke="#1d3f72" stroke-width="2"><animate attributeName="r" calcMode="spline" values="0;40" keyTimes="0;1" dur="3" keySplines="0 0.2 0.8 1" begin="-1.5s" repeatCount="indefinite"/><animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="3" keySplines="0.2 0 0.8 1" begin="-1.5s" repeatCount="indefinite"/></circle><circle cx="50" cy="50" r="27.591" fill="none" stroke="#5699d2" stroke-width="2"><animate attributeName="r" calcMode="spline" values="0;40" keyTimes="0;1" dur="3" keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite"/><animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="3" keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite"/></circle></svg>
    
  </div>
  <script>
        function openNotification(type,Id)
        {
            if(type == 'search')
            {
                location.href="<?php echo base_url(); ?>user/openSearchNotification/"+Id;      
            }else{
               location.href="<?php echo base_url(); ?>user/openNotification/"+Id;
            }
        }
  </script>