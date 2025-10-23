<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

     public function showDashboard()
    {

        $Satwa = [
            ['nama' => 'Harimau Sumatra', 'spesies' => 'Panthera tigris sumatrae', 'usia' => 5],
            ['nama' => 'Gajah Asia', 'spesies' => 'Elephas maximus', 'usia' => 12],
            ['nama' => 'Orangutan', 'spesies' => 'Pongo pygmaeus', 'usia' => 8],
            ['nama' => 'Komodo', 'spesies' => 'Varanus komodoensis', 'usia' => 7],
            ['nama' => 'Burung Cendrawasih', 'spesies' => 'Paradisaea apoda', 'usia' => 3],
        ];

        $petugas= [
            ['nama' => 'Rudi', 'shift' => 'Pagi'],
            ['nama' => 'Santi', 'shift' => 'Siang'],
            ['nama' => 'Bagus', 'shift' => 'Malam'],
        ];

        
        $totalSatwa = count($Satwa);
        $totalSpesies = count(array_unique(array_column($Satwa, 'spesies')));
        $totalPetugas= count($petugas);

        
        $persediaanPakan = [
            'Daging' => '120 kg',
            'Buah-buahan' => '75 kg',
            'Sayur' => '60 kg',
        ];  

        return view('pages.dashboard', [
            'totalSatwa' => $totalSatwa,
            'totalspesies' => $totalSpesies,
            'totalZookeepers' => $totalPetugas,
            'persediaanPakan' => $persediaanPakan,
            'Satwa' => $Satwa,
            'zookeepers' => $petugas,
        ]);
    }


}
