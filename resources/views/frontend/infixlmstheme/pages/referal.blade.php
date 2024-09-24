@extends(theme('layouts.dashboard_master'))
@section('title'){{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('communication.Your referral link')}} @endsection
@section('css') @endsection
@section('js')
    <script src="{{ asset('public/frontend/infixlmstheme/js/copy_currency.js') }}"></script>
@endsection
@section('mainContent')
    <x-referal-page-section/>
@endsection
