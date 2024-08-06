@php
    use Faker\Factory;
    $faker = Factory::create();
    
    if (config('app.env') === 'local') {
        // For the enrollment
        class Enrollment
        {
            public $id;
            public $class;
            public $date;
            public $description;
        }
    
        // add 4 enrollments
        $enrollments = [];
        for ($i = 0; $i < 4; $i++) {
            $enrollments[] = new Enrollment();
            $enrollments[$i]->id = $i;
            $enrollments[$i]->class = $faker->jobTitle;
            $enrollments[$i]->date = $faker->date;
            $enrollments[$i]->description = $faker->paragraph;
        }
    
        $enrollment = $enrollments;
    
        // For the testomonial section
        class Testomonial
        {
            public $id;
            public $name;
            public $description;
        }
    
        // add 8 testomonials
        $testomonials = [];
        for ($i = 0; $i < 8; $i++) {
            $testomonials[] = new Testomonial();
            $testomonials[$i]->id = $i;
            $testomonials[$i]->name = $faker->name;
            $testomonials[$i]->description = $faker->paragraph;
        }
    
        $testimonials = $testomonials;
    }
    
@endphp


@extends('frontend.layouts.app')
@section('title', 'Tack - Weekend')
@section('styles')
    <link rel="stylesheet" href="{{ asset('style/weekend.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/school_fee_structure.css') }}">
@endsection

@section('content')
    {{-- school fee structre popup --}}
    <section class="schoolFeeStructurePopup">
        @include('frontend.partials.school_fees')
    </section>

    {{-- Our Weekend school section made by prasenjet symon | @ worksymon@outlook.com --}}
    <section class="ourWeekEndSchoolSection">
        <div>
            <div>Our Weekend School</div>
            <div>
                <div>
                    <label>City</label>
                    <select id="setSchool">
                        <option selected>Select School Location</option>
                        @foreach ($weekendSchool as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <p id="school-not-found" style="color: #b60d0d;font-size:1.1rem !important; margin-top: 1px"></p>
                </div>
                <div>
                    <label>Region</label>
                    <select id="region">
                        <option selected>Location Not Avaiable.</option>
                    </select>
                </div>
            </div>
            <div>
                <button type="button">Find Out More</button>
                {{-- <a href="#" class="g-btn school-btn">Find Out More</a> --}}
            </div>
        </div>
        <div>
            <img src="{!! asset('storage/images/' . settings('weekend', 'banner')) !!}" alt="" srcset="">
        </div>
    </section>

    @foreach ($weekendSchool as $item)
        <section id="{{ $item->id }}" class="ourClassesSectionOnePopupWrapper popup">
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


    <section id="ourSchoolValuePS" class="school-value reveal container">
        <section class="ourSchoolValuesSection">
            <div>
                <h2>{{ settings('weekend', 'section_one_heading') }}</h2>
                <hr>
            </div>
            {!! settings('weekend', 'section_one_description') !!}
        </section>

        {{-- drop down button to expand the panel --}}
        <div id="toggle-btn-research" class="dropDownButtonToExpandPanel"> <span><i class="material-icons">expand_more</i></span> </div>

        <img src="../img/about page/Out-Ethos-1400x600.png" alt="">
    </section>

    {{-- Enrollment section --}}
    <section class="admission" id="admissionSectionPS">
        <div>
            {{-- Upper titles --}}
            <div class="enrollmentUpper">
                <h2>Enrolment</h2>
                <hr>
            </div>
            {{-- Actual enrollments listed here --}}
            <div class="enrollmentHold">
                <div>
                    {{-- List all the enrollment items here --}}
                    @foreach ($enrollment as $item)
                        <div class="enrollmentItem">
                            <div>{{ $item->date }}</div>
                            <div>
                                <div>{{ $item->class }}</div>
                                <div>{{ $item->description }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- CTA Button Single --}}
            <div class="ctaAddmissionButton">
                <button class="exploreFeeStructureButton"> Explore Fees </button>
            </div>
        </div>
    </section>

    {{-- Photo gallery sections --}}
    <section id="photoGalleryPS" class="galleryWrapper">
        <section>
            <div>
                <h2>Photo Gallery</h2>
                <hr>
            </div>
            <div>
                @foreach ($gallery as $item)
                    <div><img src="{!! asset('storage/images/' . $item->banner) !!}" alt=""></div>
                @endforeach
            </div>
            @if (count($gallery) > 8)
                <div>
                    <button id="loadMoreGalleryButton"> See More </button>
                </div>
            @endif
        </section>
    </section>

    {{-- Testimonials section developed by Prasenjeet Kumar ( prasenjeetsymon@gmail.com ) --}}
    <section id="testimonialsSectionPS" class="testimonialSectionNew">
        <section>
            {{-- header --}}
            <div class="hederSection">
                <div></div>
                <div>
                    <div>
                        <h2>Testimonials</h2>
                    </div>
                    <hr>
                </div>
                <div>
                    {{-- forward and backward arrow --}}
                    <i class="material-icons testimonialArrowBack">arrow_back</i>
                    <i class="material-icons testimonialArrowNext">arrow_forward</i>
                </div>
            </div>

            {{-- list all your reviews here --}}
            <div class="allReviewsWrapper">
                <div class="innerWrapper allReviewsWrapperSlickSlider">
                    {{-- review item --}}
                    @foreach ($testimonials as $item)
                        <div>
                            <div class="reviewItem">
                                <div>{{ $item->name }}</div>
                                <div>{{ $item->description }}</div>
                                <div> <button> Read more </button> </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
@endsection


@section('nonBlockingScript')
    <script>
        function truncateText(text, maxLength) {
            if (text.length > maxLength) {
                const truncatedText = text.slice(0, maxLength);
                const remainingText = text.slice(maxLength);
                return `<span class="expandable-text">${truncatedText}<span class="ellipsis">...</span></span><span class="hidden-text">${remainingText}</span>`;
            }
            return text;
        }

        $(document).ready(() => {
            const schoolValuesSection = $('.ourSchoolValuesSection p');
            const toggleButton = $('#toggle-btn-research');
            const toggleIcon = $('#toggle-btn-research i');

            const currentDataState = truncateText(schoolValuesSection.text(), 300);
            schoolValuesSection.html(currentDataState);

            $('.hidden-text').hide();

            toggleButton.click(() => {
                if (toggleIcon.text() === 'expand_more') {
                    toggleIcon.text('expand_less');
                    const currentData = schoolValuesSection.html();
                    schoolValuesSection.html(currentData.replace('<span class="ellipsis">...</span>', ""));
                    $('.hidden-text').show();
                } else {
                    toggleIcon.text('expand_more');
                    schoolValuesSection.html(currentDataState);
                    $('.hidden-text').hide();
                }
            });

            // Handle read more section review
            $('.reviewItem').each(function() {
                const originalText = $(this).find('div:nth-of-type(2)').text();
                $(this).find('div:nth-of-type(2)').html(truncateText(originalText, 350));
                $(this).find('.hidden-text').hide();
                $(this).find('button').click(() => {
                    $(this).find('.hidden-text').slideToggle();
                    $(this).find('.ellipsis').slideToggle();
                    $(this).find('button').toggle();
                });
            })
        })
    </script>
    <script>
        $('.allReviewsWrapperSlickSlider').slick({
            arrows: false,
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
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
            ]
        });

        $('.testimonialArrowBack').click(function() {
            $('.allReviewsWrapperSlickSlider').slick('slickPrev');
        });

        $('.testimonialArrowNext').click(function() {
            $('.allReviewsWrapperSlickSlider').slick('slickNext');
        });
    </script>
    {{-- For the school fee popup --}}
    <script>
        $(document).ready(function() {
            $('.exploreFeeStructureButton').click(function(e) {
                e.preventDefault();
                $('.schoolFeeStructurePopup').show();
                $('.feeStructureSchool .headerHolder span').click(function() {
                    $('.schoolFeeStructurePopup').hide();
                })
            })
        })
    </script>

    {{-- For the gallery show more  --}}
    <script>
        const initialNumberOfPics = 8; // even number only
        $(document).ready(function() {
            $('#photoGalleryPS').find('section:nth-of-type(1) > div:nth-of-type(2) > div').each(function(index) {
                if (index >= initialNumberOfPics) {
                    $(this).addClass('hiddenGalleryItem');
                    $(this).hide();
                }
            });

            $('#loadMoreGalleryButton').click(function() {
                $('.hiddenGalleryItem').each(function() {
                    $(this).show();
                    $('#loadMoreGalleryButton').hide();
                })
            })

        });

        // For our classes popup
        $(document).ready(function() {
            $('.ourClassesSectionOnePopupWrapper').each(function(e) {
                $(this).hide();
            });

            $('#setSchool').change(function(e) {
                var selectedId = (e.target.value == undefined) ? 1 : e.target.value;
                var schoolData = {!! json_encode($weekendSchool->toArray(), JSON_HEX_TAG) !!};
                var popupUrl = "{{ config('app.url') }}/week-pop/" + selectedId;
                $.each(schoolData, function(indexes, values) {
                    if (selectedId == values.id) {
                        var option = (values.where != null) ? '<option value="' + values.id + '" selected>' + values.where + '</option>' :
                            '<option selected>Location Not Avaiable.</option>';
                        $('#region').html(option);
                        // $('.school-btn').attr('href', popupUrl);
                    }
                });
            });

            $('.ourWeekEndSchoolSection button').click(function(e) {
                e.preventDefault();
                const selctedValue = $('#setSchool').val();
                if(selctedValue == 'Select School Location') {
                    $('#school-not-found').text('Please Select a School.');
                } else {
                $(`#${selctedValue}`).show();
                $(`#${selctedValue}`).find('.ourClassesSectionOnePopupWrapperCloseButton').click(function() {
                    $(`#${selctedValue}`).hide();
                });
                }
            });


            $('#setSchool').click(function(e) {
                const value = $(this).val();
                if(value == 'Select School Location') {
                    $('#school-not-found').text('Please Select a School.');
                    var option = '<option selected>Location Not Avaiable.</option>';
                    $('#region').html(option);
                } else {
                    $('#school-not-found').text('');
                }
            });
        });
    </script>
@endsection
