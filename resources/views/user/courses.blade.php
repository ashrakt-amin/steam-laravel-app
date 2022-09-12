@extends('user.layout')
@section('content')

        <div class="courses pt-3">
            <div class="container-fluid custom-container" data-aos="fade-up" data-aos-duration="2000">
               
                 <div class="row mb-2">
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
                                    <a href="{{route('course.details',$course->id)}}"><img src="{{$course->image_Url}}" alt="" width="100%"></a>
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
              
        @endsection