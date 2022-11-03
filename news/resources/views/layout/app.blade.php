<!doctype html>
<html class="no-js" lang="">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="yourmedia.ga ,yourmedia.ge, yourmedia.org, yourmedia.net,yourmedia.tech, sporty news, public news, daily news, news, breaking news, mainnews, ournews, BBC, CNN, mtavari.tv, imedi.tv, COVID-19, pandemic, covid, corona virus, travel, video, politics, business, world">
        <title>Yourmedia | Breaking News</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/guestassets/img/favicon.png') }}">
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="{{ asset('assets/guestassets/css/normalize.css') }}">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/guestassets/css/main.css') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/guestassets/css/bootstrap.min.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('assets/guestassets/css/animate.min.css') }}">
        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="{{ asset('assets/guestassets/css/font-awesome.min.css') }}">
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="{{ asset('assets/guestassets/vendor/OwlCarousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/guestassets/vendor/OwlCarousel/owl.theme.default.min.css') }}">
        <!-- Main Menu CSS -->
        <link rel="stylesheet" href="{{ asset('assets/guestassets/css/meanmenu.min.css') }}">
        <!-- Magnific CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/guestassets/css/magnific-popup.css') }}">
        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/guestassets/css/hover-min.css') }}">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('assets/guestassets/css/style.css') }}">
        <!-- For IE -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/guestassets/css/ie-only.css') }}" />
        <!-- Modernizr Js -->
        <script src="{{ asset('assets/guestassets/js/modernizr-2.8.3.min.js') }}"></script>
        
        <script data-ad-client="ca-pub-9044112759325565" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9044112759325565"
        crossorigin="anonymous"></script>

        <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"> </script>

    </head>
    <body>
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <div id="wrapper" class="wrapper">
            <!-- Header Area Start Here -->
            <header>
                <div id="header-layout1" class="header-style1">
                    <div class="main-menu-area bg-primarytextcolor header-menu-fixed" id="sticker">
                        <div class="container">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-lg-2 d-none d-lg-block">
                                    <div class="logo-area">
                                        <a href="{{ route('index') }}">
                                            <img src="{{ asset('assets/guestassets/img/logo.png') }}" alt="logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 position-static min-height-none">
                                    <div class="ne-main-menu">
                                        <nav id="dropdown">
                                            <ul>                 
                                                @foreach ($providerCategory as $provider)                                                    
                                                <li>
                                                    <a href="{{ route('category', $provider->id) }}">{{ $provider->name }}</a>
                                                </li>
                                                @endforeach                              
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-12 text-right position-static">
                                    <div class="header-action-item">
                                        <ul>
                                            <li>
                                                <form form action="{{ route('search') }}" method="GET" id="top-search-form" class="header-search-light">
                                                    <input type="text" class="search-input" placeholder="Search...." value="" name="search" style="display: none;">
                                                    <button type="button" id="btnSubmit" class="search-button">
                                                        <i class="fa fa-search"></i>
                                                </form>                                        
                                            </li>                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>       
            <!-- Header Area End Here -->
            @yield('content')

            <amp-auto-ads type="adsense"
            data-ad-client="ca-pub-9044112759325565">
            </amp-auto-ads>

            <!-- Footer Area Start Here -->
            <footer>
                <div class="footer-area-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="{{ route('index') }}" class="footer-logo img-fluid">
                                    <img src="{{ asset('assets/guestassets/img/logo.png') }}" alt="logo" class="img-fluid">
                                </a>                              
                                <p>Copyright © {{ Date('Y')}}. All Right Reserved </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Area End Here -->
        <!-- Wrapper End -->
        <!-- jquery-->
        <script src="{{ asset('assets/guestassets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
        <!-- Plugins js -->
        <script src="{{ asset('assets/guestassets/js/plugins.js') }}" type="text/javascript"></script>
        <!-- Popper js -->
        <script src="{{ asset('assets/guestassets/js/popper.js') }}" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('assets/guestassets/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- WOW JS -->
        <script src="{{ asset('assets/guestassets/js/wow.min.js') }}"></script>
        <!-- Owl Cauosel JS -->
        <script src="{{ asset('assets/guestassets/vendor/OwlCarousel/owl.carousel.min.js') }}" type="text/javascript"></script>
        <!-- Meanmenu Js -->
        <script src="{{ asset('assets/guestassets/js/jquery.meanmenu.min.js') }}" type="text/javascript"></script>
        <!-- Srollup js -->
        <script src="{{ asset('assets/guestassets/js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>
        <!-- jquery.counterup js -->
        <script src="{{ asset('assets/guestassets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/guestassets/js/waypoints.min.js') }}"></script>
        <!-- Isotope js -->
        <script src="{{ asset('assets/guestassets/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
        <!-- Magnific Popup -->
        <script src="{{ asset('assets/guestassets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Ticker Js -->
        <script src="{{ asset('assets/guestassets/js/ticker.js') }}" type="text/javascript"></script>
        <!-- Custom Js -->
        <script src="{{ asset('assets/guestassets/js/main.js') }}" type="text/javascript"></script>
        
        <script>
            $('.button').keypress(function(e) {
            if (e.which == 13) {
                $('form#top-search-form').submit();
                return false;
            }
            });
        </script>

    </body>
</html>