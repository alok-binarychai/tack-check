@php
    // import faker
    use Faker\Factory;
    $faker = Factory::create();
    
    // page data
    $title = 'Home Page';
    
    if (env('APP_ENV') == 'local') {
        // For the hero slider
        class HomePageSlider
        {
            public $slogan;
            public $title;
            public $description;
            public $coverImage;
        }
    
        // add 5 sliders
        $homePageSlider = [];
        for ($i = 0; $i < 5; $i++) {
            $homePageSlider[] = new HomePageSlider();
            $homePageSlider[$i]->title = $faker->sentence;
            $homePageSlider[$i]->description = $faker->paragraph;
            $homePageSlider[$i]->coverImage = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
            $homePageSlider[$i]->slogan = $faker->sentence;
        }
    }
@endphp

@extends('frontend.layouts.app')
@section('title', 'Home')
@section('styles')
    <link rel="stylesheet" href="{{ asset('style/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/home.css') }}" />
@endsection

@section('content')
    {{-- Hero slider made by prasenjeet symon --}}
    <div class="swiper heroSlide">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <video src="{{ asset('video/home-logo-animation-10-july.mp4') }}" muted autoplay loop></video>
            </div>
            @if (env('APP_ENV') == 'production')
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/images/' . $banner->banner) }}" alt="">
                        @if ($banner->title != '')
                            {{-- backdrop  --}}
                            <div class="backDrop">
                                <div class="slogan"></div>
                                <div class="title"></div>
                                <div class="description"></div>
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif

            @if (env('APP_ENV') == 'local')
                @foreach ($homePageSlider as $slider)
                    <div class="swiper-slide">
                        <img src="{{ $slider->coverImage }}" alt="{{ $slider->title }}">
                        {{-- backdrop  --}}
                        @if ($slider->title != '')
                            <div class="backDrop">
                                <div class="slogan">{{ $slider->slogan }}</div>
                                <div class="titleSlider">{{ $slider->title }}</div>
                                <div class="description">{{ $slider->description }}</div>
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif
        </div>
        <div class="swiper-pagination"></div>
        <div class="shadowbg"></div>
    </div>

    {{-- welcome section about us page --}}
    <section id="welcome" class="welcomeSection whoIsWhoSection">
        <section>
            <div>
                <h2>The Arabic Club for Kids</h2>
                <hr>
            </div>
            <p>
                The Arabic Club for Kids started in 2007 as a weekend Arabic language school in London. Stirred by seeing the lack of standards in weekend provisions for Arabic for children when searching for Arabic courses for my own children, I decided to start my own Arabic school and classes for children; but with a difference, with a change of tack. Just as we expect expertise, standards, and fun for all other extracurricular activities, it seemed imperative to me that this had to be the case for Arabic too! Thus, through consultations with language teacher trainers at SOAS university, and literacy specialists at the Institute of Education, UCL, grounded in evidence informed theory, we developed a new, child-centric, fun filled vision and programme, with Arabic teachers with qualifications in education and childcare, as well as Arabic itself. Children who come to our school love learning with us, and this translates into their love for Arabic. Our standards and joy in learning yields manifold outcomes in learning!
            </p>
            <p>
                A few years on, we apply this approach, driven by the same evidence informed, research driven strategies and training and putting emphasis on teacher training as part of our goal to provide children with the best Arabic learning experiences, to an expanding range of services and broader field of work. As well as weekend Arabic courses for children that now operates at two branches in London, North London and South London which we soon hope to be extending the availability of these children’s Arabic classes to West London, Oxford, and the Midlands. In addition to the weekend Arabic classes, we now also host a range of other Arabic teaching and learning materials, courses and classes for children on different platforms, These include: researching and publishing further Arabic resources and books for children; a soon to launch Arabic YouTube channel for toddlers and babies, embarking on our ’ AlMaeeyah’ programme, - an exciting new curriculum vision and mission for After School Arabic Clubs in London and the UK; launching online Arabic classes and courses for children; opening Arabic summer (and other holiday) fun filled immersion camps in London and the UK; and also at times offer private tuition for Arabic for children on request.
            </p>
            <p>
                We have also extended our services for consultancy as we hope to implement our expertise, resources and methodologies in other schools and teaching institutions.
            </p>
        </section>
    </section>

    {{-- List of all the home page section --}}
    <section class="landingPageCard">

        <!-- ---------------------- card 1 -------------------  -->
        <div class="reveal">
            <div><img class="cardBaseImage" src="{{ asset('storage/images/' . settings('home', 'section_one_image')) }}" alt="pic of boy"></div>
            <div>
                <div>
                    <h5>{{ settings('home', 'section_one_heading') }}</h5>
                    <hr>
                </div>
                <p>{!! settings('home', 'section_one_description') !!}</p>
                <img src="../img/home page/Group.svg" alt="" class="svg">
            </div>
        </div>

        <!-- ---------------------- card 2 -------------------  -->
        <div class="reveal">
            <div>
                <div>
                    <h5>{{ settings('home', 'section_two_heading') }}</h5>
                    <hr>
                </div>
                <p>{!! settings('home', 'section_two_description') !!}</p>
                <img src="../img/home page/Group-1.svg" alt="" class="svg">
            </div>
            <div><img class="cardBaseImage" src="{{ asset('storage/images/' . settings('home', 'section_two_image')) }}" alt="pic of boy">
            </div>
        </div>

        <!-- ---------------------- card 3 -------------------  -->
        <div class="reveal">
            <div><img class="cardBaseImage" src="{{ asset('storage/images/' . settings('home', 'section_three_image')) }}" alt="pic of boy">
            </div>
            <div>
                <div>
                    <h5>{{ settings('home', 'section_three_heading') }}</h5>
                    <hr>
                </div>
                <p class="m-3">{!! settings('home', 'section_three_description') !!}</p>
                <img src="../img/home page/Group-2.svg" alt="" class="svg">
            </div>
        </div>

        <!-- ---------------------- card 4 -------------------  -->
        <div class="reveal">
            <div>
                <div>
                    <h5>{{ settings('home', 'section_four_heading') }}</h5>
                    <hr>
                </div>
                <p>{!! settings('home', 'section_four_description') !!} </p>
                <img src="../img/home page/Group-3.svg" alt="" class="svg">
            </div>
            <div><img class="cardBaseImage" src="{{ asset('storage/images/' . settings('home', 'section_four_image')) }}" alt="pic of boy">
            </div>
        </div>
    </section>
@endsection

@section('nonBlockingScript')
    <script>
        $(document).ready(() => {
            const swiper = new Swiper('.heroSlide', {
                autoplay: {
                    delay: 9000
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + '">' + "</span>";
                    },
                },
            });
        })
    </script>
@endsection
