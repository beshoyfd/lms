@extends(theme('layouts.master-front'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} | {{__('frontendmanage.Home')}} @endsection

@section('mainContent')


    <section class="bg-secondary py-5">
        <div class="container text-center pt-5 mt-lg-4 mt-xl-5">
            <div class="position-relative mx-auto my-3" style="max-width: 850px;">
                <h1 class="display-3 position-relative z-2 mb-0">{{__('Top Demanded Programs in one Place')}}</h1>
                <div class="text-warning position-absolute top-0 start-50 translate-middle-x w-100 mt-md-3">
                    <svg width="608" height="66" viewBox="0 0 608 66" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path opacity=".35"
                              d="M45.66 63.0651C48.1682 62.8708 50.692 62.5736 53.2046 62.482C55.5493 62.3949 57.8918 62.3033 60.232 62.2161C73.0671 61.7358 85.8977 61.1192 98.7394 60.9293C112.169 60.7304 125.603 60.402 139.035 60.3663C152.743 60.3328 166.446 60.2747 180.152 60.3417C206.867 60.4757 231.522 59.2366 258.233 59.3013C290.201 57.8797 306.797 56.9045 334.904 55.6546C348.07 55.5876 361.243 55.2681 374.408 55.0111C387.336 54.7632 399.538 53.6311 412.46 53.1396C415.299 53.0323 418.137 52.8201 420.972 52.6548C423.774 52.4894 426.583 52.3576 429.383 52.1432C436.572 51.5913 444.461 51.7091 451.639 51.0545C464.138 49.9061 476.595 48.378 489.11 47.4218C502.221 46.4209 515.361 45.8534 528.486 45.0379C534.408 44.6715 540.366 44.2135 546.249 43.4048C552.974 42.4865 559.639 41.3762 566.288 39.991C572.715 38.6505 579.137 37.2743 585.567 35.9584C588.655 35.3261 591.757 34.7497 594.873 34.2984C598.4 33.7868 601.894 33.2618 605.377 32.5044C607.052 32.138 607.381 29.8927 607.381 28.4494C607.388 27.6273 607.258 26.8297 606.995 26.0567C606.749 25.4065 606.232 24.3676 605.377 24.3967C599.094 24.6089 592.816 24.8234 586.535 25.1205C580.2 25.4177 573.853 25.6009 567.51 25.6903C555.192 25.8578 542.852 25.4311 530.548 24.9172C532.645 24.6335 534.742 24.3498 536.839 24.0638C544.371 23.0361 551.882 21.7448 559.453 21.0522C563.482 20.6813 567.524 20.373 571.541 19.8971C573.579 19.6581 575.599 19.381 577.614 18.9744C579.777 18.5365 581.91 17.9378 584.036 17.339C584.719 17.2653 585.234 16.9212 585.587 16.3158C586.213 15.4489 586.5 14.2872 586.608 13.1746C588.761 12.511 589.194 9.31622 589.194 7.39709C589.207 6.20853 589.022 5.05348 588.635 3.93417C588.261 2.94892 587.55 1.55034 586.297 1.53694C579.758 1.46321 573.23 1.01862 566.691 0.938188C565.93 0.931485 565.163 0.927017 564.397 0.927017C558.77 0.927017 553.155 1.17501 547.535 1.47885C535.016 2.1558 522.495 2.96679 509.989 3.87832C504.175 4.29834 498.369 4.79655 492.551 5.15178C485.435 5.58297 478.335 5.91139 471.212 6.19066C459.296 6.65536 447.361 6.83632 435.438 7.05527C421.763 7.3122 408.106 7.67189 394.447 8.31756C381.795 8.91631 369.155 9.7139 356.512 10.4757C343.816 11.2354 331.122 11.9905 318.427 12.7613C305.415 13.5499 292.394 14.1353 279.373 14.7206C272.783 15.02 266.185 15.1071 259.593 15.297C253.354 15.4758 247.107 15.5227 240.864 15.6143C228.574 15.7952 216.287 15.9069 203.998 16.0343C179.21 16.2867 154.428 16.6934 129.642 17.1067C116.025 17.3346 102.412 17.587 88.7943 17.8439C81.8486 17.9758 74.9007 18.2506 67.9594 18.4539C62.0236 18.6259 56.0901 19.0303 50.1565 19.3364C43.8406 19.6625 37.5247 20.0222 31.2089 20.3886C27.4542 20.6076 23.6952 20.8332 19.9362 21.0522C18.3053 21.1505 16.67 21.2443 15.0346 21.3426C13.5474 21.4297 12.0579 21.5415 10.5729 21.6554C9.51432 21.7358 8.47346 21.89 7.42818 22.0687C6.26798 22.2631 5.11442 22.7859 4.00063 23.1657C3.33545 23.7019 2.87138 24.381 2.61503 25.2099C2.24156 26.3002 2.05814 27.4217 2.0714 28.5768C2.05814 29.7341 2.24156 30.8556 2.61503 31.9459C2.81834 32.3569 3.02165 32.768 3.22496 33.1769C3.60506 33.8292 4.15974 34.1979 4.88901 34.2783C6.1818 34.6492 7.4547 35.0156 8.78063 35.2367C9.50548 35.1563 10.0602 34.7922 10.4381 34.142C10.5817 33.9432 10.7077 33.7309 10.8182 33.5075C11.5121 33.4896 12.2082 33.4919 12.9043 33.4919C13.5695 33.4919 14.2369 33.4874 14.9043 33.4718C16.407 33.4383 17.9053 33.4003 19.4058 33.3645C23.2709 33.2729 27.136 33.1791 31.0011 33.0875C35.1889 32.987 39.3766 32.911 43.5622 32.8373C43.129 32.8753 42.6981 32.9132 42.265 32.9467C32.3735 33.7242 22.4886 34.5062 12.606 35.3931C11.0038 35.5741 9.79056 36.3784 8.95301 37.806C7.71768 39.5129 7.04366 41.7135 6.70996 43.9231C4.97299 43.9075 3.2338 43.8873 1.49682 43.8739C0.28359 43.865 0.0449219 46.0031 0.0449219 46.8252C0.0449219 47.6608 0.28359 49.7564 1.50345 49.7698C3.1675 49.7855 4.83376 49.8145 6.49781 49.8369C6.64146 51.6934 7.01272 53.5098 7.62265 55.2882C8.06905 56.1908 8.51545 57.0934 8.96184 57.9937C9.79719 59.4213 15.9944 65.1786 17.5966 65.3596C26.9466 64.5218 36.3011 63.789 45.66 63.0651Z"></path>
                    </svg>
                </div>
            </div>
            <p class="fs-lg pb-3 mb-2 mb-sm-3 mb-lg-4 mx-auto" style="max-width: 640px;">{{__('Our development team has been
                working around the clock to browse the market and conclude the most
                wanted professional courses.')}}</p>
            <a class="btn btn-lg btn-primary" href="{{route('courses')}}">{{__('Explore Courses')}}</a>
        </div>
    </section>


    <!-- Curved edge -->
    <div class="d-flex w-100 justify-content-center overflow-hidden" style="color: var(--ar-gray-100);">
        <svg class="flex-shrink-0" width="3000" height="18" xmlns="http://www.w3.org/2000/svg">
            <polygon fill="currentColor"
                     points="3000,0 3000,12.3 2751,7.2 2460,18 2239,7.2 2017,10.7 1911.5,7.2 1368,18 831,7.2 540,18 319,7.2 97,10.7 0,7.5 0,0 "></polygon>
        </svg>
    </div>

    <div class="container py-5">
        <div class="row text-center">
            <div class="col-md-3 col-6 ">
                <div class="counter-box p-4">
                    <i class="fas fa-book fa-2x mb-3 icons icons_1"></i>
                    <h3 class="counter" data-count="77">0</h3>
                    <p class="text-muted">Online Courses</p>
                </div>
            </div>
            <div class="col-md-3 col-6 ">
                <div class="counter-box p-4">
                    <i class="fas fa-user-graduate fa-2x mb-3 icons icons_2"></i>
                    <h3 class="counter" data-count="18361">0</h3>
                    <p class="text-muted">Student Enrolled</p>
                </div>
            </div>
            <div class="col-md-3 col-6 ">
                <div class="counter-box p-4">
                    <i class="fas fa-globe fa-2x mb-3 icons icons_3"></i>
                    <h3 class="counter" data-count="97">0</h3>
                    <p class="text-muted">Countries Student</p>
                </div>
            </div>
            <div class="col-md-3 col-6 ">
                <div class="counter-box p-4">
                    <i class="fas fa-heart fa-2x mb-3 icons icons_4"></i>
                    <h3 class="counter" data-count="678">0</h3>
                    <p class="text-muted">Positive Feedback</p>
                </div>
            </div>
        </div>
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

    @if($homeContent->show_testimonial_section==1)
        <x-home-page-testimonial-section :homeContent="$homeContent"/>
    @endif


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



    <!-- Benefits -->
    <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
        <h2 class="h1 text-center pb-3 pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-md-3 mt-lg-0 mb-3 mb-lg-4">{{__('Our benefits')}}</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-4 gy-sm-5 gx-4 pb-3 pb-md-4 pb-lg-5 mb-md-3 mb-lg-0">

            <!-- Item -->
            <div class="col text-center">
                <div class="ratio ratio-1x1 position-relative mx-auto mb-3 mb-sm-4" style="width: 68px;">
                    <i class="ai-dollar text-primary fs-1 d-flex align-items-center justify-content-center position-absolute start-0"></i>
                    <svg class="position-absolute top-0 start-0 text-primary" width="68" height="68" viewBox="0 0 68 68"
                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M56.0059 60.5579C44.1549 78.9787 18.0053 58.9081 6.41191 46.5701C-2.92817 35.5074 -2.81987 12.1818 11.7792 3.74605C30.0281 -6.79858 48.0623 7.40439 59.8703 15.7971C71.6784 24.1897 70.8197 37.5319 56.0059 60.5579Z"
                            fill-opacity="0.1"></path>
                    </svg>
                </div>
                <h3 class="h4 pb-2 mb-1">{{__('Money Guaranteed')}}</h3>
                <p class="fs-sm mb-0">{{__('Our payment policy ensures money refund within a specific duration if requested')}}</p>
            </div>

            <!-- Item -->
            <div class="col text-center">
                <div class="ratio ratio-1x1 position-relative mx-auto mb-3 mb-sm-4" style="width: 68px;">
                    <i class="ai-file text-primary fs-1 d-flex align-items-center justify-content-center position-absolute start-0"></i>
                    <svg class="position-absolute top-0 start-0 text-primary" width="68" height="68" viewBox="0 0 68 68"
                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M65.0556 29.2672C75.4219 46.3175 48.5577 59.7388 33.8299 64.3181C21.0447 67.5599 1.98006 58.174 0.888673 42.8524C-0.475555 23.7004 18.3473 14.5883 29.9289 8.26059C41.5104 1.93285 52.0978 7.9543 65.0556 29.2672Z"
                            fill-opacity="0.1"></path>
                    </svg>

                </div>
                <h3 class="h4 pb-2 mb-1">{{__('Global Accreditation')}}</h3>
                <p class="fs-sm mb-0">{{__('Our partners of success are all globally identified as masters in their fields')}}</p>
            </div>

            <!-- Item -->
            <div class="col text-center">
                <div class="ratio ratio-1x1 position-relative mx-auto mb-3 mb-sm-4" style="width: 68px;">
                    <i class="ai-clock text-primary fs-2 d-flex align-items-center justify-content-center position-absolute start-0"></i>
                    <svg class="position-absolute top-0 start-0 text-primary" width="68" height="68" viewBox="0 0 68 68"
                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.61057 18.2783C10.8205 -1.22686 39.549 7.51899 53.3869 14.3301C64.8949 20.7749 72.2705 40.7038 62.5199 52.5725C50.3318 67.4085 30.4034 61.0689 17.6454 57.6914C4.88745 54.314 1.3482 42.6597 6.61057 18.2783Z"
                            fill-opacity="0.1"></path>
                    </svg>
                </div>
                <h3 class="h4 pb-2 mb-1">{{__('Flexibility in Learning')}}</h3>
                <p class="fs-sm mb-0">{{__('Flexibility what distinguishes us! Choose your option to learn whenever and wherever you are')}}</p>
            </div>

            <!-- Item -->
            <div class="col text-center">
                <div class="ratio ratio-1x1 position-relative mx-auto mb-3 mb-sm-4" style="width: 68px;">
                    <i class="ai-phone text-primary fs-2 d-flex align-items-center justify-content-center position-absolute start-0"></i>
                    <svg class="position-absolute top-0 start-0 text-primary" width="68" height="68" viewBox="0 0 68 68"
                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.34481 53.5078C-7.24653 42.4218 11.4487 18.9206 22.8702 8.55583C33.0946 0.223307 54.3393 0.690942 61.7922 14.1221C71.1082 30.9111 57.886 47.1131 50.0546 57.7358C42.2233 68.3586 30.084 67.3653 9.34481 53.5078Z"
                            fill-opacity="0.1"></path>
                    </svg>
                </div>
                <h3 class="h4 pb-2 mb-1">{{__('Online support')}}</h3>
                <p class="fs-sm mb-0">{{__('Our online support is available around the clock, ensuring that you can get help whenever you need it, no matter the time or day.')}}</p>
            </div>
        </div>
    </section>




    <x-home-page-faq :homeContent="$homeContent"/>




    <!-- CTA -->
    <section class="bg-primary py-5" data-bs-theme="dark">
        <div class="container pt-lg-2 pt-xl-4 pt-xxl-5 pb-1 pb-sm-3">
            <div class="row pt-sm-3 pt-md-4">
                <div class="col-md-6 col-xl-5 offset-xl-1">
                    <h2 class="display-3">Ready to take your business to the next level?</h2>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1">
                    <form action="{{route('subscribe')}}"
                          method="POST">
                        @csrf
                        <p class="text-body fs-xl pb-4 mb-2 mb-lg-3">Massa velitienes semper faucibus tristique id nibh
                            elementum, id eu aliquamd diam mi tempus at laciniarty scelerisques augue at morbi. Arcu sit
                            orcirs, risus mattissit laoreet.</p>
                        <div class="input-group">
                            <span class="input-group-text text-body-secondary">
                              <i class="ai-mail"></i>
                            </span>
                            <input class="form-control" placeholder="{{__('frontend.Enter e-mail Address')}}"
                                     type="email" value="{{old('email')}}">
                            <button class="btn btn-warning" type="submit">{{__('frontend.Subscribe Now')}}</button>
                        </div>
                        @if(isset($errors) && $errors->any())
                            <span class="text-danger" role="alert">{{$errors->first('email')}}</span>
                        @endif
                    </form>
                </div>
            </div>
            <div class="d-none d-md-block text-center mt-n5">
                <svg class="text-warning ms-lg-5" width="171" height="97" viewBox="0 0 171 97" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M169.319 54.333C162.404 55.9509 155.712 58.0764 149.09 60.6764L149.07 60.6761C148.967 60.7158 148.863 60.7554 148.76 60.7951C147.3 61.3811 148.325 63.4238 149.672 63.2067C154.548 62.4134 159.994 59.8725 164.87 59.0792C148.278 73.1339 129.684 89.2549 107.779 92.6402C85.6981 96.0539 65.5665 86.7839 56.8768 66.9865C70.9662 55.0671 79.2106 35.6614 79.0299 17.6457C78.9484 10.3157 76.1485 -3.36373 65.7068 1.21851C55.8557 5.53146 52.0466 22.5213 50.5736 31.7739C48.7364 43.2858 49.7593 55.5291 53.8643 66.2014C52.787 67.0812 51.6907 67.8989 50.5755 68.6546C40.6328 75.3851 27.1039 78.8929 16.4487 72.0362C2.91045 63.3259 1.93984 44.9485 1.56902 30.4091C1.54778 29.6265 0.359869 29.6092 0.360624 30.3915C0.322634 44.0809 0.835929 59.065 10.5664 69.6857C18.5722 78.4182 30.4315 79.7753 41.3346 75.9924C46.2437 74.2834 50.7739 71.7557 54.8581 68.6348C59.9738 80.2586 68.9965 89.6956 82.2735 93.7393C113.474 103.223 141.744 83.0494 164.903 63.697L161.901 71.0334C161.267 72.5887 163.76 73.2736 164.393 71.7389C165.986 67.8713 167.569 63.9933 169.152 60.1359C169.288 60.0247 169.695 58.6127 169.821 58.491C170.122 57.1161 169.152 60.1359 169.851 58.4169C170.189 57.6087 170.517 56.79 170.855 55.9818C171.248 54.9994 170.185 54.1192 169.319 54.333ZM54.3624 59.8578C51.4872 49.1623 51.6051 37.5841 54.2025 26.8039C55.5185 21.3369 57.4405 15.8066 60.1572 10.8541C61.2311 8.89354 62.5139 6.77134 64.2307 5.31421C69.4231 0.902277 74.3649 4.80357 75.8002 10.4446C80.5272 28.9489 70.1806 51.6898 55.8431 64.5114C55.2971 63.0109 54.793 61.4698 54.3624 59.8578Z"></path>
                </svg>
            </div>
        </div>
    </section>


@endsection
