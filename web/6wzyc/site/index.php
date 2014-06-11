<?php
    require '_layout.php';
?>

<?php
    
    function renderTitleCarousel(){
        $images = array(
        array("auk-1.jpg", "active"),
        array("auk-2.jpg"),
        array("auk-3.jpg"));
    
        foreach($images as $img){
?>
<div class="item <?php echo $img[1] ?>" style="background-image: url(<?php echo createImagePath($img[0],"site")?>);">
    <div class="container">
        <h1><span class="site-green">6</span>WZYC</h1>
        <h1><span class="yellow">6<sup>th</sup> World Zoroastrian Youth Congress</span></h1>
        <h2>Auckland, New Zealand</h2>
        <h3><span class="yellow">28<sup>th</sup> Dec 2015 - 2<sup>nd</sup> Jan 2014</span></h3>
    </div>
</div>
<?php
    
        }
    }
    
    function renderTeamList(){
        $team = array(
        array("name" => "Tinaz Karbhari","title" =>"Chair", "image" =>"tinaz.jpg"),
        array("name" => "Roxanne Medhora","title" =>"Co-Vice Chair", "image" =>"roxanne.jpg"),
        array("name" => "Nazneen Sukhia","title" =>"Co-Vice Chair", "image" =>"nazneen.jpg"),
        array("name" => "Burzin Fatakia","title" =>"Treasurer", "image" =>"burzin.jpg"),
        array("name" => "Xerxes Sukhia","title" =>"Secretary", "image" =>"xerxes.jpg"),
        array("name" => "Delzin Balsara","title" =>"Web Master", "image" =>"delzin.jpg"),
        array("name" => "Kainaz Jamasbnejad","title" =>"Visa & Registration", "image" =>"kainaz.jpg"),
        array("name" => "Mahafrin Suntoke","title" =>"Secretary Speakers", "image" =>"mahafrin.jpg"),
        array("name" => "Cyrus Daji","title" =>"Accomodation & Transport", "image" =>"cyrus.jpg"),
        array("name" => "Delzin & Zirak Vazifdar","title" =>"Fundraising", "image" =>"blank.jpg"),
        array("name" => "Ferzeen Irani","title" =>"Marketing", "image" =>"ferzeen.jpg"),
        array("name" => "Karmin Homavazir","title" =>"Entertainment", "image" =>"karmin.jpg")
        );
    
        foreach($team as $member){ 
?>
<li>
    <img class="img-circle" alt="<?php echo $member["name"] ?>" src="<?php echo createImagePath($member["image"],"people")?>">
    <p class="name"><strong><?php echo $member["name"] ?></strong></p>
    <p class="title"><em><?php echo $member["title"] ?></em></p>
</li>
<?php
         }
    }
?>


<?php
    function renderBody(){
?>

<div id="intro-slide" class="slide intro text-center">
    <div class="carousel" data-ride="carousel" data-interval="3500" data-pause="none">
        <div class="carousel-inner">
            <?php renderTitleCarousel() ?>
        </div>
    </div>
</div>

<div class="slide welcome">
    <div class="container text-left">
        <div class="row">
            <h1><strong>Welcome - <em>Haere Mai</em></strong></h1>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <p class="lead">
            We, the Zoroastrian Youth of New Zealand (ZYNZ) are the youth wing of the Zarathushtrian Association of New Zealand (ZANZ) and are hosting and organizing the 6th World Zoroastrian Youth Congress in 2015. Our vision is to create a global platform for our Zoroastrian youth to embrace our treasured culture, enhance our unique traditions and evolve to create a united future.
                </p>

                <p class="lead">
            We strive to provide a memorable, religious and social experience for our young global Zoroastrian attendees while taking the initiative at organising the first ecologically conscious WZYC.
                </p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <img alt="6wzyc" src="<?php echo createImagePath("6wzyc.jpg","site")?>" class="img-rounded">
            </div>
        </div>
    </div>
</div>

<div class="slide green">
    <div class="container">
        <div class="row">
            <h1><strong><em>Green</em> New Zealand</strong></h1>
        </div>
        <div class="row green-nz">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                <p class="lead">CUE Haven is an initiative run by Thomas and Mahrukh Stazyk that is committed to the preservation of native plant and animal life. The 60 acre farm in Araparera, an hour north of the city and overlooking the Kaipara Harbour is to be reconverted into native forest.</p>
                <p class="lead">As part our green initiative the 6thWZYC team is going to plant one tree for every delegate travelling to our shores in order to help offset their carbon footprint. Our congress will stress the necessity to evolve as a faith and a community. Like the trees being planted, we only secure perpetuity through adaptability once our roots take to foreign ground. The Stazyks are admirably dedicated to preserving this land’s legacy just as the congress is in preserving that of our religion.</p>
                <p>
                    <a class="btn btn-primary btn-lg" href="/cue-haven.php">About Cue Haven <i class="fa fa-angle-right"></i> </a>
                </p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 video-col">
                <iframe class="video" src="//www.youtube.com/embed/kM9bLxTDpYc?showinfo=0&autohide=1&theme=light&cc_load_policy=0&controls=2&iv_load_policy=3&modestbranding=1&disablekb=1" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="slide team black">
    <div class="container">
        <div class="row">
            <h1>Our Team</h1>
        </div>

        <div class="row text-center">
            <ul class="team-list list-inline">
                <?php renderTeamList()?>
            </ul>
        </div>
    </div>
</div>
<?php
        renderFooter();
    }    
?>
