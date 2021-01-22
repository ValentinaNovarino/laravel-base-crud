@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Modifica vestito</h1>
                <form method="POST" action="{{ route('dresses.update', ['dress' => $dress->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Tipo</label>
                        <input type="text" name="type" class="form-control" value="{{ $dress->type }}" placeholder="Tipo">
                    </div>
                    <div class="form-group">
                        <label>Marca</label>
                        <input type="text" name="brand" class="form-control" value="{{ $dress->brand }}" placeholder="Marca">
                    </div>
                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="text" name="price" class="form-control"
                        value="{{ $dress->price }}" placeholder="Prezzo">
                    </div>
                    <div class="form-group">
                        <label>Taglia</label>
                        <select class="form-control" name="size">
                            <option>Seleziona taglia</option>
                            <option value="XS" {{ $dress->size == 'value' ? 'selected=selected' : '' }}>XS</option>
                            <option value="S" {{ $dress->size == 'value' ? 'selected=selected' : '' }}>S</option>
                            <option value="M" {{ $dress->size == 'value' ? 'selected=selected' : '' }}>M</option>
                            <option value="L" {{ $dress->size == 'value' ? 'selected=selected' : '' }}>L</option>
                            <option value="XL" {{ $dress->size == 'value' ? 'selected=selected' : '' }}>XL</option>
                            <option value="XXL" {{ $dress->size == 'value' ? 'selected=selected' : '' }}>XXL</option>
                        </select>
                        {{-- <input type="text" name="size" class="form-control" placeholder="Taglia"> --}}
                    </div>
                    <div class="form-group">
                        <label>Colore</label>
                        <input type="text" name="color" class="form-control" value="{{ $dress->color }}" placeholder="Colore">
                    </div>
                    <div class="form-group">
                        <label>Descrizione</label>
                        <input type="text" name="description" class="form-control" value="{{ $dress->description }}" placeholder="Descrizione">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Salva modifiche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
