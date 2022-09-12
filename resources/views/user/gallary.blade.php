@extends('user.layout')
@section('content')

        <div class="gallary pt-3">
            <div class="container-fluid custom-container" data-aos="fade-up" data-aos-duration="2000">
                <div class="row mb-4">
                    <div class="col-xl-12">
                        <div class="content">
                            <p class="title">
                                Our Gallary
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="gallary-image">
                            <img src="{{asset('/img/gallarybg.png')}}" alt="gallary" class="parent-image p-5">
                            <img src="{{asset('/img/gallary-1.png')}}" alt="gallary" class="child-image">
                            <img src="{{asset('/img/gallary-2.png')}}" alt="gallary" class="gallary-one gallary-item" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{asset('/img/gallary-2.png')}}" alt="gallary" class="gallary-two gallary-item" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{asset('/img/gallary-2.png')}}" alt="gallary" class="gallary-three gallary-item" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{asset('/img/gallary-2.png')}}" alt="gallary" class="gallary-four gallary-item" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{asset('/img/gallary-2.png')}}" alt="gallary" class="gallary-five gallary-item" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{asset('/img/gallary-2.png')}}" alt="gallary" class="gallary-six gallary-item" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{asset('/img/gallary-2.png')}}" alt="gallary" class="gallary-seven gallary-item" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{asset('/img/gallary-2.png')}}" alt="gallary" class="gallary-eight gallary-item" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{asset('/img/gallary-2.png')}}" alt="gallary" class="gallary-nine gallary-item" data-aos="fade-up" data-aos-duration="2000">
                        </div>
                    </div>
                </div>
                
                <div class="modal fade" id="gallary-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('/img/gallary-2.png')}}" class="modal-image" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection