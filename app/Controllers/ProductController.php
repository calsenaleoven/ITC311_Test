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
        return view('product');
    }

    public function products($product)
    {
        echo $product;
    }
}
