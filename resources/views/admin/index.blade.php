@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1>DASHBOARD DI AMMINISTRAZIONE</h1>

    <div class="row row-gap-4">
        @foreach ($projects as $project)
        <div class="card mb-3">
            <img src="{{$project->thumb}}" class="card-img-top" alt="immagine progetto">
            <div class="card-body">
              <h5 class="card-title">{{$project->name}}</h5>
              <p class="card-text">{{$project->description}}</p>
              <p class="card-text">{{$project->skill}}</p>
              <p class="card-text">{{$project->git_url}}</p>
              <a href="{{route('project.show', $project->id)}}" class="btn btn-success fw-bold text-uppercase">maggiori informazioni</a>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection