@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table my-5">
            <thead>
              <tr>
                <th scope="col">Project Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Project Description</th>
                <th scope="col">Github Url</th>
                <th scope="col">Details</th>
              </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
              <tr>
                <td>{{$project->project_title}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->project_description}}</td>
                <td>{{$project->github_url}}</td>
                <td><a href="{{ route('admin.projects.show', $project)}}">Details</a></td>
              </tr>
            @endforeach
            </tbody>
          </table>
        
    </div>
</div>
@endsection