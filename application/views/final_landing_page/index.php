<!DOCTYPE html>
<html class="no-js">
    <?php include('inc-head.php'); ?>
    <?php 
        if(current_url() == base_url().'check-person-new-results')
        {
    ?>
    <body style="visibility:hidden;font-family: times new roman, sans-serif;background: #fff;">
    <?php }else{ 
        if(current_url() == base_url().'check-person-high-results' || current_url() == base_url().'check-person-high-funnel-results')
        {
            if(isset($_SESSION['isLoaded']))
            {
    ?>
        <body style="visibility:hidden;font-family: times new roman, sans-serif;background: hsl(var(--hue),90%,90%);">
    <?php }else{ ?>
    <body style="visibility:hidden;font-family: times new roman, sans-serif;background: #fff;">
    <?php } }else{ ?>
    <body style="visibility:hidden;font-family: times new roman, sans-serif;background: hsl(var(--hue),90%,90%);">
    <?php } } ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKB7MTCL"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div id="ajaxloader" class="center d-none" style="flex-direction: column;">
            <div id="lottie-ajax-loader" style="width: 300px;height: 300px;"></div>
            <br>
            <h5 class="text-center"><b>Face Scanning in Process</b></h5>
            <h3 class="text-center" style="font-family:none;">Please Wait <br><b class="dot-typing"></b></h3>
        </div>
        <?php 
            if(current_url() == base_url().'check-person-new-results')
            {
        ?>
        <div id="loader" class="center" style="flex-direction: column;">
            <diiv id="lottie-loader" style="width: 300px;height: 300px;"></diiv>
            <br>
            <h4 class="text-center"><b>Similar Matches Found</b><br><b class="dot-typing"></b></h4>
        </div>
        <?php }else{ 
            if(current_url() == base_url().'check-person-high-results' || current_url() == base_url().'check-person-high-funnel-results')
            {
                if(isset($_SESSION['isLoaded']))
                {
        ?>
        <div id="loader" class="center">
            <h3 class="text-center" style="font-family:none;">Please Wait <br><b class="dot-typing"></b></h3>
        </div>
        <?php }else{ ?>
        <div id="loader" class="center" style="flex-direction: column;">
            <diiv id="lottie-loader" style="width: 300px;height: 300px;"></diiv>
            <br>
            <h4 class="text-center"><b>Similar Matches Found</b><br><b class="dot-typing"></b></h4>
        </div>
        <?php } ?>
        <?php }else{ ?>
        <div id="loader" class="center">
            <h3 class="text-center" style="font-family:none;">Please Wait <br><b class="dot-typing"></b></h3>
        </div>
        <?php } ?>
        <?php } ?>
        <?php include('header.php'); ?>
        <?php include('pages/'.$page_name.'.php'); ?>
        <?php include('footer.php'); ?>
        <?php include('inc-footer.php'); ?>
    </body>
</html>