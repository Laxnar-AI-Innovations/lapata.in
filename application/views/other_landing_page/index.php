
<!DOCTYPE html>
<html class="no-js">
    <?php include('inc-head.php'); ?>
    <body style="visibility:hidden;font-family: math!important;background-color: var(--fg);">
       
        <div id="loader" class="center">
           
            <h3 class="text-center" style="font-family:none;">Please Wait <br><b class="dot-typing"></b></h3>
        </div>
        <?php include('header.php'); ?>
        <?php include('pages/'.$page_name.'.php'); ?>
        <?php include('footer.php'); ?>
        <?php include('inc-footer.php'); ?>
    </body>
    </html>
