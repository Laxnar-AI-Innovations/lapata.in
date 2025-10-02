<!DOCTYPE html>
<html class="no-js">
    <?php include('inc-head.php'); ?>
    <?php 
        if(current_url() == base_url().'user/newUnknownFaceMatchResults')
        {
    ?>
    <body style="visibility:hidden;background: #fff;">
    <?php }else{ ?>
        <body style="visibility:hidden;background: hsl(var(--hue),90%,90%);">
    <?php }?>
        <div id="ajaxloader" class="center d-none" style="flex-direction: column;">
            <div id="lottie-ajax-loader" style="width: 300px;height: 300px;"></div>
            <br>
            <h5 class="text-center"><b>Face Scanning in Process</b></h5>
            <h3 class="text-center" style="font-family:none;">Please Wait <br><b class="dot-typing"></b></h3>
        </div>
        <?php 
            if(current_url() == base_url().'user/newUnknownFaceMatchResults')
            {
        ?>
        <div id="loader" class="center" style="flex-direction: column;">
            <diiv id="lottie-loader" style="width: 300px;height: 300px;"></diiv>
            <br>
            <h4 class="text-center"><b>Similar Matches Found</b><br><b class="dot-typing"></b></h4>
        </div>
        <?php }else{ ?>
        <div id="loader" class="center">
            <h3 class="text-center" style="font-family:none;">Please Wait <br><b class="dot-typing"></b></h3>
        </div>
        <?php } ?>
        <?php include('header.php'); ?>
            <?php include('sidebar.php'); ?>
            <?php include('breadcrumb.php'); ?>
            <?php include('pages/'.$page_name.'.php'); ?>
        <?php include('inc-footer.php'); ?>
        <?php include('script.php'); ?>
    </body>
</html>