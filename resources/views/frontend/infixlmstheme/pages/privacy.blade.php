@extends(theme('layouts.master'))
@section('title'){{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{$privacy_policy->page_banner_title}} @endsection
@section('css') @endsection
@section('js')
    <script src="{{asset('public/frontend/infixlmstheme/js/scrollIt.js')}}"></script>
@endsection

@section('mainContent')


    @if($privacy_policy->page_banner_status==1)
        <x-breadcrumb :banner="$privacy_policy->page_banner" :title="$privacy_policy->page_banner_title"
                      :subTitle="$privacy_policy->page_banner_sub_title"/>
    @endif


    <x-privacy-page-section :privacy="$privacy_policy"/>


@endsection
