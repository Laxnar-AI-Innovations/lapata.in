<!DOCTYPE html>
<html class="no-js">
    <?php include('inc-head.php'); ?>
    <body style="visibility:hidden;font-family: times new roman, sans-serif;background-color: var(--fg);">
        <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKB7MTCL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        <div id="loader" class="center">
           
            <h3 class="text-center" style="font-family:none;">Please Wait <br><b class="dot-typing"></b></h3>
        </div>
        <?php include('header.php'); ?>
        <?php include('pages/'.$page_name.'.php'); ?>
        <?php include('footer.php'); ?>
        <?php include('inc-footer.php'); ?>
    </body>
</html>