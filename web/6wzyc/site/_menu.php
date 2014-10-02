<?php
        /*Render the menu bar*/
    function createSiteMenu(){
?>
<nav id="navigation-bar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#all-navbar-links">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/about.php">6WZYC</a>
        </div>

        <div class="collapse navbar-collapse" id="all-navbar-links">
            <ul class="nav navbar-nav">
                <li><a href="/accommodation.php">Accommodation</a></li>
                <li><a href="/sponsors.php">Sponsors &amp; Partners</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fundraising<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/fundraising.php?year=2011">2011</a></li>
                        <li><a href="/fundraising.php?year=2012">2012</a></li>
                        <li><a href="/fundraising.php?year=2013">2013</a></li>
                    </ul>
                </li>
                <li><a href="/press.php">Press</a></li>
                <li><a href="/cue-haven.php">CUE-Haven</a></li>
                <li><a href="/contact-us.php">Contact Us</a></li>
                <li><a href="/faq.php">FAQ</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://twitter.com/6WZYC" target="_blank" rel="nofollow"><i class="fa fa-twitter-square fa-5" rel=''></i></a></li>
                <li><a href="https://www.facebook.com/groups/223424211030360/" target="_blank" rel="nofollow"><i class="fa fa-facebook-square fa-5"></i></a></li>
                <li><a href="http://6wzyc.tumblr.com/" target="_blank" rel="nofollow"><i class="fa fa-tumblr-square fa-5"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

<?php
    }
?>

