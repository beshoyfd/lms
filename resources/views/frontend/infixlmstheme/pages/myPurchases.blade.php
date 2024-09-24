@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('payment.Purchase history')}}
@endsection
@section('css')
    <style>
        .thumb img {
            height: 80px;
        }
    </style>
@endsection

@section('js') @endsection

@section('mainContent')
    <x-my-purchase-page-secton/>
@endsection
