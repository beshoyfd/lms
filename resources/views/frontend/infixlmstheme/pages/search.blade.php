@extends(theme('layouts.master'))
@section('title'){{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('frontend.Courses')}} @endsection
@section('css') @endsection
@section('js')
    <script src="{{ asset('public/frontend/infixlmstheme/js/classes.js') }}"></script>
@endsection
@section('mainContent')

    <x-breadcrumb :banner="$frontendContent->course_page_banner" :title="$frontendContent->course_page_title"
                  :subTitle="$frontendContent->course_page_sub_title"/>

    <x-search-page-section :request="$request" :categories="$categories" :languages="$languages"
                           :categorySearch="$id"/>

@endsection

