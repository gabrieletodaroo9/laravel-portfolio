<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $techs = Technology::all();

        return view("admin.projects.create", compact("types", "techs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project();

        $newProject->title = $data["title"];
        $newProject->description = $data["description"];
        $newProject->link_github = $data["link_github"];
        $newProject->type_id = $data["type_id"];
        $newProject->slug = Str::slug($data["title"]);

        if (array_key_exists("img_url", $data)) {
            $img_url = Storage::putFile("projects/images", $data["img_url"]);
            $newProject->img_url = $img_url;
        }

        $newProject->save();

        if ($request->has("techs")) {
            $newProject->technologies()->attach($data["techs"]);
        }

        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        $techs = Technology::all();
        return view('admin.projects.edit', compact('project', "types", "techs"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->title = $data["title"];
        $project->description = $data["description"];
        $project->link_github = $data["link_github"];
        $project->type_id = $data["type_id"];

        $project->slug = Str::slug($data["title"]);

        if (array_key_exists("img_url", $data)) {
            if ($project->img_url) {
                Storage::delete($project->img_url);
            }
            $img_url = Storage::putFile("projects/images", $data["img_url"]);
            $project->img_url = $img_url;
        }

        $project->update();
        $project->technologies()->sync($request->input("techs",[]));

        return redirect()->route('admin.projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        $project->technologies()->detach();

        if ($project->img_url) {
            Storage::delete($project->img_url);
        }
        $project->delete();

        return redirect()->route("admin.projects.index");
    }
}
