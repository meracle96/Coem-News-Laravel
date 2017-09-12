<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('admin');
    }

    public function index()
    {
    	$jlhberita = Berita::count();
    	$jlhuser = User::count();
    	return view('admin.content.home', compact('jlhberita', 'jlhuser'));
    }
}
