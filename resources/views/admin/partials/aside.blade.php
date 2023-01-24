<nav>
    <ul>
        <li class="{{ request()->segment(2) == '' ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-chart-pie"></i>Dashboard
            </a>
        </li>

        <li class="{{ request()->segment(2) == 'projects' ? 'active' : '' }}">
            <a href="{{ route('admin.projects.index') }}">
                <i class="fa-solid fa-hammer"></i>Projects
            </a>
        </li>

        <li class="{{ request()->segment(3) == 'project-type' ? 'active' : '' }}">
            <a href="{{ route('admin.types_project') }}">
                <i class="fa-solid fa-folder"></i>Types list
            </a>
        </li>

        <li class="{{ request()->segment(2) == 'types' ? 'active' : '' }}">
            <a href="{{ route('admin.types.index') }}">
                <i class="fa-solid fa-tag"></i>Types
            </a>
        </li>

        <li class="{{ request()->segment(2) == 'technologies' ? 'active' : '' }}">
            <a href="{{ route('admin.technologies.index') }}">
                <i class="fa-solid fa-laptop-code"></i>Technologies
            </a>
        </li>

    </ul>
</nav>
