@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{_trans('homework.Homework List')}}
@endsection
@section('css')

@endsection
@section('js')

@endsection

@section('mainContent')
    <x-my-homework/>
@endsection
