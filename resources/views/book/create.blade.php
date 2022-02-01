@extends('layout/app')

@section('title', 'Create Game')

@section('content')
<div class="container mt-2">
    <div class="col-md-8 manage-wrapper bg-light me-1">
      <h3><i class="uil uil-focus-add"></i> Creating Book</h3>
      <p>
          Masukkan data buku dengan benar dan tepat! Data anda
          akan diakses oleh banyak orang.
      </p>
      <form action="{{url('book/create')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Judul Buku</label>
          <input type="text" class="form-control @error ('judul') is-invalid @enderror
          placeholder="Masukkan Judul Game"
          name="judul" value="{{old('judul')}}">
          @error('judul') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label @error('penulis') is-invalid @enderror">Penulis</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Penulis"
            name="penulis" value="{{old('penulis')}}">
            @error('penulis') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label @error('jumlah_halaman') is-invalid @enderror">Jumlah Halaman</label>
            <input type="number" class="form-control" placeholder="Masukkan Jumlah Halaman"
            name="jumlah_halaman" value="{{old('jumlah_halaman')}}">
            @error('jumlah_halaman') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label @error('tahun_terbit') is-invalid @enderror">Tahun Terbit</label>
            <input type="number" class="form-control" placeholder="Masukkan Tahun Terbit"
            name="tahun_terbit" value="{{old('tahun_terbit')}}">
            @error('tahun_terbit') <small class="text-danger">{{$message}}</small> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>
@endsection