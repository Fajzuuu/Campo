<?php

namespace App\Models;

class TiketModel
{
    public function getTiketByKode($kode_tiket)
    {
        //database menggunakan Array (Data Dummy)
        $dummy = [
            '01200011' => [
                'kode_tiket'   => '01200011',
                'tanggal_main' => '2026-10-02',
                'jam_mulai'    => '08:00',
                'jam_selesai'  => '11:00',
                'harga'        => 90000,
            ],
            '01200012' => [
                'kode_tiket'   => '01200012',
                'tanggal_main' => '2026-10-15',
                'jam_mulai'    => '19:00',
                'jam_selesai'  => '21:00',
                'harga'        => 120000,
            ]
        ];

        if (array_key_exists($kode_tiket, $dummy)) {
            return $dummy[$kode_tiket];
        }
        return null; 
    }
}