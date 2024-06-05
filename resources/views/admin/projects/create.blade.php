@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="my-5">
            <form action="{{route('admin.projects.store')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="project_title" class="form-label">Project Title</label>
                    <input type="text" class="form-control" id="project_title" name="project_title" placeholder="Project Title" value="{{old('project_title')}}">
                </div>
                <div class="mb-5">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{old('slug')}}">
                </div>
                <div class="mb-5">
                    <label for="type_id">Type</label>
                    <select name="type_id" id="type_id" name="type_id">
                        <option value="">-- Select Type --</option>
                        @foreach($types as $type)
                        <option @selected($type->id == old('type_id')) value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="project_description" class="form-label">Project Description</label>
                    <textarea name="project_description" id="project_description" cols="30" rows="10" class="w-100" value="{{old('project_description')}}"></textarea>
                </div>
                <div class="mb-5">
                    <label for="github_url" class="form-label">Github Url</label>
                    <input type="text" class="form-control" id="github_url" name="github_url" placeholder="Https://.." value="{{old('github_url')}}">
                </div>
                <button class="btn btn-success">SAVE</button>
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