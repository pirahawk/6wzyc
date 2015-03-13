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
            <?php
                /*
                * Ensure that the page this layout is used for has a named function 
                * as defined by constant PAGE_BODY (see _settings.php)
                */
                if(function_exists(RENDER_BODY)){
                    call_user_func(RENDER_BODY);
                }
            ?>
    </body>
</html>