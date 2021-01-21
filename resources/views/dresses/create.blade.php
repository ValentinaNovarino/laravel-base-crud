@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Inserisci nuovo vestito</h1>
                <form method="POST" action="{{ route('dresses.store') }}">
                    <div class="form-group">
                        <label>Tipo</label>
                        <input type="text" name="type" class="form-control" placeholder="Tipo">
                    </div>
                    <div class="form-group">
                        <label>Marca</label>
                        <input type="text" name="brand" class="form-control" placeholder="Tipo">
                    </div>
                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="text" name="price" class="form-control" placeholder="Tipo">
                    </div>
                    <div class="form-group">
                        <label>Taglia</label>
                        <input type="text" name="size" class="form-control" placeholder="Tipo">
                    </div>
                    <div class="form-group">
                        <label>Colore</label>
                        <input type="text" name="color" class="form-control" placeholder="Tipo">
                    </div>
                    <div class="form-group">
                        <label>Descrizione</label>
                        <input type="text" name="description" class="form-control" placeholder="Tipo">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Salva vestito</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
