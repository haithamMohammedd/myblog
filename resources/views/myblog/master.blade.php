<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('myblogstyle/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('myblogstyle/css/elzero.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('myblogstyle/css/all.min.css') }}" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
    @yield('style')
</head>

<body>
    @if (session('msg'))
        <div class="text-center text-danger alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif
    <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
            <a href="{{ route('indexpage') }}" class="logo">MyBlog</a>
            <ul class="main-nav">
                <li><a href="{{ route('register') }}" class="text-primary fw-bold">Register</a></li>
                <li><a href="{{ route('login') }}" class="text-primary fw-bold">Login</a></li>
                <li><a href="#articles">Articles</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#features">Features</a></li>

                <li>
                    <a href="#">Other Links</a>
                    <!-- Start Megamenu -->
                    <div class="mega-menu">
                        <div class="image">
                            <img src="{{ asset('myblogstyle/imgs/megamenu.png') }}" alt="" />
                        </div>
                        <ul class="links">
                            <li>
                                <a href="#testimonials"><i class="far fa-comments fa-fw"></i> Testimonials</a>
                            </li>
                            <li>
                                <a href="#team"><i class="far fa-user fa-fw"></i> Team Members</a>
                            </li>
                            <li>
                                <a href="#services"><i class="far fa-building fa-fw"></i> Services</a>
                            </li>
                            <li>
                                <a href="#our-skills"><i class="far fa-check-circle fa-fw"></i> Our Skills</a>
                            </li>
                            <li>
                                <a href="#work-steps"><i class="far fa-clipboard fa-fw"></i> How It Works</a>
                            </li>
                        </ul>
                        <ul class="links">
                            <li>
                                <a href="#events"><i class="far fa-calendar-alt fa-fw"></i> Events</a>
                            </li>
                            <li>
                                <a href="#pricing"><i class="fas fa-server fa-fw"></i> Pricing Plans</a>
                            </li>
                            <li>
                                <a href="#video"><i class="far fa-play-circle fa-fw"></i> Top Videos</a>
                            </li>
                            <li>
                                <a href="#stats"><i class="far fa-chart-bar fa-fw"></i> Stats</a>
                            </li>
                            <li>
                                <a href="#discount"><i class="fas fa-percent fa-fw"></i> Request A Discount</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Megamenu -->
                </li>
            </ul>
        </div>
    </div>
    <!-- End Header -->
    @yield('content')
    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="box">
                <h3>Prince</h3>
                <ul class="social">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <p class="text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus nulla rem, dignissimos iste
                    aspernatur
                </p>
            </div>
            <div class="box">
                <ul class="links">
                    <li><a href="#">Important Link 1</a></li>
                    <li><a href="#">Important Link 2</a></li>
                    <li><a href="#">Important Link 3</a></li>
                    <li><a href="#">Important Link 4</a></li>
                    <li><a href="#">Important Link 5</a></li>
                </ul>
            </div>
            <div class="box">
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    <div class="info">Egypt, Giza, Inside The Sphinx, Room Number 220</div>
                </div>
                <div class="line">
                    <i class="far fa-clock fa-fw"></i>
                    <div class="info">Business Hours: From 10:00 To 18:00</div>
                </div>
                <div class="line">
                    <i class="fas fa-phone-volume fa-fw"></i>
                    <div class="info">
                        <span>+20123456789</span>
                        <span>+20198765432</span>
                    </div>
                </div>
            </div>
            <div class="box footer-gallery">
                <img src="{{ asset('myblogstyle/imgs/gallery-01.png') }}" alt="" />
                <img src="{{ asset('myblogstyle/imgs/gallery-02.png') }}" alt="" />
                <img src="{{ asset('myblogstyle/imgs/gallery-03.jpg') }}" alt="" />
                <img src="{{ asset('myblogstyle/imgs/gallery-04.png') }}" alt="" />
                <img src="{{ asset('myblogstyle/imgs/gallery-05.jpg') }}" alt="" />
                <img src="{{ asset('myblogstyle/imgs/gallery-06.png') }}" alt="" />
            </div>
        </div>
        <p class="copyright">Made With &lt;3 By Haitham</p>
    </div>
    <!-- End Footer -->
    <script src="{{ asset('myblogstyle/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        setTimeout(() => {
            $('.alert').fadeOut();
        }, 3000);
    </script>
    @yield('script')
</body>

</html>
