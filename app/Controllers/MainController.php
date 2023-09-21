<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class MainController extends BaseController
{
    private $product;
    private $category;
    
    public function __construct(){
        $this->product = new \App\Models\ProductModel();
        $this->category = new \App\Models\CategoryModel();
    }
    
    public function index()
    {
        $data['products'] = $this->product->findAll();
        $data['category'] = $this->category->findAll();
        return view('index', $data);
    }
}