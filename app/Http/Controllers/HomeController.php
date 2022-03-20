<?php

namespace App\Http\Controllers;

use App\Repositories\HomeRepository;
use App\Repositories\ProductRepository;

class HomeController
{
    protected $homeRepository;
    protected $productRepository;

    public function __construct(HomeRepository $homeRepository , ProductRepository $productRepository)
    {
        $this->homeRepository = $homeRepository;
        $this->productRepository = $productRepository;
    }

    public function homeDisplay()
    {
        $categoriesHome = $this->homeRepository->categoriesHome();
        $productsHome = $this->homeRepository->productsHome();
        return view('home.home',compact('categoriesHome','productsHome'));
    }

    public function homeDetail($id)
    {
        $productHome = $this->productRepository->getById($id);
        return view('home.homeDetail', compact('productHome'));
    }


}
