<?php
    require '_layout.php';
    
    function renderBody(){
?>

<div class="page-title">
    <h1>Contact Us</h1>
</div>

<section>
    <div class="container">
        <h1>Our Mailing address</h1>
        <address>
            <strong>6<sup>th</sup> World Zoroastrian Youth Congress</strong><br />
            <?php renderPostalAddress()?>
            <abbr title="Email"><i class="fa fa-envelope fa-6"></i></abbr> <?php renderEmailAddress()?>
        </address>
    </div>
</section>


<section>
    <div class="container">
        <h1>Social Media</h1>
        <p>Were also on the following social media channels:</p>
        <address class="social-media">
            <a href="https://twitter.com/6WZYC" target="_blank"><i class="fa fa-twitter-square fa-6"></i></a>
            <a href="https://www.facebook.com/groups/223424211030360/" target="_blank"><i class="fa fa-facebook-square fa-6"></i></a>
            <a href="http://6wzyc.tumblr.com/" target="_blank"><i class="fa fa-tumblr-square fa-6"></i></a>
        </address>
    </div>
</section>


<?php
    
        renderFooter();
    }
    
?>
