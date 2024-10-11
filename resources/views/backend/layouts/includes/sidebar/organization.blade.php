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
        <i class="la la-briefcase"></i>
        <span>Jobs</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="display: none;">
        <li>
            <a class="active" href="{{ route('job-management.index') }}">
                Job Management
            </a>
        </li>
        <li>
            <a class="active" href="{{ route('job-category.index') }}">
                Job Category
            </a>
        </li>
        <li>
            <a class="active" href="">
                Job Type
            </a>
        </li>
    </ul>
</li>
