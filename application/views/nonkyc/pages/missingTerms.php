<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.checkbox-custom, .radio-custom {
        opacity: 0;
        position: absolute;   
    }
    
    .checkbox-custom, .checkbox-custom-label, .radio-custom, .radio-custom-label {
        display: inline-block;
        vertical-align: middle;
        margin: 5px;
        cursor: pointer;
    }
    
    .activeLabel{
            background-color: #ffc107;
            padding: 16px;
            border-radius: 30px;
            font-weight:bold;
        }
    
    .checkbox-custom-label, .radio-custom-label {
        position: relative;
    }
    
    .checkbox-custom + .checkbox-custom-label:before, .radio-custom + .radio-custom-label:before {
        content: '';
        background: #fff;
        border: 2px solid #ddd;
        display: inline-block;
        vertical-align: middle;
        width: 22px;
        height: 22px;
        padding-bottom: 22px;
        margin-right: 10px;
        text-align: center;
    }
    
    .checkbox-custom:checked + .checkbox-custom-label:before {
        content: "\f00c";
        font-family: 'FontAwesome';
        background: rebeccapurple;
        color: #fff;
    }
    
    .radio-custom + .radio-custom-label:before {
        border-radius: 50%;
    }
    
    .radio-custom:checked + .radio-custom-label:before {
        content: "\f00c";
        font-family: 'FontAwesome';
        color: green;
    }
    
    div:where(.swal2-container) div:where(.swal2-popup){
            width:auto;
        }
    #swal2-html-container{
        margin: 0 1rem!important;
    }

.card{
    height:max-content;
}

</style>
<!--end card css-->
<main id="main" class="main">
    <div class="container-fluid px-0">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12 card">
                <div class="card-header">
                    <h5 class="card-title text-center mb-0">Terms & Conditions</h5>
                </div>
                <div class="card-body p-2" style="color:black;">
                    <p class="mb-2" style="color:black;">Certainly, here are the simplified points from your paragraph:</p>
                    <ol>
                        <li>
                            <h6><b>User Verification</b></h6>
                            <p class="mb-2">- Users who upload data about missing persons undergo Aadhar KYC verification.</p>
                            <p class="mb-2">- If a missing person is already registered, their details are verified.</p>
                            <p class="mb-2">- If not registered, provided details are assumed to be correct.</p>
                        </li>
                        <hr>
                        <li>
                            <h6><b>Reward Declaration</b></h6>
                            <p class="mb-2">- Relatives can offer rewards for finding missing persons.</p>
                            <p class="mb-2">- The website does not guarantee these transactions.</p>
                        </li>
                        <hr>
                        <li>
                            <h6><b>Intellectual Property</b></h6>
                            <p class="mb-2">- All website pages are protected by intellectual property laws</p>
                        </li>
                        <hr>
                        <li>
                            <h6><b>Identity Verification</b></h6>
                            <p class="mb-2">- Users can verify the government-issued identity of any person.</p>
                        </li>
                        <hr>
                        <li>
                            <h6><b>User Responsibility</b></h6>
                            <p class="mb-2">- Users take full responsibility for any misuse of the portal.</p>
                        </li>
                        <hr>
                        <li>
                            <h6><b>Data Upload Consent</b></h6>
                            <p class="mb-2">- Family members can upload missing persons' details after agreeing to terms and conditions.</p>
                        </li>
                        <hr>
                        <li>
                            <h6><b>KYC Consent</b></h6>
                            <p class="mb-2">- Users consent to Aadhar KYC when registering.</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</main>