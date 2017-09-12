<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Kategori;
use Auth;
use Session;
use Image;

class AdminBeritaController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        $beritas = Berita::all();
        return view('admin.content.berita', compact('kategoris', 'beritas'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'judul' => 'required|min:6',
            'isi' => 'required',
            'kategori_id' => 'required'
        ]);

        $foto = $request->file('foto');
        $filename = time().'.'.$foto->getClientOriginalExtension();
        Image::make($foto)->resize(300,300)->save( public_path('/uploads/berita/'.$filename));

        $data['foto'] = $filename;

        Auth::user()->beritas()->create($data);
        $request->session()->flash('success', 'Berita berhasil disimpan!');
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
            'judul' => 'required|min:6',
            'isi' => 'required',
            'kategori_id' => 'required'
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time().'.'.$foto->getClientOriginalExtension();
            Image::make($foto)->resize(300,300)->save( public_path('/uploads/berita/'.$filename));
            $data['foto'] = $filename;
        }
       
        Berita::find($id)->update($data);
        $request->session()->flash('success', 'Berita berhasil diupdate!');
        return back();
    }

    public function destroy($id, Request $request)
    {
        $berita = Berita::find($id);
        $berita->delete();
        $request->session()->flash('success', 'Berita berhasil dihapus!');
        return back();
    }
}
