<div>
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

    <div class="quiz__details">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="col-12">
                            <div class="quiz_test_wrapper mb_60">
                                <div class="quiz_test_header">
                                    <h3> {{$course->quiz->title}}</h3>
                                </div>
                                <div class="quiz_test_body">

                                    <ul class="quiz_test_info">

                                        @php

                                            $duration =0;

                                                                                       $type =$course->quiz->question_time_type;
                                                                                       if ($type==0){
                                                                                           $duration = $course->quiz->question_time*$course->quiz->total_questions;
                                                                                       }else{
                                                                                           $duration = $course->quiz->question_time;

                                                                                       }


                                        @endphp
                                        <li>
                                            <span>{{__('frontend.Questions')}} <span>:</span></span>{{$course->quiz->total_questions}}
                                            {{__('frontend.Question')}}.
                                        </li>
                                        <li class="nowrap">
                                            <span>{{__('frontend.Duration')}}   <span>:</span></span> {{MinuteFormat($duration)}}
                                        </li>
                                    </ul>
                                    @if($course->is_upcoming_course && $course->publish_status == 'pending')
                                    @else

                                        @if (Auth::check() && $isEnrolled)

                                            @if($alreadyJoin == 0 || $course->quiz->multiple_attend == 1)
                                                <a href="{{route('quizStart',[$course->id,$course->quiz->id,$course->slug])}}"
                                                   class="theme_btn mr_15 m-auto mt-4 text-center"
                                                >{{__('frontend.Start Quiz')}}</a>
                                            @endif


                                            @if(count($preResult)!=0)
                                                <button type="button"
                                                        class="theme_line_btn mr_15 m-auto mt-4  text-center  showHistory ">{{__('frontend.View History')}}</button>
                                            @endif

                                            @if($alreadyJoin == 1 && $certificate)
                                                @if($isPass==1)
                                                    <a href="{{$isPass==1?route('getCertificate',[$course->id,$course->title]):'#'}}"
                                                       class="theme_line_btn mr_15 m-auto mt-4  text-center">
                                                        {{__('frontend.Get Certificate')}}
                                                    </a>
                                                @endif
                                            @endif
                                        @else
                                            @if(!onlySubscription())
                                                @if($isFree)
                                                    @if($is_cart == 1)
                                                        <a href="javascript:void(0)"
                                                           class="theme_btn text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                                    @else
                                                        <a href="{{route('addToCart',[@$course->id])}}"
                                                           class="theme_btn text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                                    @endif
                                                @else
                                                    <a href="{{route('buyNow',[@$course->id])}}"
                                                       class="theme_btn mr_15 m-auto mt-4 text-center"
                                                    >{{__('frontend.Buy Now')}}</a>
                                                @endif
                                            @endif
                                        @endif
                                    @endif


                                    @if(count($preResult)!=0)
                                        <div id="historyDiv" class="pt-5 " style="display:none;">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>{{__('common.Date')}}</th>
                                                    <th>{{__('quiz.Marks')}}</th>
                                                    <th>{{__('quiz.Percentage')}}</th>
                                                    <th>{{__('common.Rating')}}</th>
                                                    <th>{{__('common.Details')}}</th>
                                                </tr>
                                                @foreach($preResult as $pre)
                                                    <tr>
                                                        <td>{{$pre['date']}}</td>
                                                        <td>{{$pre['publish']==1?$pre['score']:'--'}}
                                                            /{{$pre['totalScore']}}</td>
                                                        <td>
                                                            {{$pre['publish']==1?$pre['mark']:'--'}} %
                                                        </td>
                                                        @if($pre['publish']==1)
                                                            <td class="{{$pre['text_color']}}">{{$pre['status']}}</td>
                                                        @else
                                                            <td class="">{{__('quiz.Pending')}}</td>
                                                        @endif

                                                        <td>
                                                            <a href="{{$course->quiz->show_ans_sheet==1?route('quizResultPreview',$pre['quiz_test_id']):'#'}}"
                                                               data-quiz_test_id="{{$pre['quiz_test_id']}}"
                                                               title="{{$course->quiz->show_ans_sheet!=1?__('quiz.Answer Sheet is currently locked by Teacher'):''}}"
                                                               class=" font_1 font_16 f_w_600 theme_text3 submit_q_btn">{{__('student.See Answer Sheet')}}</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>

                                            @if($course->quiz->show_ans_with_explanation==1)
                                                <x-quiz-details-question-list :quiz="$course->quiz"/>
                                            @endif
                                        </div>

                                    @endif


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="course_tabs">
                                <ul class="w-100 nav lms_tabmenu mb_55" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Overview-tab" data-bs-toggle="tab"
                                           href="#Overview"
                                           role="tab" aria-controls="Overview"
                                           aria-selected="true">{{__('frontend.Overview')}}</a>
                                    </li>
                                    @if(Settings('hide_review_section')!='1')
                                        <li class="nav-item">
                                            <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews"
                                               role="tab" aria-controls="Instructor"
                                               aria-selected="false">{{__('frontend.Reviews')}}</a>
                                        </li>
                                    @endif
                                    @if(Settings('hide_qa_section')!='1')
                                        <li class="nav-item">
                                            <a class="nav-link" id="QA-tab" data-bs-toggle="tab" href="#QASection"
                                               role="tab" aria-controls="Instructor"
                                               aria-selected="false">{{__('frontend.QA')}}</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="tab-content lms_tab_content" id="myTabContent">
                                <div class="tab-pane fade show active " id="Overview" role="tabpanel"
                                     aria-labelledby="Overview-tab">
                                    <!-- content  -->
                                    @if(isModuleActive('Installment') && $course_price > 0)
                                        @includeIf(theme('partials._installment_plan_details'), ['course' => $course,'position'=>'top_of_page'])
                                    @endif
                                    <div class="course_overview_description">
                                        <div class="single_overview">
                                            <h4 class="font_22 f_w_700 mb_20">{{__('frontend.Instructions')}}</h4>
                                            <div class="theme_border"></div>
                                            <p class="mb_25">  {{$course->quiz->instruction}} </p>

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

                                        </div>


                                    </div>
                                    @if(isModuleActive('Installment') && $course_price > 0)
                                        @includeIf(theme('partials._installment_plan_details'), ['course' => $course,'position'=>'bottom_of_page'])
                                    @endif
                                    <!--/ content  -->
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
                                                                                            class="primary_textarea gray_input"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 mb_30">

                                                                <button type="submit"
                                                                        class="theme_btn height_50">
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

                        <div class="col-xl-4 col-lg-4">
                            <div class="sidebar__widget mb_30">
                                @if(isModuleActive('EarlyBird') && Auth::check() && !$isEnrolled)
                                    @includeIf(theme('partials._early_bird_offer'), ['price_plans' => $course->pricePlans, 'product' => $course])
                                @endif

                                <div class="sidebar__title">
                                    <div id="price-container">
                                        <h3 id="price_show_tag">

                                            {{getPriceFormat($course_price)}}
                                        </h3>
                                        <div class="price_loader"></div>
                                    </div>

                                    <p>
                                        @if (Auth::check() && $isBookmarked )
                                            <i class="fas fa-heart"></i>
                                            <a href="{{route('bookmarkSave',[$course->id])}}"
                                               class=" mr_10 sm_mb_10">{{__('frontend.Already In Wishlist')}}
                                            </a>
                                        @elseif (Auth::check() && !$isBookmarked )
                                            <a href="{{route('bookmarkSave',[$course->id])}}"
                                               class="">
                                                <i
                                                    class="far fa-heart"></i>
                                                {{__('frontend.Add To Wishlist')}}  </a>
                                    @endif
                                </div>
                                @if($showWaitList)
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#courseWaitList"
                                       class="theme_btn d-block text-center height_50 mb_10">
                                        {{ __('frontend.Enter to Wait List') }}
                                    </a>
                                    @include(theme('partials._course_wait_list_form'),['course' => $course])
                                @endif
                                @if($alreadyWaitListRequest)
                                    <a href="#"
                                       class="theme_btn d-block text-center height_50 mb_10">
                                        {{ __('frontend.Already In Wait List') }}
                                    </a>
                                @endif
                                @if(!onlySubscription())

                                    @if($course->is_upcoming_course && $course->publish_status == 'pending')
                                        <x-upcoming-course-action :course="$course"/>
                                    @else
                                        @if (Auth::check())
                                            @if ($isEnrolled)
                                                <a href="#"
                                                   class="theme_btn d-block text-center height_50 mb_10">{{__('common.Already Enrolled')}}</a>
                                            @else
                                                @if($isFree)
                                                    @if($is_cart == 1)
                                                        <a href="javascript:void(0)"
                                                           class="theme_btn d-block text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                                    @else
                                                        <a href="{{route('addToCart',[@$course->id])}}"
                                                           class="theme_btn d-block text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                                    @endif
                                                @else
                                                    @if($is_cart == 1)
                                                        <a href="javascript:void(0)"
                                                           class="theme_btn d-block text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                                    @else
                                                        <a href=" {{route('addToCart',[@$course->id])}} "
                                                           class="theme_btn d-block text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                                        <a href="{{route('buyNow',[@$course->id])}}"
                                                           class="theme_line_btn d-block text-center height_50 mb_20">{{__('common.Buy Now')}}</a>
                                                    @endif
                                                @endif
                                            @endif

                                        @else
                                            @if($isFree)
                                                @if($is_cart == 1)
                                                    <a href="javascript:void(0)"
                                                       class="theme_btn d-block text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                                @else
                                                    <a href=" {{route('addToCart',[@$course->id])}} "
                                                       class="theme_btn d-block text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                                @endif
                                            @else
                                                @if($is_cart == 1)
                                                    <a href="javascript:void(0)"
                                                       class="theme_btn d-block text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                                @else
                                                    <a href=" {{route('addToCart',[@$course->id])}} "
                                                       class="theme_btn d-block text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                                    <a href="{{route('buyNow',[@$course->id])}}"
                                                       class="theme_line_btn d-block text-center height_50 mb_20">{{__('common.Buy Now')}}</a>
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

                                <h4 class="f_w_700 mb_10">{{__('frontend.This course includes')}}:</h4>
                                <ul class="course_includes">
                                    <li><i class="ti-thumb-up"></i>
                                        <p>{{__('frontend.Skill Level')}}
                                            @foreach($levels as $level)
                                                @if (@$course->level==$level->id)
                                                    {{ $level->title}}
                                                @endif
                                            @endforeach
                                        </p>
                                    </li>
                                    <li><i class="ti-agenda"></i>
                                        <p>{{__('frontend.Questions')}} {{$course->quiz->total_questions}} </p></li>
                                    @if(!Settings('hide_total_enrollment_count') == 1)
                                    <li><i class="ti-user"></i>
                                        <p>{{__('frontend.Enrolled')}} {{$course->total_enrolled}} {{__('frontend.students')}}</p>
                                    </li>
                                    @endif
                                    @if($course->certificate)
                                        <li><i class="ti-user"></i>
                                            <p>{{__('frontend.Certificate of Completion')}}</p></li>
                                    @endif

                                    <li><i class="ti-blackboard"></i>
                                        @if($course->access_limit>0)
                                            <p>{{$course->access_limit}} {{__('frontend.Days')}} {{__('frontend.Access')}}</p>
                                        @else
                                            <p>{{__('frontend.Full lifetime access')}}</p>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                                                <textarea class="lms_summernote" name="review" id=""
                                                                          placeholder="{{__('frontend.Write your review') }}"
                                                                          cols="30"
                                                                          rows="10">{{old('review')}}</textarea>
                            <span class="text-danger" role="alert">{{$errors->first('review')}}</span>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <div class="mt-40 d-flex justify-content-between">
                            <button type="button" class="theme_line_btn me-2"
                                    data-bs-dismiss="modal">{{ __('common.Cancel') }}
                            </button>
                            <button class="theme_btn "
                                    type="submit">{{ __('common.Submit') }}</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @include(theme('partials._delete_model'))
</div>
