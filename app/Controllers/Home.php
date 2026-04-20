<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Data yang dikirim ke view (termasuk deteksi URL untuk Navbar aktif)
        $data = [
            'title' => 'CAMPO - Beranda',
            'uri'   => service('uri')->getSegment(1) // Mengambil nama rute dari URL
        ];
        
        // Memanggil file app/Views/pages/beranda.php
        return view('pages/beranda', $data);
    }
    public function venue()
    {
        $data = [
            'title' => 'CAMPO - Daftar Venue',
            'uri'   => service('uri')->getSegment(1)
        ];
        
        return view('pages/venue', $data);
    }
    public function masuk()
    {
        $data = [
            'title' => 'CAMPO - Masuk',
            'uri'   => service('uri')->getSegment(1)
        ];
        
        return view('pages/masuk', $data);
    }
    public function detail()
    {
        $data = [
            'title' => 'CAMPO - Detail Venue',
            'uri'   => service('uri')->getSegment(1)
        ];
        
        return view('pages/detail', $data);
    }
}
