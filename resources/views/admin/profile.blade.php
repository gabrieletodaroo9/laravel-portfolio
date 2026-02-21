@extends("admin.adminLayouts.dashboardLayout")

@section("content")

<div class="py-5">
    <h1 class="text-center mb-3">PROFILE PAGE</h1>
    <div class="p-5 text-dark">    
    @include("profile.partials.update-profile-information-form")
    <br><hr><br>
    @include("profile.partials.update-password-form")
    <br><hr><br>
    @include("profile.partials.delete-user-form")
    
    </div>

</div>



@endsection