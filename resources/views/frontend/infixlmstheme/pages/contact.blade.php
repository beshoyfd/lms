@extends(theme('layouts.master-front'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} | {{__('frontend.Contact Us')}} @endsection
@section('css') @endsection

@section('mainContent')


    <section class="bg-secondary py-5">
        <div class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5">


            <x-breadcrumb :banner="$frontendContent->contact_page_banner" :title="$frontendContent->contact_page_title"
                          :subTitle="$frontendContent->contact_sub_title"/>


            <!-- Page title -->
            <h1 class="display-2">{{__('frontend.Contact Information')}}</h1>
            <p class="fs-lg pb-4 mb-2 mb-sm-3">{{__('frontend.contact_subtitle')}}</p>

            <!-- Details cards -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 g-4 pb-2 pb-sm-4 pb-lg-5">

                <!-- Address -->
                <div class="col">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <h4 class="card-title mb-4">{{__('common.Address')}}</h4>
                            <p class="fs-lg fw-medium pb-3 mb-3">
                                {{Settings('address')}}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <h4 class="card-title mb-4">{{__('common.Phone')}}</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="pb-1 mb-2">
                                    <span class="d-block fs-sm text-body-secondary mb-1">Main office</span>
                                    <a class="nav-link fs-lg p-0" href="tel:{{Settings('phone')}}">{{Settings('phone')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="col">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <h4 class="card-title mb-4">{{__('common.Email')}}</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="pb-1 mb-2">
                                    <span class="d-block fs-sm text-body-secondary mb-1">Main office</span>
                                    <a class="nav-link fs-lg p-0"
                                       href="mailto:{{Settings('email')}}">{{Settings('email')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 250px;"></div>
    </section>


    <!-- Contact form -->
    <section class="container mb-5" style="margin-top: -260px;" data-bs-theme="dark">
        <div class="card border-0 bg-primary position-relative py-lg-4 py-xl-5">

            <!-- Decorative shapes -->
            <svg class="position-absolute end-0 mt-n2" width="242" height="331" viewBox="0 0 242 331" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M172.014 250.127C137.236 227.74 112.349 192.144 144.586 153.591C157.686 137.932 176.759 127.973 196.524 122.046C234.647 110.639 277.027 113.361 313.349 129.576C338.19 140.666 361.129 159.183 369.934 184.502C383.476 223.496 359.75 260.161 321.569 273.118C288.832 284.223 247.685 279.513 214.885 269.837C201.003 265.743 185.745 258.966 172.014 250.127Z"
                    fill="#121519" fill-opacity=".07"></path>
                <path
                    d="M20.3265 69.264C19.7064 43.0736 29.8071 17.1878 62.3851 19.8622C75.6229 20.9505 87.9525 27.2066 98.3563 35.3132C118.426 50.9253 132.424 73.896 136.952 98.6413C140.044 115.562 138.424 134.218 127.978 148C111.901 169.236 83.4531 170.283 62.5246 155.209C44.5807 142.281 32.0983 119.217 25.3391 98.6799C22.4836 89.9885 20.5616 79.6021 20.3265 69.264Z"
                    fill="#121519" fill-opacity=".07"></path>
            </svg>
            <svg class="position-absolute start-0 bottom-0 ms-3" width="169" height="217" viewBox="0 0 169 217"
                 fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M34.2574 90.0177C29.666 97.6253 26.6254 106.591 24.9502 114.96C19.9522 140.043 26.4112 168.792 49.6162 181.885C66.0705 191.17 91.0017 189.904 108.062 183.692C125.725 177.266 135.045 168.04 142.29 150.389C151.409 128.174 150.912 99.6904 125.93 91.6429C115.423 88.254 104.723 86.5065 94.2249 82.5889C84.6622 79.0248 74.8545 72.1766 64.4411 71.6149C50.8011 70.8777 40.9122 79.0146 34.2574 90.0177Z"
                    fill="#121519" fill-opacity="0.07"></path>
                <path
                    d="M147.005 75.6331C152.135 70.7783 156.106 64.2374 159.153 57.9073C166.014 43.6372 174.127 22.1368 160.207 9.68505C152.924 3.17188 139.243 3.86644 130.324 5.29774C118.428 7.20428 107.295 8.85077 96.5031 14.783C85.8056 20.6599 79.0155 33.6997 77.0014 45.6686C75.4978 54.5776 79.63 63.6672 84.7391 70.7453C91.8208 80.5571 103.503 84.2003 114.817 84.3975C121.101 84.5081 127.716 84.0527 133.89 82.8121C138.932 81.7962 143.273 79.1597 147.005 75.6331Z"
                    fill="#121519" fill-opacity="0.07"></path>
            </svg>
            <div class="card-body position-relative z-2 py-5">
                <form class="mx-auto"
                      style="max-width: 800px;"
                      action="{{route('contactMsgSubmit')}}"
                      method="post">
                    @csrf
                    <h2 class="h1 card-title text-center pb-4">{{__('frontend.Send Us Message')}}</h2>
                    <div class="row g-4">
                        <div class="col-sm-12">
                            <label class="form-label fs-base" for="name">{{__('frontend.Name')}}</label>
                            <input
                                value="{{old('name')}}"
                                name="name"
                                class="form-control form-control-lg" type="text"
                                placeholder="{{__('frontend.Enter Name')}}" required
                                id="name">
                            <span class="text-danger"
                                  role="alert">{{$errors->first('name')}}</span>
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label fs-base" for="email">{{__('frontend.Email')}}</label>
                            <input
                                name="email"
                                placeholder="{{__('frontend.Type e-mail address')}}"
                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = '{{__('frontend.Type e-mail address')}}'"
                                class="form-control form-control-lg" type="email"
                                required id="email">
                            <span class="text-danger"
                                  role="alert">{{$errors->first('email')}}</span>
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label fs-base" for="subject">{{__('frontend.Subject')}}</label>
                            <input
                                placeholder="{{__('frontend.Enter your subject')}}"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = '{{__('frontend.Enter your subject')}}'"
                                class="form-control form-control-lg" type="text"
                                name="subject" required
                                id="subject">
                            <span class="text-danger"
                                  role="alert">{{$errors->first('subject')}}</span>
                        </div>


                        <div class="col-sm-12">
                            <label class="form-label fs-base" for="subject">{{__('frontend.Message')}}</label>
                            <textarea  class="form-control form-control-lg" required class="primary_textarea mb-0" name="message"
                                      placeholder="{{__('frontend.Write your message')}}"
                                      onfocus="this.placeholder = ''"
                                      onblur="this.placeholder = '{{__('frontend.Write your message')}}'"
                            >{{old('message')}}</textarea>
                            <span class="text-danger"
                                  role="alert">{{$errors->first('message')}}</span>
                        </div>


                        <div class="col-12 mt_10 mb_20">


                            @if(saasEnv('NOCAPTCHA_FOR_CONTACT')=='true')
                                <input type="hidden" name="hasCaptcha"
                                       value="{{saasEnv('NOCAPTCHA_FOR_CONTACT')}}">
                                @if(saasEnv('NOCAPTCHA_IS_INVISIBLE')=="true")
                                    {!! NoCaptcha::display(["data-size"=>"invisible"]) !!}
                                    {!! NoCaptcha::renderJs() !!}
                                @else
                                    {!! NoCaptcha::display() !!}
                                    {!! NoCaptcha::renderJs() !!}
                                @endif

                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-danger"
                                          role="alert">{{$errors->first('g-recaptcha-response')}}</span>
                                @endif
                            @endif


                        </div>


                        <div class="col-lg-12 text-start">
                            <div class="alert-msg"></div>


                            @if(saasEnv('NOCAPTCHA_FOR_CONTACT')=='true' && saasEnv('NOCAPTCHA_IS_INVISIBLE')=="true")
                                <button type="button"
                                        class="g-recaptcha theme_btn small_btn submit-btn w-100 text-center"
                                        data-sitekey="{{saasEnv('NOCAPTCHA_SITEKEY')}}"
                                        data-size="invisible"
                                        data-callback="onSubmit"
                                >
                                    {{__('frontend.Send Message')}}
                                </button>

                                <script src="https://www.google.com/recaptcha/api.js"
                                        async
                                        defer></script>
                                <script>
                                    function onSubmit(token) {
                                        document.getElementById("myForm").submit();
                                    }
                                </script>
                            @else

                                <div class="col-sm-12 text-center pt-4">
                                    <button class="btn btn-lg btn-light"
                                            type="submit">  {{__('frontend.Send Message')}}</button>
                                </div>
                            @endif

                        </div>


                    </div>
                </form>
            </div>
        </div>
    </section>


@endsection

