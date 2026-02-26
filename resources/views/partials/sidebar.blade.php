<div class="offcanvas-lg offcanvas-start custom-canvas col-lg-2 bg-light shadow-sm border-end p-0" tabindex="-1" id="sidebarOffcanvas">
    
    <div class="offcanvas-header d-lg-none">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarOffcanvas"></button>
    </div>

    <div class="sticky-top d-flex flex-column vh-100">
        
        <div class="p-4 p-lg-5 d-flex justify-content-start align-items-center">
            <img style="height:50px;" src="{{ Vite::asset('resources/img/logo-gt.png') }}" alt="Logo">
        </div>

        <h4 class="px-4 px-lg-5 pb-3 fw-bold d-none d-lg-block">Menu</h4>

        <ul class="px-4 px-lg-5 pt-2 list-unstyled flex-grow-1">
            <li class="mb-3"><a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-dark d-block">Dashboard</a></li>
            <li class="mb-3"><a href="{{ route('admin.profile') }}" class="text-decoration-none text-dark d-block">Gestisci profilo</a></li>
            <li class="mb-3"><a href="{{ route('admin.projects.index') }}" class="text-decoration-none text-dark d-block">Gestisci progetti</a></li>
            <li class="mb-3"><a href="{{ route('admin.types.index') }}" class="text-decoration-none text-dark d-block">Gestisci tipologie</a></li>
            <li class="mb-3"><a href="{{ route('admin.technologies.index') }}" class="text-decoration-none text-dark d-block">Gestisci tecnologie</a></li>
            <li class="mb-3"><a href="{{ route('admin.messages.index') }}" class="text-decoration-none text-dark d-block">Visualizza messaggi</a></li>        
        </ul>

        <div class="mt-auto ps-4 ps-lg-5 pb-5">
            <a class="text-decoration-none text-danger fw-bold" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>