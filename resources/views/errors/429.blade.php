@extends('errors.layout')
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} | {{ __('Too Many Requests')}} @endsection
@section('css') @endsection
@section('js') @endsection

@section('mainContent')
@endsection

@section('message')
    {{__('Too Many Requests') }}
@endsection
@section('details')
    {{ __('Sorry, you are making too many requests to our servers.')}}
@endsection

