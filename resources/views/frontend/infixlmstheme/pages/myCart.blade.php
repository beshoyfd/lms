@php
    if(auth()->user()->role_id == 3){
        $extend_file = theme('layouts.dashboard_master');
    }else{
        $extend_file = theme('layouts.master-front');
    }
@endphp

@extends($extend_file)

@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('coupons.My Cart')}}
@endsection
@section('css') @endsection


@section('mainContent')
    <x-my-cart-with-login-page-section/>
@endsection

