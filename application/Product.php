<?php
namespace application'
class Product  
{
    protected $_type = 'Book';

    public function setProductType($type) {
        $this->_type = $type;
    }

    public function getProductType()
    {
        return $this->_type;
    }


}