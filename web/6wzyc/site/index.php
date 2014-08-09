<?php
    require '_layout.php';
    
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
<div class="col-xs-12 col-md-3 center-txt">
    <img class="img-circle" alt="<?php echo $member["name"] ?>" src="<?php echo createImagePath($member["image"],"people")?>">
    <p class="name"><span class="yellow"><strong><?php echo $member["name"] ?></strong></span></p>
    <p class="title"><em><?php echo $member["title"] ?></em></p>
</div>

<?php
        }
    }
    
    function renderBody(){
?>

<div id="intro-slide" class="white-fg">
    <h1><span class="site-green">6</span><span class="black">WZYC</span></h1>
    <h2><span class="black">6<sup>th</sup> World Zoroastrian Youth Congress</span></h2>
    <h3>Auckland, New Zealand</h3>
    <h3>28<sup>th</sup> Dec 2015 - 2<sup>nd</sup> Jan 2014</h3>
</div>

<section>
    <div class="container">
        <h1>Welcome - <em>Haere Mai</em></h1>
        <div class="row">
            <div class="col-md-6">
                <p>We, the Zoroastrian Youth of New Zealand (ZYNZ) with the guidance of the Zarathushtrian Association of New Zealand (ZANZ) will be hosting and organising the 6th World Zoroastrian Youth Congress in 2015. Our vision is to create a global platform for our Zoroastrian youth to embrace our treasured culture, enhance our unique traditions and evolve to create a united future.</p>
                <p>We strive to provide a memorable, religious and social experience for our young global Zoroastrian attendees, while taking the initiative at organising the first ecologically conscious WZYC.</p>
            </div>

            <div class="col-md-6 center-txt">
                <img alt="6wzyc" src="<?php echo createImagePath("6wzyc.png","site")?>" class="logo">
                <img alt="6wzyc" src="<?php echo createImagePath("zanz.png","sponsors")?>" class="logo">
            </div>
        </div>
    </div>
</section>


<section class="green">
    <div class="container">
        <h1>The <em>Green</em> Initiative</h1>
        <div class="row">
            <div class="col-md-6">
                <p>CUE Haven is an initiative run by Thomas and Mahrukh Stazyk that is committed to the preservation of native plant and animal life. The 60 acre farm in Araparera, an hour north of the city and overlooking the Kaipara Harbour is to be reconverted into native forest.</p>
                <p>As part of our green initiative and fundraising drive, the 6th WZYC Organising Committee will be planting a native New Zealand tree at CUE Haven for every NZ$10 donation to help create a greener future for the wider NZ community.</p>
                <p>Our Congress will stress the necessity to evolve as a faith and a community. Like the trees being planted, we only secure perpetuity through adaptability once our roots take to foreign ground. The Stazyks are admirably dedicated to preserving this land’s legacy, just as this Congress is in preserving that of our religion.</p>
                <a class="btn btn-primary btn-lg" href="/cue-haven.php">About Cue Haven <i class="fa fa-angle-right"></i> </a>
            </div>

            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/kM9bLxTDpYc?showinfo=0&autohide=1&theme=light&cc_load_policy=0&controls=2&iv_load_policy=3&modestbranding=1&disablekb=1" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="black">
    <div class="container">
        <h1><em>Our</em> Team</h1>
        <div class="row">
            <?php renderTeamList()?>
        </div>
    </div>
</section>


<?php
        renderFooter();
    }      
?>

