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

    public function add()
    {
        $data['category'] = $this->category->findAll();
        return view('add', $data);
    }

    public function save(){
        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'category_id' => $this->request->getVar('category_id'),
            'quantity' => $this->request->getVar('quantity'),
            'price' => $this->request->getVar('price'),
        ];
        $this->product->save($data);
        return redirect()->to('/index');
    }
 
    public function delete($id){
        $this->product->where('product_id', $id)->delete();
        return redirect()->to('/index');
    }
    
    public function edit($id){
        $data['category'] = $this->category->findAll();
        $data['product'] = $this->product->where('product_id', $id)->findAll();
        return view('edit', $data);
        // echo "<pre>";
        // print_r($data);
    }

    public function update($id){
        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'category_id' => $this->request->getVar('category_id'),
            'quantity' => $this->request->getVar('quantity'),
            'price' => $this->request->getVar('price'),
        ];
        $this->product->set($data)->where('product_id', $id)->update();
        return redirect()->to('/edit/'.$id);
    }
    
    public function create_category(){
        $data['category'] = $this->category->findAll();
        return view('create_category', $data);
    }

    public function save_cat(){
    $data = ['category' => $this->request->getVar('category')];
    $this->category->save($data);
        return redirect()->to('/category');

    }

    public function delete_cat($id){
         $this->category->where('category_id',$id)->delete();
         $this->product->where('product_id', $id)->delete();
        return redirect()->to('/category');
    }
}