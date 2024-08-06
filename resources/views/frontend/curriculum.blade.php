@php
    // import faker
    use Faker\Factory;
    $faker = Factory::create();
    
    // page data
    $title = 'Tack - Curriculum';
    
    if (config('app.env') !== 'local') {
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
    
        /**
         *
         *
         *
         *
         *
         */
        // For the Our Curriculum
        class OurCurriculum
        {
            public $title;
            public $description;
            public $coverImage;
        }
    
        $ourCurriculum = new OurCurriculum();
        $ourCurriculum->title = settings('curriculum', 'heading');
        $ourCurriculum->description = settings('curriculum', 'description');
        $ourCurriculum->coverImage = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
        /**
         *
         *
         *
         *
         *
         */
        // Reading Section
        class Reading
        {
            public $title;
            public $description;
            public $coverImage;
        }
    
        $reading = new Reading();
        $reading->title = settings('curriculum', 'section_one_heading');
        $reading->description = settings('curriculum', 'section_one_description');
        $reading->coverImage = asset('storage/images/'.settings('curriculum','section_one_image'));
        /**
         *
         *
         *
         *
         *
         */
        // For the Speaking and listening
        class SpeakingAndListening
        {
            public $title;
            public $description;
            public $coverImage;
        }
    
        $speakingAndListening = new SpeakingAndListening();
        $speakingAndListening->title = settings('curriculum', 'section_two_heading');
        $speakingAndListening->description = settings('curriculum', 'section_two_description');
        $speakingAndListening->coverImage = asset('storage/images/'.settings('curriculum','section_two_image'));
        /**
         *
         *
         *
         *
         *
         */
        // For the Writing
        class Writing
        {
            public $title;
            public $description;
            public $coverImage;
        }
    
        $writing = new Writing();
        $writing->title = settings('curriculum', 'section_three_heading');
        $writing->description = settings('curriculum', 'section_three_description');
        $writing->coverImage = asset('storage/images/'.settings('curriculum','section_three_image'));
    }
@endphp

@extends('frontend.layouts.app')

@section('title', $title)
@section('styles')
    <link rel="stylesheet" href="{{ asset('style/curriculum.css') }}" />
@endsection

@section('content')
    {{-- Hero slider made by prasenjeet symon --}}
    <section class="swiper heroSlide">
        <div class="swiper-wrapper">
            @foreach ($banners as $slider)
                <div class="swiper-slide">
                    <img src="{{ asset('storage/images/' .$slider->banner) }}" alt="" srcset="">
                    {{-- backdrop --}}
                    <div class="backDrop">
                        <div class="slogan"></div>
                        <div class="titleSlider">{{ $slider->heading }}</div>
                        <div class="description">{{ $slider->subheading }}</div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="swiper-pagination"></div>
        <div class="shadowbg"></div>
    </section>

    {{-- Our curriculum --}}
    <section class="ourCurriculum">
        <div>
            <div>{{ $ourCurriculum->title }}</div>
            <hr>
            <div>{{ $ourCurriculum->description }}</div>
            {{-- ../img/reserch & community page/svg pink.svg --}}
            <div><img src="{{ asset('img/reserch & community page/svg pink.svg') }}" alt="" srcset=""></div>
        </div>
    </section>

    {{-- Reading Section --}}
    <section id="reading" class="readingSection sectionWithRightImgae">
        <div>
            <div>
                <div>{{ $reading->title }}</div>
                <div><img src="{{ asset('img/reserch & community page/pink.svg') }}" alt="" srcset=""></div>
                <div>{!! $reading->description !!}</div>
            </div>
            <div>
                <img src={{ $reading->coverImage }} alt="{{ $reading->title }}" srcset="">
            </div>
        </div>
    </section>

    {{-- Speking and listning  --}}
    <section id="speaking-and-listening" class="speakingAndListening sectionWithLeftImgae">
        <div>
            <div><img src="{{ $speakingAndListening->coverImage }}" alt=""></div>
            <div>
                <div>{{ $speakingAndListening->title }}</div>
                <div> <img src="{{ asset('img/reserch & community page/green.svg') }}" alt="" srcset=""></div>
                <div>{{ $speakingAndListening->description }}</div>
            </div>
        </div>
    </section>

    {{-- Writing Section --}}
    <section id="writing" class="writingSection sectionWithRightImgae">
        <div>
            <div>
                <div>{{ $writing->title }}</div>
                <div><img src="{{ asset('img/reserch & community page/pink.svg') }}" alt="" srcset=""></div>
                <div>{{ $writing->description }}</div>
            </div>
            <div>
                <img src={{ $writing->coverImage }} alt="{{ $writing->title }}" srcset="">
            </div>
        </div>
    </section>

@endsection

@section('nonBlockingScript')
    <script>
        const swiper = new Swiper('.heroSlide', {
            autoplay: {
                delay: 5000
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function(index, className) {
                    return '<span class="' + className + '">' + "</span>";
                },
            },
        });
    </script>
@endsection
