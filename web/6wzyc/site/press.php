<?php
    require '_layout.php';
    
    function renderBody(){
?>

<div id="background" style="background-color: #F5F5F5;" class="non-opaque">
</div>

<div class="page-title">
    <h1>Press</h1>
</div>

<section>
    <div class="container">
        <h1>We're in the press</h1>
        <p>We have been mentioned in the press a couple of times. Please browse through any of the articles below.</p>
        <h3><a href="<?php echo createDocumentPath("hamazor-2014.pdf")?>" target="_blank">Hamazor - 2014</a></h3>
        <h3><a href="<?php echo createDocumentPath("indian-newslink.jpg")?>" target="_blank">Indian Newslink - 2014</a></h3>
        <h3><a href="<?php echo createDocumentPath("fezana-2013.pdf")?>" target="_blank">Fezana - 2013</a></h3>
        <h3><a href="<?php echo createDocumentPath("fezana.pdf")?>" target="_blank">Fezana</a></h3>
        <h3><a href="<?php echo createDocumentPath("cue-haven.pdf")?>" target="_blank">Cue Haven</a></h3>
    </div>
</section>

<?php
    
        renderFooter();
    }
    
?>
