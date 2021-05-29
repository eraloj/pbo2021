<?php 

namespace App;

/**
 * Trait for say good bye
 */

trait SayGoodBye{
    public function goodBye($name){
        if (is_null($name)){
            echo "Good Bye<br>";
        } else {
            echo "Good Bye" .$name. "<br>";
        }
    }
}