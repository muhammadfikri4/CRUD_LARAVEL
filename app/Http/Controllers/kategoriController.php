<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use RealRashid\SweetAlert\Facades\Alert;

class kategoriController extends Controller
{
    public function index() {
        return view('dashboard.create.tambahKategori');
    }

    public function create(Request $request) {
        $validasi = $request->validate([
            'name_kategori'=> 'required'
        ],$message = [
            'name_kategori' => 'Nama Kategori Harus Diisi!'
        ]);

        if($validasi) {
            kategori::create($validasi);
            Alert::success('Berhasil!', 'Berhasil Menambah Kategori!');
            return redirect('dashboard');
        } else {
            return redirect('tambahKategori')->back()->withErrors($message);
        }
    }

    public function updateView($id) {
        $kategori = kategori::where('id', $id)->get();
        return view('dashboard.update.updateKategori', ['kategori' => $kategori]);
    }

    public function update(Request $request, $id) {
        $validasi = $request->validate([
            'name_kategori'=> 'required'
        ],$message = [
            'name_kategori' => 'Nama Kategori Harus Diisi!'
        ]);

        if($validasi) {
            kategori::where('id', $id)->update($validasi);
            Alert::success('Berhasil!', 'Berhasil Mengubah Data Kategori!');
            return redirect('dashboard');
        } else {
            return redirect('update-kategori')->back()->withErrors($message);
        }
    }

    public function destroy($id) {
        kategori::where('id', $id)->delete();
        Alert::success('Berhasil!', 'Berhasil Menghapus Kategori!');
        return redirect('dashboard');

    }
}
