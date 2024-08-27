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
                <div class="category d-flex {{request()->query('category_id') == '' ? 'active-category' : ''}}" onclick="filterData('category_id', '')">
                    <div class="icon">
                        <img src="/public/frontend2/front-dist/images/new-website/all-categories.svg"
                             width="30" alt="">
                    </div>
                    <div class="mb-0 text-muted mx-3">Choose a Category</div>
                </div>
                @if(isset($categories ))
                    @foreach ($categories  as $cat)
                        <div class="category d-flex {{request()->query('category_id') == $cat->id ? 'active-category' : ''}}" onclick="filterData('category_id', '{{$cat->id}}')" >
                            <div class="icon">
                                <img src="/public/frontend2/front-dist/images/new-website/change_icon.png"
                                     width="30" alt="">
                            </div>
                            <div class="mb-0 text-muted mx-3">{{$cat->name}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</aside>

