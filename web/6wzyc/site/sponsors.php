<?php
    require '_layout.php';
    
    function renderBody(){
?>

<div id="background" style="background-image:url('<?php echo createImagePath('sponsors.jpg',"backgrounds")?>')">
</div>

<div class="page-title">
    <h1>Sponsors &amp; Partners</h1>
</div>


<section class="black">
    <div class="container">
        <h1>Our Sponsors</h1>
        <p>We would like to sincerely thank our our Official Key Sponsors and Partners for their support and commitment to the Congress. Sponsorship and donation opportunities are still available. For more information, please download our Sponsorship Proposal below.</p>
        <a class="btn btn-primary btn-lg" href="<?php echo createDocumentPath("6WZYC-Sponsorship-proposal.pdf")?>" target="_blank" rel="nofollow">Sponsorship Proposal <i class="fa fa-angle-right"></i></a>
    </div>
</section>


<section class="sponsors">
    <div class="container">
        <h3 class="platinum">Platinum Sponsors</h3>
        <div class="sponsor-row">
            <a class="sponsor special-sponsor" href="http://www.seruminstitute.com/" target="_blank" rel="nofollow">
                <img src="<?php echo createImagePath("poona.png","sponsors")?>" alt="Serum-Institute-Of-India" />
            </a>
        </div>
    </div>

    <div class="container">
        <h3 class="gold">Gold Sponsors</h3>
        <div class="sponsor-row">
            <span class="sponsor special-sponsor">
                <img class="" src="<?php echo createImagePath("hk.png","sponsors")?>" alt="Zoraztrian-Charity-Funds-HK" />
            </span>
        </div>
    </div>

    <div class="container">
        <h3 class="bronze">Bronze Sponsors</h3>
        <div class="sponsor-row">
            <span class="sponsor">
                <img class="" src="<?php echo createImagePath("rusy-purviz-shroff.png","sponsors")?>" alt="rusy-purviz-shroff" />
            </span>

        </div>
    </div>

    <div class="container">
        <h3 class="grey">Travel Partners</h3>
        <div class="sponsor-row">
            <a class="sponsor" href="http://www.travel2000.co.nz" target="_blank" rel="nofollow">
                <img src="<?php echo createImagePath("travel-2000.png","sponsors")?>" alt="travel-2000" />
            </a>


            <a class="sponsor" href="http://www.bbtes.com/" target="_blank" rel="nofollow">
                <img src="<?php echo createImagePath("bb-travel.png","sponsors")?>" alt="bb-travel" />
            </a>

            <a class="sponsor" href="http://www.trailblazertours.com" target="_blank" rel="nofollow">
                <img src="<?php echo createImagePath("trail-blazer.png","sponsors")?>" alt="trail-blazer-tours" />
            </a>

        </div>
    </div>



    
        <div class="container grey">
            <h3 class="grey">Media Partners</h3>
            <div class="sponsor-row">
                <a class="sponsor"  href="https://www.facebook.com/jamejamshed" target="_blank" rel="nofollow">
                    <img src="<?php echo createImagePath("jame-jamshed.png","sponsors")?>" alt="jame-jamshed" />
                </a>
    
    
                <a class="sponsor"  href="http://www.fezana.org" target="_blank" rel="nofollow">
                    <img src="<?php echo createImagePath("fezana.png","sponsors")?>" alt="fezana" />
                </a>
    
            </div>
        </div>
   




    <div class="container">
        <h3 class="grey">Law Partners</h3>
        <div class="sponsor-row">
            <a class="sponsor" href="http://www.fortunemanning.co.nz" target="_blank" rel="nofollow">
                <span class="sponsor">Jenna Riddle (Solicitor) from</span>
                <img src="<?php echo createImagePath("fortune-manning.png","sponsors")?>" alt="fortune-manning" />
            </a>
        </div>
    </div>
</section>


<section class="blue">
    <div class="container">
        <h1>Advertise with us</h1>
        <p>Advertising for the congress is now open. Please download our advertising proposal for more information.</p>
        <a class="btn btn-default btn-lg" href="<?php echo createDocumentPath("6WZYC-Advertising-proposal.pdf")?>" target="_blank" rel="nofollow">Advertising Proposal <i class="fa fa-angle-right"></i></a>
    </div>
</section>

<?php
    }
?>
