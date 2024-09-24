@extends(theme('layouts.dashboard_master'))
@section('title'){{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('common.Reports')}} @endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')
    <x-my-report-course-page-section/>
    <x-my-report-quiz-page-section/>
@endsection
