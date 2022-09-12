@extends('user.layout')
@section('content')

        <div class="contact pt-3">
            <div class="container-fluid custom-container" data-aos="fade-up" data-aos-duration="2000">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="content">
                            <p class="title">
                                Contact - Us
                            </p>
                        </div>
                    </div>
                </div>
                 
                @if (\Session::has('message'))
                  <div class="alert alert-success">
                        <ul>
                         <li>{!! \Session::get('message') !!}</li>
                        </ul>
                  </div>
                @endif
                
                <div class="row">
                    <div class="col-xl-8 col-md-6">
                        <form action="{{route('message.store')}}" method="post">
                         {{ csrf_field() }}
                         @csrf
                            <div class="mb-4">
                                <input name="name" type="text" class="form-control" id="exampleInputText1" placeholder="Your name">
                            </div>
                            <div class="mb-4">
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Your email">
                            </div>
                            <div class="mb-4">
                                <input name="subject" type="text" class="form-control" id="exampleInputText1" placeholder="Subject">
                            </div>
                            <div class="mb-4">
                                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Your message"></textarea>
                            </div>
                            <button type="submit" class="btn">send</button>
                        </form>
                    </div>

                    <div class="col-xl-4 col-md-6 d-md-block d-none contact-image">
                        <img src="{{asset('/img/contact.png')}}" alt="contact" class="parent-image">
                        <img src="{{asset('/img/layer.png')}}" alt="contact" class="child-image">
                        <div class="center-text text-light">
                            <p class="title mb-3">Stem Platform</p>
                            <p>Discovery Academy for Science and Technology is an educational company 
                                which seeks to build a generation capable of creativity their abilities</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection