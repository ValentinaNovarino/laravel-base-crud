@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Inserisci nuovo vestito</h1>
                <form method="POST" action="{{ route('dresses.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Tipo</label>
                        <input type="text" name="type" class="form-control" placeholder="Tipo">
                    </div>
                    <div class="form-group">
                        <label>Marca</label>
                        <input type="text" name="brand" class="form-control" placeholder="Marca">
                    </div>
                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="text" name="price" class="form-control" placeholder="Prezzo">
                    </div>
                    <div class="form-group">
                        <label>Taglia</label>
                        <select class="form-control" name="size">
                            <option>Seleziona taglia</option>
                            <option value="xs">XS</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                            <option value="xl">XL</option>
                            <option value="xxl">XXL</option>
                        </select>
                        {{-- <input type="text" name="size" class="form-control" placeholder="Taglia"> --}}
                    </div>
                    <div class="form-group">
                        <label>Colore</label>
                        <input type="text" name="color" class="form-control" placeholder="Colore">
                    </div>
                    <div class="form-group">
                        <label>Descrizione</label>
                        <input type="text" name="description" class="form-control" placeholder="Descrizione">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Salva vestito</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
