<li class="menu-title">
    <span>Employees</span>
</li>
<li class="submenu">
    <a href="javascript:void(0);">
        <i class="la la-user"></i>
        <span> Employees</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="display: none;">
        <li>
            <a class="{{ Request::is('employees*') ? 'active' : '' }}" href="{{ route('employees.index') }}">
                All Employees
            </a>
        </li>
        <li>
            <a class="{{ Request::is('designations*') ? 'active' : '' }}" href="{{ route('designations.index') }}">
                Designation
            </a>
        </li>
    </ul>
</li>
<li class="menu-title">
    <span>Job Applications</span>
</li>
<li class="submenu">
    <a href="javascript:void(0);">
        <i class="la la-briefcase"></i>
        <span>Job Management</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="display: none;">
        <li>
            <a class="{{ Request::is('job-management*') ? 'active' : '' }}" href="{{ route('job-management.index') }}">
                Jobs
            </a>
        </li>
        <li>
            <a class="{{ Request::is('category*') ? 'active' : '' }}" href="{{ route('category.index') }}">
                Category
            </a>
        </li>
    </ul>
</li>
