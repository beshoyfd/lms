<div class="testimonial-slider text-center owl-carousel">

    @foreach ($result as $testimonial)
        <div class="testimonial-single  w-100 text-center">
            <div class="testimonial-top d-inline-block mx-auto">
                <div class="rating">
                    @for($i=1;$i<=$testimonial->star;$i++)
                        <i class="fa fa-star"></i>
                    @endfor
                </div>
                <span class="d-block">{{__('frontend.Course Quality')}}</span>

            </div>
            <div class="testimonial-content mb-4">
                <p>“{{@$testimonial->body}}”</p>
            </div>
            <div class="testimonial-user text-center">
                <div class="testimonial-user-img mx-auto mb-1">
                    <img src="{{getProfileImage($testimonial->image,$testimonial->author)}}"
                         alt="{{$testimonial->author}}">
                </div>
                <span>{{@$testimonial->profession}}</span>
                <p><strong>{{@$testimonial->author}}</strong></p>
            </div>
        </div>
    @endforeach
</div>
<script>
    (function () {
        'use strict'
        jQuery(document).ready(function () {
            const navLeft = '<svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M8.3125 0.625244L0.499998 8.43778V10.6253L8.3125 18.4378L10.5313 16.2503L5.40625 11.094H22.8125V7.96903H5.40625L10.5625 2.81275L8.3125 0.625244Z" fill="currentColor"/></svg>';
            const navRight = '<svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.1875 17.8125L23 9.99996V7.81245L15.1875 -8.7738e-05L12.9687 2.18742L18.0937 7.3437H0.6875L0.6875 10.4687H18.0937L12.9375 15.625L15.1875 17.8125Z" fill="currentColor"/></svg>'
            const rtl = $("html").attr("dir");
            $('.testimonial-slider').owlCarousel({
                nav: false,
                navText: [navLeft, navRight],
                dots: true,
                items: 4,
                lazyLoad: true,
                autoplay: true,
                autoplayHoverPause: true,
                loop: true,
                margin: 24,
                stagePadding: 0,
                rtl: rtl === 'rtl',
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    },
                    1400: {
                        items: 4
                    }
                }
            });
        })
    })();
</script>
