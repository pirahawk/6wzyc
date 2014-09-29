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
        <h3>Platinum Sponsors</h3>
        <div class="sponsor-row">
            <a class="sponsor special-sponsor" href="http://www.seruminstitute.com/" target="_blank">
                <img src="<?php echo createImagePath("poona.png","sponsors")?>" alt="Serum-Institute-Of-India" />
            </a>
        </div>
    </div>

    <div class="container bronze">
        <h3>Gold Sponsors</h3>
        <div class="sponsor-row">
            <span class="sponsor special-sponsor">
                <img class="" src="<?php echo createImagePath("hk.png","sponsors")?>" alt="Zoraztrian-Charity-Funds-HK" />
            </span>
        </div>
    </div>

    <div class="container gold">
        <h3>Bronze Sponsors</h3>
        <div class="sponsor-row">
            <span class="sponsor">Mr Rusy M. Shroff, <em>BBS MBE</em> <br /> Mrs Purviz R.Shroff</span>
        </div>
    </div>
</section>

<section class="sponsors">
    <div class="container grey">
        <h3>Travel Partners</h3>
        <div class="sponsor-row">
            <a class="sponsor" href="http://www.travel2000.co.nz" target="_blank">
                <img src="<?php echo createImagePath("travel-2000.png","sponsors")?>" alt="travel-2000" />
            </a>


            <a class="sponsor" href="http://www.bbtes.com/" target="_blank">
                <img src="<?php echo createImagePath("bb-travel.png","sponsors")?>" alt="bb-travel" />
            </a>

            <a class="sponsor" href="http://www.trailblazertours.com" target="_blank">
                <img src="<?php echo createImagePath("trail-blazer.png","sponsors")?>" alt="trail-blazer-tours" />
            </a>

        </div>
    </div>
</section>


    <!--<section class="sponsors">
        <div class="container grey">
            <h3>Media Partners</h3>
            <div class="sponsor-row">
                <a class="sponsor"  href="https://www.facebook.com/jamejamshed" target="_blank">
                    <img src="<?php echo createImagePath("jame-jamshed.png","sponsors")?>" alt="jame-jamshed" />
                </a>
    
    
                <a class="sponsor"  href="http://www.fezana.org" target="_blank">
                    <img src="<?php echo createImagePath("fezana.png","sponsors")?>" alt="fezana" />
                </a>
    
            </div>
        </div>
    </section>-->



<section class="sponsors">
    <div class="container grey">
        <h3>Law Partners</h3>
        <div class="sponsor-row">
            <a class="sponsor" href="http://www.fortunemanning.co.nz" target="_blank">
                <span class="sponsor">Jenna Riddle (Solicitor) from</span>
                <img src="<?php echo createImagePath("fortune-manning.png","sponsors")?>" alt="fortune-manning" />
            </a>
        </div>
    </div>
</section>


<section class="black">
    <div class="container">
        <h1>Watch this space</h1>
        <p>Stay tuned for more information about advertising in the Official Congress Booklet</p>
    </div>
</section>

<?php
    }
?>
