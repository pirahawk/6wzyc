<?php
    require '_layout.php';
    
    function renderBody(){
?>

<div id="background" style="background-image:url('<?php echo createImagePath('press.jpg',"backgrounds")?>')">
</div>

<div class="page-title">
    <h1>Press</h1>
</div>

<section class="green">
    <div class="container">
        <h1>We're in the press</h1>
        <p>We have been mentioned in the press. Please browse through any of the articles below.</p>
        <h3><a href="<?php echo createDocumentPath("indian-newslink-young-zoros-setting-up-global-platform-2015.jpeg")?>" target="_blank">Indian Newslink - Young Zoroastrian's setting up global platform</a></h3>
        <h3><a href="<?php echo createDocumentPath("indian-newslink-green-initiative-motivates-zoroastrian-youth.jpeg")?>" target="_blank">Indian Newslink - Green initiative motivates Zoroastrian youth</a></h3>
        <h3><a href="<?php echo createDocumentPath("chehrenama-journal-for-an-experience-of-a-lifetime.png")?>" target="_blank">Chehrenama Journal - For an experience of a lifetime</a></h3>
        <h3><a href="<?php echo createDocumentPath("ormiston-times.pdf")?>" target="_blank">The Ormiston Times - Finding their roots</a></h3>
        <h3><a href="<?php echo createDocumentPath("hamazor-2015-congress-registration.png")?>" target="_blank">Hamazor - 6WZYC is now open for registration</a></h3>
        <h3><a href="<?php echo createDocumentPath("indian-newslink-pragmatic-minority.pdf")?>" target="_blank">Indian Newslink - Pragmatic Minority shines in excellence</a></h3>
        <h3><a href="<?php echo createDocumentPath("indian-newsLink-nature.jpg")?>" target="_blank">Indian Newslink - Young 'Zoros' bring Nature to the world stage</a></h3>
        <h3><a href="<?php echo createDocumentPath("indian-newsLink-global.jpg")?>" target="_blank">Indian Newslink - Young Zoroastrian's call for a global meet</a></h3>
        <h3><a href="<?php echo createDocumentPath("hamazor-2014.pdf")?>" target="_blank">Hamazor - Adventure of a Lifetime</a></h3>        
        <h3><a href="<?php echo createDocumentPath("fezana-2013.pdf")?>" target="_blank">Fezana - Kidz First Jammies in June and July</a></h3>
        <h3><a href="<?php echo createDocumentPath("fezana.pdf")?>" target="_blank">Fezana - 6WZYC announces accomodation venue</a></h3>
        <h3><a href="<?php echo createDocumentPath("cue-haven.pdf")?>" target="_blank">ZANZ - 6WZYC green initiative</a></h3>
    </div>
</section>

<?php
    
        renderFooter();
    }
    
?>
