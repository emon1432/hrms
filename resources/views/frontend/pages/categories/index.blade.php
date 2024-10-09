@extends('frontend.layouts.master')
@section('content')
    <div class="inner-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content text-center">
                        <h1>Job Category</h1>
                        <span></span>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Job Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="category-listing-area pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4">
                <div class="col-lg-12">
                    <div class="row g-4 mb-25">
                        <div class="col-md-6 d-flex align-items-center">
                            <p class="show-item">Showing results 10 in 200 jobs list</p>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-md-end">
                            <form>
                                <div class="form-inner">
                                    <input type="text" placeholder="Search..">
                                    <button class="primary-btn-2" type="submit"><img
                                            src="{{asset('frontend')}}/images/icon/search-category.svg" alt></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div
                        class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 cf justify-content-center mb-70">
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/account-finance.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>01</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Account &amp; Finance</a></h5>
                                    <p>Job Available: <span>44</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/technology.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>02</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Technology</a></h5>
                                    <p>Job Available: <span>04</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/medical.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>03</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Medical &amp; Nurse</a></h5>
                                    <p>Job Available: <span>33</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/marketing.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>04</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Marketing &amp; Sales</a></h5>
                                    <p>Job Available: <span>56</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/design-job.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>05</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Design Jobs</a></h5>
                                    <p>Job Available: <span>18 </span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/transportation.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>06</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Transportation</a></h5>
                                    <p>Job Available: <span>97</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/devlopment.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>07</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Development</a></h5>
                                    <p>Job Available: <span>67</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/receotionist.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>08</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Receptionist Job</a></h5>
                                    <p>Job Available: <span>55</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/non-profit-org.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>09</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Non-Profit Orag.</a></h5>
                                    <p>Job Available: <span>05</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/architect.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>10</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Architect Jobs</a></h5>
                                    <p>Job Available: <span>20</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/civil.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>11</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Civil Engineering</a></h5>
                                    <p>Job Available: <span>44</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/electrician.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>12</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Electrician/ Repair</a></h5>
                                    <p>Job Available: <span>04</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/mechanical.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>13</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Mechanical Engg.</a></h5>
                                    <p>Job Available: <span>33</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/insurance.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>14</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Insurance Jobs</a></h5>
                                    <p>Job Available: <span>56</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/design-job.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>15</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Web Applications</a></h5>
                                    <p>Job Available: <span>18</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/education.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>16</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Education</a></h5>
                                    <p>Job Available: <span>97</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/administration.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>17</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Administration</a></h5>
                                    <p>Job Available: <span>67</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/pharmaceutucals.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>18</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Pharmaceuticals</a></h5>
                                    <p>Job Available: <span>55</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/education.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>19</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Diploma Jobs</a></h5>
                                    <p>Job Available: <span>05</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-category">
                                <div class="category-top">
                                    <div class="icon">
                                        <img src="{{asset('frontend')}}/images/icon/car-driving.svg" alt>
                                    </div>
                                    <div class="sl-no">
                                        <h6>20</h6>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h5><a href="{{ route('jobs.index') }}">Car Driving</a></h5>
                                    <p>Job Available: <span>20</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="pagination-area">
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#"
                                                tabindex="-1"></a>
                                        </li>
                                        <li class="page-item active" aria-current="page"><a class="page-link"
                                                href="#">01</a></li>
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
        </div>
    </div>
@endsection
