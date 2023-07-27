<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agendas;
use App\Models\kategori;
use App\Models\angkatans;
use App\Models\anggotas;
use App\Models\jadwal_sharing;
use App\Models\artikels;

class dashboardController extends Controller
{
    public function index () {
        $acarasCount = agendas::all();
        $anggotasCount = anggotas::all();
        $artikelsCount = artikels::all();
        $jadwalSharingCount = jadwal_sharing::all();
        $angkatans = angkatans::all();
        $kategoris = kategori::all();
        $anggotas = angkatans::join('anggotas', 'angkatans.id', '=', 'anggotas.id_angkatan')->get();
        $jadwal_sharings = kategori::join('jadwal_sharings', 'kategoris.id', '=', 'jadwal_sharings.id_kategori')->get();
        $acara = kategori::join('agendas', 'kategoris.id', '=', 'agendas.id_kategori')->get();
        $artikels = kategori::join('artikels', 'kategoris.id', '=', 'artikels.id_kategori')->get();
        return view('dashboard.dashboard', [
            'acaras' => $acara,
            'acarasCount' => $acarasCount,
            'anggotasCount' => $anggotasCount,
            'artikelsCount' => $artikelsCount,
            'jadwal_sharings' => $jadwal_sharings,
            'angkatans' => $angkatans,
            'anggotas' => $anggotas,
            'jadwalSharingCount' => $jadwalSharingCount,
            'artikels' => $artikels,
            'kategoris' => $kategoris

        ]);
        }
}
