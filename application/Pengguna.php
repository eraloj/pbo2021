<?php

namespace App;
use App\Penjual;
use App\InfoPengguna;

class Pengguna  
{
    private $id;
    private $name;
    private $penjual = [];
    private $infoPengguna;
    private $alamat;

    function __construct($id, $name, Alamat $alamat)
    {
        $this->id = $id;
        $this->name = $name;
        $this->alamat = $alamat;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($nm)
    {
        $this->name = $nm;
    }

    public function setPenjual(Penjual $pjl)
    {
        $this->penjual[] = $pjl;
    }

    public function setInfoPengguna(InfoPengguna $info_pengguna)
    {
        $this->infoPengguna = $info_pengguna;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPenjual()
    {
        return $this->penjual;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }
}