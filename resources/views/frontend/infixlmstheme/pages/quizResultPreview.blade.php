@extends(theme('layouts.master'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} |    {{$course->title}} @endsection
@section('css')

@endsection
@section('js')

@endsection

@section('mainContent')

    <x-breadcrumb :banner="$frontendContent->quiz_page_banner" :title="trans('frontend.Quiz Result')"
                  :subTitle="$course->title"/>


    <x-quiz-result-preview-page-section :quizTest="$quizTest" :user="$user" :course="$course"/>




@endsection


