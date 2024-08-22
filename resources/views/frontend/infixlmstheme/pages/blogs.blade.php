@extends(theme('layouts.master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} | {{__('frontend.Blog')}} @endsection
@section('css') @endsection
@section('js')
    <script src="{{asset('public/frontend/infixlmstheme/js/blogs.js')}}"></script>
@endsection

@section('mainContent')

    <x-breadcrumb :banner="$frontendContent->blog_page_banner"
                  :title="$frontendContent->blog_page_title"
                  :subTitle="$frontendContent->blog_page_sub_title"/>


    <x-blog-page-section/>

@endsection
