<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="theme-color" content="#C00404" />
    <meta charset="utf-8" />
    <meta name="description"
        content="Indian Institute of Technology Madras is Best Institute for higher education in India. It is a public technical and research university located in Chennai" />
    <link rel="shortlink" href="https://www.iitm.ac.in/" />
    <link rel="canonical" href="https://www.iitm.ac.in/" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/vnd.microsoft.icon" />
    <link rel="alternate" hreflang="en" href="https://www.iitm.ac.in/" />
    <link rel="alternate" hreflang="hi" href="https://www.iitm.ac.in/hi" />

    <title>Maa Bharti PG College</title>
    <link rel="stylesheet" media="all"
        href="./sites/default/files/css/css_GpjFLHr9m2GvzV7sp9DlLm1vT3zCHz1OeMeMCbvsT7c.css?delta=0&amp;language=en&amp;theme=iitm&amp;include=eJwdylEOhCAMRdENoV0SQfqcNCnU0Iph92P8OT_3ikQjedk8lkr_JS3L7sgsXm1iLLKOapoaWAqdooGx13KFWE--PNDoKI40hWEZ7QDnU6BMA35Zd5nYvvgueJw-92Z8K_6ukDJD" />
    <link rel="stylesheet" media="all"
        href="./sites/default/files/css/css_NsJcUKs1BuJTgwGa7PKAUN7cwj7sl9oiC5yG0kon-RA.css?delta=1&amp;language=en&amp;theme=iitm&amp;include=eJwdylEOhCAMRdENoV0SQfqcNCnU0Iph92P8OT_3ikQjedk8lkr_JS3L7sgsXm1iLLKOapoaWAqdooGx13KFWE--PNDoKI40hWEZ7QDnU6BMA35Zd5nYvvgueJw-92Z8K_6ukDJD" />


    <style>
        .header--links--border {
            padding-right: 5px !important;
        }

        .header--links {
            padding-right: 5px !important;
        }
    </style>






</head>


<body class="frontpage node--type-landing-page">



    <a href="#main-content" class="content_invisible visually-hidden focusable">
        Skip to main content
    </a>


    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        <header class="header">
            <!-- Heder Top Menu sections -->
            <x-TopHeader />
            <!-- EOF - Heder Top Menu sections -->

            <!-- Header Utility Links -->

            <x-Header />
            <!-- EOF - Header Utility Links -->

            <!-- Header Top navigation menue -->
            <x-Menu />
            <!-- EOF - Header Top navigation menue -->
        </header>


        <main id="main-content">



            <div>
                <div data-drupal-messages-fallback class="hidden"></div>
                <div id="block-iitm-content" data-block-plugin-id="system_main_block">


                    <div class="content block-content">

                        <article data-history-node-id="101">
                            <div>
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">

                                        <div class="views-element-container"
                                            data-block-plugin-id="views_block:home_page-hpg_announcements">


                                            <div class="content block-content">
                                                <div>
                                                    <div
                                                        class="view view-home-page view-id-home_page view-display-id-hpg_announcements js-view-dom-id-2ea34b8837c3228202e0c7d5c811ba2eeefb16f00dabb1baaedff091b23fd0d8">




                                                        <div class="view-content">
                                                            <!-- Announcements Section Start -->
                                                            <x-announcements/>

                                                            <div>
                                                                <h1 class="sr-only">No. 1 for 5 Years Running...</h1>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">

                                        <div class="views-element-container"
                                            data-block-plugin-id="views_block:config_page_-hpg_hero_banners">


                                            <div class="content block-content">
                                                <div>
                                                    <div
                                                        class="view view-config-page- view-id-config_page_ view-display-id-hpg_hero_banners js-view-dom-id-39623c6cfce0ddd5b695446487890846331703cfed2d27a30fa2cc3814f4a811">




                                                        <div class="view-content">
                                                            <section class="slider slider__arrowcenter" role="banner">
                                                                <div class="bannerSlider owl-carousel owl-theme">

                                                                    @php
                                                                    $banner = DB::table('banner')->where('status' ,
                                                                    1)->orderBy('sort_order')->get();

                                                                    @endphp
                                                                    @foreach($banner as $bannerList)
                                                                    <a href="javascript:;">
                                                                        <div class="slider__imgcontrol"
                                                                            style="background-image: url({{ asset($bannerList->image_path) }});">
                                                                            <div class="container">
                                                                                <h2 class="banner__heading">
                                                                                    {{ $bannerList->title }}</h2>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    @endforeach





                                                                </div>
                                                            </section>


                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="section__block container layout layout--onecol">
                                    <div class="layout__region layout__region--content">

                                        <div class="views-element-container"
                                            data-block-plugin-id="views_block:home_page-hpg_news">


                                            <div class="content block-content">
                                                <div>
                                                    <div
                                                        class="view view-home-page view-id-home_page view-display-id-hpg_news js-view-dom-id-38a4ea397de694d432bc00b5c62117125ecec6b71142be2a8c776f39fb47c06b">




                                                        <div class="view-content">
                                                            <!-- News Section Star -->
                                                            <div class="col-sm-12 col-md-12">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <h2
                                                                            class="common__heading font__controls__style">
                                                                            Activity</h2>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <a href="./happenings/IITM-in-the-news"
                                                                            title="View All News"
                                                                            class="section__viewlink">View All</a>
                                                                    </div>
                                                                </div>
                                                                <div class="row display__flexbox">

                                                                    @php
                                                                    $activities=DB::table('activity')->limit(3)->where('status',1)->orderBy('sort_order','asc')->get();
                                                                    @endphp

                                                                    @foreach ($activities as $activity)
                                                                    <div class="col-sm-4">
                                                                        <a target="_blank" href="{{ $activity->link }}"
                                                                            class="block__element">
                                                                            <div class="section__card">
                                                                                <div class="section__cardimg section__cardimg--center"
                                                                                    role="img">
                                                                                    <img src="{{ asset($activity->thumbnail) }}"
                                                                                        alt="IIT Madras &amp; IIT-Madras Pravartak Foundation partners with Ziroh Labs to…" />
                                                                                </div>
                                                                                <h3 class="section__cardheading">{{
                                                                                    $activity->topic }}</h3>
                                                                                <p>Indian Institute of Technology Madras
                                                                                    (IIT Madras) and IITM Pravartak…
                                                                                <ul class="clearfix divider__list">
                                                                                    <li
                                                                                        class="font__fontrols__style font__controls__style">
                                                                                        9 Apr 2025</li>
                                                                                    <li
                                                                                        class="font__fontrols__style font__controls__style">
                                                                                        Press Release</li>
                                                                                </ul>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    @endforeach


                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        {{-- <div class="views-element-container"
                                            data-block-plugin-id="views_block:home_page-hpg_events">


                                            <div class="views-element-container">
                                                <div
                                                    class="view view-home-page view-id-home_page view-display-id-hpg_recent_events js-view-dom-id-e8a0b16548b7d4e818b07e0f29847ba10c1dec13d65b47960e2fde2c6f0c6e04">




                                                    <div class="view-content">
                                                        <!-- News & Events Section Star -->
                                                        <div class="col-sm-12 col-md-3 events__tab__space">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <h2 class="common__heading font__controls__style">
                                                                        Recent</h2>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <a href="./happenings/events"
                                                                        title="Events Calendar"
                                                                        class="section__viewlink">Calendar</a>
                                                                </div>
                                                            </div>
                                                            <div class="row display__flexbox">
                                                                <!--<div class="col-md-6 ne-home-mobile">-->
                                                                <div class="col-sm-4 col-md-12">
                                                                    <a href="./happenings/events/spectrum-inspired-low-light-image-translation-saliency-detection"
                                                                        class="block__element">
                                                                        <div class="section__card">
                                                                            <div
                                                                                class="section__cardimg section__cardimg--shadow section__cardimg--center">
                                                                                <img src=""
                                                                                    alt="Spectrum Inspired Low-light Image Translation for Saliency Detection"
                                                                                    data-noimg=1
                                                                                    data-noimg-category=seminar_s5 />
                                                                                <ul>
                                                                                    <li>18 Apr</li>
                                                                                    <li>03:30 PM</li>
                                                                                </ul>
                                                                            </div>
                                                                            <h3 class="section__cardheading">Spectrum
                                                                                Inspired Low-light Image Translation for
                                                                                Saliency Detection</h3>
                                                                            <p>Saliency detection methods are crucial in
                                                                                various practical applications,…</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>
                                            </div>

                                        </div> --}}
                                    </div>
                                </div>
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">

                                        <div class="views-element-container"
                                            data-block-plugin-id="views_block:config_page_-hpg_programs">


                                            <div class="content block-content">
                                                <div>
                                                    <div
                                                        class="view view-config-page- view-id-config_page_ view-display-id-hpg_programs js-view-dom-id-4c4960f1d00bf08cae62f6839d07ab3027bfe5fcf1701091c92384460522c73b">




                                                        <div class="view-content">
                                                            <!-- Study @ IITM Section Start -->
                                                            <section class="section__block section__block--bgsandal">
                                                                <div class="container">
                                                                    <h2 class="common__heading">Study @ MBPG</h2>
                                                                    <div class="sectionSlider owl-carousel owl-theme">

                                                                        <div class="item">
                                                                            <a href="#0">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Undergraduate Programmes</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/card_images/ug-programmes_1_0.png"
                                                                                            alt="Undergraduate Programmes" />
                                                                                    </div>
                                                                                    <p>Explore our industry-relevant
                                                                                        Undergraduate Programs designed
                                                                                        to empower students with
                                                                                        knowledge, skills, innovation,
                                                                                        and real-world career
                                                                                        opportunities
                                                                                    </p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="item">
                                                                            <a href="#0">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Postgraduate Programmes</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/card_images/pg-programmes_1_0.png"
                                                                                            alt="Postgraduate Programmes" />
                                                                                    </div>
                                                                                    <p>Pursue cutting-edge research with
                                                                                        our PhD Programs that foster
                                                                                        innovation, critical thinking,
                                                                                        academic excellence, and global
                                                                                        scholarly contributions.
                                                                                    </p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="item">
                                                                            <a href="#0">
                                                                                <h3 class="section__cardheadtext">
                                                                                    PhD Programme</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/card_images/homepagetile-onlineBscprogram.jpg"
                                                                                            alt="Online BSc Programme" />
                                                                                    </div>
                                                                                    <p>A completely online programme
                                                                                        aimed at creating a trained
                                                                                        programmer, proficient in
                                                                                        application development, data
                                                                                        sciences and machine learning.
                                                                                    </p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{-- <section class="section__block section__block--research"
                                    style="background-image: url(/themes/custom/iitm/assets/images/background-image/research-section-banner.jpg);">
                                    <div class="container">
                                        <h2 class="common__heading textwhite">Research</h2>
                                        <div class="row" data-sticky-container>
                                            <div class="col-sm-7 col-md-8 textwhite">
                                                <div class="main-region">

                                                    <div class="views-element-container"
                                                        data-block-plugin-id="views_block:home_page-hpg_research_highlight">


                                                        <div class="content block-content">
                                                            <div>
                                                                <div
                                                                    class="view view-home-page view-id-home_page view-display-id-hpg_research_highlight js-view-dom-id-d68689ebbea38cc8be401213831ba7386232dacd7edb1ea97e3bd7130fec33e9">




                                                                    <div class="view-content">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <h3
                                                                                    class="section__cardheadtext textwhite">
                                                                                    Highlights</h3>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <a href="./research/research-highlights"
                                                                                    class="section__viewlink section__viewlink--whitearrow">View
                                                                                    all Research Highlights</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 ">
                                                                            <a href="./research/research-highlights/how-cool-motorbikes-are-choking-indian-cities"
                                                                                class="block__element">
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m1/public/2020-04/motor.jpg?itok=nsAfe6Bk"
                                                                                            alt="{item.title.content|raw}}" />
                                                                                    </div>
                                                                                    <h4 class="section__cardheading">How
                                                                                        cool motorbikes are choking
                                                                                        Indian cities!</h4>
                                                                                    <p>In a new study, the scientists
                                                                                        from IIT Madras show that the
                                                                                        polluting…</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-sm-6 rh-home-mobile">
                                                                            <a href="./research/research-highlights/why-getting-too-personal-may-harm-e-commerce"
                                                                                class="block__element">
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m1/public/2020-04/e-commerce.jpg?itok=EXfaqCWi"
                                                                                            alt="{item.title.content|raw}}" />
                                                                                    </div>
                                                                                    <h4 class="section__cardheading">Why
                                                                                        getting too personal may harm
                                                                                        e-Commerce!</h4>
                                                                                    <p>Gone are the days when the only
                                                                                        way to buy something was to go
                                                                                        to a…</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-md-4">
                                                <div class="sidebar-region">

                                                    <div class="views-element-container"
                                                        data-block-plugin-id="views_block:home_page-hpg_research_centres">


                                                        <div class="content block-content">
                                                            <div>
                                                                <div
                                                                    class="view view-home-page view-id-home_page view-display-id-hpg_research_centres js-view-dom-id-24f0260a819389f58c4c3daadcc31acec42db41d253dc671ec24dc5da5338d88">




                                                                    <div class="view-content">
                                                                        <h3 class="section__cardheadtext textwhite">
                                                                            Centres</h3>
                                                                        <div class="infoSlider owl-carousel owl-theme">
                                                                            <a href="./research/institute-research-centres/centre-for-computational-brain-research"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-04/homepagetile-ccbr_0.jpg?itok=mogUlUcu"
                                                                                            alt="Centre for Computational Brain Research" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            Centre for Computational
                                                                                            Brain Research</h4>
                                                                                        <p>The Centre for Computational
                                                                                            Brain Research (CCBR) is a
                                                                                            high-level…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/institute-research-centres/centre-for-technology-and-policy"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-04/homepagetile-header%20CTAP_1.jpg?itok=fDMOs2SX"
                                                                                            alt="Centre for Technology and Policy (CTaP)" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            Centre for Technology and
                                                                                            Policy (CTaP)</h4>
                                                                                        <p>The Centre for Technology and
                                                                                            Policy (CTaP) provides
                                                                                            analyses and…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/institute-research-centres/advanced-manufacturing-technology-development-centre"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-08/homepagetile-AMTDC_0.jpg?itok=ZMmchkvX"
                                                                                            alt="Advanced Manufacturing Technology Development Centre (AMTDC)" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            Advanced Manufacturing
                                                                                            Technology Development
                                                                                            Centre (AMTDC)</h4>
                                                                                        <p>The Advanced Manufacturing
                                                                                            Technology Development
                                                                                            Centre (AMTDC) is a…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/national-research-centres/national-cancer-tissue-biobank"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-04/homepagetile-cancer%20tissue%20bank.jpg?itok=LaUEp5Zk"
                                                                                            alt="National Cancer Tissue Biobank (NCTB)" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            National Cancer Tissue
                                                                                            Biobank (NCTB)</h4>
                                                                                        <p>National Cancer Tissue
                                                                                            Biobank (NCTB) is a
                                                                                            state-of-the-art non-profit…
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/research-centres/ttk-center-rehabilitation-research-and-device-development-r2d2"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2022-04/Shailesh%202.png?itok=7qxmglk2"
                                                                                            alt="TTK Center for Rehabilitation Research and Device Development (R2D2)" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            TTK Center for
                                                                                            Rehabilitation Research and
                                                                                            Device Development (R2D2)
                                                                                        </h4>
                                                                                        <p>R2D2 is the TTK Center for
                                                                                            Rehabilitation Research and
                                                                                            Device…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/national-research-centres/national-technology-centre-for-ports-waterways-and-coasts"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-08/homepagetile-ntcpwc.jpg?itok=WaEsh4FW"
                                                                                            alt="National Technology Centre for Ports, Waterways and Coasts (NTCPWC)" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            National Technology Centre
                                                                                            for Ports, Waterways and
                                                                                            Coasts (NTCPWC)</h4>
                                                                                        <p>The National Technology
                                                                                            Centre for Ports, Waterways
                                                                                            &amp;amp; Coasts (…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/institute-research-centres/robert-bosch-centre-for-data-science-and-artificial-intelligence"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-04/homepagetile-RBCDAI.jpg?itok=jQNU1dV0"
                                                                                            alt="Robert Bosch Centre for Data Science and Artificial Intelligence" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            Robert Bosch Centre for Data
                                                                                            Science and Artificial
                                                                                            Intelligence</h4>
                                                                                        <p>Founded in 2017, the Robert
                                                                                            Bosch Centre for Data
                                                                                            Science and…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/institute-research-centres/centre-for-nems-and-nanophotonics"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-04/homepagetile-NEMS.jpg?itok=2414xqIz"
                                                                                            alt="Centre for NEMS and Nanophotonics (CNNP)" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            Centre for NEMS and
                                                                                            Nanophotonics (CNNP)</h4>
                                                                                        <p>The Centre for
                                                                                            Nanoelectromechanical
                                                                                            Systems (NEMS) and
                                                                                            Nanophotonics…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/institute-research-centres/iitm-china-studies-centre"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-08/homepagetile-China%20Studies.jpg?itok=U3B_z_T0"
                                                                                            alt="IITM China Studies Centre" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            IITM China Studies Centre
                                                                                        </h4>
                                                                                        <p>IITM China Studies Centre was
                                                                                            established in April 2011
                                                                                            with a view to…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/institute-research-centres/centre-of-excellence-in-wireless-technology"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-08/homepagetile-Cewit.jpg?itok=zAIxIhi1"
                                                                                            alt="Centre of Excellence in Wireless Technology (CEWiT)" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            Centre of Excellence in
                                                                                            Wireless Technology (CEWiT)
                                                                                        </h4>
                                                                                        <p>Set up with support from the
                                                                                            Ministry of Communication
                                                                                            and IT and the…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/institute-research-centres/healthcare-technology-innovation-centre"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-04/homepagetile-HTIC_0.jpg?itok=t9fqpTE-"
                                                                                            alt="Healthcare Technology Innovation Centre (HTIC)" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            Healthcare Technology
                                                                                            Innovation Centre (HTIC)
                                                                                        </h4>
                                                                                        <p>The Healthcare Technology
                                                                                            Innovation Centre (HTIC) is
                                                                                            a…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/national-research-centres/indo-german-centre-for-sustainability"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-04/homepagetile-igcs.jpg?itok=d5DXk_xf"
                                                                                            alt="Indo-German Centre for Sustainability" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            Indo-German Centre for
                                                                                            Sustainability</h4>
                                                                                        <p>Indo German Centre for
                                                                                            Sustainability (IGCS) was
                                                                                            established in 2010…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/institute-research-centres/centre-for-railway-research"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-04/homepagetile-railway%20research.jpg?itok=-oUufYhz"
                                                                                            alt="Centre for Railway Research" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            Centre for Railway Research
                                                                                        </h4>
                                                                                        <p>The Centre for Railway
                                                                                            Research (CRR) was set up in
                                                                                            2015 to develop a…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/institute-research-centres/international-centre-for-clean-water"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-08/homepagetile-iccw.jpg?itok=X-mypUbV"
                                                                                            alt="International Centre for Clean Water (ICCW)" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            International Centre for
                                                                                            Clean Water (ICCW)</h4>
                                                                                        <p>Established in 2018 with the
                                                                                            objective of creating water
                                                                                            professionals…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="./research/national-research-centres/national-centre-for-combustion-research-and-development"
                                                                                class="block__element">
                                                                                <div
                                                                                    class="section__card section__card--bgwhite">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./sites/default/files/styles/img_m2/public/2020-04/homepagetile-NCCRD_0.jpg?itok=TlEC7l2d"
                                                                                            alt="National Centre for Combustion Research and Development (NCCRD)" />
                                                                                    </div>
                                                                                    <div class="section__cardtext">
                                                                                        <h4
                                                                                            class="section__cardheading">
                                                                                            National Centre for
                                                                                            Combustion Research and
                                                                                            Development (NCCRD)</h4>
                                                                                        <p>Founded by the Combustion
                                                                                            Institute – Indian Section
                                                                                            and supported by…</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> --}}
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">

                                        <div class="views-element-container"
                                            data-block-plugin-id="views_block:home_page-hpg_departments">


                                            <div class="content block-content">
                                                <div>
                                                    <div
                                                        class="view view-home-page view-id-home_page view-display-id-hpg_departments js-view-dom-id-d2462513f703e8b05d175db623cae070feb0b343fd21824dd45f52fafa7b11a2">




                                                        <div class="view-content">
                                                            <!-- Departments Section Start -->
                                                            <section class="section__block">
                                                                <div class="container">
                                                                    <h2 class="common__heading">Departments</h2>
                                                                    <div
                                                                        class="hpg_departments sectionSlider owl-carousel owl-theme slider-title hpg_departments">
                                                                        <div class="item">
                                                                            <a href="#0">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Arts</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./images/arts.jpg"
                                                                                            width="370" height="200"
                                                                                            alt="Department of Aerospace Engineering" />


                                                                                    </div>
                                                                                    <p>Established in 1969, the
                                                                                        Department of Aerospace
                                                                                        Engineering stands at the
                                                                                        forefront of fundamental and
                                                                                        applied…</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="item">
                                                                            <a href="#0">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Computer</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./images/computer.jpg"
                                                                                            width="370" height="200"
                                                                                            alt="Department of Applied Mechanics" />


                                                                                    </div>
                                                                                    <p>Since its inception in 1959, the
                                                                                        Department of Applied
                                                                                        Mechanics&amp;nbsp;&amp;amp;
                                                                                        Biomedical Engineering has grown
                                                                                        into a…</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="item">
                                                                            <a href="#0">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Education</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./images/education.jpg"
                                                                                            width="370" height="201"
                                                                                            alt="Department of Biotechnology" />


                                                                                    </div>
                                                                                    <p>The Department of Biotechnology
                                                                                        was founded in 2004 with a
                                                                                        strong interdisciplinary
                                                                                        research and teaching base in…
                                                                                    </p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="item">
                                                                            <a href="#0">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Science</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./images/science.jpg"
                                                                                            width="370" height="200"
                                                                                            alt="Department of Chemical Engineering" />


                                                                                    </div>
                                                                                    <p>Aiming to be a global centre of
                                                                                        academic and research excellence
                                                                                        in chemical engineering sciences
                                                                                        and technology,…</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="item">
                                                                            <a href="#0">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Arts</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./images/arts.jpg"
                                                                                            width="370" height="200"
                                                                                            alt="Department of Aerospace Engineering" />


                                                                                    </div>
                                                                                    <p>Established in 1969, the
                                                                                        Department of Aerospace
                                                                                        Engineering stands at the
                                                                                        forefront of fundamental and
                                                                                        applied…</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="item">
                                                                            <a href="#0">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Computer</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./images/computer.jpg"
                                                                                            width="370" height="200"
                                                                                            alt="Department of Applied Mechanics" />


                                                                                    </div>
                                                                                    <p>Since its inception in 1959, the
                                                                                        Department of Applied
                                                                                        Mechanics&amp;nbsp;&amp;amp;
                                                                                        Biomedical Engineering has grown
                                                                                        into a…</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="item">
                                                                            <a href="#0">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Education</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./images/education.jpg"
                                                                                            width="370" height="201"
                                                                                            alt="Department of Biotechnology" />


                                                                                    </div>
                                                                                    <p>The Department of Biotechnology
                                                                                        was founded in 2004 with a
                                                                                        strong interdisciplinary
                                                                                        research and teaching base in…
                                                                                    </p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="item">
                                                                            <a href="#0">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Science</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img src="./images/science.jpg"
                                                                                            width="370" height="200"
                                                                                            alt="Department of Chemical Engineering" />


                                                                                    </div>
                                                                                    <p>Aiming to be a global centre of
                                                                                        academic and research excellence
                                                                                        in chemical engineering sciences
                                                                                        and technology,…</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{-- <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">

                                        <div class="views-element-container"
                                            data-block-plugin-id="views_block:home_page-hpg_ci_list">


                                            <div class="content block-content">
                                                <div>
                                                    <div
                                                        class="view view-home-page view-id-home_page view-display-id-hpg_ci_list js-view-dom-id-8026a15987f85951bb8006ba01673777ed22d9f0b043cf06fdf676a97327143a">




                                                        <div class="view-content">
                                                            <!-- Consultancy & Innovation Section Start -->
                                                            <section class="section__block section__block--bgsandal">
                                                                <div class="container">
                                                                    <h2 class="common__heading">Consultancy & Innovation
                                                                    </h2>
                                                                    <div class="sectionSlider owl-carousel owl-theme">

                                                                        <div class="item">
                                                                            <a
                                                                                href="./innovation/industrial-consultancy">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Industrial Consultancy</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img loading="lazy"
                                                                                            src="./sites/default/files/2020-04/industrial-consultancy.png"
                                                                                            width="370" height="200"
                                                                                            alt="Industrial Consultancy" />


                                                                                    </div>
                                                                                    <p>The Centre for Industrial
                                                                                        Consultancy and Sponsored
                                                                                        Research (ICSR) was sta...</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="item">
                                                                            <a href="./research-park/incubation-cell">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Incubation Cell</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img loading="lazy"
                                                                                            src="./sites/default/files/2020-04/homepagetile-incubation%20cell.jpg"
                                                                                            width="370" height="200"
                                                                                            alt="Incubation Cell" />


                                                                                    </div>
                                                                                    <p>The IITM Incubation Cell (IITMIC)
                                                                                        is India’s leading Deep-tech
                                                                                        Startup hub....</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="item">
                                                                            <a
                                                                                href="./research-park/iit-madras-bioincubator">
                                                                                <h3 class="section__cardheadtext">IIT
                                                                                    Madras Bioincubator</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img loading="lazy"
                                                                                            src="./sites/default/files/2020-04/homepagetile-bioincubator.jpg"
                                                                                            width="370" height="200"
                                                                                            alt="IIT Madras Bioincubator" />


                                                                                    </div>
                                                                                    <p>The IITM Bioincubator works to
                                                                                        foster Indian biotech innovation
                                                                                        and entrepr...</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="item">
                                                                            <a
                                                                                href="./research-park/iitm-research-park">
                                                                                <h3 class="section__cardheadtext">IITM
                                                                                    Research Park</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img loading="lazy"
                                                                                            src="./sites/default/files/2020-06/homepagetile-researchpark.jpg"
                                                                                            width="370" height="200"
                                                                                            alt="IIT Madras Research PArk" />


                                                                                    </div>
                                                                                    <p>IIT Madras Research Park
                                                                                        (IITMRP), India&#039;s first
                                                                                        university-based research ...
                                                                                    </p>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="item">
                                                                            <a href="./innovation/technology-transfer">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Technology Transfer</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img loading="lazy"
                                                                                            src="./sites/default/files/2020-04/homepagetile-technology%20transfer.jpg"
                                                                                            width="370" height="200"
                                                                                            alt="Technology Transfer" />


                                                                                    </div>
                                                                                    <p>IIT Madras has an array of
                                                                                        technologies / IPR developed
                                                                                        through Research an...</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="item">
                                                                            <a
                                                                                href="./innovation/gopalakrishnan-deshpande-centre-for-innovation-and-entrepreneurship">
                                                                                <h3 class="section__cardheadtext">
                                                                                    Gopalakrishnan-Deshpande Centre</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img loading="lazy"
                                                                                            src="./sites/default/files/2020-08/homepagetile-gdc1.jpg"
                                                                                            width="370" height="200"
                                                                                            alt="GDC Symposium" />


                                                                                    </div>
                                                                                    <p>Established in 2017 the
                                                                                        Gopalakrishnan Deshpande Center
                                                                                        for Innovation &amp;amp...</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="item">
                                                                            <a href="./research-park/iitm-pravartak">
                                                                                <h3 class="section__cardheadtext">IITM
                                                                                    Pravartak</h3>
                                                                                <div class="section__card">
                                                                                    <div class="section__cardimg"
                                                                                        role="img">
                                                                                        <img loading="lazy"
                                                                                            src="./sites/default/files/2024-12/single-img-16_0.jpg"
                                                                                            width="370" height="200"
                                                                                            alt="iitm pravartak" />


                                                                                    </div>
                                                                                    <p>IITM Pravartak Technologies
                                                                                        Foundation is a section 08
                                                                                        company housing the ...</p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div> --}}
                                {{-- <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">

                                        <div class="views-element-container"
                                            data-block-plugin-id="views_block:config_page_-hpg_ins_stats">


                                            <div class="content block-content">
                                                <div>
                                                    <div
                                                        class="view view-config-page- view-id-config_page_ view-display-id-hpg_ins_stats js-view-dom-id-2310799e3d289e0d18989f2b241a7ff9abde5ef871dc0c3c09f62d70d925a3e6">




                                                        <div class="view-content">
                                                            <!-- IIT Madras by the Numbers Section Star -->
                                                            <section class="card clearfix"
                                                                style="background-image: url(/themes/custom/iitm/assets/images/background-image/iit-madras-by-the-numbers-banner.jpg)">
                                                                <div class="container">
                                                                    <h2 class="common__heading textwhite">IIT Madras by
                                                                        the Numbers</h2>
                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-md-3 col-sm-4">
                                                                            <div class="card__counts">
                                                                                <div class="card__table">
                                                                                    <div
                                                                                        class="card__tablecell hidden-xs">
                                                                                        <span
                                                                                            class="sprite icon__ug"></span>
                                                                                    </div>
                                                                                    <div class="card__tablecell">
                                                                                        <div class="card__userdetails">
                                                                                            <h3>2,105</h3>
                                                                                            <p>Undergraduate Students
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-3 col-sm-4">
                                                                            <div class="card__counts">
                                                                                <div class="card__table">
                                                                                    <div
                                                                                        class="card__tablecell hidden-xs">
                                                                                        <span
                                                                                            class="sprite icon__pg"></span>
                                                                                    </div>
                                                                                    <div class="card__tablecell">
                                                                                        <div class="card__userdetails">
                                                                                            <h3>4,112</h3>
                                                                                            <p>Postgraduate Students</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-3 col-sm-4">
                                                                            <div class="card__counts">
                                                                                <div class="card__table">
                                                                                    <div
                                                                                        class="card__tablecell hidden-xs">
                                                                                        <span
                                                                                            class="sprite icon__globalworld"></span>
                                                                                    </div>
                                                                                    <div class="card__tablecell">
                                                                                        <div class="card__userdetails">
                                                                                            <h3>746</h3>
                                                                                            <p>MS Research Scholars</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-3 col-sm-4">
                                                                            <div class="card__counts">
                                                                                <div class="card__table">
                                                                                    <div
                                                                                        class="card__tablecell hidden-xs">
                                                                                        <span
                                                                                            class="sprite icon__rs"></span>
                                                                                    </div>
                                                                                    <div class="card__tablecell">
                                                                                        <div class="card__userdetails">
                                                                                            <h3>2,963</h3>
                                                                                            <p>PhD Research Scholars</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-3 col-sm-4">
                                                                            <div class="card__counts">
                                                                                <div class="card__table">
                                                                                    <div
                                                                                        class="card__tablecell hidden-xs">
                                                                                        <span
                                                                                            class="sprite icon__faculty"></span>
                                                                                    </div>
                                                                                    <div class="card__tablecell">
                                                                                        <div class="card__userdetails">
                                                                                            <h3>591</h3>
                                                                                            <p>Faculty</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-3 col-sm-4">
                                                                            <div class="card__counts">
                                                                                <div class="card__table">
                                                                                    <div
                                                                                        class="card__tablecell hidden-xs">
                                                                                        <span
                                                                                            class="sprite icon__staff"></span>
                                                                                    </div>
                                                                                    <div class="card__tablecell">
                                                                                        <div class="card__userdetails">
                                                                                            <h3>677</h3>
                                                                                            <p>Staff</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-3 col-sm-4">
                                                                            <div class="card__counts">
                                                                                <div class="card__table">
                                                                                    <div
                                                                                        class="card__tablecell hidden-xs">
                                                                                        <span
                                                                                            class="sprite icon__patents"></span>
                                                                                    </div>
                                                                                    <div class="card__tablecell">
                                                                                        <div class="card__userdetails">
                                                                                            <h3>146</h3>
                                                                                            <p>Patents</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-3 col-sm-4">
                                                                            <div class="card__counts">
                                                                                <div class="card__table">
                                                                                    <div
                                                                                        class="card__tablecell hidden-xs">
                                                                                        <span
                                                                                            class="sprite icon__investment"></span>
                                                                                    </div>
                                                                                    <div class="card__tablecell">
                                                                                        <div class="card__userdetails">
                                                                                            <h3>829</h3>
                                                                                            <p>Projects</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div> --}}
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">

                                        <div class="views-element-container"
                                            data-block-plugin-id="views_block:config_page_-hpg_director_msg">


                                            <div class="content block-content">
                                                <div>
                                                    <div
                                                        class="view view-config-page- view-id-config_page_ view-display-id-hpg_director_msg js-view-dom-id-5886f3e30a448965744b85e9a2e0cc2e31ac9c06df14f9153af398b1e8ff2a80">




                                                        <div class="view-content">
                                                            <!-- Director message section Start -->

                                                            <section
                                                                class="section__block home__director__details technology__testimonials">
                                                                <div class="container">

                                                                    <h2 class="common__heading">Message from the
                                                                        Director</h2>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div
                                                                                class="testimonials testimonials--topspace">
                                                                                <div class="testimonials__items">
                                                                                    <div class="align-left">


                                                                                        <div> <img loading="lazy"
                                                                                                src="https://maabhartipgcollegekota.com/jk/director.png"
                                                                                                width="470" height="424"
                                                                                                alt>

                                                                                        </div>

                                                                                    </div>


                                                                                    <p>Greetings to all!</p>

                                                                                    <p>It gives us immense pleasure to
                                                                                        connect with you through this
                                                                                        heartfelt message. As pillars of
                                                                                        support in your child’s
                                                                                        educational journey, your role
                                                                                        is invaluable, and we deeply
                                                                                        appreciate the trust and
                                                                                        confidence you have placed in
                                                                                        our institution. At Maa Bharti
                                                                                        P.G. College, our mission has
                                                                                        always been clear: to empower
                                                                                        students through holistic
                                                                                        education — an education that
                                                                                        not only imparts academic
                                                                                        knowledge but also shapes
                                                                                        individuals who are responsible,
                                                                                        compassionate, and equipped for
                                                                                        the challenges of the future.
                                                                                    </p>

                                                                                    <p>In a rapidly evolving global
                                                                                        environment, the importance of a
                                                                                        well-rounded education cannot be
                                                                                        overstated. We live in times
                                                                                        where knowledge is abundant, yet
                                                                                        the real need is for individuals
                                                                                        who know how to apply that
                                                                                        knowledge meaningfully,
                                                                                        ethically, and productively. It
                                                                                        is our firm belief that
                                                                                        education should go beyond
                                                                                        textbooks and classrooms. It
                                                                                        should nurture the mind,
                                                                                        cultivate the spirit, and ignite
                                                                                        the passion to create, lead, and
                                                                                        inspire.</p>



                                                                                    <h3 class="testimonials__name">Mr.
                                                                                        Dinesh
                                                                                        Vijay</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{-- <div class="container layout layout--onecol">
                                    <div class="layout__region layout__region--content">

                                        <div class="views-element-container"
                                            data-block-plugin-id="views_block:config_page_-hpg_ask_iitm">


                                            <div class="content block-content">
                                                <div>
                                                    <div
                                                        class="view view-config-page- view-id-config_page_ view-display-id-hpg_ask_iitm js-view-dom-id-cc7d3bc606b283b201766aae65f305c796c579255f3b883f350f918e2c567a12">




                                                        <div class="view-content">
                                                            <section class="askmadras">
                                                                <div class="container">

                                                                    <div class="clearfix">
                                                                        <div class="row">
                                                                            <div class="col-sm-7">
                                                                                <h4
                                                                                    class="common__heading font__fontrols__style">
                                                                                    For JEE Advanced 2024 Aspirants</h4>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <a href="https://www.askiitm.com/"
                                                                                    target="_blank"
                                                                                    title="For JEE Advanced 2024 Aspirants"
                                                                                    class="section__viewlink">Visit
                                                                                    askiitm.com</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <img
                                                                                src="./sites/default/files/card_images/ask_iitm.png" />
                                                                            <div class="media">
                                                                                <p>The JoSAA counselling process can be
                                                                                    tricky. Current students and alumni
                                                                                    of IIT Madras are here to help out!
                                                                                </p>

                                                                                <p>Get your doubts cleared within 1 day.
                                                                                    Or browse through existing answers
                                                                                    and videos about everything there is
                                                                                    to life at IITs.</p>

                                                                            </div>

                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div
                                                                                class="video-embed-field-provider-youtube video-embed-field-responsive-video">
                                                                                <iframe width="854" height="480"
                                                                                    frameborder="0"
                                                                                    allowfullscreen="allowfullscreen"
                                                                                    src="https://www.youtube.com/embed/4ZJ6f_06gvw?autoplay=0&amp;start=0&amp;rel=0"></iframe>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div> --}}
                                {{-- <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">

                                        <div class="views-element-container"
                                            data-block-plugin-id="views_block:config_page_-hpg_cl_list">


                                            <div class="content block-content">
                                                <div>
                                                    <div
                                                        class="view view-config-page- view-id-config_page_ view-display-id-hpg_cl_list js-view-dom-id-1b0dda50a00e89062f5a54a0a8c379f802dc66f59c54a74e0c858cd0a31df047">




                                                        <div class="view-content">
                                                            <section class="campus__gallery">
                                                                <div class="container">
                                                                    <div class="clearfix">
                                                                        <div class="col-sm-7">
                                                                            <h4 class="common__heading">Campus Life</h4>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <a href="./campus-life/overview"
                                                                                title="IITM About Life on Campus"
                                                                                class="section__viewlink">About Life on
                                                                                Campus</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix">

                                                                        <div class="col-sm-6">
                                                                            <div class="campus__galleryimg">
                                                                                <img src="./sites/default/files/styles/image_m7/public/instigram/202006/8106734686_Shopping%20complex%20%282%29.jpeg?itok=eZF-906g"
                                                                                    alt="">
                                                                                <a href="javascript:;" title="Credits"
                                                                                    class="credit__tooltip credit__tooltip--white">Credits<span
                                                                                        class="credit__toolposition">V.
                                                                                        Abhigna B Tech, Mechanical
                                                                                        Engineering</span></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="col-sm-6">
                                                                                <div class="campus__galleryimg">
                                                                                    <img src="./sites/default/files/styles/image_m7/public/instigram/202006/9500737891_Muslim%20Prayer%20Hall%20-%20front.jpeg?itok=7f9Du0hH"
                                                                                        alt="">
                                                                                    <a href="javascript:;"
                                                                                        title="Credits"
                                                                                        class="credit__tooltip credit__tooltip--white">Credits<span
                                                                                            class="credit__toolposition">Mohamed
                                                                                            Fouzul Aleem MS, Civil
                                                                                            Engineering</span></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="campus__galleryimg">
                                                                                    <img src="./sites/default/files/styles/image_m7/public/2020-03/campus-meeting_1.jpg?itok=tfF_r3I8"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="campus__galleryimg">
                                                                                    <img src="./sites/default/files/styles/image_m7/public/instigram/202006/9941257919_Open%20Air%20Theatre%20-%20Alladin.jpeg?itok=4VdPNAaT"
                                                                                        alt="">
                                                                                    <a href="javascript:;"
                                                                                        title="Credits"
                                                                                        class="credit__tooltip credit__tooltip--white">Credits<span
                                                                                            class="credit__toolposition">Karthicanand
                                                                                            M S MS Scholar, Management
                                                                                            Studies</span></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="campus__galleryimg">
                                                                                    <img src="./sites/default/files/styles/image_m7/public/instigram/202006/9495651909_Scholars%27%20Room-Typical%20Scholars%27%20Room.jpeg?itok=bbdVo2SS"
                                                                                        alt="">
                                                                                    <a href="javascript:;"
                                                                                        title="Credits"
                                                                                        class="credit__tooltip credit__tooltip--white">Credits<span
                                                                                            class="credit__toolposition">Dhanalakshmi
                                                                                            Padmaraj Research Scholar,
                                                                                            Civil Engineering</span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p class="campus__galleryintro ">IIT Madras is a
                                                                        vibrant residential campus that allows students
                                                                        to flourish both personally and professionally.
                                                                        Campus life at IIT Madras is not just about
                                                                        classrooms, libraries and labs. There are
                                                                        several opportunities for students to pursue
                                                                        their favorite activities, refine their skills
                                                                        and discover new talents and interests. The
                                                                        campus is a constant buzz of varied activities
                                                                        and events - academic, co-curricular and
                                                                        extracurricular.
                                                                    </p>
                                                                </div>
                                                            </section>


                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div> --}}
                                {{-- <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">

                                        <div class="views-element-container"
                                            data-block-plugin-id="views_block:config_page_-hpg_instigram">


                                            <div class="content block-content">
                                                <div>
                                                    <div
                                                        class="view view-config-page- view-id-config_page_ view-display-id-hpg_instigram js-view-dom-id-3fe6bdd1c2c546006d10dc87ea9ec2d573dd38d3027ff6d591f65327b5ae5d26">




                                                        <div class="view-content">
                                                            <div class="campus__gallery campus__gallery--space">
                                                                <div class="container">
                                                                    <div class="clearfix campus__flexbox">
                                                                        <div
                                                                            class="col-sm-12 col-md-4 col-lg-3 campus__bggray">
                                                                            <div class="campus__viewgallery">
                                                                                <img src="./themes/custom/iitm/assets/images/home/campus-life/your-campus.png"
                                                                                    alt="">

                                                                                <p>Photographs contributed by residents
                                                                                    - the Institute through their lens!
                                                                                </p>
                                                                                <a href="./instigram-photo-gallery">View
                                                                                    Gallery</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-8 col-lg-9">
                                                                            <div class="col-sm-6">
                                                                                <div class="col-sm-12">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="campus__galleryimg">
                                                                                            <img src="./sites/default/files/styles/img_s7/public/instigram/202006/8610982740_road-WhatsApp%20Image%202019-12-09%20at%2011.30.40%20PM.jpeg?itok=foA5pHQe"
                                                                                                alt="">
                                                                                            <a href="javascript:;"
                                                                                                title="Credits"
                                                                                                class="credit__tooltip credit__tooltip--white">Credits<span
                                                                                                    class="credit__toolposition">Chandra
                                                                                                    Kishore Ph D,
                                                                                                    Biotechnology</span></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="campus__galleryimg">
                                                                                            <img src="./sites/default/files/styles/img_s7/public/instigram/202004/sstatic_campus_life_sport_1_chemplast_and_football_ground_from_bt_department.jpg?itok=kQteglYm"
                                                                                                alt="">
                                                                                            <a href="javascript:;"
                                                                                                title="Credits"
                                                                                                class="credit__tooltip credit__tooltip--white">Credits<span
                                                                                                    class="credit__toolposition">Chanukya,
                                                                                                    2 yr BS
                                                                                                    BioSciences</span></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="campus__galleryimg">
                                                                                            <img src="./sites/default/files/styles/img_s7/public/instigram/202006/9384132717_deer-5.jpeg?itok=KOSjFWtR"
                                                                                                alt="">
                                                                                            <a href="javascript:;"
                                                                                                title="Credits"
                                                                                                class="credit__tooltip credit__tooltip--white">Credits<span
                                                                                                    class="credit__toolposition">Hariharan
                                                                                                    B Tech, Mechanical
                                                                                                    Engineering</span></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="campus__galleryimg">
                                                                                            <img src="./sites/default/files/styles/img_s7/public/instigram/202006/8379826137_evening-1.jpeg?itok=XCtwbEEw"
                                                                                                alt="">
                                                                                            <a href="javascript:;"
                                                                                                title="Credits"
                                                                                                class="credit__tooltip credit__tooltip--white">Credits<span
                                                                                                    class="credit__toolposition">Raviteja
                                                                                                    Chandu B Tech,
                                                                                                    Mechanical
                                                                                                    Engineering</span></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="col-sm-12">
                                                                                    <div class="campus__galleryimg">
                                                                                        <img src="./sites/default/files/styles/img_m6/public/instigram/202006/9500737891_Road.jpeg?itok=yCFPhOrw"
                                                                                            alt="">
                                                                                        <a href="javascript:;"
                                                                                            title="Credits"
                                                                                            class="credit__tooltip credit__tooltip--white">Credits<span
                                                                                                class="credit__toolposition">Mohamed
                                                                                                Fouzul Aleem MS, Civil
                                                                                                Engineering</span></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div> --}}

                            </div>

                        </article>

                    </div>
                </div>

            </div>


        </main>


        <x-Social />

        <x-Footer />






        <!-- Search Popup Model section -->


        <div class="popup" data-popup-model="search" role="search" aria-expanded="false">
            <div class="popup__container findinfo__search">
                <a href="javascript:;" title="Popup Close" class="sprite popup__close" data-popup-close="close"><span
                        class="sr-only">Close</span></a>
                <div class="popup__body">
                    <fieldset>
                        <legend class="sr-only">IITM Search:</legend>
                        <div class="findinfo__searchboxsec">
                            <label for="keyword" class="findinfo__label">Hello. </label>
                            <input type="text" id="keyword" name="keyword" class="findinfo__searchbox"
                                placeholder=" What are you looking for?">
                            <a href="javascript:;" title="IITM Search" id="header_popup_search"
                                class="sprite findinfo__searchicon"><span class="sr-only">Search</span></a>
                        </div>
                        <div class="findinfo__searchshowtext">
                            <div class="row"><span id="wrapper"></span>
                                <div class="col-sm-4" id="popup_content"></div>
                                <div class="col-sm-4" id="popup_location"></div>
                                <div class="col-sm-4" id="popup_people"></div>
                            </div>
                        </div>

                        <div class="findinfo__controls">
                            <!--<p>More ways to search</p>-->
                            <div class="row" id="filter_chk_box">
                                <div class="col-sm-4 col-md-3">
                                    <div class="checkbox__controls">
                                        <input type="checkbox" id="academics" name="types[]" class="popup_search_type"
                                            value="academics">
                                        <label for="academics">Academics</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="checkbox__controls">
                                        <input type="checkbox" id="research" name="types[]" class="popup_search_type"
                                            value="research">
                                        <label for="research">Research</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="checkbox__controls">
                                        <input type="checkbox" id="events" name="types[]" class="popup_search_type"
                                            value="events">
                                        <label for="events">News & Events</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="checkbox__controls">
                                        <input type="checkbox" id="campus_life" name="types[]" class="popup_search_type"
                                            value="campus_life">
                                        <label for="campus_life">Campus Life</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="checkbox__controls">
                                        <input type="checkbox" id="location" name="types[]" class="popup_search_type"
                                            value="location">
                                        <label for="location">Locations</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="checkbox__controls">
                                        <input type="checkbox" id="people" name="types[]" class="popup_search_type"
                                            value="people">
                                        <label for="people">People</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--<div class="findinfo__morewaystext">
                    <a href="javascript:;" title="IITM More ways to search">More ways to search</a>
                    <span class="sprite findinfo__morewaysicon"></span>
                </div>-->
                    </fieldset>
                </div>

            </div>
        </div>

        <div class="popup__overlay" data-popup-overlay="popup-overlay" role="search" aria-expanded="false"></div>


        <span class=""><a href="javascript:;" title="IITM Scroll to Top" class="scroll__to__top"
                style="display: none;"><span class="sr-only">Scroll to Top</span></a></span>

    </div>


    <script type="application/json" data-drupal-selector="drupal-settings-json">
        {"path":{"baseUrl":"\/","pathPrefix":"","currentPath":"node\/101","currentPathIsAdmin":false,"isFront":true,"currentLanguage":"en"},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"theme_path":"\/themes\/custom\/iitm","language":"en","ajax":[],"user":{"uid":0,"permissionsHash":"4b28dd6bde0608e6e93a9a1e0ca069fa5b29ae80d446553d08de5266f183e7fe"}}
    </script>
    <script
        src="./sites/default/files/js/js_mN3TgQQzaKI0Jf3eSj_Z974OiR1Yqrg7QL2XJKTJPQo.js?scope=footer&amp;delta=0&amp;language=en&amp;theme=iitm&amp;include=eJzLzCzJ1c8EErrFyUWZBSUANSgGWA">
    </script>
    <script src="https://cse.google.com/cse.js?cx=003542863852187245998:1iuxkpwcroy"></script>
    <script
        src="./sites/default/files/js/js_kPloWiSE6Hj0Dhmfo57fhIKmzCy1X2J_t5wVQ2HnugI.js?scope=footer&amp;delta=2&amp;language=en&amp;theme=iitm&amp;include=eJzLzCzJ1c8EErrFyUWZBSUANSgGWA">
    </script>




</body>

</html>