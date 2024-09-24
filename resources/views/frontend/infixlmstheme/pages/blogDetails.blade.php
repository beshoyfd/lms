@extends(theme('layouts.master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{$blog->title??''}}
@endsection
@section('css') @endsection
@section('js')
    <script src="{{asset('public/frontend/infixlmstheme/js/blogs.js')}}"></script>
@endsection
@section('og_image')
    {{getBlogImage($blog->image)}}
@endsection
@section('mainContent')

    <x-blog-details-page-section :blog="$blog"/>

@endsection
