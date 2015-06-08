<?php
        require '_layout.php';
    
    function renderBody(){
?>

<div id="background" style="background-color: #F5F5F5;" class="non-opaque">
</div>

<div class="page-title">
    <h1>Discounted Price for the 6WZYC</h1>
</div>


<section class="grey">
    <div class="container">
        <h1>Discounted Pricing</h1>
        <p><strong>This page is reserved for people who have received a special discounted rate by expressing their interest at the 10<sup>th</sup> World Zoroastrian Congress in Mumbai (27<sup>th</sup> - 30<sup>th</sup> December 2013).</strong></p>
        <p><strong>Please refrain from making payment on this page unless you have been contacted by the 6WZYC Organizing comittee. Failure to do so will be classified as non-payment for the congress and refunds will not be provided.</strong></p>
    </div>
</section>

<section class="green">
    <div class="container">
        <h1>Terms and Conditions</h1>
        <p>Please ensure you have read and understood the Terms and Conditions of the 6WZYC before proceeding</p>
        <a class="btn btn-primary btn-lg" href="<?php echo createDocumentPath("6wzyc-terms-conditions.pdf")?>" target="_blank">Terms and Conditions <i class="fa fa-angle-right"></i></a>
    </div>
</section>




<section class="grey">
    <div class="container">
        <h1>Payment Instructions</h1>
        <p>You can make payment for the congress using either of the following options. Please click on the option you wish to use:</p>

        <div class="panel-group" id="registration-body">

            <div class="panel cream">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a data-toggle="collapse" data-parent="#registration-body" href="#step-one">Pay Online (Credit Card)</a>
                    </h3>
                </div>

                <div id="step-one" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p><strong>Discounted pricing for the congress has now closed.</strong></p>
                    </div>
                </div>
            </div>


            <div class="panel light-green">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a data-toggle="collapse" data-parent="#registration-body" href="#step-two">Pay Online (Credit Card) & support the Green Initiative</a>
                    </h3>
                </div>

                <div id="step-two" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p><strong>Discounted pricing for the congress has now closed.</strong></p>
                    </div>
                </div>
            </div>


            <div class="panel ice-blue">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a data-toggle="collapse" data-parent="#registration-body" href="#step-three">Bank Transfer</a>
                    </h3>
                </div>

                <div id="step-three" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p><strong>Discounted pricing for the congress has now closed.</strong></p>
                    </div>
                </div>
            </div>

        </div>

        <p>If you have any further questions, please refer to the <a href="/faq.php">FAQ's</a> or feel free to email us at <a href="mailto:register.6thwzyc@gmail.com">register.6thwzyc@gmail.com</a></p>
    </div>
</section>



<?php
    renderFooter();
    }    
?>
