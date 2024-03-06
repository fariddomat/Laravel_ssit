@extends('layouts.site')
@section('title', trans('site.home'))
@section('styles')

@endsection
@section('scripts')

@endsection
@section('content')
    <!-- Banner -->
    <section class="position-relative bg-light pt-4 pb-4">
        <div id="particles_js"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Banner content -->
                    <div class="banner-content">
                        <h1 data-animate="fadeInUp" data-delay="1.2">{{$info->title}}</h1>
                        <h2 data-animate="fadeInUp" data-delay="1.3"><span class="">{{$info->description}}</span></h2>
                        <ul class="list-inline" data-animate="fadeInUp" data-delay="1.4">
                            <li><a href="#" class="btn btn-primary">@lang('site.about_me')</a></li>
                            <li><a href="#" class="btn">تفقد الباقات <i class="fas fa-caret-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <!-- Banner image -->
                    <div class="banner-image">
                        <img src="{{ asset('home/img/slide.png') }}" alt="" data-animate="fadeInUp" data-delay="1.5"
                            data-depth="0.2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Features -->
    <section class="pt-7 pb-5-5">
        <div class="container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <h2 class="heading-title">@lang('site.about_me')</h2>
                        <hr class="line line-hr-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-feature text-center" data-animate="fadeInUp" data-delay=".1">
                            <img src="{{ asset('home/img/icons/vpn.svg') }}" alt="" alt="" data-no-retina class="svg">
                            <h3>Fast VPN Without Third Parties</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-feature text-center" data-animate="fadeInUp" data-delay=".3">
                            <img src="{{ asset('home/img/icons/support.svg') }}" alt="" alt="" data-no-retina class="svg">
                            <h3>24/7/365 Technical Support</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-feature text-center" data-animate="fadeInUp" data-delay=".5">
                            <img src="{{ asset('home/img/icons/guarantee.svg') }}" alt="" alt="" data-no-retina class="svg">
                            <h3>30 Days Money Back Guarantee</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-p">{!! $about->about_me !!}</div>
                        <div class="about-info">
                            <div class="row">
                                @foreach($aboutFields as $aboutField)
                                <div class="col-md-6">
                                    <p><b>{{$aboutField->title}}:</b> {{$aboutField->value}}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <div class="about-img animate-box" data-animate-effect="fadeInUp">
                            <div class="img"> <img src="{{asset($info->about_me_image)}}" alt=""> </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Features -->

    <!-- Our services -->
    <section>
        <div class="services-title position-relative pt-7" data-bg-img="img/buildings.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <!-- Section title -->
                        <div class="section-title text-center">
                            <h2 class="text-white" data-animate="fadeInUp" data-delay=".1">لماذا تحتاج خدماتنا؟ </h2>
                            <p class="text-white" data-animate="fadeInUp" data-delay=".3">There are many variations of
                                passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                by injected humour</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-wrap bg-white position-relative pt-5 pb-5">
            <div class="container">
                <!-- All services -->

                <div class="row">
                    @foreach($services as $service)
                    <div class="col-md-4">
                        <div class="d-flex flex-column justify-content-between gorman-services animate-box"
                            data-animate-effect="fadeInUp" style="height: 375px;">
                            <div class="gorman-icon"><i class="{{$service->icon_class}}"></i></div>
                            <div class="gorman-text">
                                <h3>{{$service->title}}</h3>
                                <div>{{ Str::limit( $service->brief,100 ) }}</div>
                            </div>
                            <div class="d-flex flex-row justify-content-between pt-4">
                                <div>
                                    <a href="{{route('service', $service->slug )}}"
                                        class="more"><span>@lang('site.read_more')</span></a>
                                </div>
                                <div>
                                    <a href="{{route('service.order', $service->slug )}}"
                                        class="more"><span>@lang('site.order_now')</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Service contact info -->
                <div class="roboto text-center font-weight-medium" data-animate="fadeInUp" data-delay=".65">
                    <p>If you have any questions in your mind, Just <a href="contact.html">click here</a> to write or you
                        can <br>Call to <a href="tel:1234567890">(+1) 234-567-890</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our services -->

    <!-- Pricing plans -->
    <section class="pricing-plans pt-7 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2 data-animate="fadeInUp" data-delay=".1">Choose Your Pricing Plan</h2>
                        <p data-animate="fadeInUp" data-delay=".3">There are many variations of passages of Lorem Ipsum
                            available, but the majority have suffered by injected humour</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Features list -->
                    <div class="pricing-features">
                        <h3 class="cabin" data-animate="fadeInUp" data-delay=".5">The features included with this
                            pricing plan. let’s see what features will you getting.</h3>
                        <ul class="list-unstyled list-item clearfix">
                            <li data-animate="fadeInUp" data-delay=".1"><i class="fas fa-check-circle"></i>No logs policy
                            </li>
                            <li data-animate="fadeInUp" data-delay=".15"><i class="fas fa-check-circle"></i>P2P allowed
                            </li>
                            <li data-animate="fadeInUp" data-delay=".2"><i class="fas fa-check-circle"></i>Onion Over VPN
                            </li>
                            <li data-animate="fadeInUp" data-delay=".25"><i class="fas fa-check-circle"></i>Amazing
                                Blazing speeds</li>
                            <li data-animate="fadeInUp" data-delay=".3"><i class="fas fa-check-circle"></i>Easy To use
                            </li>
                            <li data-animate="fadeInUp" data-delay=".35"><i class="fas fa-check-circle"></i>Paypal &
                                Bitcoin accepted</li>
                            <li data-animate="fadeInUp" data-delay=".4"><i class="fas fa-check-circle"></i>Global network
                            </li>
                            <li data-animate="fadeInUp" data-delay=".45"><i class="fas fa-check-circle"></i>Cancel
                                anytime anywhere</li>
                            <li data-animate="fadeInUp" data-delay=".5"><i class="fas fa-check-circle"></i>Friendly
                                customer support</li>
                            <li data-animate="fadeInUp" data-delay=".55"><i class="fas fa-check-circle"></i>Kill Switch
                                available</li>
                            <li data-animate="fadeInUp" data-delay=".6"><i class="fas fa-check-circle"></i>Unlimited
                                bandwidth</li>
                            <li data-animate="fadeInUp" data-delay=".65"><i class="fas fa-check-circle"></i>Double
                                encryption</li>
                        </ul>
                        <a href="#" class="btn" data-animate="fadeInUp" data-delay=".7">View Payment Method <i
                                class="fas fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <!-- Pricing slider -->
                    <div class="pricing-slides text-center">
                        <div class="swiper-container pricing-slider">
                            <div class="swiper-wrapper">
                                @foreach ($packages as $package)
                                <div class="swiper-slide single-pricing-slide">
                                    <div class="single-pricing-plan">
                                        <img src="{{ asset('images/packages/'.$package->image) }}" alt=""
                                            alt="" data-no-retina class="svg">
                                        <h4>{{ $package->name }}</h4>
                                        <span class="time roboto">السعر (غير شامل الضريبة)
                                        </span>
                                        <strong class="roboto">{{ $package->price }} <sub>ريال سعودي</sub></strong>
                                        <p>Billed <span>$8.99</span> Per Moth <br>30 Days Money Back Guarantee</p>
                                        <a href="#" class="btn btn-primary">احصل على هذه الباقة</a>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                        <div class="swiper-pagination pricing-pagination position-static"></div>
                    </div>
                    <!-- End of Pricing slider -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Pricing plans -->


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
