<?php
    require '_layout.php';
    
    function renderCarousel(){
        $images = array(
            array("kc-1.jpg", "active"),
            array("kc-2.jpg"),
            array("kc-3.jpg"),
            array("kc-4.jpg"),
            array("kc-5.jpg"));
    
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

<div class="page-title">
    <h1>King's College</h1>
</div>

<section>
    <div class="container">
        <h1>About <em>King's College</em></h1>
        <div class="row">
            <div class="col-12">
                <p>Founded in 1896, King's College is one of New Zealand's top private secondary schools. It prides itself at being the best it can be through the College’s various Disciplines, which includes: academic, sporting, cultural, spiritual and social. With links to the Anglican Church, the foundation of Kings is built on generosity of spirit, gratitude, honesty, moral courage, pursuit of learning, respect, spirituality and tolerance (http://www.kingscollege.school.nz).</p>
                <p>The 6th WZYC Organising Committee have grown to create a highly respectable and professional working relationship with Kings College and are very confident that Kings will be a great host to our delegates. We cannot wait to show off this little gem situated in the suburbs of Auckland and we hope to see you all there!</p>
            </div>
        </div>
    </div>
</section>

<section class="stretch">
    <div class="carousel" data-ride="carousel" data-interval="3000" data-pause="none">
        <div class="carousel-inner">
            <?php renderCarousel() ?>
        </div>
    </div>
</section>

<section class="green">
    <div class="container">
        <h1>Location</h1>
        <div class="row">
            <div class="col-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="map embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51007.705624992115!2d174.80322236178807!3d-36.962496243854666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d4e9387b661f5%3A0xb11f02d9696aeaf6!2sKing&#39;s+College!5e0!3m2!1sen!2snz!4v1400398685320" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    renderFooter();
    }     
?>