@extends('frontend.layouts.master')
@section('content')
    <div class="inner-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content text-center">
                        <h1>Company Details</h1>
                        <span></span>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Company Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="company-details-area pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-thumb">
                        <img class="img-fluid" src="{{asset('frontend')}}/images/bg/blog-dt-img.png" alt>
                        <div class="company-logo">
                            <img src="{{asset('frontend')}}/images/bg/blog-dt-logo.png" alt>
                        </div>
                    </div>
                    <div class="company-area">
                        <div class="company-info">
                            <h4>Elite Hangstroman</h4>
                            <ul>
                                <li><img src="{{asset('frontend')}}/images/icon/map-2.svg" alt> Dhaka, Bangladesh</li>
                                <li><img src="{{asset('frontend')}}/images/icon/category-2.svg" alt><span class="title">Category:
                                    </span> Software Agency</li>
                            </ul>
                        </div>
                        <div class="company-contact">
                            <div class="websitet-link">
                                <p><img src="{{asset('frontend')}}/images/icon/web-5.svg" alt>Website Link:</p>
                                <a href="#">www.example24.com</a>
                            </div>
                            <div class="social-area">
                                <p><img src="{{asset('frontend')}}/images/icon/share-icon.svg" alt>Follow Company:</p>
                                <ul>
                                    <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="company-details-content">
                                <h5>About Company</h5>
                                <p>A software company is a business that develops and sells computer software. Some
                                    software companies specialize in a particular type of software, such as operating
                                    systems, productivity tools, or games, while others develop a range of software
                                    products. Many software companies also offer services such as custom software
                                    development, consulting, and technical support to their customers. The size and
                                    scope of software companies can vary greatly, from small startups to large
                                    multinational corporations.</p>
                                <br><br>
                                {{-- <h5>Working Area</h5>
                                <div class="row pt-20">
                                    <div class="col-sm-6 mb-50">
                                        <div class="working-process">
                                            <div class="icon">
                                                <img src="{{asset('frontend')}}/images/icon/creative-design.svg" alt>
                                            </div>
                                            <div class="work-content">
                                                <div class="sl">01</div>
                                                <h6>Creative Design</h6>
                                                <p>Creative design is a process that involves creating.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-50">
                                        <div class="working-process">
                                            <div class="icon">
                                                <img src="{{asset('frontend')}}/images/icon/react-next.svg" alt>
                                            </div>
                                            <div class="work-content">
                                                <div class="sl">02</div>
                                                <h6>React Next.JS</h6>
                                                <p>Creative design is a process that involves creating.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-50">
                                        <div class="working-process">
                                            <div class="icon">
                                                <img src="{{asset('frontend')}}/images/icon/html-tem.svg" alt>
                                            </div>
                                            <div class="work-content">
                                                <div class="sl">03</div>
                                                <h6>HTML Template</h6>
                                                <p>Creative design is a process that involves creating.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-50">
                                        <div class="working-process">
                                            <div class="icon">
                                                <img src="{{asset('frontend')}}/images/icon/wordpress.svg" alt>
                                            </div>
                                            <div class="work-content">
                                                <div class="sl">04</div>
                                                <h6>WordPress</h6>
                                                <p>Creative design is a process that involves creating.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="company-dt-sb mb-60">
                                <div class="company-overview-area mb-50">
                                    <h5>Company Overview:</h5>
                                    <ul>
                                        <li><span>Company Name:</span> Elite Hangstroman.</li>
                                        <li><span>Category:</span> Software Agency.</li>
                                        <li><span>Location:</span> Dhaka, Bangladesh.</li>
                                        <li><span>Member Since:</span> 03 April, 1982.</li>
                                        <li><span>Company size:</span> 40 People.</li>
                                        <li><span>Completed Job:</span> 08.</li>
                                        <li><span>Last Job Posted:</span> 06 January, 2023.</li>
                                    </ul>
                                </div>
                                <a class="primary-btn-2 lg-btn" href="{{ route('jobs.index') }}">Job Available 23</a>
                                {{-- <a class="primary-btn-1 lg-btn"
                                    href="https://www.google.com/maps/place/Egens+Lab/@23.8340712,90.3634979,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c14c8682a473:0xa6c74743d52adb88!8m2!3d23.8340663!4d90.3656866">Go
                                    Our Site Map</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>Latest Jobs:</h4>
                    </div>
                    <div class="col-lg-12 mb-30">
                        <div class="job-listing-card">
                            <div class="job-top">
                                <div class="job-list-content">
                                    <div class="company-area">
                                        <div class="logo">
                                            <img src="{{asset('frontend')}}/images/bg/company-logo/company-01.png" alt>
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="{{ route('jobs.show', 1) }}">Senior Receptionist</a></h5>
                                                <p><a href="{{ route('companies.show', 1) }}">Medico.co Ltd</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-discription">
                                        <ul>
                                            <li>
                                                <p><span class="title">Location:</span> Dhaka, Bangladesh</p>
                                            </li>
                                            <li>
                                                <p><span class="title">Salary:</span> $20K-$50K / <span class="time">Per
                                                        Month</span></p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <p><span class="title">Experience:</span> 1.5-2 Years</p>
                                            </li>
                                            <li>
                                                <p><span class="title">Published:</span> 05 April, 2023</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bookmark">
                                    <i class="bi bi-bookmark-fill"></i>
                                </div>
                            </div>
                            <div class="job-type-apply">
                                <p><img src="{{asset('frontend')}}/images/icon/company-4.svg" alt> Job Applied: <span> 07 Person</span>
                                </p>
                                <div class="job-type">
                                    <span class="light-yellow">Full Time</span>
                                    <span class="light-purple">Part Time</span>
                                    <span class="light-blue">Remote</span>
                                </div>
                                <div class="apply-btn">
                                    <a href="{{ route('jobs.show', 1) }}"><span><img src="{{asset('frontend')}}/images/icon/apply-ellipse.svg"
                                                alt></span>Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-30">
                        <div class="job-listing-card">
                            <div class="job-top">
                                <div class="job-list-content">
                                    <div class="company-area">
                                        <div class="logo">
                                            <img src="{{asset('frontend')}}/images/bg/company-logo/company-02.png" alt>
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="{{ route('jobs.show', 1) }}">Senior PHP Developer</a></h5>
                                                <p><a href="{{ route('companies.show', 1) }}">Marko Land Conpany</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-discription">
                                        <ul>
                                            <li>
                                                <p><span class="title">Location:</span> Chicago, Australia</p>
                                            </li>
                                            <li>
                                                <p><span class="title">Salary:</span> $50K-$70K / <span
                                                        class="time">Per
                                                        Month</span></p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <p><span class="title">Experience:</span> 3-4 Years</p>
                                            </li>
                                            <li>
                                                <p><span class="title">Published:</span> 08 April, 2023</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bookmark">
                                    <i class="bi bi-bookmark-fill"></i>
                                </div>
                            </div>
                            <div class="job-type-apply">
                                <p><img src="{{asset('frontend')}}/images/icon/company-4.svg" alt> Job Applied: <span> 05 Person</span>
                                </p>
                                <div class="job-type">
                                    <span class="light-yellow">Full Time</span>
                                    <span class="light-purple">Part Time</span>
                                </div>
                                <div class="apply-btn">
                                    <a href="{{ route('jobs.show', 1) }}"><span><img src="{{asset('frontend')}}/images/icon/apply-ellipse.svg"
                                                alt></span>Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-30">
                        <div class="job-listing-card">
                            <div class="job-top">
                                <div class="job-list-content">
                                    <div class="company-area">
                                        <div class="logo">
                                            <img src="{{asset('frontend')}}/images/bg/company-logo/company-03.png" alt>
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="{{ route('jobs.show', 1) }}">Junior React Developer</a></h5>
                                                <p><a href="{{ route('companies.show', 1) }}">UI.UX Company</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-discription">
                                        <ul>
                                            <li>
                                                <p><span class="title">Location:</span> Dhaka, Bangladesh</p>
                                            </li>
                                            <li>
                                                <p><span class="title">Salary:</span> $20K-$50K / <span
                                                        class="time">Per
                                                        Month</span></p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <p><span class="title">Experience:</span> 1.5-2 Years</p>
                                            </li>
                                            <li>
                                                <p><span class="title">Published:</span> 08 April, 2023</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bookmark">
                                    <i class="bi bi-bookmark-fill"></i>
                                </div>
                            </div>
                            <div class="job-type-apply">
                                <p><img src="{{asset('frontend')}}/images/icon/company-4.svg" alt> Job Applied: <span> 06 Person</span>
                                </p>
                                <div class="job-type">
                                    <span class="light-purple">Part Time</span>
                                </div>
                                <div class="apply-btn">
                                    <a href="{{ route('jobs.show', 1) }}"><span><img src="{{asset('frontend')}}/images/icon/apply-ellipse.svg"
                                                alt></span>Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-60">
                        <div class="job-listing-card">
                            <div class="job-top">
                                <div class="job-list-content">
                                    <div class="company-area">
                                        <div class="logo">
                                            <img src="{{asset('frontend')}}/images/bg/company-logo/company-04.png" alt>
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="{{ route('jobs.show', 1) }}">Senior React Developer</a></h5>
                                                <p><a href="{{ route('companies.show', 1) }}">UI.UX Company</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-discription">
                                        <ul>
                                            <li>
                                                <p><span class="title">Location:</span> Dhaka, Bangladesh</p>
                                            </li>
                                            <li>
                                                <p><span class="title">Salary:</span> $20K-$50K / <span
                                                        class="time">Per
                                                        Month</span></p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <p><span class="title">Experience:</span> 2.5-5 Years</p>
                                            </li>
                                            <li>
                                                <p><span class="title">Published:</span> 08 April, 2023</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bookmark">
                                    <i class="bi bi-bookmark-fill"></i>
                                </div>
                            </div>
                            <div class="job-type-apply">
                                <p><img src="{{asset('frontend')}}/images/icon/company-4.svg" alt> Job Applied: <span> 08 Person</span>
                                </p>
                                <div class="job-type">
                                    <span class="light-yellow">Full Time</span>
                                    <span class="light-purple">Part Time</span>
                                    <span class="light-blue">Remote</span>
                                </div>
                                <div class="apply-btn">
                                    <a href="{{ route('jobs.show', 1) }}"><span><img src="{{asset('frontend')}}/images/icon/apply-ellipse.svg"
                                                alt></span>Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
