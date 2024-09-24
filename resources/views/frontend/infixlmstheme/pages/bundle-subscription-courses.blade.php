@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('bundleSubscription.Bundle Course')}}
@endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')

    <x-bundle-subscription-my-course-page-section/>

@endsection
