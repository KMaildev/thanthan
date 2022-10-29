@extends('layouts.app')
@section('title', ' - Submit CV')
@section('content')
    <div id="content" class="gradiant-content">
        <section id="contactform-section" class="contactform-section av-pb-default">
            <div class="contactformbg-heading av-py-default">
                <div class="av-container">
                    <div class="av-columns-area">
                        <div class="av-column-12">
                            <div class="heading-default text-center wow fadeInUp">
                                <h3>Apply<span class="primary-color"> Job</span></h3>
                                <span class="separator"><span><span></span></span></span>
                                <p>
                                    Fill your infomations and then upload your CV.
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

                                    <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                                        enctype="multipart/form-data" id="create-form">
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
                                                    <input type="text" placeholder="Phone Number" name="phone"
                                                        size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
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
                                                    <input type="text" placeholder="Additional Note"
                                                        name="additional_note" size="40"
                                                        class="wpcf7-form-control wpcf7-text" aria-invalid="false">
                                                    @error('additional_note')
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
                                                    <label for="img">Select your CV to upload</label><br>
                                                    <input type="file" placeholder="Subject" name="attachment_file"
                                                        size="40" class="wpcf7-form-control wpcf7-text"
                                                        aria-invalid="false">
                                                    @error('attachment_file')
                                                        <span class="form-control-feedback" style="color: red;">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </span>
                                            </label>
                                        </p>

                                        <p>
                                            <button type="submit" class="av-btn av-btn-primary av-btn-bubble wpcf7-submit">
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
