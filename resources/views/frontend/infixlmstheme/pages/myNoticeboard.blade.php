@extends(theme('layouts.dashboard_master'))
@section('title')
    {{__(Settings('site_title'))  ? __(Settings('site_title'))  : 'JOY'}} | {{__('noticeboard.Noticeboard')}}
@endsection
@section('css')

@endsection
@section('js')
    <script>


    </script>
@endsection

@section('mainContent')
    <x-noticeboard :request="$request"/>
@endsection
