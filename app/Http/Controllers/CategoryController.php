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


    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $valition = $request->validate([
            'name'=>'required',
            'description'=>'required',
        ],

            [
                "name.required"=>"Không được để trống",
                "description.required"=>"Không được để trống",

            ]
        );
        $this->categoryRepository->store($request , $valition);
        toastr()->success('Tạo thể loại thánh công ^-^');
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


    public function update(Request $request, $id)
    {
        $this->categoryRepository->update($request,$id);
        toastr()->success('Update thành công');
        return redirect()->route('category.index');
    }


    public function destroy($id)
    {
        $this->categoryRepository->deleteById($id);
        return redirect()->route('category.index');
    }
}
