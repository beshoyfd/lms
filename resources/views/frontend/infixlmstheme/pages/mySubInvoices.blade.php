@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | Invoice
@endsection
@section('css')
    <link href="{{asset('public/frontend/infixlmstheme/css/my_invoice.css')}}{{assetVersion()}}" rel="stylesheet"/>
@endsection
@section('mainContent')

    <x-subscription-invoice-page-section :enroll="$enroll"/>

@endsection
@section('js')
    <script src="{{ asset('public/frontend/infixlmstheme') }}/js/html2pdf.bundle.js{{assetVersion()}}"></script>
    <script src="{{ asset('public/frontend/infixlmstheme/js/my_invoice.js') }}{{assetVersion()}}"></script>
@endsection
