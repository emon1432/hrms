@extends('frontend.layouts.master')
@section('content')
    <div class="dashboard-area pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 mb-90">
                <div class="col-lg-3">
                    @include('frontend.pages.candidate.layouts.sidebar')
                </div>
                <div class="col-lg-9">
                    @yield('candidate-content')
                </div>
            </div>
        </div>
    </div>
@endsection
