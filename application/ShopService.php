<?php

namespace App;

use App\Product;

class ShopService  
{
    public function changeProductPrice($price, product $product)
    {
        $product->changePrice($price);
    }
}