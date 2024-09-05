<div>

    <div class="brand_area mt-4 pt-4 mb-5">
        <h2 class="h1 text-center pt-sm-3 mt-xxl-3 mx-auto" style="max-width: 40rem;">{{__("Our Sponsors")}}</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="barnd_wrapper brand_active d-flex  justify-content-center">
                        @foreach($sponsors as $sponsor)
                            <div class="single_brand  mx-4">
                                <img src="{{asset($sponsor->image)}}" alt="{{$sponsor->title}}" width="200">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
