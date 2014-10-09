<?php
    require '_settings.php';
    require '_common.php';
    require '_menu.php';   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            require '_meta.php';
        ?>


        <link href="http://fonts.googleapis.com/css?family=Roboto:700,500,400" rel="stylesheet" type="text/css">
        <?php
            renderStyleSheets("bootstrap.min.css", "css/splash.css");
        ?>
    </head>
    <body>
        <main style="background-image:url('<?php echo createImagePath('auckland-pano.jpg',"site")?>')">
            <?php
                /*
                * Ensure that the page this layout is used for has a named function 
                * as defined by constant PAGE_BODY (see _settings.php)
                */
                if(function_exists(RENDER_BODY)){
                    call_user_func(RENDER_BODY);
                }
            ?>
        </main>

        <footer>
            <a class="sponsor" href="http://www.seruminstitute.com/" target="_blank" rel="nofollow"><img src="<?php echo createImagePath("poona.png","sponsors")?>" alt="sponsor" /></a>
            <img class="sponsor" src="<?php echo createImagePath("hk.png","sponsors")?>" alt="sponsor" />
            <a class="sponsor" href="http://www.w-z-o.org/" target="_blank" rel="nofollow"><img src="<?php echo createImagePath("wzo.png","sponsors")?>" alt="sponsor" /></a>
            <img class="sponsor" src="<?php echo createImagePath("rusy-purviz-shroff.png","sponsors")?>" alt="sponsor" />
        </footer>
    </body>
</html>