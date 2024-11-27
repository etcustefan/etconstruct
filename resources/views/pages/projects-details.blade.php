@extends('layouts.layout1')

@php
    $title = 'Project Details';
    $subtitle = 'Project Details';
@endphp


@section('content')

     <!-- Start Projects Details area  -->
     <div class="projects-details-area mt-dec-pd tmp-section-gap rts_jump_counter__animation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="projects-details-inner">
                        <div class="thumbnail grow position-relative">
                            <img src="{{ asset('assets/images/projects-details/projects-details.jpg') }}" alt="projects-details">
                        </div>
                        <div class="clients-projects-details">
                            <div class="clients-details-inner">
                                <h3 class="title text-center">CLIENT PROJECT DETAILS</h3>
                                <div class="single-projects-details">

                                    <div class="info">
                                        <div class="icon">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="subtitle">Clients:</h4>
                                            <h5 class="category">Alex Brands</h5>
                                        </div>

                                    </div>

                                    <div class="info">
                                        <div class="icon">
                                            <i class="fa-sharp fa-light fa-layer-group"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="subtitle">Category:</h4>
                                            <h5 class="category">Business Solution</h5>
                                        </div>

                                    </div>

                                    <div class="info">
                                        <div class="icon">
                                            <i class="fa-light fa-calendar-days"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="subtitle">Date:</h4>
                                            <h5 class="category">05 May 2023</h5>
                                        </div>

                                    </div>

                                    <div class="info">
                                        <div class="icon">
                                            <i class="fa-regular fa-map-location"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="subtitle">Address:</h4>
                                            <h5 class="category">+880123456678</h5>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="projects-details-wrapper">
                                <h3 class="title">Business Planing & Solution</h3>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse consectetur tristique tortorLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus.</p>

                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum.
                                </p>
                            </div>

                            <div class="projects-details-wrapper">
                                <h3 class="title">The Challenge Of Project</h3>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus.</p>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="challenge-details">
                                            <div class="icon"><i class="fa-solid fa-check"></i></div>
                                            <p class="description">It's Essential To Work With Business Consultants Who Have</p>
                                        </div>
                                        <div class="challenge-details">
                                            <div class="icon"><i class="fa-solid fa-check"></i></div>
                                            <p class="description">It's Essential To Work With Business Consultants Who Have</p>
                                        </div>


                                        <div class="challenge-details">
                                            <div class="icon"><i class="fa-solid fa-check"></i></div>
                                            <p class="description">It's Essential To Work With Business Consultants Who Have It's Essential To Work With Business Consultants Who Have</p>
                                        </div>


                                    </div>

                                    <div class="col-lg-6">
                                        <div class="challenge-details">
                                            <div class="icon"><i class="fa-solid fa-check"></i></div>
                                            <p class="description">With Business Consultants Who Have</p>
                                        </div>
                                        <div class="challenge-details">
                                            <div class="icon"><i class="fa-solid fa-check"></i></div>
                                            <p class="description">Work With Business Consultants Who Have</p>
                                        </div>


                                        <div class="challenge-details">
                                            <div class="icon"><i class="fa-solid fa-check"></i></div>
                                            <p class="description">Who Have It's Essential To Work</p>
                                        </div>
                                    </div>


                                </div>

                                <p class="description mt--30">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse consectetur tristique tortorLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien.
                                </p>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/projects-details/challen-1.jpg') }}" alt="project details">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/projects-details/challen-2.jpg') }}" alt="project details">
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
    <!-- Start Projects Details area  -->

@endsection