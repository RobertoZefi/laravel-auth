@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-5">Modifica progetto</h2>
        <form action="{{ route('projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{ old('title', $project['title'] )}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="client" value="{{ old('client', $project['client'] )}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="description" value="{{ old('description', $project['description'] )}}">
            </div>
            <input type="submit" class="btn btn-primary ms-auto" value="Modifica">
        </form>
    </div>
@endsection