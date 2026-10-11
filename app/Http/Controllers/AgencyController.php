<?php

namespace App\Http\Controllers;
use App\Models\TimKreatif;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function home() { return view('page.home'); }
    public function layanan() { return view('page.layanan'); }
    public function tim() { 
        $tims = TimKreatif::all();
        return view('page.tim', compact('tims')); 
    }
    public function kontak() { return view('page.kontak'); }
}

