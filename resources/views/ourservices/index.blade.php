@extends('layouts.app')
@section('content')
    <section id="breadcrumb-section" class="breadcrumb-area breadcrumb-left">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="breadcrumb-content">
                        <div class="breadcrumb-heading wow fadeInLeft">
                            <h2>Our Services</h2>
                        </div>
                        <ol class="breadcrumb-list wow fadeInRight">
                            <li><a href="{{ route('welcome') }}"><i class="fa fa-home"></i> Homepage</a>
                                &nbsp;-&nbsp;</li>
                            <li class="active">Our Services </li>
                        </ol>
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
                        <p>Our Than Than Services Co.,ltd sent many workers to abroad by given them good training and
                            leading provice of Human Resource Development Service.</p>
                        <p>Our trained workers have full skill in their respective works.</p>
                        <p>Most of our workers in foreign countries are usually doing job well of the employee company.</p>
                        <p>If you ant to get full satisfaction,please contact to Our Than Than Services Co.,Ltd.</p>
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
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
