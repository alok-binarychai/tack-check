@php
    // import the Faker
    use Faker\Factory;
    
    if (config('app.env') !== 'local') {
        $faker = Factory::create();
    
        // social links
        class SocialLink
        {
            public $id;
            public $name;
            public $logo;
            public $link;
        }
    
        // facebook link
        $facebookLink = new SocialLink();
        $facebookLink->id = 1;
        $facebookLink->name = 'facebook';
        $facebookLink->logo = 'ic:round-facebook';
        $facebookLink->link = 'https://www.facebook.com/';
    
        // instagram link
        $instagramLink = new SocialLink();
        $instagramLink->id = 2;
        $instagramLink->name = 'instagram';
        $instagramLink->logo = 'bxl:instagram-alt';
        $instagramLink->link = 'https://www.instagram.com/';
    
        // twitter link
        $twitterLink = new SocialLink();
        $twitterLink->id = 3;
        $twitterLink->name = 'twitter';
        $twitterLink->logo = 'entypo-social:twitter-with-circle';
        $twitterLink->link = 'https://twitter.com/';
    
        // linkedin link
        $linkedinLink = new SocialLink();
        $linkedinLink->id = 4;
        $linkedinLink->name = 'linkedin';
        $linkedinLink->logo = 'entypo-social:linkedin-with-circle';
        $linkedinLink->link = 'https://www.linkedin.com/';
    
        // For Enquiry
        class Enquiry
        {
            public $id;
            public $title;
            public $description;
        }
    
        $enquiry = new Enquiry();
        $enquiry->id = 1;
        $enquiry->title = 'For enquiries';
        $enquiry->description = "<a href='tel:".settings('footer', 'for_enquiries')."' style='color:var(--footer-secondary-text-color)'>".settings('footer', 'for_enquiries')."</a>";
    
        // For School Enquiry
        $schoolEnquiry = new Enquiry();
        $schoolEnquiry->id = 2;
        $schoolEnquiry->title = 'For in school enquiries';
        $schoolEnquiry->description = "<a href='tel:".settings('footer', 'for_in_school_enquiries')."' style='color:var(--footer-secondary-text-color)'>".settings('footer', 'for_in_school_enquiries')."</a>";
    
        // For Subscribe to Newsletter
        class Subscribe
        {
            public $id;
            public $title;
            public $inputPlaceholder;
            public $inputType;
            public $inputName;
            public $inputId;
            public $inputSubmitText;
            public $inputSubmitIcon;
        }
    
        $subscribe = new Subscribe();
        $subscribe->id = 1;
        $subscribe->title = 'Subscribe to Newsletter';
        $subscribe->inputPlaceholder = 'Email';
        $subscribe->inputType = 'text';
        $subscribe->inputName = 'email';
        $subscribe->inputId = 'email';
        $subscribe->inputSubmitText = 'Subscribe';
        $subscribe->inputSubmitIcon = 'ic:baseline-mail';
    
        // For the Quick Links
        class QuickLinks
        {
            public $id;
            public $title;
            public $link;
        }
    
        // add 5 quick links
        $quickLinks = [];
        // Home link
        $quickLinks[1] = new QuickLinks();
        $quickLinks[1]->id = 1;
        $quickLinks[1]->title = 'Home';
        $quickLinks[1]->link = '/';

        // Home link
        $quickLinks[2] = new QuickLinks();
        $quickLinks[2]->id = 2;
        $quickLinks[2]->title = 'Our Classes';
        $quickLinks[2]->link = '/class';
    
        // Our Commitment to Research & Development
        $quickLinks[3] = new QuickLinks();
        $quickLinks[3]->id = 3;
        $quickLinks[3]->title = 'Our Commitment to Research & Development';
        $quickLinks[3]->link = '/research';
    
        // Our Ethos
        $quickLinks[4] = new QuickLinks();
        $quickLinks[4]->id = 4;
        $quickLinks[4]->title = 'Our Ethos';
        $quickLinks[4]->link = '/ethos';
    
        // Our Curriculum
        $quickLinks[5] = new QuickLinks();
        $quickLinks[5]->id = 5;
        $quickLinks[5]->title = 'Our Curriculum';
        $quickLinks[5]->link = '/curriculum';
    
        // Contact Us
        $quickLinks[6] = new QuickLinks();
        $quickLinks[6]->id = 6;
        $quickLinks[6]->title = 'Contact Us';
        $quickLinks[6]->link = '/contact';
    
        // For the legal links
        $legalLinks = [];
        $legalLinks[1] = new QuickLinks();
        $legalLinks[1]->id = 1;
        $legalLinks[1]->title = 'Terms and Conditions';
        $legalLinks[1]->link = $faker->url;
    
        $legalLinks[2] = new QuickLinks();
        $legalLinks[2]->id = 2;
        $legalLinks[2]->title = 'Privacy Policy';
        $legalLinks[2]->link = $faker->url;
    
        $legalLinks[3] = new QuickLinks();
        $legalLinks[3]->id = 3;
        $legalLinks[3]->title = 'Cookie Settings';
        $legalLinks[3]->link = $faker->url;
    
        $copyRight = 'Copyright © 2021 Tack. All rights reserved.';
    }
@endphp

{{-- Inpage Style --}}
<style>
    /* Footer section css variable */
    .footerSection {
        --footer-bg-color: aliceblue;
        --footer-text-color: #000;
        --footer-secondary-text-color: #434343;
        /* Submit button bg color */
        --footer-button-bg-color: #000;
        --footer-button-text-color: #fff;
    }

    .footerSection {
        width: 100%;
        background-color: var(--footer-bg-color);
    }

    .footerSection>section {
        width: 80%;
        margin: 0 auto
    }

    .footerSection .sectionOne {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 50px 0px 0px 0px;
    }

    .footerSection .sectionOne>div:nth-of-type(1) img {
        width: 200px;
        height: auto;
        object-fit: cover;
        object-position: center center;
    }

    .footerSection .sectionOne>div:nth-of-type(2) {
        display: flex;
        align-items: center;
    }

    .footerSection .sectionOne>div:nth-of-type(2)>div {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .footerSection .sectionOne>div:nth-of-type(2)>div>a {
        text-decoration: none;
        color: var(--footer-text-color);
        font-size: 3rem;
        font-weight: 500;
        margin: 0px 0px 0px 30px;
    }

    /* For the section 2 */
    .footerSection .sectionTwo {
        display: grid;
        grid-template-columns: 1fr 1fr;
        padding: 50px 0px 0px 0px;
    }

    .footerSection .sectionTwo>div:nth-of-type(1) {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .footerSection .enquiryWrapper {
        display: grid;
        grid-template-columns: 1fr;
    }

    .footerSection .enquiryWrapper .enquiryItem {
        margin: 15px 0px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .footerSection .enquiryWrapper .enquiryItem>div {
        margin: 5px 0px;
    }

    .footerSection .enquiryWrapper .enquiryItem>div:nth-of-type(1) {
        font-weight: 600;
        font-size: 2rem;
        font-family: 'Roboto', sans-serif;
        color: var(--footer-text-color);
        text-align: start;
    }

    .footerSection .enquiryWrapper .enquiryItem>div:nth-of-type(2) {
        font-size: 1.25rem;
        font-weight: 400;
        font-family: 'Raleway', sans-serif;
        color: var(--footer-secondary-text-color);
        text-align: start
    }

    .footerSection .sectionTwo .subscribe {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin: 15px 0px;
    }

    .footerSection .sectionTwo .subscribe>div {
        margin: 5px 0px;
    }

    .footerSection .sectionTwo .subscribe>div:nth-of-type(1) {
        font-weight: 600;
        font-size: 2rem;
        font-family: 'Roboto', sans-serif;
        color: var(--footer-text-color);
    }

    .footerSection .sectionTwo .subscribe>div:nth-of-type(2) {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
    }

    .footerSection .sectionTwo .subscribe>div:nth-of-type(2) div {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .footerSection .sectionTwo .subscribe>div:nth-of-type(2) div input {
        padding: 15px;
        border: 0px;
        border-radius: 50px 0px 0px 50px;
        font-size: 1.25rem;
        font-family: 'Raleway', sans-serif;
        color: var(--footer-secondary-text-color);
        outline: none;
        width: 100%;
        min-width: 300px;
        margin: 5px 0px;
    }

    .footerSection .sectionTwo .subscribe>div:nth-of-type(2) div button {
        padding: 15px 25px;
        border-radius: 0px 50px 50px 0px;
        font-size: 1.4rem;
        font-weight: 600;
        outline: none;
        margin: 0px;
        border: 0px;
        background-color: var(--footer-button-bg-color);
        color: var(--footer-button-text-color);
        cursor: pointer;
    }

    .footerSection .sectionTwo>div:nth-of-type(2) {
        display: flex;
        align-items: flex-start;
        justify-content: flex-end;
    }

    .footerSection .sectionTwo .linkGroup {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin: 15px 0px;
    }

    .footerSection .sectionTwo .linkGroup>div {
        margin: 5px 0px;
    }

    .footerSection .sectionTwo .linkGroup>div:nth-of-type(1) {
        font-weight: 600;
        font-size: 2rem;
        font-family: 'Roboto', sans-serif;
        color: var(--footer-text-color);
    }

    .footerSection .sectionTwo .linkGroup>div:nth-of-type(2) {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
    }

    .footerSection .sectionTwo .linkGroup .linkItem {
        margin: 5px 0px;
        font-size: 1.25rem;
        font-family: 'Raleway', sans-serif;
        color: var(--footer-secondary-text-color);
        text-align: start;
    }

    .footerSection .sectionTwo .linkGroup .linkItem a {
        text-decoration: underline;
        color: var(--footer-secondary-text-color);
    }

    /* Section 3 */
    .sectionThree {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 50px 0px;
    }

    .sectionThree>div:nth-of-type(1) {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 15px 0px;
    }

    .sectionThree>div:nth-of-type(2) {
        font-size: 1.15rem;
        font-family: 'Raleway', sans-serif;
        color: var(--footer-secondary-text-color);
    }

    .sectionThree .linkItemLegal {
        margin: 0px 20px;
        font-size: 1.25rem;
        font-family: 'Raleway', sans-serif;
        color: var(--footer-secondary-text-color);
    }

    .sectionThree .linkItemLegal a {
        color: var(--footer-secondary-text-color);
        text-decoration: none;
    }


    /* Mobile styles */
    @media (max-width: 768px) {
        .footerSection>section {
            width: 95%;
        }

        .footerSection .sectionOne {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .footerSection .sectionOne>div {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footerSection .sectionOne>div:nth-of-type(2) {
            padding-top: 35px;
        }

        .footerSection .sectionOne .socialLinkItem {
            margin: 10px 0px 0px 0px;
        }

        .footerSection .sectionTwo {
            grid-template-columns: 1fr;
        }

        .footerSection .sectionTwo .subscribe input {
            min-width: 80% !important;
        }

        .sectionTwo .enquiryItem {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .sectionTwo .enquiryItem>div:nth-of-type(1) {
            width: 100%;
        }

        .footerSection .sectionTwo .subscribe {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .sectionTwo .subscribe>div:nth-of-type(1) {
            width: 100%;
        }

        .footerSection .sectionTwo .subscribe>div:nth-of-type(2) {
            width: 100%;
        }

        .sectionThree .linkItemLegal {
            margin: 0px 10px;
        }

        .footerSection .sectionTwo>div:nth-of-type(2) {
            justify-content: center;
        }

        .footerSection .sectionTwo .linkGroup{
            align-items: center;
        }

        .footerSection .sectionTwo .linkGroup>div:nth-of-type(2) {
            align-items: center;
        }
    }
</style>

{{-- Footer rewritten by prasenjeet --}}
<section class="footerSection">
    <section>
        <div class="sectionOne">
            <div><img src="../img/home page/footer.svg" alt="" srcset=""></div>
            <div>
                {{-- List all the social links --}}
                {{-- Facebook link --}}
                <div class="socialLinkItem">
                    <a href="{{ $facebookLink->link }}">
                        <iconify-icon icon="{{ $facebookLink->logo }}"></iconify-icon>
                    </a>
                </div>
                {{-- Instagram link --}}
                <div class="socialLinkItem">
                    <a href="{{ $instagramLink->link }}">
                        <iconify-icon icon="{{ $instagramLink->logo }}"></iconify-icon>
                    </a>
                </div>
                {{-- Twitter link --}}
                <div class="socialLinkItem">
                    <a href="{{ $twitterLink->link }}">
                        <iconify-icon icon="{{ $twitterLink->logo }}"></iconify-icon>
                    </a>
                </div>
                {{-- Linkedin link --}}
                <div class="socialLinkItem">
                    <a href="{{ $linkedinLink->link }}">
                        <iconify-icon icon="{{ $linkedinLink->logo }}"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>

        {{-- Section 2 --}}
        <div class="sectionTwo">
            <div>
                <div class="enquiryWrapper">
                    {{-- For Enquiry --}}
                    <div class="enquiryItem">
                        <div>{{ $enquiry->title }}</div>
                        <div>{!! $enquiry->description !!}</div>
                    </div>
                    {{-- For School Enquiry --}}
                    <div class="enquiryItem">
                        <div>{{ $schoolEnquiry->title }}</div>
                        <div>{!! $schoolEnquiry->description !!}</div>
                    </div>
                </div>
                {{-- For Subscribe to the newsletter --}}
                <div class="subscribe">
                    <div>{{ $subscribe->title }}</div>
                    <div>
                        {{-- Input Field --}}
                        <form action="{{ route('newsletterSubmit') }}" method="POST">
                            <div>
                                @csrf
                                <input type="text" name="email" id="{{ $subscribe->inputId }}" placeholder="{{ $subscribe->inputPlaceholder }}">
                                <button type="submit">{{ $subscribe->inputSubmitText }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                {{-- link group --}}
                {{-- link group 1 --}}
                <div class="linkGroup linkGroup1">
                    <div> Quick Links </div>
                    <div>
                        @foreach ($quickLinks as $quickLink)
                            <div class="linkItem"> <a href="{{ $quickLink->link }}">{{ $quickLink->title }}</a> </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Section 3 --}}
        <div class="sectionThree">
            <div>
                {{-- List all the legal links --}}
                @foreach ($legalLinks as $legalLink)
                    <div class="linkItemLegal">
                        <a href="{{ $legalLink->link }}"> {{ $legalLink->title }}</a>
                    </div>
                @endforeach
            </div>
            <div> Copyright © 2021 Tack. All rights reserved. | Powered By <a href="https://binarychai.com/">Binarychai</a></div>
        </div>
    </section>
</section>
