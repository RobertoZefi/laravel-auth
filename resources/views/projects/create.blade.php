@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-5">Aggiungi progetto</h2>
        <form action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <input type="submit" class="btn btn-primary" value="Crea">
        </form>
    </div>
@endsection