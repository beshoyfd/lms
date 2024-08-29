<header class="navbar navbar-expand-lg fixed-top">
    <div class="container">

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand pe-sm-3" href="{{url('/')}}">
              <span class="text-primary flex-shrink-0 me-2">
                <svg width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                  <path fill="#2a3261"
                        d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                </svg>
              </span>
            <span class="d-none d-sm-inline">{{Settings('site_title')}}</span>
        </a>

        <!--        &lt;!&ndash; Theme switcher &ndash;&gt;
                <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
                    <input class="form-check-input" type="checkbox" id="theme-mode">
                    <label class="form-check-label" for="theme-mode">
                        <i class="ai-sun fs-lg"></i>
                    </label>
                    <label class="form-check-label" for="theme-mode">
                        <i class="ai-moon fs-lg"></i>
                    </label>
                </div>-->

        <!-- Search + Account + Cart -->
        <div class="nav align-items-center order-lg-3 ms-n1 me-3 me-sm-0">
        @if(Settings('hide_menu_search_box')!=1)
            <!--                <a class="nav-link fs-4 p-2 mx-sm-1" href="#searchModal" data-bs-toggle="modal" aria-label="Search">
                    <i class="ai-search"></i>
                </a>-->
            @endif
            @guest
                <a class="nav-link fs-4 p-2 mx-sm-1 d-none d-sm-flex" href="{{url('login')}}" aria-label="Account">
                    <i class="ai-user"></i>
                </a>
            @endguest
            @if(Settings('show_cart')==1)
                <a class="nav-link position-relative fs-4 p-2" href="#cartOffcanvas" data-bs-toggle="offcanvas"
                   aria-label="Shopping cart">
                    <i class="ai-cart"></i>
                    <span class="badge bg-primary fs-xs position-absolute end-0 top-0 me-n1"
                          style="padding: .25rem .375rem;">{{@cartItem()}}</span>
                </a>
            @endif
        </div>

        <!-- Mobile menu toggler (Hamburger) -->
        <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <style>
            .custom-dropdown-menu {
                width: 60vw;
                /* height: 350px; */
                /* align-items: center; */
                /* display: flex; */
            }

            .nav-tabs-custom {
                min-width: 300px;
            }

            .nav-tabs-custom .nav-link.active, .navbar-nav .nav-link.show {
                border: none;
                background: #e3e5e9;
                color: black;
                border-radius: 12px;
            }

            .tab-pane {
                width: 700px;
                padding: 5px;
            }
        </style>
        <!-- Navbar collapse (Main navigation) -->
        <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">

                @if(isset($menus))
                    @foreach($menus->where('parent_id',null) as $menu)
                        @php
                            if($menu->title=='Forum' && !isModuleActive('Forum')){
                                continue;
                            }
                            if($menu->link == '/upcoming-courses'  && !isModuleActive('UpcomingCourse')){
                               continue;
                            }

                            if ($menu->link=='/saas-signup') {
                                if (Auth::check()) {
                                   continue;
                                }elseif (SaasDomain() !='main')
                                {
                                    continue;
                                }
                            }
                        @endphp

                        <li class="@if($menu->mega_menu==1) dropdown @else @endif nav-item">
                            <a class="nav-link" @if($menu->mega_menu==1)
                            class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"
                               @else
                               href="{{getMenuLink($menu)}}"
                                @endif>{{$menu->title}}</a>
                            @if(isset($menu->childs))
                                @if(count($menu->childs)!=0)
                                    @if(isset($menu->childs))
                                        @if($menu->mega_menu==1)
                                            <ul class="mega_menu submenu ">
                                                <li class="container mx-auto">
                                                    <div class="row">
                                                        @foreach($menu->childs as $sub)
                                                            <div
                                                                class="col-lg-{{$menu->mega_menu_column}}">
                                                                <h4>
                                                                    {{$sub->title}}
                                                                </h4>
                                                                @if(isset($sub->childs))
                                                                    @if(count($sub->childs)!=0)
                                                                        <ul class="mega_menu_list">
                                                                            @foreach( $sub->childs as $s)
                                                                                <li class="@if($sub->show==1)  @endif">
                                                                                    <a @if($s->is_newtab==1) target="_blank"
                                                                                       @endif  href="{{getMenuLink($s)}}">{{$s->title}}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    @endif
                                                                @endif

                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </li>
                                            </ul>
                                        @endif
                                    @endif
                                @endif
                            @endif
                        </li>
                    @endforeach
                @else

                @endif


                @if(Settings('category_show'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Learning
                            Programs</a>
                        <div class="dropdown-menu overflow-hidden p-2 custom-dropdown-menu">
                            <div class="d-lg-flex mx-2" style="padding: 25px;">
                                <!--  -->
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                    @foreach($categories as $key=>$category)
                                        <li class="nav-item  w-100">
                                            <a href="#cat_{{$key}}"
                                               class="nav-link d-flex {{$key == 0 ? 'active' : ''}} justify-content-between"
                                               data-bs-toggle="tab" role="tab">
                                                <span class="">{{$category->name}}</span>
                                                <i class="ai-chevron-right"></i>
                                            </a>
                                        </li>
                                    @endforeach

                                    <a href="{{route('courses')}}" class="btn btn-outline-primary w-100 mx-2 rounded-0">
                                        All courses
                                    </a>

                                </ul>

                                <!-- Tabs content -->
                                <div class="tab-content">
                                    @foreach($categories as $key=>$category)
                                        <div class="tab-pane p-2 fade {{$key == 0 ? 'show active' : ''}}"
                                             id="cat_{{$key}}"
                                             role="tabpanel">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="text-black">Beginner</div>
                                                    <!-- Flush list group -->
                                                    <ul class="list-group list-group-flush">
                                                        @foreach($category->childs as $childIdx=>$child)
                                                            <li class="list-group-item">{{$child->name}}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-black">Intermediate</div>
                                                    <!-- Flush list group -->
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Cras justo odio</li>
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-black">Advanced</div>
                                                    <!-- Flush list group -->
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Cras justo odio</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </li>
                @endif




                @if(Settings('hide_menu_search_box')!=1)
                    <li class="nav-item">
                        <div class="input-group input-group-sm" style="max-width: 300px;">
                            <div class="input-group-prepend">
                            <span class="input-group-text" style="padding: 0.25rem 0.5rem;">
                                <i class="ai-search"></i>
                            </span>
                            </div>
                            <form action="{{route('courses')}}?" method="get">
                                <input value="{{request()->q}}" type="text" name="q" class="form-control" placeholder="Search for courses"
                                       style="padding: 0.25rem 0.5rem;">
                            </form>
                        </div>
                    </li>
                @endif


                @guest
                    <li class="nav-item border-top mt-2 py-2 d-sm-none">
                        <a class="nav-link" href="{{url('login')}}">
                            <i class="ai-user fs-lg me-2"></i>
                            {{__('frontend.Sign In')}}
                        </a>
                    </li>
                @endguest

            </ul>
        </nav>
    </div>
</header>
