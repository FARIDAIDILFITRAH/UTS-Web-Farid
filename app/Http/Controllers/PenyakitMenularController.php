<?php

namespace App\Http\Controllers;

use App\Models\PenyakitMenular;
use App\Http\Requests\PenyakitMenularRequest;
use Illuminate\Http\Request;

class PenyakitMenularController extends Controller
{
    public function index (){
        $penyakit = PenyakitMenular::get();
        return view ('index', compact('penyakit'));
    }

    public function tambah (){
        return view ('tambah');
    }

    public function edit ($id){
        $penyakit = PenyakitMenular::where('id', $id)->first();
        return view ('edit', compact('penyakit'));
    }

    public function lihat ($id){
        $penyakit = PenyakitMenular::where('id', $id)->first();
        return view ('lihat', compact('penyakit'));
    }

    public function store (PenyakitMenularRequest $request){
        $penyakit = new PenyakitMenular();

        $penyakit->NamaPenyakit = $request->NamaPenyakit;
        $penyakit->TotalPenyakit = $request->TotalPenyakit;
        $penyakit->GejalaPenyakit = $request->GejalaPenyakit;
        $penyakit->PengobatanPenyakit = $request->PengobatanPenyakit;
        $penyakit->PenyebabPenyakit = $request->PenyebabPenyakit;

        $penyakit->save();

        return redirect('/');
    }

    public function update(PenyakitMenularRequest $request, $id){
        $penyakit = PenyakitMenular::where('id', $id)->first();

        $penyakit->NamaPenyakit = $request->NamaPenyakit;
        $penyakit->TotalPenyakit = $request->TotalPenyakit;
        $penyakit->GejalaPenyakit = $request->GejalaPenyakit;
        $penyakit->PengobatanPenyakit = $request->PengobatanPenyakit;
        $penyakit->PenyebabPenyakit = $request->PenyebabPenyakit;

        $penyakit->update();

        return redirect('/');
    }


    public function hapus($id){
        $penyakit = PenyakitMenular::where('id', $id)->first();

        $penyakit->delete();

        return redirect('/');
    }
    
}
