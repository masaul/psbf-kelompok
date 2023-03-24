<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderVentureM extends Model
{
    public function getData()
    {
        $db = db_connect();
        $sql = 'SELECT * FROM user';
        $query = $db->query($sql);
        return $query;
    }
    public function transaki_models()
    {
        $db = db_connect();
        $sql = 'SELECT * FROM pesanan';
        $query = $db->query($sql);
        return $query;
    }
}
