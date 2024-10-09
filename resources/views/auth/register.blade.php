@extends('frontend.layouts.master')
@section('content')
    <div class="register-area pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-wrapper">
                        <div class="form-title">
                            <h3>Register Account</h3>
                            <span></span>
                        </div>
                        <div class="register-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-candidate-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-candidate" type="button" role="tab"
                                        aria-controls="nav-candidate" aria-selected="true">Candidate</button>
                                    <button class="nav-link" id="nav-organization-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-organization" type="button" role="tab"
                                        aria-controls="nav-organization" aria-selected="false">Organization</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-candidate" role="tabpanel"
                                    aria-labelledby="nav-candidate-tab">
                                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="role" value="candidate">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-inner mb-25">
                                                    <label for="first_name">First Name <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/user-2.svg" alt>
                                                        <input type="text" id="first_name" name="first_name"
                                                            placeholder="Enter First Name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-inner mb-25">
                                                    <label for="last_name">Last Name <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/user-2.svg" alt>
                                                        <input type="text" id="last_name" name="last_name"
                                                            placeholder="Enter Last Name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-inner mb-25">
                                                    <label for="email">Email <span class="text-danger">*</span></label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/email-2.svg" alt>
                                                        <input type="email" id="email" name="email"
                                                            placeholder="Enter Email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-inner mb-25">
                                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/phone-2.svg" alt>
                                                        <input type="text" id="phone" name="phone"
                                                            placeholder="Enter Phone" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="password">Password <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/lock-2.svg" alt>
                                                        <input type="password" name="password" id="password"
                                                            placeholder="Enter Password" required minlength="8" />
                                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner">
                                                    <label for="password_confirmation">Confirm Password <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/lock-2.svg" alt>
                                                        <input type="password" name="password_confirmation"
                                                            id="password2" placeholder="Confirm Password"
                                                            required minlength="8" />
                                                        <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div
                                                    class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                                    <div class="form-group two">
                                                        <input type="checkbox" id="terms_for_candidate" required
                                                            name="terms">
                                                        <label for="terms_for_candidate">Here, I will agree organization
                                                            terms &
                                                            conditions.</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-inner">
                                                    <button class="primary-btn-2" type="submit">Sign Up</button>
                                                </div>
                                            </div>
                                            <h6>Already have an account? <a href="{{ route('login') }}"> Login</a> Here
                                            </h6>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="nav-organization" role="tabpanel"
                                    aria-labelledby="nav-organization-tab">
                                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="role" value="organization">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-inner mb-25">
                                                    <label for="organization_name">Organization Name <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/companies.svg" alt>
                                                        <input type="text" id="organization_name"
                                                            placeholder="Enter Organization Name" name="organization_name"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-inner mb-25">
                                                    <label for="organization_type">Organization Type <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/category.svg" alt>
                                                        <input type="text" id="organization_type"
                                                            placeholder="Enter Organization Type" name="organization_type"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-inner mb-25">
                                                    <label for="email">Email <span class="text-danger">*</span></label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/email-2.svg" alt>
                                                        <input type="email" id="email" placeholder="Enter Email"
                                                            name="email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-inner">
                                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                                    <div class="input-area mb-25">
                                                        <img src="{{ asset('frontend') }}/images/icon/phone-2.svg" alt>
                                                        <input type="text" id="phone" placeholder="Enter Phone"
                                                            name="phone" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="password">Password <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/lock-2.svg" alt>
                                                        <input type="password" id="password3"
                                                            placeholder="Enter Password" name="password" required
                                                            minlength="8" />
                                                        <i class="bi bi-eye-slash" id="togglePassword3"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="password_confirmation">Confirm Password <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/lock-2.svg" alt>
                                                        <input type="password" id="password4"
                                                            placeholder="Confirm Password" name="password_confirmation"
                                                            required minlength="8" />
                                                        <i class="bi bi-eye-slash" id="togglePassword4"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div
                                                    class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                                    <div class="form-group two">
                                                        <input type="checkbox" id="terms_for_organization" required
                                                            name="terms">
                                                        <label for="terms_for_organization">Here, I will agree organization
                                                            terms &
                                                            conditions.</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-inner">
                                                    <button class="primary-btn-2" type="submit">Sign Up</button>
                                                </div>
                                            </div>
                                            <h6>Already have an account? <a href="{{ route('login') }}"> Login</a> Here
                                            </h6>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
                iziToast.error({
                    message: '{{ $error }}',
                    position: 'topRight'
                });
            @endforeach
        </script>
    @endif
@endpush
