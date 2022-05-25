<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseController;
use Illuminate\Http\Request;


class HomeController extends BaseController
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('site.home.index');
    }

    public function show($id)
    {


        return view('home.product', ['product' => $product]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        //... Validation here



        return view('home.products');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        //... Validation here



        return view('home.products');
    }

    public function destroy($id)
    {

        return view('home.products');
    }
}
