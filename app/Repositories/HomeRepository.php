<?php
namespace App\Repositories\Post;

use App\Models\Product;
use App\Repositories\BaseRepository;
use App\Repositories\Product\HomeRepositoryInterface;

class HomeRepository extends BaseRepository implements HomeRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Product::class;
    }

    public function getProduct()
    {
        return $this->model->select('product_name')->take(5)->get();
    }
}
