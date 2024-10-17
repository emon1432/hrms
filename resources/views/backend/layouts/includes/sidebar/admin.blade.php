<li class="menu-title">
    <span>Organizations</span>
</li>
<li class="submenu">
    <a href="javascript:void(0);">
        <i class="la la-users"></i>
        <span> Organizations</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="display: none;">
        <li>
            <a class="{{ Request::is('organizations*') ? 'active' : '' }}" href="{{ route('organizations.index') }}">
                All Organizations
            </a>
        </li>
    </ul>
</li>
<li class="submenu">
    <a href="javascript:void(0);">
        <i class="la la-user"></i>
        <span> Candidates</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="display: none;">
        <li>
            <a class="{{ Request::is('candidates*') ? 'active' : '' }}" href="{{ route('candidates.index') }}">
                All Candidates
            </a>
        </li>
    </ul>
</li>