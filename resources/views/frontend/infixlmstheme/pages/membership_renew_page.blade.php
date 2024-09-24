@extends(theme('layouts.master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} |
    @if( routeIs('myclass'))
        {{__('class.My Class')}}
    @else
        {{__('class.My Class')}}
    @endif
@endsection
@section('css') @endsection
@section('js')

@endsection

@section('mainContent')

    <x-membership-renew-page-section :planId="$plan_id" :checkoutId="$checkout_id"/>

@endsection
