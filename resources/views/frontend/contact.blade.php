@php
    // import Faker
    use Faker\Factory;
    $faker = Factory::create();
    
    // page data
    $title = 'Tack - Contact Us';
    
    if (env('APP_ENV') == 'local') {
    }
@endphp

@extends('frontend.layouts.app')
@section('title', $title)
@section('styles')
    <link rel="stylesheet" href="{{ asset('style/contact.css') }}" />

    <style>
        .text-danger {
            color: red;
            font-size: 10px;
        }

        .alert {
            position: relative;
            padding: 1rem 1rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .alert-success {
            color: #0f5132;
            background-color: #d1e7dd;
            border-color: #badbcc;
        }

        .alert-danger {
            color: #842029;
            background-color: #f8d7da;
            border-color: #f5c2c7;
        }

        .alert-warning {
            color: #664d03;
            background-color: #fff3cd;
            border-color: #ffecb5;
        }

        .alert-info {
            color: #055160;
            background-color: #cff4fc;
            border-color: #b6effb;
        }

        .fade {
            transition: opacity .15s linear;
        }

        .fade:not(.show) {
            opacity: 0;
        }
    </style>
@endsection

@section('content')
    <section class="contactUs reveal" id="contactUs">
        <div class="form flex-layout-sp small-container">
            <div class="c-detail">
                <h2 class="h-white">{{ settings('contact', 'section_five_heading') }}</h2>
                <p class="h-yellow">{!! settings('contact', 'section_five_description') !!}</p>
            </div>

            <form action="{{ route('sendcontactmail') }}" id="form" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input type="text" name="email" placeholder="Email">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                @error('message')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                {{-- <div class="btn">Submit</div> --}}
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </section>
    <section class="contact reveal container" id="staffVacancies">
        <div class="hr-center-heading">
            <h2>{{ settings('contact', 'section_one_heading') }}</h2>
            <hr>
        </div>
        <img src="../img/contact/pink svg.svg" alt="" class="svg">
        <p class="medium">{!! settings('contact', 'section_one_description') !!}</p>

        <h4 class="h-red medium">{{ settings('contact', 'section_two_heading') }}</h4>

        <ul class="should">
            {!! settings('contact', 'section_two_description') !!}
        </ul>
        <p class="medium">{!! settings('contact', 'section_three_description') !!}</p>
    </section>

    {{-- <section class="small-container blue-container reveal">
        <p class="medium">{!! settings('contact', 'section_three_description') !!}</p>
        <img src="../img/contact/alpha.svg" alt="" class="svg">
    </section> --}}

    <section class="small-container center reveal">
        <p class="l-para">{!! settings('contact', 'section_four_description') !!}</p>
    </section>
@endsection