<header class="header-area style-1">
    <div class="header-main-logo d-lg-block d-none">
        <a href="{{ route('home.index') }}"><img alt="image" src="{{ asset('frontend') }}/images/hrms-logo.png"
                width="180"></a>
    </div>
    <div class="menu-topbar-area">
        <div class="top-bar">
            <p>Welcome Our Job Portal! <a href="bookmark.html">Save Jobs</a></p>
            <div class="top-bar-right">
                <div class="language-select">
                    <img src="{{ asset('frontend') }}/images/icon/flag-eng.svg" alt="image"><span>Language</span>
                    <ul class="topbar-sublist">
                        <li><img src="{{ asset('frontend') }}/images/icon/flag-germeny.svg"
                                alt="image"><span>Germeny</span></li>
                        <li><img src="{{ asset('frontend') }}/images/icon/flag-french.svg"
                                alt="image"><span>French</span></li>
                        <li><img src="{{ asset('frontend') }}/images/icon/flag-bangla.svg"
                                alt="image"><span>Bengali</span></li>
                    </ul>
                </div>
                <div class="social-area">
                    <ul>
                        <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu-area">
            <div class="header-logo">
                <a href="{{ route('home.index') }}"><img alt="image" class="img-fluid"
                        src="{{ asset('frontend') }}/images/hrms-logo.png" width="120"></a>
            </div>
            <div class="main-menu">
                <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                    <div class="mobile-logo-wrap">
                        <a href="{{ route('home.index') }}"><img alt="image"
                                src="{{ asset('frontend') }}/images/hrms-logo.png" width="120"></a>
                    </div>
                    <div class="menu-close-btn">
                        <i class="bi bi-x-lg"></i>
                    </div>
                </div>
                <ul class="menu-list">
                    <li class="{{ request()->routeIs('home.index') ? 'active' : '' }}">
                        <a href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="{{ request()->routeIs('categories.*') ? 'active' : '' }}">
                        <a href="{{ route('categories.index') }}">Categories</a>
                    </li>
                    <li class="{{ request()->routeIs('jobs.*') ? 'active' : '' }}">
                        <a href="{{ route('jobs.index') }}">Find Jobs</a>
                    </li>
                    <li class="{{ request()->routeIs('companies.*') ? 'active' : '' }}">
                        <a href="{{ route('companies.index') }}">Company</a>
                    </li>
                    <li class="{{ request()->routeIs('blogs.*') ? 'active' : '' }}">
                        <a href="{{ route('blogs.index') }}">Blog</a>
                    </li>
                    <li class="{{ request()->routeIs('contact.*') ? 'active' : '' }}">
                        <a href="{{ route('contact.index') }}">Contact</a>
                    </li>
                </ul>
                <div class="for-mobile-menu d-lg-none d-block">
                    <div class="sign-in-btn mb-25">
                        <a class="primary-btn-1 lg-btn" href="{{ route('login') }}">
                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.8033 2.19669C11.3868 0.780144 9.50329 0 7.5 0C5.49671 0 3.61324 0.780144 2.19669 2.19669C0.780144 3.61324 0 5.49671 0 7.5C0 9.50329 0.780144 11.3868 2.19669 12.8033C3.61324 14.2199 5.49671 15 7.5 15C9.50329 15 11.3868 14.2199 12.8033 12.8033C14.2199 11.3868 15 9.50329 15 7.5C15 5.49671 14.2199 3.61324 12.8033 2.19669ZM3.25504 12.5771C3.50269 10.4462 5.33478 8.80096 7.5 8.80096C8.64143 8.80096 9.71478 9.24568 10.5222 10.0529C11.2042 10.7351 11.6344 11.6258 11.7451 12.5769C10.5949 13.5402 9.11407 14.1211 7.5 14.1211C5.88593 14.1211 4.40517 13.5403 3.25504 12.5771ZM7.5 7.89574C6.24401 7.89574 5.22205 6.87378 5.22205 5.61779C5.22205 4.36169 6.24401 3.33984 7.5 3.33984C8.75599 3.33984 9.77795 4.36169 9.77795 5.61779C9.77795 6.87378 8.75599 7.89574 7.5 7.89574ZM12.5015 11.834C12.2776 10.9311 11.8105 10.0985 11.1436 9.43153C10.6034 8.89137 9.96437 8.48614 9.26743 8.23219C10.1052 7.66399 10.6569 6.70406 10.6569 5.61779C10.6569 3.87714 9.24065 2.46094 7.5 2.46094C5.75935 2.46094 4.34315 3.87714 4.34315 5.61779C4.34315 6.70464 4.89521 7.66491 5.73372 8.23299C5.09251 8.46668 4.49913 8.82797 3.98861 9.30359C3.24932 9.99207 2.73594 10.8699 2.4979 11.8333C1.48979 10.6712 0.878906 9.15562 0.878906 7.5C0.878906 3.84911 3.84911 0.878906 7.5 0.878906C11.1509 0.878906 14.1211 3.84911 14.1211 7.5C14.1211 9.15596 13.51 10.6718 12.5015 11.834Z" />
                            </svg>
                            Sign In</a>
                    </div>
                    <div class="social-area">
                        <ul>
                            <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="nav-right d-flex jsutify-content-end align-items-center">
                <ul>

                    @auth
                        <li class="d-md-flex d-none">
                            <div class="sign-in-btn">
                                <a href="{{ route('logout') }}" class="primary-btn-1 lg-btn"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form method="POST" action="{{ route('logout') }}" id="logout-form"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="d-md-flex d-none">
                            <div class="sign-in-btn">
                                <a class="primary-btn-1 lg-btn" href="{{ route('login') }}">
                                    <svg width="15" height="15" viewBox="0 0 15 15"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.8033 2.19669C11.3868 0.780144 9.50329 0 7.5 0C5.49671 0 3.61324 0.780144 2.19669 2.19669C0.780144 3.61324 0 5.49671 0 7.5C0 9.50329 0.780144 11.3868 2.19669 12.8033C3.61324 14.2199 5.49671 15 7.5 15C9.50329 15 11.3868 14.2199 12.8033 12.8033C14.2199 11.3868 15 9.50329 15 7.5C15 5.49671 14.2199 3.61324 12.8033 2.19669ZM3.25504 12.5771C3.50269 10.4462 5.33478 8.80096 7.5 8.80096C8.64143 8.80096 9.71478 9.24568 10.5222 10.0529C11.2042 10.7351 11.6344 11.6258 11.7451 12.5769C10.5949 13.5402 9.11407 14.1211 7.5 14.1211C5.88593 14.1211 4.40517 13.5403 3.25504 12.5771ZM7.5 7.89574C6.24401 7.89574 5.22205 6.87378 5.22205 5.61779C5.22205 4.36169 6.24401 3.33984 7.5 3.33984C8.75599 3.33984 9.77795 4.36169 9.77795 5.61779C9.77795 6.87378 8.75599 7.89574 7.5 7.89574ZM12.5015 11.834C12.2776 10.9311 11.8105 10.0985 11.1436 9.43153C10.6034 8.89137 9.96437 8.48614 9.26743 8.23219C10.1052 7.66399 10.6569 6.70406 10.6569 5.61779C10.6569 3.87714 9.24065 2.46094 7.5 2.46094C5.75935 2.46094 4.34315 3.87714 4.34315 5.61779C4.34315 6.70464 4.89521 7.66491 5.73372 8.23299C5.09251 8.46668 4.49913 8.82797 3.98861 9.30359C3.24932 9.99207 2.73594 10.8699 2.4979 11.8333C1.48979 10.6712 0.878906 9.15562 0.878906 7.5C0.878906 3.84911 3.84911 0.878906 7.5 0.878906C11.1509 0.878906 14.1211 3.84911 14.1211 7.5C14.1211 9.15596 13.51 10.6718 12.5015 11.834Z" />
                                    </svg>
                                    Sign In</a>
                            </div>
                        </li>
                        <li class="d-md-flex d-none">
                            <div class="sign-in-btn">
                                <a class="primary-btn-1 lg-btn" href="{{ route('register') }}">
                                    <svg width="15" height="15" viewBox="0 0 15 15"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.8033 2.19669C11.3868 0.780144 9.50329 0 7.5 0C5.49671 0 3.61324 0.780144 2.19669 2.19669C0.780144 3.61324 0 5.49671 0 7.5C0 9.50329 0.780144 11.3868 2.19669 12.8033C3.61324 14.2199 5.49671 15 7.5 15C9.50329 15 11.3868 14.2199 12.8033 12.8033C14.2199 11.3868 15 9.50329 15 7.5C15 5.49671 14.2199 3.61324 12.8033 2.19669ZM3.25504 12.5771C3.50269 10.4462 5.33478 8.80096 7.5 8.80096C8.64143 8.80096 9.71478 9.24568 10.5222 10.0529C11.2042 10.7351 11.6344 11.6258 11.7451 12.5769C10.5949 13.5402 9.11407 14.1211 7.5 14.1211C5.88593 14.1211 4.40517 13.5403 3.25504 12.5771ZM7.5 7.89574C6.24401 7.89574 5.22205 6.87378 5.22205 5.61779C5.22205 4.36169 6.24401 3.33984 7.5 3.33984C8.75599 3.33984 9.77795 4.36169 9.77795 5.61779C9.77795 6.87378 8.75599 7.89574 7.5 7.89574ZM12.5015 11.834C12.2776 10.9311 11.8105 10.0985 11.1436 9.43153C10.6034 8.89137 9.96437 8.48614 9.26743 8.23219C10.1052 7.66399 10.6569 6.70406 10.6569 5.61779C10.6569 3.87714 9.24065 2.46094 7.5 2.46094C5.75935 2.46094 4.34315 3.87714 4.34315 5.61779C4.34315 6.70464 4.89521 7.66491 5.73372 8.23299C5.09251 8.46668 4.49913 8.82797 3.98861 9.30359C3.24932 9.99207 2.73594 10.8699 2.4979 11.8333C1.48979 10.6712 0.878906 9.15562 0.878906 7.5C0.878906 3.84911 3.84911 0.878906 7.5 0.878906C11.1509 0.878906 14.1211 3.84911 14.1211 7.5C14.1211 9.15596 13.51 10.6718 12.5015 11.834Z" />
                                    </svg>
                                    Create Account
                                </a>
                            </div>
                        </li>
                    @endauth

                </ul>
                <div class="sidebar-button mobile-menu-btn ">
                    <i class="bi bi-list"></i>
                </div>
            </div>
        </div>
    </div>
</header>
