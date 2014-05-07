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

<div class="slide">
    <div class="container text-left">
        <div class="row">
            <h1><strong>Welcome - <em>Haere Mai</em></strong></h1>
            <p class="lead">
            We, the Zoroastrian Youth of New Zealand (ZYNZ) are the youth wing of the Zarathushtrian Association of New Zealand (ZANZ) and are hosting and organizing the 6th World Zoroastrian Youth Congress in 2015. Together as a team, our goal is to provide a memorable, religious and social experience, to create a strong networking base for our young global Zoroastrian attendees. We take great pride in the country we live in and welcome our fellow Zoroastrian youth to experience the scenic environment we call HOME.
            </p>

            <p class="lead">
            We have a vision to create a global platform for our Zoroastrian youth to embrace our treasured culture, enhance our unique traditions and evolve to create a united future. We stand as the future generation and hope to grow together as we learn from one another.
            </p>
        </div>

    </div>
</div>

<div class="slide green">
    <div class="container">
        <div class="row green-nz">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <h1><strong><em>Green</em> New Zealand</strong></h1>
                <p class="lead">The 6th WZYC organisers envision making this event the first ecologically conscious World Zoroastrian Youth Congress.</p>
                <p class="lead">By aiming to create an eco-friendly event, we hope to spread awareness of our country’s pride and educate ourselves of our religious responsibilities.</p>
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


<div class="slide sponsors">
    <div class="container">
        <div class="row">
            <h1>Our Sponsors</h1>
        </div>
        <div class="row">
            <div class="col-lg-offset-3">
                <a href="http://www.seruminstitute.com/" target="_blank"><img class="img-responsive sponsor" src="<?php echo createImagePath("poona.jpg","sponsors")?>" alt="sponsor" /></a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <img class="img-responsive" src="<?php echo createImagePath("hk.jpg","sponsors")?>" alt="sponsor" />
            </div>
            <div class="col-lg-offset-4 col-lg-4">
                <a href="http://www.zanz.org.nz/" target="_blank"><img class="img-responsive sponsor" src="<?php echo createImagePath("zanz.jpg","sponsors")?>" alt="sponsor" /> </a>
            </div>
        </div>
    </div>

    <?php
        }    
    ?>

    <?php
        function renderScript(){
    ?>

    <script>
        $(function () {
        
            var resizeFunc = function () {
                var navBar = document.getElementById('navigation-bar');
                if (navBar) {
                    var scrollHeight = navBar.scrollHeight;
                    $('#intro-slide').css('margin-top', scrollHeight + 'px');
                }
            };
        
            $(window).resize(resizeFunc);
            resizeFunc();
        });
    </script>


    <?php
        }    
    ?>
