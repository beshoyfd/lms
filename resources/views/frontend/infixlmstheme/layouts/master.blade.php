@include(theme('partials._header'))
<body>
@include('secret_login')

@if(Settings('preloader_status'))
    <!-- Page loading spinner -->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div>
            <span>Loading...</span>
        </div>
    </div>
@endif


<!-- Page wrapper -->
<main class="page-wrapper">

    @include(theme('partials._menu'))

    @yield('mainContent')

</main>

@include(theme('partials._footer'))


<!-- Vendor scripts: JS libraries and plugins -->
<script src="/public/frontend2/vendor/aos/dist/aos.js"></script>
<script src="/public/frontend2/vendor/parallax-js/dist/parallax.min.js"></script>
<script src="/public/frontend2/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/public/frontend2/vendor/img-comparison-slider/dist/index.js"></script>

<!-- Bootstrap + Theme scripts -->
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
@yield('js')
@stack('js')
</body>
</html>
