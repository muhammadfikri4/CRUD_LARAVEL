<?php

namespace App\Http\Controllers;

use App\Models\agendas;
use App\Models\artikels;
use Illuminate\Http\Request;

class detailController extends Controller
{
    public function detailAgenda($id) {
        $agenda = agendas::where('id', $id)->get();
        return view('pages.detailAgenda', ['agenda' => $agenda]);
    }
    public function detailArtikel($id) {
        $artikel = artikels::where('id', $id)->get();
        return view('pages.detailArtikel', ['artikel' => $artikel]);
    }
}
