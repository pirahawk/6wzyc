<?php
    require '_settings.php';
    require '_common.php';
    require '_menu.php';   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>

        <?php
            renderStyleSheets(
            "bootstrap.css", 
            "css/site.css");
        ?>


    </head>
    <body>

        <?php
            createSiteMenu();
            /*
            * Ensure that the page this layout is used for has a named function 
            * as defined by constant PAGE_BODY (see _settings.php)
            */
            if(function_exists(PAGE_BODY)){
                call_user_func(PAGE_BODY);
            }
        ?>

    </body>
</html>


