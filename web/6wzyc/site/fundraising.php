<?php
        require '_layout.php';
    
    function getYear(){
        if(is_numeric($_GET["year"])){
            return  $_GET["year"];
        }
        return  '2011';
    }
    
    function getEventsForYear($year){
        $eventMap = array(
        '2011' => array(), 
        '2012'=> array('90817083633', '90816918213'), 
        '2013'=> array('90817818123' ), 
        '2014'=> array(), 
        '2015'=> array());
    
        if(array_key_exists($year, $eventMap)){
                return $eventMap[$year];
        }
        return array();
    }
    
    function renderEvents($year, $events){
?>

<div class="page-title">
    <h1>Fundraising <?php echo $year?></h1>
</div>


<?php
    $index = 0;
    foreach($events as $eventId){
?>

<section class="slide <?php if($index++ % 2 == 0){ echo ''; }else{ echo 'black';} ?>">
    <div class="container fundraising center-txt" id="<?php echo $eventId?>">
        <h1 data-bind="html: title"></h1>
        <div class="carousel"  data-ride="carousel" data-interval="3000" data-pause="none">
            <div class="carousel-inner" data-bind="foreach: images">
                <div class="item">
                     <img data-bind="attr:{src: $data}" class="fundraise-img" />
                </div>
            </div>
        </div>
        <a target="_blank" data-bind="attr:{href: postUrl}">View on Blog</a>
    </div>
</section>

<?php
        }
    }
    
    function renderBody(){

?>

<div id="background" style="background-image:url('<?php echo createImagePath('fundraising.jpg',"backgrounds")?>')">
</div>

<?php

        $year = getYear();
        $events = getEventsForYear($year);
        renderEvents($year, $events);
        renderFooter();
    }  
    
    function renderFundRaiseScript(){
?>
<script type="text/javascript">
        $(function () {
    <?php   
            $year = getYear();
            $events = getEventsForYear($year);
            foreach($events as $eventId){
    ?> 
        WZYC.Tumblr.requestBlogSlides({blogId:'<?php echo $eventId?>'});
    <?php
            }
    ?>    
        });
</script>
<?php
    }  
?>
