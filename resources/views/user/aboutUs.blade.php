@extends('user.layout')
@section('content')

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
                            <!-- <img src="assets/img/star.png" alt="about" class="child-image">
                            <img src="assets/img/circle.png" alt="about" class="circle-image"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about pt-3">
            <div class="container-fluid custom-container" data-aos="fade-up" data-aos-duration="2000">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="content">
                            <p class="title">
                                Our Vision <img src="{{asset('/img/rocket.png')}}" alt="rocket">
                            </p>
                            <p class="article text-muted mt-5">
                            @foreach($home as $vision)
                                {{$vision->vision}}
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
                            <img src="{{asset('/img/about-2.png')}}" alt="about" class="parent-image">
                            <img src="{{asset('/img/play.png')}}" alt="about" class="center-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about pt-3">
            <div class="container-fluid custom-container" data-aos="fade-up" data-aos-duration="2000">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="content">
                            <p class="title">
                                Our Mission
                            </p>
                            <p class="article text-muted mt-5">
                            @foreach($home as $mission)
                                {{$mission->mission}}
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
                            <img src="{{asset('/img/about-3.png')}}" alt="about" class="parent-image">
                            <img src="{{asset('/img/play.png')}}" alt="about" class="center-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
