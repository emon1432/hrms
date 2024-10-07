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
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">
                                        Candidate
                                    </button>
                                    {{-- <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">
                                        Company
                                    </button> --}}
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">

                                                    <label for="firstname1">First Name*</label>

                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/user-2.svg" alt />
                                                        <x-input id="first_name" type="text" name="name"
                                                            :value="old('name')" required autofocus autocomplete="name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="lastname1">Last Name*</label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/user-2.svg" alt />
                                                        <x-input id="last_name" type="text" name="name"
                                                            :value="old('name')" required autofocus autocomplete="name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="username">User Name*</label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/user-2.svg" alt />
                                                        <input type="text" id="username" name=""
                                                            placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="email">Email*</label>

                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/email-2.svg" alt />
                                                        <x-input id="email" type="email" name="email"
                                                            :value="old('email')" required autocomplete="username" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="password">Password*</label>
                                                    <x-input id="password" type="password" name="password" required
                                                        autocomplete="new-password" />

                                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner">
                                                    <label for="password2">Confirm Password*</label>
                                                    <x-input id="password_confirmation" type="password"
                                                        name="password_confirmation" required autocomplete="new-password" />
                                                    <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div
                                                    class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                                    <div class="form-group two">
                                                        <input type="checkbox" id="html1" />
                                                        <label for="html1">Here, I will agree company terms &
                                                            conditions.</label>
                                                    </div>
                                                </div>
                                            </div>

                                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                <div class="mt-4">
                                                    <x-label for="terms">
                                                        <div class="flex items-center">
                                                            <x-checkbox name="terms" id="terms" required />

                                                            <div class="ms-2">
                                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                    'terms_of_service' =>
                                                                        '<a target="_blank" href="' .
                                                                        route('terms.show') .
                                                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                                        __('Terms of Service') .
                                                                        '</a>',
                                                                    'privacy_policy' =>
                                                                        '<a target="_blank" href="' .
                                                                        route('policy.show') .
                                                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                                        __('Privacy Policy') .
                                                                        '</a>',
                                                                ]) !!}
                                                            </div>
                                                        </div>
                                                    </x-label>
                                                </div>
                                            @endif

                                            <div class="col-md-12">
                                                <div class="form-inner">
                                                    <x-button class="primry-btn-2">
                                                        {{ __('Register') }}
                                                    </x-button>
                                                </div>
                                            </div>
                                            <h6>
                                                Already have an account?
                                                <a href="{{ route('login') }}"> Login</a> Here
                                            </h6>
                                            <div class="login-difarent-way">
                                                <div class="row g-4">
                                                    <div class="col-md-6">
                                                        <a href="https://myaccount.google.com/"><img
                                                                src="{{ asset('frontend') }}/images/icon/google1.svg"
                                                                alt />Log in with
                                                            Google</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="https://www.facebook.com/"><img
                                                                src="{{ asset('frontend') }}/images/icon/facebook1.svg"
                                                                alt />Log in with
                                                            Facebook</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="firstname">First Name*</label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/user-2.svg" alt />
                                                        <input type="text" id="firstname" name="firstname"
                                                            placeholder="Mr. Robert" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="lastname">Last Name*</label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/user-2.svg" alt />
                                                        <input type="text" id="lastname" name="lastname"
                                                            placeholder="Jonson" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="username">User Name*</label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/user-2.svg" alt />
                                                        <input type="text" id="username1" name="username"
                                                            placeholder="robertjonson" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="email">Email*</label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/email-2.svg" alt />
                                                        <input type="text" id="email1" name="email"
                                                            placeholder="info@example.com" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="companyname">Company Name*</label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/company-2.svg"
                                                            alt />
                                                        <input type="text" id="companyname" name="companyname"
                                                            placeholder="Mr. Robert" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label>Company Type*</label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('frontend') }}/images/icon/category-2.svg"
                                                            alt />
                                                        <select class="select1">
                                                            <option value="0">Digital Agency</option>
                                                            <option value="1">
                                                                Digital Marketing Agency
                                                            </option>
                                                            <option value="2">Software Company</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="password">Password*</label>
                                                    <input type="password" name="password" id="password3"
                                                        placeholder="Password" />
                                                    <i class="bi bi-eye-slash" id="togglePassword3"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner">
                                                    <label for="password4">Confirm Password*</label>
                                                    <input type="password" name="confirmpassword" id="password4"
                                                        placeholder="Confirm Password" />
                                                    <i class="bi bi-eye-slash" id="togglePassword4"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div
                                                    class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                                    <div class="form-group two">
                                                        <input type="checkbox" id="html" />
                                                        <label for="html">Here, I will agree company terms &
                                                            conditions.</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-inner">
                                                    <button class="primry-btn-2" type="submit">
                                                        Sign Up
                                                    </button>
                                                </div>
                                            </div>
                                            <h6>
                                                Already have an account?
                                                <a href="{{ route('login') }}"> Login</a> Here
                                            </h6>
                                            <div class="login-difarent-way">
                                                <div class="row g-4">
                                                    <div class="col-md-6">
                                                        <a href="https://myaccount.google.com/"><img
                                                                src="{{ asset('frontend') }}/images/icon/google1.svg"
                                                                alt />Log in with
                                                            Google</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="https://www.facebook.com/"><img
                                                                src="{{ asset('frontend') }}/images/icon/facebook1.svg"
                                                                alt />Log in with
                                                            Facebook</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- <form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <x-label for="name" value="{{ __('Name') }}" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
            autofocus autocomplete="name" />
    </div>

    <div class="mt-4">
        <x-label for="email" value="{{ __('Email') }}" />
        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
            autocomplete="username" />
    </div>

    <div class="mt-4">
        <x-label for="password" value="{{ __('Password') }}" />
        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
            autocomplete="new-password" />
    </div>

    <div class="mt-4">
        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
            required autocomplete="new-password" />
    </div>

    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
            <x-label for="terms">
                <div class="flex items-center">
                    <x-checkbox name="terms" id="terms" required />

                    <div class="ms-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' =>
                                '<a target="_blank" href="' .
                                route('terms.show') .
                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                __('Terms of Service') .
                                '</a>',
                            'privacy_policy' =>
                                '<a target="_blank" href="' .
                                route('policy.show') .
                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                __('Privacy Policy') .
                                '</a>',
                        ]) !!}
                    </div>
                </div>
            </x-label>
        </div>
    @endif

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-button class="ms-4">
            {{ __('Register') }}
        </x-button>
    </div>
</form> --}}
