<!-- frontend2 -->
<!doctype html>
<html dir="{{isRtl()?'rtl':''}}" class="{{isRtl()?'rtl':''}}" lang="{{app()->getLocale()}}" itemscope
      itemtype="{{url('/')}}">

<head>
    @laravelPWA
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="icon" href="{{asset(Settings('favicon'))}}{{assetVersion()}}" type="image/png"/>

    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('meta_title',Settings('site_title'));"/>
    <meta property="og:description" content="@yield('meta_description',Settings('footer_about_description'))"/>
    <meta property="og:image" content="@yield('og_image',Settings('logo'))"/>
    <meta property="og:type" content="website">
    <meta property="og:image:type" content="image/png"/>
    <meta name="title" content="@yield('meta_title',Settings('site_title'));">
    <meta name="description" content="{{Settings('meta_description')}}">
    <meta name="keywords" content="{{Settings('meta_keywords')}}">
    <title>
        @yield('title')
    </title>
@if(!empty(Settings('google_analytics') ))
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{Settings('google_analytics') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', '{{Settings('google_analytics') }}');
        </script>
@endif
<!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ Settings('site_name')  }}">
    <meta itemprop="image" content="{{asset(Settings('logo') )}}">
    @if(routeIs('frontendHomePage'))
        <meta itemprop="description" content="{{ Settings('meta_description')  }}">
        <meta property="og:description" content="{{ Settings('meta_description')  }}">
        <meta itemprop="keywords" content="{{ Settings('meta_keywords') }}">

    @elseif(routeIs('courseDetailsView'))
        <meta itemprop="description" content="{{ $course->meta_description  }}">
        <meta property="og:description" content="{{ $course->meta_description  }}">
        <meta itemprop="keywords" content="{{ $course->meta_keywords }}">
    @elseif(routeIs('quizDetailsView'))
        <meta itemprop="description" content="{{ $course->meta_description  }}">
        <meta property="og:description" content="{{ $course->meta_description  }}">
        <meta itemprop="keywords" content="{{ $course->meta_keywords }}">
    @endif
    <meta itemprop="author" content="{{Settings('site_name')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset(Settings('favicon') )}}">

    @if(!empty(Settings('facebook_pixel')))
    <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', {{Settings('facebook_pixel')}});
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none"
                 src="https://www.facebook.com/tr?id={{Settings('facebook_pixel')}}/&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
    @endif

    <input type="hidden" name="lat" class="lat" value="{{Settings('lat') }}">
    <input type="hidden" name="lng" class="lng" value="{{Settings('lng') }}">
    <input type="hidden" name="zoom" class="zoom" value="{{Settings('zoom_level')}}">
    <input type="hidden" id="baseUrl" value="{{url('/')}}">
    <input type="hidden" name="chat_settings" id="chat_settings" value="{{ env('BROADCAST_DRIVER') }}">
    <input type="hidden" name="slider_transition_time" id="slider_transition_time"
           value="{{Settings('slider_transition_time')?Settings('slider_transition_time'):5}}">
    <link rel="icon" type="image/png" href="/public/frontend2/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="/public/frontend2/app-icons/icon-180x180.png">

    <!-- Theme switcher (color modes) -->
    <script src="/public/frontend2/js/theme-switcher.js"></script>

    <!-- Import Google font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
          rel="stylesheet" id="google-font">

    <!-- Vendor styles -->
    <link rel="stylesheet" media="screen" href="/public/frontend2/vendor/aos/dist/aos.css">
    <link rel="stylesheet" media="screen" href="/public/frontend2/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" media="screen" href="/public/frontend2/vendor/img-comparison-slider/dist/styles.css">

    <!-- Font icons -->
    <link rel="stylesheet" href="/public/frontend2/icons/around-icons.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <link rel="stylesheet" media="screen"
          href="/public/frontend2/css/theme_{{app()->getLocale()}}.min.css{{assetVersion()}}">
    <link rel="stylesheet" media="screen"
          href="/public/frontend2/css/custom_{{app()->getLocale()}}.css{{assetVersion()}}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @if(app()->getLocale() == 'ar')
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@200;300;400;500;700;800;900&display=swap');

            body{
                font-family: "Almarai", sans-serif;
                direction: rtl;
                a{
                    direction: rtl;
                }
            }
        </style>
    @endif


    @yield('css')
    @stack('css')

</head>


