<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TechnologyController extends Controller
{
    public function index()
    {
        $techs = Technology::all();
        return view("admin.technologies.index", compact("techs"));
    }

    public function create()
    {
        return view("admin.technologies.create");
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $newTech = new Technology();
        $newTech->name = $data["name"];
        $newTech->color = $data["color"];
        $newTech->description = $data["description"] ?? null;
        $newTech->slug = Str::slug($data["name"]);

        if (array_key_exists("img_url", $data)) {
            $img_url = Storage::putFile("technologies/images", $data["img_url"]);
            $newTech->img_url = $img_url;
        }

        $newTech->save();

        return redirect()->route('admin.technologies.index');
    }

    public function show(Technology $technology)
    {
        return view("admin.technologies.show", compact("technology"));
    }

    public function edit(Technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    public function update(Request $request, Technology $technology)
    {
        $data = $request->all();

        $technology->name = $data["name"];
        $technology->color = $data["color"];
        $technology->description = $data["description"] ?? null;
        $technology->slug = Str::slug($data["name"]);

        if (array_key_exists("img_url", $data)) {
            if ($technology->img_url) {
                Storage::delete($technology->img_url);
            }
            $img_url = Storage::putFile("technologies/images", $data["img_url"]);
            $technology->img_url = $img_url;
        }

        $technology->update();

        return redirect()->route('admin.technologies.index');
    }

    public function destroy(Technology $technology)
    {
        if ($technology->img_url) {
            Storage::delete($technology->img_url);
        }
        
        $technology->delete();

        return redirect()->route("admin.technologies.index");
    }
}