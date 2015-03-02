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


    function getBlobHostName(){
        $hostName = $_SERVER["HTTP_HOST"];
        $localHost = "/^(localhost|127.0.0.1)/";
        $test = "/^test6wzyc\.azurewebsites\.net$/";
        $live = "/^6wzyc\.co\.nz$/";


        if(preg_match($localHost, $hostName) != false){
            return "http://127.0.0.1:10000/devstoreaccount1/";
        }

        if(preg_match($test, $hostName) != false){
            return "http://6wzyc.blob.core.windows.net/";
        }

        if(preg_match($live, $hostName) != false){
            return "http://az684910.vo.msecnd.net/";
        }

        return "http://az684910.vo.msecnd.net/";
    }


    /*
    Creates the image url in the form ~/<path-to-image>/$category/$imageName
    */
    function createImagePath($imageName, $category = ""){
        
        $path = getBlobHostName() . "6wzyc-images/";
        if( empty($imageName) || is_null($imageName)){
            return "";
        }
        $path .= $category . PATH_SEPERATOR . $imageName . "?v=". CDN_VERSION;
        return $path;
    }

    function createDocumentPath($documentName){
        $path = getBlobHostName() . "6wzyc-documents/";
        if( empty($documentName) || is_null($documentName)){
            return "";
        }

       $path .= $documentName. "?v=". CDN_VERSION;
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


    function renderEmailAddress(){
?>
<span class="blue">
&#104;&#101;&#108;&#112;&#046;&#054;&#116;&#104;&#119;&#122;&#121;&#099;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;
    </span>
<?php
    }

    function renderPostalAddress(){
?>
        <p>PO Box 251128<br> Pakuranga <br> Auckland<br> New Zealand</p>
<?php
    }


    function renderFooter(){
        require '_footer.php';
    }

?>

