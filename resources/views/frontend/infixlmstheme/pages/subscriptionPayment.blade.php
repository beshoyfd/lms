@extends(theme('layouts.master'))
@section('title'){{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | @lang('frontendmanage.Payment Method') @endsection
@section('css')
@endsection
@section('mainContent')
    <x-subscription-payment-page-section :cart="$cart" :bill="$bill" :plan="$plan"/>
@endsection
@section('js')
@endsection
