<?php
    require '_layout.php';
    
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
<div id="background" style="background-image:url('<?php echo createImagePath('ch-2.jpg',"cue-haven")?>')">
</div>

<div class="page-title">
    <h1>The Green Initiative</h1>
</div>

<section>
    <div class="container">
        <h1>About CUE Haven</h1>
        <p>
            CUE Haven is located an hour north of Auckland and overlooks the Kaipara Harbour – the largest inland harbour in the Southern Hemisphere.  A former dairy farm, CUE Haven is being restored into a native New Zealand forest.  Thomas and Mahrukh Stazyk started the restoration project in 2008 and with the help of hundreds of volunteers from the community, have to date planted over 128,000 native trees.
        </p>
        
        <p>
            The restoration has resulted in rehabilitating the streams and wetlands on the property and enhancing the water quality flowing into the Kaipara Harbour. It has also increased bird habitat and enhanced biodiversity and wildlife values
        </p>

        <p>
            After the entire property has been revegetated with native trees, the Stazyks intend to covenant the property with the Queen Elizabeth II Open Spaces Trust (administered by the NZ Department of Conservation), to ensure that the trees are protected into perpetuity. The property will be ultimately gifted to the community to enjoy as a nature reserve.
        </p>

        <p>
            The parallel between the objectives of the congress and that of the cause is drawn in the need for collective effort. Our congress will stress the necessity to evolve as a faith and a community. Like the trees being planted, we only secure perpetuity through adaptability once our roots take to foreign ground. The Stazyks are admirably dedicated to preserving this land’s legacy just as the congress is in preserving that of our religion.
        </p>

        <p>
            Thomas and Mahrukh carry out their vision with an emphatic and contagious zeal that rings true with all that the youth congress stands for in its aim of preserving posterity. We’ve chosen nature to be a central fixture of the congress just as Zoroastrianism is predominantly a faith founded on the transcendence of nature.
        </p>

        <p>
            The Zoroastrian Youth of New Zealand will plant a tree at CUE Haven for every $10 donated. These trees will be lasting legacies for generations to enjoy.
        </p>

        <p>
            Offset your carbon footprint……..but leave your mark on this planet!
        </p>
        
        <a class="btn btn-primary btn-lg" href="http://cuehaven.com/" target="_blank">Find Out More <i class="fa fa-angle-right"></i> </a>


    </div>
</section>


<section class="blue">
    <div class="container">
        <h1>Donate to The Green Initiative</h1>
        <p>To support the Green Initiative, please follow the link below.</p>
        <a class="btn btn-default btn-lg" href="https://www.txtpay.co.nz/VPos/VPos.aspx?merchant=ZANZ&type=Payment" target="_blank" rel="nofollow">Donate to The Green Initiative <i class="fa fa-angle-right"></i></a>
    </div>
</section>

<section class="black">
    <div class="container">
        <div class="carousel" data-ride="carousel" data-interval="3000" data-pause="none">
            <div class="carousel-inner">
                <?php renderCarousel() ?>
            </div>
        </div>
    </div>
</section>

<?php
    renderFooter();
    }    
?>

