<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div class="sidebar-menu" id="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="{{ route(auth()->user()->role . '.dashboard') }}">
                        <i class="la la-dashboard"></i>
                        <span> Dashboard</span>
                    </a>
                </li>
                @if(auth()->user()->role == 'admin')
                    @include('backend.layouts.includes.sidebar.admin')
                @elseif(auth()->user()->role == 'organization')
                    @include('backend.layouts.includes.sidebar.organization')
                @elseif(auth()->user()->role == 'employee')
                    @include('backend.layouts.includes.sidebar.employee')
                @endif

                <li class="submenu">
                    <a href="{{ route('home.index') }}" target="_blank">
                        <i class="la la-external-link-square"></i>
                        <span>Visit Website</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
