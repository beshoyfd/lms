@extends(theme('layouts.master'))
@section('title')
    {{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} | @lang('frontendmanage.Payment Method')
@endsection
@section('css')
@endsection
@section('mainContent')

    <x-membership-payment-page-section :cart="$cart" :bill="$bill" :plan="$plan"/>

@endsection
@section('js')
@endsection
