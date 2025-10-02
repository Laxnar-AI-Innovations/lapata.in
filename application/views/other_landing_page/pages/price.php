<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Card with Tabs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .price-card {
            max-width: 400px;
            margin: auto;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .nav-tabs .nav-link {
            flex: 1;
            text-align: center;
            color: black;
        }
        .nav-tabs .nav-link.active {
            background-color: darkred;
/*background-image: linear-gradient(93deg, #061aa3, #d90f0f) !important;*/
            color: #fff;
            font-weight: bold;
        }
        .tab-content {
            padding: 20px;
        }
        .theme_bk_color{background-image: linear-gradient(93deg, #061aa3, #d90f0f) !important;}
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="price-card">
            <ul class="nav nav-tabs nav-fill" id="priceTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="free-tab" data-bs-toggle="tab" data-bs-target="#free" type="button" role="tab" aria-controls="free" aria-selected="false">Free</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="one-month-tab" data-bs-toggle="tab" data-bs-target="#one-month" type="button" role="tab" aria-controls="one-month" aria-selected="true">1 Month</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="three-months-tab" data-bs-toggle="tab" data-bs-target="#three-months" type="button" role="tab" aria-controls="three-months" aria-selected="false">3 Months</button>
                </li>
            </ul>
            <div class="tab-content" id="priceTabContent">
                <div class="tab-pane fade" id="free" role="tabpanel" aria-labelledby="free-tab">
                    <h5 class="text-center">Active Free for 7 days </h5>
                    <ul>
                        <li>Upload Free for  7 days- Any one can Search for your missing persons using face photo, identity, or uploaded details.</li>
                        <li>Receive instant WhatsApp and SMS notifications when a match is found.</li>
                        <li>Easy-to-share link with active/inactive status options. </li>
                        <li>Get alerts when police, NGOs, or social workers upload your missing person details for identification.</li>
                    </ul>
                     <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-danger theme_bk_color getStarted" style="border:1px dotted white;" >Get Started</a>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="one-month" role="tabpanel" aria-labelledby="one-month-tab">
                    <h5 class="text-center">INR 99</h5>
                    <ul>
                       <li>Any one can Search for your missing persons using face photo, identity, or uploaded details.</li>
                        <li>Receive instant WhatsApp and SMS notifications when a match is found.</li>
                        <li>Easy-to-share link with active/inactive status options. </li>
                        <li>Get alerts when police, NGOs, or social workers upload your missing person details for identification.</li>
                    </ul>
                    <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-danger theme_bk_color getStarted" style="border:1px dotted white;" >Get Started</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="three-months" role="tabpanel" aria-labelledby="three-months-tab">
                    <h5 class="text-center">INR 299</h5>
                    <ul>
                       <li>Any one can Search for your missing persons using face photo, identity, or uploaded details.</li>
                        <li>Receive instant WhatsApp and SMS notifications when a match is found.</li>
                        <li>Easy-to-share link with active/inactive status options. </li>
                        <li>Get alerts when police, NGOs, or social workers upload your missing person details for identification.</li>
                    </ul>
                     <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-danger theme_bk_color getStarted" style="border:1px dotted white;" >Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
