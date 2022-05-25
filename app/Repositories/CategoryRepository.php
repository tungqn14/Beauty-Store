<?php
namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;
use App\RepositoryInterface\CategoryRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return Category::class;
    }


}

