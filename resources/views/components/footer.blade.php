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
                                <li class="ft-location">Strada Păcurari 136, Iași 707410</li>

                                <li>
                                    <div class="single-contact">

                                        <div class="icon">
                                            <i class="fa-solid fa-envelope-open-text"></i>
                                        </div>

                                        <div class="content">
                                            <span>E-mail:</span>
                                            <a href="mailto:info@etconstruct.ro">info@etconstruct.ro</a>
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
                                            <a href="tel:+40744116678">+40 744 116 667</a>
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
                        <p>© Copyright 2024. Ne rezervam drepturile de autor <a href="#">Etconstruct</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area  -->
