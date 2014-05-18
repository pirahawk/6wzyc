<?php
    require '_layout.php';
?>

<?php
    function renderCarousel(){
    
            $images = array(
            array("kc-1.jpg", "active"),
            array("kc-2.jpg"),
            array("kc-3.jpg"),
            array("kc-4.jpg"),
            array("kc-5.jpg"),
            array("kc-6.jpg"),
            array("kc-7.jpg"),
            array("kc-8.jpg"),
            array("kc-9.jpg"),
            array("kc-10.jpg"),
            array("kc-11.jpg"),
            array("kc-12.jpg"));
    
            foreach($images as $img){
?>

<div class="item <?php echo $img[1] ?>">
    <img src="<?php echo createImagePath($img[0],"location")?>" alt="<?php echo $img[0] ?>" />
</div>
<?php
            }    
    }    
    
    
    function renderBody(){
?>
<div class="slide">
    <div class="container text-left">
        <div class="row">
            <h1><strong>King's College</strong></h1>
            <div class="carousel col-lg-offset-2" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <?php renderCarousel() ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="slide green">
    <div class="container text-left">
        <div class="row">
            
            <p class="lead">
                Founded in 1896, King's College is one of New Zealand's top private secondary schools. It prides itself at being the best it can be through the College’s various Disciplines, which includes: academic, sporting, cultural, spiritual and social. With links to the Anglican Church, the foundation of Kings is built on generosity of spirit, gratitude, honesty, moral courage, pursuit of learning, respect, spirituality and tolerance (http://www.kingscollege.school.nz).
            </p>
            <p class="lead">
                The 6thWZYC team have grown to create a highly respectable and professional working relationship with Kings College and are very confident that Kings will be a great host to our delegates. We cannot wait to show off this little gem situated in the suburbs of Auckland and we hope to see you all there!
            </p>
        </div>
    </div>
</div>

<?php
    }    
?>