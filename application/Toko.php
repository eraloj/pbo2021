<?php

namespace App;

use App\Penjual;

class Toko  
{
    private $id;
    private $nama;
    private $penjual;

    function __construct($id, $nama)
    {
        $this->id = $id;
        $this->nama = $nama;
    }

    public function setPenjual(Penjual $penjual)
    {
        $this->penjual = $penjual;
    }

    public function getPenjual()
    {
        return $this->penjual;
    }
}