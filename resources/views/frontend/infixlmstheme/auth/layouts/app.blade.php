<!DOCTYPE html>

<html dir="{{isRtl()?'rtl':''}}" class="{{isRtl()?'rtl':''}}" lang="{{app()->getLocale()}}" itemscope
      itemtype="{{url('/')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ Settings('site_title')  }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{getCourseImage(Settings('favicon') )}}{{assetVersion()}}">


    <!-- Theme switcher (color modes) -->
    <script src="/public/frontend2/js/theme-switcher.js"></script>

    <!-- Import Google font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
          rel="stylesheet" id="google-font">

    <!-- Font icons -->
    <link rel="stylesheet" href="/public/frontend2/icons/around-icons.min.css">


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


    <link rel="stylesheet" media="screen"
          href="/public/frontend2/css/theme_{{app()->getLocale()}}.min.css{{assetVersion()}}">
    <link rel="stylesheet" media="screen"
          href="/public/frontend2/css/custom_{{app()->getLocale()}}.css{{assetVersion()}}">

</head>

<body>


<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div>
        <span>Loading...</span>
    </div>
</div>


@yield('content')

<!-- Back to top button -->
<a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
    <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5"
                stroke-miterlimit="10"></circle>
    </svg>
    <i class="ai-arrow-up"></i>
</a>


<script src="/public/frontend2/js/theme.min.js"></script>

<script>
    (function () {
        window.onload = function () {
            const preloader = document.querySelector('.page-loading')
            preloader.classList.remove('active')
            setTimeout(function () {
                preloader.remove()
            }, 1500)
        }
    })()
</script>

</body>

</html>
