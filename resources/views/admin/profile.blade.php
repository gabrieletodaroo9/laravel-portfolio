@extends("admin.adminLayouts.dashboardLayout")

@section("content")

<div class="py-5">
    <h1 class="text-center">PROFILE PAGE</h1>
    <div class="p-5 text-dark">
        @include("profile.partials.update-profile-information-form")
    </div>

</div>



@endsection