<div class="d-flex justify-content-center justify-content-md-end gap-3">

    @if(isset($social_links))
        @foreach($social_links as $social)

            <a class="btn btn-secondary btn-icon btn-sm btn-facebook rounded-circle" href="{{$social->link}}"
               aria-label="{{$social->name}}">
                <i class="{{$social->icon}}"></i>
            </a>
        @endforeach
    @endif

</div>
