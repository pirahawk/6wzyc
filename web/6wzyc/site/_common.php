<?php
    /**
    Regex check to make sure that the string ends with a '.css' extension to make sure its a style sheet
    */
    function checkIsStyleSheet($str){
        return preg_match("/.css$/", $str, $matches);
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
                $styleSheetLink = "/Content/" . $styleSheet;
?>
<link rel="stylesheet" type="text/css" href="<?php echo $styleSheetLink ?>">
<?php
            }
        }
    }
?>

