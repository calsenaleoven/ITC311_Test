<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel; // Add this line to import the ProductModel

class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }

    public function index()
    {
    
    }

    public function product()
    {
        $data['product'] = $this->product->findAll();
        return view('product', $data);
    }

    public function products($product)
    {
        echo $product;
    }

    public function save()
    {
        $id = $_POST['id'];
        $data = [
            'code' => $this->request->getVar('code'),
            'name' => $this->request->getVar('name'),
            'quantity' => $this->request->getVar('quantity'),
        ];
        if($id!= null){
            $this->product->set($data)->where('id', $id)->update();
        }else{
            $this->product->save($data);
        }
        return redirect()->to('/product');
    }
    

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $data = [
            'product' => $this->product->findAll(),
            'pro' => $this->product->where('id', $id)->first(),
        ];
        return view('product', $data);
    }
}
