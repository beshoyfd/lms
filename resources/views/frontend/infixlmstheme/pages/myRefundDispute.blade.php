@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('product.Store Refund & Dispute')}}
@endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')
    <x-my-refund-dispute-page-secton/>
@endsection
