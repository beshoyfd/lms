@include(theme('partials._header-front'))
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

    @include(theme('partials._menu-front'))

    @yield('mainContent')

</main>

<!-- Cart offcanvas -->
<div class="offcanvas offcanvas-end py-2 p-sm-4 p-md-5" id="cartOffcanvas" style="width: 680px;">

    <!-- Title -->
    <div class="px-4 pt-3">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 pb-sm-4">
            <h2 class="offcanvas-title d-flex align-items-center mb-1">
                {{__('Your cart')}} <span class="fs-base fw-normal text-body-secondary ms-3">({{@cartItem()}} items)</span>
            </h2>
            <button class="btn-close mb-1 me-n1" type="button" data-bs-dismiss="offcanvas"
                    data-bs-target="#cartOffcanvas" aria-label="Close"></button>
        </div>
    </div>

    <!-- Body -->
    <div class="offcanvas-body">

        <!-- Item -->
        @foreach(getCartData() as $courseCartTime)
            <div class="d-sm-flex align-items-center pb-4"><a
                    class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0"
                    href="{{route('courseDetailsView', $courseCartTime->slug)}}">
                    <img src="{{getCourseImage($courseCartTime->image)}}" width="110" alt="Product">
                </a>
                <div class="w-100 pt-1 ps-sm-4">
                    <div class="d-flex">
                        <div class="me-3">
                            <h3 class="h5 mb-2">
                                <a href="{{route('courseDetailsView', $courseCartTime->slug)}}">{{$courseCartTime->title}}</a>
                            </h3>
                        </div>
                        <div class="text-end ms-auto">
                            <div class="fs-5 mb-2">{{$courseCartTime->discount_price}}$</div>
                        </div>
                    </div>
                    <div class="nav justify-content-end mt-n5 mt-sm-n3">
                        <a class="nav-link fs-xl p-2" href="{{route('removeCart', $courseCartTime->id)}}" data-bs-toggle="tooltip" title="Remove"
                           aria-label="Remove">
                            <i class="ai-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach


    </div>


    <!-- Action buttons -->
    <div class="d-flex align-items-center justify-content-between px-4 pb-3">
        <div class="nav d-none d-sm-block">
            <a class="nav-link fw-semibold px-0" href="#cartOffcanvas" data-bs-dismiss="offcanvas">
                <i class="ai-chevron-left fs-xl me-2"></i>
                Back to shop
            </a>
        </div>
        <a class="btn btn-lg btn-primary w-100 w-sm-auto" href="#">
            Proceed to checkout
            <i class="ai-chevron-right ms-2 me-n1"></i>
        </a>
    </div>
</div>


@include(theme('partials._footer-front'))


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/public/frontend2/vendor/aos/dist/aos.js"></script>
<script src="/public/frontend2/vendor/parallax-js/dist/parallax.min.js"></script>
<script src="/public/frontend2/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/public/frontend2/vendor/img-comparison-slider/dist/index.js"></script>
<script src="/public/frontend2/js/theme.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                },
            }
        });
    });
</script>

@include(theme('layouts.flash'))


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

    document.addEventListener('DOMContentLoaded', function () {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText;

                const speed = 200;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    });

</script>
@yield('js')
@stack('js')
</body>
</html>
