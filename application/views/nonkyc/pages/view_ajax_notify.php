<div class="notification-ui_dd-content">
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
                <p><b><span class="text-danger"><?= $getFoundPersonDetail[0]['missingname']; ?></span><span> is found active in </span><span class="text-danger"><?= $getHotelDetail[0]['name']; ?></span></b></p>
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
                        if($v['searchType'] == 'FunnelMissing')
                        {
                            $getDetails = $this->db->query('select * from funnel_missing where id="'.$v['searchedAppNumber'].'"')->result_array();
                        }else{
                            if($v['searchType'] == 'FunnelFamily')
                            {
                                $getDetails = $this->db->query('select * from funnelfamily where id="'.$v['searchedAppNumber'].'"')->result_array();
                            }else{
                                $getDetails = $this->db->query('select * from unknown_person where Application_no="'.$v['searchedAppNumber'].'"')->result_array();
                            }
                        }
                    }
                }
    ?>
    <div class="notification-list align-items-center <?= ($v['status'] == 'Active' ? 'notification-list--unread' : ''); ?>" style="cursor:pointer;" onclick="openNotification('search',<?= $v['Id']; ?>)">
        <div class="notification-list_content col-lg-6">
            <div class="notification-list_img">
                <?php 
                    if($v['isIdentity'] == 0)
                    {
                ?>
                <img src="<?= base_url(); ?><?= ($v['searchPhoto']) ?? 'assets/images/male.png'; ?>" alt="user">
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