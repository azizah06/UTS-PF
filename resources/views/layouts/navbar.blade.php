<!-- Sidebar -->
<div class="sidebar container-fluid">
    <div class="sidebar-design pt-5">
        <div class="image text-center">
            <img class="mb-5" src="{{ Vite::asset('resources/images/logo.png') }}" alt="">
        </div>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link px-3" href="{{route('home')}}">
                    <i class="bi bi-house-fill fs-5 me-2"></i>
                    <span class="fw-bold">Home</span>
                </a>
            </li>
            <li class="nav-item pt-3">
                <a class="nav-link px-3" href="{{ route('inventorys.index')}}">
                    <i class="bi bi-archive-fill fs-5 me-2"></i>
                    <span class="fw-bold">Inventory</span>
                </a>
            </li>
        </ul>
    </div>
</div>
