<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use Illuminate\Http\Request;

class TimController extends Controller
{
    // Tambahkan method untuk halaman utama (Route '/')
    public function home()
    {
        return view('page.home'); // Sesuaikan dengan nama file view home Anda
    }

    // Tambahkan method untuk halaman layanan (Route '/layanan')
    public function layanan()
    {
        return view('page.layanan'); // Sesuaikan dengan nama file view layanan Anda
    }

    public function index()
    {
        $tims = Tim::paginate(6);
        
        return view('page.tim', compact('tims'));
    }

    
    public function show($id)
    {
        $tim = Tim::findOrFail($id); 
    
        return view('page.tim-detail', compact('tim'));
    }

    
    public function kontak()
    {
        return view('page.kontak'); 
    }
}