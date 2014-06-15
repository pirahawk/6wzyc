<?php
    require '_layout.php';
    
    function renderBody(){
?>


<div class="jumbotron slide black">
    <h1>Our Sponsors</h1>
</div>

<div class="slide sponsors">
    <div class="container">
        <div class="row">
            <h2>Platinum</h2>
            <a href="http://www.seruminstitute.com/" target="_blank">
                <img class="img-responsive" src="<?php echo createImagePath("poona.jpg","sponsors")?>" alt="sponsor" />
            </a>
        </div>


        <div class="row">
            <h2>Gold</h2>
            <img class="img-responsive" src="<?php echo createImagePath("hk.jpg","sponsors")?>" alt="sponsor" />
        </div>


        <div class="row">
            <h2>Bronze</h2>
            <h1>Mr & Mrs Rusy Shroff</h1>
        </div>
    </div>
</div>

<div class="jumbotron slide black">
    <h1>Our Partners</h1>
</div>


<div class="slide sponsors">
    <div class="container">
        <div class="row">
            <h2>Travel</h2>
            <a href="http://www.bbtes.com/" target="_blank"><img class="img-responsive" src="<?php echo createImagePath("bb-travel.jpg","sponsors")?>" alt="sponsor" /></a>
        </div>
    </div>
</div>

<?php
    }
?>
