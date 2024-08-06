@php
    // import Faker
    use Faker\Factory;
    $faker = Factory::create();
    
    // page data
    $title = 'Tack - Ethos';
    
    if (env('APP_ENV') == 'local') {
    }
@endphp

@extends('frontend.layouts.app')
@section('title', $title)
@section('styles')
    <link rel="stylesheet" href="{{ asset('style/ethos.css') }}" />
@endsection

@section('content')

    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
                <div class="swiper-slide flex-box"><img src="{{ asset('storage/images/' . $banner->banner) }}" alt=""></div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="shadowbg"></div>
    </div>


    {{-- ethos  2 section created by prasenjeet symon --}}
    {{-- make it dynamic using below section --}}
    <section class="ourEthos2Section">
        <section>
            <div><img src="../img/about page/Friends-3.jpg" alt=""></div>
            <div>
                <div>{{ settings('ethos', 'section_one_heading') }}</div>
                <div>{!! settings('ethos', 'section_one_description') !!}</div>
                <div><img src="../img/home page/4 square.svg" alt="" class="svg"></div>
            </div>
        </section>
    </section>

    {{-- do not use this one --}}
    {{-- <section class="ethos reveal">
        <div class="ethos-container grid-left-img container">
            <div class="ethos-left"><img src="../img/home page/table img.png" alt=""></div>
            <div class="ethos-right">
                <h5 class="h-yellow">{{ settings('ethos', 'section_one_heading') }}</h5>
                <p class="h-white">{!! settings('ethos', 'section_one_description') !!}
                </p>

                <img src="../img/home page/4 square.svg" alt="" class="svg">
            </div>
        </div>
    </section> --}}

    <section class="ethod-big-img reveal container">
        <p class="md-para medium">{!! settings('ethos', 'section_two_description') !!}</p>

        <img src="../img/home page/Our-Ethos-1920x512-2x.png" alt="">
    </section>

    {{-- lower tab section created by prasenjeet symon | @ worksymon@outlook.com --}}
    <section class="lowerTabSectionNew">
        <div>
            <div>
                {{-- list all the tabs buttons here --}}
                <button data-tab-lower="empowerTabContent" type="button"> {{ settings('ethos', 'empower_heading') }} </button>
                <button data-tab-lower="respectTabContent" type="button"> {{ settings('ethos', 'respect_heading') }} </button>
                <button data-tab-lower="engageTabContent" type="button"> {{ settings('ethos', 'engage_heading') }} </button>
                <button data-tab-lower="equipTabContent" type="button"> {{ settings('ethos', 'equip_heading') }} </button>
            </div>
            <div class="lowerTabSectionNewContentWrapper">
                {{-- tab content goes here --}}
                <div id="empowerTabContent">
                    <div>{{ settings('ethos', 'empower_heading') }}</div>
                    <div>{!! settings('ethos', 'empower_description') !!}</div>
                </div>
                <div id="respectTabContent">
                    <div>{{ settings('ethos', 'respect_heading') }}</div>
                    <div>{!! settings('ethos', 'respect_description') !!}</div>
                </div>
                <div id="engageTabContent">
                    <div>{{ settings('ethos', 'engage_heading') }}</div>
                    <div>{!! settings('ethos', 'engage_description') !!}</div>
                </div>
                <div id="equipTabContent">
                    <div>{{ settings('ethos', 'equip_heading') }}</div>
                    <div>{!! settings('ethos', 'equip_description') !!}</div>
                </div>
            </div>
        </div>
        <div><img src="../img/home page/image.png" alt="" srcset=""></div>
    </section>
@endsection

@section('nonBlockingScript')
    <script>
        $(document).ready(() => {
            const swiper = new Swiper('.swiper-container', {
                autoplay: {
                    delay: 5000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + '">' + "</span>";
                    },
                },
            });

            // Written by prasenjeet symon , lower section tabs 
            $('.lowerTabSectionNewContentWrapper>div').hide();

            $('.lowerTabSectionNew button').each((function(e) {
                $(this).click(function(e) {
                    $('.lowerTabSectionNew button').each(function() {
                        $(this).removeClass('activeTab');
                    });

                    $(this).toggleClass('activeTab');
                    e.preventDefault();
                    const dataID = $(this).attr('data-tab-lower');
                    $('.lowerTabSectionNewContentWrapper>div').hide();
                    $(`#${dataID}`).show();
                });
            }));

            $('.lowerTabSectionNew button')[0].click();
        })
    </script>
@endsection