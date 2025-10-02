<style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        a{
            font-weight: bold;
        }

        h1,h3 {
            color: #d9534f;
            text-align: center;
        }
        p {
            margin: 10px 0;
        }
        strong {
            color: #5bc0de;
        }
        .important {
            color: #d9534f;
            font-weight: bold;
        }
    </style>
<section class="wrapper bg-dark1">
    <div class="container py-4 py-md-4">
        <div class="row">
            <div class="col-12 col-md-12">
                <h4 class="mb-1 fs-35 d-none d-md-block bg-white text-center" style="font-family: math;padding: 3px;"> <b class="text-gradient1">SPECIAL MAHAKUMBH 2025</b></h4>
                <h4 class="mb-1 fs-20 d-block d-md-none bg-white text-center" style="font-family: math;padding: 3px;"> <b class="text-gradient1">SPECIAL MAHAKUMBH 2025</b></h4>
            </div>
            <div class="col-12 col-md-auto mb-5 mx-auto">
                <?php 
                    if($_SESSION['user_login'] == 'yes')
                    {
                        if(isset($_GET['type']))
                        {
                ?>
                <button class="btn btn-navy rounded-pill w-100" onclick="location.href='<?= base_url(); ?><?= $_SESSION['login_type']; ?>/add_mahakumbh_member_special'">Add Your Family Member Now &nbsp;<i class="fa fa-user-plus"></i></button>
                <?php }else{ ?>
                <button class="btn btn-navy rounded-pill w-100" onclick="location.href='<?= base_url(); ?><?= $_SESSION['login_type']; ?>/add_mahakumbh_member'">Add Your Family Member Now &nbsp;<i class="fa fa-user-plus"></i></button>
                <?php } }else{ 
                    if(isset($_GET['type']))
                    {
                ?>
                <button class="btn btn-navy rounded-pill w-100" onclick="location.href='<?= base_url(); ?>mobile-landing-login?type=special'">Add Your Family Member Now &nbsp;<i class="fa fa-user-plus"></i></button>
                <?php }else{  ?>
                <button class="btn btn-navy rounded-pill w-100" onclick="location.href='<?= base_url(); ?>mobile-landing-login'">Add Your Family Member Now &nbsp;<i class="fa fa-user-plus"></i></button>
                <?php } } ?>
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-12 col-md-12 text-center">
                <h2 class="mb-1 text-md-center text-center" style="font-family:math;">यह काम किस प्रकार करता है?</h2>  
            </div>
        </div>
        <h3 class="text-center">जरूरी जानकारी</h3>
        <p>
            <strong class="text-gradient1">अगर आप महाकुंभ प्रयागराज 2025 पर्व में परिवार समेत जाने की योजना बना रहे हैं तो यह खबर आपके लिए बहुत ही महत्वपूर्ण है।</strong>
        </p>
        <p>
            इस महाकुंभ पर्व में लगभग <strong class="text-gradient1">40 से 45 करोड़ श्रद्धालुओं</strong> के आने की संभावना है। इतनी अधिक श्रद्धालुओं के बीच में अगर आपका कोई भी व्यक्ति सफर के दौरान या महाकुंभ मेले की भीड़-भाड़ में आपसे बिछड़ जाता है, तब उसे खोजने के लिए आपको कई तरह की परेशानियों का सामना करना पड़ता है।
        </p>
        <p>
            <strong class="text-gradient1">अगर आप वहां जाने से पूर्व </strong><a href="https://khoji.in" target="_blank">khoji.in</a><strong class="text-gradient1"> वेब प्लेटफॉर्म का उपयोग करते हैं</strong>, तब ऐसी विषम परिस्थिति में अपने खोए हुए व्यक्ति को वहां मौजूद पुलिस कर्मियों, आम श्रद्धालुओं, समाजसेवी तथा <a href="https://khoji.in" target="_blank">khoji.in</a> की टीम की मदद से बिना परेशानियों के तत्काल प्राप्त कर सकेंगे।
        </p>
        <strong class="text-gradient1">चलिए समझते हैं कि </strong><a href="https://khoji.in" target="_blank">khoji.in</a><strong class="text-gradient1"> वेब प्लेटफॉर्म के इस्तेमाल से आप अपने खोए हुए सदस्य को तत्काल कैसे प्राप्त कर सकते हैं:</strong>
        <ul>
            <li>महाकुंभ के लिए यात्रा आरंभ करने से पहले <a href="https://khoji.in" target="_blank">khoji.in</a> पर जाएं और "Add My Family Members" ऑप्शन चुनें।</li>
            <li>अपना मोबाइल नंबर वेरीफाई करें और अपना नाम, लिंग, उम्र, राज्य, जिला आदि जानकारी नियम अनुसार भरें।</li>
            <li>सभी वहां जाने वाले व्यक्तियों की फोटो समेत अन्य जानकारी <a href="https://khoji.in" target="_blank">khoji.in</a> पर अपलोड करें।</li>
        </ul>
        <p>
            🙏 अगर आप <a href="https://khoji.in" target="_blank">khoji.in</a> का उपयोग करते हैं और किसी कारणवश आपके समूह का कोई भी व्यक्ति आपसे बिछड़ जाता है, तब वह व्यक्ति वहां मौजूद सुरक्षा कर्मियों, आम श्रद्धालुओं, समाजसेवी व्यक्ति या <a href="https://khoji.in" target="_blank">khoji.in</a> की टीम के किसी मेंबर को मिलता है, तो:
        </p>
        <ul>
            <li>सहायक व्यक्ति <a href="https://khoji.in" target="_blank">khoji.in</a> के "Search Person By Face Photo" ऑप्शन का उपयोग करके बिछड़े व्यक्ति की फोटो खींच सकता है।</li>
            <li>सर्च बटन दबाते ही उस व्यक्ति की फोटो समेत अन्य जानकारी और आपका संपर्क नंबर तुरंत प्राप्त हो जाएगा।</li>
            <li>सहायक व्यक्ति आपके उस बिछड़े हुए सदस्य को आपसे पुनः मिलवा देगा।</li>
        </ul>
        <strong class="text-gradient1">🙏 महाकुंभ की यात्रा को सुरक्षित और सरल बनाएं, </strong><a href="https://khoji.in" target="_blank">khoji.in</a><strong class="text-gradient1"> का उपयोग करें। 🙏</strong></p>
    </div>
    <div class="row">
        <div class="col-12 col-md-auto mb-5 mx-auto">
            <?php 
                if($_SESSION['user_login'] == 'yes')
                {
                    if(isset($_GET['type']))
                    {
            ?>
            <button class="btn btn-navy rounded-pill w-100" onclick="location.href='<?= base_url(); ?><?= $_SESSION['login_type']; ?>/add_mahakumbh_member_special'">Add Your Family Member Now &nbsp;<i class="fa fa-user-plus"></i></button>
            <?php }else{ ?>
            <button class="btn btn-navy rounded-pill w-100" onclick="location.href='<?= base_url(); ?><?= $_SESSION['login_type']; ?>/add_mahakumbh_member'">Add Your Family Member Now &nbsp;<i class="fa fa-user-plus"></i></button>
            <?php } }else{ 
                if(isset($_GET['type']))
                {
            ?>
            <button class="btn btn-navy rounded-pill w-100" onclick="location.href='<?= base_url(); ?>mobile-landing-login?type=special'">Add Your Family Member Now &nbsp;<i class="fa fa-user-plus"></i></button>
            <?php }else{  ?>
            <button class="btn btn-navy rounded-pill w-100" onclick="location.href='<?= base_url(); ?>mobile-landing-login'">Add Your Family Member Now &nbsp;<i class="fa fa-user-plus"></i></button>
            <?php } } ?>
        </div>
    </div>
</section>
