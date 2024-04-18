@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <form action="{{ route('project.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
            </div>
        
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description">{{$project->description}}</textarea>
            </div>
        
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine di copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $project->thumb }}">
            </div>
        
            <div class="mb-3">
                <label for="skill" class="form-label">Tecnologie utilizzate</label>
                <input type="text" class="form-control" id="skill" name="skill" value="{{ $project->skill }}">
            </div>
        
            <div class="mb-3">
                <label for="git_url" class="form-label">Link alla repo di GitHub</label>
                <input type="text" class="form-control" id="git_url" name="git_url" value="{{ $project->gir_url }}">
            </div>
        
            <button type="submit" class="btn btn-warning fw-bold text-uppercase">modifica</button>
        </form>
        
        
    </div>
@endsection