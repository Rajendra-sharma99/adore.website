<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    section {
        position: relative;
    }

    *, ::after, ::before {
        box-sizing: border-box;
    }
    user agent stylesheet
    section {
        display: block;
    }

    @media (min-width: 1400px)  {
        body.tm-container-1340px .container {
            max-width: 1340px;
            width: 1340px;
        }
    }
    section .container {
        /* padding-bottom: 120px;
        padding-top: 120px; */
    }
    section > .container, section > .container-fluid {
        /* padding-top: 100px;
        padding-bottom: 100px; */
    }
    @media (min-width: 1200px)  {
        .container {
            /* max-width: 1170px; */
        }
    }
    @media (min-width: 1400px)
    {
        .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
            /* max-width: 1320px; */
        }
    }
    @media (min-width: 1200px)
    {
        .container, .container-lg, .container-md, .container-sm, .container-xl {
            /* max-width: 1140px; */
        }
    }
    @media (min-width: 992px)
    {
        .container, .container-lg, .container-md, .container-sm {
            /* max-width: 960px; */
        }
    }
    @media (min-width: 768px)
    {
        .container, .container-md, .container-sm {
            /* max-width: 720px; */
        }
    }
    @media (min-width: 576px)
    {   .container, .container-sm {
            /* max-width: 540px; */
        }
    }
    .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
        /* width: 100%; */
        padding-right: var(--bs-gutter-x,.75rem);
        padding-left: var(--bs-gutter-x,.75rem);
        margin-right: auto;
        margin-left: auto;
    }
    *, ::after, ::before {
        box-sizing: border-box;
    }
    user agent stylesheet
    div {
        display: block;
    }
    .row {
        --bs-gutter-x: 2rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(var(--bs-gutter-y) * -1);
        margin-right: calc(var(--bs-gutter-x)/ -2);
        margin-left: calc(var(--bs-gutter-x)/ -2);
    }
    @media (min-width: 992px)
    {   .col-lg-4 {
            flex: 0 0 auto;
            width: 33.3333333333%;
        }
    }
    .row>* {
        /* flex-shrink: 0;
        width: 100%; */
        max-width: 100%;
        padding-right: calc(var(--bs-gutter-x)/ 2);
        padding-left: calc(var(--bs-gutter-x)/ 2);
        margin-top: var(--bs-gutter-y);
    }
    .tm-sc-section-title {
        /* margin-bottom: 60px; */
    }
    .pr-70 {
        padding-right: 70px !important;
    }
    .mb-0 {
        margin-bottom: 0!important;
    }
    .tm-sc-section-title .title-wrapper {
        /* margin-bottom: 20px; */
        position: relative;
    }
    .mb-0 {
        margin-bottom: 0!important;
    }
    .tm-sc-section-title.section-title .title-wrapper .title {
        font-weight: 900;
        line-height: 1.22;
        margin-bottom: 12px;
    }
    .tm-sc-section-title .title-wrapper :first-child {
        margin-top: 0;
    }
    .tm-sc-section-title .title-wrapper .title {
        /* margin-top: -6px;
        line-height: 1.3; */
        position: relative;
        z-index: 0;
        text-transform: capitalize;
        font-family: "Roboto", sans-serif;
        font-size: 2.75rem;
    }
    .title {
        transition: all .3s ease-in-out;
    }
    .h1, .h2, .h3, h1, h2, h3 {
        /* font-family: "Roboto", sans-serif;
        margin-bottom: 1rem;
        margin-top: 0.75rem; */
    }
    h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
        /* font-weight: 700;
        line-height: 1.3; */
        color: #2d3630;
    }
    h2, .h2 {
        /* font-size: 2.75rem; */
    }
    @media (min-width: 1200px)
    .h2, h2 {
        /* font-size: 2rem; */
    }
    .h2, h2 {
        /* font-size: calc(1.325rem + .9vw); */
    }
    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        /* margin-top: 0;
        margin-bottom: .5rem;
        font-weight: 500;
        line-height: 1.2; */
    }
    user agent stylesheet
    h2 {
        display: block;
        /* font-size: 1.5em; */
        margin-block-start: 0.83em;
        margin-block-end: 0.83em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        /* font-weight: bold; */
    }
    element.style {
        color: black;
    }
    .tm-sc-section-title.section-title .title-wrapper .paragraph {
        font-size: 1.125rem;
        line-height: 1.89;
    }
    .tm-sc-section-title .title-wrapper .paragraph {
        /* font-size: 1rem; */
        position: relative;
    }
    .mb-0 {
        margin-bottom: 0!important;
    }
    p {
        /* margin-bottom: 30px; */
    }
    p, pre, ul, ol, dl, dd, blockquote, address, table, fieldset {
        /* margin-bottom: 10px; */
    }
    p {
        margin-top: 0;
        /* margin-bottom: 1rem; */
    }
    user agent stylesheet
    p {
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }
    .owl-nav {
        margin-top: 40px;
    }
    .tm-sc-section-title .title-wrapper :first-child {
        margin-top: 0;
    }
    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
        cursor: pointer;
    }
    .customPrevBtn {
        width: 85px;
        height: 85px;
        border-radius: 50%;
        border: 2px solid #2A507A;
        margin-right: 10px;
        opacity: 0.7;
        font-size: 35px;
        color: #2A507A;
        transition: all 0.3s ease;
    }
    [type=button], [type=reset], [type=submit], button {
        -webkit-appearance: button;
    }
    button, select {
        text-transform: none;
    }
    button, input, optgroup, select, textarea {
        margin: 0;
        font-family: inherit;
        /* font-size: inherit; */
        line-height: inherit;
    }
    button {
        /* border-radius: 0; */
    }
    user agent stylesheet
    button {
        /* appearance: auto; */
        writing-mode: horizontal-tb !important;
        font-style: ;
        font-variant-ligatures: ;
        font-variant-caps: ;
        font-variant-numeric: ;
        font-variant-east-asian: ;
        font-weight: ;
        font-stretch: ;
        /* font-size: ;
        font-family: ; */
        text-rendering: auto;
        /* color: buttontext; */
        letter-spacing: normal;
        word-spacing: normal;
        /* line-height: normal;
        text-transform: none; */
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: center;
        align-items: flex-start;
        /* cursor: default;
        box-sizing: border-box; */
        background-color: buttonface;
        /* margin: 0em; */
        padding: 1px 6px;
        /* border-width: 2px;
        border-style: outset;
        border-color: buttonborder;
        border-image: initial; */
    }
    .tm-sc-section-title .title-wrapper :first-child {
        margin-top: 0;
    }
    *, ::after, ::before {
        box-sizing: border-box;
    }
    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
        cursor: pointer;
    }
    .customPrevBtn {
        width: 85px;
        height: 85px;
        border-radius: 50%;
        border: 2px solid #2A507A;
        margin-right: 10px;
        opacity: 0.7;
        font-size: 35px;
        color: #2A507A;
        transition: all 0.3s ease;
    }
    button, select {
        text-transform: none;
    }
    button, input, optgroup, select, textarea {
        margin: 0;
        font-family: inherit;
        /* font-size: inherit; */
        line-height: inherit;
    }
    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
        cursor: pointer;
    }
    .customNextBtn {
        width: 85px;
        height: 85px;
        border-radius: 50%;
        border: 2px solid #2A507A;
        opacity: 0.7;
        font-size: 35px;
        color: #2A507A;
        transition: all 0.3s ease;
    }
    [type=button], [type=reset], [type=submit], button {
        -webkit-appearance: button;
    }
    button, select {
        text-transform: none;
    }
    button, input, optgroup, select, textarea {
        margin: 0;
        font-family: inherit;
        /* font-size: inherit; */
        line-height: inherit;
    }
    button {
        /* border-radius: 0; */
    }
    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
        cursor: pointer;
    }
    .customNextBtn {
        width: 85px;
        height: 85px;
        border-radius: 50%;
        border: 2px solid #2A507A;
        opacity: 0.7;
        font-size: 35px;
        color: #2A507A;
        transition: all 0.3s ease;
    }
    button, select {
        text-transform: none;
    }
    button, input, optgroup, select, textarea {
        margin: 0;
        font-family: inherit;
        /* font-size: inherit; */
        line-height: inherit;
    }
    .sectionpart {
        height: 50px;
        top: -180px;
        display: flex;
        align-items: center;
    }
    .row>* {
        flex-shrink: 0;
        width: 100%;
        max-width: 100%;
        padding-right: calc(var(--bs-gutter-x)/ 2);
        padding-left: calc(var(--bs-gutter-x)/ 2);
        margin-top: var(--bs-gutter-y);
    }
    .swiper {
        margin-right: 0px !important;
    }
    .swiper-horizontal {
        touch-action: pan-y;
    }
    .swiper, swiper-container {
        margin-left: auto;
        /* margin-right: auto; */
        position: relative;
        overflow: hidden;
        list-style: none;
        padding: 0;
        z-index: 1;
        display: block;
    }
    @media (min-width: 992px)
    {    .col-lg-7 {
            flex: 0 0 auto;
            width: 58.3333333333%;
        }
    }
    element.style {
        transition-duration: 0ms;
        transform: translate3d(-773px, 0px, 0px);
    }
    .swiper-android .swiper-slide, .swiper-wrapper {
        /* transform: translate3d(0px,0,0); */
    }
    .swiper-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: flex;
        transition-property: transform;
        transition-timing-function: var(--swiper-wrapper-transition-timing-function,initial);
        box-sizing: content-box;
    }
    user agent stylesheet
    div {
        display: block;
    }
    .swiper, swiper-container {
        margin-left: auto;
        margin-right: auto;
        position: relative;
        overflow: hidden;
        list-style: none;
        padding: 0;
        z-index: 1;
        display: block;
    }
    element.style {
        width: 381.5px;
        margin-right: 5px;
    }
    .swiper-backface-hidden .swiper-slide {
        transform: translateZ(0);
        /* -webkit-backface-visibility: hidden; */
        backface-visibility: hidden;
    }
    .swiper-slide, swiper-slide {
        flex-shrink: 0;
        /* width: 100%; */
        height: 100%;
        position: relative;
        transition-property: transform;
        /* display: block; */
    }
    .align-items-stretch {
        align-items: stretch!important;
    }
    .d-flex {
        display: flex!important;
    }
    element.style {
        border-top-right-radius: 6px;
        border-top-left-radius: 6px;
    }
    .causes-item-current-style1 .causes-item .causes-thumb {
        overflow: hidden;
        position: relative;
    }
    element.style {
        height: 220px;
    }
    .causes-item-current-style1 .causes-item .causes-thumb img {
        transition: all 0.4s ease-out;
        /* width: 100%; */
    }
    .w-100 {
        width: 100%!important;
    }
    img {
        /* height: auto; */
        max-width: 100%;
    }
    img {
        /* max-width: 100%; */
    }
    img, svg {
        vertical-align: middle;
    } 
    user agent stylesheet
    img {
        overflow-clip-margin: content-box;
        overflow: clip;
    }
    element.style {
        height: 250px;
        border-bottom-right-radius: 6px;
        border-bottom-left-radius: 6px;
    }
    .causes-item-current-style1 .causes-item .causes-details {
        background-color: #f4f3ef;
        padding: 42px 50px 40px;
    }
    .causes-item-current-style1 .causes-item .causes-details .causes-title {
        line-height: 1.5;
    }
    .mb-20 {
        margin-bottom: 20px !important;
    }
    .mt-0 {
        margin-top: 0!important;
    }
    h4, h5, h6, .h4, .h5, .h6 {
        font-family: "Roboto", sans-serif;
        font-weight: 700;
        /* line-height: 1.3;
        margin-bottom: 1rem;
        margin-top: 0.75rem; */
    }
    h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
        /* font-weight: 700;
        line-height: 1.3; */
        color: #2d3630;
    }
    h5, .h5 {
        /* font-size: 1.5rem; */
    }
    .h5, h5 {
        font-size: 1.25rem;
    }
    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        /* margin-top: 0;
        margin-bottom: .5rem; */
        /* font-weight: 500;
        line-height: 1.2; */
    }
    user agent stylesheet
    h5 {
        display: block;
        /* font-size: 0.83em; */
        margin-block-start: 1.67em;
        margin-block-end: 1.67em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        /* font-weight: bold; */
    }
    p {
        margin-bottom: 30px;
    }
    p, pre, ul, ol, dl, dd, blockquote, address, table, fieldset {
        /* margin-bottom: 10px; */
    }
    p {
        margin-top: 0;
        /* margin-bottom: 1rem; */
    }
    user agent stylesheet
    p {
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }
    .mb-10 {
        margin-bottom: 10px !important;
    }
    .btn {
        font-size: 1rem;
        font-weight: 500;
        letter-spacing: 0;
        transition: 0.3s ease;
    }
    .btn-plain-text-with-arrow {
        color: #31333e;
        /* font-size: 1rem; */
        padding: 0;
        border: 0;
        vertical-align: initial;
    }
    .btn {
        border-radius: 5px;
        /* border-width: 0; */
        /* font-weight: 600; */
        /* letter-spacing: 0.05rem; */
        /* padding: 1.1rem 2.2rem; */
        overflow: hidden;
        display: inline-block;
        white-space: nowrap;
        /* transition: all 0.2s ease-in-out; */
    }
    .btn {
        /* display: inline-block; */
        /* font-weight: 400; */
        line-height: 1.5;
        /* color: #212529; */
        text-align: center;
        text-decoration: none;
        /* vertical-align: middle; */
        cursor: pointer;
        /* -webkit-user-select: none; */
        /* -moz-user-select: none; */
        user-select: none;
        background-color: transparent;
        /* border: 1px solid transparent; */
        /* padding: .375rem .75rem; */
        /* font-size: 1rem; */
        /* border-radius: .25rem; */
        /* transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; */
    }
    html, html a {
        -webkit-font-smoothing: antialiased;
    }
    a {
        /* color: #4661ff; */
        /* color: #e89151; */
    }
    a {
        /* color: #0073aa; */
        /* text-decoration: none; */
        /* transition: all 0.3s ease; */
    }
    a {
        /* color: #0d6efd;
        text-decoration: underline; */
    }
    user agent stylesheet
    a:-webkit-any-link {
        /* color: -webkit-link;
        cursor: pointer;
        text-decoration: underline; */
    }
    .btn-plain-text-with-arrow:before {
        color: #5085d4;
    }
    .btn-plain-text-with-arrow:before {
        /* color: #ffae1d; */
        display: inline-block;
        content: "\f35a";
        font-family: "Font Awesome 5 Free";
        font-size: 16px;
        font-variant: normal;
        font-weight: normal;
        line-height: 1;
        margin-right: 3px;
        position: relative;
        text-shadow: none;
        text-transform: none;
        transition: all 0.3s ease 0s;
    }
    *, ::after, ::before {
        box-sizing: border-box;
    }
    .btn {
        font-size: 1rem; 
        font-weight: 500; 
        letter-spacing: 0;
        transition: 0.3s ease;
    }
    .btn-plain-text-with-arrow {
        /* color: #31333e; */
        /* font-size: 1rem; */
        padding: 0;
        border: 0;
        vertical-align: initial;
    }
    .btn {
        border-radius: 5px;
        border-width: 0;
        /* font-weight: 600; */
        /* letter-spacing: 0.05rem; */
        /* padding: 1.1rem 2.2rem; */
        overflow: hidden;
        display: inline-block;
        white-space: nowrap;
        transition: all 0.2s ease-in-out;
    }
    .btn {
        /* display: inline-block; */
        /* font-weight: 400;    */
        line-height: 1.5;   
        /* color: #212529;  */
        text-align: center;
        text-decoration: none;
        /* vertical-align: middle; */
        cursor: pointer;
        /* -webkit-user-select: none; */
        /* -moz-user-select: none; */
        user-select: none;
        background-color: transparent;
        /* border: 1px solid transparent; */
        /* padding: .375rem .75rem; */
        /* font-size: 1rem; */
        /* border-radius: .25rem; */
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    html, html a {
        -webkit-font-smoothing: antialiased;
    }
    a {
        /* color: #4661ff;
        color: #e89151; */
    }
    a {
        /* color: #0073aa; */
        text-decoration: none;
        transition: all 0.3s ease;
    }
    a {
        /* color: #0d6efd; */
        text-decoration: underline;
    }
    user agent stylesheet
    a:-webkit-any-link {
        /* color: -webkit-link;
        cursor: pointer; */
    }
    .swiper .swiper-notification, swiper-container .swiper-notification {
        position: absolute;
        left: 0;
        top: 0;
        pointer-events: none;
        opacity: 0;
        z-index: -1000;
    }
    *, ::after, ::before {
        box-sizing: border-box;
    }
    
</style>


<script type="text/javascript">
        var swiper = new Swiper(".mySwiper1", {
            slidesPerView: 2,
            spaceBetween: 5,
            slidesPerGroup: 2,
            loop: true,
            loopFillGroupWithBlank: false,
            navigation: {
                nextEl: ".customNextBtn",
                prevEl: ".customPrevBtn",
            },
        });
</script>
<script>
    document.querySelector("#slider2")
    document.querySelector("#slider2 > div:nth-child(1) > div > div > div.causes-details > div > a")
    document.querySelector("#wrapper > div > section:nth-child(4) > div > div > div > div > div > div > div > button.customPrevBtn")
    document.querySelector("#wrapper > div > section:nth-child(4)");
    document.querySelector("#wrapper > div > section:nth-child(4) > div > div > div > div > div > div > div > button.customNextBtn")
    document.querySelector("#wrapper > div > section:nth-child(4) > div > div > div > div > div > div > div")
</script>
</head>
<body>
<section>
    <div class="container slid">
        <div class="section-content">
            <div class="row">
                <div class="col-lg-4 tempp">
                    <div class="tm-sc-section-title section-title mb-0 pr-70 pr-lg--0 mb-md-40">
                        <div class="title-wrapper mb-0">
                            <h2 class="title">Our Blogs</h2>
                            <p class="paragraph mb-0" style="color:black;">
                                Through our articles, we provide volunteers a platform to write articles and share
                                their ideas on topics related to youth, motivation and development.
                            </p>
                            <div class="owl-nav">
                                <button type="button" role="presentation"
                                    onclick="if (!window.__cfRLUnblockHandlers) return false; plusSlides(-1)"
                                    class="customPrevBtn" tabindex="0" aria-label="Previous slide"
                                    aria-controls="slider2"><span aria-label="Previous">‹</span></button>
                                <button type="button" role="presentation"
                                    onclick="if (!window.__cfRLUnblockHandlers) return false; plusSlides(1)"
                                    class="customNextBtn" tabindex="0" aria-label="Next slide"
                                    aria-controls="slider2"><span aria-label="Next">›</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="sectionpart">
                    <div
                        class="web col-lg-7 swiper mySwiper1 temf swiper-initialized swiper-horizontal swiper-backface-hidden">
                        <div class="swiper-wrapper content" id="slider2" aria-live="polite"
                            style="transition-duration: 0ms;">
                            <div class="item swiper-slide d-flex align-items-stretch" role="group" aria-label="NaN / 5"
                                style="width: 381.5px; margin-right: 5px;">
                                <div class="causes-item-current-style1">
                                    <div class="causes-item">
                                        <div style="border-top-right-radius:6px ;border-top-left-radius:6px ;"
                                            class="causes-thumb">
                                            <img src="https://adore.ivdata.in/data/blog_images/0109202201282448368.jpg"
                                                onerror="this.onerror=null;this.src='images/Null1.jpeg'" alt="Image"
                                                class="w-100" style="height:220px">
                                        </div>
                                        <div style="height:250px; border-bottom-right-radius:6px ;border-bottom-left-radius:6px ;"
                                            class="causes-details">
                                            <h5 class="causes-title mt-0 mb-20">
                                                <p>A Little Thing Called Positive Thinking</p>

                                            </h5>
                                            <div class="post-btn-readmore mb-10">
                                                <a href="page-blog-details.php?id=1"
                                                    class="btn btn-plain-text-with-arrow">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item swiper-slide d-flex align-items-stretch" role="group" aria-label="NaN / 5"
                                style="width: 381.5px; margin-right: 5px;">
                                <div class="causes-item-current-style1">
                                    <div class="causes-item">
                                        <div style="border-top-right-radius:6px ;border-top-left-radius:6px ;"
                                            class="causes-thumb">
                                            <img src="https://adore.ivdata.in/data/blog_images/0109202201353148368.png"
                                                onerror="this.onerror=null;this.src='images/Null1.jpeg'" alt="Image"
                                                class="w-100" style="height:220px">
                                        </div>
                                        <div style="height:250px; border-bottom-right-radius:6px ;border-bottom-left-radius:6px ;"
                                            class="causes-details">
                                            <h5 class="causes-title mt-0 mb-20">
                                                <p>How To Become A Better Version of Yourself</p>

                                            </h5>
                                            <div class="post-btn-readmore mb-10">
                                                <a href="page-blog-details.php?id=3"
                                                    class="btn btn-plain-text-with-arrow">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item swiper-slide d-flex align-items-stretch" role="group" aria-label="NaN / 5"
                                style="width: 381.5px; margin-right: 5px;">
                                <div class="causes-item-current-style1">
                                    <div class="causes-item">
                                        <div style="border-top-right-radius:6px ;border-top-left-radius:6px ;"
                                            class="causes-thumb">
                                            <img src="https://adore.ivdata.in/data/blog_images/0109202201365448368.jpg"
                                                onerror="this.onerror=null;this.src='images/Null1.jpeg'" alt="Image"
                                                class="w-100" style="height:220px">
                                        </div>
                                        <div style="height:250px; border-bottom-right-radius:6px ;border-bottom-left-radius:6px ;"
                                            class="causes-details">
                                            <h5 class="causes-title mt-0 mb-20">
                                                <p>What Is Niksen ? </p>

                                            </h5>
                                            <div class="post-btn-readmore mb-10">
                                                <a href="page-blog-details.php?id=4"
                                                    class="btn btn-plain-text-with-arrow">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item swiper-slide d-flex align-items-stretch" role="group" aria-label="NaN / 5"
                                style="width: 381.5px; margin-right: 5px;">
                                <div class="causes-item-current-style1">
                                    <div class="causes-item">
                                        <div style="border-top-right-radius:6px ;border-top-left-radius:6px ;"
                                            class="causes-thumb">
                                            <img src="https://adore.ivdata.in/data/blog_images/0109202201384648368.jpg"
                                                onerror="this.onerror=null;this.src='images/Null1.jpeg'" alt="Image"
                                                class="w-100" style="height:220px">
                                        </div>
                                        <div style="height:250px; border-bottom-right-radius:6px ;border-bottom-left-radius:6px ;"
                                            class="causes-details">
                                            <h5 class="causes-title mt-0 mb-20">
                                                <p>Life Is Not A Race </p>

                                            </h5>
                                            <div class="post-btn-readmore mb-10">
                                                <a href="page-blog-details.php?id=5"
                                                    class="btn btn-plain-text-with-arrow">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item swiper-slide d-flex align-items-stretch" role="group" aria-label="NaN / 5"
                                style="width: 381.5px; margin-right: 5px;">
                                <div class="causes-item-current-style1">
                                    <div class="causes-item">
                                        <div style="border-top-right-radius:6px ;border-top-left-radius:6px ;"
                                            class="causes-thumb">
                                            <img src="https://adore.ivdata.in/data/blog_images/0301202305292048368.png"
                                                onerror="this.onerror=null;this.src='images/Null1.jpeg'" alt="Image"
                                                class="w-100" style="height:220px">
                                        </div>
                                        <div style="height:250px; border-bottom-right-radius:6px ;border-bottom-left-radius:6px ;"
                                            class="causes-details">
                                            <h5 class="causes-title mt-0 mb-20">
                                                <p>What’s The Big Deal About Being Immature ?</p>

                                            </h5>
                                            <div class="post-btn-readmore mb-10">
                                                <a href="page-blog-details.php?id=6"
                                                    class="btn btn-plain-text-with-arrow">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
</body>
</html>