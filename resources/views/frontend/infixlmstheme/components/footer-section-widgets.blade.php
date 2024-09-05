<div class="row" id="links">

    @if(isset($sectionWidgets))
        @if(count($sectionWidgets['one'])!=0)
            <div class="col-md-3 col-xl-3 pb-2 pb-md-0">
                <h3 class="h6 text-uppercase d-none d-md-block">{{function_exists('footerSettings')?footerSettings('footer_section_one_title'):''}}</h3>
                <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                   href="#useful" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="useful"
                   data-show-label="Useful links" data-hide-label="Useful links" aria-label="Useful links"></a>
                <div class="collapse d-md-block" id="useful" data-bs-parent="#links">
                    <ul class="nav flex-column pb-2 pb-md-0">
                        @foreach($sectionWidgets['one'] as $page)
                            @if(isset($page->frontpage->id))
                                @php
                                    $route = $page->is_static == 0 ? route('frontPage',$page->frontpage->slug) : url($page->frontpage->slug);
                                @endphp
                                <li class="nav-item"><a class="nav-link fw-normal px-0 py-1"
                                                        href="{{ $route }}">{{$page->name}} </a></li>
                            @elseif($page->custom==1)
                                <li class="nav-item"><a class="nav-link fw-normal px-0 py-1"
                                                        href="{{$page->custom_link}}">{{$page->name}} </a></li>
                            @else
                                <li class="nav-item"><a class="nav-link fw-normal px-0 py-1"
                                                        href="#">{{$page->name}} </a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        @if(count($sectionWidgets['two'])!=0)
            <div class="col-md-3 col-xl-3 pb-2 pb-md-0">
                <h3 class="h6 text-uppercase d-none d-md-block">{{function_exists('footerSettings')?footerSettings('footer_section_two_title'):''}}</h3>
                <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                   href="#useful" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="useful"
                   data-show-label="Useful links" data-hide-label="Useful links" aria-label="Useful links"></a>
                <div class="collapse d-md-block" id="useful" data-bs-parent="#links">
                    <ul class="nav flex-column pb-2 pb-md-0">
                        @foreach($sectionWidgets['two'] as $page)
                            @if(isset($page->frontpage->id))
                                @php
                                    $route = $page->is_static == 0 ? route('frontPage',$page->frontpage->slug) : url($page->frontpage->slug);
                                @endphp
                                <li class="nav-item"><a class="nav-link fw-normal px-0 py-1"
                                                        href="{{ $route }}">{{$page->name}} </a></li>
                            @elseif($page->custom==1)
                                <li class="nav-item"><a class="nav-link fw-normal px-0 py-1"
                                                        href="{{$page->custom_link}}">{{$page->name}} </a></li>
                            @else
                                <li class="nav-item"><a class="nav-link fw-normal px-0 py-1"
                                                        href="#">{{$page->name}} </a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        @if(count($sectionWidgets['three'])!=0)
            <div class="col-md-3 col-xl-3 pb-2 pb-md-0">
                <h3 class="h6 text-uppercase d-none d-md-block">{{function_exists('footerSettings')?footerSettings('footer_section_three_title'):''}}</h3>
                <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                   href="#useful" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="useful"
                   data-show-label="Useful links" data-hide-label="Useful links" aria-label="Useful links"></a>
                <div class="collapse d-md-block" id="useful" data-bs-parent="#links">
                    <ul class="nav flex-column pb-2 pb-md-0">
                        @foreach($sectionWidgets['three'] as $page)
                            @if(isset($page->frontpage->id))
                                @php
                                    $route = $page->is_static == 0 ? route('frontPage',$page->frontpage->slug) : url($page->frontpage->slug);
                                @endphp
                                <li class="nav-item"><a class="nav-link fw-normal px-0 py-1"
                                                        href="{{ $route }}">{{$page->name}} </a></li>
                            @elseif($page->custom==1)
                                <li class="nav-item"><a class="nav-link fw-normal px-0 py-1"
                                                        href="{{$page->custom_link}}">{{$page->name}} </a></li>
                            @else
                                <li class="nav-item"><a class="nav-link fw-normal px-0 py-1"
                                                        href="#">{{$page->name}} </a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

    @endif
</div>
