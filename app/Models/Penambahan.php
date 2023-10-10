<?php

namespace App\Models;

use CodeIgniter\Model;

class Penambahan extends Model
{
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }
}