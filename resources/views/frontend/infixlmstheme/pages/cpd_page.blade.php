@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('cpd.My CPD')}}
@endsection

@section('css') @endsection
@section('js') @endsection

@section('mainContent')
    <x-cpd/>
@endsection
