@php
    // Import Faker
    use Faker\Factory;
    $faker = Factory::create();
    
    // page data
    $title = 'School Club';
    
    if (config('app.env') == 'local') {
        // For what is amalayh
        class WhatIsAmalayh
        {
            public $title;
            public $description;
            public $coverImage;
        }
    
        $whatIsAmalayh = new WhatIsAmalayh();
        $whatIsAmalayh->title = $faker->sentence;
        $whatIsAmalayh->description = $faker->paragraph;
        $whatIsAmalayh->coverImage = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
    
        // After school club
        class AfterSchoolClub
        {
            public $title;
            public $description;
            public $coverImage;
        }
    
        $afterSchoolClub = new AfterSchoolClub();
        $afterSchoolClub->title = $faker->sentence;
        $afterSchoolClub->description = $faker->paragraph;
        $afterSchoolClub->coverImage = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
    
        // For tack partnership
        class TackPartnership
        {
            public $title;
            public $description;
            public $coverImage;
            public $CTALink;
            public $CTAButtonText;
        }
    
        $tackPartnership = new TackPartnership();
        $tackPartnership->title = $faker->sentence;
        $tackPartnership->description = $faker->paragraph;
        $tackPartnership->coverImage = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
        $tackPartnership->CTALink = '';
        $tackPartnership->CTAButtonText = 'Find Out More';
    }
@endphp

@extends('frontend.layouts.app')
@section('title', $title)

@section('styles')
    <link rel="stylesheet" href="{{ asset('style/schoolclub.css') }}" />
@endsection

@section('content')

    {{-- School Club created by prasenjeet symon --}}
    <section style="background-image: url({!! asset('storage/images/' . settings('school_club', 'section_one_image')) !!})" class="schoolClubSectionOne">
        <div>
            <div>{!! settings('school_club', 'section_one_heading') !!}</div>
            <div>{!! settings('school_club', 'section_one_description') !!}</div>
        </div>
        <div></div>
    </section>

    {{-- New what is ama section created by prasenjeet symon --}}
    <section class="whatIsAmaSectionNew" id="WhatisAlMayeeyah">
        <section>
            <div> <img src="https://tack2.binary.fyi/storage/images/club%20photo.png" alt="" srcset=""></div>
            <div>
                @if (config('app.env') == 'production')
                    <div>{!! settings('school_club', 'section_two_heading') !!}</div>
                    <div><img src="../img/about page/white 4 sq.svg" alt="" srcset=""></div>
                    <div>{!! settings('school_club', 'section_two_description') !!}</div>
                    <div> <button class="foundOutMoreButton"><a href="{{ asset('pdf/After-School-Club-Flier.pdf') }}" target="_blank">Find Out More</a></button></div>
                @endif
                @if (config('app.env') == 'local')
                    <div>{{ $whatIsAmalayh->title }}</div>
                    <div><img src="../img/about page/white 4 sq.svg" alt="" srcset=""></div>
                    <div>{{ $whatIsAmalayh->description }}</div>
                    <div><button class="foundOutMoreButton"> <a href="{{ asset('pdf/After-School-Club-Flier.pdf') }}" target="_blank">Find Out More</a></button></div>
                @endif
            </div>
        </section>
    </section>

    {{-- School partnership start here --}}
    <section id="TACKSchoolPartnership">
        <div>
            <h2>{!! settings('school_club', 'section_three_heading') !!}</h2>
            <p>{!! settings('school_club', 'section_three_description') !!}</p>
            <button class="foundOutMoreButton"><a href="{{ asset('pdf/The-Arabic-Club-for-Kids-Partnership-updated.pdf') }}" target="_blank">Find Out More</a></button>
        </div>
    </section>

@endsection