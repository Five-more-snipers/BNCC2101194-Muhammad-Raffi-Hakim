@extends('layout/app')

@section('title', 'Manage Book')

@section('content')
  <div class="container">
      <div class="col-md-12 manage-wrapper bg-dark lighttext mt-2">
        <h3><i class="uil uil-wrench"></i> Manage Books</h3>
        <p>
            Disini anda dapat mengatur data-data buku yang ada.
            Selamat bersenang-senang!
        </p>
        <a href="{{url('book/create')}}" class="btn btn-warning mb-2"><i class="uil uil-plus-square"></i> Add Book</a>
        @if(session()->has('status_success'))
          <div class="alert alert-success" role="alert">
            <i class="uil uil-check-circle"></i>{{session('status_success')}}
          </div>
        @endif
        <table class="table table-hover table-secondary table-striped tblbdr">
            <thead>
              <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Jumlah Halaman</th>
                <th>Tahun Terbit</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
                @php $nox = 1; @endphp
                @foreach($books as $book)
                    <tr>
                        <td>{{$nox++}}</td>
                        <td>{{$book -> judul}}</td>
                        <td>{{$book -> penulis}}</td>
                        <td>{{$book -> jumlah_halaman}}</td>
                        <td>{{$book -> tahun_terbit}}</td>
                        <td>
                          <a href="{{url ('book/'.$book->id)}}" class="btn btn-warning btn-sm">
                            <i class="uil uil-edit-alt"></i> Edit</a>

                          <a href="#" class="btn btn-danger btn-sm"
                            onclick="event.preventDefault();document.getElementById('delete-form-{{$book->id}}').submit();">
                            
                            <i class="uil uil-edit-alt"></i> Delete</a>
                            <form id="delete-form-{{$book->id}}"
                              action="{{url ('book/'. $book->id)}}"
                              method="POST"
                              style="display: none;">
                              @csrf
                              @method('DELETE')
                            </form>
                        </td>
                    <tr>
                @endforeach
            </tbody>
          </table>   
      </div>
  </div>
@endsection