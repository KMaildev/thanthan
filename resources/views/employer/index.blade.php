@extends('layouts.app')
@section('title', ' - Employer')
@section('content')
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
                                <h3>
                                    Employer
                                    <span class="primary-color"> Application Form</span>
                                </h3>
                                <span class="separator"><span><span></span></span></span>

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
                                <div role="form" class="" id="wpcf7-f229-o1" lang="en">
                                    <div class="screen-reader-response" role="alert" aria-live="polite"></div>

                                    <form autocomplete="off" method="POST" action="{{ route('employer.store') }}"
                                        id="create-form">
                                        @csrf

                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">
                                            Company Name
                                        </label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_name') is-invalid @enderror"
                                            placeholder="Company Name" name="company_name"
                                            value="{{ old('company_name') }}">
                                        @error('company_name')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>

                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Type of
                                            Company</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_type') is-invalid @enderror"
                                            placeholder="Type Of Company" name="company_type"
                                            value="{{ old('company_type') }}">
                                        @error('company_type')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>


                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Company Email
                                            Address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Company Email Address" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>


                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Company Phone
                                            Number</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Company Phone Number" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>


                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Company
                                            Website</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('website') is-invalid @enderror"
                                            placeholder="Company Website" name="website" value="{{ old('website') }}">
                                        @error('website')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>


                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Company
                                            Location</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('location') is-invalid @enderror"
                                            placeholder="Company Location" name="location" value="{{ old('location') }}">
                                        @error('location')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>


                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Job
                                            Category</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('job_category') is-invalid @enderror"
                                            placeholder="Job Category" name="job_category"
                                            value="{{ old('job_category') }}">
                                        @error('job_category')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>


                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Age Limit:
                                            20-40</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('age_limit') is-invalid @enderror"
                                            placeholder="Age Limit: 20-40" name="age_limit"
                                            value="{{ old('age_limit') }}">
                                        @error('age_limit')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>



                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Educational
                                            Requirement</label>
                                        <textarea class="form-control @error('educational_requirement') is-invalid @enderror" name="educational_requirement"
                                            placeholder="Educational Requirement">{{ old('educational_requirement') }}</textarea>
                                        @error('educational_requirement')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>

                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">
                                            Working Experience Requirement
                                        </label>
                                        <textarea class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                            name="working_experience_requirement" placeholder="Working Experience Requirement">{{ old('working_experience_requirement') }}</textarea>
                                        @error('working_experience_requirement')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>

                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Other Additional
                                            Requirement</label>
                                        <textarea class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                            name="other_additional_requirement" placeholder="Other Additional Requirement">{{ old('other_additional_requirement') }}</textarea>
                                        @error('other_additional_requirement')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>

                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Estimate Salary
                                            Offer</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                            placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                            value="{{ old('estimate_salary_offer') }}">
                                        @error('estimate_salary_offer')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>

                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Other
                                            Allowance</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('other_allowance') is-invalid @enderror"
                                            placeholder="Other Allowance" name="other_allowance"
                                            value="{{ old('other_allowance') }}">
                                        @error('other_allowance')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>

                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Gender: Male =
                                            10, Female =
                                            5</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('gender') is-invalid @enderror"
                                            placeholder="Gender: Male = 10, Female = 5" name="gender"
                                            value="{{ old('gender') }}">
                                        @error('gender')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>

                                        <label for="nameInput" class="form-label text-black"
                                            style="text-align: left !important;">Interview
                                            Type</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('interview_type') is-invalid @enderror"
                                            placeholder="Interview Type: Online" name="interview_type"
                                            value="{{ old('interview_type') }}">
                                        @error('interview_type')
                                            <div class="" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>

                                        <div class="col-lg-12">
                                            <button type="submit" class="button-fill-primary">
                                                Apply Now
                                            </button>
                                        </div>
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

@endsection
@section('script')
{!! JsValidator::formRequest('App\Http\Requests\StoreEmployer', '#create-form') !!}
@endsection
