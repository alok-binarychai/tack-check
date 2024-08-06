@php
    use Faker\Factory;
    $faker = Factory::create();
    // page data
    $title = 'Our Classes';
    
    if (config('app.env') == 'local') {
        // for our weekend school
        class SchoolLocation
        {
            public $id;
            public $name;
            public $where;
            public $when;
            public $description;
            public $term_file;
            public $classrooms_file;
        }
    
        class SchoolWeekend
        {
            public $heading;
            public $schoolLocations;
            public $coverImage;
        }
    
        $schoolWeekend = new SchoolWeekend();
    
        $schoolWeekend->heading = 'Our Weekend School';
        $schoolWeekend->coverImage = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
    
        // add 5 school locations
        for ($i = 0; $i < 5; $i++) {
            $schoolWeekend->schoolLocations[] = new SchoolLocation();
    
            $schoolWeekend->schoolLocations[$i]->id = $i;
            $schoolWeekend->schoolLocations[$i]->name = $faker->city;
            $schoolWeekend->schoolLocations[$i]->where = $faker->city;
            $schoolWeekend->schoolLocations[$i]->when = $faker->date;
            $schoolWeekend->schoolLocations[$i]->description = $faker->paragraph;
            $schoolWeekend->schoolLocations[$i]->term_file = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
            $schoolWeekend->schoolLocations[$i]->classrooms_file = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
        }

        $weekendSchool = $schoolWeekend->schoolLocations;
    
        // for the youtube section
        class YouTube
        {
            public $title;
            public $description;
            public $coverImage;
            public $link;
        }
    
        $youtube = new YouTube();
        $youtube->title = $faker->sentence;
        $youtube->description = $faker->paragraph;
        $youtube->coverImage = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
        $youtube->link = '';
    
        // For the private tution
        class PrivateTution
        {
            public $title;
            public $description;
            public $coverImage;
            public $feeTitle;
            public $feeDetails;
            public $feeRemarks;
        }
    
        $privateTution = new PrivateTution();
    
        $privateTution->title = $faker->sentence;
        $privateTution->description = $faker->paragraph;
        $privateTution->coverImage = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
        $privateTution->feeTitle = $faker->sentence;
        $privateTution->feeDetails = $faker->paragraph;
        $privateTution->feeRemarks = $faker->paragraph;
    
        // for the key dates
        class KeyDateCard
        {
            public $school_name;
            public $timingStart;
            public $timingEnd;
            public $day;
            public $id;
        }
    
        class KeyDates
        {
            public $title;
            public $description;
            public $keyDateCards;
        }
    
        $keyDates = new KeyDates();
    
        $keyDates->title = $faker->sentence;
        $keyDates->description = $faker->paragraph;
    
        // add 5 key dates
        for ($i = 0; $i < 2; $i++) {
            $keyDates->keyDateCards[] = new KeyDateCard();
    
            $keyDates->keyDateCards[$i]->school_name = $faker->city;
            $keyDates->keyDateCards[$i]->timing = $faker->time;
            $keyDates->keyDateCards[$i]->day = $faker->dayOfWeek;
            $keyDates->keyDateCards[$i]->id = $i;
        }
    
        // for the after school club
        class AfterSchoolClub
        {
            public $title;
            public $description;
            public $coverImage;
            public $schoolLocations;
            public $pdfFileUrl;
            public $canChooseSchoolLocation;
        }
    
        $afterSchoolClub = new AfterSchoolClub();
    
        $afterSchoolClub->title = $faker->sentence;
        $afterSchoolClub->description = $faker->paragraph;
        // $afterSchoolClub->coverImage = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
        $afterSchoolClub->canChooseSchoolLocation = $faker->boolean;
    
        // add 5 school locations
        for ($i = 0; $i < 5; $i++) {
            $afterSchoolClub->schoolLocations[] = new SchoolLocation();
    
            $afterSchoolClub->schoolLocations[$i]->id = $i;
            $afterSchoolClub->schoolLocations[$i]->name = $faker->city;
            $afterSchoolClub->schoolLocations[$i]->where = $faker->city;
            $afterSchoolClub->schoolLocations[$i]->when = $faker->date;
            $afterSchoolClub->schoolLocations[$i]->description = $faker->paragraph;
            $afterSchoolClub->schoolLocations[$i]->term_file = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
            $afterSchoolClub->schoolLocations[$i]->classrooms_file = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
        }
    } else {
        class SchoolWeekend
        {
            public $heading;
            public $schoolLocations;
            public $coverImage;
        }
    
        $schoolWeekend = new SchoolWeekend();
    
        $schoolWeekend->heading = 'Our Weekend School';
        // for the youtube section
        class YouTube
        {
            public $title;
            public $description;
            public $coverImage;
            public $link;
        }
    
        $youtube = new YouTube();
        $youtube->title = 'The Arabic Club for Babies and Toddlers TACK babies';
        $youtube->description = '';
        $youtube->coverImage = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
        $youtube->link = '';
    
        class KeyDates
        {
            public $title;
            public $description;
            public $keyDateCards;
        }
    
        $keyDates = new KeyDates();
    
        $keyDates->title = 'Key Dates';
        $keyDates->description = 'Our each branch runs on one day of the weekend <b>either</b> Saturday <b>or</b> Sunday';
        $keyDates->keyDateCards = $keyDate;
    
        // for the after school club
        class AfterSchoolClub
        {
            public $title;
            public $description;
            public $coverImage;
            public $schoolLocations;
            public $pdfFileUrl;
            public $canChooseSchoolLocation;
        }
    
        $afterSchoolClub = new AfterSchoolClub();
    
        $afterSchoolClub->title = 'AlMaeeyah After School Arabic Club';
        $afterSchoolClub->description = settings('class', 'section_after_school_description');
        $afterSchoolClub->canChooseSchoolLocation = count($afterSchool) > 0 ? true : false;
        $afterSchoolClub->schoolLocations[] = $afterSchool;
    
        // For the private tution
        class PrivateTution
        {
            public $title;
            public $description;
            public $coverImage;
            public $feeTitle;
            public $feeDetails;
            public $feeRemarks;
        }
    
        $privateTution = new PrivateTution();
    
        $privateTution->title = settings('class', 'section_two_heading');
        $privateTution->description = settings('class', 'section_two_description');
        $privateTution->coverImage = asset('storage/images/' . settings('class', 'section_two_image'));
        $privateTution->feeTitle = '';
        $privateTution->feeDetails = '';
        $privateTution->feeRemarks = '';
    }
    
@endphp

@extends('frontend.layouts.app')
@section('title', $title)
@section('styles')
    <link rel="stylesheet" href="{{ asset('style/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/ourclasses.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/school_fee_structure.css') }}">
    <style>
        .schoolFeeStructurePopup {
            display: none;
        }
    </style>
@endsection

@section('content')
    <section class="schoolFeeStructurePopup">
        @include('frontend.partials.key_dates')
    </section>
    
    <section id="welcome" class="welcomeSection whoIsWhoSection">
        <section>
                <div>
                    <h2>Our Weekend Schools</h2>
                    <hr>
                </div>
                <p>At the Arabic club for kids we are realise that many of the children coming to learn Arabic with us us at the weekends, have already spent a full 5 days of the week at daily school.  Our programme is thus catered and tailored to give your children an enjoyable, stimulating and high achieving learning experience without adding further stress. of this and do not want to labour your children with a feeling of endless schooling.  We take into account that it’s the weekend, and have a curriculum that has a wide variety of carefully thought through learning activities that fill the young hearts with eagerness to learn Arabic.</p>
                <p>At the same time we are keenly aware of our duty to fulfil the learning targets.  We cover all four skills of language learning, - reading, writing, speaking and listen, through a whole range of focussed and fun language learning strategies.</p>
                <p>Our teachers are professionals, being paid professional rates, with qualifications and skills to teach children, not just people who ‘speak Arabic’.  We have ongoing, teacher training events monitoring and staff meetings to maintain a dynamic, prospering and forward thinking learning environment.  We also stand out in our high teacher pupil ratios, giving in-depth attention to individual children in all classes.</p>
        </section>
    </section>

    {{-- our classes section made by prasenjeet kumar @worksymon@outlook.com --}}
    <section id="ourWeekendSchool" class="ourClassesSectionOne">
        <div>
            <div>
                @if (env('APP_ENV') == 'production')
                    {{ settings('class', 'section_one_heading') }}
                @else
                    <div>{{ $schoolWeekend->heading }}</div>
                @endif
            </div>
            <div>
                <select id="setSchool">
                    <option selected>Select School Location</option>
                    @foreach ($weekendSchool as $item)
                        <option value="ourClassesValue-{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <p id="school-not-found" class="white" style="font-size:1.1rem !important; margin-top: 1px"></p>
                <br>
                <br>
                <p id="school-where" class="white" style="font-size:1.2rem;"></p>
                <p id="school-when" class="white" style="font-size:1.2rem;"></p>
            </div>
            <div>
                <button class="knowMoreButtonOurClasses" type="button">Find Out More</button>
                <p class="clickToKnowMore"> Click here to get more info </p>
            </div>
            <div> Please email us for more information at <a href="mailto:info@arabicclub.co.uk" style="color: #fff;">info@arabicclub.co.uk</a> </div>
        </div>
        <div>
            @if (env('APP_ENV') == 'production')
                <img src="{{ asset('storage/images/' . settings('class', 'section_one_image')) }}" alt="" srcset="">
            @else
                <img src="{{ $schoolWeekend->coverImage }}" alt="" srcset="">
            @endif
        </div>
    </section>
    {{-- Key date section --}}
    <section id="keyDates" class="keyDateSection">
        <div>
            <div>
                <div>
                    <h2>{{ $keyDates->title }}</h2>
                    <hr>
                </div>
                <p>{!! $keyDates->description !!}</p>
            </div>
            <div>
                <div class="keyDateCard">
                    @foreach ($keyDates->keyDateCards as $item)
                        <div class="keyDateCardItem">
                            <div>{{ $item->day }}</div>
                            <div>
                                <div>{{ $item->school_name }}</div>
                                <div>{{ $item->timing }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <button id="knowMoreButtonKeyDatePopup" type="button">Find Out More</button>
            </div>
        </div>
    </section>

    {{-- Key Date Section Popup --}}
    <section class="keyDateSectionPopup popup">
        <section>
            <section>
                <div> </div>
                <div><button class="keyDateSectionPopupCloseButton"> <i class="material-icons">close</i> </button></div>
            </section>
            <section class="popupContent">
                <table style="border: 1px solid #000;">
                    <thead>
                        <tr>
                            <th><b>Term Dates North London 2023-2024 Saturday</b></th>
                            <th><b>Term Dates South London 2023-2024 Sunday</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p><b>TERM 1</b></p>
                                <p>School starts 23th September 2023</p>
                                <p>23rd September</p>
                                <p>30th September</p>
                                <p>7th October</p>
                                <p>14th 0ctober</p>
                                <p>21st October</p>
                                <p>28th October Half-Term</p>
                                <p>4th November Half-Term</p>
                                <p>11th November</p>
                                <p>18th November</p>
                                <p>25th November</p>
                                <p>2nd December</p>
                                <p>9th December</p>
                            </td>
                            <td>
                                <p><b>TERM 1</b></p>
                                <p>School starts 24th September 2023</p>
                                <p>24th September</p>
                                <p>1st October</p>
                                <p>8th October</p>
                                <p>15th 0ctober</p>
                                <p>22nd October</p>
                                <p>29th October Half- Term</p>
                                <p>5th November Half-Term</p>
                                <p>12th November</p>
                                <p>19th November</p>
                                <p>26th November</p>
                                <p>3rd December</p>
                                <p>10th December</p>
                            </td>
                        </tr>
                        <tr>
                            <td><p><b>TERM 2</b></p></td>
                            <td><p><b>TERM 2</b></p></td>
                        </tr>
                        <tr>
                            <td>
                                <p>6th January</p>
                                <p>13th January</p> 
                                <p>20th January</p>
                                <p>27th January</p>
                                <p>3rd February</p>
                                <p>10th and 17th February Half-Term</p>
                                <p>24th February</p>
                                <p>2nd March</p>
                                <p>9th March</p>
                                <p>16th March</p>
                                <p>23rd March</p>
                                <p>30th March, 6th April, 13th April (Easter holiday)</p>
                            </td>
                            <td>
                                <p>7th January</p>
                                <p>14th January</p>
                                <p>21st January</p>
                                <p>28th January</p>
                                <p>4th February</p>
                                <p>11th and 18th February Half-Term</p>
                                <p>25th February</p>
                                <p>3rd March</p>
                                <p>10th March</p>
                                <p>17th March</p>
                                <p>24th March</p>
                                <p>31st March, 7 April, 14 April (Easter Holiday)</p>
                            </td>
                        </tr>
                        <tr>
                            <td><p><b>TERM 3</b></p></td>
                            <td><p><b>TERM 3</b></p></td>
                        </tr>
                        <tr>
                            <td>
                                <p>20th April</p>
                                <p>27th April</p>
                                <p>4th May</p>
                                <p>11th May</p>
                                <p>18th May</p>
                                <p>25TH May Half-Term</p>
                                <p>1st June</p>
                                <p>8th June</p>
                                <p>15th June Eid Al-ADHA</p>
                                <p>22nd June</p>
                                <p>29th June</p>
                                <p>6th July</p>
                            </td>
                            <td>
                                <p>21st April</p> 
                                <p>28th April</p>
                                <p>5th May</p>
                                <p>12th May</p>
                                <p>19th May</p> 
                                <p>26th May Half-Term</p>
                                <p>2nd June</p>
                                <p>9th June</p>
                                <p>16th June Eid AL-ADHA</p>
                                <p>23rd June</p>
                                <p>30th June</p> 
                                <p>7th July</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>
    </section>

    {{-- weekend school popup --}}
    {{-- Here the popup is listed --}}
    {{-- Just fetch all the option value and list here --}}
    {{-- replace the id part with option value --}}
    {{-- You can style the popup if you want --}}
    @foreach ($weekendSchool as $item)
        <section id="ourClassesValue-{{ $item->id }}" class="ourClassesSectionOnePopupWrapper popup">
            <section>
                <section>
                    <div>{{ $item->name }}</div>
                    <div> <button class="ourClassesSectionOnePopupWrapperCloseButton"> <i class="material-icons">close</i> </button> </div>
                </section>
                <section class="popupSubtitle">
                    @if ($item->where != null)
                        <div class="weekEndSchoolSubInfo"> <span>Location : </span> {{ $item->where }} </div>
                    @endif
                    @if ($item->when != null)
                        <div class="weekEndSchoolSubInfo"> <span>Timings : </span> {{ $item->when }} </div>
                    @endif
                </section>
                <section class="popupContent"> {!! $item->description !!} </section>
                <section class="popupFooter">
                    <div></div>
                    <div>
                        @if ($item->term_file != null)
                            <button> <a href="{{ asset('/files/' . $item->term_file) }}" target="_blank">Term Date</a> </button>
                        @endif
                        @if ($item->classrooms_file != null)
                            <button> <a href="{{ asset('/files/' . $item->term_file) }}" target="_blank">View Classrooms</a> </button>
                        @endif
                    </div>
                </section>
            </section>
        </section>
    @endforeach

    {{-- Online class section --}}
    <section id="onlineClasses" class="onlineClassSection">
        <div>
            <img src="../img/class page/online cls.png" alt="" srcset="">
            <div> Please email us for more information at <a href="mailto:info@arabicclub.co.uk" style="color: #000;">info@arabicclub.co.uk</a> to discuss further or call us at <a href="tel:+44 (0)2079939010" style="color: #000;">+44
                    (0)2079939010</a> </div>
        </div>
    </section>

    {{-- YouTube video section --}}
    <section id="ArabicforBabiesandToddlers" class="youtubeSection">
        <div>
            <div>{{ $youtube->title }}</div>
            <div> {{ $youtube->description }} </div>
            @if ($youtube->link != '')
                <iframe width="100%" height="600" src="{{ $youtube->link }}" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            @endif

            @if ($youtube->link == '')
                <div> <img src="../img/class page/BabyWithToys.jpg" alt="" srcset=""> </div>
            @endif
        </div>
    </section>

    {{-- Private tution section --}}
    <section id="privateTution" class="privateTutionSection">
        <div>
            <div>
                <div>{{ $privateTution->title }}</div>
                <div>{!! $privateTution->description !!}</div>
                <div>
                    <div>{{ $privateTution->feeTitle }}</div>
                    <div>{{ $privateTution->feeDetails }}</div>
                    <div>{{ $privateTution->feeRemarks }}</div>
                </div>
            </div>
            <div>
                <img src="{{ $privateTution->coverImage }}" alt="{{ $privateTution->feeTitle }}" srcset="">
            </div>
        </div>
    </section>

    {{-- Location Section --}}
    <section id="afterSchoolClub" class="locationSection">
        <div>
            <div>
                @if ($afterSchoolClub->coverImage != null)
                    <img src="{{ $afterSchoolClub->coverImage }}" alt="{{ $afterSchoolClub->title }}" srcset="">
                @endif
                @if ($afterSchoolClub->coverImage == null)
                    <img src="../img/class page/Almaeeyah.jpg" alt="{{ $afterSchoolClub->title }}" srcset="">
                @endif
            </div>
            <div>
                <div>{{ $afterSchoolClub->title }}</div>
                @if (!$afterSchoolClub->canChooseSchoolLocation)
                    <div class="locationSectionDescription">{!! $afterSchoolClub->description !!}</div>
                    <div> <button class="knowMoreButtonLocation" type="button"> <a href="{{ asset('files/After School Club Flier.pdf') }}" target="_blank">Find Out More</a> </button> </div>
                @endif
                {{-- choose school location and click to open popup --}}
                @if ($afterSchoolClub->canChooseSchoolLocation)
                    <div class="chooseSchoolLocation">
                        <select name="" id="">
                            <option selected>Select School Location</option>
                            @foreach ($afterSchoolClub->schoolLocations as $item)
                                <option value="weekEndSchool-{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="button" id="knowMoreButtonLocationPopup">Find Out More</button>
                @endif
            </div>
        </div>
    </section>

    {{-- School Location Popup --}}
    @if ($afterSchoolClub->canChooseSchoolLocation)
        @foreach ($afterSchoolClub->schoolLocations as $item)
            <section class="schoolLocationPopup popup" id="weekEndSchool-{{ $item->id }}">
                <section>
                    {{-- header section --}}
                    <section>
                        <div>{{ $item->name }}</div>
                        <div>
                            {{-- close button --}}
                            <button class="schoolLocationPopupCloseButton"> <i class="material-icons">close</i> </button>
                        </div>
                    </section>
                    <section class="popupSubtitle">
                        {{-- school location --}}
                        <div class="weekEndSchoolSubInfo"> <span>Location:</span> {{ $item->where }}</div>
                        {{-- school timing --}}
                        <div class="weekEndSchoolSubInfo"> <span>Timing: </span> {{ $item->when }}</div>
                    </section>
                    {{-- content --}}
                    <section class="schoolLocationPopupContent popupContent">
                        {{ $item->description }}
                    </section>
                </section>
            </section>
        @endforeach
    @endif
    {{-- Online class section --}}
    <section id="summerCamp" class="onlineClassSection">
        <div>
            <img src="../img/class page/SummerCampNew.jpg" alt="" srcset="">
            <div> Please email us for more information at <a href="mailto:info@arabicclub.co.uk" style="color: #000;">info@arabicclub.co.uk</a> to discuss further or call us at <a href="tel:+44 (0)2079939010" style="color: #000;">+44
                    (0)2079939010</a> </div>
        </div>
    </section>

@endsection

@section('nonBlockingScript')
    {{-- Script By Prasenjeet Symon contact @ worksymon@outlook.com --}}
    <script>
        $(document).ready(function() {
            $('#knowMoreButtonKeyDatePopup').click(function() {
                $('.keyDateSectionPopup').show();
                // listen on close button
                $('.keyDateSectionPopup').find('.keyDateSectionPopupCloseButton').click(function() {
                    $('.keyDateSectionPopup').hide();
                });
            });

            $('.keyDateSectionPopup')[0].style.visibility = 'visible';
            $('.keyDateSectionPopup').hide();
        });

        // For our classes popup
        $(document).ready(function() {
            $('.ourClassesSectionOnePopupWrapper').each(function(e) {
                $(this).hide();
            });

            $('.knowMoreButtonOurClasses').click(function(e) {
                e.preventDefault();
                const selctedValue = $('.ourClassesSectionOne').find('select').val();
                if(selctedValue == 'Select School Location') {
                    $('#school-not-found').text('Please Select a School.');
                } else {
                $(`#${selctedValue}`).show();
                $(`#${selctedValue}`).find('.ourClassesSectionOnePopupWrapperCloseButton').click(function() {
                    $(`#${selctedValue}`).hide();
                });
                }
            });


            $('.ourClassesSectionOne select').click(function(e) {
                const value = $(this).val();
                if(value == 'Select School Location') {
                    $('#school-not-found').text('Please Select a School.');
                } else {
                    $('#school-not-found').text('');
                }
            });
        });

        // For weekend school popup
        $(document).ready(function() {
            // For our classes popup
            $('.schoolLocationPopup').each(function(e) {
                $(this).hide();
            });

            $('#knowMoreButtonLocationPopup').click(function(e) {
                e.preventDefault();
                const selctedValue = $('.locationSection').find('select').val();
                $(`#${selctedValue}`).show();
                $(`#${selctedValue}`).find('.schoolLocationPopupCloseButton').click(function() {
                    $(`#${selctedValue}`).hide();
                });
            });
        });
    </script>
    {{-- For the key dates popup --}}
    <script>
        // $(document).ready(function() {
        //     $('#knowMoreButtonKeyDatePopup').click(function(e) {
        //         e.preventDefault();
        //         $('.schoolFeeStructurePopup').show();
        //         $('.feeStructureSchool .headerHolder span').click(function() {
        //             $('.schoolFeeStructurePopup').hide();
        //         })
        //     })
        // })
    </script>
@endsection
