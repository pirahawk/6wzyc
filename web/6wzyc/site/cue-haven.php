<?php
    require '_layout.php';
?>


<?php
    function renderCarousel(){
    
            $images = array(
            array("ch-1.jpg", "active"),
            array("ch-2.jpg"),
            array("ch-3.jpg"));
    
            foreach($images as $img){
?>

<div class="item <?php echo $img[1] ?>">
    <img src="<?php echo createImagePath($img[0],"cue-haven")?>" alt="<?php echo $img[0] ?>" />
</div>
<?php
            }    
    }    
    
    
    function renderBody(){
?>

<div class="jumbotron slide">
    <h1>CUE Haven</h1>
</div>

<div class="slide">
    <div class="container">
        <div class="row">
            <div class="carousel col-lg-offset-2" data-ride="carousel" data-interval="3000" data-pause="none">
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
                CUE Haven is an initiative run by Thomas and Mahrukh Stazyk that is committed to the preservation of native plant and animal life. The 60 acre farm in Araparera, an hour north of the city and overlooking the Kaipara Harbour is to be reconverted into native forest. The restoration plan will be completed over a 15 year period. The undertaking is meticulously planned far into its completion and the Stazyks work painstakingly hard in adhering to its each stage. The detailed re-vegetation attempts to create a haven among all too common stretches of agricultural land being divided and sub-divided for lifestyle blocks or property development.
            </p>

            <p class="lead">
                The parallel between the objectives of the congress and that of the cause is drawn in the need for collective effort. Our congress will stress the necessity to evolve as a faith and a community. Like the trees being planted, we only secure perpetuity through adaptability once our roots take to foreign ground. The Stazyks are admirably dedicated to preserving this land’s legacy just as the congress is in preserving that of our religion.
            </p>

            <p class="lead">
                Thomas and Mahrukh Stazyk carry out their vision with an emphatic and contagious zeal that rings true with all that the youth congress stands for in its aim of preserving posterity. We’ve chosen nature to be a central fixture of the congress just as Zoroastrianism is predominantly a faith founded on the transcendence of nature. CUE Haven is more than a unique cause; it’s an imperative in a world that too readily overlooks nature. The Zoroastrian Youth of New Zealand will plant trees on the behalf of congress attendees in an attempt to offset their carbon footprint. In time, these plants will grow into a lasting and collective contribution.
            </p>
            <a class="btn btn-primary btn-lg" href="http://cuehaven.com/" target="_blank">Find Out More <i class="fa fa-angle-right"></i> </a>
        </div>
    </div>
</div>

<?php
    renderFooter();
    }    
?>

