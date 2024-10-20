<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Do Micro Work - @yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="@yield('keyboard')" name="keywords">
        <meta content="@yield('description')" name="description">
        <meta name="author" content="Do Micro Work" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{ asset('pub_assets/lib/animate/animate.min.css') }}"/>
        <link href="{{ asset('pub_assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('pub_assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('pub_assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('pub_assets/css/style.css') }}" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="{{ asset('pub_assets/img/favicon.ico') }}">

        {{-- seo  --}}

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Do Micro Work - @yield('og_title')">
        <meta property="og:description" content="@yield('og_descrtiption').">
        <meta property="og:image" content="{{ asset('pub_assets/img/logo.jpg') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="{{ asset('pub_assets/img/logo.jpg') }}">
        <meta name="twitter:title" content="Do Micro Work - @yield('twitter_title')">
        <meta name="twitter:description" content="@yield('twitter_descrtiption').">
        <meta name="twitter:image" content="{{ asset('pub_assets/img/logo.jpg') }}">

        <!-- Canonical Tag -->
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>

    <body>

        @php
          $member = App\Models\Member_user::member();

          if (!empty($member)) {

            session()->put('is_client', $member->is_client);

            session()->put('status', $member->status);

            session()->put('balance', $member->balance);

            session()->put('deposit_balance', $member->deposit_balance);

          }

        @endphp


        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-flex flex-wrap">
                        {{-- <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                        <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a> --}}
                        <a href="mailto:domicrowork@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>domicrowork@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="{{ route('member_panel.signup') }}"><small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>রেজিস্টার</small></a>
                        <a href="{{ route('member_panel.signin') }}"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>লগইন</small></a>
                        {{-- <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h2 class="text-primary">
                        {{-- <i class="fas fa-search-dollar me-3"></i> --}}
                        <img src="{{ asset('pub_assets/img/logo.jpg') }}" alt="do micro work">
                        Do Micro Work
                    </h2>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">হোম</a>
                        <a href="{{ route('home') }}#about_us" class="nav-item nav-link">আমাদের সম্পর্কে</a>
                        <a href="{{ route('home') }}#services" class="nav-item nav-link">সেবাসমূহ</a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Pages</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Our Features</a>
                                <a href="team.html" class="dropdown-item">Our team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="offer.html" class="dropdown-item">Our offer</a>
                                <a href="FAQ.html" class="dropdown-item">FAQs</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> --}}
                        <a href="{{ route('home') }}#contact_us" class="nav-item nav-link">যোগাযোগ করুন</a>
                        @if (session()->has('role_id'))
                        <a href="{{ route('client_panel.dashboard') }}" class="nav-item nav-link">ড্যাশবোর্ড</a>
                        <a href="{{ route('member_panel.member_packages') }}#buy_package" class="nav-item nav-link">প্যাকেজ কিনুন</a>
                        <a href="{{ route('logout') }}" class="nav-item nav-link">লগআউট</a>
                        @else
                        <a href="{{ route('member_panel.signin') }}" class="nav-item nav-link">লগইন</a>
                        <a href="{{ route('member_panel.signup') }}" class="nav-item nav-link">রেজিস্টার</a>
                        @endif
                    </div>
                    {{-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">চলুন শুরু করা যাক</a> --}}
                </div>
            </nav>

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="{{ asset('pub_assets/img/carousel-1.jpg') }}" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row gy-0 gx-5">
                                <div class="col-lg-0 col-xl-5"></div>
                                <div class="col-xl-7 animated fadeInLeft">
                                    <div class="text-sm-center text-md-end">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4">Do  Micro Work এ স্বাগত</h4>
                                        <h2 class="display-4 text-uppercase text-white mb-4">নিজেকে আত্মনির্ভরশীল করুন...</h2>
                                        <p class="mb-5 fs-5">একটি লক্ষ্য ঠিক করুন। সেই লক্ষ্যকে নিজের জীবনের অংশ বানিয়ে ফেলুন...
                                        </p>
                                        {{-- <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                        </div> --}}
                                        <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                            <h2 class="text-white me-2">অনুসরণ করুন:</h2>
                                            <div class="d-flex justify-content-end ms-2">
                                                <a class="btn btn-md-square btn-light rounded-circle me-2" href="https://www.facebook.com/profile.php?id=61565671739414" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://youtube.com/@domicrowork?si=mlMsxRkRycPlCmN3" target="_blank"><i class="fab fa-youtube"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://t.me/domicrowork" target="_blank"><i class="fab fa-telegram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="{{ asset('pub_assets/img/carousel-2.jpg') }}" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-12 animated fadeInUp">
                                    <div class="text-center">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4">Do  Micro Work এ স্বাগত</h4>
                                        <h2 class="display-4 text-uppercase text-white mb-4">নিজেকে আত্মনির্ভরশীল করুন...</h2>
                                        <p class="mb-5 fs-5">একটি লক্ষ্য ঠিক করুন। সেই লক্ষ্যকে নিজের জীবনের অংশ বানিয়ে ফেলুন...
                                        </p>
                                        {{-- <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                        </div> --}}
                                        <div class="d-flex align-items-center justify-content-center">
                                            <h2 class="text-white me-2">অনুসরণ করুন:</h2>
                                            <div class="d-flex justify-content-end ms-2">
                                                <a class="btn btn-md-square btn-light rounded-circle me-2" href="https://www.facebook.com/profile.php?id=61565671739414" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://youtube.com/@domicrowork?si=mlMsxRkRycPlCmN3" target="_blank"><i class="fab fa-youtube"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://t.me/domicrowork" target="_blank"><i class="fab fa-telegram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->

        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <a href="{{ route('home') }}" class="p-0">
                                <h4 class="text-white"><img class="mx-4" width="50px" src="{{ asset('pub_assets/img/logo.jpg') }}" alt="Do Micro Work">Do Micro Work</h4>
                                <!-- <img src="{{ asset('pub_assets/img/logo.jpg') }}" alt="Logo"> -->
                            </a>
                            <p class="mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                            <div class="d-flex">
                                {{-- <a href="#" class="bg-primary d-flex rounded align-items-center py-2 px-3 me-2">
                                    <i class="fas fa-apple-alt text-white"></i>
                                    <div class="ms-3">
                                        <small class="text-white">Download on the</small>
                                        <h6 class="text-white">App Store</h6>
                                    </div>
                                </a>
                                <a href="#" class="bg-dark d-flex rounded align-items-center py-2 px-3 ms-2">
                                    <i class="fas fa-play text-primary"></i>
                                    <div class="ms-3">
                                        <small class="text-white">Get it on</small>
                                        <h6 class="text-white">Google Play</h6>
                                    </div>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">সরাসরি</h4>
                            <a href="#about_us"><i class="fas fa-angle-right me-2"></i> আমাদের সম্পর্কে</a>
                            <a href="#services"><i class="fas fa-angle-right me-2"></i> সেবাসমূহ</a>
                            {{-- <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a> --}}
                            <a href="#contact_us"><i class="fas fa-angle-right me-2"></i> যোগাযোগ করুন</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Support</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">কন্টাক্ট তথ্য</h4>
                            {{-- <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class="text-white mb-0">123 Street New York.USA</p>
                            </div> --}}
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <a href="mailto:domicrowork@gmail.com"><p class="text-white mb-0">domicrowork@gmail.com</p></a>
                            </div>
                            {{-- <div class="d-flex align-items-center">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                <p class="text-white mb-0">(+012) 3456 7890</p>
                            </div> --}}
                            {{-- <div class="d-flex align-items-center mb-4">
                                <i class="fab fa-firefox-browser text-primary me-3"></i>
                                <p class="text-white mb-0">Yoursite@ex.com</p>
                            </div> --}}
                            <div class="d-flex">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="https://www.facebook.com/profile.php?id=61565671739414" target="_blank"><i class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="https://youtube.com/@domicrowork?si=mlMsxRkRycPlCmN3" target="_blank"><i class="fab fa-youtube text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="https://t.me/domicrowork" target="_blank"><i class="fab fa-telegram text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="{{ route('home') }}" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Do Micro Work</a> &copy;{{ date('Y') }}, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        {{-- Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('pub_assets/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('pub_assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('pub_assets/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('pub_assets/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('pub_assets/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('pub_assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>


        <!-- Template Javascript -->
        <script src="{{ asset('pub_assets/js/main.js') }}"></script>
    </body>

</html>


