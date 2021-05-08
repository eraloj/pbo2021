<?php

namespace App;

use App\Minuman;

class Kopi implements Minuman{
    public function buat (){

        echo"Masak air panas hingga 1100 <br/>";
        echo"masuk kopi ke gelas";  
        echo" aduk sebanyaknya dan diamkan";
        echo" tambahkan gula aren";
    }

    public function minum(){
        echo " diseruput sikit-sikit";
    }
    public function tambahSusu(){
        echo " tambahkan pada kopi";
    }
}