<?php
    require '_splashLayout.php';
    function renderBody(){
?>
<main style="background-image:url('<?php echo createImagePath('auckland-pano.jpg',"site")?>')">
    <div id="splash-label">
        <h1><span class="site-green">6</span><span class="black">WZYC</span></h1><br />
        <h2><span class="black">6<sup>th</sup> World Zoroastrian Youth Congress</span></h2><br />
        <h3><span class="black">Auckland, New Zealand</span></h3><br />
        <h3> <span class="gold">28<sup>th</sup> Dec 2015 - 2<sup>nd</sup> Jan 2016</span></h3><br />
    </div>

    <a id="enter-button" class="btn btn-default btn-lg" href="/about.php">
        <span class="black">Enter Site</span>
    </a>

</main>


<footer>
    <a class="sponsor" href="http://www.seruminstitute.com/" target="_blank" rel="nofollow"><img src="<?php echo createImagePath("poona.png","sponsors")?>" alt="sponsor" /></a>
    <img class="sponsor" src="<?php echo createImagePath("hk.png","sponsors")?>" alt="sponsor" />
    <a class="sponsor" href="http://www.w-z-o.org/" target="_blank" rel="nofollow"><img src="<?php echo createImagePath("wzo.png","sponsors")?>" alt="sponsor" /></a>
    <br/>
    <a class="sponsor" href="http://www.sailegal.biz.com.hk/" target="_blank" rel="nofollow"><img src="<?php echo createImagePath("navaz-jal-karbhari.png","sponsors")?>" alt="sponsor" /></a>
    <img class="sponsor" src="<?php echo createImagePath("rusy-purviz-shroff.png","sponsors")?>" alt="sponsor" />
    <img class="sponsor" src="<?php echo createImagePath("shernaz-cawas-pardiwalla.png","sponsors")?>" alt="sponsor" />
    <a class="sponsor" href="http://rwhalfmoonbay.co.nz/agent/faz-najmi/" target="_blank" rel="nofollow"><img src="<?php echo createImagePath("faz-najmi.png","sponsors")?>" alt="sponsor"/></a>
</footer>


<?php
    
    } 
    
?>

