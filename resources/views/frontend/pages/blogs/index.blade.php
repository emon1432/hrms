@extends('frontend.layouts.master')
@section('content')
    <div class="inner-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content text-center">
                        <h1>Blog</h1>
                        <span></span>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-grid-area pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10 mb-20">
                    <div class="recent-article-wrap">
                        <div class="recent-article-img">
                            <img class="img-fluid" src="{{ asset('frontend') }}/images/blog/blog-img-01.png" alt>
                            <div class="publish-area d-xl-none d-flex">
                                <a href="{{ route('blogs.index') }}"><span>02</span>March</a>
                            </div>
                        </div>
                        <div class="recent-article-content">
                            <div class="recent-article-meta">
                                <div class="publish-area">
                                    <a href="{{ route('blogs.index') }}"><span>02</span>March</a>
                                </div>
                                <ul>
                                    <li><a href="{{ route('blogs.index') }}"><img src="{{ asset('frontend') }}/images/icon/comment.svg"
                                                alt>03
                                            Comments</a></li>
                                    <li><a href="{{ route('blogs.index') }}"><img src="{{ asset('frontend') }}/images/icon/user.svg"
                                                alt>Mr. Jack
                                            Frank</a></li>
                                </ul>
                            </div>
                            <h4><a href="{{ route('blogs.show', 1) }}">To Make Your Smartness &amp; Catch
                                    Your Bright Dream.</a></h4>
                            <div class="explore-btn">
                                <a href="{{ route('blogs.show', 1) }}"><span><img
                                            src="{{ asset('frontend') }}/images/icon/explore-elliose.svg" alt></span>
                                    Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mb-20">
                    <div class="recent-article-wrap">
                        <div class="recent-article-img">
                            <img class="img-fluid" src="{{ asset('frontend') }}/images/blog/blog-img-02.png" alt>
                            <div class="publish-area d-xl-none d-flex">
                                <a href="{{ route('blogs.index') }}"><span>04</span>March</a>
                            </div>
                        </div>
                        <div class="recent-article-content">
                            <div class="recent-article-meta">
                                <div class="publish-area">
                                    <a href="{{ route('blogs.index') }}"><span>04</span>March</a>
                                </div>
                                <ul>
                                    <li><a href="{{ route('blogs.index') }}"><img src="{{ asset('frontend') }}/images/icon/comment.svg"
                                                alt>11
                                            Comments</a></li>
                                    <li><a href="{{ route('blogs.index') }}"><img src="{{ asset('frontend') }}/images/icon/user.svg"
                                                alt>Mr. Jack
                                            Frank</a></li>
                                </ul>
                            </div>
                            <h4><a href="{{ route('blogs.show', 1) }}">Be Confident Your Dream & Struggle
                                    About Your Bright Dream.</a></h4>
                            <div class="explore-btn">
                                <a href="{{ route('blogs.show', 1) }}"><span><img
                                            src="{{ asset('frontend') }}/images/icon/explore-elliose.svg" alt></span>
                                    Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mb-20">
                    <div class="recent-article-wrap">
                        <div class="recent-article-img">
                            <img class="img-fluid" src="{{ asset('frontend') }}/images/blog/blog-img-03.png" alt>
                            <div class="publish-area d-xl-none d-flex">
                                <a href="{{ route('blogs.index') }}"><span>05</span>March</a>
                            </div>
                        </div>
                        <div class="recent-article-content">
                            <div class="recent-article-meta">
                                <div class="publish-area">
                                    <a href="{{ route('blogs.index') }}"><span>05</span>March</a>
                                </div>
                                <ul>
                                    <li><a href="{{ route('blogs.index') }}"><img src="{{ asset('frontend') }}/images/icon/comment.svg"
                                                alt>02
                                            Comments</a></li>
                                    <li><a href="{{ route('blogs.index') }}"><img src="{{ asset('frontend') }}/images/icon/user.svg"
                                                alt>Mr. Jack
                                            Frank</a></li>
                                </ul>
                            </div>
                            <h4><a href="{{ route('blogs.show', 1) }}">How To Be Confident When Your Job Viva In Online,
                                    You Get To
                                    Know.</a></h4>
                            <div class="explore-btn">
                                <a href="{{ route('blogs.show', 1) }}"><span><img
                                            src="{{ asset('frontend') }}/images/icon/explore-elliose.svg" alt></span>
                                    Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mb-20">
                    <div class="recent-article-wrap">
                        <div class="recent-article-img">
                            <img class="img-fluid" src="{{ asset('frontend') }}/images/blog/blog-img-04.png" alt>
                            <div class="publish-area d-xl-none d-flex">
                                <a href="{{ route('blogs.index') }}"><span>08</span>April</a>
                            </div>
                        </div>
                        <div class="recent-article-content">
                            <div class="recent-article-meta">
                                <div class="publish-area">
                                    <a href="{{ route('blogs.index') }}"><span>08</span>April</a>
                                </div>
                                <ul>
                                    <li><a href="{{ route('blogs.index') }}"><img src="{{ asset('frontend') }}/images/icon/comment.svg"
                                                alt>12
                                            Comments</a></li>
                                    <li><a href="{{ route('blogs.index') }}"><img src="{{ asset('frontend') }}/images/icon/user.svg"
                                                alt>Mr. Jack
                                            Frank</a></li>
                                </ul>
                            </div>
                            <h4><a href="{{ route('blogs.show', 1) }}">To Find Out Your Job Location With Discussion Among
                                    Others.</a></h4>
                            <div class="explore-btn">
                                <a href="{{ route('blogs.show', 1) }}"><span><img
                                            src="{{ asset('frontend') }}/images/icon/explore-elliose.svg" alt></span>
                                    Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mb-20">
                    <div class="recent-article-wrap">
                        <div class="recent-article-img">
                            <img class="img-fluid" src="{{ asset('frontend') }}/images/blog/blog-img-05.png" alt>
                            <div class="publish-area d-xl-none d-flex">
                                <a href="{{ route('blogs.index') }}"><span>11</span>August</a>
                            </div>
                        </div>
                        <div class="recent-article-content">
                            <div class="recent-article-meta">
                                <div class="publish-area">
                                    <a href="{{ route('blogs.index') }}"><span>11</span>August</a>
                                </div>
                                <ul>
                                    <li><a href="{{ route('blogs.index') }}"><img
                                                src="{{ asset('frontend') }}/images/icon/comment.svg" alt>22
                                            Comments</a></li>
                                    <li><a href="{{ route('blogs.index') }}"><img src="{{ asset('frontend') }}/images/icon/user.svg"
                                                alt>Mr. Jack
                                            Frank</a></li>
                                </ul>
                            </div>
                            <h4><a href="{{ route('blogs.show', 1) }}">Be Awareness Your Job Interviewing & Be Punctual
                                    Your
                                    Time.</a></h4>
                            <div class="explore-btn">
                                <a href="{{ route('blogs.show', 1) }}"><span><img
                                            src="{{ asset('frontend') }}/images/icon/explore-elliose.svg" alt></span>
                                    Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mb-20">
                    <div class="recent-article-wrap">
                        <div class="recent-article-img">
                            <img class="img-fluid" src="{{ asset('frontend') }}/images/blog/blog-img-06.png" alt>
                            <div class="publish-area d-xl-none d-flex">
                                <a href="{{ route('blogs.index') }}"><span>12</span>June</a>
                            </div>
                        </div>
                        <div class="recent-article-content">
                            <div class="recent-article-meta">
                                <div class="publish-area">
                                    <a href="{{ route('blogs.index') }}"><span>12</span>June</a>
                                </div>
                                <ul>
                                    <li><a href="{{ route('blogs.index') }}"><img
                                                src="{{ asset('frontend') }}/images/icon/comment.svg" alt>07
                                            Comments</a></li>
                                    <li><a href="{{ route('blogs.index') }}"><img src="{{ asset('frontend') }}/images/icon/user.svg"
                                                alt>Mr. Jack
                                            Frank</a></li>
                                </ul>
                            </div>
                            <h4><a href="{{ route('blogs.show', 1) }}">How To Improve Your Interview Question & Easy
                                    Answering Step
                                    By Step. </a></h4>
                            <div class="explore-btn">
                                <a href="{{ route('blogs.show', 1) }}"><span><img
                                            src="{{ asset('frontend') }}/images/icon/explore-elliose.svg" alt></span>
                                    Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center pt-20">
                    <div class="pagination-area">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"></a>
                                </li>
                                <li class="page-item active" aria-current="page"><a class="page-link"
                                        href="#">01</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
