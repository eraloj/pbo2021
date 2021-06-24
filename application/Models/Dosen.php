<?php

namespace App\Model;

require_once('Pengguna.php');

Class Dosen extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $no_tlp;

    public function validasiMahasiswa(){

    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }
    public function getNip()
    {
        return $this->nip;
    }
    public function setNama($nama){
        $this->nip = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function presensiMasuk(){
        
    }

}
