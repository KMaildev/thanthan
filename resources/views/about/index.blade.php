@extends('layouts.app')
@section('content')
    <section id="breadcrumb-section" class="breadcrumb-area breadcrumb-left">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="breadcrumb-content">
                        <div class="breadcrumb-heading wow fadeInLeft">
                            <h2>About</h2>
                        </div>
                        <ol class="breadcrumb-list wow fadeInRight">
                            <li><a href="{{ route('welcome') }}"><i class="fa fa-home"></i> Homepage</a>
                                &nbsp;-&nbsp;</li>
                            <li class="active">About</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

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


    <section id="pricing-section" class="pricing-section pricing-two av-py-default shapes-section">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default text-center wow fadeInUp">
                        <h3>Vision <span class="primary-color">Mission & Value</span></h3>
                        <span class="separator"><span><span></span></span></span>
                        <p>Our Vision, Mission & Value</p>
                    </div>
                </div>
            </div>
            <div class="av-filter-wrapper-2">
                <div class="av-columns-area wow fadeInUp">
                    <div class="av-column-12">
                        <div id="av-filter-init-2" class="av-columns-area av-filter-init pricing-row">
                            <div class="av-column-4 av-sm-column-6 av-filter-item all monthly">
                                <div class="pricing-item">
                                    <div class="pricing-heading">
                                        <h5>Our Vision</h5>
                                    </div>
                                    <div class="pricing-rate">
                                        <p class="pricing-name">
                                            To be an international recruiter of professional and support
                                            workforce in the global economy.
                                        </p>
                                        <br><br><br><br><br>
                                    </div>
                                </div>
                            </div>

                            <div class="av-column-4 av-sm-column-6 av-filter-item all yearly">
                                <div class="pricing-item recommended">
                                    <div class="pricing-heading">
                                        <h5>Our Mission</h5>
                                    </div>
                                    <div class="pricing-rate">
                                        <p class="pricing-name">Our Mission is to focus on human resource development and
                                            management in order to provide a qualified and experienced workforce for the
                                            global economy and to continuously upgrade our international recruitment service
                                            to satisfy our clients recruitment to the fullest.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="av-column-4 av-sm-column-6 av-filter-item all lifetime">
                                <div class="pricing-item">
                                    <div class="pricing-heading">
                                        <h5>Our Value</h5>
                                    </div>
                                    <div class="pricing-rate">
                                        <p class="pricing-name">To provide prompt & efficient delivery of quality services.
                                        </p>

                                        <p>To achieve the highest level of customer satisfaction.</p>
                                        <p>To service customers with professionalism, pride & passion.</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape7"><img src="{{ asset('assets/images/projects/clipArt/shape7.png') }}" alt="image"></div>
        <div class="shape8"><img src="{{ asset('assets/images/projects/clipArt/shape8.png') }}" alt="image"></div>
        <div class="shape9"><img src="{{ asset('assets/images/projects/clipArt/shape9.png') }}" alt="image"></div>
    </section>

    <section id="step-section" class="step-section av-py-default">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default text-center wow fadeInUp">
                        <h3>How Than Than <span class="primary-color">Works For The Job Seeker</span></h3>
                        <span class="separator"><span><span></span></span></span>
                        <p>We provide sourcing, placement of employee, supply of local & foreign workers in Myanmar</p>
                    </div>
                </div>
            </div>
            <div class="av-columns-area">
                <div class="av-column-3 av-sm-column-6">
                    <div class="stepbox">
                        <div class="stepbox-outer">
                            <div class="step-effect"></div>
                            <div class="stepbox-icon">
                                <span class="stepbox-number">1</span>
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                        <div class="stepbox-content">
                            <h5 class="stepbox-title"><a href="javascript:void(0);">Search a job</a></h5>

                        </div>
                    </div>
                </div>
                <div class="av-column-3 av-sm-column-6">
                    <div class="stepbox">
                        <div class="stepbox-outer">
                            <div class="step-effect"></div>
                            <div class="stepbox-icon">
                                <span class="stepbox-number">2</span>
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <div class="stepbox-content">
                            <h5 class="stepbox-title"><a href="javascript:void(0);">Create account</a></h5>

                        </div>
                    </div>
                </div>
                <div class="av-column-3 av-sm-column-6">
                    <div class="stepbox">
                        <div class="stepbox-outer">
                            <div class="step-effect"></div>
                            <div class="stepbox-icon">
                                <span class="stepbox-number">3</span>
                                <i class="fa fa-file"></i>
                            </div>
                        </div>
                        <div class="stepbox-content">
                            <h5 class="stepbox-title"><a href="javascript:void(0);">Submit Resume</a></h5>

                        </div>
                    </div>
                </div>
                <div class="av-column-3 av-sm-column-6">
                    <div class="stepbox">
                        <div class="stepbox-outer">
                            <div class="step-effect"></div>
                            <div class="stepbox-icon">
                                <span class="stepbox-number">4</span>
                                <i class="fa fa-upload"></i>
                            </div>
                        </div>
                        <div class="stepbox-content">
                            <h5 class="stepbox-title"><a href="javascript:void(0);">Apply Jobs</a></h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
