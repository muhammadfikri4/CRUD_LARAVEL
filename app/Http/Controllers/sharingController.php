<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal_sharing;
use App\Models\kategori;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class sharingController extends Controller
{
    public function index(Request $request){
        $jadwal_sharings = jadwal_sharing::all();
        return view('pages.sharing', ['jadwal_sharing' => $jadwal_sharings,
        'request' => $request]);
    }

    public function createView() {
        $kategoris = kategori::all();
        return view('dashboard.create.tambahSharing', ['kategoris' => $kategoris]);
    }

    public function create(Request $request) {
        $validasi = $request->validate([
            'title' => 'required|max:255',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg|max:4096',
            'jadwal_sharing' => 'required'
        ], $message = [
            'title' => 'Title Wajib Diisi dan Tidak Bisa Lebih Dari 255 huruf!',
            'deskripsi' => 'Deskripsi Wajib Diisi!',
            'id_kategori' => 'Kategori Wajib diisi!',
            'image' => 'Gambar Wajib Ada Dengan Format JPEG/JPG/PNG dan Tidak Bisa Lebih Dari 4MB!',
            'jadwal_sharing' => 'Jadwal Wajib Diisi'
        ]);

        if($validasi) {
            $request->file('image') ? $validasi['image'] = $request->file('image')->store('sharing-image') : '';
            jadwal_sharing::create($validasi);
            Alert::success('Berhasil!', 'Berhasil Menambahkan Jadwal Sharing!');
            return redirect('dashboard');
        } else {
            return redirect('tambah-sharing')->back()->withErrors($message);
        }
    }

    public function updateView($id) {
        $kategoris = kategori::all();
        $jdwsh = jadwal_sharing::where('id', $id)->get();
        return view('dashboard.update.updateSharing', ['jdwsh' => $jdwsh, 'kategoris' => $kategoris]);
    }
    public function update(Request $request, $id) {
        $validasi = $request->validate([
            'title' => 'required|max:255',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg|max:4096',
            'jadwal_sharing' => 'required'
        ], $message = [
            'title' => 'Title Wajib Diisi dan Tidak Bisa Lebih Dari 255 huruf!',
            'deskripsi' => 'Deskripsi Wajib Diisi!',
            'id_kategori' => 'Kategori Wajib diisi!',
            'image' => 'Gambar Wajib Ada Dengan Format JPEG/JPG/PNG dan Tidak Bisa Lebih Dari 4MB!',
            'jadwal_sharing' => 'Jadwal Wajib Diisi'
        ]);

        if($validasi) {
            $request->file('image') ? $validasi['image'] = $request->file('image')->store('sharing-image') : '';
            Storage::delete($request->oldImg);
            jadwal_sharing::where('id', $id)->update($validasi);
            Alert::success('Berhasil!', 'Berhasil Mengubah Data Jadwal Sharing!');
            return redirect('dashboard');
        } else {
            return redirect('tambah-sharing')->back()->withErrors($message);
        }
    }
    public function destroy($id) {
        $sharing_data = jadwal_sharing::find($id);
        Storage::delete($sharing_data['image']);
        jadwal_sharing::where('id', $id)->delete();

        Alert::success('Berhasil!', 'Berhasil Menghapus Jadwal Sharing!');
        return redirect('dashboard');
    }
}
