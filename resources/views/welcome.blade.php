@extends('layouts.app')
@section('content')
    <section id="about-section" class="about-section av-py-default shapes-section">
        <div class="av-container">
            <div class="av-columns-area">

                <div class="av-column-6 mb-4 mb-av-0">
                    <div class="about-content">
                        <div class="shapedotted">
                            <img src="{{ asset('assets/images/about/dotted_shape.png') }}" alt="image">
                        </div>
                        <img src="{{ asset('data/about.jpeg') }}" alt="about_item">
                        <div class="about-content-summery">
                            <div class="about-summery">
                                Call Us :+959 5137940
                            </div>
                        </div>
                    </div>
                </div>

                <div class="av-column-6">
                    <div class="about-panel">
                        <div class="heading-title">
                            <h4 style="text-shadow:2px 2px 2px gray; color:rgb(206, 51, 51)">Than Than Services Agency</h4>
                            <h5>We Provide Professional Consultancy Services</h5>
                        </div>
                        <p>Our Than Than Manpower Services Co.,Ltd established is 2004 in Myanmar. Ministry of labour
                            permitted a lincene to Than Than Overseas Employment & Services Agency, on 15 th Nov 2004, the
                            lincence No.070/2004.</p>
                        <p>The Than Than Manpower Services Co.,Ltd is one of the largest Manpower exporters from Myanmar.
                            Our Company success story is intimately linked up to the overall success story of manpower
                            mobilization.</p>
                        <p>The Than Than Manpower Services Co.,Ltd has branch offices in forgein countries, such as U.A.E,
                            Kuwait, Quatar, Saudi Arbia and Malaysia.</p>
                        <div class="about-wrapper">
                            <div class="skills-wrapper">
                                <div class="skill-panel">
                                    <div class="skill-heading">Customer Support</div>
                                    <div class="skillbar" data-percent="70%">
                                        <div class="skill-bar-percent"><span class="count-bar">80</span>%</div>
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                            </div>
                            <blockquote class="av-blockquote">
                                <h5>Do what you do best outsource the rest</h5>
                            </blockquote>
                            <div class="about-footer">
                                <aside class="widget widget-contact">
                                    <div class="contact-area">
                                        <div class="contact-icon">
                                            <img src="{{ asset('data/user.jpeg') }}" alt="about_author">
                                        </div>
                                        <div class="contact-info">
                                            <h6 class="title">U Aung Than Oo</h6>
                                            <p class="text">Founder & CEO</p>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features-section" class="features-section bg-primary-light av-py-default features-home shapes-section">
        <div class="av-container">
            <div class="av-columns-area wow fadeInUp">
                <div class="av-column-7">
                    <div class="av-columns-area">
                        <div class="av-column-12">
                            <div class="heading-default text-left wow fadeInUp">
                                <h3>Why Choose <span class="primary-color">Than Than Services?</span></h3>
                                <span class="separator"><span><span></span></span></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="av-columns-area">
                        <span class="tilter d-none"></span>
                        <div class="av-column-6 av-sm-column-6 tilter">
                            <div class="tilter__figure">
                                <div class="features-item">
                                    <div class="features-inner tilter__caption">
                                        <div class="features-icon">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="features-content">
                                            <h6 class="features-title">
                                                Collaborative
                                            </h6>
                                            <p>
                                                To cooperate and support each other by sharing ideas and listening. In order
                                                to create and expand success.
                                            </p>
                                        </div>
                                        <div class="modern-icon"><i class="fa fa-users"></i></div>
                                    </div>
                                    <div class="tilter__deco--lines"></div>
                                </div>
                            </div>
                        </div>

                        <div class="av-column-6 av-sm-column-6 tilter">
                            <div class="tilter__figure">
                                <div class="features-item">
                                    <div class="features-inner tilter__caption">
                                        <div class="features-icon">
                                            <i class="fa fa-life-ring"></i>
                                        </div>
                                        <div class="features-content">
                                            <h6 class="features-title">
                                                Learning and Development
                                            </h6>
                                            <p>
                                                Open mind to learn new things. Continuous self improvement with modern
                                                knowledge and skill set.
                                            </p>
                                        </div>
                                        <div class="modern-icon"><i class="fa fa-life-ring"></i></div>
                                    </div>
                                    <div class="tilter__deco--lines"></div>
                                </div>
                            </div>
                        </div>

                        <div class="av-column-6 av-sm-column-6 tilter">
                            <div class="tilter__figure">
                                <div class="features-item">
                                    <div class="features-inner tilter__caption">
                                        <div class="features-icon">
                                            <i class="fa fa-cube"></i>
                                        </div>
                                        <div class="features-content">
                                            <h6 class="features-title">
                                                Accountability
                                            </h6>
                                            <p>
                                                Have responsibility and good conscience with awareness of the organization’s
                                                overall results with honesty and ethical standards.
                                            </p>
                                        </div>
                                        <div class="modern-icon"><i class="fa fa-cube"></i></div>
                                    </div>
                                    <div class="tilter__deco--lines"></div>
                                </div>
                            </div>
                        </div>

                        <div class="av-column-6 av-sm-column-6 tilter">
                            <div class="tilter__figure">
                                <div class="features-item">
                                    <div class="features-inner tilter__caption">
                                        <div class="features-icon">
                                            <i class="fa fa-delicious"></i>
                                        </div>
                                        <div class="features-content">
                                            <h6 class="features-title">
                                                Can-Do Attitude
                                            </h6>
                                            <p>
                                                Using a positive and “Can-Do” attitude to seize the moment and realize the
                                                opportunity. Think of obstacles as challenges then strive for success.
                                            </p>
                                        </div>
                                        <div class="modern-icon"><i class="fa fa-delicious"></i></div>
                                    </div>
                                    <div class="tilter__deco--lines"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="av-column-5 featuresbgwrapper">
                    <div class="features-image-wrap">
                        <div class="features-image">
                            <img src="{{ asset('data/jobs.jpeg') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape5">
            <img src="{{ asset('assets/images/features/clipArt/shape5.png') }}" alt="image">
        </div>
        <div class="shape6">
            <img src="{{ asset('assets/images/features/clipArt/shape6.png') }}" alt="image">
        </div>
    </section>

    <section id="cta-section" class="cta-section cta-home"
        style="background-image:url({{ asset('assets/images/cta_bg.jpg') }})"; background-attachment: fixed;>
        <div class="cta-overlay">
            <div class="av-container">
                <div class="av-columns-area">
                    <div class="av-column-5 my-auto">
                        <div class="call-wrapper">
                            <div class="call-icon-box"><i class="fa fa-user"></i></div>
                            <div class="cta-info">
                                <div class="call-title">Call Us:</div>
                                <div class="call-phone">
                                    <a href="tel:00951, 292449">00951, 292449,</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="av-column-7 my-auto">
                        <div class="cta-content-wrap">
                            <div class="cta-content">
                                <span class="cta-icon-wrap"><i class="fa fa-phone"></i></span>
                                <h4>
                                    Contact Us
                                </h4>
                                <p>
                                    If you have any queries about recruitments, vacancies, or anything else, our team is
                                    ready to response all your queries.
                                </p>
                            </div>
                            <div class="cta-btn">
                                <a href="{{ route('contact.index') }}" class="av-btn av-btn-primary av-btn-bubble">
                                    Contact Us
                                    <i class="fa fa-arrow-right"></i>
                                    <span class="bubble_effect">
                                        <span class="circle top-left"></span>
                                        <span class="circle top-left"></span>
                                        <span class="circle top-left"></span>
                                        <span class="button effect-button"></span>
                                        <span class="circle bottom-right"></span>
                                        <span class="circle bottom-right"></span>
                                        <span class="circle bottom-right"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pricing-section" class="pricing-section bg-primary-light av-py-default pricing-home">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-6 av-sm-column-12">
                    <div class="heading-default text-left wow fadeInUp">
                        <h3>Our Services</h3>
                        <span class="separator"></span>
                        <p>
                            Our Than Than Services Co.,ltd sent many workers to abroad by given them good training and
                            leading provice of Human Resource Development Service.
                        </p>
                    </div>
                    <div class="pricing-tab wow fadeInUp">
                        <a href="{{ route('cv.index') }}" data-tab="monthly"
                            class="av-btn av-btn-secondary av-btn-bubble active">
                            Upload CV
                            <i class="fa fa-arrow-right"></i>
                            <span class="bubble_effect">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button effect-button"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </a>

                        <a href="{{ route('employer.index') }}" data-tab="yearly"
                            class="av-btn av-btn-secondary av-btn-bubble">
                            Apply Now
                            <i class="fa fa-arrow-right"></i>
                            <span class="bubble_effect">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button effect-button"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </a>

                        <a href="{{ route('ourservices.index') }}" data-tab="monthly"
                            class="av-btn av-btn-secondary av-btn-bubble active">
                            Read More
                            <i class="fa fa-arrow-right"></i>
                            <span class="bubble_effect">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button effect-button"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="client-section" class="py-5" data-roller="start:0.5" style="background-color:#f5e3e3;">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default text-center wow fadeInUp">
                        <h3>We're <span class="primary-color">Working With</span></h3>
                        <span class="separator"><span><span></span></span></span>
                        <p>
                            The Than Than Manpower Services Co.,Ltd has branch offices in forgein countries, such as U.A.E,
                            Kuwait, Quatar, Saudi Arbia and Malaysia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="partner-carousel owl-carousel owl-theme">
                        <div class="single-partner">
                            <div class="inner-partner">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/client/t.png') }}" alt="client_item"
                                        style="height: 70px;
                                  width: 70px;
                                  background-color: #bbb;
                                  margin:30px;
                                  border-radius: 50%;
                                  display: inline-block;
                                  box-shadow: 3px 3px 3px  gray;">
                                    <span class="client-name">Thailand </span>
                                </a>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/client/m.png') }}" alt="client_item"
                                        style="height: 70px;
                                  width: 70px;
                                  background-color: #bbb;
                                  margin:30px;
                                  border-radius: 50%;
                                  display: inline-block;
                                  box-shadow: 3px 3px 3px  gray;">
                                    <span class="client-name">Malaysia </span>
                                </a>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/client/j.png') }}" alt="client_item"
                                        style="height: 70px;
                                  width: 70px;
                                  background-color: #bbb;
                                  margin:30px;
                                  border-radius: 50%;
                                  display: inline-block;
                                  box-shadow: 3px 3px 3px  gray;">
                                    <span class="client-name">Japan </span>
                                </a>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/client/s.png') }}" alt="client_item"
                                        style="height: 70px;
                                  width: 70px;
                                  background-color: #bbb;
                                  margin:30px;
                                  border-radius: 50%;
                                  display: inline-block;
                                  box-shadow: 3px 3px 3px  gray;">
                                    <span class="client-name">Singapore </span>
                                </a>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/client/u.png') }}" alt="client_item"
                                        style="height: 70px;
                                  width: 70px;
                                  background-color: #bbb;
                                  margin:30px;
                                  border-radius: 50%;
                                  display: inline-block;
                                  box-shadow: 3px 3px 3px  gray;">
                                    <span class="client-name">U.A.E </span>
                                </a>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/client/k.png') }}" alt="client_item"
                                        style="height: 70px;
                                  width: 70px;
                                  background-color: #bbb;
                                  margin:30px;
                                  border-radius: 50%;
                                  display: inline-block;
                                  box-shadow: 3px 3px 3px  gray;">
                                    <span class="client-name">Kuwait</span>
                                </a>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/client/q.png') }}" alt="client_item"
                                        style="height: 70px;
                                  width: 70px;
                                  background-color: #bbb;
                                  margin:30px;
                                  border-radius: 50%;
                                  display: inline-block;
                                  box-shadow: 3px 3px 3px  gray;">
                                    <span class="client-name">Qatar</span>
                                </a>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/client/sa.png') }}" alt="client_item"
                                        style="height: 70px;
                                  width: 70px;
                                  background-color: #bbb;
                                  margin:30px;
                                  border-radius: 50%;
                                  display: inline-block;
                                  box-shadow: 3px 3px 3px  gray;">
                                    <span class="client-name">Saudi Arbia </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="portfolio-section" class="portfolio-section av-py-default portfolio-home shapes-section">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default text-center wow fadeInUp">
                        <h3>Our <span class="primary-color">Activities</span></h3>
                        <span class="separator"><span><span></span></span></span>
                        <p>
                            Than Than Services Agency
                        </p>
                    </div>
                </div>
            </div>

            <div class="av-filter-wrapper-1">
                <div class="av-columns-area wow fadeInUp">
                    <div class="av-column-12">
                        @foreach ($activities as $activitie)
                            <h6>
                                {{ $activitie->title ?? '' }}
                            </h6>
                            <p>
                                {!! $activitie->description ?? '' !!}
                            </p>
                            <div id="av-filter-init-1" class="av-columns-area av-filter-init">
                                @php
                                    $values = explode(',', $activitie->photo);
                                @endphp
                                @foreach ($values as $photo)
                                    <div
                                        class="av-column-4 av-sm-column-6 av-filter-item all year2000 year2010 year2015 year2020">
                                        <figure class="portfolio-item mgf-popup">
                                            <div class="portfolio-inner">
                                                <div class="portfolio-thumb" tabindex="0">
                                                    <div class="portfolio-thumb-img">
                                                        <img src="{{ $photo }}" alt="portfolio_item"
                                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                                    </div>
                                                    <div class="portfolio-thumber">
                                                        <div class="portfolio-thumb-content">
                                                            <a href="{{ $photo }}" class="image"
                                                                title="{{ $activitie->title ?? '' }}">
                                                                <i class="fa fa-search-plus"></i>
                                                            </a>
                                                            <p>
                                                                {{ $activitie->title ?? '' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                @endforeach
                            </div>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
