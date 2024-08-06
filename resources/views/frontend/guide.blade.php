@extends('frontend.layouts.app')
@section('title', $data->name)
@section('styles')
<link rel="stylesheet" href="{{ asset('style/guide.css') }}" />
@endsection

@section('content')
    <!-- ------------------- main code start here --------------------  -->
    <section class="guide-container small-container reveal">
        <div class="sub-container">
            <div class="heading">
                <h2>{{ $data->name }}</h2>
                <img src="{{ asset('/img/contact/computer.svg') }}" alt="computer" class="computer">
            </div>

            {{-- <div class="year-btn flex-layout-sp">
                <div class="year">
                    <p class="medium">Year: 2022 <span></span> Category: Reading</p>
                </div>
                <div class="arrowBtn">
                    <button class="arrow right-a swiper-button-nex5">
                        <iconify-icon icon="material-symbols:arrow-right-alt" rotate="180deg"></iconify-icon>
                    </button>
                    <button class="arrow left-a swiper-button-pre5">
                        <iconify-icon icon="material-symbols:arrow-right-alt"></iconify-icon>
                    </button>
                </div>
            </div> --}}

            <div class="slide-container">
                <div class="swiper mySwiper5">

                    <div class="swiper-wrapper">
                        @if ($data->detail_page_img_1 != null)
                        <div class="swiper-slide">
                            <div class="slide-img"><img src="{{ asset('storage/images/' . $data->detail_page_img_1) }}"></div>
                        </div>
                        @endif
                        @if ($data->detail_page_img_2 != null)
                        <div class="swiper-slide">
                            <div class="slide-img"><img src="{{ asset('storage/images/' . $data->detail_page_img_2) }}"></div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="guide-para reveal">
                {!! $data->description !!}
            </div>
        </div>
    </section>
@endsection