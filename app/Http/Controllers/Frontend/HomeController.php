<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseController;
use App\RepositoryInterface\HomeRepositoryInterface;
use Illuminate\Http\Request;


class HomeController extends BaseController
{
    protected $repository;

    public function __construct(HomeRepositoryInterface $repository)
    {
        $this->productRepo = $productRepo;
    }

    public function index()
    {
        return view('site.home.index');
    }

    public function show($id)
    {
        $product = $this->productRepo->find($id);

        return view('home.product', ['product' => $product]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        //... Validation here

        $product = $this->productRepo->create($data);

        return view('home.products');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        //... Validation here

        $product = $this->productRepo->update($id, $data);

        return view('home.products');
    }

    public function destroy($id)
    {
        $this->productRepo->delete($id);
        return view('home.products');
    }
}
