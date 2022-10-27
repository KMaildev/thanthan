@extends('layouts.app')
@section('title', ' - Contact Us')
@section('content')
    <div id="content" class="gradiant-content">

        <section id="breadcrumb-section" class="breadcrumb-area breadcrumb-left">
            <div class="av-container">
                <div class="av-columns-area">
                    <div class="av-column-12">
                        <div class="breadcrumb-content">
                            <div class="breadcrumb-heading wow fadeInLeft">
                                <h2>Contact Us</h2>
                            </div>
                            <ol class="breadcrumb-list wow fadeInRight">
                                <li>
                                    <a href="{{ route('welcome') }}">
                                        <i class="fa fa-home"></i> Home</a>
                                    &nbsp;-&nbsp;
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="contactinfo-section" class="contactinfo-section av-py-default">
            <div class="av-container">
                <div class="av-columns-area">
                    <div class="av-column-12">
                        <div class="heading-default text-center wow fadeInUp">
                            <h3>Frequently Asked <span class="primary-color">Question?</span></h3>
                            <span class="separator"><span><span></span></span></span>
                            <p>
                                Alternatively, you may contact us by filling up the contact form. Our team will response you
                                shortly.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="av-columns-area contactinfo-row">
                    <div class="av-column-3 av-sm-column-6 px-2">
                        <div class="contactinfo-item">
                            <i class="fa fa-map"></i>
                            <h5>
                                Address
                            </h5>
                            <p>
                                12 E, Ground Floor 55th Street Pazundaung T/s Yangon, Myanmar.
                            </p>
                            <a target="_blank"
                                href="https://www.google.com/maps/place/%E1%80%9E%E1%80%94%E1%80%BA%E1%80%B8%E1%80%9E%E1%80%94%E1%80%BA%E1%80%B8/@16.7744311,96.1722343,17z/data=!3m1!4b1!4m5!3m4!1s0x30c1ecf5371c5bfb:0xa7b91d1a5b6a47b9!8m2!3d16.7744276!4d96.1743839">
                                Google Map
                            </a>
                        </div>
                    </div>

                    <div class="av-column-3 av-sm-column-6 px-2">
                        <div class="contactinfo-item">
                            <i class="fa fa-whatsapp"></i>
                            <h5>Phone</h5>
                            <p>
                                00951,
                                292449, <br>
                                293143,
                                291669, <br>
                                4413224
                            </p>
                            <a href="tel:292449">Call Us</a>
                        </div>
                    </div>

                    <div class="av-column-3 av-sm-column-6 px-2">
                        <div class="contactinfo-item">
                            <i class="fa fa-phone"></i>
                            <h5>Mobile</h5>
                            <p>
                                0095-98024062, <br>
                                95137940, <br>
                                00951-292449
                            </p>
                            <a href="tel:9598024062">
                                Call Now
                            </a>
                        </div>
                    </div>

                    <div class="av-column-3 av-sm-column-6 px-2">
                        <div class="contactinfo-item">
                            <i class="fa fa-envelope"></i>
                            <h5>Email</h5>
                            <a href="mailto:thanthanoverseas@gmail.com">
                                thanthanoverseas@gmail.com
                            </a>
                            <a href="mailto:thanagency@gmail.com">
                                thanagency@gmail.com
                            </a>
                            <a href="mailto:bngtravel@myanmar.com">
                                bngtravel@myanmar.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="contactoffice-section" class="contactoffice-section av-py-default">
            <div class="av-container">
                <div class="av-columns-area">
                    <div class="av-column-12">
                        <div class="heading-default text-center wow fadeInUp">
                            <h3>Our <span class="primary-color">Offices</span></h3>
                            <span class="separator"><span><span></span></span></span>
                            <p>
                                The Than Than Manpower Services Co.,Ltd has branch offices in forgein countries, such as
                                U.A.E, Kuwait, Quatar, Saudi Arbia and Malaysia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="av-columns-area">
                    <div class="av-column-12">
                        <div class="contactoffice-carousel owl-carousel owl-theme">
                            <div class="contactoffice-item">
                                <img src="{{ asset('data/uae.png') }}" alt="flag">
                                <h5>U.A.E</h5>
                            </div>
                            <div class="contactoffice-item">
                                <img src="{{ asset('data/k.png') }}" alt="flag">
                                <h5>Kuwait</h5>
                            </div>
                            <div class="contactoffice-item">
                                <img src="{{ asset('data/q.png') }}" alt="flag">
                                <h5>Quatar</h5>
                            </div>
                            <div class="contactoffice-item">
                                <img src="{{ asset('data/sa.png') }}" alt="flag">
                                <h5>Saudi Arbia </h5>
                            </div>
                            <div class="contactoffice-item">
                                <img src="{{ asset('data/ma.png') }}" alt="flag">
                                <h5>Malaysia</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contactform-section" class="contactform-section av-pb-default">
            <div class="contactformbg-heading av-py-default">
                <div class="av-container">
                    <div class="av-columns-area">
                        <div class="av-column-12">
                            <div class="heading-default text-center wow fadeInUp">
                                <h3>Have A <span class="primary-color">Question?</span></h3>
                                <span class="separator"><span><span></span></span></span>
                                <p>
                                    If you have any queries about recruitments, vacancies, or anything else, our team is
                                    ready to response all your queries.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contactform-content">
                <div class="av-container">
                    <div class="av-columns-area">
                        <div class="av-column-12">
                            <div class="contactform">
                                <div role="form" class="wpcf7" id="wpcf7-f229-o1" lang="en" dir="ltr">
                                    <div class="screen-reader-response" role="alert" aria-live="polite"></div>

                                    <form action="{{ route('contact.store') }}" method="post" class="wpcf7-form init"
                                        id="create-form">

                                        <div style="display:none">
                                            @csrf
                                            <input type="hidden">
                                            <input type="hidden">
                                            <input type="hidden">
                                            <input type="hidden">
                                            <input type="hidden">
                                            <input type="hidden">
                                        </div>

                                        <p>
                                            <label>
                                                <span class="wpcf7-form-control-wrap your-name">
                                                    <input type="text" placeholder="Your Name" name="name"
                                                        size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false">

                                                    @error('name')
                                                        <span class="form-control-feedback" style="color: red;">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </span>
                                            </label>

                                        </p>

                                        <p>
                                            <label>
                                                <span class="wpcf7-form-control-wrap your-email">
                                                    <input type="email" placeholder="Your Email" name="email"
                                                        size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                        aria-required="true" aria-invalid="false">
                                                    @error('email')
                                                        <span class="form-control-feedback" style="color: red;">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </span>
                                            </label>
                                        </p>

                                        <p>
                                            <label>
                                                <span class="wpcf7-form-control-wrap your-email">
                                                    <input type="number" placeholder="Phone Number" name="phone"
                                                        size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number"
                                                        aria-required="true" aria-invalid="false">
                                                    @error('phone')
                                                        <span class="form-control-feedback" style="color: red;">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </span>
                                            </label>
                                        </p>

                                        <p>
                                            <label>
                                                <span class="wpcf7-form-control-wrap your-subject">
                                                    <input type="text" placeholder="Subject" name="subject"
                                                        size="40" class="wpcf7-form-control wpcf7-text"
                                                        aria-invalid="false">
                                                    @error('subject')
                                                        <span class="form-control-feedback" style="color: red;">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </span>
                                            </label>
                                        </p>

                                        <p>
                                            <label><span class="wpcf7-form-control-wrap your-message">
                                                    <textarea placeholder="Message" name="message" cols="40" rows="10"
                                                        class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                                                    @error('message')
                                                        <span class="form-control-feedback" style="color: red;">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </span></label>
                                        </p>

                                        <p>
                                            <button type="submit"
                                                class="av-btn av-btn-primary av-btn-bubble wpcf7-submit">
                                                Send Now
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
                                            </button>
                                            <span class="ajax-loader"></span>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
