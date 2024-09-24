@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('frontend.Reward Point')}}
@endsection
@section('css') @endsection
@section('js')


@endsection
@section('mainContent')
    <x-reward-page-section/>
@endsection
