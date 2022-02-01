<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function showcase(){
        $books = book::all();
        return view ('book', compact('books'));
    }
    public function showAllBook(){
        $books = book::all();
        return view ('book/index', compact('books'));
    }
    public function bikin(){
        return view ('book/create');
    }
    public function cred(){
        return view ('book/tentang');
    }
    public function simpan(Request $request){       
        /*validasi*/
        $request -> validate([
            'judul' => 'required|string|min:5|max:20',
            'penulis' => 'required|string|min:5|max:20',
            'jumlah_halaman' => 'required|integer|min:1',
            'tahun_terbit' => 'required|integer|min:2000|max:2021',
        ]);
        //Menambah Data ke tabel buku
        book::create([
            'judul' => $request -> judul,
            'penulis' => $request -> penulis,
            'jumlah_halaman' => $request -> jumlah_halaman,
            'tahun_terbit' => $request -> tahun_terbit,
        ]);
        
        return redirect('book/manage') -> with('status_success', 'Buku berhasil ditambahkan!');
    }
    public function edit($id){
        $book = book::findOrFail($id);
        return view('book/edit', compact('book'));
    }
    public function update(Request $request, $id){
        /*validasi*/
        $request -> validate([
            'judul' => 'required|string|min:5|max:20',
            'penulis' => 'required|string|min:5|max:20',
            'jumlah_halaman' => 'required|integer|min:1',
            'tahun_terbit' => 'required|integer|min:2000|max:2021',
        ]);


        $book = book::findOrFail($id);
        $book ->update([
            'judul' => $request -> judul,
            'penulis' => $request -> penulis,
            'jumlah_halaman' => $request -> jumlah_halaman,
            'tahun_terbit' => $request -> tahun_terbit,
        ]);
        return redirect('book/manage') -> with('status_success', 'Buku berhasil diupdate!');
    }
    public function hapus($id){
       $book = book::findOrFail($id);
       $book->delete();
       return redirect('/book/manage') -> with('status_success', 'Buku berhasil dihapus!');
    }
}
