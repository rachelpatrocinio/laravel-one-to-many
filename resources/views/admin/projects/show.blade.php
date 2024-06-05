@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="card">
            <h1>{{$project->project_title}}</h1>
            <h1>{{$project->slug}}</h1>
            <p>{{$project->project_description}}</p>
            <p>{{$project->github_url}}</p>

            @if($project->type)
                <p><strong>Type:</strong> {{$project->type->name}}</p>
                <h3>Related Projects</h3>
                @foreach($project->type->projects as $project)
                <p><a href="{{ route('admin.projects.show', $project)}}">{{$project->project_title}}</a></p>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection