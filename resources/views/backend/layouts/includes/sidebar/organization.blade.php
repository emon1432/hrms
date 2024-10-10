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
            <a class="active" href="{{ route('employees.index') }}">
                All Employees
            </a>
        </li>
        <li>
            <a class="active" href="{{ route('employee-designation.index') }}">
                Designation
            </a>
        </li>
    </ul>
</li>

<li class="submenu">
    <a href="javascript:void(0);">
        <i class="la la-user"></i>
        <span> Manage Jobs</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="display: none;">
        <li>
            <a class="active" href="">
                All Jobs
            </a>
        </li>
        <li>
            <a class="active" href="{{ route('job-category.index') }}">
                Category
            </a>
        </li>
    </ul>
</li>
