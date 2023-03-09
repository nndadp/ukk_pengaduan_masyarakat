<?php

namespace App\Http\Controllers;

use App\Models\{Masyarakat, Pengaduan, Petugas, Tanggapan};
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        // if(\Auth::guard('petugas')){
        //     return redirect('home/petugas');
        // }else if(\Auth::guard('masyarakat')){
        //     return redirect('home/masyarakat');
        // }
        return view('home');
    }

    public function dashboard_masyarakat()
    {
        return view('masyarakat.dashboard');
    }
    public function dashboard_petugas()
    {
        $Petugas = Petugas::count();
        $Pengaduan = Pengaduan::count();
        $Masyarakat = Masyarakat::count();
        $Tanggapan = Tanggapan::count();
        $belum = Pengaduan::where('status', '0', 'proses')->count();
        return view('petugas.dashboard', compact('Petugas', 'Pengaduan', 'Masyarakat', 'Tanggapan', 'belum'));
    }
}
