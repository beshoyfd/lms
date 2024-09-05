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



            <div class="d-flex flex-column align-items-center w-lg-100 h-100 px-3 px-lg-5 pt-5">
                <div class="w-100 mt-auto" style="max-width: 526px;">

                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12">
                            <div class="error_wrapper_info text-center">
                                <div class="logo mb-4">
                                    <a href="{{ url('/') }}">
                                        <img style="width: 190px" src="{{asset(Settings('logo') )}} " alt="">
                                    </a>
                                </div>
                                <h3>{{ __('frontend.Verify Your Email Address') }}</h3>
                                @if (session('resent'))
                                    <p>{{ __('frontend.A fresh verification link has been sent to your email address') }}</p>

                                @endif
                                <br>

                                <p class="mb-2 h6">
                                    {{ __('frontend.Before proceeding, please check your email for a verification link Login in Using that Link') }}
                                </p>
                                <form method="POST" class="" action="{{ route('verification_mail_resend') }}">
                                    @csrf
                                    <div class="">
                                        <button class="btn btn-lg btn-primary w-100 mb-4"
                                                type="submit">   {{ __('frontend.Resend Mail') }}</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;"></p>
            </div>

        </div>
    </main>

@endsection
