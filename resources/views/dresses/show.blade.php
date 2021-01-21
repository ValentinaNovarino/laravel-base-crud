@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Dettagli vestito con id: {{ $dress->id }}</h1>
                <ul>
                    <li>Nome: {{ $dress->type }}</li>
                    <li>Marca: {{ $dress->brand }}</li>
                    <li>Prezzo: {{ number_format($dress->price, 2, ',', ' ') }}</li>
                    <li>Colore: {{ $dress->color }}</li>
                    <li>Taglia: {{ $dress->size }}</li>
                    <li>Descrizione: {{ $dress->description }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
