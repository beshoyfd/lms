@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('student.Account Settings')}}
@endsection
@section('css') @endsection
@section('js')
@endsection
@section('mainContent')
    <x-my-account-page-section/>
    <x-account-delete-section/>
@endsection
