@php
    use Faker\Factory;
    $faker = Factory::create();
    // page data
    $title = 'Research & Development';
    
    if (config('app.env') !== 'local') {
        // for hero section
        class HeroSection
        {
            public $title;
            public $description;
            public $coverImage;
            public $link;
        }
    
        // add 10 hero sections
        $heroSections = [];
        for ($i = 0; $i < 10; $i++) {
            $heroSections[] = new HeroSection();
    
            $heroSections[$i]->title = $faker->sentence;
            $heroSections[$i]->description = $faker->paragraph;
            $heroSections[$i]->coverImage = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
            $heroSections[$i]->link = '';
        }
        /**
         *
         *
         *
         *
         *
         */
        // For the our commitment to research and development
        class CommitmentToResearchAndDevelopment
        {
            public $title;
            public $description;
            public $coverImage;
        }
    
        $commitmentToResearchAndDevelopment = new CommitmentToResearchAndDevelopment();
        $commitmentToResearchAndDevelopment->title = settings('research', 'section_zero_heading');
        $commitmentToResearchAndDevelopment->description = settings('research', 'section_zero_description');
        $commitmentToResearchAndDevelopment->coverImage = asset('storage/images/' . settings('research', 'section_zero_image'));
    
        /**
         *
         *
         *
         *
         */
        // For our area of research and development
        class AreaOfResearchAndDevelopment
        {
            public $title;
            public $description;
        }
    
        $areaOfResearchAndDevelopment = new AreaOfResearchAndDevelopment();
        $areaOfResearchAndDevelopment->title = settings('research', 'heading');
        $areaOfResearchAndDevelopment->description = settings('research', 'description');
        /**
         *
         *
         *
         *
         *
         */
        // For the reading section
        class Reading
        {
            public $title;
            public $description;
            public $coverImage;
        }
    
        $reading = new Reading();
        $reading->title = settings('research', 'section_one_heading');
        $reading->description = settings('research', 'section_one_description');
        $reading->coverImage = asset('storage/images/' . settings('research', 'section_one_image'));
        /**
         *
         *
         *
         *
         *
         */
        // For the learning to write section
        class LearningToWrite
        {
            public $title;
            public $description;
            public $coverImage;
        }
    
        $learningToWrite = new LearningToWrite();
        $learningToWrite->title = settings('research', 'section_two_heading');
        $learningToWrite->description = settings('research', 'section_two_description');
        $learningToWrite->coverImage = asset('storage/images/' . settings('research', 'section_two_image'));
    
        /**
         *
         *
         *
         *
         *
         */
        // For the Phonics section
        class Phonics
        {
            public $title;
            public $description;
            public $coverImage;
        }
    
        $phonics = new Phonics();
    
        $phonics->title = settings('research', 'section_three_heading');
        $phonics->description = settings('research', 'section_three_description');
        $phonics->coverImage = asset('storage/images/' . settings('research', 'section_three_image'));
    
        /**
         *
         *
         *
         *
         *
         */
        // For the oral language
        class OralLanguage
        {
            public $title;
            public $description;
            public $coverImage;
        }
    
        $oralLanguage = new OralLanguage();
        $oralLanguage->title = settings('research', 'section_four_heading');
        $oralLanguage->description = settings('research', 'section_four_description');
        $oralLanguage->coverImage = asset('storage/images/' . settings('research', 'section_four_image'));
    
        /**
         *
         *
         *
         *
         *
         */
        // For our projects
        class Project
        {
            public $id;
            public $title;
            public $description;
            public $coverImage;
        }
    
        class Projects
        {
            public $title;
            public $description;
            public $projects;
        }
    
        $projects = new Projects();
    
        $projects->title = 'Our Projects';
        $projects->description = '';
    
        // add 4 projects
        // for ($i = 0; $i < 4; $i++) {
        //     $projects->projects[] = new Project();
    
        //     $projects->projects[$i]->id = $i;
        //     $projects->projects[$i]->title = $faker->sentence;
        //     $projects->projects[$i]->description = $faker->paragraph;
        //     $projects->projects[$i]->coverImage = $faker->imageUrl($width = 640, $height = 480, 'unsplash');
        // }
    
        // chunk of 2 projects
        // $projects->projects = array_chunk($projects->projects, 2);
        /**
         *
         *
         *
         *
         *
         */
        // For consultation and training
        class ConsultationAndTraining
        {
            public $title;
            public $description;
            public $coverImage;
            public $termAndCondition;
        }
    
        $consultationAndTraining = new ConsultationAndTraining();
        $consultationAndTraining->title = 'Consultancy & Training';
        $consultationAndTraining->description = '<h5>Why TACK ?</h5>
            <p class="sb-para regular">The most effective way to ensure an effective learning environment for children is to educate and support its teachers. Therefore, we have created a
                collaborative hub of experts from literacy and language backgrounds who work with the Director to develop <br>
                the TACK methodology and support its staff through continuing professional development.</p>

            <h5>What we offer</h5>

            <ul class="page-ul">
                <li class="page-li">
                    <p class="sb-para">Training and Support to set up an AlMaeeyah after school club </p>
                </li>
                <li class="page-li">
                    <p class="sb-para">Training to implement The Arabic Club for Kids guided reading programme</p>
                </li>
                <li class="page-li">
                    <p class="sb-para">Training to develop teacher understanding of literacy teaching and learning
                        Bespoke training to deliver literacy teaching using TACK resources
                        Training to use play-based and task-based learning in an Arabic literacy programme</p>
                </li>
            </ul>

            <p>Please contact <a href="mailto:info@arabicclub.co.uk" style="color:#fff;">info@arabicclub.co.uk</a> to arrange to talk to someone about consultancy, training and support, or if you would like to work with us as a consultant.</p>';
        $consultationAndTraining->coverImage = asset('img/reserch & community page/ConsultancyandTraining.jpg');
        $consultationAndTraining->termAndCondition = '';
    }
@endphp


@extends('frontend.layouts.app')
@section('title', $title)
@section('styles')
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/ourclasses.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/research.css') }}" />
@endsection

@section('content')
    {{-- Section One made by prasenjeet symon @worksymon@outlook.com --}}
    <section class="swiper swiper-container heroSectionSlideShow">
        <section class="swiper-wrapper">
            @foreach ($banners as $heroSection)
                <section class="heroSectionNew swiper-slide" style="background-image: url({{ asset('storage/images/' .$heroSection->banner) }})">
                    <div></div>
                    <div>
                        <div></div>
                        <div>{{ $heroSection->heading }}</div>
                        <div>{{ $heroSection->subheading }}</div>
                    </div>
                </section>
            @endforeach
        </section>
        <div class="swiper-pagination"></div>
        <div class="shadowbg"></div>
    </section>

    {{-- Commitment to Research and Development | Made by Prasenjeet Symon --}}
    <section id="researchAndDevelopment" class="commitmentToResearchAndDevelopment">
        <div>
            <div>
                <div>{{ $commitmentToResearchAndDevelopment->title }}</div>
                <div>{!! $commitmentToResearchAndDevelopment->description !!}</div>
            </div>
            <div>
                <img src="{{ $commitmentToResearchAndDevelopment->coverImage }}" alt="{{ $commitmentToResearchAndDevelopment->title }}" srcset="">
            </div>
        </div>
    </section>

    {{-- Area of Research and Development --}}
    <section id="areasOfResearchAndOurPublications" class="areaOfResearchAndDevelopment">
        <div>
            <div>{{ $areaOfResearchAndDevelopment->title }}</div>
            <hr>
            <div>{!! $areaOfResearchAndDevelopment->description !!}</div>
            <div><img src="{{ asset('img/reserch & community page/svg pink.svg') }}" alt="{{ $areaOfResearchAndDevelopment->title }}" srcset=""></div>
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

    {{-- Learning to write  --}}
    <section id="learningToWrite" class="learningToWrite sectionWithLeftImgae">
        <div>
            <div><img src="{{ $learningToWrite->coverImage }}" alt=""></div>
            <div>
                <div>{{ $learningToWrite->title }}</div>
                <div> <img src="{{ asset('img/reserch & community page/green.svg') }}" alt="" srcset=""></div>
                <div>{!! $learningToWrite->description !!}</div>
            </div>
        </div>
    </section>

    {{-- Phonics Section --}}
    <section id="phonics" class="phonicsSection sectionWithRightImgae">
        <div>
            <div>
                <div>{{ $phonics->title }}</div>
                <div><img src="{{ asset('img/reserch & community page/pink.svg') }}" alt="" srcset=""></div>
                <div>{!! $phonics->description !!}</div>
            </div>
            <div>
                <img src={{ $phonics->coverImage }} alt="{{ $phonics->title }}" srcset="">
            </div>
        </div>
    </section>

    {{-- Oral Language --}}
    <section id="oralLanguage" class="oralLanguage sectionWithLeftImgae">
        <div>
            <div>
                <img src="{{ $oralLanguage->coverImage }}" alt="" srcset="">
            </div>
            <div>
                <div>{{ $oralLanguage->title }}</div>
                <div><img src="{{ asset('img/reserch & community page/green.svg') }}" alt="" srcset=""></div>
                <div>{!! $oralLanguage->description !!}</div>
            </div>
        </div>
    </section>

    {{-- Our Projects --}}
    <section id="ourProjects" class="ourProjects">
        <div>
            <div>
                <div>{{ $projects->title }}</div>
                <hr>
                <div>{{ $projects->description }}</div>
            </div>
        </div>
        <div>
            {{-- Grid of our projects --}}

            <div class="projectItem projectItemRightImage projectItem-0">
                <div>
                    <div class="projectTitle">Developing ‘Big Books’ for whole class teaching.</div>
                    <div class="projectDescription"></div>
                </div>
                <div><img src="../img/reserch & community page/Projectsbigbook.jpg" alt=""></div>
            </div>
            <div class="projectItem projectItemRightImage projectItem-1">
                <div>
                    <div class="projectTitle">Researching progressions in phonological and phonic knowledge in Arabic.</div>
                    <div class="projectDescription"></div>
                </div>
                <div><img src="../img/reserch & community page/PhonicsandPhonologicalawareness.jpg" alt=""></div>
            </div>
            <div class="projectItem projectItemLeftImage">
                <div><img src="../img/reserch & community page/Displayandresourcesproject.jpg" alt=""></div>
                <div>
                    <div class="projectTitle">Developing display materials that create an explicitly bilingual environment.</div>
                    <div class="projectDescription"></div>
                </div>
            </div>
            <div class="projectItem projectItemLeftImage">
                <div><img src="../img/reserch & community page/j-j 4.png" alt=""></div>
                <div>
                    <div class="projectTitle">Developing a consultancy offering to schools offering Arabic as a curriculum subject (first and second language).</div>
                    <div class="projectDescription"></div>
                </div>
            </div>
            {{-- @foreach ($projects->projects as $index => $chunk)
                @if ($index % 2 == 0)
                    @foreach ($chunk as $project)
                        <div class="projectItem projectItemRightImage projectItem-{{ $project->id }}">
                            <div>
                                @if ($project->title)
                                    <div class="projectTitle">{{ $project->title }}</div>
                                @endif
                                @if ($project->description)
                                    <div class="projectDescription">{{ $project->description }}</div>
                                @endif
                            </div>
                            <div><img src="{{ $project->coverImage }}" alt=""></div>
                        </div>
                    @endforeach
                @endif
                @if ($index % 2 != 0)
                    @foreach ($chunk as $project)
                        <div class="projectItem projectItemLeftImage">
                            <div><img src="{{ $project->coverImage }}" alt=""></div>
                            <div>
                                @if ($project->title)
                                    <div class="projectTitle">{{ $project->title }}</div>
                                @endif
                                @if ($project->description)
                                    <div class="projectDescription">{{ $project->description }}</div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
            @endforeach --}}
        </div>
    </section>



    {{-- Consultation and Training --}}
    <section id="consultancyAndTraining" class="consultationAndTraining">
        <div>
            <div>
                <div>{{ $consultationAndTraining->title }}</div>
                <hr>
                <div>{!! $consultationAndTraining->description !!}</div>
                <div>{{ $consultationAndTraining->termAndCondition }}</div>
            </div>
            <div> <img src="{{ $consultationAndTraining->coverImage }}" alt="" srcset=""> </div>
        </div>
    </section>
@endsection

@section('nonBlockingScript')
    <script>
        // For the hero slider
        const swiper = new Swiper('.heroSectionSlideShow', {
            autoplay: {},
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
