@extends(theme('layouts.dashboard_master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} | {{__('frontend.Logged In Devices')}} @endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')
    <x-login-device-page-section/>
@endsection
