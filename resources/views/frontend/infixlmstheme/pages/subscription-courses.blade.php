@extends(theme('layouts.master'))
@section('title'){{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | @if( routeIs('myClasses'))
    {{__('courses.Live Class')}}
@elseif( routeIs('myQuizzes'))
    {{__('courses.My Quizzes')}}
@else
    {{__('courses.My Courses')}}
@endif @endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')

    <x-subscription-my-course-page-section/>

@endsection
