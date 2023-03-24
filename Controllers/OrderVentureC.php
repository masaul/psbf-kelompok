<?php

namespace App\Controllers;

use App\Models\Students;
use App\Models\OrderVentureM;
use App\Controllers\BaseController;

class OrderVentureC extends BaseController
{
    public function index()
    {
        $db = new OrderVentureM();
        $query = $db->getData();
        foreach ($query->getResultArray() as $data) {
            $data['nama'];
            $data['email'];
            $data['pass'];
            $data['level'];
            $data['username'];
            $data['alamat'];
            $data['no_telp'];
        }
        return view('OrderVenture_V', $data);
    }
    public function transaksi(){
        $db = new OrderVentureM();
        $query = $db->transaki_models();
        foreach ($query->getResultArray() as $dataTransaksi) {
            $dataTransaksi['id_pesanan'];
            $dataTransaksi['id_user'];
            $dataTransaksi['metode_bayar'];
            $dataTransaksi['opsi_kirim'];
            $dataTransaksi['tgl_pesan'];
        }
        return view('transaksi', $dataTransaksi);
    }
}
