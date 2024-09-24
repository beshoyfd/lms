@extends(theme('layouts.dashboard_master'))

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

    <x-my-class/>
@endsection
