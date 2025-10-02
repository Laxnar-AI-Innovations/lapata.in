
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <?php 

 include('inc-head.php');
    ?>
    <body style="font-family: Merriweather;">
        
        <?php include('header1.php'); 
            if($page_name=='home') { include('pages/'.$page_name.'.php'); }
            else {
                include('breadcumb.php');
                include('pages/'.$page_name.'.php');
            }
        ?>
        <?php include('footer.php'); ?>
        <?php include('inc-footer.php'); ?>
        
    </body>

</html>