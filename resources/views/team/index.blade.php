@extends('layouts.app')
@section('content')
    <section id="breadcrumb-section" class="breadcrumb-area breadcrumb-left">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="breadcrumb-content">
                        <div class="breadcrumb-heading wow fadeInLeft">
                            <h2>Our Team</h2>
                        </div>
                        <ol class="breadcrumb-list wow fadeInRight">
                            <li><a href="{{ route('welcome') }}"><i class="fa fa-home"></i> Homepage</a>
                                &nbsp;-&nbsp;</li>
                            <li class="active">Our Team</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team-section" class="team-section av-py-default team-home shapes-section">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default text-center wow fadeInUp">
                        <h3>Our <span class="primary-color">Team</span></h3>
                        <span class="separator"><span><span></span></span></span>
                        <p>Than Than Services Co.,Ltd</p>
                    </div>
                </div>
            </div>
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="team-carousel owl-carousel owl-theme">
                        <div class="team-member">
                            <div class="team-thumb" tabindex="0">
                                <img src="{{ asset('assets/images/team/team01.jpg') }}" alt="team_item" title="">
                                <div class="team-view"><a href="#"><i class="fa fa-eye"></i></a></div>
                                <div class="team-thumber">
                                    <aside class="widget widget_social_widget">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </aside>
                                </div>
                            </div>
                            <div class="team-info">
                                <h5><a href="javascript:void(0);">Mr.Aung Than Oo</a></h5>
                                <p>Chairman</p>
                            </div>
                        </div>
                        <div class="team-member">
                            <div class="team-thumb" tabindex="0">
                                <img src="{{ asset('assets/images/team/team03.jpg') }}" alt="team_item" title="">
                                <div class="team-view"><a href="#"><i class="fa fa-eye"></i></a></div>
                                <div class="team-thumber">
                                    <aside class="widget widget_social_widget">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </aside>
                                </div>
                            </div>
                            <div class="team-info">
                                <h5><a href="javascript:void(0);">Mrs.Than Than Soe</a></h5>
                                <p>Managing Director</p>
                            </div>
                        </div>
                        <div class="team-member">
                            <div class="team-thumb" tabindex="0">
                                <img src="{{ asset('assets/images/team/team02.jpg') }}" alt="team_item" title="">
                                <div class="team-view"><a href="#"><i class="fa fa-eye"></i></a></div>
                                <div class="team-thumber">
                                    <aside class="widget widget_social_widget">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </aside>
                                </div>
                            </div>
                            <div class="team-info">
                                <h5><a href="javascript:void(0);">Aoron Finch</a></h5>
                                <p>Manager and director</p>
                            </div>
                        </div>
                        <div class="team-member">
                            <div class="team-thumb" tabindex="0">
                                <img src="{{ asset('assets/images/team/team04.jpg') }}" alt="team_item" title="">
                                <div class="team-view"><a href="#"><i class="fa fa-eye"></i></a></div>
                                <div class="team-thumber">
                                    <aside class="widget widget_social_widget">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </aside>
                                </div>
                            </div>
                            <div class="team-info">
                                <h5><a href="javascript:void(0);">Christiana Ena</a></h5>
                                <p>Executive Officer</p>
                            </div>
                        </div>
                        <div class="team-member">
                            <div class="team-thumb" tabindex="0">
                                <img src="{{ asset('assets/images/team/team01.jpg') }}" alt="team_item" title="">
                                <div class="team-view"><a href="#"><i class="fa fa-eye"></i></a></div>
                                <div class="team-thumber">
                                    <aside class="widget widget_social_widget">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </aside>
                                </div>
                            </div>
                            <div class="team-info">
                                <h5><a href="javascript:void(0);">Steven Lucy</a></h5>
                                <p>Executive</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape13"><img src="{{ asset('assets/images/team/clipArt/shape13.png') }}" alt="image"></div>
        <div class="shape14"><img src="{{ asset('assets/images/team/clipArt/shape14.png') }}" alt="image"></div>
        <div class="shape15"><img src="{{ asset('assets/images/team/clipArt/shape15.png') }}" alt="image"></div>
        <div class="shape16"><img src="{{ asset('assets/images/team/clipArt/shape16.png') }}" alt="image"></div>
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
