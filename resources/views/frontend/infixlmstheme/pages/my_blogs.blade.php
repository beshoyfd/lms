@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('blog.My Blogs')}}
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('Modules/Blog/Resources/views/assets/frontend.css')}}{{assetVersion()}}"/>
@endsection
@section('js') @endsection

@section('mainContent')
    <x-my-blog-page-section/>
@endsection
