<?php 
namespace App;

use App\Minuman;

class Teh implements Minuman{
    public function buat (){
        echo"Masukkan 1 teh celup , gula secukupnya , dan air panas dalam 1 gelas<br/>";
        echo"aduk hingga gula mencair ";
        echo"tunggu hingga dingin<br/>";
    }
    public function minum(){
        echo"nikmati teh yang sudah anda buat";
    }

    
    public function tambahSusu(){
        echo "tambahkan pada teh maka berubah menjadi teh susu";
    }

}