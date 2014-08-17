<?php
    require '_layout.php';
    
    function renderBody(){
?>

<div id="background" style="background-image:url('<?php echo createImagePath('sponsors.jpg',"backgrounds")?>')">
</div>

<div class="page-title">
    <h1>Sponsors &amp; Partners</h1>
</div>

<section class="sponsors">
    <div class="container platinum">
        <h3>Platinum Sponsors</h3>
        <div class="sponsor-container">
            <a href="http://www.seruminstitute.com/" target="_blank">
                <img src="<?php echo createImagePath("poona.png","sponsors")?>" alt="Serum-Institute-Of-India" class="sponsor-logo" />
            </a>
        </div>

    </div>

    <div class="container bronze">
        <h3>Gold Sponsors</h3>
        <div class="sponsor-container">
            <img src="<?php echo createImagePath("hk.png","sponsors")?>" alt="Zoraztrian-Charity-Funds-HK" class="sponsor-logo" />
        </div>
    </div>

    <div class="container gold">
        <h3>Bronze Sponsors</h3>
        <div class="sponsor-container">
            <h3>Mr Rusy M. Shroff, <em>BBS MBE</em> <br /> Mrs Purviz R.Shroff</h3>
        </div>
    </div>
</section>

<section class="sponsors">
    <div class="container grey">
        <h3>Travel Partners</h3>
        <div class="sponsor-container">
            <a href="http://www.travel2000.co.nz" target="_blank">
                <img src="<?php echo createImagePath("travel-2000.png","sponsors")?>" alt="travel-2000" class="sponsor-logo" />
            </a>


            <a href="http://www.bbtes.com/" target="_blank">
                <img src="<?php echo createImagePath("bb-travel.png","sponsors")?>" alt="bb-travel" class="sponsor-logo" />
            </a>

            <a href="http://www.trailblazertours.com" target="_blank">
                <img src="<?php echo createImagePath("trail-blazer.png","sponsors")?>" alt="trail-blazer-tours" class="sponsor-logo" />
            </a>

        </div>
    </div>
</section>


<section class="sponsors">
    <div class="container grey">
        <h3>Media Partners</h3>
        <div class="sponsor-container">
            <a href="https://www.facebook.com/jamejamshed" target="_blank">
                <img src="<?php echo createImagePath("jame-jamshed.png","sponsors")?>" alt="jame-jamshed" class="sponsor-logo" />
            </a>


            <a href="http://www.fezana.org" target="_blank">
                <img src="<?php echo createImagePath("fezana.png","sponsors")?>" alt="fezana" class="sponsor-logo" />
            </a>

        </div>
    </div>
</section>


<section class="sponsors">
    <div class="container grey">
        <h3>Law Partners</h3>
        <div class="sponsor-container">
            <a href="http://www.fortunemanning.co.nz" target="_blank">
                <img src="<?php echo createImagePath("fortune-manning.png","sponsors")?>" alt="fortune-manning" class="sponsor-logo" />
            </a>


            

        </div>
    </div>
</section>


<?php
    }
?>
