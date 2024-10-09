@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-5">{{$project->name_project}}</h1>
            </div>
          <div class="col-6">
            @if (Str::startsWith($project->image, 'https'))
            <img class="img" src="{{ $project->image }}" alt="{{$project->title}}">
            @else 
            <img class="img" src="{{asset('./storage/'.$project->image)}}" alt="{{$project->title}}">
            @endif
          </div>
          <div class="col-6">
            <p>{{$project->description}}</p>
          </div>
        </div>
    </div>
@endsection