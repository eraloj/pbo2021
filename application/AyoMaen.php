<?php 

namespace App;

/**
 * Trait for Ayo Maen
 */

trait AyoMaen{
    public function Maen($name){
        if (is_null($name)){
            echo "Ayo maen<br>";
        } else {
            echo "Ayo maen" .$name. "<br>";
        }
    }
}

