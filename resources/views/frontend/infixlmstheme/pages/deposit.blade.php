@extends(theme('layouts.dashboard_master'))
@section('title'){{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('payment.Fund Deposit')}} @endsection
@section('css') @endsection
@section('js')
    <script src="{{asset('public/frontend/infixlmstheme/js/deposit.js')}}"></script>


@endsection

@section('mainContent')
    <x-deposit-page-section :request="$request"/>
@endsection
