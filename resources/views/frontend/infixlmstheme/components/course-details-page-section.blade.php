@php
    if (@$course->discount_price!=null) {
        $course_price=@$course->discount_price;
    } else {
        $course_price=@$course->price;
    }
    $showWaitList =false;
    $alreadyWaitListRequest =false;
    if(isModuleActive('WaitList') && $course->waiting_list_status == 1 && auth()->check()){
       $count = $course->waitList->where('user_id',auth()->id())->count();
        if ($count==0){
            $showWaitList=true;
        }else{
            $alreadyWaitListRequest =true;
        }
    }
@endphp


<div class="container">

    <!-- Statistics -->
    <section class="bg-secondary position-relative py-4 py-md-5">
        <div class="container position-relative z-2">
            <div class="row">
                <div class="course__details_title">
                    <div class="single__details">
                        <div class="thumb"
                             style="background-image: url('{{getProfileImage(@$course->user->image,$course->user->name)}}')"></div>
                        <div class="details_content">
                            <span>{{__('frontend.Instructor Name')}}</span>
                            <a href="{{route('instructorDetails',[$course->user->id,$course->user->name])}}">
                                <h4 class="f_w_700">{{@$course->user->name}}</h4>
                            </a>
                        </div>
                    </div>
                    <div class="single__details">
                        <div class="details_content">
                            <span>{{__('frontend.Category')}}</span>
                            <h4 class="f_w_700">{{@$course->category->name}}</h4>
                        </div>
                    </div>
                    <div class="single__details">
                        <div class="details_content">
                            <span>{{__('frontend.Reviews')}}</span>


                            <div class="rating_star">


                                <div class="stars">
                                    @php

                                        $main_stars= @$userRating['rating'] ;

                                        $stars=intval($userRating['rating']);

                                    @endphp
                                    @for ($i = 0; $i <  $stars; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                    @if ($main_stars>$stars)
                                        <i class="fas fa-star-half"></i>
                                    @endif
                                    @if($main_stars==0)
                                        @for ($i = 0; $i <  5; $i++)
                                            <i class="far fa-star"></i>
                                        @endfor
                                    @endif
                                </div>
                                <p>{{@$userRating['rating']}}
                                    ({{@$userRating['total']}} {{__('frontend.Rating')}})</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center">
                <img src="{{getCourseImage($course->image)}}" class="img-fluid" alt="{{$course->title}}">
            </div>

        </div>
    </section>


    <!-- Target audience -->
    <section class="pt-5 mt-xl-3 mt-xxl-5">
        <div class="row pt-1 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2">
            <div class="col-lg-8 col-xl-7 offset-xl-1">
                <div class="ps-lg-4 ps-xl-0">
                    <div data-simplebar>
                        <ul class="nav nav-tabs flex-nowrap mb-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4 active" href="#Overview"
                                   data-bs-toggle="tab" role="tab">
                                    {{__('frontend.Overview')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#Curriculum"
                                   data-bs-toggle="tab" role="tab">
                                    {{__('frontend.Curriculum')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#Instructor"
                                   data-bs-toggle="tab" role="tab">
                                    {{__('frontend.Instructor')}}
                                </a>
                            </li>

                            @if(Settings('hide_review_section')!='1')
                                <li class="nav-item">
                                    <a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#Reviews"
                                       data-bs-toggle="tab" role="tab">{{__('frontend.Reviews')}}</a>
                                </li>
                            @endif
                            @if(Settings('hide_qa_section')!='1')
                                <li class="nav-item">
                                    <a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#QASection"
                                       data-bs-toggle="tab" role="tab">{{__('frontend.QA')}}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="tab-content py-2 pb-md-0 pt-sm-3 pt-lg-4 mb-4 mb-md-5">
                        <div class="tab-pane fade show active " id="Overview" role="tabpanel"
                             aria-labelledby="Overview-tab">
                            <!-- content  -->
                            @if(isModuleActive('Installment') && $course_price > 0)
                                @includeIf(theme('partials._installment_plan_details'), ['course' => $course,'position'=>'top_of_page'])
                            @endif
                            <div class="course_overview_description">

                                <div class="single_overview">

                                    @if(!empty($course->requirements))
                                        <h4 class="font_22 f_w_700 mb_20">{{__('frontend.Course Requirements')}}</h4>
                                        <div class="theme_border"></div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    {!! $course->requirements !!}
                                                </div>
                                            </div>

                                        </div>
                                        <p class="mb_20">
                                        </p>
                                    @endif

                                    @if(!empty($course->about))
                                        <h4 class="font_22 f_w_700 mb_20">{{__('frontend.Course Description')}}</h4>
                                        <div class="theme_border"></div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    {!! $course->about !!}
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb_20">
                                        </p>
                                    @endif


                                    @if(!empty($course->outcomes))
                                        <h4 class="font_22 f_w_700 mb_20">{{__('frontend.Course Outcomes')}}</h4>
                                        <div class="theme_border"></div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    {!! $course->outcomes !!}
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb_20">
                                        </p>
                                    @endif
                                    @if(isModuleActive('Installment') && $course_price > 0)
                                        @includeIf(theme('partials._installment_plan_details'), ['course' => $course,'position'=>'bottom_of_page'])
                                    @endif
                                    @if(!Settings('hide_social_share_btn') =='1')
                                        <div class="social_btns">
                                            <a target="_blank"
                                               href="https://www.facebook.com/sharer/sharer.php?u={{URL::current()}}"
                                               class="social_btn fb_bg"> <i class="fab fa-facebook-f"></i>
                                                {{__('frontend.Facebook')}}   </a>
                                            <a target="_blank"
                                               href="https://twitter.com/intent/tweet?text={{$course->title}}&amp;url={{URL::current()}}"
                                               class="social_btn Twitter_bg"> <i
                                                    class="fab fa-twitter"></i> {{__('frontend.Twitter')}}
                                            </a>
                                            <a target="_blank"
                                               href="https://pinterest.com/pin/create/link/?url={{URL::current()}}&amp;description={{$course->title}}"
                                               class="social_btn Pinterest_bg"> <i
                                                    class="fab fa-pinterest-p"></i> {{__('frontend.Pinterest')}}
                                            </a>
                                            <a target="_blank"
                                               href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{URL::current()}}&amp;title={{$course->title}}&amp;summary={{$course->title}}"
                                               class="social_btn Linkedin_bg"> <i
                                                    class="fab fa-linkedin-in"></i> {{__('frontend.Linkedin')}}
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!--/ content  -->
                        </div>
                        <div class="tab-pane fade " id="Curriculum" role="tabpanel"
                             aria-labelledby="Curriculum-tab">
                            <!-- content  -->
                            <h4 class="font_22 f_w_700 mb_20">{{__('frontend.Course Curriculum')}}</h4>
                            <div class="theme_according accordion" id="accordion1">
                                @if(isset($course->chapters))
                                    @foreach($course->chapters as $chapter)
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="heading{{$chapter->id}}">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link text_white collapsed"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{$chapter->id}}"
                                                            aria-expanded="false"
                                                            aria-controls="collapse{{$chapter->id}}">
                                                        {{$chapter->name}}
                                                        <span
                                                            class="course_length"> {{count($chapter->lessons)}} {{__('frontend.Lectures')}}</span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div class="collapse" id="collapse{{$chapter->id}}"
                                                 aria-labelledby="heading{{$chapter->id}}"
                                                 data-bs-parent="#accordion1">
                                                <div class="accordion-body">
                                                    <div class="curriculam_list">
                                                        <!-- curriculam_single  -->
                                                        @foreach($chapter->lessons as $key=>$lesson)

                                                            <div class="curriculam_single">
                                                                <div class="curriculam_left">
                                                                    @if ($lesson->is_lock==1)
                                                                        @if (Auth::check())
                                                                            @if ($isEnrolled)
                                                                                @if ($lesson->is_quiz==1)

                                                                                    @foreach ($lesson->quiz as $quiz)
                                                                                        <span
                                                                                            onclick="goFullScreen({{$course->id}},{{$lesson->id}})"
                                                                                            class="quizLink active"
{{--                                                                                                    data-url="{{route('quizStart',[$course->id,$quiz->id,$quiz->title])}}"--}}
                                                                                                >
                                                                    <i class="ti-check-box"></i>
                                                                    <span
                                                                        class="quiz_name">{{@$key+1}} {{@$quiz->title}}</span>
                                                                </span>

                                                                                    @endforeach
                                                                                @else

                                                                                    <i class="ti-control-play"></i>
                                                                                    <span
                                                                                        onclick="goFullScreen({{$course->id}},{{$lesson->id}})">{{@$key+1}} {{@$lesson->name}}</span>
                                                                                @endif
                                                                            @else
                                                                                <i class="ti-lock"></i>
                                                                                @if ($lesson->is_quiz==1)
                                                                                    @foreach ($lesson->quiz as $quiz)
                                                                                        <span
                                                                                            class="quiz_name">{{@$key+1}} {{@$quiz->title}} [Quiz]</span>
                                                                                    @endforeach
                                                                                @else
                                                                                    <span
                                                                                        data-host="{{$lesson->host}}"
                                                                                        data-url="{{youtubeVideo($lesson->video_url)}}">{{@$key+1}} {{@$lesson->name}}</span>
                                                                                @endif
                                                                            @endif
                                                                        @else
                                                                            <i class="ti-lock"></i>
                                                                            @if ($lesson->is_quiz==1)
                                                                                @foreach ($lesson->quiz as $quiz)
                                                                                    <span
                                                                                        class="quiz_name">{{@$key+1}} {{@$quiz->title}} [Quiz]</span>
                                                                                @endforeach
                                                                            @else
                                                                                <span
                                                                                    data-host="{{$lesson->host}}"
                                                                                    data-url="{{youtubeVideo($lesson->video_url)}}">{{@$key+1}} {{@$lesson->name}}</span>
                                                                            @endif
                                                                        @endif
                                                                    @else
                                                                        @if ($lesson->is_quiz==1)
                                                                            @foreach ($lesson->quiz as $quiz)
                                                                                @if (Auth::check() && $isEnrolled)
                                                                                    <span
                                                                                        onclick="goFullScreen({{$course->id}},{{$lesson->id}})"
                                                                                        class="quizLink active"
{{--                                                                                                data-url="{{route('quizStart',[$course->id,$quiz->id,$quiz->title])}}"--}}
                                                                                            >
                                                                  <i class="ti-check-box"></i>
                                                        <span
                                                            class="quiz_name">{{@$key+1}} {{@$quiz->title}} [Quiz]</span>
                                                        </span>
                                                                                    {{--                                                        <span class="quiz_name">{{@$key+1}} {{@$quiz->title}} [Quiz]</span>--}}
                                                                                @else
                                                                                    <i class="ti-check-box"></i>
                                                                                    <span
                                                                                        class="quiz_name">{{@$key+1}} {{@$quiz->title}} [Quiz]</span>
                                                                                @endif
                                                                            @endforeach
                                                                        @else
                                                                            @if ($lesson->host=='Youtube')
                                                                                <i class="ti-control-play"></i>
                                                                                <span class="lesson_name"
                                                                                      data-host="{{$lesson->host}}"
                                                                                      data-url="{{youtubeVideo($lesson->video_url)}}">{{@$key+1}} {{@$lesson->name}}</span>

                                                                            @elseif ($lesson->host=='Self'|| $lesson->host=="AmazonS3")
                                                                                <i class="ti-control-play"></i>

                                                                                <span class="lesson_name"
                                                                                      data-host="{{$lesson->host}}"
                                                                                      data-url="{{asset($lesson->video_url)}}">{{@$key+1}} {{@$lesson->name}}</span>

                                                                            @else

                                                                                <i class="ti-control-play"></i>
                                                                                <span class="lesson_name"
                                                                                      data-host="{{$lesson->host}}"
                                                                                      data-url="{{$lesson->video_url}}">{{@$key+1}} {{@$lesson->name}}</span>
                                                                            @endif
                                                                        @endif

                                                                    @endif

                                                                </div>
                                                                <div class="curriculam_right">
                                                                    @if ($lesson->is_lock==0)
                                                                        @if ($lesson->is_quiz==0)
                                                                            <a href="#"
                                                                               {{--                                                                                   class="theme_btn_lite course_play_name"--}}
                                                                               data-course="{{$course->id}}"
                                                                               data-lesson="{{$lesson->id}}"
                                                                               class="btn btn-sm btn-primary goFullScreen"
                                                                            >{{__('frontend.Preview')}}</a>
                                                                        @else
                                                                            <a href="#"
                                                                               class="btn btn-sm btn-primary quizLink"
                                                                               onclick="goFullScreen({{$course->id}},{{$lesson->id}})"
                                                                                {{--                                                                                       data-url="{{route('quizStart',[$course->id,$quiz->id,$quiz->title])}}"--}}
                                                                            >{{__('frontend.Start')}}</a>
                                                                        @endif

                                                                    @else
                                                                        @if (Auth::check() && $isEnrolled)
                                                                            @if ($lesson->is_quiz==0)
                                                                                <a href="#"
                                                                                   data-course="{{$course->id}}"
                                                                                   data-lesson="{{$lesson->id}}"
                                                                                   class="btn btn-sm btn-primary goFullScreen"
                                                                                >{{__('common.View')}}</a>
                                                                            @else
                                                                                <a href="#"
                                                                                   onclick="goFullScreen({{$course->id}},{{$lesson->id}})"
                                                                                   class="btn btn-sm btn-primary quizLink"
                                                                                    {{--                                                                                           data-url="{{route('quizStart',[$course->id,$quiz->id,$quiz->title])}}"--}}
                                                                                >{{__('frontend.Start')}}</a>
                                                                            @endif

                                                                        @endif

                                                                    @endif

                                                                    @php
                                                                        $duration =0;
                                                                         if ($lesson->is_quiz==0 || count($lesson->quiz)==0){
                                                                            $duration= $lesson->duration;
                                                                        }else{
                                                                            $quiz =$lesson->quiz[0];
                                                                            $type =$quiz->question_time_type;
                                                                            if ($type==0){
                                                                                $duration = $quiz->question_time*$quiz->total_questions;
                                                                            }else{
                                                                                $duration = $quiz->question_time;

                                                                            }

                                                                        }
                                                                    @endphp
                                                                    <span
                                                                        class="nowrap">{{MinuteFormat($duration)}}</span>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                {{$lesson->description}}
                                                            </p>
                                                            <hr>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            @if(isset($course_exercises))
                                @if(count($course_exercises)!=0)
                                    <div class="theme_according accordion" id="accordion0">
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="heading">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link text_white"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse"
                                                            aria-expanded="false"
                                                            aria-controls="collapse">
                                                        {{__('courses.Exercise')}} {{__('common.Files')}}

                                                    </button>
                                                </h5>
                                            </div>
                                            <div class="collapse show" id="collapse"
                                                 aria-labelledby="heading"
                                                 data-bs-parent="#accordion0">
                                                <div class="accordion-body">
                                                    <div class="curriculam_list">

                                                        <!-- curriculam_single  -->
                                                        @if(isset($course_exercises))
                                                            @foreach($course_exercises as $key2=>$file)

                                                                <div class="curriculam_single">
                                                                    <div class="curriculam_left">
                                                                        @if ($file->lock==0)
                                                                            <i class="ti-unlock"></i>
                                                                        @else
                                                                            @if(Auth::check() && $isEnrolled)
                                                                                <i class="ti-unlock"></i>
                                                                            @else
                                                                                <i class="ti-lock"></i>
                                                                            @endif

                                                                        @endif

                                                                        <span>{{@$key2+1}}. {{@$file->fileName}}</span>
                                                                    </div>

                                                                    <div class="curriculam_right">

                                                                        @if ($file->lock==0)
                                                                            <a href="{{asset($file->file)}}"
                                                                               class="btn btn-sm btn-primary  me-0"
                                                                               download>{{__('Download')}}</a>
                                                                        @else
                                                                            @if(Auth::check() && $isEnrolled)
                                                                                <a href="{{asset($file->file)}}"
                                                                                   class="btn btn-sm btn-primary  me-0"
                                                                                   download>{{__('Download')}}</a>
                                                                            @endif

                                                                        @endif


                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif

                        </div>
                        <div class="tab-pane fade " id="Instructor" role="tabpanel"
                             aria-labelledby="Instructor-tab">
                            <div class="instractor_details_wrapper">
                                <div class="instractor_title">
                                    <h4 class="font_22 f_w_700">{{__('frontend.Instructor')}}</h4>
                                    <p class="font_16 f_w_400">{{@$course->user->headline}}</p>
                                </div>
                                <div class="instractor_details_inner">
                                    <div class="thumb">
                                        <img
                                             src="{{getProfileImage(@$course->user->image,$course->user->name)}}"
                                             alt="">
                                    </div>
                                    <div class="instractor_details_info">
                                        <a href="{{route('instructorDetails',[$course->user->id,$course->user->name])}}">
                                            <h4 class="font_22 f_w_700">{{@$course->user->name}}</h4>
                                        </a>
                                        <h5>  {{@$course->user->headline}}</h5>
                                        <div class="ins_details">
                                            <p> {{@$course->user->short_details}}</p>
                                        </div>
                                        <div class="intractor_qualification">
                                            <div class="single_qualification">
                                                <i class="fa fa-star"></i> {{@$userRating['rating']}}
                                                {{__('frontend.Rating')}}
                                            </div>
                                            <div class="single_qualification">
                                                <i class="fa fa-comments"></i> {{@$userRating['total']}}
                                                {{__('frontend.Reviews')}}
                                            </div>
                                            <div class="single_qualification">
                                                <i class="fa fa-user"></i> {{@$course->user->totalEnrolled()}}
                                                {{__('frontend.Students')}}
                                            </div>
                                            <div class="single_qualification">
                                                <i class="fa fa-book"></i> {{@$course->user->totalCourses()}}
                                                {{__('frontend.Courses')}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    {!! @$course->user->about !!}
                                </p>
                            </div>

                        </div>
                        <div class="tab-pane fade " id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                            <!-- content  -->
                            <div class="course_review_wrapper">
                                <div class="details_title">
                                    <h4 class="font_22 f_w_700">{{__('frontend.Student Feedback')}}</h4>
                                    <p class="font_16 f_w_400">{{$course->title}}</p>
                                </div>
                                <div class="course_feedback">
                                    <div class="course_feedback_left">
                                        <h2>{{$course->total_rating}}</h2>
                                        <div class="feedmak_stars">
                                            @php
                                                $main_stars=$course->total_rating;
                                                $stars=intval($main_stars);
                                            @endphp
                                            @for ($i = 0; $i <  $stars; $i++)
                                                <i class="fas fa-star"></i>
                                            @endfor
                                            @if ($main_stars>$stars)
                                                <i class="fas fa-star-half"></i>
                                            @endif
                                            @if($main_stars==0)
                                                @for ($i = 0; $i <  5; $i++)
                                                    <i class="far fa-star"></i>
                                                @endfor
                                            @endif
                                        </div>
                                        <span>{{__('frontend.Course Rating')}}</span>
                                    </div>
                                    <div class="feedbark_progressbar">
                                        <div class="single_progrssbar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width: {{getPercentageRating($course->starWiseReview,5)}}%"
                                                     aria-valuenow="{{getPercentageRating($course->starWiseReview,5)}}"
                                                     aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <div class="rating_percent d-flex align-items-center">
                                                <div class="feedmak_stars d-flex align-items-center">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span>{{getPercentageRating($course->starWiseReview,5)}}%</span>
                                            </div>
                                        </div>
                                        <div class="single_progrssbar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width: {{getPercentageRating($course->starWiseReview,4)}}%"
                                                     aria-valuenow="{{getPercentageRating($course->starWiseReview,4)}}"
                                                     aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <div class="rating_percent d-flex align-items-center">
                                                <div class="feedmak_stars d-flex align-items-center">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <span>{{getPercentageRating($course->starWiseReview,4)}}%</span>
                                            </div>
                                        </div>
                                        <div class="single_progrssbar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width: {{getPercentageRating($course->starWiseReview,3)}}%"
                                                     aria-valuenow="{{getPercentageRating($course->starWiseReview,3)}}"
                                                     aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <div class="rating_percent d-flex align-items-center">
                                                <div class="feedmak_stars d-flex align-items-center">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>

                                                </div>
                                                <span>{{getPercentageRating($course->starWiseReview,3)}}%</span>
                                            </div>
                                        </div>
                                        <div class="single_progrssbar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width: {{getPercentageRating($course->starWiseReview,2)}}%"
                                                     aria-valuenow="{{getPercentageRating($course->starWiseReview,2)}}"
                                                     aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <div class="rating_percent d-flex align-items-center">
                                                <div class="feedmak_stars d-flex align-items-center">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <span>{{getPercentageRating($course->starWiseReview,2)}}%</span>
                                            </div>
                                        </div>
                                        <div class="single_progrssbar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width: {{getPercentageRating($course->starWiseReview,1)}}%"
                                                     aria-valuenow="{{getPercentageRating($course->starWiseReview,1)}}"
                                                     aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <div class="rating_percent d-flex align-items-center">
                                                <div class="feedmak_stars d-flex align-items-center">
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <span>{{getPercentageRating($course->starWiseReview,1)}}%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="course_review_header mb_20">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="review_poients">
                                                @if ($course->reviews->count()<1)
                                                    @if (Auth::check() && $isEnrolled)
                                                        <p class="theme_color font_16 mb-0">{{ __('frontend.Be the first reviewer') }}</p>
                                                    @else

                                                        <p class="theme_color font_16 mb-0">{{ __('frontend.No Review found') }}</p>
                                                    @endif

                                                @else


                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rating_star text-end">

                                                @php
                                                    $PickId=$course->id;
                                                @endphp
                                                @if (Auth::check() && Auth::user()->role_id==3)
                                                    @if (!in_array(Auth::user()->id,$reviewer_user_ids) && $isEnrolled)

                                                        <div
                                                            class="star_icon d-flex align-items-center justify-content-end">
                                                            <a class="rating">
                                                                <input type="radio" id="star5" name="rating"
                                                                       value="5"
                                                                       class="rating"/><label
                                                                    class="full" for="star5" id="star5"
                                                                    title="Awesome - 5 stars"
                                                                    onclick="Rates(5, {{@$PickId }})"></label>

                                                                <input type="radio" id="star4" name="rating"
                                                                       value="4"
                                                                       class="rating"/><label
                                                                    class="full" for="star4"
                                                                    title="Pretty good - 4 stars"
                                                                    onclick="Rates(4, {{@$PickId }})"></label>

                                                                <input type="radio" id="star3" name="rating"
                                                                       value="3"
                                                                       class="rating"/><label
                                                                    class="full" for="star3"
                                                                    title="Meh - 3 stars"
                                                                    onclick="Rates(3, {{@$PickId }})"></label>

                                                                <input type="radio" id="star2" name="rating"
                                                                       value="2"
                                                                       class="rating"/><label
                                                                    class="full" for="star2"
                                                                    title="Kinda bad - 2 stars"
                                                                    onclick="Rates(2, {{@$PickId }})"></label>

                                                                <input type="radio" id="star1" name="rating"
                                                                       value="1"
                                                                       class="rating"/><label
                                                                    class="full" for="star1"
                                                                    title="Bad  - 1 star"
                                                                    onclick="Rates(1,{{@$PickId }})"></label>

                                                            </a>
                                                        </div>
                                                    @endif
                                                @else

                                                    <p class="font_14 f_w_400 mt-0"><a href="{{url('login')}}"
                                                                                       class="theme_color2">{{__('frontend.Sign In')}}</a>
                                                        {{__('frontend.or')}} <a
                                                            class="theme_color2"
                                                            href="{{url('register')}}">{{__('frontend.Sign Up')}}</a>
                                                        {{__('frontend.as student to post a review')}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="course_cutomer_reviews">
                                    <div class="details_title">
                                        <h4 class="font_22 f_w_700">{{__('frontend.Reviews')}}</h4>

                                    </div>
                                    <div class="customers_reviews" id="customers_reviews">


                                    </div>
                                </div>

                                <div class="author_courses">
                                    <div class="section__title mb_80">
                                        <h3>{{__('frontend.Course you might like')}}</h3>
                                    </div>
                                    <div class="row">
                                        @foreach(@$related as $r)
                                            <div class="col-xl-6">
                                                <div class="couse_wizged mb_30">
                                                    <div class="thumb">
                                                        <a href="{{courseDetailsUrl(@$r->id,@$r->type,@$r->slug)}}">
                                                            <img class="w-100"
                                                                 src="{{ file_exists($r->thumbnail) ? asset($r->thumbnail) : asset('public/\uploads/course_sample.png') }}"
                                                                 alt="">
                                                            <x-price-tag :price="$r->price"
                                                                         :discount="$r->discount_price"/>
                                                        </a>
                                                    </div>
                                                    <div class="course_content">
                                                        <a href="{{courseDetailsUrl(@$r->id,@$r->type,@$r->slug)}}">
                                                            <h4>{{@$r->title}}</h4>
                                                        </a>
                                                        <div class="rating_cart">
                                                            <div class="rateing">
                                                                <span>{{$r->totalReview}}/5</span>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            @auth()
                                                                @if(!$r->isLoginUserEnrolled && !$r->isLoginUserCart)
                                                                    <a href="#" class="cart_store"
                                                                       data-id="{{$r->id}}">
                                                                        <i class="fas fa-shopping-cart"></i>
                                                                    </a>
                                                                @endif
                                                            @endauth
                                                            @guest()
                                                                @if(!$r->isGuestUserCart)
                                                                    <a href="#" class="cart_store"
                                                                       data-id="{{$r->id}}">
                                                                        <i class="fas fa-shopping-cart"></i>
                                                                    </a>
                                                                @endif
                                                            @endguest
                                                        </div>
                                                        <div class="course_less_students">
                                                            <a href="#"> <i
                                                                    class="ti-agenda"></i> {{count($r->lessons)}}
                                                                {{__('frontend.Lessons')}}</a>
                                                            @if(!Settings('hide_total_enrollment_count') == 1)
                                                                <a href="#"> <i
                                                                        class="ti-user"></i> {{$r->total_enrolled}}
                                                                    {{__('frontend.Students')}} </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- content  -->
                        </div>
                        <div class="tab-pane fade " id="QASection" role="tabpanel" aria-labelledby="QA-tab">
                            <!-- content  -->

                            <div class="conversition_box">

                                <div id="conversition_box"></div>

                                <div class="row">
                                    @if ($isEnrolled)
                                        <div class="col-lg-12 " id="mainComment">
                                            <form action="{{route('saveComment')}}" method="post" class="">
                                                @csrf
                                                <input type="hidden" name="course_id" value="{{@$course->id}}">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="section_title3 mb_20">
                                                            <h3>{{__('frontend.Leave a question/comment') }}</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="single_input mb_25">
                                                                                        <textarea
                                                                                            placeholder="{{__('frontend.Leave a question/comment') }}"
                                                                                            name="comment"
                                                                                            class="form-control gray_input"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mt-4">

                                                        <button type="submit"
                                                                class="btn btn-primary height_50">
                                                            <i class="fas fa-comments"></i>
                                                            {{__('frontend.Question') }}/
                                                            {{__('frontend.comment') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    @else
                                        <div class="col-lg-12 text-center" id="mainComment">
                                            <h4>{{__('frontend.You must be enrolled to ask a question')}}</h4>
                                        </div>

                                    @endif
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar__widget mb_30">
                    @if(isModuleActive('EarlyBird') && Auth::check() && !$isEnrolled)
                        @includeIf(theme('partials._early_bird_offer'), ['price_plans' => $course->pricePlans, 'product' => $course])
                    @endif

                    <div class="sidebar__title">
                        <div id="price-container">
                            <h3 id="price_show_tag">
                                {{getPriceFormat($course_price)}}
                                @if($course->price)
                                    <del><small>{{getPriceFormat($course->price)}}</small></del>
                                @endif
                            </h3>
                            <p class="mt-2 mb-4">
                                @if($course->getDiscountPercentage())
                                    <span class="position-absolute badge bg-info text-white">
                                        {{__('common.Discount')}}
                                {{$course->getDiscountPercentage()}}%</span>
                                @endif
                            </p>
                            <div class="price_loader"></div>
                        </div>
                        <p>
                            @if (Auth::check() && $isBookmarked )
                                <i class="fas fa-heart"></i>
                                <a href="{{route('bookmarkSave',[$course->id])}}"
                                   class="btn btn-sm btn-outline-primary btn-block mt-2">{{__('frontend.Already In Wishlist')}}
                                </a>
                            @elseif (Auth::check() && !$isBookmarked )
                                <a href="{{route('bookmarkSave',[$course->id])}}"
                                   class="btn btn-sm btn-primary">
                                    <i class="far fa-heart"></i>
                                    {{__('frontend.Add To Wishlist')}}  </a>
                            @endif
                        </p>
                    </div>

                    @if($showWaitList)
                        <a type="button" data-bs-toggle="modal" data-bs-target="#courseWaitList"
                           class="btn btn-sm btn-primary d-block text-center height_50 mb_10">
                            {{ __('frontend.Enter to Wait List') }}
                        </a>
                        @include(theme('partials._course_wait_list_form'),['course' => $course])
                    @endif
                    @if($alreadyWaitListRequest)
                        <a href="#"
                           class="btn btn-sm btn-outline-primary d-block text-center height_50 mb_10">
                            {{ __('frontend.Already In Wait List') }}
                        </a>
                    @endif
                    @if(!onlySubscription())

                        @if($course->is_upcoming_course && $course->publish_status == 'pending')
                            <x-upcoming-course-action :course="$course"/>
                        @else

                            @if (Auth::check())

                                @if ($isEnrolled)
                                    <a href="{{route('continueCourse',[$course->slug])}}"
                                       class="btn btn-primary d-block text-center height_50 mb_10">{{__('common.Continue Watch')}}</a>
                                @else
                                    @if($isFree)

                                        @if($is_cart == 1)
                                            <a href="javascript:void(0)"
                                               class="btn btn-sm btn-ouline-primary d-block text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                        @else
                                            <a href="{{route('addToCart',[@$course->id])}}"
                                               class="btn btn-primary d-block text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                        @endif
                                    @else

                                        @if($is_cart == 1)
                                            <a href="javascript:void(0)"
                                               class="btn btn-primary d-block text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                        @else
                                            <a href=" {{route('addToCart',[@$course->id])}}"
                                               class="btn btn-primary d-block text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                        @endif
                                        <a href="{{route('buyNow',[@$course->id])}}"
                                           class="btn btn-outline-primary mt-2 d-block text-center height_50 mb_20">{{__('common.Buy Now')}}</a>
                                    @endif
                                @endif

                            @else
                                @if($isFree)
                                    @if($is_cart == 1)
                                        <a href="javascript:void(0)"
                                           class="btn btn-primary d-block text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                    @else
                                        <a href=" {{route('addToCart',[@$course->id])}} "
                                           class="btn btn-primary d-block text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                    @endif
                                @else
                                    @if($is_cart == 1)
                                        <a href="javascript:void(0)"
                                           class="btn btn-primary d-block text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                    @else
                                        <a href=" {{route('addToCart',[@$course->id])}} "
                                           class="btn btn-primary d-block text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                        <a href="{{route('buyNow',[@$course->id])}}"
                                           class="btn btn-outline-primary mt-2 d-block text-center height_50 mb_20">{{__('common.Buy Now')}}</a>
                                    @endif
                                @endif
                            @endif
                        @endif
                    @endif
                    @includeIf('gift::buttons.course_details_page_button', ['course' => $course])
                    @if(isModuleActive('Installment') && $course_price > 0)
                        @includeIf(theme('partials._installment_plan_button'), ['course' => $course])
                    @endif
                    @if(isModuleActive('Cashback'))
                        @includeIf(theme('partials._cashback_card'), ['product' => $course])
                    @endif

                    <p class="font_14 f_w_500 text-center mb_30"></p>
                    <h4 class="f_w_700 mb_10">{{__('frontend.This course includes')}}:</h4>
                    <ul class="course_includes">
                        <li><i class="fa fa-alarm-clock"></i>
                            <p class="nowrap"> {{ __('frontend.Duration') }} {{MinuteFormat($course->duration)}}

                            </p></li>
                        <li><i class="fa fa-thumbtack"></i>
                            <p>{{__('frontend.Skill Level')}}
                                @foreach($levels as $level)
                                    @if (@$course->level==$level->id)
                                        {{ $level->title}}
                                    @endif
                                @endforeach
                            </p></li>
                        <li><i class="fa fa-list"></i>
                            <p>{{__('frontend.Lectures')}} {{$course->total_lessons}} {{__('frontend.lessons')}}</p>
                        </li>
                        @if(!Settings('hide_total_enrollment_count') == 1)
                            <li><i class="fa fa-user"></i>
                                <p>{{__('frontend.Enrolled')}} {{$course->total_enrolled}} {{__('frontend.students')}}</p>
                            </li>
                        @endif

                        @if($course->certificate)
                            <li><i class="fa fa-crown"></i>
                                <p>{{__('frontend.Certificate of Completion')}}</p></li>
                        @endif

                        <li><i class="fa fa-book"></i>
                            @if($course->access_limit>0)
                                <p>{{$course->access_limit}} {{__('frontend.Days')}} {{__('frontend.Access')}}</p>
                            @else
                                <p>{{__('frontend.Full lifetime access')}}</p>
                            @endif
                        </li>
                        @if(isModuleActive('SupportTicket') && $course->support)
                            <li>
                                <i class="fa fa-comment-alt"></i>
                                <p>{{__('common.Support')}}</p>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>

        </div>
    </section>


    <div class="row">
        @if($course->timeTables && count($course->timeTables))
            <div class="col-12">
                <div class="container">
                    <h4 class="font_22 f_w_700 mb_20">{{__('courses.Course Time Table')}}</h4>
                    <div id="msg" class="alert alert-success" style="display:none"></div>
                </div>
            </div>
            <div class="col-12">
                <section class="container pb-5 mb-xl-3 mb-xxl-5">
                    <!-- Multiple slides responsive slider with external Prev / Next buttons and bullets outside -->
                    <div class="position-relative px-5">

                        <!-- External slider prev/next buttons -->
                        <button type="button" id="prev"
                                class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle position-absolute top-50 start-0 translate-middle-y mt-n3"
                                aria-label="Prev">
                            <i class="ai-arrow-left"></i>
                        </button>
                        <button type="button" id="next"
                                class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle position-absolute top-50 end-0 translate-middle-y mt-n3"
                                aria-label="Next">
                            <i class="ai-arrow-right"></i>
                        </button>
                        <!-- Slider -->
                        <div class="swiper" data-swiper-options='{
                "slidesPerView": 1,
                "spaceBetween": 16,
                "loop": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "clickable": true
                },
                "navigation": {
                  "prevEl": "#prev",
                  "nextEl": "#next"
                },
                "breakpoints": {
                  "600": {
                    "slidesPerView": 2
                  },
                  "1000": {
                    "slidesPerView": 3
                  }
                }
              }'>
                            <div class="swiper-wrapper">

                                @foreach($course->timeTables as $timeTable)
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 mb-4">
                                                        <div
                                                            class="d-flex justify-content-center align-items-center gap-2">
                                                            <div class="">
                                                                <img width="35" height="35"
                                                                     src="https://bakkah.com/public/front-dist/images/new-website/pdu.svg"
                                                                     alt="">
                                                            </div>
                                                            <div class="">
                                                                <small class="">{{__('common.PDUs')}}</small>
                                                                <small class="m-0">{{$timeTable->pdus}}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <div
                                                            class="d-flex justify-content-center align-items-center gap-2">
                                                            <div class="">
                                                                <img width="35" height="35"
                                                                     src="https://bakkah.com/public/front-dist/images/new-website/hourglass.svg"
                                                                     alt="">
                                                            </div>
                                                            <div class="">
                                                                <small class="">{{__('common.Duration')}}</small>
                                                                <small class="m-0"> {{$timeTable->duration}}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <div
                                                            class="d-flex justify-content-center align-items-center gap-2">
                                                            <div class="">
                                                                <img
                                                                    src="https://bakkah.com/public/front-dist/images/new-website/calender.svg"
                                                                    alt="">
                                                            </div>
                                                            <div class="">
                                                                <small class="">{{__('common.Date')}}</small> <br>
                                                                <small class="m-0">{{$timeTable->start_date}}
                                                                    - {{$timeTable->end_date}}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <div
                                                            class="d-flex justify-content-center align-items-center gap-2">
                                                            <div class="">
                                                                <img
                                                                    src="https://bakkah.com/public/front-dist/images/new-website/clock.svg"
                                                                    alt="">
                                                            </div>
                                                            <div class="">
                                                                <small class=""> {{__('common.Time')}}</small> <br>
                                                                <small class="m-0">{{$timeTable->start_time}}
                                                                    - {{$timeTable->end_time}}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-3">
                                                    <a href="#"
                                                       class="btn btn-secondary btn-icon btn-lg btn-linkedin me-2"
                                                       aria-label="LinkedIn">
                                                        <i class="ai-cart"></i>
                                                    </a>
                                                    <button type="button"
                                                            onclick="chooseTimeTable('{{$timeTable->id}}', this)"
                                                            class="timeBtns btn btn-primary">{{__('common.Choose')}}</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            @endforeach

                            <!-- Pagination (Bullets) -->
                                <div class="swiper-pagination position-relative bottom-0 mt-4"></div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        @endif
    </div>


    <div class="modal cs_modal fade admin-query" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('frontend.Review') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                            class="ti-close "></i></button>
                </div>

                <form action="{{route('submitReview')}}" method="Post">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="course_id" id="rating_course_id"
                               value="">
                        <input type="hidden" name="rating" id="rating_value" value="">

                        <div class="text-center">
                                                                <textarea class="lms_summernote" name="review" name=""
                                                                          id=""
                                                                          placeholder="{{__('frontend.Write your review') }}"
                                                                          cols="30"
                                                                          rows="10">{{old('review')}}</textarea>
                            <span class="text-danger" role="alert">{{$errors->first('review')}}</span>
                        </div>


                    </div>
                    <div class="modal-footer justify-content-center">
                        <div class="mt-40">
                            <button type="button" class="theme_line_btn me-2"
                                    data-bs-dismiss="modal">{{ __('common.Cancel') }}
                            </button>
                            <button class="btn btn-primary"
                                    type="submit">{{ __('common.Submit') }}</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
