@extends(theme('layouts.dashboard_master'))
@section('title')
    {{ __(Settings('site_title')) ? __(Settings('site_title')) : 'JOY' }} |
    {{ __('courses.My Following Courses') }}
@endsection
@section('css')
    <style>
        .course_less_students {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .course_less_students a {
            margin: 0 !important;
        }

        .course_less_students .cpd {
            cursor: pointer;
            color: var(--system_primery_color) !important;
        }
    </style>
@endsection
@section('js')
    <script src="{{ asset('public/frontend/infixlmstheme/js/my_course.js') }}"></script>
@endsection
@section('mainContent')
    <x-my-upcoming-following-courses-page-section :page="$page" :request="$request"/>
@endsection
