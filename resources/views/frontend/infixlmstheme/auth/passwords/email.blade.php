@extends(theme('auth.layouts.app'))
@section('content')

    <main class="page-wrapper">
        <div class="d-lg-flex position-relative h-100">

            <!-- Home button -->
            <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4"
               href="{{url('/')}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Back to home"
               aria-label="Back to home">
                <i class="ai-home"></i>
            </a>


            <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
                <div class="w-100 mt-auto" style="max-width: 526px;">
                    <h1>{{__('common.Reset Password')}}</h1>

                    @if (session('status'))
                        <span class="text-success text-center p-3 d-block" role="alert">
                                                <strong> {{ session('status') }}</strong>
                                            </span>
                    @endif

                    <form action="{{route('password.email')}}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-12 mb-4">
                                <input type="email"
                                       class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       required
                                       placeholder="{{__('common.Enter Email')}}" name="email" aria-label="Username"
                                       aria-describedby="basic-addon3"
                                       value="{{old('email')}}">
                                <span class="text-danger" role="alert">{{$errors->first('email')}}</span>
                            </div>

                        </div>


                        <div class="col-12 mt_20">
                            @if(saasEnv('NOCAPTCHA_FOR_REG')=='true')
                                @if(saasEnv('NOCAPTCHA_IS_INVISIBLE')=="true")
                                    {!! NoCaptcha::display(["data-size"=>"invisible"]) !!}
                                @else
                                    {!! NoCaptcha::display() !!}
                                @endif

                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-danger"
                                          role="alert">{{$errors->first('g-recaptcha-response')}}</span>s
                                @endif
                            @endif
                        </div>

                        <div class="col-12 mt_20">
                            @if(saasEnv('NOCAPTCHA_FOR_REG')=='true' && saasEnv('NOCAPTCHA_IS_INVISIBLE')=="true")

                                <button type="button" class="g-recaptcha theme_btn text-center w-100 disable_btn"
                                        disabled
                                        data-sitekey="{{saasEnv('NOCAPTCHA_SITEKEY')}}" data-size="invisible"
                                        data-callback="onSubmit"
                                        class="theme_btn text-center w-100">   {{__('common.Register')}}</button>
                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <script>
                                    function onSubmit(token) {
                                        document.getElementById("regForm").submit();
                                    }
                                </script>
                            @else
                                <button id="submitBtn" class="btn btn-lg btn-primary w-100 mb-4"
                                        type="submit">  {{__('common.Send Reset Link')}} </button>
                            @endif

                        </div>

                        <div class="text-center">
                            <a href="{{route('register')}}">{{__('common.Need an account?')}}</a>
                        </div>


                    </form>
                </div>

                <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;"></p>
            </div>


            <!-- Cover image -->
            <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center"
                 style="background-image: url(/public/frontend2/img/account/cover.jpg);"></div>
        </div>
    </main>

@endsection
