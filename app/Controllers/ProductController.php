<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function index()
    {
        //
    }

    public function product()
    {
        $data = $this->product->findAll();
        echo '<pre>';
        print_r($data);
    }

    public function products($product)
    {
        echo $product;
    }

    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }
}
