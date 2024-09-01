@extends(theme('layouts.master-front'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} | {{__('courses.Courses')}} @endsection

@section('mainContent')


    <div class="container py-5 mt-5 mb-lg-4 mb-xl-5">

        <x-breadcrumb :banner="$frontendContent->course_page_banner" :title="$frontendContent->course_page_title"
                      :subTitle="$frontendContent->course_page_sub_title"/>

        <section class="rounded-1 overflow-hidden mb-5" style="background-color: #e3e5e9;" data-bs-theme="light">
            <div class="row align-items-center g-0">
                <div class="col-md-6 offset-xl-1 text-center text-md-start">
                    <div class="py-4 px-4 px-sm-5 pe-md-0 ps-xl-4">
                        <p class="text-body fs-xs text-uppercase pt-3 pt-md-0 mb-3 mb-lg-4">{{__('Best selling')}}</p>
                        <h2 class="h1 pb-2 pb-xl-3">{{__('Cozy corner for the living room at a')}} <span class="text-primary">{{__('discount up to 40%')}}</span>
                        </h2>
                        <a class="btn btn-sm btn-outline-dark" href="#" data-bs-theme="light">{{__('Explore')}}</a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-5 d-flex justify-content-end">
                    <img src="public/frontend2/human-resources-courses.svg" width="491" alt="Banner">
                </div>
            </div>
        </section>

        <x-course-page-section :request="$request" :categories="$categories" :languages="$languages"/>

    </div>
@endsection



@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let paginationElement = document.querySelector('ul.pagination');
            if (paginationElement) {
                paginationElement.className = 'pagination pagination-sm justify-content-end';
            }
        });

        function filterData(type, value) {
            return location.href = `?${type}=${value}`;
        }

        function loadMoreCourse() {
            let pg_size = document.querySelector('#pg_size');
            return location.href = `?pg_size=${parseInt(pg_size.value) + 10}`;
        }

    </script>
@endsection

