@extends('components.main')

@section('container')
    <h1>Hello, {{ $name }}</h1>
    <p>{{ $email }}</p>
@endsection