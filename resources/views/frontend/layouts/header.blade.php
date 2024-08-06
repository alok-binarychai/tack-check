<style>
    .responsiveHeader {
        display: flex;
        align-items: center;
        padding: 15px 100px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        position: sticky
    }

    .responsiveHeader>div {
        display: flex;
        align-items: center;
    }

    .responsiveHeader>div:nth-of-type(1) img {
        width: 150px;
        height: auto;
        object-fit: cover;
        object-position: center center;
    }

    .responsiveHeader>div:nth-of-type(2) {
        flex: 1
    }

    .responsiveHeader>div:nth-of-type(2) {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .responsiveHeader>div:nth-of-type(2)>div {
        padding: 10px 20px;
        font-size: 1.4rem;
        font-weight: 600;
        position: relative;
    }

    .responsiveHeader>div:nth-of-type(2)>div>a {
        color: black;
    }

    .dropDownListWrapper {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 200%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .desktopDropDownItem {
        width: 100%;
        background-color: white;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        /* text-align: center; */
        padding: 10px 20px;
        font-size: 1.3rem;
        font-weight: 500;
    }

    .desktopDropDownItem:hover {
        background-color: #f2f2f2;
        cursor: pointer;
        color: black;
    }

    .desktopDropDownItem a {
        color: black;
        text-decoration: none;
    }

    .searchInput {
        border-radius: 50px;
        font-weight: 400;
        font-size: 1rem;
        padding: 10px 15px;
        margin-right: 10px;
    }

    .responsiveHeader>div:nth-of-type(3)>div {
        display: flex;
        align-items: center;
    }

    .searchInput {
        display: block;
    }

    .searchIconDesktop i {
        display: block;
    }

    .handBurgerIconOnMobile i {
        display: none;
    }

    .searchInput {
        display: none;
    }

    .active {
        background-color: black !important;
    }

    .active>a {
        color: white !important;
    }

    #navigationHeader > div:nth-of-type(2)  div:hover .dropDownListWrapper  {
        display: block;
    }

    /* Mobile device style */
    @media only screen and (max-width: 768px) {
        .searchInput {
            display: none;
        }

        .searchIconDesktop i {
            display: none;
        }

        .handBurgerIconOnMobile i {
            display: block;
        }

        .responsiveHeader>div:nth-of-type(2)>div {
            display: none;
        }

        .responsiveHeader {
            padding: 15px 10px;
        }

        .responsiveHeader>div:nth-of-type(1) img {
            width: 100px;
            height: auto;
        }
    }
</style>
{{-- create the responsive header from scratch --}}
<section class="responsiveHeader" id="navigationHeader">

    <div> <a href="/"><img src="../img/home page/logosquare.png" alt="" srcset=""></a> </div>
    <div>
        {{-- list all the menu item here for the desktop --}}
        <div>
            <a href="/about">About Us</a>
            {{-- drop down list --}}
            <div class="dropDownListWrapper" style="width: 200%">
                {{-- Welcome --}}
                <div class="desktopDropDownItem"> <a href="/about#welcome"> Welcome </a> </div>
                {{-- Who's Who! --}}
                <div class="desktopDropDownItem"> <a href="/about#whoIsWho"> Who's Who! </a> </div>
                {{-- Research & Development --}}
                <div class="desktopDropDownItem"> <a href="/about#researchAndDevelopment"> Research & Development </a> </div>
                {{-- Latest News and Events --}}
                <div class="desktopDropDownItem"> <a href="/about#latestNewsAndEvents"> Latest News and Events </a> </div>
            </div>
        </div>
        <div>
            <a href="/class">Our Classes</a>
            <div class="dropDownListWrapper" style="width: 150%">
                <div class="desktopDropDownItem"> <a href="/class#ourWeekendSchool"> Our Weekend School</a> </div>
                <div class="desktopDropDownItem"> <a href="/class#onlineClasses"> Online Classes </a> </div>
                <div class="desktopDropDownItem"> <a href="/class#ArabicforBabiesandToddlers"> Arabic for Babies and Toddlers </a> </div>
                <div class="desktopDropDownItem"> <a href="/class#privateTution"> Private Tution </a> </div>
                <div class="desktopDropDownItem"> <a href="/class#afterSchoolClub"> After School Club </a> </div>
                <div class="desktopDropDownItem"> <a href="/class#summerCamp"> Summer Camp </a> </div>
            </div>
        </div>
        <div>
            <a href="/research">Our Commitment to Research & Development</a>
            <div class="dropDownListWrapper" style="width: 100%">
                <div class="desktopDropDownItem"> <a href="/research#researchAndDevelopment"> Research and Development</a> </div>
                <div class="desktopDropDownItem"> <a href="/research#areasOfResearchAndOurPublications"> Areas of Research and Our Publications </a> </div>
                <div class="desktopDropDownItem"> <a href="/research#reading"> Reading </a> </div>
                <div class="desktopDropDownItem"> <a href="/research#learningToWrite"> Learning to Write </a> </div>
                <div class="desktopDropDownItem"> <a href="/research#phonics"> Phonics </a> </div>
                <div class="desktopDropDownItem"> <a href="/research#oralLanguage"> Oral Language </a> </div>
                <div class="desktopDropDownItem"> <a href="/research#ourProjects"> Our Projects </a> </div>
                <div class="desktopDropDownItem"> <a href="/research#consultancyAndTraining"> Consultancy & Training </a> </div>
            </div>
        </div>
        <div>
            <a href="/contact">Contact Us</a>
            <div class="dropDownListWrapper" style="width: 130%">
                <div class="desktopDropDownItem"> <a href="/contact#contactUs"> Contact Us</a> </div>
                <div class="desktopDropDownItem"> <a href="/contact#staffVacancies"> Staff Vacancies </a> </div>
            </div>
        </div>
    </div>
    <div>
        {{-- search input  --}}
        {{-- <input placeholder="Search..." type="text" class="searchInput"> --}}
        {{-- search icon on desktop --}}
        {{-- <div class="searchIconDesktop"> <i class="material-icons">search</i></div> --}}
        {{-- hand burger icon on mobile --}}
        <div class="handBurgerIconOnMobile" id="btn-show-popup-mobile-menu"> <i class="material-icons">menu</i> </div>
    </div>

</section>

{{-- style for the mobile menu popup --}}
<style>
    .mobileMenuPopup {
        display: none;
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        bottom: 0;
        z-index: +1000;
        background-color: white;
        overflow-y: auto;
    }

    .menuWrapper {
        padding: 10px 15px;
    }

    .menuWrapper .menuItem {
        padding: 10px;
        font-size: 1.5rem;
        font-weight: 500;
        border-bottom: 1px solid gainsboro;
    }

    .wraperMain {
        padding: 0px 20px 50px 20px;
    }

    .closeHolder {
        display: flex;
        align-items: center;
        padding: 15px;
        position: sticky;
        top: 0;
        background-color: white;
    }

    .closeHolder>div:nth-of-type(1) {
        flex: 1;
    }

    .closeHolder>div {
        display: flex;
        align-items: center;
    }

    .closeHolder>div:nth-of-type(1) img {
        width: 35px;
        height: auto;
    }

    .wraperMain .menuWrapper {
        display: none;
    }
</style>


{{-- mobile menu pop up --}}
<section id="mobileMenuPopupMain" class="mobileMenuPopup">
    <div class="closeHolder">
        <div> <img src="" alt="" srcset=""> </div>
        <div> <i id="close-btn-menu-mobile" class="material-icons">close</i> </div>
    </div>
    <div class="menuWrapper wraperMain">
        <div class="menuItem">About Us
            <div class="menuWrapper">
                {{-- Welcome --}}
                <div class="menuItem"> <a href="/about#welcome"> Welcome </a> </div>
                {{-- Who's Who! --}}
                <div class="menuItem"> <a href="/about#whoIsWho"> Who's Who! </a> </div>
                {{-- Research & Development --}}
                <div class="menuItem"> <a href="/about#researchAndDevelopment"> Research & Development </a> </div>
                {{-- Latest News and Events --}}
                <div class="menuItem"> <a href="/about#latestNewsAndEvents"> Latest News and Events </a> </div>
            </div>
        </div>
        <div class="menuItem"> Our Classes
            <div class="menuWrapper">
                <div class="menuItem"> <a href="/class#ourWeekendSchool"> Our Weekend School</a> </div>
                <div class="menuItem"> <a href="/class#onlineClasses"> Online Classes </a> </div>
                <div class="menuItem"> <a href="/class#ArabicforBabiesandToddlers"> Arabic for Babies and Toddlers </a> </div>
                <div class="menuItem"> <a href="/class#privateTution"> Private Tution </a> </div>
                <div class="menuItem"> <a href="/class#afterSchoolClub"> After School Club </a> </div>
                <div class="menuItem"> <a href="/class#summerCamp"> Summer Camp </a> </div>
            </div>
        </div>
        <div class="menuItem"> Our Commitment to Research & Development
            <div class="menuWrapper">
                <div class="menuItem"> <a href="/research#researchAndDevelopment"> Research and Development</a> </div>
                <div class="menuItem"> <a href="/research#areasOfResearchAndOurPublications"> Areas of Research and Our Publications </a> </div>
                <div class="menuItem"> <a href="/research#reading"> Reading </a> </div>
                <div class="menuItem"> <a href="/research#learningToWrite"> Learning to Write </a> </div>
                <div class="menuItem"> <a href="/research#phonics"> Phonics </a> </div>
                <div class="menuItem"> <a href="/research#oralLanguage"> Oral Language </a> </div>
                <div class="menuItem"> <a href="/research#ourProjects"> Our Projects </a> </div>
                <div class="menuItem"> <a href="/research#consultancyAndTraining"> Consultancy & Training </a> </div>
            </div>
        </div>
        <div class="menuItem"> Contact Us
            <div class="menuWrapper">
                <div class="menuItem"> <a href="/contact#contactUs"> Contact Us</a> </div>
                <div class="menuItem"> <a href="/contact#staffVacancies"> Staff Vacancies </a> </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        /**
         *
         * 
         *  
         */
        // style active link by parsing the url on browser
        var url = window.location.href;
        $('#navigationHeader>div:nth-of-type(2)>div > a').each(function() {
            // regular expression to match the url
            const linkUrl = $(this).attr('href');
            // check if the url matches using regular expression
            if (url.match(linkUrl)) {
                $(this).parent().addClass('active');
            } else {
                $(this).parent().removeClass('active');
            }
        });
        /**
         *
         * 
         *  
         */
        // Show the popup when the button is clicked
        $("#btn-show-popup-mobile-menu").click(function() {
            $("#mobileMenuPopupMain").show();
        });
        /**
         *
         * 
         *  
         */
        // Hide the popup when the close button is clicked
        $("#close-btn-menu-mobile").click(function() {
            $("#mobileMenuPopupMain").hide();
        });
        
    });
    /**
     *
     * 
     *  
     */
</script>