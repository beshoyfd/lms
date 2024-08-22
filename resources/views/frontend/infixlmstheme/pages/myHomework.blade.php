@extends(theme('layouts.dashboard_master'))
@section('title')
    {{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} | {{_trans('homework.Homework List')}}
@endsection
@section('css')

@endsection
@section('js')

@endsection

@section('mainContent')
    <x-my-homework/>
@endsection
