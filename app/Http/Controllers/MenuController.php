<?php

namespace App\Http\Controllers;

use App\Models\makanan;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {

        // eloquent

        $makanan = makanan::all();

        return view('menu', [
            'data' => $makanan,
        ]);
    }

    public function add()
    {
        return view('form_menu');
    }

    public function edit($id)
    {
        $makanan = makanan::find($id);

        return view('form_menu', [
            'data' => $makanan
        ]);
    }

    public function save(Request $req)
    {
        // dd($req);
        $old_kode = @$req->old_kode;

        if ($old_kode)
        {
            // mode edit

            // eloquent
            makanan::where('kode_makanan', $old_kode)->update([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket,
            ]);
        }
        else
        {
            // mode add

            // eloquent

            makanan::create([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket,
            ]);
        }

        return redirect('/menu');
    }

    public function delete($id)
    {
        makanan::find($id)->delete();

        return redirect('/menu');
    }

}

