@extends('layouts.site')

@section('title', trans('site.about'))
@section('styles')
    <style>
        #section-about-us-4 .image-container {
            background: url(../images/background/bg-side-3.jpg);
            background-size: auto;
            min-height: 450px;
        }

        #section-about-us-4 {
            border-radius: 0 0 15px 0;
        }

        @media screen and (max-width: 460px) {
            .side-bg .image-container img {

                padding: 0 25px;
                margin-top: 15px !important;
            }

            #section-about-us-4 .image-container {
                margin-bottom: 15px !important;
            }

            .de_light #content {
                padding-top: 50px !important;
            }

            .inner-padding {
                padding-top: 0 !important;
            }

            #view-all-projects,
            #call-to-action,
            #view-all-services {
                padding: 60px 0 25px 0;
            }

            #section-testimonial-architecture {
                padding: 30px 15px 25px;
            }

            #partner {
                padding: 25px
            }
        }
    </style>
@endsection
@section('scripts')

@endsection
@section('content')

    <!-- Page title -->
    <section class="page-title-wrap position-relative bg-light">
        <div id="particles_js"></div>
        <div class="container">
            <div class="row">
                <div class="col-11">
                    <div class="page-title position-relative pt-5 pb-5">
                        <ul class="custom-breadcrumb roboto list-unstyled mb-0 clearfix" data-animate="fadeInUp" data-delay="1.2">
                            <li><a href="home.html">Home</a></li>
                            <li><i class="fas fa-angle-double-right"></i></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                        <h1 data-animate="fadeInUp" data-delay="1.3">About Us</h1>
                    </div>
                </div>
                <div class="col-1">
                    <div class="world-map position-relative">
                        <img src="img/map.svg" alt="" alt="" data-no-retina class="svg">>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- About us -->
    <section class="pt-7 pb-7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="about-us-title text-center">
                        <h2 data-animate="fadeInUp" data-delay=".1">Welcome to VPNet</h2>
                        <p data-animate="fadeInUp" data-delay=".2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-about-us-info" data-animate="fadeInUp" data-delay=".1">
                        <h3>Who we are?</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus ui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati piditate non provident, similique sunt in culpa qui officia deserunt illitia imi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-about-us-info" data-animate="fadeInUp" data-delay=".2">
                        <h3>Our mission</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus ui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati piditate non provident, similique sunt in culpa qui officia deserunt illitia imi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-about-us-info" data-animate="fadeInUp" data-delay=".3">
                        <h3>Our vision</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus ui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati piditate non provident, similique sunt in culpa qui officia deserunt illitia imi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                    </div>
                </div>
            </div>

            <div class="write-about-us text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 data-animate="fadeInUp" data-delay=".1">Want To Write About VPNet?</h2>
                        <p data-animate="fadeInUp" data-delay=".2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque  eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</p>
                        <a href="#" class="btn btn-primary" data-animate="fadeInUp" data-delay=".3">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About us -->

    <!-- Our team -->
    <section class="pt-7 pb-5-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center">
                        <h2 data-animate="fadeInUp" data-delay=".1">Our Team</h2>
                        <p data-animate="fadeInUp" data-delay=".2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div>
            </div>

            <!-- Members -->
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay="0">
                        <div class="image-hover-wrap">
                            <img src="img/members/member1.jpg" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info">
                            <h4>Vivian J. Rogers</h4>
                            <span>Cheife Executive Officer (CEO)</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".1">
                        <div class="image-hover-wrap">
                            <img src="img/members/member2.jpg" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info">
                            <h4>Marie S. Higginbotham</h4>
                            <span>Senior Marketing Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".2">
                        <div class="image-hover-wrap">
                            <img src="img/members/member3.jpg" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info">
                            <h4>Larry W. Oliver</h4>
                            <span>Managing Director</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".3">
                        <div class="image-hover-wrap">
                            <img src="img/members/member4.jpg" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info">
                            <h4>Michelle R. Weiss</h4>
                            <span>Production Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".4">
                        <div class="image-hover-wrap">
                            <img src="img/members/member5.jpg" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info">
                            <h4>Christine T. McCallister</h4>
                            <span>Relationship Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".5">
                        <div class="image-hover-wrap">
                            <img src="img/members/member6.jpg" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info">
                            <h4>Leroy L. Bowen</h4>
                            <span>Co-Founder Director</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".6">
                        <div class="image-hover-wrap">
                            <img src="img/members/member7.jpg" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info">
                            <h4>Lee A. Funderburg</h4>
                            <span>Junior Creative Director</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".7">
                        <div class="image-hover-wrap">
                            <img src="img/members/member8.jpg" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info">
                            <h4>Ricky M. Hallett</h4>
                            <span>Senior Marketing Officer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our team -->



    <!-- Servers -->
    <section class="servers pt-7 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="section-title">
                        <h2 data-animate="fadeInUp" data-delay=".1">865 Server In 197 Country</h2>
                        <p data-animate="fadeInUp" data-delay=".2">There are many variations of passages of Lorem Ipsum
                            ailable, but the majority have suffered hmour</p>
                    </div>
                    <ul class="data-centers list-unstyled list-item clearfix">
                        <li data-animate="fadeInUp" data-delay=".1"><i class="fas fa-caret-right"></i>North America (201)
                        </li>
                        <li data-animate="fadeInUp" data-delay=".2"><i class="fas fa-caret-right"></i>South America (169)
                        </li>
                        <li data-animate="fadeInUp" data-delay=".3"><i class="fas fa-caret-right"></i>Europe (151)</li>
                        <li data-animate="fadeInUp" data-delay=".4"><i class="fas fa-caret-right"></i>Australia/Oceania
                            (142)</li>
                        <li data-animate="fadeInUp" data-delay=".5"><i class="fas fa-caret-right"></i>Asia (70)</li>
                        <li data-animate="fadeInUp" data-delay=".6"><i class="fas fa-caret-right"></i>Africa (40)</li>
                    </ul>
                    <a href="#" class="btn server-btn" data-animate="fadeInUp" data-delay=".7">View Payment Method
                        <i class="fas fa-caret-right"></i></a>
                </div>
                <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                    <div class="server-map">
                        <img src="{{ asset('home/img/servers.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Servers -->

    <!-- Our clients -->
    <section class="clients-wrap pt-4 pb-4">
        <div class="container">
            <ul class="our-clients list-unstyled d-md-flex align-items-md-center justify-content-md-between m-0">
                <li data-animate="fadeInUp" data-delay=".1">
                    <a href="#" target="_blank"><img src="{{ asset('home/img/brands/brand1.png') }}"
                            alt=""></a>
                </li>
                <li data-animate="fadeInUp" data-delay=".2">
                    <a href="#" target="_blank"><img src="{{ asset('home/img/brands/brand2.png') }}"
                            alt=""></a>
                </li>
                <li data-animate="fadeInUp" data-delay=".3">
                    <a href="#" target="_blank"><img src="{{ asset('home/img/brands/brand3.png') }}"
                            alt=""></a>
                </li>
                <li data-animate="fadeInUp" data-delay=".4">
                    <a href="#" target="_blank"><img src="{{ asset('home/img/brands/brand4.png') }}"
                            alt=""></a>
                </li>
                <li data-animate="fadeInUp" data-delay=".5">
                    <a href="#" target="_blank"><img src="{{ asset('home/img/brands/brand5.png') }}"
                            alt=""></a>
                </li>
                <li data-animate="fadeInUp" data-delay=".6">
                    <a href="#" target="_blank"><img src="{{ asset('home/img/brands/brand6.png') }}"
                            alt=""></a>
                </li>
                <li data-animate="fadeInUp" data-delay=".7">
                    <a href="#" target="_blank"><img src="{{ asset('home/img/brands/brand7.png') }}"
                            alt=""></a>
                </li>
                <li data-animate="fadeInUp" data-delay=".8">
                    <a href="#" target="_blank"><img src="{{ asset('home/img/brands/brand8.png') }}"
                            alt=""></a>
                </li>
                <li data-animate="fadeInUp" data-delay=".9">
                    <a href="#" target="_blank"><img src="{{ asset('home/img/brands/brand9.png') }}"
                            alt=""></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End of Our clients -->
@endsection
