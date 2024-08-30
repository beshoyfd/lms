@extends(theme('layouts.master'))
@section('title')
    {{Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'}} |  {{$course->title}}
@endsection
@section('og_image')
    {{getCourseImage($course->image)}}
@endsection
@section('meta_title')
    {{$course->meta_keywords}}
@endsection
@section('meta_description')
    {{$course->meta_description}}
@endsection

@section('mainContent')

    <div class="container py-5 mt-5 mb-lg-4 mb-xl-5">
        <x-breadcrumb :banner="$frontendContent->course_page_banner"
                      :title="trans('frontend.Course Details')"
                      :subTitle="$course->title"/>
        <x-course-deatils-page-section :course="$course" :request="$request" :isEnrolled="$isEnrolled"/>
    </div>

    @if ($course->host=='VdoCipher')
        @include(theme('partials._player_modal'))
    @endif


@endsection

@push('css')
    <link rel="stylesheet" href="{{asset('/public/frontend2/css/course-details.css')}}">
@endpush
@push('js')
    <script>

        function chooseTimeTable(id, btn) {
            $('.timeBtns').each(function () {
                $(this).find('.fa-check').remove();
                $(this).removeAttr('disabled');
            });

            $(btn).append('<i class="fa fa-check"></i>');
            $(btn).attr('disabled', true);

            $.ajax({
                url: "{{ route('storeTimeTableId') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    timeTableId: id
                },
                success: function (response) {
                    $('#msg').show();
                    $('#msg').html(response.message);
                },
            });

        }

    </script>
@endpush

