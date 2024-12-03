@extends('layouts.layout2')

@php
    $bodyClass='index-one onepage';
@endphp


@section('content')

    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-one construction-radious">
        <!-- header mid area start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-header-one-wrapper">
                        <!-- tmp nav area -->
                        <div class="tmp-nav-area-one header--sticky">
                            <div class="logo-md-sm-device">
                                <a href="#" class="logo">
                                    <img src="{{ asset('assets/images/logo/logo-01.svg') }}"src="{{ asset('assets/images/logo/logo-01.svg') }}" alt="corporate_business-logo">
                                </a>
                            </div>

                            <div class="header-nav main-nav-one">
                                <nav>
                                    <ul class="parent-nav">
                                        <li>
                                            <a class="nav-link" href="#home">
                                                <span class="rolling-text">HOME</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#about">
                                                <span class="rolling-text">ABOUT</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#service">
                                                <span class="rolling-text">SERVICES</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#portfolio">
                                                <span class="rolling-text">portfolio</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#contact1">
                                                <span class="rolling-text">CONTACT</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="input-area">
                                <input type="text" placeholder="Search...">
                                <i class="fa-light fa-magnifying-glass"></i>
                            </div>
                            <div class="actions-area">
                                <!-- <div class="menu-button" id="search">
                                <i class="fa-light fa-grid-2"></i>
                            </div> -->
                                <div class="tmp-side-collups-area" id="side-collups">
                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect width="20" height="2" fill="#1F1F25"></rect>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- tmp nav area -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header mid area end -->

    </header>
    <!-- tpm-header-area end -->

    <!-- x-sidebar start -->
    <x-sidebar/>
    <!-- x-sidebar end -->

    <!-- tmp banner area start -->
    <div class="tmp-banner-swiper-one-area construction-2" id="home">
        <div class="swiper mySwiper-banner-one-construction">
            <div class="swiper-wrapper">
                {{$_i = 1}}
                <?php foreach ($mainGallery as $row):?>
                    <div class="swiper-slide">
                        <div class="tmp-banner-area asdbg_image-{{$_i}} bg_image banner-one-height-control construction-2 tmp-section-gap" style="background-image: url(<?= 'storage/constructions/' . $row['image_path']?>)">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="banner-one-main-wrapper" <?php if($_i == 2){echo 'style="position: absolute;bottom: -85px;left: 41px;"';} ?>>
                                        <div class="inner">
                                            <h1 class="title">{{$row['heading_text']}}</h1>
                                            <p class="disc">
                                                <?= $row['text'] ?>
                                            </p>
                                            <div class="button-area-banner-one">
                                                <a href="#{{$row['button_action']}}" class="tmp-btn btn-primary">{{$row['button_text']}}</a>
                                                <!-- video icon -->
                                                <?php if($row['video_path']): ?>
                                                    <div class="vedio-icone d-none" data-tmp-cursor="lg" data-tmp-cursor-text="Play Video">
                                                    <a class="video-play-button play-video" href="#">
                                                        <span></span>
                                                        <p class="text">
                                                            Play Vedio
                                                        </p>
                                                    </a>
                                                    <div class="video-overlay">
                                                        <a class="video-overlay-close">×</a>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <!-- video icon -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $_i++; endforeach;?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="Next"></div>
            <div class="swiper-button-prev" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="Prev"></div>
        </div>
    </div>
    <!-- tmp banner area end -->

    <!-- Tpm About Area Start  -->
    <div class="about-area tmp-section-gap about-style-one" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumbnail-construction">
                        <div class="image-large">
                            <img src="{{ asset('assets/images/about/about-2.jpg') }}"src="{{ asset('assets/images/about/about-2.jpg') }}" alt="construction_business">
                        </div>
                        <div class="shape-bottom-left"></div>
                        <div class="shape-bottom-right"></div>
                        <div class="work-done">
                            <h3 class="title"><span class="counter">48</span>+</h3>
                            <p>Apartamente</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-inner">
                        <div class="section-head text-align-left section-head-one-side">
                            <div class="section-sub-title">
                                <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                                <span class="subtitle">Despre noi</span>
                            </div>
                            <h2 class="title split-collab">Cateva cuvinte despre <br> Lake View Lux Residence</h2>
                        </div>

                        <p class="description" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            {{$company['construction_description']}}
                            Complex rezidențial de lux cu vedere panoramică la lac, apartamente spațioase, finisaje premium, spații verzi, locuri de relaxare și facilități moderne, proiectat pentru confort și eleganță, oferind un stil de viață exclusivist într-o locație liniștită și deosebit de atractivă.
                        </p>
                        <!-- Prograss bar Start  -->
                        <div class="single-progress-area progress-stye-one" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">Lorem ipsum</p>
                                <span class="parcent">
                                    85%
                                </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single-progress-area progress-stye-one" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">Lorem ipsum 2</p>
                                <span class="parcent">
                                    66%
                                </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 66%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!-- Prograss bar End  -->
                        <div class="thumbnail-with-title mt--50" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <a href="{{ route('contact') }}" class="tmp-btn btn-primary">Contacteaza-ne</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Tpm About Area End  -->

    <!-- Tmp Servisec Processs Area Two Start -->
    <div class="tpm-services-process-area tmp-section-gapBottom" id="apartments">
        <div class="container">
            <div class="row" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                            <span class="subtitle">Randare 3D</span>
                        </div>
                        <h2 class="title split-collab">Schita apartamentelor</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <?php foreach ($apartments as $index => $apartment): ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-services construction">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#">
                                    <img src='{{ asset("assets/images/services/services-round-" . $index+1 .".png") }}' alt="Schita apartament numarul {{$index++}}}">
                                    <div class="number-bg-round">
                                        <span>0{{$index}}</span>
                                    </div>
                                </a>

                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">
                                    {{$apartment['title']}}
                                </h5>
                                <p class="description">
                                    {{$apartment['description']}}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Tmp Servisec Processs Area Two End -->

        <!-- tmp product area start -->
        <div class="tmp-product-area tmp-section-gapTop bg-product-1 with-construction" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-head color-white">
                            <div class="section-sub-title center-title">
                                <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                                <span class="subtitle">Unde vei locui</span>
                            </div>
                            <h2 class="title split-collab">Mai multe poze cu complexul visurilor tale </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-full">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- product swiper area start -->
                        <div class="product-swiper-area-one">

                            <div class="swiper mySwiper-portfolio-2-cons">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- single product area start -->
                                        <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a href="{{ route('projects-details') }}" class="thumbnail">
                                                <img src="{{ asset('assets/images/portfolio/portfolio-8.png') }}"src="{{ asset('assets/images/portfolio/portfolio-8.png') }}" alt="corporate_business">
                                            </a>
                                            <div class="inner-content">
                                                <a href="{{ route('projects-details') }}">
                                                    <h5 class="title">Corporate Design</h5>
                                                </a>
                                                <span class="designation">Financial advisory</span>
                                                <div class="tag"></div>
                                            </div>
                                        </div>
                                        <!-- single product area end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- single product area start -->
                                        <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a href="{{ route('projects-details') }}" class="thumbnail">
                                                <img src="{{ asset('assets/images/portfolio/portfolio-9.png') }}"src="{{ asset('assets/images/portfolio/portfolio-9.png') }}" alt="corporate_business">
                                            </a>
                                            <div class="inner-content">
                                                <a href="{{ route('projects-details') }}">
                                                    <h5 class="title">Executive Design Kit</h5>
                                                </a>
                                                <span class="designation">Financial advisory</span>
                                                <div class="tag"></div>
                                            </div>
                                        </div>
                                        <!-- single product area end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- single product area start -->
                                        <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a href="{{ route('projects-details') }}" class="thumbnail">
                                                <img src="{{ asset('assets/images/portfolio/portfolio-10.png') }}"src="{{ asset('assets/images/portfolio/portfolio-10.png') }}" alt="corporate_business">
                                            </a>
                                            <div class="inner-content">
                                                <a href="{{ route('projects-details') }}">
                                                    <h5 class="title">Business Theme Pack</h5>
                                                </a>
                                                <span class="designation">Financial advisory</span>
                                                <div class="tag"></div>
                                            </div>
                                        </div>
                                        <!-- single product area end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- single product area start -->
                                        <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a href="{{ route('projects-details') }}" class="thumbnail">
                                                <img src="{{ asset('assets/images/portfolio/portfolio-11.png') }}"src="{{ asset('assets/images/portfolio/portfolio-11.png') }}" alt="corporate_business">
                                            </a>
                                            <div class="inner-content">
                                                <a href="{{ route('projects-details') }}">
                                                    <h5 class="title">Executive Layout Set</h5>
                                                </a>
                                                <span class="designation">Financial advisory</span>
                                                <div class="tag"></div>
                                            </div>
                                        </div>
                                        <!-- single product area end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- single product area start -->
                                        <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a href="{{ route('projects-details') }}" class="thumbnail">
                                                <img src="{{ asset('assets/images/portfolio/portfolio-12.png') }}"src="{{ asset('assets/images/portfolio/portfolio-12.png') }}" alt="corporate_business">
                                            </a>
                                            <div class="inner-content">
                                                <a href="{{ route('projects-details') }}">
                                                    <h5 class="title">Professional Design</h5>
                                                </a>
                                                <span class="designation">Financial advisory</span>
                                                <div class="tag"></div>
                                            </div>
                                        </div>
                                        <!-- single product area end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- single product area start -->
                                        <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a href="{{ route('projects-details') }}" class="thumbnail">
                                                <img src="{{ asset('assets/images/portfolio/portfolio-7.png') }}"src="{{ asset('assets/images/portfolio/portfolio-7.png') }}" alt="corporate_business">
                                            </a>
                                        </div>
                                        <!-- single product area end -->
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Next"></div>
                                <div class="swiper-button-prev" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Prev"></div>
                            </div>
                        </div>
                        <!-- product swiper area end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- tmp product area end -->

        <!-- Tmp FAQ area Start  -->
        <div class="faq-area faq-style-one faq-bg-image bg_image tmp-section-gap mt-dec--180">
            <div class="container pt--180">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-head">
                            <div class="section-sub-title center-title">
                                <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                                <span class="subtitle">Intrenari si Raspunsuri</span>
                            </div>
                            <h2 class="title split-collab">Intrebari si raspunsuri frecvente</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 pr--30">
                        <div class="thumbnail-faq-cons">
                            <img src="{{ asset('assets/images/faq/faq-3.jpg') }}"src="{{ asset('assets/images/faq/faq-3.jpg') }}" alt="Business Consulting FAQ">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordionExample">
                                <?php foreach($faqs as $index => $faq):?>
                                    <div class="accordion-item">
                                    <div class="accordion-header" id="heading{{$getName[$index+1]}}">
                                        <div class="accordion-button <?php if($index) echo 'collapsed' ?>" data-bs-toggle="collapse" role="button" data-bs-target="#collapse{{$getName[$index+1]}}" aria-expanded="{{(bool)$index}}" aria-controls="collapse{{$getName[$index+1]}}">

                                            <div class="accordion-button-left">
                                                <i class="fa-regular fa-question"></i>
                                                <span>{{$faq['question']}}</span>
                                            </div>
                                            <div class="accordion-button-right">
                                                <i class="fa-sharp fa-light fa-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapse{{$getName[$index+1]}}" class="accordion-collapse collapse <?php if(!$index)echo 'show'?>" aria-labelledby="heading{{$getName[$index+1]}}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{$faq['answer']}}
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                            <div class="faq-buttom">
                                <h4 class="title">Inca aveti intrebari?
                                </h4>
                                <p>Contactteaza unul dintre <a href="#">Agentii Nostri</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Tmp FAQ area Start  -->

        <!-- Start Contact Area  -->
        <div class="contact-area-three tmp-section-gapTop" id="contact1">
            <div class="bg-shape">
                <img src="{{ asset('assets/images/cta/02.png') }}"src="{{ asset('assets/images/cta/02.png') }}" alt="bussiness-contact">
            </div>
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="contact-inner">
                            <div class="section-head section-head-one-side text-align-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="title">Contacteaza-ne</span>
                                <p class="description">
                                    Numai la un apel distanta, colegii nostri iti vor raspunde in cel mai scurt timp posibil , in functie de perioada.
                                </p>
                            </div>

                            <ul class="ft-link ft-link-style-three" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                <li>
                                    <div class="single-contact background-transparent">
                                        <div class="icon">
                                            <i class="fa-light fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <span>Telefon</span>
                                            <a class="contact-here" href="#">{{$company['phone']}}</a>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="single-contact background-transparent">
                                        <div class="icon">
                                            <i class="fa-solid fa-envelope-open-text"></i>
                                        </div>

                                        <div class="content">
                                            <span>E-mail</span>
                                            <a class="contact-here" href="#">{{$company['email']}}</a>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="single-contact background-transparent">
                                        <div class="icon">
                                            <i class="fa-solid fa-map-location-dot"></i>
                                        </div>
                                        <div class="content">
                                            <span>Sediu</span>
                                            <a class="contact-here" href="#">{{$company['address']}}</a>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                            <div class="tmp-tag-list tag-list-one" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                <a class="tag-list" href="#">Facebook</a>
                                <a class="tag-list" href="#">Instagram</a>
                                <a class="tag-list" href="#">Google</a>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-7" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

                        <div class="contact-inner">
                            <div class="section-head section-head-one-side text-align-left">
                                <span class="title">Afla mai multe informatii</span>
                                <p class="description">
                                    Completeaza aici cu ce ati dori sa aflati iar unul dintre agentii nostri te vor contacta de indata ce primim solicitarea.
                                </p>
                            </div>
                            <div class="contact-form style-two">
                                <form id="contact-form" action="{{route('saveContactForm')}}" method="post">
                                    @csrf
                                    <div class="contact-form-wrapper row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field" name="contact-name" placeholder="Nume Prenume" id="contact-name" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field" name="contact-phone" placeholder="Numar de telefon" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field" name="contact-email" placeholder="Email" type="email" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="input-field" placeholder="Spune-ne mai multe despre ce ai dori sa afli" name="contact-message" id="contact-message"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-submit-group">
                                                <button name="submit" class="tmp-btn btn-primary" type="submit" id="submit">
                                                    Salveaza
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area  -->

        <!-- Start Footer Area  -->
        <footer class="footer-area footer-style-one-wrapper bg-color-footer bg_images tmp-section-gap" style="margin-top:40px;border-top-left-radius: 20px;border-top-right-radius: 20px">
            <div class="container">
                <div class="row d-none">
                    <div class="col-lg-12">
                        <div class="subscribe-area subscribe-style-1">
                            <div class="subscribe-inner">
                                <div class="title">Subscribe to Newsletter</div>
                                <form action="#" class="newsletter-form-1 mt--40">
                                    <input type="email" placeholder="Your Email" required>
                                    <button type="submit" class="tmp-btn btn-primary">
                                        Subscribe Now <i class="fa-sharp fa-regular fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-main footer-style-one">
                    <div class="row g-5">
                        <div style="width: 33%;" class="col-lg-4 col-md-6">
                            <div class="single-footer-wrapper border-right mr--20">
                                <div class="logo">
                                    <a href="{{ route('index') }}">
                                        <img src="{{ asset('assets/images/logo/logo-02.svg') }}" alt="logo">
                                    </a>
                                </div>

                                <p class="description">
                                    Proin Pretium Sem Libero, Nec Aliquet Augue Lobortis In. Phasellus Nibh Quam, Molestie Id Est Sit Amet, Luctus Pulvinar
                                </p>


                                <div class="day-time">
                                    <div class="icon"><i class="fa-solid fa-alarm-clock"></i></div>
                                    <div class="content">
                                        <div class="day">Luni - Vineri:</div>
                                        <div class="time">9:00 – 17:00</div>
                                    </div>
                                </div>

                                <ul class="social-icons solid-social-icons rounded-social-icons">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div style="width: 33%;" class="col-lg-2 col-md-6">
                            <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                                <h5 class="ft-title">Linkuri Ajutatoare</h5>
                                <ul class="ft-link">
                                    <li>
                                        <a href="{{ route('about') }}">Despre noi</a>
                                    </li>
                                    <li class="d-none">
                                        <a href="{{ route('team') }}">Meet Our Team</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service') }}">Ce oferim</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">Randare 3D</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faq') }}">Suport</a>
                                    </li>

                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-none">
                            <div class="single-footer-wrapper pr--15">
                                <h5 class="ft-title">Recent Post</h5>

                                <div class="single-post">
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/images/footer/small-post.jpg') }}" alt="Business_Corporate">
                                    </div>
                                    <div class="content">
                                        <div class="date"><i class="fa-light fa-calendar-days"></i><span>12 Feb, 2022</span></div>

                                        <a href="{{ route('blog-details') }}">
                                            <h6 class="title">Day tree hide from hath
                                                gathered multy</h6>
                                        </a>
                                    </div>
                                </div>

                                <div class="single-post">
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/images/footer/small-post-2.jpg') }}" alt="Business_Corporate">
                                    </div>
                                    <div class="content">
                                        <div class="date"><i class="fa-light fa-calendar-days"></i><span>12 Feb, 2022</span></div>

                                        <a href="{{ route('blog-details') }}">
                                            <h6 class="title">Saving Time Achieving
                                                Success in Business</h6>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div style="width: 33%;" class="col-lg-3 col-md-6">
                            <div class="single-footer-wrapper">
                                <h5 class="ft-title">Adresa Sedilui:</h5>
                                <ul class="ft-link">
                                    <li class="ft-location">
                                        {{$company['address']}}
                                    </li>

                                    <li>
                                        <div class="single-contact">

                                            <div class="icon">
                                                <i class="fa-solid fa-envelope-open-text"></i>
                                            </div>

                                            <div class="content">
                                                <span>E-mail:</span>
                                                <a href="mailto:info@etconstruct.ro">
                                                    {{$company['email']}}
                                                </a>
                                            </div>

                                        </div>
                                    </li>

                                    <li>
                                        <div class="single-contact">
                                            <div class="icon">
                                                <i class="fa-light fa-phone"></i>
                                            </div>
                                            <div class="content">
                                                <span>Phone:</span>
                                                <a href="tel:+40744116678">{{$company['phone']}}</a>
                                            </div>

                                        </div>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright-area-one" style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-wrapper">
                            <p>© Copyright 2024. Ne rezervam drepturile de autor <a href="#">{{$company['construction_name']}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Area  -->


@endsection
