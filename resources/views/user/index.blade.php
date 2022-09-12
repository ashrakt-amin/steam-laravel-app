@extends('user.layout')
@section('content')

        <div class="header pt-3">
            <div class="container-fluid custom-container" data-aos="fade-up" data-aos-duration="2000">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="content">
                            <p class="title">
                                Discover a new way <br> 
                                of <span>learning</span> <img src="{{asset('/img/rocket.png')}}" alt="rocket">
                            </p>
                            <p class="article text-muted mt-5">
                                @foreach($home as $learning)
                                {{$learning->wayOfLearning}}
                                @endforeach
                                <!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type 
                                specimen book. It has survived not only five centuries, but also the leap into 
                                electronic typesetting, remaining essentially unchanged. It was popularised in 
                                the 1960s with more recently with desktop publishing software like Aldus 
                                PageMaker including versions of Lorem Ipsum -->
                            </p>
                            <ul class="list-unstyled">
                                @foreach($ways as $way)
                                <li>
                                    <i class="fa-regular fa-square-check"></i>
                                    <span>{{$way->way}}</span>
                                </li>
                              @endforeach
                            </ul>
                            <a href="" class="btn btn-home mt-3">Explore Courses</a>
                            <a href="#" class="btn btn-video mt-3">
                                <img src="{{asset('/img/video.png')}}" alt="video">
                                Intro video
                            </a>
                        </div>
                    </div>

                    <div class="col-md-1 d-md-block d-none">
                        
                    </div>

                    <div class="col-xl-5 d-xl-block d-none pt-5">
                        <div class="home-image">
                            <img src="{{asset('/img/homebg.png')}}" alt="home" class="parent-image">
                            <img src="{{asset('/img/home.png')}}" alt="home" class="child-image">
                            <img src="{{asset('/img/cap.png')}}" alt="home" class="cap-image">
                            <img src="{{asset('/img/tophome.png')}}" alt="home" class="tophome-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>


                                    <!--  -->

        <div class="about pt-3">
            <div class="container-fluid custom-container" data-aos="fade-up" data-aos-duration="2000">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="content">
                            <p class="title">
                                Who we are?
                            </p>
                            <p class="article text-muted mt-5">
                            @foreach($home as $whoWeAre)
                                {{$whoWeAre->whoWeAre}}
                                @endforeach
                                
                                <!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type 
                                specimen book. It has survived not only five centuries, but also the leap into 
                                electronic typesetting, remaining essentially unchanged. It was popularised in 
                                the 1960s with more recently with desktop publishing software like Aldus 
                                PageMaker including versions of Lorem Ipsum -->
                            </p>
                        </div>
                    </div>

                    <div class="col-md-1 d-md-block d-none">
                        
                    </div>

                    <div class="col-xl-5 d-xl-block d-none pt-5">
                        <div class="about-image">
                            <img src="{{asset('/img/about-1.png')}}" alt="about" class="parent-image">
                            <img src="{{asset('/img/star.png')}}" alt="about" class="child-image">
                            <img src="{{asset('/img/circle.png')}}" alt="about" class="circle-image">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    

                        <!--  -->


        <div class="courses pt-3">
            <div class="container-fluid custom-container">
                <div class="row mb-2" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-md-12">
                        <div class="content">
                            <p class="title">
                                Our Popular Courses
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-duration="2000">
                @foreach($courses as $course)

                    <div class="col-xl-4 col-md-6 mb-3">
                        <div class="course bg-white">
                            <div class="course-body p-3">
                                <div class="course-image mb-4">
                                    <a href="{{route('course.details',$course->id)}}"><img src="{{$course->image_url}}" alt="" width="100%" height="50%"></a>
                                </div>
                                <div class="course-title mb-2">
                                    <a href="{{route('course.details',$course->id)}}">{{$course->title}}</a>
                                </div>
                                <div class="course-description mb-2">
                                    <p class="text-muted">
                                        @foreach($course->contents as $content)
                                       {{$content->content}}
                                        @endforeach
                                    </p>
                                </div>
                                <div class="course-details mt-3 p-2">
                                    <div class="d-flex flex-row">
                                        <p>
                                            <i class="fa-solid fa-user-graduate"></i>
                                            <span>{{$course->levels}}<sub>L</sub></span>
                                        </p>
                                        <p>
                                            <i class="fa-regular fa-clock"></i>
                                            <span>{{$course->duration}}<sub>hr</sub></span>
                                        </p>
                                        <p>
                                            <i class="fa-solid fa-earth-africa"></i>
                                            <span> @foreach($course->languages as $language)
                                                   {{$language->name}}
                                                   @endforeach
                                            </span>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                     @endforeach
                   
                </div>
                
            </div>
        </div>
                                  
                             <!--  -->


        <div class="facts pt-3 text-center">
            <div class="container-fluid custom-container" data-aos="fade-up" data-aos-duration="2000">
                <div class="row mb-4">
                    <div class="col-xl-12 col-md-12">
                        <div class="content pt-5 pb-5">
                            <p class="title text-light">
                                Some Facts
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-5 mt-5">
                        <div class="card text-light">
                            <div class="cardicon">
                                <i class="fa-solid fa-users p-3"></i>
                            </div>
                            <p class="cardnumber mt-5"><span class="count" data-goal="500">0</span>K</p>
                            <p>Students</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-5 mt-5">
                        <div class="card text-light">
                            <div class="cardicon">
                                <i class="fa-solid fa-graduation-cap p-3"></i>
                            </div>
                            <p class="cardnumber mt-5"><span class="count" data-goal="500">0</span></p>
                            <p>Competition</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-5 mt-5">
                        <div class="card text-light">
                            <div class="cardicon">
                                <i class="fa-regular fa-star p-3"></i>
                            </div>
                            <p class="cardnumber mt-5"><span class="count" data-goal="10">0</span>+</p>
                            <p>Years Of Experience</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-5 mt-5">
                        <div class="card text-light">
                            <div class="cardicon">
                                <i class="fa-solid fa-trophy p-3"></i>
                            </div>
                            <p class="cardnumber mt-5"><span class="count" data-goal="150">0</span></p>
                            <p>Awards Recieved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accomplishments pt-3">
            <div class="container-fluid custom-container" data-aos="fade-up" data-aos-duration="2000">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="content pt-5 pb-5">
                            <p class="title">
                                Our Accomplishments
                            </p>
                            <p class="article text-muted mt-5">
                            @foreach($home as $accomplishments)
                                {{$accomplishments->accomplishments}}
                                @endforeach
                                
                                <!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type 
                                specimen book. It has survived not only five centuries, but also the leap into 
                                electronic typesetting, remaining essentially unchanged. It was popularised in 
                                the 1960s with more recently with desktop publishing software like Aldus 
                                PageMaker including versions of Lorem Ipsum -->
                            </p>
                        </div>
                    </div>

                    <div class="col-md-1 d-md-block d-none">
                        
                    </div>

                    <div class="col-xl-5 d-xl-block d-none pt-5">
                        <img src="{{asset('/img/accomplishment.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>


@endsection
