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
        $data ['product'] = $this->product->findAll();
        return view('product', $data);
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

    public function save()
    {
        $data = [
            'code' => $this->request->getVar('code'),
            'name' => $this->request->getVar('name'),
            'quantity' => $this->request->getVar('quantity'),
        ];
        $this->product->save($data);
        return redirect()->to('/product');
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');

    }
}
