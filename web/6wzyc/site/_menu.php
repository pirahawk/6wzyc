<?php
        /*Render the menu bar*/
    function createSiteMenu(){
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#all-navbar-links">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#">6WZYC</a>
        </div>

        <div class="collapse navbar-collapse" id="all-navbar-links">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Away</a></li>
                <li><a href="#">Something</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://twitter.com/6WZYC"><i class="fa fa-twitter-square fa-5"></i></a></li>
                <li><a href="https://www.facebook.com/groups/223424211030360/"><i class="fa fa-facebook-square fa-5"></i></a></li>                
            </ul>
        </div>
    </div>
</nav>

<?php
    }
?>

