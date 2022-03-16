<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAll();
        return view('backend.category.list', compact('categories'));
    }

<<<<<<< HEAD
=======

>>>>>>> fd6486c51b1258f60ef5ab6e32240b5f2c20dee6
    public function create()
    {
        return view('backend.category.create');
    }

<<<<<<< HEAD
=======

>>>>>>> fd6486c51b1258f60ef5ab6e32240b5f2c20dee6
    public function store(Request $request)
    {
        $this->categoryRepository->store($request);
        return redirect()->route('category.index');
    }


    public function show($id)
    {
        $category = $this->categoryRepository->getById($id);
        return view('backend.category.detail', compact('category'));
    }


    public function edit($id)
    {
        $category = $this->categoryRepository->getById($id);
        return view('backend.category.update',compact('category'));
    }

<<<<<<< HEAD
=======

>>>>>>> fd6486c51b1258f60ef5ab6e32240b5f2c20dee6
    public function update(Request $request, $id)
    {
        $this->categoryRepository->update($request,$id);

        return redirect()->route('category.index');
    }


    public function destroy($id)
    {
        $this->categoryRepository->deleteById($id);
        return redirect()->route('category.index');
    }
}
