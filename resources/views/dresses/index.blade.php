@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Tutti i vestiti</h1>
                <a href="{{ route('dresses.create') }}"class="btn btn-primary">Aggiungi vestito</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Colore</th>
                            <th scope="col">Taglia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dresses as $dress)
                            <tr>
                                <td>{{ $dress->id }}</td>
                                <td>{{ $dress->type }}</td>
                                <td>{{ $dress->brand }}</td>
                                <td>{{ number_format($dress->price, 2, ',', ' ') }}</td>
                                <td>{{ $dress->color}}</td>
                                <td>{{$dress->size}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('dresses.show', ['dress' => $dress->id ])}}">Dettagli</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
