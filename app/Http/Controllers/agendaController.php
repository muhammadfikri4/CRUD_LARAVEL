<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\kategori;
use App\Models\agendas;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class agendaController extends Controller
{
    public function index() {
        $acaras = agendas::all();
        return view('pages.agenda', ['acaras' => $acaras]);
    }

    public function createView(Request $request) {

        $kategoris = kategori::all();
        return view('dashboard.create.tambahAcara', ['request' => $request, 'kategoris' => $kategoris]);
    }

    public function create(Request $request) {
        // dd($request);
        $validasi = $request->validate([
            'title' => 'required|max:255',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg|max:4096',
            'jadwal' => 'required',
            'tempat' => 'required'
        ], $message = [
            'title' => 'Title Wajib Diisi dan Tidak Bisa Lebih Dari 255 huruf!',
            'deskripsi' => 'Deskripsi Wajib Diisi!',
            'id_kategori' => 'Kategori Wajib diisi!',
            'image' => 'Gambar Wajib Ada Dengan Format JPEG/JPG/PNG dan Tidak Bisa Lebih Dari 4MB!',
            'jadwal' => 'Jadwal Wajib Diisi',
            'tempat' => 'Tempat Wajib Diisi!'
        ]);

        if($validasi) {
            $request->file('image') ? $validasi['image'] = $request->file('image')->store('agendas-image') : '';
            agendas::create($validasi);
            Alert::success('Berhasil!', 'Berhasil Menambahkan Acara!');
            return redirect('dashboard');
        } else {
            return redirect('tambah')->back()->withErrors($message);
        }
    }

    public function updateView($id) {
        $kategoris = kategori::all();
        $acara = agendas::where('id', $id)->get();
        return view('dashboard.update.updateAcara', ['kategoris' => $kategoris, 'acara' => $acara]);
    }




    public function update(Request $request, $id) {
        $validasi = $request->validate([
            'title' => 'required|max:255',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg|max:4096',
            'jadwal' => 'required',
            'tempat' => 'required'
        ], $message = [
            'title' => 'Title Wajib Diisi dan Tidak Bisa Lebih Dari 255 huruf!',
            'deskripsi' => 'Deskripsi Wajib Diisi!',
            'id_kategori' => 'Kategori Wajib diisi!',
            'image' => 'Gambar Wajib Ada Dengan Format JPEG/JPG/PNG dan Tidak Bisa Lebih Dari 4MB!',
            'jadwal' => 'Jadwal Wajib Diisi',
            'tempat' => 'Tempat Wajib Diisi!'
        ]);

        if($validasi) {
            if($request->file('image')) {
                if($request->oldImg) {
                    $validasi['image'] = $request->file('image')->store('agendas-image');
                    Storage::delete($request->oldImg);
                    agendas::where('id', $id)->update($validasi);
                    Alert::success('Berhasil!', 'Berhasil Mengubah Data Acara!');
                return redirect('dashboard');
                }
            }
        } else {
            return redirect('tambah')->back()->withErrors($message);
        }
    }

    public function destroy($id) {
        // dd($request->oldImg);
        $agenda_data = agendas::find($id);
        Storage::delete($agenda_data['image']);
        agendas::where('id', $id)->delete();

        Alert::success('Berhasil!', 'Berhasil Menghapus Acara!');
        return redirect('dashboard');
    }

}
