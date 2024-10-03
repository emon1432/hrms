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

            </ul>
        </div>
    </div>
</div>
