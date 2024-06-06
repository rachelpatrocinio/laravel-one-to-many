@extends('layouts.app')

@section('content')


<div class="container my-5">
    <div class="row">
        <div class="logo-title d-flex justify-content-between align-items-center">
            <img src="{{Vite::asset('resources/img/project-types.png')}}" alt="Projects Types">
            <a href="{{ route('admin.types.create')}}">
              <button class="bg-brown">Add Type</button>
            </a>
        </div>
        <div class="my-5">
            <ul>
              @foreach($types as $type)
              <li>
                <h4>{{ $type->name}}</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil beatae, cupiditate enim accusamus non expedita at natus minus sed esse obcaecati ipsa, totam nobis, nemo quasi dolor atque odit quis.</p>
              </li>
              @endforeach
            </ul>
        </div>
    </div>
</div>


@endsection