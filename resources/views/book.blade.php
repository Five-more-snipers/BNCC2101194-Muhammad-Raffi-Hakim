@extends('layout/app')

@section('title', 'Halaman Buku')

@section('content')
    <!--Content-->       
    <div class="container mt-4">
        <h3><i class="uil uil-book-alt"></i> Semua List Buku</h3>
        <hr>
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