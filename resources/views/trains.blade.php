@extends('layout.main')

@section('content')

<h1>Trains DB</h1>

<table class="table container ">
    <thead>
        <tr>
            <th scope="col">
            <th scope="col">
            <th scope="col">
            <th scope="col">
        </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
        <tr>
            <td>{{$train->id}}</td>
            <td>{{$train->id}}</td>
            <td>{{$train->id}}</td>
            <td>{{$train->id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
