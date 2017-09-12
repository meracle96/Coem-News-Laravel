<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class DepanController extends Controller
{
    public function index()
    {
    	$beritas = Berita::latest()->paginate(5);
    	return view('front.content.home', compact('beritas'));
    }

    public function beritaDetail($id)
    {
    	$berita = Berita::find($id);
    	return view('front.content.beritadetail', compact('berita'));
    }
}
