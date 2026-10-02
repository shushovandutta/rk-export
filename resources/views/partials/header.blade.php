<header class="main_head">
    <nav class="d-flex justify-content-between align-items-center">

        <div class="logo_toggle d-flex justify-content-between align-items-center">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo_img_1">
            </a>

            <div class="toggle_btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="profile_bar">

            <div class="search_box">
                <form action="{{ url('/search') }}" method="GET">
                    <div class="d-flex">
                        <input type="search" name="q" value="{{ request('q') }}" class="form-control"
                            placeholder="Search here...">
                        <img src="{{ asset('images/svg/search_icon.svg') }}" alt="icon">
                    </div>
                </form>
            </div>

            <ul class="noti_prifile_box d-flex align-items-center">
                @if(request()->is('dashboard*') || request()->is('client*') || request()->is('/client/*'))
                <li>
                    <a href="#createindent" data-bs-toggle="modal" data-bs-target="#createindent" class="cr_ind_btn">
                        Create Client
                    </a>
                </li>
                @elseif (request()->is('entry-list*') || request()->is('entry-list/*'))

                <!-- Create Entry Button Beside Search -->
                @if($project->status==1)
                <li>
                    <a href="#createindent" data-bs-toggle="modal" data-bs-target="#createindent" class="cr_ind_btn">
                        +Add Entry
                    </a>
                </li>
                @endif
                @elseif (request()->is('project-details*') || request()->is('project-details/*'))
                <li>
                    <a href="#createindent" data-bs-toggle="modal" data-bs-target="#createindent" class="cr_ind_btn">
                        +Add Project
                    </a>
                </li>

                @endif

                @include('partials.navigation')
            </ul>

        </div>
    </nav>
</header>