@extends('layout.main')
@section('container')
<h1>Ini halaman about</h1>
<h3>{{ $nama }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="eradika" width="200">

@endsection
    