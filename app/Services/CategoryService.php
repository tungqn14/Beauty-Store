<?php
namespace App\Services;

use App\RepositoryInterface\CategoryRepositoryInterface;

class CategoryService {

    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    

}
