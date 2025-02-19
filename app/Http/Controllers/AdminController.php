<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $doctors = [
            ['name' => 'Chris Wood', 'status' => 'Online', 'status_class' => 'bg-success', 'image' => 'assets/img/team/Profile.png'],
            ['name' => 'Jose Leos', 'status' => 'In a meeting', 'status_class' => 'bg-warning', 'image' => 'assets/img/team/profile-picture-2.jpg'],
        ];

        $nurses = [
            ['name' => 'Bonnie Green', 'status' => 'Offline', 'status_class' => 'bg-danger', 'image' => 'assets/img/team/profile-picture-3.jpg'],
            ['name' => 'Neil Sims', 'status' => 'Offline', 'status_class' => 'bg-danger', 'image' => 'assets/img/team/profile-picture-4.jpg'],
        ];

        $articles = [
            ['title' => 'Faktor Risiko Autisme', 'author' => 'Lah kok tanya saya', 'category' => 'Autisme'],
            ['title' => 'Ini Manfaat Sawi Putih untuk Kesehatan', 'author' => 'awokwokwoa', 'category' => 'Diet makanan'],
            ['title' => 'Ini Obat Batuk Pilek Anak Alami Paling Ampuh di Apotek', 'author' => 'saya sendiri', 'category' => 'Obat Batuk'],
            ['title' => 'Ini 7 Rekomendasi Obat Migrain yang Ampuh Atasi Sakit Kepala Sebelah', 'author' => 'fatma', 'category' => 'Obat Migrain'],
        ];

        $icons = [
            [
                'title' => 'Total Karyawan',
                'total' => '345',
                'svg' => '<svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                    </svg>',
                'color' => 'icon-shape-primary'
            ],

            [
                'title' => 'Total Gaji',
                'total' => '43,594',
                'svg' => '<svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                    </svg>',
                'color' => 'icon-shape-secondary'
            ],

            [
                'title' => 'Total Artikel',
                'total' => '50.88%',
                'svg' => '<svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>',
                'color' => 'icon-shape-success'
            ],
        ];


        return view('admin.home', compact('doctors', 'nurses', 'articles', 'icons'));
    }
}
