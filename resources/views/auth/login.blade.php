@extends('frontend.layouts.master')
@section('content')
    <div class="login-area pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-wrapper">
                        <div class="form-title">
                            <h3>Log In Here!</h3>
                            <span></span>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-inner mb-25">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <div class="input-area">
                                            <img src="{{ asset('frontend') }}/images/icon/email-2.svg" alt>
                                            <input type="email" id="email" name="email"
                                                placeholder="Enter your email address" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <label for="email">Password <span class="text-danger">*</span></label>
                                        <div class="input-area">
                                            <img src="{{ asset('frontend') }}/images/icon/lock-2.svg" alt>
                                            <input type="password" name="password" id="password" placeholder="Password"
                                                required>
                                            <i class="bi bi-eye-slash" id="togglePassword"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <input type="checkbox" id="remember" name="remember">
                                            <label for="remember">Remember Me</label>
                                        </div>
                                        <a href="{{ route('password.request') }}" class="forgot-pass">Forget Password?</a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <button class="primary-btn-2" type="submit">LogIn</button>
                                    </div>
                                </div>
                                <h6>Don’t have an account? <a href="{{ route('register') }}">Sign Up</a></h6>
                            </div>
                        </form>
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
