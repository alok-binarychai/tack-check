@php
    use Faker\Factory;
    $faker = Factory::create();
    
    // page data
    $title = 'About Us';
    
    // if we are in development mode
    if (config('app.env') == 'local') {
        /**
         *
         *
         *
         *
         *
         */
        // latest news and event cards
        class EventCard
        {
            public $title;
            public $description;
            public $image;
        }
    
        $events = [];
    
        for ($i = 0; $i < 10; $i++) {
            // add { title: string; description: string; coverImage: string; id: number } use faker and EventCard
            $events[] = new EventCard();
    
            $events[$i]->title = $faker->sentence;
            // add index to title
            $events[$i]->title = $i;
            $events[$i]->description = $faker->paragraph;
            $events[$i]->image = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
        }
        /**
         *
         *
         *
         *
         *
         */
        // for the welcome section
        class WelcomeSection
        {
            public $title;
            public $description;
        }
    
        $welcomeSection = new WelcomeSection();
    
        $welcomeSection->title = $faker->sentence;
        $welcomeSection->description = $faker->paragraph;
        /**
         *
         *
         *
         *
         *
         */
        // for the hero slide shows
        class HeroSlide
        {
            public $title;
            public $description;
            public $image;
            public $id;
            public $isSpecial;
            public $created_at;
            public $updated_at;
            public $slogan;
        }
    
        $heroSlides = [];
        // add 5 hero slides
        for ($i = 0; $i < 5; $i++) {
            $heroSlides[] = new HeroSlide();
    
            $heroSlides[$i]->title = $faker->sentence;
            $heroSlides[$i]->description = $faker->paragraph;
            $heroSlides[$i]->image = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
            $heroSlides[$i]->id = $i;
            $heroSlides[$i]->isSpecial = $faker->boolean;
            $heroSlides[$i]->created_at = $faker->dateTime;
            $heroSlides[$i]->updated_at = $faker->dateTime;
            $heroSlides[$i]->slogan = $faker->sentence;
        }
    
        $banners = $heroSlides;
        /**
         *
         *
         *
         *
         */
        // for the who is who section
        class WhoIsWho
        {
            public $title;
            public $description;
        }
    
        $whoIsWho = new WhoIsWho();
    
        $whoIsWho->title = $faker->sentence;
        $whoIsWho->description = $faker->paragraph;
        /**
         *
         *
         *
         *
         */
        // for the school employees
        class Employee
        {
            public $name;
            public $post;
            public $description;
            public $id;
        }
    
        $employees = [];
    
        // add 5 employees
        for ($i = 0; $i < 5; $i++) {
            $employees[] = new Employee();
    
            $employees[$i]->name = $faker->name;
            $employees[$i]->post = $faker->jobTitle;
            $employees[$i]->description = $faker->paragraph;
            $employees[$i]->id = $i;
        }
        /**
         *
         *
         *
         *
         */
        // for the research and development
        class ResearchAndDevelopment
        {
            public $title;
            public $description;
        }
        $researchAndDevelopment = new ResearchAndDevelopment();
        $researchAndDevelopment->title = $faker->sentence;
        $researchAndDevelopment->description = $faker->paragraph;
    
        /**
         *
         *
         *
         *
         */
        // for the reasearch programs
        class ResearchPrograms
        {
            public $id;
            public $name;
            public $card_img;
        }
    
        $researchPrograms = [];
    
        // add 4 research programs
        for ($i = 0; $i < 4; $i++) {
            $researchPrograms[] = new ResearchPrograms();
    
            $researchPrograms[$i]->id = $i;
            $researchPrograms[$i]->name = $faker->sentence;
            $researchPrograms[$i]->card_img = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
        }
    
        $programs = $researchPrograms;
        /**
         *
         *
         *
         *
         * */
        // for the latest news and events
        class LatestNewsAndEvents
        {
            public $title;
            public $description;
        }
    
        $latestNewsAndEvents = new LatestNewsAndEvents();
        $latestNewsAndEvents->title = $faker->sentence;
        $latestNewsAndEvents->description = $faker->paragraph;
    } else {
        // for the welcome section
        class WelcomeSection
        {
            public $title;
            public $description;
        }
    
        $welcomeSection = new WelcomeSection();
    
        $welcomeSection->title = 'Welcome to the Change of TACK.';
        $welcomeSection->description = "Ahlan wa sahlan!  Welcome! TACK's  continued mission is to continually strive to improve and create state of the art provision for Arabic for children.
                TACK is a multifaceted organisation devoted to, and driven by, research, development and teacher education in collaboration with experts and consultants in literacy development,  language acquisition and early years, to inform its services, practices, pedagogies and teaching.
                We continue to insist on making change for the better, making learning Arabic fun, engaging, relevant and something to look forward to for children. From our genesis as weekend school in 2007, we have expanded to developing and publishing effective learning resources, providing online classes, private tuition, YouTube resources, and providing training and consultancy to other schools or institutions.
                TACK’s vision aspires toward to promoting the learning of languages, currently Arabic, in an atmosphere of togetherness and kindness and sees language as a route to increasing empathy, empowering cooperation and communication and gateway to understanding. 
                ";
    }
    
@endphp

@extends('frontend.layouts.app')
@section('title', $title)
@section('styles')
    <link rel="stylesheet" href="{{ asset('style/about.css') }}" />
@endsection

@section('content')
    {{-- memebr more info popup here --}}
    <div class="schoolMemberPopupHolder"></div>

    {{-- welcome section about us page --}}
    <section id="welcome" class="welcomeSection whoIsWhoSection">
        <section>
            @if (config('app.env') !== 'production')
                {{ settings('about', 'welcome') }}
            @else
                <div>
                    <h2> {{ $welcomeSection->title }} </h2>
                    <hr>
                </div>
                <p>
                    {{ $welcomeSection->description }}
                </p>
            @endif
        </section>
    </section>

    {{-- slide shows --}}
    <div class="swiper heroSlide">
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
                <div class="swiper-slide">
                    @if (config('app.env') === 'production')
                        <img src="{{ asset('storage/images/' . $banner->banner) }}" alt="">
                    @else
                        <img src="{{ $banner->image }}" alt="">
                    @endif
                    @if ($banner->title)
                        <div class="backDrop">
                            <div class="slogan">{{ $banner->slogan }}</div>
                            <div class="titleSlider">{{ $banner->title }}</div>
                            <div class="description">{{ $banner->description }}</div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="shadowbg"></div>
    </div>

    {{-- who is who section --}}
    <section id="whoIsWho" class="whoIsWhoSection">
        <section>
            @if (config('app.env') == 'production')
                {!! settings('about', 'who_is_who') !!}
            @else
                <div>
                    <h2>{{ $whoIsWho->title }}</h2>
                    <hr>
                </div>
                <p>{!! $whoIsWho->description !!}</p>
            @endif
        </section>
    </section>

    {{-- slider after who is who --}}
    <section class="sliderMemberInfo">
        <section>
            <section class="schoolMemberSlider">
                <section id="schoolMemberSliderID" class="schoolMemberSlickSlider">
                    {{-- list all the member of school here --}}
                    @foreach ($employees as $item)
                        <div class="schoolMember">
                            <section>
                                {{-- side image --}}
                                <img class="leftImg" src="../img/about page/Group 41858.svg" alt="" srcset="">
                                <div class="e-name">{{ $item->name }}</div>
                                <div class="e-post">{{ $item->post }}</div>
                                <div> <img src="../img/about page/Group 11.svg" alt="" srcset="" style="max-width:70px;"> </div>
                                <div class="schoolMemberBody">
                                    {{ $item->description }}
                                </div>
                                <div> <button class="schoolMemberReadMoreButton" type="button" data-name="{{ $item->name }}" data-post="{{ $item->post }}" data-description="{{ $item->description }}"> Read More </button> </div>
                            </section>
                        </div>
                    @endforeach
                </section>
            </section>

            {{-- slider button --}}
            <section>
                <button class="schoolMemberSliderPrev">Previous</button>
                <button class="schoolMemberSliderNext">Next</button>
            </section>

        </section>
    </section>

    {{-- research and development --}}
    <section id="researchAndDevelopment" class="researchAndDevelopmentSection">
        <section>

            <section>
                @if (config('app.env') == 'production')
                    {!! settings('about', 'research_and_development') !!}
                @else
                    <div>
                        <h2>{{ $researchAndDevelopment->title }}</h2>
                        <hr>
                    </div>
                    <p>{{ $researchAndDevelopment->description }}</p>
                @endif
            </section>

            {{-- drop down button to expand the panel --}}
            <div id="toggle-btn-research" class="dropDownButtonToExpandPanel"> <span><i class="material-icons">expand_more</i></span> </div>

            <div id="toggle-btn-research-more-content" class="programmerResearch">
                <h5>Our research and development programmes include:</h5>
                <div class="programContainer">
                    <img class="progUpperImg" src="../img/about page/Group 42124.png">
                    @foreach ($programs as $item)
                        <div class="programItem">
                            <a href="{{ route('guide', $item->id) }}">
                                @if (config('app.env') == 'production')
                                    <img src="{{ asset('storage/images/' . $item->card_img) }}" alt="{{ $item->name }}">
                                @else
                                    <img src="{{ $item->card_img }}" alt="{{ $item->name }}">
                                @endif
                                <div class="programOverlay">
                                    <div>{{ $item->name }}</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <img class="progLowerImg" src="../img/about page/Star Idea.svg">
                </div>
            </div>
            {{-- Explore more button --}}
            {{-- <div class="exploreMoreButton"> <button> Explore More </button> </div> --}}
        </section>
    </section>

    {{-- latest news and event --}}
    <section id="latestNewsAndEvents" class="latestNewsAndEvent">
        <section>
            <section>
                @if (config('app.env') == 'production')
                    {!! settings('about', 'latest_news') !!}
                @else
                    <div>
                        <h2>{{ $latestNewsAndEvents->title }}</h2>
                        <hr>
                    </div>
                    <p>{{ $latestNewsAndEvents->description }}</p>
                @endif
            </section>

            {{-- slider section --}}
            <div class="newsCardSliderSection">
                <div>Our recent events over the past year include</div>
                <div>
                    <i style="cursor: pointer" class="material-icons newsCardSliderSectionBack">arrow_back</i>
                    <i style="cursor: pointer" class="material-icons newsCardSliderSectionNext">arrow_forward</i>
                </div>
            </div>

            {{-- Event card listed here --}}
            <section class="eventCardWrapper">
                <section class="eventCardSliderWrapper">
                    @foreach ($events as $item)
                        <div class="eventCardItem">
                            <div>
                                <img src="{{ asset('storage/images/' . $item->image) }}" alt="" srcset="">
                                <div> Event </div>
                            </div>
                            <div>
                                <div> {{ $item->title }}</div>
                                <div> {{ $item->description }}</div>
                            </div>
                        </div>
                    @endforeach
                </section>
            </section>
        </section>
    </section>


    {{-- Our special event --}}
    {{-- <section id="ourSpecialEvents" class="ourSpecialEvents">
        <section>
            <h2>Our Special Events</h2>
            <hr>
            <img class="footballIcon" src="../img/about page/Football.svg" alt="" srcset="">
            <section class="swiper eventsGalleryWrapperMain">
                <section class="eventsGalleryWrapper swiper-wrapper">
                    @foreach ($specialEvents as $item)
                    <div class="specialEventitem swiper-slide">
                        <img src="../img/about page/special 1.png" alt="" srcset="">
                        <div>{{ $item->title }}</div>
                        <div class="specialEventitemFullDescription">{{ $item->description }}</div>
                    </div>
                    @endforeach
                </section>
            </section>

            <section class="specialEventitemDetails">{!! settings('about', 'special_events') !!}</section>
            <section class="specialEventitemNav">
                <button class="ourSpecialEventsSwiperBack">Previous</button>
                <button class="ourSpecialEventsSwiperNext">Next</button>
            </section>
        </section>
    </section> --}}

@endsection

@section('nonBlockingScript')
    <script>
        // Our research programs
        /** 
         * 
         * 
         * 
         * 
         *
         * */
        function truncateText(text, maxLength) {
            if (text.length > maxLength) {
                const truncatedText = text.slice(0, maxLength);
                const remainingText = text.slice(maxLength);
                return `<span class="expandable-text">${truncatedText}<span class="ellipsis">...</span></span><span class="hidden-text">${remainingText}</span>`;
            }
            return text;
        }

        $(document).ready(function() {
            const researchSection = $('.researchAndDevelopmentSection>section>section>p');
            const toggleButton = $('#toggle-btn-research');
            const toggleIcon = $('#toggle-btn-research i');

            const currentDataState = truncateText(researchSection.text(), 300);
            researchSection.html(currentDataState);

            $('.hidden-text').hide();

            toggleButton.click(() => {
                if (toggleIcon.text() === 'expand_more') {
                    toggleIcon.text('expand_less');
                    const currentData = researchSection.html();
                    researchSection.html(currentData.replace('<span class="ellipsis">...</span>', ""));
                    $('.hidden-text').show();
                } else {
                    toggleIcon.text('expand_more');
                    researchSection.html(currentDataState);
                    $('.hidden-text').hide();
                }
            });
        });
        /**
         * 
         * 
         * 
         * 
         * For the Hero Slider
         * */
        $(document).ready(function() {
            const swiper = new Swiper('.heroSlide', {
                autoplay: {},
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + '">' + "</span>";
                    },
                },
            });
        });
        /**
         * 
         * 
         * 
         * School Member Slider
         * */
        $(document).ready(function() {
            $('.schoolMemberSlickSlider').slick({
                arrows: false,
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 2,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll:1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.schoolMemberSliderPrev').click(function() {
                $('.schoolMemberSlickSlider').slick('slickPrev');
            });

            $('.schoolMemberSliderNext').click(function() {
                $('.schoolMemberSlickSlider').slick('slickNext');
            });
        });

        /**
         * 
         * 
         * 
         * 
         * For the event card slider
         */
        $(document).ready(function() {
            $('.eventCardSliderWrapper').slick({
                arrows: false,
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ],
            });

            $('.newsCardSliderSectionNext').click(function() {
                $('.eventCardSliderWrapper').slick('slickNext');
            });

            $('.newsCardSliderSectionBack').click(function() {
                $('.eventCardSliderWrapper').slick('slickPrev');
            });
        });
        /**
         * 
         * 
         * 
         * 
         * For our event card slider
         */
        $(document).ready(function() {
            // For the our special events
            const ourSpecialEventsSwiper = new Swiper('.eventsGalleryWrapperMain', {
                breakpoints: {
                    // when window width is >= 320px
                    900: {
                        slidesPerView: 3
                    },
                    600: {
                        slidesPerView: 3
                    },
                    200: {
                        slidesPerView: 1
                    }
                },
                spaceBetween: 30,
                clickable: true,
                navigation: {
                    nextEl: ".ourSpecialEventsSwiperNext",
                    prevEl: ".ourSpecialEventsSwiperBack",
                },
            });

            ourSpecialEventsSwiper.autoplay.stop();
        })
        /**
         * 
         * 
         * 
         * For school memeber popup
         * */
        $(document).ready(function() {
            $('.schoolMember').each(function(e) {
                const fullText = $(this).find('.schoolMemberBody').text();

                const maxLength = 100;
                const tructedText = fullText.trim().substring(0, maxLength).split(" ").slice(0, -1).join(" ") + "...";
                $(this).find('.schoolMemberBody').text(tructedText);
            });

            $(".schoolMemberReadMoreButton").on("click", function (e) {
                e.preventDefault();
                let dataname = $(this).attr("data-name");
                let datapost = $(this).attr("data-post");
                let datadescription = $(this).attr("data-description");
                // we need to open the popup for this element
                const popupHTML = `
                <section class="schoolMemberPopupMoreInfo popup">
                <section>
                    <section>
                    <div>${ dataname }</div>  
                    <div><button id="schoolMemberMoreInfoPopClose"> <i class="material-icons">close</i> </button></div>  
                    </section>
                    <section class="popupSubtitle">
                    ${ datapost }
                </section>
                <section class="popupContent">${ datadescription }</section>
                </section>
                </section> 
                `;

                $('.schoolMemberPopupHolder').html(popupHTML);
                $('.popup')[0].style.visibility = 'visible';
                $('#schoolMemberMoreInfoPopClose').click(() => {
                    $('.schoolMemberPopupHolder').html('');
                })
            })
        });
        /**
         * 
         * 
         * 
         * 
         * */
        // For the special events tabs
        $(document).ready(function() {
            $('.specialEventitem').each(function(e) {
                const fullText = $(this).find('.specialEventitemFullDescription').text();
                $(this).find('.specialEventitemFullDescription').hide();
                $(this).click((e) => {
                    e.preventDefault();
                    $('.specialEventitemDetails').text(fullText);
                });
            });

            // simulate the first card click events tabs
            $('.specialEventitem').length !== 0 ? $('.specialEventitem')[0].click() : () => {};
        });
    </script>

@endsection