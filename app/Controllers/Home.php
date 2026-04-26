<?php
namespace App\Controllers;
class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'CAMPO - Beranda',
            'uri'   => service('uri')->getSegment(1)
        ];
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
    public function pembayaran()
    {
        $data = [
            'title' => 'CAMPO - Detail Pembayaran',
            'uri'   => service('uri')->getSegment(1)
        ];        
        return view('pages/pembayaran', $data);
    }
    public function tiket()
    {
        $data = [
            'title' => 'CAMPO - Tiket Berhasil',
            'uri'   => service('uri')->getSegment(1)
        ];       
        return view('pages/tiket', $data);
    }
}
