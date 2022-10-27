@extends('layouts.app')
@section('content')
    <section id="breadcrumb-section" class="breadcrumb-area breadcrumb-left">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="breadcrumb-content">
                        <div class="breadcrumb-heading wow fadeInLeft">
                            <h2>Chairman's Message</h2>
                        </div>
                        <ol class="breadcrumb-list wow fadeInRight">
                            <li><a href="{{ route('welcome') }}"><i class="fa fa-home"></i> Homepage</a>
                                &nbsp;-&nbsp;</li>
                            <li class="active">Chairman's Message</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="skill-section" class="skill-section av-py-default shapes-section">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-6 mb-4 mb-av-0">
                    <div class="skill-content">
                        <img src="{{ asset('assets/images/about/skill.png') }}" alt="skill">
                    </div>
                </div>
                <div class="av-column-6">
                    <div class="about-panel">
                        <div class="heading-title">
                            <h6>Chairman's Message</h6>
                            {{-- <h3>Get More Traffic on Your Website</h3> --}}
                        </div>
                        <p>We would like to accompany you as a partner that you can always count on us, together we create
                            future and towards the goal.</p>
                        <p>The mission of the Than Than Services Group, “Create a wonderful future with those pursuing
                            happiness” incorporates various thoughts.</p>
                        <p>In order to make our mission happen, we want to solve the “negativity” of not only customers, but
                            also a sustainable society and the Earth.</p>
                        <p>Because we know the thoughts of companies and individuals, we want to work actively, not
                            passively.</p>
                        <p>As an entity that meets customers' expectations every day, we will continue to strive to gain
                            even more patronage. Please look forward to Than Than Services Group.</p>
                        <div class="about-wrapper">
                            <div class="skills-wrapper">
                                <div class="skill-panel">
                                    <div class="skill-heading">UAE</div>
                                    <div class="skillbar" data-percent="95%">
                                        <div class="skill-bar-percent"><span class="count-bar">2000</span></div>
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                                <div class="skill-panel">
                                    <div class="skill-heading">Kuwait</div>
                                    <div class="skillbar" data-percent="75%">
                                        <div class="skill-bar-percent"><span class="count-bar">1500</span></div>
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                                <div class="skill-panel">
                                    <div class="skill-heading">Quarta</div>
                                    <div class="skillbar" data-percent="50%">
                                        <div class="skill-bar-percent"><span class="count-bar">1300</span></div>
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                        <span class="circle bottom-right"></span> <span class="circle bottom-right"></span>
                                        <span class="circle bottom-right"></span></span></a>
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
                                        <span class="circle bottom-right"></span> <span class="circle bottom-right"></span>
                                        <span class="circle bottom-right"></span></span></a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
