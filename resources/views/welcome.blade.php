@extends('layouts.app')
@section('content')
    <section id="about-section" class="about-section av-py-default shapes-section">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-6 mb-4 mb-av-0">
                    <div class="about-content">
                        <div class="shapedotted"><img src="{{ asset('assets/images/about/dotted_shape.png') }}" alt="image">
                        </div>
                        <img src="{{ asset('assets/images/about/about_1st.png') }}" alt="about_item">
                        <div class="about-content-summery">
                            <div class="about-summery">Call Us :+959 5137940<i></i><i></i><i></i><i></i></div>
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
                                            <img src="{{ asset('assets/images/about/about_author.png') }}"
                                                alt="about_author">
                                        </div>
                                        <div class="contact-info">
                                            <h6 class="title">U Aung Than Oo</h6>
                                            <p class="text">Founder & CEO</p>
                                        </div>
                                    </div>
                                </aside>
                                {{-- <div class="about-sign"><img src="{{ asset('assets/images/about/singnature.png') }}"
                                        alt="singnature">
                                </div> --}}
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
                                            <h6 class="features-title"><a href="#">Integrity</a></h6>
                                            <p>Lorem ipsum is simple dummy</p>
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
                                            <i class="fa fa-delicious"></i>
                                        </div>
                                        <div class="features-content">
                                            <h6 class="features-title"><a href="#">Commitment</a></h6>
                                            <p>Lorem ipsum is simple dummy</p>
                                        </div>
                                        <div class="modern-icon"><i class="fa fa-delicious"></i></div>
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
                                            <h6 class="features-title"><a href="#">Determination</a></h6>
                                            <p>Lorem ipsum is simple dummy</p>
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
                                            <h6 class="features-title"><a href="#">Accountability</a></h6>
                                            <p>Lorem ipsum is simple dummy</p>
                                        </div>
                                        <div class="modern-icon"><i class="fa fa-cube"></i></div>
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
                            <img src="{{ asset('assets/images/features/features.png') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape5"><img src="{{ asset('assets/images/features/clipArt/shape5.png') }}" alt="image"></div>
        <div class="shape6"><img src="{{ asset('assets/images/features/clipArt/shape6.png') }}" alt="image"></div>
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
                                <div class="call-phone"><a href="#">(95)1-292449</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="av-column-7 my-auto">
                        <div class="cta-content-wrap">
                            <div class="cta-content">
                                <span class="cta-icon-wrap"><i class="fa fa-phone"></i></span>
                                <h4>Professional and Dedicated Services Agency</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore.</p>
                            </div>
                            <div class="cta-btn">
                                <a href="#" class="av-btn av-btn-primary av-btn-bubble">Apply Now <i
                                        class="fa fa-arrow-right"></i> <span class="bubble_effect"><span
                                            class="circle top-left"></span> <span class="circle top-left"></span> <span
                                            class="circle top-left"></span> <span class="button effect-button"></span>
                                        <span class="circle bottom-right"></span> <span
                                            class="circle bottom-right"></span> <span
                                            class="circle bottom-right"></span></span></a>
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
                        <span class="separator"><span><span></span></span></span>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                            est laborum.</p>
                    </div>
                    <div class="pricing-tab wow fadeInUp">
                        <a href="javascript:void(0);" data-tab="monthly"
                            class="av-btn av-btn-secondary av-btn-bubble active">Upload CV <i
                                class="fa fa-arrow-right"></i>
                            <span class="bubble_effect"><span class="circle top-left"></span> <span
                                    class="circle top-left"></span> <span class="circle top-left"></span> <span
                                    class="button effect-button"></span> <span class="circle bottom-right"></span> <span
                                    class="circle bottom-right"></span> <span
                                    class="circle bottom-right"></span></span></a>
                        <a href="javascript:void(0);" data-tab="yearly"
                            class="av-btn av-btn-secondary av-btn-bubble">Apply Now <i class="fa fa-arrow-right"></i>
                            <span class="bubble_effect"><span class="circle top-left"></span> <span
                                    class="circle top-left"></span> <span class="circle top-left"></span> <span
                                    class="button effect-button"></span> <span class="circle bottom-right"></span> <span
                                    class="circle bottom-right"></span> <span
                                    class="circle bottom-right"></span></span></a>
                    </div>
                </div>
                {{-- <div class="av-column-6 av-sm-column-12">
                    <div class="pricing-table-wrapper">
                        <div id="tabsContent" class="tab-content">
                            <div id="monthly" class="tab-pane fade active show">
                                <div class="pricing-plan-item-list clearfix">
                                    <div class="pricing-item">
                                        <div class="pricing-heading">
                                            <h5>Business Plan</h5>
                                        </div>
                                        <div class="pricing-rate">
                                            <p class="pricing-name">Monthly Package</p>
                                            <span class="pricing">$69.75</span>
                                        </div>
                                        <div class="pricing-list">
                                            <ul>
                                                <li>Photoshop</li>
                                                <li>HTML5 & CSS 3</li>
                                                <li>WordPress</li>
                                                <li>Javascript</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-btn">
                                            <a href="#" class="av-btn av-btn-primary av-btn-bubble">Choose Plan <i
                                                    class="fa fa-arrow-right"></i> <span class="bubble_effect"><span
                                                        class="circle top-left"></span> <span
                                                        class="circle top-left"></span> <span
                                                        class="circle top-left"></span> <span
                                                        class="button effect-button"></span> <span
                                                        class="circle bottom-right"></span> <span
                                                        class="circle bottom-right"></span> <span
                                                        class="circle bottom-right"></span></span></a>
                                        </div>
                                    </div>
                                    <div class="pricing-item">
                                        <div class="pricing-heading">
                                            <h5>Master Plan</h5>
                                        </div>
                                        <div class="pricing-rate">
                                            <p class="pricing-name">Monthly Package</p>
                                            <span class="pricing">$89.10</span>
                                        </div>
                                        <div class="pricing-list">
                                            <ul>
                                                <li>Photoshop</li>
                                                <li>HTML5 & CSS 3</li>
                                                <li>WordPress</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-btn">
                                            <a href="#" class="av-btn av-btn-primary av-btn-bubble">Choose Plan <i
                                                    class="fa fa-arrow-right"></i> <span class="bubble_effect"><span
                                                        class="circle top-left"></span> <span
                                                        class="circle top-left"></span> <span
                                                        class="circle top-left"></span> <span
                                                        class="button effect-button"></span> <span
                                                        class="circle bottom-right"></span> <span
                                                        class="circle bottom-right"></span> <span
                                                        class="circle bottom-right"></span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="yearly" class="tab-pane fade">
                                <div class="pricing-plan-item-list clearfix">
                                    <div class="pricing-item">
                                        <div class="pricing-heading">
                                            <h5>Business Plan</h5>
                                        </div>
                                        <div class="pricing-rate">
                                            <p class="pricing-name">Monthly Package</p>
                                            <span class="pricing">$69.75</span>
                                        </div>
                                        <div class="pricing-list">
                                            <ul>
                                                <li>Photoshop</li>
                                                <li>HTML5 & CSS 3</li>
                                                <li>WordPress</li>
                                                <li>Javascript</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-btn">
                                            <a href="#" class="av-btn av-btn-primary av-btn-bubble">Choose Plan <i
                                                    class="fa fa-arrow-right"></i> <span class="bubble_effect"><span
                                                        class="circle top-left"></span> <span
                                                        class="circle top-left"></span> <span
                                                        class="circle top-left"></span> <span
                                                        class="button effect-button"></span> <span
                                                        class="circle bottom-right"></span> <span
                                                        class="circle bottom-right"></span> <span
                                                        class="circle bottom-right"></span></span></a>
                                        </div>
                                    </div>
                                    <div class="pricing-item">
                                        <div class="pricing-heading">
                                            <h5>Master Plan</h5>
                                        </div>
                                        <div class="pricing-rate">
                                            <p class="pricing-name">Monthly Package</p>
                                            <span class="pricing">$89.10</span>
                                        </div>
                                        <div class="pricing-list">
                                            <ul>
                                                <li>Photoshop</li>
                                                <li>HTML5 & CSS 3</li>
                                                <li>WordPress</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-btn">
                                            <a href="#" class="av-btn av-btn-primary av-btn-bubble">Choose Plan <i
                                                    class="fa fa-arrow-right"></i> <span class="bubble_effect"><span
                                                        class="circle top-left"></span> <span
                                                        class="circle top-left"></span> <span
                                                        class="circle top-left"></span> <span
                                                        class="button effect-button"></span> <span
                                                        class="circle bottom-right"></span> <span
                                                        class="circle bottom-right"></span> <span
                                                        class="circle bottom-right"></span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                    {{-- <div class="heading-default heading-white text-center wow fadeInUp">
                        <h3 style="color:red">We're <span class="primary-color">Working With</span></h3>
                        <span class="separator"><span><span></span></span></span>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                            est laborum.</p>
                    </div> --}}
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
                        <h3>Our <span class="primary-color">Activites</span></h3>
                        <span class="separator"><span><span></span></span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="av-filter-wrapper-1">
                <div class="av-columns-area wow fadeInUp">
                    <div class="av-column-12">
                        <div class="av-tab-filter filters-theme">
                            <a href="javascript:void(0);" data-filter="*"
                                class="av-btn av-btn-primary av-btn-bubble active">All <span class="bubble_effect"><span
                                        class="circle top-left"></span> <span class="circle top-left"></span> <span
                                        class="circle top-left"></span> <span class="button effect-button"></span> <span
                                        class="circle bottom-right"></span> <span class="circle bottom-right"></span>
                                    <span class="circle bottom-right"></span></span></a>
                            <a href="javascript:void(0);" data-filter=".year2000"
                                class="av-btn av-btn-primary av-btn-bubble">Year 2000 <span class="bubble_effect"><span
                                        class="circle top-left"></span> <span class="circle top-left"></span> <span
                                        class="circle top-left"></span> <span class="button effect-button"></span> <span
                                        class="circle bottom-right"></span> <span class="circle bottom-right"></span>
                                    <span class="circle bottom-right"></span></span></a>
                            <a href="javascript:void(0);" data-filter=".year2005"
                                class="av-btn av-btn-primary av-btn-bubble">Year 2005 <span class="bubble_effect"><span
                                        class="circle top-left"></span> <span class="circle top-left"></span> <span
                                        class="circle top-left"></span> <span class="button effect-button"></span> <span
                                        class="circle bottom-right"></span> <span class="circle bottom-right"></span>
                                    <span class="circle bottom-right"></span></span></a>
                            <a href="javascript:void(0);" data-filter=".year2010"
                                class="av-btn av-btn-primary av-btn-bubble">Year 2010 <span class="bubble_effect"><span
                                        class="circle top-left"></span> <span class="circle top-left"></span> <span
                                        class="circle top-left"></span> <span class="button effect-button"></span> <span
                                        class="circle bottom-right"></span> <span class="circle bottom-right"></span>
                                    <span class="circle bottom-right"></span></span></a>
                            <a href="javascript:void(0);" data-filter=".year2015"
                                class="av-btn av-btn-primary av-btn-bubble">Year 2015 <span class="bubble_effect"><span
                                        class="circle top-left"></span> <span class="circle top-left"></span> <span
                                        class="circle top-left"></span> <span class="button effect-button"></span> <span
                                        class="circle bottom-right"></span> <span class="circle bottom-right"></span>
                                    <span class="circle bottom-right"></span></span></a>
                            <a href="javascript:void(0);" data-filter=".year2018"
                                class="av-btn av-btn-primary av-btn-bubble">Year 2018 <span class="bubble_effect"><span
                                        class="circle top-left"></span> <span class="circle top-left"></span> <span
                                        class="circle top-left"></span> <span class="button effect-button"></span> <span
                                        class="circle bottom-right"></span> <span class="circle bottom-right"></span>
                                    <span class="circle bottom-right"></span></span></a>
                            <a href="javascript:void(0);" data-filter=".year2020"
                                class="av-btn av-btn-primary av-btn-bubble">Year 2020 <span class="bubble_effect"><span
                                        class="circle top-left"></span> <span class="circle top-left"></span> <span
                                        class="circle top-left"></span> <span class="button effect-button"></span> <span
                                        class="circle bottom-right"></span> <span class="circle bottom-right"></span>
                                    <span class="circle bottom-right"></span></span></a>
                            <a href="javascript:void(0);" data-filter=".year2022"
                                class="av-btn av-btn-primary av-btn-bubble">Year 2022 <span class="bubble_effect"><span
                                        class="circle top-left"></span> <span class="circle top-left"></span> <span
                                        class="circle top-left"></span> <span class="button effect-button"></span> <span
                                        class="circle bottom-right"></span> <span class="circle bottom-right"></span>
                                    <span class="circle bottom-right"></span></span></a>
                        </div>
                        <div id="av-filter-init-1" class="av-columns-area av-filter-init">
                            <div class="av-column-4 av-sm-column-6 av-filter-item all year2000 year2010 year2015 year2020">
                                <figure class="portfolio-item mgf-popup">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-thumb" tabindex="0">
                                            <div class="portfolio-thumb-img">
                                                <img src="{{ asset('assets/images/projects/projects01.jpg') }}"
                                                    alt="portfolio_item">
                                            </div>
                                            <div class="portfolio-thumber">
                                                <div class="portfolio-thumb-content">
                                                    <a href="{{ asset('assets/images/projects/projects01.jpg') }}"
                                                        class="image" title="This is a portfolio">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-caption">
                                            <div class="caption">
                                                <p>Seo</p>
                                                <h6>Data Analysis</h6>
                                            </div>
                                            <div class="more">
                                                <a href="#"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="av-column-4 av-sm-column-6 av-filter-item all year2010 year2022 year2020">
                                <figure class="portfolio-item mgf-popup">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-thumb" tabindex="0">
                                            <div class="portfolio-thumb-img">
                                                <img src="{{ asset('assets/images/projects/projects02.jpg') }}"
                                                    alt="portfolio_item">
                                            </div>
                                            <div class="portfolio-thumber">
                                                <div class="portfolio-thumb-content">
                                                    <a href="{{ asset('assets/images/projects/projects02.jpg') }}"
                                                        class="image" title="This is a portfolio">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-caption">
                                            <div class="caption">
                                                <p>Social Media</p>
                                                <h6>Digital Agency</h6>
                                            </div>
                                            <div class="more">
                                                <a href="#"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="av-column-4 av-sm-column-6 av-filter-item all year2015 year2005">
                                <figure class="portfolio-item mgf-popup">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-thumb" tabindex="0">
                                            <div class="portfolio-thumb-img">
                                                <img src="{{ asset('assets/images/projects/projects03.jpg') }}"
                                                    alt="portfolio_item">
                                            </div>
                                            <div class="portfolio-thumber">
                                                <div class="portfolio-thumb-content">
                                                    <a href="{{ asset('assets/images/projects/projects03.jpg') }}"
                                                        class="image" title="This is a portfolio">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-caption">
                                            <div class="caption">
                                                <p>Branding</p>
                                                <h6>Responsive Design</h6>
                                            </div>
                                            <div class="more">
                                                <a href="#"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div
                                class="av-column-4 av-sm-column-6 av-filter-item all year2000 year2020 year2018 year2005 year2018">
                                <figure class="portfolio-item mgf-popup">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-thumb" tabindex="0">
                                            <div class="portfolio-thumb-img">
                                                <img src="{{ asset('assets/images/projects/projects04.jpg') }}"
                                                    alt="portfolio_item">
                                            </div>
                                            <div class="portfolio-thumber">
                                                <div class="portfolio-thumb-content">
                                                    <a href="{{ asset('assets/images/projects/projects04.jpg') }}"
                                                        class="image" title="This is a portfolio">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-caption">
                                            <div class="caption">
                                                <p>Website</p>
                                                <h6>Creative Web Design</h6>
                                            </div>
                                            <div class="more">
                                                <a href="#"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="av-column-4 av-sm-column-6 av-filter-item all year2000">
                                <figure class="portfolio-item mgf-popup">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-thumb" tabindex="0">
                                            <div class="portfolio-thumb-img">
                                                <img src="{{ asset('assets/images/projects/projects05.jpg') }}"
                                                    alt="portfolio_item">
                                            </div>
                                            <div class="portfolio-thumber">
                                                <div class="portfolio-thumb-content">
                                                    <a href="{{ asset('assets/images/projects/projects05.jpg') }}"
                                                        class="image" title="This is a portfolio">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-caption">
                                            <div class="caption">
                                                <p>Mobile App</p>
                                                <h6>Social App Design</h6>
                                            </div>
                                            <div class="more">
                                                <a href="#"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="av-column-4 av-sm-column-6 av-filter-item all year2000 year2022">
                                <figure class="portfolio-item mgf-popup">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-thumb" tabindex="0">
                                            <div class="portfolio-thumb-img">
                                                <img src="{{ asset('assets/images/projects/projects06.jpg') }}"
                                                    alt="portfolio_item">
                                            </div>
                                            <div class="portfolio-thumber">
                                                <div class="portfolio-thumb-content">
                                                    <a href="{{ asset('assets/images/projects/projects06.jpg') }}"
                                                        class="image" title="This is a portfolio">
                                                        <i class="fa fa-search-plus"></i>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-caption">
                                            <div class="caption">
                                                <p>Marketing</p>
                                                <h6>Innovative Interfaces</h6>
                                            </div>
                                            <div class="more">
                                                <a href="#"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape7"><img src="{{ asset('assets/images/projects/clipArt/shape7.png') }}" alt="image"></div>
        <div class="shape8"><img src="{{ asset('assets/images/projects/clipArt/shape8.png') }}" alt="image"></div>
        <div class="shape9"><img src="{{ asset('assets/images/projects/clipArt/shape9.png') }}" alt="image"></div>
        <div class="shape10"><img src="{{ asset('assets/images/projects/clipArt/shape10.png') }}" alt="image"></div>
        <div class="shape11"><img src="{{ asset('assets/images/projects/clipArt/shape11.png') }}" alt="image"></div>
        <div class="shape12"><img src="{{ asset('assets/images/projects/clipArt/shape12.png') }}" alt="image"></div>
    </section>
    <section id="detailinfo-section" class="detailinfo-section av-py-default">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-6">
                    <div class="detailinfo secondary">
                        <aside class="widget widget-contact">
                            <div class="contact-area">
                                <div class="contact-icon"><i class="fa fa-users"></i></div>
                                <div class="contact-info">
                                    <span class="text">Jobseeker</span>
                                    <span class="title">Looking For Job?</span>
                                </div>
                                <a href="javascript:void(0);" class="av-btn av-btn-primary av-btn-bubble">Apply Now <i
                                        class="fa fa-arrow-right"></i> <span class="bubble_effect"><span
                                            class="circle top-left"></span> <span class="circle top-left"></span> <span
                                            class="circle top-left"></span> <span class="button effect-button"></span>
                                        <span class="circle bottom-right"></span> <span
                                            class="circle bottom-right"></span> <span
                                            class="circle bottom-right"></span></span></a>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="av-column-6">
                    <div class="detailinfo primary">
                        <aside class="widget widget-contact">
                            <div class="contact-area">
                                <div class="contact-icon"><i class="fa fa-file-text"></i></div>
                                <div class="contact-info">
                                    <span class="text">Recruiter</span>
                                    <span class="title">Are You Recruiting?</span>
                                </div>
                                <a href="javascript:void(0);" class="av-btn av-btn-secondary av-btn-bubble">Apply Now <i
                                        class="fa fa-arrow-right"></i> <span class="bubble_effect"><span
                                            class="circle top-left"></span> <span class="circle top-left"></span> <span
                                            class="circle top-left"></span> <span class="button effect-button"></span>
                                        <span class="circle bottom-right"></span> <span
                                            class="circle bottom-right"></span> <span
                                            class="circle bottom-right"></span></span></a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
