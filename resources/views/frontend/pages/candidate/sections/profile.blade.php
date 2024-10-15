@extends('frontend.pages.candidate.layouts.index')
@section('candidate-content')
    <div class="my-profile-inner">
        <div class="form-wrapper mb-60">
            <div class="section-title">
                <h5>My Profile</h5>
            </div>
            <form id="profile-form" action="{{ route('candidate.profile.update') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="first_name">First Name <span class="text-danger">*</span></label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/user-2.svg" alt>
                                <input type="text" id="first_name" name="first_name" placeholder="First Name"
                                    value="{{ auth()->user()->candidate->first_name }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="last_name">Last Name <span class="text-danger">*</span></label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/user-2.svg" alt>
                                <input type="text" id="last_name" name="last_name" placeholder="Last Name"
                                    value="{{ auth()->user()->candidate->last_name }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="dob">Date of Birth <span class="text-danger">*</span></label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/calender2.svg" alt>
                                <input type="date" id="dob" name="dob"
                                    value="{{ auth()->user()->candidate->dob }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-inner mb-25">
                            <label for="profile">Profile <span class="text-danger">*</span></label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/user-2.svg" alt>
                                <input type="file" id="profile" name="profile" accept="image/*"
                                    onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-inner mb-25">
                            <img id="image-preview" src="{{ imageShow(auth()->user()->candidate->image) }}"
                                alt="{{ auth()->user()->candidate->first_name }}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="phone">Phone <span class="text-danger">*</span></label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/phone-2.svg" alt>
                                <input type="text" id="phone" name="phone" placeholder="Phone"
                                    value="{{ auth()->user()->candidate->phone }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/email-2.svg" alt>
                                <input type="email" id="email" name="email" placeholder="Email"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="website">Website Link</label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/website-2.svg" alt>
                                <input type="url" id="website" name="website" placeholder="Website Link"
                                    value="{{ auth()->user()->candidate->website }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="current_job">Current Job Place</label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/company-2.svg" alt>
                                <input type="text" placeholder="Company Name" id="current_job" name="current_job"
                                    value="{{ auth()->user()->candidate->current_job }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="designation">Designation</label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/designation-2.svg" alt>
                                <input type="text" placeholder="Designation" id="designation" name="designation"
                                    value="{{ auth()->user()->candidate->designation }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="current_salary">Current Salary</label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/salary-2.svg" alt>
                                <input type="text" placeholder="Current Salary" id="current_salary"
                                    name="current_salary" value="{{ auth()->user()->candidate->current_salary }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="expected_salary">Expected Salary</label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/salary-2.svg" alt>
                                <input type="text" placeholder="Expected Salary" id="expected_salary"
                                    name="expected_salary" value="{{ auth()->user()->candidate->expected_salary }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="facebook">Facebook</label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/facebook-2.svg" alt>
                                <input type="url" placeholder="https://example-facebook.com/" id="facebook"
                                    name="facebook" value="{{ auth()->user()->candidate->facebook }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="twitter">Twitter</label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/twiter-2.svg" alt>
                                <input type="url" placeholder="https://example-twitter.com/" id="twitter"
                                    name="twitter" value="{{ auth()->user()->candidate->twitter }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="linkedin">Linkedin</label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/linkedin-2.svg" alt>
                                <input type="url" placeholder="https://example-linkedin.com/" id="linkedin"
                                    name="linkedin" value="{{ auth()->user()->candidate->linkedin }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="current_location">Current Location <span class="text-danger">*</span></label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/map-2.svg" alt>
                                <input type="text" id="current_location" name="current_location"
                                    placeholder="Current Location"
                                    value="{{ auth()->user()->candidate->current_location }}" required>
                            </div>
                        </div>
                    </div>
                    {{-- cv --}}
                    <div class="col-md-6">
                        <div class="form-inner mb-25">
                            <label for="cv">Upload CV <span class="text-danger">* (Only PDF)</span></label>
                            <div class="input-area">
                                <img src="{{ asset('frontend') }}/images/icon/cv.svg" alt>
                                <input type="file" id="cv" name="cv" accept="application/pdf">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-inner mb-50">
                            <label for="career_objective">Career Objective</label>
                            <textarea placeholder="Write something about yourself.........." id="career_objective" name="career_objective">{{ auth()->user()->candidate->career_objective }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-inner">
                            <button class="primary-btn-2 lg-btn w-unset update" type="submit">Update
                                Profile</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
{{-- @push('scripts')
    <script src="{{ asset('frontend') }}/js/drop-zone.js"></script>
@endpush --}}
