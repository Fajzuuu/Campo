<?php
namespace App\Controllers;
use App\Models\TiketModel;

class Tiket extends BaseController
{
    public function index($kode_tiket = '01200011')
    {
        $tiketModel = new TiketModel();
        
        $dataTiket = $tiketModel->getTiketByKode($kode_tiket);

        if (empty($dataTiket)) {
            return "Tiket tidak ditemukan";
        }
        $data = [
            'tiket' => $dataTiket
        ];
        return view('tiket', $data);
    }
}