@extends('frontend.pages.candidate.layouts.index')
@section('candidate-content')
    <div class="dashboard-inner">
        <div class="author-area">
            <div class="author-img">
                <img src="{{ imageShow(auth()->user()->candidate->image) }}"
                    alt="{{ auth()->user()->candidate->first_name }}">
            </div>
            <div class="author-content">
                <span>Hello, I’m</span>
                <h4>{{ auth()->user()->candidate->first_name }} {{ auth()->user()->candidate->last_name }}</h4>
            </div>
        </div>
        <div class="table-wrapper">
            <h5 class="title">Current Applied Jobs:</h5>
            <div class="scroll-table">
                <table class="eg-table table category-table mb-0">
                    <thead>
                        <tr>
                            <th>Job Tittle</th>
                            <th>Apply Date</th>
                            <th>Company</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="{{ asset('frontend') }}/images/bg/company-logo/company-06.png" alt>
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="job-details.html">Senior UI/UX Designer</a>
                                            </h6>
                                            <span><img src="{{ asset('frontend') }}/images/icon/calender2.svg" alt> 1
                                                days ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="{{ asset('frontend') }}/images/icon/location.svg" alt>New-York,
                                                USA</li>
                                            <li>
                                                <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                <p><span class="title">Salary:</span> $60-$90 / <span class="time">Per
                                                        Hour</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Apply Job">03/07/2022</td>
                            <td data-label="Company"><a class="view-btn" href="company-details.html">Tech.Bath Com... </a>
                            </td>
                            <td data-label="Status"><button class="eg-btn purple-btn">Viewed</button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="{{ asset('frontend') }}/images/bg/company-logo/company-02.png" alt>
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="job-details.html">React JS Developer</a></h6>
                                            <span><img src="{{ asset('frontend') }}/images/icon/calender2.svg" alt> 1
                                                days ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="{{ asset('frontend') }}/images/icon/location.svg" alt>Dhaka,
                                                Bangladesh</li>
                                            <li>
                                                <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                <p><span class="title">Salary:</span> $80-$100 / <span class="time">Per
                                                        Hour</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Apply Job">07/07/2022</td>
                            <td data-label="Company"><a class="view-btn" href="company-details.html">Gangster Group</a></td>
                            <td data-label="Status"><button class="eg-btn yellow-btn">Interview</button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="{{ asset('frontend') }}/images/bg/company-logo/company-03.png" alt>
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="job-details.html">WordPress Developer</a></h6>
                                            <span><img src="{{ asset('frontend') }}/images/icon/calender2.svg" alt> 2
                                                days ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="{{ asset('frontend') }}/images/icon/location.svg" alt>West
                                                London, UK</li>
                                            <li>
                                                <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                <p><span class="title">Salary:</span> $30K-$40K / <span
                                                        class="time">Monthly</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Apply Job">10/07/2022</td>
                            <td data-label="Company"><a class="view-btn" href="company-details.html">Zoomly.Co Ltd</a></td>
                            <td data-label="Status"><button class="eg-btn orenge-btn">Canceled</button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="{{ asset('frontend') }}/images/bg/company-logo/company-04.png" alt>
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="job-details.html">Mern-Stack Developer</a></h6>
                                            <span><img src="{{ asset('frontend') }}/images/icon/calender2.svg" alt> 1
                                                week ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="{{ asset('frontend') }}/images/icon/location.svg" alt>New-York,
                                                USA</li>
                                            <li>
                                                <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                <p><span class="title">Salary:</span> $20-$50 / <span class="time">Per
                                                        Hour</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Apply Job">13/07/2022</td>
                            <td data-label="Company"><a class="view-btn" href="company-details.html">Marko-land Ltd</a>
                            </td>
                            <td data-label="Status"><button class="eg-btn purple-btn">Viewed</button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="{{ asset('frontend') }}/images/bg/company-logo/company-05.png" alt>
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="job-details.html">PHP Developer</a></h6>
                                            <span><img src="{{ asset('frontend') }}/images/icon/calender2.svg" alt> 2
                                                week ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="{{ asset('frontend') }}/images/icon/location.svg" alt>New-York,
                                                USA</li>
                                            <li>
                                                <img src="{{ asset('frontend') }}/images/icon/arrow2.svg" alt>
                                                <p><span class="title">Salary:</span> $40K-$60K / <span class="time">Per
                                                        Month</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Apply Job">18/08/2022</td>
                            <td data-label="Company"><a class="view-btn" href="company-details.html">Bistro.Tech
                                    Group</a></td>
                            <td data-label="Status"><button class="eg-btn green-btn">Success</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
