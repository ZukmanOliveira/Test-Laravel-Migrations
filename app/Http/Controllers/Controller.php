<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Egulias\EmailValidator\Warning\TLD;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function test_delete_parent_child_record(Category $category )
    {
        

        $category->delete('categories');
    }
}
