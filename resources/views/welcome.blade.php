@extends('layout/app')

@section('title', 'StarOne')

@section('content')
    <!--Banner-->
    <div class="container banner">
        <h1>Welcome to Musang LLC!</h1>
        <p>Go Nuts.</p>
        <a href="{{ url('/book') }}" class="btn btn-primary">Explore Data</a>
        <a href="{{ url('/book/manage') }}" class="btn btn-secondary">Modify Data</a>
    </div>

    <!--Content-->
    <div class="container mt-4">
        <div class="row">
            @foreach($books as $book)
            <div class="col-md-4">
                <div class="col-md-12 mt-3 rounded bg-primary book-content">
                    <h1 class="judul">{{$book -> judul}}</h1>
                    <span class="penulis badge bg-warning">{{$book -> penulis}}</span>
                    <p class="jumlah-halaman">Jumlah Halaman: {{$book -> jumlah_halaman}}</p>
                    <span class="tahun-terbit">Tahun Terbit: {{$book -> tahun_terbit}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection