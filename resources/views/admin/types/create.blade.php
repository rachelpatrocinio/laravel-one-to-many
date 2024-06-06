@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="" method="POST" class="my-5">
            @csrf
           
            <div class="mb-3">
                <label for="type_name" class="form-label">
                    <img src="{{Vite::asset('resources/img/type-name.png')}}" alt="Type Name">
                </label>
                <input type="text" class="form-control" id="type_name" name="type_name" placeholder="Type Name">
            </div>
            <div>
                <label for="project_title" class="form-label">
                    <img src="{{Vite::asset('resources/img/type-description.png')}}" alt="Type Name">
                </label>
                <textarea name="project_description" id="project_description" cols="30" rows="10" class="w-100 h-25 form-control">{{old('project_description')}}</textarea>
            </div>
            <div class="text-end mt-3">
                <button class="bg-brown">SAVE</button>
            </div>
        </form>
    </div>
</div>
@endsection