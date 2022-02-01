@extends('layout/app')

@section('title', 'Edit Buku')

@section('content')
<div class="container mt-2">
    <div class="col-md-8 manage-wrapper bg-light me-1">
      <h3><i class="uil uil-edit me-1"></i> Update Book</h3>
      <p>
          Update data buku dengan benar dan tepat! Data anda
          akan diakses oleh banyak orang.
      </p>
      <form action="{{url('book/'.$book->id)}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
          <label class="form-label">Judul Buku</label>
          <input type="text" class="form-control @error ('judul') is-invalid @enderror
          placeholder="Masukkan Judul Game"
          name="judul" value="{{$book->judul}}">
          @error('judul') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label @error('penulis') is-invalid @enderror">Penulis</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Penulis"
            name="penulis" value="{{$book->penulis}}">
            @error('penulis') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label @error('jumlah_halaman') is-invalid @enderror">Jumlah Halaman</label>
            <input type="number" class="form-control" placeholder="Masukkan Jumlah Halaman"
            name="jumlah_halaman" value="{{$book->jumlah_halaman}}">
            @error('jumlah_halaman') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label @error('tahun_terbit') is-invalid @enderror">Tahun Terbit</label>
            <input type="number" class="form-control" placeholder="Masukkan Tahun Terbit"
            name="tahun_terbit" value="{{$book->tahun_terbit}}">
            @error('tahun_terbit') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>
@endsection