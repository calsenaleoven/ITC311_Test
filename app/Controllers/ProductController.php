<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index()
    {
        //
    }

    public function product()
    {
        echo 'working';
    }

    public function products($product)
    {
        echo $product;
    }
}
