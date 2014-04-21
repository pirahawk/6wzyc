<?php
    require '_settings.php';
    require '_common.php';
    require '_menu.php';   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
        
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
        <?php
            renderStyleSheets(
            "bootstrap.css",
            "font-awesome.min.css", 
            "css/site.css");
        ?>


    </head>
    <body>

        <?php
            createSiteMenu();
        ?>


        <?php
            /*
            * Ensure that the page this layout is used for has a named function 
            * as defined by constant PAGE_BODY (see _settings.php)
            */
            if(function_exists(RENDER_BODY)){
                call_user_func(RENDER_BODY);
            }
        ?>



        <?php
            /*
            * If you wish to inject any additional javascript onto the page, ensure the named function 
            * as defined by constant RENDER_SCRIPTS (see _settings.php) is defined
            */
            renderScripts(
            "jquery-2.1.0.js", 
            "bootstrap.js");

            if(function_exists(RENDER_SCRIPTS)){
                call_user_func(RENDER_SCRIPTS);
            }
        ?>


    </body>
</html>