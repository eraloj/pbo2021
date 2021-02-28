<?php
require_once 'Mahasiswa.php';
class MahasiswaBaru extends Mahasiswa
{
    public $no_regis;
    function __construct($nim,$nama,$tgl,$jk,$nrg){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
        $this->no_regis = $nrg;
}
}
?>
