@extends('user.layout')
@section('content')
        <div class="courses pt-3">
            <div class="container-fluid custom-container" data-aos="fade-up" data-aos-duration="2000">
                <div class="row mb-2">
                    <div class="col-xl-6">
                        <div class="content">
                            <p class="title">
                               {{$courses->title}}
                            </p>
                            <div class="course-content" data-aos="fade-up" data-aos-duration="2000">
                                <h4>Content</h4>
                                <div class="separetor"></div>
                            </div>
                            <div class="points text-muted" data-aos="fade-up" data-aos-duration="2000">
                                <ul class="list-unstyled">
                                    @foreach($courses->contents as $content)
                                    <li>
                                        <i class="fa-solid fa-circle"></i>
                                       {{$content->content}}
                                    </li>
                                   @endforeach
                                </ul>
                            </div>

                            <div class="course-content" data-aos="fade-up" data-aos-duration="2000">
                                <h4>Objective</h4>
                                <div class="separetor"></div>
                            </div>
                            <div class="points text-muted" data-aos="fade-up" data-aos-duration="2000">
                                <ul class="list-unstyled">
                                @foreach($courses->objectives as $objective)
                                    <li>
                                        <i class="fa-solid fa-circle"></i>
                                       {{$objective->objective}}
                                    </li>
                                   @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-1"></div>

                    <div class="col-xl-5">
                        <div class="course bg-white" data-aos="fade-up" data-aos-duration="2000">
                            <div class="course-body" style="padding: 40px;">
                                <div class="course-image mb-4">
                                    <a href="course-details.html"><img src="{{$courses->image_Url}}" alt="rocket" width="100%"></a>
                                </div>
                                <div class="course-details mt-3 p-2">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item p-3 text-muted" style="font-size: 28px;">
                                            <div class="d-flex flex-row">
                                                <i class="fa-solid fa-user-graduate" style="width: 37px;height: 37px;"></i>
                                                Level
                                                <span>{{$courses->levels}}<sub>L</sub></span>
                                            </div>
                                        </li>
                                        <li class="list-group-item p-3 text-muted" style="font-size: 28px;">
                                            <div class="d-flex flex-row">
                                                <i class="fa-regular fa-clock" style="width: 37px;height: 37px;"></i>
                                                Duration
                                                <span>{{$courses->duration}}<sub>hr</sub></span>
                                            </div>
                                        </li>
                                        <li class="list-group-item p-3 text-muted" style="font-size: 28px;">
                                            <div class="d-flex flex-row">
                                                <i class="fa-solid fa-earth-africa" style="width: 37px;height: 37px;"></i>
                                                Language
                                                <span>
                                                    @foreach($courses->languages as $language)
                                                   {{$language->name}}
                                                   @endforeach
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
