<div class="row pt-xl-3 mt-n1 mt-sm-0">
    <div class="col-lg-9 offset-lg-3 pt-lg-3">
        <h1 class="pb-2 pb-sm-3">{{__('Professional Training Programs')}} ({{$total}})</h1>
    </div>
</div>

<style>
    .rating_cart i.fa-star {
        color: #ffc107;
    }

    .boxx {
        border: 1px solid #eee;
        padding: 7px;
        border-radius: 20px;
        background: #2276fa;
    }

    .boxx a {
        background: #fff;
        padding: 5px;
        border-radius: 10px;
        font-size: 12px;
    }

    .dis__label {
        top: 0;
        right: 0;
        background: #d02d2d;
        padding: 18px 2px;
        color: #fff;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        height: 60px;
        z-index: 9;
        font-size: 12px;
    }

    .rateing .fa-star{
        color: orange;
    }
</style>

<div class="row pb-2 pb-sm-4">
    <x-class-page-section-sidebar :level="$level ?? []" :type="$type" :categories="$categories"
                                  :category="$category" :languages="$languages" :language="$language"
                                  :mode="$mode"/>
    <!-- Product grid -->
    <div class="col-lg-9">

        <!-- Active filters + Sorting -->
        <div class="d-flex align-items-start justify-content-between mb-4">
            <div class="me-3">
                <div class="nav d-md-none">
                    <a class="nav-link dropdown-toggle fs-sm p-0 mb-2" href="#activeFilters" data-bs-toggle="collapse">
                        {{__('Active filters')}}</a>
                </div>
                <div class="collapse d-md-block" id="activeFilters">
                    <div class="pt-2 pt-md-0">
                        <button type="button"
                                class="btn btn-outline-secondary rounded-custom me-2">{{__('All')}}</button>
                        <button type="button"
                                class="btn btn-outline-secondary rounded-custom me-2">{{__('Live Online')}}</button>
                        <button type="button"
                                class="btn btn-outline-secondary rounded-custom me-2">{{__('Self Study')}}</button>
                        <button type="button" class="btn btn-outline-secondary rounded-custom me-2">
                            {{__('Exam Simulation')}}
                        </button>
                        <button type="button"
                                class="btn btn-outline-secondary rounded-custom me-2">{{__('Classroom')}}</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

            @if(isset($courses))
                @foreach ($courses as $course)

                    <?php
                    $bookmarked = \Modules\StudentSetting\Entities\BookmarkCourse::where('user_id', Auth::id())
                        ->where('course_id', $course->id)->count();
                    if ($bookmarked == 0) {
                        $isBookmarked = false;
                    } else {
                        $isBookmarked = true;
                    }
                    ?>

                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <span
                                class="badge bg-danger bg-opacity-10 text-danger position-absolute top-0  mt-3 ms-3">{{$course->category?->name}}</span>

                            <a
                                href="{{route('bookmarkSave',[$course->id])}}"
                                class="btn btn-icon btn-sm {{$isBookmarked ? 'btn-danger bg-danger' : 'btn-light bg-light'}} border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-5 z-5 {{$isBookmarked ? '' : 'opacity-0'}}"
                                type="button" aria-label="{{__('Add to Favorites')}}">
                                <i class="ai-heart fs-xl {{$isBookmarked ?  'text-white' : 'text-nav' }}"></i>
                            </a>

                            @if($course->getDiscountPercentage())
                                <span class="position-absolute dis__label " style="{{isRtl() ? 'right:unset;left:0;' : ''}}height: 47px;">
                                {{$course->getDiscountPercentage()}}%</span>
                            @endif

                            <div class="swiper swiper-nav-onhover"
                                 data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper"
                                   href="{{courseDetailsUrl(@$course->id,@$course->type,@$course->slug)}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto"
                                             src="{{ getCourseImage($course->thumbnail) }}"
                                             width="226"

                                             alt="Product">
                                    </div>
                                </a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>

                            </div>

                            <div class="course_less_students d-flex justify-content-between boxx bg-primary mt-n1 rounded-1" style="padding: 2px 9px;
  position: absolute;
  width: 100%;left:0">
                            <span class=" text-white rounded-3 p-1"> <i class="fa fa-list"></i> {{$course->total_lessons}}
                                {{__('frontend.Lessons')}}</span>

                                <span class="rateing  text-white rounded-3  p-1" style="text-decoration: none; visibility: hidden">
                                <span>{{$course->total_rating}}/5</span>
                                <i class="fas fa-star"></i>
                            </span>

                                @if(!Settings('hide_total_enrollment_count') == 1)
                                    <span class=" text-white rounded-3  p-1">
                                    <i class="fa fa-user"></i> {{$course->total_enrolled}} {{__('frontend.Students')}}
                                </span>
                                @endif


                            </div>

                        </div>
                        <div class="d-flex mb-1 position-relative">
                            <h3 class="h6 mb-0">
                                <a href="{{courseDetailsUrl(@$course->id,@$course->type,@$course->slug)}}">
                                    {{$course->title}}
                                </a>
                            </h3>

                        </div>
                        <div class="d-flex align-items-center">
                            <x-price-tag :price="$course->price"
                                         :discount="$course->discount_price"/>
                        </div>


                        <div class="rating_cart d-flex justify-content-between mt-2">
                            @if(!onlySubscription())
                                @auth()
                                    @if(!$course->isLoginUserEnrolled && !$course->isLoginUserCart)
                                        <div class="nav ms-auto" data-bs-toggle="tooltip"
                                             data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>'
                                             data-bs-placement="left" title="{{__("Add to cart")}}">
                                            <a class="nav-link fs-lg py-2 px-1 cart_store"
                                               href="{{route('addToCart',[@$course->id])}}"
                                               aria-label="{{__("Add to cart")}}">
                                                <i class="ai-cart"></i>
                                            </a>
                                        </div>
                                    @endif
                                @endauth
                                @guest()
                                    @if(!$course->isGuestUserCart)
                                        <div class="nav ms-auto" data-bs-toggle="tooltip"
                                             data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>'
                                             data-bs-placement="left" title="{{__("Add to cart")}}">
                                            <a class="nav-link fs-lg py-2 px-1 cart_store"
                                               href="{{route('addToCart',[@$course->id])}}"
                                               aria-label="{{__("Add to cart")}}">
                                                <i class="ai-cart"></i>
                                            </a>
                                        </div>
                                    @endif
                                @endguest
                            @endif
                        </div>

                    </div>
                @endforeach
            @endif

        </div>


        <!-- Pagination -->
        <div class="row gy-3 align-items-center pt-3 pt-sm-4 mt-md-2">
            <div class="col col-md-4 col-6 order-md-1 order-1">
                <div class="d-flex align-items-center">
                    <span class="text-body-secondary fs-sm">{{__("Show")}}</span>
                    <select onchange="filterData('pg_size', this.value)" id="pg_size"
                            class="form-select form-select-flush w-auto">
                        <option {{request()->pg_size == 12 ? 'selected' : ''}} value="12">12</option>
                        <option {{request()->pg_size == 18 ? 'selected' : ''}} value="18">18</option>
                        <option {{request()->pg_size == 24 ? 'selected' : ''}} value="24">24</option>
                        <option {{request()->pg_size == 30 ? 'selected' : ''}} value="30">30</option>
                    </select>
                </div>
            </div>
            <div class="col col-md-4 col-12 order-md-2 order-3 text-center">
                @if ($courses->currentPage() < $courses->lastPage())
                    <button class="btn btn-primary w-md-auto w-100" onclick="loadMoreCourse()" type="button">{{__("Load More Courses")}}
                    </button>
                @endif
            </div>
            <div class="col col-md-4 col-6 order-md-3 order-2">
                {{ $courses->appends(request()->all())->links() }}
            </div>
        </div>
    </div>
</div>


<!-- Sidebar toggle button -->
<button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" type="button"
        data-bs-toggle="offcanvas" data-bs-target="#shopSidebar">
    <i class="ai-filter me-2"></i>
    {{__('Filters')}}
</button>
