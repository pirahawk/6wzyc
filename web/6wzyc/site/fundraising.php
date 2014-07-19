<?php
    require '_layout.php';
?>

<?php
    function renderBody(){
?>


<div class="jumbotron slide">
    <h1>Fundraising</h1>
</div>

<div class="slide green">
    <div class="container">
        <div id="90816918213" class="row">
            <div data-bind="html: title"></div>
            <div class="carousel col-lg-offset-2" data-ride="carousel" data-interval="3000" data-pause="none">
                <div class="carousel-inner" data-bind="foreach: images">
                    <!--<div class="item <?php echo $img[1] ?>">
                        <img src="<?php echo createImagePath($img[0],"cue-haven")?>" alt="<?php echo $img[0] ?>" />
                    </div>-->
                    <div class="item ">
                            <img alt="fundraise-img" data-bind="attr:{src: $data}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
        renderFooter();
    }  
    
    function renderScript(){
?>
<script type="text/javascript">
    $(function () {

        WZYC.Tumblr.requestBlogSlides({blogId:'90816918213'});

    });
</script>
<?php
    }  
?>
