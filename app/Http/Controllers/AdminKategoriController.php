<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class AdminKategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('admin.content.kategori', compact('kategoris'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'nama' => 'required|min:6'
        ]);

        Kategori::create($data);
        $request->session()->flash('success', 'Kategori berhasil disimpan!');
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'nama' => 'required|min:6'
        ]);

        Kategori::find($id)->update($data);
        $request->session()->flash('success', 'Kategori berhasil diupdate!');
        return back();
    }

    public function destroy($id, Request $request)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        $request->session()->flash('success', 'Kategori berhasil dihapus!');
        return back();
    }
}
