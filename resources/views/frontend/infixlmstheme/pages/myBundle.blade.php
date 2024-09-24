@extends(theme('layouts.dashboard_master'))
@section('title'){{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('frontend.My Bundle')}} @endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')
    <x-my-bundle-page-section/>
@endsection
