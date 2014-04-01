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
        

        <?php
            renderStyleSheets(
            "bootstrap.css", 
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




    </body>
</html>


      
<!--
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
        font-family: 'Josefin Slab', serif;


        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        font-family: 'Open Sans', sans-serif;

        <link href='http://fonts.googleapis.com/css?family=Cutive+Mono|Open+Sans+Condensed:300|Titillium+Web' rel='stylesheet' type='text/css'>
        font-family: 'Cutive Mono', ;
        font-family: 'Open Sans Condensed', sans-serif;
        font-family: 'Titillium Web', sans-serif;
-->