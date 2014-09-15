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

<div id="background" style="background-image:url('<?php echo createImagePath('auckland-pano.jpg',"site")?>')">
</div>


<div id="intro-slide" style="background-image:url('<?php echo createImagePath('auckland-pano.jpg',"site")?>')">
    <div id="splash-label">
        <h1><span class="site-green">6</span><span class="black">WZYC</span></h1><br/>
        <h2><span class="black">6<sup>th</sup> World Zoroastrian Youth Congress</span></h2><br/>
        <h3><span class="black">Auckland, New Zealand</span></h3><br/>
        <h3> <span class="gold">28<sup>th</sup> Dec 2015 - 2<sup>nd</sup> Jan 2016</span></h3><br/>
    </div>

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
                <img alt="6wzyc" src="<?php echo createImagePath("zanz.png","site")?>" class="logo">
            </div>
        </div>
    </div>
</section>


<section class="green">
    <div class="container">
        <h1>The Green Initiative</h1>
        <div class="row">
            <div class="col-md-6">
                <p>New Zealand and Zoroastrianism have an important common theme: New Zealand is reputed to be a ‘clean green’ country and Zoroastrianism is recognized as an environmentally conscious religion due, to the rituals and injunctions that aim to safeguard nature from polluting influences. The Green Initiative is an effort made by ZYNZ to hold the first ecologically conscious World Zoroastrian Youth Congress and we intend to achieve this by spreading awareness of New Zealand’s pristine environment, along with Zoroastrianism’s customs to the best of our ability.</p>
                <p>As part of our green initiative and fundraising drive, we (ZYNZ) will be planting a native New Zealand tree at CUE Haven for every NZ$10 donation to help create a greener future for the wider NZ community.</p>
                <p>Our Congress will stress the necessity to evolve as a faith and a community. Like the trees being planted, we only secure perpetuity through adaptability once our roots take to foreign ground.</p>
                <p>We are dedicated to assisting in the preservation of this land’s legacy, just as this Congress is in preserving that of our religion.</p>

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
        <h1>The Team</h1>
        <div class="row">
            <?php renderTeamList()?>
        </div>
    </div>
</section>


<?php
        renderFooter();
    }      
?>

