<?php
    require '_layout.php';
    
    function renderBody(){
?>

<div class="jumbotron slide">
    <h1>Contact Us</h1>
</div>

<div class="slide">
    <div class="container">
        <div class="row">
            <h1><strong>Contact Us</strong></h1>
            <address>
                <strong>6<sup>th</sup> World Zoroastrian Youth Congress</strong><br />
                <?php renderPostalAddress()?>
                <i class="fa fa-envelope fa-6"></i> <?php renderEmailAddress()?>
            </address>

            <address>
                <strong>Social Media</strong><br />
                <a href="https://twitter.com/6WZYC" target="_blank"><i class="fa fa-twitter-square fa-6"></i></a>
                <a href="https://www.facebook.com/groups/223424211030360/" target="_blank"><i class="fa fa-facebook-square fa-6"></i></a>
            </address>
        </div>
    </div>
</div>
<?php
    
        renderFooter();
    }
    
?>
