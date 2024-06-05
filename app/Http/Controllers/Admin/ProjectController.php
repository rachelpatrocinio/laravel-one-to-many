<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdateTypeRequest;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }


    public function create()
    {
        $types = Type::all();
        return view('admin.projects.create', compact('types'));
    }

    public function store(StorePostRequest $request)
    {
        // $request->validate([
        //     'project_title'=>'required|max:255',
        //     'project_description'=>'required|max:255',
        //     'github_url'=>'required'
        // ]);

        $form_data= $request->all();
        $new_project = Project::create($form_data);
        return to_route('admin.projects.show', $new_project);
    }


    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }


    public function edit(Project $project)
    {
        $types = Type::all();
        return view('admin.projects.edit', compact('project', 'types'));
    }


    public function update(UpdateTypeRequest $request, Project $project)
    {
        $form_data = $request->all();
        $project->update($form_data);  

        return to_route('admin.projects.show', $project); 
    }


    public function destroy(Project $project)
    {
        //
    }
}
