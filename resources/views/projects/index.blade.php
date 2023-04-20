@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center py-5">
            <h1>Tutti i progetti</h1>
            <div class="ms-auto">
                <a class="btn btn-primary" href="{{ route('projects.create') }}">Aggiungi</a>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Cliente</th>
                <th scope="col">Descrizione</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->client }}</td>
                    <td>{{ $project->description }}</td>
                    <td><a class="btn btn-primary btn-sm" href="">Modifica</a></td> 
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection