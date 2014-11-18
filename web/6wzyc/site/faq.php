<?php
    require '_layout.php';
    
    $faqIndex = 0;
    
    
    function startHeading(){
        //$tag = 'q'.strval ($faqIndex);
        global $faqIndex;
        $format = 'q%d';
        $tag = sprintf($format, $faqIndex);
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <a data-toggle="collapse" data-parent="#faq-body" href="#<?php echo $tag ?>">
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
        
        
        
        function startAnswer(){
            $format = 'q%d';
            global $faqIndex;
            $tag = sprintf($format, $faqIndex);
            $faqIndex++;
    ?>
    <div id="<?php echo $tag ?>" class="panel-collapse collapse">
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

            


            <?php startHeading();?>
            When does early bird registration open
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Early bird registration will open in December 2014.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            How long is the 6<sup>th</sup> WZYC
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>The Congress will last 6 days 5 nights. The dates are from 28<sup>th</sup> December 2015 to 2<sup>nd</sup> January 2016.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            Who can attend the Congress
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Registration is open to all global practicing Zoroastrians from age 15 (27<sup>th</sup> December 1975) to 35 (as of 3<sup>rd</sup> January 2016).</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            At what age would I be classified a minor
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Anyone born after 26 December 1997 is a minor for this Congress.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            Where do I send questions/queries
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Please email: &#104;&#101;&#108;&#112;&#046;&#054;&#116;&#104;&#119;&#122;&#121;&#099;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</p>
            <?php endAnswer();?>


            <?php startHeading();?>
            Do you have a travel agent who can help us with bookings if we choose to tour New Zealand before or after the Congress?
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Travel 2000 is the official New Zealand Travel partner for the 6th World Zoroastrian Youth Congress. For special deals and packages, <a href="http://www.travel2000.co.nz" target="_blank">visit their site</a> or contact them on info@travel2000.co.nz / +649 6202266.</p>
            <p>We also have global travel partners for those flying to and from New Zealand. For this list please visit the official <a href="/" target="_blank">Congress website</a></p>
            <?php endAnswer();?>

            <?php startHeading();?>
            Are there any accommodation arrangements available for me should I wish to extend my stay in New Zealand – either before of after the Congress
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Yes, if your visa permits you to stay in New Zealand outside of the Congress dates it, please contact Mrs Tanaz Siganporia at tanaz2210@yahoo.co.nz, who will be happy to arrange accommodation for you with a local Zoroastrian family free of charge.</p>
            <?php endAnswer();?>


            <?php startHeading();?>
            Can I transfer my registration to someone I know
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>No, all registrations are non-transferable.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            Does my country require a visa to enter into New Zealand
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>For the most comprehensive list of countries requiring a visa, please consult the <a href="http://glossary.immigration.govt.nz/visafreecountries.htm" target="_blank">New Zealand Government Immigration website</a></p>
            <?php endAnswer();?>


            <?php startHeading();?>
            How do I get help with visa’s
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Any help or advice you need with visas please contact <i>Mrs Kainaz Jamasbnejad</i> at: <?php renderEmailAddress()?></p>
            <?php endAnswer();?>


            <?php startHeading();?>
            How does the airport pick up and drop off work
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Airport pick up will be provided on the 28th of December. Please send us your flight details via <?php renderEmailAddress()?> once you book your flights. There will be a volunteer waiting for you to transport you to Kings College when you arrive. Drop offs will also be provided on the 2nd of January. Transportation to and from the Congress will only be provided on 28<sup>th</sup> December and 2<sup>nd</sup> January.</p>
            <?php endAnswer();?>


            <?php startHeading();?>
            Which airport do I fly to
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Please fly into Auckland International Airport.</p>
            <?php endAnswer();?>


            <?php startHeading();?>
            How many people are in one room
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Each delegate will be given single room accommodation. Delegates can request to be put in rooms next to one another. Married couples have the option of sharing a room. Minors (those aged 15 to 17 years) of the same gender will be given the option of sharing a room with one other person or having individual rooms.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            If I attend the Congress on my own, how will my accommodation work
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>We will place you in a room next to people that are roughly the same age and gender.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            Is it true that you can’t register for the Congress unless you stay in the Congress accommodation at Kings College
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Yes, it is mandatory that all delegates will have to stay on campus, even locals from New Zealand.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            Is there any provision for those over 35 to attend, maybe just as observers
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Unfortunately, due to space constraints in lecture halls and at evening venues we are capping the age at 35</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            What about transport to and from the venue during the duration of the Congress
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>The events team will have bus services running at pre-determined times to and from the venue. If you miss the bus service you will have to take a taxi at your own cost to reach the Congress venues.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            What does the registration cost include
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>The 6<sup>th</sup> WZYC is an all-inclusive Congress. This will include registration, accommodation, transportation, breakfast, lunch, dinner, all congress events/entertainment between the 28<sup>th</sup> of December and 2<sup>nd</sup> of January. Any activities other than those planned by the congress will be at the delegate’s own expense.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            What is the weather like in December/January in New Zealand
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Being in the Southern Hemisphere, it is summer time during December and January, with expected temperatures between 20 to 30 degrees Celsius. We recommend bringing appropriate clothing, sunscreen etc. for both rain and shine.</p>
            <?php endAnswer();?>

            

            <?php startHeading();?>
            What is the program of the Congress
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>A comprehensive tentative program is being worked on currently. Many of the ideas for events have already come from the global youth, whom have been spoken to. This will become accessible for delegates closer to the Congress.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            Will there be spare time to do things like sightseeing at the Congress
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>The Congress event plan has been designed to keep youth busy, engaged and encourage them to participate as a collective in what has been organized for them.</p>
            <p>There will be designated free time for delegates. Delegates can organize their own activities during these periods, however, this is at the delegate’s own expense.  To ensure we fit everything into the program, events will be running to time and delegates should be aware that if they are late for an event, it will have started without them.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            What things do I need to bring for the Congress
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Suggested items of clothing include an all-weather coat though it will be Summer time. With the tentative program in mind, we suggest appropriate footwear for events such as The Amazing Race, New Years Eve Ball, Fair Day, etc. Bring along clothes to suit all the above events. The climate may be very hot; an essential item of clothing is a sun hat or cap. We recommend sunscreen and sunglasses, as the New Zealand sun is very harsh.</p>
            <p>Swimwear as delegates have access to the pool on campus.</p>
            <p>For the Jashan ceremony appropriate religious headgear is essential.</p>
            <p>Bring along personal toiletries with respective universal adapter plugs.</p>
            <p>Personal medication, if required, should be clearly indicated on your application form so that the medical team is made aware of this from the start.</p>
            <p>Delegates must ensure they look after their personal possessions, as we do not accept any liability for any stolen or lost items.</p>
            <?php endAnswer();?>




            <?php startHeading();?>
            What items may not be brought into New Zealand
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>New Zealand Customs are very strict. Please refer to the <a target="_blank" href="http://www.customs.govt.nz/inprivate/sendingitemstonz/Pages/default.aspx">New Zealand Customs</a> website to see what can and cannot be brought in.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            What type of food will be provided
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>International cuisine will be available during the Congress. A variety of foods will cater for all palates. Please let us know of any specific dietary requirements or allergies on your registration form. The kitchens each in house on campus will also be replenished with sufficient snacks, fruit, tea and coffee.</p>
            <p>Food and drink vending machines on campus can also be accessed at your own cost.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            What do I need to supply with my application for registration
            <?php endHeading();?>
            <?php startAnswer();?>
            <ol>
                <li>Pay the registration fee</li>
                <li>Complete and return registration forms (via email or post)</li>
                <li>Sign & date terms & conditions (and have my legal guardians/parents sign too if applicable) and send back  (via email or post)</li>
                <li>Provide 2 <strong>verified*</strong> visa copies (for delegates who need a visa prior to entering New Zealand) via email or post</li>
                <li>Provide 2 <strong>verified*</strong> passport copies via email or post</li>
                <li>Provide 1 recent colour passport-sized photo (via email or post) with an appropriate label/file name to identify the delegate and their country of origin</li>
                <li>Provide a doctor’s certificate (if said delegate has a pre-existing medical condition).</li>
            </ol>
            <p>All Documents can be sent VIA EMAIL to:<br><br> <?php renderEmailAddress()?> <br><br>OR POST to: <?php renderPostalAddress()?></p>
            <p>(* Legal Verification in New Zealand is when the original document is sighted by a Justice of the Peace/Oath Taker/Registrar/Solicitor and the photocopy version is signed and dated/stamped by them or their company/firm)</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            What payment options are provided for delegates
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>We will release more information soon once we have finalised all payment options.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            How will I know that I have been accepted to attend the Congress
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>A confirmation letter will be sent to you via email once your completed registration has been processed and payment of the registration fee has been received. Please make sure you carry this confirmation letter with your passport as proof of the purpose for your visit to New Zealand.</p>
            <?php endAnswer();?>

            

            <?php startHeading();?>
            What are the cancellation charges
            <?php endHeading();?>
            <?php startAnswer();?>
            <ul>
                <li>Before 28<sup>th</sup> October 2015: Full refund (Less NZD$100.00 for administration charges)</li>
                <li>From 28<sup>th</sup> October 2015 – 28<sup>th</sup> November 2015: 60% refund</li>
                <li>After 28<sup>th</sup> November 2015: No refund</li>
            </ul>
            <p>Refunds will be in New Zealand dollars and returned via bank wire transfer only. Applicable bank charges deducted from all refunds.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            How can I get in touch with others who are planning on going to the 6<sup>th</sup> WZYC
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>You can join our <a href="https://www.facebook.com/groups/223424211030360/" target="_blank">Facebook page</a> to link up with other delegates that are attending. You may also follow us on <a href="https://twitter.com/6WZYC" target="_blank">Twitter</a>. Please visit our <a href="http://6wzyc.co.nz" target="_blank">website</a> periodically for further updates.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            How do I get in contact with someone if I have further questions
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Please email us on <?php renderEmailAddress()?> and ensure the subject states what the email is about (i.e. Entertainment, accommodation, visa, registration, etc.). We will then get in touch with you as soon as possible.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            Will Kings College have security
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Kings College will have 24-hour security on campus, however, all delegates are responsible for their own belongings. For your own safety, ensure you have a lock for your bag(s). Kings College has a safe on-sight for delegates who wish to use this.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            What happens if a delegate sets off the smoke alarms
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>Any false alarm results in an instant NZD$1500.00 fine, which the delegate responsible will have to pay. Being a school, once the alarm is set off, it can only be turned off by the firemen that arrive at the school. The smoke detectors are very sensitive, so to avoid setting off the alarms we urge all to not use/be extremely cautious when using deodorant, hair spray, hair straighteners and making toast in your houses.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            What is the harassment/exploitation policy
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>The Organisers of the 6<sup>th</sup> WZYC, 2015 are committed to creating and maintaining this global event, where all individuals who participate in the program and its activities can work and learn together in an atmosphere free of harassment, exploitation, intimidation or discrimination.</p>
            <p>Every participant should be aware that the organisers strictly prohibit sexual harassment and sexual violence and such behavior is in violation of both New Zealand law and the policy of Kings College. Kings College will respond promptly and effectively to reports of sexual harassment and sexual violence, and will take appropriate action to prevent, to correct, and when necessary, to discipline behavior that violates this policy.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            What is the drug and alcohol policy
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>This is strictly a drug and alcohol-free event. This policy will be firmly enforced for ALL registrants (minors as well as adults). By filling out the registration form as a delegate, or parent/legal guardian of a delegate, you are agreeing to abide by this. Should you be found with drugs or alcohol on the school premises, you will be asked to leave the premises and find alternative accommodation at your own expense.  Please note that in New Zealand it is illegal to supply alcohol to anyone under the age of 18 years old and it is illegal to consume, possess or supply certain drugs.  Congress officials may be required to involve Police if any criminal offending is detected.</p>
            <?php endAnswer();?>

            <?php startHeading();?>
            What can I do outside of the days of the congress
            <?php endHeading();?>
            <?php startAnswer();?>
            <p>For travel ideas and information, please visit the official site of <a href="http://www.newzealand.com/" target="_blank">Tourism New Zealand</a></p>
            <?php endAnswer();?>

        </div>
    </div>
</section>
<?php
    
        renderFooter();
    }
    
?>
