<section style="color: #000; background-color: #f3f2f2;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h2 class=" text-center mb-2">
                    {{__('What our clients say about their')}}
                </h2>

            </div>
        </div>

        <div class="row text-center mt-4">

            @foreach($testimonials as $testimonial)
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">
                            <div class="d-flex justify-content-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 119.47 119.47"><g id="Group_2217" data-name="Group 2217" transform="translate(-289.739 -151.585)">
                                        <circle id="Ellipse_524" data-name="Ellipse 524" cx="42.239" cy="42.239" r="42.239" transform="translate(289.739 211.32) rotate(-45)" fill="#c62334"></circle> <g id="Group_2207" data-name="Group 2207" transform="translate(332.104 200.845)"><path id="Path_32619" data-name="Path 32619" d="M348.767,232.088a7.81,7.81,0,0,0,.447-15.608,10.972,10.972,0,0,1,3.011-5.343c-4.314,0-11.268,5.883-11.268,13.14A7.81,7.81,0,0,0,348.767,232.088Z" transform="translate(-340.956 -211.138)" fill="#fff"></path> <path id="Path_32620" data-name="Path 32620" d="M371.881,232.088a7.81,7.81,0,0,0,.448-15.608,10.972,10.972,0,0,1,3.011-5.343c-4.314,0-11.268,5.883-11.268,13.14A7.81,7.81,0,0,0,371.881,232.088Z" transform="translate(-344.951 -211.138)" fill="#fff"></path></g></g></svg>

                            </div>
                            <h5 class="font-weight-bold">{{ $testimonial->name }}</h5>
                            <p class="mb-2">
                                <i class="fas fa-quote-left pe-2"></i>{{ Str::limit($testimonial->body, 100) }}
                            </p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>

