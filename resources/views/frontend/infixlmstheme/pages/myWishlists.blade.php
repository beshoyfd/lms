@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('frontend.Wishlist')}}
@endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')

    <x-wish-list-page-section/>

@endsection
