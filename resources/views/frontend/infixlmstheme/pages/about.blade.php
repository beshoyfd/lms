@extends(theme('layouts.master-front'))
@section('title'){{Settings('site_title')  ? Settings('site_title')  : 'FOL EDU'}} | {{__('common.About')}} @endsection
@section('css')
<style>

    .counter_area {
        padding: 150px 0 145px;
        position: relative
    }

    .counter_area:before {
        content: "";
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        width: 52%;
        background-image: url(../img/about/counter_bg.png);
        -webkit-clip-path: polygon(24% 0,100% 0,100% 100%,0 100%);
        clip-path: polygon(24% 0,100% 0,100% 100%,0 100%);
        background-repeat: no-repeat;
        background-position: 100%;
        background-size: cover
    }

    .counter_area .counter_wrapper .single_counter {
        display: flex;
        align-items: center
    }

    .counter_area .counter_wrapper .single_counter:not(:last-child) {
        margin-bottom: 53px
    }

    .counter_area .counter_wrapper .single_counter:first-child {
        padding-left: 165px
    }

    .counter_area .counter_wrapper .single_counter:nth-child(2) {
        padding-left: 105px
    }

    .counter_area .counter_wrapper .single_counter:nth-child(3) {
        padding-left: 15px
    }

    .counter_area .counter_wrapper .single_counter h3 {
        font-size: 60px;
        font-weight: 900;
        color: var(--system_primery_color);
        margin-right: 42px;
        min-width: 150px;
        margin-bottom: 0
    }

    .counter_area .counter_wrapper .single_counter .counter_content h4 {
        font-size: 22px;
        font-weight: 700;
        color: var(--system_secendory_color);
        margin-bottom: 15px
    }

    .counter_area .counter_wrapper .single_counter .counter_content p {
        font-size: 16px;
        font-weight: 400;
        line-height: 26px;
        color: #373737
    }

    @media (max-width: 767.98px) {
        .counter_area {
            padding:36px 0 72px
        }

        .counter_area .counter_wrapper .single_counter {
            padding-left: 0!important;
            flex-direction: column;
            align-items: flex-start
        }

        .counter_area .counter_wrapper .single_counter h3 {
            font-size: 40px;
            width: auto;
            margin-bottom: 20px
        }
    }

    @media (min-width: 768px) and (max-width:991.98px) {
        .counter_area {
            padding:25px 0 144px
        }
    }

    @media (max-width: 991.98px) {
        .counter_area:before {
            display:none
        }
    }

    @media (min-width: 992px) and (max-width:1199.98px) {
        .counter_area:before {
            width:45%
        }
    }

    @media (min-width: 992px) and (max-width:1499.98px) {
        .counter_area:before {
            width:45%
        }

        .counter_area .counter_wrapper .single_counter:first-child {
            padding-left: 30px
        }

        .counter_area .counter_wrapper .single_counter:nth-child(2) {
            padding-left: 10px
        }

        .counter_area .counter_wrapper .single_counter:nth-child(3) {
            padding-left: 0
        }

        .counter_area .counter_wrapper .single_counter h3 {
            margin-right: 30px;
            font-size: 50px
        }
    }

    .course_area .single_course .thumb {
        position: relative;
        overflow: hidden
    }

    .course_area .single_course .thumb img {
        transform: scale(1);
        transition: all .3s ease-in-out
    }

    .course_area .single_course .thumb .prise_tag {
        position: absolute;
        width: 60px;
        height: 60px;
        line-height: 60px;
        text-align: center;
        font-size: 14px;
        font-weight: 700;
        top: 20px;
        left: 20px;
        border-radius: 50%;
        background: #fff;
        color: var(--system_primery_color)
    }

    .course_area .single_course .course_content {
        padding-top: 26px;
        padding-right: 20px
    }

    .course_area .single_course .course_content h4 {
        font-weight: 700;
        transition: all .3s ease-in-out
    }

    .course_area .single_course .course_content h4:hover {
        color: var(--system_primery_color)
    }

    .course_area .single_course .course_content .rating_cart {
        display: flex;
        margin-bottom: 30px;
        margin-top: 10px
    }

    .course_area .single_course .course_content .rating_cart .rateing {
        border: 1px solid #e9e7f7;
        font-size: 14px;
        font-weight: 500;
        color: var(--system_secendory_color);
        padding: 0 16px;
        display: inline-flex;
        align-items: center;
        height: 40px;
        margin-right: 5px
    }

    .course_area .single_course .course_content .rating_cart .rateing span {
        margin-right: 7px
    }

    .course_area .single_course .course_content .rating_cart .rateing i {
        color: #ffc107
    }

    .course_area .single_course .course_content .rating_cart .cart_store {
        border: 1px solid #e9e7f7;
        font-size: 14px;
        color: var(--system_secendory_color);
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        display: inline-block;
        transition: all .3s ease-in-out
    }

    .course_area .single_course .course_content .rating_cart .cart_store:hover {
        border-color: var(--system_primery_color);
        color: var(--system_primery_color)
    }

    .course_area .single_course .course_content .course_less_students a {
        font-size: 14px;
        font-weight: 400;
        color: var(--system_secendory_color);
        display: inline-flex;
        align-items: center
    }

    .course_area .single_course .course_content .course_less_students a:not(:last-child) {
        margin-right: 30px
    }

    .course_area .single_course .course_content .course_less_students a i {
        font-size: 18px;
        font-weight: 400;
        margin-right: 10px
    }

    .course_area .single_course:hover img,.couse_wizged:hover img {
        transform: scale(1.1)
    }

    .couse_wizged:hover .thumb_inner {
        transform: scale(1)
    }

    .couse_wizged .thumb {
        position: relative;
        overflow: hidden;
        height: 215px
    }

    .couse_wizged .thumb img {
        transform: scale(1);
        transition: all .3s ease-in-out
    }

    .couse_wizged .thumb_inner {
        background-size: cover;
        background-position: top;
        background-repeat: no-repeat;
        height: 100%;
        transform: scale(1.1);
        transition: all .3s ease-in-out
    }

    .couse_wizged .thumb .prise_tag {
        position: absolute;
        text-align: center;
        font-size: 14px;
        font-weight: 700;
        top: 20px;
        left: 20px;
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        line-height: 1;
        border-radius: 50%;
        background: #fff;
        color: var(--system_primery_color);
        min-height: 70px;
        padding: 0 10px!important;
        min-width: 70px!important
    }

    .couse_wizged .thumb .prev_prise {
        text-decoration: line-through;
        color: var(--system_secendory_color);
        font-size: 12px;
        font-weight: 600;
        padding-bottom: 5px
    }

    .couse_wizged .course_content {
        padding-top: 26px;
        padding-right: 20px
    }

    .couse_wizged .course_content h4 {
        font-weight: 700;
        transition: all .3s ease-in-out
    }

    .couse_wizged .course_content h4:hover {
        color: var(--system_primery_color)
    }

    .couse_wizged .course_content .rating_cart {
        display: flex;
        margin-bottom: 30px;
        margin-top: 10px
    }

    .couse_wizged .course_content .rating_cart .rateing {
        border: 1px solid #e9e7f7;
        font-size: 14px;
        font-weight: 500;
        color: var(--system_secendory_color);
        padding: 0 16px;
        display: inline-flex;
        align-items: center;
        height: 40px;
        margin-right: 5px;
        background: #fff
    }

    .couse_wizged .course_content .rating_cart .rateing span {
        margin-right: 7px
    }

    .couse_wizged .course_content .rating_cart .rateing i {
        color: #ffc107
    }

    .couse_wizged .course_content .rating_cart .cart_store {
        border: 1px solid #e9e7f7;
        font-size: 14px;
        color: var(--system_secendory_color);
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        display: inline-block;
        background: #fff;
        transition: all .3s ease-in-out
    }

    .couse_wizged .course_content .rating_cart .cart_store:hover {
        border-color: var(--system_primery_color);
        color: var(--system_primery_color)
    }

    .couse_wizged .course_content .course_less_students a {
        font-size: 14px;
        font-weight: 400;
        color: var(--system_secendory_color);
        display: inline-flex;
        align-items: center
    }

    .couse_wizged .course_content .course_less_students a:not(:last-child) {
        margin-right: 30px
    }

    .couse_wizged .course_content .course_less_students a i {
        font-size: 18px;
        font-weight: 400;
        margin-right: 10px
    }

    @media (max-width: 1199px) {
        .section_spacing .couse_wizged {
            margin-bottom:50px
        }
    }

    @media only screen and (max-width: 767px) {
        .section_spacing .couse_wizged {
            margin-bottom:30px
        }
    }

    .who_we_area {
        padding: 50px 0
    }

    .who_we_info {
        display: grid;
        grid-template-columns: repeat(2,1fr)
    }

    .who_we_info .info_left {
        border: 1px solid #e9e7f7;
        padding: 57px 80px 67px 50px;
        border-radius: 5px 0 0 5px
    }

    .who_we_info .info_left span {
        font-family: var(--font_family2);
        font-size: 14px;
        font-weight: 600;
        color: #373737;
        display: inline-block;
        margin-bottom: 21px
    }

    .who_we_info .info_left p {
        font-family: var(--font_family1);
        font-size: 24px;
        line-height: 35px;
        font-weight: 700;
        color: var(--system_secendory_color)
    }

    .who_we_info .info_right {
        background: var(--system_primery_color);
        display: flex;
        align-items: center;
        padding: 70px 65px 70px 70px
    }

    .who_we_info .info_right p {
        font-family: var(--font_family2);
        font-size: 35px;
        font-weight: 700;
        line-height: 45px;
        color: #fff
    }

    .about_gallery {
        display: grid;
        grid-template-columns: 330px 360px;
        grid-gap: 30px;
        align-items: center
    }

    .about_gallery .gallery_box .thumb.small_thumb {
        margin: 30px 0 0 50px
    }

    .about_area {
        padding-bottom: 120px
    }

    .about_area .section__title h3 {
        margin-bottom: 40px
    }

    .about_area .section__title p {
        font-size: 16px;
        line-height: 26px;
        font-family: var(--font_family2);
        color: var(--system_secendory_color);
        font-weight: 400
    }

    @media (max-width: 767.98px) {
        .who_we_area {
            padding:75px 0
        }

        .who_we_area .who_we_info {
            grid-template-columns: repeat(1,1fr)
        }

        .who_we_area .who_we_info .info_left,.who_we_area .who_we_info .info_right {
            padding: 35px 30px;
            border-radius: 5px
        }

        .about_gallery_area {
            padding-bottom: 30px
        }

        .about_gallery_area .about_gallery {
            grid-template-columns: auto
        }

        .about_gallery_area .about_gallery .gallery_box .thumb {
            margin-bottom: 30px
        }

        .about_gallery_area .about_gallery .gallery_box .thumb.small_thumb {
            margin: 0
        }
    }

    @media (max-width: 575.98px) {
        .who_we_area .who_we_info .info_left p {
            font-size:20px;
            line-height: 31px
        }

        .who_we_area .who_we_info .info_right p {
            font-size: 25px;
            line-height: 35px
        }
    }

    @media (min-width: 768px) and (max-width:991.98px) {
        .about_gallery_area .about_gallery {
            grid-template-columns:repeat(2,1fr);
            margin-bottom: 40px
        }
    }

    @media (min-width: 992px) and (max-width:1499.98px) {
        .about_gallery_area .about_gallery {
            grid-template-columns:repeat(2,1fr);
            padding-right: 40px
        }
    }
</style>

@endsection
@section('js') @endsection

@section('mainContent')
    <section class="bg-secondary py-5">
        <div class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5">
    <x-breadcrumb :banner="$frontendContent->about_page_banner" :title="$frontendContent->about_page_title"
                  :subTitle="$frontendContent->about_page_title"/>

    <x-about-page-who-we-are :whoWeAre="$about->who_we_are" :bannerTitle="$about->banner_title"/>

    <x-about-page-gallery :about="$about"/>

    <x-about-page-counter :about="$about"/>

    @if($about->show_brand)
        <x-about-page-brand/>
    @endif

        </div>
    </section>
@endsection
