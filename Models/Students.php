<?php
namespace App\Models;
use CodeIgniter\Model;
class Students extends Model
{
    public function getData()
    {
        $db = db_connect();
        $sql = 'SELECT * FROM students';
        $query = $db->query($sql);
        return $query;
    }
}