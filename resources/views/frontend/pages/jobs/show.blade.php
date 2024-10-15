@extends('frontend.layouts.master')
@section('content')
    <div class="inner-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content text-center">
                        <h1>Job Details</h1>
                        <span></span>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Job Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job-details-pages pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-8">
                    <div class="job-details-content">
                        <div class="job-list-content">
                            <div class="company-area">
                                <div class="logo">
                                    <img src="{{ imageShow($job->organization->image) }}"
                                        alt="{{ $job->organization->name }}">
                                </div>
                                <div class="company-details">
                                    <div class="name-location">
                                        <h5>
                                            <a href="javascript:void(0)">
                                                {{ $job->title }}
                                            </a>
                                        </h5>
                                        <p>{{ $job->organization->name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="job-discription">
                                <ul class="one">
                                    <li>
                                        <img src="{{ asset('frontend') }}/images/icon/map-2.svg" alt>
                                        <p><span class="title">Location:</span> {{ $job->location }}</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend') }}/images/icon/category-2.svg" alt>
                                        <p><span class="title">Category:</span> {{ $job->category->name }}</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend') }}/images/icon/company-2.svg" alt>
                                        <p><span class="title">Job Type:</span> {{ $job->type }}</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend') }}/images/icon/salary-2.svg" alt>
                                        <p><span class="title">Salary:</span> ${{ $job->salary_from }}k -
                                            ${{ $job->salary_to }}k/Per Month</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {!! $job->description !!}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="job-details-sidebar mb-120">
                        <div class="save-apply-btn d-flex justify-content-end mb-50">
                            <ul>
                                <li>
                                    <a class="save-btn" href="#">
                                        Save Job
                                        <span>
                                            <i class="bi bi-bookmark-fill"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="primary-btn-2 lg-btn" href="#">
                                        Apply Position
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="job-summary-area mb-50">
                            <div class="job-summary-title">
                                <h6>Job Summary:</h6>
                            </div>
                            <ul>
                                <li>
                                    <p>
                                        <span class="title">Job Posted:</span>
                                        {{ $job->created_at->format('d F, Y') }}
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="title">Expiration:</span>
                                        {{ Carbon\Carbon::parse($job->deadline)->format('d F, Y') }}
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="title">Vacancy:</span>
                                        {{ $job->vacancy }} Person.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="title">Experiences:</span>
                                        {{ $job->experience }} Years.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="title">Gender:</span>
                                        {{ $job->gender }}.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="view-job-btn mb-30">
                            <a href="{{ route('jobs.index') }}"><img
                                    src="{{ asset('frontend') }}/images/icon/company-2.svg" alt>View All Jobs In
                                This Company</a>
                        </div>
                        <div class="job-share-area mb-50">
                            <h6>Job Link Share:</h6>
                            <ul>
                                <li><a href="#"><i class="bx bx-link"></i></a></li>
                                <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram-alt"></i></a></li>
                            </ul>
                        </div>
                        <div class="email-area mb-50">
                            <div class="title">
                                <h6><img src="{{ asset('frontend') }}/images/icon/email-2.svg" alt>Email Now</h6>
                            </div>
                            <p>Send your resume at <a
                                    href="https://demo.egenslab.com/cdn-cgi/l/email-protection#cda4a3aba28da8b5aca0bda1a8e3aea2a0"><span
                                        class="__cf_email__"
                                        data-cfemail="bdd4d3dbd2fdd8c5dcd0cdd1d893ded2d0">[email&#160;protected]</span></a>
                            </p>
                        </div>
                        <div class="location-area">
                            <h6>Get Location:</h6>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.564763018799!2d90.36349791490355!3d23.834071191491947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14c8682a473%3A0xa6c74743d52adb88!2sEgens%20Lab!5e0!3m2!1sen!2sbd!4v1674212581590!5m2!1sen!2sbd"
                                style="border:0;" allowfullscreen loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-120">
                    <div class="company-gallery">
                        <div class="title">
                            <h5>Company Gallery View</h5>
                        </div>
                        <div class="swiper company-gallery-slider" data-cursor="Drag">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="{{ asset('frontend') }}/images/bg/company-gallery-big-01.png"
                                        data-fancybox="gallery" class="gallery2-img">
                                        <div class="gallery-wrap">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/images/bg/company-gallery-sm-01.png" alt>
                                            <div class="overlay d-flex align-items-center justify-content-center">
                                                <div class="items-content text-center">
                                                    <img src="{{ asset('frontend') }}/images/icon/eye.svg" alt>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('frontend') }}/images/bg/company-gallery-big-02.png"
                                        data-fancybox="gallery" class="gallery2-img">
                                        <div class="gallery-wrap">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/images/bg/company-gallery-sm-02.png" alt>
                                            <div class="overlay d-flex align-items-center justify-content-center">
                                                <div class="items-content text-center">
                                                    <img src="{{ asset('frontend') }}/images/icon/eye.svg" alt>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('frontend') }}/images/bg/company-gallery-big-03.png"
                                        data-fancybox="gallery" class="gallery2-img">
                                        <div class="gallery-wrap">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/images/bg/company-gallery-sm-03.png" alt>
                                            <div class="overlay d-flex align-items-center justify-content-center">
                                                <div class="items-content text-center">
                                                    <img src="{{ asset('frontend') }}/images/icon/eye.svg" alt>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('frontend') }}/images/bg/company-gallery-big-04.png"
                                        data-fancybox="gallery" class="gallery2-img">
                                        <div class="gallery-wrap">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/images/bg/company-gallery-sm-04.png" alt>
                                            <div class="overlay d-flex align-items-center justify-content-center">
                                                <div class="items-content text-center">
                                                    <img src="{{ asset('frontend') }}/images/icon/eye.svg" alt>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('frontend') }}/images/bg/company-gallery-big-05.png"
                                        data-fancybox="gallery" class="gallery2-img">
                                        <div class="gallery-wrap">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend') }}/images/bg/company-gallery-sm-05.png" alt>
                                            <div class="overlay d-flex align-items-center justify-content-center">
                                                <div class="items-content text-center">
                                                    <img src="{{ asset('frontend') }}/images/icon/eye.svg" alt>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="related-jobs">
                        <div class="section-title mb-40">
                            <h3>Related Jobs:</h3>
                            <div class="swiper-btn1 d-flex align-items-center">
                                <div class="left-btn prev-4">
                                    <img src="{{ asset('frontend') }}/images/icon/explore-elliose.svg" alt>
                                </div>
                                <div class="right-btn next-4">
                                    <img src="{{ asset('frontend') }}/images/icon/explore-elliose.svg" alt>
                                </div>
                            </div>
                        </div>
                        <div class="swiper related-job-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="feature-card">
                                        <div class="company-area">
                                            <div class="logo">
                                                <img src="{{ asset('frontend') }}/images/bg/company-logo/company-02.png"
                                                    alt>
                                            </div>
                                            <div class="company-details">
                                                <div class="name-location">
                                                    <h5><a href="{{ route('jobs.show', 1) }}">Assistant Laboratorist</a>
                                                    </h5>
                                                    <p>Full Time, Part Time</p>
                                                </div>
                                                <div class="bookmark">
                                                    <i class="bi bi-bookmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-discription">
                                            <ul>
                                                <li>
                                                    <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                    <p><span class="title">Salary:</span> $30-$40 / <span
                                                            class="time">Per month</span></p>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                    <p><span class="title">Vacancy:</span> <span> 05 Person
                                                            (Both)</span></p>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                    <p><span class="title">Deadline:</span> <span> 02 March, 2023
                                                        </span></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-type-apply">
                                            <div class="apply-btn">
                                                <a href="{{ route('jobs.show', 1) }}"><span><img
                                                            src="{{ asset('frontend') }}/images/icon/apply-ellipse.svg"
                                                            alt></span>Apply
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feature-card">
                                        <div class="company-area">
                                            <div class="logo">
                                                <img src="{{ asset('frontend') }}/images/bg/company-logo/company-03.png"
                                                    alt>
                                            </div>
                                            <div class="company-details">
                                                <div class="name-location">
                                                    <h5><a href="{{ route('jobs.show', 1) }}">Senior Receptionist</a></h5>
                                                    <p>Full Time, Part Time</p>
                                                </div>
                                                <div class="bookmark">
                                                    <i class="bi bi-bookmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-discription">
                                            <ul>
                                                <li>
                                                    <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                    <p><span class="title">Salary:</span> $60-$90 / <span
                                                            class="time">Per month</span></p>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                    <p><span class="title">Vacancy:</span> <span> 07 Person
                                                            (Female)</span></p>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                    <p><span class="title">Deadline:</span> <span> 03 March, 2023
                                                        </span></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-type-apply">
                                            <div class="apply-btn">
                                                <a href="{{ route('jobs.show', 1) }}"><span><img
                                                            src="{{ asset('frontend') }}/images/icon/apply-ellipse.svg"
                                                            alt></span>Apply
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feature-card">
                                        <div class="company-area">
                                            <div class="logo">
                                                <img src="{{ asset('frontend') }}/images/bg/company-logo/company-06.png"
                                                    alt>
                                            </div>
                                            <div class="company-details">
                                                <div class="name-location">
                                                    <h5><a href="{{ route('jobs.show', 1) }}">Manager (HR)</a></h5>
                                                    <p>Full Time, Part Time</p>
                                                </div>
                                                <div class="bookmark">
                                                    <i class="bi bi-bookmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-discription">
                                            <ul>
                                                <li>
                                                    <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                    <p><span class="title">Salary:</span> $60-$76 / <span
                                                            class="time">Per month</span></p>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                    <p><span class="title">Vacancy:</span> <span> 01 Person
                                                            (Both)</span></p>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                    <p><span class="title">Deadline:</span> <span> 05 March, 2023</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-type-apply">
                                            <div class="apply-btn">
                                                <a href="{{ route('jobs.show', 1) }}"><span><img
                                                            src="{{ asset('frontend') }}/images/icon/apply-ellipse.svg"
                                                            alt></span>Apply
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
