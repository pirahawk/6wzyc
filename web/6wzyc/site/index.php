<?php
    require '_layout.php';
?>

<?php
    function renderBody(){
?>

<div id="intro-slide" class="slide intro text-center">
            <!--<div class="container">
                                        <h1><span class="site-green">6</span>WZYC</h1>
                                        <h1><strong> 6<sup>th</sup> World Zoroastrian Youth Congress</strong></h1>
                                        <h2>Auckland, New Zealand</h2>
                                        <h3>28<sup>th</sup> Dec 2015 - 2<sup>nd</sup> Jan 2014</h3>
                                    </div>-->
    <div class="carousel" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(<?php echo createImagePath("auk-1.jpg","site")?>);">
                <div class="container">
                    <h1><span class="site-green">6</span>WZYC</h1>
                    <h1><span class="yellow">6<sup>th</sup> World Zoroastrian Youth Congress</span></h1>
                    <h2>Auckland, New Zealand</h2>
                    <h3><span class="yellow">28<sup>th</sup> Dec 2015 - 2<sup>nd</sup> Jan 2014</span></h3>
                </div>
            </div>

            <div class="item" style="background-image: url(<?php echo createImagePath("auk-2.jpg","site")?>);">
                <div class="container">
                    <h1><span class="site-green">6</span>WZYC</h1>
                    <h1><span class="yellow">6<sup>th</sup> World Zoroastrian Youth Congress</span></h1>
                    <h2>Auckland, New Zealand</h2>
                    <h3><span class="yellow">28<sup>th</sup> Dec 2015 - 2<sup>nd</sup> Jan 2014</span></h3>
                </div>
            </div>

            <div class="item" style="background-image: url(<?php echo createImagePath("auk-3.jpg","site")?>);">
                <div class="container">
                    <h1><span class="site-green">6</span>WZYC</h1>
                    <h1><span class="yellow">6<sup>th</sup> World Zoroastrian Youth Congress</span></h1>
                    <h2>Auckland, New Zealand</h2>
                    <h3><span class="yellow">28<sup>th</sup> Dec 2015 - 2<sup>nd</sup> Jan 2014</span></h3>
                </div>
            </div>
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
                <li>
                    <img class="img-circle" alt="tinaz" src="<?php echo createImagePath("tinaz.jpg","people")?>">
                    <p class="name"><strong>Tinaz Karbhari</strong></p>
                    <p class="title"><em>Chair</em></p>
                </li>

                <li>
                    <img class="img-circle" alt="Roxanne" src="<?php echo createImagePath("roxanne.jpg","people")?>">
                    <p class="name"><strong>Roxanne Medhora</strong></p>
                    <p class="title"><em>Co-Vice Chair</em></p>
                </li>

                <li>
                    <img class="img-circle" alt="nazneen" src="<?php echo createImagePath("nazneen.jpg","people")?>">
                    <p class="name"><strong>Nazneen Sukhia</strong></p>
                    <p class="title"><em>Co-Vice Chair</em></p>
                </li>

                <li>
                    <img class="img-circle" alt="burzin" src="<?php echo createImagePath("burzin.jpg","people")?>">
                    <p class="name"><strong>Burzin Fatakia</strong></p>
                    <p class="title"><em>Treasurer</em></p>
                </li>

                <li>
                    <img class="img-circle" alt="xerxes" src="<?php echo createImagePath("xerxes.jpg","people")?>">
                    <p class="name"><strong>Xerxes Sukhia</strong></p>
                    <p class="title"><em>Secretary</em></p>
                </li>

                <li>
                    <img class="img-circle" alt="delzin" src="<?php echo createImagePath("delzin.jpg","people")?>">
                    <p class="name"><strong>Delzin Balsara</strong></p>
                    <p class="title"><em>Web Master</em></p>
                </li>

                <li>
                    <img class="img-circle" alt="kainaz" src="<?php echo createImagePath("kainaz.jpg","people")?>">
                    <p class="name"><strong>Kainaz Jamasbnejad</strong></p>
                    <p class="title"><em>Visa & Registration</em></p>
                </li>



                <li>
                    <img class="img-circle" alt="mahafrin" src="<?php echo createImagePath("mahafrin.jpg","people")?>">
                    <p class="name"><strong>Mahafrin Suntoke</strong></p>
                    <p class="title"><em>Secretary Speakers</em></p>
                </li>

                <li>
                    <img class="img-circle" alt="cyrus" src="<?php echo createImagePath("cyrus.jpg","people")?>">
                    <p class="name"><strong>Cyrus Daji</strong></p>
                    <p class="title"><em>Accomodation & Transport</em></p>
                </li>

                <li>
                    <img class="img-circle" alt="blank" src="<?php echo createImagePath("blank.jpg","people")?>">
                    <p class="name"><strong>Delzin & Zirak Vazifdar</strong></p>
                    <p class="title"><em>Fundraising</em></p>
                </li>

                <li>
                    <img class="img-circle" alt="ferzeen" src="<?php echo createImagePath("ferzeen.jpg","people")?>">
                    <p class="name"><strong>Ferzeen Irani</strong></p>
                    <p class="title"><em>Marketing</em></p>
                </li>

                <li>
                    <img class="img-circle" alt="karmin" src="<?php echo createImagePath("karmin.jpg","people")?>">
                    <p class="name"><strong>Karmin Homavazir</strong></p>
                    <p class="title"><em>Entertainment</em></p>
                </li>

            </ul>

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