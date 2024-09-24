@extends(theme('layouts.master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('membership.Membership Checkout')}}
@endsection
@section('css')
    <link href="{{asset('public/frontend/infixlmstheme/css/select2.min.css')}}{{assetVersion()}}" rel="stylesheet"/>
    <link href="{{asset('public/frontend/infixlmstheme/css/checkout.css')}}{{assetVersion()}}" rel="stylesheet"/>
@endsection

@section('mainContent')

    <x-membership-plan-checkout-page-section :request="$request" :plan="$s_plan" :price="$price"/>

@endsection

@section('js')

    <script src="{{asset('public/frontend/infixlmstheme/js/select2.min.js')}}{{assetVersion()}}"></script>
    <script src="{{asset('public/frontend/infixlmstheme/js/checkout.js')}}{{assetVersion()}}"></script>

@endsection
