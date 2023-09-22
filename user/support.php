<?php 
    include "cls_header.php";
    include_once('dashboard_header.php');   
?>
<body>
    <div class="Polaris-Page pagemargin max_width_change bodycontainer">
        
        <div class="zonecls">
            <div class="Polaris-Frame__Content">
                <div class="Polaris-Page">
                    <div
                        class="Polaris-Page-Header Polaris-Page-Header--isSingleRow Polaris-Page-Header--noBreadcrumbs Polaris-Page-Header--mediumTitle">
                        <div class="clsdogfile Polaris-Page-Header__Row">
                            <div class="Polaris-Page-Header__TitleWrapper">
                                <h1 class="clszonetitle Polaris-Header-Title">Support</h1>
                            </div>
                        </div>
                        <div class="Polaris-Layout">
                            <div class="Polaris-Layout__Section">
                                <div class="Polaris-Card">
                                    <div class="Polaris-Card__Header">
                                        <h2 class="Polaris-Heading">Email support</h2>
                                    </div>
                                    <div class="Polaris-Card__Section">
                                        <form action="zonesupport">
                                            <div id="contactForm">
                                                <div class="Polaris-Stack Polaris-Stack--vertical">
                                                    <div class="Polaris-Stack__Item">
                                                        <p>You can contact us on email using <a
                                                                href="mailto:codelock2021@gmail.com"
                                                                data-polaris-unstyled="true" class="Polaris-Link"
                                                                target="_blank"
                                                                rel="noopener noreferrer">codelock2021@gmail.com</a> or
                                                            by using the form below.</p>
                                                    </div>
                                                    <div class="Polaris-Stack__Item">
                                                        <div class="Polaris-FormLayout">
                                                            <div class="Polaris-FormLayout__Item">
                                                                <div class="">
                                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                                        <div class="Polaris-Label">
                                                                            <label id="emailLabel" for="email"
                                                                                class="Polaris-Label__Text Polaris-Label__RequiredIndicator">Email
                                                                                address</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="Polaris-Connected">
                                                                        <div
                                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                            <div
                                                                                class="Polaris-TextField Polaris-TextField--hasValue">
                                                                                <input id="email" name="email"
                                                                                    autocomplete="off"
                                                                                    class="clsmail Polaris-TextField__Input"
                                                                                    type="text"
                                                                                    aria-labelledby="emailLabel"
                                                                                    aria-invalid="false"
                                                                                    aria-required="true"
                                                                                    value="codelock2021@gmail.com">
                                                                                <div
                                                                                    class="Polaris-TextField__Backdrop">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-FormLayout__Item">
                                                                <div class="">
                                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                                        <div class="Polaris-Label">
                                                                            <label id="PolarisTextField1Label"
                                                                                for="PolarisTextField1"
                                                                                class="Polaris-Label__Text Polaris-Label__RequiredIndicator">Message</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="Polaris-Connected">
                                                                        <div
                                                                            class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                            <div
                                                                                class="Polaris-TextField Polaris-TextField--multiline">
                                                                                <textarea id="PolarisTextField1"
                                                                                    name="PolarisTextField1"
                                                                                    autocomplete="off"
                                                                                    class="clsmessage Polaris-TextField__Input"
                                                                                    type="text" rows="1"
                                                                                    aria-labelledby="PolarisTextField1Label"
                                                                                    aria-invalid="false"
                                                                                    aria-required="true"
                                                                                    aria-multiline="true"
                                                                                    style="height: 34px;"></textarea>
                                                                                <div
                                                                                    class="Polaris-TextField__Backdrop">

                                                                                </div>
                                                                                <div aria-hidden="true"
                                                                                    class="Polaris-TextField__Resizer">
                                                                                    <div
                                                                                        class="Polaris-TextField__DummyInput">
                                                                                        <br>
                                                                                    </div>
                                                                                    <div
                                                                                        class="Polaris-TextField__DummyInput">
                                                                                        <br>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="clspolrate">

                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="Polaris-Card__Footer">
                                        <div class="Polaris-ButtonGroup">
                                            <div class="Polaris-ButtonGroup__Item">
                                                <button class="clsmessage Polaris-Button Polaris-Button--primary "
                                                    type="button" id="message" name="message">
                                                    <span class="Polaris-Button__Content"><span
                                                            class="Polaris-Button__Text">Send message</span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clsstucture">
                                    <div class="Polaris-Card">
                                        <div class="Polaris-Card__Header">
                                            <h2 class="Polaris-Heading">Help center</h2>
                                        </div>
                                        <div class="Polaris-Card__Section">
                                            <p>Did you know we have a super comprehensive help center and video
                                                tutorial series which answers most common questions?</p>
                                        </div>
                                        <div class="Polaris-Card__Footer">
                                            <div class="Polaris-ButtonGroup">
                                                <div class="Polaris-ButtonGroup__Item"><a
                                                        href="https://support.zapiet.com/en/support/solutions/60000294067"
                                                        data-polaris-unstyled="true"
                                                        class="Polaris-Button Polaris-Button--primary"
                                                        target="_blank" rel="noopener noreferrer"><span
                                                            class="Polaris-Button__Content"><span
                                                                class="Polaris-Button__Text">Visit help
                                                                center</span></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary">
                                <div class="Polaris-Card Polaris-Card--subdued">
                                    <div class="Polaris-Card__Header">
                                        <h2 class="Polaris-Heading">Getting in touch</h2>
                                    </div>
                                    <div class="Polaris-Card__Section">
                                        <div class="Polaris-Stack Polaris-Stack--alignmentCenter">
                                            <div class="Polaris-Stack__Item"><span
                                                    class="Polaris-Icon Polaris-Icon--colorBase Polaris-Icon--applyColor"><span
                                                        class="Polaris-VisuallyHidden"></span><svg
                                                        viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                        focusable="false" aria-hidden="true">
                                                        <path
                                                            d="M0 5.324v10.176a1.5 1.5 0 0 0 1.5 1.5h17a1.5 1.5 0 0 0 1.5-1.5v-10.176l-9.496 5.54a1 1 0 0 1-1.008 0l-9.496-5.54z">
                                                        </path>
                                                        <path
                                                            d="M19.443 3.334a1.494 1.494 0 0 0-.943-.334h-17a1.49 1.49 0 0 0-.943.334l9.443 5.508 9.443-5.508z">
                                                        </path>
                                                    </svg></span></div>
                                            <div class="Polaris-Stack__Item"><a
                                                    href="mailto:codelock2021@gmail.com?subject=harshcls.myshopify.com"
                                                    data-polaris-unstyled="true"
                                                    class="Polaris-Link Polaris-Link--removeUnderline"
                                                    target="_blank" rel="noopener noreferrer">codelock2021@gmail.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Polaris-Card__Section">
                                        <div class="Polaris-Stack Polaris-Stack--alignmentCenter">
                                            <div class="Polaris-Stack__Item"><span
                                                    class="Polaris-Icon Polaris-Icon--colorBase Polaris-Icon--applyColor"><span
                                                        class="Polaris-VisuallyHidden"></span><svg
                                                        viewBox="0 0 20 20" class="Polaris-Icon__Svg"
                                                        focusable="false" aria-hidden="true">
                                                        <path
                                                            d="m7.876 6.976-.534-2.67a1.5 1.5 0 0 0-1.471-1.206h-3.233c-.86 0-1.576.727-1.537 1.586.461 10.161 5.499 14.025 14.415 14.413.859.037 1.584-.676 1.584-1.535v-3.235a1.5 1.5 0 0 0-1.206-1.471l-2.67-.534a1.5 1.5 0 0 0-1.636.8l-.488.975c-2 0-5-3-5-5l.975-.488c.606-.302.934-.972.801-1.635z">
                                                        </path>
                                                    </svg></span></div>
                                            <div class="Polaris-Stack__Item"><a href="tel:+12 34 4526 8806‬"
                                                    data-polaris-unstyled="true"
                                                    class="Polaris-Link Polaris-Link--removeUnderline"
                                                    target="_blank" rel="noopener noreferrer">+12 34 4526 8806</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-Card Polaris-Card--subdued">
                                    <div class="Polaris-Card__Header">
                                        <h2 class="Polaris-Heading">Support hours</h2>
                                    </div>
                                    <div class="Polaris-Card__Section">
                                        <div class="Polaris-Stack Polaris-Stack--vertical">
                                            <div class="Polaris-Stack__Item">
                                                <div
                                                    class="Polaris-Stack Polaris-Stack--vertical Polaris-Stack--spacingTight">
                                                    <div class="Polaris-Stack__Item"><span><span
                                                                class="Polaris-TextStyle--variationStrong">6:00 AM -
                                                                10:00 PM (WEST)</span></span></div>
                                                    <div class="Polaris-Stack__Item"><span
                                                            class="Polaris-TextStyle--variationStrong">Monday -
                                                            Friday</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Polaris-Card__Section">
                                        <div class="Polaris-Stack Polaris-Stack--vertical">
                                            <div class="Polaris-Stack__Item">
                                                <div id="headShots" class="clstogflex">
                                                    <span tabindex="0" aria-describedby="PolarisTooltipContent1"
                                                        data-polaris-tooltip-activator="true">
                                                        <div class="zapietAvatar">
                                                            <img alt=""
                                                                src="https://d40oklqtwhx1c.cloudfront.net/13389a09-a4ea-486e-9928-e028439a2ad0/images/support_avatars/sam.jpg">
                                                        </div>
                                                    </span>
                                                    <span tabindex="0" aria-describedby="PolarisTooltipContent2"
                                                        data-polaris-tooltip-activator="true">
                                                        <div class="zapietAvatar">
                                                            <img alt=""
                                                                src="https://d40oklqtwhx1c.cloudfront.net/13389a09-a4ea-486e-9928-e028439a2ad0/images/support_avatars/sandy.jpg">
                                                        </div>
                                                    </span>
                                                    <span tabindex="0" aria-describedby="PolarisTooltipContent3"
                                                        data-polaris-tooltip-activator="true">
                                                        <div class="zapietAvatar">
                                                            <img alt=""
                                                                src="https://d40oklqtwhx1c.cloudfront.net/13389a09-a4ea-486e-9928-e028439a2ad0/images/support_avatars/ismail.jpg">
                                                        </div>
                                                    </span>
                                                    <span tabindex="0" aria-describedby="PolarisTooltipContent4"
                                                        data-polaris-tooltip-activator="true">
                                                        <div class="zapietAvatar">
                                                            <img alt=""
                                                                src="https://d40oklqtwhx1c.cloudfront.net/13389a09-a4ea-486e-9928-e028439a2ad0/images/support_avatars/marija.jpg">
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="Polaris-Stack__Item">
                                                <span class="Polaris-TextStyle--variationSubdued">Our support team
                                                    is primarily based in Europe during these hours our response
                                                    times are as little as a few hours, but can be slightly longer
                                                    at weekends and on public holidays.

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html> 
<?php include_once('dashboard_footer.php'); ?>