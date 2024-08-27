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


<!-- Search modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" data-focus-input="#search">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header d-block position-relative border-0 pb-3">
                <form class="position-relative w-100 mt-2 mb-4">
                    <button class="btn-close position-absolute top-50 end-0 translate-middle-y m-0 me-n1" type="reset" data-bs-dismiss="modal" aria-label="Close"></button>
                    <i class="ai-search fs-xl position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input class="form-control form-control-lg px-5" type="search" placeholder="Type to search" data-focus-on-open='["modal", "#searchModal"]'>
                </form>
                <div class="fs-xs fw-medium text-body-secondary text-uppercase">Suggestions</div>
            </div>
            <div class="modal-body pt-3">
                <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                    <a class="position-relative d-inline-block flex-shrink-0 bg-secondary rounded-1" href="shop-single.html">
                        <span class="badge bg-success position-absolute top-0 start-100 translate-middle ms-n1">Shop</span>
                        <img src="/public/frontend2/img/shop/cart/01.png" width="90" alt="Product">
                    </a>
                    <div class="ps-3">
                        <h4 class="h6 mb-2">
                            <a href="shop-single.html">Candle in concrete bowl</a>
                        </h4>
                        <span class="mb-0 me-2">$11.00</span>
                        <del class="fs-sm text-body-secondary ms-auto">$15.00</del>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                    <a class="position-relative d-inline-block flex-shrink-0" href="#">
                        <span class="badge bg-info position-absolute top-0 start-100 translate-middle ms-n1">Blog</span>
                        <img class="rounded-1" src="/public/frontend2/img/landing/shop-1/instagram/02.jpg" width="90" alt="Post">
                    </a>
                    <div class="ps-3">
                        <h4 class="h6 mb-0">
                            <a href="#">Bedroom decoration explained. Tips &amp; tricks from the field experts.</a>
                        </h4>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a class="position-relative d-inline-block flex-shrink-0 bg-secondary rounded-1" href="shop-single.html">
                        <span class="badge bg-success position-absolute top-0 start-100 translate-middle ms-n1">Shop</span>
                        <img src="/public/frontend2/img/shop/cart/02.png" width="90" alt="Product">
                    </a>
                    <div class="ps-3">
                        <h4 class="h6 mb-2">
                            <a href="shop-single.html">Exquisite glass vase</a>
                        </h4>
                        <span class="mb-0 me-2">$23.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cart offcanvas -->
<div class="offcanvas offcanvas-end py-2 p-sm-4 p-md-5" id="cartOffcanvas" style="width: 680px;">

    <!-- Title -->
    <div class="px-4 pt-3">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 pb-sm-4">
            <h2 class="offcanvas-title d-flex align-items-center mb-1">
                Your cart <span class="fs-base fw-normal text-body-secondary ms-3">(3 items)</span>
            </h2>
            <button class="btn-close mb-1 me-n1" type="button" data-bs-dismiss="offcanvas" data-bs-target="#cartOffcanvas" aria-label="Close"></button>
        </div>
    </div>

    <!-- Body -->
    <div class="offcanvas-body">

        <!-- Item -->
        <div class="d-sm-flex align-items-center pb-4"><a class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0" href="shop-single.html"><img src="/public/frontend2/img/shop/cart/01.png" width="110" alt="Product"></a>
            <div class="w-100 pt-1 ps-sm-4">
                <div class="d-flex">
                    <div class="me-3">
                        <h3 class="h5 mb-2">
                            <a href="shop-single.html">Candle in concrete bowl</a>
                        </h3>
                        <div class="d-flex flex-wrap">
                            <div class="text-body-secondary fs-sm me-3">
                                Color: <span class="text-dark fw-medium">Gray night</span>
                            </div>
                            <div class="text-body-secondary fs-sm me-3">
                                Weight: <span class="text-dark fw-medium">140g</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-end ms-auto">
                        <div class="fs-5 mb-2">$11.00</div>
                        <del class="text-body-secondary ms-auto">$15.00</del>
                    </div>
                </div>
                <div class="count-input ms-n3">
                    <button class="btn btn-icon fs-xl" type="button" data-decrement>-</button>
                    <input class="form-control" type="number" value="2" readonly>
                    <button class="btn btn-icon fs-xl" type="button" data-increment>+</button>
                </div>
                <div class="nav justify-content-end mt-n5 mt-sm-n3">
                    <a class="nav-link fs-xl p-2" href="#" data-bs-toggle="tooltip" title="Remove" aria-label="Remove">
                        <i class="ai-trash"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="d-sm-flex align-items-center border-top py-4">
            <a class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0" href="shop-single.html">
                <img src="/public/frontend2/img/shop/cart/02.png" width="110" alt="Product">
            </a>
            <div class="w-100 pt-1 ps-sm-4">
                <div class="d-flex">
                    <div class="me-3">
                        <h3 class="h5 mb-2">
                            <a href="shop-single.html">Exquisite glass vase</a>
                        </h3>
                    </div>
                    <div class="text-end ms-auto">
                        <div class="fs-5 mb-2">$23.00</div>
                    </div>
                </div>
                <div class="count-input ms-n3">
                    <button class="btn btn-icon fs-xl" type="button" data-decrement>-</button>
                    <input class="form-control" type="number" value="1" readonly>
                    <button class="btn btn-icon fs-xl" type="button" data-increment>+</button>
                </div>
                <div class="nav justify-content-end mt-n5 mt-sm-n3">
                    <a class="nav-link fs-xl p-2" href="#" data-bs-toggle="tooltip" title="Remove" aria-label="Remove">
                        <i class="ai-trash"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="d-sm-flex align-items-center border-top pt-4">
            <a class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0" href="shop-single.html">
                <img src="/public/frontend2/img/shop/cart/03.png" width="110" alt="Product">
            </a>
            <div class="w-100 pt-1 ps-sm-4">
                <div class="d-flex">
                    <div class="me-3">
                        <h3 class="h5 mb-2">
                            <a href="shop-single.html">Set for a dinner party of 7 items</a>
                        </h3>
                    </div>
                    <div class="text-end ms-auto">
                        <div class="fs-5 mb-2">$47.00</div>
                    </div>
                </div>
                <div class="count-input ms-n3">
                    <button class="btn btn-icon fs-xl" type="button" data-decrement>-</button>
                    <input class="form-control" type="number" value="1" readonly>
                    <button class="btn btn-icon fs-xl" type="button" data-increment>+</button>
                </div>
                <div class="nav justify-content-end mt-n5 mt-sm-n3">
                    <a class="nav-link fs-xl p-2" href="#" data-bs-toggle="tooltip" title="Remove" aria-label="Remove">
                        <i class="ai-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Coupon input + Total -->
    <div class="px-4 pb-3 pb-sm-4 pb-sm-5">
        <div class="d-sm-flex align-items-center border-top pt-4">
            <div class="input-group input-group-sm border-dashed mb-3 mb-sm-0 me-sm-4 me-md-5">
                <input class="form-control text-uppercase" type="text" placeholder="Your coupon code">
                <button class="btn btn-secondary" type="button">Apply coupon</button>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <span class="fs-xl me-3">Total:</span>
                <span class="h3 mb-0">$92.00</span>
            </div>
        </div>
    </div>

    <!-- Action buttons -->
    <div class="d-flex align-items-center justify-content-between px-4 pb-3">
        <div class="nav d-none d-sm-block">
            <a class="nav-link fw-semibold px-0" href="#cartOffcanvas" data-bs-dismiss="offcanvas">
                <i class="ai-chevron-left fs-xl me-2"></i>
                Back to shop
            </a>
        </div>
        <a class="btn btn-lg btn-primary w-100 w-sm-auto" href="shop-checkout.html">
            Proceed to checkout
            <i class="ai-chevron-right ms-2 me-n1"></i>
        </a>
    </div>
</div>


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
