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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url(); ?>police" class=" d-flex align-items-center">
        <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" style="height:145px;width:100%">
        <span class="d-none d-lg-block"></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        
        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-bell"></i>
            <?php 
                $getCount = $this->db->query('select * from Notification where status="Active" and personType="wanted" and userId='.$_SESSION['user_id'])->result_array();
            ?>
            <span class="badge bg-primary badge-number"><?= count($getCount); ?></span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" style="max-height:300px;overflow:auto;">
            <li class="dropdown-header">
              You have <?= (count($getCount) == 0 ? 'no' : count($getCount)); ?> new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <?php 
                if(count($getCount) > 0)
                {
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
                    foreach($getCount as $k=>$v)
                    {
                        $getWantedDetail = $this->db->query('select * from criminals where Id='.$v['foundPerson'])->result_array();
                        $getHotelDetail = $this->db->query('select * from hotel where hotel_id='.$v['hotelId'])->result_array();
            ?>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li class="notification-item" style="cursor:pointer;" onclick="openNotification(<?= $v['Id']; ?>)">
              <i class="bi bi-exclamation-circle text-danger"></i>
              <div>
                <span><b class="text-capitalize"><?= $v['personType']; ?> Person - </b></span><b><span class="text-danger"><?= $getWantedDetail[0]['personName']; ?></span><span> is found active in </span><span class="text-danger"><?= $getHotelDetail[0]['name']; ?></span></b>
                <p class="text-primary text-decoration-underline">Click here to view complete details</p>
                <p><?= time_elapsed_string($v['dateCreated']); ?></p>
              </div>
            </li>
            <?php } } ?>
            <?php 
                if(count($getCount) > 0)
                {
            ?>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>
            <?php } ?>

          </ul><!-- End Notification Dropdown Items -->

        </li>
        
        <li class="nav-item d-none d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">
          <?php 
            $getUserDetail = $this->db->query('select * from police where police_id='.$_SESSION['police_id'])->result_array();
          ?>
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url(); ?>assets/img/criminal.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['thanaName']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['thanaName']; ?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>police/profile">
                <i class="fa fa-user"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>police/logout">
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
      function openNotification(Id)
      {
          location.href="<?php echo base_url(); ?>police/openNotification/"+Id;
      }
  </script>