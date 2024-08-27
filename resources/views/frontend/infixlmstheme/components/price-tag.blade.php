@if(showEcommerce())

    <span class="me-2">{{getPriceFormat($discount)}}</span>
    <del class="fs-sm text-body-secondary">{{getPriceFormat($price)}}</del>

@endif
