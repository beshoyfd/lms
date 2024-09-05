@php use Modules\StudentSetting\Entities\Institute; @endphp
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

            <!-- Sign up form -->
            <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
                <div class="w-100 mt-auto" style="max-width: 526px;">
                    <h1>{{__('common.Sign Up Details')}}</h1>
                    <p class="pb-3 mb-3 mb-lg-4">Have an account already?&nbsp;&nbsp;<a href="{{route('login')}}">Sign
                            in here!</a></p>
                    <form action="{{route('register')}}" method="POST" id="regForm" novalidate>
                        @csrf
                        <div class="row">

                            @if($custom_field->show_name)
                                <div class="col-12 mb-4">
                                    <input type="text" class="form-control form-control-lg"
                                           placeholder="{{__('student.Enter Full Name')}} {{ $custom_field->required_name ? '*' : ''}}"
                                           {{ $custom_field->required_name ? 'required' : ''}} aria-label="Username"
                                           name="name" value="{{old('name')}}">
                                    <span class="text-danger" role="alert">{{$errors->first('name')}}</span>
                                </div>
                            @endif

                            <div class="col-6 mb-4">
                                <input type="email" class="form-control form-control-lg" required
                                       placeholder="{{__('common.Enter Email')}} *" aria-label="email" name="email"
                                       value="{{old('email')}}">
                                <span class="text-danger" role="alert">{{$errors->first('email')}}</span>
                            </div>


                            @if($custom_field->show_phone)
                                <div class="col-6 mb-4">
                                    <input type="text" class="form-control form-control-lg"
                                           placeholder="{{__('common.Enter Phone Number')}} {{ $custom_field->required_phone ? '*' : ''}}"
                                           {{ $custom_field->required_phone ? 'required' : ''}}
                                           aria-label="phone" name="phone" value="{{old('phone')}}">
                                    <span class="text-danger" role="alert">{{$errors->first('phone')}}</span>
                                </div>
                            @endif

                            @if($custom_field->show_dob)
                                <div class="col-12 mb-4">
                                    <input id="dob" type="text" class="form-control form-control-lg datepicker w-100"
                                           width="300"
                                           placeholder="{{__('common.Date of Birth')}} {{ $custom_field->required_dob ? '*' : ''}}"
                                           {{ $custom_field->required_dob ? 'required' : ''}} aria-label="Username"
                                           name="dob" value="{{ old('dob') }}">
                                    <span class="text-danger" role="alert">{{$errors->first('name')}}</span>
                                </div>
                            @endif



                            @if($custom_field->show_company)
                                <div class="col-12 mb-4">
                                    <input type="text" class="form-control form-control-lg"
                                           placeholder="{{__('common.Enter Company')}} {{ $custom_field->required_company ? '*' : ''}}"
                                           {{ $custom_field->required_company ? 'required' : ''}} aria-label="email"
                                           name="company" value="{{old('company')}}">
                                    <span class="text-danger" role="alert">{{$errors->first('company')}}</span>
                                </div>
                            @endif

                            @if($custom_field->show_identification_number)
                                <div class="col-12 mb-4">
                                    <input type="text" class="form-control form-control-lg"
                                           placeholder="{{__('common.Enter Identification Number')}} {{ $custom_field->required_identification_number ? '*' : ''}}"
                                           {{ $custom_field->required_identification_number ? 'required' : ''}}
                                           aria-label="email" name="identification_number"
                                           value="{{old('identification_number')}}">
                                    <span class="text-danger"
                                          role="alert">{{$errors->first('identification_number')}}</span>
                                </div>
                            @endif

                            @if($custom_field->show_job_title)
                                <div class="col-12 mb-4">
                                    <input type="text" class="form-control form-control-lg"
                                           placeholder="{{__('common.Enter Job Title')}} {{ $custom_field->required_job_title ? '*' : ''}}"
                                           {{ $custom_field->required_job_title ? 'required' : ''}} aria-label="email"
                                           name="job_title" value="{{old('job_title')}}">
                                    <span class="text-danger" role="alert">{{$errors->first('job_title')}}</span>
                                </div>
                            @endif

                            @if($custom_field->show_gender)
                                <div class="col-xl-12">
                                    <div class="short_select mt-3">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <h5 class="mr_10 font_16 f_w_500 mb-0">{{ __('common.choose_gender') }} {{ $custom_field->required_gender ? '*' : '' }}</h5>
                                            </div>
                                            <div class="col-xl-7">
                                                <select class="small_select w-100"
                                                        name="gender" {{ $custom_field->required_gender ? 'selected' : '' }}>
                                                    {{--                                                <option value="" data-display="Choose">{{__('common.Choose')}}</option>--}}
                                                    <option value="male">{{__('common.Male')}}</option>
                                                    <option value="female">{{__('common.Female')}}</option>
                                                    <option value="other">{{__('common.Other')}}</option>
                                                </select>

                                            </div>
                                        </div>
                                        <span class="text-danger" role="alert">{{$errors->first('gender')}}</span>
                                    </div>
                                </div>
                            @endif

                            @if($custom_field->show_student_type)
                                <div class="col-xl-12">
                                    <div class="short_select mt-3">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <h5 class="mr_10 font_16 f_w_500 mb-0">{{ __('common.choose_student_type') }} {{ $custom_field->required_student_type ? '*' : '' }}</h5>
                                            </div>
                                            <div class="col-xl-7">
                                                <select class="small_select w-100"
                                                        name="student_type" {{ $custom_field->required_student_type ? 'selected' : '' }}>
                                                    <option value="personal">{{__('common.Personal')}}</option>
                                                    <option value="corporate">{{__('common.Corporate')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <span class="text-danger" role="alert">{{$errors->first('student_type')}}</span>
                                    </div>
                                </div>
                            @endif

                            @if($custom_field->show_institute)
                                <div class="col-xl-12">
                                    <div class="short_select mt-3">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <h5 class="mr_10 font_16 f_w_500 mb-0">{{ __('common.choose_institute') }} {{ $custom_field->required_institute ? '*' : '' }}</h5>
                                            </div>
                                            <div class="col-xl-7">
                                                <select class="small_select w-100"
                                                        name="institute_id">
                                                    <option
                                                        value="">{{__('common.select_one')}}</option>
                                                    @foreach(Institute::where('status',1)->get() as $institute)
                                                        <option value="{{$institute->id}}">
                                                            {{$institute->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <span class="text-danger" role="alert">{{$errors->first('institute_id')}}</span>

                                    </div>
                                </div>
                            @endif

                        </div>
                        <div class="password-toggle mb-4">
                            <input class="form-control form-control-lg" type="password"
                                   name="password"
                                   placeholder="{{__('frontend.Enter Password')}} *"
                                   required>
                            <span class="text-danger" role="alert">{{$errors->first('password')}}</span>
                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                <input class="password-toggle-check" type="checkbox">
                                <span class="password-toggle-indicator"></span>
                            </label>
                        </div>
                        <div class="password-toggle mb-4">
                            <input class="form-control form-control-lg" type="password"
                                   name="password_confirmation"
                                   placeholder="{{__('common.Enter Confirm Password')}} *"
                                   required>
                            <span class="text-danger"
                                  role="alert">{{$errors->first('password_confirmation')}}</span>
                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                <input class="password-toggle-check" type="checkbox">
                                <span class="password-toggle-indicator"></span>
                            </label>
                        </div>

                        <div class="pb-4">
                            <div class="form-check my-2">
                                <input class="form-check-input" type="checkbox" required id="terms">
                                <label class="form-check-label ms-1"
                                       for="terms">{{__('frontend.By signing up, you agree to')}} <a
                                        href="{{url('terms')}}">{{__('frontend.Terms of Service')}} </a></label>
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
                                        type="submit"> {{__('common.Register')}}</button>
                            @endif

                        </div>


                        <!-- Sign in with social account -->
                        <h2 class="h6 text-center pt-3 pt-lg-4 mb-4">Or sign in with your social account</h2>
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
