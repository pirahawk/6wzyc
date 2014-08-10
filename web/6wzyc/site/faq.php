<?php
    require '_layout.php';
    
    function startHeading($idTagName){
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <a data-toggle="collapse" data-parent="#faq-body" href="#<?php echo $idTagName ?>">
                <!--Collapsible Group Item #1-->
                <?php
                                   }
                    
                    function endHeading(){
                ?>
            </a>
        </h3>
    </div>
    <?php
        }
        
        
        
        function startAnswer($idTagName){
    ?>
    <div id="<?php echo $idTagName ?>" class="panel-collapse collapse">
        <div class="panel-body">
            <?php
                }
                
                function endAnswer(){
            ?>
        </div>
    </div>
</div>
<?php
    }
    
    
    function renderBody(){
?>

<div id="background" style="background-color: #F5F5F5;" class="non-opaque">
</div>

<div class="page-title">
    <h1>Frequently Asked Questions</h1>
</div>


<section>
    <div class="container">
        <div class="panel-group" id="faq-body">

            <?php startHeading('q1');?>
            Who can attend the Congress
            <?php endHeading();?>
            <?php startAnswer('q1');?>
            <p>Registration is open to all global practicing Zoroastrians from age 15 (27<sup>th</sup> December 1975) to 35 (as of 3<sup>rd</sup> January 2016).</p>
            <?php endAnswer();?>

            <?php startHeading('q2');?>
            Where do I send questions/queries
            <?php endHeading();?>
            <?php startAnswer('q2');?>
            <p>Please email: &#104;&#101;&#108;&#112;&#046;&#054;&#116;&#104;&#119;&#122;&#121;&#099;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</p>
            <?php endAnswer();?>


            <?php startHeading('q3');?>
            Does my country require a visa to enter into New Zealand
            <?php endHeading();?>

            <?php startAnswer('q3');?>
            <p>For the most comprehensive list of countries requiring a visa, please consult the <a href="http://glossary.immigration.govt.nz/visafreecountries.htm" target="_blank">New Zealand Government Immigration website</a></p>
            <?php endAnswer();?>


            <?php startHeading('q4');?>
            How do I get help with visa’s
            <?php endHeading();?>

            <?php startAnswer('q4');?>
            <p>Any help or advice you need with visas please contact <i>Mrs Kainaz Jamasbnejad</i> at: <?php renderEmailAddress()?></p>
            <?php endAnswer();?>


            <?php startHeading('q5');?>
            How does the airport pick up and drop off work
            <?php endHeading();?>
            <?php startAnswer('q5');?>
            <p>Airport pick up will be provided on the 28th of December. Please send us your flight details via <?php renderEmailAddress()?> once you book your flights. There will be a volunteer waiting for you to transport you to Kings College when you arrive. Drop offs will also be provided on the 2nd of January. Transportation to and from the Congress will only be provided on 28<sup>th</sup> December and 2<sup>nd</sup> January.</p>
            <?php endAnswer();?>


            <?php startHeading('q6');?>
            Which airport do I fly to
            <?php endHeading();?>
            <?php startAnswer('q6');?>
            <p>Please fly into Auckland International Airport.</p>
            <?php endAnswer();?>


            <?php startHeading('q7');?>
            How many people are in one room
            <?php endHeading();?>
            <?php startAnswer('q7');?>
            <p>Each delegate will be given single room accommodation. Delegates can request to be put in rooms next to one another. Married couples and underage minors (15-17years) of the same gender will be given the option of sharing a room with one other person or having individual rooms.</p>
            <?php endAnswer();?>

            <?php startHeading('q8');?>
            If I attend the Congress on my own, how will my accommodation work
            <?php endHeading();?>
            <?php startAnswer('q8');?>
            <p>We will place you in a room next to people that are roughly the same age and gender.</p>
            <?php endAnswer();?>

            <?php startHeading('q9');?>
            Is it true that you can’t register for the Congress unless you stay in the Congress accommodation at Kings College
            <?php endHeading();?>
            <?php startAnswer('q9');?>
            Yes, all delegates will have to stay on campus, even locals from New Zealand.
            <?php endAnswer();?>

            <?php startHeading('q10');?>
            Is there any provision for those over 35 to attend, maybe just as observers
            <?php endHeading();?>
            <?php startAnswer('q10');?>
            <p>Unfortunately, due to space constraints in lecture halls and at evening venues we are capping the age at 35</p>
            <?php endAnswer();?>

            <?php startHeading('q11');?>
            What about transport to and from the venue during the duration of the Congress
            <?php endHeading();?>
            <?php startAnswer('q11');?>
            <p>The events team will have bus services running at pre-determined times to and from the venue. If you miss the bus service you will have to take a taxi at your own cost to reach the Congress venues.</p>
            <?php endAnswer();?>

            <?php startHeading('q12');?>
            What does the registration cost include
            <?php endHeading();?>
            <?php startAnswer('q12');?>
            <p>The 6<sup>th</sup> WZYC is an all-inclusive Congress. This will include Registration, Accommodation, Transportation, Breakfast, Lunch, Dinner, All Congress events/entertainment between the 28<sup>th</sup> of December and 2<sup>nd</sup> of January.</p>
            <?php endAnswer();?>

            <?php startHeading('q13');?>
            What is the weather like in December/January in New Zealand
            <?php endHeading();?>
            <?php startAnswer('q13');?>
            <p>Being in the Southern Hemisphere, it is summer time during December and January, with expected temperatures between 20-30 degrees but please prepare for rain and shine.</p>
            <?php endAnswer();?>

            <?php startHeading('q14');?>
            How long is the 6<sup>th</sup> WZYC
            <?php endHeading();?>
            <?php startAnswer('q14');?>
            <p>The Congress will last 6 days 5 nights. The dates are from 28<sup>th</sup> December 2015 to 2<sup>nd</sup> January 2016.</p>
            <?php endAnswer();?>

            <?php startHeading('q15');?>
            What is the program of the Congress
            <?php endHeading();?>
            <?php startAnswer('q15');?>
            <p>A comprehensive tentative program is being worked on currently. Many of the ideas for events have already come from the global youth, whom have been spoken to. This will become accessible for delegates closer to the Congress.</p>
            <?php endAnswer();?>

            <?php startHeading('q16');?>
            Will there be spare time to do things like sightseeing at the Congress
            <?php endHeading();?>
            <?php startAnswer('q16');?>
            <p>The Congress event plan has been designed to keep youth busy, engaged and encourage them to participate as a collective in what has been organized for them. In saying that there is free time that has been allocated during the days where delegates are available to do their own thing, however, should delegates that leave the campus arrive back late for an event it will be expected to have started without them.</p>
            <?php endAnswer();?>

            <?php startHeading('q17');?>
            What things do I need to bring for the Congress
            <?php endHeading();?>
            <?php startAnswer('q17');?>

            <p>
                All items that delegates bring along are their own responsibility. Suggested items of clothing include an all-weather coat though it will be Summer time. With the tentative program in mind, we suggest appropriate footwear for events such as The Amazing Race, New Years Eve Ball, Cruise, Private Beach Party, etc. Bring along clothes to suit all the above events.
            </p>
            <p>
The climate may be very hot; an essential item of clothing is a sun hat or cap. Sunscreen and sunglasses are optional.
Swim-ware as delegates have access to the pool on campus. For the Jashan ceremony appropriate religious headgear is essential.
Bring along personal toiletries with international plugs.
            </p>
            <p>
                    Personal medication, if required, should be clearly indicated on your application form so that the medical team is made aware of this from the start.
            </p>
            <?php endAnswer();?>

            <?php startHeading('q18');?>
            What items may not be brought into New Zealand
            <?php endHeading();?>
            <?php startAnswer('q18');?>
            <p>New Zealand Customs are very strict. Please refer to the <a target="_blank" href="http://www.customs.govt.nz/inprivate/sendingitemstonz/Pages/default.aspx">New Zealand Customs</a> website to see what can and cannot be brought in.</p>
            <?php endAnswer();?>

            <?php startHeading('q19');?>
            What type of food will be provided
            <?php endHeading();?>
            <?php startAnswer('q19');?>
            <p> International cuisine will be prepared and available during the Congress. A variety of foods will cater for all pallets. Please let us know of any specific dietary requirements or allergies on your registration form. Kitchens in houses on campus will also be replenished with sufficient snacks, fruit, tea and coffee. Food and drink vending machines on campus can also be accessed at your own cost.</p>
            <?php endAnswer();?>

            <?php startHeading('q20');?>
            What do I need to supply with my application for registration
            <?php endHeading();?>
            <?php startAnswer('q20');?>
            <ol>
                <li>Delegates’ registration fees</li>
                <li>Completed registration forms (must be signed and sent back, via email or post)</li>
                <li>Signed & dated terms & conditions by all delegates and legal guardians/parents where applicable (must be scanned and sent back via email or post)</li>
                <li>2 <strong>verified</strong> visa copies; for delegates who need a visa prior to entering New Zealand (can be scanned and sent back via email or post)</li>
                <li>2 <strong>verified</strong> passport copies (must be scanned and sent back via email or post)</li>
                <li>1 recent colour passport size photo (must be scanned and sent back via email or post. If sending by email the file name must state the name of the delegate & country. If sending by post, the delegate must have labeled it with their name & country).</li>
                <li>Doctor’s certificate (if said delegate has a pre-existing medical condition). Documents can be sent VIA <br>EMAIL to: <?php renderEmailAddress()?> <br> <strong>OR</strong><br> POST to: <?php renderPostalAddress()?></li>
            </ol>
            <?php endAnswer();?>

            <?php startHeading('q21');?>
            What payment options are provided for delegates
            <?php endHeading();?>
            <?php startAnswer('q21');?>
            <p>Bank transfers, drafts, cheques and credit card facilities are available.</p>
            <?php endAnswer();?>

            <?php startHeading('q22');?>
            How will I know that I have been accepted to attend the Congress
            <?php endHeading();?>
            <?php startAnswer('q22');?>
            <p>A confirmation letter will be sent to you via email once your entire payment and all paper work is in order. Please make sure you carry this letter with your passport as proof of the reason for your visit to New Zealand.</p>
            <?php endAnswer();?>

            <?php startHeading('q23');?>
            When does early bird registration open
            <?php endHeading();?>
            <?php startAnswer('q23');?>
            Early bird registration will open in July 2014.
            <?php endAnswer();?>

            <?php startHeading('q24');?>
            What are the cancellation charges
            <?php endHeading();?>
            <?php startAnswer('q24');?>
            <ul>
                <li>Before 28<sup>th</sup> October 2015: Full refund (Less NZD$100.00 for administration charges)</li>
                <li>From 28<sup>th</sup> October 2015 – 28<sup>th</sup> November 2015: 60% refund</li>
                <li>After 28<sup>th</sup> November 2015: No refund</li>
            </ul>
            <p>Refunds will be in New Zealand dollars and returned via bank wire transfer only. Applicable bank charges deducted from all refunds.</p>
            <?php endAnswer();?>

            <?php startHeading('q25');?>
            How can I get in touch with others who are planning on going to the 6<sup>th</sup> WZYC
            <?php endHeading();?>
            <?php startAnswer('q25');?>
            You can join our <a href="https://www.facebook.com/groups/223424211030360/" target="_blank">Facebook page</a> or follow us on <a href="https://twitter.com/6WZYC" target="_blank">Twitter</a> and be kept up to date. Also visit our <a href="http://6wzyc.co.nz" target="_blank">website</a> periodically for further updates.
            <?php endAnswer();?>

            <?php startHeading('q26');?>
            How do I get in contact with someone if I have further questions
            <?php endHeading();?>
            <?php startAnswer('q26');?>
            <p>Please email us on <?php renderEmailAddress()?> and ensure the subject states what the email is about (i.e. Entertainment, accommodation, visa, registration, etc.). We will then get in touch with you as soon as possible.</p>
            <?php endAnswer();?>

            <?php startHeading('q27');?>
            Will Kings College have security
            <?php endHeading();?>
            <?php startAnswer('q27');?>
            <p>Kings College will have 24-hour security on campus, however, all delegates are responsible for their own belongings. For your own safety, ensure you have a lock for your bag(s). Kings College has a safe on-sight for delegates who wish to use this.</p>
            <?php endAnswer();?>

            <?php startHeading('q28');?>
            What happens if a delegate sets off the smoke alarms
            <?php endHeading();?>
            <?php startAnswer('q28');?>
            <p>Any false alarm results in an instant NZD$1500.00 fine, which the delegate responsible will have to pay. Being a school, once the alarm is set off, it can only be turned off by the firemen that arrive at the school. The smoke detectors are very sensitive, so to avoid setting off the alarms we urge all to not use/be extremely cautious when using deodorant, hair spray, hair straighteners and making toast in your houses.</p>
            <?php endAnswer();?>
        </div>
    </div>
</section>


<?php
    
        renderFooter();
    }
    
?>
