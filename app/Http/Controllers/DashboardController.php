<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $Satwa = [
        ['nama' => 'Harimau Sumatra', 'spesies' => 'Panthera tigris sumatrae', 'usia' => 5],
        ['nama' => 'Gajah Asia', 'spesies' => 'Elephas maximus', 'usia' => 12],
        ['nama' => 'Orangutan', 'spesies' => 'Pongo pygmaeus', 'usia' => 8],
        ['nama' => 'Komodo', 'spesies' => 'Varanus komodoensis', 'usia' => 7],
        ['nama' => 'Burung Cendrawasih', 'spesies' => 'Paradisaea apoda', 'usia' => 3],
    ];

    public function showDashboard(Request $request)
    {

        $username = $request->query('username');

        $petugas= [
            ['nama' => 'Secangkir Adit', 'shift' => 'Pagi'],
            ['nama' => 'Sesendok Wildan', 'shift' => 'Siang'],
            ['nama' => 'Semangkuk Fahmi', 'shift' => 'Malam'],
        ];

        $totalSatwa = count($this->Satwa);
        $totalSpesies = count(array_unique(array_column($this->Satwa, 'spesies')));
        $totalPetugas= count($petugas);

        $persediaanPakan = [
            'Daging' => '120 kg',
            'Buah-buahan' => '75 kg',
            'Sayur' => '60 kg',
        ];  

        return view('pages.dashboard', [
            'username' => $username,
            'totalSatwa' => $totalSatwa,
            'totalspesies' => $totalSpesies,
            'totalZookeepers' => $totalPetugas,
            'persediaanPakan' => $persediaanPakan,
            'Satwa' => $this->Satwa,
            'zookeepers' => $petugas,
        ]);
    }

    public function showSatwa()
    {
        return view('pages.kelolaSatwa', [
            'Satwa' => $this->Satwa
        ]);
    }
}
