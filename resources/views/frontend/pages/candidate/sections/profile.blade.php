@extends('frontend.pages.candidate.layouts.index')
@section('candidate-content')
<div class="my-profile-inner">
    <div class="form-wrapper mb-60">
        <div class="section-title">
            <h5>My Profile</h5>
        </div>
        <form class="profile-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>First Name*</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/user-2.svg" alt>
                            <input type="text" placeholder="Mr. Robert">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Your Age*</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/clock-2.svg" alt>
                            <input type="text" placeholder="21 Years">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Current Location*</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/map-2.svg" alt>
                            <input type="text" placeholder="Mirpur, Dhaka">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Phone Number*</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/phone-2.svg" alt>
                            <input type="text" placeholder="+880-17 *** *** **">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Email*</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/email-2.svg" alt>
                            <input type="email" placeholder="info@example.com">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Website Link*</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/website-2.svg" alt>
                            <input type="text" placeholder="https://example.com/">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Current Job Place*</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/company-2.svg" alt>
                            <input type="text" placeholder="Company Name">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Designation*</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/designation-2.svg" alt>
                            <input type="text" placeholder="UI/UX Engineer">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Qualification*</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/qualification-2.svg" alt>
                            <select class="select1">
                                <option value="0">Bachelor Degree in CSE</option>
                                <option value="1">IGCSE</option>
                                <option value="2">AS</option>
                                <option value="4">A Level</option>
                                <option value="5">Matriculated</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Language*</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/language-2.svg" alt>
                            <select class="select1">
                                <option value="0">Bangla</option>
                                <option value="1">English</option>
                                <option value="2">Spanish</option>
                                <option value="4">Italian</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-inner mb-50">
                        <label>Description*</label>
                        <textarea placeholder="Write something about yourself.........."></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-inner">
                        <button class="primary-btn-2 lg-btn w-unset" type="submit">Update
                            Profile</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="form-wrapper">
        <div class="section-title">
            <h5>Social Network:</h5>
        </div>
        <form class="profile-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Facebook</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/facebook-2.svg" alt>
                            <input type="text" placeholder="https://example-facebook.com/">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Twitter</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/twiter-2.svg" alt>
                            <input type="text" placeholder="https://example-twitter.com/">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>LinkedIn</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/linkedin-2.svg" alt>
                            <input type="text" placeholder="https://example-linkedin.com/">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Pinterest</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/pinterest-2.svg" alt>
                            <input type="text" placeholder="https://example-pinterest.com/">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-25">
                        <label>Dribbble</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/dribble-2.svg" alt>
                            <input type="text" placeholder="https://example-dribbble.com/">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-inner mb-50">
                        <label>Behance</label>
                        <div class="input-area">
                            <img src="{{ asset('frontend') }}/images/icon/behance-2.svg" alt>
                            <input type="text" placeholder="https://example-behance.com/">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-inner">
                        <button class="primary-btn-2 lg-btn w-unset" type="submit">Edit
                            Social</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
