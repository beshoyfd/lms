@extends(theme('layouts.master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('appointment.Appointment')}}
@endsection
@section('css')
    @if(isRtl())
        <link rel="stylesheet"
              href="{{ asset('Modules\Appointment\Resources\assets\frontend\css\appointment.rtl.css') }}{{assetVersion()}}"/>
    @else
        <link rel="stylesheet"
              href="{{ asset('Modules\Appointment\Resources\assets\frontend\css\appointment.css') }}{{assetVersion()}}"/>
    @endif
@endsection
@section('mainContent')
    <x-appointment :pages="$pages" :categories="$categories"/>
@endsection

