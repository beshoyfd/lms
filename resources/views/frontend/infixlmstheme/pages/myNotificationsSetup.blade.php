@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('setting.Notification Setup')}}
@endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')
    <x-notification-setup/>
@endsection
