@extends(theme('layouts.dashboard_master'))
@section('title'){{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('assignment.Assignment List')}} @endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')
    <x-my-assignment-page-section/>
@endsection
