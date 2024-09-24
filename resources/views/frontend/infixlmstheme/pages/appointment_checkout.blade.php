@extends(theme('layouts.master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('common.Checkout')}}
@endsection
@section('css')
    <link rel="stylesheet"
          href="{{ asset('Modules\Appointment\Resources\assets\frontend\css\appointment.css') }}{{assetVersion()}}"/>
@endsection
@section('mainContent')

    <x-appointment-checkout-page-section :request="$request"/>

@endsection
@section('js')
    <script src="{{asset('public/frontend/infixlmstheme/js/select2.min.js')}}"></script>
    <script src="{{asset('public/frontend/infixlmstheme/js/checkout.js')}}"></script>
    <script src="{{asset('public/frontend/infixlmstheme/js/city.js')}}"></script>
@endsection
