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
      <h1>All Notifications</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">All Notifications</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section-50">
        <div class="container-fluid px-0">
            <?php 
                if((count($notification) + count($searchnotification)) > 0)
                {
            ?>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12 col-md-8 card">
                    <div class="card-body text-center py-3">
                        <button type="button" class="btn btn-style-five disabled-on-loading" onclick="markAllAsRead(this)" style="padding:0.5rem!important;border-radius:0!important;" id="markAllAsRead"> View All Notification History</button>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12 col-md-8 px-1">
                    <div class="notification-ui_dd-content">
                        
                    </div>  
                </div>
            </div>
        </div>
    </section>
</main>
<script>
let lastNotificationId = 0;
let firstLoad = true;

setInterval(getNotifications, 5000); // Fetch every 10 seconds
function getNotifications() {
    $.ajax({
        url: '<?php echo base_url(); ?>landing/getIfNotificationPage',
        type: 'GET',
        data: { last_id: lastNotificationId, first_load: firstLoad ? 1 : 0 },
        success: function(response) {
            try {
                const res = JSON.parse(response);

                if (res.status === 'success') {
                    // ✅ Always update latest Id
                    if (res.latest && res.latest > lastNotificationId) {
                        lastNotificationId = res.latest;
                    }

                    if (res.data.length > 0) {
                        if (firstLoad) {
                            res.data.reverse(); // oldest → newest
                            $('.notification-ui_dd-content').html('');
                            res.data.forEach(notification => {
                                const html = buildNotificationHtml(notification);
                                $('.notification-ui_dd-content').append(html);
                            });
                            firstLoad = false;
                        } else {
                            res.data.forEach(notification => {
                                const html = buildNotificationHtml(notification);
                                $('.notification-ui_dd-content').prepend(html);
                            });
                        }
                    } else {
                        // ✅ No data case
                        if (firstLoad) {
                            $('.notification-ui_dd-content').html(`
                                <div class="text-center py-4 text-muted">
                                    <i class="fa fa-bell-slash" style="font-size:32px;"></i>
                                    <p class="mt-2 mb-0">No notifications yet</p>
                                </div>
                            `);
                            firstLoad = false;
                        }
                        // For later loads (not first), just do nothing silently
                    }
                }
            } catch (e) {
                console.error('Invalid JSON:', e);
            }
        },
        error: function(err) {
            console.error('Failed to fetch notifications:', err);
        }
    });
}

function buildNotificationHtml(notification) {
    let isSearchNotification = notification.hasOwnProperty('searchType');
    let time = timeAgo(notification.dateCreated);
    let statusClass = (notification.status === 'Active') ? 'notification-list--unread' : '';

    if (!isSearchNotification) {
        // 🔹 Regular Notification
        return `
        <div class="notification-list ${statusClass}" style="cursor:pointer;" onclick="openNotification('old',${notification.Id})">
            <div class="notification-list_content align-items-center">
                <div class="notification-list_img">
                    <img src="${baseUrl(notification.searchPhoto || 'assets/images/male.png')}" alt="user">
                </div>
                <div class="notification-list_detail">
                    <p><b><span class="text-danger">${notification.personName}</span><span> is found active in </span><span class="text-danger">${notification.hotelName}</span></b></p>
                    <p class="text-muted">${notification.message}</p>
                    <p class="text-muted"><small>${time}</small></p>
                </div>
            </div>
            <div class="notification-list_feature-img align-items-center d-flex">
                <img src="${baseUrl(notification.detailPhoto || 'assets/images/male.png')}" alt="user">
            </div>
        </div>`;
    } else {
        // 🔹 Search Notification
        const isIdentity = notification.isIdentity == 1;
        const identityImage = getIdentityImage(notification);
        const matchedImage = baseUrl(notification.detailPhoto || 'assets/images/male.png');

        return `
        <div class="notification-list ${statusClass}" style="cursor:pointer;" onclick="openNotification('search',${notification.Id})">
            <div class="notification-list_content col-lg-6">
                <div class="notification-list_img">
                    <img src="${identityImage}" alt="user">
                </div>
                <div class="notification-list_detail">
                    <span><b class="text-capitalize text-danger" style="font-weight:600;">MATCH FOUND ALERT!!!</b></span>
                    <p class="text-muted"><small>${time}</small></p>
                </div>
            </div>
            <div class="notification-list_feature-img col-lg-6">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-5 col-10">
                        <img src="${matchedImage}" class="ms-0 w-100" alt="matched">
                    </div>
                    <div class="col-md-7 col-12 mt-3 mt-md-0">
                        <button type="button" style="padding:16px!important;border-radius:0!important;" class="w-100 btn btn-success save" onclick="openNotification('search',${notification.Id})"> View Detail</button>
                    </div>
                </div>
            </div>
        </div>
        <hr style="border-top:2px solid black;opacity:1;">`;
    }
}

function getIdentityImage(notification) {
    console.log(notification);
    if (notification.isIdentity == 0) {
        return baseUrl(notification.searchImage || 'assets/images/male.png');
    }

    switch (notification.identityType) {
        case 'aadhar': return baseUrl('assets_landing_page/img/aadhar.webp');
        case 'pan': return baseUrl('assets/images/pan.png');
        case 'voter': return baseUrl('assets/images/icons8-voter-64.png');
        case 'gold': return baseUrl('assets/icons/gold.png');
        case 'vehicle': return baseUrl('assets/icons/car.avif');
        default: return baseUrl('assets/images/4213483.avif');
    }
}

function baseUrl(path) {
    return '<?= base_url(); ?>' + path;
}

// Function to format time elapsed string
function timeAgo(dateStr) {
    const seconds = Math.floor((new Date() - new Date(dateStr)) / 1000);
    const intervals = [
        { label: 'year', seconds: 31536000 },
        { label: 'month', seconds: 2592000 },
        { label: 'week', seconds: 604800 },
        { label: 'day', seconds: 86400 },
        { label: 'hour', seconds: 3600 },
        { label: 'minute', seconds: 60 },
        { label: 'second', seconds: 1 }
    ];
    for (let i = 0; i < intervals.length; i++) {
        const interval = intervals[i];
        const count = Math.floor(seconds / interval.seconds);
        if (count > 0) {
            return count + ' ' + interval.label + (count !== 1 ? 's' : '') + ' ago';
        }
    }
    return 'just now';
}

function markAllAsRead(ele)
{
    location.href="<?= base_url(); ?>user/notification_history";
}
</script>