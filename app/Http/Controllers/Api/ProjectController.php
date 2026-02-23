<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with("type")->with("technologies")->orderBy('created_at', 'desc')->get();
        return response()->json([
            "success" => true,
            "data" => $projects,
        ]);
    }

    public function show($slug)
{
    $project = Project::where('slug', $slug)->with("type", "technologies")->first();

    return response()->json([
        "success" => true,
        "data" => $project,
    ]);
}
}

