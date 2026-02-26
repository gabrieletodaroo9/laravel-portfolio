@extends("admin.adminLayouts.dashboardLayout")

@section("content")

<div class="py-4 py-md-5">
    <div class="mb-2">
            <h1 class="text-center display-4 text-uppercase">Modifica profilo</h1>
        </div>
    <div class="p-2 py-3 p-md-5 text-dark">    
    @include("profile.partials.update-profile-information-form")
    @include("profile.partials.update-password-form")
    @include("profile.partials.delete-user-form")
    
    </div>

</div>



@endsection