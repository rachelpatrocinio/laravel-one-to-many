@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="card">
            <h1>{{$project->project_title}}</h1>
            <h1>{{$project->slug}}</h1>
            <p>{{$project->project_description}}</p>
            <p>{{$project->github_url}}</p>
        </div>
    </div>
</div>
@endsection