@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <form action="{{ route('project.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
        
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
        
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine di copertina</label>
                <input type="file" class="form-control" id="thumb" name="thumb">
            </div>
        
            <div class="mb-3">
                <label for="skill" class="form-label">Tecnologie utilizzate</label>
                <input type="text" class="form-control" id="skill" name="skill">
            </div>
        
            <div class="mb-3">
                <label for="git_url" class="form-label">Link alla repo di GitHub</label>
                <input type="text" class="form-control" id="git_url" name="git_url">
            </div>
        
            <button type="submit" class="btn btn-primary fw-bold text-uppercase">Aggiungi</button>
        </form>
        
        
    </div>
@endsection