<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $productRepository;
    public function __construct(ProductRepository $productRepository)
{
    $this->productRepository=$productRepository;
}

    public function index()
    {
        $products = $this->productRepository->getAll();
        return view('backend.product.list',compact('products'));
    }
    public function create()
    {
//    return view('backend.product');ÁD
    }

    public function store(Request $request)
    {
//    $request->validate([]
    }

    public function show($id)
    {
//        $product=$this->productRepository->getById($id);
//        return view('backend.product.detail')

    }
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
