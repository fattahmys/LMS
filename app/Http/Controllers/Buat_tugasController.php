<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Buat_tugasController extends Controller
{
    public function index(){
        // dd();
        return view('kelas/buat_tugas');
    }
}
