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
                        <p>You can make your payments online using <a href="https://www.swipehq.co.nz" target="_blank">Swipe</a>. 
                            Please ensure you read and follow the instructions below:</p>

                        <ol>
                            <li>All online payments will incur an additional charge of <strong>3.25%</strong> to cover transaction costs.</li>
                            <li>When making payment you will be required to enter your billing details.</li>
                            <li><strong>If you are a delegate paying for yourself to attend the congress</strong>, please ensure your <strong>Email address</strong> matches the email address supplied on your registration form to allow us to track your payment successfully.</li>
                            <li><strong>If you are a third-party/organization paying for the delegate to attend the congress</strong>, please ensure your <strong>Email address</strong> matches the email address nominated by each of the respective delegate/delegate's on their registration form to allow us to track your payment successfully.</li>
                            <li>Failure to comply with the above will be classified as non-payment.</li>
                        </ol>
                        <p>You will currently be charged NZD <strong>$980</strong> per person (3.25% transaction charge inclusive).</p>
                        <p>Please click the 'Pay Now' button. You will then be redirected to the payment portal.</p>


                        <form action="https://payment.swipehq.com/" method="POST" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td>
                                        <input  id="item_quantity" name="item_quantity" type="hidden" value="1">
                                    </td>
                                    <td>
                                        <div style="width:95px; height:30px; border: thin solid grey; background-color: #9FBF00; text-align: center; border-radius: 9px; cursor: pointer;">
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
                                                <tr>
                                                    <td align="center" style="border: none;">
                                                        <input style="cursor:pointer; color:#fff; text-decoration: none; font-family:'Arial', 'Helvetica', sans-serif; font-size: 14px; font-weight: bold; border: none; background-color: #9FBF00;" type="submit" id="submit" value="Pay Now!!" name="submit"><input type="hidden" id="product_id" name="product_id" value="11DC09EBDD2D1">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </form>
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
                        <p>Please use this option if you wish to pay for attending the congress <strong>and make a NZD $10 donation to support the Green Initiative</strong>.</p>
                        <p>You can make your payments online using <a href="https://www.swipehq.co.nz" target="_blank">Swipe</a>. 
                            Please ensure you read and follow the instructions below:</p>

                        <ol>
                            <li>All online payments will incur an additional charge of <strong>3.25%</strong> to cover transaction costs.</li>
                            <li>When making payment you will be required to enter your billing details.</li>
                            <li><strong>If you are a delegate paying for yourself to attend the Congress</strong>, please ensure your <strong>Email address</strong> matches the email address supplied on your registration form to allow us to track your payment successfully.</li>
                            <li><strong>If you are a third-party/organization paying for the delegate to attend the Congress</strong>, please ensure your <strong>Email address</strong> matches the email address nominated by each of the respective delegate(s) on their registration form to allow us to track your payment successfully.</li>
                            <li>Failure to comply with the above will be classified as non-payment.</li>
                        </ol>
                        <p>You will currently be charged NZD <strong>$990</strong> per person (3.25% transaction charge inclusive).</p>
                        <p>Please click the 'Pay Now' button. You will be redirected to the payment portal.</p>


                        <form action="https://payment.swipehq.com/" method="POST" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td>
                                        <input  id="item_quantity" name="item_quantity" type="hidden" value="1">
                                    </td>
                                    <td>
                                        <div style="width:95px; height:30px; border: thin solid grey; background-color: #9FBF00; text-align: center; border-radius: 9px; cursor: pointer;">
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
                                                <tr>
                                                    <td align="center" style="border: none;">
                                                        <input style="cursor:pointer; color:#fff; text-decoration: none; font-family:'Arial', 'Helvetica', sans-serif; font-size: 14px; font-weight: bold; border: none; background-color: #9FBF00;" type="submit" id="submit" value="Pay Now!!" name="submit"><input type="hidden" id="product_id" name="product_id" value="40E88EB37CCE6">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </form>
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
                        <p>All international bank transfers will require the following information and will incur a receiving fee of NZD $25. This will be added to your registration cost.</p>
                        <p>You will need the following information to make the transfer:</p>
                        <ul>
                            <li>Reference: You will need to use your <strong>Delegate Id</strong>, assigned upon submitting your registration form, as a reference when making the payment. This will allow us to match your payment to your registration form.</li>
                            <li>Name of PAYEE account: ZANZ WORLD ZOROASTRIAN YOUTH CONGRESS</li>
                            <li>Name of Bank: ASB Bank Limited</li>
                            <li>Bank Mailing Address: PO Box 35, Shortland Street, Auckland 1140, New Zealand</li>
                            <li>SWIFT or BIC code: ASBBNZ2A</li>
                            <li>IBAN/Account Number: 12-3233-0611957-01</li>
                        </ul>
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