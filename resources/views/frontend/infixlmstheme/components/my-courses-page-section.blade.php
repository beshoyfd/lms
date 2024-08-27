<div>

    <div class="main_content_iner main_content_padding">
        <div class="dashboard_lg_card">
            <div class="container-fluid g-0">
                <div class="my_courses_wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="section__title3 margin-50">
                                <h3>
                                    @if (routeIs('myClasses'))
                                        {{ __('courses.Live Class') }}
                                    @elseif(routeIs('myQuizzes'))
                                        {{ __('courses.My Quizzes') }}
                                    @else
                                        {{ __('courses.My Courses') }}
                                    @endif
                                </h3>
                            </div>
                        </div>

                        @php
                            if (routeIs('myClasses')) {
                                $search_text = trans('frontend.Search My Classes');
                                $search_route = '';
                            } elseif (routeIs('myQuizzes')) {
                                $search_text = trans('frontend.Search My Quizzes');
                                $search_route = '';
                            } else {
                                $search_text = trans('frontend.Search My Courses');
                                $search_route = '';
                            }
                        @endphp
                    </div>
                    <div class="row d-flex align-items-center mb-4 mb-lg-5">
                        <div class="col-xl-6 col-md-6 col-sm-12 mt-3">
                            <div class="short_select d-flex align-items-center pt-0 pb-3">
                                <h5 class="mr_10 font_16 f_w_500 mb-0">{{ __('frontend.Filter By') }}:</h5>
                                <input type="hidden" id="siteUrl" value="{{ route(\Request::route()->getName()) }}">
                                <select class="theme_select my-course-select w-50" id="categoryFilter">
                                    <option value="" data-display="{{ __('frontend.All Categories') }}">
                                        {{ __('frontend.All Categories') }}</option>
                                    @foreach ($categories->where('parent_id',0) as $category)
                                        @include('backend.categories._single_select_option',['category'=>$category,'level'=>1])

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class=" col-xl-6 col-md-6 pb-3 col-sm-12  mt-3">
                            <form action="{{ route(\Request::route()->getName()) }}">
                                <div class="input-group theme_search_field pt-0 pb-3 float-end w-50">
                                    <div class="input-group-prepend">
                                        <button class="btn" type="button" id="button-addon1"><i class="ti-search"></i>
                                        </button>
                                    </div>

                                    <input type="text" class="form-control course_search_option" name="search"
                                           placeholder="{{ $search_text }}" value="{{ $search }}"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = '{{ $search_text }}'">

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        @if (isset($courses))
                            @foreach ($courses as $SingleCourse)
                                @php
                                    $course = $SingleCourse->course;
                                @endphp
                                <div class="col-xl-4 col-md-6">
                                    @if ($course->type == 1)
                                        <div class="couse_wizged">
                                            <div class="thumb">
                                                <div class="thumb_inner lazy"
                                                     data-src="{{ getCourseImage($course->thumbnail) }}">

                                                    <x-price-tag :price="$course->price"
                                                                 :discount="$course->discount_price"/>

                                                </div>

                                            </div>
                                            <div class="course_content">
                                                <a href="{{ route('continueCourse', [$course->slug]) }}">
                                                    <h4 class="noBrake" title="{{ $course->title }}">
                                                        {{ $course->title }}
                                                    </h4>
                                                </a>
                                                @if ($SingleCourse->pathway_id != null)
                                                    <x-my-course-pathway-info :enrolld="$SingleCourse"/>
                                                @endif
                                                <div class="d-flex align-items-center gap_15">
                                                    <div class="rating_cart">
                                                        <div class="rateing">
                                                            <span>{{ $course->total_rating }}/5</span>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>

                                                    <div class="progress_percent flex-fill text-end">
                                                        <div class="progress theme_progressBar ">
                                                            <div class="progress-bar" role="progressbar"
                                                                 style="width: {{ round($course->loginUserTotalPercentage) }}%"
                                                                 aria-valuenow="25" aria-valuemin="0"
                                                                 aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                        <p class="font_14 f_w_400">
                                                            {{ round($course->loginUserTotalPercentage) }}
                                                            % {{ __('student.Complete') }}</p>
                                                    </div>
                                                </div>
                                                <div class="course_less_students">
                                                    <a>
                                                        <i class="ti-agenda"></i> {{ $course->total_lessons }}
                                                        {{ __('student.Lessons') }}
                                                    </a>


                                                    @if($SingleCourse->timeTable)
                                                        <span
                                                            onclick="showTimeTable('{{$SingleCourse->timeTable?->id}}', this)"
                                                            class="badge bg-dark" style="cursor: pointer">
                                                            Timetable <i class="fa fa-clock"></i>
                                                        </span>
                                                    @endif

                                                    @if(!Settings('hide_total_enrollment_count') == 1)
                                                        <a>
                                                            <i class="ti-user"></i> {{ $course->total_enrolled }}
                                                            {{ __('student.Students') }}
                                                        </a>
                                                    @endif
                                                    @if (isModuleActive('CPD'))
                                                        @if(count($cpds)>0)
                                                            <a class="cpd cpdValue"
                                                               data-course_id={{ $course->id }} data-bs-toggle="modal"
                                                               data-bs-target="#exampleModal">
                                                                <i class="ti-bolt"></i>
                                                                {{ __('cpd.CPD') }}
                                                            </a>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($course->type == 2)
                                        <div class="quiz_wizged">
                                            <a href="{{ courseDetailsUrl($course->id, $course->type, $course->slug) }}">
                                                <div class="thumb">
                                                    <div class="thumb_inner lazy"
                                                         data-src="{{ getCourseImage($course->thumbnail) }}">

                                                        <x-price-tag :price="$course->price"
                                                                     :discount="$course->discount_price"/>


                                                    </div>
                                                    <span class="quiz_tag">{{ __('quiz.Quiz') }}</span>
                                                </div>
                                            </a>
                                            <div class="course_content">
                                                <a href="{{ courseDetailsUrl($course->id, $course->type, $course->slug) }}">
                                                    <h4 class="noBrake"
                                                        title="{{ $course->title }}"> {{ $course->title }}
                                                    </h4>
                                                </a>
                                                @if ($SingleCourse->pathway_id != null)
                                                    <x-my-course-pathway-info :enrolld="$SingleCourse"/>
                                                @endif
                                                <div class="rating_cart">
                                                    <div class="rateing">
                                                        <span>{{ $course->total_rating }}/5</span>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="course_less_students">

                                                    <a> <i class="ti-agenda"></i>{{ $course->quiz->total_questions }}
                                                        {{ __('student.Question') }}</a>
                                                    @if(!Settings('hide_total_enrollment_count') == 1)
                                                        <a>
                                                            <i class="ti-user"></i> {{ $course->total_enrolled }}
                                                            {{ __('student.Students') }}
                                                        </a>
                                                    @endif
                                                    @if (isModuleActive('CPD'))
                                                        @if(count($cpds)>0)
                                                            {{-- <a onclick="cpd({{ $course->id }})" class="cpd">
                                                                <i class="ti-bolt"></i> {{ __('cpd.CPD') }}
                                                            </a> --}}
                                                            <a class="cpd cpdvalue" data-bs-toggle="modal"
                                                               data-course_id={{ $course->id }} data-bs-target="#exampleModal">
                                                                <i class="ti-bolt"></i>
                                                                {{ __('cpd.CPD') }}
                                                            </a>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($course->type == 3)
                                        <div class="quiz_wizged">
                                            <div class="thumb">
                                                <a href="{{ courseDetailsUrl($course->id, $course->type, $course->slug) }}">
                                                    <div class="thumb">
                                                        <div class="thumb_inner lazy"
                                                             data-src="{{ getCourseImage($course->thumbnail) }}">


                                                            <div class="class_tags">
                                                                <span
                                                                    class="live_class_tag bg1">{{ __('student.Live') }}</span>
                                                                <x-class-close-tag :class="$course->class"/>
                                                                @if($course->class->show_record)
                                                                    <a href="{{route('classRecords', $course->slug)}}">
                                                                    <span class="class_record_tag bg3">
                                                                      {{count($course->class->records)}} {{__('virtual-class.Records')}}
                                                                    </span>
                                                                    </a>
                                                                @endif
                                                            </div>

                                                            <div class="class_price_tag">
                                                                <x-price-tag :price="$course->price"
                                                                             :discount="$course->discount_price"/>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </a>


                                            </div>
                                            <div class="course_content">
                                                <a href="{{ courseDetailsUrl($course->id, $course->type, $course->slug) }}">
                                                    <h4 class="noBrake"
                                                        title="{{ $course->title }}"> {{ $course->title }}
                                                    </h4>
                                                </a>
                                                @if ($SingleCourse->pathway_id != null)
                                                    <x-my-course-pathway-info :enrolld="$SingleCourse"/>
                                                @endif
                                                <div class="rating_cart">
                                                    <div class="rateing">
                                                        <span>{{ $course->total_rating }}/5</span>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="course_less_students">
                                                    <a> <i class="ti-agenda"></i>
                                                        {{ $course->class->total_class }} {{ __('student.Classes') }}
                                                    </a>
                                                    @if(!Settings('hide_total_enrollment_count') == 1)
                                                        <a>
                                                            <i class="ti-user"></i> {{ $course->total_enrolled }}
                                                            {{ __('student.Students') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                            <div class="col-12">
                                <div class="mt-4 mb-4">
                                    {{ $courses->links() }}
                                </div>
                            </div>
                        @endif
                        @if (count($courses) == 0)
                            <div class="col-12">
                                <div class="section__title3 margin_50">
                                    @if (routeIs('myClasses'))
                                        <p class="text-center">{{ __('student.No Class Purchased Yet') }}!</p>
                                    @elseif(routeIs('myQuizzes'))
                                        <p class="text-center">{{ __('student.No Quiz Purchased Yet') }}!</p>
                                    @else
                                        <p class="text-center">{{ __('student.No Course Purchased Yet') }}!</p>
                                    @endif

                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(isModuleActive('CPD'))
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('cpd.CPD') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ti-close"></i></span>
                    </button>
                </div>

                {!! Form::open(['route'=>'cpd.course_to_cpd', 'method'=>'POST']) !!}
                <input type="hidden" name="course_id" id="cpd_course_id" value="">

                <div class="modal-body">
                    <div class="input-control">
                        <label for="#">{{ __('cpd.CPD') }}</label>
                        <select name="" id="" class="theme_select">
                            <option value="">{{ __('cpd.Select CPD') }}</option>
                            @foreach ($cpds as $cpd)
                                <option value="{{ $cpd->id }}">{{ $cpd->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer mntop">
                    <button type="button" class="theme_btn small_btn bg-transparent"
                            data-bs-dismiss="modal">{{ __('common.Cancel') }}</button>
                    <button type="button" class="theme_btn small_btn ">{{ __('common.Submit') }}</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endif



<div class="modal fade" id="timetableModal" tabindex="-1" role="dialog" aria-labelledby="timetableModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="timetableModalLabel">{{__('courses.Course Time Table')}}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-around">
                    <div class="fw-bold text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25.833" height="25.833"
                             viewBox="0 0 50.833 50.833">
                            <g id="hourglass" transform="translate(-108 -188)">
                                <g id="timer" transform="translate(108 188)">
                                    <path id="Vector"
                                          d="M7.763-.75H21.488c4,0,6.933,1.667,8.054,4.572,1.162,3.011.073,6.728-2.708,9.249l-9.846,8.947,9.847,8.949c2.78,2.52,3.868,6.237,2.707,9.248-1.121,2.906-4.056,4.572-8.054,4.572H7.763c-4,0-6.933-1.667-8.054-4.572-1.162-3.011-.073-6.728,2.708-9.249l9.846-8.947L2.416,13.07c-2.78-2.52-3.868-6.237-2.707-9.248C.83.917,3.766-.75,7.763-.75Zm6.862,20.622L24.7,10.719c1.789-1.621,2.561-3.987,1.879-5.753-.632-1.637-2.439-2.539-5.089-2.539H7.763c-2.65,0-4.458.9-5.089,2.539-.682,1.767.091,4.132,1.878,5.752Zm6.862,21.738c2.65,0,4.458-.9,5.089-2.539.682-1.767-.091-4.132-1.878-5.752L14.625,24.165,4.553,33.319c-1.789,1.621-2.561,3.987-1.879,5.753.632,1.637,2.439,2.539,5.089,2.539Z"
                                          transform="translate(10.791 3.398)" fill="#292d32"/>
                                    <path id="Vector-2" data-name="Vector" d="M0,0H50.833V50.833H0Z" fill="none"
                                          opacity="0"/>
                                </g>
                            </g>
                        </svg>
                        <p>{{__('common.Duration')}}<br>
                            <b id="duration"></b>
                        </p>
                    </div>

                    <div class="fw-bold text-center">
                        <p class="fw-bold text-center">


                            <svg xmlns="http://www.w3.org/2000/svg" width="25.1" height="25.594"
                                 viewBox="0 0 57.1 70.594">
                                <g id="Stopwatch" transform="translate(-210.5 65.429)">
                                    <path id="Path_34799" data-name="Path 34799"
                                          d="M225.051-2.373a27.188,27.188,0,0,0,5.021.473,27.043,27.043,0,0,0,27.05-27.05A27.043,27.043,0,0,0,230.072-56a27.882,27.882,0,0,0-5.072.473A27.047,27.047,0,0,1,246.978-28.95,27.073,27.073,0,0,1,225.051-2.373Z"
                                          transform="translate(8.978 5.564)" fill="#e9e9e9"/>
                                    <path id="Path_34800" data-name="Path 34800" d="M239.9-29.278l-.056.061"
                                          transform="translate(19.23 24.019)" fill="none" stroke="#4a4a4a"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                    <path id="Path_34801" data-name="Path 34801"
                                          d="M249.58-4.025A26.985,26.985,0,0,1,239.05-1.9,27.049,27.049,0,0,1,212-28.95,27.049,27.049,0,0,1,239.05-56,27.049,27.049,0,0,1,266.1-28.95a27.033,27.033,0,0,1-1.063,7.535"
                                          transform="translate(0 5.564)" fill="none" stroke="#4a4a4a"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                    <rect id="Rectangle_1105" data-name="Rectangle 1105" width="9" height="3"
                                          transform="translate(234.274 -63.929)" fill="none" stroke="#4a4a4a"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                    <line id="Line_153" data-name="Line 153" y2="9"
                                          transform="translate(239.274 -61.929)" fill="none" stroke="#4a4a4a"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                    <line id="Line_154" data-name="Line 154" y1="6" x2="4"
                                          transform="translate(259.274 -48.929)" fill="none" stroke="#4a4a4a"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                    <line id="Line_155" data-name="Line 155" y1="15"
                                          transform="translate(239.274 -37.929)" fill="none" stroke="#4a4a4a"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                </g>
                            </svg>

                        <p>{{__('common.PDUs')}}<br>
                            <b id="pdus"></b>
                        </p>

                    </div>
                </div>

                <div class="d-flex justify-content-around mt-5">
                    <div class="fw-bold text-center">
                        <p class="fw-bold text-center">

                            <svg xmlns="http://www.w3.org/2000/svg" width="25.084" height="25.084"
                                 viewBox="0 0 51.084 51.084">
                                <g id="clock" transform="translate(-172 -188)">
                                    <g id="clock-2" data-name="clock" transform="translate(172 188)">
                                        <path id="Vector"
                                              d="M22.131-.75A22.881,22.881,0,1,1-.75,22.131,22.907,22.907,0,0,1,22.131-.75Zm0,42.57A19.689,19.689,0,1,0,2.443,22.131,19.711,19.711,0,0,0,22.131,41.82Z"
                                              transform="translate(3.411 3.411)" fill="#292d32"/>
                                        <path id="Vector-2" data-name="Vector"
                                              d="M9.529,18.769a1.589,1.589,0,0,1-.817-.226l-6.6-3.938A6.3,6.3,0,0,1-.75,9.573V.846a1.6,1.6,0,0,1,3.193,0V9.573a3.141,3.141,0,0,0,1.3,2.288l6.6,3.94a1.6,1.6,0,0,1-.82,2.967Z"
                                              transform="translate(23.908 15.139)" fill="#292d32"/>
                                        <path id="Vector-3" data-name="Vector" d="M0,0H51.084V51.084H0Z" fill="none"
                                              opacity="0"/>
                                    </g>
                                </g>
                            </svg>

                        <p>
                            {{__("common.Time")}}:
                            <br>
                            <b id="start_time"></b> -
                            <br>
                            <b id="end_time"></b>
                        </p>
                    </div>

                    <div class="fw-bold text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25.549" height="25.549"
                             viewBox="0 0 51.549 51.549">
                            <g id="calender" transform="translate(-492 -188)">
                                <g id="calendar" transform="translate(492 188)">
                                    <path id="Vector"
                                          d="M.861,8.915A1.611,1.611,0,0,1-.75,7.3V.861a1.611,1.611,0,1,1,3.222,0V7.3A1.611,1.611,0,0,1,.861,8.915Z"
                                          transform="translate(16.322 3.435)" fill="#292d32"/>
                                    <path id="Vector-2" data-name="Vector"
                                          d="M.861,8.915A1.611,1.611,0,0,1-.75,7.3V.861a1.611,1.611,0,1,1,3.222,0V7.3A1.611,1.611,0,0,1,.861,8.915Z"
                                          transform="translate(33.505 3.435)" fill="#292d32"/>
                                    <path id="Vector-3" data-name="Vector"
                                          d="M37.375,2.472H.861a1.611,1.611,0,1,1,0-3.222H37.375a1.611,1.611,0,1,1,0,3.222Z"
                                          transform="translate(6.657 18.663)" fill="#292d32"/>
                                    <path id="Vector-4" data-name="Vector"
                                          d="M11.6-.75H28.783c4.08,0,7.232,1.167,9.369,3.468,1.978,2.13,2.981,5.119,2.981,8.882V29.857c0,3.764-1,6.752-2.981,8.882-2.137,2.3-5.289,3.468-9.369,3.468H11.6c-4.08,0-7.232-1.167-9.369-3.468C.253,36.609-.75,33.621-.75,29.857V11.6c0-3.764,1-6.752,2.981-8.882C4.368.417,7.52-.75,11.6-.75ZM28.783,38.986c3.148,0,5.506-.82,7.008-2.439,1.407-1.515,2.12-3.766,2.12-6.69V11.6c0-2.924-.713-5.175-2.12-6.69-1.5-1.618-3.86-2.439-7.008-2.439H11.6c-3.148,0-5.506.82-7.008,2.439-1.407,1.515-2.12,3.766-2.12,6.69V29.857c0,2.924.713,5.175,2.12,6.69,1.5,1.618,3.86,2.439,7.008,2.439Z"
                                          transform="translate(5.583 6.657)" fill="#292d32"/>
                                    <path id="Vector-5" data-name="Vector" d="M0,0H51.549V51.549H0Z" fill="none"
                                          opacity="0"/>
                                    <path id="Vector-6" data-name="Vector"
                                          d="M1.662,3.8H1.642a2.148,2.148,0,0,1,0-4.3h.019a2.148,2.148,0,1,1,0,4.3Z"
                                          transform="translate(32.068 27.778)" fill="#292d32"/>
                                    <path id="Vector-7" data-name="Vector"
                                          d="M1.662,3.8H1.642a2.148,2.148,0,0,1,0-4.3h.019a2.148,2.148,0,1,1,0,4.3Z"
                                          transform="translate(32.068 34.222)" fill="#292d32"/>
                                    <path id="Vector-8" data-name="Vector"
                                          d="M1.662,3.8H1.642a2.148,2.148,0,0,1,0-4.3h.019a2.148,2.148,0,1,1,0,4.3Z"
                                          transform="translate(24.123 27.778)" fill="#292d32"/>
                                    <path id="Vector-9" data-name="Vector"
                                          d="M1.662,3.8H1.642a2.148,2.148,0,0,1,0-4.3h.019a2.148,2.148,0,1,1,0,4.3Z"
                                          transform="translate(24.123 34.222)" fill="#292d32"/>
                                    <path id="Vector-10" data-name="Vector"
                                          d="M1.662,3.8H1.642a2.148,2.148,0,0,1,0-4.3h.019a2.148,2.148,0,1,1,0,4.3Z"
                                          transform="translate(16.173 27.778)" fill="#292d32"/>
                                    <path id="Vector-11" data-name="Vector"
                                          d="M1.662,3.8H1.642a2.148,2.148,0,0,1,0-4.3h.019a2.148,2.148,0,1,1,0,4.3Z"
                                          transform="translate(16.173 34.222)" fill="#292d32"/>
                                </g>
                            </g>
                        </svg>

                        <p>
                            {{__('common.date')}}:
                            <br>
                            <b id="start_date"></b> -
                            <br>
                            <b id="end_date"></b>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script>
    function showTimeTable(id, btn) {
        $(btn).append('<i class="fa fa-spinner fa-spin"></i>');
        $(btn).attr('disabled', true);

        $.ajax({
            url: '{{route('get-time-table')}}',
            method: 'post',
            data: {id: id},
            success: function (response) {
                let data = response.row;
                $(btn).find('.fa-spinner').remove();
                $(btn).removeAttr('disabled');
                $('#start_date').html(data.start_date);
                $('#end_date').html(data.end_date);
                $('#start_time').html(data.start_time);
                $('#end_time').html(data.end_time);
                $('#duration').html(data.duration);
                $('#pdus').html(data.pdus);
                $('#timetableModal').modal('show');
            },
            error: function (xhr) {
                alert('Failed to fetch timetable details.');
                $(btn).find('.fa-spinner').remove();
                $(btn).removeAttr('disabled');
            }
        });
    }
</script>


