@extends('layout.main')

@section('container')
    <h1> Halaman About </h1>
    <h3> {{$nama}} </h3>
    <p> {{$email}} </p>
    <img src="image/{{ $image }}" alt="{{ $nama }}" width="300px"; height="600px">
@endsection