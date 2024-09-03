<header class="navbar navbar-expand-lg fixed-top">
    <div class="container">

        <a class="navbar-brand pe-sm-3" href="{{url('/')}}">
            @if($logo = Settings('logo'))
                <span class="text-primary flex-shrink-0 me-2">
                  <img src="{{asset($logo)}}" width="100">
              </span>
            @endif
            <span class="d-none d-sm-inline">{{__("FOL EDU")}}</span>
        </a>

        <div class="nav align-items-center order-lg-3 ms-n1 me-3 me-sm-0">
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

            @guest
                <a class="nav-link fs-4 p-2 mx-sm-1 d-none d-sm-flex" href="{{url('login')}}" aria-label="Account">
                    <i class="ai-user"></i>
                </a>
            @endguest

            <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle px-4" type="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">
                    <img class="me-2" src="/public/frontend2/img/flags/en.png" width="18" alt="English / USD">
                    Eng
                </button>
                <div class="dropdown-menu dropdown-menu-end my-1">
                    <a class="dropdown-item pb-1" href="#">
                        <img class="me-2" src="/public/frontend2/img/flags/fr.png" width="18" alt="Français">
                        Français
                    </a>
                    <a class="dropdown-item pb-1" href="#">
                        <img class="me-2" src="/public/frontend2/img/flags/de.png" width="18" alt="Deutsch">
                        Deutsch
                    </a>
                    <a class="dropdown-item" href="#">
                        <img class="me-2" src="/public/frontend2/img/flags/it.png" width="18" alt="Italiano">
                        Italiano
                    </a>
                </div>
            </div>

            @if(Settings('show_cart')==1)
                <a class="nav-link position-relative fs-4 p-2 ml-2" href="#cartOffcanvas" data-bs-toggle="offcanvas"
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


                @if(Settings('category_show'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('Learning Programs')}}
                        </a>
                        <div class="dropdown-menu overflow-hidden p-2 custom-dropdown-menu">
                            <div class="d-lg-flex mx-2" style="padding: 25px;">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                    @foreach(getCoursesByCategoryAndLevel() as $key => $category)
                                        <li class="nav-item w-100">
                                            <a href="#cat_{{$key}}"
                                               class="nav-link d-flex {{$key == 0 ? 'active' : ''}} justify-content-between"
                                               data-bs-toggle="tab" role="tab">
                                                <span>{{ $category['category'] }}</span>
                                                <i class="ai-chevron-right"></i>
                                            </a>
                                        </li>
                                    @endforeach

                                    <a href="{{route('courses')}}" class="btn btn-outline-primary w-100 mx-2 rounded-0">
                                        {{__('All courses')}}
                                    </a>
                                </ul>

                                <!-- Tabs content -->
                                <div class="tab-content">
                                    @foreach(getCoursesByCategoryAndLevel() as $key => $category)
                                        <div class="tab-pane p-2 fade {{$key == 0 ? 'show active' : ''}}"
                                             id="cat_{{$key}}" role="tabpanel">
                                            <div class="row">
                                                @foreach($category['levels'] as $level => $courses)
                                                    <div class="col-4">
                                                        <div class="text-black">{{ $level }}</div>
                                                        <!-- Flush list group -->
                                                        <ul class="list-group list-group-flush">
                                                            @foreach($courses as $course)
                                                                <li class="list-group-item">
                                                                    <a href="{{route('courseDetailsView', $course->slug)}}">{{ $course->title }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
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
                                <input value="{{request()->q}}" type="text" name="q" class="form-control"
                                       placeholder="{{__('Search for courses')}}"
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
