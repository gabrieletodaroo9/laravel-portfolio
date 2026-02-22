<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
    $projects_count = Project::count();
    $types_count = Type::count();
    $techs_count = Technology::count();
    $latest_projects = Project::latest()->take(5)->get();

    return view('admin.dashboard', compact('projects_count', 'types_count', 'techs_count', 'latest_projects'));
}

    public function profile(){
        $user=Auth::user();
        return view("admin.profile",compact("user"));
    }
}
