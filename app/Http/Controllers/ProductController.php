<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->getAll();
        return view('backend.product.list', compact('products'));
    }

    public function create()
    {
        return view('backend.product.create');
    }

    public function store(Request $request)
    {
        $this->productRepository->store($request);
        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = $this->productRepository->getById($id);
//        dd($product->category);
        return view('backend.product.detail', compact('product'));

    }

    public function edit($id)
    {
        $product = $this->productRepository->getById($id);
        return view('backend.product.update',compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->productRepository->update($request,$id);
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $this->productRepository->deleteById($id);
        return redirect()->route('products.index');
    }
}
