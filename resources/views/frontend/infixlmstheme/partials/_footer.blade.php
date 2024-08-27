<footer class="footer">
    <div class="container py-5 my-sm-2 my-md-3 my-lg-4 my-xl-5">
        <div class="row align-items-start text-center text-lg-start py-xxl-3">
            <div class="col-lg-6 pb-1 pb-sm-2 pb-lg-0 mb-4 mb-lg-0">
                <h4 class="fw-bold pb-lg-1 mb-2 mb-sm-3">If you have questions email us at</h4>
                <a class="h1 text-primary" href="mailto:{{Settings('email')}}">{{Settings('email')}}</a>
            </div>
            <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end">
                <a class="btn btn-dark btn-lg px-3 py-2" href="#">
                    <img class="d-dark-mode-none mx-1" src="/public/frontend2/img/market/appstore-light.svg" width="136"
                         alt="App Store">
                    <img class="d-none d-dark-mode-block mx-1" src="/public/frontend2/img/market/appstore-dark.svg"
                         width="136" alt="App Store">
                </a>
                <a class="btn btn-dark btn-lg px-3 py-2 ms-3 ms-md-4" href="#">
                    <img class="d-dark-mode-none mx-1" src="/public/frontend2/img/market/googleplay-light.svg"
                         width="135" alt="Google Play">
                    <img class="d-none d-dark-mode-block mx-1" src="/public/frontend2/img/market/googleplay-dark.svg"
                         width="135" alt="Google Play">
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="container py-4">
        <div class="row align-items-center py-2 py-sm-3">
            <div class="col-md-4 order-md-2 mb-4 mb-md-0">
                <x-footer-social-links/>
            </div>
            <div class="col-md-8 order-md-1">
                <div class="d-sm-flex text-nowrap justify-content-center justify-content-md-start">
                    <div
                        class="nav flex-nowrap justify-content-center justify-content-sm-start order-sm-2 mb-3 mb-sm-0">
                        <a class="nav-link fw-normal py-0 px-3" href="#">Terms &amp; Conditions</a>
                        <a class="nav-link fw-normal py-0 px-3" href="#">Privacy Policy</a>
                    </div>
                    <p class="text-body-secondary order-sm-1 text-center pe-3 mb-0">&copy; All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Back to top button -->
<a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
    <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5"
                stroke-miterlimit="10"></circle>
    </svg>
    <i class="ai-arrow-up"></i>
</a>
