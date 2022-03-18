<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $productRepository;
    public $categoryRepository;

    public function __construct(ProductRepository $productRepository , CategoryRepository $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $products = $this->productRepository->getAll();
        return view('backend.product.list', compact('products'));
    }

    public function create()
    {
        $categories =$this->categoryRepository->getAll();
        return view('backend.product.create',compact('categories'));
    }

    public function store(Request $request)
    {

        $valition = $request->validate([
            'name'=>'required',
            'title'=>'required',
            'price'=>'required',
            'description'=>'required',
            'category_id'=>'required',
        ],

            [
                "name.required"=>"Không được để trống",
                "title.required"=>"Không được để trống",
                "price.required"=>"Không được để trống",
                "description.required"=>"Không được để trống",
                "category_id.required"=>"Không được để trống",

            ]
        );
        $this->productRepository->store($request,$valition);
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
        $categories =$this->categoryRepository->getAll();
        $product = $this->productRepository->getById($id);
        return view('backend.product.update',compact(['product','categories']));
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
