<?php
namespace App;
class Product  
{
    private $_type = 'Book';
    private $id;
    private $name;
    private $price;

    function __construct($id, $name, $price){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function changePrice($value){
        $this->price = $value;
    }


    public function setProductType($type) {
        $this->_type = $type;
    }

    public function getProductType()
    {
        return $this->_type;
    }


}