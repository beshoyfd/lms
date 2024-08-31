<aside class="col-lg-3">
    <div class="offcanvas-lg offcanvas-start" id="shopSidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Filters</h5>
            <button class="btn-close" type="button" data-bs-dismiss="offcanvas" data-bs-target="#shopSidebar"
                    aria-label="Close"></button>
        </div>

        <style>
            .category {
                display: flex;
                align-items: center;
                color: #000;
                font-size: 14px;
                border: 1px solid #e5e5e5;
                border-radius: 5px;
                padding: 10px 20px;
                min-height: 70px;
                margin-bottom: 10px;
                transition: .5s ease;
                cursor: pointer;
            }

            .rounded-custom {
                border-radius: 5px;
            }

            .active-category {
                background-color: #2a3261 !important;
                color: rgb(255, 255, 255) !important;
            }

            .active-category * {
                color: rgb(255, 255, 255) !important;
            }

            .active-category .icon img {
                filter: brightness(0) invert(1);
            }

            .category:hover {
                background-color: #2a3261 !important;
                color: rgb(255, 255, 255) !important;
            }

            .category:hover * {
                color: rgb(255, 255, 255) !important;
            }

            .category:hover .icon img {
                filter: brightness(0) invert(1);
            }

        </style>
        <!-- Body -->
        <div class="offcanvas-body pt-2 pt-lg-0 pe-lg-4">

            <div class="category-list">
                <div class="category d-flex {{request()->query('category_id') == '' ? 'active-category' : ''}}"
                     onclick="filterData('category_id', '')">
                    <div class="icon">
                        <img src="/public/frontend2/front-dist/images/new-website/all-categories.svg"
                             width="30" alt="">
                    </div>
                    <div class="mb-0 text-muted mx-3">Choose a Category</div>
                </div>
                @if(isset($categories ))
                    @foreach ($categories  as $cat)
                        <div
                            class="category d-flex {{request()->query('category_id') == $cat->id ? 'active-category' : ''}}"
                            onclick="filterData('category_id', '{{$cat->id}}')">
                            <div class="icon">
                                <img src="/public/frontend2/front-dist/images/new-website/change_icon.png"
                                     width="30" alt="">
                            </div>
                            <div class="mb-0 text-muted mx-3">{{$cat->name}}</div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="courses_sidebar_filters">

                <div class="single_course_categry">
                    <h4 class="font_18 f_w_700">
                        {{__('frontend.Level')}}
                    </h4>
                    <ul class="Check_sidebar">

                        @foreach($levels as $l)
                            <li>
                                <label class="primary_checkbox d-flex">
                                    <input name="level" type="checkbox" value="{{$l->id}}"
                                           class="level" {{$level!= "" && in_array($l->id,$level)?'checked':''}}>
                                    <span class="checkmark mr_15"></span>
                                    <span class="label_name">{{$l->title}}</span>
                                </label>
                            </li>
                        @endforeach


                    </ul>
                </div>
                <div class="single_course_categry">
                    <h4 class="font_18 f_w_700">
                        {{__('frontend.Class Price')}}
                    </h4>
                    <ul class="Check_sidebar">
                        <li>
                            <label class="primary_checkbox d-flex">
                                <input type="checkbox" class="price"
                                       value="paid" {{request()->price == 'paid' ? 'checked' : ''}} >
                                <span class="checkmark mr_15"></span>
                                <span class="label_name">{{__('frontend.Paid Class')}}</span>
                            </label>
                        </li>
                        <li>
                            <label class="primary_checkbox d-flex">
                                <input type="checkbox" class="price"
                                       value="free" {{request()->price == 'free' ? 'checked' : ''}}>
                                <span class="checkmark mr_15"></span>
                                <span class="label_name">{{__('frontend.Free Class')}}</span>
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="single_course_categry">
                    <h4 class="font_18 f_w_700">
                        {{__('frontend.Language')}}
                    </h4>
                    <ul class="Check_sidebar">
                        @if(isset($languages))
                            @foreach ($languages as $lang)

                                <li>
                                    <label class="primary_checkbox d-flex">
                                        <input type="checkbox" class="language"
                                               value="{{$lang->code}}" {{$language!= "" && in_array($lang->code, $language)?'checked':''}}>
                                        <span class="checkmark mr_15"></span>
                                        <span class="label_name">{{$lang->name}}</span>
                                    </label>
                                </li>
                            @endforeach
                        @endif

                    </ul>
                </div>

            </div>

        </div>
    </div>
</aside>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');

        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', updateURLParams);
        });

        function updateURLParams() {
            const levels = [];
            const languages = [];

            document.querySelectorAll('input.level:checked').forEach(function (el) {
                levels.push(el.value);
            });

            let price = document.querySelectorAll('input.price:checked')[0].value;
            document.querySelectorAll('input.language:checked').forEach(function (el) {
                languages.push(el.value);
            });

            let params = new URLSearchParams();

            if (levels.length) {
                levels.forEach(level => params.append('level[]', level));
            }

            if (languages.length) {
                languages.forEach(language => params.append('language[]', language));
            }

            window.location.href = window.location.origin + window.location.pathname + '?price=' + price + '&' + params.toString();
        }
    });


</script>
