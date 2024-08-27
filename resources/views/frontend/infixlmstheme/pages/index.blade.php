@extends(theme('layouts.master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} | {{__('frontendmanage.Home')}} @endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')

    <section class="bg-secondary py-5">
        <div class="container text-center pt-5 mt-lg-4 mt-xl-5">
            <div class="position-relative mx-auto my-3" style="max-width: 850px;">
                <h1 class="display-3 position-relative z-2 mb-0">Top Demanded Programs in one Place</h1>
                <div class="text-warning position-absolute top-0 start-50 translate-middle-x w-100 mt-md-3">
                    <svg width="608" height="66" viewBox="0 0 608 66" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path opacity=".35"
                              d="M45.66 63.0651C48.1682 62.8708 50.692 62.5736 53.2046 62.482C55.5493 62.3949 57.8918 62.3033 60.232 62.2161C73.0671 61.7358 85.8977 61.1192 98.7394 60.9293C112.169 60.7304 125.603 60.402 139.035 60.3663C152.743 60.3328 166.446 60.2747 180.152 60.3417C206.867 60.4757 231.522 59.2366 258.233 59.3013C290.201 57.8797 306.797 56.9045 334.904 55.6546C348.07 55.5876 361.243 55.2681 374.408 55.0111C387.336 54.7632 399.538 53.6311 412.46 53.1396C415.299 53.0323 418.137 52.8201 420.972 52.6548C423.774 52.4894 426.583 52.3576 429.383 52.1432C436.572 51.5913 444.461 51.7091 451.639 51.0545C464.138 49.9061 476.595 48.378 489.11 47.4218C502.221 46.4209 515.361 45.8534 528.486 45.0379C534.408 44.6715 540.366 44.2135 546.249 43.4048C552.974 42.4865 559.639 41.3762 566.288 39.991C572.715 38.6505 579.137 37.2743 585.567 35.9584C588.655 35.3261 591.757 34.7497 594.873 34.2984C598.4 33.7868 601.894 33.2618 605.377 32.5044C607.052 32.138 607.381 29.8927 607.381 28.4494C607.388 27.6273 607.258 26.8297 606.995 26.0567C606.749 25.4065 606.232 24.3676 605.377 24.3967C599.094 24.6089 592.816 24.8234 586.535 25.1205C580.2 25.4177 573.853 25.6009 567.51 25.6903C555.192 25.8578 542.852 25.4311 530.548 24.9172C532.645 24.6335 534.742 24.3498 536.839 24.0638C544.371 23.0361 551.882 21.7448 559.453 21.0522C563.482 20.6813 567.524 20.373 571.541 19.8971C573.579 19.6581 575.599 19.381 577.614 18.9744C579.777 18.5365 581.91 17.9378 584.036 17.339C584.719 17.2653 585.234 16.9212 585.587 16.3158C586.213 15.4489 586.5 14.2872 586.608 13.1746C588.761 12.511 589.194 9.31622 589.194 7.39709C589.207 6.20853 589.022 5.05348 588.635 3.93417C588.261 2.94892 587.55 1.55034 586.297 1.53694C579.758 1.46321 573.23 1.01862 566.691 0.938188C565.93 0.931485 565.163 0.927017 564.397 0.927017C558.77 0.927017 553.155 1.17501 547.535 1.47885C535.016 2.1558 522.495 2.96679 509.989 3.87832C504.175 4.29834 498.369 4.79655 492.551 5.15178C485.435 5.58297 478.335 5.91139 471.212 6.19066C459.296 6.65536 447.361 6.83632 435.438 7.05527C421.763 7.3122 408.106 7.67189 394.447 8.31756C381.795 8.91631 369.155 9.7139 356.512 10.4757C343.816 11.2354 331.122 11.9905 318.427 12.7613C305.415 13.5499 292.394 14.1353 279.373 14.7206C272.783 15.02 266.185 15.1071 259.593 15.297C253.354 15.4758 247.107 15.5227 240.864 15.6143C228.574 15.7952 216.287 15.9069 203.998 16.0343C179.21 16.2867 154.428 16.6934 129.642 17.1067C116.025 17.3346 102.412 17.587 88.7943 17.8439C81.8486 17.9758 74.9007 18.2506 67.9594 18.4539C62.0236 18.6259 56.0901 19.0303 50.1565 19.3364C43.8406 19.6625 37.5247 20.0222 31.2089 20.3886C27.4542 20.6076 23.6952 20.8332 19.9362 21.0522C18.3053 21.1505 16.67 21.2443 15.0346 21.3426C13.5474 21.4297 12.0579 21.5415 10.5729 21.6554C9.51432 21.7358 8.47346 21.89 7.42818 22.0687C6.26798 22.2631 5.11442 22.7859 4.00063 23.1657C3.33545 23.7019 2.87138 24.381 2.61503 25.2099C2.24156 26.3002 2.05814 27.4217 2.0714 28.5768C2.05814 29.7341 2.24156 30.8556 2.61503 31.9459C2.81834 32.3569 3.02165 32.768 3.22496 33.1769C3.60506 33.8292 4.15974 34.1979 4.88901 34.2783C6.1818 34.6492 7.4547 35.0156 8.78063 35.2367C9.50548 35.1563 10.0602 34.7922 10.4381 34.142C10.5817 33.9432 10.7077 33.7309 10.8182 33.5075C11.5121 33.4896 12.2082 33.4919 12.9043 33.4919C13.5695 33.4919 14.2369 33.4874 14.9043 33.4718C16.407 33.4383 17.9053 33.4003 19.4058 33.3645C23.2709 33.2729 27.136 33.1791 31.0011 33.0875C35.1889 32.987 39.3766 32.911 43.5622 32.8373C43.129 32.8753 42.6981 32.9132 42.265 32.9467C32.3735 33.7242 22.4886 34.5062 12.606 35.3931C11.0038 35.5741 9.79056 36.3784 8.95301 37.806C7.71768 39.5129 7.04366 41.7135 6.70996 43.9231C4.97299 43.9075 3.2338 43.8873 1.49682 43.8739C0.28359 43.865 0.0449219 46.0031 0.0449219 46.8252C0.0449219 47.6608 0.28359 49.7564 1.50345 49.7698C3.1675 49.7855 4.83376 49.8145 6.49781 49.8369C6.64146 51.6934 7.01272 53.5098 7.62265 55.2882C8.06905 56.1908 8.51545 57.0934 8.96184 57.9937C9.79719 59.4213 15.9944 65.1786 17.5966 65.3596C26.9466 64.5218 36.3011 63.789 45.66 63.0651Z"></path>
                    </svg>
                </div>
            </div>
            <p class="fs-lg pb-3 mb-2 mb-sm-3 mb-lg-4 mx-auto" style="max-width: 640px;">Our development team has been
                working around the clock to browse the market and conclude the most
                wanted professional courses.</p>
            <a class="btn btn-lg btn-primary" href="sessions.html">Explore Courses</a>
        </div>
        <div class="container-fluid overflow-hidden px-4 pt-3 pt-sm-4 pb-sm-2 pb-md-3 py-lg-4 py-xl-5 mt-4">
            <div class="parallax mx-auto" style="max-width: 1440px;">
                <div class="parallax-layer" data-depth="0.1">
                    <img class="d-dark-mode-none" src="/public/frontend2/img/landing/saas-3/hero/01-light.png"
                         alt="Layer">
                    <img class="d-none d-dark-mode-block" src="/public/frontend2/img/landing/saas-3/hero/01-dark.png"
                         alt="Layer">
                </div>
                <div class="parallax-layer z-2" data-depth="0.25">
                    <img class="d-dark-mode-none" src="/public/frontend2/img/landing/saas-3/hero/02-light.png"
                         alt="Layer">
                    <img class="d-none d-dark-mode-block" src="/public/frontend2/img/landing/saas-3/hero/02-dark.png"
                         alt="Layer">
                </div>
                <div class="parallax-layer z-1" data-depth="0.35">
                    <img class="d-dark-mode-none" src="/public/frontend2/img/landing/saas-3/hero/03-light.png"
                         alt="Layer">
                    <img class="d-none d-dark-mode-block" src="/public/frontend2/img/landing/saas-3/hero/03-dark.png"
                         alt="Layer">
                </div>
                <div class="parallax-layer z-1" data-depth="0.45">
                    <img class="d-dark-mode-none" src="/public/frontend2/img/landing/saas-3/hero/04-light.png"
                         alt="Layer">
                    <img class="d-none d-dark-mode-block" src="/public/frontend2/img/landing/saas-3/hero/04-dark.png"
                         alt="Layer">
                </div>
            </div>
        </div>
    </section>


    <!-- Curved edge -->
    <div class="d-flex w-100 justify-content-center overflow-hidden" style="color: var(--ar-gray-100);">
        <svg class="flex-shrink-0" width="3000" height="18" xmlns="http://www.w3.org/2000/svg">
            <polygon fill="currentColor"
                     points="3000,0 3000,12.3 2751,7.2 2460,18 2239,7.2 2017,10.7 1911.5,7.2 1368,18 831,7.2 540,18 319,7.2 97,10.7 0,7.5 0,0 "></polygon>
        </svg>
    </div>


    <!-- Features -->
    <section class="container py-5 my-sm-2 my-md-4 my-lg-5">
        <h2 class="h1 text-center pt-sm-3 mt-xxl-3 mx-auto" style="max-width: 40rem;">What do you get with our
            tool?</h2>
        <p class="fs-lg text-center pb-3 mb-lg-4 mx-auto" style="max-width: 30rem;">Make sure all your tasks are
            organized so you can set the priorities and focus on important.</p>
        <div
            class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gy-3 gy-sm-4 gy-xl-5 gx-4 gx-md-5 pb-xxl-4 mb-sm-2 mb-lg-0 mb-xl-2">
            <div class="col">
                <div class="text-center px-xxl-4">
                    <svg class="d-inline-block mb-3 mb-md-4" width="76" height="75" viewBox="0 0 76 75" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path class="text-warning"
                              d="M38.0625 6.25C19.9063 6.25 6.75 21.0625 6.75 37.5C6.75 42.75 8.28125 48.1562 10.9688 53.0938C11.4688 53.9062 11.5312 54.9375 11.1875 55.9062L9.09375 62.9062C8.625 64.5937 10.0625 65.8438 11.6562 65.3438L17.9688 63.4688C19.6875 62.9062 21.0312 63.625 22.6281 64.5938C27.1906 67.2812 32.875 68.6562 38 68.6562C53.5 68.6562 69.25 56.6875 69.25 37.4062C69.25 20.7812 55.8125 6.25 38.0625 6.25Z"
                              fill="currentColor"></path>
                        <path class="text-primary" fill-rule="evenodd" clip-rule="evenodd"
                              d="M37.9411 41.5306C35.7224 41.4993 33.9411 39.7181 33.9411 37.4993C33.9411 35.3118 35.7536 33.4993 37.9411 33.5305C40.1599 33.5305 41.9411 35.3118 41.9411 37.5306C41.9411 39.7181 40.1599 41.5306 37.9411 41.5306ZM23.5312 41.5303C21.3438 41.5303 19.5312 39.7178 19.5312 37.5303C19.5312 35.3115 21.3125 33.5303 23.5312 33.5303C25.75 33.5303 27.5312 35.3115 27.5312 37.5303C27.5312 39.7178 25.75 41.499 23.5312 41.5303ZM48.3458 37.5303C48.3458 39.7178 50.1271 41.5303 52.3458 41.5303C54.5646 41.5303 56.3458 39.7178 56.3458 37.5303C56.3458 35.3115 54.5646 33.5303 52.3458 33.5303C50.1271 33.5303 48.3458 35.3115 48.3458 37.5303Z"
                              fill="currentColor"></path>
                    </svg>
                    <h3 class="h4 mb-2">Comments on tasks</h3>
                    <p>Id mollis consectetur congue egestas egestas suspendisse blandit in the justo eget maximus
                        accumsan lorem ligula malesuada.</p>
                </div>
            </div>
            <div class="col">
                <div class="text-center px-xxl-4">
                    <svg class="d-inline-block mb-3 mb-md-4" width="76" height="75" viewBox="0 0 76 75" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path class="text-primary"
                              d="M32.2274 17.3606C32.3865 17.6845 32.4916 18.0315 32.5387 18.3881L33.4088 31.3253L33.8407 37.8279C33.8452 38.4966 33.9501 39.161 34.1521 39.7997C34.6737 41.0388 35.9286 41.8263 37.2939 41.7714L58.0979 40.4106C58.9988 40.3958 59.8688 40.7327 60.5164 41.3473C61.0561 41.8594 61.4045 42.5294 61.5143 43.25L61.5511 43.6876C60.6902 55.6086 51.9349 65.5516 40.0386 68.1183C28.1424 70.685 15.9433 65.263 10.0647 54.7961C8.36996 51.7552 7.31141 48.4128 6.95119 44.9651C6.80071 43.9445 6.73445 42.9136 6.75306 41.8825C6.73448 29.1018 15.8358 18.0525 28.576 15.3888C30.1094 15.1501 31.6126 15.9618 32.2274 17.3606Z"
                              fill="currentColor"></path>
                        <path class="text-warning"
                              d="M40.7178 6.25268C54.9674 6.6152 66.9438 16.862 69.249 30.6635L69.227 30.7654L69.1641 30.9135L69.1729 31.32C69.1402 31.8586 68.9323 32.3768 68.5739 32.7954C68.2006 33.2314 67.6906 33.5283 67.129 33.6436L66.7865 33.6906L42.7841 35.2458C41.9857 35.3245 41.1907 35.0671 40.597 34.5375C40.1022 34.0962 39.7859 33.5004 39.6965 32.8585L38.0855 8.89094C38.0574 8.8099 38.0574 8.72204 38.0855 8.641C38.1075 7.98035 38.3983 7.35587 38.8929 6.90709C39.3876 6.45831 40.0448 6.22262 40.7178 6.25268Z"
                              fill="currentColor"></path>
                    </svg>
                    <h3 class="h4 mb-2">Tasks analytics</h3>
                    <p>Non imperdiet facilisis nulla tellus morbi scelerisque eget adipiscing out vulputate convallis
                        justo sed tellus vehicula.</p>
                </div>
            </div>
            <div class="col">
                <div class="text-center px-xxl-4">
                    <svg class="d-inline-block mb-3 mb-md-4" width="76" height="75" viewBox="0 0 76 75" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path class="text-warning"
                              d="M41.0509 9.73004L48.0087 23.7122C48.5213 24.7252 49.4996 25.4287 50.628 25.585L66.2564 27.8611C67.1691 27.9893 67.9974 28.4708 68.5569 29.2056C69.1101 29.9309 69.3476 30.8502 69.2132 31.7537C69.1038 32.5041 68.7506 33.1982 68.2099 33.7297L56.8856 44.7072C56.0573 45.4732 55.6822 46.6082 55.8823 47.7181L58.6704 63.151C58.9673 65.0144 57.7327 66.7716 55.8823 67.1249C55.1196 67.2468 54.3382 67.1186 53.6505 66.7684L39.71 59.5054C38.6754 58.9832 37.4533 58.9832 36.4187 59.5054L22.4782 66.7684C20.7653 67.6783 18.643 67.0592 17.6897 65.3708C17.3365 64.6986 17.2115 63.9326 17.3271 63.1854L20.1152 47.7494C20.3152 46.6426 19.937 45.5014 19.1119 44.7353L7.78755 33.7641C6.44039 32.4635 6.39975 30.3218 7.69691 28.9742C7.72504 28.9461 7.7563 28.9148 7.78755 28.8835C8.32517 28.3364 9.03157 27.9893 9.79423 27.8987L25.4226 25.6194C26.5478 25.4599 27.5262 24.7627 28.0419 23.7434L34.7496 9.73004C35.3466 8.52943 36.5844 7.78218 37.9284 7.81344H38.3472C39.5131 7.95414 40.529 8.67638 41.0509 9.73004Z"
                              fill="currentColor"></path>
                        <path class="text-primary"
                              d="M37.975 59.116C37.3697 59.1348 36.78 59.2974 36.2496 59.5883L22.3772 66.8348C20.6799 67.6449 18.6486 67.0162 17.697 65.393C17.3444 64.73 17.2165 63.97 17.335 63.2256L20.1058 47.8224C20.293 46.7027 19.9185 45.5643 19.1042 44.7761L7.7748 33.8077C6.43001 32.491 6.40504 30.3299 7.72176 28.9819C7.74048 28.9631 7.75608 28.9475 7.7748 28.9319C8.31147 28.4002 9.00415 28.0499 9.74988 27.9404L25.3913 25.6385C26.524 25.4947 27.5068 24.7878 28.0061 23.762L34.8049 9.57224C35.4508 8.42756 36.6895 7.74575 38 7.81768C37.975 8.74657 37.975 58.4842 37.975 59.116Z"
                              fill="currentColor"></path>
                    </svg>
                    <h3 class="h4 mb-2">Light / dark mode</h3>
                    <p>A elementum, imperdiet enim, pretium etiam facilisi in aenean quam inrean mauris ultrices
                        interdum congue ut, dictum et tortor.</p>
                </div>
            </div>
            <div class="col">
                <div class="text-center px-xxl-4">
                    <svg class="d-inline-block mb-3 mb-md-4" width="76" height="75" viewBox="0 0 76 75" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path class="text-primary"
                              d="M62.2797 36.3917C59.9969 33.7259 58.9596 31.4158 58.9596 27.4911V26.1567C58.9596 21.0423 57.7825 17.7471 55.2233 14.4519C51.2789 9.33435 44.6387 6.25 38.1382 6.25H37.8618C31.498 6.25 25.0658 9.19272 21.0531 14.1025C18.3542 17.4638 17.0404 20.9007 17.0404 26.1567V27.4911C17.0404 31.4158 16.0714 33.7259 13.7203 36.3917C11.9903 38.3556 11.4375 40.8797 11.4375 43.6116C11.4375 46.3466 12.3351 48.9368 14.1365 51.0423C16.4876 53.5665 19.8077 55.1779 23.1992 55.458C28.1095 56.0182 33.0198 56.2291 38.0016 56.2291C42.9802 56.2291 47.8905 55.8766 52.8039 55.458C56.1923 55.1779 59.5124 53.5665 61.8635 51.0423C63.6618 48.9368 64.5625 46.3466 64.5625 43.6116C64.5625 40.8797 64.0097 38.3556 62.2797 36.3917Z"
                              fill="currentColor"></path>
                        <path class="text-warning"
                              d="M44.277 60.0886C42.7148 59.755 33.1954 59.755 31.6332 60.0886C30.2977 60.397 28.8535 61.1146 28.8535 62.6883C28.9312 64.1895 29.8101 65.5145 31.0276 66.3549L31.0245 66.358C32.5991 67.5855 34.4471 68.366 36.382 68.6461C37.4131 68.7877 38.4629 68.7814 39.5313 68.6461C41.4631 68.366 43.3111 67.5855 44.8857 66.358L44.8826 66.3549C46.1001 65.5145 46.9791 64.1895 47.0567 62.6883C47.0567 61.1146 45.6125 60.397 44.277 60.0886Z"
                              fill="currentColor"></path>
                    </svg>
                    <h3 class="h4 mb-2">Notifications</h3>
                    <p>Diam, suspendisse velit cras ac. Lobortis diam volutpat, eget pellentesque viverra inter vivamus
                        id porta fermentum turpis.</p>
                </div>
            </div>
            <div class="col">
                <div class="text-center px-xxl-4">
                    <svg class="d-inline-block mb-3 mb-md-4" width="76" height="75" viewBox="0 0 76 75" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path class="text-warning"
                              d="M59.2775 28.1906C57.8666 28.1906 55.9976 28.1594 53.6708 28.1594C47.9959 28.1594 43.3298 23.4625 43.3298 17.7344V7.68437C43.3298 6.89375 42.6986 6.25 41.9158 6.25H25.3863C17.6724 6.25 11.4375 12.5812 11.4375 20.3406V54.0125C11.4375 62.1531 17.9694 68.75 26.0299 68.75H50.6446C58.3307 68.75 64.5625 62.4594 64.5625 54.6937V29.5969C64.5625 28.8031 63.9344 28.1625 63.1484 28.1656C61.8272 28.175 60.2429 28.1906 59.2775 28.1906Z"
                              fill="currentColor"></path>
                        <path class="text-primary"
                              d="M50.7639 8.02291C49.8295 7.05103 48.1982 7.71978 48.1982 9.06666V17.3073C48.1982 20.7635 51.0451 23.6073 54.5014 23.6073C56.6795 23.6323 59.7045 23.6385 62.2732 23.6323C63.5889 23.6292 64.2576 22.0573 63.3451 21.1073C60.0482 17.6792 54.1451 11.5354 50.7639 8.02291Z"
                              fill="currentColor"></path>
                        <path class="text-primary" fill-rule="evenodd" clip-rule="evenodd"
                              d="M28.5447 35.5859H39.1229C40.4072 35.5859 41.451 34.5452 41.451 33.2609C41.451 31.9765 40.4072 30.9327 39.1229 30.9327H28.5447C27.2604 30.9327 26.2197 31.9765 26.2197 33.2609C26.2197 34.5452 27.2604 35.5859 28.5447 35.5859ZM28.5448 51.1926H45.5573C46.8417 51.1926 47.8854 50.152 47.8854 48.8676C47.8854 47.5833 46.8417 46.5395 45.5573 46.5395H28.5448C27.2605 46.5395 26.2198 47.5833 26.2198 48.8676C26.2198 50.152 27.2605 51.1926 28.5448 51.1926Z"
                              fill="currentColor"></path>
                    </svg>
                    <h3 class="h4 mb-2">Sections &amp; subtasks</h3>
                    <p>Mi feugiat hac id in. Sit elit placerat lacus nibh lorem ridiculus lectus porttitor tincidunt
                        sapien luctus tristique quam aenean accumsan.</p>
                </div>
            </div>
            <div class="col">
                <div class="text-center px-xxl-4">
                    <svg class="d-inline-block mb-3 mb-md-4" width="76" height="75" viewBox="0 0 76 75" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path class="text-warning"
                              d="M38.2703 68.75C37.8833 68.75 37.4964 68.6611 37.1471 68.4803L25.8937 62.655C22.7005 61.0003 20.2025 59.1433 18.252 56.9799C13.9828 52.2485 11.6075 46.175 11.5698 39.8747L11.4376 19.1383C11.4219 16.7451 12.9666 14.597 15.2758 13.788L35.9391 6.58371C37.166 6.14551 38.5346 6.13938 39.7835 6.56226L60.5255 13.5214C62.8472 14.2967 64.4171 16.4294 64.4297 18.8196L64.5618 39.5713C64.6027 45.8624 62.3093 51.9605 58.1061 56.7439C56.1776 58.938 53.7017 60.8226 50.5399 62.5079L39.3871 68.465C39.0411 68.6519 38.6573 68.7469 38.2703 68.75Z"
                              fill="currentColor"></path>
                        <path class="text-primary"
                              d="M35.8712 44.753C35.2672 44.756 34.6632 44.5385 34.1975 44.0911L28.2075 38.3301C27.2825 37.4353 27.2731 35.9828 28.1886 35.0819C29.1041 34.1779 30.5985 34.1687 31.5265 35.0605L35.8366 39.2035L46.3602 28.8276C47.2788 27.9236 48.7732 27.9144 49.6981 28.8061C50.6262 29.7009 50.6357 31.1565 49.7202 32.0543L37.5355 44.0696C37.0762 44.5231 36.4753 44.7499 35.8712 44.753Z"
                              fill="currentColor"></path>
                    </svg>
                    <h3 class="h4 mb-2">Data security</h3>
                    <p>Aliquam malesuada neque eget elit nulla vestibulum nunc cras. Neque, morbi non arcu sapien luctus
                        ullamcorper lectus efficitur.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Light / Dark mode (Comparison slider) -->
    <section class="d-flex w-100 position-relative overflow-hidden">
        <div class="position-relative flex-xl-shrink-0 z-5 start-50 translate-middle-x my-n1"
             style="max-width: 1920px;">
            <div class="mx-md-n5 mx-xl-0">
                <div class="mx-n4 mx-sm-n5 mx-xl-0">
                    <div class="mx-n5 mx-xl-0">
                        <img-comparison-slider class="mx-n5 mx-xl-0"><img slot="first"
                                                                          src="/public/frontend2/img/landing/saas-3/comparison/light-mode.jpg"
                                                                          alt="Light Mode"><img class="d-dark-mode-none"
                                                                                                slot="second"
                                                                                                src="/public/frontend2/img/landing/saas-3/comparison/dark-mode-light.jpg"
                                                                                                alt="Dark Mode"><img
                                class="d-none d-dark-mode-block" slot="second"
                                src="/public/frontend2/img/landing/saas-3/comparison/dark-mode-dark.jpg"
                                alt="Dark Mode">
                            <div slot="handle" style="width: 42px;">
                                <svg class="text-primary rounded-circle" width="42" height="42" viewBox="0 0 42 42"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <circle fill="currentColor" cx="21" cy="21" r="21"></circle>
                                    </g>
                                    <path fill="white"
                                          d="M25.5019 19.7494H15.9147V15.9146L11.1211 20.7081L15.9147 25.5017V21.6669H25.5019V25.5017L30.2955 20.7081L25.5019 15.9146V19.7494Z"></path>
                                </svg>
                            </div>
                        </img-comparison-slider>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute top-0 start-0 w-50 h-100 bg-primary"></div>
        <div class="position-absolute top-0 end-0 w-50 h-100 d-dark-mode-none" style="background-color: #f6f9fc;"></div>
        <div class="position-absolute top-0 end-0 w-50 h-100 d-none d-dark-mode-block"
             style="background-color: #171a1e;"></div>
    </section>


    @if($homeContent->show_testimonial_section==1)
        <x-home-page-testimonial-section :homeContent="$homeContent"/>
    @endif

    <!-- Mobile app -->
    <section class="container pb-5 mb-xl-3 mb-xxl-5" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280"
             data-disable-parallax-down="lg">
        <!-- Multiple slides responsive slider with external Prev / Next buttons and bullets outside -->
        <div class="position-relative px-5">

            <!-- External slider prev/next buttons -->
            <button type="button" id="prev"
                    class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle position-absolute top-50 start-0 translate-middle-y mt-n3"
                    aria-label="Prev">
                <i class="ai-arrow-left"></i>
            </button>
            <button type="button" id="next"
                    class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle position-absolute top-50 end-0 translate-middle-y mt-n3"
                    aria-label="Next">
                <i class="ai-arrow-right"></i>
            </button>
            <!-- Slider -->
            <div class="swiper" data-swiper-options='{
                "slidesPerView": 1,
                "spaceBetween": 16,
                "loop": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "clickable": true
                },
                "navigation": {
                  "prevEl": "#prev",
                  "nextEl": "#next"
                },
                "breakpoints": {
                  "600": {
                    "slidesPerView": 2
                  },
                  "1000": {
                    "slidesPerView": 3
                  }
                }
              }'>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <div class="">
                                                <img width="35" height="35"
                                                     src="https://bakkah.com/public/front-dist/images/new-website/pdu.svg"
                                                     alt="">
                                            </div>
                                            <div class="">
                                                <small class="">PDUs</small>
                                                <small class="m-0">15 Hourse</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <div class="">
                                                <img width="35" height="35"
                                                     src="https://bakkah.com/public/front-dist/images/new-website/hourglass.svg"
                                                     alt="">
                                            </div>
                                            <div class="">
                                                <small class="">Duration</small>
                                                <small class="m-0">4 Days</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <div class="">
                                                <img
                                                    src="https://bakkah.com/public/front-dist/images/new-website/calender.svg"
                                                    alt="">
                                            </div>
                                            <div class="">
                                                <small class="">Date</small> <br>
                                                <small class="m-0">15 Dec 2024 - 18 Dec 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <div class="">
                                                <img
                                                    src="https://bakkah.com/public/front-dist/images/new-website/clock.svg"
                                                    alt="">
                                            </div>
                                            <div class="">
                                                <small class="">Time</small> <br>
                                                <small class="m-0">7:00 PM - 10:00 PM</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="btn btn-secondary btn-icon btn-lg btn-linkedin me-2"
                                       aria-label="LinkedIn">
                                        <i class="ai-cart"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary">Register Now</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <div class="">
                                                <img width="35" height="35"
                                                     src="https://bakkah.com/public/front-dist/images/new-website/pdu.svg"
                                                     alt="">
                                            </div>
                                            <div class="">
                                                <small class="">PDUs</small>
                                                <small class="m-0">15 Hourse</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <div class="">
                                                <img width="35" height="35"
                                                     src="https://bakkah.com/public/front-dist/images/new-website/hourglass.svg"
                                                     alt="">
                                            </div>
                                            <div class="">
                                                <small class="">Duration</small>
                                                <small class="m-0">4 Days</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <div class="">
                                                <img
                                                    src="https://bakkah.com/public/front-dist/images/new-website/calender.svg"
                                                    alt="">
                                            </div>
                                            <div class="">
                                                <small class="">Date</small> <br>
                                                <small class="m-0">15 Dec 2024 - 18 Dec 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <div class="">
                                                <img
                                                    src="https://bakkah.com/public/front-dist/images/new-website/clock.svg"
                                                    alt="">
                                            </div>
                                            <div class="">
                                                <small class="">Time</small> <br>
                                                <small class="m-0">7:00 PM - 10:00 PM</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="btn btn-secondary btn-icon btn-lg btn-linkedin me-2"
                                       aria-label="LinkedIn">
                                        <i class="ai-cart"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary">Register Now</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <div class="">
                                                <img width="35" height="35"
                                                     src="https://bakkah.com/public/front-dist/images/new-website/pdu.svg"
                                                     alt="">
                                            </div>
                                            <div class="">
                                                <small class="">PDUs</small>
                                                <small class="m-0">15 Hourse</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <div class="">
                                                <img width="35" height="35"
                                                     src="https://bakkah.com/public/front-dist/images/new-website/hourglass.svg"
                                                     alt="">
                                            </div>
                                            <div class="">
                                                <small class="">Duration</small>
                                                <small class="m-0">4 Days</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <div class="">
                                                <img
                                                    src="https://bakkah.com/public/front-dist/images/new-website/calender.svg"
                                                    alt="">
                                            </div>
                                            <div class="">
                                                <small class="">Date</small> <br>
                                                <small class="m-0">15 Dec 2024 - 18 Dec 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <div class="">
                                                <img
                                                    src="https://bakkah.com/public/front-dist/images/new-website/clock.svg"
                                                    alt="">
                                            </div>
                                            <div class="">
                                                <small class="">Time</small> <br>
                                                <small class="m-0">7:00 PM - 10:00 PM</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="btn btn-secondary btn-icon btn-lg btn-linkedin me-2"
                                       aria-label="LinkedIn">
                                        <i class="ai-cart"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary">Register Now</button>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- Pagination (Bullets) -->
                    <div class="swiper-pagination position-relative bottom-0 mt-4"></div>
                </div>
            </div>

        </div>
    </section>


    <!-- Pricing -->
    <section class="w-100 px-sm-4 mx-auto" style="max-width: 1680px;">
        <div class="position-relative z-2 pt-3 pt-md-4 py-lg-5">
            <div class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-sm-block"
                 style="background-color: #171a1e;"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 d-sm-none" style="background-color: #171a1e;"></div>
            <svg class="d-none d-sm-block position-absolute end-0 text-primary me-n4" width="230" height="27"
                 viewBox="0 0 230 27" fill="none" xmlns="http://www.w3.org/2000/svg" style="bottom: 7rem;">
                <path
                    d="M222.189 11.9175C220.042 12.3471 217.891 12.7689 215.761 13.2705C213.352 13.8373 210.928 14.3707 208.55 15.053C205.726 15.8647 202.916 16.7199 200.109 17.5844C198.081 18.2078 196.1 18.966 194.072 19.5925C193.025 19.9158 191.962 20.1554 190.891 20.381C190.067 20.5555 189.257 20.771 188.429 20.9137C188.171 20.9346 187.916 20.9431 187.659 20.9354C187.752 20.5888 187.872 20.25 187.969 19.9011C188.066 19.5483 188.164 19.1948 188.262 18.842C188.57 17.724 188.912 16.6153 189.189 15.4895C189.372 14.7405 189.532 13.9768 189.651 13.2154C189.716 12.8076 189.753 12.4099 189.763 11.9982C189.772 11.6206 189.685 11.2353 189.628 10.8639C189.527 10.2087 189.26 9.55125 188.898 8.99844C188.684 8.67048 188.408 8.38904 188.08 8.17272C187.721 7.93547 187.317 7.7804 186.902 7.66953C186.558 7.57727 186.18 7.56099 185.827 7.52842C185.489 7.49663 185.147 7.52067 184.81 7.54005C183.938 7.59122 183.093 7.87732 182.265 8.1324C181.631 8.32778 180.994 8.51076 180.359 8.70227C179.264 9.03178 178.163 9.34346 177.076 9.70089C174.752 10.4646 172.415 11.1973 170.105 12.0044C167.257 13.0007 164.408 13.9962 161.56 14.9925C158.926 15.9144 156.286 16.8323 153.621 17.6581C151.981 18.1675 150.317 18.6009 148.66 19.0467C146.996 19.4956 145.322 19.8918 143.618 20.1469C141.882 20.3461 140.109 20.4531 138.367 20.2849C137.832 20.1926 137.317 20.0655 136.808 19.8825C136.484 19.7181 136.179 19.5375 135.88 19.3343C135.643 19.1327 135.422 18.9211 135.209 18.6908C135.14 18.5861 135.077 18.4807 135.017 18.3698C134.862 17.8759 134.759 17.3735 134.678 16.8641C134.613 15.95 134.623 15.0297 134.606 14.1125C134.59 13.2635 134.574 12.4153 134.558 11.5663C134.533 10.2746 134.51 8.97441 134.339 7.69202C134.117 6.0429 133.768 4.3209 132.863 2.89817C132.651 2.56556 132.363 2.25077 132.101 1.95925C131.828 1.65687 131.486 1.39636 131.159 1.15679C130.533 0.697794 129.863 0.362853 129.112 0.156616C128.742 0.0558235 128.333 0.0410923 127.952 0.0108546C127.87 0.00232598 127.788 0 127.706 0C127.426 0 127.144 0.0310131 126.868 0.0558235C125.932 0.139559 124.994 0.303153 124.087 0.538077C123.249 0.755168 122.438 1.0777 121.626 1.3731C120.824 1.66618 120.015 1.94452 119.216 2.24457C117.48 2.89895 115.773 3.63086 114.08 4.38525C112.497 5.09002 110.938 5.84984 109.387 6.62594C108.522 7.05935 107.651 7.48811 106.803 7.95563C105.515 8.66505 104.228 9.3737 102.94 10.0816C100.975 11.1632 99.0083 12.2416 97.047 13.3286C94.8393 14.5529 92.6315 15.7771 90.4253 17.0014C87.6672 18.5295 84.8671 19.9957 81.9674 21.2409C80.806 21.7161 79.6322 22.1588 78.4498 22.5775C77.2837 22.9915 76.0951 23.3187 74.8754 23.5203C73.9223 23.6281 72.9739 23.6824 72.0162 23.6033C71.7076 23.5467 71.4106 23.4738 71.1129 23.3753C70.924 23.2761 70.7483 23.1691 70.5734 23.0497C70.3573 22.8528 70.1606 22.6519 69.9701 22.4325C69.9196 22.3565 69.8722 22.279 69.8287 22.1984C69.6398 21.6448 69.5332 21.0726 69.4384 20.495C69.3506 19.6491 69.3094 18.797 69.248 17.9488C69.1881 17.1122 69.1282 16.2772 69.0692 15.4422C68.9743 14.1055 68.8305 12.7611 68.5903 11.4438C68.4511 10.6856 68.1977 9.94124 67.9521 9.21243C67.6745 8.39136 67.3169 7.58967 66.8777 6.84381C66.5015 6.20727 65.9814 5.64283 65.4497 5.13499C64.89 4.60001 64.2269 4.15032 63.5653 3.75336C62.9084 3.35872 62.1645 3.0796 61.4353 2.85475C60.5382 2.57951 59.5626 2.49578 58.6313 2.42522C54.9823 2.1461 51.3527 2.91445 47.8063 3.67272C44.1806 4.44727 40.6109 5.47148 37.0629 6.54143C35.4584 7.02524 33.8399 7.485 32.2603 8.04324C29.7338 8.93797 27.2221 9.87146 24.7181 10.8282C20.5957 12.4037 16.4997 14.052 12.4301 15.7577C11.3363 16.2167 10.2433 16.6781 9.15346 17.1456C8.16308 17.5697 7.18825 18.0372 6.21264 18.497C4.12926 19.4816 2.06765 20.512 0.00215939 21.5316C-0.00250489 21.5339 0.00138201 21.5401 0.00449152 21.5386C3.77944 20.4578 7.52252 19.2762 11.3037 18.2225C14.3502 17.3743 17.3859 16.4912 20.4122 15.5755C23.7573 14.563 27.0899 13.5054 30.4062 12.3998C31.3632 12.0796 32.3178 11.7547 33.2724 11.4252C34.9741 10.8367 36.7007 10.3095 38.4194 9.77144C40.9669 8.97131 43.5292 8.21691 46.1155 7.54626C47.4059 7.21209 48.7065 6.91746 50.0071 6.62439C51.418 6.30651 52.832 6.01033 54.264 5.79402C56.0364 5.5777 57.8306 5.5149 59.6077 5.70485C60.2265 5.80952 60.8181 5.95684 61.4026 6.1778C61.9072 6.42513 62.3783 6.70425 62.8377 7.02601C63.2287 7.34777 63.5886 7.68892 63.926 8.0696C64.2424 8.51929 64.5005 8.99069 64.729 9.49155C65.1698 10.6266 65.5064 11.7857 65.7016 12.9883C65.9223 14.7971 66.0257 16.6145 66.1447 18.4318C66.168 18.7931 66.1882 19.1537 66.2045 19.515C66.2411 20.3174 66.3336 21.1044 66.4611 21.8968C66.5186 22.2565 66.5885 22.6062 66.6803 22.959C66.7728 23.3141 66.9508 23.6529 67.1156 23.9778C67.2866 24.315 67.5758 24.6143 67.8075 24.9089C67.9762 25.1066 68.1573 25.2896 68.3547 25.4602C68.5646 25.6269 68.7753 25.7928 68.9891 25.9556C69.6172 26.3658 70.2912 26.6286 71.0212 26.7968C71.7628 26.9674 72.5471 26.9992 73.3035 27C75.0814 27.0031 76.8461 26.641 78.5384 26.1285C79.3616 25.8789 80.1709 25.5749 80.9778 25.2749C81.7917 24.9709 82.601 24.6569 83.4009 24.3197C85.1485 23.58 86.8463 22.745 88.5355 21.8844C89.2725 21.5083 90.0156 21.1424 90.7386 20.74C91.2633 20.4477 91.7881 20.1546 92.3128 19.8615C93.8854 18.9847 95.4588 18.107 97.0315 17.2285C98.8513 16.2136 100.673 15.1995 102.495 14.1877C104.41 13.1247 106.324 12.0618 108.24 10.9988C109.174 10.4801 110.129 10.0009 111.082 9.51791C113.171 8.45959 115.287 7.45399 117.442 6.53678C118.851 5.95296 120.273 5.40558 121.713 4.90084C123.134 4.40463 124.561 3.88439 126.048 3.63241C126.71 3.5603 127.364 3.51301 128.029 3.5634C128.124 3.58356 128.218 3.60837 128.31 3.63783C128.508 3.73785 128.695 3.8464 128.884 3.9689C129.133 4.18366 129.362 4.40851 129.58 4.65584C129.709 4.84812 129.824 5.04117 129.933 5.24819C130.254 6.12896 130.424 7.0485 130.575 7.97424C130.701 9.16591 130.708 10.3684 130.715 11.5655C130.722 12.4145 130.726 13.2627 130.732 14.1117C130.738 15.0599 130.707 16.0113 130.762 16.9572C130.787 17.382 130.87 17.8108 130.935 18.2318C130.99 18.5869 131.062 18.9335 131.148 19.2832C131.243 19.6724 131.432 20.0368 131.588 20.4035C131.689 20.6043 131.812 20.7912 131.957 20.9641C132.125 21.1967 132.306 21.4184 132.496 21.6324C132.732 21.9069 133.02 22.1356 133.3 22.3635C133.623 22.6256 133.959 22.8621 134.31 23.0892C134.606 23.28 134.929 23.4195 135.254 23.5568C135.654 23.7265 136.037 23.8677 136.454 23.9863C137.244 24.2127 138.098 24.2832 138.914 24.3476C139.846 24.4212 140.789 24.3708 141.721 24.3181C143.434 24.2212 145.129 23.9653 146.805 23.6009C148.617 23.2063 150.395 22.6651 152.18 22.1666C155.65 21.1974 159.015 19.8972 162.406 18.6939C163.444 18.3248 164.472 17.9287 165.504 17.5472C167.832 16.6866 170.151 15.7996 172.493 14.9793C174.429 14.3009 176.363 13.614 178.301 12.9449C179.214 12.6308 180.144 12.3641 181.064 12.0749C181.561 11.9183 182.058 11.7617 182.555 11.6051C183.335 11.3585 184.124 11.1128 184.93 10.9647C185.242 10.9538 185.544 10.9623 185.851 10.9895C185.901 11.0003 185.953 11.012 186.002 11.0251C186.062 11.2236 186.111 11.4198 186.152 11.6214C186.171 11.9036 186.168 12.1781 186.146 12.4603C185.86 14.0055 185.405 15.5158 184.917 17.0091C184.666 17.7736 184.435 18.5474 184.152 19.301C184.058 19.5251 183.966 19.7491 183.878 19.9755C183.735 20.3399 183.725 20.7485 183.702 21.1339C183.726 21.3083 183.749 21.482 183.772 21.6557C183.792 21.8627 183.835 22.0635 183.904 22.2596C184.005 22.6302 184.199 22.9908 184.382 23.3265C184.441 23.4056 184.502 23.4839 184.562 23.5622C184.694 23.7948 184.868 23.9871 185.084 24.139C185.443 24.4336 185.789 24.6376 186.236 24.7794C187.017 25.026 187.829 25.0648 188.641 24.9934C189.421 24.926 190.195 24.7694 190.959 24.6058C191.687 24.4492 192.417 24.3042 193.143 24.1445C194.933 23.7483 196.672 23.1303 198.388 22.4953C201.708 21.268 205.011 20.0003 208.295 18.6807C212.84 16.8541 217.432 15.1476 222.014 13.4124C223.197 12.965 224.379 12.5169 225.562 12.0742C227.036 11.5214 228.503 10.9468 229.997 10.4506C230.002 10.4491 230 10.4429 229.995 10.4437C227.381 10.8398 224.784 11.3989 222.189 11.9175ZM185.842 10.9275C185.894 10.9453 185.945 10.9662 185.994 10.9895C185.994 10.9895 185.995 10.991 185.995 10.9918C185.943 10.9701 185.893 10.9484 185.842 10.9275ZM187.683 21.0129C187.682 21.0106 187.681 21.009 187.68 21.0067C187.723 21.0245 187.766 21.0424 187.808 21.0602C187.766 21.0462 187.724 21.0307 187.683 21.0129Z"
                    fill="currentColor"></path>
            </svg>
            <div class="container position-relative z-2 pt-5 pb-4 pb-md-5 my-xl-3 my-xxl-4">
                <div class="row justify-content-center py-xxl-2">
                    <div class="col-lg-8 col-xxl-7">
                        <div class="card h-100 border-0 bg-transparent px-xl-4">
                            <div class="bg-light position-absolute top-0 start-0 w-100 h-100 rounded-4"
                                 data-aos="zoom-in" data-aos-duration="600" data-aos-offset="300"
                                 data-disable-parallax-down="lg"></div>
                            <div class="position-absolute top-0 start-0 text-warning z-1 mt-n3 ms-n4" data-aos="zoom-in"
                                 data-aos-duration="400" data-aos-delay="600" data-aos-offset="300"
                                 data-aos-easing="ease-out-back" data-disable-parallax-down="lg">
                                <svg width="109" height="80" viewBox="0 0 109 80" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.8683 75.7302C16.2569 75.4191 16.6217 75.0491 17.0377 74.7951C17.4254 74.5572 17.8115 74.3169 18.1985 74.0793C20.3199 72.7747 22.4054 71.3943 24.603 70.2517C26.9011 69.0568 29.1665 67.7889 31.5071 66.685C33.8966 65.56 36.279 64.4217 38.6941 63.3532C43.4024 61.2723 48.1059 59.183 52.7956 57.0638C57.4545 54.9602 62.0996 52.8266 66.7072 50.6118C68.9933 49.5118 71.2155 48.27 73.4522 47.0639C75.6499 45.8818 77.7997 44.6021 79.9333 43.2844C80.4024 42.9952 80.844 42.6475 81.2974 42.3262C81.7449 42.0076 82.2023 41.7071 82.6368 41.3612C83.752 40.4723 84.8555 39.563 85.9422 38.6175C87.8325 36.9663 89.6174 35.106 91.56 33.561C93.5954 31.9429 95.7477 30.565 97.8333 29.0496C98.7748 28.3667 99.6989 27.6296 100.519 26.7024C101.459 25.6459 102.338 24.4868 103.144 23.1751C103.922 21.9064 104.691 20.6181 105.476 19.3629C105.853 18.76 106.247 18.1871 106.676 17.6831C107.161 17.1122 107.636 16.5365 108.05 15.8316C108.249 15.4914 107.727 14.2085 107.354 13.401C107.143 12.9404 106.914 12.5046 106.669 12.0933C106.458 11.7493 106.1 11.2098 105.957 11.295C104.913 11.9208 103.87 12.5474 102.848 13.2205C101.816 13.8981 100.753 14.5128 99.6667 15.0746C97.555 16.1624 95.2861 16.9194 93.0008 17.6249C93.2944 17.2969 93.5881 16.9689 93.8812 16.6396C94.9335 15.4568 95.9143 14.1281 97.0601 13.1296C97.6691 12.597 98.2967 12.0983 98.8767 11.5078C99.1714 11.2096 99.4533 10.8916 99.7009 10.5014C99.9664 10.0818 100.185 9.57471 100.402 9.06813C100.503 8.97177 100.504 8.73771 100.41 8.37039C100.295 7.83489 100.046 7.16165 99.7775 6.53036C99.9828 5.98539 99.234 4.16279 98.7386 3.08895C98.4342 2.42283 98.1036 1.79151 97.747 1.19642C97.4274 0.675268 96.9419 -0.0498749 96.7193 0.0437384C95.5563 0.530174 94.2994 0.808209 93.1347 1.29089C93 1.34849 92.8647 1.40787 92.7305 1.46975C91.7462 1.92379 90.8278 2.5157 89.9231 3.13921C87.9077 4.52825 85.9265 5.99248 83.9739 7.51171C83.0652 8.21592 82.1781 8.96318 81.2519 9.6315C80.1183 10.447 78.9609 11.2038 77.7869 11.9348C75.8222 13.1564 73.7809 14.2208 71.7516 15.3054C69.4256 16.5527 67.1292 17.8561 64.9062 19.3197C62.8474 20.6756 60.8418 22.142 58.8267 23.5885C56.8017 25.0381 54.7759 26.485 52.7538 27.9408C50.6809 29.4321 48.5541 30.8104 46.4273 32.1886C45.3517 32.8879 44.2198 33.4692 43.1155 34.1074C42.0703 34.7109 40.9894 35.2413 39.9209 35.7963C37.8177 36.8893 35.6969 37.9433 33.5799 39.0063C29.3084 41.1479 25.0779 43.3753 20.8484 45.6067C18.5249 46.8331 16.2086 48.0729 13.8926 49.3156C12.7115 49.9498 11.5669 50.6643 10.405 51.3382C9.41101 51.9135 8.47733 52.6186 7.51828 53.2686C6.49754 53.9608 5.48545 54.6718 4.47509 55.3865C3.87475 55.812 3.27536 56.2416 2.67425 56.6674C2.4143 56.854 2.15243 57.0385 1.89171 57.2255C1.65401 57.3943 1.42227 57.577 1.19188 57.7606C1.02745 57.891 0.885144 58.0612 0.748409 58.2456C0.595606 58.448 0.52873 58.8336 0.431907 59.136C0.453931 59.4897 0.548042 59.9072 0.717128 60.3916C0.933192 61.0318 1.19058 61.6742 1.49102 62.3194C1.7874 62.968 2.10896 63.5808 2.4557 64.1607C2.59737 64.3743 2.73904 64.5879 2.88013 64.8003C3.11501 65.1346 3.30719 65.2961 3.45553 65.2823C3.77742 65.3855 4.09468 65.4878 4.38373 65.5045C4.48978 65.401 4.49283 65.1525 4.39113 64.7582C4.36494 64.6354 4.3322 64.5065 4.29387 64.3725C4.41065 64.3065 4.53301 64.2516 4.65479 64.1954C4.77116 64.1418 4.88676 64.0854 4.99948 64.0228C5.25373 63.8828 5.50604 63.7406 5.75933 63.5995C6.41187 63.2364 7.06383 62.872 7.71637 62.5088C8.42304 62.1146 9.13606 61.7342 9.84927 61.3551C9.7833 61.4113 9.71771 61.4674 9.65059 61.5211C8.12079 62.7543 6.59331 63.9896 5.09332 65.2834C4.85973 65.5139 4.85507 66.0618 5.07702 66.9282C5.30146 67.983 5.75153 69.2687 6.26345 70.532C5.95554 70.6634 5.64609 70.7925 5.33875 70.9252C5.1242 71.0181 5.63429 72.2337 5.84649 72.6938C6.06216 73.1613 6.6448 74.3146 6.86167 74.2237C7.15682 74.0982 7.45582 73.9799 7.75271 73.8582C8.25702 74.8854 8.79078 75.8718 9.35649 76.8176C9.66755 77.2866 9.97861 77.7557 10.2891 78.2234C10.8037 78.9548 11.2239 79.3068 11.5509 79.2787C12.9704 78.0554 14.4178 76.8905 15.8683 75.7302Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                            <div class="position-relative z-2" data-aos="fade-up" data-aos-duration="500"
                                 data-aos-offset="280" data-disable-parallax-down="lg">
                                <div class="card-body pb-lg-5">
                                    <h2>Get the full power of the pack</h2>
                                    <p class="fs-xl text-dark pb-2 pb-sm-3 pb-lg-4">See what's inside</p>
                                    <div class="row row-cols-1 row-cols-sm-2">
                                        <ul class="col list-unstyled pb-1 pb-sm-0 mb-2 mb-sm-0">
                                            <li class="d-flex pb-1 mb-2">
                                                <i class="ai-check text-success fs-lg mt-1 me-2"></i>
                                                Viverra adipiscing ullamcorper
                                            </li>
                                            <li class="d-flex pb-1 mb-2">
                                                <i class="ai-check text-success fs-lg mt-1 me-2"></i>
                                                Et purus quis laoreet ipsum
                                            </li>
                                            <li class="d-flex pb-1 mb-2">
                                                <i class="ai-check text-success fs-lg mt-1 me-2"></i>
                                                Massa non sagittis erat sit
                                            </li>
                                            <li class="d-flex pb-1 mb-2">
                                                <i class="ai-check text-success fs-lg mt-1 me-2"></i>
                                                Ac dui leo adipiscing
                                            </li>
                                            <li class="d-flex">
                                                <i class="ai-check text-success fs-lg mt-1 me-2"></i>
                                                Ipsum sapien et a dolor viverra
                                            </li>
                                        </ul>
                                        <ul class="col list-unstyled mb-0">
                                            <li class="d-flex pb-1 mb-2">
                                                <i class="ai-check text-success fs-lg mt-1 me-2"></i>
                                                Et purus quis laoreet ipsum
                                            </li>
                                            <li class="d-flex pb-1 mb-2">
                                                <i class="ai-check text-success fs-lg mt-1 me-2"></i>
                                                Placerat lorem elit purus
                                            </li>
                                            <li class="d-flex">
                                                <i class="ai-check text-success fs-lg mt-1 me-2"></i>
                                                Massa non sagittis erat sit
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <a class="btn btn-lg btn-primary" href="#">Buy for $10</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-xxl-1">
                        <div class="card h-100 border-0 bg-transparent rounded-0 ps-4 ps-xxl-0">
                            <div class="card-body px-0 pb-lg-5">
                                <h2 class="text-light">Try a <span class="text-warning">free demo</span></h2>
                                <p class="fs-xl text-light pb-2 pb-sm-3 pb-lg-4">See what's inside</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex pb-1 mb-2">
                                        <i class="ai-check text-warning fs-lg mt-1 me-2"></i>
                                        <span class="text-light opacity-70">Viverra adipiscing ullamcorper</span>
                                    </li>
                                    <li class="d-flex pb-1 mb-2">
                                        <i class="ai-check text-warning fs-lg mt-1 me-2"></i>
                                        <span class="text-light opacity-70">Et purus quis laoreet ipsum</span>
                                    </li>
                                    <li class="d-flex pb-1 mb-2">
                                        <i class="ai-check text-warning fs-lg mt-1 me-2"></i>
                                        <span class="text-light opacity-70">Massa non sagittis erat sit</span>
                                    </li>
                                    <li class="d-flex pb-1 mb-2">
                                        <i class="ai-check text-warning fs-lg mt-1 me-2"></i>
                                        <span class="text-light opacity-70">Et purus quis laoreet ipsum</span>
                                    </li>
                                    <li class="d-flex">
                                        <i class="ai-check text-warning fs-lg mt-1 me-2"></i>
                                        <span class="text-light opacity-70">Massa non sagittis erat sit</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body px-0 pt-0" style="flex: 0;"><a class="btn btn-lg btn-light" href="#">Try
                                    for free</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Tools (Integrations) -->
    <section class="position-relative py-5" style="margin-top: -250px;">
        <div style="height: 250px;"></div>
        <div class="bg-secondary position-absolute top-0 start-0 w-100 h-100 d-dark-mode-none"></div>
        <div class="container position-relative z-2 py-2 py-sm-3 py-md-4 py-lg-5 mb-sm-2 mb-md-3 mb-xxl-5 my-xl-4">
            <h2 class="h1 text-center pt-xxl-3 pb-3 mb-lg-4 mx-auto" style="max-width: 850px;">Integrate your favorite
                tools to complete your workflow</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4 pb-xxl-3">
                <div class="col">
                    <div class="card h-100 border-0 rounded-4">
                        <div
                            class="bg-secondary position-absolute top-0 start-0 w-100 h-100 rounded-4 d-none d-dark-mode-block"></div>
                        <div class="card-body position-relative z-2">
                            <img class="d-block mb-4" src="/public/frontend2/img/landing/saas-3/tools/google.svg"
                                 alt="Google">
                            <p class="mb-0">Lorem magnis pretium sed curabitur nunc facilisi nunc cursus sagittis
                                volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 rounded-4">
                        <div
                            class="bg-secondary position-absolute top-0 start-0 w-100 h-100 rounded-4 d-none d-dark-mode-block"></div>
                        <div class="card-body position-relative z-2">
                            <img class="d-block mb-4" src="/public/frontend2/img/landing/saas-3/tools/zoom.svg"
                                 alt="Zoom">
                            <p class="mb-0">In eget a mauris quis. Tortor dui tempus quis integer est sit natoque
                                placerat dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 rounded-4">
                        <div
                            class="bg-secondary position-absolute top-0 start-0 w-100 h-100 rounded-4 d-none d-dark-mode-block"></div>
                        <div class="card-body position-relative z-2">
                            <img class="d-block mb-4" src="/public/frontend2/img/landing/saas-3/tools/slack.svg"
                                 alt="Slack">
                            <p class="mb-0">Donec blandit nulla elementum eu. Est dui nibh eget amet curabitur nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 rounded-4">
                        <div
                            class="bg-secondary position-absolute top-0 start-0 w-100 h-100 rounded-4 d-none d-dark-mode-block"></div>
                        <div class="card-body position-relative z-2">
                            <img class="d-block mb-4" src="/public/frontend2/img/landing/saas-3/tools/gmail.svg"
                                 alt="Gmail">
                            <p class="mb-0">Rutrum interdum tortor, sed at nulla. A cursus bibendum elit purus cras
                                praesent.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 rounded-4">
                        <div
                            class="bg-secondary position-absolute top-0 start-0 w-100 h-100 rounded-4 d-none d-dark-mode-block"></div>
                        <div class="card-body position-relative z-2">
                            <img class="d-block mb-4" src="/public/frontend2/img/landing/saas-3/tools/trello.svg"
                                 alt="Trello">
                            <p class="mb-0">Congue pellentesque amet, viverra curabitur quam diam scelerisque fermentum
                                urna.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 rounded-4">
                        <div
                            class="bg-secondary position-absolute top-0 start-0 w-100 h-100 rounded-4 d-none d-dark-mode-block"></div>
                        <div class="card-body position-relative z-2">
                            <img class="d-block mb-4" src="/public/frontend2/img/landing/saas-3/tools/mailchimp.svg"
                                 alt="Mailchimp">
                            <p class="mb-0">Turpis fermentum, volutpat ultrices sed ultrices proin risus bibendum elit
                                purus.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 rounded-4">
                        <div
                            class="bg-secondary position-absolute top-0 start-0 w-100 h-100 rounded-4 d-none d-dark-mode-block"></div>
                        <div class="card-body position-relative z-2">
                            <img class="d-block mb-4" src="/public/frontend2/img/landing/saas-3/tools/dropbox.svg"
                                 alt="Dropbox">
                            <p class="mb-0">Ut in turpis consequat odio diam lectus elementum. Est faucibus blandit
                                platea.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 rounded-4">
                        <div
                            class="bg-secondary position-absolute top-0 start-0 w-100 h-100 rounded-4 d-none d-dark-mode-block"></div>
                        <div class="card-body position-relative z-2">
                            <img class="d-block mb-4" src="/public/frontend2/img/landing/saas-3/tools/evernote.svg"
                                 alt="Evernote">
                            <p class="mb-0">Arcu, lorem facilisis nunc tellus, molestie urna nam mi, ullamcorper tempus
                                quis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA -->
    <section class="bg-primary pb-2 py-sm-3 py-md-4 py-lg-5">
        <div class="container py-5 my-lg-2 my-xl-4 my-xxl-5">
            <div class="text-center mx-auto" style="max-width: 700px;" data-aos="fade-up" data-aos-duration="500"
                 data-aos-offset="280" data-disable-parallax-down="lg">
                <h2 class="display-3 text-light mb-lg-4">Ready to get started?</h2>
                <p class="h2 text-light mb-4">Organize your tasks with a <span
                        class="text-warning">14-day free trial</span></p>
                <div class="position-relative pt-2 pt-sm-3 pt-md-5">
                    <div data-aos="fade-up" data-aos-duration="800" data-aos-offset="150"
                         data-disable-parallax-down="lg">
                        <a class="btn btn-lg btn-light text-dark" href="#" data-bs-theme="light">Started 14-day free
                            trial</a>
                    </div>
                    <div class="d-none d-md-block position-absolute top-0 end-0 pe-4 me-5 text-warning"
                         data-aos="zoom-in" data-aos-duration="400" data-aos-delay="700" data-aos-offset="280"
                         data-aos-easing="ease-out-back" data-disable-parallax-down="lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="95" height="78" fill="currentColor"
                             fill-rule="evenodd">
                            <path
                                d="M45.912 46.575c.292-.042.598.031.717-.124.396-.515.949-.732 1.432-1.072.593-.418 1.316-.631 1.869-1.068.759-.601 1.564-1.136 2.361-1.63.821-.511 1.549-1.203 2.438-1.595.398-.175.682-.626 1.026-.938.037-.033.13.019.216.036l.121.388c-.497.298-1.076.47-1.438.915-.325.4-.871.331-1.087.699-.26.444-.798.295-.962.706-.194.484-.72.226-.904.629-.221.482-.783.286-1.035.611-.354.456-1.015.374-1.252.807-.321.586-1.099.243-1.26.987-.575.036-.918.551-1.385.809-.528.292-1.13.478-1.558.914-.364.372-.912.375-1.175.748-.244.346-.642.283-.818.57-.237.386-.6.428-.911.619a8.26 8.26 0 0 0-.76.529c-.453.353-.869.799-1.462.879-.137.018-.36.046-.376.148-.1.633-.723.331-.943.747-.251.475-.776.397-1.161.608-.122.067-.334.043-.376.157-.157.427-.601.345-.79.609-.262.363-.655.124-.937.307l-1.287.775-1.166.64-.169-.092-.438.624c-.508-.122-.872-.013-1.125.39-.279.444-.736.226-1.128.21-.45-.018-.454.861-1.113.521-.33-.17-.758.158-1.185.273a2.34 2.34 0 0 1 1.715-1.14c.687-.102 1.047-.943 1.814-.81.235-.503.668-.358 1.099-.257l.288-.804.733.099c.186-.373.415-.671.878-.343l.188-.639c.715-.319 1.539-.442 2.142-1.083.255-.271.572-.473.893-.63l1.8-.908c.621-.392 1.164-1.002 1.94-1.098.126-.015.196-.273.297-.427.123.067.256.195.319.164l1.486-.802c.074-.044.088-.212.13-.322l.351.206.573-.811c.033.022.072.065.101.063.467-.041.707-.594 1.196-.605.06-.001.086-.206.079-.189zm37.775-26.328l-.088-.513.286.132 1.071-1.642c.502-.714 1.045-1.367 1.482-2.172.371-.684.963-1.216 1.191-2.013.216-.753.94-.943 1.004-1.795.62-.364.637-1.324 1.064-1.885.126-.165.166-.396.381-.495s.187-.171.204-.894l.232-.136c.061-.032.185-.039.184-.078-.015-.948.887-1.041.975-1.887.008-.08-.018-.218.016-.238.962-.562 1.136-1.994 1.878-2.791.277-.299.239-.828.491-1.133.108-.131.192-.292.299-.458-.037-.22-.116-.483-.111-.725s.092-.463.168-.801c-.639-.119-1.039.309-1.602.154L93.892.4l-.057-.367c-1.437-.076-1.475-.126-2.636 1.211-.821.946-1.793 1.725-2.31 3.043-.752.568-1.15 1.556-1.72 2.339l-2.203 3.349-2.911 4.06c-.919 1.254-1.922 2.398-2.942 3.528l-1.978 2.329-2.05 2.235c-.505.542-.96 1.18-1.544 1.577-.618.42-.889 1.252-1.495 1.661-.382.258-.621.771-1.118.832-.069.008-.163.017-.191.074-.466.951-1.333 1.317-1.997 1.978-.69.686-1.427 1.306-2.16 1.928-.405.344-.854.609-1.212 1.039-.422.508-1.04.685-1.506 1.143-.575.565-1.219 1.042-1.856 1.496l-1.832 1.386c-1.166.937-2.465 1.646-3.541 2.742-.284.29-.694.324-.998.66-.411.453-1.173.463-1.512.966-.374.555-1.143.291-1.347 1.032-1.023.334-1.764 1.248-2.767 1.632-.298.114-.536.386-.805.579l-.898.627c-.277.18-.714.076-.798.596-.546.097-.921.561-1.398.783-.611.285-1.047.935-1.766.98-.16.666-.944.34-1.133.986-.033.113-.242.111-.369.164-.367.154-.739.252-1.014.643-.236.334-.76.163-1.009.657-.143.285-.616.269-.926.383l-.183.621c-.713-.29-1.035.197-1.299.806-.439-.342-.854-.11-1.037.168-.235.357-.547.412-.849.531-.882.349-1.601 1.058-2.547 1.279-.244.056-.383.467-.566.707-.142-.017-.312-.065-.47-.053-.442.034-.721.452-1.199.485-.396.027-.769.384-1.044.729-.152.19-.284.035-.373.081-.503.258-1.186.11-1.512.797-.082.172-.374.159-.569.231l-4.201 1.555c-.315.118-.66.22-.898.463-.244.25-.592-.144-.807.147-.139.188-.358.283-.571.441-.234.024-.547.002-.819.095l-3.123 1.163c-1.247.598-2.643.689-3.95 1.08-.942.282-2.034.108-3.14.14l-.614.646-.271-.155-.227 1.117 1.759-.041-.102.753-1.008.372-.192.653.968.447-.346.381c.149.771.665 1.076 1.154 1.407l-.061.258 1.093.702c.228-.179.382-.751.914-.495l-.106.449 1.076-.685.11.186-.527.414.877.229-.004-.61.668-.309.043.891.541-.202c1.046-.524 2.285-.415 3.348-.911 1.07-.498 2.224-.797 3.302-1.278.229-.102.554.336.698-.126.044-.143.474-.024.52-.168.166-.518.502.053.746-.066.423-.206.697-.641 1.171-.788l4.207-1.536c.523-.208.979-.586 1.492-.824l1.607-.663c-.908-.005-2.777.723-3.57 1.195l.372-.337-.199-.142 1.757-.636c.863-.231 1.452-1.065 2.361-1.18.164-.457.681-.362.869-.659.3-.473.87-.007 1.172-.505.228-.376.743-.456 1.214-.712l.159-.39-.125-.151-2.727 1.468-.316-.177.146-.493.541.249-.159-.922.286.155.362.086-.091-.449 1.077-.853.449.543.817-.855.445.148.207-1.149.33.215.399-.54-.434-.274-.133.36-.693-.139.057.571-.988-.074c-.23.549-.85.392-1.29.721l-.203.625c-.447-.377-.719.109-1.157.075l-.22-.523.443.216.082-.733.615.426.466-.661c.424.272.624-.046.866-.373.204-.275.504-.436.779-.661l.04-.833.547.718.829-.505c.284-.174.668-.254.828-.548.214-.395.648.177.845-.283.132-.308.519-.407.789-.598l.745.69-.959.227c.01-.03-.037.112-.098.292l.267.222-.061.308c.051.034.128.12.162.103l.814-.423c.303-.122.758-.06.908-.319.229-.392.61-.293.89-.545l.23-.716.7.308c-.753 1.001-1.755 1.437-2.77 2.164.601.017.996-.175 1.352-.382.212-.123.332-.434.613-.507.224-.057.445-.399.611-.315.422.215.318-.321.519-.388.263-.088.538-.158.778-.295.284-.161.527-.408.807-.578.255-.155.496-.306.728-.519.371-.341.928-.396 1.485-.37l-1.073.538c1.102.197 1.556-.784 2.339-.94.047-.318.051-.664.157-.932.053-.135.29-.127.649-.259l-.43.581c.066.037.146.116.182.097.383-.195.837-.19 1.12-.67.208-.354.716-.234 1.02-.629.351-.457.966-.582 1.43-.916l1.369-.989c.639-.543 1.379-.922 2.022-1.459s1.475-.725 1.982-1.504c.255-.392.73-.394 1.057-.745.692-.741 1.547-1.255 2.32-1.885.413-.336.759-.774 1.255-.985.593-.252.856-.757.865-1.51l.387.458.117-.326.191.11c.303-.29.525-.663.84-.765.431-.141.541-.62 1.036-.97.951-.078 1.415-1.482 2.481-1.883l-.243-.983.504.534c.811-.502 1.329-1.181 1.795-1.935l-.134-.363c.182.043.331.116.461.101.172-.021.328-.11.519-.181l.138-.613.861-.317-.056-.584.445.164.31-.884-.246-.876.843.795c.47-.525.832-1.18 1.427-1.579.525-.351.776-1.134 1.291-1.585.284-.249.379-.818.844-.856.041-.512.385-.684.636-.972.314-.359.88-.416.978-.999s.765-.518.725-1.199c.381-.21.566-.709.887-.96.37-.289.609-.637.787-1.118.057-.154.265-.196.459-.327zM.034 61.77c.081.103.272.251.275.361.028 1.161.619 2.101 1.145 3.062.434.791.854 1.633 1.485 2.202 1.17 1.053 2.189 2.506 3.64 2.861.34.82 1.188.365 1.525 1.193.802.183 1.497.862 2.259 1.232l1.422.752c.181.105.399.052.668.079l.624.737 1.181.435.34.818.399.041c.374.438-.075.448-.131.662.486.598 1.063.879 1.696 1.082l.609-1.364-.648-1.757.195-.724c-.387-.801-.508-1.724-1.115-2.452-.292-.349-.51-.811-.895-1.013-.246-.129-.349-.614-.716-.506-.081.024-.319-.45-.492-.687-.344-.471-.809-.678-1.22-.974l-2.994-1.943c-1.014-.526-2.001-1.223-3.064-1.512-.311-.085-.616-.348-.926-.515l-.991-.497.858-1.034.303.422c.812-.42 1.311-1.363 2.11-1.913l-.216-.586 1.632-1.519c.219-.212.656.224.845-.304l-.488-.103c.51-.057.517-1.276 1.359-.527.26-1.198 1.553-1.153 1.647-2.496l.307.179c.398-.43.764-.954 1.233-1.297.486-.357.375-1.188.962-1.623.697-.103 1.341-.622 1.707-1.55l-.135-1.189-.303-.313.182-.617-.976-.239.193-.653-.711-.23c-.158.789-.95.546-1.373 1.074-.594.743-1.454 1.148-2.161 1.76l-2.415 2.246-2.623 2.307c-.748.585-1.338 1.428-2.123 1.97-.115.589-.81.332-.925.92-.773.17-1.117 1.098-1.836 1.371-.143.054-.234.242-.368.332-.599.403-1.132.86-.958 2.038z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Curved edge -->
    <div class="d-flex w-100 justify-content-center overflow-hidden text-primary">
        <svg class="flex-shrink-0" width="3000" height="18" xmlns="http://www.w3.org/2000/svg">
            <polygon fill="currentColor"
                     points="3000,0 3000,12.3 2751,7.2 2460,18 2239,7.2 2017,10.7 1911.5,7.2 1368,18 831,7.2 540,18 319,7.2 97,10.7 0,7.5 0,0 "></polygon>
        </svg>
    </div>

@endsection
