@php
    if(auth()->user()->role_id == 3){
        $extend_file = theme('layouts.dashboard_master');
        $bg_flag = false;
    }else{
        $extend_file = theme('layouts.master');
        $bg_flag = true;
    }
@endphp

@extends($extend_file)

@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('invoice.Invoice')}}
@endsection
@section('css')
    <link href="{{asset('public/frontend/infixlmstheme/css/my_invoice.css')}}{{assetVersion()}}" rel="stylesheet"
          media="screen,print"/>
    @if($bg_flag)
        <style>
            body {
                background: #eff4f8 !important;
            }
        </style>
    @endif

@endsection
@section('mainContent')
    <x-my-invoice-page-section :id="$id"/>

@endsection
@section('js')
    <script src="{{ asset('public/frontend/infixlmstheme') }}/js/html2pdf.bundle.js"></script>
    <script src="{{ asset('public/frontend/infixlmstheme/js/my_invoice.js') }}"></script>
@endsection
