@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Dettagli vestito con id: {{ $dress->id }}</h1>
                <p>Nome: {{ $dress->type }}</p>
                <p>Marca: {{ $dress->brand }}</p>
                <p>Prezzo: {{ number_format($dress->price, 2, ',', ' ') }}</p>
                <p>Colore: {{ $dress->color }}</p>
                <p>Taglia: {{ $dress->size }}</p>
                <p>Descrizione: {{ $dress->description }}</p>
            </div>
        </div>
    </div>
@endsection
