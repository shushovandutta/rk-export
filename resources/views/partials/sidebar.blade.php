<div class="left_part">
    <div class="left_part_cont">

        <div class="other_list first_list">
            <ul>

                <li>
                    <a href="{{ url('/dashboard') }}" class="{{ request()->is('/dashboard') ? 'active' : '' }}">
                        <span>
                            <img src="{{ asset('images/svg/dashbard_icon.svg') }}" alt="icon">
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/client') }}" class="{{ request()->is('client*') ? 'active' : '' }}">
                        <span>
                            <img src="{{ asset('images/svg/indent.svg') }}" alt="icon">
                        </span>
                        <span>Exporter</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/archive') }}" class="{{ request()->is('archive*') ? 'active' : '' }}">
                        <span>
                            <img src="{{ asset('images/svg/archive.svg') }}" alt="icon">
                        </span>
                        <span>Due List</span>
                    </a>
                </li>

            </ul>
        </div>

    </div>

    <a href="{{ url('/admin') }}" class="admin">
        <i class="zmdi zmdi-settings"></i>
        <span>Admin</span>
    </a>
</div>