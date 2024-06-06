@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="my-5">
            <form action="{{ route('admin.projects.update', $project)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-5">
                    <label for="project_title" class="form-label">
                        <img src="{{Vite::asset('resources/img/project-title.png')}}" alt="">
                    </label>
                    <input type="text" class="form-control" id="project_title" name="project_title" placeholder="Project Title" value="{{old('project_title', $project->project_title)}}">
                </div>
                <div class="mb-5">
                    <label for="slug" class="form-label">
                        <img src="{{Vite::asset('resources/img/slug.png')}}" alt="">
                    </label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{old('slug', $project->slug)}}">
                </div>
                <div class="mb-5">
                    <label for="type_id">Type</label>
                    <div>
                        <select id="type_id" name="type_id" class="form-select">
                            <option value=""> ~ Select Type ~ </option>
                            @foreach($types as $type)
                            <option @selected($type->id == old('type_id', $project->type_id)) value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="project_description" class="form-label">
                        <img src="{{Vite::asset('resources/img/project-description.png')}}" alt="">
                    </label>
                    <div class="form-floating">
                        <textarea name="project_description" id="project_description" cols="30" rows="10" class="w-100 h-25 form-control">{{old('project_description', $project->project_description)}}"</textarea>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="github_url" class="form-label">
                        <img src="{{Vite::asset('resources/img/github-url.png')}}" alt="">
                    </label>
                    <input type="text" class="form-control" id="github_url" name="github_url" placeholder="Https://.." value="{{old('github_url', $project->github_url)}}">
                </div>
                <div class="text-end">
                    <button class="bg-brown">SAVE</button>
                </div>
            </form>
        </div>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
@endsection
