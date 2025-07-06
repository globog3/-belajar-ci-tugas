<?php

namespace App\Controllers;

use App\Models\ProductModel; 
class Home extends BaseController
{
    protected $product;

    public function _construct()
    {
        helper('form');
        helper('number');
        $this->product = new ProductModel();
    }

    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
        return view('v_home', $data);
    }
}
