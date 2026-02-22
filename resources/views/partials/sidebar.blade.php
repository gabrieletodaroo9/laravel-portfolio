<div class="col-2 bg-light shadow-sm border-end">
    <div class="sticky-top d-flex flex-column vh-100">
        
        <div class="p-5 d-flex justify-content-start align-items-center">
            <img style="height:60px;" src="{{ Vite::asset('resources/img/logo-gt.png') }}" alt="Logo">
        </div>

        <h4 class="px-5 pb-3 fw-bold">Menu</h4>

        <ul class="p-5 pt-2 list-unstyled">
            <li class="mb-2"><a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-dark">Dashboard</a></li>
            <li class="mb-2"><a href="{{ route('admin.profile') }}" class="text-decoration-none text-dark">Gestisci profilo</a></li>
            <li class="mb-2"><a href="{{ route('admin.projects.index') }}" class="text-decoration-none text-dark">Gestisci progetti</a></li>
            <li class="mb-2"><a href="{{ route('admin.types.index') }}" class="text-decoration-none text-dark">Gestisci tipologie</a></li>
            <li class="mb-2"><a href="{{ route('admin.technologies.index') }}" class="text-decoration-none text-dark">Gestisci tecnologie</a></li>
        </ul>

        <div class="mt-auto ps-5 pb-5">
            <a class="text-decoration-none text-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>