<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\angkatans;
use RealRashid\SweetAlert\Facades\Alert;

class angkatanController extends Controller
{
    public function createView() {
        return view('dashboard.create.tambahAngkatan');
    }

    public function create(Request $request) {
        $validasi = $request->validate([
            'angkatan' => 'required|max:4'
        ], $message = [
            'angkatan' => 'Harus Diisi dan Tidak Bisa Lebih Dari 4 Digit!'
        ]);

        if($validasi) {
            angkatans::create($validasi);
            Alert::success('Berhasil!', 'Berhasil Menambahkan Angkatan!');
            return redirect('dashboard');
        } else {
            return redirect('tambah-angkatan')->back()->withErrors($message);
        }
    }

    public function updateView($id) {
        $angkatan = angkatans::where('id', $id)->get();
        return view('dashboard.update.updateAngkatan', ['angkatan' => $angkatan]);
    }

    public function update(Request $request ,$id) {
        $validasi = $request->validate([
            'angkatan' => 'required|max:4'
        ], $message = [
            'angkatan' => 'Harus Diisi dan Tidak Bisa Lebih Dari 4 Digit!'
        ]);

        if($validasi) {
            angkatans::where('id', $id)->update($validasi);
            Alert::success('Berhasil!', 'Berhasil Mengubah Data Angkatan!');
            return redirect('dashboard');
        } else {
            return redirect('update-angkatan')->back()->withErrors($message);
        }
    }

    public function destroy($id) {
        angkatans::where('id', $id)->delete();
        Alert::success('Berhasil!', 'Berhasil Menghapus Angkatan!');
        return redirect('dashboard');
    }
}
