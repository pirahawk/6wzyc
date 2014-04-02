<?php
    /**
    Regex check to make sure that the string ends with a '.css' extension to make sure its a style sheet
    */
    function checkIsStyleSheet($str){
        return preg_match("/.css$/", $str, $matches);
    }  
    
    /**
    Regex check to make sure that the string ends with a '.js' extension to make sure its a style sheet
    */
    function checkIsScript($str){
        return preg_match("/.js$/", $str, $matches);
    }  

    /**
    Renders the links for the style sheets to import on the page
    */
    function renderStyleSheets(){
        $allStyleSheets = func_get_args();
        foreach($allStyleSheets as $styleSheet){
            $styleSheet = trim($styleSheet);
            $isValid = checkIsStyleSheet($styleSheet);
            if($isValid){
                $styleSheetLink = CONTENT_PATH . $styleSheet;
?>
<link rel="stylesheet" type="text/css" href="<?php echo $styleSheetLink ?>">
<?php
            }
        }
    }


    /*
    Creates the image url in the form ~/<path-to-image>/$category/$imageName
    */
    function createImagePath($imageName, $category = ""){
        $path = CONTENT_PATH . "images/";
        if( empty($imageName) || is_null($imageName)){
            return "";
        }

        if( !empty($imageName) && !is_null($imageName)){
            $path .= $category . PATH_SEPERATOR;
        }
        $path .= $imageName;
        return $path;
    }


    function renderScripts(){
        $allScripts = func_get_args();
        foreach($allScripts as $script){
            $script = trim($script);
            $isValid = checkIsScript($script);
            if($isValid){
                $scriptLink = SCRIPT_PATH . $script;

                ?>
<script src="<?php echo $scriptLink ?>"></script>
<?php
            }
        }
    }

?>
