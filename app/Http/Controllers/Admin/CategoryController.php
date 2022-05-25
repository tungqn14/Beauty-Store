<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\BaseController;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $repository;

    public function __construct(CategoryService $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view("admin.categories.index");
    }

}
