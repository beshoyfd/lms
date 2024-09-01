<!-- Footer-->
<footer class="footer bg-dark position-relative pb-4 pt-md-3 py-lg-4 py-xl-5">
    <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100"
         style="background-color: rgba(255,255,255, .03);"></div>
    <div class="container position-relative z-2 pt-5 pb-2" data-bs-theme="dark">


        <x-footer-section-widgets/>


        <!-- Nav + Switcher -->
        <div class="d-sm-flex align-items-end justify-content-between border-bottom mt-2 mt-sm-1 pt-4 pt-sm-5">

            <!-- Nav -->
            <nav class="nav d-flex mb-3 mb-sm-4">
                <a class="nav-link text-body-secondary fs-sm fw-normal ps-0 pe-2 py-2 me-4" href="#">{{__('Support')}}</a>
                <a class="nav-link text-body-secondary fs-sm fw-normal ps-0 pe-2 py-2 me-4" href="#">{{__('Privacy')}}</a>
                <a class="nav-link text-body-secondary fs-sm fw-normal ps-0 pe-2 py-2 me-sm-4" href="#">{{__('Terms of use')}}</a>
            </nav>

            <!-- Language / currency switcher -->
            <!--            <div class="dropdown mb-4">
                            <button class="btn btn-outline-secondary dropdown-toggle px-4" type="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false"><img class="me-2"
                                                                                            src="/public/frontend2/img/flags/en.png"
                                                                                            width="18" alt="English / USD">Eng / USD
                            </button>
                            <div class="dropdown-menu dropdown-menu-end my-1">
                                <div class="dropdown-item">
                                    <select class="form-select form-select-sm">
                                        <option value="usd">$ USD</option>
                                        <option value="eur">€ EUR</option>
                                        <option value="ukp">£ UKP</option>
                                        <option value="jpy">¥ JPY</option>
                                    </select>
                                </div>
                                <a class="dropdown-item pb-1" href="#">
                                    <img class="me-2" src="/public/frontend2/img/flags/fr.png" width="18" alt="Français">
                                    Français
                                </a>
                                <a class="dropdown-item pb-1" href="#">
                                    <img class="me-2" src="/public/frontend2/img/flags/de.png" width="18" alt="Deutsch">
                                    Deutsch
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img class="me-2" src="/public/frontend2/img/flags/it.png" width="18" alt="Italiano">
                                    Italiano
                                </a>
                            </div>
                        </div>-->
        </div>

        <!-- Logo + Socials + Cards -->
        <div class="d-sm-flex align-items-center pt-4">
            <div class="d-sm-flex align-items-center pe-sm-2">
                <a class="navbar-brand d-inline-flex align-items-center me-sm-5 mb-4 mb-sm-0" href="{{url('/')}}">
              <span class="text-primary flex-shrink-0 me-2">
                  <img src="{{Settings('logo')}}" width="150" alt="">
              </span>
                    <span class="text-light opacity-90">{{Settings('site_name')}}</span>
                </a>

                <x-footer-social-links/>

            </div>
            <img class="ms-sm-auto" src="/public/frontend2/img/shop/footer-cards.png" width="187" alt="Accepted cards">
        </div>
    </div>
    <div class="pt-5 pt-lg-0"></div>
</footer>


<!-- Back to top button -->
<a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
    <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5"
                stroke-miterlimit="10"></circle>
    </svg>
    <i class="ai-arrow-up"></i>
</a>
