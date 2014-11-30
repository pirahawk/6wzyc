<?php
        require '_layout.php';
    
    function renderBody(){
?>

<div id="background" style="background-color: #F5F5F5;" class="non-opaque">
</div>

<div class="page-title">
    <h1>Register for the 6WZYC</h1>
</div>


<section class="grey">
    <div class="container">
        <h1>Registration Instructions</h1>
        <p>The registration process for the congress has been seperated into a series of four steps that all delegates will be expected to undergo. 
            Click through each step below and ensure you have understood the registration process before proceeding:</p>

        <div class="panel-group" id="registration-body">

            <div class="panel cream">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a data-toggle="collapse" data-parent="#registration-body" href="#step-one">Step 1: Submit Registration Form</a>
                    </h3>
                </div>

                <div id="step-one" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Every Delegate must first complete and submit an online registration form, via our form submission service.</p>
                        <p>You will be required to provide supporting documentation as part of the registration. Please ensure you have the following documents ready <strong>prior to filling out the registration form</strong>:</p>
                        <ul>
                            <li>One <strong>verified<sup>*</sup></strong> visa copy for delegates who need a visa prior to entering New Zealand <em>(not required for New Zealand delegates)</em></li>
                            <li>One <strong>verified<sup>*</sup></strong> passport copy <em>(not required for New Zealand delegates)</em></li>
                            <li>One recent colour passport-sized photo, with an appropriate label/file name to identify the delegate and their country of origin</li>
                            <li>One doctor’s certificate if said delegate has a pre-existing medical condition</li>
                        </ul>
                        <p><em>(<strong>*</strong> Legal Verification in New Zealand is when the original document is sighted by a Justice of the Peace/Oath Taker/Registrar/Solicitor and the photocopy version is signed and dated/stamped by them or their company/firm)</em></p>
                        <p>Once you have provided all details, necessary documents and accepted the <a  href="<?php echo createDocumentPath("6wzyc-terms-conditions.pdf")?>" target="_blank">Terms and Conditions</a>, you may submit this form. <strong>Note:</strong> <em>You will not be required to make a payment at this stage</em></p>
                    </div>
                </div>


            </div>


            <div class="panel ice-blue">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a data-toggle="collapse" data-parent="#registration-body" href="#step-two">Step 2: Review</a>
                    </h3>
                </div>

                <div id="step-two" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Upon submission, you will recieve an email containing:</p>
                        <ul>
                            <li>A <strong>delegate id number</strong>, required for all future reference and communication</li>
                            <li>A copy of your submission</li>
                        </ul>
                        <p>Please ensure that you maintain a copy of this email as it will be required for all future references to your application.</p>
                        <p>The 6WZYC Organising Committee will then review your application and ensure it meets all the necessary criteria.</p>
                    </div>
                </div>
            </div>


            <div class="panel light-green">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a data-toggle="collapse" data-parent="#registration-body" href="#step-three">Step 3: Payment</a>
                    </h3>
                </div>

                <div id="step-three" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Once your application has been reviewed, we will send you an email confirming your eligibility to attend the conference.</p>
                        <p>If you have been accepted, you will need to follow the instructions specified in the email to make payment for the congress.</p>
                    </div>
                </div>
            </div>


            <div class="panel violet">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a data-toggle="collapse" data-parent="#registration-body" href="#step-four">Step 4: Confirmation</a>
                    </h3>
                </div>

                <div id="step-four" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Upon receiving payment, the Organising Committee will issue a letter of confirmation for attending the Congress. Please make sure you carry this letter with your passport as proof of the reason for your visit to New Zealand. <strong>Note:</strong><em>This letter cannot be used as a letter of reference.</em></p>
                    </div>
                </div>
            </div>
        </div>

        <p>If you have any further questions, please refer to the <a href="/faq.php">FAQ's</a> or feel free to email us at <a href="mailto:register.6thwzyc@gmail.com">register.6thwzyc@gmail.com</a></p>
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
        <h1>Pricing</h1>
        <ul>
            <li><strong>Early Bird Rate</strong>: NZD $1049.00 (valid from 1<sup>st</sup> December 2014 - 12<sup>th</sup> April 2015)</li>
            <li><strong>Casual Rate</strong>: NZD $1199.00 (valid from 13<sup>th</sup> April 2015 - 16<sup>th</sup> August 2015)</li>
            <li><strong>Last minute Rate</strong>: NZD $1349.00 (valid from 17<sup>th</sup> August 2015 - 13<sup>th</sup> December 2015)</li>
        </ul>
    </div>
</section>

<section class="grey">
    <div class="container">
        <h1>Register For the Congress</h1>
        <p>Please click through to begin your registration</p>
        <a class="btn btn-success btn-lg" href="https://fs30.formsite.com/6thWZYC/6wzyc-registration-form/form_login.html">Register <i class="fa fa-angle-right"></i></a>
    </div>
</section>


<?php
    renderFooter();
    }    
?>
