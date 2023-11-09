<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;

class PresensiController extends Controller
{
    public function index() {
        return view('form');
    }

    public function presensi(Request $request) {
        $presensi = new Presensi;
        $presensi->name = $request->name;
        $presensi->division = $request->division;
        if($request->custom_switch_checkbox == 'on'){
            $presensi->type = 'out';
        }else{
            $presensi->type = 'in';
        }
        $presensi->save();

        return redirect('/')->with('success', 'Presensi berhasil disimpan!');
    }
}
