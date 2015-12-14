<?php
        require '_layout.php';
    
    function renderBody(){
?>

<div id="background" style="background-color: #F5F5F5;" class="non-opaque">
</div>

<div class="page-title">
    <h1>Register for the 6WZYC</h1>
</div>


<section class="grey">
    <div class="container">
        <h1>Registration Closed</h1>
        <p>Registration for the 6th World Zoroastrian Youth Congress has now officially closed.</p>
        <p>If you have any further questions, please refer to the <a href="/faq.php">FAQ's</a> or feel free to email us at <a href="mailto:register.6thwzyc@gmail.com">register.6thwzyc@gmail.com</a></p>
    </div>
</section>

<section class="green">
    <div class="container">
        <h1>Terms and Conditions</h1>
        <p>Please ensure you have read and understood the Terms and Conditions of the 6WZYC</p>
        <a class="btn btn-primary btn-lg" href="<?php echo createDocumentPath("6wzyc-terms-conditions.pdf")?>" target="_blank">Terms and Conditions <i class="fa fa-angle-right"></i></a>
    </div>
</section>
<?php
    renderFooter();
    }    
?>
