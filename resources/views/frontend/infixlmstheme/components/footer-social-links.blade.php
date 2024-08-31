<div class="d-flex mb-4 mb-sm-0">
    @if(isset($social_links))
        @foreach($social_links as $social)
            <a class="btn btn-icon btn-sm btn-secondary btn-telegram rounded-circle mx-2 ms-sm-0 me-sm-3" href="{{$social->link}}"
               aria-label="{{$social->name}}">
                <i class="{{$social->icon}}"></i>
            </a>
        @endforeach
    @endif
</div>
