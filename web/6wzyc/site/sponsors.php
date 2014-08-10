<?php
    require '_layout.php';
    
    function renderBody(){
?>

<div id="background" style="background-image:url('<?php echo createImagePath('sponsors.jpg',"backgrounds")?>')">
</div>

<div class="page-title">
    <h1>Sponsors &amp; Partners</h1>
</div>

<section class="platinum">
    <div class="container">
        <h1>Platinum Sponsors</h1>
        <a href="http://www.seruminstitute.com/" target="_blank">
            <img src="<?php echo createImagePath("poona.png","sponsors")?>" alt="sponsor" class="sponsor-logo"/>
        </a>
    </div>
</section>


<section class="gold">
    <div class="container">
        <h1>Gold Sponsors</h1>
        <img src="<?php echo createImagePath("hk.png","sponsors")?>" alt="sponsor" class="sponsor-logo"/>
    </div>
</section>

<section class="bronze">
    <div class="container">
        <h1>Bronze Sponsors</h1>
        <p>Mr Rusy M. Shroff, <em>BBS MBE</em> <br /> Mrs Purviz R.Shroff</p>
    </div>
</section>

<section>
    <div class="container">
        <h1>Travel Partners</h1>
        <a href="http://www.bbtes.com/" target="_blank">
            <img src="<?php echo createImagePath("bb-travel.jpg","sponsors")?>" alt="sponsor" class="sponsor-logo"/>
        </a>
    </div>
</section>


<?php
    }
?>
