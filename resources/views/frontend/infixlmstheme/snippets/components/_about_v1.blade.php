<div data-type="component-text"
     data-preview="{{!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/about/1.jpg')}}"
     data-aoraeditor-title="About Section V1" data-aoraeditor-categories="Home Page">

    <style>
        .about .mt-40 {
            margin-top: 35px;
        }

        @media only screen and (max-width: 767px) {
            .about .mt-40 {
                margin-top: 0
            }
        }

        .counter {
            padding: 0 32px
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .counter {
                padding: 0
            }
        }

        @media only screen and (max-width: 991px) {
            .counter {
                padding: 0
            }
        }

        .counter #counters {
            position: relative;
            z-index: 1
        }

        .counter #counters .row {
            margin-top: -36px
        }

        @media (min-width: 480px) {
            .counter #counters .col-sm-6 {
                width: 50%
            }
        }

        .counter-shape {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            --width: 255px;
            width: var(--width);
            height: var(--width);
            border-radius: 100%;
            background-color: var(--system_primery_color)
        }

        @media only screen and (max-width: 767px) {
            .counter-shape {
                --width: 175px
            }
        }

        .counter-shape::before, .counter-shape::after {
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 100%;
            border: 1px dashed var(--system_primery_color);
            position: absolute;
            top: 0;
            left: 0;
            opacity: .3;
        }

        html[dir=rtl] .counter-shape::before,
        html[dir=rtl] .counter-shape::after {
            left: auto;
            right: 0;
        }

        .counter-shape::before {
            transform: scale(1.3)
        }

        .counter-shape::after {
            transform: scale(1.75)
        }

        .counter-item {
            padding: 40px;
            border-radius: 24px;
            position: relative;
            z-index: 1;
            background-color: #fff;
            margin-top: 36px;
            max-width: 270px;
        }

        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
            .counter-item {
                padding: 30px
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .counter-item {
                padding: 30px
            }
        }

        @media only screen and (max-width: 767px) {
            .counter-item {
                margin-top: 24px !important;
                padding: 24px;
            }
        }

        @media only screen and (max-width: 479px) {
            .counter-item {
                max-width: 100%;
            }
        }

        .counter-item-icon {
            --icon: 80px;
            width: var(--icon);
            height: var(--icon);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 100%;
            margin-bottom: 14px
        }

        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
            .counter-item-icon {
                margin-bottom: 10px
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .counter-item-icon {
                --icon: 70px
            }
        }

        @media only screen and (max-width: 767px) {
            .counter-item-icon {
                --icon: 60px
            }
        }

        .counter-item-icon > * {
            width: 36px
        }

        @media only screen and (max-width: 767px) {
            .counter-item-icon > * {
                width: 24px
            }
        }

        .counter-item label {
            display: inline-flex
        }

        .counter-item h4 {
            font-size: 32px;
            line-height: 1.25;
            line-height: 1;
            margin-bottom: 5px
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .counter-item h4 {
                font-size: 28px
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .counter-item h4 {
                font-size: 26px
            }
        }

        @media only screen and (max-width: 767px) {
            .counter-item h4 {
                font-size: 24px
            }
        }

        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
            .counter-item h4 {
                font-size: 21px
            }
        }

        .counter-item p {
            font-size: 20px;
            line-height: 1.5;
            color: currentColor;
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .counter-item p {
                font-size: 18px
            }
        }

        @media only screen and (max-width: 991px) {
            .counter-item p {
                font-size: 18px
            }
        }

        .about-content {
            position: relative;
            padding-left: 50px
        }

        html[dir=rtl] .about-content {
            padding-left: 0;
            padding-right: 50px;
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .about-content {
                padding-left: 20px
            }

            html[dir=rtl] .about-content {
                padding-left: 0;
                padding-right: 20px;
            }
        }

        @media only screen and (max-width: 991px) {
            .about-content {
                margin-top: 40px;
                padding-bottom: 20px;
                padding-left: 0
            }

            html[dir=rtl] .about-content {
                padding-right: 0;
            }
        }

        @media only screen and (max-width: 767px) {
            .about-content {
                margin-top: 26px
            }
        }

        .about-content::after {
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-color: rgba(255, 255, 255, 0.2);
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            filter: blur(150px)
        }

        html[dir=rtl] .about-content::after {
            left: auto;
            right: 0;
        }

        .about-content h3 {
            font-size: 48px;
            line-height: 1.25;
            font-weight: 600;
            margin-bottom: 24px
        }

        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
            .about-content h3 {
                font-size: 42px
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .about-content h3 {
                font-size: 36px
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .about-content h3 {
                font-size: 32px
            }
        }

        @media only screen and (max-width: 767px) {
            .about-content h3 {
                font-size: 28px
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .about-content h3 {
                margin-bottom: 18px
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .about-content h3 {
                font-size: 28px
            }
        }

        @media only screen and (max-width: 991px) {
            .about-content h3 {
                margin-bottom: 16px
            }
        }

        .about-content p {
            color: var(--system_paragraph_color);
            line-height: 1.5;
            margin-bottom: 26px
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .about-content p {
                margin-bottom: 16px
            }
        }

        @media only screen and (max-width: 991px) {
            .about-content p {
                margin-bottom: 14px
            }
        }

        @media only screen and (max-width: 479px) {
            .about-content p {
                font-size: 14px;
                line-height: 1.683
            }
        }

        .about-content ul {
            width: 56%
        }

        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
            .about-content ul {
                width: 66%
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .about-content ul {
                width: 66%
            }
        }

        @media only screen and (max-width: 991px) {
            .about-content ul {
                width: 100%;
                margin-top: 20px
            }
        }

        .about-content ul li {
            color: var(--system_paragraph_color);
            --width: 24px
        }

        .about-content ul li:not(:last-child) {
            margin-bottom: 20px
        }

        .about-content ul li .icon {
            color: #38485C;
            width: var(--width);
            height: var(--width);
            flex: 0 0 auto;
            position: relative;
            top: 3px
        }

        .about-content ul li .icon img, .about-content ul li .icon > * {
            width: 100%;
            height: 100%;
            object-fit: contain;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1
        }

        html[dir=rtl] .about-content ul li .icon img,
        html[dir=rtl] .about-content ul li .icon > * {
            left: auto;
            right: 0;
        }

        .about-content ul li .icon svg path {
            fill: #CEE8FF;
            stroke: var(--system_primery_color)
        }

        .about-content ul li .content {
            width: calc(100% - var(--width));
            flex: 0 0 auto;
            padding-left: 18px
        }

        html[dir=rtl] .about-content ul li .content {
            padding-left: 0;
            padding-right: 18px;
        }

        .about-content a {
            --btn-padding-y: 9px;
            min-width: 120px
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .about-content a {
                margin-top: 10px
            }
        }

        @media only screen and (max-width: 991px) {
            .about-content a {
                margin-top: 10px
            }
        }
    </style>
    <div class="about section-margin-lg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="">
                        <div class="row" id="counters">
                            <div class="counter-shape"></div>
                            <div class="col-sm-6">
                                <div class="counter-item ms-auto">
                                    <div class="counter-item-icon bg-orange">
                                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18.5726 34.4966C16.7247 34.4966 16.7091 33.1522 15.1171 32.0052C12.3478 30.0101 8.09093 27.6623 4.70159 27.2026C4.09404 27.1354 3.53292 26.8455 3.12654 26.3889C2.72016 25.9323 2.49731 25.3413 2.50102 24.73V4.82601C2.501 4.46888 2.57834 4.11597 2.72773 3.79158C2.87712 3.46719 3.09501 3.17901 3.36641 2.94687C3.63303 2.71896 3.9451 2.55037 4.28187 2.45233C4.61865 2.35428 4.97244 2.329 5.31973 2.37819C10.4238 3.2253 15.093 5.76898 18.5726 9.59803V34.4966Z"
                                                stroke="white" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M18.5724 34.4966C20.4203 34.4966 20.4359 33.1522 22.0279 32.0052C24.7973 30.0101 29.0541 27.6623 32.4434 27.2026C33.051 27.1354 33.6121 26.8455 34.0185 26.3889C34.4249 25.9323 34.6477 25.3413 34.644 24.73V4.82601C34.644 4.46888 34.5667 4.11597 34.4173 3.79158C34.2679 3.46719 34.05 3.17901 33.7786 2.94687C33.512 2.71896 33.1999 2.55037 32.8631 2.45233C32.5264 2.35428 32.1726 2.329 31.8253 2.37819C26.7212 3.2253 22.052 5.76898 18.5724 9.59803V34.4966Z"
                                                stroke="white" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <h4>
                                        <span
                                            class="d-flex align-items-center"><span class="counter p-0 m-0">100</span> +</span>
                                    </h4>
                                    <p>Online Courses</p>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-40">
                                <div class="counter-item">
                                    <div class="counter-item-icon bg-blue">
                                        <svg width="40" height="37" viewBox="0 0 40 37" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M27.1709 18.7017C30.9915 18.7017 34.0887 15.6045 34.0887 11.7839C34.0887 8.82843 32.2354 6.30583 29.6275 5.31494"
                                                stroke="white" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M15.5303 17.3302C19.6718 17.3302 23.0292 13.9729 23.0292 9.83137C23.0292 5.68987 19.6718 2.33252 15.5303 2.33252C11.3888 2.33252 8.03149 5.68987 8.03149 9.83137C8.03149 13.9729 11.3888 17.3302 15.5303 17.3302Z"
                                                stroke="white" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M27.0165 27.8659C30.6846 30.3089 28.2077 35.0208 23.8006 35.0208H7.25036C2.8432 35.0208 0.36634 30.3089 4.0344 27.8659C7.32457 25.6746 11.2759 24.3975 15.5255 24.3975C19.7751 24.3975 23.7264 25.6746 27.0165 27.8659Z"
                                                stroke="white" stroke-width="3"/>
                                            <path
                                                d="M36.6195 28.4199L35.788 29.6684L36.6195 28.4199ZM23.1628 33.5205C22.3344 33.5205 21.6628 34.192 21.6628 35.0205C21.6628 35.8489 22.3344 36.5205 23.1628 36.5205V33.5205ZM34.2513 25.4271C33.4917 25.0965 32.6079 25.4443 32.2774 26.2039C31.9468 26.9635 32.2946 27.8473 33.0542 28.1779L34.2513 25.4271ZM23.1628 36.5205H33.6527V33.5205H23.1628V36.5205ZM33.6527 36.5205C36.2184 36.5205 38.3575 35.1415 39.2822 33.2141C39.7481 32.2428 39.9061 31.1179 39.6022 30.0064C39.2959 28.8864 38.5558 27.9073 37.451 27.1715L35.788 29.6684C36.3752 30.0594 36.6185 30.4688 36.7084 30.7977C36.8007 31.1351 36.7678 31.5195 36.5773 31.9165C36.189 32.726 35.1528 33.5205 33.6527 33.5205V36.5205ZM33.0542 28.1779C34.0124 28.5949 34.9267 29.0947 35.788 29.6684L37.451 27.1715C36.4436 26.5005 35.3735 25.9155 34.2513 25.4271L33.0542 28.1779Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <h4>
                                    <span
                                        class="d-flex align-items-center"><span
                                            class="counter p-0 m-0">100</span> +</span>
                                    </h4>
                                    <p>Student Enrolled</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item ms-auto mt-0">
                                    <div class="counter-item-icon bg-sky">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20 38C29.9411 38 38 29.9411 38 20C38 10.0589 29.9411 2 20 2C10.0589 2 2 10.0589 2 20C2 29.9411 10.0589 38 20 38Z"
                                                stroke="white" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M8.23064 26.9231C9.51592 26.9231 10.7486 26.4125 11.6574 25.5037C12.5662 24.5948 13.0768 23.3622 13.0768 22.0769V17.9231C13.0768 16.6378 13.5874 15.4051 14.4962 14.4963C15.405 13.5875 16.6377 13.0769 17.9229 13.0769C19.2082 13.0769 20.4409 12.5663 21.3497 11.6575C22.2585 10.7487 22.7691 9.51604 22.7691 8.23076V2.21168C21.8665 2.07231 20.9417 2 20 2C10.0589 2 2 10.0589 2 20C2 22.4533 2.49078 24.7919 3.37953 26.9231H8.23064Z"
                                                stroke="white" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M37.9978 19.722C36.6117 19.0032 35.0748 18.6238 33.5134 18.6152H27.615C26.3297 18.6152 25.097 19.1258 24.1882 20.0346C23.2794 20.9435 22.7688 22.1761 22.7688 23.4614C22.7688 24.7467 23.2794 25.9793 24.1882 26.8881C25.097 27.797 26.3297 28.3075 27.615 28.3075C28.533 28.3075 29.4135 28.6722 30.0626 29.3214C30.7118 29.9706 31.0765 30.851 31.0765 31.7691V34.1783H31.0904C35.2707 30.9039 37.9663 25.8208 37.9996 20.1069V19.8928C37.9992 19.8358 37.9986 19.7789 37.9978 19.722Z"
                                                stroke="white" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <h4>
                                    <span
                                        class="d-flex align-items-center"><span
                                            class="counter p-0 m-0">100</span> +</span>
                                    </h4>
                                    <p>Countries Student</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item">
                                    <div class="counter-item-icon bg-green">
                                        <svg width="40" height="36" viewBox="0 0 40 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.25 6.86275L19.0872 7.8104C19.3721 8.15992 19.7991 8.36275 20.25 8.36275C20.7009 8.36275 21.1279 8.15992 21.4127 7.8104L20.25 6.86275ZM2.25 11.9473L0.750164 11.9251C0.750055 11.9325 0.75 11.9399 0.75 11.9473H2.25ZM38.25 11.9473H39.75C39.75 11.9399 39.7499 11.9325 39.7498 11.9251L38.25 11.9473ZM3.74984 11.9695C3.80301 8.37207 5.86454 5.0043 8.66757 3.69812C10.0351 3.06085 11.6143 2.89066 13.3317 3.4358C15.0693 3.98734 17.0448 5.30437 19.0872 7.8104L21.4127 5.91511C19.1068 3.08573 16.6732 1.34896 14.2393 0.576395C11.7853 -0.202583 9.43065 0.032806 7.40043 0.978862C3.40788 2.83934 0.817805 7.34926 0.750164 11.9251L3.74984 11.9695ZM20.25 32.6024C20.1152 32.6024 19.7289 32.5356 19.0552 32.2606C18.4195 32.0012 17.6408 31.6037 16.7661 31.0708C15.018 30.0057 12.967 28.449 11.0133 26.5203C7.06408 22.6216 3.75 17.4461 3.75 11.9473H0.75C0.75 18.6163 4.71522 24.5183 8.90565 28.6552C11.0218 30.7443 13.2557 32.4449 15.2052 33.6327C16.1793 34.2262 17.1026 34.704 17.9217 35.0383C18.7029 35.3571 19.5244 35.6024 20.25 35.6024V32.6024ZM39.7498 11.9251C39.6822 7.34925 37.0921 2.83934 33.0995 0.978861C31.0693 0.0328063 28.7147 -0.202582 26.2606 0.576394C23.8267 1.34896 21.3932 3.08573 19.0872 5.91511L21.4127 7.8104C23.4551 5.30437 25.4307 3.98734 27.1683 3.4358C28.8856 2.89066 30.4648 3.06085 31.8324 3.69812C34.6354 5.0043 36.697 8.37207 36.7502 11.9695L39.7498 11.9251ZM20.25 35.6024C20.9755 35.6024 21.797 35.3571 22.5782 35.0383C23.3973 34.704 24.3206 34.2262 25.2948 33.6327C27.2443 32.4449 29.4782 30.7443 31.5943 28.6552C35.7848 24.5184 39.75 18.6163 39.75 11.9473H36.75C36.75 17.4461 33.4359 22.6216 29.4867 26.5203C27.533 28.449 25.482 30.0057 23.7338 31.0708C22.8592 31.6037 22.0805 32.0012 21.4447 32.2606C20.771 32.5356 20.3848 32.6024 20.25 32.6024V35.6024Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <h4>
                                     <span
                                         class="d-flex align-items-center"><span
                                             class="counter p-0 m-0">100</span> +</span>
                                    </h4>
                                    <p>Positive Feedback</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3>We Are Best Corporate Learning Institute</h3>
                        <p>Since the year of 2008 and now at in 2019 “Spondon It” most popular in UI & UX, Web App
                            Development, Digital Marketing and Graphic Design related service provider company both
                            Local (Bangladesh) and global too!</p>
                        <p>At a time we are also doing our best for our clients by giving our service. This gives us
                            boost in popularity in this Digital Tech World.</p>
                        <ul class="mb-4 mb-lg-5">
                            <li class="d-flex flex-wrap">
                                        <span class="icon text-primary">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M13 25C19.6274 25 25 19.6274 25 13C25 6.37258 19.6274 1 13 1C6.37258 1 1 6.37258 1 13C1 19.6274 6.37258 25 13 25Z"
                                                 fill="#CEE8FF" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"/>
                                             <path
                                                 d="M8.20312 14.2002L11.694 17.8002C13.3367 13.0814 14.7048 11.0108 17.8031 8.2002"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round"/>
                                        </svg>
                                        </span>
                                <span class="content">Explore the wide-range of online course in the world</span>
                            </li>
                            <li class="d-flex flex-wrap">
                                        <span class="icon text-primary">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M13 25C19.6274 25 25 19.6274 25 13C25 6.37258 19.6274 1 13 1C6.37258 1 1 6.37258 1 13C1 19.6274 6.37258 25 13 25Z"
                                                 fill="#CEE8FF" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"/>
                                             <path
                                                 d="M8.20312 14.2002L11.694 17.8002C13.3367 13.0814 14.7048 11.0108 17.8031 8.2002"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round"/>
                                        </svg>
                                        </span>
                                <span class="content">Popular online course in the world</span>
                            </li>
                        </ul>
                        <a href="#" class="theme-btn">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

