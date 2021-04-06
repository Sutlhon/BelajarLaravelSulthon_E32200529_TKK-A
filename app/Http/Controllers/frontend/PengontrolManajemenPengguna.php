<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengontrolManajemenPengguna extends Controller
{
    public function index()
    {
        //return "Halo ini adalah method index, dalam Pengontrol Manajemen Pengguna";
        //return "Method ini nantinya akan digunakan untuk mengambil semua data user";
    $nama = "Sulthon Aufa Athallah";

    $pelajaran = ["Mencintainya","Menghormatinya","Menafkahinya"];

    return view('home', compact('nama','pelajaran'));
    }
  
}