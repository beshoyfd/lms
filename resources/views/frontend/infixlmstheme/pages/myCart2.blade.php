@extends(theme('layouts.master-front'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} | {{__('coupons.My Cart')}} @endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')

    <x-my-cart-with-out-login-page-section/>



@endsection
