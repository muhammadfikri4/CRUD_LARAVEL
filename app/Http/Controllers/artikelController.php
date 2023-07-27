<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\artikels;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class artikelController extends Controller
{
    public function index() {
        $artikels = artikels::all();
        return view('pages.artikel', ['artikels' => $artikels]);
    }
    public function createView() {
        $kategoris = kategori::all();
        return view('dashboard.create.tambahArtikel', ['kategoris' => $kategoris]);
    }

    public function create(Request $request) {
        $validasi = $request->validate([
            'title' => 'required|max:255',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg|max:4096'
        ], $message = [
            'title' => 'Title Wajib Diisi dan Tidak Bisa Lebih Dari 255 huruf!',
            'deskripsi' => 'Deskripsi Wajib Diisi!',
            'id_kategori' => 'Kategori Wajib diisi!',
            'image' => 'Gambar Wajib Ada Dengan Format JPEG/JPG/PNG dan Tidak Bisa Lebih Dari 4MB!'
        ]);

        if($validasi) {
            $request->file('image') ? $validasi['image'] = $request->file('image')->store('artikels-image') : '';
            artikels::create($validasi);
            Alert::success('Berhasil!', 'Berhasil Menambahkan Artikel!');
            return redirect('dashboard');
        } else {
            return redirect('tambah-artikel')->back()->withErrors($message);
        }
    }

    public function updateView($id) {
        $artikel = artikels::where('id', $id)->get();
        $kategoris = kategori::all();
        return view('dashboard.update.updateArtikel', ['artikel' => $artikel, 'kategoris' => $kategoris]);
    }

    public function update(Request $request, $id) {
        $validasi = $request->validate([
            'title' => 'required|max:255',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg|max:4096'
        ], $message = [
            'title' => 'Title Wajib Diisi dan Tidak Bisa Lebih Dari 255 huruf!',
            'deskripsi' => 'Deskripsi Wajib Diisi!',
            'id_kategori' => 'Kategori Wajib diisi!',
            'image' => 'Gambar Wajib Ada Dengan Format JPEG/JPG/PNG dan Tidak Bisa Lebih Dari 4MB!'
        ]);

        if($validasi) {
            if($request->file('image')) {
                if($request->oldImg) {
                    $validasi['image'] = $request->file('image')->store('artikels-image');
                Storage::delete($request->oldImg);
                artikels::where('id', $id)->update($validasi);
                Alert::success('Berhasil!', 'Berhasil Mengubah Data Artikel!');
                return redirect('dashboard');
                }
            }
        } else {
            return redirect('tambah-artikel')->back()->withErrors($message);
        }
    }

    public function destroy($id) {
        $artikel_data = artikels::find($id);
        Storage::delete($artikel_data['image']);
        artikels::where('id', $id)->delete();

        Alert::success('Berhasil!', 'Berhasil Menghapus Artikel!');
        return redirect('dashboard');
    }
}
