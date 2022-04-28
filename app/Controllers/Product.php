<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_products') ? $this->request->getVar('page_products') : 1;

        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $search2 = $this->productModel->search($keyword);
        } else {
            $search2 = $this->productModel;
        }

        $data = [
            'title' => 'Our Products',
            'products' => $search2->paginate(3, 'products'),
            'pager' => $this->productModel->pager,
            'currentPage' => $currentPage
        ];

        return view('pages/product', $data);
    }
}
