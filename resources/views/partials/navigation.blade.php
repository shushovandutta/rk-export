{{-- Top/header navigation --}}
@if(auth()->check())
    <li class="nav-item">
        <a href="#" class="nav-link">
            <span>{{ auth()->user()->name }}</span>
        </a>
    </li>

    <li class="nav-item">
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-link nav-link p-0 border-0">
                Logout
            </button>
        </form>
    </li>
@endif
