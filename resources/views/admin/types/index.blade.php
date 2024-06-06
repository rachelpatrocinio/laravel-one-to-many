@extends('layouts.app')

@section('content')


<div class="container my-5">
    <div class="row">
        <div class="logo-title">
            <img src="{{Vite::asset('resources/img/project-types.png')}}" alt="Projects Types">
        </div>
        <div class="my-5">
            <ul>
              @foreach($types as $type)
              <li>
                <h2>{{ $type->name}}</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil beatae, cupiditate enim accusamus non expedita at natus minus sed esse obcaecati ipsa, totam nobis, nemo quasi dolor atque odit quis.</p>
              </li>
              @endforeach
            </ul>
        </div>
    </div>
</div>


@endsection