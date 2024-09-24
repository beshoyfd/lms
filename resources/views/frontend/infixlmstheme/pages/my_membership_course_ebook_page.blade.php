@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} |
    @if( routeIs('myMembership'))
        {{__('membership.My Membership')}}
    @else
        {{__('membership.My Membership')}}
    @endif
@endsection
@section('css') @endsection
@section('js')
    <script src="{{asset('public/frontend/infixlmstheme/js/my_course.js')}}"></script>
@endsection

@section('mainContent')

    <x-my-membership-course-ebook :planId="$plan_id"/>

@endsection
