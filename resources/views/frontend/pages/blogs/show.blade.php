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


<div class="blog-details-area pt-120 mb-120">
    <div class="container">
        <div class="row g-lg-4 gy-5 justify-content-center">
            <div class="col-lg-8">
                <div class="blog-details-wrap">
                    <div class="recent-article-img">
                        <img class="img-fluid" src="{{asset('frontend')}}/images/blog/blog-dt-img.png" alt>
                        <div class="publish-area d-xl-none d-flex">
                            <a href="#"><span>12</span>June</a>
                        </div>
                    </div>
                    <div class="recent-article-content">
                        <div class="recent-article-meta">
                            <div class="publish-area">
                                <a href="#"><span>12</span>June</a>
                            </div>
                            <ul>
                                <li><a href="#"><img src="{{asset('frontend')}}/images/icon/comment.svg" alt>07 Comments</a>
                                </li>
                                <li><a href="#"><img src="{{asset('frontend')}}/images/icon/user.svg" alt>Mr. Rakhab</a></li>
                            </ul>
                        </div>
                        <h2>How To Improve Your Interview Question & Easy Answering Step By Step. </h2>
                        <div class="for-devider"></div>
                        <p><span>A</span> n interview blog is a type of blog that focuses on conducting and
                            publishing interviews with experts, thought leaders, or individuals with unique
                            experiences or perspectives. Interview blogs can cover a wide range of topics and
                            industries, and are often used to share insights, advice, and personal stories with a
                            wider audience. It's important to have a consistent and engaging style to post, and also
                            consider the audience you are writing for, in terms of language and technical terms
                            used.</p>
                        <h4>How To Improve Your Job Interview </h4>
                        <ul class="interview-trips">
                            <li>
                                <div class="icon"><img src="{{asset('frontend')}}/images/icon/check-icon.svg" alt></div>
                                <p><span>Prepare for the interview:</span> Research the company and the position you
                                    are applying for, as well as the person you will be interviewing with. Prepare a
                                    list of questions you would like to interview.</p>
                            </li>
                            <li>
                                <div class="icon"><img src="{{asset('frontend')}}/images/icon/check-icon.svg" alt></div>
                                <p><span>Dress professionally:</span> Make sure you are dressed appropriately for
                                    the interview. Business attire is usually the best option.</p>
                            </li>
                            <li>
                                <div class="icon"><img src="{{asset('frontend')}}/images/icon/check-icon.svg" alt></div>
                                <p><span>Arrive on time:</span> It is important to arrive at the interview on time.
                                    If you are running late, be sure to call and let the interviewer know.</p>
                            </li>
                            <li>
                                <div class="icon"><img src="{{asset('frontend')}}/images/icon/check-icon.svg" alt></div>
                                <p><span>Greet the interviewer:</span> Shake hands with the interviewer and
                                    introduce yourself. Make sure to use their name and to maintain eye contact.</p>
                            </li>
                        </ul>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="blog-dt-img">
                                    <img class="img-fluid" src="{{asset('frontend')}}/images/blog/blog-dt-img2.png" alt>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blog-dt-img">
                                    <img class="img-fluid" src="{{asset('frontend')}}/images/blog/blog-dt-img3.png" alt>
                                </div>
                            </div>
                        </div>
                        <div class="blog-tag-social-area">
                            <div class="bolg-tag">
                                <h6>Tag:</h6>
                                <ul>
                                    <li><a href="{{ route('blogs.index') }}">Job,</a></li>
                                    <li><a href="{{ route('blogs.index') }}">Career,</a></li>
                                    <li><a href="{{ route('blogs.index') }}">UI/UX Design,</a></li>
                                    <li><a href="{{ route('blogs.index') }}">Job Research</a></li>
                                </ul>
                            </div>
                            <div class="social-area">
                                <h6>Share:</h6>
                                <ul class="social-link d-flex align-items-center">
                                    <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="https://www.pinterest.com/"><i class="bx bxl-linkedin"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="next-prev-pages-area mb-120">
                    <div class="previous-area next-area">
                        <a href="{{ route('blogs.show', 1) }}">
                            <div class="icon">
                                <svg width="9" height="16" viewBox="0 0 9 16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.63732 -9.53674e-07V-9.53674e-07C8.39992 0.798807 8.39992 2.05596 7.63732 2.85477L2.72535 8L7.63732 13.1452C8.39992 13.944 8.39992 15.2012 7.63732 16V16L0 8L7.63732 -9.53674e-07Z" />
                                </svg>
                            </div>
                            <div class="btn-wrap">
                                <img src="{{asset('frontend')}}/images/blog/blog-prev-img.png" alt><span>Previous Post</span>
                            </div>
                        </a>
                    </div>
                    <div class="previous-area next-area two">
                        <a href="{{ route('blogs.show', 1) }}">
                            <div class="btn-wrap">
                                <span>Next Post</span><img src="{{asset('frontend')}}/images/blog/blog-prev-img.png" alt>
                            </div>
                            <div class="icon">
                                <svg width="9" height="16" viewBox="0 0 9 16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.36268 16C0.600082 15.2012 0.600083 13.944 1.36268 13.1452L6.27465 8L1.36268 2.85477C0.600083 2.05597 0.600082 0.798808 1.36268 0L9 8L1.36268 16Z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="post-comment-area mb-120">
                    <div class="post-title">
                        <h5>02 Comments:</h5>
                    </div>
                    <ul>
                        <li>
                            <div class="single-comment-area">
                                <div class="author-img">
                                    <img src="{{asset('frontend')}}/images/blog/comment-author1.png" alt>
                                </div>
                                <div class="comment-content">
                                    <div class="author-details">
                                        <div class="author-name-deg">
                                            <h6>Loiuse Brown,</h6>
                                            <span><img src="{{asset('frontend')}}/images/icon/calender2.svg" alt>03 August,
                                                2023</span>
                                        </div>
                                        <div class="date-reply-btn">
                                            <div class="replay-btn">
                                                <a href="#">
                                                    <svg width="13" height="10" viewBox="0 0 13 10"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.05954 1.01052C5.08146 1.00079 5.10546 0.996778 5.12932 0.99884C5.15318 1.0009 5.17615 1.00897 5.19611 1.02232C5.21606 1.03566 5.23237 1.05384 5.24354 1.07519C5.2547 1.09655 5.26036 1.12039 5.25999 1.14452V2.29752C5.25999 2.43013 5.31227 2.5573 5.40532 2.65107C5.49837 2.74484 5.62457 2.79752 5.75616 2.79752C6.41804 2.79752 7.75372 2.80252 9.03085 3.61952C10.0073 4.24352 11.0056 5.37952 11.6059 7.49552C10.5938 6.51252 9.43771 5.97952 8.42553 5.69652C7.80338 5.52336 7.164 5.42072 6.51926 5.39052C6.25535 5.37884 5.99101 5.38151 5.72738 5.39852H5.71448L5.70952 5.39952H5.70853L5.75616 5.89752L5.70654 5.39952C5.58407 5.41192 5.47055 5.46976 5.38802 5.56179C5.3055 5.65382 5.25987 5.77348 5.25999 5.89752V7.05052C5.25999 7.15852 5.15084 7.22652 5.05954 7.18452L1.1061 4.25152C1.09268 4.24149 1.07877 4.23214 1.06442 4.22352C1.04284 4.21045 1.02499 4.19198 1.01259 4.1699C1.0002 4.14782 0.993682 4.12289 0.993682 4.09752C0.993682 4.07215 1.0002 4.04721 1.01259 4.02513C1.02499 4.00305 1.04284 3.98458 1.06442 3.97152C1.07877 3.9629 1.09268 3.95356 1.1061 3.94352L5.05954 1.01052ZM6.25232 6.38352C6.3198 6.38352 6.39423 6.38652 6.47361 6.38952C6.90429 6.40952 7.49968 6.47552 8.16058 6.66052C9.47641 7.02852 11.0344 7.86252 12.0704 9.74052C12.1264 9.84189 12.2157 9.92047 12.3229 9.96279C12.4301 10.0051 12.5486 10.0085 12.658 9.97249C12.7674 9.93643 12.861 9.86314 12.9227 9.76518C12.9844 9.66721 13.0104 9.55066 12.9962 9.43552C12.5358 5.72552 11.1247 3.77352 9.56274 2.77552C8.32729 1.98552 7.05512 1.83352 6.25232 1.80452V1.14452C6.25242 0.938586 6.19735 0.736448 6.09293 0.559432C5.9885 0.382415 5.8386 0.237085 5.65904 0.138776C5.47948 0.0404668 5.27691 -0.00717605 5.07272 0.000874744C4.86852 0.00892554 4.67027 0.0723714 4.49888 0.184518L0.535507 3.12452C0.371653 3.22759 0.236523 3.37098 0.14284 3.5412C0.0491559 3.71142 0 3.90287 0 4.09752C0 4.29217 0.0491559 4.48361 0.14284 4.65383C0.236523 4.82405 0.371653 4.96745 0.535507 5.07052L4.49888 8.01052C4.67027 8.12266 4.86852 8.18611 5.07272 8.19416C5.27691 8.20221 5.47948 8.15457 5.65904 8.05626C5.8386 7.95795 5.9885 7.81262 6.09293 7.6356C6.19735 7.45859 6.25242 7.25645 6.25232 7.05052V6.38352Z" />
                                                    </svg>
                                                    Reply
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>“Authentic reviews help companies to build a relationship with customers by
                                        providing a transparent representation of their product or service”.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-comment-area">
                                <div class="author-img">
                                    <img src="{{asset('frontend')}}/images/blog/comment-author2.png" alt>
                                </div>
                                <div class="comment-content">
                                    <div class="author-details">
                                        <div class="author-name-deg">
                                            <h6>Macoline Farray, </h6>
                                            <span><img src="{{asset('frontend')}}/images/icon/calender2.svg" alt>11 July,
                                                2023</span>
                                        </div>
                                        <div class="date-reply-btn">
                                            <div class="replay-btn">
                                                <a href="#">
                                                    <svg width="13" height="10" viewBox="0 0 13 10"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.05954 1.01052C5.08146 1.00079 5.10546 0.996778 5.12932 0.99884C5.15318 1.0009 5.17615 1.00897 5.19611 1.02232C5.21606 1.03566 5.23237 1.05384 5.24354 1.07519C5.2547 1.09655 5.26036 1.12039 5.25999 1.14452V2.29752C5.25999 2.43013 5.31227 2.5573 5.40532 2.65107C5.49837 2.74484 5.62457 2.79752 5.75616 2.79752C6.41804 2.79752 7.75372 2.80252 9.03085 3.61952C10.0073 4.24352 11.0056 5.37952 11.6059 7.49552C10.5938 6.51252 9.43771 5.97952 8.42553 5.69652C7.80338 5.52336 7.164 5.42072 6.51926 5.39052C6.25535 5.37884 5.99101 5.38151 5.72738 5.39852H5.71448L5.70952 5.39952H5.70853L5.75616 5.89752L5.70654 5.39952C5.58407 5.41192 5.47055 5.46976 5.38802 5.56179C5.3055 5.65382 5.25987 5.77348 5.25999 5.89752V7.05052C5.25999 7.15852 5.15084 7.22652 5.05954 7.18452L1.1061 4.25152C1.09268 4.24149 1.07877 4.23214 1.06442 4.22352C1.04284 4.21045 1.02499 4.19198 1.01259 4.1699C1.0002 4.14782 0.993682 4.12289 0.993682 4.09752C0.993682 4.07215 1.0002 4.04721 1.01259 4.02513C1.02499 4.00305 1.04284 3.98458 1.06442 3.97152C1.07877 3.9629 1.09268 3.95356 1.1061 3.94352L5.05954 1.01052ZM6.25232 6.38352C6.3198 6.38352 6.39423 6.38652 6.47361 6.38952C6.90429 6.40952 7.49968 6.47552 8.16058 6.66052C9.47641 7.02852 11.0344 7.86252 12.0704 9.74052C12.1264 9.84189 12.2157 9.92047 12.3229 9.96279C12.4301 10.0051 12.5486 10.0085 12.658 9.97249C12.7674 9.93643 12.861 9.86314 12.9227 9.76518C12.9844 9.66721 13.0104 9.55066 12.9962 9.43552C12.5358 5.72552 11.1247 3.77352 9.56274 2.77552C8.32729 1.98552 7.05512 1.83352 6.25232 1.80452V1.14452C6.25242 0.938586 6.19735 0.736448 6.09293 0.559432C5.9885 0.382415 5.8386 0.237085 5.65904 0.138776C5.47948 0.0404668 5.27691 -0.00717605 5.07272 0.000874744C4.86852 0.00892554 4.67027 0.0723714 4.49888 0.184518L0.535507 3.12452C0.371653 3.22759 0.236523 3.37098 0.14284 3.5412C0.0491559 3.71142 0 3.90287 0 4.09752C0 4.29217 0.0491559 4.48361 0.14284 4.65383C0.236523 4.82405 0.371653 4.96745 0.535507 5.07052L4.49888 8.01052C4.67027 8.12266 4.86852 8.18611 5.07272 8.19416C5.27691 8.20221 5.47948 8.15457 5.65904 8.05626C5.8386 7.95795 5.9885 7.81262 6.09293 7.6356C6.19735 7.45859 6.25242 7.25645 6.25232 7.05052V6.38352Z" />
                                                    </svg>
                                                    Reply
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>“Authentic reviews help companies to build a relationship with customers by
                                        providing a transparent representation of their product or service”.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="comment-form form-wrapper">
                    <form>
                        <div class="post-title">
                            <h5>Leave A Reply</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-inner mb-25">
                                    <label for="name">Your Name*</label>
                                    <div class="input-area">
                                        <img src="{{asset('frontend')}}/images/icon/user-2.svg" alt>
                                        <input type="text" id="name" name="name" placeholder="Mr. Jackson Mile">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner mb-25">
                                    <label for="email1">Email*</label>
                                    <div class="input-area">
                                        <img src="{{asset('frontend')}}/images/icon/email-2.svg" alt>
                                        <input type="text" id="email1" name="email" placeholder="info@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner mb-40">
                                    <label for="description">Message</label>
                                    <textarea name="description" id="description"
                                        placeholder="Message..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <button class="primry-btn-2 lg-btn w-unset" type="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="job-sidebar mb-50">
                    <div class="job-widget widget_search mb-20">
                        <form>
                            <div class="wp-block-search__inside-wrapper ">
                                <input type="search" id="wp-block-search__input-1" class="wp-block-search__input"
                                    name="s" value placeholder="Search Here" required>
                                <button type="submit" class="wp-block-search__button">
                                    <svg width="14" height="14" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.10227 0.0713005C1.983 0.760967 -1.22002 5.91264 0.44166 10.7773C1.13596 12.8 2.60323 14.471 4.55652 15.4476C6.38483 16.3595 8.59269 16.5354 10.5737 15.9151C11.4023 15.6559 12.6011 15.0218 13.2121 14.5126L13.3509 14.3969L16.1281 17.1695C19.1413 20.1735 18.9932 20.0531 19.4237 19.9698C19.6505 19.9281 19.9282 19.6504 19.9699 19.4236C20.0532 18.9932 20.1735 19.1413 17.1695 16.128L14.397 13.3509L14.5127 13.212C14.7858 12.8834 15.2394 12.152 15.4755 11.6614C17.0029 8.48153 16.3271 4.74159 13.7814 2.28379C11.9994 0.561935 9.52304 -0.257332 7.10227 0.0713005ZM9.38418 1.59412C11.0135 1.9135 12.4669 2.82534 13.4666 4.15376C14.0591 4.94062 14.4572 5.82469 14.6793 6.83836C14.8136 7.44471 14.8228 8.75925 14.7025 9.34708C14.3507 11.055 13.4713 12.4622 12.1336 13.4666C11.3467 14.059 10.4627 14.4571 9.44898 14.6793C8.80097 14.8228 7.48644 14.8228 6.83843 14.6793C4.78332 14.2303 3.0985 12.9389 2.20054 11.1337C1.75156 10.2312 1.54328 9.43503 1.49699 8.4445C1.36276 5.62566 3.01055 3.05677 5.6535 1.96904C6.10248 1.7839 6.8014 1.59412 7.28741 1.52932C7.74102 1.46452 8.92595 1.50155 9.38418 1.59412Z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="job-widget style-1 mb-20">
                        <div class="check-box-item">
                            <h5 class="job-widget-title">Category</h5>
                            <div class="checkbox-container">
                                <ul>
                                    <li>
                                        <label class="containerss">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="text">Health Care</span>
                                            <span class="qty">(10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="containerss">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="text">Account & Finance</span>
                                            <span class="qty">(05)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="containerss">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="text">Transportation</span>
                                            <span class="qty">(08)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="containerss">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="text">Medical & Finance</span>
                                            <span class="qty">(12)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="containerss">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="text">Development</span>
                                            <span class="qty">(24)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="containerss">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="text">Engineering</span>
                                            <span class="qty">(10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="containerss">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="text">Receptionist</span>
                                            <span class="qty">(20)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="containerss">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="text">Non-Profit Org.</span>
                                            <span class="qty">(03)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="containerss">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="text">Health Care</span>
                                            <span class="qty">(10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="containerss">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="text">Account & Finance</span>
                                            <span class="qty">(05)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="containerss">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="text">Transportation</span>
                                            <span class="qty">(08)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="containerss">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            <span class="text">Medical & Finance</span>
                                            <span class="qty">(12)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="job-widget mb-20">
                        <h5 class="job-widget-title mb-10">Recent Post</h5>
                        <ul class="recent-activitys">
                            <li>
                                <div class="blog-img">
                                    <img src="{{asset('frontend')}}/images/blog/blog-sb-1.png" alt>
                                </div>
                                <div class="content">
                                    <h6><a href="{{ route('blogs.show', 1) }}">To Make Your Smartness & Catch Your Dream.</a>
                                    </h6>
                                    <span><img src="{{asset('frontend')}}/images/icon/calender2.svg" alt> 02 January,
                                        2023</span>
                                </div>
                            </li>
                            <li>
                                <div class="blog-img">
                                    <img src="{{asset('frontend')}}/images/blog/blog-sb-2.png" alt>
                                </div>
                                <div class="content">
                                    <h6><a href="{{ route('blogs.show', 1) }}">Be Awareness Your Job Interviewing &
                                            Punctual.</a></h6>
                                    <span><img src="{{asset('frontend')}}/images/icon/calender2.svg" alt> 03 August, 2022</span>
                                </div>
                            </li>
                            <li>
                                <div class="blog-img">
                                    <img src="{{asset('frontend')}}/images/blog/blog-sb-3.png" alt>
                                </div>
                                <div class="content">
                                    <h6><a href="{{ route('blogs.show', 1) }}">There 20 Tips Of Trending UI/UX Design In
                                            2023.</a></h6>
                                    <span><img src="{{asset('frontend')}}/images/icon/calender2.svg" alt> 02 January,
                                        2023</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="job-widget">
                        <div class="check-box-item">
                            <h5 class="job-widget-title mb-10">Blog Tags</h5>
                            <ul class="tags">
                                <li><a href="{{ route('blogs.index') }}">Technology,</a></li>
                                <li><a href="{{ route('blogs.index') }}">Marketing,</a></li>
                                <li><a href="{{ route('blogs.index') }}">Sales,</a></li>
                                <li><a href="{{ route('blogs.index') }}">Transport,</a></li>
                                <li><a href="{{ route('blogs.index') }}">Medical,</a></li>
                                <li><a href="{{ route('blogs.index') }}">Design,</a></li>
                                <li><a href="{{ route('blogs.index') }}">Data Analyst,</a></li>
                                <li><a href="{{ route('blogs.index') }}">Development,</a></li>
                                <li><a href="{{ route('blogs.index') }}">Non-Profit,</a></li>
                                <li><a href="{{ route('blogs.index') }}">Manager,</a></li>
                                <li><a href="{{ route('blogs.index') }}">Health,</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="job-card">
                    <div class="job-content">
                        <h5>Hey! Do You Looking For Any Jobs?</h5>
                        <p>Job agencies may also offer additional services such as resume building.</p>
                        <div class="find-job-btn">
                            <a class="primry-btn-2 lg-btn " href="{{ route('blogs.show', 1) }}">Find Job</a>
                        </div>
                    </div>
                    <div class="job-img">
                        <img src="{{asset('frontend')}}/images/blog/find-job.png" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
