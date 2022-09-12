
@extends('user.layout')
@section('content')
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