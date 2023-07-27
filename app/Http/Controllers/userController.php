<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal_sharing;
use App\Models\acaras;
use App\Models\kategori;

class userController extends Controller
{
    public function index($id) {
        // $jadwal_sharings = jadwal_sharing::all();
        $data = kategori::join('agendas', 'kategoris.id', '=', 'agendas.id_kategori')->get();
        $data_sharing = jadwal_sharing::find($id);
        $aja = jadwal_sharing::where('id', $id)->get();

        return view('pages.user', ['data' => $data, 'data_sharing' => $data_sharing, 'aja' => $aja]);
    }
}
