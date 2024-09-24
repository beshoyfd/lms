@extends(theme('auth.layouts.app'))
@section('content')

    <main class="page-wrapper">
        <div class="d-lg-flex position-relative h-100">

            <!-- Home button -->
            <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4"
               href="{{url('/')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="{{__('Back to home')}}"
               aria-label="{{__('Back to home')}}">
                <i class="ai-home"></i>
            </a>

            <!-- Sign in form -->
            <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img style="width: 190px" src="{{asset(Settings('logo') )}} " alt="">
                    </a>
                </div>
                <div class="w-100 mt-auto" style="max-width: 526px;">
                    <h1>{{__('Sign in to JOY Of Learning')}}</h1>

                    @if(Settings('student_reg')==1 && saasPlanCheck('student')==false)
                        <p class="pb-3 mb-3 mb-lg-4">{{__("frontend.Don’t have an account")}}?<a
                                href="{{route('register')}}">
                                {{__('common.Register')}}
                            </a>
                        </p>
                    @endif

                    <form action="{{route('login')}}" method="POST" class="needs-validation" novalidate id="loginForm">
                        @csrf

                        <div class="pb-3 mb-3">
                            <div class="position-relative">
                                <i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                <input
                                    class="form-control form-control-lg ps-5 {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    type="email"
                                    value="{{old('email')}}"
                                    placeholder="{{__('common.Enter Email')}}"
                                    name="email"
                                    required>
                            </div>
                            @if($errors->first('email'))
                                <span class="text-danger" role="alert">{{$errors->first('email')}}</span>
                            @endif
                        </div>

                        <div class="mb-4">
                            <div class="position-relative">
                                <i class="ai-lock-closed fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                <div class="password-toggle">
                                    <input class="form-control form-control-lg ps-5" type="password"
                                           placeholder="{{__('common.Enter Password')}}"
                                           name="password"
                                           required>
                                    <label class="password-toggle-btn" aria-label="Show/hide password">
                                        <input class="password-toggle-check" type="checkbox"><span
                                            class="password-toggle-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            @if($errors->first('password'))
                                <span class="text-danger" role="alert">{{$errors->first('password')}}</span>
                            @endif
                        </div>

                        <div class="col-12 mt_20">
                            @if(saasEnv('NOCAPTCHA_FOR_LOGIN')=='true')
                                @if(saasEnv('NOCAPTCHA_IS_INVISIBLE')=="true")
                                    {!! NoCaptcha::display(["data-size"=>"invisible"]) !!}
                                @else
                                    {!! NoCaptcha::display() !!}
                                @endif

                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-danger"
                                          role="alert">{{$errors->first('g-recaptcha-response')}}</span>
                                @endif
                            @endif
                        </div>

                        <div class="d-flex flex-wrap align-items-center justify-content-between pb-4">
                            <div class="form-check my-1">
                                <input type="checkbox" name="remember"
                                       {{ old('remember') ? 'checked' : '' }} value="1">
                                <label class="form-check-label ms-1"
                                       for="keep-signedin">{{__('common.Remember Me')}}</label>
                            </div>
                            <a class="fs-sm fw-semibold text-decoration-none my-1"
                               href="{{route('SendPasswordResetLink')}}" >{{__('common.Forgot Password ?')}}</a>
                        </div>

                        @if(saasEnv('NOCAPTCHA_FOR_LOGIN')=='true' && saasEnv('NOCAPTCHA_IS_INVISIBLE')=="true")

                            <button type="button" class="g-recaptcha theme_btn text-center w-100"
                                    data-sitekey="{{saasEnv('NOCAPTCHA_SITEKEY')}}" data-size="invisible"
                                    data-callback="onSubmit"
                                    class="theme_btn text-center w-100"> {{__('common.Login')}}</button>
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                            <script>
                                function onSubmit(token) {
                                    document.getElementById("loginForm").submit();
                                }
                            </script>
                        @else
                            <button class="btn btn-lg btn-primary w-100 mb-4"
                                    type="submit">{{__('common.Login')}}</button>
                    @endif


                    <!-- Sign in with social account -->
                        <h2 class="h6 text-center pt-3 pt-lg-4 mb-4">{{__('Or sign in with your social account')}}</h2>
                        <div class="row row-cols-1 row-cols-sm-2 gy-3">
                            <div class="col">
                                <a class="btn btn-icon btn-outline-secondary btn-google btn-lg w-100" href="#">
                                    <i class="ai-google fs-xl me-2"></i>
                                    Google
                                </a>
                            </div>
                            <div class="col">
                                <a class="btn btn-icon btn-outline-secondary btn-facebook btn-lg w-100" href="#">
                                    <i class="ai-facebook fs-xl me-2"></i>
                                    Facebook
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Copyright -->
                <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;"></p>
            </div>

            <!-- Cover image -->
            <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center"
                 style="background-image: url(/public/frontend2/img/account/cover.jpg);"></div>
        </div>
    </main>

@endsection
