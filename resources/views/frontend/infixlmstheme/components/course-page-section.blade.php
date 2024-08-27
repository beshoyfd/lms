<div class="row pt-xl-3 mt-n1 mt-sm-0">
    <div class="col-lg-9 offset-lg-3 pt-lg-3">
        <h1 class="pb-2 pb-sm-3">Professional Training Programs ({{$total}})</h1>
    </div>
</div>

<div class="row pb-2 pb-sm-4">
    <x-class-page-section-sidebar :level="$level" :type="$type" :categories="$categories"
                                  :category="$category" :languages="$languages" :language="$language"
                                  :mode="$mode"/>
    <!-- Product grid -->
    <div class="col-lg-9">

        <!-- Active filters + Sorting -->
        <div class="d-flex align-items-start justify-content-between mb-4">
            <div class="me-3">
                <div class="nav d-md-none">
                    <a class="nav-link dropdown-toggle fs-sm p-0 mb-2" href="#activeFilters" data-bs-toggle="collapse">Active
                        filters</a>
                </div>
                <div class="collapse d-md-block" id="activeFilters">
                    <div class="pt-2 pt-md-0">
                        <button type="button" class="btn btn-outline-secondary rounded-custom me-2">All</button>
                        <button type="button" class="btn btn-outline-secondary rounded-custom me-2">Live Online</button>
                        <button type="button" class="btn btn-outline-secondary rounded-custom me-2">Self Study</button>
                        <button type="button" class="btn btn-outline-secondary rounded-custom me-2">Exam Simulation
                        </button>
                        <button type="button" class="btn btn-outline-secondary rounded-custom me-2">Classroom</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

            @if(isset($courses))
                @foreach ($courses as $course)
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <span
                                class="badge bg-danger bg-opacity-10 text-danger position-absolute top-0 start-0 mt-3 ms-3">{{$course->category?->name}}</span>
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0"
                                type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
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
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{courseDetailsUrl(@$course->id,@$course->type,@$course->slug)}}">
                                    {{$course->title}}
                                </a>
                            </h3>

                        </div>
                        <div class="d-flex align-items-center">
                            <x-price-tag :price="$course->price"
                                         :discount="$course->discount_price"/>
                            <div class="nav ms-auto" data-bs-toggle="tooltip"
                                 data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>'
                                 data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>


        <!-- Pagination -->
        <div class="row gy-3 align-items-center pt-3 pt-sm-4 mt-md-2">
            <div class="col col-md-4 col-6 order-md-1 order-1">
                <div class="d-flex align-items-center">
                    <span class="text-body-secondary fs-sm">Show</span>
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
                    <button class="btn btn-primary w-md-auto w-100" onclick="loadMoreCourse()" type="button">Load more
                        courses
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
    Filters
</button>
