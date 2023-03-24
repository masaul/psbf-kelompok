<?php

namespace App\Controllers;

use App\Models\Students as Students;

class Home extends BaseController
{
    public function index()
    {
        
        $db = new Students();
        $query = $db->getData();
        foreach ($query->getResultArray() as $data) {
            $data['nama_murid'];
            $data['usia'];
            $data['alamat'];
        }
        $data['about'] = 'Muhammad Aulia Faqihuddin (20-027)';
        $data['judul'] = "Pemrograman Sistem Berbasis Framework";

        return view('home', $data);
    }
    // public function index(){
    //     echo 'Hello World!';
    // }
}
