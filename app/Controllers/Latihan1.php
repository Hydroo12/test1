<?php

namespace App\Controllers;

use App\Models\Penambahan;

class Latihan1 extends BaseController
{
    public function add($n1, $n2)
    {
        $modelPenambahan = new Penambahan();
        $hasil = $modelPenambahan->add($n1, $n2);

        return view('latihan-view', ['hasil' => $hasil]);
    }
}
