@extends('user.layout')
@section('content')
        <div class="team pt-3">
            <div class="container-fluid custom-container" data-aos="fade-up" data-aos-duration="2000">
               
                 <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="content">
                            <p class="title">
                                Our Team
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-duration="2000">
                    @foreach($teams as $team)
                    <div class="col-xl-3 col-md-3 text-center mb-2">
                        <div class="member">
                            <div class="member-body">
                                <div class="member-image mb-4">
                                    <img src="{{$team->image_url}}" alt="member" width="100%" height="50%">
                                </div>
                                <div class="member-title">
                                    <p>{{$team->name}}</p>
                                    <p class="text-muted">{{$team->position}}</p>
                                </div>
                            </div>
                        </div>
                     </div>

                        @endforeach
                    
                </div>
            </div>
        </div>
        @endsection