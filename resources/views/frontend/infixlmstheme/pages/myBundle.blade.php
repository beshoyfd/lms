@extends(theme('layouts.dashboard_master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} | {{__('frontend.My Bundle')}} @endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')
    <x-my-bundle-page-section/>
@endsection
