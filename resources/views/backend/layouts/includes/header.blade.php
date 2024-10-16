<div class="header">

    <div class="header-left">
        <a class="logo" href="{{ route(auth()->user()->role . '.dashboard') }}">
            <img src="{{ asset('backend') }}/img/logo.png" alt width="40" height="40">
        </a>
    </div>

    <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <div class="page-title-box">
        <h3>{{ auth()->user()->role }} dashboard</h3>
    </div>

    <a class="mobile_btn" id="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

    <ul class="nav user-menu">

        <li class="nav-item">
            <div class="top-nav-search">
                <a class="responsive-search" href="javascript:void(0);">
                    <i class="fa fa-search"></i>
                </a>
                <form action="search.html">
                    <input class="form-control" type="text" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </li>


        {{-- <li class="nav-item dropdown has-arrow flag-nav">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                <img src="{{ asset('backend') }}/img/flags/us.png" alt height="20"> <span>English</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="javascript:void(0);">
                    <img src="{{ asset('backend') }}/img/flags/us.png" alt height="16"> English
                </a>
                <a class="dropdown-item" href="javascript:void(0);">
                    <img src="{{ asset('backend') }}/img/flags/fr.png" alt height="16"> French
                </a>
                <a class="dropdown-item" href="javascript:void(0);">
                    <img src="{{ asset('backend') }}/img/flags/es.png" alt height="16"> Spanish
                </a>
                <a class="dropdown-item" href="javascript:void(0);">
                    <img src="{{ asset('backend') }}/img/flags/de.png" alt height="16"> German
                </a>
            </div>
        </li> --}}


        {{-- <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a class="clear-noti" href="javascript:void(0)"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">
                                        <img src="{{ asset('backend') }}/img/profiles/avatar-02.jpg" alt>
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">John Doe</span> added
                                            new task <span class="noti-title">Patient appointment booking</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">
                                        <img src="{{ asset('backend') }}/img/profiles/avatar-03.jpg" alt>
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                            changed the task name <span class="noti-title">Appointment booking
                                                with payment gateway</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">
                                        <img src="{{ asset('backend') }}/img/profiles/avatar-06.jpg" alt>
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                            added <span class="noti-title">Domenic Houston</span> and <span
                                                class="noti-title">Claire Mapes</span> to project <span
                                                class="noti-title">Doctor available module</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">
                                        <img src="{{ asset('backend') }}/img/profiles/avatar-17.jpg" alt>
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                            completed task <span class="noti-title">Patient and Doctor video
                                                conferencing</span></p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">
                                        <img src="{{ asset('backend') }}/img/profiles/avatar-13.jpg" alt>
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                            added new task <span class="noti-title">Private chat module</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">2 days ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="activities.html">View all Notifications</a>
                </div>
            </div>
        </li> --}}


        {{-- <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Messages</span>
                    <a class="clear-noti" href="javascript:void(0)"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img src="{{ asset('backend') }}/img/profiles/avatar-09.jpg" alt>
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Richard Miles </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img src="{{ asset('backend') }}/img/profiles/avatar-02.jpg" alt>
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">John Doe</span>
                                        <span class="message-time">6 Mar</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img src="{{ asset('backend') }}/img/profiles/avatar-03.jpg" alt>
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Tarah Shropshire </span>
                                        <span class="message-time">5 Mar</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img src="{{ asset('backend') }}/img/profiles/avatar-05.jpg" alt>
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Mike Litorus</span>
                                        <span class="message-time">3 Mar</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img src="{{ asset('backend') }}/img/profiles/avatar-08.jpg" alt>
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Catherine Manseau </span>
                                        <span class="message-time">27 Feb</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="chat.html">View all Messages</a>
                </div>
            </div>
        </li> --}}

        <li class="nav-item dropdown has-arrow main-drop">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                <span class="user-img"><img src="{{ asset('backend') }}/img/profiles/avatar-21.jpg" alt>
                    <span class="status online"></span></span>
                <span>Admin</span>
            </a>
            <div class="dropdown-menu">
                {{-- <a class="dropdown-item" href="">My Profile</a>
                <a class="dropdown-item" href="">Settings</a> --}}
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>


    <div class="dropdown mobile-user-menu">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"><i
                class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            {{-- <a class="dropdown-item" href="">My Profile</a> --}}
            {{-- <a class="dropdown-item" href="">Settings</a> --}}
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>

</div>
