<style>
    .section-50 {
        padding: 10px 0;
    }
    
    .m-b-50 {
        margin-bottom: 50px;
    }
    
    .dark-link {
        color: #333;
    }
    
    .heading-line {
        position: relative;
        padding-bottom: 5px;
    }
    
    .heading-line:after {
        content: "";
        height: 4px;
        width: 75px;
        background-color: #29B6F6;
        position: absolute;
        bottom: 0;
        left: 0;
    }
    
    .notification-ui_dd-content {
        margin-bottom: 30px;
    }
    
    .notification-list {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 15px;
        margin-bottom: 7px;
        background: #fff;
        -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
    }
    
    .notification-list--unread {
        border-left: 2px solid #29B6F6;
    }
    
    .notification-list .notification-list_content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
    
    .notification-list .notification-list_content .notification-list_img img {
        height: 48px;
        width: 48px;
        border-radius: 50px;
        margin-right: 20px;
    }
    
    .notification-list .notification-list_content .notification-list_detail p {
        margin-bottom: 5px;
        line-height: 1.2;
    }
    
    .notification-list .notification-list_feature-img img {
        height: 48px;
        width: 48px;
        border-radius: 5px;
        margin-left: 20px;
    }
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
      font-weight: bold!important;
      color: black!important;
    }
    @media screen and (min-width:525px)
    {
        p{
            margin-bottom: 0;
        }
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Notifications History</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Notifications History</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section-50">
        <div class="container-fluid px-0">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12 col-md-8 px-1">
                    <div class="notification-ui_dd-content">
                        <?php 
                            if((count($notification) + count($searchnotification)) > 0)
                            {
                        ?>
                        <?php 
                            if(count($notification) > 0)
                            {
                                foreach($notification as $k=>$v)
                                {
                                    $getFoundPersonDetail = $this->db->query('select * from missingperson where Id='.$v['foundPerson'])->result_array();
                                    $getHotelDetail = $this->db->query('select * from hotel where hotel_id='.$v['hotelId'])->result_array();
                        ?>
                        <div class="notification-list <?= ($v['status'] == 'Active' ? 'notification-list--unread' : ''); ?>" style="cursor:pointer;" onclick="openNotification('old',<?= $v['Id']; ?>)">
                            <div class="notification-list_content align-items-center">
                                <div class="notification-list_img">
                                    <img src="<?= base_url(); ?><?= $getUserDetail[0]['aadharphoto']; ?>" alt="user">
                                </div>
                                <div class="notification-list_detail">
                                    <p><b><span class="text-danger"><?= $getFoundPersonDetail[0]['missingname']; ?></span><span> is found active in </span><span class="text-danger"><?= $getHotelDetail[0]['name']; ?></b></p>
                                    <p class="text-muted"><?= $v['message']; ?></p>
                                    <p class="text-muted"><small><?= time_elapsed_string($v['dateCreated']); ?></small></p>
                                </div>
                            </div>
                            <div class="notification-list_feature-img align-items-center d-flex">
                                <img src="<?= base_url(); ?><?= $getFoundPersonDetail[0]['facematchphoto']; ?>" alt="user">
                            </div>
                        </div>
                        <?php } } ?>
                        <?php 
                            if(count($searchnotification) > 0)
                            {
                                foreach($searchnotification as $k=>$v)
                                {
                                    if($v['searchType'] == 'Special')
                                    {
                                        $getDetails = $this->db->query('select * from mahakumbhSpecial where id="'.$v['searchedAppNumber'].'"')->result_array();
                                    }else{

                                        if($v['searchType'] == 'Mahakumbh')
                                        {
                                            $getDetails = $this->db->query('select * from mahakumbhMember where id="'.$v['searchedAppNumber'].'"')->result_array();
                                        }else{
                                            $getDetails = $this->db->query('select * from unknown_person where Application_no="'.$v['searchedAppNumber'].'"')->result_array();
                                        }
                                    }
                        ?>
                        <div class="notification-list align-items-center <?= ($v['status'] == 'Active' ? 'notification-list--unread' : ''); ?>" style="cursor:pointer;" onclick="openNotification('search',<?= $v['Id']; ?>)">
                            <div class="notification-list_content col-lg-6">
                                <div class="notification-list_img">
                                    <?php 
                                        if($v['isIdentity'] == 0)
                                        {
                                            if(file_exists($v['searchPhoto']))
                                            {
                                    ?>
                                    <img src="<?= base_url(); ?><?= ($v['searchPhoto']) ?? 'assets/images/male.png'; ?>" alt="user">
                                    <?php }else{ ?>
                                    <img src="<?= base_url(); ?><?= 'assets/images/male.png'; ?>" alt="user">
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <?php 
                                        if($v['identityType'] == 'aadhar')
                                        {
                                    ?>
                                    <img src="<?= base_url(); ?><?= 'assets_landing_page/img/aadhar.webp'; ?>" alt="user">
                                    <?php }else if($v['identityType'] == 'pan'){ ?>
                                    <img src="<?= base_url(); ?><?= 'assets/images/pan.png'; ?>" style="width:62px;object-fit:contain;" alt="user">
                                    <?php }else if($v['identityType'] == 'voter'){ ?>
                                    <img src="<?= base_url(); ?><?= 'assets/images/icons8-voter-64.png'; ?>" alt="user">
                                    <?php }else if($v['identityType'] == 'gold'){ ?>
                                    <img src="<?= base_url(); ?><?= 'assets/icons/gold.png'; ?>" alt="user">
                                    <?php }else if($v['identityType'] == 'vehicle'){ ?>
                                    <img src="<?= base_url(); ?><?= 'assets/icons/car.avif'; ?>" alt="user">
                                    <?php }else{ ?>
                                    <img src="<?= base_url(); ?><?= 'assets/images/4213483.avif'; ?>" style="width:62px;object-fit:contain;" alt="user">
                                    <?php } } ?>
                                </div>
                                <div class="notification-list_detail">
                                    <?php 
                                        $split = explode(' ',$_SESSION['aadharName']);
                                      ?>
                                    <span><b class="text-capitalize text-danger" style="font-weight:600;">MATCH FOUND ALERT!!!</b></span>
                                    <p class="text-muted"><small><?= time_elapsed_string($v['dateCreated']); ?></small></p>
                                </div>
                            </div>
                            <?php 
                                if(count($getDetails) > 0)
                                {
                            ?>
                            <div class="notification-list_feature-img col-lg-6">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-5 col-10">
                                        <img src="<?= base_url(); ?><?= $getDetails[0]['Photo']; ?>" alt="user" class="ms-0 w-100">  
                                    </div>
                                    <div class="col-md-7 col-12 mt-3 mt-md-0">
                                        <button type="button" style="padding:16px!important;border-radius:0!important;" class="w-100 btn btn-success save" onclick="openNotification('search',<?= $v['Id']; ?>)"> View Detail</button>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php 
                            if($k != count($searchnotification) - 1)
                            {
                        ?>
                        <hr style="border-top:2px solid black;opacity:1;">
                        <?php } ?>
                        <?php } ?>
                        <?php } }else{ ?>
                        <div class="notification-list justify-content-center">
                            <div class="notification-list_content">
                                <h5 class="text-danger mb-0"><b>No Notifications Available</b></h5>
                            </div>
                        </div>
                        <?php } ?>
                    </div>  
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    function markAllAsRead(ele)
    {
        $(ele).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>landing/markNotificationAsRead',
            success:function(res)
            {
                location.reload();
            }
        })
    }
</script>