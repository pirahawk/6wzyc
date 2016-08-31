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
            renderStyleSheets("bootstrap.min.css", "font-awesome.min.css", "css/site.css");

            if(function_exists(RENDER_CUSTOM_STYLE)){
                call_user_func(RENDER_CUSTOM_STYLE);
            }
        ?>

    </head>
    <body>

        <?php
                createSiteMenu();
        ?>

        <main>

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

        <?php
            /*
            * If you wish to inject any additional javascript onto the page, ensure the named function 
            * as defined by constant RENDER_SCRIPTS (see _settings.php) is defined
            */
            renderScripts(
            "jquery-2.1.1.min.js", 
            "bootstrap.min.js");
        ?>

        <script type="text/javascript">
            $(function () {
                var resizeFunc = function () {
                    var navBar = document.getElementById('navigation-bar');
                    if (navBar) {
                        var scrollHeight = navBar.scrollHeight;
                        $('body>div.slide:first').css('margin-top', scrollHeight + 'px');
                    }
                };
            });
        </script>


        <?php
            
            if(function_exists(RENDER_SCRIPTS)){
                call_user_func(RENDER_SCRIPTS);
            }
            
            
            if(function_exists(RENDER_FUNDRAISE_SCRIPTS)){
                renderScripts(
                "lodash.min.js",
                "knockout-3.1.0.js",
                "6WZYC/fundraising.js");
            
                call_user_func(RENDER_FUNDRAISE_SCRIPTS);
            }
            
        ?>


    </body>
</html>