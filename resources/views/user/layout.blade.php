<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/all.min.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
        @if(App::getLocale()=='ar')
        <link rel="stylesheet" href="{{asset('/css/style-rtl.css')}}">
        @else
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        @endif

        <title>Stem</title>

    </head>

    <body>
   
        <nav class="navbar navbar-expand-xl bg-white sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('/img/logo.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main"
                    aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="main">
                    <ul class="nav navbar-nav ms-auto me-auto mb-2 mb-xl-0">
                        <li class=" nav-item m-2 ">
                            <a class="  nav-link " href="{{route('user.index')}}">Home</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link "  href="{{route('user.aboutUs')}}">About-Us</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link " href="{{route('user.courses')}}">Courses</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link " href="{{route('user.team')}}">Team</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link "  href="{{route('user.accomplishments')}}">Accomplishments</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link "  href="{{route('user.gallary')}}">Gallary</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link " href="{{route('user.contact')}}">Contact-Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav language mb-2 mb-lg-0">
                        <li class="nav-item">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="btn " rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                         {{ $properties['name'] }}
                            </a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

                                   <!-- end header -->
                                   @yield('content')



                                   <!-- start footer -->
        <div class="footer mt-5 pt-3">
            <div class="container-fluid custom-container" data-aos="fade-up" data-aos-duration="2000">
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <img src="{{asset('/img/footer.png')}}" alt="logo">
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="links p-3">
                            <h5 class="">Quick Links</h5>
                            <div class="d-flex d-row justify-content-between mt-1">
                                <div class="d-flex flex-column justify-content-between">
                                    <a href="">Home</a>
                                    <a href="">About-Us</a>
                                    <a href="">Courses</a>
                                    <a href="">Team</a>
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <a href="">Accomplishments</a>
                                    <a href="">Gallary</a>
                                    <a href="">Contact-Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="links p-3">
                            <h5 class="">Quick Links</h5>  
                            <div class="d-flex flex-column justify-content-between mt-1">
                                <p><i class="fa-solid fa-phone"></i>011112155 - 024895514</p>
                                <p><i class="fa-solid fa-location-dot"></i>Mansoura branch</p>
                                <p><i class="fa-solid fa-envelope-open-text"></i>info@stem.com</p>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe height="197" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        height: 197px;
                                        width: fit-content;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container-fluid custom-container">
                <div class="row">
                    <div class="col-md-4 col-xl-4">
                        <img src="{{asset('/img/companylogo.png')}}" alt="logo" class="footerlogo pt-2">
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <p class="{{asset('text-light pt-3')}}">Copyright © 2016,stem. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 pt-2">
                        <div class="d-flex flex-row justify-content-center">
                            <a href=""><img src="{{asset('/img/facebook.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('/img/youtube.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('/img/linkedin.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('/img/twitter.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('/js/all.min.js')}}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
       <script>
                   $(document).ready(function () {
    $('.nav li').click(function(e) {

        $('.nav li a').removeClass('active');

        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        //e.preventDefault();
    });
});
       </script>
        <script>
            AOS.init();
            const nums = document.querySelectorAll(".card .count")
            const section = document.querySelector(".facts")
            let started = false
            window.onscroll = function () {
                if(window.scrollY >= section.offsetTop) {
                    if(!started) {
                        nums.forEach((num) => startCount(num))
                    }
                    started = true
                }
            }
            function startCount(el) {
                let goal = el.dataset.goal
                let count = setInterval(() => {
                    el.textContent++;
                    if(el.textContent == goal) {
                        clearInterval(count)
                    }
                } , 2000 / goal)
            }
        </script>

    </body>

</html>