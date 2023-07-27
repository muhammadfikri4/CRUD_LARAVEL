<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anggotas;
use App\Models\angkatans;
use RealRashid\SweetAlert\Facades\Alert;


class anggotaController extends Controller
{
    public function createView() {
        $angkatans = angkatans::all();
        return view('dashboard.create.tambahAnggota', ['angkatans' => $angkatans]);
    }

    public function create(Request $request) {
        $validasi = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|min:9|max:10',
            'no_hp' => 'required|max:13',
            'email' => 'required',
            'id_angkatan' => 'required'
        ], $message = [
            'nama' => 'Nama Tidak Boleh Kosong dan Tidak Bisa Lebih Dari 255 huruf!',
            'nim' => 'NIM Tidak Boleh Kosong dan Tidak Bisa Kurang dari 9 Digit atau Lebih dari 10 Digit!',
            'no_hp' => 'Nomor Handphone Tidak Boleh Kosong dan Tida Boleh Lebih dari 13 Digit!',
            'email' => 'Email Tidak Boleh Kosong!',
            'id_angkatan' => 'Angkatan Tidak Boleh Kosong!',
        ]);

        if($validasi) {
            anggotas::create($validasi);
            Alert::success('Berhasil!', 'Berhasil Menambahkan Anggota!');
            return redirect('dashboard');
        } else {
            return redirect('tambah-anggota')->back()->withErrors($message);
        }
    }

    public function updateView($id) {
        $angkatans = angkatans::all();
        $anggota = anggotas::where('id', $id)->get();
        return view('dashboard.update.updateAnggotas', ['angkatans' => $angkatans, 'anggota' => $anggota]);
    }

    public function update(Request $request, $id) {
        $validasi = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|min:9|max:10',
            'no_hp' => 'required|max:13',
            'email' => 'required',
            'id_angkatan' => 'required'
        ], $message = [
            'nama' => 'Nama Tidak Boleh Kosong dan Tidak Bisa Lebih Dari 255 huruf!',
            'nim' => 'NIM Tidak Boleh Kosong dan Tidak Bisa Kurang dari 9 Digit atau Lebih dari 10 Digit!',
            'no_hp' => 'Nomor Handphone Tidak Boleh Kosong dan Tida Boleh Lebih dari 13 Digit!',
            'email' => 'Email Tidak Boleh Kosong!',
            'id_angkatan' => 'Angkatan Tidak Boleh Kosong!',
        ]);

        if($validasi) {
            anggotas::where('id', $id)->update($validasi);
            Alert::success('Berhasil!', 'Berhasil Mengubah Data Anggota!');
            return redirect('dashboard');
        } else {
            return redirect('tambah-anggota')->back()->withErrors($message);
        }
    }

    public function destroy($id) {
        anggotas::where('id', $id)->delete();
        Alert::success('Berhasil!', 'Berhasil Menghapus Anggota!');
        return redirect('dashboard');
    }
}
